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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT15IRafVbIgby17P2PXOVL7KctiqZYtaNU2w&s" class="bg-white w-[50px] h-[50px] rounded-full border-[2px] border-green-500 object-cover object-top">
                <p class="text-center text-sm">isabella</p>
            </router-link>
        </header>
        <section class="w-[100%] flex flex-col items-center">
                <div class= "mt-6 w-[80%] border border-zinc-800 rounded">
                    <div class="p-2 flex items-center gap-2">
                        <img :src="'/storage/img/elbicho.jpg'" class="rounded-full w-[30px]">
                        <p>cristiano</p>
                    </div>
                    <div class="">
                        <img src="https://img.asmedia.epimg.net/resizer/v2/AODUWN7KWNRF6EPRIYFQITW6SQ.jpg?auth=ebb82421dd99b7b5bd489a4bccbb8aa340b53d2e92af4de4dad96faaf104321a&width=1200&height=1200&focal=1830%2C679" class="w-[100%]">
                    </div>
                    <div class="flex gap-2 p-2">
                        <img :src="'/storage/img/icon-corazon.png'">
                    </div>
                </div>
        </section>
        <section class="w-[100%] flex flex-col items-center">
                <div class= "mt-6 w-[80%] border border-zinc-800 rounded">
                    <div class="p-2 flex items-center gap-2">
                        <img src="https://img.uefa.com/imgml/TP/teams/logos/240x240/50051.png" class="rounded-full w-[30px] bg-white">
                        <p>real madrid</p>
                    </div>
                    <div class="w-full">
                        <img src="https://s3.abcstatics.com/abc/www/multimedia/deportes/2024/06/04/florentino-perez-kaFE-U602619022094t1G-1200x840@diario_abc.jpg" class="w-[100%]">
                    </div>
                    <div class="flex gap-2 p-2">
                        <img :src="'/storage/img/icon-corazon.png'">
                    </div>
                </div>
        </section>
        <section class="w-[100%] flex flex-col items-center">
                <div class= "mt-6 w-[80%] border border-zinc-800 rounded">
                    <div class="p-2 flex items-center gap-2">
                        <img src="https://img.uefa.com/imgml/TP/players/1/2025/324x324/250076574.jpg" class="rounded-full w-[30px]">
                        <p>k.mbappe</p>
                    </div>
                    <div class="">
                        <img src="https://images.ecestaticos.com/Y-oeFfZkAa5tOXMq58zgUqOXl3M=/0x0:2272x1644/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fad8%2Fec0%2Fbbc%2Fad8ec0bbc3a13d69d397888fd7d8a6c9.jpg" class="w-[100%]">
                    </div>
                    <div class="flex gap-2 p-2">
                        <img :src="'/storage/img/icon-corazon.png'">
                    </div>
                </div>
        </section>
        <section class="w-[100%] flex flex-col items-center">
                <div class= "mt-6 w-[80%] border border-zinc-800 rounded">
                    <div class="p-2 flex items-center gap-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnGAPKh4654-MEj7yDcR6g0Rkx8-dhZT_XGg&s" class="rounded-full w-[30px]">
                        <p>unicef</p>
                    </div>
                    <div class="">
                        <img src="https://www.unicef.es/sites/unicef.es/files/styles/max_1920xauto/public/browser-only-upload/UN0703781-destacado-ventajas-desktop_0.jpg?itok=zySeLHBL" class="w-[100%]">
                    </div>
                    <div class="flex gap-2 p-2">
                        <img :src="'/storage/img/icon-corazon.png'">
                    </div>
                </div>
            </section>
            <div class="mt-6 opacity-0">.</div>
    </div>
    <router-view class="absolute inset-0"></router-view>
</template>


<script setup>

</script>