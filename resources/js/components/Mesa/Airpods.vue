<script setup>
</script>

<template>

    <div class="flex flex-col justify-center items-center min-h-screen bg-opacity-50 bg-black">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>

        <div class="h-[250px] flex ">
            <img :src="'/img/airpods.png'" class="w-[250px]">
            <img :src="'/img/airpods.png'" class="w-[250px] rotate-[-20deg] scale-x-[-1]">
        </div>
        <div>
                <audio controls autoplay loop>
                    <source :src="'/audio/cancion.mp3'" type="audio/mp3 ">
                </audio>
        </div>

        <router-link to=""> </router-link>


    </div>

</template>
