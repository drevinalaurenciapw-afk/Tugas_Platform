/*
SQLyog Community v13.3.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - pencarian_film
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pencarian_film` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `pencarian_film`;

/*Table structure for table `film` */

DROP TABLE IF EXISTS `film`;

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `tahun_rilis` int(11) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `film` */

insert  into `film`(`id_film`,`judul`,`tahun_rilis`,`genre`,`rating`,`sinopsis`,`poster`,`gambar`) values 
(1,'Avengers Endgame',2019,'Action',8.9,'Perjuangan Avengers melawan Thanos',NULL,'1.AvengersEndgame.jpg'),
(2,'Mencuri Raden Saleh',2022,'Action',7.7,'Aksi pencuriian lukisan berharga di Istana Negara oleh sekelompok Mahasiswa',NULL,'2.MencuriRadenSaleh.jpg'),
(3,'Fast & Furious Fast Five',2015,'Action',7.3,'Mantan Pembalap liar yaitu Dom dan krunya  balas dendam mematikan sambil menjalankan misi rahasia',NULL,'3.Fast.jpg'),
(4,'Dilan 1990',2018,'Romance',7,'Milea,seorang siswi pindahan di Bandung,menghadapi lika-liku romansa remaja dengan Dilan seorang panglima geng motor',NULL,'4.Dilan1990.jpg'),
(5,'La La Land',2016,'Romance',8,'Sepasang kekasih di Los Angeles,saling mendukung demi meraih impian masing-masing,namun takdir memaksa mereka memilih cinta atau ambisi pribadi',NULL,'5.LaLaLand.jpg'),
(6,'20th Century Girl',2022,'Romance',7.3,'Bo-ra berjanji kepada sahabatnya yang sedang berobat diluar negeri untuk mengintai cowo yang ditaksir. Namun ia malah terjebak dilema antara persahabatan dan cinta',NULL,'6.20thCenturyGirl.jpg'),
(7,'Pengabdi Setan',2017,'Horor',6.5,'Rini dan adik-adiknya mengalami serangkaian kejadian superanatural dirumah mereka akibat ulah sang ibu yang terlibat sekte penyembah setan',NULL,'7.PengabdiSetan.jpg'),
(8,'Annabelle',2014,'Horor',5.4,'Sepasang suami istri mengalami teror mengerikan setelah John(suami) menghadihkan boneka langka yang ternyata itu adalah boneka iblis',NULL,'8.Annabelle.jpg'),
(9,'Perempuan Tanah Jahanam',2019,'Horor',6.6,'Maya yang memutuskan mencari jati dirinya dengan pergi ke desa asal orangtuanya justru mengungkapkan suatu hal kelam yang disembunyikan orangtuanya',NULL,'9.PerempuanTanahJahanam.jpg'),
(10,'Nanti Kita Cerita Tentang Hari ini',2023,'Drama',7,'Drama keluarga yang sangat menguras emosi dan relatable',NULL,'10.NantiKitaCeritaTentangHariIni.jpg'),
(11,'Itaewon Class',2020,'Drama',8.2,'Perjuangan hidup dan balas dendan koporat yang sangat menginspirasi',NULL,'11.ItaewonClass.jpg'),
(12,'Hachiko',2009,'Drama',8.1,'Kisah seokor anjing bernama Hachi yang setia menunggu tuannya pulang sampai akhir hayatnya',NULL,'12.Hachiko.jpg'),
(13,'Jumbo',2025,'Animation',8.2,'Kisah seorang anak bernama JUMBO yang memiliki petualangan yang seru dan penuh plottwist dalam ceritanya',NULL,'13.Jumbo.jpg'),
(14,'Frozen',2013,'Animation',7.5,'Petualangan kakak beradik Elsa dan Anna',NULL,'14.Frozen.jpg'),
(15,'Inside Out 2',2024,'Animation',7.6,'Saat menginjak remaja Rilley kedatangan emosi-emosi baru yang mengambil alih ruang kendali dari emosi lamanya',NULL,'15.InsideOut2.jpg'),
(16,'Agak Laen',2024,'Comedy',8,'Empat sekawan pengelola rumah hantu pasar malam terpaksa mengubur jenazah pengunjung yang mati jantungan',NULL,'16.AgakLaen.jpg'),
(17,'Jumanji',2017,'Comedy',7,'Sekelompok anak SMA yang tiba-tiba tersedot masuk ke video game kuno',NULL,'17.Jumanji.jpg'),
(18,'Imperfect',2019,'Comedy',7.7,'Rara seorang wanita cerdas yang mengalami krisis rasa percaya diri karena sering mendapat body shaming di kantornya',NULL,'18.Imperfect.jpg'),
(19,'Harry Potter',2001,'Fantasi',7.6,'Awal petualangan ajaib di Sekolah Hogwarts sambil menghadapi ancaman penyihir kegelapan yang membunuh orang tuanya',NULL,'19.HarryPotter.jpg'),
(20,'My Neighbor Totoro',1988,'Fantasi',8.1,'Kakak beradik yang bertemu seekor roh hutan raksasa berbulu lembut yang mereka namai Totoro, yang membawa keajaiban dalam hidup mereka',NULL,'20.MyNeighborTotoro.jpg'),
(21,'The School for Good and Evil',2022,'Fantasi',5.9,'Dua sahabat karib, Sophie dan Agatha, mendapati diri mereka diculik dan dibawa ke sebuah sekolah sihir dan itu menguji persahabatan mereka',NULL,'21.TheSchoolforGoodandEvil.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
