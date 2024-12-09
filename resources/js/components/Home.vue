<template>
    <div class="flex flex-col justify-center items-center ">
      <h1 class="text-5xl max-w-max overflow-hidden whitespace-nowrap mt-[10px] titulo__inicio">Help <span class="text-[#0ED800]">Vini</span> Escape Room</h1>
      <img :src="'/img/Logo.png'" class="img__inicio">
      <router-link to="/inicio" class="bg-[#0ED800] px-[180px] py-[35px] text-xl active:shadow-none active:translate-y-[15px] rounded-[5px] btn__inicio">Comencemos</router-link>
    </div>
  </template>
  
  <script setup>
  
  </script>