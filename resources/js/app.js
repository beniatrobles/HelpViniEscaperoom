import "./bootstrap";
import { createApp } from "vue";
import { createPinia } from 'pinia';
import "../css/app.css";

import App from "./components/App.vue";
import {router} from "./routes"

const pinia = createPinia();
const app = createApp(App);
app.use(router).use(pinia);
app.mount('#app');
