<template>
  <div class="h-screen relative overflow-hidden">
    <div class="absolute">
      <h1>{{ tiempoFormateado }}</h1>
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

    <router-link to="">
      <img
        class="absolute w-[250px] bottom-[20%] left-[15%] rotate-[15deg] brightness-90 hover:scale-[1.1] hover:rotate-[25deg] transition duration-200"
        :src="'/storage/img/trapo.png'" alt="">
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

    <router-link to="/"
      class="absolute left-[1%] top-[5%] w-[30px] flex flex-col items-center space-y-3 hover:text-[#0ED800]">
      <img :src="'/storage/img/exit.png'" alt="">
      <h1 class="text-[10px]">SALIR</h1>

    </router-link>


  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { useRouter } from 'vue-router';
import { useAuthStore } from '@/stores/authStore'
import axios from 'axios';

const router = useRouter();
const authStore = useAuthStore();

const tiempoRestante = ref(0); // Tiempo en segundos
const userId = ref(0); // Cambia este valor al ID del usuario autenticado
let intervalo; // Controla el temporizador

// Formatea el tiempo en formato MM:SS
const tiempoFormateado = computed(() => {
  const minutos = Math.floor(tiempoRestante.value / 60);
  const segundos = tiempoRestante.value % 60;
  return `${String(minutos).padStart(2, '0')}:${String(segundos).padStart(2, '0')}`;
});

// Cargar tiempo restante desde la base de datos para la partida activa
const cargarTiempo = async () => {
  try {
    const response = await axios.get(`/partida/${userId.value}/tiempo`);
    tiempoRestante.value = response.data.tiempo; // Actualiza el tiempo desde la base de datos
  } catch (error) {
    console.error('Error al cargar el tiempo:', error);
  }
};

// Sincronizar tiempo restante con el servidor
const sincronizarTiempo = async () => {
  try {
    await axios.post(`/partida/${userId.value}/actualizarTiempo`, {
      tiempo: tiempoRestante.value,
    });
  } catch (error) {
    console.error('Error al sincronizar el tiempo:', error);
  }
};

// Iniciar temporizador
const iniciarTemporizador = () => {
  intervalo = setInterval(() => {
    if (tiempoRestante.value > 0) {
      tiempoRestante.value--;
      // Sincronizar con el servidor cada 5 segundos
      if (tiempoRestante.value % 5 === 0) {
        sincronizarTiempo();
      }
    } else {
      clearInterval(intervalo);
      alert('¡La partida ha terminado!');
      router.push("/");
    }
  }, 1000); // Cada segundo
};

onMounted(async () => {
  // Llamamos a la función checkToken para verificar el estado de la sesión
  authStore.checkToken();
  // Si no hay token o el usuario no está autenticado, redirigir a la página de login
  if (!authStore.token || !authStore.user) {
    router.push('/login'); // Redirigir a la página de login
  } else {
    try {
      const respuesta = await axios.post('/crear-partida', {
        tablet: false,
        gmail: false,
        instagram: false,
        twitter: false,
        whatsapp: false,
        completado: false,
        tiempo: 1800,
        id_usuario: authStore.user.id,
      })
    } catch (e) {
      console.error(e.request.responseText)
    }
    userId.value = (authStore.user.id)
    await cargarTiempo(); // Carga la partida activa y su tiempo
    iniciarTemporizador(); // Inicia el temporizador

  }
});

// Detener temporizador al salir del componente
onUnmounted(() => {
  clearInterval(intervalo);
  sincronizarTiempo(); // Sincroniza antes de salir
});
</script>

<style scoped></style>
