require('./bootstrap');

// import VueRouter from "vue-router";
import { createApp } from "vue";
import router from '../js/router'

import ExampleComponent from './components/ExampleComponent.vue'
// 5. Create and mount the root instance.
const app = createApp({
    components: {
        ExampleComponent,
    },
});

app.use(router).mount("#app");
