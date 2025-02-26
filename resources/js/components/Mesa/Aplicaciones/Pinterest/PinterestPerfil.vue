<template>
    <div class="w-full overflow-auto py-8 px-20">
        <div class="flex justify-between">
            <p class="text-xl font-extrabold">Tus ideas guardadas</p>
            <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
        </div>
        <div class="mt-6 flex gap-5">
            <router-link :to="{name : 'pines'}" :class="{'active' : linkSeleccionado ==1}" class="links font-medium relative" @click="activarLink(1)">Pines</router-link>
            <router-link :to="{name : 'tableros'}" :class="{'active' : linkSeleccionado ==2}" class="links font-medium relative" @click="activarLink(2)">Tableros</router-link>
        </div>

        <router-view class="mt-5"></router-view>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const linkSeleccionado = ref(2)

const activarLink = (n) => linkSeleccionado.value = n

</script>

<style scoped>
    .links::after{
        content: '';
        width: 0%;
        height: 3px;
        background-color: white;
        position: absolute;
        bottom: -3px;
        left: 0;
        transition: .2s;
    }
    .links.active::after{
        width: 100%;
    }
    .links:hover::after{
        width: 100%;
    }
</style>