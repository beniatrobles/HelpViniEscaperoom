<template>
    <div class="absolute top-7 right-4 flex flex-col items-end">
      <!-- Tarjeta principal -->
      <div class="flex items-center underline cursor-pointer" @click="toggleDropdowns">
        <p class="mt-2 text-white">{{ authStore.user?.nombre || 'Invitado' }}</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-4 h-4 mt-3 text-white" :class="'rotate-['+deg+'deg]'">
          <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
        </svg>
      </div>
  
      <!-- Opciones desplegables -->
      <div v-if="dropdownVisible" class="bg-black shadow-lg border border-white w-80">
        <div v-if="authStore.user">
          <div class="p-4 flex justify-center">
            <router-link to="/editarPerfil" class="mt-2 text-white border-b border-white">Editar Perfil</router-link>
          </div>
          <div class="p-4 flex justify-center">
            <a href="#" @click="logout" class="mt-2 text-white border border-white px-4">Cerrar Sesión</a>
          </div>
        </div>
        <div v-else>
          <div class="p-4 flex justify-center">
            <router-link to="/login" class="mt-2 text-white border-b border-white">Iniciar Sesión</router-link>
          </div>
          <div class="p-4 flex justify-center">
            <router-link to="/registro" class="mt-2 text-white border-b border-white">Registrarse</router-link>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import { useAuthStore } from '@/stores/authStore'; // Usamos Pinia
  import { useRouter } from 'vue-router';
  
  const authStore = useAuthStore(); // Acceso a la tienda de autenticación
  const dropdownVisible = ref(false);
  const router = useRouter();
  const deg = ref(0)
  // Llamar a checkToken cuando se monta el componente
  onMounted(() => {
    authStore.checkToken();
  });
  
  const toggleDropdowns = () => {
    dropdownVisible.value = !dropdownVisible.value;
    deg.value==0? deg.value= 180 : deg.value=0
  };
  
  const logout = () => {
    authStore.logout();
    router.push('/login'); // Redirige al login
  };
  </script>
  
  <style scoped>
  /* Estilos necesarios */
  </style>
  