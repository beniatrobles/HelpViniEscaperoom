<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-[#DBD8D4] h-[100%] items-center justify-center">
                <div class="flex flex-col bg-zinc-200 w-[500px] h-[350px] drop-shadow-2xl shadow-zinc-700 rounded-2xl items-center">
                    <div class="flex flex-col space-y-4 h-[100%] w-[50%] items-center justify-center text-green-500">
                        <img :src="'/storage/img/apps/whatsapp.png'" alt="" class="w-[50px] h-[50px] mr-1 relative">
                        <h2 class="text-black font-bold">Inicio de sesión</h2>
                    </div>
                    <div class="flex flex-col h-[100%] w-[50%] items-center text-center">
                        <p class="w-full text-sm mb-2 text-red-600 un">{{ error }}</p>
                        <form @submit.prevent="loginGmail" action="" class="mb-1 space-y-4 flex flex-col items-center">
                            <input type="text" name="Numero" placeholder="Número de telefono"
                                class="border-gray-400 border-[1px] text-black rounded outline-none py-1 px-[2px]"
                                v-model="telefono">
                            <input type="submit" value="Iniciar sesión"
                                class="bg-emerald-600 p-2 rounded items-center justify-center hover:cursor-pointer hover:bg-emerald-500">
                        </form>
                    </div>
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

const telefono = ref('')
const error = ref('')

const loginGmail = async () => {
    if (telefono.value === '627 158 155' || telefono.value === '627158155') {

        router.push('/inicio/tablet/whassL2');
    } else {
        error.value = 'Número de telefono incorrecto'
    }
}


onMounted(async () => {
    const partida = await partidaStore.comprobarPartida()
    const whatsapp = partida.data.whatsapp;
    if (whatsapp) {
        router.push('/inicio/tablet/whatsapp');
    }

});

</script>