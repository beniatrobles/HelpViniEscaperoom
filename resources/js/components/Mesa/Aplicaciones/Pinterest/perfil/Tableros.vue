<template>
    <div class="flex gap-5">
        <router-link :to="{name : 'fotosTableros', params : {nombre : 'O Rei'}}">
            <div class="bg-zinc-900 w-52 h-32 flex overflow-hidden rounded-lg">
                <div class="w-[65%] h-full bg-black"></div>
                <div class="w-[35%]">
                    <div class="w-full h-1/2 bg-gray-50"></div>
                    <div class="w-full h-1/2 bg-gray-500"></div>
                </div>
            </div>
            <p class="text-sm font-medium">O Rei</p>
        </router-link>

        <router-link :to="{name : 'fotosTableros', params : {nombre : 'mininas'}}">
            <div class="bg-zinc-900 w-52 h-32 flex overflow-hidden rounded-lg">
                <div class="w-[65%] h-full bg-black"></div>
                <div class="w-[35%]">
                    <div class="w-full h-1/2 bg-gray-50"></div>
                    <div class="w-full h-1/2 bg-gray-500"></div>
                </div>
            </div>
            <p class="text-sm font-medium">mininas</p>
        </router-link>

        <router-link :to="{name : 'fotosTableros', params : {nombre : 'Love'}}">
            <div class="bg-zinc-900 w-52 h-32 flex overflow-hidden rounded-lg">
                <div class="w-[65%] h-full bg-black border-r border-zinc-800"><img src="https://i.pinimg.com/736x/0d/c4/c8/0dc4c86d8590170d02719a27c615da9f.jpg"></div>
                <div class="w-[35%]">
                    <div class="w-full h-1/2 overflow-hidden border-b border-zinc-800"><img src="https://i.pinimg.com/736x/1f/af/ce/1fafce4d7b1ae104c5b494e374b261e5.jpg"></div>
                    <div class="w-full h-1/2"><img src="https://i.pinimg.com/736x/d7/f1/0b/d7f10b46656fb2baaf1c0d0e354ec8e2.jpg"></div>
                </div>
            </div>
            <p class="text-sm font-medium">Love</p>
        </router-link>

        <router-view class="absolute top-0 left-0 w-full h-full"></router-view>
    </div>
</template>

<script setup>

</script>