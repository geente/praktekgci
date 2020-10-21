/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.21-0ubuntu0.20.04.4 : Database - praktekgci
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`praktekgci` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `praktekgci`;

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id_jurusan` int NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(255) DEFAULT NULL,
  `id_fakultas` int DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `jurusan` */

insert  into `jurusan`(`id_jurusan`,`jurusan`,`id_fakultas`) values 
(1,'Teknik Informatika',NULL),
(2,'Teknik Sipil',NULL),
(3,'Sistem Informasi',NULL);

/*Table structure for table `level_user` */

DROP TABLE IF EXISTS `level_user`;

CREATE TABLE `level_user` (
  `id_level` int NOT NULL AUTO_INCREMENT,
  `level` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `level_user` */

insert  into `level_user`(`id_level`,`level`) values 
(1,'pimpinan'),
(2,'bendahara'),
(3,'mahasiswa');

/*Table structure for table `semester` */

DROP TABLE IF EXISTS `semester`;

CREATE TABLE `semester` (
  `id_semester` int NOT NULL AUTO_INCREMENT,
  `semester` varchar(5) DEFAULT NULL,
  `genap` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `semester` */

insert  into `semester`(`id_semester`,`semester`,`genap`) values 
(1,'I','no'),
(2,'II','yes'),
(3,'III','no'),
(4,'IV','yes');

/*Table structure for table `tagihan` */

DROP TABLE IF EXISTS `tagihan`;

CREATE TABLE `tagihan` (
  `id_tagihan` int NOT NULL AUTO_INCREMENT,
  `nama_tagihan` varchar(255) DEFAULT NULL,
  `angkatan` year DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  PRIMARY KEY (`id_tagihan`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tagihan` */

insert  into `tagihan`(`id_tagihan`,`nama_tagihan`,`angkatan`,`jumlah`) values 
(14,'SPP',2018,3200000),
(15,'SPP',2019,3000000),
(29,'SPP',2018,3200000);

/*Table structure for table `tagihan_mhs` */

DROP TABLE IF EXISTS `tagihan_mhs`;

CREATE TABLE `tagihan_mhs` (
  `id_tagihan_mhs` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `id_tagihan` int DEFAULT NULL,
  `status` enum('lunas','tunda') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'tunda',
  PRIMARY KEY (`id_tagihan_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tagihan_mhs` */

insert  into `tagihan_mhs`(`id_tagihan_mhs`,`id_user`,`id_tagihan`,`status`) values 
(1,3,14,'lunas'),
(2,4,15,'tunda'),
(4,3,29,'tunda');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `tahun_masuk` year DEFAULT NULL,
  `id_jurusan` int DEFAULT NULL,
  `id_level` int DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id_user`,`nik`,`nama`,`username`,`password`,`tahun_masuk`,`id_jurusan`,`id_level`) values 
(1,'132001','Zainal Ali','zainal','5486718b3496396344b004e2fb6eabda',2010,NULL,1),
(2,'212001','Anita','anita','83349cbdac695f3943635a4fd1aaa7d0',2010,NULL,2),
(3,'223000','Lukaman Hanif','lukman','b5bbc8cf472072baffe920e4e28ee29c',2018,1,3),
(4,'223001','Asri Ananta','asri','371e3678e35662cc9862fdb96fece88b',2019,2,3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
