<!-- resources/views/admin/confirm_delete.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Eliminación</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Confirmación de Eliminación</h1>

        <!-- Mostrar detalles del usuario que se eliminará -->
        <div class="bg-white p-6 border border-gray-200 shadow-lg rounded-lg">
            <p class="text-lg">¿Estás seguro de que deseas eliminar al usuario <strong>{{ $usuario->nombre_usuario }}</strong>?</p>
            <p class="mt-2">Correo: {{ $usuario->correo }}</p>
            <p class="mt-2">Rol: {{ $usuario->rol ? $usuario->rol->rol : 'No asignado' }}</p>

            <!-- Formularios de confirmación y cancelación -->
            <div class="mt-4">
                <!-- Formulario para confirmar la eliminación -->
                <form action="{{ route('admin.destroy', $usuario->id_usuario) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Eliminar</button>
                </form>

                <!-- Formulario para cancelar la eliminación -->
                <a href="{{ route('admin.usuarios') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded-md">Cancelar</a>
            </div>
        </div>
    </div>
</body>
</html>
