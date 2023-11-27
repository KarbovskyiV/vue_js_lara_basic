import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/people', component: () => import('./components/Person/Index.vue'),
        name: 'person.index'
    }
]

const router = createRouter({
    history: createWebHistory(),

    routes,
})
export default router;
