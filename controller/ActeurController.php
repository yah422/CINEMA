<?php 

// ^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class ActeurController {
    // ^^--------------- LISTER LES ACTEURS ---------------
    public function listActeur(){

        // ^^On se connecte
        $pdo= Connect::seConnecter();

        // ^^On exécute la requête de notre choix
        $requete = $pdo -> query("SELECT
        CONCAT(prenom_personne, ' ',nom_personne ) as acteurs,
        acteur.id_acteur
        FROM Acteur 
        INNER JOIN personne ON personne.id_personne = acteur.id_personne;
        ");
        // $requete -> execute(["id => $id"]);

        // ^^On relie par un "require" la vue qui nous intéresse
        require "view/acteur/listActeurs.php";
    }
    // ^^ ----------- AFFICHER LES DETAILS ACTEURS ------------
    public function detailActeur($id){
        
        $pdo= Connect::seConnecter();

        $requete = $pdo -> prepare("SELECT * FROM acteur WHERE id_acteur = :id");
        $requete -> execute(["id"=> $id]);
        

        $requeteActeur = $pdo -> prepare ("SELECT
            CONCAT(prenom_personne, ' ',nom_personne ) as acteurs,
            personne.dateNaissance,
            personne.sexe_personne,
            film.titre_film,
            rolefilm.nom_role
        FROM
            acteur
        INNER JOIN
            personne ON acteur.id_personne = personne.id_personne
        INNER JOIN 
            jouer ON acteur.id_acteur = jouer.id_acteur
        INNER JOIN 
            rolefilm ON jouer.id_role = rolefilm.id_role
        INNER JOIN 
            film ON jouer.id_film = film.id_film
        WHERE 
            acteur.id_acteur = :id");
        $requeteActeur -> execute(["id"=> $id]);

        require "view/acteur/detailActeur.php";
    }

}