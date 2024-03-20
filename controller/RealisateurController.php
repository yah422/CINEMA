<?php 

// ^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class RealisateurController {
// ^^--------------- LISTER LES Realisateurs ---------------
    public function listRealisateur(){

        // ^^On se connecte
        $pdo= Connect::seConnecter();

         // ^^On exécute la requête de notre choix
         $requete = $pdo -> query("
         SELECT
         nom_personne,
         prenom_personne
         FROM realisateur
         INNER JOIN personne ON personne.id_personne = realisateur.id_realisateur;
         
        ");
    
     // ^^On relie par un "require" la vue qui nous intéresse
     require "view/realisateur/listRealisateurs.php";
   }

   public function detailRealisateur($id){

    $pdo= Connect::seConnecter();

    $requete = $pdo -> prepare("SELECT * FROM realisateur WHERE id_realisateur = :id");
    $requete -> execute(["id"=> $id]);
    

    $requeteRealisateur = $pdo -> prepare (" SELECT
    nom_personne,
    prenom_personne,
    dateNaissance,
    sexe_personne
    FROM realisateur
    INNER JOIN personne ON personne.id_personne = realisateur.id_realisateur;");

    require "view/realisateur/detailRealisateur.php";

   }
}