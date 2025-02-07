<template>

    <div class="p-5">

        <!-- INFORMACION DE LA PLAYLIST -->
        <div class="flex flex-row">

            <div>
                <img class="rounded-lg" :src="'/storage/img/apps/spotify/top50global.png'" alt="">
            </div>

            <div class="p-10">
                <h2 class="text-gray-400">Lista</h2>

                <h2 class="text-[50px]">Top 50: Global</h2>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

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

                        <p> 1 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Parado no Bailão</p>
                        <p class="text-gray-400 text-xs">MC L da Vinte, MC Gury</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div class="flex items-center justify-center">

                    <p class="text-gray-400 text-xs">Parado no Bailão</p>

                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:51</p>

                </div>

            </div>


        </div>

    </div>

</template>


<script setup>
</script>