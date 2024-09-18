Dans cette partie :
- J'ai crée dans model une classe Db avec la connexion à la base de donnée
- Une classe User qui ne contient que des getter et des setters
- Une classe UserManager en guise d'entity manager qui contiendra les fonctions du CRUD de USER (ici juste findAll et findById)
- J'ai ensuite modifié les views des deux pages pour réupérer les information au bon format en fonction du retour des fonctions (soit objet avec ->get ou tableau avec [])

