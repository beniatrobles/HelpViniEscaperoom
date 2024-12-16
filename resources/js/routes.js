import { createRouter, createWebHistory } from "vue-router";

// INICIO 
import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";

// COMPONENTES DE LA MESA
import Tablet from "./components/Mesa/Tablet.vue";
import Polaroid from "./components/Mesa/Polaroid.vue";
import Cuaderno from "./components/Mesa/Cuaderno.vue";
import CuadernoAbierto from "./components/mesa/CuadernoAbierto.vue";
import Revista from "./components/Mesa/Revista.vue";
import PostIt from "./components/Mesa/PostIt.vue";
import Airpods from "./components/Mesa/Airpods.vue";
import Platano from "./components/mesa/Platano.vue";

/* ----------------------------------------APLICACIONES DE LA TABLET----------------------------------------------*/

// GLOVO 
import Glovo from "./components/Mesa/Aplicaciones/Glovo.vue";

// GMAIL 
import GmailLogin from "./components/Mesa/Aplicaciones/GmailL.vue"
import Gmail from "./components/Mesa/Aplicaciones/Gmail/Gmail.vue";
import GmailRecibidos from "./components/Mesa/Aplicaciones/Gmail/GmailRecibidos.vue";
import GmailEnviados from "./components/Mesa/Aplicaciones/Gmail/GmailEnviados.vue";
import GmailBorradores from "./components/Mesa/Aplicaciones/Gmail/GmailBorradores.vue";

// INSTAGRAM 
import Instagram from "./components/Mesa/Aplicaciones/Instagram.vue";
import InstagramInicio from "./components/Mesa/Aplicaciones/Instagram/InstagramInicio.vue";
import InstagramMensajes from "./components/Mesa/Aplicaciones/Instagram/InsragramMensajes.vue";
import InstagramPerfil from "./components/Mesa/Aplicaciones/Instagram/InstagramPerfil.vue";

// NOTAS 
import Notas from "./components/Mesa/Aplicaciones/Notas.vue";

// PINTEREST 
import Pinterest from "./components/Mesa/Aplicaciones/Pinterest.vue";

// SPOTIFY 
import Spotify from "./components/Mesa/Aplicaciones/Spotify.vue";

// TIKTOK
import Tiktok from "./components/Mesa/Aplicaciones/Tiktok.vue";

// TWITTER
import Twitter from "./components/Mesa/Aplicaciones/Twitter.vue";

// WHATSAPP 
import Whatsapp from "./components/Mesa/Aplicaciones/Whatsapp.vue";

// LOGIN 
import Registro from "./components/Registro.vue";

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
                        path: 'gmailL',
                        component: GmailLogin,

                    },
                    {
                        path: 'gmail',
                        component: Gmail,
                        children: [
                            {
                                path: '',
                                component: GmailRecibidos,
                            },
                            {
                                path: 'enviados',
                                component: GmailEnviados,
                            },
                            {
                                path: 'borradores',
                                component: GmailBorradores,
                            },
                        ]
                    },
                    {
                        path: 'instagram',
                        component: Instagram,
                        children: [
                            {
                                path: '',
                                component: InstagramInicio,
                            },
                            {
                                path: 'mensajes',
                                component: InstagramMensajes,
                            },
                            {
                                path: 'perfil',
                                component: InstagramPerfil,
                            },
                        ]
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

