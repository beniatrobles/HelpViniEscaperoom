<template>

    <!-- APARTADO DE LISTAS DE REPRODUCCIÓN -->
    <div class="p-5">

        <!-- TITULO DEL APARTADO -->
        <div>

            <h2 class="text-xl font-bold "> Éxitos </h2>

        </div>

        <div class="p-3 flex flex-row space-x-5">

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist1" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/Top50global.png'" alt="">

                </div>

                <div class="pl-3 pb-10 flex text-start">

                    <h2> Top 50: Global </h2>
                </div>

            </router-link>

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist2" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/Top50.png'" alt="">

                </div>

                <div class="pl-3 flex text-start">

                    <h2> Top 50: España </h2>
                </div>

            </router-link>

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist3" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/TopCanciones2024.png'" alt="">

                </div>

                <div class="pl-3 flex text-start w-full">

                    <h2 class="w-full break-words whitespace-normal"> Top Canciones 2024 España </h2>
                </div>

            </router-link>

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist4" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/WildProject.png'" alt="">

                </div>

                <div class="pl-3 flex flex-col text-start">

                    <h2> The Wild Project </h2>
                    <h2 class="text-gray-400 text-sm">Jordi Wild</h2>
                </div>

            </router-link>

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
            <router-link to="/inicio/tablet/spotify/playlist5" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/40exitos.png'" alt="">

                </div>

                <div class="pl-3 pb-5 flex flex-col text-start">

                    <h2> 40 Éxitos: Brasileños </h2>
                    <h2 class="text-gray-400 text-sm">2022 · Varios artistas</h2>

                </div>

            </router-link>

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist6" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/MCLDaVinteT.jpg'" alt="">

                </div>

                <div class="pl-3 pb-10 flex text-start">

                    <h2 class=""> This Is MC L Da Vinte </h2>
                </div>

            </router-link>

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist7" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl bg-black"
                        :src="'https://images.vexels.com/media/users/3/278708/isolated/preview/4817b6f5fe60b466f5a7e3a677d7811f-palabras-populares-relajarse-letras.png'"
                        alt="">

                </div>

                <div class="pl-3 pb-10 flex text-start">

                    <h2 class=""> Playlist relajante </h2>
                </div>

            </router-link>

            <!-- LISTA DE REPRODUCCIÓN -->
            <router-link to="/inicio/tablet/spotify/playlist8" class="flex flex-col w-[150px] hover:bg-zinc-700 hover:cursor-pointer rounded-lg">

                <div class="h-[150px] p-3">

                    <img class="rounded-xl" :src="'/storage/img/apps/spotify/MCLDaVinte.jpg'" alt="">

                </div>

                <div class="pl-3 pb-10 flex text-start">

                    <h2 class=""> Mix diario 1</h2>
                </div>

            </router-link>

        </div>

    </div>

</template>


<script setup>


</script>