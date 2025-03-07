<!-- resources/views/usuario/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalles del Usuario')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Detalles del Usuario</h1>

        <div class="bg-white p-8 shadow-xl rounded-2xl transition duration-300 hover:shadow-2xl">
            <div class="flex flex-col md:flex-row items-center space-x-4 mb-6">
                @if ($usuario->avatar_ruta)
                    <img src="{{ asset('storage/' . $usuario->avatar_ruta) }}" alt="Avatar" 
                         class="w-32 h-32 rounded-full shadow-lg border-4 border-gray-300">
                @else
                    <img src="https://via.placeholder.com/150" alt="Avatar" 
                         class="w-32 h-32 rounded-full shadow-lg border-4 border-gray-300">
                @endif
                <div class="text-center md:text-left">
                    <p class="text-xl font-semibold text-gray-700"><strong>ID:</strong> {{ $usuario->id_usuario }}</p>
                    <p class="text-xl font-semibold text-gray-700"><strong>Nombre:</strong> {{ $usuario->nombre_usuario }}</p>
                    <p class="text-lg text-gray-600"><strong>Correo:</strong> {{ $usuario->correo }}</p>
                    <p class="text-lg text-gray-600"><strong>Rol:</strong> {{ $usuario->rol ? $usuario->rol->rol : 'No asignado' }}</p>
                </div>
            </div>

            <!-- Sección de partidas del usuario -->
            <h2 class="text-3xl font-semibold text-gray-700 mb-6 text-center">Partidas del Usuario</h2>

            @if ($usuario->partidas->isEmpty())
                <p class="text-gray-500 text-lg text-center">Este usuario no tiene partidas registradas.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($usuario->partidas as $partida)
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-6 rounded-xl shadow-lg text-white transform transition duration-300 hover:scale-105">
                            <h3 class="text-xl font-bold mb-2">Partida #{{ $partida->id_partida }}</h3>
                            <p class="text-lg"><strong>Tiempo:</strong> {{ $partida->tiempo }} segundos</p>
                            <p class="text-lg"><strong>Completado:</strong> {{ $partida->completado ? 'Sí' : 'No' }}</p>

                            <div class="mt-3">
                                <p class="text-lg font-semibold">Pruebas realizadas:</p>
                                <ul class="list-disc list-inside text-white">
                                    @if ($partida->tablet) <li>Tablet</li> @endif
                                    @if ($partida->gmail) <li>Gmail</li> @endif
                                    @if ($partida->instagram) <li>Instagram</li> @endif
                                    @if ($partida->twitter) <li>Twitter</li> @endif
                                    @if ($partida->whatsapp) <li>WhatsApp</li> @endif
                                </ul>
                            </div>

                            <div class="mt-4">
                                <form action="{{ route('partidas.destroy', $partida->id_partida) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-700 transition duration-200">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="mt-8 flex justify-center">
                <x-cancel-button url="{{ route('admin.usuarios') }}" class="text-lg px-6 py-3">
                    Volver
                </x-cancel-button>
            </div>
        </div>
    </div>
@endsection
