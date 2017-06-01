<template>
    <ul class="list-group">
        <li v-bind:class="{'completed':todo.completed}" class="list-group-item" v-for="(todo,index) in todos">{{ todo.title }}
            <button v-on:click="removeTodo(index)" class="btn-xs btn-danger pull-right delete">
                Delete
            </button>
            <button v-on:click="change(todo)" v-bind:class="[todo.completed ? 'btn-success pull-right btn-xs' : 'btn-info pull-right btn-xs']">
                {{ todo.completed ? 'completed' : 'undo' }}
            </button>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['todos'],
        methods: {
            removeTodo(index) {
                var todo = this.todos.splice(index, 1)
                this.axios.post('http://127.0.0.1:8000/todos/'+todo[0].id+'/delete', todo[0]).then((response) => {})
            },
            change(todo) {
                todo.completed = !todo.completed;
                this.axios.post('http://127.0.0.1:8000/todos/'+todo.id+'/edit', todo).then((response) => {})
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .completed {
        color: green;
        text-decoration: line-through;
    }
    .delete {
        margin-left: 10px;
    }
</style>
