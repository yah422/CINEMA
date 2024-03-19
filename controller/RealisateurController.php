<?php 

// On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class RealisateurController {
// --------------- LISTER LES ACTEURS ---------------
    public function listCategorie(){

        // On se connecte
        $pdo= Connect::seConnecter();

         // On exécute la requête de notre choix
         $requete = $pdo -> query("
         SELECT
         nom_personne,
         prenom_personne
         FROM realisateur
         INNER JOIN personne ON personne.id_personne = realisateur.id_realisateur;
         
        ");
    
     // On relie par un "require" la vue qui nous intéresse
     require "view/realisateur.php";
   }
}