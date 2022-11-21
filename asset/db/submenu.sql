/*
SQLyog Professional v12.09 (64 bit)
MySQL - 8.0.17 : Database - rimibyan
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `submenu` */

DROP TABLE IF EXISTS `submenu`;

CREATE TABLE `submenu` (
  `id_sub` int(5) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_main` int(5) NOT NULL,
  `id_submain` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `adminsubmenu` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `submenu` */

insert  into `submenu`(`id_sub`,`nama_sub`,`link_sub`,`id_main`,`id_submain`,`aktif`,`adminsubmenu`) values (47,'Food','',64,0,'Y','N'),(34,'Kategori Layanan','administrator/kategorilayanan',62,0,'N','Y'),(5,'Distribution','berita/kategori/distribution',5,5,'Y','N'),(7,'Warehousing','berita/kategori/warehousing',5,7,'Y','N'),(8,'Optimization','berita/kategori/optimization',5,8,'Y','N'),(11,'Manajemen Modul','administrator/manajemenmodul',14,0,'N','Y'),(10,'Identitas Web','administrator/identitaswebsite',14,0,'N','Y'),(12,'Manajemen User','administrator/manajemenuser',14,0,'N','Y'),(13,'Manajemen Template','administrator/templatewebsite',14,0,'N','Y'),(14,'Menu Utama','administrator/menuutama',15,0,'N','Y'),(15,'Sub Menu','administrator/submenu',15,0,'N','Y'),(16,'Kategori Berita','administrator/kategoriberita',16,0,'N','Y'),(17,'Berita','administrator/berita',16,0,'N','Y'),(18,'Komentar','administrator/komentar',16,0,'N','Y'),(19,'Halaman Statis','administrator/halamanbaru',16,0,'N','Y'),(20,'Tag / Label','administrator/tagberita',16,0,'N','Y'),(21,'Sensor Kata','administrator/sensorkata',16,0,'N','Y'),(22,'Album','administrator/album',52,0,'N','Y'),(23,'Galeri Foto','administrator/galeri',52,0,'N','Y'),(24,'Download','administrator/download',52,0,'N','Y'),(25,'Event','administrator/agenda',53,0,'N','Y'),(26,'Poling','administrator/polling',53,0,'N','Y'),(27,'Homepage','administrator/sekilasinfo',53,0,'N','Y'),(30,'ShoutBox','administrator/shoutbox',53,0,'N','Y'),(33,'Logistics','berita/kategori/logistics',5,33,'Y','N'),(46,'Garment','',64,0,'Y','N'),(35,'Layanan','',63,0,'N','Y'),(45,'Layanan Item','administrator/layanan',62,0,'N','Y'),(44,'Multiple Foto','administrator/multiplefoto',52,0,'N','Y'),(3,'Struktur Organisasi','page/detail/struktur-organisasi',3,0,'Y','N'),(2,'Visi dan Misi','page/detail/visi-dan-misi',3,0,'Y','N'),(41,'Alat Kesehatan','',64,0,'Y','N');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
