<?php 

// ^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class CategorieController {
  // ^^--------------- LISTER LES ACTEURS ---------------
  public function listCategorie(){

    // ^^On se connecte
    $pdo= Connect::seConnecter();

    // ^^On exécute la requête de notre choix
    $requete = $pdo -> query("SELECT
    id_genreCine,
    nom_genreCine
    FROM genrecine;
    ");

    // ^^On relie par un "require" la vue qui nous intéresse
    require "view/categorie/listCategories.php";
  }

  //  ^^ ------------- DETAILS CATEGORIES --------------

  public function detailCategorie($id){
    
    // ^^On se connecte
    $pdo= Connect::seConnecter();

    // ^^On exécute la requête de notre choix
    $requete = $pdo -> prepare("SELECT * FROM genreCine WHERE id_genreCine = :id");
    $requete -> execute(["id"=> $id]);
    
    // ^^Afficher les films par categories
    $requeteCategorie = $pdo -> prepare ("SELECT genrecine.nom_genreCine, film.titre_film, film.id_film, genrecine.id_genreCine, CONCAT (personne.nom_personne, ' ', personne.prenom_personne) AS realisateurName, realisateur.id_realisateur, film.affiche_film, film.note_film
    FROM genrecine
    INNER JOIN categorie ON categorie.id_genreCine = genrecine.id_genreCine
    INNER JOIN film ON categorie.id_film = film.id_film
    INNER JOIN realisateur ON realisateur.id_realisateur = film.id_realisateur
    INNER JOIN personne ON personne.id_personne = realisateur.id_personne
    WHERE genrecine.id_genreCine = :id");
    $requeteCategorie -> execute(["id"=> $id]);

    // ^^On relie par un "require" la vue qui nous intéresse
    require "view/categorie/detailCategorie.php";

  }

  // ^^ Ajouter un genre
  public function ajoutCategorie() {
    if(isset($_POST["submit"])) {
      $nom_genreCine = filter_input(INPUT_POST, "nom_genreCine", FILTER_SANITIZE_SPECIAL_CHARS);
      if($nom_genreCine) {
        $pdo = Connect::seConnecter();
        $requeteAjouterGenre = $pdo->prepare("
        INSERT INTO genrecine(nom_genreCine)
        VALUES (:nom_genreCine)");
        $requeteAjouterGenre->execute(["nom_genreCine" => $nom_genreCine]);
        
        $_SESSION["message"] = "La catégorie a bien été ajouté ! <i class='fa-solid fa-check'></i>";
        header("Location: index.php?action=listCategorie");
      } else {
          $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
      }
    }
      require "view/categorie/ajoutCategorie.php";
  }
    
  }

?>