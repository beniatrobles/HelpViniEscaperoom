<template>
  <loading v-if="loaderVisible"></loading>
  <Informacion v-if="informacionVisible" @empezar="ocultarInformacion"></Informacion>
  <div class="h-screen relative overflow-hidden">
    <div class="absolute m-3">
      <h1>{{ tiempoFormateado }}</h1>
    </div>

    <div @click="preguntarSalir" class="absolute left-[2%] top-[6%] w-[30px] flex flex-col items-center gap-1 group cursor-pointer">
      <svg viewBox="0 0 24 24" width="40px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_429_11067)"> <path class="group-hover:stroke-[#0ED800]" d="M15 4.00098H5V18.001C5 19.1055 5.89543 20.001 7 20.001H15" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path class="group-hover:stroke-[#0ED800]" d="M16 15.001L19 12.001M19 12.001L16 9.00098M19 12.001H9" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <defs> <clipPath id="clip0_429_11067"> <rect width="24" height="24" fill="white" transform="translate(0 0.000976562)"></rect> </clipPath> </defs> </g></svg>
      <h1 class="text-[10px] group-hover:text-[#0ED800]">SALIR</h1>
    </div>
    
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

  <div v-if="mostrarAdvertencia1" class="w-full h-screen bg-black bg-opacity-85 absolute left-0 top-0 flex justify-center items-center z-50">
        <div class="alerta w-[375px] h-max bg-black p-5 text-center flex flex-col gap-3 relative">
            <p class="text-[#0ED800] font-bold text-lg">Salir de la partida</p>
            <p>¿Estas seguro que quieres salir de la partida?</p>

            <div class="flex justify-around absolute -bottom-4 w-full left-0">
                <div class="check w-[30px] aspect-square bg-green-500 flex justify-center items-center cursor-pointer text-lg font-bold" @click="confirmarSalir(1)">✓</div>
                <div class="cross w-[30px] aspect-square bg-red-500 flex justify-center items-center cursor-pointer text-lg" @click="confirmarSalir(2)">✗</div>
            </div>
        </div>
  </div>
  <div v-if="mostrarAdvertencia2" class="w-full h-screen bg-black bg-opacity-85 absolute left-0 top-0 flex justify-center items-center z-50">
        <div class="alerta w-[375px] h-max bg-black p-5 text-center flex flex-col gap-3 relative">
            <p class="text-[#0ED800] font-bold text-lg">Guardar partida</p>
            <p>¿Desea guardar el progreso obtenido hasta el momento?</p>

            <div class="flex justify-around absolute -bottom-4 w-full left-0">
              <div class="check w-[30px] aspect-square bg-green-500 flex justify-center items-center cursor-pointer text-lg font-bold" @click="guardarPartida(1)">✓</div>
              <div class="cross w-[30px] aspect-square bg-red-500 flex justify-center items-center cursor-pointer text-lg" @click="guardarPartida(2)">✗</div>
            </div>
        </div>
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

const mostrarAdvertencia1 = ref(false);
const mostrarAdvertencia2 = ref(false);

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
      router.push("/partidaTerminada/2");
    }
  }, 1000); // Cada segundo
};

const preguntarSalir = async ()=> mostrarAdvertencia1.value = true;
  
const confirmarSalir = (respuesta) => {
  if(respuesta === 1){
      mostrarAdvertencia1.value = false;
      mostrarAdvertencia2.value = true;
      // router.push('/');
  }else{
      mostrarAdvertencia1.value = false;
  }
}

const guardarPartida = async (respuesta) => {
  if(respuesta === 2){
    mostrarAdvertencia2.value = false;
    try {
      const partida = await partidaStore.comprobarPartida();
      await partidaStore.cambiarEstado('terminado', partida.data.id_partida);
    } catch (error) {
      console.error(error);
    }
    router.push('/');
  }else{
    mostrarAdvertencia2.value = false;
    router.push('/');
  }
}

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
        tiempo: 3600,
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
.alerta{
  box-shadow: 0 0 2px gray;
}
.check{
    transition: 150ms;
    clip-path: polygon(1% 2%, 93% 3%, 97% 95%, 2% 99%);
}
.cross{
    transition: 150ms;
    clip-path: polygon(99% 2%, 7% 3%, 3% 95%, 98% 99%);
}

.check:hover{
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    background-color: #0ED800;
}

.cross:hover{
    clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%);
    background-color: #FF0000;
}
</style>
