<template>
    <div class="bg-black bg-opacity-45 flex flex-col justify-center items-center">
        <router-link to="/inicio/tablet/instagram/perfil">
            <p class="absolute top-10 right-10 text-2xl">X</p>
        </router-link>
        <div class="flex justify-center items-center w-[80%]">
            <div class="w-3/4">
                <img :src="'/storage/img/vini_brasil.jpg'" class>
            </div>
            <div class="bg-zinc-900 w-[60%] h-full py-3 px-3 flex flex-col">
                <div class="flex items-center gap-1 pb-3 border-b border-zinc-800">
                    <img :src="'/storage/img/vini.jpeg'" class="w-[30px] rounded-full">
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">vinijr<img :src="'/storage/img/verificado.png'"
                                class="w-[15px] h-[15px]"></p>
                    </div>
                    <p class="flex items-center gap-1"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/300px-Flag_of_Brazil.svg.png" class="w-[20px] h-[15px]"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/300px-Flag_of_Brazil.svg.png" class="w-[20px] h-[15px]"></p>
                </div>

                <div class="flex items-center gap-1 py-3">
                    <img :src="'https://brandemia.org/contenido/subidas/2022/12/02-escudo-cbf.webp'"
                        class="w-[35px] rounded-full p-1 aspect-square object-cover">
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">cbf_futebol<img :src="'/storage/img/verificado.png'"
                                class="w-[15px] h-[15px]"></p>
                    </div>
                    <p>viniii🕺🏿🕺🏿</p>
                </div>

                <div class="flex items-center gap-1 py-3">
                    <img :src="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGduAYZu40pJv-hwn8r9xd-nUnTYod03eUtQ&s'"
                        class="w-[35px] rounded-full p-1 aspect-square object-cover">
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">rodrygo<img :src="'/storage/img/verificado.png'"
                                class="w-[15px] h-[15px]"></p>
                    </div>
                    <p>💪💪💪💪</p>
                </div>

                

                <div class="mt-auto text-center border-t border-zinc-800 pt-3">Los comentarios están deshabilitados
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>

</script>