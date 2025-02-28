<template>
    <div class="flex gap-5">
        <router-link :to="{name : 'fotosTableros', params : {nombre : 'O Rei'}}">
            <div class="bg-zinc-900 w-52 h-32 flex overflow-hidden rounded-lg">
                <div class="w-[65%] h-full bg-black"><img src="https://i.pinimg.com/736x/76/5e/af/765eafae27f30ca7a417208c4749c61f.jpg"></div>
                <div class="w-[35%]">
                    <div class="w-full h-1/2 bg-gray-50"><img src="https://i.pinimg.com/736x/b7/3e/07/b73e07d77c947e3f6cff3c170bb6a402.jpg"></div>
                    <div class="w-full h-1/2 bg-gray-500"><img src="https://i.pinimg.com/736x/4f/b0/4a/4fb04ac9d0c3e3d25de1dfd555ad4c93.jpg"></div>
                </div>
            </div>
            <p class="text-sm font-medium">O Rei</p>
        </router-link>

        <router-link :to="{name : 'fotosTableros', params : {nombre : 'mininas'}}">
            <div class="bg-zinc-900 w-52 h-32 flex overflow-hidden rounded-lg">
                <div class="w-[65%] h-full bg-black"><img src="https://i.pinimg.com/736x/0a/62/17/0a6217432203657893d1f20f020b01aa.jpg"></div>
                <div class="w-[35%]">
                    <div class="w-full h-1/2 bg-gray-50"><img src="https://i.pinimg.com/736x/21/d6/75/21d67546567533861bc15c02f3d21c76.jpg"></div>
                    <div class="w-full h-1/2 bg-gray-500"><img src="https://i.pinimg.com/736x/05/68/a3/0568a32a2d0cf302bef0df628e12db44.jpg"></div>
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
            <p class="text-sm font-medium">Amor prohibido</p>
        </router-link>

        <router-view class="absolute top-0 left-0 w-full h-full"></router-view>
    </div>
</template>

<script setup>

</script>