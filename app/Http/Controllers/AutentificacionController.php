<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentificacionController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required|min:3',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->contrasena])) {
            // Obtener el usuario autenticado
            $usuario = Auth::user();

            // Verificar si el rol del usuario es 3 (administrador)
            if ($usuario->id_rol != 3) {
                // Si no tiene el rol adecuado, cerrar sesión y redirigir
                Auth::logout();
                return redirect()->route('login.form')->withErrors(['error' => 'Acceso denegado. No tienes permisos para acceder a esta página.']);
            }

            // Si la autenticación es exitosa y el rol es el adecuado, redirigir al admin
            return redirect()->intended('/admin/usuarios');  // Ruta que los admin pueden ver
        }

        // Si la autenticación falla, redirigir de vuelta con un error
        return back()->withErrors(['error' => 'Las credenciales no son correctas']);
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();  // Cerrar la sesión del usuario

        // Redirigir al usuario a la página de login
        return redirect()->route('login.form');
    }
}

