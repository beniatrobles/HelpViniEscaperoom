<template>
    <!-- PAGINA PRINCIPAL -->
    <div class="h-[15%] flex items-center justify-center p-1 space-x-2">
        <img class="w-[5%]" :src="'/storage/img/apps/drive/casa.png'" alt="">
        <p>Página Principal</p>
    </div>

    <hr>

    <!-- CONTENEDOR GENERAL -->
    <div class="flex-1 h-0 overflow-auto p-5">
        <div class="grid grid-cols-3 gap-4">

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/wordS.png'" alt="">
                    <p class="text-xs">ContratoFloren.docx</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-[75%] w-auto object-cover" :src="'/storage/img/apps/drive/word.png'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/pdfS.png'" alt="">
                    <p class="text-xs">ContratoFloren.pdf</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-[75%] w-auto object-cover" :src="'/storage/img/apps/drive/pdf.png'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">Fiesta235.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen5.jpg'" alt="">
                </div>
            </div>
            
            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">FotoMachesterCity.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen1.jpg'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">MiPrimera.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen4.jpg'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">MyG.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen3.jpg'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/videoS.png'" alt="">
                    <p class="text-xs">PromoBalonDiOr.mp4</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-[65%] w-auto object-cover" :src="'/storage/img/apps/drive/video.png'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/driveImagen.png'" alt="">
                    <p class="text-xs">TheBest.jpg</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-full w-auto object-cover" :src="'/storage/img/apps/drive/imagen2.jpg'" alt="">
                </div>
            </div>

            <!-- CONTENEDOR INDIVIDUAL -->
            <div class="bg-zinc-800 rounded p-3 flex flex-col h-[250px]">
                <!-- CABECERA -->
                <div class="flex flex-row justify-start items-center space-x-2 h-[15%] m-1">
                    <img class="h-[50%]" :src="'/storage/img/apps/drive/zipS.png'" alt="">
                    <p class="text-xs">🤫🤫🤫.zip</p>
                </div>

                <!-- CONTENIDO -->
                <div class="flex-1 overflow-hidden flex items-center justify-center">
                    <img class="rounded h-[75%] w-auto object-cover" :src="'/storage/img/apps/drive/zip.png'" alt="">
                </div>
            </div>
        </div>
    </div>
</template>