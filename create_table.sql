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
INSERT INTO Film (titre_film, anneeSortie_film, duree_film, synopsis_film, note_film) VALUES ('La Malédiction : L Origine', 2024, 120, 'Une jeune Américaine est envoyée à Rome pour commencer une vie au service de l Église, mais elle est confrontée à des ténèbres qui l amènent à remettre sa foi en question et à découvrir une terrifiante conspiration.', 4.3);

------------------- ADD INFORMATION TO THE TABLE PERSONNE ---------------------

INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
('Nolan', 'Christopher', '1970-07-30', 'Masculin'),
('Chazelle', 'Damien', '1985-01-19', 'Masculin'),
('Darabont', 'Frank', '1959-01-28', 'Masculin'),
('Tarantino', 'Quentin', '1963-03-27', 'Masculin'),
('Zemeckis', 'Robert', '1952-05-14', 'Masculin'),
('Coppola', 'Francis Ford', '1939-04-07', 'Masculin'),
('Spielberg', 'Steven', '1946-12-18', 'Masculin'),
('Wachowskis', 'The', '1965-06-21', 'Autre'),
('Stevenson', 'Arkasha', '1992-12-8', 'Feminin');

------------------------------------ ADD ACTORS REAL NAME ----------------------------------------

------------------   La Malédiction : L'Origine   ------------------------

('Nighy', 'Billr', '1949-12-12', 'Masculin'),
('Ineson', 'Balph', '1969-12-15', 'Masculin'),
('Dance', 'Charles', '1946-10-10', 'Masculin'),
('Braga', 'Sonia', '1950-06-08', 'Feminin'),
('Arcangeli', 'Andrea', '1993-08-03', 'Masculin'),
('Caballero', 'Maria', '1998-06-13', 'Feminin');

------------------- ADD ROLES  La Malédiction : L'Origine ---------------------

INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES ('2', 'Father Harris');
INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES ('3', 'Father Brennan');
INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES ('4', 'Silvia');
INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES ('5', 'Paolo');
INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES ('6', 'Luz');


------------------- Acteurs de Inception ----------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('DiCaprio', 'Leonardo', '1974-11-11', 'M'),
  ('Hardy', 'Tom', '1977-09-15', 'M'),
  ('Page', 'Ellen', '1987-02-21', 'F'),
  ('Gordon-Levitt', 'Joseph', '1981-02-17', 'M'),
  ('Cotillard', 'Marion', '1975-09-30', 'F');

------------------- ADD ROLES Inception ---------------------


 
----------------- Acteurs de La La Land ------------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Gosling', 'Ryan', '1980-11-12', 'M'),
  ('Stone', 'Emma', '1988-11-06', 'F'),
  ('Legend', 'John', '1978-12-28', 'M'),
  ('Rosemarie', 'DeWitt', '1971-10-26', 'F'),

------------------- ADD ROLES  Lalaland  ---------------------

INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES 
(7, 'Sebastian London'),
(8, 'Mia Scottsdale'),
(9, 'Keith Springfield'),
(10, 'Laura Flushing');

----------------- Acteurs de The Shawshank Redemption ---------------

INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Freeman', 'Morgan', '1937-06-01', 'M'),
  ('Robbins', 'Tim', '1958-10-16', 'M'),
  ('Gunton', 'Bob', '1945-11-15', 'M'),
  ('Brown', 'William', '1938-04-22', 'M'),
  ('Clancy Brown', 'Clancy', '1959-01-05', 'M');

------------------- ADD ROLES  Lalaland  --------------------

INSERT INTO `cinema_asma`.`rolefilm` (`id_role`, `nom_role`) VALUES 
(11, 'Ellis Boyd Red Redding Memphis'),
(12, 'Andy Dufresne Shawnee County'),
(13, 'Warden Samuel Norton Los Angeles'),
(14, 'Tommy Williams Lubbock'),
(15, 'Captain Byron');
 
----------------- Acteurs de Pulp Fiction ---------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Travolta', 'John', '1954-02-18', 'M'),
  ('Jackson', 'Samuel L.', '1948-12-21', 'M'),
  ('Thurman', 'Uma', '1970-04-29', 'F'),
  ('Willis', 'Bruce', '1955-03-19', 'M'),
  ('Roth', 'Tim', '1961-05-14', 'M');

----------------------- Acteurs de The Dark Knight ------------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Bale', 'Christian', '1974-01-30', 'M'),
  ('Ledger', 'Heath', '1979-04-04', 'M'),
  ('Caine', 'Michael', '1933-03-14', 'M'),
  ('Eckhart', 'Aaron', '1968-03-12', 'M'),
  ('Oldman', 'Gary', '1958-03-21', 'M');
 
------------------ Acteurs de Forrest Gump   ----------------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Hanks', 'Tom', '1956-07-09', 'M'),
  ('Wright', 'Robin', '1966-04-08', 'M'),
  ('Sinise', 'Gary', '1955-03-17', 'M'),
  ('Field', 'Sally', '1946-11-06', 'F'),
  ('Kennedy', 'Haley Joel', '1988-12-14', 'M');
 
------------------ Acteurs de The Godfather -------------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Brando', 'Marlon', '1924-04-03', 'M'),
  ('Pacino', 'Al', '1940-04-25', 'M'),
  ('Caan', 'James', '1940-03-26', 'M'),
  ('Duvall', 'Robert', '1931-01-05', 'M'),
  ('Keaton', 'Diane', '1946-01-05', 'F');

----------------- Acteurs de Schindler's List ----------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Neeson', 'Liam', '1952-06-07', 'M'),
  ('Fiennes', 'Ralph', '1962-12-22', 'M'),
  ('Kingsley', 'Ben', '1943-12-31', 'M'),
  ('Sagall', 'Embeth', '1963-08-13', 'F'),
  ('Kruger', 'Caroline', '1976-05-23', 'F');
 
------------------ Acteurs de Inglourious Basterds -----------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Pitt', 'Brad', '1963-12-18', 'M'),
  ('Waltz', 'Christoph', '1956-10-04', 'M'),
  ('Laurent', 'Mélanie', '1983-02-21', 'F'),
  ('Fassbender', 'Michael', '1977-04-02', 'M'),
  ('Kruger', 'Diane', '1976-07-15', 'F');
 
----------------- Acteurs de The Matrix --------------------
INSERT INTO Personne (nom_personne, prenom_personne, dateNaissance, sexe_personne)
VALUES
  ('Reeves', 'Keanu', '1964-09-02', 'M'),
  ('Fishburne', 'Laurence', '1961-07-30', 'M'),
  ('Moss', 'Carrie-Anne', '1967-08-21', 'F'),
  ('Weaving', 'Hugo', '1960-04-04', 'M'),
  ('Pantoliano', 'Joe', '1951-09-12', 'M');


