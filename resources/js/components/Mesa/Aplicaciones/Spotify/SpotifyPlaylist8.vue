<template>

    <div class="p-5">

        <!-- INFORMACION DE LA PLAYLIST -->
        <div class="flex flex-row">

            <div class="w-[25%]">
                <img class="rounded-lg" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">
            </div>

            <div class="p-10">
                <h2 class="text-gray-400">Lista</h2>

                <h2 class="text-[50px]">Mix Diario 1</h2>

                <h2>Spotify</h2>
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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion31.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Parado no Bailão</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:51</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion40.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Candy</p>
                        <p class="text-gray-400 text-xs">Plan B</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Love And Sex</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:27</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion17.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>MIA</p>
                        <p class="text-gray-400 text-xs">Bad Bunny, Drake</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">X 100PRE</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:30</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion42.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Espresso</p>
                        <p class="text-gray-400 text-xs">Sabrina Carpenter</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Short n'Sweet</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:55</p>

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

                        <p> 6 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion43.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Columbia</p>
                        <p class="text-gray-400 text-xs">Quevedo</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Columbia</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:06</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion44.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Luck Ra: Bzrp Music Se...</p>
                        <p class="text-gray-400 text-xs">Bizarrap, Luck Ra</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Luck Ra: Bzrp Music Sessions...</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:50</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion45.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Nueva Era</p>
                        <p class="text-gray-400 text-xs">Duki, Myke Towers</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">AMERI</p>

                </div>
 
                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:37</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion32.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Que Saudade de Você</p>
                        <p class="text-gray-400 text-xs">Mc Kaio, MC L da Vinte</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Que Saudade de Você</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:03</p>

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