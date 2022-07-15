import { createRouter, createWebHistory } from 'vue-router'

import About from "../pages/about.vue";
import Bookables from "../bookables/Bookables.vue";
import Bookable from "../bookables/Bookable.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: Bookables,
    },
    {
        path: "/bookable/:id",
        name: "bookable",
        component: Bookable,
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
