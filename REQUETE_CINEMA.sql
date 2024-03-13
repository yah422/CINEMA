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
	
SELECT 
    film.titre_film,
    realisateur.id_personne,
    realisateur.id_realisateur
FROM film
INNER JOIN realisateur ON film.id_film = realisateur.id_personne
ORDER BY id_personne DESC

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
WHERE film.id_film = 12;

  
g. Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie (du film le plus récent au plus ancien)

SELECT 
    film.titre_film,
    jouer.id_acteur,
    personne.nom_personne,
    personne.prenom_personne,
    jouer.id_role,
    film.anneeSortie_film
FROM jouer
INNER JOIN film ON jouer.id_film = film.id_film
INNER JOIN acteur ON jouer.id_acteur = acteur.id_acteur
INNER JOIN personne ON jouer.id_role = personne.id_personne
WHERE jouer.id_acteur = 45
ORDER BY film.anneeSortie_film DESC;

h. Liste des personnes qui sont à la fois acteurs et réalisateurs


  
i. Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien)

  
j. Nombre d’hommes et de femmes parmi les acteurs

  
k. Liste des acteurs ayant plus de 50 ans (âge révolu et non révolu)

  
l. Acteurs ayant joué dans 3 films ou plus

