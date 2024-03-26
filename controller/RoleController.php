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
    rolefilm.id_role,
    nom_role,
    titre_film
    FROM rolefilm
    INNER JOIN jouer ON rolefilm.id_role = jouer.id_role
    INNER JOIN film ON jouer.id_film = film.id_film
    WHERE rolefilm.id_role= :id;");

    $requeteRole -> execute(["id"=> $id]);

    $requeteActRole = $pdo -> prepare ("SELECT
    film.titre_film,
    rolefilm.nom_role
    FROM
      acteur
    INNER JOIN 
      jouer ON acteur.id_acteur = jouer.id_acteur
    INNER JOIN 
      rolefilm ON jouer.id_role = rolefilm.id_role
    INNER JOIN 
      film ON jouer.id_film = film.id_film
    WHERE acteur.id_acteur= :id;
  ");

    $requeteActRole -> execute(["id" => $id]);

    require "view/role/detailRole.php";

   }

  //  ^^ Ajouter un rôle
  public function ajoutRole() {
    if(isset($_POST["submit"])) {
      $nom_role = filter_input(INPUT_POST, "nom_role", FILTER_SANITIZE_SPECIAL_CHARS);

      if($nom_role) {
          $pdo = Connect::seConnecter();
          $requeteAjouterRole = $pdo->prepare("INSERT INTO rolefilm(nom_role)
          VALUES (:nom_role)");
          $requeteAjouterRole->execute (["nom_role" => $nom_role]);
      }
      $_SESSION["message"] = " Le rôle a été ajouter ! <i class='fa-solid fa-check'></i> ";
  
      header("Location:index.php?action=listRole");
    }
    else {
      $_SESSION["message"] = "Une erreur a été détecter, veuillez vérifier les informations entrée";
    }
    require "view/role/ajoutRole.php";
  }

  // ^^ Supprimer un rôle
  public function supprimeRole($id){
    if(isset($id)) {
      $pdo = Connect::seConnecter();
      // ^^ on supprime d'abord la table jouer
      $requeteSupprimeJouer = $pdo->prepare("DELETE FROM jouer WHERE id_role=:id");
      $requeteSupprimeJouer -> execute(["id" => $id]);
      // ^^ on supprime ensuite la table rolefilm
      $requeteSupprimerRole = $pdo->prepare("DELETE FROM rolefilm WHERE id_role=:id");
      $requeteSupprimerRole-> execute(["id" => $id]);
  
      $_SESSION["message"] = "Le rôle a bien été supprimé ! <i class='fa-solid fa-check'></i>";
      header("Location: index.php?action=listRole");
    } else {
        $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
    
  }

  }
  
}