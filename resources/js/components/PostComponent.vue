<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ name }}</div>
        <div>Job: {{ nameJob }}</div>
        <button @click="sayHello">Hello</button>
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

    methods: {
      sayHello() {
          console.log('Hello');
      }
    },

    computed: {
        nameJob() {
            return this.name + ' works at IT'
        }
    },

    components: {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
