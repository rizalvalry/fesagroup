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

/*Table structure for table `sekilasinfo` */

DROP TABLE IF EXISTS `sekilasinfo`;

CREATE TABLE `sekilasinfo` (
  `id_sekilas` int(5) NOT NULL AUTO_INCREMENT,
  `info` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci DEFAULT NULL,
  `urutan` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_sekilas`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `sekilasinfo` */

insert  into `sekilasinfo`(`id_sekilas`,`info`,`isi`,`tgl_posting`,`gambar`,`aktif`,`urutan`) values (1,'<p>We Grow with The Customer Trust, Through Quality, Cost and Delivery Time!</p>','<p>PT Fesa Antaran Logistik didirikan di Jakarta tanggal 22 Januari 2017 sesuai dengan Akte Pendirian Perusahaan yang diterbitkan oleh Notaris Sri Juwaryati, SH. MKN dengan nomor 57. Perusahaan Kami bergerak dibidang Pelayanan Jasa Pengankutan dan Distribusi Pengiriman Barang ke seluruh wilayah Indonesia melalui Darat dengan fasilitas Trucking(Line haul) maupun Kereta Api, Cargo Laut melalui Kapal Cepat maupun Tol Laut dan Cargo Udara.</p>\r\n','2010-04-11','fesa.png','Y',1),(2,'<div class=\"subtitle\">\r\n                        <p style=\"font-size:17px;margin-bottom:6px;color:#ffffff;\">\r\n                            Paket Anda, Prioritas Kami</p>\r\n                    </div>\r\n                    <div class=\"title-heading\">\r\n                        <h2 class=\"heading-tag\" style=\"color:#ffffff;font-size:43px;line-height:58px;font-weight:700; \">\r\n                            Pengiriman Digital\r\n<br /> Menghemat Waktu Anda!</h2>\r\n                    </div>','','2010-04-11','fesa_layout.jpg','Y',2),(15,'<div class=\"subtitle\">\r\n                        <p style=\"font-size:14px;margin-bottom:12px;color:#ff5e14;\">\r\n                            Services We Offer</p>\r\n                    </div>\r\n                    <div class=\"title-heading\">\r\n                        <h2 class=\"heading-tag\" style=\"line-height:46px;font-weight:700; \"> We\r\n                            Manage Lead Logistics<br /> For World’s\r\n                            Multinational<br /> Companies.</h2>\r\n                    </div>','<p>Our global logistics expertise, advanced supply chain technology &amp; customized logistics solutions will help you analyze, develop and implement successful supply chain management strategies from end-to-end.</p>\r\n','2022-11-09','shutterstock_647680018.jpg','Y',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
