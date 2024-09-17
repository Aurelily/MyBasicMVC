<?php
/**
 * Class Routeur
 * Créer les routes et trouver les controllers
 */
class Routeur
{
    private $request;

    private $routes = ["home"=>"home", "profile"=>"profile"];

    public function __construct($request){
        $this->request = $request;
    }

    public function renderController(){

        /* A la place de mettre des if / elseif ou des switch case comme ci dessous, on peut aussi mettre toutes les routes dans un tableaux $routes,
         les clés sont les noms des routes et les valeur le nom des fichiers controller associé
         Du coup on aura qu'a tester que le nom de la route existe dans ce tableau et l'associer à un controller
         Par contre pour simplifier on mettra le même nom aux fichiers controller qu'aux routes pour qu'on ai a y ajouter seulement une extension .php

        if($this->request == 'home'){
            include_once CONTROLLER.'HomeController.php';
        }else if($this->request == 'profile'){
            include_once CONTROLLER.'ProfilController.php';
        }else{
            echo "erreur 404";
        }*/

        $request = $this->request;

        if(key_exists($request, $this->routes))
        {
            $controller = $this->routes[$request];
            include_once(CONTROLLER.$controller.'.php');
        }else{
            echo "erreur 404";
        }


        
    }

}