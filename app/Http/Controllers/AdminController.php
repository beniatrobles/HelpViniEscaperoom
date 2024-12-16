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
        // Obtener todos los roles disponibles para asociarlos con el usuario
        $roles = Rol::all();
        
        // Pasar los roles a la vista 'admin.create'
        return view('admin.create', compact('roles'));
    }
    
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_usuario' => 'required|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required|min:8',
            'rol' => 'required|exists:roles,rol', // El rol debe existir en la tabla roles
        ]);
    
        // Crear un nuevo usuario
        $usuario = new Usuario();
        $usuario->nombre_usuario = $request->input('nombre_usuario');
        $usuario->correo = $request->input('correo');
        $usuario->contraseña = bcrypt($request->input('contraseña')); // Encriptar la contraseña
        $usuario->save(); // Guardar el usuario en la tabla usuarios
    
        // Asociar el rol al usuario
        $rol = new Rol();
        $rol->id_usuario = $usuario->id_usuario; // Relacionar con el ID del nuevo usuario
        $rol->rol = $request->input('rol');
        $rol->save(); // Guardar el rol en la tabla roles
    
        return redirect()->route('admin.usuarios')->with('success', 'Usuario creado con éxito.');
    }
    

    
}
