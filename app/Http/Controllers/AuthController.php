<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function callback()
    {
        $user = Socialite::driver('facebook')->user();

      /* $user = User::create([
            'name'=>$user->getName(),
            'email'=>$user->getEmail(),
        ]);*/
        $user = User::firstOrCreate([
            'email'=>$user->getEmail(),
        ],[
            'name'=>$user->getName(),
        ]);
        auth()->login($user);

        return redirect()->to('/dashboard');
    }

    
}
