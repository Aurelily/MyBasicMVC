<?php
// On doit par contre include les controller pour utiliser les classes. Dans la prochaine partie, on utilisera un autoload pour éviter celà
include_once(CONTROLLER.'Home.php');
include_once(CONTROLLER.'Profile.php');

/**
 * Class Routeur
 * Créer les routes et trouver les controllers
 */
class Routeur
{
    private $request;

    //
    private $routes = [
        "home"=>["controller"=>'Home', "method"=>"showHome"],
        "profile"=>["controller"=>'Profile', "method"=>"showProfile"]
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

            // On va utiliser nos nouveaux controller objets
            $currentController = new $controller();
            $currentController->$method();
        }else{
            echo "erreur 404";
        }


        
    }

}