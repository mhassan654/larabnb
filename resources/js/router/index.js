import { createRouter, createWebHistory } from 'vue-router'

import ExampleComponent from "../components/ExampleComponent.vue"

const routes = [
    {
        path: "/dashboard",
        name: "home",
        component: ExampleComponent,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes
})
