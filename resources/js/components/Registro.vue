<template>
    <div class="flex justify-center items-center flex-col h-screen">
        <div class=" w-[300px] mb-2">
            <router-link to="/" class="hover:text-[#0ED800] flex items-center font-bold max-w-max"><span
                    class="text-2xl">←</span>
                Volver</router-link>
        </div>
        <form @submit.prevent="enviarFormulario"
            class="bg-zinc-1000 flex flex-col justify-center items-center border-[1px]  max-w-[300px] w-[100%] h-[350px] rounded">
            <h1 class=" mb-6 text-xl">Registrate</h1>
            <input type="text" v-model="nombre" name="nombre" placeholder="Nombre de Usuario" />
            <br />
            <input type="email" v-model="email" name="email" placeholder="Email" />
            <br />
            <input type="password" v-model="password" name="password" placeholder="Contraseña" />
            <br />

            <button type="submit"
                class=" relative p-[5px] bg-white text-black w-[50%] rounded flex hover:text-white font-bold">
                <p class="z-[10] text-center w-[100%]">Registrarme</p>
            </button>
        </form>
        <router-link to="/login" class="mt-3 hover:text-[#0ED800]">No tienes una cuenta?</router-link>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import { useRouter } from 'vue-router';
const router = useRouter();

// Reactive variables
const nombre = ref("");
const email = ref("");
const password = ref("");

// Method to handle form submission
const enviarFormulario = () => {
    axios
        .post("/register", {
            nombre_usuario: nombre.value,
            correo: email.value,
            contraseña: password.value,
            id_rol: 2
        })
        .then((res) => {
            // Redirect to login upon success
            router.push("/");
            alert("Usuario registrado correctamente")
        })
        .catch((err) => {
            // Show an alert on error
            alert("Error al registrar al usuario " + err);
        });
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