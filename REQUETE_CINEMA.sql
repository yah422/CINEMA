a. Informations d’un film (id_film) : titre, année, durée (au format HH:MM) et réalisateur
  
SELECT 
		film.titre_film,
		film.anneeSortie_film,
		TIME_FORMAT(SEC_TO_TIME(film.duree_film*60),'%Hh%imin') AS duree_formatee,
		personne.nom_personne,
		personne.prenom_personne
		FROM film
INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur
INNER JOIN personne ON realisateur.id_personne = personne.id_personne

  
b. Liste des films dont la durée excède 2h15 classés par durée (du + long au + court)
  
SELECT titre_film, 
       TIME_FORMAT(SEC_TO_TIME(duree_film * 60), '%Hh%i min') AS duree_formatee
FROM film
WHERE duree_film > 135
ORDER BY duree_film DESC;

  
c. Liste des films d’un réalisateur (en précisant l’année de sortie) 

SELECT 
		film.titre_film,
		film.anneeSortie_film,
		TIME_FORMAT(SEC_TO_TIME(film.duree_film*60),'%Hh%imin') AS duree_formatee,
		personne.nom_personne,
		personne.prenom_personne
		FROM film
INNER JOIN realisateur ON film.id_realisateur = realisateur.id_realisateur
INNER JOIN personne ON realisateur.id_personne = personne.id_personne
WHERE id_film = 1


  
d. Nombre de films par genre (classés dans l’ordre décroissant)

SELECT
    genrecine.nom_genreCine,
    COUNT(film.id_film) AS nombre_films
FROM
    genrecine
LEFT JOIN categorie ON genrecine.id_genreCine = categorie.id_genreCine
LEFT JOIN film ON categorie.id_film = film.id_film
GROUP BY
    genrecine.nom_genreCine
ORDER BY
    nombre_films DESC;

  
e. Nombre de films par réalisateur (classés dans l’ordre décroissant)
	
SELECT
    CONCAT(personne.prenom_personne, ' ', personne.nom_personne) AS realisateur,
    COUNT(film.id_film) AS nombre_films
FROM
    realisateur
INNER JOIN personne ON realisateur.id_personne = personne.id_personne
LEFT JOIN film ON realisateur.id_realisateur = film.id_realisateur
GROUP BY
    realisateur
ORDER BY
    nombre_films DESC;

f. Casting d’un film en particulier (id_film) : nom, prénom des acteurs + sexe
	
SELECT 
    film.titre_film,
    film.id_film,
    acteur.id_acteur,
    personne.nom_personne,
    personne.prenom_personne,
    personne.sexe_personne
FROM film
INNER JOIN jouer ON film.id_film = jouer.id_film
INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
WHERE film.id_film = 5;

  
g. Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie (du film le plus récent au plus ancien)

SELECT
    film.titre_film,
    jouer.id_role,
    film.anneeSortie_film
FROM
    jouer
INNER JOIN film ON jouer.id_film = film.id_film
WHERE
    jouer.id_acteur = 2
ORDER BY
    film.anneeSortie_film DESC;

h. Liste des personnes qui sont à la fois acteurs et réalisateurs

SELECT
    personne.nom_personne,
    personne.prenom_personne
FROM
    acteur
INNER JOIN realisateur ON acteur.id_personne = realisateur.id_personne
INNER JOIN personne ON acteur.id_personne = personne.id_personne
	
  
i. Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien)

SELECT
    titre_film,
    anneeSortie_film
FROM
    film
WHERE
    anneeSortie_film >= YEAR(CURDATE()) - 5
ORDER BY
    anneeSortie_film DESC;

  
j. Nombre d’hommes et de femmes parmi les acteurs

SELECT
    sexe_personne,
    COUNT(*) AS nombre_acteurs
FROM
    acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
GROUP BY
    sexe_personne;
  
k. Liste des acteurs ayant plus de 50 ans (âge révolu et non révolu)

SELECT
    nom_personne,
    prenom_personne,
    DATE_FORMAT(NOW(), '%Y') - YEAR(dateNaissance) - IF(DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(dateNaissance, '%m%d'), 1, 0) AS age_revolu
FROM
    acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
WHERE
    DATE_FORMAT(NOW(), '%Y') - YEAR(dateNaissance) > 50;

l. Acteurs ayant joué dans 3 films ou plus

SELECT
    personne.nom_personne,
    personne.prenom_personne,
    COUNT(jouer.id_film) AS nombre_films_joues
FROM
    acteur
INNER JOIN jouer ON acteur.id_personne = jouer.id_acteur
INNER JOIN personne ON acteur.id_personne = personne.id_personne
GROUP BY
    acteur.id_personne
HAVING
    COUNT(jouer.id_film) >= 3;


