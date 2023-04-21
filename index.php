<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>To Do list</title>
</head>
<body>

    <div id="app">
    <div class="container">
            <ul class="list-group w-50 m-auto">
                <li v-for="(task,i) in taskList" class="list-group-item d-flex justify-content-between" :class="{'text-decoration-line-through' : task.done }" :key="i">
                    <div @click="doneUndone(i)">
                        {{task.text}}
                    </div>
                    <button type="button" class="btn btn-danger" @click="deleteTask(i)"><i class="fa-solid fa-trash"></i></button>
                </li>
            </ul>
            <div class="w-50 m-auto mt-4">
                <input v-model="taskItem" type="text" class="w-75 h-100"/>
                <button class="btn btn-primary w-25 p-1" @click="addTask" >Aggiungi Task</button>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>
</html>