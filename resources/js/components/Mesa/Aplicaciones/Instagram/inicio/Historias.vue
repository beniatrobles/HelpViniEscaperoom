<template>
    <div class="bg-zinc-900 flex justify-center gap-2 items-center">

        <router-link to="/inicio/tablet/instagram" class="absolute top-5 right-5 text-2xl font-bold">X</router-link>

        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
            class="bg-gray-50 w-5 p-1 rounded-full hover:bg-opacity-100 rotate-[180deg]"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 1, 'bg-opacity-75 cursor-pointer' : historiaSeleccionada != 1 }"
            @click="anterior">

        <div class="w-[35%] h-full relative">
            <div :class="{ 'block': historiaSeleccionada == 1, 'hidden': historiaSeleccionada != 1 }"
                class="w-full h-full absolute bg-gray-500">RealMadrid</div>
            <div :class="{ 'block': historiaSeleccionada == 2, 'hidden': historiaSeleccionada != 2 }"
                class="w-full h-full absolute bg-red-500">Cristiano</div>
            <div :class="{ 'block': historiaSeleccionada == 3, 'hidden': historiaSeleccionada != 3 }"
                class="w-full h-full absolute bg-green-500">Unicef</div>
            <div :class="{ 'block': historiaSeleccionada == 4, 'hidden': historiaSeleccionada != 4 }"
                class="w-full h-full absolute bg-pink-500">Rodrygo</div>
            <div :class="{ 'block': historiaSeleccionada == 5, 'hidden': historiaSeleccionada != 5 }"
                class="w-full h-full absolute bg-black">K.mbappe</div>
            <div :class="{ 'block': historiaSeleccionada == 6, 'hidden': historiaSeleccionada != 6 }"
                class="w-full h-full absolute bg-slate-600">Isabella</div>
        </div>

        <!-- <router-link to=""> -->
        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
            class="bg-gray-50 w-5 p-1 rounded-full hover:bg-opacity-100"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 6, 'bg-opacity-75 cursor-pointer' : historiaSeleccionada != 6 }"
            @click="siguiente">
        <!-- </router-link> -->
    </div>
</template>


<script setup>
import { ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';
//para acceder a la ruta actual
const route = useRoute();
//para redireccionar
const router = useRouter();
//la historia seleccionada será la pasada por parametro en la url.
const historiaSeleccionada = ref(Number(route.params.id))

const siguiente = () =>{
    if(historiaSeleccionada.value != 6){
        historiaSeleccionada.value++
        //actualizamos tambien la url
        router.push(`/inicio/tablet/instagram/historias/${historiaSeleccionada.value}`)
    }
} 
const anterior = () => {
    if (historiaSeleccionada.value != 1 ) {
        historiaSeleccionada.value--
        //actualizamos tambien la url
        router.push(`/inicio/tablet/instagram/historias/${historiaSeleccionada.value}`)
    }
}


</script>