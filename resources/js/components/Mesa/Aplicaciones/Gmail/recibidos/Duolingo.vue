<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">👋 ¡Hola vinijr! Es hora de tu lección diaria de español.</h2>
            <div class="flex items-center gap-2">
                <img :src="'https://cdn.worldvectorlogo.com/logos/duolingo-1.svg'" class="w-[50px] rounded-full">
                <div>
                    <p>Duolingo <span class="text-sm text-zinc-400">&lt;hello@duolingo.com&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4 flex flex-col justify-center items-center w-3/4 m-auto">
                <img src="https://ci3.googleusercontent.com/meips/ADKq_NZRWF7zLRSe7HLPKLODZLHEe_pVCD1sDoVdIm0KL8xOEPKbpcDiV6fo7ii9mFSpTTk89I3RhxmEcBt-pRW2K19nD74xaWJafgWzlEvMocmKFENpqkUPY44cuc3jO3CEcWLkBN3Zy4_IX-_1_SQIxiHg_9pGmPxMK-t-qQ=s0-d-e1-ft#https://d2h7jmc5kw17oy.cloudfront.net/images/notification-images/revamp-march-2021-feature-header.gif" class="w-[100px]">
                <h2 class="text-3xl text-center font-bold">Recordatorio diario de español</h2>
                <p class="text-center mt-9 text-sm">¡Hola vinijr! ¡Haz feliz a Duo! Recuerda que para aprender un idioma debes practicar un poco todos los días.</p>
                <br>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>