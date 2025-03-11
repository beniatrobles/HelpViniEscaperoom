<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">Nuevo inicio de sesión</h2>
            <div class="flex items-center gap-2">
                <img :src="'/storage/img/apps/instagram.png'" class="w-[50px] rounded-full">
                <div>
                    <p>Instagram <span class="text-sm text-zinc-400">&lt;security@mail.instagram.com&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4">
                <p>Hemos detectado un nuevo inicio de sesión, <span class="font-bold">@vinijr</span></p>
                <div class="bg-zinc-950 w-[80%] mx-auto mt-4 flex flex-col p-3">
                    <div class="flex gap-2">
                        <img src="https://img.icons8.com/m_outlined/512/FFFFFF/instagram-new.png" class="w-[30px]">
                        |
                        <img :src="'/storage/img/apps/Instagram/instagram.png'" class="w-[80px]">
                    </div>
                    <div class="w-full text-sm mt-3 flex flex-col justify-center items-center text-center gap-3 pb-3 border-b">
                        <p>Hemos detectado un inicio de sesión desde un dispositivo que normalmente no usas</p>
                        <img :src="'/storage/img/apps/Instagram/icono-ordenador.png'" class="w-[100px]">
                        <p class="font-bold">Kali Linux · Opera · Tallin, Estonia</p>
                    </div>
                    <div class="text-sm text-center mt-3 text-gray-400">
                        <p clas>Si has sido tú, no podrás acceder a ciertas opciones de seguridad y a la configuración de la cuenta durante unos días. Podrás seguir accediendo a esta configuración desde un dispositivo en el que hayas iniciado sesión en el pasado.</p>
                        <br>
                        <p>Si no has sido tú, deberías tomar acción antes de que sea demasiado tarde y tengan acceso a toda tu información.</p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>