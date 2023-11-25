<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ name }}</div>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Test',
            age: 22,
        }
    },

    components: {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
