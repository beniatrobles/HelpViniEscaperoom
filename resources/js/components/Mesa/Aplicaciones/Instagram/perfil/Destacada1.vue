<template>
    <div class="bg-zinc-900 flex justify-center gap-2 items-center">

        <router-link to="/inicio/tablet/instagram/perfil"
            class="absolute top-5 right-5 text-2xl font-bold">X</router-link>

        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
            class="bg-gray-50 w-5 p-1 rounded-full hover:bg-opacity-100 rotate-[180deg]"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 1, 'bg-opacity-75 cursor-pointer' : historiaSeleccionada != 1 }"
            @click="anterior">

        <div class="w-[35%] h-full relative">
            <div :class="{ 'block': historiaSeleccionada == 1, 'hidden': historiaSeleccionada != 1 }"
                class="w-full h-full absolute flex justify-center items-center bg-[#10171e]"><img :src="'/storage/img/tweet-foto.jpg'"></div>
            <div :class="{ 'block': historiaSeleccionada == 2, 'hidden': historiaSeleccionada != 2 }"
                class="w-full h-full absolute flex justify-center items-center bg-[#10171e]"><img :src="'/storage/img/tweet2.jpg'"></div>
            <div :class="{ 'block': historiaSeleccionada == 3, 'hidden': historiaSeleccionada != 3 }"
                class="w-full h-full absolute flex justify-center items-center bg-[#10171e]"><img :src="'/storage/img/tweet3.jpg'"></div>
            <div :class="{ 'block': historiaSeleccionada == 4, 'hidden': historiaSeleccionada != 4 }"
                class="w-full h-full absolute flex justify-center items-center bg-[#10171e]"><img :src="'/storage/img/tweet4.jpg'"></div>
        </div>

        <!-- <router-link to=""> -->
        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
            class="bg-gray-50 w-5 p-1 rounded-full hover:bg-opacity-100"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 4, 'bg-opacity-75 cursor-pointer' : historiaSeleccionada != 4 }"
            @click="siguiente">
        <!-- </router-link> -->
    </div>
</template>


<script setup>
import { ref, onMounted } from 'vue';

const historiaSeleccionada = ref(1)

const siguiente = () => historiaSeleccionada.value != 4 ? historiaSeleccionada.value++ : ''
const anterior = () => historiaSeleccionada.value != 1 ? historiaSeleccionada.value-- : ''


</script>