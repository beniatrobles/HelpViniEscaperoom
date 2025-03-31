<template>
    <div class="fondo absolute z-[100000000] inset-0 w-full h-screen flex flex-col items-center">
        <h1 class="text-3xl mt-10">¡Bienvenido a Help <span class="text-[#0ED800]">Vini</span> Escape Room!</h1>
        <h1>Antes de comenzar, es importante que sepas:</h1>
        <div class="mt-8 max-w-[65%] flex flex-col gap-4">
            <h1 class="text-xs list-item">Juega en pantalla completa <span class="text-[#0ED800]">(F11)</span> para una mejor experiencia de juego.</h1>
            <h1 class="text-xs list-item">Dispondrás de un total de <span class="text-[#0ED800]">60 minutos</span> para completar la partida.</h1>
            <h1 class="text-xs list-item">Interactua con todos los elementos posibles en busca de <span class="text-[#0ED800]">pistas</span> para ir recuperando el acceso de sus redes.</h1>
            <h1 class="text-xs list-item">Una vez recuperadas todas las redes sociales, te enfrentarás a una <span class="text-[#0ED800]">prueba final</span>. ¡Así que no te vayas!</h1>
            <h1 class="text-xs list-item">Todo lo <span class="text-[#0ED800]">necesario</span> para completar este Escape Room lo encontrarás <span class="text-[#0ED800]">en el juego</span>, por lo que no necesitarás utilizar ninguna herramienta externa al juego.</h1>
            <br>
            <h1 class="text-center">Además de divertirte, intenta aprender de esto, pues aunque sea un juego... Esto le podría pasar a cualquiera.</h1>
        </div>
        <button class="btn mt-10 p-4 bg-[#0ED800] rounded-md" @click="empezarJuego"><h1>Entendido</h1></button>
    </div>
</template>

<script setup>

import { defineEmits } from 'vue';
const emit = defineEmits(['empezar']); // creo el evento "empezar"
const empezarJuego = () => {
    emit('empezar'); // lanzo/ejecuto el evento
}

</script>

<style scoped>

    .fondo{
        background-color: rgba(0, 0, 0, 0.9);
        animation: opacidadFondo 10s;
    }

    .btn{
        box-shadow: 0 6px 0 green;
        transition: .1s;
    }

    .btn:hover{
        transform: translateY(-3px);
        box-shadow: 0 9px 0 green;
    }

    .btn:active{
        box-shadow: 0 0 0 green;
        transform: translateY(9px);
    }

    @keyframes opacidadFondo {
        from{
            background-color: rgba(0, 0, 0 );
        }
    }



</style>