<template>

    <div class="flex justify-center flex-col items-center min-h-screen bg-opacity-50 bg-black">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div class="relative">
            <img :src="'/storage/img/cuaderno-abierto.png'" alt="" class="h-[580px] -z-10">
            <!-- APARTADO DONDE SALE TODO LO PENDIENTE DE HACER -->
        <div class="absolute left-[12%] top-[10%] p-1 space-y-5 font-cuaderno w-[290px]">
            <!-- TITULO -->
            <div class="text-black font-extrabold text-4xl text-center mb-5">
                <p>TO DO</p>
                <hr class="border-black">
            </div>

            <!-- PRIMERA PARTE (Tablet) -->
            <div :class="tablet ? 'text-gray-700 line-through' : 'text-gray-600 font-bold'">

                <p>- Encontrar la forma de acceder al iPad</p>

            </div>

            <!-- SEGUNDA PARTE (Apps) -->
            <div>
                <p :class="completado ? 'text-gray-700 line-through' : 'text-gray-600 font-bold'">- Aplicaciones pendientes de acceso:</p>
                <div class="flex flex-col text-sm p-3">
                    <p :class="gmail ? 'text-gray-700 line-through' : 'text-gray-500'">• Gmail </p>
                    <p :class="instagram ? 'text-gray-700 line-through' : 'text-gray-500'">• Instagram </p>
                    <p :class="twitter ? 'text-gray-700 line-through' : 'text-gray-500'">• Twitter </p>
                    <p :class="whass ? 'text-gray-700 line-through' : 'text-gray-500'">• Whatsapp </p>

                </div>
            </div>

            <!-- TERCERA PARTE (Cambio de contraseña) -->
            <div :class="completado ? 'text-gray-700 font-bold' : 'text-gray-600 font-bold'">

                <p>- Configurar una contraseña segura</p>
                <p class="ml-4 text-sm font-normal mb-3">{{ msjContraseña }}</p>

                <router-link to="/final" :class="{'hidden' : !completado}" class="ml-4 hover:underline">Cambiar Contraseña</router-link>

            </div>

        </div>
        </div>

        
        <router-link to="/inicio/cuaderno" class="mt-3 hover:text-[#0ED800]">
            <h1>CERRAR</h1>
        </router-link>
    </div>

</template>

<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import { usePartidaStore } from '@/stores/partidaStore';

const partidaStore = usePartidaStore();
const tablet = ref(null);
const gmail = ref(null);
const instagram = ref(null);
const twitter = ref(null);
const whass = ref(null);
const completado = ref(null);

const msjContraseña = ref('*Despues de desloquear todas las aplicaciones*');

onMounted(async () => {
    try {
        const partida = await partidaStore.comprobarPartida();
        tablet.value = partida.data.tablet;
        gmail.value = partida.data.gmail;
        instagram.value = partida.data.instagram;
        twitter.value = partida.data.twitter;
        whass.value = partida.data.whatsapp;
        completado.value = partida.data.completado;

        if(completado.value){
            msjContraseña.value = 'Todas las aplicaciones están desbloqueadas. ¡Es hora de cambiar la contraseña!';
        }
    } catch (error) {
        console.error(error)
    }
    
});
</script>
