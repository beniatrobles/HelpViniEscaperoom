<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">

            <!-- CONTENEDOR GENERAL -->
            <div class="flex bg-gray-950 h-[100%] flex-col">

                <!-- APARTADO DE LA IZQUIERDA -->
                <div class="w-[25%] h-full bg-zinc-800 flex flex-col p-4">

                    <!-- LOGO -->
                    <div class="flex h-[10%] items-center justify-start space-x-2">
                        <img class="w-[20%]" :src="'/storage/img/apps/drive/driveicon.png'" alt="">
                        <h2 class="text-gray-300 font-bold text-2xl">Drive</h2>

                    </div>

                    <hr class="mt-3">

                    <!-- NAV -->
                    <div class="flex flex-col pt-3 space-y-3">

                        <div class="rounded-xl hover:bg-zinc-600 hover:cursor-pointer flex p-1">
                            <img class="w-[15%] mx-2" :src="'/storage/img/apps/drive/casa.png'" alt="">
                            <p>Página Principal</p>
                        </div>

                        <!-- Papelera -->
                        <div class="rounded-xl hover:bg-zinc-600 hover:cursor-pointer flex p-1">
                            <img class="w-[15%] mx-2" :src="'/storage/img/apps/drive/basura.png'" alt="">
                            <p>Papelera</p>
                        </div>

                        <!-- Almacenamiento -->
                        <div class="flex flex-col">

                            <div class="flex p-1">
                                <img class="w-[15%] mx-2" :src="'/storage/img/apps/drive/nube.png'" alt="">
                                <p>Almacenamiento</p>
                            </div>

                            <div class="w-full bg-white rounded h-2">

                                <div class="w-[24%] bg-blue-700 h-2 rounded">
                                
                                </div>

                            </div>

                            <p class="text-gray-300 text-xs p-2">3,69 GB de 15 GB usado</p>

                        </div>

                    </div>

                </div>





                <router-link to="/inicio/tablet"
                    class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>