<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Log;

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
        // Definir las reglas de validación
        $rules = [
            'correo' => 'required|email|unique:usuarios,correo',
            'nombre_usuario' => 'required|string|max:255',
            'contrasena' => 'required|min:3',
            'id_rol' => 'required|integer',
        ];

        // Definir los mensajes personalizados para las validaciones
        $messages = [
            'correo.unique' => 'Este correo electrónico ya está registrado.',
            'correo.required' => 'El correo electrónico es obligatorio.',
            'correo.email' => 'Por favor, ingresa un correo electrónico válido.',
            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'contrasena.required' => 'La contraseña es obligatoria.',
            'contrasena.min' => 'La contraseña debe tener al menos 3 caracteres.',
            'id_rol.required' => 'El rol es obligatorio.',
        ];

        // Validar la solicitud con las reglas y mensajes
        $validator = Validator::make($request->all(), $rules, $messages);

        // Si la validación falla, redirigir con los errores
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Crear el nuevo usuario si la validación pasa
        Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'correo' => $request->correo,
            'contrasena' => bcrypt($request->contrasena),
            'id_rol' => $request->id_rol,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('admin.usuarios')->with('success', 'Usuario creado con éxito.');
    }

    public function edit($id_usuario)
{
    $usuario = Usuario::findOrFail($id_usuario);
    $roles = Rol::all();
    return view('admin.edit', compact('usuario', 'roles'));
}

public function update(Request $request, $id_usuario)
{
    

    $request->validate([
        'nombre_usuario' => 'required|string|max:255',
        'correo' => 'required|email|unique:usuarios,correo,' . $id_usuario . ',id_usuario',
        'contrasena' => 'nullable|string|min:3', 
        'id_rol' => 'required|exists:rols,id_rol',
    ]);

    
    $usuario = Usuario::findOrFail($id_usuario);
    $usuario->nombre_usuario = $request->nombre_usuario;
    $usuario->correo = $request->correo;
    if ($request->filled('contraseña')) {
        $usuario->contrasena = bcrypt($request->contrasena);
    }
    $usuario->id_rol = $request->id_rol;
    $usuario->save();
   
    return redirect()->route('admin.usuarios')->with('success', 'Usuario actualizado correctamente');
}

    
}
