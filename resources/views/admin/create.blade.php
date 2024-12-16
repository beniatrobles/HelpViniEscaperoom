<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Agregar Nuevo Usuario</h1>

        <!-- Formulario para agregar un nuevo usuario -->
        <form action="{{ route('admin.store') }}" method="POST" class="bg-white p-6 border border-gray-200 shadow-lg rounded-lg">
            @csrf

            <!-- Campo para el nombre del usuario -->
            <div class="mb-4">
                <label for="nombre_usuario" class="block text-gray-700">Nombre de Usuario</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <!-- Campo para el correo -->
            <div class="mb-4">
                <label for="correo" class="block text-gray-700">Correo</label>
                <input type="email" id="correo" name="correo" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <!-- Campo para la contraseña -->
            <div class="mb-4">
                <label for="contraseña" class="block text-gray-700">Contraseña</label>
                <input type="password" id="contraseña" name="contraseña" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <!-- Selección del rol -->
            <div class="mb-4">
                <label for="rol" class="block text-gray-700">Rol</label>
                <select id="rol" name="rol" class="w-full p-2 border border-gray-300 rounded-md" required>
                    <option value="">Selecciona un Rol</option>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->rol }}">{{ $rol->rol }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Agregar Usuario</button>
            <a href="{{ route('admin.usuarios') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded-md">Cancelar</a>
        </form>
    </div>
</body>
</html>
