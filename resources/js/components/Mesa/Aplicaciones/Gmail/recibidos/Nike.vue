<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">¡Tu nueva zapatilla está lista, Vinicius! 👟</h2>
            <div class="flex items-center gap-2">
                <img :src="'https://pbs.twimg.com/profile_images/1859270386581430272/VVu5AuS__400x400.jpg'" class="w-[50px] rounded-full">
                <div>
                    <p>Nike <span class="text-sm text-zinc-400">&lt;caio.inbox@nike.com&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4 flex flex-col justify-center w-full m-auto text-[15px]">
                <p>
                    Estimado Vinicius,
                </p>
                <p class=" mt-2">
                    Esperamos que te encuentres bien. Nos complace informarte que el nuevo modelo de zapatillas que hemos diseñado especialmente para ti está listo. ¡Es hora de llevar al siguiente nivel el estilo y la performance dentro y fuera del campo!
                </p>
                <p class=" mt-2">
                    Nuestro equipo ha trabajado incansablemente para crear unas zapatillas que no solo reflejan tu increíble talento, sino también tu personalidad única. Creemos que esta nueva línea será un verdadero referente en el mundo del fútbol y en las calles, y estamos emocionados de que seas el rostro de esta nueva era.
                </p>
                <p class=" mt-2">
                    <strong>¿Qué esperar del nuevo modelo?</strong>
                </p>
                <ul class="list-disc pl-8  mt-2">
                    <li>Tecnología avanzada para un ajuste perfecto y un rendimiento inigualable.</li>
                    <li>Diseño inspirado en tu energía, velocidad y estilo.</li>
                    <li>Colores y detalles que representan tu esencia y tu inevitable balón de oro 😉.</li>
                </ul>
                
                <div class="mt-4 w-full text-center">
                    <img :src="'https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/42822614-b398-4d39-a4d9-f4a22fb2a9ee/ZM+SUPERFLY+10+ELITE+FG+NBY.png'" alt="ZM SUPERFLY 10 ELITE FG" class="w-3/4 mx-auto">
                </div>

                <p class=" mt-4">
                    Nos encantaría que las probaras lo antes posible y nos compartieras tu opinión. Además, pronto te enviaremos un par de las primeras unidades para que las uses en tus entrenamientos y partidos.
                </p>
                <p class=" mt-2">
                    ¡Estamos ansiosos de ver cómo las llevas en acción!
                </p>
                <p class=" mt-4">
                    Agradecemos tu confianza en nosotros y, como siempre, estamos aquí para apoyarte en cada paso de tu increíble carrera.
                </p>
                <p class=" mt-4">
                    Saludos cordiales,<br>
                    El equipo de Nike.
                </p>
            </div>
            <br>
        </div>
    </div>
</template>

<script setup>
</script>
