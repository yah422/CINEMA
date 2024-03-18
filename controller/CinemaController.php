<?php 


namespace Controller;
use Model\Connect;

class FilmsController {
// --------------- LISTER LES FILMS ---------------
    public function listFilms(){
        $pdo = Connect::seConnecter();
        $requete = $pdo ->query("
            SELECT
            id_film,
            title_film,
            anneeSortie_film,
            synopsis_film,
            note_film,
            DATE_FORMAT(film.duree_film, '%H:%i') AS duree_formatee, 
            affiche_film, 
            id_realisateur
            FROM Film 
            INNER JOIN realisateur ON realisateur.id_realisateur = movie.id_realisateur
            INNER JOIN personne ON personne.id_personne = director.id_personne
        ");

    }


}
