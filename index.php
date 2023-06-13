<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to-do-LIST</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
<div id="app">
    <div class="container-fluid bg-dark vh100">
        <div class="container bg-light py-2">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="red">To Do List</h1>
                </div>
                <div class=" col-6 text-center bg-secondary ">
                    <ul class="text-light p-2">
                        <template v-for="(item,i) in todoList">
                            <li>{{item.name}}</li>
                        </template>
                    </ul>
                    <div class="input-group py-2">
                        <input v-model="newTask" type="text" class="form-control" placeholder="Inserisci una nuova attività">
                        <button @click="addNewTask" class="btn btn-light">Aggiungi</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<script src="./main.js"></script>
 
</body>
</html>