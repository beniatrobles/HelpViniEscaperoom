<template>
    <div class="w-[100%] h-[100%]">
        <p class="font-bold">Inicio</p>
        <hr>
        <header class="flex gap-4 mt-4">
            <img src="https://i1.sndcdn.com/artworks-000188509722-d50ce4-t240x240.jpg" class="bg-black w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
            <img src="https://i1.sndcdn.com/artworks-000188509722-d50ce4-t240x240.jpg" class="bg-black w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
            <img src="https://i1.sndcdn.com/artworks-000188509722-d50ce4-t240x240.jpg" class="bg-black w-[50px] h-[50px] rounded-full border-[2px] border-red-600">
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
                        <img :src="'/img/icon-corazon.png'">
                        <router-link to="" class="hover:opacity-50"><img :src="'/img/icon-coment.png'"></router-link>
                    </div>
                </div>
        </section>
        
        <div class="mt-6 opacity-0">.</div>
    </div>
</template>


<script setup>

</script>