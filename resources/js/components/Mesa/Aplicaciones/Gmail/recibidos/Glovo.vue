<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">Confirmación de pedido.</h2>
            <div class="flex items-center gap-2">
                <img :src="'/storage/img/apps/glovo.png'" class="w-[50px] rounded-full">
                <div>
                    <p>Glovo <span class="text-sm text-zinc-400">&lt;pedidos@glovo.com&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4 flex flex-col justify-center items-center w-3/4 m-auto bg-white relative">
                
                <svg class="absolute top-0" id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 195.556, 64.155, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,0L120,24.5C240,49,480,98,720,98C960,98,1200,49,1440,49C1680,49,1920,98,2160,114.3C2400,131,2640,114,2880,163.3C3120,212,3360,327,3600,359.3C3840,392,4080,343,4320,285.8C4560,229,4800,163,5040,147C5280,131,5520,163,5760,163.3C6000,163,6240,131,6480,98C6720,65,6960,33,7200,49C7440,65,7680,131,7920,130.7C8160,131,8400,65,8640,73.5C8880,82,9120,163,9360,204.2C9600,245,9840,245,10080,277.7C10320,310,10560,376,10800,351.2C11040,327,11280,212,11520,212.3C11760,212,12000,327,12240,326.7C12480,327,12720,212,12960,196C13200,180,13440,261,13680,261.3C13920,261,14160,180,14400,122.5C14640,65,14880,33,15120,24.5C15360,16,15600,33,15840,81.7C16080,131,16320,212,16560,204.2C16800,196,17040,98,17160,49L17280,0L17280,490L17160,490C17040,490,16800,490,16560,490C16320,490,16080,490,15840,490C15600,490,15360,490,15120,490C14880,490,14640,490,14400,490C14160,490,13920,490,13680,490C13440,490,13200,490,12960,490C12720,490,12480,490,12240,490C12000,490,11760,490,11520,490C11280,490,11040,490,10800,490C10560,490,10320,490,10080,490C9840,490,9600,490,9360,490C9120,490,8880,490,8640,490C8400,490,8160,490,7920,490C7680,490,7440,490,7200,490C6960,490,6720,490,6480,490C6240,490,6000,490,5760,490C5520,490,5280,490,5040,490C4800,490,4560,490,4320,490C4080,490,3840,490,3600,490C3360,490,3120,490,2880,490C2640,490,2400,490,2160,490C1920,490,1680,490,1440,490C1200,490,960,490,720,490C480,490,240,490,120,490L0,490Z"></path></svg>
                <p class="z-10 mt-10 font-bold text-3xl text-green-600">Glovo</p>
               
                <div class="text-black mt-20 text-center">
                    <p class="font-bold">Pedido confirmado</p>
                    <p class="text-sm mt-4">vinijr, en breves recibirás tu pedido <br> en tu domicilio.</p>
                </div>
                
                <div class="text-black mt-5 text-sm border-t w-full pt-5 px-16">
                    <p class="font-bold text-center mb-5">Detalles del pedido</p>
                    
                    <div class="flex items-center gap-6">
                        <b class="w-8">127x</b> <p>🍌 Plátano de canarias</p>
                    </div>
                    <div class="flex items-center gap-6">
                        <b class="w-8 text-right">1x</b> <p>🏐 Balón de playa</p>
                    </div>
                    
                    <p class="font-bold text-center mt-5">Hora estimada</p>
                    <p class="text-center mt-3">22:41h</p>
                </div>
                
                <br>
            </div>
            <br>
        </div>
    </div>
</template>


<script setup>
</script>