<!-- resources/views/admin/confirm_delete.blade.php -->
@extends('layouts.app')

@section('title', 'Confirmar Eliminación')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Confirmación de Eliminación</h1>

        <div class="bg-white p-6 border border-gray-200 shadow-lg rounded-lg">
            <p class="text-lg">
                ¿Estás seguro de que deseas eliminar al usuario <strong>{{ $usuario->nombre_usuario }}</strong>?
            </p>
            <p class="mt-2">Correo: {{ $usuario->correo }}</p>
            <p class="mt-2">Rol: {{ $usuario->rol ? $usuario->rol->rol : 'No asignado' }}</p>
            @if ($usuario->avatar_ruta)
                <img src="{{ asset('storage/' . $usuario->avatar_ruta) }}" alt="Avatar" class="w-24 h-24 rounded-full">
            @else
                <img src="https://via.placeholder.com/150" alt="Avatar" class="w-24 h-24 rounded-full">
                <!-- Imagen por defecto -->
            @endif

            <div class="mt-4">
                <!-- Formulario para eliminar al usuario -->
                <form action="{{ route('admin.destroy', $usuario->id_usuario) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200">
                        Eliminar
                    </button>
                </form>

                <x-cancel-button url="{{ route('admin.usuarios') }}">
                    Cancelar
                </x-cancel-button>
            </div>
        </div>
    </div>
@endsection
