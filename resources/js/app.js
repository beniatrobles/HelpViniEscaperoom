import "./bootstrap";
import { createApp } from "vue";
import "../css/app.css";

import App from "./components/App.vue";
import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";
import Tablet from "./components/Tablet.vue"; // Importa el componente Tablet
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
