# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.33)
# Database: test
# Generation Time: 2017-02-02 03:17:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table member
# ------------------------------------------------------------

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;

INSERT INTO `member` (`id`, `username`, `password`, `firstname`, `lastname`, `nickname`, `age`, `email`)
VALUES
	(6,NULL,NULL,'boy','hjkjk','b',23,'boy@gmail.com'),
	(9,NULL,NULL,'rrr','hjkjkiopp','d',44,'opsljsjcs@holl'),
	(10,'ddd','','ddd','ddd','hhh',0,''),
	(11,'ddd','','ddd','ddd','hhh',0,''),
	(12,'ddd','','ddd','ddd','hhh',0,''),
	(13,'sdfsdfsdf','sdfsdfsdf','sdfsdf','sdfsdf11111',NULL,NULL,NULL),
	(14,'xxxxx','xxxxxx','xxxxxx','xxxxxx',NULL,NULL,NULL),
	(15,'','','','',NULL,NULL,NULL),
	(16,'zzzzz','xxxxxx','bbbbb','mmmmmm',NULL,NULL,NULL),
	(17,'asdasd','asdasd','asdasd','asdasd',NULL,NULL,NULL),
	(18,'fffff','fff','ffff','ffff',NULL,NULL,NULL),
	(19,'wewe','wewewew','sdsds','dsdsds','sdd',22,'ere');

/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
