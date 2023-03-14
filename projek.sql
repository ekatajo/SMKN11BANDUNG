/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.4.27-MariaDB : Database - projek
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`projek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `projek`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `nip` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` char(255) NOT NULL,
  `kota` char(255) NOT NULL,
  `kodepos` char(255) NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nip`),
  UNIQUE KEY `guru_nip_unique` (`nip`),
  UNIQUE KEY `guru_username_unique` (`username`),
  KEY `guru_kode_mapel_foreign` (`kode_mapel`),
  CONSTRAINT `guru_kode_mapel_foreign` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1980609081 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `guru` */

insert  into `guru`(`nip`,`nama`,`email`,`username`,`password`,`level`,`gender`,`alamat`,`kecamatan`,`kota`,`kodepos`,`kode_mapel`,`remember_token`,`created_at`,`updated_at`) values 
(195009010,'Usep','Usep@gmail.com','Admin','$2y$10$0jduWLyvtGl5NI2Z4YZFbOwWzSradx.emr.Zz3FeO3wkZD/sj95Wa','Kurikulum','L','Jl. Setiabudhi No.48','Sukasari','Bandung','406580','M-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(198025459,'Andika','Rahmat@gmail.com','Andika','$2y$10$D1roR2r2vWbngi0XpEdwhOXgqi97..FMCrzBjqKiuoVW6552UqSHy','Guru','L','Jl. Setiabudhi No. 90','Sukasari','Bandung','407080','B-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(198056900,'Rover','Rahmat@gmail.com','Rover','$2y$10$PeBwra6LlMq0novy.z3KA.eTO0IQJJVuKXBIK300sDfSzKdcYqCte','Guru','L','Jl. Setiabudhi No. 90','Sukasari','Bandung','407080','M-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(199009090,'Ujang','Ujang@gmail.com','Ujang','$2y$10$cl8ThvBK4zD.wFhw66ifT.7Zr3Ofn3rNNdH.LwKgsnVH/LqxdMNM2','Guru','L','Jl. Setiabudhi No. 908','Sukasari','Bandung','408080','M-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(1980070800,'Rahmat','Rahmat@gmail.com','Kemet','$2y$10$bQ6n7B4VQZFsRfTHuiQmqOl8B4ZgHpMvO/V0CXKnrDUJcfjrfRDL.','Guru','L','Jl. Setiabudhi No. 90','Sukasari','Bandung','407080','M-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(1980204590,'Sandi','Rahmat@gmail.com','Sandi','$2y$10$549Z.2RKjhGDa0m9UT68/OTa82V4lHczGwz.MzTXGgPhvmYy8CtqW','Guru','L','Jl. Setiabudhi No. 90','Sukasari','Bandung','407080','BK-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(1980609080,'Anton Gordon','Rahmat@gmail.com','Anton','$2y$10$xXnkOS1nqlXahYBhlKv9ueViEcD9NhQDhxMu0FfkSqGLqPnvuo2Lu','Guru','L','Jl. Setiabudhi No. 90','Sukasari','Bandung','407080','B-001',NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `kode` varchar(255) NOT NULL,
  `kelas` char(255) NOT NULL,
  `jurusan` char(255) NOT NULL,
  `rombel` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `kelas_kode_unique` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kelas` */

insert  into `kelas`(`kode`,`kelas`,`jurusan`,`rombel`,`created_at`,`updated_at`) values 
('10AKL1','10','Multimedia','1','2023-02-23 10:29:08','2023-02-23 10:29:08'),
('10DKV1','10','Desain Komunikasi Visual','1','2023-02-23 10:29:08','2023-02-23 10:29:08'),
('10MPLB1','10','Manajemen Logistik','1','2023-02-23 10:29:08','2023-02-23 10:29:08'),
('10PM1','10','Pemasaran','1','2023-02-23 10:29:08','2023-02-23 10:29:08'),
('10PPLG2','10','Pemograman Perangkat Lunak Gim','2','2023-02-23 10:29:08','2023-02-23 10:29:08');

/*Table structure for table `komponen` */

DROP TABLE IF EXISTS `komponen`;

CREATE TABLE `komponen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` int(10) unsigned NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `nama` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `komponen_nama_unique` (`nama`),
  KEY `komponen_kode_mapel_foreign` (`kode_mapel`),
  KEY `komponen_nip_foreign` (`nip`),
  CONSTRAINT `komponen_kode_mapel_foreign` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode`) ON DELETE CASCADE,
  CONSTRAINT `komponen_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `komponen` */

insert  into `komponen`(`id`,`nip`,`kode_mapel`,`nama`,`created_at`,`updated_at`) values 
(1,199009090,'M-001','test',NULL,NULL),
(2,199009090,'M-001','berakal',NULL,NULL),
(3,199009090,'M-001','Membaca',NULL,NULL),
(4,199009090,'M-001','Menulis',NULL,NULL),
(5,199009090,'M-001','Baca',NULL,NULL),
(6,199009090,'M-001','Membaca Manulis',NULL,NULL);

/*Table structure for table `log_aktivitasguru` */

DROP TABLE IF EXISTS `log_aktivitasguru`;

CREATE TABLE `log_aktivitasguru` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` int(10) unsigned NOT NULL,
  `id_subjek` int(10) unsigned NOT NULL,
  `keterangan` char(20) NOT NULL,
  `nis` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`),
  KEY `nis` (`nis`),
  KEY `id_subjek` (`id_subjek`),
  CONSTRAINT `log_aktivitasguru_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `log_aktivitasguru` */

insert  into `log_aktivitasguru`(`id`,`nip`,`id_subjek`,`keterangan`,`nis`,`created_at`,`updated_at`) values 
(3,199009090,6,'Menambahkan Komponen',NULL,'2023-03-01 07:45:31','2023-03-01 07:45:31');

/*Table structure for table `log_komponen` */

DROP TABLE IF EXISTS `log_komponen`;

CREATE TABLE `log_komponen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` int(10) unsigned NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `id_komponen` int(10) unsigned NOT NULL,
  `nama` char(255) NOT NULL,
  `keterangan` char(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `log_komponen` */

insert  into `log_komponen`(`id`,`nip`,`kode_mapel`,`id_komponen`,`nama`,`keterangan`,`created_at`) values 
(4,199009090,'M-001',6,'Membaca Manulis','Menambahkan komponen','2023-03-02 13:45:32');

/*Table structure for table `log_nilai` */

DROP TABLE IF EXISTS `log_nilai`;

CREATE TABLE `log_nilai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nis` int(10) unsigned NOT NULL,
  `nip` int(10) unsigned NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `id_komponen` int(10) unsigned NOT NULL,
  `keterangan` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `log_nilai` */

insert  into `log_nilai`(`id`,`nis`,`nip`,`kode_mapel`,`id_komponen`,`keterangan`,`created_at`) values 
(2,200690900,199009090,'M-001',6,'Menambahkan nilai','2023-03-04 03:16:22'),
(3,200690900,199009090,'M-001',6,'Menambahkan nilai','2023-03-04 03:59:56');

/*Table structure for table `log_siswa` */

DROP TABLE IF EXISTS `log_siswa`;

CREATE TABLE `log_siswa` (
  `nis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_baru` varchar(255) NOT NULL,
  `username_baru` varchar(255) NOT NULL,
  `password_baru` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nis`),
  UNIQUE KEY `log_siswa_nis_unique` (`nis`),
  UNIQUE KEY `log_siswa_username_baru_unique` (`username_baru`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `log_siswa` */

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `kode` varchar(255) NOT NULL,
  `nama` char(255) NOT NULL,
  `kelas` char(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `mapel_kode_unique` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mapel` */

insert  into `mapel`(`kode`,`nama`,`kelas`,`created_at`,`updated_at`) values 
('B-001','Bahasa Indonesia','10','2023-02-23 10:29:08','2023-02-23 10:29:08'),
('BK-001','Bimbingan Konseling','10','2023-02-23 10:29:08','2023-02-23 10:29:08'),
('M-001','Matematika','10','2023-02-23 10:29:08','2023-02-23 10:29:08');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_10_08_075841_create_kelas_table',1),
(6,'2022_10_08_080109_create_mapel_table',1),
(7,'2022_10_08_080220_create_siswa_table',1),
(8,'2022_10_08_080258_create_guru_table',1),
(9,'2022_10_08_080418_create_komponen_table',1),
(10,'2022_10_08_080513_create_nilai_table',1),
(11,'2022_11_02_105244_create_mengajar_table',1),
(12,'2022_12_28_074011_create_walikelas_table',1),
(13,'2023_01_21_211313_create_activity_log_table',1),
(14,'2023_01_21_211314_add_event_column_to_activity_log_table',1),
(15,'2023_01_21_211315_add_batch_uuid_column_to_activity_log_table',1),
(16,'2023_02_13_195242_log_siswa',1);

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nis` int(10) unsigned NOT NULL,
  `nip` int(10) unsigned NOT NULL,
  `kode_mapel` varchar(255) NOT NULL,
  `id_komponen` int(10) unsigned NOT NULL,
  `nilai` char(255) NOT NULL,
  `predikat` char(255) NOT NULL,
  `keterangan` char(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nilai_kode_mapel_foreign` (`kode_mapel`),
  KEY `nilai_id_komponen_foreign` (`id_komponen`),
  KEY `nilai_nis_foreign` (`nis`),
  KEY `nilai_nip_foreign` (`nip`),
  CONSTRAINT `nilai_id_komponen_foreign` FOREIGN KEY (`id_komponen`) REFERENCES `komponen` (`id`) ON DELETE CASCADE,
  CONSTRAINT `nilai_kode_mapel_foreign` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode`) ON DELETE CASCADE,
  CONSTRAINT `nilai_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE,
  CONSTRAINT `nilai_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `nilai` */

insert  into `nilai`(`id`,`nis`,`nip`,`kode_mapel`,`id_komponen`,`nilai`,`predikat`,`keterangan`,`tahun`,`created_at`,`updated_at`) values 
(1,20065080,199009090,'M-001',1,'90','A','Baik',2023,NULL,NULL),
(2,20068900,199009090,'M-001',2,'0','D','tidak berakal',2023,NULL,NULL),
(3,20068900,199009090,'M-001',1,'90','A','amat baik',2023,NULL,NULL),
(4,20065080,199009090,'M-001',1,'90','A','Baik',2023,NULL,NULL),
(5,200690900,199009090,'M-001',4,'90','A','Baik',2023,NULL,NULL),
(6,200690900,199009090,'M-001',6,'90','A','Sangat Baik',2023,NULL,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` char(255) NOT NULL,
  `kota` char(255) NOT NULL,
  `kodepos` char(255) NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nis`),
  UNIQUE KEY `siswa_nis_unique` (`nis`),
  UNIQUE KEY `siswa_username_unique` (`username`),
  KEY `siswa_kode_kelas_foreign` (`kode_kelas`),
  CONSTRAINT `siswa_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=200690901 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `siswa` */

insert  into `siswa`(`nis`,`nama`,`email`,`username`,`password`,`gender`,`alamat`,`kecamatan`,`kota`,`kodepos`,`kode_kelas`,`tahun`,`remember_token`,`created_at`,`updated_at`) values 
(20065080,'Akbar','Akbar@gmail.com','Akbar','$2y$10$P2oFdV3N1/MKVlC7z6/jp.AWzVMQvJTGGdLxUyHPr.8NbBnIRLOZC','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10PPLG2',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(20065789,'Aji','Aji@gmail.com','Aji','$2y$10$vE6UkahEmkpEu83wd8AEpeJXhLS7tb7BnrQumsgOo8gX0NWPaLa06','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10PPLG2',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(20068900,'Abdul','Abdul@gmail.com','Abdul','$2y$10$P9N3GWA2ouzsW/ZoF6dxEOd68pJOvpJOtAvAo.DLvTIw1FDY8ePo6','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10PPLG2',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(20090800,'Gilang','Gilang@gmail.com','Gilang','$2y$10$Mmnh3T3lxMIMli/6oClTe.gVGI5CaALazbIKq2fjZQ0gN/OkEzmAC','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10DKV1',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(20096700,'Aldian','Aldian@gmail.com','Aldian','$2y$10$KSo9TepEt4suFTyHdkAp2.YAleO4ZID3DfhoGmhs9RbWdZgrRVb8a','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10DKV1',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(20097890,'Syarif','Syarif@gmail.com','Syarif','$2y$10$Qb79mhThLP0Mwsdpo4k0BO3HzEeOGeSp5IVtQ65REu762lCv5n8Vy','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10DKV1',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08'),
(200690900,'Fauzan','Akbar@gmail.com','Fauzan','$2y$10$hmZ2cjbgeFeyn8Xq5st2TuwE5hgqFD963hzeLKLktO1uClE5QFRhu','L','Jl. Setiabudhi No. 9','Sukasari','Bandung','409090','10PPLG2',2023,NULL,'2023-02-23 10:29:08','2023-02-23 10:29:08');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*Table structure for table `walikelas` */

DROP TABLE IF EXISTS `walikelas`;

CREATE TABLE `walikelas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip` int(10) unsigned NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `walikelas_kode_kelas_foreign` (`kode_kelas`),
  KEY `walikelas_nip_foreign` (`nip`),
  CONSTRAINT `walikelas_kode_kelas_foreign` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode`) ON DELETE CASCADE,
  CONSTRAINT `walikelas_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `walikelas` */

insert  into `walikelas`(`id`,`nip`,`kode_kelas`,`created_at`,`updated_at`) values 
(1,199009090,'10PPLG2',NULL,NULL),
(2,198025459,'10PM1',NULL,NULL);

/* Trigger structure for table `komponen` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_komponentambah` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_komponentambah` AFTER INSERT ON `komponen` FOR EACH ROW BEGIN
	insert into log_komponen (nip, kode_mapel, nama, id_komponen, keterangan, created_at) values (new.nip, new.kode_mapel, new.nama, new.id, 'Menambahkan komponen', now());
    END */$$


DELIMITER ;

/* Trigger structure for table `komponen` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_komponenedit` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_komponenedit` AFTER UPDATE ON `komponen` FOR EACH ROW BEGIN
	insert into log_komponen (nip, kode_mapel, nama, id_komponen, keterangan, created_at) values (old.nip, old.kode_mapel, old.nama, old.id, 'Mengedit komponen', now());
    END */$$


DELIMITER ;

/* Trigger structure for table `komponen` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_komponenhapus` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_komponenhapus` AFTER DELETE ON `komponen` FOR EACH ROW BEGIN
	insert into log_komponen (nip, kode_mapel, nama, id_komponen, keterangan, created_at) values (old.nip, old.kode_mapel, old.nama, old.id, 'Menghapus komponen', now());
    END */$$


DELIMITER ;

/* Trigger structure for table `nilai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_nilaitambah` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_nilaitambah` AFTER INSERT ON `nilai` FOR EACH ROW BEGIN
	Insert into log_nilai (nip, nis, kode_mapel, id_komponen, keterangan, created_at) values (new.nip, new.nis, new.kode_mapel, new.id_komponen, 'Menambahkan nilai', now());
    END */$$


DELIMITER ;

/* Trigger structure for table `nilai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_nilaiedit` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_nilaiedit` AFTER UPDATE ON `nilai` FOR EACH ROW BEGIN
	Insert into log_nilai (nip, nis, kode_mapel, id_komponen, keterangan, created_at) values (old.nip, old.nis, old.kode_mapel, old.id_komponen, 'Mengedit nilai', now());
    END */$$


DELIMITER ;

/* Trigger structure for table `nilai` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `log_nilaihapus` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `log_nilaihapus` AFTER DELETE ON `nilai` FOR EACH ROW BEGIN
	Insert into log_nilai (nip, nis, kode_mapel, id_komponen, keterangan, created_at) values (old.nip, old.nis, old.kode_mapel, old.id_komponen, 'Menghapus nilai', now());
    END */$$


DELIMITER ;

/* Function  structure for function  `total_angkatan` */

/*!50003 DROP FUNCTION IF EXISTS `total_angkatan` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `total_angkatan`(p_siswa VARCHAR(255)) RETURNS int(11)
    DETERMINISTIC
BEGIN
DECLARE jml INT;
SELECT COUNT(*) AS jlm_kelas INTO jml FROM siswa WHERE siswa.`tahun` = p_siswa COLLATE utf8mb4_unicode_ci;
RETURN jml;
END */$$
DELIMITER ;

/* Procedure structure for procedure `tahun_siswa` */

/*!50003 DROP PROCEDURE IF EXISTS  `tahun_siswa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `tahun_siswa`(tahun_siswa varchar(225)
    )
BEGIN
	select * from siswa where tahun = tahun_siswa;
	END */$$
DELIMITER ;

/*Table structure for table `guru_mapel` */

DROP TABLE IF EXISTS `guru_mapel`;

/*!50001 DROP VIEW IF EXISTS `guru_mapel` */;
/*!50001 DROP TABLE IF EXISTS `guru_mapel` */;

/*!50001 CREATE TABLE  `guru_mapel`(
 `nip` int(10) unsigned ,
 `nama` char(255) ,
 `gender` char(255) ,
 `alamat` text ,
 `kode` varchar(255) ,
 `nama_mapel` char(255) ,
 `kelas` char(255) 
)*/;

/*Table structure for table `siswa_kelas` */

DROP TABLE IF EXISTS `siswa_kelas`;

/*!50001 DROP VIEW IF EXISTS `siswa_kelas` */;
/*!50001 DROP TABLE IF EXISTS `siswa_kelas` */;

/*!50001 CREATE TABLE  `siswa_kelas`(
 `nis` int(10) unsigned ,
 `nama` char(255) ,
 `gender` char(255) ,
 `alamat` text ,
 `kode` varchar(255) ,
 `kelas` char(255) ,
 `jurusan` char(255) ,
 `rombel` char(255) 
)*/;

/*View structure for view guru_mapel */

/*!50001 DROP TABLE IF EXISTS `guru_mapel` */;
/*!50001 DROP VIEW IF EXISTS `guru_mapel` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `guru_mapel` AS select `guru`.`nip` AS `nip`,`guru`.`nama` AS `nama`,`guru`.`gender` AS `gender`,`guru`.`alamat` AS `alamat`,`mapel`.`kode` AS `kode`,`mapel`.`nama` AS `nama_mapel`,`mapel`.`kelas` AS `kelas` from (`guru` join `mapel` on(`guru`.`kode_mapel` = `mapel`.`kode`)) */;

/*View structure for view siswa_kelas */

/*!50001 DROP TABLE IF EXISTS `siswa_kelas` */;
/*!50001 DROP VIEW IF EXISTS `siswa_kelas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `siswa_kelas` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama`,`siswa`.`gender` AS `gender`,`siswa`.`alamat` AS `alamat`,`kelas`.`kode` AS `kode`,`kelas`.`kelas` AS `kelas`,`kelas`.`jurusan` AS `jurusan`,`kelas`.`rombel` AS `rombel` from (`siswa` join `kelas` on(`siswa`.`kode_kelas` = `kelas`.`kode`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
