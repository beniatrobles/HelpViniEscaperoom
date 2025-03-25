<template>
    <div class="bg-zinc-900 flex justify-center gap-2 items-center">

        <router-link :to=" historiaSeleccionada != 11 ? '/inicio/tablet/instagram' : '/inicio/tablet/instagram/mensajes/mensaje3'" class="absolute top-5 right-5 text-2xl font-bold">X</router-link>

        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
        v-if="historiaSeleccionada != 11"
            class="bg-gray-50 w-5 p-1 rounded-full hover:bg-opacity-100 rotate-[180deg]"
            :class="{ 'bg-opacity-30 hover:bg-opacity-30 cursor-default': historiaSeleccionada == 1, 'bg-opacity-75 cursor-pointer' : historiaSeleccionada != 1 }"
            @click="anterior">

        <div class="w-[35%] h-full relative">
            <div :class="{ 'hidden': historiaSeleccionada != 1 && historiaSeleccionada != 11 }" class="w-full h-full absolute bg-green-700 p-2 bg-[url('https://s1.elespanol.com/2023/12/26/elbernabeu/real-madrid/futbol/820178229_238704974_1706x1280.jpg')] bg-contain bg-no-repeat bg-center">
                <div class="flex items-center gap-1">
                    <img src="https://img.uefa.com/imgml/TP/teams/logos/240x240/50051.png" class="bg-white w-[30px] h-[30px] rounded-full">
                    RealMadrid
                </div>
                <p class="m-auto w-full text-center mt-14 text-lg">Así comenzamos el día!💪</p>
            </div>

            <div :class="{ 'hidden': historiaSeleccionada != 2 }" class="w-full h-full absolute bg-black p-2 bg-[url('https://pbs.twimg.com/media/FEbpAcWUcAIOcNV.jpg')] bg-contain bg-no-repeat bg-center">
                <div class="flex items-center gap-1">
                    <img :src="'/storage/img/elbicho.jpg'" class="bg-white w-[30px] h-[30px] rounded-full">
                    cristiano
                </div>
            </div>

            <div :class="{ 'hidden': historiaSeleccionada != 3 }" class="w-full h-full absolute bg-green-500 p-2 bg-[url('https://i.pinimg.com/736x/92/e7/63/92e763f1d0d13cb201bccdf615d25227.jpg')] bg-cover bg-no-repeat bg-center">
                <div class="flex items-center gap-1">
                    <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnGAPKh4654-MEj7yDcR6g0Rkx8-dhZT_XGg&s'" class="bg-white w-[30px] h-[30px] rounded-full">
                    uinicef
                </div>
            </div>

            <div :class="{ 'hidden': historiaSeleccionada != 4 }" class="w-full h-full absolute bg-pink-500 p-2 bg-[url('https://cervezasailor.es/wp-content/uploads/2023/03/pulpo-blog3-1.jpg')] bg-cover bg-no-repeat bg-center">
                <div class="flex items-center gap-1">
                    <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGduAYZu40pJv-hwn8r9xd-nUnTYod03eUtQ&s'" class="bg-white w-[30px] h-[30px] rounded-full">
                    rodrygo
                </div>
                <p class="flex justify-center items-center h-5/6 text-2xl">😋</p>

            </div>

            <div :class="{ 'hidden': historiaSeleccionada != 5 }" class="w-full h-full absolute bg-black p-2 bg-[url('https://i.pinimg.com/736x/3d/6e/1f/3d6e1f66ff3506739269a3aca0bc34d1.jpg')] bg-cover bg-no-repeat bg-center">
                <div class="flex items-center gap-1">
                    <img :src="'https://img.uefa.com/imgml/TP/players/1/2025/324x324/250076574.jpg'" class="bg-white w-[30px] h-[30px] rounded-full">
                    k.mbappe
                </div>
                <p class="text-2xl font-mono mt-4">Focus🎯</p>
            </div>

            <div :class="{ 'hidden': historiaSeleccionada != 6 }" class="w-full h-full absolute bg-black p-2 bg-[url('https://i.pinimg.com/736x/67/f4/d9/67f4d9300e76fd6dbe716773894fcdeb.jpg')] bg-contain bg-no-repeat bg-center">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-1">
                        <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT15IRafVbIgby17P2PXOVL7KctiqZYtaNU2w&s'" class="bg-white w-[30px] h-[30px] rounded-full object-cover object-top">
                        isabella
                    </div>
                    <img src="https://media0.giphy.com/media/5P1BM8QaZmimJltOGs/200.gif" class="w-[35px]">
                </div>

            </div> 
        </div>

        <!-- <router-link to=""> -->
        <img :src="'/storage/img/apps/iconos/icon-pasar_historia.png'"
        v-if="historiaSeleccionada != 11"
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