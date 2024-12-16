<script setup>
</script>

<template>

  <div class="h-screen relative overflow-hidden">
    <img :src="'/img/mesa.jpg'" class="w-[100%] h-[100%] z-[-10]">
    <router-link to="/inicio/tablet"
      class="absolute w-[350px] rotate-[-80deg] top-0 right-[25%]  z-10 hover:scale-[1.05] hover:z-20 duration-200 hover:rotate-[-83deg]">
      <img :src="'/img/ipad.png'"> </router-link>
    <router-link to="/inicio/revista"
      class="absolute w-[250px] rotate-[-10deg] top-[200px] right-[45%] hover:scale-[1.05] hover:z-20 duration-200 hover:rotate-[-8deg]">
      <img :src="'/img/revista.jpg'"> </router-link>
    <router-link to="/inicio/polaroid"
      class="absolute w-[100px] rotate-[-10deg] bottom-[100px] right-[-1%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-[-5deg] brightness-90">
      <img :src="'/img/polaroid.jpg'"> </router-link>
    <router-link to="/inicio/postit"
      class="absolute w-[120px] rotate-[-10deg] top-[100px] left-[5%] hover:scale-[1.05] hover:z-10 duration-200 hover:rotate-0">
      <!-- <div class="h-[100px] w-[100px] bg-yellow-600 text-center text-black "><p>_________</p>_______<p>___________</p></div>-->
      <img :src="'/img/postit.png'" alt="" class="brightness-75"></router-link>

    <img :src="'/img/boli.jpg'" class="absolute w-[100px] rotate-[-20deg] top-[100px] left-[10%] z-10 boli">
    <img :src="'/img/clips.png'" class="absolute w-[100px] rotate-[-20deg] top-[200px] left-[5%] z-10">
    <router-link to="/inicio/platano" class="absolute w-[250px] bottom-[6%] left-[-7%] z-10 brightness-75 hover:scale-[1.05] hover:rotate-[5deg] transition duration-200">
      <img :src="'/img/platano.png'">
    </router-link>

    <router-link to="/inicio/airpods"
      class=" absolute top-[20%] right-[7%] flex rotate-[-10deg] cursor-pointer transition duration-200 hover:scale-[1.05] hover:rotate-[-5deg]">
      <img :src="'/img/airpods.png'" class=" w-[80px] ">
      <img :src="'/img/airpods.png'" class=" w-[80px] rotate-[-20deg] scale-x-[-1]">
    </router-link>
    <router-link to="/inicio/cuaderno"
      class="absolute right-[25%] bottom-[0] w-[200px] rotate-[82deg] hover:scale-[1.05] hover:z-20 duration-200 hover:rotate-[80deg]">
      <img :src="'/img/cuaderno.png'"> </router-link>
    <router-view class="absolute inset-0 z-[100]"></router-view>


  </div>
</template>

<style scoped></style>
