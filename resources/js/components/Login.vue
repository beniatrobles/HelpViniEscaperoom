<template>
  <div class="flex justify-center items-center flex-col h-screen">
    <div class=" w-[300px] mb-2">
      <router-link to="/" class="hover:text-[#0ED800] flex items-center font-bold max-w-max"><span
          class="text-2xl">←</span>
        Volver</router-link>
    </div>
    <form @submit.prevent="enviarFormulario"
      class="bg-zinc-1000 flex flex-col justify-center items-center border-[1px]  max-w-[300px] w-[100%] h-[350px] rounded">
      <h1 class=" mb-6 text-xl">Login</h1>
      <input type="text" v-model="email" name="email" placeholder="Email" />
      <br />
      <input type="password" v-model="password" name="password" placeholder="Contraseña" />
      <br />

      <button type="submit"
        class=" relative p-[5px] bg-white text-black w-[50%] rounded flex hover:text-white font-bold">
        <p class="z-[10] text-center w-[100%]">Registrarme</p>
      </button>
    </form>
  </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";
import { useRouter } from 'vue-router';

const router = useRouter();

// campos del formulario
const email = ref("");
const password = ref("");
//mensajes de error y succes
const mensajeError = ref("")
const mensajeExito = ref("")
//usuario
const user = ref(null);



const enviarFormulario = async () => {
  const post = {
    correo: email.value,
    contraseña: password.value
  }
  try {
    const respuesta = await axios.post('/api/login.php', post);
    const data = respuesta.data;
    console.log(respuesta)
    if (data.error) {
      mensajeError.value = data.error;
      mensajeExito.value = '';
      user.value = null;
    } else {
      mensajeExito.value = data.success;
      user.value = data.user;
      localStorage.setItem('token', data.token);
      checkToken();
      // window.location.href = '/registro';
    }
  } catch (error) {
    mensajeError.value = error;
    mensajeExito.value = '';

  }

}

const checkToken = () => {
  const token = localStorage.getItem('token');
  if (token) {
    console.log(token)
    const payload = decodeToken(token);
    if (payload) {
      user.value = payload.user;
      mensajeExito.value = 'Usuario autenticado';
      // alert(mensajeExito.value)
    } else {
      mensajeError.value = 'El token ha expirado o es inválido';
      localStorage.removeItem('token');
      user.value = null;
      // alert(mensajeError.value)
    }
  }
};

// Function to decode the token
const decodeToken = (token) => {
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
};

// Logout function
const logout = () => {
  localStorage.removeItem('token');
  user.value = null;
  successMessage.value = '';
  errorMessage.value = '';
};

onMounted(() => {
  checkToken()

})
</script>


<style scoped>
input {
  color: black;
  height: 40px;
  width: 250px;
  padding: 5px 10px;
  border-radius: 5px;
  box-shadow: 4px 4px 0 gray;
}

input:focus {
  outline: 1px solid #0ED800;
  box-shadow: 4px 4px 0 #0ED800;
}

form {
  box-shadow: 5px 5px 0 white;
}

button::after {
  content: '';
  background-color: #0ED800;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  width: 0%;
  height: 100%;
  border-radius: 5px;
  transition: .3s;
}

button:hover::after {
  width: 100%;
}
</style>