<template>
  <div class="h-screen relative overflow-hidden">

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
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import { useAuthStore } from '@/stores/authStore'

const router = useRouter();
const authStore = useAuthStore();

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
        tiempo: 30,
        id_usuario: authStore.user.id,
      })
    } catch (e) {
      console.error(e.request.responseText)
    }
  }
});
</script>

<style scoped></style>
