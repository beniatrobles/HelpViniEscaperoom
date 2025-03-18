<template>
  <loading v-if="loaderVisible"></loading>
  <Informacion v-if="informacionVisible" @empezar="ocultarInformacion"></Informacion>
  <div class="h-screen relative overflow-hidden">
    <div class="absolute m-3">
      <h1>{{ tiempoFormateado }}</h1>
    </div>

    <router-link to="/"
      class="absolute left-[2%] top-[6%] w-[30px] flex flex-col items-center space-y-3 hover:text-[#0ED800]">
      <img :src="'/storage/img/exit.png'" alt="">
      <h1 class="text-[10px]">SALIR</h1>
    </router-link>
    
    <img :src="'/storage/img/mesa.jpg'" class="w-[100%] h-[100%] z-[-10]">
    <router-link to="/inicio/tabletBloq"
      class="absolute w-[350px] rotate-[-80deg] top-0 right-[25%]  z-10 hover:scale-[1.05] hover:z-20 duration-200 hover:rotate-[-83deg]">
      <img :src="'/storage/img/ipad.png'"> </router-link>
    <router-link to="/inicio/revista"
      class="absolute w-[250px] rotate-[-10deg] top-[200px] right-[45%] hover:scale-[1.05] hover:z-20 duration-200 hover:rotate-[-8deg]">
      <img :src="'/storage/img/revista.jpg'"> </router-link>
    <router-link to="/inicio/polaroid"
      class="absolute w-[100px] rotate-[-10deg] bottom-[100px] right-[-1%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-[-5deg] brightness-90">
      <img :src="'/storage/img/polaroid.jpg'"> </router-link>
    <router-link to="/inicio/postit"
      class="absolute w-[120px] rotate-[-10deg] top-[100px] left-[5%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-0">
      <img :src="'/storage/img/postit.png'" alt="" class="brightness-75"></router-link>

    <router-link to="/inicio/boli"
      class="absolute w-[25px] rotate-[25deg] top-[80px] left-[12%] z-10 hover:rotate-[5deg] hover:scale-[1.1] transition duration-200">
      <img :src="'/storage/img/boli.png'">
    </router-link>

    <router-link to="/inicio/clips"
      class="absolute w-[100px] rotate-[-20deg] top-[200px] left-[5%] z-10 hover:scale-[1.1] hover:rotate-[-30deg] transition duration-200">
      <img :src="'/storage/img/clips.png'">
    </router-link>

    <router-link to="/inicio/platano"
      class="absolute w-[250px] bottom-[6%] left-[-7%] z-10 brightness-75 hover:scale-[1.05] hover:rotate-[5deg] transition duration-200">
      <img :src="'/storage/img/platano.png'">
    </router-link>

    <router-link to="/inicio/morado">
      <img
        class="absolute w-[15px] top-[7%] left-[23%] rotate-[3deg] brightness-90 hover:scale-[1.1] hover:rotate-[10deg] transition duration-200"
        :src="'/storage/img/morado.png'" alt="">
    </router-link>

    <router-link to="/inicio/rojo">
      <img
        class="absolute w-[15px] top-[7%] left-[24%] rotate-[-2deg] brightness-90 hover:scale-[1.1] hover:rotate-[-10deg] transition duration-200"
        :src="'/storage/img/rojo.png'" alt="">
    </router-link>

    <router-link to="/inicio/verde">
      <img
        class="absolute w-[14px] top-[7%] left-[25%] rotate-[4deg] brightness-90 hover:scale-[1.1] hover:rotate-[10deg] transition duration-200"
        :src="'/storage/img/verde.png'" alt="">
    </router-link>

    <router-link to="/inicio/azul">
      <img
        class="absolute w-[15px] top-[7%] left-[26.5%] rotate-[-15deg] brightness-90 hover:scale-[1.1] hover:rotate-[-5deg] transition duration-200"
        :src="'/storage/img/azul.png'" alt="">
    </router-link>

    <router-link to="/inicio/mechero"
      class="absolute w-[75px] top-[300px] right-[10%] z-[100] rotate-[20deg] hover:scale-[1.1] hover:rotate-[5deg] transition duration-200">
      <img :src="'/storage/img/mechero.png'">
    </router-link>

    <router-link to="/inicio/airpods"
      class=" absolute top-[20%] right-[7%] flex rotate-[-10deg] cursor-pointer transition duration-200 hover:scale-[1.05] hover:rotate-[-5deg]">
      <img :src="'/storage/img/airpods.png'" class=" w-[80px] ">
      <img :src="'/storage/img/airpods.png'" class=" w-[80px] rotate-[-20deg] scale-x-[-1]">
    </router-link>
    <router-link to="/inicio/cuaderno"
      class="absolute right-[25%] bottom-[0] w-[200px] rotate-[82deg] hover:scale-[1.05] hover:z-20 duration-200 hover:rotate-[80deg]">
      <img :src="'/storage/img/cuaderno.png'"> </router-link>
    <router-view class="absolute inset-0 z-[100]"></router-view>

  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { useRouter } from 'vue-router';
import { useAuthStore } from '@/stores/authStore'
import { usePartidaStore } from '@/stores/partidaStore';
import axios from 'axios';
import loading from './loading.vue';
import Informacion from './Informacion.vue';

const router = useRouter();
const authStore = useAuthStore();
const partidaStore = usePartidaStore();

let intervalo; // Controla el temporizador
const loaderVisible = ref(true);
const informacionVisible = ref(false);

const ocultarInformacion = () => informacionVisible.value = false;

// Formatea el tiempo en formato MM:SS
const tiempoFormateado = computed(() => {
  const minutos = Math.floor(partidaStore.tiempoRestante / 60);
  const segundos = partidaStore.tiempoRestante % 60;
  return `${String(minutos).padStart(2, '0')}:${String(segundos).padStart(2, '0')}`;
});

// Iniciar temporizador
const iniciarTemporizador = () => {
  intervalo = setInterval(async () => {
    if (partidaStore.tiempoRestante > 0) {
      await partidaStore.reducirTiempo(1); // Reduce 1 segundo y sincroniza con BD
    } else {
      clearInterval(intervalo);
      alert('¡La partida ha terminado!');
      try {
        const partida = await partidaStore.comprobarPartida();
        await partidaStore.cambiarEstado('terminado', partida.data.id_partida);
      } catch (error) {
        console.error(error);
      }
      router.push("/");
    }
  }, 1000); // Cada segundo
};

onMounted(async () => {
  authStore.checkToken();
  if (!authStore.token || !authStore.user) {
    router.push('/login');
  } else {
    try {
      await axios.post('/crear-partida', {
        primera_vez : false,
        tablet: false,
        gmail: false,
        instagram: false,
        twitter: false,
        whatsapp: false,
        completado: false,
        tiempo: 18000,
        id_usuario: authStore.user.id,
        terminado : 0,
        penalizar : 0,
      });
    } catch (e) {
      console.error(e.request.responseText);
    }

    partidaStore.idUsuario = authStore.user.id;
    await partidaStore.cargarTiempo();
    iniciarTemporizador();

    const partida = await partidaStore.comprobarPartida();
    const NoPrimeraVez = partida.data.primera_vez;

    if (NoPrimeraVez) {
      loaderVisible.value = false;
    } else { 
      setTimeout(() => {
        loaderVisible.value = false;
        informacionVisible.value = true;
      }, 5000);
      
      try {
        await partidaStore.cambiarEstado('primera_vez', partida.data.id_partida);
      } catch (error) {
        console.error(error);
      }
    }
  }
});

onUnmounted(() => {
  clearInterval(intervalo);
});
</script>


<style scoped>

</style>
