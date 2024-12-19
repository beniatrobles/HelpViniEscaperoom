<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Editar Usuario</h1>

        <form action="{{ route('admin.usuarios.update', $usuario->id_usuario) }}" method="POST" class="bg-white p-6 shadow-md rounded-lg">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre_usuario" class="block text-gray-700">Nombre de Usuario</label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" value="{{ old('nombre_usuario', $usuario->nombre_usuario) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="correo" class="block text-gray-700">Correo</label>
                <input type="email" name="correo" id="correo" value="{{ old('correo', $usuario->correo) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="rol" class="block text-gray-700">Rol</label>
                <select name="id_rol" id="rol" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id_rol }}" {{ $usuario->id_rol == $rol->id_rol ? 'selected' : '' }}>{{ $rol->rol }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="contrasena" class="block text-gray-700">Nueva Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6 text-right">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">Actualizar Usuario</button>
                <a href="{{ route('admin.usuarios') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded-md">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
