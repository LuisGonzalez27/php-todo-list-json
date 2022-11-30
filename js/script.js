const { createApp } = Vue;
createApp({

    data() {
        return {
            myList: [],
        };
    },
    created() {
        axios.get("server.php").then((resp) => {
            this.myList = resp.data;
            console.log(this.myList);
        });
    },

}).mount('#app');