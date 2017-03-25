/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - kemahasiswaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kemahasiswaan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kemahasiswaan`;

/*Table structure for table `fcmregid` */

DROP TABLE IF EXISTS `fcmregid`;

CREATE TABLE `fcmregid` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `fcmid` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fcmregid` */

/*Table structure for table `informasi` */

DROP TABLE IF EXISTS `informasi`;

CREATE TABLE `informasi` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `jampost` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `informasi` */

insert  into `informasi`(`id`,`judul`,`isi`,`jampost`) values (1,'Penyerahan Penghargaan kepada UKM LUG','Penyerahan Penghargaan kepada UKM LUG karena telah memenangkan bermacam-macam lomba yang di adakan di daerah surabaya ataupun di luar surabaya','16:40:56'),(2,'Penyerahan Penghargaan kepada UKM SJN','Penyerahan Penghargaan kepada UKM LUG karena telah berdedikasi terhadap Institut bisnis dan informatik stikom surabaya','18:46:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
