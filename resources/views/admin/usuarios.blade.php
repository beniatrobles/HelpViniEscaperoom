<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
    <!-- Enlace a Tailwind CSS (si no lo has instalado con npm) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Listado de Usuarios</h1>

        <div class="mb-6">
            <a href="{{ route('admin.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-lg text-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-200">Agregar Usuario</a>
        </div>

        <!-- Tabla de usuarios con roles y partidas -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-blue-500 text-white">
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
                        <tr class="hover:bg-gray-100 border-b">
                            <td class="px-6 py-4">{{ $usuario->id_usuario }}</td>
                            <td class="px-6 py-4">{{ $usuario->nombre_usuario }}</td>
                            <td class="px-6 py-4">{{ $usuario->correo }}</td>
                            <td class="px-6 py-4">
                                @if($usuario->rol)
                                    {{ $usuario->rol->rol }} <!-- Mostramos el rol asociado al usuario -->
                                @else
                                    No asignado
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.show', $usuario->id_usuario) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-xs shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">Ver</a>
                               <a href="{{ route('admin.usuarios.edit', $usuario->id_usuario) }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Editar</a>
                                <a href="{{ route('admin.confirmarEliminacion', $usuario->id_usuario) }}" class="bg-red-500 text-white px-4 py-2 rounded-lg text-xs shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-200">Eliminar</a>
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

  
    
</body>
</html>
