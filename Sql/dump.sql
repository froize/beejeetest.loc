-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for beejee
CREATE DATABASE IF NOT EXISTS `beejee` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `beejee`;

-- Dumping structure for table beejee.task
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `admin_edit` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beejee.task: ~8 rows (approximately)
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` (`id`, `name`, `email`, `content`, `status`, `admin_edit`) VALUES
	(1, 'Task1', 'email@yandex.com', 'New Task', 0, 0),
	(2, 'Task3', 'user@mail.ru', 'asdasd', 1, 0),
	(3, 'Task3', 'webmaster@example.com', 'asdasd', 1, 0),
	(4, 'Task4', 'user3@example.com', 'asdasd', 1, 0),
	(5, 'Task5', 'asdasd@example.com', 'asdasds', 0, 0),
	(6, 'tesst', 'test@test.com', 'test job', 0, 0),
	(7, 'asddas', 'asdasde@example.com', 'ss234223424234', 0, 1),
	(8, 'Task8', 'webmaster@beejee.org', 'asss', 1, 1);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
