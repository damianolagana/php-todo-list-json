const { createApp } = Vue

createApp({
    data() {
        return {
        apiUrl: 'api.php'
        }
    },
    methods: {
        getData(){
            axios.get(this.apiUrl).then((response)=>{
                console.log("Dati ricevuti: ", response.data)
            })
        }
    },
    mounted(){
        this.getData();
    }

}).mount('#app');
