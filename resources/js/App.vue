<template>
    <div id="app">
      <nav>
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
      </nav>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
  export default {
    name: 'App'
  };
  </script>
  
  <style scoped>
    nav {
      margin: 20px;
    }
  
    nav a {
      margin-right: 15px;
    }
  </style>
  