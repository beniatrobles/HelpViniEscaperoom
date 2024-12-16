<template>
    <div class="w-[100%] h-[100%]">
        <header class="flex gap-10">
            <img :src="'/img/vini.jpeg'" class="w-[100px] h-[100px] rounded-full border-red-500 border-[3px]">
            <div>
                <div class="flex items-center gap-2">
                    <p class="font-bold text-xl flex items-center gap-1">vinijr<img :src="'/img/verificado.png'" class="w-[15px] h-[15px]"></p>
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
            <div class="flex flex-col items-center"     >
                <div class="w-[65px] h-[65px] bg-black rounded-full"></div>
                <p>Destacada</p>
            </div>
            <div class="flex flex-col items-center"     >
                <div class="w-[65px] h-[65px] bg-black rounded-full"></div>
                <p>Destacada</p>
            </div>
            <div class="flex flex-col items-center"     >
                <div class="w-[65px] h-[65px] bg-black rounded-full"></div>
                <p>Destacada</p>
            </div>
        </section>
        <hr class="mt-[50px]">
        <section class="grid grid-cols-3 gap-1 mt-2">
            <div class="bg-black aspect-square cursor-pointer publicacion">publicacion</div>
            <div class="bg-black aspect-square cursor-pointer publicacion">publicacion</div>
            <div class="bg-black aspect-square cursor-pointer publicacion">publicacion</div>
            <div class="bg-black aspect-square cursor-pointer publicacion">publicacion</div>
            <div class="bg-black aspect-square cursor-pointer publicacion">publicacion</div>
            <div class="bg-black aspect-square cursor-pointer publicacion">publicacion</div>
        </section>
        <div class="mt-6 opacity-0">.</div>
    </div>
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