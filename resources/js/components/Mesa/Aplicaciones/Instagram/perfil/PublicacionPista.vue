<template>
    <div class="bg-black bg-opacity-45 flex flex-col justify-center items-center">
        <router-link to="/inicio/tablet/instagram/perfil">
            <p class="absolute top-10 right-10 text-2xl">X</p>
        </router-link>
        <div class="flex justify-center items-center w-[80%]">
            <div class="">
                <img :src="'/storage/img/vini.jpeg'" class>
            </div>
            <div class="bg-zinc-900 w-[60%] h-full py-3 px-3 flex flex-col">
                <div class="flex items-center gap-1 pb-3 border-b border-zinc-800">
                    <img :src="'/storage/img/vini.jpeg'" class="w-[30px] rounded-full">
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">vinijr<img :src="'/storage/img/verificado.png'"
                                class="w-[15px] h-[15px]"></p>
                    </div>
                    <p>Al César lo que es del César</p>
                </div>

                <div class="flex items-center gap-1 py-3">
                    <img :src="'https://img.uefa.com/imgml/TP/teams/logos/240x240/50051.png'"
                        class="w-[30px] rounded-full bg-white p-1">
                    <div class="flex items-center gap-2">
                        <p class="font-bold flex items-center gap-1">realmadrid<img :src="'/storage/img/verificado.png'"
                                class="w-[15px] h-[15px]"></p>
                    </div>
                    <p>👏👏👏</p>
                </div>

                <div class="flex items-center gap-1 py-3">
                    <img :src="'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png'"
                        class="w-[30px] rounded-full bg-white p-1">
                    <p class="font-bold flex items-center gap-1">legoiv</p>

                    <p>xax: ZmrmQsrsriyvsrep1</p>
                </div>

                <div class="text-wrap ml-8 mt-1">
                    <img :src="'/storage/img/apps/Instagram/pfpig1.png'" class="w-[30px] rounded-full inline-block">
                    <b class="mx-1">mostopapi</b> 
                    <img :src="'/storage/img/verificado.png'" class="w-[15px] h-[15px] inline-block"> 
                    
                    Pero traduce que no se entiende 😂😂
                </div>
                

                <div class="mt-auto text-center border-t border-zinc-800 pt-3">Los comentarios están deshabilitados
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>

</script>