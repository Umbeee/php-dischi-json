<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>php-dischi-json</title>
</head>
<body>
    <div id="app" class="vh-100">

        <header>
            <img src="spotify-logo-spotify-symbol-3.png" alt="" class="logo">
            <h1 class="py-3 text-center">Spoty-web:</h1>
        </header>
 

        <div class="container">
            <div class="row row-gap-3">
                <div class="col-4 card" v-for="(elem, index) in data" :key="index" @click="cardCliccata(index)">
                    <a href="/"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img :src="elem.poster" :alt="elem.title" class="w-100 img-fluid">
                    <h4>{{ elem.title }}</h4>
                    <h5>{{elem.year}} - {{ elem.author }}</h5>
                    </a>

                </div>
            </div>

        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body">
                    
                    <img :src="discDetails.poster" :alt="discDetails.title" class="w-100 img-fluid">
                    <h4>{{ discDetails.title }}</h4>
                    <h5>{{discDetails.year}} - {{ discDetails.author }}</h5>
                   

    
            </div>

            </div>
        </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="main.js"></script>
</body>
</html>