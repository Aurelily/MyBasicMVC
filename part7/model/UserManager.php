<?php

// On appele ce genre de classe Entity manager.
// Elle contient toutes les fonctions du CRUD d'une classe associée


class UserManager extends Db 
{

    function __construct() {

        parent::__construct($this->bdd);
    }
  

    public function findAll(){

   

        $query = "SELECT * from users";
       
        $req = $this->bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)){

            $user = new User();
            $user->setId($row['id']);
            $user->setPseudo($row['pseudo']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);


            $users[]=$user;  // On crée un tableau d'objets que l'on va retourner à la fin de la fonction
            
        };

        return $users; // Ici le retour est un objet
    }

    public function findById($id){


        $query = "SELECT * FROM users WHERE id = :id";
       
        $req = $this->bdd->prepare($query);
        $req->bindParam(':id', $id, PDO::PARAM_INT); // lie l'ID au paramètre de la requête
        $req->execute();

        $user = $req->fetch(PDO::FETCH_ASSOC); // récupère directement l'utilisateur dans un tableau associatif

        return $user; // Ici le retour est un tableau asoociatif
    }

}