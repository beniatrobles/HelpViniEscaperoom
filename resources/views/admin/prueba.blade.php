<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administración</title>
    <!-- Enlace a Tailwind CSS (si no lo has instalado con npm) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard de Administración</h1>

        <!-- Tabla de usuarios con roles y partidas -->
        <table class="min-w-full table-auto bg-white border border-gray-200 shadow-lg rounded-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Nombre de Usuario</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Correo</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Rol</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Completado</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Tiempo</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $usuario->nombre_usuario }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $usuario->correo }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            @if($usuario->rol)
                                {{ $usuario->rol->rol }} <!-- Mostramos el rol asociado al usuario -->
                            @else
                                No asignado
                            @endif
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            @foreach ($usuario->partidas as $partida)
                                {{ $partida->completado ? 'Sí' : 'No' }}<br>
                            @endforeach
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            @foreach ($usuario->partidas as $partida)
                                {{ $partida->tiempo }} minutos<br>
                            @endforeach
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <!-- Aquí puedes agregar acciones, como editar o eliminar -->
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md text-xs">Ver</button>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-md text-xs">Editar</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md text-xs">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>