<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- Enlace a Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg w-full max-w-sm p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Iniciar sesión</h2>

        <!-- Mostrar errores de autenticación -->
        @if($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <!-- Formulario de Login -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="correo" class="block text-gray-700">Correo electrónico</label>
                <input type="email" id="correo" name="correo" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="mb-6">
                <label for="contrasena" class="block text-gray-700">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">Iniciar sesión</button>
        </form>

    </div>

</body>

</html>
