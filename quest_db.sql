/*
SQLyog Trial v12.15 (64 bit)
MySQL - 5.5.44-0ubuntu0.14.04.1 : Database - quest_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`quest_db` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `quest_db`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `email` varchar(254) DEFAULT NULL,
  `login` varchar(40) DEFAULT NULL,
  `real_name` varchar(80) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `birth_date` varchar(10) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`email`,`login`,`real_name`,`password`,`birth_date`,`country`,`id`) values 
('sads@asdas.daa','sdasdaad','asdassss','c2230e2ac8a4a6d84e861d5c844b7a1a4f054424','2015-10-16','0',7),
('goof152007@ya.ru','Admin','Artur','0017b206df2e6252036a05ea3001dd6d1fe4ec71','2015-10-10','18',8),
('asdas@sda.sad','asdasddsdsada','asASAA','f10413631c74e38dc5b12605a9498c3b10ede6a7','2015-10-15','0',9),
('vvvv@faf.com','Victor','Victor','54e3375d4acc1ba970672cc1737efd6a86b0e156','1969-10-13','104',10);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
