<template>
    <div class="flex flex-col w-[100%] h-[100%] bg-zinc-900 border-r border-zinc-800 pr-2">
        <div class="flex h-full pb-4 overflow-auto" ref="contenedorMensajes">
            <div class="flex flex-col gap-5 mt-auto w-full">
 <div class="text-xs pl-2 border-l text-gray-400 border-gray-400"><p>Te mencionó en su historia</p><p class="max-w-max bg-zinc-800 px-1 py-[2px] text-xs rounded-full mr-3">❤️</p></div>
                <p class="text-xs pl-2 border-l text-gray-400 border-gray-400">Te mencionó en su historia</p>
                <p class="text-xs pl-2 border-l text-gray-400 border-gray-400">Te mencionó en su historia</p>
                <div class="text-xs pl-2 border-l text-gray-400 border-gray-400"><p>Te mencionó en su historia</p><p class="max-w-max bg-zinc-800 px-1 py-[2px] text-xs rounded-full mr-3">❤️</p></div>
                <p class="text-xs pr-2 border-r text-gray-400 border-gray-400 ml-auto">Mencionaste a realmadrid en tu historia</p>
                <p class="text-xs pr-2 border-r text-gray-400 border-gray-400 ml-auto">Mencionaste a realmadrid en tu historia</p>
                <p class="text-xs pl-2 border-l text-gray-400 border-gray-400">Te mencionó en su historia</p>
                <p class="text-xs pr-2 border-r text-gray-400 border-gray-400 ml-auto">Mencionaste a realmadrid en tu historia</p>
 <div class="text-xs pl-2 border-l text-gray-400 border-gray-400"><p>Te mencionó en su historia</p><p class="max-w-max bg-zinc-800 px-1 py-[2px] text-xs rounded-full mr-3">❤️</p></div>
                <p class="text-xs pl-2 border-l text-gray-400 border-gray-400">Te mencionó en su historia</p>
                <div class="text-xs pl-2 border-l text-gray-400 border-gray-400"><p>Te mencionó en su historia</p><p class="max-w-max bg-zinc-800 px-1 py-[2px] text-xs rounded-full mr-3">❤️</p></div>
                <div class="text-xs pl-2 border-l text-gray-400 border-gray-400">
                    Te mencionó en su historia
                    <router-link :to="{name : 'historias', params : {id : 11}}" class="]">
                        <div class="bg-black w-[80px] h-[130px] rounded"></div>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="mt-auto flex gap-2">
            <input type="text" placeholder="Mensaje"
                class="w-[100%] px-2 bg-transparent outline-none border border-zinc-600 rounded-full" v-model="mensaje" @keydown.enter="mostrarMensaje">
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
import { ref, onMounted } from 'vue';
import { usePartidaStore } from '@/stores/partidaStore';
const partidaStore = usePartidaStore();
const mensajeVisible = ref(false)
const mensaje = ref('')
const contenedorMensajes = ref(null);

const mostrarMensaje = async () => {
    if (mensaje.value.trim() === '') return;

    try {
        // Consultamos en la BD si "penalizar" es true o false
        const response = await partidaStore.comprobarPartida();
        const penalizar = response.data.penalizar;
        const idPartida = response.data.id_partida

        if (penalizar) {
            // Si está penalizado, reducimos el tiempo y mostramos el mensaje de advertencia
            await partidaStore.reducirTiempo(180); // Penalización de 30 segundos
            mensaje.value = ''
        } else {
            mensajeVisible.value = true;
            await partidaStore.cambiarEstado('penalizar', idPartida)
            mensaje.value = ''
        }
    } catch (error) {
        console.error('Error al verificar la penalización:', error);
    }
};

const ocultarMensaje = () => {
    mensajeVisible.value = false
}
onMounted(() => {
    if (contenedorMensajes.value) {
        contenedorMensajes.value.scrollTop = contenedorMensajes.value.scrollHeight;
    }
});
</script>

<style scoped>
::-webkit-scrollbar {
    width: 0px;
}
</style>