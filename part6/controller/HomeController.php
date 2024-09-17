<?php 

// On passe le controller en objet classe avec une methode showHome() qui fera le render de la page home

/**
 * Classe Home
 * Sert à rendre la home page
 */
class HomeController
{
    public function showHome(){
        $query = "SELECT * from users";
        $bdd = new PDO("mysql:host=localhost;dbname=calanques;charset=utf8", "root", "");
        $req = $bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            $user['pseudo'] = $row['pseudo'];
            $user['email'] = $row['email'];

            $users[]=$user;
        }

        $variables = [
            'users' => $users,
        ];

        // On génère la vue de la home page via l'objet View et la methode render() crée dans classes
        $myView = new AbstractController('home');
        $myView->render($variables);


    }

}
