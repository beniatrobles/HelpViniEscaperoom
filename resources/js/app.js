import "./bootstrap";
import { createApp } from "vue";
import "../css/app.css";

import App from "./components/App.vue";
import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";
import Tablet from "./components/Tablet.vue"; // Importa el componente Tablet
import Polaroid from "./components/Polaroid.vue";
import Cuaderno from "./components/Cuaderno.vue";
import Revista from "./components/Revista.vue";
// import PostIt from "./components/PostIt.vue";
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/inicio',
        component: Inicio,
        children: [
            {
                path: 'tablet', // Subruta: /inicio/tablet
                component: Tablet,
            },
            {
                path: 'polaroid',
                component: Polaroid,
            },
            {
                path: 'revista',
                component: Revista,
            },
            {
                path: 'cuaderno',
                component: Cuaderno,
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');
