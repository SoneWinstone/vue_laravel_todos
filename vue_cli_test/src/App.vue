<template>
  <div id="app">
    <img src="./assets/logo.png">
    <!--<hello></hello>-->
    <todos :todos="todos"></todos>
    <new-todo :todos="todos"></new-todo>
    <!--<iview></iview>-->
  </div>
</template>

<script>
import Hello from './components/Hello'
import Todos from './components/todoItems'
import newTodo from './components/addNewTodo.vue'

export default {
  name: 'app',
  components: {
    Hello, Todos, newTodo, iview
  },
  data() {
      return {
          todos: [
              {id:1, title:'First', completed: false}
          ],
      }
  },
  // 加载完毕后立即执行
  mounted() {
    this.axios.get('http://127.0.0.1:8000/todos/all').then((response) => {
      this.todos = response.data;
    })
  },
  computed: {
      todoCount() {
          return this.todos.length;
      }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
