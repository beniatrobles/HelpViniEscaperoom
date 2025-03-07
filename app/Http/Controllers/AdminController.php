<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    
    $usuarios = Usuario::when($search, function ($query, $search) {
        return $query->where('nombre_usuario', 'like', "%$search%");
    })->paginate(10);

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
        if ($usuario->avatar_ruta) {
            Storage::disk('public')->delete($usuario->avatar_ruta);
        }
        $usuario->delete();
        return redirect()->route('admin.usuarios')->with('success', 'Usuario eliminado correctamente.');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validación
        $validator = Validator::make($request->all(), [
            'correo' => 'required|email|unique:usuarios,correo',
            'nombre_usuario' => 'required|string|max:255',
            'contrasena' => 'required|min:3',
            'id_rol' => 'required|integer',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'correo.required' => 'El campo correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección de correo válida.',
            'correo.unique' => 'Este correo ya está registrado.',
            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'nombre_usuario.string' => 'El nombre de usuario debe ser una cadena de texto.',
            'nombre_usuario.max' => 'El nombre de usuario no puede exceder los 255 caracteres.',
            'contrasena.required' => 'La contraseña es obligatoria.',
            'contrasena.min' => 'La contraseña debe tener al menos 3 caracteres.',
            'id_rol.required' => 'El rol es obligatorio.',
            'id_rol.integer' => 'El rol debe ser un número entero.',
            'avatar.image' => 'El avatar debe ser una imagen.',
            'avatar.mimes' => 'El avatar debe ser un archivo de tipo: jpeg, png, jpg, gif.',
            'avatar.max' => 'El avatar no puede pesar más de 2MB.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');
        }

        // Crear usuario
        Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'correo' => $request->correo,
            'contrasena' => bcrypt($request->contrasena),
            'id_rol' => $request->id_rol,
            'avatar_ruta' => $avatarPath,
        ]);

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
        // Validación
        $request->validate([
            'nombre_usuario' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo,' . $id_usuario . ',id_usuario',
            'contrasena' => 'nullable|string|min:3',
            'id_rol' => 'required|exists:rols,id_rol',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'nombre_usuario.string' => 'El nombre de usuario debe ser una cadena de texto.',
            'nombre_usuario.max' => 'El nombre de usuario no puede exceder los 255 caracteres.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección de correo válida.',
            'correo.unique' => 'Este correo ya está registrado.',
            'contrasena.min' => 'La contraseña debe tener al menos 3 caracteres.',
            'id_rol.required' => 'El rol es obligatorio.',
            'id_rol.exists' => 'El rol seleccionado no existe.',
            'avatar.image' => 'El avatar debe ser una imagen.',
            'avatar.mimes' => 'El avatar debe ser un archivo de tipo: jpeg, png, jpg, gif.',
            'avatar.max' => 'El avatar no puede pesar más de 2MB.',
        ]);

        $usuario = Usuario::findOrFail($id_usuario);
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->correo = $request->correo;
        if ($request->filled('contrasena')) {
            $usuario->contrasena = bcrypt($request->contrasena);
        }
        $usuario->id_rol = $request->id_rol;

        // Manejo del avatar
        if ($request->hasFile('avatar')) {
            if ($usuario->avatar_ruta) {
                Storage::disk('public')->delete($usuario->avatar_ruta);
            }
            $avatar = $request->file('avatar');
            $usuario->avatar_ruta = $avatar->store('avatars', 'public');
        }
        $usuario->save();

        return redirect()->route('admin.usuarios')->with('success', 'Usuario actualizado correctamente.');
    }
}
