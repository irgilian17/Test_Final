-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for flight_management
CREATE DATABASE IF NOT EXISTS `flight_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `flight_management`;

-- Dumping structure for table flight_management.flights
CREATE TABLE IF NOT EXISTS `flights` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `flight_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` datetime NOT NULL,
  `arrival_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table flight_management.flights: ~6 rows (approximately)
DELETE FROM `flights`;
INSERT INTO `flights` (`id`, `flight_number`, `airline`, `origin`, `destination`, `departure_time`, `arrival_time`, `created_at`, `updated_at`) VALUES
	(6, 'GA123', 'Garuda Indonesia', 'CGK', 'DPS', '2024-08-01 09:30:00', '2024-08-01 12:30:00', NULL, NULL),
	(8, 'SQ456', 'Singapore Airlines', 'SIN', 'CGK', '2024-08-01 14:00:00', '2024-08-01 16:30:00', NULL, NULL),
	(9, 'QZ789', 'AirAsia', 'KUL', 'DPS', '2024-08-02 08:00:00', '2024-08-02 11:00:00', NULL, NULL),
	(10, 'LH101', 'Lufthansa', 'FRA', 'SIN', '2024-08-02 20:45:00', '2024-08-03 12:05:00', NULL, NULL),
	(11, 'CX555', 'Cathay Pacific', 'HKG', 'SYD', '2024-08-03 10:30:00', '2024-08-03 21:00:00', NULL, NULL),
	(12, 'JL300', 'Japanese Airlines', 'NRT', 'SYD', '2024-08-03 17:00:00', '2024-08-04 03:00:00', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
