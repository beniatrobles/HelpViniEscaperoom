<template>
    <div class="w-[100%] h-[100%]">
        <div class="flex justify-between">
            <p class="font-bold">Mensajes</p>
            <router-link to="/">Solicitudes</router-link>
        </div>
        <hr>
        <div class="flex gap-2 h-[100%] mt-3">
            <div class="w-[35%] border-r border-zinc-800 overflow-auto">
                <router-link to="/inicio/tablet/instagram/mensajes/mensaje1"
                    :class="{ 'bg-[#2f2f2f]': linkActivo === 1 }"
                    class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(1)">
                    <img :src="'/storage/img/elbicho.jpg'" class="w-[50px] h-[50px] rounded-full">
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-bold flex items-center gap-1">cristiano<img
                                    :src="'/storage/img/verificado.png'" class="w-[10px] h-[10px]"></p>
                        </div>
                        <p class="whitespace-nowrap">recibido</p>
                    </div>

                </router-link>
                <router-link to="/inicio/tablet/instagram/mensajes/mensaje2"
                    :class="{ 'bg-[#2f2f2f]': linkActivo === 2 }"
                    class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(2)">
                    <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT15IRafVbIgby17P2PXOVL7KctiqZYtaNU2w&s'"
                        class="w-[50px] h-[50px] rounded-full">
                    <div>
                        <p class="font-bold">Isabella</p>
                        <p class="whitespace-nowrap">enviado</p>
                    </div>
                </router-link>
                <router-link to="/inicio/tablet/instagram/mensajes/uno" :class="{ 'bg-[#2f2f2f]': linkActivo === 3 }"
                    class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(3)">
                    <img :src="'/storage/img/vini.jpeg'" class="w-[50px] h-[50px] rounded-full">
                    <div>
                        <p class="font-bold">Usuario</p>
                        <p class="whitespace-nowrap">mensaje</p>
                    </div>
                </router-link>

                <router-link to="/inicio/tablet/instagram/mensajes/uno" :class="{ 'bg-[#2f2f2f]': linkActivo === 4 }"
                    class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(4)">
                    <img :src="'/storage/img/vini.jpeg'" class="w-[50px] h-[50px] rounded-full">
                    <div>
                        <p class="font-bold">Usuario</p>
                        <p class="whitespace-nowrap">mensaje</p>
                    </div>
                </router-link>
                <router-link to="/inicio/tablet/instagram/mensajes/uno" :class="{ 'bg-[#2f2f2f]': linkActivo === 5 }"
                    class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(5)">
                    <img :src="'/storage/img/vini.jpeg'" class="w-[50px] h-[50px] rounded-full">
                    <div>
                        <p class="font-bold">Usuario</p>
                        <p class="whitespace-nowrap">mensaje</p>
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
    </div>
</template>


<script setup>
import { ref } from 'vue';
const linkActivo = ref('')

const activarLink = link => linkActivo.value = link


</script>