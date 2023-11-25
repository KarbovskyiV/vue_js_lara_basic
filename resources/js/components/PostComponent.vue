<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ name }}</div>
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

    components: {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
