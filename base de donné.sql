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


-- Listage de la structure de la base pour locabikedb
DROP DATABASE IF EXISTS `locabikedb`;
CREATE DATABASE IF NOT EXISTS `locabikedb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `locabikedb`;

-- Listage de la structure de table locabikedb. locationvelo
DROP TABLE IF EXISTS `locationvelo`;
CREATE TABLE IF NOT EXISTS `locationvelo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `locationType` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `prix1h` float NOT NULL DEFAULT '0',
  `prix2h` float NOT NULL DEFAULT '0',
  `prix5h` float NOT NULL DEFAULT '0',
  `prix24h` float NOT NULL DEFAULT '0',
  `locationDescription` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table locabikedb.locationvelo : ~4 rows (environ)
INSERT INTO `locationvelo` (`id`, `locationType`, `prix1h`, `prix2h`, `prix5h`, `prix24h`, `locationDescription`) VALUES
	(1, 'Vélo Adulte', 6, 9, 12, 18, 'Panier, antivol et porte bébé inclus'),
	(2, 'Vélo Enfant', 5, 8, 10, 15, 'Vélo 20" ou 24", antivol et casque inclus'),
	(3, 'Remorque Enfant', 5, 8, 10, 15, 'Remorque pouvant acceuillir 2 enfants'),
	(4, 'Vélo Électrique', 15, 20, 25, 35, 'Panier et antivol inclus');

-- Listage de la structure de table locabikedb. utilisateurs
DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT '0',
  `prenom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT '0',
  `email` varchar(60) COLLATE utf8mb4_general_ci DEFAULT '0',
  `motdepasse` varchar(100) COLLATE utf8mb4_general_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table locabikedb.utilisateurs : ~1 rows (environ)
INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `motdepasse`) VALUES
	(1, 'savreux', 'stephane', 'tetef80100@gmail.com', '$2y$10$ZcxbaZJ9IKqr8.IxsrMy8uR6SnT8KOeLCmbDv57f9IPYF.nt8vwiW');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
