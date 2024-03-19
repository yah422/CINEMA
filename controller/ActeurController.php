<?php 

// On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class ActeurController {
// --------------- LISTER LES ACTEURS ---------------
    public function listActeur(){

        // On se connecte
        $pdo= Connect::seConnecter();

         // On exécute la requête de notre choix
         $requete = $pdo -> query("
         SELECT
         nom_personne,
         prenom_personne
         FROM Acteur 
         INNER JOIN personne ON personne.id_personne = acteur.id_personne;
     ");

     // On relie par un "require" la vue qui nous intéresse
     require "view/acteur.php";

}
    // public function detActeur($id){
        
    //     $pdo= Connect::seConnecter();

    //     $requete = $pdo -> prepare("SELECT * FROM acteur WHERE id_acteur = :id");
    //     $requete -> execute(["id"=> $id]);
    //     require "view/acteur/detailActeur.php";
    // }


}