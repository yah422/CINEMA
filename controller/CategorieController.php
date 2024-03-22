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
    

    $requeteCategorie = $pdo -> prepare ("SELECT
    genrecine.nom_genreCine,
    COUNT(film.id_film) AS nombre_films
    FROM
    genrecine
    LEFT JOIN categorie ON genrecine.id_genreCine = categorie.id_genreCine
    LEFT JOIN film ON categorie.id_film = film.id_film
    GROUP BY
    genrecine.nom_genreCine
    WHERE id_genreCine= :id;");
    $requeteCategorie -> execute(["id"=> $id]);

    // ^^On relie par un "require" la vue qui nous intéresse
    require "view/categorie/detailCategorie.php";

  }
}
?>