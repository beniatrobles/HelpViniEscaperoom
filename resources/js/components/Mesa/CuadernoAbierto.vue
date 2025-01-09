<script setup>
</script>

<template>

    <div class="flex justify-center flex-col items-center min-h-screen bg-opacity-50 bg-black">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <img :src="'/storage/img/cuaderno-abierto.png'" alt="" class="h-[580px]">
        <router-link to="/inicio/cuaderno" class="mt-3 hover:text-[#0ED800]"><h1>CERRAR</h1></router-link>
    </div>

</template>
