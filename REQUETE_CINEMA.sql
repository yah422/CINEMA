a. Informations d’un film (id_film) : titre, année, durée (au format HH:MM) et réalisateur

SELECT film.titre_film, film.anneeSortie_film, film.duree_film, realisateur.id_realisateur
FROM film
INNER JOIN realisateur  ON film.id_film = realisateur.id_realisateur

