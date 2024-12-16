<!-- resources/views/usuario/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Detalles del Usuario</h1>

        <div class="bg-white p-6 shadow-lg rounded-lg">
            <p><strong>ID:</strong> {{ $usuario->id_usuario }}</p>
            <p><strong>Nombre de Usuario:</strong> {{ $usuario->nombre_usuario }}</p>
            <p><strong>Correo:</strong> {{ $usuario->correo }}</p>
            <p><strong>Rol:</strong> {{ $usuario->rol ? $usuario->rol->rol : 'No asignado' }}</p>
            <br>
            <br>
            <a href="{{ route('admin.usuarios') }}" class="mt-4 bg-gray-500 text-white px-4 py-2 rounded-md">Volver</a>
        </div>
    </div>
</body>
</html>
