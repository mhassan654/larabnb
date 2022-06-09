import { createRouter, createWebHistory } from 'vue-router'

import ExampleComponent from "../components/ExampleComponent.vue"
import About from "../pages/about.vue";
import Bookables from "../bookables/Bookables.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Bookables,
    },
    {
        path: "/about",
        name: "about",
        component: About,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes
})
