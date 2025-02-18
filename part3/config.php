<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

// Décommenter pour voir toutes les variables SERVER disponibles
// echo '<pre>'; print_r($_SERVER); exit;


// J'utilise ces variables SERVER dans des constante pour avoir les liens absolus
$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];

define('HOST', 'http://'.$host.'/MyBasicMVC/part3/');
define('ROOT', $root.'/MyBasicMVC/part3/');

define('CONTROLLER', ROOT.'controller/');
define('VIEW', ROOT.'view/');
define('MODEL', ROOT.'model/');
define('CLASSES', ROOT.'classes/');

// On part de HOST et pas de ROOT pour assets car l'acces au css se fait via une URL et pas un Emplacement dans un dossier
define('ASSETS', HOST.'assets/'); 