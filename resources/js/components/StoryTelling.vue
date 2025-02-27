<template>
    <div class="overflow-hidden">
        <img :src="'/storage/img/mesa.jpg'" class="w-full h-screen z-[-10] pointer-events-none">
        <router-link to="" class="hoja w-[250px] h-[250px] hover:scale-110 hover:rotate-[-7deg] duration-200">
            <img :src="'/storage/img/hoja-papel.png'" @click="mostrarNota">
        </router-link>
        
        <div :class="{'scale-0' : !notaVisible }" class="absolute inset-0 m-auto flex justify-center items-center h-[85vh] transition duration-400">
            <img :src="'/storage/img/hoja-papel.png'" class="scale-110 absolute">
            <p class="texto_story absolute translate-x-7 text-black text-3xl font-extrabold max-w-[330px]"> {{ story[parrafo] }} </p>
            <button v-if="parrafo < 3" :class="parrafo > 0 ? 'text-white hover:text-[#0ED800]' : 'text-gray-500 cursor-auto'" class="z-10 mt-auto ml-12" @click="anterior"><h1>Anterior</h1></button>
            <button v-if="parrafo < 3" :class="parrafo < 3 ? 'text-white hover:text-[#0ED800]' : 'text-gray-500 cursor-auto'" class="z-10 mt-auto ml-8" @click="siguiente"><h1>Siguiente</h1></button>
            
            <button v-if="parrafo == 3" class="z-10 mt-auto ml-12 hover:text-[#0ED800]"><router-link to="/"><h1>No me apetece</h1></router-link></button>
            <button v-if="parrafo == 3" class="z-10 mt-auto ml-8 hover:text-[#0ED800]"><router-link to="/inicio"><h1>Me apunto!</h1></router-link></button>
        </div>
        
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRouter } from 'vue-router';
import { useAuthStore } from '@/stores/authStore';
const authStore = useAuthStore();
const router = useRouter();

const notaVisible = ref(false)
const mostrarNota = () => notaVisible.value = true 

const story = ref([
    "Vinicius ha cometido un error muy típico entre los usuarios de internet. Utiliza la misma contraseña en todas sus cuentas de redes sociales.",

    "Recientemente ha sido víctima de un ataque de phising, revelando así la contraseña que otorga acceso a todas sus cuentas de redes sociales. Además, cuenta con una protección nula ante este tipo de ataques, pues no cuenta con ningún sistema de protección como la verificación en dos pasos, verificación multifactor etc.",

    "Los atacantes están un uso indebido de sus redes sociales, compartiendo imágenes y textos que tratan de manchar la imagen pública de Vini. Esto está afectando directamente al rendimiento deportivo del jugador, imposibilitando su sueño, ganar el balón de oro.",

    "¡Ayudemos a Vinicius a ganar su balón de oro!"
])

const parrafo = ref(0)

const siguiente = () => parrafo.value != 3 ? parrafo.value++ : ''
const anterior = () => parrafo.value != 0 ? parrafo.value-- : ''

onMounted(()=> {
    // Llamamos a la función checkToken para verificar el estado de la sesión
    authStore.checkToken();
    // Si no hay token o el usuario no está autenticado, redirigir a la página de login
    if (!authStore.token || !authStore.user) {
    router.push('/login'); // Redirigir a la página de login
  }
})

</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap');
    
    .texto_story{
        font-family: 'Grape Nuts', cursive;
    }
    .hoja{
        position: absolute;
        inset: 0;
        margin: auto;
        animation: hoja 5s 1 ease-out;
    }

    @keyframes hoja {
        0%{
            top: -2000px;
        }
    }
</style>