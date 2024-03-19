<?php 

// On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class FilmsController {
// --------------- LISTER LES FILMS ---------------
    public function listFilms(){

        // On se connecte
        $pdo = Connect::seConnecter();

        // On exécute la requête de notre choix
        $requete = $pdo -> query("
            SELECT
            film.id_film,
            film.titre_film,
            film.anneeSortie_film,
            film.synopsis_film,
            film.note_film,
            DATE_FORMAT(film.duree_film, '%H:%i') AS duree_formatee, 
            film.affiche_film, 
            realisateur.id_realisateur,
            personne.nom_personne,
            personne.prenom_personne
            FROM Film 
            INNER JOIN realisateur ON realisateur.id_realisateur = film.id_realisateur
            INNER JOIN personne ON personne.id_personne = realisateur.id_personne
        ");

        // On relie par un "require" la vue qui nous intéresse
        require "view/listFilms.php";
    }


};
