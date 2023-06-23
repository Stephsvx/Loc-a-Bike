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


-- Listage de la structure de la base pour locabikedb2
CREATE DATABASE IF NOT EXISTS `locabikedb4` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `locabikedb4`;

-- Listage de la structure de table locabikedb2. location
CREATE TABLE IF NOT EXISTS `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `locationType` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `prix1h` float NOT NULL DEFAULT '0',
  `prix2h` float NOT NULL DEFAULT '0',
  `prix5h` float NOT NULL,
  `prix24h` float NOT NULL,
  `locationDescription` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table locabikedb2.location : ~0 rows (environ)
INSERT INTO `location` (`id`, `locationType`, `prix1h`, `prix2h`, `prix5h`, `prix24h`, `locationDescription`) VALUES
	(1, 'Vélo Adulte', 6, 9, 12, 18, 'Panier, antivol et porte bébé inclus'),
	(2, 'Vélo Enfant', 5, 8, 10, 15, 'Vélo 20" ou 24", antivol et casque inclus'),
	(3, 'Remorque Enfant', 5, 8, 10, 15, 'Remorque pouvant contenir 2 enfants'),
	(4, 'Vélo Électrique', 15, 20, 25, 35, 'Panier et antivol inclus');

-- Listage de la structure de table locabikedb2. panier
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `veloType` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prixTotal` float NOT NULL,
  `heuresTotales` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table locabikedb2.panier : ~1 rows (environ)
INSERT INTO `panier` (`id`, `veloType`, `prixTotal`, `heuresTotales`) VALUES
	(1, 'Vélo Adulte', 18, 24);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
