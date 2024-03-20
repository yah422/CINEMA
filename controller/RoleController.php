<?php 

// ^^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class RoleController {
// ^--------------- LISTER LES ROLES ---------------
    public function listRole(){

        // ^^On se connecte
        $pdo= Connect::seConnecter();

         // ^^On exécute la requête de notre choix
         $requete = $pdo -> query("
         SELECT
         id_role, nom_role
         FROM rolefilm;
         
        ");
    
     // ^^On relie par un "require" la vue qui nous intéresse
     require "view/role/listRoles.php";
   }

   //  ^^ ------------- DETAILS DES ROLES --------------

   public function detailRole($id){

    $pdo= Connect::seConnecter();

    $requete = $pdo -> prepare("SELECT * FROM rolefilm WHERE id_role = :id");
    $requete -> execute(["id"=> $id]);
    

    $requeteRole = $pdo -> prepare ("SELECT
    nom_role
    FROM rolefilm;");

    $requeteActRole = $pdo -> prepare ("SELECT
    personne.nom_personne,
    personne.prenom_personne,
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
  WHERE acteur.id_acteur= :id;
  ");

    require "view/role/detailRole.php";

   }
  
}