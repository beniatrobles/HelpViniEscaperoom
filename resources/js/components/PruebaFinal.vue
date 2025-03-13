<template>

    <div class="hidden h-screen">
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
            <h1 class="texto5 opacity-0 text-center mb-2">PARA QUE SEA MÁS SEGURO UTILIZAREMOS UN GESTOR DE CONTRASEÑAS,
                EL CUAL SE ENCARGARÁ DE CREAR Y GESTIONAR ESAS CONTRASEÑAS SEGURAS POR NOSOTROS.</h1>
            <h1 class="texto6 opacity-0 text-center">AÚN ASÍ NECESITARÁS CREAR UNA CONTRASEÑA SEGURA POR TU CUENTA, LA
                CUAL DARÁ ACCESO AL GESTOR.</h1>
        </div>

        <div class="flex items-center justify-center text-sm pt-10 flex-col max-w-[90%] m-auto">
            <router-link to="" class="boton bg-[#0ED800] m-auto px-[100px] py-[25px] rounded">
                <h1>Vamos</h1>
            </router-link>
        </div>
    </div>

    <div :style="'background-image:url(/storage/img/mesa.jpg)'">

        <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative bg-gray-800">

            

            <div
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer">
            </div>
        </div>
        </div> 
    </div>

</template>

<script setup>
const estilo = 'url(/storage/img/mesa.jpg)';

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

.boton {
    /* animation: aparecer 3s ease-in-out 23s forwards; */
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
</style>