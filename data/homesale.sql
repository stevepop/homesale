# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.1.8 (MySQL 5.5.29-0ubuntu0.12.04.2)
# Database: homesale
# Generation Time: 2013-03-07 21:48:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) DEFAULT NULL,
  `description` text,
  `file_name` varchar(100) NOT NULL DEFAULT '',
  `thumb_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `title`, `description`, `file_name`, `thumb_url`)
VALUES
	(3,'Back View','Back View of the house 1','back_view1.jpg','back_view1_tn.jpg'),
	(4,'Back View','Back View of the house 2','back_view2.jpg','back_view2_tn.jpg'),
	(5,'Back View','Back View of the house 3','back_view2.jpg','back_view3_tn.jpg'),
	(6,'Front View','Front Upper View of the house 1','front_up.jpg','front_up_tn.jpg'),
	(7,'Upper Room View','Front Upper View of the house 1','front_view1.jpg','front_view1_tn.jpg'),
	(8,'Upper Room View 2','Front Upper View of the house 2','front_view2.jpg','front_view2_tn.jpg'),
	(9,'Front Bedroom','Main front bedroom','main_front_bed.jpg','main_front_bed_tn.jpg'),
	(10,'Wardrobes','Middle bedroom wardrobes','mid_bed_wardrobes.jpg','mid_bed_wardrobes_tn.jpg'),
	(11,'Features','Original Features','original_features.jpg','original_features_tn.jpg'),
	(12,'Bath Shower','Shower','shower.jpg','shower_tn.jpg'),
	(13,'Bath Shower','Shower Bathrooom','shower_bath_room.jpg','shower_bath_room_tn.jpg'),
	(14,'Staircase','Staircase','staircase.jpg','staircase_tn.jpg'),
	(15,'Middle Bedroom','View from middle bedroom','view_from_mid_bed.jpg','view_from_mid_bed_tn.jpg');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
