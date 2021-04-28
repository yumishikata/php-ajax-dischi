<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <img src="img/spotify.png" alt="">
    </header>

    <main>
        <?php 
            include 'database.php'; 
            foreach ($database as $disco) { ?>

                <div class="card">
                    <img src="<?php echo $disco['poster'] ?>" alt="">
                    <h3> <?php echo $disco['title'] ?> </h3>
                    <p> <?php echo $disco['author'] ?></p>
                    <h3> <?php echo $disco['year'] ?></h3>
                </div>
              
        <?php  } ?>
        
    </main>
</body>
</html>