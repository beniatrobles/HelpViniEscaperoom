<!-- resources/views/usuario/create.blade.php -->
@extends('layouts.app')

@section('title', 'Agregar Usuario')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Crear Nuevo Usuario</h1>
        <!-- Formulario para crear un nuevo usuario -->
        <form action="{{ route('admin.store') }}" method="POST" class="bg-white p-6 shadow-md rounded-lg" enctype="multipart/form-data">
            @csrf
        
            <div class="mb-4">
                <label for="nombre_usuario" class="block text-gray-700">Nombre de Usuario</label>
                <input 
                    type="text" 
                    name="nombre_usuario" 
                    id="nombre_usuario"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('nombre_usuario') }}" 
                    required
                >
                @error('nombre_usuario')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="correo" class="block text-gray-700">Correo</label>
                <input 
                    type="email" 
                    name="correo" 
                    id="correo"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('correo') }}" 
                    required
                >
                @error('correo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="rol" class="block text-gray-700">Rol</label>
                <select 
                    name="id_rol" 
                    id="rol" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required
                >
                    <option value="3" {{ old('id_rol') == 3 ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ old('id_rol') == 2 ? 'selected' : '' }}>Usuario</option>
                    <option value="1" {{ old('id_rol') == 1 ? 'selected' : '' }}>Invitado</option>
                </select>
                @error('id_rol')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="contrasena" class="block text-gray-700">Contraseña</label>
                <input 
                    type="password" 
                    name="contrasena" 
                    id="contrasena"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('contrasena') }}" 
                    required
                >
                @error('contrasena')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Campo para subir el avatar -->
            <div class="mb-4">
                <label for="avatar" class="block text-gray-700">Avatar</label>
                <input 
                    type="file" 
                    name="avatar" 
                    id="avatar"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    accept="image/*"
                >
                @error('avatar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-6 text-right">
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200"
                >
                    Crear Usuario
                </button>
                <x-cancel-button url="{{ route('admin.usuarios') }}">
                    Cancelar
                </x-cancel-button>
            </div>
        </form>
    </div>
@endsection
