<template>
    <div class="h-[100%] w-[100%]">
        <div>
            <p class="font-bold text-2xl">Enviados</p>
        </div>
        <hr>
        <br>
        <section>
            <router-link to="/inicio/tablet/gmail/enviados/enviado1" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p>Para: instragam</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Filho da p*ta</span> -  ¿Qué te pasa, hijo de p*ta? ¿C...</p></div>
            </router-link>
            <router-link to="/inicio/tablet/gmail/enviados/enviado2" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p>Para: Nike</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">¡Exijo unas nuevas botas, Nike!</span> - Oye, Nike...</p></div>
            </router-link>
            <router-link to="/inicio/tablet/gmail/enviados/enviado3" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><div class="h-[10px] w-[10px] bg-blue-600 rounded-full"></div> <p>Para: Frederico Pena</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">Aumento de salário JÁ</span> - Frederico, preciso que...</p></div>
            </router-link>
            
        </section>
        <router-view class="absolute top-0 left-0"></router-view>
    </div>
</template>


<script setup>
</script>