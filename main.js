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
                newTask: {
                    'text' : this.taskItem,
                    'done' : false,
                }
            };

            axios.post('server.php', data,
            {
                headers: { 'Content-Type': 'multipart/form-data'}
            }
            ).then(response => {
                this.taskList = response.data;
                this.taskItem = '';
            });
        }
    },
    mounted() {
        this.readList();
    }
}).mount('#app')