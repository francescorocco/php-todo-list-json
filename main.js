const { createApp } = Vue

createApp({
    data() {
        return {
            taskList: [],
            taskItem: '',
        }
    },
    methods: {
        readList() {
            axios.get('server.php')
            .then(response => {
                this.taskList = response.data;
            })
        },
        addTask() {

            const data = {
                newTask: this.taskItem,
            };

            axios.post('server.php', data,
            {
                headers: { 'Content-Type': 'multipart/form-data'}
            }
            ).then(response => {
                this.taskList = response.data;
                this.taskItem = '';
            });
        },


        doneUndone(i){
            const data ={
                selector : i,
            }; 
            axios.post('server.php', data,
            {
                headers: { 'Content-Type': 'multipart/form-data'}
            }
            ).then(response => {
                this.taskList = response.data;
            });
        },

        deleteTask(i){
            const data ={
                deleted : i,
            }; 
            axios.post('server.php', data,
            {
                headers: { 'Content-Type': 'multipart/form-data'}
            }
            ).then(response => {
                this.taskList = response.data;
            });
        },
    },
    mounted() {
        this.readList();
    }
}).mount('#app')