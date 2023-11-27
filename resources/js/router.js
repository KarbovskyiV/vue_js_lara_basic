import * as VueRouter from "vue-router";
import PostComponent from "./components/PostComponent.vue";
import TagComponent from "./components/TagComponent.vue";

const routes = [
    {
        path: '/posts',
        component: PostComponent,
    },
    {
        path: '/tags',
        component: TagComponent,
    },
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),

    routes,
})
export default router;
