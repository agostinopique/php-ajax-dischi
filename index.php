<?php

    include __DIR__.'/assets/database/json.php';

    // var_dump($dischi);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE -->
    <link rel="stylesheet" href="./assets/style/style.css">

    <title>Dischi PHP</title>
</head>
<body>
    <header class="header">
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
        <?php foreach($dischi as $disco): ?>
        <div class="card-container">
            <div class="disc-img">
                <img 
                src="<?php echo $disco["poster"]?>" 
                alt="<?php echo $disco["title"] ?>">
            </div>
            <div class="disc-text">
                <h4><?php echo $disco["title"]?></h4>
                <span class="album-title"><?php echo $disco["author"]?></span>
                <span><?php echo $disco["year"]?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    </main>
</body>
</html>