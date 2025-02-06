<template>

    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class=" w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer">
            </div>
            <div class="absolute z-[-10] inset-0 bg-black"> 
                <img class="w-full blur" :src="'/storage/img/fondoTablet.jpg'" alt="">
            </div>
            <div class="absolute w-full h-full flex justify-center items-center flex-col bg-black bg-opacity-50">
                <p>{{ alerta }}</p>
                <input type="password" placeholder="PIN" readonly
                    class="outline-none text-center bg-transparent text-3xl my-4" v-model="pin">

                <div class="grid grid-cols-3 gap-3">
                    <button class="btn__numero" @click="introducirNumero(1)">1</button>
                    <button class="btn__numero" @click="introducirNumero(2)">2</button>
                    <button class="btn__numero" @click="introducirNumero(3)">3</button>
                    <button class="btn__numero" @click="introducirNumero(4)">4</button>
                    <button class="btn__numero" @click="introducirNumero(5)">5</button>
                    <button class="btn__numero" @click="introducirNumero(6)">6</button>
                    <button class="btn__numero" @click="introducirNumero(7)">7</button>
                    <button class="btn__numero" @click="introducirNumero(8)">8</button>
                    <button class="btn__numero" @click="introducirNumero(9)">9</button>
                    <button @click="probarContra">Enviar</button>
                    <button class="btn__numero" @click="introducirNumero(0)">0</button>
                    <button @click="borrarNumero">Borrar</button>
                </div>
            </div>
        </div>

        <router-view class="absolute inset-0 z-[100]"></router-view>

    </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { useRouter } from 'vue-router';
import axios from 'axios';
import { useAuthStore } from '@/stores/authStore'
import { usePartidaStore } from '@/stores/partidaStore';
const router = useRouter();
const authStore = useAuthStore();
const partidaStore = usePartidaStore();

const alerta = ref('Introduce el PIN')
const pin = ref('')

const probarContra = async () => {
    pin.value === "1234" ? router.push('/inicio/tablet') : alerta.value = 'Pin Incorrecto'

    if (pin.value === "1234") {
        try {
            //sacamos el numero de la partida actual
            const partidaActual = await partidaStore.comprobarPartida()
            const idPartida = partidaActual.data.id_partida
            //modificamos esa partida
            await partidaStore.cambiarEstado('tablet', idPartida)
        } catch (e) {
            console.log("ERROR", e)
        }


        router.push('/inicio/tablet');
    } else {
        alerta.value = 'Pin Incorrecto';
        pin.value = '';
    }
}

const introducirNumero = (numero) => {
    pin.value += numero;
}


const borrarNumero = () => {
    pin.value = pin.value.slice(0, -1);
}
const introducirNumeroTecado = (e) => {
    if (/\d/.test(e.key)) {
        introducirNumero(e.key); // Si es un número, lo agrega al PIN
    } else if (e.key === 'Backspace') {
        borrarNumero();
    } else if (e.key === 'Enter') probarContra()
};



onMounted(async () => {
    const partida = await partidaStore.comprobarPartida()
    const tablet = partida.data.tablet; 
   
    if (tablet) {
        router.push('/inicio/tablet');
    }

    window.addEventListener('keydown', introducirNumeroTecado);
});
//para que al cerrar el componente no exista el evento
onBeforeUnmount(() => {
    window.removeEventListener('keydown', introducirNumeroTecado);
});

</script>

<style scoped>
.btn__numero {
    width: 65px;
    aspect-ratio: 1/1;
    border: 1px solid white;
    border-radius: 50%;
}
</style>