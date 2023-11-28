import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/people', component: () => import('./components/Person/Index.vue'),
        name: 'person.index'
    },
    {
        path: '/people/create', component: () => import('./components/Person/Create.vue'),
        name: 'person.create'
    },
]

const router = createRouter({
    history: createWebHistory(),

    routes,
})
export default router;
