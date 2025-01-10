<template>
    <div class="flex flex-row h-[100%]">

        <div class="h-[100%] w-[55%] border-r-gray-500 border-l-gray-500 border-x overflow-auto">

            <div>
                <p class="text-xl font-bold p-2 border-gray-500 border-b-[0.5px]"> Mensajes </p>
            </div>

            <!-- Mensajes -->
            <div>
                <router-link to="" class="flex items-center space-x-3 hover:bg-gray-800 p-3">

                    <!-- Foto de perfil -->
                    <div>
                        <img class="rounded-full w-[45px]" :src="'/storage/img/apps/iconos/twpfp2.jpg'">
                    </div>
                    
                    <div class="flex flex-col">
                        <!-- Nombre de usuario y arroba  -->
                        <div class="flex items-center space-x-2">
                            <p class="font-bold text-white text-xs">Kylian Mbappe</p>
                            <img class="rounded-full w-[15px]" :src="'/storage/img/verificado.png'" alt="">
                            <img class="w-[15px]" :src="'/storage/img/apps/iconos/realmadrid.jpg'" alt="">
                            <p class="text-xs text-gray-400">@KMbappe · 2 ene. </p>
                        </div>

                        <!-- Mensaje -->
                        <div>
                            <p class="text-gray-400 text-sm">JAJJAJAJAJJAJAJAJJAJ</p>
                        </div>
                    </div>

                </router-link>
            </div>

            
            <div>
                <router-link to="" class="flex items-center space-x-3 hover:bg-gray-800 p-3">

                    <!-- Foto de perfil -->
                    <div>
                        <img class="rounded-full w-[45px]" :src="'/storage/img/twuser2.jpg'">
                    </div>
                    
                    <div class="flex flex-col">
                        <!-- Nombre de usuario y arroba  -->
                        <div class="flex items-center space-x-2">
                            <p class="font-bold text-white text-xs">DjMaRiiO</p>
                            <img class="rounded-full w-[15px]" :src="'/storage/img/verificado.png'" alt="">
                            <p class="text-xs text-gray-400">@DjMaRiiO · 1 ene. </p>
                        </div>

                        <!-- Mensaje -->
                        <div>
                            <p class="text-white font-bold text-sm">¡Feliz año nuevo genio! 🥳🥳</p>
                        </div>
                    </div>

                </router-link>
            </div>

            
            <div>
                <router-link to="" class="flex items-center space-x-3 hover:bg-gray-800 p-3">

                    <!-- Foto de perfil -->
                    <div class="flex">
                        <img class="rounded-full w-[45px] h-[45px]" :src="'/storage/img/twuser6.jpg'">
                    </div>
                    
                    <div class="flex flex-col">
                        <!-- Nombre de usuario y arroba  -->
                        <div class="flex items-center space-x-2">
                            <p class="font-bold text-white text-xs">Mario</p>
                            <img class="rounded-full w-[15px]" :src="'/storage/img/verificado.png'" alt="">
                            <p class="text-xs text-gray-400">@Mario___RM · 1 ene. </p>
                        </div>

                        <!-- Mensaje -->
                        <div>
                            <!-- Feliz año nuevo de parte de un fan, a demostrar que eres el mejor del mundo este 2025. Saludos desde Perú 📌 -->
                            <p class="text-gray-400 ">Feliz año nuevo de parte de un...</p>
                        </div>
                    </div>

                </router-link>
            </div>

        </div>


        <div class="h-[100%] w-[45%] pl-3">


            <router-view class="overflow-auto"></router-view>


        </div>
    </div>
</template>


<script setup>
</script>