<template>
    <div class="h-[100%] w-[100%]">
        <div>
            <p class="font-bold text-2xl">Recibidos</p>
        </div>
        <hr>
        <br>
        <section>
            <router-link to="/inicio/tablet/gmail/spoty" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">Spotify</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Difruta de la nueva playlist</span> - Hemos creado...</p></div>
            </router-link>
            <router-link to="/inicio/tablet/gmail/cambio_contrasena" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">Instagram</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Cambio de contraseña</span> - La contraseña se h...</p></div>
            </router-link>
            <router-link to="/inicio/tablet/gmail/inicio_sesion" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">Instagram</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">¡Nuevo inicio de sesión!</span> - Hemos detectado...</p></div>
            </router-link>
            <router-link to="/inicio/tablet/gmail/recuperar_contrasena" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">instragram</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Nuevo proyecto</span> - Hola 👋. Nos ponemos en...</p></div>
            </router-link>
            <div class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">Remitente</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Asunto</span> - Mensaje</p></div>
            </div>
            <div class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">Remitente</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Asunto</span> - Mensaje</p></div>
            </div>
            <div class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p class="font-bold">Duolingo</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">👋 ¡Hola vinijr! Es hora de tu lección diaria...</span></p></div>
            </div>
        </section>
    </div>
    <router-view class="absolute top-0 left-0"></router-view>
</template>


<script setup>
</script>