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

        $pdo= Connect::seConnecter();

        // requete pour selection tout les realisateurs
        $requeteRealFilm = $pdo -> prepare ("SELECT
            CONCAT(personne.nom_personne, ' ', personne.prenom_personne) AS realisateurName,
            id_realisateur
        FROM realisateur
        INNER JOIN personne ON realisateur.id_personne = personne.id_personne");
        $requeteRealFilm -> execute();

        // requete pour recupere toutes les categories de films
        $requeteCateFilm = $pdo -> prepare ("SELECT
            nom_genreCine,
            id_genreCine
        FROM genreCine");
        $requeteCateFilm -> execute();


        // Vérification si le formulaire a été soumis
        if(isset($_POST["submitFilm"])) {
     
            // Filtrage des données du formulaire
            $titre_film = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $anneeSortie_film = filter_input(INPUT_POST, 'anneeSortie_film', FILTER_VALIDATE_INT);
            $synopsis_film = filter_input(INPUT_POST, "synopsis_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $note_film = filter_input(INPUT_POST, 'note_film', FILTER_VALIDATE_INT);
            $duree_film = filter_input(INPUT_POST, 'duree_film', FILTER_VALIDATE_INT);
            $affiche_film = filter_input(INPUT_POST, "affiche_film", FILTER_SANITIZE_SPECIAL_CHARS);
            $id_realisateur = filter_input(INPUT_POST, 'id_realisateur', FILTER_VALIDATE_INT);

            
            // Vérification si les données obligatoires sont présentes
            if($titre_film && $anneeSortie_film && $synopsis_film && $note_film && $duree_film ) {
                // $affiche_film = ($affiche_film!= null && $affiche_film != false) ? $affiche_film : ""; 
                // Connexion à la base de données
                $pdo = Connect::seConnecter();
     
                // Préparation de la requête pour ajouter un film
                $requeteAjouterFilm = $pdo->prepare("INSERT INTO film(id_realisateur, titre_film, anneeSortie_film, synopsis_film, note_film, duree_film ) VALUES (:id_realisateur, :titre_film, :anneeSortie_film, :synopsis_film, :note_film, :duree_film)");
                $requeteAjouterFilm->execute([
                    "titre_film" => $titre_film,
                    "anneeSortie_film" => $anneeSortie_film,
                    "synopsis_film" => $synopsis_film,
                    "note_film" => $note_film,
                    "duree_film" => $duree_film,
                    // "affiche_film" => $affiche_film,
                    "id_realisateur" => $id_realisateur
                ]);
                
     
                // Récupération de l'ID du film ajouté
                $id_film = $pdo->lastInsertId();

                // Préparation de la requête pour lier le film ajouté
                $requeteAjouterLienFilm = $pdo->prepare("INSERT INTO film (id_film) VALUES (:id_film)");
     
                // Message de succès
                $_SESSION["message"] = "Le film a bien été ajouté ! <i class='fa-solid fa-check'></i>";
     
                // Redirection vers la liste des films
                header("Location: index.php?action=listFilm");
     
            } else {
                // Message d'erreur si des données obligatoires sont manquantes
                $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
            }
        }
     
        // Inclusion de la vue pour l'ajout de film
        require "view/film/ajoutFilm.php";
    }

    // ^^ Supprimer un film
    public function supprimeFilm($id){
        if(isset($id)) {
        $pdo = Connect::seConnecter();
        // ^^ on supprime d'abord la table categorie
        $requeteSupprimeFilmC = $pdo->prepare("DELETE FROM categorie WHERE id_film=:id");
        $requeteSupprimeFilmC -> execute(["id" => $id]);

        // ^^ on supprime ensuite la table jouer
        $requeteSupprimerFilmJ = $pdo->prepare("DELETE FROM jouer WHERE id_film=:id");
        $requeteSupprimerFilmJ-> execute(["id" => $id]);
        
        // ^^ on supprime ensuite la table film
        $requeteSupprimerFilmF = $pdo->prepare("DELETE FROM film WHERE id_film=:id");
        $requeteSupprimerFilmF-> execute(["id" => $id]);

        $_SESSION["message"] = "Le Film a bien été supprimé ! <i class='fa-solid fa-check'></i>";
        header("Location: index.php?action=listFilm");
        } else {
            $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
        
        }
  
    }
  }
