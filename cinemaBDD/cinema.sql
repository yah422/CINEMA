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
  CONSTRAINT `acteur_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.acteur : ~55 rows (environ)
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 11),
	(2, 12),
	(3, 13),
	(4, 14),
	(5, 15),
	(6, 16),
	(7, 22),
	(8, 23),
	(10, 25),
	(14, 30),
	(15, 31),
	(16, 32),
	(17, 33),
	(18, 34),
	(19, 35),
	(22, 38),
	(23, 39),
	(24, 40),
	(26, 42),
	(32, 48),
	(33, 49),
	(34, 50),
	(37, 53),
	(38, 54),
	(39, 55),
	(42, 58),
	(43, 59),
	(44, 60),
	(47, 63),
	(48, 64),
	(49, 65);

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
	(2, 2),
	(4, 3),
	(5, 3),
	(6, 3),
	(7, 3),
	(4, 4),
	(5, 4),
	(7, 4),
	(5, 5),
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
  CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_asma.film : ~11 rows (environ)
INSERT INTO `film` (`id_film`, `titre_film`, `anneeSortie_film`, `synopsis_film`, `note_film`, `duree_film`, `affiche_film`, `id_realisateur`) VALUES
	(1, 'Inception', 2010, 'Un voleur d élite est capable dinfiltrer les rêves des autres pour voler leurs secrets les plus précieux.', 5, 148, NULL, 1),
	(2, 'La La Land', 2016, 'Une romance musicale entre une actrice en herbe et un musicien de jazz passionné à Los Angeles.', 5, 128, NULL, 2),
	(4, 'Pulp Fiction', 1994, 'Plusieurs histoires entrelacées sur la vie criminelle à Los Angeles avec humour noir et violence.', 5, 154, NULL, 4),
	(5, 'The Dark Knight', 2008, 'Batman sallie avec le procureur et le lieutenant de Gotham City pour lutter contre le crime organisé.', 4, 152, NULL, 1),
	(6, 'Forrest Gump', 1994, 'Un homme simple desprit partage son extraordinaire vie en participant à des moments clés de lhistoire américaine.', 5, 142, NULL, 5),
	(7, 'The Godfather', 1972, 'La saga de la famille Corleone, chef dune puissante famille mafieuse italo-américaine.', 5, 175, NULL, 6),
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
  CONSTRAINT `jouer_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE,
  CONSTRAINT `jouer_ibfk_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`) ON DELETE CASCADE,
  CONSTRAINT `jouer_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `rolefilm` (`id_role`) ON DELETE CASCADE
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
	(1, 'Nolan', 'Christopher', '1970-07-30', 'M'),
	(2, 'Chazelle', 'Damien', '1985-01-19', 'M'),
	(3, 'Darabont', 'Frank', '1959-01-28', 'M'),
	(4, 'Tarantino', 'Quentin', '1963-03-27', 'M'),
	(5, 'Zemeckis', 'Robert', '1952-05-14', 'M'),
	(6, 'Coppola', 'Francis Ford', '1939-04-07', 'M'),
	(7, 'Spielberg', 'Steven', '1946-12-18', 'M'),
	(8, 'Wachowskis', 'The', '1965-06-21', 'Autre'),
	(10, 'Stevenson', 'Arkasha', '1992-12-08', 'F'),
	(14, 'Braga', 'Sonia', '1950-06-08', 'F'),
	(15, 'Arcangeli', 'Andrea', '1993-08-03', 'M'),
	(16, 'Caballero', 'Maria', '1998-06-13', 'F'),
	(17, 'DiCaprio', 'Leonardo', '1974-11-11', 'M'),
	(18, 'Hardy', 'Tom', '1977-09-15', 'M'),
	(19, 'Page', 'Ellen', '1987-02-21', 'F'),
	(22, 'Gosling', 'Ryan', '1980-11-12', 'M'),
	(23, 'Stone', 'Emma', '1988-11-06', 'F'),
	(24, 'Legend', 'John', '1978-12-28', 'M'),
	(26, 'Finn Wittrock', 'Finn', '1984-10-28', 'M'),
	(32, 'Travolta', 'John', '1954-02-18', 'M'),
	(33, 'Jackson', 'Samuel L.', '1948-12-21', 'M'),
	(34, 'Thurman', 'Uma', '1970-04-29', 'F'),
	(37, 'Bale', 'Christian', '1974-01-30', 'M'),
	(38, 'Ledger', 'Heath', '1979-04-04', 'M'),
	(39, 'Caine', 'Michael', '1933-03-14', 'M'),
	(42, 'Hanks', 'Tom', '1956-07-09', 'M'),
	(43, 'Wright', 'Robin', '1966-04-08', 'M'),
	(44, 'Sinise', 'Gary', '1955-03-17', 'M'),
	(47, 'Brando', 'Marlon', '1924-04-03', 'M'),
	(48, 'Pacino', 'Al', '1940-04-25', 'M'),
	(49, 'Caan', 'James', '1940-03-26', 'M');

-- Listage de la structure de table cinema_asma. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  UNIQUE KEY `id_personne` (`id_personne`),
  CONSTRAINT `realisateur_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`) ON DELETE CASCADE
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
	(4, 'Silvia'),
	(5, 'Paolo'),
	(6, 'Luz'),
	(7, 'Sebastian London'),
	(8, 'Mia Scottsdale'),
	(9, 'Keith Springfield'),
	(16, 'Pulp Fiction Vincent Vega Knoxville'),
	(17, 'Jules Winnfield Washington'),
	(18, 'Mia Wallace Paris'),
	(21, 'Bruce Wayne Batman'),
	(22, 'Joker Perth'),
	(23, 'Alfred Pennyworth London'),
	(26, 'Forrest Gump Mobile'),
	(27, 'Jenny Curran Phoenix'),
	(28, 'Lieutenant Dan Taylor New York'),
	(31, 'Don Vito Corleone New York City'),
	(32, 'Michael Corleone Brooklyn'),
	(33, 'Sonny Corleone New York City'),
	(51, 'Dom Cobb'),
	(52, 'Eames'),
	(53, 'Ariadne');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

