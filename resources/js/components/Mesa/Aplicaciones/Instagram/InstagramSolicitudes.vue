<template>
    <div class="flex gap-2 h-[100%] mt-3">
        <div class="w-[35%] border-r border-zinc-800 overflow-auto">
            <router-link to="/inicio/tablet/instagram/mensajes/solicitudes/solicitud1"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 1 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(1)">
                <img :src="'https://ih1.redbubble.net/image.420452072.3078/st,small,507x507-pad,600x600,f8f8f8.u5.jpg'" class="w-[50px] h-[50px] rounded-full">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">aitorlpgn</p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Que es eso q...</p>
                </div>

            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/solicitudes/solicitud2"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 2 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(2)">
                <img :src="'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png'" class="w-[50px] h-[50px] rounded-full object-cover">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">alba mikealson</p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Que ha pasa c...</p>
                </div>

            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/solicitudes/solicitud3"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 3 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(3)">
                <img :src="'https://i.pinimg.com/736x/48/ee/e5/48eee5cda6a21eee0e938b27a72ce1f1.jpg'" class="w-[50px] h-[50px] rounded-full object-cover">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">trow__</p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Quien es legoiv...</p>
                </div>

            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/solicitudes/solicitud4"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 4 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(4)">
                <div class="w-[50px] h-[50px] rounded-full bg-black"></div>
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">beniatrobles</p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Que significa?</p>
                </div>

            </router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/solicitudes/solicitud5"
                :class="{ 'bg-[#2f2f2f]': linkActivo === 5 }"
                class="flex gap-3 p-1 rounded cursor-pointer hover:bg-zinc-800" @click="activarLink(5)">
                <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDgEaIAF5HWV82N5WZcqBcSLl09fOInemIpw&s'" class="w-[50px] h-[50px] rounded-full object-cover object-top">
                <div>
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">Chema</p>
                    </div>
                    <p class="whitespace-nowrap text-sm text-gray-300">Ha enviado un...</p>
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