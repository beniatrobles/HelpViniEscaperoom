<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function registro(Request $request)
    {

        $requestt = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|string|email|unique:usuarios,correo',
            'pass' => 'required|string',
        ]);


        $user = Usuario::create([
            'nombre_usuario' => $requestt['nombre'],
            'correo' => $requestt['email'],
            'contraseña' => Hash::make($requestt['pass']),
        ]);
        

        /* Se puede autenticar al usuario de una vez y desde el comente de registro
        redirigirlo al inicio, pero en este caso quiero redirigirlo a la página de
        inicio de sesión

        Utilizar la siguiente linea si se quiere autenticar luego de registrar

        Auth::loginUsingId($user);

        */

        return response()->json([], 200);
    }
}
