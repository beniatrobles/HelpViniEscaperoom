<template>
    <div class="w-[100%] h-[100%]">
        <p class="font-bold">Inicio</p>
        <hr>
        <header class="flex gap-6 mt-4">
            <router-link :to="{name: 'historias' , params : {id : 1}}" class="flex flex-col items-center"> 
                <img src="https://img.uefa.com/imgml/TP/teams/logos/240x240/50051.png" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
                <p class="text-center text-sm">realmadrid</p>
            </router-link>
            <router-link to="/inicio/tablet/instagram/historias/2" class="flex flex-col items-center">
                <img :src="'/storage/img/elbicho.jpg'" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
                <p class="text-center text-sm">cristiano</p>
            </router-link>
            <router-link to="/inicio/tablet/instagram/historias/3" class="flex flex-col items-center">
                <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnGAPKh4654-MEj7yDcR6g0Rkx8-dhZT_XGg&s'" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-red-600 p-1">
                <p class="text-center text-sm">unicef</p>
            </router-link>
            <router-link to="/inicio/tablet/instagram/historias/4" class="flex flex-col items-center">
                <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGduAYZu40pJv-hwn8r9xd-nUnTYod03eUtQ&s'" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
                <p class="text-center text-sm">rodrygo</p>
            </router-link>
            <router-link to="/inicio/tablet/instagram/historias/5" class="flex flex-col items-center">
                <img src="https://img.uefa.com/imgml/TP/players/1/2025/324x324/250076574.jpg" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
                <p class="text-center text-sm">k.mbappe</p>
            </router-link>
            <router-link to="/inicio/tablet/instagram/historias/6" class="flex flex-col items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT15IRafVbIgby17P2PXOVL7KctiqZYtaNU2w&s" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-green-500">
                <p class="text-center text-sm">isabella</p>
            </router-link>
        </header>
        <section class="w-[100%] flex flex-col items-center">
                <div class= "mt-6 w-[80%] border border-zinc-800 rounded">
                    <div class="p-2 flex items-center gap-2">
                        <img src="https://i1.sndcdn.com/artworks-000188509722-d50ce4-t240x240.jpg" class="rounded-full w-[30px]">
                        <p>Usuario</p>
                    </div>
                    <div class="">
                        <img src="https://i1.sndcdn.com/artworks-000188509722-d50ce4-t240x240.jpg" class="w-[100%]">
                    </div>
                    <div class="flex gap-2 p-2">
                        <img :src="'/storage/img/icon-corazon.png'">
                        <router-link to="" class="hover:opacity-50"><img :src="'/storage/img/icon-coment.png'"></router-link>
                    </div>
                </div>
        </section>
        <div class="mt-6 opacity-0">.</div>
    </div>
    <router-view class="absolute inset-0"></router-view>
</template>


<script setup>

</script>