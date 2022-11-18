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
/*Table structure for table `halamanstatis` */

DROP TABLE IF EXISTS `halamanstatis`;

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_main` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_halaman`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `halamanstatis` */

insert  into `halamanstatis`(`id_halaman`,`judul`,`isi_halaman`,`tgl_posting`,`gambar`,`id_main`) values (1,'Profil Perusahaan','<p>\\r\\n<strong>Bukulokomedia.com</strong> merupakan website resmi dari penerbit\\r\\nLokomedia yang bermarkas di Jl. Jambon. Perum. Pesona Alam Hijau 2 Blok B-4 Kricak, Jatimulyo, Yogyakarta\\r\\n55242. Dirintis pertama kali oleh Lukmanul Hakim pada tanggal 14 Maret\\r\\n2008.<br>\\r\\n<br>\\r\\nProduk unggulan dari penerbit Lokomedia adalah buku-buku serta aksesoris bertema Web, terutama PHP (PHP: Hypertext Preprocessor) yang merupakan pemrograman Internet paling handal saat ini.\\r\\n</p>','2016-10-19','gedungku.jpg',NULL),(2,'Visi dan Misi','<p>Visi :</p>\r\n\r\n<p>Memberikan pelayanan yang terbaik dengan tetap mengedepankan faktor keamanan Barang Kiriman dan Keselamatan Kerja.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Misi :</p>\r\n\r\n<p>Menjadi Perusahaan Jasa Pelayanan Pengiriman yang mempu memberikan Manfaat Pelayanan yang Maksimal, Aman dan Tepat Waktu serta meberikan kontribusi terhadap penyediaan lapangan Kerja, Pelatihan serta Edukasi bagi Tenaga Kerja secara Profesional</p>\r\n','2022-11-10','',3),(3,'Struktur Organisasi','<p>Isikan struktur organisasi di bagian ini</p>\r\n','2017-05-10','',3),(7,'Spesialis','<p>Kami Spesialis di Bidang logistik</p>\r\n','2022-11-08','industrial-chemica.jpg',NULL),(8,'Cargo & Logistics','<ol>\r\n	<li>Pemberangkatan setiap hari</li>\r\n	<li>Door to door service (Sumatera, Jawa, Bali &amp; Lombok)</li>\r\n	<li>Armada box segala ukuran dan kapasitas</li>\r\n	<li>Update status pengiriman</li>\r\n	<li>Kantor cabang disetiap provinsi &amp; kabupaten</li>\r\n</ol>\r\n','2022-11-17','truck7.png',63),(9,'Trucking Charter','<p>Layanan charter penuh dan terpisah mengatur truck muaran khusus untuk<br />\r\nmengangkut barang dalam jumlah besar atau kargo besar. Opsi ini memberi pengirim tingkat fleksibilitas sehubungan dengan waktu keberangkatan dan mengamankan transportasi kargo udara yang cepat dan aman.</p>\r\n','2022-11-17','truck26.png',63),(10,'Line Haul','<p>Line Haul dalam ekspedisi pengiriman barang atau kargo antara kota. Jadi, proses paket dari pengirim asal ke alamat penerima.</p>\r\n\r\n<ul>\r\n	<li>Line Haul Darat: pergerakan paket antar titik distribusi ekspedisi melalui jalur darat. Mode transportasinya jelas truk logistik, kereta api, box, pickup semacamnya.</li>\r\n	<li>Line Haul Air/Laut: kargo ditujukan antar pelabuhan kota dengan perjalanan air/laut. Kendaraannya ya variasi kapal.</li>\r\n	<li>Line Haul Udara: melayani pengiriman melalui udara, memakai pesawat.</li>\r\n</ul>\r\n','2022-11-17','truck23.png',63),(11,'Domestic Sea Freight','<p>Jasa pengiriman barang murah melalui jalur laut ke seluruh wilayah nusantara melalui pelabuhan menggunakan berbagai jenis kapal. Baik Pelni ataupun Roro</p>\r\n','2022-11-17','ocean-freight.png',63),(12,'Domestic Air Freight','<p>Jasa pengiriman barang cargo murah via jalur udara ke wilayah Sumatera, Jawa, Bali, NTB, NTT, Kalimantan, Sulawesi hingga Papua, dengan pelayanan kilat.</p>\r\n','2022-11-17','air-freight.png',63);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
