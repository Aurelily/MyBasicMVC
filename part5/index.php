<?php
include_once "Autoloader.php";


// On charge toutes les classes au lancement de l'index et on pourra supprimer tous les includes des autres fichiers
Autoloader::start();

// Ici on charge le routeur. C'est le coeur de l'application

// On va faire des routes de ce type http://localhost/MyBasics-API/fullstack-php-js-natif/index.php?p=home
// Ensuite on fera une réécriture de ça dans le htaccess pour avoir juste http://localhost/MyBasics-API/fullstack-php-js-natif/home

$request = $_GET['p'];

// Je crée cette fois un vrai routeur à partir d'une classe Routeur.php et d'une méthode renderConroller qui sera chargé de rendre la View
$routeur = new Routeur($request);
$routeur->renderController();



