<script setup>
</script>

<template>

<div class="mesa h-screen relative overflow-hidden">
  <router-link to="/" class="absolute w-[250px] rotate-[-10deg] top-[200px] right-[45%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-[-8deg]"> <img :src="'/img/revista.jpg'" > </router-link>
  <router-link to="/" class="absolute w-[350px] rotate-[-80deg] top-0 right-[25%]  hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-[-83deg]"> <img :src="'/img/ipad.png'" > </router-link>
  <router-link to="/" class="absolute w-[100px] rotate-[-15deg] bottom-[100px] right-[-1%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-[-10deg]"> <img :src="'/img/polaroid.jpg'" > </router-link>
  <router-link to="/" class="absolute w-[110px] rotate-[5deg] top-[100px] left-[5%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-0"> <!-- <div class="h-[100px] w-[100px] bg-yellow-600 text-center text-black "><p>_________</p>_______<p>___________</p></div>--> <img :src="'/img/postit.png'" alt="" class="brightness-75"></router-link> 
  
 <img :src="'/img/boli.jpg'" class="absolute w-[100px] rotate-[-20deg] top-[100px] left-[10%] z-10">
 <img :src="'/img/clips.png'" class="absolute w-[100px] rotate-[-20deg] top-[200px] left-[5%] z-10">
 <img :src="'/img/platano.png'" class="absolute w-[250px] bottom-[6%] left-[-7%] z-10 brightness-75">
  
</div>
</template>

<style scoped>
</style>
