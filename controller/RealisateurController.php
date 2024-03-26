<?php 

//^^ Utilisation de "use" pour accéder à la classe Connect située dans le namespace "Model"
namespace Controller;
use Model\Connect;

class RealisateurController {
  
  // &LISTER LES Realisateurs
  public function listRealisateur(){

    // &Connexion à la base de données
    $pdo = Connect::seConnecter();

    // &Exécution de la requête
    $requete = $pdo->query("SELECT id_realisateur,
      CONCAT(prenom_personne, ' ',nom_personne ) as reali
      FROM realisateur
      INNER JOIN personne ON personne.id_personne = realisateur.id_personne
    ");

    //& Inclusion de la vue
    require "view/realisateur/listRealisateurs.php";
  }

  // ^^ DETAILS REALISATEURS
  public function detailRealisateur($id){

    $pdo = Connect::seConnecter();

    $requete = $pdo->prepare("SELECT  
      CONCAT(prenom_personne, ' ',nom_personne ) as reali
      FROM realisateur
      INNER JOIN personne ON personne.id_personne = realisateur.id_personne
      WHERE realisateur.id_realisateur= :id;"
    );

    $requete->execute(["id"=> $id]);
    

    $requeteRealisateur = $pdo->prepare ("SELECT
      nom_personne,
      prenom_personne,
      dateNaissance,
      sexe_personne
      FROM realisateur
      INNER JOIN personne ON personne.id_personne = realisateur.id_personne
      WHERE realisateur.id_realisateur= :id;"
    );

    $requeteRealisateur->execute(["id"=> $id]);

    require "view/realisateur/detailRealisateur.php";

  }

  // ^^ Ajouter un realisateur
  public function AjoutRealisateur(){
    $pdo = Connect::seConnecter();
    if(isset($_POST["submitRealisateur"])){

      $prenom_personne = filter_input(INPUT_POST, "prenom_personne", FILTER_SANITIZE_SPECIAL_CHARS);
      $nom_personne = filter_input(INPUT_POST, "nom_personne", FILTER_SANITIZE_SPECIAL_CHARS);
      $sexe_personne = filter_input(INPUT_POST, "sexe_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $dateNaissance = filter_input(INPUT_POST, "dateNaissance", FILTER_SANITIZE_SPECIAL_CHARS);
      
      if($prenom_personne && $nom_personne && $sexe_personne && $dateNaissance){
          $requeteAjouterPersonne = $pdo->prepare("INSERT INTO personne (prenom_personne, nom_personne, sexe_personne, dateNaissance) 
          VALUES (:prenom_personne, :nom_personne, :sexe_personne, :dateNaissance)");
          $requeteAjouterPersonne->execute([
              "prenom_personne" => $prenom_personne,
              "nom_personne" => $nom_personne,
              "sexe_personne" => $sexe_personne,
              "dateNaissance" => $dateNaissance]);
          $id_realisateur = $pdo->lastInsertId();
          $requeteAjouterRealisateur = $pdo->prepare("INSERT INTO realisateur (id_personne) VALUES (:id_personne)");   
          $requeteAjouterRealisateur->execute(["id_personne" => $id_realisateur]);
      }
      $_SESSION["message"] = "Le réalisateur a bien été ajouté ! <i class='fa-solid fa-check'></i>";
      header("Location: index.php?action=listRealisateur");
    } else {
        $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
    }
    require "view/realisateur/ajoutRealisateur.php";
}

// ^^ Supprimer un réalisateur
public function supprimeRealisateur($id){
  if(isset($id)) {
    $pdo = Connect::seConnecter();
    // ^^ on supprime d'abord la table film
    $requeteSupprimeFilmR = $pdo->prepare("DELETE FROM film WHERE id_realisateur=:id");
    $requeteSupprimeFilmR -> execute(["id" => $id]);
    // ^^ on supprime ensuite la table realisateur
    $requeteSupprimerReal = $pdo->prepare("DELETE FROM realisateur WHERE id_realisateur=:id");
    $requeteSupprimerReal-> execute(["id" => $id]);

    $_SESSION["message"] = "La catégorie a bien été supprimé ! <i class='fa-solid fa-check'></i>";
    header("Location: index.php?action=listRealisateur");
  } else {
      $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
  
}

}

}



