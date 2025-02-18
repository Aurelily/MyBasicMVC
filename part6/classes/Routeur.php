<?php


/**
 * Class Routeur
 * Créer les routes et trouver les controllers
 */
class Routeur
{
    private $request;

    //
    private $routes = [
        "home"=>["controller"=>'HomeController', "method"=>"showHome"],
        "profile"=>["controller"=>'ProfileController', "method"=>"showProfile"]
    ];

    public function __construct($request){
        $this->request = $request;
    }

    public function renderController(){

        $request = $this->request;

        if(key_exists($request, $this->routes))
        {
            $controller = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];

            // On va utiliser nos nouveaux controllers objets
            $currentController = new $controller();
            $currentController->$method();
        }else{
            echo "erreur 404";
        }


        
    }

}