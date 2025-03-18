<template>
    <div class="w-[100%] h-[100%]">
        <div class="flex justify-between">
            <router-link to="/inicio/tablet/instagram/mensajes" :class="{'font-bold' : seccionSeleccionada == 'msj'}" @click="cambiarSeccion('msj')">Mensajes</router-link>
            <router-link to="/inicio/tablet/instagram/mensajes/solicitudes" :class="{'font-bold' : seccionSeleccionada == 'soli'}" @click="cambiarSeccion('soli')">Solicitudes</router-link>
        </div>
        <hr>
        <router-view class="flex gap-2 h-[100%] mt-3">
            
        </router-view>
    </div>
</template>


<script setup>
import { ref } from 'vue';
const seccionSeleccionada = ref('msj');
const cambiarSeccion = (seccion) => seccionSeleccionada.value = seccion;

</script>