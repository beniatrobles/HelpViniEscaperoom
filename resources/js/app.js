
import "./bootstrap";
import { createApp } from "vue";

import App from "./App.vue";
import { createRouter, createWebHistory } from 'vue-router';


const routes = [
    {
        path: '/',
        component: () => import('./Home.vue'),
    },
    {
        path: '/about',
        component: () => import('./About.vue'),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


const app = createApp(App);
app.use(router);
app.mount('#app');