<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio">
            <h1 class="absolute top-5 right-5 text-[30px]">X</h1>
        </router-link>
        <div
            class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-[linear-gradient(to_bottom,_#059669_20%,_#DBD8D4_0%)] h-[100%]">

                <div class="bg-zinc-100 flex items-center m-5 shadow-lg shadow-gray-600 justify-center h-[93%] w-full">
                    <!-- LISTA CHATS  -->
                    <div class="h-[100%] w-[35%] overflow-auto shadow-xl">

                        <!-- CABECERA -->
                        <div class="flex items-center justify-start">
                            <p class="text-black text-xl font-bold py-5 px-3">Chats</p>
                            <div class="bg-green-500 rounded-full px-2">4</div>
                        </div>

                        <hr class="border-gray-400">

                        <!-- LISTA -->
                        <nav class="flex flex-col font-bold">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat1" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp1.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">Floren</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center">

                                        <img class="h-full" :src="'/storage/img/apps/whatsapp/double_check.png'" alt="">
                                        <p class="text-gray-400 text-xs">Vamos falando</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat2" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp2.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">Isabella 🥵🔥</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center space-x-1">

                                        <div
                                            class="flex items-center justify-center h-2/3 w-[15px] rounded-full bg-green-600">

                                            <p class="text-[8px]">4</p>

                                        </div>
                                        <p class="text-gray-400 text-xs">Te vejo lindo 😘</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat3" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp3.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">O garotinho 🥷</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center">

                                        <img class="h-full" :src="'/storage/img/apps/whatsapp/double_check.png'" alt="">
                                        <p class="text-gray-400 text-xs">No te lo vai a creer brother KKKKKK</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat4" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp4.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">A cabra 🐐🐐</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center">

                                        <img class="h-full" :src="'/storage/img/apps/whatsapp/double_checkR.png'"
                                            alt="">
                                        <p class="text-gray-400 text-xs">Muito obrigado por tudo Cristiano 🙏</p>
                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat5" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp5.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">HALA MADRID ⚪️💪🔝</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center space-x-1">

                                        <div
                                            class="flex items-center justify-center h-2/3 w-[20px] rounded-full bg-green-600">

                                            <p class="text-[10px]">26</p>

                                        </div>
                                        <p class="text-gray-400 text-xs">Judi: I'm late today 😓</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat6" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp6.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">Judi</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center space-x-1">
                                        <div
                                            class="flex items-center justify-center h-2/3 w-[15px] rounded-full bg-green-600">

                                            <p class="text-[10px]">2</p>

                                        </div>
                                        <p class="text-gray-400 text-xs">It's amazing what's happening 😂😂</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat7" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp7.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">Mãe ❤️</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center">

                                        <img class="h-full" :src="'/storage/img/apps/whatsapp/double_checkR.png'" alt="">
                                        <p class="text-gray-400 text-xs">Eu farei isso mãe, acalme-se</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat8" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp8.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">Rodrynho</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center">

                                        <img class="h-full" :src="'/storage/img/apps/whatsapp/double_check.png'" alt="">
                                        <p class="text-gray-400 text-xs">Ei, como vai isso Rodry</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                            <!-- CONTACTO DE CHAT -->
                            <router-link to="/inicio/tablet/whatsapp/chat9" class=" w-full h-[50px] flex items-center my-[1px] hover:bg-zinc-300">

                                <!-- IMAGEN A LA IZQUIERDA -->
                                <div class="h-full">

                                    <img class="rounded-full h-full p-1" :src="'/storage/img/apps/whatsapp/pfp9.jpg'"
                                        alt="">

                                </div>

                                <!-- INFORMACION -->
                                <div class="flex flex-col justify-center h-full">

                                    <p class="font-bold text-black text-sm">Asencio</p>
                                    <!-- MENSAJE -->
                                    <div class="h-1/2 flex items-center space-x-1">
                                        <div
                                            class="flex items-center justify-center h-2/3 w-[15px] rounded-full bg-green-600">

                                            <p class="text-[10px]">3</p>

                                        </div>
                                        <p class="text-gray-400 text-xs">Por qué tanta fijación con nosotros...</p>

                                    </div>
                                </div>

                            </router-link>

                            <hr class="w-full border-gray-400">

                        </nav>

                    </div>

                    <hr class="h-full border-gray-400 border">

                    <div class="h-[100%] w-[65%]">
                        <router-view class="overflow-auto flex"></router-view>
                    </div>

                </div>
                <router-link to="/inicio/tablet"
                    class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>


<style scoped>
::-webkit-scrollbar {
    width: 0px;
    height: 0px;
}
</style>