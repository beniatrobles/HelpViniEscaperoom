<template>
    <div class="flex justify-center gap-10 ">
        <video class="fixed inset-0 w-full h-full object-cover" loop autoplay muted playbackRate="0.75">
            <source :src="'/storage/img/fondoRanking.mp4'" type="video/mp4">
        </video>
        <router-link to="/" class="volver my-16 bg-[#0ED800] text-white px-4 py-1 rounded max-h-max z-10">
            volver
        </router-link>
        <div class="max-w-[750px] w-full border border-white my-14 ranking p-4 rounded-lg z-10 bg-black bg-opacity-60">
            <div>
                <h1 class="text-2xl text-center">Ranking</h1>
                <h1 class="text-xs text-center text-[#0ED800]">Mejores partidas</h1>
            </div>
            <div v-if="top3.length>0" class="flex justify-center gap-14 mt-14 ">
                <div class="flex flex-col items-center">
                    <div class="w-[150px] h-[150px] bg-white rounded-full mt-20 outline outline-[#C0C0C0] outline-[5px] relative segundo">
                        <img :src="top3[1].avatar_ruta ? `/storage/${top3[1].avatar_ruta}` : '/storage/avatars/default.jpg'" class="rounded-full object-cover">
                        <div class="bg-[#C0C0C0] outline pt-1 rounded-full max-w-max aspect-square absolute left-0 right-0 -bottom-5 mx-auto text-black"><h1>#2</h1></div>
                    </div>
                    <p class="mt-5 font-bold">{{ top3[1].nombre_usuario }}</p>
                    <p>{{ tiempoFormateado(top3[1].tiempo) }}</p>
                    <p>{{ top3[1].tiempo }} pts.</p>
                </div>
                <div class="flex flex-col items-center ">
                    <div class="w-[180px] h-[180px] bg-white rounded-full outline outline-[5px] outline-[yellow] relative primero">
                        <img :src="top3[0].avatar_ruta ? `/storage/${top3[0].avatar_ruta}` : '/storage/avatars/default.jpg'" class="rounded-full object-cover">
                        <div class="bg-[yellow] outline pt-1 rounded-full max-w-max aspect-square absolute left-0 right-0 -bottom-5 mx-auto text-black"><h1>#1</h1></div>
                        <img :src="'/storage/img/corona.png'" class="corona w-20 absolute -top-12 right-0 rotate-[26deg]">
                    </div>
                    <p class="mt-5 font-bold">{{ top3[0].nombre_usuario }}</p>
                    <p>{{ tiempoFormateado(top3[0].tiempo) }}</p>
                    <p>{{ top3[0].tiempo }} pts.</p>
                    
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-[150px] h-[150px] bg-white rounded-full mt-24 outline outline-[#CE8946] outline-[5px] relative tercero">
                        <img :src="top3[2].avatar_ruta ? `/storage/${top3[2].avatar_ruta}` : '/storage/avatars/default.jpg'" class="rounded-full object-cover">
                        <div class="bg-[#CE8946] outline pt-1 rounded-full max-w-max aspect-square absolute left-0 right-0 -bottom-5 mx-auto text-black"><h1>#3</h1></div>
                    </div>
                    <p class="mt-5 font-bold">{{ top3[2].nombre_usuario }}</p>
                    <p>{{ tiempoFormateado(top3[2].tiempo) }}</p>
                    <p>{{ top3[2].tiempo }} pts.</p>
                </div>

            </div>
            <div v-if="partidas.length>0" class="flex flex-col items-center gap-5 mt-10">
                <div v-for="(partida, index) in partidas" class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#{{ index+4 }}</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full overflow-hidden"><img :src="partida.avatar_ruta ? `/storage/${partida.avatar_ruta}`:'/storage/avatars/default.jpg'" class="object-cover"></div><h1 class="text-xs">{{ partida.nombre_usuario }}</h1></div>
                    <div class="w-[20%] text-center">{{ partida.tiempo }} pts.</div>
                </div>
            </div>
        </div>
        <router-link to="/" class="volver my-16 bg-[#0ED800] text-white px-4 py-1 rounded max-h-max">
            volver
        </router-link>
    </div>

</template>

<script setup>
import { computed, onMounted, ref } from 'vue';
const top3 = ref([]);
const partidas = ref([]);

const tiempoFormateado = (segundos) => {
  const hours = Math.floor(segundos / 3600);
  const minutes = Math.floor((segundos % 3600) / 60);
  const remainingSeconds = segundos % 60;
  
  // Formatear el tiempo como HH:MM:SS
  return `${hours}:${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
};

onMounted(async () => {
    const response = await axios.get('/partidas-finalizadas');
    top3.value = response.data.slice(0, 3); 
    partidas.value = response.data.slice(3);
    
})
</script>

<style scoped>
.ranking{
    box-shadow: 6px 6px 0px white;
}
.ranking_usr{
    box-shadow: 3px 3px 0px white;  
}
.ranking_usr_tu{
    box-shadow: 3px 3px 0px #0ED800;  
}
/* .primero{
    animation: flotar 3000ms ease-in-out infinite alternate;
}
.segundo{
    animation: flotar2 2000ms 1500ms ease-in-out infinite alternate;
}
.tercero{
    animation: flotar3 2000ms 1500ms ease-in-out infinite alternate;
} */
 
@keyframes flotar {
    to{
        transform: translateY(-20px);
    }
}
@keyframes flotar2 {
    to{
        transform: translateY(-10px);
    }
}
@keyframes flotar3 {
    to{
        transform: translateY(-5px);
    }
    
}
.volver{
    box-shadow: 0px 4px 0 green;
}
.volver:active{
    box-shadow: 0px 2px 0 green;
    transform: translateY(2px);
}
</style>