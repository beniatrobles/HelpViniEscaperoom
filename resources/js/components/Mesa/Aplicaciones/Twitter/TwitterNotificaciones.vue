<template>

    <div class="flex flex-row h-[100%]">

        <div class="h-[100%] w-[65%] border-r-gray-500 border-l-gray-500 border-x overflow-auto">

            <div>
                <p class="text-xl font-bold p-2 border-gray-500 border-b-[0.5px]"> Notificaciones </p>
            </div>

            <!-- Notificaciones -->

            <div class="flex flex-col border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white space-y-2">
                <!-- Icono notificación  -->
                <div class="flex mb-1">
                    <img class="w-[25px]" :src="'/storage/img/apps/iconos/icon-corazonR.png'" alt="">
                </div>

                <!-- Fotos de perfil  -->
                <div class="flex items-center space-x-1">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser.jpg'" alt="">
                    <p class="flex rounded-full bg-green-700 items-center justify-center w-[35px] h-[35px]">S</p>
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser2.jpg'" alt="">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser3.jpg'" alt="">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser4.jpg'" alt="">
                </div>

                <!-- Mensaje de notificacion  -->
                <div>

                    <p>Juan De Dios y 263k más indicaron que les gusta tu post</p>

                </div>

                <!-- Tweet  -->
                <div>

                    <p class="text-gray-400">Perdon y gracias equipo!!!!!! ✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾</p>

                </div>

            </div>

            <div class="flex flex-col border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white space-y-2">
                <!-- Icono notificación  -->
                <div class="flex mb-1">
                    <img class="w-[25px]" :src="'/storage/img/apps/iconos/icon-notificacionR.png'" alt="">
                </div>

                <!-- Fotos de perfil  -->
                <div class="flex items-center space-x-1">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/apps/iconos/realmadrid.jpg'" alt="">
                    <p class="flex rounded-full bg-purple-600 items-center justify-center w-[35px] h-[35px]">A</p>
                    <img class="rounded-full w-[35px]" :src="'/storage/img/apps/iconos/twpfp2.jpg'" alt="">
                </div>

                <!-- Mensaje de notificacion  -->
                <div>

                    <p>Nuevas notificaciones de posts para <span class="font-bold"> Real Madrid C. F. </span> y 6 más </p>

                </div>

            </div>

            <div class="flex flex-col border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white space-y-2">
                <!-- Icono notificación  -->
                <div class="flex mb-1">
                    <img class="w-[25px]" :src="'/storage/img/apps/iconos/icon-rtR.png'">
                </div>

                <!-- Fotos de perfil  -->
                <div class="flex items-center space-x-1">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser5.jpg'">
                    <p class="flex rounded-full bg-orange-500 items-center justify-center w-[35px] h-[35px]">L</p>
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser6.jpg'">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser3.jpg'">
                    <p class="flex rounded-full bg-blue-700 items-center justify-center w-[35px] h-[35px]">P</p>
                </div>

                <!-- Mensaje de notificacion  -->
                <div>

                    <p>Castillo y 36k más repostearon tu post</p>

                </div>

                <!-- Tweet  -->
                <div>

                    <p class="text-gray-400">Perdon y gracias equipo!!!!!! ✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾✌🏾</p>

                </div>

            </div>

            <div class="flex flex-col border-gray-500 border-b-[0.5px] p-4 bg-gray-900 text-white space-y-2">
                <!-- Icono notificación  -->
                <div class="flex mb-1">
                    <img class="w-[25px]" :src="'/storage/img/apps/iconos/icon-corazonR.png'" alt="">
                </div>

                <!-- Fotos de perfil  -->
                <div class="flex items-center space-x-1">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/apps/iconos/twpfp2.jpg'" alt="">
                    <p class="flex rounded-full bg-yellow-500 items-center justify-center w-[35px] h-[35px]">M</p>
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser2.jpg'" alt="">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser5.jpg'" alt="">
                    <img class="rounded-full w-[35px]" :src="'/storage/img/twuser6.jpg'" alt="">
                </div>

                <!-- Mensaje de notificacion  -->
                <div>

                    <p>Kylian Mbappe y 87k más indicaron que les gusta tu post</p>

                </div>

                <!-- Tweet  -->
                <div>

                    <p class="text-gray-400">7️⃣</p>

                </div>

            </div>


        </div>


        <div class="h-[100%] w-[30%] pl-3">

            <!-- TENDENCIAS -->
            <div class=" flex flex-col p-1 border-[2px] rounded-lg mt-16 justify-center">

                <p class="text-l font-bold">Tendencias para ti</p>
                <hr>
                <div class="p-2">
                    <div>
                        <p class="text-sm my-2">#Vinicius</p>
                        <p class="text-xs text-gray-400">53K tweets</p>
                    </div>

                    <div>
                        <p class="text-sm my-2">#Ballon di'or</p>
                        <p class="text-xs text-gray-400">164K tweets</p>
                    </div>

                    <div>
                        <p class="text-sm my-2">#Atraco</p>
                        <p class="text-xs text-gray-400">14K tweets</p>
                    </div>

                    <div class="text-sm my-2">
                        <p class="my-2">#RealMadrid</p>
                        <p class="text-xs text-gray-400">102K tweets</p>
                    </div>


                    <div class="text-sm my-2">
                        <p class="my-2">#Florentino</p>
                        <p class="text-xs text-gray-400">31K tweets</p>
                    </div>

                </div>

            </div>


        </div>
    </div>
</template>

<style scoped>
::-webkit-scrollbar {
    width: 0px;
    height: 0px;
}
</style>


<script setup>
</script>