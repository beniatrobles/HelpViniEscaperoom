import "./bootstrap";
import { createApp } from "vue";
import "../css/app.css";

import App from "./components/App.vue";
import {router} from "./routes"

const app = createApp(App);
app.use(router);
app.mount('#app');
