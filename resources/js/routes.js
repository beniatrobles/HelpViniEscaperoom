import { createRouter, createWebHistory } from "vue-router";

// INICIO 
import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";

// COMPONENTES DE LA MESA
import Tablet from "./components/Mesa/Tablet.vue";
import TabletBloq from "./components/Mesa/TabletBloq.vue";
import Polaroid from "./components/Mesa/Polaroid.vue";
import Cuaderno from "./components/Mesa/Cuaderno.vue";
import CuadernoAbierto from "./components/mesa/CuadernoAbierto.vue";
import Revista from "./components/Mesa/Revista.vue";
import PostIt from "./components/Mesa/PostIt.vue";
import Airpods from "./components/Mesa/Airpods.vue";
import Platano from "./components/mesa/Platano.vue";
import Mechero from "./components/Mesa/Mechero.vue";
import Clips from "./components/Mesa/Clips.vue";
import Boli from "./components/Mesa/Boli.vue";

/* ----------------------------------------APLICACIONES DE LA TABLET----------------------------------------------*/

// CALCULADORA
import Calculadora from "./components/Mesa/Aplicaciones/Calculadora.vue";

// DRIVE
import Drive from "./components/Mesa/Aplicaciones/Drive.vue";

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
import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
import MensajePista from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajePista.vue";
// import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
// import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
// import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";

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
import TwitterInicio from "./components/Mesa/Aplicaciones/Twitter/TwitterInicio.vue";
import TwitterNotificaciones from "./components/Mesa/Aplicaciones/Twitter/TwitterNotificaciones.vue";
import TwitterMensajes from "./components/Mesa/Aplicaciones/Twitter/TwitterMensajes.vue";
import TwitterPerfil from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfil.vue";
import TwitterPerfilM from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfilM.vue";

// WHATSAPP 
import Whatsapp from "./components/Mesa/Aplicaciones/Whatsapp.vue";

// LOGIN 
import Registro from "./components/Registro.vue";
import Login from "./components/Login.vue";
import PublicacionPista from "./components/Mesa/Aplicaciones/Instagram/perfil/PublicacionPista.vue";
import Traductor from "./components/Mesa/Aplicaciones/Traductor.vue";

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
                path: 'tabletBloq',
                component: TabletBloq
            },
            {
                path: 'tablet', // Subruta: /inicio/tablet
                component: Tablet,
                    children: [            
                    {
                        path: 'calculadora',
                        component: Calculadora,
    
                    },
                    {
                        path: 'drive',
                        component: Drive,

                    },
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
                                children: [
                                    {
                                        path: 'mensaje1',
                                        component: MensajeRonaldo
                                    },
                                    {
                                        path: 'mensaje2',
                                        component: MensajePista
                                    },
                                ]
                            },
                            {
                                path: 'perfil',
                                component: InstagramPerfil,
                                children: [
                                    {
                                        path: 'publicacion1',
                                        component: PublicacionPista
                                    },
                                ] 
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
                        children: [
                            {
                                path: '',
                                component: TwitterInicio,
                            },
                            {
                                path: 'notificaciones',
                                component: TwitterNotificaciones,
                            },
                            {
                                path: 'mensajes',
                                component: TwitterMensajes,
                            },
                            {
                                path: 'perfil',
                                component: TwitterPerfil,

                            },
                            {

                                path: 'perfilM',
                                component: TwitterPerfilM,

                            },
                        ]
                    },
                    {
                        path: 'whatsapp',
                        component: Whatsapp,
                    },
                    {
                        path: 'traductor',
                        component: Traductor
                    }
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
            {
                path: 'mechero',
                component: Mechero,
            },
            {
                path: 'clips',
                component: Clips,
            },
            {
                path: 'boli',
                component: Boli,
            },
        ],
    },
    {
        path: '/registro',
        component: Registro,
    },
    {
        path: '/login',
        component: Login,
    },
];

export const router = createRouter({
    history: createWebHistory(),
    routes,
});

