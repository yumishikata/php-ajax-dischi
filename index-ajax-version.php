<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>PHP AJAX Dischi </title>
</head>
<body>
    <header>
        <img src="img/spotify.png" alt="">
    </header>

    <main id="root">
        <div class="card" v-for="disco in arrayDischi">
            <img :src="disco.poster" alt="">
            <h3>  {{disco.title}}</h3>
            <p>  {{disco.author}}</p>
            <h3>  {{ disco.year }}</h3>
        </div>

    </main>
    <script src="script.js"></script>
</body>
</html>