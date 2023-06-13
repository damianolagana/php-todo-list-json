const { createApp } = Vue

createApp({
    data() {
        return {
        apiUrl: 'api.php',
        todoList: [],
        newTask: ""
        }
    },
    methods: {
        getData(){
            axios.get(this.apiUrl).then((response)=>{
                console.log("Dati ricevuti: ", response.data)
                this.todoList = response.data;
            })
        },
        addNewTask(){
            console.log("Aggiungi task",this.newTask)
        }
        
    },
    mounted(){
        this.getData();
    }

}).mount('#app');
