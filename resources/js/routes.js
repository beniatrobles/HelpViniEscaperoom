import { createRouter, createWebHistory } from "vue-router";

// INICIO 
import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";

// COMPONENTES DE LA MESA
import Tablet from "./components/Mesa/Tablet.vue";
import TabletBloq from "./components/Mesa/TabletBloq.vue";
import Polaroid from "./components/Mesa/Polaroid.vue";
import Cuaderno from "./components/Mesa/Cuaderno.vue";
import CuadernoAbierto from "./components/Mesa/CuadernoAbierto.vue";
import Revista from "./components/Mesa/Revista.vue";
import PostIt from "./components/Mesa/PostIt.vue";
import Airpods from "./components/Mesa/Airpods.vue";
import Platano from "./components/Mesa/Platano.vue";
import Mechero from "./components/Mesa/Mechero.vue";
import Clips from "./components/Mesa/Clips.vue";
import Boli from "./components/Mesa/Boli.vue";
import Lapiz_morado from "./components/Mesa/Lapiz_morado.vue";
import Lapiz_rojo from "./components/Mesa/Lapiz_rojo.vue";
import Lapiz_verde from "./components/Mesa/Lapiz_verde.vue";
import Lapiz_azul from "./components/Mesa/Lapiz_azul.vue";

/* ----------------------------------------APLICACIONES DE LA TABLET----------------------------------------------*/

// CALCULADORA
import Calculadora from "./components/Mesa/Aplicaciones/Calculadora.vue";

// DRIVE
import Drive from "./components/Mesa/Aplicaciones/Drive.vue";
import DriveL from "./components/Mesa/Aplicaciones/Drive/DriveL.vue";
import DrivePapelera from "./components/Mesa/Aplicaciones/Drive/DrivePapelera.vue";
import DriveInicio from "./components/Mesa/Aplicaciones/Drive/DriveInicio.vue";

// EL TIEMPO
import ElTiempo from "./components/Mesa/Aplicaciones/ElTiempo.vue";

// GLOVO 
import Glovo from "./components/Mesa/Aplicaciones/Glovo.vue";

// GMAIL 
import GmailLogin from "./components/Mesa/Aplicaciones/GmailL.vue"
import Gmail from "./components/Mesa/Aplicaciones/Gmail/Gmail.vue";
import GmailRecibidos from "./components/Mesa/Aplicaciones/Gmail/GmailRecibidos.vue";
import GmailEnviados from "./components/Mesa/Aplicaciones/Gmail/GmailEnviados.vue";
import GmailBorradores from "./components/Mesa/Aplicaciones/Gmail/GmailBorradores.vue";
import mensajeSpoty from "./components/Mesa/Aplicaciones/Gmail/recibidos/spoty.vue";

// INSTAGRAM 
import Instagram from "./components/Mesa/Aplicaciones/Instagram.vue";
import InstagramLogin from "./components/Mesa/Aplicaciones/Instagram/InstagramL.vue"
import InstagramInicio from "./components/Mesa/Aplicaciones/Instagram/InstagramInicio.vue";
import InstagramMensajes from "./components/Mesa/Aplicaciones/Instagram/InsragramMensajes.vue";
import InstagramPerfil from "./components/Mesa/Aplicaciones/Instagram/InstagramPerfil.vue";
import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
import MensajePista from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajePista.vue";
import PublicacionPista from "./components/Mesa/Aplicaciones/Instagram/perfil/PublicacionPista.vue";
// import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
// import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
// import MensajeRonaldo from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeRonaldo.vue";
import Destacada1 from "./components/Mesa/Aplicaciones/Instagram/perfil/Destacada1.vue";
import Historias from "./components/Mesa/Aplicaciones/Instagram/inicio/Historias.vue";

// NOTAS 
import Notas from "./components/Mesa/Aplicaciones/Notas.vue";

// PINTEREST 
import Pinterest from "./components/Mesa/Aplicaciones/Pinterest.vue";
import PinterestInicio from "./components/Mesa/Aplicaciones/Pinterest/PinterestInicio.vue";
import PinterestPerfil from "./components/Mesa/Aplicaciones/Pinterest/PinterestPerfil.vue";

// SPOTIFY 
import Spotify from "./components/Mesa/Aplicaciones/Spotify.vue";
import SpotifyInicio from "./components/Mesa/Aplicaciones/Spotify/SpotifyInicio.vue";
import SpotifyPlaylist1 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist1.vue";
import SpotifyPlaylist2 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist2.vue";
import SpotifyPlaylist3 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist3.vue";
import SpotifyPlaylist4 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist4.vue";
import SpotifyPlaylist5 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist5.vue";
import SpotifyPlaylist6 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist6.vue";
import SpotifyPlaylist7 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist7.vue";
import SpotifyPlaylist8 from "./components/Mesa/Aplicaciones/Spotify/SpotifyPlaylist8.vue";

// TRADUCTOR
import Traductor from "./components/Mesa/Aplicaciones/Traductor.vue";

// TWITTER
import Twitter from "./components/Mesa/Aplicaciones/Twitter.vue";
import TwitterLogin from "./components/Mesa/Aplicaciones/Twitter/TwitterL.vue"
import TwitterInicio from "./components/Mesa/Aplicaciones/Twitter/TwitterInicio.vue";
import TwitterNotificaciones from "./components/Mesa/Aplicaciones/Twitter/TwitterNotificaciones.vue";
import TwitterMensajes from "./components/Mesa/Aplicaciones/Twitter/TwitterMensajes.vue";
import TwitterPerfil from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfil.vue";
import TwitterPerfil2 from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfil2.vue";
import TwitterPerfil3 from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfil3.vue";
import TwitterPerfil4 from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfil4.vue";
import TwitterPerfilM from "./components/Mesa/Aplicaciones/Twitter/TwitterPerfilM.vue";

// WHATSAPP 
import Whatsapp from "./components/Mesa/Aplicaciones/Whatsapp.vue";

// LOGIN 
import Registro from "./components/Registro.vue";
import Login from "./components/Login.vue";


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
                        path: 'driveL',
                        component: DriveL,

                    },
                    {
                        path: 'drive',
                        component: Drive,
                        children: [
                            {
                                path: '',
                                component: DriveInicio,

                            },
                            {
                                path: 'papelera',
                                component: DrivePapelera,
                            },
                        ]
                    },
                    {
                        path: 'eltiempo',
                        component: ElTiempo,
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
                                children: [
                                    {
                                        path: 'spoty',
                                        component: mensajeSpoty
                                    },
                                ]
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
                        path: 'instagramL',
                        component: InstagramLogin,
                    },
                    {
                        path: 'instagram',
                        component: Instagram,
                        children: [
                            {
                                path: '',
                                component: InstagramInicio,
                                children: [
                                    {
                                        path: 'historias/:id',
                                        name: 'historias',
                                        component: Historias
                                    }
                                ],
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
                                    {
                                        path: 'destacada1',
                                        component: Destacada1
                                    }
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
                        children : [
                            {
                                path: '',
                                component: PinterestInicio
                            },
                            {
                                path: 'perfil',
                                component : PinterestPerfil
                            }
                        ]
                    },
                    {
                        path: 'spotify',
                        component: Spotify,
                        children: [
                            {
                                path: '',
                                component: SpotifyInicio,
                            },
                            {
                                path: 'playlist1',
                                component: SpotifyPlaylist1,
                            },
                            {
                                path: 'playlist2',
                                component: SpotifyPlaylist2,
                            },
                            {
                                path: 'playlist3',
                                component: SpotifyPlaylist3,
                            },
                            {
                                path: 'playlist4',
                                component: SpotifyPlaylist4,
                            },
                            {
                                path: 'playlist5',
                                component: SpotifyPlaylist5,
                            },
                            {
                                path: 'playlist6',
                                component: SpotifyPlaylist6,
                            },
                            {
                                path: 'playlist7',
                                component: SpotifyPlaylist7,
                            },
                            {
                                path: 'playlist8',
                                component: SpotifyPlaylist8,
                            }
                        ]
                    },
                    {
                        path: 'traductor',
                        component: Traductor
                    },
                    {
                        path: 'twitterL',
                        component: TwitterLogin,
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
                                path: 'perfil2',
                                component: TwitterPerfil2,

                            },
                            {
                                path: 'perfil3',
                                component: TwitterPerfil3,

                            },
                            {
                                path: 'perfil4',
                                component: TwitterPerfil4,

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
            {
                path: 'morado',
                component: Lapiz_morado,
            },
            {
                path: 'rojo',
                component: Lapiz_rojo,
            },
            {
                path: 'verde',
                component: Lapiz_verde,
            },
            {
                path: 'azul',
                component: Lapiz_azul,
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

