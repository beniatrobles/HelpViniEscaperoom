<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-gray-900 h-[100%] items-center justify-center px-20">
                <div class="h-[100%] w-[25%]">
                    <div class="flex items-center justify-start my-3">
                        <router-link to="/inicio/tablet/twitter">
                            <img src="/public/img/apps/twitterF.png" alt="" class="w-[40px] h-[40px]">
                        </router-link>
                    </div>

                    <nav class="flex flex-col mt-10 font-bold">

                        <router-link to="/inicio/tablet/twitter" class="my-1 flex flex-row items-center">
                            
                            <img :src="'/img/apps/iconos/icon-inicio-tw.svg'" alt="" class="w-[30px] mr-3">
                            
                            <p> Inicio </p>
                        
                        </router-link>

                        
                        <router-link to="/inicio/tablet/twitter/notificaciones" class="my-1 flex flex-row items-center">
                            
                            <img :src="'/img/apps/iconos/icon-notificaciones.svg'" alt="" class="w-[30px] mr-3">
                            <p> Notificaciones </p>
                            
                        </router-link>

                        
                        <router-link to="/inicio/tablet/twitter/mensajes" class="my-1 flex flex-row items-center">
                            
                            <img :src="'/img/apps/iconos/icon-msj-tw.png'" alt="" class="w-[30px] mr-3">
                            <p> Mensajes </p>
                        
                        </router-link>

                        
                        <router-link to="/inicio/tablet/twitter/perfil" class="my-1 flex flex-row items-center">
                            
                            <img :src="'/img/apps/iconos/icon-perfil-tw.png'" alt="" class="w-[30px] mr-3">
                            <p> Perfil </p>
                            
                        </router-link>
                        
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