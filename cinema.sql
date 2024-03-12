-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cinema_asma
CREATE DATABASE IF NOT EXISTS `cinema_asma` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cinema_asma`;

-- Listage de la structure de table cinema_asma. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL,
  PRIMARY KEY (`id_acteur`),
  UNIQUE KEY `id_personne` (`id_personne`),
  CONSTRAINT `acteur_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.acteur : ~55 rows (environ)
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 11),
	(2, 12),
	(3, 13),
	(4, 14),
	(5, 15),
	(6, 16),
	(51, 17),
	(52, 18),
	(53, 19),
	(54, 20),
	(55, 21),
	(7, 22),
	(8, 23),
	(9, 24),
	(10, 25),
	(11, 27),
	(12, 28),
	(13, 29),
	(14, 30),
	(15, 31),
	(16, 32),
	(17, 33),
	(18, 34),
	(19, 35),
	(20, 36),
	(21, 37),
	(22, 38),
	(23, 39),
	(24, 40),
	(25, 41),
	(26, 42),
	(27, 43),
	(28, 44),
	(29, 45),
	(30, 46),
	(31, 47),
	(32, 48),
	(33, 49),
	(34, 50),
	(35, 51),
	(36, 52),
	(37, 53),
	(38, 54),
	(39, 55),
	(40, 56),
	(41, 57),
	(42, 58),
	(43, 59),
	(44, 60),
	(45, 61),
	(46, 62),
	(47, 63),
	(48, 64),
	(49, 65),
	(50, 66);

-- Listage de la structure de table cinema_asma. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_film` int NOT NULL,
  `id_genreCine` int NOT NULL,
  PRIMARY KEY (`id_film`,`id_genreCine`),
  KEY `id_genreCine` (`id_genreCine`),
  CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `categorie_ibfk_2` FOREIGN KEY (`id_genreCine`) REFERENCES `genrecine` (`id_genreCine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.categorie : ~22 rows (environ)
INSERT INTO `categorie` (`id_film`, `id_genreCine`) VALUES
	(1, 1),
	(10, 1),
	(2, 2),
	(3, 3),
	(4, 3),
	(5, 3),
	(6, 3),
	(7, 3),
	(8, 3),
	(9, 3),
	(3, 4),
	(4, 4),
	(5, 4),
	(7, 4),
	(5, 5),
	(10, 5),
	(8, 7),
	(8, 9),
	(9, 9),
	(12, 10),
	(2, 11),
	(6, 11);

-- Listage de la structure de table cinema_asma. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(50) DEFAULT NULL,
  `anneeSortie_film` int DEFAULT NULL,
  `synopsis_film` text,
  `note_film` int DEFAULT NULL,
  `duree_film` int DEFAULT NULL,
  `affiche_film` varchar(255) DEFAULT NULL,
  `id_realisateur` int DEFAULT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.film : ~11 rows (environ)
INSERT INTO `film` (`id_film`, `titre_film`, `anneeSortie_film`, `synopsis_film`, `note_film`, `duree_film`, `affiche_film`, `id_realisateur`) VALUES
	(1, 'Inception', 2010, 'Un voleur d élite est capable dinfiltrer les rêves des autres pour voler leurs secrets les plus précieux.', 5, 148, NULL, 1),
	(2, 'La La Land', 2016, 'Une romance musicale entre une actrice en herbe et un musicien de jazz passionné à Los Angeles.', 5, 128, NULL, 2),
	(3, 'The Shawshank Redemption', 1994, 'Un banquier injustement condamné à la prison de Shawshank maintient son espoir malgré les difficultés.', 5, 142, NULL, 3),
	(4, 'Pulp Fiction', 1994, 'Plusieurs histoires entrelacées sur la vie criminelle à Los Angeles avec humour noir et violence.', 5, 154, NULL, 4),
	(5, 'The Dark Knight', 2008, 'Batman sallie avec le procureur et le lieutenant de Gotham City pour lutter contre le crime organisé.', 4, 152, NULL, 1),
	(6, 'Forrest Gump', 1994, 'Un homme simple desprit partage son extraordinaire vie en participant à des moments clés de lhistoire américaine.', 5, 142, NULL, 5),
	(7, 'The Godfather', 1972, 'La saga de la famille Corleone, chef dune puissante famille mafieuse italo-américaine.', 5, 175, NULL, 6),
	(8, 'Schindlers Liste', 1993, 'Lhistoire vraie dOskar Schindler, un homme daffaires allemand qui sauva plus de mille Juifs pendant lHolocauste.', 5, 195, NULL, 7),
	(9, 'Inglourious Basterds', 2009, 'Un groupe de soldats juifs américains appelés "The Basterds" cherche à éliminer les nazis pendant la Seconde Guerre mondiale.', 4, 153, NULL, 4),
	(10, 'The Matrix', 1999, 'Un hacker découvre que le monde dans lequel il vit est une simulation informatique créée par des machines intelligentes.', 5, 136, NULL, 8),
	(12, 'La Malédiction : L Origine', 2024, 'Une jeune Américaine est envoyée à Rome pour commencer une vie au service de l Église, mais elle est confrontée à des ténèbres qui l amènent à remettre sa foi en question et à découvrir une terrifiante conspiration.', 4, 120, NULL, 9);

-- Listage de la structure de table cinema_asma. genrecine
CREATE TABLE IF NOT EXISTS `genrecine` (
  `id_genreCine` int NOT NULL AUTO_INCREMENT,
  `nom_genreCine` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_genreCine`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.genrecine : ~9 rows (environ)
INSERT INTO `genrecine` (`id_genreCine`, `nom_genreCine`) VALUES
	(1, 'Science-fiction'),
	(2, 'Musical'),
	(3, 'Drame'),
	(4, 'Crime'),
	(5, 'Action'),
	(7, 'Histoire'),
	(9, 'Guerre'),
	(10, 'Horreur'),
	(11, 'Romance');

-- Listage de la structure de table cinema_asma. jouer
CREATE TABLE IF NOT EXISTS `jouer` (
  `id_film` int NOT NULL,
  `id_acteur` int NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_film`,`id_acteur`,`id_role`),
  KEY `id_acteur` (`id_acteur`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `jouer_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `jouer_ibfk_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `jouer_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `rolefilm` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.jouer : ~54 rows (environ)
INSERT INTO `jouer` (`id_film`, `id_acteur`, `id_role`) VALUES
	(12, 1, 1),
	(12, 2, 3),
	(12, 3, 2),
	(12, 4, 4),
	(12, 5, 5),
	(12, 6, 6),
	(2, 7, 7),
	(2, 8, 8),
	(2, 9, 9),
	(2, 10, 10),
	(3, 11, 11),
	(3, 12, 12),
	(3, 13, 13),
	(3, 14, 14),
	(3, 15, 15),
	(4, 16, 16),
	(4, 17, 17),
	(4, 18, 18),
	(4, 19, 19),
	(4, 20, 20),
	(5, 21, 21),
	(5, 22, 22),
	(5, 23, 23),
	(5, 24, 24),
	(5, 25, 25),
	(6, 26, 26),
	(6, 27, 27),
	(6, 28, 28),
	(6, 29, 29),
	(7, 30, 30),
	(7, 31, 31),
	(7, 32, 32),
	(7, 33, 33),
	(7, 35, 35),
	(8, 36, 36),
	(8, 37, 37),
	(8, 38, 38),
	(8, 39, 39),
	(8, 40, 40),
	(9, 41, 41),
	(9, 42, 42),
	(9, 43, 43),
	(9, 44, 44),
	(9, 45, 45),
	(10, 46, 46),
	(10, 47, 47),
	(10, 48, 48),
	(10, 49, 49),
	(10, 50, 50),
	(1, 51, 51),
	(1, 52, 52),
	(1, 53, 53),
	(1, 54, 54),
	(1, 55, 55);

-- Listage de la structure de table cinema_asma. personne
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(50) NOT NULL,
  `prenom_personne` varchar(50) NOT NULL,
  `dateNaissance` date DEFAULT NULL,
  `sexe_personne` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.personne : ~65 rows (environ)
INSERT INTO `personne` (`id_personne`, `nom_personne`, `prenom_personne`, `dateNaissance`, `sexe_personne`) VALUES
	(1, 'Nolan', 'Christopher', '1970-07-30', 'Masculin'),
	(2, 'Chazelle', 'Damien', '1985-01-19', 'Masculin'),
	(3, 'Darabont', 'Frank', '1959-01-28', 'Masculin'),
	(4, 'Tarantino', 'Quentin', '1963-03-27', 'Masculin'),
	(5, 'Zemeckis', 'Robert', '1952-05-14', 'Masculin'),
	(6, 'Coppola', 'Francis Ford', '1939-04-07', 'Masculin'),
	(7, 'Spielberg', 'Steven', '1946-12-18', 'Masculin'),
	(8, 'Wachowskis', 'The', '1965-06-21', 'Autre'),
	(10, 'Stevenson', 'Arkasha', '1992-12-08', 'Feminin'),
	(11, 'Nighy', 'Billr', '1949-12-12', 'Masculin'),
	(12, 'Ineson', 'Balph', '1969-12-15', 'Masculin'),
	(13, 'Dance', 'Charles', '1946-10-10', 'Masculin'),
	(14, 'Braga', 'Sonia', '1950-06-08', 'Feminin'),
	(15, 'Arcangeli', 'Andrea', '1993-08-03', 'Masculin'),
	(16, 'Caballero', 'Maria', '1998-06-13', 'Feminin'),
	(17, 'DiCaprio', 'Leonardo', '1974-11-11', 'M'),
	(18, 'Hardy', 'Tom', '1977-09-15', 'M'),
	(19, 'Page', 'Ellen', '1987-02-21', 'F'),
	(20, 'Gordon-Levitt', 'Joseph', '1981-02-17', 'M'),
	(21, 'Cotillard', 'Marion', '1975-09-30', 'F'),
	(22, 'Gosling', 'Ryan', '1980-11-12', 'M'),
	(23, 'Stone', 'Emma', '1988-11-06', 'F'),
	(24, 'Legend', 'John', '1978-12-28', 'M'),
	(25, 'Rosemarie', 'DeWitt', '1971-10-26', 'F'),
	(26, 'Finn Wittrock', 'Finn', '1984-10-28', 'M'),
	(27, 'Freeman', 'Morgan', '1937-06-01', 'M'),
	(28, 'Robbins', 'Tim', '1958-10-16', 'M'),
	(29, 'Gunton', 'Bob', '1945-11-15', 'M'),
	(30, 'Brown', 'William', '1938-04-22', 'M'),
	(31, 'Clancy Brown', 'Clancy', '1959-01-05', 'M'),
	(32, 'Travolta', 'John', '1954-02-18', 'M'),
	(33, 'Jackson', 'Samuel L.', '1948-12-21', 'M'),
	(34, 'Thurman', 'Uma', '1970-04-29', 'F'),
	(35, 'Willis', 'Bruce', '1955-03-19', 'M'),
	(36, 'Roth', 'Tim', '1961-05-14', 'M'),
	(37, 'Bale', 'Christian', '1974-01-30', 'M'),
	(38, 'Ledger', 'Heath', '1979-04-04', 'M'),
	(39, 'Caine', 'Michael', '1933-03-14', 'M'),
	(40, 'Eckhart', 'Aaron', '1968-03-12', 'M'),
	(41, 'Oldman', 'Gary', '1958-03-21', 'M'),
	(42, 'Hanks', 'Tom', '1956-07-09', 'M'),
	(43, 'Wright', 'Robin', '1966-04-08', 'M'),
	(44, 'Sinise', 'Gary', '1955-03-17', 'M'),
	(45, 'Field', 'Sally', '1946-11-06', 'F'),
	(46, 'Kennedy', 'Haley Joel', '1988-12-14', 'M'),
	(47, 'Brando', 'Marlon', '1924-04-03', 'M'),
	(48, 'Pacino', 'Al', '1940-04-25', 'M'),
	(49, 'Caan', 'James', '1940-03-26', 'M'),
	(50, 'Duvall', 'Robert', '1931-01-05', 'M'),
	(51, 'Keaton', 'Diane', '1946-01-05', 'F'),
	(52, 'Neeson', 'Liam', '1952-06-07', 'M'),
	(53, 'Fiennes', 'Ralph', '1962-12-22', 'M'),
	(54, 'Kingsley', 'Ben', '1943-12-31', 'M'),
	(55, 'Sagall', 'Embeth', '1963-08-13', 'F'),
	(56, 'Kruger', 'Caroline', '1976-05-23', 'F'),
	(57, 'Pitt', 'Brad', '1963-12-18', 'M'),
	(58, 'Waltz', 'Christoph', '1956-10-04', 'M'),
	(59, 'Laurent', 'Mélanie', '1983-02-21', 'F'),
	(60, 'Fassbender', 'Michael', '1977-04-02', 'M'),
	(61, 'Kruger', 'Diane', '1976-07-15', 'F'),
	(62, 'Reeves', 'Keanu', '1964-09-02', 'M'),
	(63, 'Fishburne', 'Laurence', '1961-07-30', 'M'),
	(64, 'Moss', 'Carrie-Anne', '1967-08-21', 'F'),
	(65, 'Weaving', 'Hugo', '1960-04-04', 'M'),
	(66, 'Pantoliano', 'Joe', '1951-09-12', 'M');

-- Listage de la structure de table cinema_asma. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  UNIQUE KEY `id_personne` (`id_personne`),
  CONSTRAINT `realisateur_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.realisateur : ~9 rows (environ)
INSERT INTO `realisateur` (`id_realisateur`, `id_personne`) VALUES
	(1, 1),
	(6, 2),
	(8, 3),
	(5, 4),
	(7, 5),
	(9, 6),
	(2, 7),
	(4, 8),
	(3, 10);

-- Listage de la structure de table cinema_asma. rolefilm
CREATE TABLE IF NOT EXISTS `rolefilm` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.rolefilm : ~55 rows (environ)
INSERT INTO `rolefilm` (`id_role`, `nom_role`) VALUES
	(1, 'Lawrence'),
	(2, 'Father Harris'),
	(3, 'Father Brennan'),
	(4, 'Silvia'),
	(5, 'Paolo'),
	(6, 'Luz'),
	(7, 'Sebastian London'),
	(8, 'Mia Scottsdale'),
	(9, 'Keith Springfield'),
	(10, 'Laura Flushing'),
	(11, 'Ellis Boyd Red Redding Memphis'),
	(12, 'Andy Dufresne Shawnee County'),
	(13, 'Warden Samuel Norton Los Angeles'),
	(14, 'Tommy Williams Lubbock'),
	(15, 'Captain Byron'),
	(16, 'Pulp Fiction Vincent Vega Knoxville'),
	(17, 'Jules Winnfield Washington'),
	(18, 'Mia Wallace Paris'),
	(19, 'Butch Coolidge Los Angeles'),
	(20, 'Pumpkin Sacramento'),
	(21, 'Bruce Wayne Batman'),
	(22, 'Joker Perth'),
	(23, 'Alfred Pennyworth London'),
	(24, 'Harvey Dent Two-Face Dublin'),
	(25, 'Jim Gordon Newark'),
	(26, 'Forrest Gump Mobile'),
	(27, 'Jenny Curran Phoenix'),
	(28, 'Lieutenant Dan Taylor New York'),
	(29, 'Mrs. Gump Culver City'),
	(30, 'Bubba Blue Fort Worth'),
	(31, 'Don Vito Corleone New York City'),
	(32, 'Michael Corleone Brooklyn'),
	(33, 'Sonny Corleone New York City'),
	(34, 'Tom Hagen Chicago'),
	(35, 'Kay Adams-Corleone New York City'),
	(36, 'Oskar Schindler Svitavy'),
	(37, 'Amon Goeth Vienna'),
	(38, 'Itzhak Stern Sosnowiec'),
	(39, 'Emilie Schindler Alt Moletein'),
	(40, 'Helen Hirsch Lwow'),
	(41, 'Lt Aldo Raine Knoxville'),
	(42, 'Hans Landa Gdansk'),
	(43, 'Shosanna Dreyfus Berlin'),
	(44, 'Fredrick Zoller Bad Nauheim'),
	(45, 'Bridget von Hammersmark Copenhagen'),
	(46, 'Neo Beirut'),
	(47, 'Morpheus Augusta'),
	(48, 'Trinity Vancouver'),
	(49, 'Agent Smith Ibadan'),
	(50, 'Cypher Haverhill'),
	(51, 'Dom Cobb'),
	(52, 'Eames'),
	(53, 'Ariadne'),
	(54, 'Arthur'),
	(55, 'Mal Cobb');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
