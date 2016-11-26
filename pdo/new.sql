-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table addressbook.cityaddress: 4 rows
/*!40000 ALTER TABLE `cityaddress` DISABLE KEYS */;
INSERT INTO `cityaddress` (`city_id`, `name`) VALUES
	(1, 'Malabon'),
	(2, 'Las Pinas'),
	(3, 'Taguig'),
	(4, 'Mandaluyong');
/*!40000 ALTER TABLE `cityaddress` ENABLE KEYS */;

-- Dumping data for table addressbook.colors: 3 rows
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` (`color_id`, `name`) VALUES
	(1, 'Red'),
	(2, 'Blue'),
	(3, 'White');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;

-- Dumping data for table addressbook.contacts: 10 rows
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`user_id`, `city_id`, `color_id`, `pet_id`, `name`) VALUES
	(1, 1, 1, 1, 'Anthony'),
	(2, 2, 2, 2, 'Mikko'),
	(3, 3, 3, 3, 'Ronnie'),
	(4, 4, 4, 4, 'Wendell'),
	(5, 5, 5, 5, 'Michael'),
	(6, 6, 6, 6, 'Haidee'),
	(7, 7, 7, 7, 'Zandro'),
	(8, 8, 8, 8, 'Christian'),
	(9, 9, 9, 9, 'Lyn'),
	(10, 10, 10, 10, 'Carlo');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping data for table addressbook.pets: 3 rows
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
INSERT INTO `pets` (`pet_id`, `name`) VALUES
	(1, 'Dog'),
	(2, 'Cat'),
	(3, 'Fish');
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
