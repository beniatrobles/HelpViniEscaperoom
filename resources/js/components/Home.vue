<template>
  <UserCard/>
    <div class="flex flex-col justify-center items-center h-screen">
      <h1 class="text-[40px] max-w-max overflow-hidden whitespace-nowrap titulo__inicio">Help <span class="text-[#0ED800]">Vini</span> Escape Room</h1>
      <img :src="'/storage/img/Logo.png'" class="img__inicio" width="450px">
      <p class="parrafo__inicio mb-3">Lanzate a la aventura y ayuda a vini a recuperar sus redes sociales</p>
      <router-link to="/inicio" class="bg-[#0ED800] px-[180px] py-[35px] text-xl active:shadow-none active:translate-y-[15px] rounded-[5px] btn__inicio">Comencemos</router-link>
    </div>
  </template>
  
  <script setup>
  import UserCard from './UserCard.vue';

  </script>