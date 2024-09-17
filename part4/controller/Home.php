<?php 

// On passe le controller en objet classe avec une methode showHome() qui fera le render de la page home

/**
 * Classe Home
 * Sert à rendre la home page
 */
class Home
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

        /* var_dump($users); */
        include_once VIEW.'home.php';

    }

}
