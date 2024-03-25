<?php 

// On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class FilmController {
// ^^--------------- LISTER LES FILMS ---------------
    public function listFilm(){

        // ^^On se connecte
        $pdo = Connect::seConnecter();

        // ^^On exécute la requête de notre choix
        $requete = $pdo -> query("SELECT
        film.id_film,
        film.titre_film,
        film.anneeSortie_film
        FROM Film;
        ");

        // ^^On relie par un "require" la vue qui nous intéresse
        require "view/film/listFilms.php";
    }

    public function detailFilm($id){
        
        $pdo= Connect::seConnecter();

        $requete = $pdo -> prepare("SELECT * FROM film WHERE id_film = :id");
        $requete -> execute(["id"=> $id]);
        

        $requeteFilm = $pdo -> prepare ("SELECT
        film.id_film,
        film.titre_film,
        film.anneeSortie_film,
        film.synopsis_film,
        film.note_film,
        TIME_FORMAT(SEC_TO_TIME(film.duree_film*60),'%Hh%imin') AS duree_formatee,
        film.affiche_film,
        CONCAT(personne.nom_personne, ' ', personne.prenom_personne) AS realisateurName
        FROM Film 
        INNER JOIN realisateur ON realisateur.id_realisateur = film.id_realisateur
        INNER JOIN personne ON personne.id_personne = realisateur.id_personne
        WHERE id_film = :id;
        ");
        $requeteFilm -> execute(["id"=> $id]);

        require "view/film/detailFilm.php";
    }

    // ^^ ajout d'un film
    public function ajoutFilm() {
        if(isset($_POST["submitFilm"])) {

            // filtrage des données
            $titre_film = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $anneeSortie_film = filter_input(INPUT_POST, "anneeSortie_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $synopsis_film = filter_input(INPUT_POST, "synopsis_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $note_film = filter_input(INPUT_POST, "note_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $duree_formatee = filter_input(INPUT_POST, "duree_formatee", FILTER_SANITIZE_SPECIAL_CHARS);
            $affiche_film = filter_input(INPUT_POST, "affiche_film", FILTER_SANITIZE_SPECIAL_CHARS);

            if($titre_film && $anneeSortie_film && $synopsis_film && $note_film && $duree_formatee && $affiche_film) {
                $pdo = Connect::seConnecter();
                $requeteAjouterFilm = $pdo->prepare("INSERT INTO film(titre_film, anneeSortie_film, synopsis_film, note_film, duree_formatee, affiche_film) VALUES (:titre_film, :anneeSortie_film, :synopsis_film, :note_film, :duree_formatee, :affiche_film)");
                $requeteAjouterFilm->execute([
                    "titre_film" => $titre_film,
                    "anneeSortie_film" => $anneeSortie_film,
                    "synopsis_film" => $synopsis_film,
                    "note_film" => $note_film,
                    "duree_formatee" => $duree_formatee,
                    "affiche_film" => $affiche_film
                ]);
                
                $_SESSION["message"] = "Le film a bien été ajouté ! <i class='fa-solid fa-check'></i>";
                header("Location: index.php?action=listFilm");
            } else {
                $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
            }
              
        }
        require "view/film/ajoutFilm.php"; 
    }
    
  }
