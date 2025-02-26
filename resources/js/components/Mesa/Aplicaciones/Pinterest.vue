<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <div class="bg-zinc-800 w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative flex ">
            
            <div class="h-full w-16 border-r flex flex-col p-2 gap-1 bg-zinc-900">
                <router-link to="/inicio/tablet/pinterest" class="hover:bg-zinc-700 rounded-full overflow-hidden max-w-max mx-auto" @click="activarLink('inicio')"><img :src="'/storage/img/apps/pinterest.png'" class="w-8"></router-link>

                <router-link to="/inicio/tablet/pinterest" :class="linkSeleccionado == 'inicio' ? 'hidden' : ''" class="hover:bg-zinc-700 rounded p-3 mt-7" @click="activarLink('inicio')"><img :src="'/storage/img/apps/iconos/icon-inicio-tw.svg'"></router-link>
                <router-link to="/inicio/tablet/pinterest" :class="linkSeleccionado != 'inicio' ? 'hidden' : ''" class="hover:bg-zinc-700 rounded p-3 mt-7"><img :src="'/storage/img/apps/iconos/icon-inicio-F.png'" class=""></router-link>

                <router-link to="/inicio/tablet/pinterest/notificaciones" :class="{'hidden' : linkSeleccionado == 'notif'}" class="hover:bg-zinc-700 rounded p-3" @click="activarLink('notif')"><img :src="'/storage/img/apps/iconos/icon-notificaciones.svg'"></router-link>
                <router-link to="/inicio/tablet/pinterest/notificaciones" :class="{'hidden' : linkSeleccionado != 'notif'}" class="hover:bg-zinc-700 rounded p-3"><img :src="'/storage/img/apps/iconos/icon-notificacionesF.svg'"></router-link>

                <router-link to="/inicio/tablet/pinterest/perfil" :class="{'hidden' : linkSeleccionado == 'perfil'}" class="hover:bg-zinc-700 rounded p-3" @click="activarLink('perfil')"><img :src="'/storage/img/apps/iconos/icon-perfil-tw.png'"></router-link>
                <router-link to="/inicio/tablet/pinterest/perfil" :class="{'hidden' : linkSeleccionado != 'perfil'}" class="hover:bg-zinc-700 rounded p-3"><img :src="'/storage/img/apps/iconos/icon-perfil-twF.png'"></router-link>
            </div>

            <router-view></router-view>

            <router-link to="/inicio/tablet" class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
        </div>
    </div>
</template>


<script setup>
import { ref } from 'vue';

const linkSeleccionado = ref('inicio')

const activarLink = (link) => linkSeleccionado.value = link;  

</script>