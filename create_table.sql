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
