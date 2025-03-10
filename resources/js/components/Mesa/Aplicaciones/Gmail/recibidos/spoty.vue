<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">Nueva Playlist</h2>
            <div class="flex items-center gap-2">
                <img :src="'/storage/img/apps/spotify.png'" class="w-[50px] rounded-full">
                <div>
                    <p>Spotify <span class="text-sm text-zinc-400">&lt;no-reply@spotify.com&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4">
                <p>¿Te has levantado con el pie <span class="font-bold"> izquierdo</span>? Hemos creado una playlist personalizada, para que disfrutes en tus ratos libres, con amigos, familia o mientras scrolleas en <span class="font-bold">Instagram</span>. Esperamos que te guste.</p>
                <div class="bg-zinc-950 w-[80%] mx-auto mt-4 flex flex-col justify-center items-center p-3">
                    <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2023/05/Spotify_Full_Logo_RGB_White.png" class="w-[150px]">
                    <div class="w-[150px] h-[150px] bg-black my-4 flex items-center justify-center p-2 outline-double outline-purple-300">
                        <img src="https://images.vexels.com/media/users/3/278708/isolated/preview/4817b6f5fe60b466f5a7e3a677d7811f-palabras-populares-relajarse-letras.png" >
                    </div>
                    <router-link to="/inicio/tablet/spotify/playlist7" class="px-3 py-1 bg-purple-500 rounded-full">ABRIR AHORA</router-link>
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>