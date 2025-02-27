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
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },
        {
            src : 'https://i.pinimg.com/736x/c7/e7/6c/c7e76cfb9848ecf9e076708ec311f582.jpg',
            tablero : 'O Rei'
        },

    ])
</script>