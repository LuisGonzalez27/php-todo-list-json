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
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>PHP ToDo</title>
</head>

<body>
    <div id="app">
        <div class="container pt-5 my-container">
            <h1 class="center display-1 text-capitalize text-secondary">to do list</h1>
            <div class="add-todo center">
                <ul id="todo-list" class="list-group col-3">
                    <li v-for="(todo, index) in todoList" :key="index" class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="todo" :class="todo.done ? 'done' : ''" @click="changeStatus(index)">
                            {{todo.text}}
                        </div>
                        <span class="icon" @click="removeTask(index)"><i class="fa-solid fa-trash"></i></span>
                    </li>
                    
                    <div class="input-group mb-3 pt-3">
                        <input type="text" class="form-control" v-model="newTodoText" name="newTodoText" aria-label="Recipient's username"
                            aria-describedby="button-addon2"  placeholder="Inserisci elemento...">
                        <button class="btn btn-outline-warning" type="button" id="button-addon2" @click="addTodo">Inserisci</button>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>