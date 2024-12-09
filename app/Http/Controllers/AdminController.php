<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use App\Models\Partida;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios, con sus roles y partidas asociadas
        $usuarios = Usuario::with(['rol', 'partidas'])->get();

        // Pasar los datos a la vista
        return view('admin.prueba', compact('usuarios'));
    }
}
