<template>
    <div>
        <router-link :to="{ name: 'person.index' }">People</router-link>
        <router-link :to="{ name: 'person.create' }">Create</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {

        }
    },

    mounted() {

    },
}
</script>


<style scoped>

</style>
