<template>
    <div class="flex flex-col w-[100%] h-[100%] bg-zinc-900 border-r border-zinc-800 pr-2">
        <div class="flex h-full pb-4">
            <div class="flex flex-col gap-5 mt-auto w-full">
                <p class="p-4 bg-blue-700 max-w-[80%] rounded-[20px] ml-auto w-max">Hola Cristiano. Eres mejor que Messi.
                    SUUUUUUUUUUUUUU!</p>
                <p class="p-4 bg-zinc-700 max-w-[80%] rounded-[20px] w-max">Mucha gracias vini🙈🙈🙈</p>
            </div>
        </div>
        <div class="mt-auto flex gap-2">
            <input type="text" placeholder="Mensaje"
                class="w-[100%] px-2 bg-transparent outline-none border border-zinc-600 rounded-full" v-model="mensaje">
            <button class="bg-blue-600 p-2 rounded-full"><img :src="'/storage/img/icon-direct.png'"
                    class="w-[35px]" @click="mostrarMensaje"></button>
        </div>
        <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center" :class="{'hidden': !mensajeVisible}">
            <div class="bg-zinc-800 flex justify-center items-center flex-col p-4 max-w-[450px]">
                <img :src="'/storage/img/alerta.png'" class="w-[50px] mb-5">
                <p class="text-center">Recuerda que esta cuenta no te pertenece. Es ilegal enviar mensajes haciendote
                    pasar por alguién sin su autorización. </p>
                <p class="text-center mt-3">Las poróximas veces que intentes enviar un mensaje serás penalizado con una
                    reducción del tiempo</p>
                <button class="px-2 bg-blue-600 rounded mt-5" @click="ocultarMensaje">Entendido</button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
const mensajeVisible = ref(false)
const mensaje = ref('')

const mostrarMensaje = () => {
    if(mensaje.value !== '')
        mensajeVisible.value = true
}

const ocultarMensaje = () => {
    mensajeVisible.value = false
}
</script>

<style scoped></style>