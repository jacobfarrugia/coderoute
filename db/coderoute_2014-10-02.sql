# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.15)
# Database: coderoute
# Generation Time: 2014-10-02 18:55:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table applications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `applications`;

CREATE TABLE `applications` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `full-name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `course-date` varchar(100) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `experience` varchar(1000) DEFAULT NULL,
  `how-hear` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;

INSERT INTO `applications` (`id`, `full-name`, `email`, `phone`, `course-date`, `reason`, `experience`, `how-hear`)
VALUES
	(4,'bob','jacobfarrugia@gmail.com','447500701065','jan-15','dfsa','dsf fdaf','facebook'),
	(5,'bob','jacobfarrugia@gmail.com','447500701065','jan-15','dfsa','dsf fdaf','facebook'),
	(6,'sdfaf','dfsdaf@gmail.com','q234242342342','jan-15','sdafdsaf asdsaf','sdafdsaf sfsdaf',NULL);

/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
