<template>
    <div class="flex flex-col items-center ">
        <div class="max-w-[750px] w-full border border-white my-14 ranking p-4 rounded-lg">
            <div>
                <h1 class="text-2xl text-center">Ranking</h1>
                <h1 class="text-xs text-center text-[#0ED800]">Mejores partidas</h1>
            </div>
            <div class="flex justify-center gap-14 mt-14 ">
                <div class="flex flex-col items-center">
                    <div class="w-[150px] h-[150px] bg-white rounded-full mt-20 outline outline-[#C0C0C0] outline-[5px] relative">
                        <img src="" alt="">
                        <div class="bg-[#C0C0C0] outline pt-1 rounded-full max-w-max aspect-square absolute left-0 right-0 -bottom-5 mx-auto text-black"><h1>#2</h1></div>
                    </div>
                    <p class="mt-5 font-bold">Nombre Usuario</p>
                    <p>XX:xx:xx</p>
                    <p>xxxx pts.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-[180px] h-[180px] bg-white rounded-full outline outline-[5px] outline-[yellow] relative">
                        <img src="" alt="">
                        <div class="bg-[yellow] outline pt-1 rounded-full max-w-max aspect-square absolute left-0 right-0 -bottom-5 mx-auto text-black"><h1>#1</h1></div>
                        <img :src="'/storage/img/corona.png'" class="w-20 absolute -top-12 right-0 rotate-[26deg]">
                    </div>
                    <p class="mt-5 font-bold">Nombre Usuario</p>
                    <p>XX:xx:xx</p>
                    <p>xxxx pts.</p>
                    
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-[150px] h-[150px] bg-white rounded-full mt-24 outline outline-[#CE8946] outline-[5px] relative">
                        <img src="" alt="">
                        <div class="bg-[#CE8946] outline pt-1 rounded-full max-w-max aspect-square absolute left-0 right-0 -bottom-5 mx-auto text-black"><h1>#3</h1></div>
                    </div>
                    <p class="mt-5 font-bold">Nombre Usuario</p>
                    <p>XX:xx:xx</p>
                    <p>xxxx pts.</p>
                </div>

            </div>
            <div class="flex flex-col items-center gap-3 mt-10">
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#4</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#5</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#6</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#7</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#8</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#9</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <div class="flex items-center w-4/5 h-[30px] border ranking_usr">
                    <div class="w-[20%] text-center"><h1>#10</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
                <h1 class="text-gray-300">...</h1>
                <div class="flex items-center w-4/5 h-[30px] border border-[#0ED800] text-[#0ED800] ranking_usr_tu">
                    <div class="w-[20%] text-center"><h1>#Tú</h1></div>
                    <div class="w-[60%] flex items-center gap-2"><div class="w-[25px] h-[25px] bg-white rounded-full"></div><h1 class="text-xs">Nombre Usuario</h1></div>
                    <div class="w-[20%] text-center">xxxx pts.</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

<style scoped>
.ranking{
    box-shadow: 6px 6px 0px white;
}
.ranking_usr{
    box-shadow: 3px 3px 0px white;  
}
.ranking_usr_tu{
    box-shadow: 3px 3px 0px #0ED800;  
}
</style>