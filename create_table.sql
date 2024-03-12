---------------------- CREATE DIFFERENT TABLE FOR THE DATABASE CINEMA -----------------------
CREATE TABLE GENRECINE(
   id_genreCine INT AUTO_INCREMENT ,
   nom_genreCine VARCHAR(50),
   PRIMARY KEY(id_genreCine)
);

CREATE TABLE PERSONNE(
   id_personne INT AUTO_INCREMENT,
   nom_personne VARCHAR(50) NOT NULL,
   prenom_personne VARCHAR(50) NOT NULL,
   dateNaissance DATE,
   sexe_personne VARCHAR(50),
   PRIMARY KEY(id_personne)
);

CREATE TABLE ROLEFILM(
   id_role INT AUTO_INCREMENT,
   nom_role VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_role)
);

CREATE TABLE ACTEUR(
   id_acteur INT AUTO_INCREMENT,
   id_personne INT NOT NULL,
   PRIMARY KEY(id_acteur),
   UNIQUE(id_personne),
   FOREIGN KEY(id_personne) REFERENCES PERSONNE(id_personne)
);

CREATE TABLE REALISATEUR(
   id_realisateur INT AUTO_INCREMENT,
   id_personne INT NOT NULL,
   PRIMARY KEY(id_realisateur),
   UNIQUE(id_personne),
   FOREIGN KEY(id_personne) REFERENCES PERSONNE(id_personne)
);

CREATE TABLE FILM(
   id_film INT AUTO_INCREMENT,
   titre_film VARCHAR(50),
   anneeSortie_fillm INT,
   synopsis_film TEXT,
   note_film INT,
   duree_film INT,
   affiche_film VARCHAR(255),
   id_realisateur INT NOT NULL,
   PRIMARY KEY(id_film),
   FOREIGN KEY(id_realisateur) REFERENCES REALISATEUR(id_realisateur)
);

CREATE TABLE categorie(
   id_film INT,
   id_genreCine INT,
   PRIMARY KEY(id_film, id_genreCine),
   FOREIGN KEY(id_film) REFERENCES FILM(id_film),
   FOREIGN KEY(id_genreCine) REFERENCES GENRECINE(id_genreCine)
);

CREATE TABLE jouer(
   id_film INT,
   id_acteur INT,
   id_role INT,
   PRIMARY KEY(id_film, id_acteur, id_role),
   FOREIGN KEY(id_film) REFERENCES FILM(id_film),
   FOREIGN KEY(id_acteur) REFERENCES ACTEUR(id_acteur),
   FOREIGN KEY(id_role) REFERENCES ROLEFILM(id_role)
);

--------------- ADD INFORMATION TO THE TABLE FILM ---------------------

INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('Inception', 2010, 148,  'Un voleur d élite est capable dinfiltrer les rêves des autres pour voler leurs secrets les plus précieux.', 4.5);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('La La Land', 2016, 128,  'Une romance musicale entre une actrice en herbe et un musicien de jazz passionné à Los Angeles.', 5);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('The Shawshank Redemption', 1994, 142, 'Un banquier injustement condamné à la prison de Shawshank maintient son espoir malgré les difficultés.', 4.9);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('Pulp Fiction', 1994, 154,  'Plusieurs histoires entrelacées sur la vie criminelle à Los Angeles avec humour noir et violence.', 4.7);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('The Dark Knight', 2008, 152, 'Batman sallie avec le procureur et le lieutenant de Gotham City pour lutter contre le crime organisé.', 4.8);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('Forrest Gump', 1994, 142,  'Un homme simple desprit partage son extraordinaire vie en participant à des moments clés de lhistoire américaine.', 4.6);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('The Godfather', 1972, 175,  'La saga de la famille Corleone, chef dune puissante famille mafieuse italo-américaine.', 4.9);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('Schindlers Liste', 1993, 195, 'Lhistoire vraie dOskar Schindler, un homme daffaires allemand qui sauva plus de mille Juifs pendant lHolocauste.', 4.8);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('Inglourious Basterds', 2009, 153,  'Un groupe de soldats juifs américains appelés "The Basterds" cherche à éliminer les nazis pendant la Seconde Guerre mondiale.', 4.4);
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('The Matrix', 1999, 136, 'Un hacker découvre que le monde dans lequel il vit est une simulation informatique créée par des machines intelligentes.', 4.7);


