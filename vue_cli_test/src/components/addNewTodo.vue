<template>
    <div class="input-group col-lg-12">
        <form v-on:submit.prevent="addTodo(newTodo)">
            <input type="text" v-model="newTodo.title" class="form-control" placeholder="Add a new todo">
            <button style="margin-top: 5px;" type="submit" class="btn btn-success">Add Todo</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['todos'],
        data() {
            return {
                newTodo: {
                    title: '',
                    completed: false
                }
            }
        },
        methods: {
            addTodo(newTodo) {
                this.todos.push(newTodo)
                this.newTodo = {
                    title: '',
                    completed: false
                }
                newTodo.completed = true;
                this.axios.post('http://127.0.0.1:8000/todos/add', newTodo).then((response) => {})
            },
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
