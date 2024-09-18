<?php 


/**
 * Classe CreateUserController
 * Sert à rendre la page de creation d'un user
 */
class CreateFormController
{
    public function showCreateForm(){

        // Creation d'un model UserManager pour gérer le SQL et un Model User qui contient juste les setters et les getters
    /*     $manager = new UserManager();
        $form = $manager->createUser();
 */

        $variables = [];

        // On génère la vue de la home page via l'objet AbstractController et la methode render() créée
        $myView = new AbstractController('createForm');
        $myView->render($variables);


    }

    public function addUser(){

        $values = [
            'pseudo' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password']
        ];

        $manager = new UserManager();
        $form = $manager->createUser($values['pseudo'], $values['email'], $values['password'], $values['confirm_password']);

        $myView = new AbstractController();
        $myView->redirect('home');

    }

}
