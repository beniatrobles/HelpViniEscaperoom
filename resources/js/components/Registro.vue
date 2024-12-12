<template>
    <div class="flex justify-center items-center h-screen">
        <form @submit.prevent="enviarFormulario" class="border-[1px] p-[10px]">
            <h1 class="text-center">Registrate</h1>
            <input type="text" v-model="nombre" name="nombre" placeholder="Nombre de Usuario" />
            <br />
            <input type="email" v-model="email" name="email" placeholder="Email"/>
            <br />

            <label for="password">Password</label>
            <input type="password" v-model="password" name="password" />
            <br />

            <button type="submit">Registrarme</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import { router } from "@inertiajs/vue3";

// Reactive variables
const nombre = ref("");
const email = ref("");
const password = ref("");

// Method to handle form submission
const enviarFormulario = () => {
    axios
        .post("/registro", {
            nombre: nombre.value,
            email: email.value,
            password: password.value,
        })
        .then((res) => {
            // Redirect to login upon success
            router.get("/login");
        })
        .catch((err) => {
            // Show an alert on error
            alert("Error al registrar al usuario");
        });
};
</script>
