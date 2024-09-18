Dans cette partie :
- J'ai crée une view createForm avec un formulaire pour ajouter un utilisateur à la bdd
- Du coup j'ai mis 2 methodes dans le CreateFormController :
    Une pour afficher le formulaire dans la view
    Une pour créer le user en BDD en utilisant la metode createUser du UserManager

- Dans l'abstractController, en plus d'une méthode render qui rend les view, j'ai ajouté une methode redirect qui me servira à faire des redirections vers des routes
ATTENTION : ne pas oublier de rajouter ces routes et ces methodes dans le routeur pour pouvoir les utiliser