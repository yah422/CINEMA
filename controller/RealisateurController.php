<?php 

// ^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class RealisateurController {
// ^^--------------- LISTER LES Realisateurs ---------------
  public function listRealisateur(){

    // ^^On se connecte
    $pdo = Connect::seConnecter();

      // ^^On exécute la requête de notre choix
      $requete = $pdo -> query("SELECT id_realisateur,
      CONCAT(prenom_personne, ' ',nom_personne ) as reali
      FROM realisateur
      INNER JOIN personne ON personne.id_personne = realisateur.id_personne
    ");

    // ^^On relie par un "require" la vue qui nous intéresse
    require "view/realisateur/listRealisateurs.php";
  }

  //  ^^ ------------- DETAILS REALISATEURS --------------

  public function detailRealisateur($id){

    $pdo= Connect::seConnecter();

    $requete = $pdo -> prepare("SELECT  
      CONCAT(prenom_personne, ' ',nom_personne ) as reali
      FROM realisateur
      INNER JOIN personne ON personne.id_personne = realisateur.id_personne
      WHERE realisateur.id_realisateur= :id;"
    );

    $requete -> execute(["id"=> $id]);
    

    $requeteRealisateur = $pdo -> prepare ("SELECT
      nom_personne,
      prenom_personne,
      dateNaissance,
      sexe_personne
      FROM realisateur
      INNER JOIN personne ON personne.id_personne = realisateur.id_personne
      WHERE realisateur.id_realisateur= :id;"
    );

    $requeteRealisateur -> execute(["id"=> $id]);

    require "view/realisateur/detailRealisateur.php";

  }
}