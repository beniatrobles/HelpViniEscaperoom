<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail/borradores"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">(Borrador) monster</h2>
            <div class="flex items-center gap-2">
                <img :src="'/storage/img/vini.jpeg'" class="w-[50px] rounded-full">
                <div>
                    <p>Vinijr <span class="text-sm text-zinc-400">&lt;vinijr07@gmail.com&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mrMonster</p>
                </div>
            </div>
            <div class="mt-4 flex flex-col justify-center w-full m-auto text-[15px]">
                <p class="text-white">
                    Polla para mrMonster
                </p>
                
            </div>
            <br>
        </div>
    </div>
</template>

<script setup>
</script>
