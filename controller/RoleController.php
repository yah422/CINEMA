<?php 

// ^^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class RoleController {
// ^--------------- LISTER LES Realisateurs ---------------
    public function listRole(){

        // ^^On se connecte
        $pdo= Connect::seConnecter();

         // ^^On exécute la requête de notre choix
         $requete = $pdo -> query("
         SELECT
         nom_role
         FROM rolefilm;
         
        ");
    
     // ^^On relie par un "require" la vue qui nous intéresse
     require "view/role.php";
   }
}