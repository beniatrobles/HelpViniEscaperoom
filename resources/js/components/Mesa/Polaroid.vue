<script setup>
</script>

<template>

    <div class="flex flex-col justify-center items-center min-h-screen bg-opacity-50 bg-black">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div class="relative">
            <img :src="'/storage/img/polaroid.jpg'" alt="" class="h-[500px] z-[-50]">

            <div class="text-black absolute bottom-[10px] left-0 right-0 mx-auto text-center font-bold">
                <p>Vinicius ganando su primer balón de oro</p>
                <br>
                <p>28/10/2024</p>
            </div>

        </div>


    </div>

</template>
