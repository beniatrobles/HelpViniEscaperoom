import { defineStore } from 'pinia';
import axios from 'axios';
import { useAuthStore } from '@/stores/authStore';

export const usePartidaStore = defineStore('partida', {
    state: () => ({
        idPartida: null,
        idUsuario: null
    }),

    actions: {
        async comprobarPartida() {
            try {
                const authStore = useAuthStore();
                // Obtener el id del usuario actual
                this.idUsuario = authStore.user.id;
                // Consultar la partida activa
                const partidaActual = await axios.get(`/partida-activa/${this.idUsuario}`);
                return partidaActual
            } catch (error) {
                // console.log('Error al comprobar la partida:', error);
            }

        },

        async cambiarEstado(prueba, idPartida){
            try {
                await axios.put(`/actualizar-partida/${idPartida}`, {
                    [prueba]: true
                })
            } catch (error) {
                console.error(error)
            }
            
        }
    }

})



