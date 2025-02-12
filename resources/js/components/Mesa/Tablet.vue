<script setup>
</script>

<template>

    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <img class="absolute z-[-50] inset-0 w-[100%]" :src="'/storage/img/fondoTablet.jpg'" alt="">
            <div class="bg-black bg-opacity-25 h-5 flex flex-row justify-between">
                <p class="ml-2 text-[10px] text-white p-1"> 9:47 PM </p>

                <img class="pr-2" :src="'/storage/img/bateria.png'" alt="">
            </div>
            <div class="grid grid-cols-4 gap-8 p-8">
                <router-link to="/inicio/tablet/calculadora" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/calculadora.png'" alt="Calculadora" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Calculadora</p>
                </router-link>
                <router-link to="/inicio/tablet/drive" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/drive.png'" alt="Drive" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Drive</p>
                </router-link>
                <router-link to="/inicio/tablet/eltiempo" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/eltiempo.png'" alt="El tiempo" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">El Tiempo</p>
                </router-link>
                <router-link to="/inicio/tablet/glovo" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/glovo.png'" alt="Glovo" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Glovo</p>
                </router-link>
                <router-link to="/inicio/tablet/gmailL" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/gmail.png'" alt="Gmail" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Gmail</p>
                </router-link>
                <router-link to="/inicio/tablet/instagramL" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/instagram.png'" alt="Instagram" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Instagram</p>
                </router-link>
                <router-link to="/inicio/tablet/notas" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/notas.png'" alt="Notas" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Notas</p>
                </router-link>
                <router-link to="/inicio/tablet/pinterest" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/pinterest.png'" alt="Pinterest" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Pinterest</p>
                </router-link>
                <router-link to="/inicio/tablet/spotify" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/spotify.png'" alt="Spotify" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Spotify</p>
                </router-link>
                <router-link to="/inicio/tablet/traductor" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/traductor.png'" alt="Traductor" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Traductor</p>
                </router-link>
                <router-link to="/inicio/tablet/twitterL" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/twitter.png'" alt="Twitter" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Twitter</p>
                </router-link>
                <router-link to="/inicio/tablet/whatsapp" class="flex flex-col items-center">
                    <img :src="'/storage/img/apps/whatsapp.png'" alt="Whatsapp" class="w-16 h-16 cursor-pointer">
                    <p class="text-sm font-semibold">Whatsapp</p>
                </router-link>
            </div>
            <div
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer">
            </div>
        </div>
        <router-view class="absolute inset-0 z-[100]"></router-view>
    </div>
</template>


<style scoped></style>