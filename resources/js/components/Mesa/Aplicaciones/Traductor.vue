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
                <h2 class="text-3xl text-black text-center mb-8 font-extrabold absolute left-0 right-0 top-10">Traductor
                </h2>
                <div class="flex justify-center items-center gap-4">
                    <div class="text-black flex flex-col w-[40%] gap-2">
                        <div>
                            <select v-model="idiomaTexto" class="border border-black rounded" @change="cambioIdioma">
                                <option :value="idioma.language" v-for="idioma in idiomasDisponibles">{{ idioma.name }}
                                </option>
                            </select>
                            <select :class="{ 'hidden': !cesarTraducir }" class="border border-black rounded"
                                v-model="rotacion">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <textarea class="border-black border resize-none h-[200px] outline-none p-2 text-sm rounded"
                            v-model="texto"></textarea>
                    </div>
                    <button class="text-black text-3xl" @click="traducirTexto">➡️</button>
                    <div class="text-black flex flex-col w-[40%] gap-2">
                        <div>
                            <select v-model="idiomaTraduccion" class="border border-black rounded"
                                @change="cambioIdioma">
                                <option :value="idioma.language" v-for="idioma in idiomasDisponibles">{{ idioma.name }}
                                </option>
                            </select>
                            <select :class="{ 'hidden': !cesarTraduccion }" class="border border-black rounded"
                                v-model="rotacion">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
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
    language: 'cesar',
    name: 'César'
},
{
    language: 'binario',
    name: 'Binario'
}])
const cesarTraducir = ref(false)
const cesarTraduccion = ref(false)
const rotacion = ref(1)

const traducirTexto = async () => {
    traduccion.value = '...'
    if (idiomaTexto.value == 'cesar') {
        try {
            const response = await axios.post('/cesar', {
                mensaje: texto.value,
                rotacion: rotacion.value,
                modo: 'decrypt'
            })
            traduccion.value = response.data.translated
        } catch (error) {
            console.error(error)
        }
        return
    }

    if (idiomaTraduccion.value == 'cesar') {
        try {
            const response = await axios.post('/cesar', {
                mensaje: texto.value,
                rotacion: rotacion.value,
                modo: 'encrypt'
            })
            traduccion.value = response.data.translated
        } catch (error) {
            console.error(error)
        }
        return
    }

    if (idiomaTexto.value == 'binario') {
        try {
            const response = await axios.post('/binary', {
                mensaje: texto.value,
                modo: 'binary-to-text'
            });
            traduccion.value= response.data.translated
        } catch (error) {
            console.error(error.response?.data || error.message);
        }
        return
    }
    if (idiomaTraduccion.value == 'binario') {
        try {
            const response = await axios.post('/binary', {
                mensaje: texto.value,
                modo: 'text-to-binary'
            });
            traduccion.value= response.data.translated
        } catch (error) {
            console.error(error.response?.data || error.message);
        }
        return
    }

    /////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////// API 1//////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
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
    /////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////// API 2//////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    // try {
    //     const response = await axios.post('https://openl-translate.p.rapidapi.com/translate', {
    //         text: texto.value,
    //         target_lang: idiomaTraduccion.value,
    //     }, {
    //         headers: {
    //             'x-rapidapi-key': 'd2260ef91dmshbde673dd9b9bf3ep115196jsn0d3c3fca0430',
    //             'x-rapidapi-host': 'openl-translate.p.rapidapi.com',
    //             'Content-Type': 'application/json'
    //         }
    //     });
    //     traduccion.value = response.data.translatedText
    // } catch (error) {
    //     console.error(error);
    // }

}

const cambioIdioma = () => {
    if (idiomaTexto.value == 'cesar') {
        cesarTraducir.value = true
        idiomaTraduccion.value = 'es'
    } else {
        cesarTraducir.value = false
    }

    if (idiomaTraduccion.value == 'cesar') {
        cesarTraduccion.value = true
        idiomaTexto.value = 'es'
    } else {
        cesarTraduccion.value = false
    }

    if (idiomaTexto.value == 'binario') {
        idiomaTraduccion.value = 'es'
    }

    if (idiomaTraduccion.value == 'binario') {
        idiomaTexto.value = 'es'
    }
}

onMounted(async () => {
    /////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////// API 1//////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////
    // const url = 'https://deep-translate1.p.rapidapi.com/language/translate/v2/languages';
    // try {
    //     const get = await axios(url, {
    //         headers: {
    //             'x-rapidapi-key': 'd2260ef91dmshbde673dd9b9bf3ep115196jsn0d3c3fca0430',
    //             'x-rapidapi-host': 'deep-translate1.p.rapidapi.com'
    //         }
    //     });
    //     idiomasDisponibles.value.unshift(...get.data.languages)

    // } catch (error) {
    //     console.error(error);
    // }
    /////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////// API 2//////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////

    try {
        const get = await axios.get('https://openl-translate.p.rapidapi.com/translate/languages', {
        headers: {
            'x-rapidapi-key': 'd2260ef91dmshbde673dd9b9bf3ep115196jsn0d3c3fca0430',
            'x-rapidapi-host': 'openl-translate.p.rapidapi.com'
        } 
    });

    // Mapeamos los datos para adaptarlos al formato que esperamos
    const idiomasTransformados = get.data.languages.map((item) => ({
        language: item.code,  // asignamos el valor de 'code' a 'language'
        name: item.name       // asignamos el valor de 'name' a 'name'
    }));

    // Agregamos los idiomas transformados al principio de idiomasDisponibles
    idiomasDisponibles.value.unshift(...idiomasTransformados);

    } catch (error) {
        console.error(error);   
    }
    
})
</script>