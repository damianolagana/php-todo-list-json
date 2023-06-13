<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to-do-LIST</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
<div id="app">
    <div class="container-fluid bg-dark" style="height: 100vh;">
        <div class="container bg-light py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="red">To Do List</h1>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-dark" @click="getData">Genera Lista</button>

                </div>
                <div class="col-12 text-center">
                    <ul>
                        <template v-for="(item,i) in toDoList">
                            <li>{{item.name}}</li>
                        </template>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="./main.js"></script>
 
</body>
</html>