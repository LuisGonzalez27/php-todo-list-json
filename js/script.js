const { createApp } = Vue;

createApp({
    data() {
        return {
            newTodoText: '',
            todoList: [],
            apiUrl: "./server.php",
        };
    },
    methods: {
        getTodo() {
            axios.get(this.apiUrl).then((res) => {
                this.todoList = res.data;
            });
        },
        addTodo() {
            const data = {
                newTodoText: this.newTodoText,
            };
            axios
                .post(this.apiUrl, data, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((res) => {
                    this.getTodo();
                    this.newTodoText = "";
                });
        },
        changeStatus(index) {
            const todoListData = {
                toggleTask: index,
            };
            axios
                .post(this.apiUrl, todoListData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((res) => {
                    this.getTodo();
                });
        },
        removeTask(index) {
            const todoListData = {
                deleteTask: index,
            };
            axios
                .post(this.apiUrl, todoListData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((res) => {
                    console.log(res.data);
                    this.getTodo();
                });
        },
    },

    mounted() {
        this.getTodo();
    },
}).mount("#app");