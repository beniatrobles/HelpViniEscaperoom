<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">

            <!-- CONTENEDOR GENERAL -->
            <div class="flex bg-gray-950 h-[100%] flex-col">

                <!-- HEADER -->
                <div class="p-10">

                    <h2 class="text-xl font-bold">Previsión de 7 días</h2>
                    <h2>(Madrid)</h2>

                </div>
                <hr class="border-white mx-5">

                <!-- CONTENEDOR DE LOS DÍAS -->
                <div class="grid grid-cols-7 h-[100%] p-5 space-x-1">

                    <!-- LUNES -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">LUNES</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/sol.png'" alt="">
                            <p>25ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>10km/h</p>
                            <p>-></p>
                        </div>


                    </div>

                    <!-- MARTES -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">MARTES</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/sol.png'" alt="">
                            <p>21ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>20km/h</p>
                            <p><-</p>
                        </div>


                    </div>

                    <!-- MIÉRCOLES -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">MIÉRCOLES</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/nublado.png'" alt="">
                            <p>15ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>15km/h</p>
                            <p><-</p>
                        </div>


                    </div>

                    <!-- JUEVES -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">JUEVES</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/nublado.png'" alt="">
                            <p>18ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>10km/h</p>
                            <p>-></p>
                        </div>


                    </div>

                    <!-- VIERNES -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">VIERNES</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/lluvia.png'" alt="">
                            <p>14ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>15km/h</p>
                            <p>-></p>
                        </div>


                    </div>

                    <!-- SÁBADO -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">SÁBADO</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/lluvia.png'" alt="">
                            <p>16ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>10km/h</p>
                            <p>-></p>
                        </div>


                    </div>

                    <!-- DOMINGO -->
                    <div class="border-[1px] flex flex-col items-center rounded border-gray-800 justify-between py-5 hover:bg-gray-900 hover:cursor-pointer">

                        <div>
                            <h2 class="text-lg font-bold">DOMINGO</h2>
                        </div>

                        <div class="flex flex-col items-center">
                            <img :src="'/storage/img/apps/ElTiempo/sol.png'" alt="">
                            <p>23ºC</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <img class="w-[80%]" :src="'/storage/img/apps/ElTiempo/viento.png'" alt="">
                            <p>10km/h</p>
                            <p><-</p>
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