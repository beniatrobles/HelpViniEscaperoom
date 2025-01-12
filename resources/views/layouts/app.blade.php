<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    
<body class="flex flex-col min-h-screen">


    <header class="bg-gray-800 text-white py-6 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-6">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('storage/img/Logo.png') }}" alt="Logo Help Vini" class="w-20 h-20">
                <h1 class="text-[40px] max-w-max overflow-hidden whitespace-nowrap titulo__inicio font-Lobster">
                    Help <span class="text-[#0ED800]">Vini</span> Escape Room
                </h1>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>
    
    <footer class="bg-gray-800 text-white text-center p-6">
        <div class="flex flex-col items-center">
            <p class="text-sm">&copy; {{ date('Y') }} HELP VINI ESCAPEROOM.</p>
        </div>
    </footer>

</body>

</html>
