<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <router-link to="/inicio/tablet" class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>

            <div class=" flex w-[100%] h-[100%] bg-zinc-900">
                <section class="w-[25%] border-r p-8">
                    <router-link to="/inicio/tablet/instagram"><img :src="'/storage/img/logo-instagram.png'" ></router-link>
                    <br>
                    <nav class="flex flex-col gap-3" ref="menu">
                        <router-link to="/inicio/tablet/instagram" class="px-3 py-[10px] hover:bg-zinc-800 rounded flex items-center gap-1" :class="{'active': active === 'inicio'}" @click="activarLink('inicio')"><img :src="'/storage/img/icon-casa.png'" class="w-[20px]"> Inicio</router-link>
                        <router-link to="/inicio/tablet/instagram/mensajes" class="px-3 py-[10px] hover:bg-zinc-800 rounded flex items-center gap-1" :class="{'active': active === 'mensajes'}" @click="activarLink('mensajes')"><img :src="'/storage/img/icon-direct.png'" class="w-[20px]"> Mensajes</router-link>
                        <router-link to="/inicio/tablet/instagram/perfil" class="px-3 py-[10px] hover:bg-zinc-800 rounded flex items-center gap-1" :class="{'active': active === 'perfil'}" @click="activarLink('perfil')"><img :src="'/storage/img/vini.jpeg'" class="w-[20px] rounded-full"> Perfil</router-link>
                    </nav>
                </section>
                <section class="w-[75%] py-10 px-20 overflow-auto">
                    <router-view></router-view>
                </section>
            </div>
        </div>
    </div>
</template>


<script setup>
    import { ref } from "vue";
    
    const active = ref('inicio')

    function activarLink(link) {
    active.value = link
    }

</script>

<style scoped>
    .active{
        background-color: #2f2f2f;
    }
</style>