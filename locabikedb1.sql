-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for locabikedb1
DROP DATABASE IF EXISTS `locabikedb1`;
CREATE DATABASE IF NOT EXISTS `locabikedb1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `locabikedb1`;

-- Dumping structure for table locabikedb1.locationvelo
DROP TABLE IF EXISTS `locationvelo`;
CREATE TABLE IF NOT EXISTS `locationvelo` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `locationType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix1h` float NOT NULL,
  `prix2h` float NOT NULL,
  `prix5h` float NOT NULL,
  `prix24h` float NOT NULL,
  `locationDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `locationImage` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table locabikedb1.locationvelo: ~6 rows (approximately)
INSERT INTO `locationvelo` (`id`, `locationType`, `prix1h`, `prix2h`, `prix5h`, `prix24h`, `locationDescription`, `locationImage`) VALUES
	(1, 'Vélo Électrique', 15, 20, 25, 35, 'Panier et antivol inclus', 'electrique.jpg'),
	(2, 'Velo ville', 5, 8, 10, 15, 'élo 20" ou 24", antivol et casque inclus', 'ville.jpg'),
	(3, 'VTT Adulte', 6, 9, 12, 18, 'Casque et guarde-bous inclus', 'vtt.jpg'),
	(4, 'VTT enfant', 5, 8, 10, 15, 'élo 20", antivol et casque inclus', 'vtt enfant.jpg'),
	(5, 'Remorque Enfant', 5, 8, 10, 15, 'Remorque pouvant contenir 2 enfants', 'remorque.jpg'),
	(6, 'Siège enfant', 4, 7, 9, 14, 'Plusieurs tailles et mini-parapluis inclus', 'siege.jpg');

-- Dumping structure for table locabikedb1.panier
DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `prix` decimal(20,6) NOT NULL DEFAULT '1.000000',
  `heures` int NOT NULL DEFAULT '2',
  `locationImage` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table locabikedb1.panier: ~0 rows (approximately)

-- Dumping structure for table locabikedb1.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `motdepasse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table locabikedb1.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
