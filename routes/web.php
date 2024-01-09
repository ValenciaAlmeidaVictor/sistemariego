<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\InvernaderoController;
use App\Http\Controllers\CamaController;
use App\Http\Controllers\SensoreController;
use App\Http\Controllers\TipoSensoreController;
use App\Http\Controllers\CamasSensoreController;
use App\Http\Controllers\EstadoController;


Route::get('/', function () {
    // Redirige a la página de inicio de sesión si el usuario no está autenticado
    if (auth()->guest()) {
        return redirect()->route('login');
    }

    // Si el usuario está autenticado, redirige a la página de inicio (dashboard)
    return redirect()->route('dashboard');
})->middleware('guest');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
    return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
    return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
    Route::get('posts', function () {
		return view('posts.index');
	})->name('posts');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});


//rutas para el controlleer de las tablas del admin //

Route::group(['middleware' => 'auth'], function (){
	
    Route::resource('invernaderos',InvernaderoController::class);

    Route::resource('camas',CamaController::class,);

    Route::resource('sensores',SensoreController::class);

    Route::resource('tipo-sensores',TipoSensoreController::class);

    Route::resource('camas-sensores',CamasSensoreController::class);

    Route::resource('estados',EstadoController::class);

    Route::resource('tipos-cultivos',App\Http\Controllers\TiposCultivoController::class);

	Route::resource('cultivos',App\Http\Controllers\CultivoController::class);

	Route::resource('cultivos-camas',App\Http\Controllers\CultivosCamaController::class);

	Route::resource('tipos-disps-intels',App\Http\Controllers\TiposDispsIntelController::class);

	Route::resource('disps-intels',App\Http\Controllers\DispsIntelController::class);

	Route::resource('histos-disps-intels',App\Http\Controllers\HistosDispsIntelController::class);

	Route::resource('lecturas-sensores',App\Http\Controllers\LecturasSensoreController::class);

	Route::resource('Humedad',App\Http\Controllers\APIController::class);

	Route::resource('roles',App\Http\Controllers\RoleController::class);

	Route::resource('permissions',App\Http\Controllers\PermissionController::class);
});


Route::middleware(['can:users.index'])->group(function () {
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
});
Route::middleware(['can:users.edit'])->group(function () {
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
	Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
});

Route::get('/auth/redirect',[AuthController::class,'redirect'])->name('auth.redirect');
 
Route::get('/auth/callback',[AuthController::class,'callback'])->name('auth.callback');