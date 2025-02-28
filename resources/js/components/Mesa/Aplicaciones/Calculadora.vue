<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <router-link to="/inicio/tablet"
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            <div class="bg-zinc-900 w-[100%] h-[100%] flex flex-col justify-center items-center p-16">
                <input type="text" v-model="input" placeholder="0" readonly class="outline-none mb-4 w-full text-right text-8xl bg-transparent"/>
                <div class="grid grid-cols-4 w-[100%] gap-3">
                    <button @click="agregarNumero('7')" class="numero">7</button>
                    <button @click="agregarNumero('8')" class="numero">8</button>
                    <button @click="agregarNumero('9')" class="numero">9</button>
                    <button @click="agregarOperacion('/')" class="operacion">/</button>
                    <button @click="agregarNumero('4')" class="numero">4</button>
                    <button @click="agregarNumero('5')" class="numero">5</button>
                    <button @click="agregarNumero('6')" class="numero">6</button>
                    <button @click="agregarOperacion('*')" class="operacion">*</button>
                    <button @click="agregarNumero('1')" class="numero">1</button>
                    <button @click="agregarNumero('2')" class="numero">2</button>
                    <button @click="agregarNumero('3')" class="numero">3</button>
                    <button @click="agregarOperacion('-')" class="operacion">-</button>
                    <button @click="agregarNumero('0')" class="numero">0</button>
                    <button @click="calcularResultado" class="operacion">=</button>
                    <button @click="agregarOperacion('+')" class="operacion">+</button>
                    <button @click="limpiar" class="bg-zinc-500">C</button>
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>
import { onMounted, onUnmounted, ref } from 'vue';

const input = ref('');

const agregarNumero = (numero) => {
    input.value += numero;
};

const agregarOperacion = (operacion) => {
    input.value += `${operacion}`;
};

const calcularResultado = () => {
    try {
        // Evaluar la expresión matemática
        const resultado = eval(input.value.replace(/ /g, ''));
        input.value = resultado;
    } catch (error) {
        input.value = 'Error';
    }
};

const limpiar = () => {
    input.value = '';
};

const numeroTeclado = (e) => {
    if (e.key >= 0 && e.key <= 9) {
        agregarNumero(e.key);
    } else if (['+', '-', '*', '/'].includes(e.key)) {
        agregarOperacion(e.key);
    } else if (e.key === 'Enter') {
        calcularResultado();
    } else if (e.key === 'Backspace') {
        limpiar();
    }
};

onMounted( () => document.addEventListener('keydown', numeroTeclado))

onUnmounted( () => document.removeEventListener('keydown', numeroTeclado))
</script>



<style scoped>
    button{
        width: 100%;
        aspect-ratio: 3/1;
        border-radius: 5000px; 
        font-weight: bolder;
    }
    button.numero{
        background:#3f3f46;
    }
    button.operacion{
        background:orange;
    }
    
</style>