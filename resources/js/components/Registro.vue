<template>
    <div class="flex justify-center items-center flex-col h-screen">
        <div class=" w-[300px] mb-2">
            <router-link to="/" class="hover:text-[#0ED800] flex items-center font-bold max-w-max"><span
                    class="text-2xl -translate-y-1">←</span>
                Volver</router-link>
        </div>
        <form @submit.prevent="enviarFormulario"
            class="bg-zinc-1000 flex flex-col justify-center items-center border-[1px]  max-w-[300px] w-[100%] h-[350px] rounded gap-3">
            <h1 class=" mb-6 text-xl">Registrate</h1>
            <input type="text" v-model="nombre" name="nombre" placeholder="Nombre de Usuario" @blur="comprobarNombre"/>
            <p class="-mt-1 text-xs text-red-500">{{ errorNombre }}</p>

            <input type="email" v-model="email" name="email" placeholder="Email" @blur="comprobarEmail"/>
            <p class="-mt-1 text-xs text-red-500">{{ errorEmail }}</p>

            <input type="password" v-model="password" name="password" placeholder="Contraseña" @blur="comprobarContra"/>
            <p class="-mt-1 text-xs text-red-500 text-center">{{ errorPassword }}</p>
            
            <button type="submit"
                class=" relative p-[5px] bg-white text-black w-[50%] rounded flex hover:text-white font-bold">
                <p class="z-[10] text-center w-[100%]">Registrarme</p>
            </button>
        </form>
        <router-link to="/login" class="mt-3 hover:text-[#0ED800]">¿Tienes ya cuenta?</router-link>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import { useRouter } from 'vue-router';
const router = useRouter();


const nombre = ref("");
const email = ref("");
const password = ref("");

const errorNombre = ref('')
const errorEmail = ref('')
const errorPassword = ref('')

const enviarFormulario = () => {
    if(nombre.value.trim() === ""){
        errorNombre.value = 'El campo nombre no puede estar vacio'
    }

    if (email.value.trim() === "") {
    errorEmail.value = "El email no puede estar vacío.";
    }

    if (password.value.trim() === "") {
        errorPassword.value = "La contraseña no puede estar vacía.";
    }
    
    if(!errorNombre.value && !errorEmail.value && !errorPassword.value){ //si no hay ningun error
        axios
        .post("/register", {
            nombre_usuario: nombre.value,
            correo: email.value,
            contraseña: password.value,
            id_rol: 2
        })
        .then((res) => {
            // Redirect to login upon success
            router.push("/login");
            alert("Usuario registrado correctamente")
        })
        .catch((err) => {
            // Show an alert on error
            alert("Error al registrar al usuario " + err);
        });
    }
    
};

const comprobarNombre = () =>{
    if(nombre.value.trim() == ''){
        errorNombre.value = 'El nombre no puede estar vacío'
    }else errorNombre.value = '';
 
}

const comprobarEmail = () =>{
    const regex = /^[a-zA-Z0-9]{1,}@[a-zA-Z]{1,}.[a-zA-Z]{2,4}$/
    if(email.value == ''){
        errorEmail.value = 'El correo no puede estar vacío.'
    }else if(!regex.test(email.value)){
        errorEmail.value = 'Introduce un correo válido.'
    }else errorEmail.value = ''
}

const comprobarContra = () =>{
    const regex = /^(?=.*\d)(?=.*[A-Z]).{6,}$/
    if(password.value.trim() == ''){
        errorPassword.value = 'Intrduce una contraseña.'
    }else if(!regex.test(password.value)){
        errorPassword.value = 'La contraseña debe tener al menos 6 caracteres, una letra mayúscula y un número.'
    }else errorPassword.value = '';
}
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