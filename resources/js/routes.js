import { createRouter, createWebHistory } from "vue-router";

// INICIO 
import Home from "./components/Home.vue";
import Inicio from "./components/Inicio.vue";
import StoryTelling from "./components/StoryTelling.vue";

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
import Phising from "./components/Mesa/Aplicaciones/Gmail/recibidos/Phising.vue";
import Duolingo from "./components/Mesa/Aplicaciones/Gmail/recibidos/Duolingo.vue";
import GlovoGmail from "./components/Mesa/Aplicaciones/Gmail/recibidos/Glovo.vue";
import Nike from "./components/Mesa/Aplicaciones/Gmail/recibidos/Nike.vue";
import Enviado1 from "./components/Mesa/Aplicaciones/Gmail/enviados/Enviado1.vue";
import Enviado2 from "./components/Mesa/Aplicaciones/Gmail/enviados/Enviado2.vue";
import Enviado3 from "./components/Mesa/Aplicaciones/Gmail/enviados/Enviado3.vue";
import Borrador1 from "./components/Mesa/Aplicaciones/Gmail/borradores/Borrador1.vue";

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
import Insta from "./components/Mesa/Aplicaciones/Gmail/recibidos/InstaInicioSesion.vue";
import InstaCambioContrasena from "./components/Mesa/Aplicaciones/Gmail/recibidos/InstaCambioContrasena.vue";

// NOTAS 
import Notas from "./components/Mesa/Aplicaciones/Notas.vue";

// PINTEREST 
import Pinterest from "./components/Mesa/Aplicaciones/Pinterest.vue";
import PinterestInicio from "./components/Mesa/Aplicaciones/Pinterest/PinterestInicio.vue";
import PinterestPerfil from "./components/Mesa/Aplicaciones/Pinterest/PinterestPerfil.vue";
import PinterestNotif from "./components/Mesa/Aplicaciones/Pinterest/PinterestNotif.vue";
import Pines from "./components/Mesa/Aplicaciones/Pinterest/perfil/Pines.vue";
import Tableros from "./components/Mesa/Aplicaciones/Pinterest/perfil/Tableros.vue";
import FotosTableros from "./components/Mesa/Aplicaciones/Pinterest/perfil/FotosTableros.vue";

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
import TwitterChat1 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat1.vue";
import TwitterChat2 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat2.vue";
import TwitterChat3 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat3.vue";
import TwitterChat4 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat4.vue";
import TwitterChat5 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat5.vue";
import TwitterChat6 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat6.vue";
import TwitterChat7 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat7.vue";
import TwitterChat8 from "./components/Mesa/Aplicaciones/Twitter/TwitterChat8.vue";

// WHATSAPP 
import Whatsapp from "./components/Mesa/Aplicaciones/Whatsapp.vue";
import WhatsappChat1 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat1.vue";
import WhatsappChat2 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat2.vue";
import WhatsappChat3 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat3.vue";
import WhatsappChat4 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat4.vue";
import WhatsappChat5 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat5.vue";
import WhatsappChat6 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat6.vue";
import WhatsappChat7 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat7.vue";
import WhatsappChat8 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat8.vue";
import WhatsappChat9 from "./components/Mesa/Aplicaciones/Whatsapp/WhatsappChat9.vue";

// LOGIN 
import Registro from "./components/Registro.vue";
import Login from "./components/Login.vue";

// FINAL
import PruebaFinal from "./components/PruebaFinal.vue";
import MensajeMadrid from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeMadrid.vue";
import MensajeMbappe from "./components/Mesa/Aplicaciones/Instagram/mensajes/MensajeMbappe.vue";


const routes = [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/story',
        component : StoryTelling
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
                                    {
                                        path: 'inicio_sesion',
                                        component: Insta
                                    },
                                    {
                                        path: 'cambio_contrasena',
                                        component: InstaCambioContrasena
                                    },
                                    {
                                        path : 'recuperar_contrasena',
                                        component : Phising
                                    },
                                    {
                                        path : 'duolingo',
                                        component : Duolingo
                                    },
                                    {
                                        path : 'glovo',
                                        component : GlovoGmail 
                                    },
                                    {
                                        path : 'nike',
                                        component : Nike
                                    }
                                ]
                            },
                            {
                                path: 'enviados',
                                component: GmailEnviados,
                                children: [
                                    {
                                        path : 'enviado1',
                                        component : Enviado1
                                    },
                                    {
                                        path : 'enviado2',
                                        component : Enviado2
                                    },
                                    {
                                        path : 'enviado3',
                                        component : Enviado3
                                    }
                                ]

                            },
                            {
                                path: 'borradores',
                                component: GmailBorradores,
                                children : [
                                    {
                                        path : 'borrador1',
                                        component : Borrador1
                                    },
                                ]
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
                                    {
                                        path: 'mensaje3',
                                        component: MensajeMadrid
                                    },
                                    {
                                        path: 'mensaje4',
                                        component : MensajeMbappe
                                    }
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
                                component : PinterestPerfil,
                                children : [
                                    {
                                        path : 'pines',
                                        component : Pines,
                                        name : 'pines'
                                    },
                                    {
                                        path : '',
                                        component : Tableros,
                                        name : 'tableros',
                                        children : [
                                            {
                                                path : ':nombre',
                                                component : FotosTableros,
                                                name : 'fotosTableros'
                                            },
                                        ]
                                    }
                                ]
                            },
                            {
                                path: 'notificaciones',
                                component: PinterestNotif
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
                                children: [ 
                                {
                                    path: 'chat1',
                                    component: TwitterChat1,

                                },
                                {
                                    path: 'chat2',
                                    component: TwitterChat2,

                                },
                                {
                                    path: 'chat3',
                                    component: TwitterChat3,

                                },
                                {
                                    path: 'chat4',
                                    component: TwitterChat4,

                                },
                                {
                                    path: 'chat5',
                                    component: TwitterChat5,

                                },
                                {
                                    path: 'chat6',
                                    component: TwitterChat6,

                                },
                                {
                                    path: 'chat7',
                                    component: TwitterChat7,

                                },
                                {
                                    path: 'chat8',
                                    component: TwitterChat8,

                                },
                                ]
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
                        children: [ 
                            {
                                path: 'chat1',
                                component: WhatsappChat1,

                            },
                            {
                                path: 'chat2',
                                component: WhatsappChat2,

                            },
                            {
                                path: 'chat3',
                                component: WhatsappChat3,

                            },
                            {
                                path: 'chat4',
                                component: WhatsappChat4,

                            },
                            {
                                path: 'chat5',
                                component: WhatsappChat5,

                            },
                            {
                                path: 'chat6',
                                component: WhatsappChat6,

                            },
                            {
                                path: 'chat7',
                                component: WhatsappChat7,

                            },
                            {
                                path: 'chat8',
                                component: WhatsappChat8,

                            },
                            {
                                path: 'chat9',
                                component: WhatsappChat9,

                            },
                        ]
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
        path : '/final',
        component : PruebaFinal,
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

