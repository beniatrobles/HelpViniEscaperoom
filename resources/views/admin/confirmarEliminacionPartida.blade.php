@extends('layouts.app')

@section('title', 'Confirmar Eliminación de Partida')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Confirmación de Eliminación</h1>

        <div class="bg-white p-6 border border-gray-200 shadow-lg rounded-lg">
            <p class="text-lg">
                ¿Estás seguro de que deseas eliminar la partida con ID <strong>{{ $partida->id_partida }}</strong>?
            </p>
            <p class="mt-2"><strong>Usuario:</strong> {{ $partida->usuario->nombre_usuario }}</p>
            <p class="mt-2"><strong>Tiempo:</strong> {{ $partida->tiempo }} segundos</p>
            <p class="mt-2"><strong>Completado:</strong> {{ $partida->completado ? 'Sí' : 'No' }}</p>

            <div class="mt-4">
                <!-- Formulario para eliminar la partida -->
                <form action="{{ route('partidas.destroy', $partida->id_partida) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200">
                        Eliminar
                    </button>
                </form>

                <a href="{{ route('admin.partidas') }}"
                   class="ml-2 bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-200">
                    Cancelar
                </a>
            </div>
        </div>
    </div>
@endsection
