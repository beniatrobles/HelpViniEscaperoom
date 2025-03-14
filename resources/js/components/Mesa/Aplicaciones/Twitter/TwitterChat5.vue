<template>

    <!-- HEADER DEL CHAT -->
    <div class="flex items-center space-x-2 mt-3 p-1 border-gray-500 border-b-[0.5px]">
        <p class="font-bold text-white text-xs">Jude</p>
        <img class="rounded-full w-[15px]" :src="'/storage/img/verificado.png'" alt="">
        <img class="w-[15px]" :src="'/storage/img/apps/iconos/realmadrid.jpg'" alt="">
    </div>

    <!-- CHAT -->
    <div class="overflow-auto flex flex-col-reverse gap-5 mt-3 h-[80%]">

        <!-- MENSAJE PROPIO -->
        <div class="p-4 bg-cyan-500 max-w-[80%] rounded-[20px] w-max ml-auto">

            <p> Sim, i will tell Kylian too  </p>

        </div>

        <!-- MENSAJE OPUESTO -->
        <div class="p-4 bg-zinc-700 max-w-[80%] rounded-[20px] w-max">

            <p> Nice, lets practice in the next training 💪🏾 </p>

        </div>

        <!-- MENSAJE PROPIO -->
        <div class="p-4 bg-cyan-500 max-w-[80%] rounded-[20px] w-max ml-auto">

            <p> So funny KKKK, let's do it </p>

        </div>

        <!-- MENSAJE OPUESTO -->
        <div class="p-4 bg-zinc-700 max-w-[80%] rounded-[20px] w-max">

            <p> We can try this one on the next match 😂😂 </p>

        </div>

        <!-- MENSAJE OPUESTO -->
        <div class="flex text-center p-7 bg-zinc-700 max-w-[80%] rounded-[20px] w-max">

            <p> Tweet no disponible </p>

        </div>

    </div>

    <!-- CUADRADO PARA ESCRIBIR MENSAJES -->
    <div class="mt-3 flex items-center bg-gray-800 rounded-full px-2 py-1 border border-zinc-700">


        <!-- Campo de texto -->
        <div class="relative flex-1">
            <input type="text" placeholder="Escribe un mensaje"
                class="w-full bg-gray-800 text-white outline-none pl-3 pr-10 py-1 rounded-full" v-model="mensaje"
                @keydown.enter="mostrarMensaje">

            <!-- Ícono SVG dentro del input -->
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-cyan-500" @click="mostrarMensaje">
                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M3 20V4L22 12M5 17L16.85 12L5 7V10.5L11 12L5 13.5M5 17V7 13.5Z"></path>
                </svg>
            </button>
        </div>

        <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center"
            :class="{ 'hidden': !mensajeVisible }">
            <div class="bg-gray-800 flex justify-center items-center flex-col p-4 max-w-[450px] rounded">
                <img :src="'/storage/img/alerta.png'" class="w-[50px] mb-5">
                <p class="text-center">Recuerda que esta cuenta no te pertenece. Es ilegal enviar mensajes haciendote
                    pasar por alguién sin su autorización. </p>
                <p class="text-center mt-3">Las próximas veces que intentes enviar un mensaje a cualquier persona serás
                    penalizado con una
                    reducción del tiempo</p>
                <button class="px-2 bg-cyan-500 rounded mt-5" @click="ocultarMensaje">Entendido</button>
            </div>
        </div>
    </div>


</template>

<script setup>
import { ref } from 'vue';
const mensajeVisible = ref(false)
const mensaje = ref('')

const mostrarMensaje = () => {
    if (mensaje.value !== '')
        mensajeVisible.value = true
}

const ocultarMensaje = () => {
    mensajeVisible.value = false
}
</script>

<style scoped>
::-webkit-scrollbar {
    width: 0px;
    height: 0px;
}
</style>