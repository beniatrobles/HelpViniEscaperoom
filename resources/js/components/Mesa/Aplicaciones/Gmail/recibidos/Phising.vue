<template>
    <div class="h-[100%] w-[100%] bg-zinc-900 px-20 py-4">
        <div>
            <router-link to="/inicio/tablet/gmail"><h2 class="text-3xl font-bold">←</h2></router-link>
            <h2 class="text-3xl font-bold mb-4">Nuevo proyecto</h2>
            <div class="flex items-center gap-2">
                <img :src="'https://cdn-icons-png.flaticon.com/512/4847/4847985.png'" class="w-[50px] rounded-full">
                <div>
                    <p>Instragam <span class="text-sm text-zinc-400">&lt;istragramsupport@maily.pro&gt;</span></p>
                    <p class="text-xs text-zinc-400">para mi</p>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-[15px]">Hola 👋. Nos ponemos en contacto contigo para ofrecerto formar parte de un nuevo proyecto de nuestra aplicación. Creemos que tu colaboración ayudará a que este proyecto tenga un mayor alcance. Como recompensa recibirás una mayor visibilidad en nuestra red social, llegando a un mayor numero de personas y aumentando así el número de seguidores de tu cuenta. Rellena el siguiente formulario con tus credenciales de instagram para asegurarnos que eres tú y estaremos encantados de informarte más en detalle.</p>
                <div class="bg-gray-100 w-[80%] mx-auto mt-4 flex flex-col p-3 text-black">
                    
                    <img src="https://edisenius.com/wp-content/uploads/2017/07/new-instagram-text-logo.png" class="w-[100px]">
                    <div class="max-w-max m-auto text-sm mt-3 flex flex-col justify-center items-center gap-3 pb-5">
                        <div class="flex flex-col gap-1 text-xs">
                            <label for="mail" class="text-gray-600">Correo electronico</label>
                            <input type="text" id="mail" class="border pl-1">
                        </div>
                        <div class="flex flex-col gap-1 text-xs">
                            <label for="pass" class="text-gray-600">Contraseña</label>
                            <input type="password" id="pass" class="border pl-1">
                        </div>

                        <button class="text-xs bg-blue-400 text-white w-full">Entrar</button>
                        
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</template>


<script setup>
</script>