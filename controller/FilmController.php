<?php
// On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"
namespace Controller;
 
use Model\Connect;
 
class FilmController {
    
    public function homePage(){
        require "view/homePage/homePage.php";
    }
    
    // LISTER LES FILMS
    public function listFilm(){
        // On se connecte
        $pdo = Connect::seConnecter();
        
        // On exécute la requête de notre choix
        $requete = $pdo->query("SELECT film.id_film, film.titre_film, film.anneeSortie_film FROM Film");
        
        // On relie par un "require" la vue qui nous intéresse
        require "view/film/listFilms.php";
    }
    
    // Détail d'un film
    public function detailFilm($id){
        $pdo = Connect::seConnecter();
        $requeteFilm = $pdo->prepare("SELECT * FROM film WHERE id_film = :id");
        $requeteFilm->execute(["id"=> $id]);
        
        $requeteFilm = $pdo->prepare ("SELECT film.id_film, 
        realisateur.id_realisateur,
        film.titre_film,
        
        film.anneeSortie_film, 
        film.synopsis_film, 
        film.note_film, TIME_FORMAT(SEC_TO_TIME(film.duree_film*60),'%Hh%imin') AS duree_formatee, 
        film.affiche_film, CONCAT(personne.nom_personne, ' ', personne.prenom_personne) AS realisateurName 
        FROM Film 
        INNER JOIN realisateur ON realisateur.id_realisateur = film.id_realisateur 
        INNER JOIN personne ON personne.id_personne = realisateur.id_personne 
        WHERE id_film = :id");
        $requeteFilm->execute(["id"=> $id]);
        
        $requeteCast = $pdo->prepare ("SELECT film.id_film, acteur.id_acteur, affiche_acteur, CONCAT(personne.nom_personne, ' ', personne.prenom_personne) AS acteurName, personne.sexe_personne, rolefilm.nom_role FROM film INNER JOIN jouer ON film.id_film = jouer.id_film INNER JOIN rolefilm ON jouer.id_role = rolefilm.id_role INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur INNER JOIN personne ON acteur.id_personne = personne.id_personne WHERE film.id_film = :id");
        $requeteCast->execute(["id"=> $id]);
        
        require "view/film/detailFilm.php";
    }
    
    // Ajout d'un film
    public function ajoutFilm() {
        $pdo = Connect::seConnecter();
        
        // Requête pour sélectionner tous les réalisateurs
        $requeteRealFilm = $pdo->prepare ("SELECT CONCAT(personne.nom_personne, ' ', personne.prenom_personne) AS realisateurName, id_realisateur FROM realisateur INNER JOIN personne ON realisateur.id_personne = personne.id_personne");
        $requeteRealFilm->execute();
        
        // Requête pour récupérer toutes les catégories de films
        $requeteCateFilm = $pdo->prepare ("SELECT nom_genreCine, id_genreCine FROM genreCine");
        $requeteCateFilm->execute();
        
        // Vérification si le formulaire a été soumis
        if(isset($_POST["submitFilm"])) {
            if(isset($_FILES["affiche"])) {
                $tmpName = $_FILES["affiche"]["tmp_name"];
                $name = $_FILES["affiche"]["name"];
                $size = $_FILES["affiche"]["size"];
                $error = $_FILES["affiche"]["error"];
                $tabExtension = explode(".", $name);
                $extension = strtolower(end($tabExtension));
                $extensions = ["jpg", "png", "jpeg"];
                $maxTaille = 4000000;
                
                if(in_array($extension, $extensions) && $size <= $maxTaille && $error == 0) {
                    $uniqueName = uniqid("", true);
                    $fileUnique = $uniqueName . "." . $extension;
                    move_uploaded_file($tmpName, "./public/images/".$fileUnique);
                    $afficheChemin = "./public/images/" . $fileUnique;
                } else {
                    $afficheChemin = NULL;
                }
                
                $titre = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $genre = filter_input(INPUT_POST, "genreCine", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $anneeSortie = filter_input(INPUT_POST, "anneeSortie_film", FILTER_SANITIZE_NUMBER_INT);
                $duree = filter_input(INPUT_POST, "duree_film", FILTER_SANITIZE_NUMBER_INT);
                $synopsis = filter_input(INPUT_POST, "synopsis_film", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $note = filter_input(INPUT_POST, "note_film", FILTER_SANITIZE_NUMBER_INT);
                $realisateur = filter_input(INPUT_POST, "realisateur", FILTER_SANITIZE_NUMBER_INT);
                
                $requeteAjouterFilm = $pdo->prepare("INSERT INTO film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film, affiche_film, id_realisateur) VALUES(:titre_film, :anneeSortie_film, :duree_film, :synopsis_film, :note_film, :afficheChemin, :realisateur)");
                $requeteAjouterFilm->execute([
                    "titre_film" => $titre,
                    "anneeSortie_film" => $anneeSortie,
                    "duree_film" => $duree,
                    "synopsis_film" => $synopsis,
                    "note_film" => $note,
                    "afficheChemin" => $afficheChemin,
                    "realisateur" => $realisateur
                ]);
            }
        }
        require "view/film/ajoutFilm.php";
    }

    // ajouter un Casting
    public function ajoutCasting() {
        $pdo= Connect::seConnecter();
        $requeteFilm = $pdo->query("SELECT film.id_film, film.titre_film FROM film");
        $requeteActeur = $pdo->query("SELECT acteur.id_acteur, personne.prenom_personne, ' ', personne.nom_personne
        FROM personne
        INNER JOIN acteur ON personne.id_personne = acteur.id_personne");
        $requeteRole = $pdo->query("SELECT id_role, rolefilm.nom_role
        FROM rolefilm");

        if(isset($_POST["submitCasting"])) {
            $film = filter_input(INPUT_POST, "film", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $acteur = filter_input(INPUT_POST, "acteur", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($film  &&  $role  && $acteur) {
                $requeteAjouterCasting = $pdo->prepare("INSERT INTO jouer(id_film, id_acteur, id_role)
                VALUES (:film, :acteur, :role)");

                $requeteAjouterCasting ->execute([
                    "film" => $film,
                    "role" => $role,
                    "acteur" => $acteur,]);

                $_SESSION["message"] = " Le casting a bien été ajouter ! <i class='fa-solid fa-check'></i> ";
                
                header("Location: index.php?action=listFilm");
            } else {
                $_SESSION["message"] = "Veuillez sélectionné un film un acteur et un rôle avant de valider !";
            }
        }
        require "view/film/ajoutCasting.php"; 
    }


    // Supprimer un film
    public function supprimeFilm($id){
        if(isset($id)) {
            $pdo = Connect::seConnecter();
            $requeteSupprimeFilmC = $pdo->prepare("DELETE FROM categorie WHERE id_film=:id");
            $requeteSupprimeFilmC->execute(["id" => $id]);
            
            
            $requeteSupprimerFilmJ = $pdo->prepare("DELETE FROM jouer WHERE id_film=:id");
            $requeteSupprimerFilmJ->execute(["id" => $id]);
            
            $requeteSupprimerFilmF = $pdo->prepare("DELETE FROM film WHERE id_film=:id");
            $requeteSupprimerFilmF->execute(["id" => $id]);
            
            $_SESSION["message"] = "Le Film a bien été supprimé ! <i class='fa-solid fa-check'></i>";
            header("Location: index.php?action=listFilm");
        } else {
            $_SESSION["message"] = "Une erreur a été détectée dans la saisie";
        }
    }

    
}