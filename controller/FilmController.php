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


};
