<template>
    <div class="bg-zinc-900 flex justify-center gap-2 items-center">

        <router-link to="/inicio/tablet/instagram/perfil"
            class="absolute top-5 right-5 text-2xl font-bold">X</router-link>

        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
            class="bg-gray-50 bg-opacity-75 w-5 p-1 rounded-full hover:bg-opacity-100 rotate-[180deg] cursor-pointer"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 1 }"
            @click="anterior">

        <div class="w-[35%] h-full relative">
            <div :class="{ 'block': historiaSeleccionada == 1, 'hidden': historiaSeleccionada != 1 }"
                class="w-full h-full absolute bg-white">historia1</div>
            <div :class="{ 'block': historiaSeleccionada == 2, 'hidden': historiaSeleccionada != 2 }"
                class="w-full h-full absolute bg-red-500">historia2</div>
            <div :class="{ 'block': historiaSeleccionada == 3, 'hidden': historiaSeleccionada != 3 }"
                class="w-full h-full absolute bg-green-500">historia3</div>
            <div :class="{ 'block': historiaSeleccionada == 4, 'hidden': historiaSeleccionada != 4 }"
                class="w-full h-full absolute bg-pink-500">historia4</div>
        </div>

        <!-- <router-link to=""> -->
        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
            class="bg-gray-50 bg-opacity-75 w-5 p-1 rounded-full hover:bg-opacity-100 cursor-pointer"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 4 }"
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