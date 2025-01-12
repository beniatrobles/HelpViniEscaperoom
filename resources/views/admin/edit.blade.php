@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Editar Usuario</h1>

        <form action="{{ route('admin.usuarios.update', $usuario->id_usuario) }}" method="POST" class="bg-white p-6 shadow-md rounded-lg" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nombre de Usuario -->
            <div class="mb-4">
                <label for="nombre_usuario" class="block text-gray-700">Nombre de Usuario</label>
                <input 
                    type="text" 
                    name="nombre_usuario" 
                    id="nombre_usuario" 
                    value="{{ old('nombre_usuario', $usuario->nombre_usuario) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
            </div>

            <!-- Correo -->
            <div class="mb-4">
                <label for="correo" class="block text-gray-700">Correo</label>
                <input 
                    type="email" 
                    name="correo" 
                    id="correo" 
                    value="{{ old('correo', $usuario->correo) }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
            </div>

            <!-- Rol -->
            <div class="mb-4">
                <label for="rol" class="block text-gray-700">Rol</label>
                <select 
                    name="id_rol" 
                    id="rol" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id_rol }}" {{ $usuario->id_rol == $rol->id_rol ? 'selected' : '' }}>{{ $rol->rol }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Nueva Contraseña -->
            <div class="mb-4">
                <label for="contrasena" class="block text-gray-700">Nueva Contraseña</label>
                <input 
                    type="password" 
                    name="contrasena" 
                    id="contrasena" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            
            <div class="mb-4">
                <label for="avatar" class="block text-gray-700">Foto de Usuario (Avatar)</label>
                <input 
                    type="file" 
                    name="avatar" 
                    id="avatar" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                @if ($usuario->avatar_ruta)
                    <div class="mt-2">
                        <p class="text-gray-600">Imagen actual:</p>
                        <img src="{{ asset('storage/' . $usuario->avatar_ruta) }}" alt="Avatar actual" class="w-20 h-20 rounded-full mt-2">
                    </div>
                @endif
            </div>

            <!-- Botón de enviar y cancelar -->
            <div class="mb-6 text-right">
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200"
                >
                    Actualizar Usuario
                </button>
                <x-cancel-button url="{{ route('admin.usuarios') }}">
                    Cancelar
                </x-cancel-button>
            </div>
        </form>
    </div>
@endsection
