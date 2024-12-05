<template>
    <div id="app" class="bg-black text-white h-screen">
      <nav>
        <router-link to="/" class="mr-4">Home</router-link>
        <router-link to="/about" class="mr-4">About</router-link>
        <router-link to="/inicio" class="mr-4">Inicio</router-link>
      </nav>
      <body>
        
      </body>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
  export default {
    name: 'App'
  };
  </script>
  
  <style>
  </style>
  