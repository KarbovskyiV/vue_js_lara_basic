<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",

    data() {
        return {

        }
    },

    mounted() {
        this.getPosts()
    },

    methods: {
        getPosts() {
            axios.get('/posts')
                .then(function (data) {
                    console.log(data);
                })
        }
    },

    computed: {

    },

    components: {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
