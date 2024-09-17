<?php
include_once "config.php";

// Ici on va faire une sorte de router

// On va faire des routes de ce type http://localhost/MyBasics-API/fullstack-php-js-natif/index.php?p=home
// Ensuite on fera une réécriture de ça dans le htaccess pour avoir juste http://localhost/MyBasics-API/fullstack-php-js-natif/home

$request = $_GET['p'];

include_once(CLASSES.'Routeur.php');

// Je crée cette fois un vrai routeur à partir d'une classe Routeur.php et d'une méthode renderConroller qui sera chargé de rendre la View
$routeur = new Routeur($request);
$routeur->renderController();



