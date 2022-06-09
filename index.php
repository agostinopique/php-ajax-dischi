<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- STYLE -->
    <link rel="stylesheet" href="./assets/style/style.css">

    <title>Dischi PHP</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="spotify-logo">
                <a href="#">
                    <img src="./assets/img/logo-small.svg" alt="spotify-logo">
                </a>
            </div>
        </div>
    </header>

    <main>
    <div class="disc-container">
        <div class="card-container">
            <div class="disc-img">
                <img src="AlbumCard.poster" alt="AlbumCard.title">
            </div>
            <div class="disc-text">
                <h4>AlbumCard.title</h4>
                <span class="album-title">AlbumCard.author</span>
                <span>AlbumCard.year</span>
            </div>
        </div>
    </div>

    </main>
</body>
</html>