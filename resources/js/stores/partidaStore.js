import { defineStore } from 'pinia';
import axios from 'axios';
import { useAuthStore } from '@/stores/authStore';

export const usePartidaStore = defineStore('partida', {
    state: () => ({
        idPartida: null,
        idUsuario: null,
        tiempoRestante: 1800, // 30 minutos en segundos
        contadorSync: 0, // Contador para actualizar la BD cada 5 segs
    }),

    actions: {
        async comprobarPartida() {
            try {
                const authStore = useAuthStore();
                this.idUsuario = authStore.user.id;
                const partidaActual = await axios.get(`/partida-activa/${this.idUsuario}`);
                return partidaActual;
            } catch (error) {
                console.error('Error al comprobar la partida:', error);
            }
        },

        async cambiarEstado(prueba, idPartida) {
            try {
                await axios.put(`/actualizar-partida/${idPartida}`, {
                    [prueba]: true
                });
            } catch (error) {
                console.error(error);
            }
        },

        async cargarTiempo() {
            try {
                const response = await axios.get(`/partida/${this.idUsuario}/tiempo`);
                this.tiempoRestante = response.data.tiempo;
            } catch (error) {
                console.error('Error al cargar el tiempo:', error);
            }
        },

        async reducirTiempo(cantidad) {
            if (this.tiempoRestante > 0) {
                this.tiempoRestante = Math.max(0, this.tiempoRestante - cantidad);
                this.contadorSync += cantidad; // Aumentamos el contador

                // Solo sincroniza con la BD cada 5 segundos
                if (this.contadorSync >= 5) {
                    this.contadorSync = 0; // Reiniciamos el contador
                    try {
                        await axios.post(`/partida/${this.idUsuario}/actualizarTiempo`, {
                            tiempo: this.tiempoRestante
                        });
                    } catch (error) {
                        console.error('Error al actualizar el tiempo en la BD:', error);
                    }
                }
            }
        }
    }
});
