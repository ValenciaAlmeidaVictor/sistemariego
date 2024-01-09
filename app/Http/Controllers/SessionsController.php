<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (empty($request->input('g-recaptcha-response'))) {
            return redirect()->route('login')
                ->with('error', '<span style="color: red;">Por favor, complete el reCAPTCHA.</span>')
                ->withInput();
        }

        // Realizar la verificación del reCAPTCHA
        $ip = $_SERVER['REMOTE_ADDR'];
        $captchat = $request->input('g-recaptcha-response');
        $secretkey = "6LfY1AIpAAAAADhTkSomZsO_CuL-sep3DqU2tfF0";
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captchat&remoteid=$ip";
        $respuesta = file_get_contents($url);
        // Resto de tu código para la verificación del reCAPTCHA
        $atributos = json_decode($respuesta, true);

        $user = \App\Models\User::where('email', $attributes['email'])->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
            ]);
        }

        auth()->login($user);

        session()->regenerate();

        return redirect('/dashboard');
    }

    public function destroy()
{
    auth()->logout();

    return redirect('/')->with('success', 'Sesión cerrada exitosamente.');
}

}
