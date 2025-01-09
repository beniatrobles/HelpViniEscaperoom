<template>

    <div class="flex flex-row h-[100%]">

        <div class="h-[100%] w-[65%] border-r-gray-500 border-l-gray-500 border-x overflow-auto">

            <div>
                <p class="text-xl font-bold p-2 border-gray-500 border-b-[0.5px]"> Inicio </p>
            </div>

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

            <div>
                <div class="border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white">
                    <div class="flex items-center mb-4">
                        <router-link to="/inicio/tablet/twitter/perfil4"> <img :src="'/storage/img/apps/iconos/twpfp2.jpg'" class="w-10 h-10 rounded-full" /> </router-link>
                        <div class="ml-3">
                            <router-link to="/inicio/tablet/twitter/perfil4" class="flex items-center space-x-1">
                                <span class="font-bold">Kylian Mbappe</span>
                                <img class="w-[15px]" :src="'/storage/img/verificado.png'" />
                                <img class="w-[15px]" :src="'/storage/img/apps/iconos/realmadrid.jpg'"/>
                                <span class="text-gray-400 text-sm">@KMbappe · 17 jul. 2024</span>
                            </router-link>
                        </div>
                    </div>
                    <div class="mb-4 text-s">
                        <p>Mi nueva casa. ¡Hala Madrid! 🏟️😍😃 <router-link to="/inicio/tablet/twitter/perfil3" class="text-blue-600">@realmadrid</router-link></p>
                        <br>
                        <img class="rounded-lg" :src="'/storage/img/twFT3.jpg'" alt="">
                    </div>
                    <div class="flex space-x-20 text-gray-400 text-sm items-center">
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-comment.png'" alt="">
                            <span>6k</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-rt.png'" alt="">
                            <span>52k</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-corazon.png'" alt="">
                            <span>587k</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[15px]">
                            <img :src="'/storage/img/apps/iconos/icon-grafico.png'" alt="">
                            <span>11M</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white">
                    <div class="flex items-center mb-4">
                        <router-link to="/inicio/tablet/twitter/perfil">
                            <img :src="'/storage/img/apps/iconos/twpfp.jpg'" class="w-10 h-10 rounded-full" />
                        </router-link>
                        <div class="ml-3">
                            <router-link to="/inicio/tablet/twitter/perfil" class="flex items-center space-x-1">
                                <span class="font-bold">Vini Jr.</span>
                                <img class="w-[15px]" :src="'/storage/img/verificado.png'" />
                                <img class="w-[15px]" :src="'/storage/img/apps/iconos/RealMadrid.jpg'" />
                                <span class="text-gray-400 text-sm">@vinijr · 2 ene.</span>
                            </router-link>
                        </div>
                    </div>
                    <div class="mb-4 text-s">
                        <p>7️⃣</p>
                        <br>
                        <img class="rounded-lg" :src="'/storage/img/twFT.jpg'" alt="">
                    </div>
                    <div class="flex space-x-20 text-gray-400 text-sm items-center">
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-comment.png'" alt="">
                            <span>826</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-rt.png'" alt="">
                            <span>4K</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[20px]">
                            <img :src="'/storage/img/apps/iconos/icon-corazonR.png'" alt="">
                            <span>87K</span>
                        </div>
                        <div class="flex items-center space-x-1 w-[15px]">
                            <img :src="'/storage/img/apps/iconos/icon-grafico.png'" alt="">
                            <span>1M</span>
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