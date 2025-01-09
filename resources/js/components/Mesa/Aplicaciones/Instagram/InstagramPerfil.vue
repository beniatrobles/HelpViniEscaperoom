<template>
    <div class="w-[100%] h-[100%]">
        <header class="flex gap-10">
            <img :src="'/storage/img/vini.jpeg'" class="w-[100px] h-[100px] rounded-full border-red-500 border-[3px]">
            <div>
                <div class="flex items-center gap-2">
                    <p class="font-bold text-xl flex items-center gap-1">vinijr<img :src="'/storage/img/verificado.png'" class="w-[15px] h-[15px]"></p>
                </div>
                <div class="flex gap-3">
                    <p><span class="font-bold">X</span> publicaciones</p>
                    <p><span class="font-bold">52M</span> seguidores</p>
                    <p><span class="font-bold">1096</span> seguidos</p>
                </div>
                <div>
                    <p class="flex items-center mt-3">Vinicius Jr. 🐵​ <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/300px-Flag_of_Brazil.svg.png" class="w-[20px] h-[15px]"></p>
                    <p>Black Lives Matter ✊​🍌​</p>
                    <p>Ballon d'or ⚽​🥇​</p>
                </div>
                
            </div>
        </header>
        <section class="flex gap-[35px] mt-8">
            <router-link to="" class="flex flex-col items-center">
                <div class="w-[65px] h-[65px] bg-black rounded-full overflow-hidden"><img src="https://img.freepik.com/vector-gratis/nuevo-diseno-icono-x-logotipo-twitter-2023_1017-45418.jpg" alt=""></div>
                <p class="text-center">twt</p>
            </router-link>
            
        </section>
        <hr class="mt-[50px]">
        <section class="grid grid-cols-3 gap-1 mt-2">
            <router-link to="/inicio/tablet/instagram/perfil/publicacion1" class="bg-black aspect-square cursor-pointer publicacion"><img :src="'/storage/img/vini.jpeg'"></router-link>
            <router-link to="" class="bg-black aspect-square cursor-pointer publicacion">publicacion</router-link>
            <router-link to="" class="bg-black aspect-square cursor-pointer publicacion">publicacion</router-link>
            <router-link to="" class="bg-black aspect-square cursor-pointer publicacion">publicacion</router-link>
            <router-link to="" class="bg-black aspect-square cursor-pointer publicacion">publicacion</router-link>
            <router-link to="" class="bg-black aspect-square cursor-pointer publicacion">publicacion</router-link>
        </section>
        <div class="mt-6 opacity-0">.</div>
    </div>
    <router-view class="absolute inset-0"></router-view>
</template>

<style scoped>
    /* .publicacion::after{
        content: '';
        background: black;
        opacity: .5;
        width: 100%;
        height: 100%;
    }
    .publicacion:hover::after{
        display: block;
    } */
</style>

<script setup>

</script>