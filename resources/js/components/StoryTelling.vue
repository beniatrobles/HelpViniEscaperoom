<template>
  <div :class="{'opacity-0' : pantallaCarga}" class="absolute top-0 left-0 bg-black w-full h-screen  transition duration-[8s]">
    <div class="h-screen overflow-hidden">
      <img :src="'/storage/img/mesa.jpg'" class="w-full h-screen z-[-10] pointer-events-none">
      
      <!-- Botón hoja -->
      <router-link to="" class="hoja w-[250px] h-[250px] hover:scale-110 hover:rotate-[-7deg] duration-200">
        <img :src="'/storage/img/hoja-papel.png'" @click="mostrarNota">
      </router-link>
      
      <!-- Nota -->
      <div :class="{'scale-0' : !notaVisible }" class="absolute inset-0 m-auto flex justify-center items-center h-[85vh] transition duration-400">
        <img :src="'/storage/img/hoja-papel.png'" class="scale-110 absolute">
        <p class="texto_story absolute translate-x-7 text-black text-3xl font-extrabold max-w-[330px]"> 
          {{ story[parrafo] }} 
        </p>
        <!-- Botón anterior -->
        <button v-if="parrafo < 4" :class="parrafo > 0 ? 'text-white hover:text-[#0ED800]' : 'text-gray-500 cursor-auto'" class="z-10 mt-auto ml-12" @click="anterior">
          <h1>Anterior</h1>
        </button>
        <!-- Botón siguiente -->
        <button v-if="parrafo < 4" :class="parrafo < 4 ? 'text-white hover:text-[#0ED800]' : 'text-gray-500 cursor-auto'" class="z-10 mt-auto ml-8" @click="siguiente">
          <h1>Siguiente</h1>
        </button>
        
        <!-- Botón "No me apetece" con movimiento -->
        <button v-if="parrafo == 4" :style="noMeApeteceBtnStyle" class="z-10 mt-auto ml-12 hover:text-[#0ED800]" @mouseenter="moverNoMeApetece">
            <h1>No me apetece</h1>
        </button>
        
        <!-- Botón "Me apunto" -->
        <button v-if="parrafo == 4" class="z-10 mt-auto ml-8 hover:text-[#0ED800]">
          <router-link to="/inicio">
            <h1>Me apunto!</h1>
          </router-link>
        </button>
      </div>
    </div>
    </div>
  </template>
  
  <script setup>
  import { onMounted, ref } from 'vue';
  import { useRouter } from 'vue-router';
  import { useAuthStore } from '@/stores/authStore';
  import { usePartidaStore } from '../stores/partidaStore';
  const authStore = useAuthStore();
  const router = useRouter();
  const partidaStore = usePartidaStore();
  
  const pantallaCarga = ref(true)
  const notaVisible = ref(false);
  const mostrarNota = () => notaVisible.value = true;
  
  const story = ref([
    "Vinicius ha cometido un error muy típico entre los usuarios de internet. Utilizar la misma contraseña en todas sus cuentas de redes sociales.",

    "Recientemente ha sido víctima de un ataque de phising, revelando así la contraseña que otorga acceso a todas sus cuentas de redes sociales. Además, cuenta con una protección nula ante este tipo de ataques, pues no cuenta con ningún sistema de protección como la verificación en dos pasos, verificación multifactor etc.",

    "Los atacantes están haciendo un uso indebido de sus redes sociales, compartiendo imágenes y textos que tratan de manchar la imagen pública de Vini. Esto está afectando directamente al rendimiento deportivo del jugador, imposibilitando su sueño. ¡Ganar el balón de oro!",

    "Necesitamos un verdadero profesional para tratar de solucionar esto antes de que la situación empeore y sea demasiado tarde. Creemos que tú, sí, TÚ, eres la persona perfecta para liderar esta misión y devolverle a Vini lo que le pertenece.",

    "¿Que nos dices? Te apuntas a recuperar la identidad digital de Vinicius? No tenemos mucho tiempo."
  ]);
  
  const parrafo = ref(0);
  
  // Lógica para avanzar al siguiente párrafo
  const siguiente = () => parrafo.value != 4 ? parrafo.value++ : '';
  // Lógica para retroceder al párrafo anterior
  const anterior = () => parrafo.value != 0 ? parrafo.value-- : '';
  
  // Lógica para mover el botón "No me apetece"
  const moverNoMeApetece = () => {
    // Movimiento aleatorio
    const randomX = Math.random() * 600;
    const randomY = Math.random() * 600;
  
    // Actualizar el estilo del botón con el movimiento
    noMeApeteceBtnStyle.value = {
      transform: `translate(${randomX}px, ${randomY}px)`,
      transition: 'transform 0.3s ease',
    };
  
  };
  
  const noMeApeteceBtnStyle = ref({});
  
  onMounted(async () => {
    // Llamamos a la función checkToken para verificar el estado de la sesión
    authStore.checkToken();
    // Si no hay token o el usuario no está autenticado, redirigir a la página de login
    if (!authStore.token || !authStore.user) {
      router.push('/login'); // Redirigir a la página de login
    }

    //comprobamos que no sea la primera vez que entra (para que no le salga el loader cada vez que actualiza)
    const partida = await partidaStore.comprobarPartida()  
  //  console.log(partida)
    if (partida) {
      router.push('/inicio')
    }

    setTimeout(() => {
      pantallaCarga.value = false
      
    }, 1);
  });
  </script>
  
  <style scoped>
  @import url('https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap');
  
  .texto_story {
    font-family: 'Grape Nuts', cursive;
  }
  
  .hoja {
    position: absolute;
    inset: 0;
    margin: auto;
    animation: hoja 5s 1 ease-out;
  }
  
  @keyframes hoja {
    0% {
      top: -2000px;
    }
  }
  
  /* Estilo del botón de "No me apetece" con movimiento */
  button {
    transition: transform 0.3s ease;
  }
  </style>
  