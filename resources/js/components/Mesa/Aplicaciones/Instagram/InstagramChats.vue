<template>
    <div class="flex gap-2 h-[100%] mt-3">
        <div class="w-[35%] border-r border-zinc-800 overflow-auto">
            <router-link to="/inicio/tablet/instagram/mensajes/mensaje0"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 1 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(1)">
                <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ0KiZWOjDS9dhuZvDqo3XcpqLMQaSlzekHA&s'" class="w-[50px] h-[50px] rounded-full object-cover">
                <div>
                    <p class="font-bold flex items-center gap-1">Oswaldo_12</p>
                    <p class="whitespace-nowrap text-sm text-gray-300">kkkkkkkk🤣</p>
                </div>

            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/mensaje1"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 2 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(2)">
                <img :src="'/storage/img/elbicho.jpg'" class="w-[50px] h-[50px] rounded-full">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">cristiano<img
                                :src="'/storage/img/verificado.png'" class="w-[10px] h-[10px]"></p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Muchas grac...</p>
                </div>

            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/mensaje2"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 3 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(3)">
                <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT15IRafVbIgby17P2PXOVL7KctiqZYtaNU2w&s'"
                    class="w-[50px] h-[50px] rounded-full object-cover object-top">
                <div>
                    <p class="font-bold">Isabella</p>
                    <p class="whitespace-nowrap text-sm text-gray-300">visto</p>
                </div>
            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/mensaje3" :class="{ 'bg-[#2f2f2f]': linkActivo === 4 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(4)">
                <img :src="'https://img.uefa.com/imgml/TP/teams/logos/240x240/50051.png'" class="w-[50px] h-[50px] rounded-full bg-white">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">realmadrid<img
                                :src="'/storage/img/verificado.png'" class="w-[10px] h-[10px]"></p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">te mencionó...</p>
                </div>
            </router-link>

            <router-link to="/inicio/tablet/instagram/mensajes/mensaje4" :class="{ 'bg-[#2f2f2f]': linkActivo === 5 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(5)">
                <img :src="'https://img.uefa.com/imgml/TP/players/1/2025/324x324/250076574.jpg'" class="w-[50px] h-[50px] rounded-full">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">k.mbappe<img
                                :src="'/storage/img/verificado.png'" class="w-[10px] h-[10px]"></p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">visto</p>
                </div>
            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/mensaje5" :class="{ 'bg-[#2f2f2f]': linkActivo === 6 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(6)">
                <img :src="'https://yt3.googleusercontent.com/alZ--DxDJfYQLF9UZ7s8q2tytDyFniBoj0-8bH27Ew5QTX5o3ultBNmfJmFqc05V2Wax-nkFKX8=s900-c-k-c0x00ffffff-no-rj'" class="w-[50px] h-[50px] rounded-full">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">ibai<img
                                :src="'/storage/img/verificado.png'" class="w-[10px] h-[10px]"></p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Te mencionó...</p>
                </div>
            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/mensaje6" :class="{ 'bg-[#2f2f2f]': linkActivo === 7 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(7)">
                <img :src="'https://phantom-marca.unidadeditorial.es/31b316700607bb15b2497b4dbbabc482/resize/828/f/jpg/assets/multimedia/imagenes/2021/12/21/16400660511895.jpg'" class="w-[50px] h-[50px] rounded-full object-cover object-top">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1 text-[14px]">ester_exposito <img
                                :src="'/storage/img/verificado.png'" class="w-[10px] h-[10px]"></p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">visto</p>
                </div>
            </router-link>
        </div>
        <div class="w-[65%] relative">
            <div
                class="flex flex-col justify-center items-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img :src="'/storage/img/icon-direct.png'">
                <p>Tus mensajes</p>
            </div>
            <router-view class="absolute"></router-view>
        </div>
    </div>
</template>


<script setup>
import { ref } from 'vue';
const linkActivo = ref('')

const activarLink = link => linkActivo.value = link


</script>