<template>

    <div class="flex items-center justify-center pt-10 text-2xl flex-col max-w-[90%] m-auto">
        <h1 class="texto1 opacity-0 text-center">¡MUY BIEN!</h1>
        <h1 class="texto2 opacity-0 text-center">HAS CONSEGUIDO RECUPERAR LAS REDES SOCIALES DE <span class="text-[#0ED800]">VINI</span></h1>
    </div>

    <div class="flex items-center justify-center pt-10 flex-col max-w-[90%] m-auto">
        <h1 class="texto3 opacity-0 text-center uppercase">Ahora queda un paso casi tan <span class="text-[#0ED800]">importante</span> como lo que has hecho hasta ahora:</h1>
        <h1 class="texto4 opacity-0 text-center">CREAR UNA <span class="text-[#0ED800]">CONTRASEÑA SEGURA</span> PARA QUE ESTO NO VUELVA A PASAR</h1>
    </div>

</template>

<script setup>

</script>

<style scoped>
    .texto1 {
        animation: aparecer 3s ease-in-out 2s forwards;
    }

    .texto2 {
        animation: aparecer 3s ease-in-out 5s forwards;
    }

    .texto3 {
        animation: aparecer 3s ease-in-out 9s forwards;
    }

    .texto4 {
        animation: aparecer 3s ease-in-out 12s forwards;
    }

    @keyframes aparecer {
        to {
            opacity: 1;
        }
    }
</style>