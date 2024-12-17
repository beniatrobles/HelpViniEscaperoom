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
        $usuarios = Usuario::with(['rol', 'partidas'])->paginate(10);

        // Pasar los datos a la vista
        return view('admin.usuarios', compact('usuarios'));
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.show', compact('usuario'));
    }

    public function confirmarEliminacion($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('admin.confirmarEliminacion', compact('usuario'));
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin.usuarios')->with('success', 'Usuario eliminado correctamente.');
    }

    
    public function create()
    {
        return view('admin.create');  
    }
    
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre_usuario' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required|string|min:3',
            'id_rol' => 'required|exists:rols,id_rol', 
        ]);

        // Crear el usuario
        $usuario = Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'correo' => $request->correo,
            'contraseña' => bcrypt($request->contraseña), 
            'id_rol' => $request->id_rol,  // 
        ]);

        return redirect()->route('admin.usuarios')->with('success', 'Usuario creado exitosamente');

        
    }

    
}
