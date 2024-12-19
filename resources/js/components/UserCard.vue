<template>
    <div class="absolute top-7 right-4 flex flex-col items-end">
        <!-- Tarjeta principal -->
        <div class="bg-black p-4 flex items-center space-x-3 shadow-lg border border-white w-80 cursor-pointer"
            @click="toggleDropdowns">
            <!-- Verificamos si user.img está disponible, si no, usamos defaultImg -->
            <p class="mt-2 text-white">{{ user?.nombre || 'Invitado' }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                class="w-5 h-5 mt-1 text-white">
                <path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
        </div>

        <!-- Opciones desplegables -->
        <div v-if="dropdownVisible" class="bg-black shadow-lg border border-white w-80">
            <div v-if="user">
                <div class="p-4 flex justify-center">
                    <a href="/editarPerfil" class="mt-2 text-white border-b border-white">Editar Perfil</a>
                </div>
                <div class="p-4 flex justify-center">
                    <a href="#" @click="logout" class="mt-2 text-white border border-white px-4">Cerrar Sesión</a>
                </div>
            </div>
            <div v-else>
                <div class="p-4 flex justify-center">
                    <a href="/login" class="mt-2 text-white border-b border-white">Iniciar Sesion</a>
                </div>
                <div class="p-4 flex justify-center">
                    <a href="/registro" class="mt-2 text-white border-b border-white">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dropdownVisible: false,
            user: null,
            defaultImg: "/storage/users/userDefault.jpg",  // Ruta de la imagen predeterminada
            sound: null,
        };
    },
    created() {
        this.sound = new Audio("/desplegable.mp3");
        this.sound.load();
        this.checkToken();
    },
    methods: {
        toggleDropdowns() {
            if (this.dropdownVisible) {
                // Sonido cuando se cierra
                const closeSound = new Audio("/desplegable2.mp3");
                closeSound.play();
            } else {
                // Sonido cuando se abre
                this.sound.currentTime = 0;
                this.sound.play();
            }
            this.dropdownVisible = !this.dropdownVisible;
        },
        checkToken() {
            const token = localStorage.getItem('token');
            if (token) {
                const payload = this.decodeToken(token);
                this.user = payload?.user || null;
            }
        },
        decodeToken(token) {
            try {
                const base64Url = token.split('.')[1];
                const jsonPayload = atob(base64Url.replace(/-/g, '+').replace(/_/g, '/'));
                return JSON.parse(jsonPayload);
            } catch {
                return null;
            }
        },
        logout() {
            localStorage.removeItem('token');
            this.user = null;
            this.dropdownVisible = false;
        },
    },
};
</script>

<style scoped>
/* Estilos necesarios */
</style>
