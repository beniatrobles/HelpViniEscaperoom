<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-zinc-900 h-[100%] items-center justify-center">
                <div class="h-[100%] border-r-2 w-[25%]">
                    <div class="flex items-center justify-center my-3">
                        <img src="/public/img/apps/gmailF.png" alt="" class="w-[40px] h-[40px]">
                        <h2 class="ml-3 text-2xl">Gmail</h2>
                    </div>
                    <hr>
                    <nav class="flex flex-col mt-10 ml-3 font-bold">
                        <router-link to="/inicio/tablet/gmail" class="my-1">Recibidos</router-link>

                        <router-link to="/inicio/tablet/gmail/enviados" class="my-1">Enviados</router-link>

                        <router-link to="/inicio/tablet/gmail/borradores" class="my-1">Borradores</router-link>
                        
                    </nav>

                </div>
                <div class="h-[100%] w-[75%]">
                    <router-view></router-view>
                </div>
            <router-link to="/inicio/tablet" class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>