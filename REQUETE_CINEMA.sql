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
    film.titre_film,
    categorie.id_genreCine
FROM film
INNER JOIN categorie ON film.id_film = categorie.id_film
ORDER BY id_genreCine DESC
  
e. Nombre de films par réalisateur (classés dans l’ordre décroissant)


  
f. Casting d’un film en particulier (id_film) : nom, prénom des acteurs + sexe


  
g. Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie (du film le plus récent au plus ancien)

  
h. Liste des personnes qui sont à la fois acteurs et réalisateurs

  
i. Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien)

  
j. Nombre d’hommes et de femmes parmi les acteurs

  
k. Liste des acteurs ayant plus de 50 ans (âge révolu et non révolu)

  
l. Acteurs ayant joué dans 3 films ou plus

