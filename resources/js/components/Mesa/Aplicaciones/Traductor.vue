<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <router-link to="/inicio/tablet"
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            <div class="w-full h-full bg-white flex flex-col justify-center">
                <h2 class="text-3xl text-black text-center mb-8 font-extrabold absolute left-0 right-0 top-10">Traductor</h2>
                <div class="flex justify-center items-center gap-4">
                    <div class="text-black flex flex-col w-[40%] gap-2">
                        <select v-model="idiomaTexto" class="border border-black rounded">
                            <option :value="idioma.language" v-for="idioma in idiomasDisponibles">{{ idioma.name }}
                            </option>
                        </select>
                        <textarea class="border-black border resize-none h-[200px] outline-none p-2 text-sm rounded"
                            v-model="texto"></textarea>
                    </div>
                    <button class="text-black text-3xl" @click="traducirTexto">➡️</button> 
                    <div class="text-black flex flex-col w-[40%] gap-2">
                        <select v-model="idiomaTraduccion" class="border border-black rounded">
                            <option :value="idioma.language" v-for="idioma in idiomasDisponibles">{{ idioma.name }}
                            </option>
                        </select>
                        <textarea class="border-black border resize-none h-[200px] outline-none p-2 text-sm rounded"
                            v-model="traduccion" readonly></textarea>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</template>


<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const texto = ref('')
const idiomaTexto = ref('en')
const traduccion = ref('')
const idiomaTraduccion = ref('es')
//por defecto tiene césar y binario
const idiomasDisponibles = ref([{
    languaje: 'cesar',
    name: 'César'
},
{
    languaje: 'binario',
    name: 'Binario'
}])


const traducirTexto = async () => {
    traduccion.value = '...'
    const options = {
        headers: {
            'x-rapidapi-key': 'd2260ef91dmshbde673dd9b9bf3ep115196jsn0d3c3fca0430',
            'x-rapidapi-host': 'deep-translate1.p.rapidapi.com',
            'Content-Type': 'application/json'
        },

    };

    const data = {
        q: texto.value,
        source: idiomaTexto.value,
        target: idiomaTraduccion.value
    }

    try {
        const response = await axios.post('https://deep-translate1.p.rapidapi.com/language/translate/v2', data, options);
        traduccion.value = response.data.data.translations.translatedText
    } catch (error) {
        console.error(error);
    }
}

onMounted(async () => {
    const url = 'https://deep-translate1.p.rapidapi.com/language/translate/v2/languages';
    try {
        const get = await axios(url, {
            headers: {
                'x-rapidapi-key': 'd2260ef91dmshbde673dd9b9bf3ep115196jsn0d3c3fca0430',
                'x-rapidapi-host': 'deep-translate1.p.rapidapi.com'
            }
        });
        idiomasDisponibles.value.unshift(...get.data.languages) 

    } catch (error) {
        console.error(error);
    }
})
</script>