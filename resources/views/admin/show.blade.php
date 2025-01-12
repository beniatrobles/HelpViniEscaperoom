<!-- resources/views/usuario/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalles del Usuario')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Detalles del Usuario</h1>

        <div class="bg-white p-6 shadow-lg rounded-lg">
            <div class="flex items-center space-x-4 mb-6">
                @if ($usuario->avatar_ruta)
                    <img src="{{ asset('storage/' . $usuario->avatar_ruta) }}" alt="Avatar" class="w-24 h-24 rounded-full">
                @else
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="w-24 h-24 rounded-full">
                @endif
                <div>
                    <p><strong>ID:</strong> {{ $usuario->id_usuario }}</p>
                    <p><strong>Nombre de Usuario:</strong> {{ $usuario->nombre_usuario }}</p>
                    <p><strong>Correo:</strong> {{ $usuario->correo }}</p>
                    <p><strong>Rol:</strong> {{ $usuario->rol ? $usuario->rol->rol : 'No asignado' }}</p>
                </div>
            </div>
            <x-cancel-button url="{{ route('admin.usuarios') }}">
                Volver
            </x-cancel-button>
        </div>
    </div>
@endsection
