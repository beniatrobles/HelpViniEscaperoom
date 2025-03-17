<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">Nuevo proyecto</h2>
            <div class="flex items-center gap-2">
                <img :src="'https://cdn-icons-png.flaticon.com/512/4847/4847985.png'" class="w-[50px] rounded-full">
                <div>
                    <p>Instragam <span class="text-sm text-zinc-400">&lt;istragramsupport@maily.pro&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-[15px]">Hola 👋. Nos ponemos en contacto contigo para ofrecerto formar parte de un nuevo proyecto de nuestra aplicación. Creemos que tu colaboración ayudará a que este proyecto tenga un mayor alcance. Como recompensa recibirás una mayor visibilidad en nuestra red social, llegando a un mayor numero de personas y aumentando así el número de seguidores de tu cuenta. Rellena el siguiente formulario con tus credenciales de instagram para asegurarnos que eres tú y estaremos encantados de informarte más en detalle.</p>
                <div class="bg-gray-100 w-[80%] mx-auto mt-4 flex flex-col p-3 text-black">
                    
                    <img src="https://edisenius.com/wp-content/uploads/2017/07/new-instagram-text-logo.png" class="w-[100px]">
                    <form class="max-w-max m-auto text-sm mt-3 flex flex-col justify-center items-center gap-3 pb-5" @submit.prevent="submit">
                        <div class="flex flex-col gap-1 text-xs">
                            <label for="mail" class="text-gray-600">Correo electronico</label>
                            <input type="text" id="mail" class="border pl-1" v-model="mail">
                        </div>
                        <div class="flex flex-col gap-1 text-xs">
                            <label for="pass" class="text-gray-600">Contraseña</label>
                            <input type="password" id="pass" class="border pl-1" v-model="pass">
                        </div>

                        <button class="text-xs bg-blue-400 text-white w-full">Entrar</button>
                        
                    </form>
                </div>
                <br>
            </div>
        </div>

        <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center" :class="{'hidden': !avisoVisible}">
            <div class="bg-zinc-800 flex justify-center items-center flex-col p-4 max-w-[450px]">
                <div class="flex flex-col items-center justify-center mb-3">
                    <img :src="'/storage/img/alerta.png'" class="w-[50px] mb-5">
                    <p class="font-bold -mt-2">¡Advertencia!</p>
                </div>
                <p class="text-center">El formulario que enviaste parece ser un intento de phishing, diseñado para robar tu información personal. Nunca envíes tus datos confidenciales ni hagas clic en enlaces sospechosos.</p>
                <p class="text-center mt-3">Este correo podría estar relacionado con el ataque a Vini. Asegúrate de que los correos que envías provengan de fuentes oficiales y seguras.</p>
                <p class="text-center mt-3">¡Tu seguridad es lo más importante!</p>

                <button class="px-2 bg-blue-600 rounded mt-5" @click="ocultarMensaje">Entendido</button>
            </div>
        </div>
    </div>
</template>


<script setup>
import { ref } from 'vue'
const mail = ref('')
const pass = ref('')
const avisoVisible = ref(false)

const submit = () => {
    if (mail.value.trim() != '' && pass.value != '') {
        avisoVisible.value = true
    } 
}

const ocultarMensaje = () => avisoVisible.value = false

</script>