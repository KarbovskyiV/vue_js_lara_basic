<template>
    <div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent.vue";
import IndexComponent from "./IndexComponent.vue";

export default {
    name: "PostComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {
    },

    methods: {
    },

    components: {
        CreateComponent,
        IndexComponent,
    }
}
</script>

<style scoped>

</style>
