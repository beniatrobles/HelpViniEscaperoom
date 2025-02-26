<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <div class="bg-zinc-800 w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative flex ">
            
            <div class="h-full w-[20%] border-r flex flex-col p-2">
                <router-link to="/inicio/tablet/pinterest" class="hover:bg-zinc-700 rounded p-2">Inicio</router-link>
                <router-link to="/inicio/tablet/pinterest/perfil" class="hover:bg-zinc-700 rounded p-2">Tableros</router-link>
            </div>

            <router-view></router-view>

            <router-link to="/inicio/tablet" class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
        </div>
    </div>
</template>


<script setup>
</script>