<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-zinc-900 h-[100%]">
                <div class="h-[100%] border-r w-[25%]">
                    <div class="flex py-8 px-[44px] items-center">
                        <img :src="'/storage/img/apps/gmailF.png'" alt="" class="w-[40px] h-[40px]">
                        <h2 class="ml-3 text-2xl">Gmail</h2>
                    </div>
                    <nav class="flex flex-col gap-3 px-8">
                        <router-link to="/inicio/tablet/gmail"
                            class="my-1 flex gap-1 hover:bg-zinc-800 px-3 py-[10px] rounded-full" :class="{'selected' : activo === 'recibidos'}" @click="activarLink('recibidos')"><img
                                :src="'/storage/img/icon-recibidos.png'" class="w-[20px]">Recibidos</router-link>

                        <router-link to="/inicio/tablet/gmail/enviados"
                            class="my-1 flex gap-1 hover:bg-zinc-800 px-3 py-[10px] rounded-full" :class="{'selected': activo === 'enviados'}" @click="activarLink('enviados')"><img
                                :src="'/storage/img/icon-enviados.png'" class="w-[20px]">Enviados</router-link>

                        <router-link to="/inicio/tablet/gmail/borradores"
                            class="my-1 flex gap-1 hover:bg-zinc-800 px-3 py-[10px] rounded-full" :class="{'selected': activo === 'borradores'}" @click="activarLink('borradores')"><img
                                :src="'/storage/img/icon-borradores.png'" class="w-[20px]">Borradores</router-link>

                    </nav>

                </div>
                <div class="w-[75%] py-10 px-20 overflow-auto relative">
                    <router-view></router-view>
                </div>
                <router-link to="/inicio/tablet"
                    class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            </div>
        </div>
    </div>
</template>


<script setup>
import { ref } from 'vue';

const activo = ref('recibidos')

const activarLink = (link)=>{
    activo.value = link
}

</script>


<style scoped>
    .selected{
        background-color: #2f2f2f;
    }
</style>