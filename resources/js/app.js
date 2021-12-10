import { createApp } from "vue";
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue';
import {routes} from './routes';


const history=createWebHistory();
const router=createRouter({
    history,
    routes: routes
});
createApp(App).use(router).mount("#app");



