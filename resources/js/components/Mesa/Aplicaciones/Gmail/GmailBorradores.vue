<template>
    <div class="h-[100%] w-[100%]">
        <div>
            <p class="font-bold text-2xl">Borradores</p>
        </div>
        <hr>
        <br>
        <section>
            <router-link to="/inicio/tablet/gmail/borradores/borrador1" class="w-100% hover:bg-zinc-800 p-2 flex border-b border-zinc-800">
                <div class="flex items-center gap-3 w-[40%]"><p class="text-red-500">Borrador</p></div>
                <div class="flex w-[70%]"><p><span class="font-bold">monster</span> - ...</p></div>
            </router-link>
        </section>
        <router-view class="absolute left-0 top-0"></router-view>
    </div>
</template>


<script setup>
</script>