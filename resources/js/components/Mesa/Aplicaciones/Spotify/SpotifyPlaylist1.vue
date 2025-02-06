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

        <hr class="my-3 border-gray-700">

        <!-- CANCIONES DE LA PLAYLIST -->
        <div>
            <!-- CANCION -->
            <div class="w-full h-[50px] flex flex-row items-center hover:bg-zinc-700 hover:cursor-pointer rounded-md">

                <!-- NUMERO DE LA CANCION -->
                <div class="p-1">

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


        </div>

    </div>

</template>


<script setup>
</script>