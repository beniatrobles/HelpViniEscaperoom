<template>
  <UserCard class="z-10"/>
  <router-link to="/ranking" class="absolute top-7 left-4 flex flex-col items-end z-10 bg-[#0ED800] px-[5px] py-[2px] text-sm active:shadow-none active:translate-y-[5px] rounded-[5px] btn__ranking cursor-pointer">
    Ranking
  </router-link>
    <div class="flex flex-col justify-center items-center h-screen relative">
      <video class="absolute inset-0 w-full h-full object-cover" loop autoplay muted>
        <source :src="'/storage/img/fondoInicio.mp4'" type="video/mp4">
      </video>
      <h1 class="text-[40px] max-w-max overflow-hidden whitespace-nowrap titulo__inicio z-10">Help <span class="text-[#0ED800]">Vini</span> Escape Room</h1>
      <img :src="'/storage/img/Logo.png'" class="img__inicio" width="450px">
      <router-link to="/story" class="bg-[#0ED800] px-[180px] py-[35px] text-xl active:shadow-none active:translate-y-[15px] rounded-[5px] btn__inicio z-10">Comencemos</router-link>
    </div>
  </template>
  
  <script setup>
  import UserCard from './UserCard.vue';

  </script>