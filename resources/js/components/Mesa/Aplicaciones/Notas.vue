<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">

            <div class="overflow-auto bg-zinc-900 h-[100%] py-10 px-24">
                <h2 class="font-bold text-2xl">Notas</h2>
                <br>
                <div class="grid grid-cols-3 gap-7 justify-center items-center text-center">
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Charla con Floren</h2>
                        <br>
                        <p class="text-xs">-Pedir subida de contrato</p>
                        <br>
                        <p class="text-xs">-Pedirle que haga algo por el robo de la gala del balón de oro</p>
                        <br>
                        <p class="text-xs">-Recordarle que su estrella soy yo y no Kilian</p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Recordatorio</h2>
                        <br>
                        <p class="text-xs">Reservar mesa para 4 (5?) en el restaurante de siempre para el sábado a las 14:00</p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Cumpleaños</h2>
                        <br>
                        <p class="text-xs">Rodrygo: 9 Enero</p>
                        <p class="text-xs">Mbappe: 20 Diciembre</p>
                        <p class="text-xs">Courtois: 11 Mayo</p>
                        <p class="text-xs">Carvajal: 11 Enero</p>
                        <p class="text-xs">Jude: 29 Junio</p>
                        <p class="text-xs">Cristiano Ronaldo: 5 Febrero</p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Cita peluqueria</h2>
                        <br>
                        <p class="text-xs">Sábado a las 11:30</p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Estadios de mierda</h2>
                        <br>
                        <p class="text-xs">Mestalla, San Mamés, Camp Nou, Metropolitano, Reale Seguros Arena... </p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Ranking mulheres</h2>
                        <br>
                        <p class="text-xs">1 - Isabella</p>
                        <p class="text-xs">2 - Larissa</p>
                        <p class="text-xs">3 - Camila</p>
                        <p class="text-xs">4 - Beatriz</p>
                        <p class="text-xs">5 - Fernanda</p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="mb-5 font-bold text-l">IMPORTANTE</h2>
                        <br>
                        <p class="text-xs">Correo electónico: vinijr07@gmail.com </p>
                        <br>
                        <p class="text-xs">Contraseña: viniJRbalondior2024* </p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Manifiesto</h2>
                        <br>
                        <p class="text-xs">Voy a ganar el balón de oro</p>
                    </div>
                    <div
                        class="flex flex-col bg-zinc-700 w-[100%] rounded-md items-center justify-center hover:cursor-pointer p-5 aspect-square">
                        <h2 class="font-bold">Discurso balón de oro</h2>
                        <br>
                        <p class="text-xs">Boa noite a todos.

                            Desde que era un niño en São Gonçalo, soñaba con este momento. Con un balón en los pies y
                            mucha ilusión en el corazón, corría por las calles imaginando que un día estaría aquí,
                            levantando este...
                        </p>
                    </div>
                </div>

            </div>

            <router-link to="/inicio/tablet"
                class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
        </div>
    </div>
</template>


<script setup>
</script>