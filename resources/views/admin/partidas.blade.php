@extends('layouts.app')

@section('title', 'Listado de Partidas')

@section('content')
    @if (session('success'))
        <div id="success-alert" class="bg-green-500 text-white p-4 mb-6 rounded-lg shadow-md">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(function() {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.opacity = 0;
                    setTimeout(function() {
                        alert.style.display = 'none';
                    }, 100);
                }
            }, 2000);
        </script>
    @endif

    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-semibold text-gray-800 mb-8 text-center">Listado de Partidas</h1>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-4 text-left">ID</th>
                    <th class="px-6 py-4 text-left">Usuario</th>
                    <th class="px-6 py-4 text-left">Tablet</th>
                    <th class="px-6 py-4 text-left">Gmail</th>
                    <th class="px-6 py-4 text-left">Instagram</th>
                    <th class="px-6 py-4 text-left">Twitter</th>
                    <th class="px-6 py-4 text-left">WhatsApp</th>
                    <th class="px-6 py-4 text-left">Completado</th>
                    <th class="px-6 py-4 text-left">Tiempo</th>
                    <th class="px-6 py-4 text-left">Acciones</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @foreach ($partidas as $partida)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="px-6 py-4">{{ $partida->id_partida }}</td>
                        <td class="px-6 py-4 font-medium">{{ $partida->usuario->nombre_usuario ?? 'Sin usuario' }}</td>
                        <td class="px-6 py-4">{{ $partida->tablet ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-4">{{ $partida->gmail ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-4">{{ $partida->instagram ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-4">{{ $partida->twitter ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-4">{{ $partida->whatsapp ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-4">{{ $partida->completado ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-4">{{ $partida->tiempo }} segundos</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('admin.confirmarEliminacionPartida', $partida->id_partida) }}"
                               class="bg-red-500 text-white px-4 py-2 rounded-lg text-xs shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-200">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6 text-center">
            {{ $partidas->links() }}
        </div>
    </div>
@endsection
