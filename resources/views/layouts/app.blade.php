@php
    $usuario = Auth::user();
@endphp

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">


    <header class="bg-gray-800 text-white shadow-md">
        <div class="flex items-center justify-between mx-2">
            <div class="flex items-center">
                <img src="{{ asset('storage/img/Logo.png') }}" alt="Logo Help Vini" class="w-16 h-16">
                <h1 class="text-[25px] font-Lobster ml-2">
                    Help <span class="text-[#0ED800]">Vini</span> Escape Room
                </h1>
            </div>
            
            
            <div class="flex space-x-6 justify-center ml-[-220px]" >
                <a href="{{ route('admin.usuarios') }}" class="text-white hover:bg-green-500 px-4 py-2 rounded-md text-sm uppercase tracking-wide transition duration-200">
                    Usuarios
                </a>
                <a href="{{ route('admin.partidas') }}" class="text-white hover:bg-green-500 px-4 py-2 rounded-md text-sm uppercase tracking-wide transition duration-200">
                    Partidas
                </a>
            </div>
    
            <div class="flex items-center space-x-4">
                <div class="flex flex-col items-center space-y-2">
                    <p class="text-lg font-medium text-white">{{ $usuario->nombre_usuario }}</p>
                    <img src="{{ $usuario->avatar_ruta ? asset('storage/' . $usuario->avatar_ruta) : 'https://via.placeholder.com/150' }}" 
                         alt="Avatar" class="w-16 h-16 rounded-full border-2 border-white shadow-md">
                    <form action="{{ route('logout') }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:text-white transition duration-200 text-sm uppercase">
                            Cerrar sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-6 ">
        <div class="flex flex-col items-center">
            <p class="text-sm">&copy; {{ date('Y') }} HELP VINI ESCAPEROOM.</p>
        </div>
    </footer>

</body>

</html>
