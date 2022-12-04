<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- axios -->
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo</title>
</head>

<body>
    <div id="app">
        <div class="container pt-5">
            <h1>to do list</h1>
            <div class="add-todo">
                <input type="text" v-model="newTodoText" name="newTodoText">
                <button @click="addTodo">Aggiungi</button>
            </div>
            
            <ul id="todo-list">
                <li v-for="(todo, index) in todoList" :key="index">
                    <div class="todo" :class="todo.done ? 'done' : ''" @click="changeStatus(index)">
                        {{todo.text}}
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>