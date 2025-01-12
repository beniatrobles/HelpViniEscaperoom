<!-- resources/views/admin/usuarios/index.blade.php -->
@extends('layouts.app')

@section('title', 'Listado de Usuarios')

@section('content')
    @if (session('success'))
        <div id="success-alert" class="bg-green-500 text-white p-4 mb-6 rounded-lg shadow-md">
            {{ session('success') }}
        </div>

        <script>
            // Espera 4 segundos y luego desaparece el mensaje con un efecto de desvanecimiento
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
        
        <h1 class="text-4xl font-semibold text-gray-800 mb-8 text-center">Listado de Usuarios</h1>

        
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.create') }}"
               class="bg-green-500 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-200">
                Agregar Usuario
            </a>

            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="bg-red-500 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
                    Cerrar sesión
                </button>
            </form>
        </div>

        <!-- Tabla de usuarios -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-4 text-left">ID</th>
                    <th class="px-6 py-4 text-left">Nombre de Usuario</th>
                    <th class="px-6 py-4 text-left">Correo</th>
                    <th class="px-6 py-4 text-left">Rol</th>
                    <th class="px-6 py-4 text-left">Acciones</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @foreach ($usuarios as $usuario)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="px-6 py-4">{{ $usuario->id_usuario }}</td>
                        <td class="px-6 py-4 font-medium">{{ $usuario->nombre_usuario }}</td>
                        <td class="px-6 py-4">{{ $usuario->correo }}</td>
                        <td class="px-6 py-4">
                            @if ($usuario->rol)
                                {{ $usuario->rol->rol }}
                            @else
                                No asignado
                            @endif
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('admin.show', $usuario->id_usuario) }}"
                               class="bg-blue-500 text-white px-4 py-2 rounded-lg text-xs shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
                                Ver
                            </a>
                            <a href="{{ route('admin.usuarios.edit', $usuario->id_usuario) }}"
                               class="bg-green-500 text-white px-4 py-2 rounded-md text-xs shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-200">
                                Editar
                            </a>
                            <a href="{{ route('admin.confirmarEliminacion', $usuario->id_usuario) }}"
                               class="bg-red-500 text-white px-4 py-2 rounded-lg text-xs shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-200">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="mt-6 text-center">
            {{ $usuarios->links() }}
        </div>
    </div>
@endsection

