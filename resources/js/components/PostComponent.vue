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
        console.log(this.$refs.index.indexLog());
    },

    methods: {
        parentLog() {
            console.log('this is parent component');
        }
    },

    components: {
        CreateComponent,
        IndexComponent,
    }
}
</script>

<style scoped>

</style>
