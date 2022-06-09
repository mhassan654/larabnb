require('./bootstrap');

// import VueRouter from "vue-router";
import { createApp } from "vue";
import router from '../js/router';
import About from './pages/about.vue'
import Index from "./pages/index.vue";

import ExampleComponent from './components/ExampleComponent.vue'
// 5. Create and mount the root instance.
const app = createApp({
    components: {
        ExampleComponent,
        Index,
        About
    },
});

app.use(router).mount("#app");
