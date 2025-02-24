<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <router-link to="/inicio/tablet"
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            <div class="bg-zinc-900 w-[100%] h-[100%] overflow-auto">


                <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center" :class="{'hidden': !mensajeVisible}">
            <div class="bg-zinc-800 flex justify-center items-center flex-col p-4 max-w-[450px] rounded-lg">
                <img :src="'/storage/img/alerta.png'" class="w-[50px] mb-5">
                <p class="text-center font-bold">Ha ocurrido un problema </p>
                <p class="text-center mt-3">Parece que la aplicación de Spotify está dañada y no permite reproducir canciones, sentimos las molestias.</p>
                <button class="px-2 bg-zinc-700 rounded mt-5" @click="ocultarMensaje">Entendido</button>
            </div>
        </div>

                <!-- Header de la aplicación de Spotify -->
                <div class="p-5">
                    <div class="h-[50px] w-full flex flex-row items-center justify-between">
                        <div class="h-full flex items-center">
                            <router-link to="/inicio/tablet/spotify/" class="h-full">
                                <img class="h-full hover:cursor-pointer"
                                    :src="'/storage/img/apps/spotify/LogoSpotifyBlanco.png'" alt="">
                            </router-link>
                            <router-link to="/inicio/tablet/spotify/" class="h-full">
                                <h2 class="p-3 font-bold hover:cursor-pointer">Spotify</h2>
                            </router-link>
                        </div>
                        <img class="rounded-full h-full" :src="'/storage/img/vini.jpeg'" alt="">
                    </div>
                    <hr class="mt-3">

                    <router-view></router-view>

                </div>
            </div>
        </div>
    </div>
</template>


<script setup>


import { ref } from 'vue';
const mensajeVisible = ref(true)

const ocultarMensaje = () => {
    mensajeVisible.value = false
}

</script>