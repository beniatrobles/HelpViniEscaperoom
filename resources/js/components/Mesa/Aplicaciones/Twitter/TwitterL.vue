<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-gray-900 h-[100%] items-center justify-center">
                <div
                    class="flex flex-col bg-gray-800 w-[60%] h-[75%] drop-shadow-2xl rounded-2xl items-center justify-center p-5 space-y-3">

                    <img class="w-[15%]" :src="'/storage/img/apps/iconos/twitterPajaro.png'" alt="">
                    <p class="font-bold text-xl">Inicia sesión en Twitter</p>

                    <p class="flex w-full text-sm mb-2 text-red-600 justify-center">{{ error }}</p>
                    <form @submit.prevent="loginInstagram" action="" class="mb-1 space-y-5 flex flex-col items-center">
                        <div class="space-y-2">
                            <p>Nombre de usuario</p>
                            <input type="text" name="Usuario" placeholder="Nombre de usuario"
                                class="border-blue-400 border-[2px] bg-gray-800 text-white rounded-2xl outline-none py-1 px-[6px]"
                                v-model="usuario">
                        </div>
                        <div class="space-y-2">
                            <p>Contraseña</p>
                            <input type="password" name="Password" placeholder="Contraseña"
                                class="border-blue-400 border-[2px] bg-gray-800 text-white rounded-2xl outline-none py-1 px-[6px]"
                                v-model="contra">
                        </div>
                        <div>
                            <input type="submit" value="Iniciar sesión"
                                class="bg-blue-500 py-2 px-14 rounded-3xl items-center justify-center hover:cursor-pointer hover:bg-blue-600">
                        </div>
                    </form>

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

const loginInstagram = async () => {
    if (usuario.value === 'vinijr' && contra.value === 'ViniMononeuronal1') {

        try {
            //sacamos el numero de la partida actual
            let partidaActual = await partidaStore.comprobarPartida()
            const idPartida = partidaActual.data.id_partida
            //modificamos esa partida
            await partidaStore.cambiarEstado('twitter', idPartida)

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

        router.push('/inicio/tablet/twitter');
    } else {
        error.value = 'Credenciales incorrectas'
    }
}


onMounted(async () => {
    const partida = await partidaStore.comprobarPartida()
    const twitter = partida.data.twitter;
    if (twitter) {
        router.push('/inicio/tablet/twitter');
    }

});

</script>