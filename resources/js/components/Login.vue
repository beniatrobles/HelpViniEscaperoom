<template>
  <div class="flex justify-center items-center flex-col h-screen">
    <div class="w-[300px] mb-2">
      <router-link to="/" class="hover:text-[#0ED800] flex items-center font-bold max-w-max"><span
          class="text-2xl -translate-y-1">←</span>
        Volver</router-link>
    </div>
    <form @submit.prevent="enviarFormulario"
      class="bg-zinc-1000 flex flex-col justify-center items-center border-[1px]  max-w-[300px] w-[100%] h-[350px] rounded gap-3">
      <h1 class="mb-6 text-xl">Login</h1>
      
      <input type="text" v-model="email" name="email" placeholder="Email" @blur="comprobarEmail" />
      <p class="text-xs text-red-500">{{ errorEmail }}</p>
      
      <input type="password" v-model="password" name="password" placeholder="Contraseña" @blur="comprobarContra" />
      <p class="text-xs text-red-500">{{ errorPassword }}</p>

      <button type="submit"
        class="relative p-[5px] bg-white text-black w-[50%] rounded flex hover:text-white font-bold">
        <p class="z-[10] text-center w-[100%]">Login</p>
      </button>
    </form>
    <router-link to="/registro" class="mt-3 hover:text-[#0ED800]">¿No tienes cuenta?</router-link>
  </div>
</template>

<script setup>
import { ref } from "vue";
import { useAuthStore } from "@/stores/authStore";
import { useRouter } from "vue-router";

const authStore = useAuthStore();
const router = useRouter();

const email = ref("");
const password = ref("");
const errorEmail = ref("");
const errorPassword = ref("");

const comprobarEmail = () => {
  if (email.value.trim() === "") {
    errorEmail.value = "El email no puede estar vacío.";
  } else {
    errorEmail.value = "";
  }

};

const comprobarContra = () => {
  if (password.value.trim() === "") {
    errorPassword.value = "La contraseña no puede estar vacía.";
  } else {
    errorPassword.value = "";
  }
};


const enviarFormulario = async () => {
  if (email.value.trim() === "") {
    errorEmail.value = "El email no puede estar vacío.";
  }
  if (password.value.trim() === "") {
    errorPassword.value = "La contraseña no puede estar vacía.";
  }

  // Si no hay errores, procedemos con el login
  if (!errorEmail.value && !errorPassword.value) {
    await authStore.login(email.value, password.value);

    if (authStore.mensajeExito) {
      alert(authStore.mensajeExito);
      router.push("/"); // Redirige al inicio
    } else if (authStore.mensajeError) {
      alert(authStore.mensajeError);
    }
  }
};
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
