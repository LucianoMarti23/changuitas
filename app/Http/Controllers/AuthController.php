<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    
    {

        if (Auth::check()) {
        return redirect('/'); // Redirige a la página de bienvenida
    }
        return view('auth.login');
    }

    // Maneja el inicio de sesión
    public function login(Request $request)
{
    // Valida la entrada
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Intenta autenticar al usuario
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticación exitosa
        $user = Auth::user(); // Obtén el usuario autenticado

        if ($user->role === 'admin') {
            // Redirige al dashboard si el usuario es admin
            return redirect('admin/dashboard');
        } else {
            // Verifica si el perfil del usuario está completo
            if (!$user->profile_complete) {
                // Si no está completo, redirige a la página para completar el perfil
                $request->session()->put('user', $user);
                return redirect('/createprofile');
            }

            // Si el perfil está completo, redirige a la página principal o donde desees
            $request->session()->put('user', $user);
            return redirect('/'); // Cambia a la ruta de tu preferencia
        }
    }

    // Si la autenticación falla, redirige de vuelta con un mensaje de error
    return redirect()->back()->withErrors([
        'email' => 'Email o contraseña no coinciden con nuestros registros.',
    ]);
}



    // Maneja el cierre de sesión
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
