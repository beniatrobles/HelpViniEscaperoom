<template>
    <div class="flex justify-center items-center min-h-screen bg-white bg-opacity-10">
        <router-link to="/inicio"><h1 class="absolute top-5 right-5 text-[30px]">X</h1></router-link>
        <div class="w-[1000px] h-[600px] rounded-3xl border-r-[40px] border-l-[30px] border-t-[15px] border-b-[15px] border-black shadow-md relative">
            <div class="flex bg-zinc-900 h-[100%] items-center justify-center">
                <div class="flex bg-zinc-800 w-[500px] h-[300px] drop-shadow-2xl rounded-2xl items-center justify-center">
                    <div class="flex h-[100%] w-[50%] items-center justify-center">
                        <img :src="'/storage/img/logo.png'" alt="" class="w-[50px] h-[50px] relative">
                        <h2 class="">Inicio de sesión</h2>
                    </div>
                    <div class="flex flex-col h-[100%] w-[50%] items-center justify-center">
                        <form @submit.prevent="" action="" class="mb-1 space-y-4">
                            <input type="text" name="Correo" placeholder="Correo electrónico" class="border-gray-400 border-[1px] text-black rounded outline-none py-1 px-[2px]">
                            <input type="text" name="Password" placeholder="Contraseña" class="border-gray-400 border-[1px] text-black rounded outline-none py-1 px-[2px]"> 
                            <input type="submit" value="Iniciar sesión" class="bg-green-700 py-2 px-[2px] rounded items-center justify-center hover:cursor-pointer hover:bg-[#0ED800]">
                        </form>
                    </div>
                </div>
            </div>
            <router-link to="/inicio/tablet" class="absolute top-[280px] right-[-32px] w-[25px] h-[25px] border-white border-[1px] rounded-3xl bg-black cursor-pointer"></router-link>
        </div>
    </div>
</template>


<script setup>
</script>