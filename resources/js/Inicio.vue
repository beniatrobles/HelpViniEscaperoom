<script setup>
</script>

<template>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help Vini - Inicio</title>
</head><body class="bg-gradient-to-br from-blue-800 to-green-500 flex items-center justify-center min-h-screen">

    <div class="bg-black rounded-[20px] shadow-2xl w-[1200px] h-[800px] relative flex">
    
        <div class="bg-white rounded-[15px] w-full h-full relative overflow-hidden border border-gray-400 flex flex-col">
        
            <div class="bg-gray-100 w-full h-12 flex items-center px-6 justify-between">
                <div class="text-lg font-bold">12:45</div>
                <div class="flex space-x-2">
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                </div>
            </div>

            <div class="grid grid-cols-6 gap-4 p-6 flex-grow">
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-blue-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">A</div>
                    <p class="text-xs font-medium">App 1</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-red-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">B</div>
                    <p class="text-xs font-medium">App 2</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-green-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">C</div>
                    <p class="text-xs font-medium">App 3</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-yellow-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">D</div>
                    <p class="text-xs font-medium">App 4</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-purple-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">E</div>
                    <p class="text-xs font-medium">App 5</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-pink-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">F</div>
                    <p class="text-xs font-medium">App 6</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-indigo-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">G</div>
                    <p class="text-xs font-medium">App 7</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-teal-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">H</div>
                    <p class="text-xs font-medium">App 8</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-orange-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">I</div>
                    <p class="text-xs font-medium">App 9</p>
                </div>
                <div class="flex flex-col items-center space-y-2">
                    <div class="bg-cyan-500 w-16 h-16 rounded-xl flex items-center justify-center text-white text-lg font-bold cursor-pointer">J</div>
                    <p class="text-xs font-medium">App 10</p>
                </div>
            </div>
        </div>

        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center">
            <div class="w-10 h-10 bg-black rounded-full"></div>
        </div>
    </div>
</body>
</template>

<style scoped>
</style>
