<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-gray-950 h-[100%] items-center justify-center">
                <div
                    class="flex flex-col bg-zinc-800 w-[60%] h-[75%] drop-shadow-2xl rounded-2xl items-center justify-center p-5 space-y-10">

                    <img class="w-[15%]" :src="'/storage/img/apps/drive.png'" alt="">
                    <p class="font-bold text-xl">Ningún inicio de sesión</p>

                    <div class="flex items-center justify-center text-center">

                        <p class="text-sm text-gray-400">Vaya... Parece que no has iniciado sesión con ninguna cuenta de Gmail en el dispositivo todavía.</p>

                    </div>

                    <router-link to="/inicio/tablet" class="rounded bg-zinc-700 hover:bg-zinc-600 p-3">

                        <p>Atrás</p>

                    </router-link>

                </div>
            </div>
            <router-link to="/inicio/tablet"
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
        </div>
    </div>
</template>


<script setup>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import { usePartidaStore } from '@/stores/partidaStore';

const partidaStore = usePartidaStore();
const router = useRouter()

onMounted(async () => {
    const partida = await partidaStore.comprobarPartida()
    const gmail = partida.data.gmail;
    if (gmail) {
        router.push('/inicio/tablet/drive');
    }

});

</script>