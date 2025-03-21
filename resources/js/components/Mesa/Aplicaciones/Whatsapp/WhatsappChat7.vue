<template>


    <!-- CABECERA -->
    <div class="bg-emerald-500 h-[15%] flex items-center space-x-3 p-3">

        <img class="rounded-full h-full" :src="'/storage/img/apps/whatsapp/pfp7.jpg'" alt="">
        <div>
            <p class="text-xl">Mãe ❤️</p>
            <p class="text-zinc-500 text-xs">últ. vez ayer</p>
        </div>

    </div>

    <!-- CHAT -->
    <div class="h-[75%] flex flex-col-reverse gap-5 overflow-y-auto p-4 
            bg-cover bg-center bg-no-repeat"
        style="background-image: url('/storage/img/apps/whatsapp/fondomadrid.jpg');">

        <!-- MENSAJE PROPIO -->
        <div class="p-4 text-black bg-[#D9FDD3] max-w-[80%] rounded-[10px] w-max shadow shadow-gray-600 ml-auto">
            <p>Eu farei isso mãe, acalme-se</p>
        </div>

        <!-- MENSAJE OPUESTO -->
        <div class="p-4 text-black bg-white max-w-[80%] rounded-[10px] w-max shadow shadow-gray-600">
            <p>Bem, não seja estúpido e dê a eles mais motivos para odiar você.</p>
        </div>
        
        <!-- MENSAJE PROPIO -->
        <div class="p-4 text-black bg-[#D9FDD3] max-w-[80%] rounded-[10px] w-max shadow shadow-gray-600 ml-auto">
            <p> Eles estão simplesmente com raiva e com inveja de mim </p>
        </div>

        <!-- MENSAJE PROPIO -->
        <div class="p-4 text-black bg-[#D9FDD3] max-w-[80%] rounded-[10px] w-max shadow shadow-gray-600 ml-auto">
            <p> Nada mãe, não se preocupe </p>
        </div>
        
        <!-- MENSAJE OPUESTO -->
        <div class="p-4 text-black bg-white max-w-[80%] rounded-[10px] w-max shadow shadow-gray-600">
            <p>O que está acontecendo com a Ballon di'or?</p>
        </div>

        <!-- MENSAJE OPUESTO -->
        <div class="p-4 text-black bg-white max-w-[80%] rounded-[10px] w-max shadow shadow-gray-600">
            <p>Que tal filho?</p>
        </div>

    </div>

    <!-- CUADRADO PARA ESCRIBIR MENSAJES -->
    <div class="flex items-center bg-white h-[10%] px-2 py-1 border-t border-gray-400 ">


        <!-- Campo de texto -->
        <div class="relative flex-1">
            <input type="text" placeholder="Escribe un mensaje" class="w-full text-zinc-500 outline-none pr-10 py-1"
                v-model="mensaje" @keydown.enter="mostrarMensaje">

            <!-- Ícono SVG dentro del input -->
            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-emerald-600"
                @click="mostrarMensaje">
                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M3 20V4L22 12M5 17L16.85 12L5 7V10.5L11 12L5 13.5M5 17V7 13.5Z"></path>
                </svg>
            </button>
        </div>

        <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center"
            :class="{ 'hidden': !mensajeVisible }">
            <div
                class="bg-[#DBD8D4] text-black flex justify-center items-center flex-col p-4 max-w-[450px] rounded shadow shadow-zinc-500">
                <img :src="'/storage/img/alerta.png'" class="w-[50px] mb-5">
                <p class="text-center">Recuerda que esta cuenta no te pertenece. Es ilegal enviar mensajes haciendote
                    pasar por alguién sin su autorización. </p>
                <p class="text-center mt-3">Las próximas veces que intentes enviar un mensaje a cualquier persona serás
                    penalizado con una
                    reducción del tiempo</p>
                <button class="px-2 bg-emerald-500 text-white rounded mt-5" @click="ocultarMensaje">Entendido</button>
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