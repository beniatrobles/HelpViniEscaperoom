<template>
<h1 class="text-3xl text-center pt-4">{{ tituloMensaje }}</h1>
<img v-if="!logrado" :src="'/storage/img/vini_llorando.png'" class="m-auto">

<video v-if="logrado" class="m-auto w-[350px]" loop autoplay muted>
    <source :src="'/storage/img/vini_baila.mp4'" type="video/mp4">
</video>

<div class="boton m-auto max-w-max mt-3 px-2 py-1 rounded cursor-pointer" @click="()=>router.push('/')">Ver Ranking</div>


</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRouter, useRoute } from 'vue-router';

const router = useRouter();
const route = useRoute();   
const logrado = ref(null);

const tituloMensaje = ref('');

onMounted(() => {
    if(route.params.status == 1) {
        logrado.value = true;
        tituloMensaje.value = '¡Felicidades! Lograste el objetivo';
    }else{
        logrado.value = false;
        tituloMensaje.value = '¡Lo siento! No lograste el objetivo';
    } 
});

</script>

<style scoped>
.boton {
    background: #0ED800;
    box-shadow: 0 10px green;
}
.boton:active {
    transform: translateY(10px);
    box-shadow: none;
}
</style>