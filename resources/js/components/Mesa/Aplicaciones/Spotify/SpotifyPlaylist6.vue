<template>

    <div class="p-5">

        <!-- INFORMACION DE LA PLAYLIST -->
        <div class="flex flex-row">

            <div class="w-[25%]">
                <img class="rounded-lg" :src="'/storage/img/apps/spotify/MCLDaVinteT.jpg'" alt="">
            </div>

            <div class="p-10">
                <h2 class="text-gray-400">Lista</h2>

                <h2 class="text-[50px]">This Is MC L da Vinte</h2>

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
            <div class="w-full grid grid-cols-3 hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- PARTE DE LA IZQUIERDA -->
                <div class="h-[50px] flex flex-row items-center">
                    <!-- NUMERO DE LA CANCION -->
                    <div class="p-2">

                        <p> 3 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion33.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Set Do Dj 2W, Vol. 2</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Luan da BS...</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Set do Dj 2W, Vol. 2</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">5:59</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion34.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Tanto Faz</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, Mc Kaio</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Tanto Faz</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:29</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion35.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Sou de todas</p>
                        <p class="text-gray-400 text-xs">Dj Tg Da Inestan, DJ PH DA...</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Sou de Todas</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:59</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion36.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Colocando Nela</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, Mc Kaio, DJ...</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Colocando Nela</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:20</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion37.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Fala Que Me Ama É Cedo...</p>
                        <p class="text-gray-400 text-xs">DJ TOPO, MC L da Vinte, Mc...</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Fala Que Me Ama É Cedo Demais...</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:58</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion38.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Amizade Colorida</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Josh</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Amizade Colorida</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:38</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/cancion39.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Tu Sentando</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex pl-24 items-center justify-start">

                    <p class="text-gray-400 text-xs">Tu Sentando</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:39</p>

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