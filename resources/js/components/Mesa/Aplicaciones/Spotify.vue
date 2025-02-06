<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <router-link to="/inicio/tablet"
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            <div class="bg-zinc-900 w-[100%] h-[100%] overflow-auto">

                <div class="p-5">
                    <div class="h-[50px] w-fit flex flex-row items-center">
                        <img class="h-full hover:cursor-pointer"
                            :src="'/storage/img/apps/spotify/LogoSpotifyBlanco.png'" alt="">
                        <h2 class="p-3 font-bold hover:cursor-pointer">Spotify</h2>
                    </div>


                    <hr class="mt-3">


                    <!-- APARTADO DE LISTAS DE REPRODUCCIÓN -->
                    <div class="p-5">

                        <!-- TITULO DEL APARTADO -->
                        <div>

                            <h2 class="text-xl font-bold "> Éxitos </h2>

                        </div>

                        <div class="p-3 flex flex-row space-x-5">

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/top50global.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> Top 50: Global </h2>
                                </div>

                            </div>

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/top50.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> Top 50: España </h2>
                                </div>

                            </div>

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-xl">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/TopCanciones2024.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start w-full">

                                    <h2 class="w-full break-words whitespace-normal"> Top Canciones 2024 España </h2>
                                </div>

                            </div>

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> </h2>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- APARTADO DE LISTAS DE REPRODUCCIÓN -->
                    <div class="p-5">

                        <!-- TITULO DEL APARTADO -->
                        <div>

                            <h2 class="text-xl font-bold "> Especialmente para ti </h2>

                        </div>

                        <div class="p-3 flex flex-row space-x-5">

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/top50global.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> Top 50: Global </h2>
                                </div>

                            </div>

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/top50.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> Top 50: España </h2>
                                </div>

                            </div>

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify.png'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> Top 50 España </h2>
                                </div>

                            </div>

                            <!-- LISTA DE REPRODUCCIÓN -->
                            <div class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                                <div class="h-[150px] p-3">

                                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                                </div>

                                <div class="pl-3 pb-10 flex text-start">

                                    <h2 class=""> Mix diario 1</h2>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</template>


<script setup>
</script>