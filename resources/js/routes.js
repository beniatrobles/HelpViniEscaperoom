import { createRouter, createWebHistory } from "vue-router";

import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";
import Tablet from "./components/Mesa/Tablet.vue";
import Polaroid from "./components/Mesa/Polaroid.vue";
import Cuaderno from "./components/Mesa/Cuaderno.vue";
import Revista from "./components/Mesa/Revista.vue";
import PostIt from "./components/Mesa/PostIt.vue";
import Airpods from "./components/Mesa/Airpods.vue";
import Glovo from "./components/Mesa/Aplicaciones/Glovo.vue";
import Gmail from "./components/Mesa/Aplicaciones/Gmail.vue";
import Instagram from "./components/Mesa/Aplicaciones/Instagram.vue";
import Notas from "./components/Mesa/Aplicaciones/Notas.vue";
import Pinterest from "./components/Mesa/Aplicaciones/Pinterest.vue";
import Spotify from "./components/Mesa/Aplicaciones/Spotify.vue";
import Tiktok from "./components/Mesa/Aplicaciones/Tiktok.vue";
import Twitter from "./components/Mesa/Aplicaciones/Twitter.vue";
import Whatsapp from "./components/Mesa/Aplicaciones/Whatsapp.vue";
import Registro from "./components/Registro.vue";
import CuadernoAbierto from "./components/mesa/CuadernoAbierto.vue";
import Platano from "./components/mesa/Platano.vue";

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
                    children: [
                    {
                        path: 'glovo',
                        component: Glovo,

                    },
                    {
                        path: 'gmail',
                        component: Gmail,
                    },
                    {
                        path: 'instagram',
                        component: Instagram,
                    },
                    {
                        path: 'notas',
                        component: Notas,
                    },
                    {
                        path: 'pinterest',
                        component: Pinterest,
                    },
                    {
                        path: 'spotify',
                        component: Spotify,
                    },
                    {
                        path: 'tiktok',
                        component: Tiktok,
                    },
                    {
                        path: 'twitter',
                        component: Twitter,
                    },
                    {
                        path: 'whatsapp',
                        component: Whatsapp,
                    },
                ],
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
            {
                path: 'airpods',
                component: Airpods,
            },
            {
                path: 'postit',
                component: PostIt,
            },
            {
                path: 'cuadernoAbierto',
                component: CuadernoAbierto,
            },
            {
                path: 'platano',
                component: Platano,
            },
        ],
    },
    {
        path: '/registro',
        component: Registro,
    },
];

export const router = createRouter({
    history: createWebHistory(),
    routes,
});

