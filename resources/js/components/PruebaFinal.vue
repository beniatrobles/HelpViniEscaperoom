<template>
<div class="max-h-screen overflow-hidden">

    <div :class="{'hidden' : inicioOculto}" class="h-screen">
        <div class="flex items-center justify-center pt-10 text-2xl flex-col max-w-[90%] m-auto">
            <h1 class="texto1 opacity-0 text-center">¡MUY BIEN!</h1>
            <h1 class="texto2 opacity-0 text-center">HAS CONSEGUIDO RECUPERAR LAS REDES SOCIALES DE <span
                class="text-[#0ED800]">VINI</span></h1>
            </div>
            
            <div class="flex items-center justify-center pt-10 flex-col max-w-[90%] m-auto">
                <h1 class="texto3 opacity-0 text-center uppercase mb-2">Ahora queda un paso casi tan <span
                    class="text-[#0ED800]">importante</span> como lo que has hecho hasta ahora:</h1>
                    <h1 class="texto4 opacity-0 text-center">CREAR UNA <span class="text-[#0ED800]">CONTRASEÑA SEGURA</span>
                PARA QUE ESTO NO VUELVA A PASAR.</h1>
            </div>
            
            <div class="flex items-center justify-center text-sm pt-10 flex-col max-w-[90%] m-auto">
                <h1 class="texto5 opacity-0 text-center mb-2">PARA QUE SEA MÁS SEGURO UTILIZAREMOS UN <span class="text-[#0ED800]">GESTOR DE CONTRASEÑAS</span>,
                    EL CUAL SE ENCARGARÁ DE CREAR Y GESTIONAR ESAS CONTRASEÑAS SEGURAS POR NOSOTROS.</h1>
                    <h1 class="texto6 opacity-0 text-center">AÚN ASÍ NECESITARÁS CREAR UNA CONTRASEÑA SEGURA POR TU CUENTA, LA
                        CUAL DARÁ ACCESO AL GESTOR.</h1>
                    </div>
                    
                    <div class="flex items-center justify-center text-sm pt-10 flex-col max-w-[90%] m-auto">
                        <h1 class="texto7 opacity-0 text-center text-xs">¡RÁPIDO! NO HAY TIEMPO QUE PERDER</h1>
                    </div>
                    
                    <div class="flex justify-center gap-10 text-sm pt-10 max-w-[90%] m-auto">
                        <button class="boton bg-[#0ED800] px-[100px] py-[25px] rounded opacity-0" @click="seguirExplorando">
                            <h1>Quiero seguir explorando</h1>
                        </button>
                        <button class="boton bg-[#0ED800] px-[100px] py-[25px] rounded opacity-0" @click="oultarInicio">
                            <h1>Vamos!</h1>
                        </button>
                    </div>
    </div>

    <div :style="'background-image:url(/storage/img/mesa.jpg)'" class="bg-cover bg-center h-screen">
        
        <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
            <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative bg-gray-900">
                
                <h2 class="mt-12 text-3xl text-center font-extrabold font-mono">Bienvenido a <span class="text-blue-600">Password</span> Manager</h2>
                
                <div class="flex flex-col justify-center items-center mt-20 gap-5 m-auto">
                    <p class="font-medium font-mono">Introduce una contraseña segura para acceder a la <span class="text-blue-600">Bóveda de Contraseñas</span>.</p>
                    <input type="password" class="w-[50%] h-[60px] rounded-md px-2 outline-none text-black focus:outline-[blue] transition text-2xl" v-model="password" @input="comprobarPassword" @focus="pasosVisibles = true">
                </div>
                
                <div class="font-mono flex flex-col justify-center items-center mt-5 gap-2 m-auto overflow-hidden">
                    <p :class="{'translate-y-[-200px]' : !pasosVisibles}" class="transition duration-500">Recuerda que una contraseña segura debe contener al menos:</p>
                    <ul :class="{'translate-y-[-200px]' : !pasosVisibles}" class="w-[50%] text-left transition duration-500">
                        <li :class="{'text-blue-500' : caracteres}"><span :class="{'hidden' : !caracteres}">✓</span><span :class="{'hidden' : caracteres}">✗</span> 12 caracteres</li>
                        <li :class="{'text-blue-500' : mayuscula}"><span :class="{'hidden' : !mayuscula}">✓</span><span :class="{'hidden' : mayuscula}">✗</span> 1 letra mayúscula</li>
                        <li :class="{'text-blue-500' : minuscula}"><span :class="{'hidden' : !minuscula}">✓</span><span :class="{'hidden' : minuscula}">✗</span> 1 letra minúscula</li>
                        <li :class="{'text-blue-500' : numero}"><span :class="{'hidden' : !numero}">✓</span><span :class="{'hidden' : numero}">✗</span> 1 número</li>
                        <li :class="{'text-blue-500' : especial}"><span :class="{'hidden' : !especial}">✓</span><span :class="{'hidden' : especial}">✗</span> 1 carácter especial</li>
                    </ul>
                </div>
                
                <div v-if="caracteres && mayuscula && minuscula && numero && especial" class="flex justify-center items-center mt-10">
                    <button class="bg-blue-600 px-2 py-1 rounded hover:opacity-70 transition" @click="completarPrueba">Establecer contraseña</button>
                </div>
                
                <div
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer">
            </div>
        </div>
        </div> 
    </div>
    
    <div v-if="mostrarAdvertencia" class="w-full h-screen bg-black bg-opacity-85 absolute left-0 top-0 flex justify-center items-center">
        <div class="alerta w-[500px] h-max bg-black p-5 text-center flex flex-col gap-3 relative">
            <p class="text-[#0ED800] font-bold text-lg">¡Atención!</p>
            <p>Podrás seguir explorando el espacio de juego si deseas, pero ten en cuenta que el tiempo seguirá corriendo, lo que afectará tu puntuación final.</p>
            <p>Cuando estés listo, podrás realizar la prueba final en cualquier momento accediendo desde el cuaderno de progreso.</p>
            <p>¡Suerte!</p>
            
            <div class="flex justify-around absolute -bottom-4 w-full left-0">
                <div class="check w-[50px] aspect-square bg-green-500 flex justify-center items-center cursor-pointer text-lg font-bold" @click="respuestaAdvertencia(1)">✓</div>
                <div class="cross w-[50px] aspect-square bg-red-500 flex justify-center items-center cursor-pointer text-lg" @click="respuestaAdvertencia(2)">✗</div>
            </div>
        </div>
    </div>
    
</div>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import { usePartidaStore } from '../stores/partidaStore';
const router = useRouter();
const password = ref('');

const inicioOculto = ref(localStorage.getItem('inicioOculto') === 'true' || false); 
const pasosVisibles = ref(false);

const caracteres = ref(false);
const mayuscula = ref(false);
const minuscula = ref(false);
const numero = ref(false);
const especial = ref(false);

const partidaStore = usePartidaStore();

const mostrarAdvertencia = ref(false);


const oultarInicio = () => {
    inicioOculto.value = true;
    localStorage.setItem('inicioOculto', true);
}

const comprobarPassword = () => {
    const specialCharRegex = /[!\"#$%&'()*+,-.\/:;<=>?@[\\\]^_`{|}~]/;
    caracteres.value = password.value.length >= 12;
    mayuscula.value = /[A-Z]/.test(password.value);
    minuscula.value = /[a-z]/.test(password.value);
    numero.value = /[0-9]/.test(password.value);
    especial.value = specialCharRegex.test(password.value);
}

const seguirExplorando = () => {
    // router.push('/inicio')
    mostrarAdvertencia.value = true;

}

const completarPrueba = async () => {
    localStorage.removeItem('inicioOculto');
    //cambio el estado de la partida a "terminada"  
    try {
      const partida = await partidaStore.comprobarPartida();
      await partidaStore.cambiarEstado('terminado', partida.data.id_partida);
    } catch (error) {
      console.error(error);
    }
    router.push('/partidaTerminada/1');
}
const respuestaAdvertencia = (respuesta) => {
    if(respuesta === 1){
        mostrarAdvertencia.value = false;
        router.push('/inicio');
    }else{
        mostrarAdvertencia.value = false;
    }
}

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

.texto5 {
    animation: aparecer 3s ease-in-out 16s forwards;
}

.texto6 {
    animation: aparecer 3s ease-in-out 19s forwards;
}

.texto7 {
    animation: aparecer 3s ease-in-out 22s forwards;
}

.boton {
    animation: aparecer 3s ease-in-out 25s forwards; 
    box-shadow: 0 10px green;
}

.boton:active {
    transform: translateY(10px);
    box-shadow: none;
}

@keyframes aparecer {
    to {
        opacity: 1;
    }
}

.alerta{
    box-shadow: 0 0 2px gray;
}
.check{
    transition: 150ms;
    clip-path: polygon(1% 2%, 93% 3%, 97% 95%, 2% 99%);
}
.cross{
    transition: 150ms;
    clip-path: polygon(99% 2%, 7% 3%, 3% 95%, 98% 99%);
}

.check:hover{
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    background-color: #0ED800;
}

.cross:hover{
    clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%);
    background-color: #FF0000;
}
</style>