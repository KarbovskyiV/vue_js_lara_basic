import './bootstrap';
import router from "./router.js";
import {createApp} from 'vue';

const app = createApp({});

app.use(router)

Object.entries(import.meta.glob('./**/*.vue', {eager: true})).forEach(([path, definition]) => {
    app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
});

app.mount('#app');
