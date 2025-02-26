<template>
    <div class="flex h-[100%]">
        <div class="h-[100%] w-[70%] flex flex-col border-r-gray-500 border-l-gray-500 border-x overflow-auto">

            <div class="flex flex-row items-center justify-start mt-3 gap-3 p-2">
                <router-link to="/inicio/tablet/twitter/" class="w-[25px]">
                    <img :src="'/storage/img/apps/iconos/flecha_atras.png'" alt="">
                </router-link>
                <p class="text-2xl font-bold">Real Madrid C.F.</p>
                <img class="w-[20px]" :src="'/storage/img/verificado.png'" alt="">
            </div>
            <div class="relative">
                <!-- BANNER -->
                <img class="w-[100%]" :src="'/storage/img/apps/iconos/bannerMadrid.jpg'" alt="">
                <div class="absolute inset-0 flex items-end">
                    <!-- ICONO -->
                    <img :src="'/storage/img/apps/iconos/realmadrid.jpg'" class="w-24 h-24 rounded-full border-4 border-gray-900 ml-5 mb-[-50px]"> 
                </div>
            </div>

            <div class="mt-16 pl-5">
                <div class="flex items-center space-x-2">
                    <h2 class="font-bold text-xl">Real Madrid C.F.</h2>
                    <img class="w-[20px]" :src="'/storage/img/verificado.png'" alt="">
                    <p class="bg-gray-900 opacity-75 text-white rounded-lg p-1 text-xs border-[1px] border-gray-500">Siguiendo</p>
                </div>
                <h3 class="text-gray-400">@realmadrid</h3>
            </div>

            <div class="ml-5 mt-5 mb-2 grid grid-cols-2 items-center justify-center">

                <router-link to="/inicio/tablet/twitter/perfil3" class="font-bold underline">Publicaciones</router-link>
            </div>
            <hr class="border-gray-700 border-[0.5px]">

            <!-- Tweets -->
            <div>
                <div class="border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white">
                    <div class="flex items-center mb-4">
                        <router-link to="/inicio/tablet/twitter/perfil3"> <img :src="'/storage/img/apps/iconos/realmadrid.jpg'" class="w-10 h-10 rounded-full" /> </router-link>
                        <div class="ml-3">
                            <router-link to="/inicio/tablet/twitter/perfil3" class="flex items-center space-x-1">
                                <span class="font-bold">Real Madrid C.F.</span>
                                <img class="w-[15px]" :src="'/storage/img/verificado.png'" />
                                <span class="text-gray-400 text-sm">@realmadrid · 8 ene.</span>
                            </router-link>
                        </div>
                    </div>
                    <div class="mb-4 text-s">
                        <p>Convocatoria de elecciones a Presidente y Junta Directiva. <span class="text-blue-600">#RealMadrid</span></p>
                        <br>
                        <img class="rounded-lg" :src="'/storage/img/twFT2.jpg'" alt="">
                    </div>
                    <div class="flex space-x-20 text-gray-400 text-sm items-center">
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-comment.png'" alt="">
                            <span>82</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-rt.png'" alt="">
                            <span>182</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-corazonR.png'" alt="">
                            <span>2K</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[15px]">
                            <img :src="'/storage/img/apps/iconos/icon-grafico.png'" alt="">
                            <span>172K</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="h-[100%] w-[30%] pl-3">

            <!-- TENDENCIAS -->
            <div class=" flex flex-col p-1 border-[2px] rounded-lg mt-16 justify-center">

                <p class="text-l font-bold">Tendencias para ti</p>
                <hr>
                <div class="p-2">
                    <div>
                        <p class="text-sm my-2">#Vinicius</p>
                        <p class="text-xs text-gray-400">53K tweets</p>
                    </div>

                    <div>
                        <p class="text-sm my-2">#Ballon di'or</p>
                        <p class="text-xs text-gray-400">164K tweets</p>
                    </div>

                    <div>
                        <p class="text-sm my-2">#Atraco</p>
                        <p class="text-xs text-gray-400">14K tweets</p>
                    </div>

                    <div class="text-sm my-2">
                        <p class="my-2">#RealMadrid</p>
                        <p class="text-xs text-gray-400">102K tweets</p>
                    </div>


                    <div class="text-sm my-2">
                        <p class="my-2">#Florentino</p>
                        <p class="text-xs text-gray-400">31K tweets</p>
                    </div>

                </div>

            </div>


        </div>
    </div>
</template>

<style scoped>
::-webkit-scrollbar {
    width: 0px;
    height: 0px;
}
</style>

<script setup>
</script>