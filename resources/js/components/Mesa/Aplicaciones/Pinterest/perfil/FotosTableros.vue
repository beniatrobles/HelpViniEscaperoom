<template>
    <div class="w-full overflow-auto py-8 px-20 bg-zinc-800">
        <div class="mb-6">
            <router-link to="/inicio/tablet/pinterest/perfil" class="text-3xl font-extrabold p-0">←</router-link>
            <h2 class="text-xl font-extrabold ">{{ nombreTablero }}</h2>
        </div>

        <div class="grid grid-cols-3 gap-6 justify-items-center items-center">
            <div v-for="imagen in imagenes.filter(imagen => imagen.tablero == nombreTablero)" class="w-full h-72 bg-zinc-950 rounded-lg overflow-hidden flex items-center">
                <img :src="imagen.tablero == nombreTablero ? imagen.src : ''">
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue';
    import { useRoute } from 'vue-router';

    const route = useRoute();
    const nombreTablero = ref(route.params.nombre)

    const imagenes = ref([
        {
            src: 'https://i.pinimg.com/736x/0d/c4/c8/0dc4c86d8590170d02719a27c615da9f.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/1f/af/ce/1fafce4d7b1ae104c5b494e374b261e5.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/d7/f1/0b/d7f10b46656fb2baaf1c0d0e354ec8e2.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/6b/1b/e7/6b1be7aa80ff3154cfa9d0c2dfd44f37.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/71/57/88/715788a322be79c717c84786a8adf067.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/14/95/18/14951873a7c8c6680e21f8a8cd06d8db.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/42/5c/93/425c93432cc23379dd7ecc08236bc299.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/79/51/73/79517370d131670f0a118edd722cb875.jpg',
            tablero: 'Love'
        }, 
        {
            src: 'https://i.pinimg.com/736x/0a/62/17/0a6217432203657893d1f20f020b01aa.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/21/d6/75/21d67546567533861bc15c02f3d21c76.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/05/68/a3/0568a32a2d0cf302bef0df628e12db44.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/0f/6a/a1/0f6aa1735edecbb063b0cb5272918709.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/0f/b3/6a/0fb36a2ddf64a098a63dbfd8f25c2d7d.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/a3/17/dd/a317ddfd9ad8b1b980e12d8c0b0c202b.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/9d/ef/85/9def854248dcebf033ff9effe71ee027.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/05/23/89/0523899b2d2f1cbc9a34baeaf3964f4d.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/a1/98/34/a19834478c5219ef14496ac90017d3ce.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/b3/f8/c1/b3f8c1e043d5649e3b7cbe5ddedc38dd.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/16/8e/29/168e292988dadee26f416bb4374f5757.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/3c/de/04/3cde049c0ce7ac1cd4df2fe90f6dd2b1.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/fc/ef/8d/fcef8d063dc5684ade46b686e2fe5082.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://i.pinimg.com/736x/d4/80/7c/d4807c72f17951bc58d613dd687eaa16.jpg',
            tablero: 'mininas'
        },
        {
            src: 'https://www.ole.com.ar/2020/06/15/MRh0BN_7E_720x0__1.jpg',
            tablero: 'mininas'
        },
        {
            src : 'https://i.pinimg.com/736x/76/5e/af/765eafae27f30ca7a417208c4749c61f.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/b7/3e/07/b73e07d77c947e3f6cff3c170bb6a402.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/4f/b0/4a/4fb04ac9d0c3e3d25de1dfd555ad4c93.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/69/1e/73/691e73e342288566944827088a9caa29.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/26/65/4f/26654f78aced492cbaef57572f917617.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/15/e3/8b/15e38bf4e36e39f3d486ba04112bfbcc.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/a4/13/f9/a413f968609ca932d5454a0f1c5001e2.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/ba/d5/de/bad5de5d09893d50de392344f18a822b.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },

    ])
</script>