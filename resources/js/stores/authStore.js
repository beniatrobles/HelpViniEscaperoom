import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('auth', {
  state: () => ({
    user: null, // Información del usuario autenticado
    token: localStorage.getItem('token') || null, // Guardamos el token
    mensajeError: '', // Errores relacionados con el login
    mensajeExito: '' // Mensaje de éxito
  }),

  actions: {
    // Método para iniciar sesión
    async login(email, password) {
      const post = { correo: email, contraseña: password };
      try {
        const respuesta = await axios.post('/api/login.php', post);
        const data = respuesta.data;

        if (data.error) {
          this.mensajeError = data.error;
          this.mensajeExito = '';
          this.user = null;
        } else {
          this.mensajeExito = data.success;
          this.token = data.token;
          this.user = data.user;
          localStorage.setItem('token', data.token);
        }
      } catch (error) {
        this.mensajeError = 'Error en el servidor';
        this.mensajeExito = '';
      }
    },

    // Método para verificar el token
    checkToken() {
      const token = localStorage.getItem('token');
      if (token) {
        const payload = this.decodeToken(token);
        if (payload) {
          this.user = payload.user;
          this.mensajeExito = 'Usuario autenticado';
        } else {
          this.logout(); // El token es inválido o ha expirado
        }
      }
    },

    // Método para decodificar el token
    decodeToken(token) {
      try {
        const base64Url = token.split('.')[1];
        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        const jsonPayload = decodeURIComponent(
          atob(base64)
            .split('')
            .map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2))
            .join('')
        );
        return JSON.parse(jsonPayload);
      } catch (e) {
        console.error('Error al decodificar el token', e);
        return null;
      }
    },

    // Método para cerrar sesión
    logout() {
      localStorage.removeItem('token');
      this.user = null;
      this.token = null;
      this.mensajeExito = '';
      this.mensajeError = '';
    }
  }
});
