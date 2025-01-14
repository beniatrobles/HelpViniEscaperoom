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

                    <h2 class="text-4xl font-bold"> Spotify </h2>
                    <hr class="mt-3">

                    <div class="p-5">

                        <div>

                            <h2 class="text-xl font-bold "> Éxitos </h2>

                        </div>

                        <div class="p-3 flex flex-row space-x-5">

                            <div class="flex flex-col items-center">

                                <div class="rounded-lg border-[1px] border-zinc-800 bg-zinc-700 h-[150px] w-[150px]">

                                    <img class="" :src="'/storage/img/apps/spotify.png'" alt="">

                                </div>

                                <div class="p-1">

                                    <h2 class=""> Top 50 España </h2>
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