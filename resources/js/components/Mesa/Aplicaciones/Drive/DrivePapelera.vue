<template>
    <!-- PAGINA PRINCIPAL -->
    <div class="h-[15%] flex flex-col items-center justify-center p-1 space-x-2">
        <div class="flex items-center justify-center">
            <img class="w-full" :src="'/storage/img/apps/drive/basura.png'" alt="">
            <p>Papelera</p>
        </div>
        <div class="flex items-center justify-center p-1">
            <p class="text-gray-400 text-xs">Aquí se mostrarán los archivos eliminados en los últimos 30 días.</p>
        </div>
    </div>

    <hr>

    <div class="flex-1 h-0 overflow-auto p-5">
        <div class="grid grid-cols-3 gap-4">

            <!-- CONTENEDOR INDIVIDUAL DE CARPETA -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[50px] justify-center">
                <div class="flex flex-row justify-start items-center space-x-2 h-full m-1">
                    <img class="h-full" :src="'/storage/img/apps/drive/carpeta.png'" alt="">
                    <p class="text-xs">Contratos importantes</p>
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL DE CARPETA -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[50px] justify-center">
                <div class="flex flex-row justify-start items-center space-x-2 h-full m-1">
                    <img class="h-full" :src="'/storage/img/apps/drive/carpeta.png'" alt="">
                    <p class="text-xs">Fotos Brasil</p>
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL DE CARPETA -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[50px] justify-center">
                <div class="flex flex-row justify-start items-center space-x-2 h-full m-1">
                    <img class="h-full" :src="'/storage/img/apps/drive/carpeta.png'" alt="">
                    <p class="text-xs">Fotos con Ingrid</p>
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">Cristiano.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen6.jpg'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">TifoCity.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen7.jpg'" alt="">
                </div>
            </div>


        </div>
    </div>
</template>