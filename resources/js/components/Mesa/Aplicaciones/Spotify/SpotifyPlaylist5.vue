<template>

    <div class="p-5">

        <!-- INFORMACION DE LA PLAYLIST -->
        <div class="flex flex-row">

            <div class="w-[25%]">
                <img class="rounded-lg" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">
            </div>

            <div class="p-10">
                <h2 class="text-gray-400">Lista</h2>

                <h2 class="text-[50px]">40 Éxitos: Brasileños</h2>

                <h2>Varios artistas</h2>
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
            <div>
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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Bola Rebola</p>
                        <p class="text-gray-400 text-xs">Tropkillaz, J Balvin, Anitta, ZAAC</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:13</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Qué Pasa</p>
                        <p class="text-gray-400 text-xs">Projota, Mario Bautista, Orishas</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:16</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Liberdade Provisória -Li...</p>
                        <p class="text-gray-400 text-xs">Henrique & Juliano</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Meu Abrigo</p>
                        <p class="text-gray-400 text-xs">Melim</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:51</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Quero Que Tu Vá (Inter...)</p>
                        <p class="text-gray-400 text-xs">Ananda, Mala Rodríguez, Joker...</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">2:19</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Amiga Da Minha Mulher</p>
                        <p class="text-gray-400 text-xs">Seu Jorge</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">4:08</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Pupila</p>
                        <p class="text-gray-400 text-xs">ANAVITÓRIA, Vitor Kley</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">3:22</p>

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

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Preciso Me Encontrar</p>
                        <p class="text-gray-400 text-xs">Cartola</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
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

                        <p> 9 </p>

                    </div>

                    <!-- IMAGEN DE LA CANCION  -->
                    <div class="h-full p-1">

                        <img class="h-full rounded-md" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                    </div>

                    <!-- TITULO Y ARTISTA -->
                    <div class="flex flex-col p-1">

                        <p>Deixa A Vida Me Levar</p>
                        <p class="text-gray-400 text-xs">Zeca Pagodinho</p>

                    </div>
                </div>

                <!-- ALBUM AL QUE PERTENECE  -->
                <div>
                </div>

                <!-- TIEMPO  -->
                <div class="flex items-center justify-end pr-2">

                    <p class="text-gray-400 text-xs">4:35</p>

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