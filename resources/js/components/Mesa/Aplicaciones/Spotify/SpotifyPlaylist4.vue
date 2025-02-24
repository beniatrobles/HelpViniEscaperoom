<template>

    <div class="p-5">

        <!-- INFORMACION DE LA PLAYLIST -->
        <div class="flex flex-row">

            <div class="w-[25%]">
                <img class="rounded-lg" :src="'/storage/img/apps/spotify/WildProject.png'" alt="">
            </div>

            <div class="p-10">
                <h2 class="text-gray-400">Podcast</h2>

                <h2 class="text-[50px]">The Wild Project</h2>

                <h2>Jordi Wild</h2>
            </div>

        </div>

        <!-- HEADER DE LAS CANCIONES  -->
        <div class="w-full grid grid-cols-3 pt-3 pl-2">

            <!-- PARTE DE LA IZQUIERDA -->
            <div class="flex flex-row items-center text-gray-400 text-md space-x-3">

                <!-- NUMERO Y TITULO DE LA CANCION -->

                <p> # </p>
                <p> Título </p>


            </div>

            <!-- ALBUM AL QUE PERTENECE -->
            <div class="flex items-center justify-center text-gray-400 text-md">

                <p>Álbum</p>

            </div>

            <!-- TIEMPO DE LA CANCION  -->
            <div class="flex items-center justify-end h-full">

                <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/reloj.png'" alt="">

            </div>

        </div>

        <hr class="my-3 border-gray-700">

        <!-- CANCIONES DE LA PLAYLIST -->
        <div class="space-y-1">
            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion9.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>capaz (merengueton)</p>
                        <p class="text-gray-400 text-xs">Alleh, Yorghaki</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">LA CIUDAD</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:53</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 2 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion4.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>NUEVAYoL</p>
                        <p class="text-gray-400 text-xs">Bad Bunny</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">DeBÍ TiRAR MáS FOToS</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:03</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 3 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion4.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>DtMF</p>
                        <p class="text-gray-400 text-xs">Bad Bunny</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">DeBÍ TiRAR MáS FOToS</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:57</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 4 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion10.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Angelito</p>
                        <p class="text-gray-400 text-xs">Bad Gyal, Trueno</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Angelito</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:10</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 5 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion4.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>BAILE INoLVIDABLE</p>
                        <p class="text-gray-400 text-xs">Bad Bunny</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">DeBÍ TiRAR MáS FOToS</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">6:07</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 6 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion4.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>VeLDÁ</p>
                        <p class="text-gray-400 text-xs">Bad Bunny, Omar Courtz, Dei V</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">DeBÍ TiRAR MáS FOToS</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:55</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 7 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion11.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Mi Refe</p>
                        <p class="text-gray-400 text-xs">Beéle, Ovy On The Drums</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Mi Refe</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:39</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 8 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion4.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>VOY A LLeVARTE PA PR</p>
                        <p class="text-gray-400 text-xs">Bad Bunny</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">DeBÍ TiRAR MáS FOToS</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:36</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 9 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion12.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>DONDE TE ESCONDES?</p>
                        <p class="text-gray-400 text-xs">Yapi</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">DONDE TE ESCONDES?</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:14</p>

                </div>

            </div>

            <!-- CANCION -->
            <div class="w-full grid grid-cols-3">

                <div class="col-span-3 flex items-center justify-center">

                    <p class="text-4xl">...</p>
                </div>

            </div>

        </div>

    </div>

</template>


<script setup>
</script>