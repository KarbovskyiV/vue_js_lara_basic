<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in personsAgeMoreTwenty">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",

    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Name',
                    age: 22,
                    job: 'coach',
                },
                {
                    id: 2,
                    name: 'Name 2',
                    age: 23,
                    job: 'second coach',
                },
                {
                    id: 3,
                    name: 'Name 3',
                    age: 24,
                    job: 'third coach',
                },
                {
                    id: 4,
                    name: 'Name 4',
                    age: 19,
                    job: 'fourth coach',
                },
                {
                    id: 5,
                    name: 'Name 5',
                    age: 26,
                    job: 'fifth coach',
                },
            ]
        }
    },

    methods: {

    },

    computed: {
        personsAgeMoreTwenty() {
            return this.persons.filter(function (person) {
                return person.age > 20
            })
        }
    },

    components: {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
