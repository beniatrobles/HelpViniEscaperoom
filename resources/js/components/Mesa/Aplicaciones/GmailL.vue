<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-zinc-900 h-[100%] items-center justify-center">
                <div
                    class="flex bg-zinc-800 w-[500px] h-[300px] drop-shadow-2xl rounded-2xl items-center justify-center">
                    <div class="flex h-[100%] w-[50%] items-center justify-center">
                        <img :src="'/storage/img/apps/gmailF.png'" alt="" class="w-[50px] h-[50px] mr-1 relative">
                        <h2 class="">Inicio de sesión</h2>
                    </div>
                    <div class="flex flex-col h-[100%] w-[50%] items-center justify-center">
                        <p class="w-full text-sm mb-2 text-red-600">{{ error }}</p>
                        <form @submit.prevent="loginGmail" action="" class="mb-1 space-y-4">
                            <input type="text" name="Correo" placeholder="Correo electrónico"
                                class="border-gray-400 border-[1px] text-black rounded outline-none py-1 px-[2px]"
                                v-model="usuario">
                            <input type="password" name="Password" placeholder="Contraseña"
                                class="border-gray-400 border-[1px] text-black rounded outline-none py-1 px-[2px]"
                                v-model="contra">
                            <input type="submit" value="Iniciar sesión"
                                class="bg-green-700 py-2 px-[2px] rounded items-center justify-center hover:cursor-pointer hover:bg-[#0ED800]">
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

const usuario = ref('')
const contra = ref('')
const error = ref('')

const loginGmail = async () => {
    if (usuario.value === 'vinijr07@gmail.com' && contra.value === 'viniJRbalondior2024*') {

        try {
            //sacamos el numero de la partida actual
            let partidaActual = await partidaStore.comprobarPartida()
            const idPartida = partidaActual.data.id_partida
            //modificamos esa partida
            await partidaStore.cambiarEstado('gmail', idPartida)

            //comprobamos si el resto de aplicaciones estan completadas
            partidaActual = await partidaStore.comprobarPartida()
            const gmail = partidaActual.data.gmail;
            const instagram = partidaActual.data.instagram;
            const whatsapp = partidaActual.data.whatsapp;
            const twitter = partidaActual.data.twitter;

            if(gmail && instagram && whatsapp && twitter){
                await partidaStore.cambiarEstado('completado', idPartida)
            }
        } catch (e) {
            console.log("ERROR", e)
        }

        router.push('/inicio/tablet/gmail');
    } else {
        error.value = 'Credenciales incorrectas'
    }
}


onMounted(async () => {
    const partida = await partidaStore.comprobarPartida()
    const gmail = partida.data.gmail;
    if (gmail) {
        router.push('/inicio/tablet/gmail');
    }

});

</script>