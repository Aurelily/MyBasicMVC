<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ASSETS;?>css/styles.css">
        <title>home</title>
    </head>
    <header>
        <nav>
            <ul>
            <li><a href="home">Home page</a></li>
            <li><a href="profile">Profil</a></li>
            </ul>
        </nav>
    </header>

    <!-- Ici ma page qui arrive  -->
    <?= $contenu ?>


    <footer>
        <p>Ceci est le footer du site</p>
    </footer>
</html>