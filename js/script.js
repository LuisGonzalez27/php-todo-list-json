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
    },

    mounted() {
        this.getTodo();
    },
}).mount("#app");