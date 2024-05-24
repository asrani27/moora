/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : cat

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 24/05/2024 21:24:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bobot
-- ----------------------------
DROP TABLE IF EXISTS `bobot`;
CREATE TABLE `bobot` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jurusan_id` int(11) unsigned DEFAULT NULL,
  `kategori_id` int(11) unsigned DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bobot
-- ----------------------------
BEGIN;
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (1, 7, 2, 3, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (2, 7, 3, 4, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (3, 7, 5, 6, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (4, 7, 7, 2, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (6, 7, 8, 7, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (7, 8, 2, 5, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (8, 8, 3, 6, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (9, 8, 5, 2, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (10, 8, 7, 6, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (11, 8, 8, 7, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (12, 9, 2, 7, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (13, 9, 3, 8, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (14, 9, 5, 6, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (15, 9, 7, 5, NULL);
INSERT INTO `bobot` (`id`, `jurusan_id`, `kategori_id`, `nilai`, `jenis`) VALUES (16, 9, 8, 9, NULL);
COMMIT;

-- ----------------------------
-- Table structure for jawaban
-- ----------------------------
DROP TABLE IF EXISTS `jawaban`;
CREATE TABLE `jawaban` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `peserta_id` int(11) unsigned DEFAULT NULL,
  `soal_id` int(11) unsigned DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `peserta_id_jawaban` (`peserta_id`) USING BTREE,
  KEY `soal_id_jawaban` (`soal_id`) USING BTREE,
  CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`soal_id`) REFERENCES `soal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of jawaban
-- ----------------------------
BEGIN;
INSERT INTO `jawaban` (`id`, `peserta_id`, `soal_id`, `jawaban`, `created_at`, `updated_at`) VALUES (1, 55, 162, 'A', '2024-05-24 13:55:32', '2024-05-24 13:55:32');
INSERT INTO `jawaban` (`id`, `peserta_id`, `soal_id`, `jawaban`, `created_at`, `updated_at`) VALUES (2, 55, 163, 'A', '2024-05-24 13:55:35', '2024-05-24 13:55:35');
INSERT INTO `jawaban` (`id`, `peserta_id`, `soal_id`, `jawaban`, `created_at`, `updated_at`) VALUES (3, 55, 164, 'A', '2024-05-24 13:55:42', '2024-05-24 13:55:42');
INSERT INTO `jawaban` (`id`, `peserta_id`, `soal_id`, `jawaban`, `created_at`, `updated_at`) VALUES (4, 55, 165, 'A', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for jurusan
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
BEGIN;
INSERT INTO `jurusan` (`id`, `nama`) VALUES (7, 'Teknik Komputer Jaringan (TKJ)');
INSERT INTO `jurusan` (`id`, `nama`) VALUES (8, 'Perkantoran');
INSERT INTO `jurusan` (`id`, `nama`) VALUES (9, 'Akuntansi');
COMMIT;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of kategori
-- ----------------------------
BEGIN;
INSERT INTO `kategori` (`id`, `nama`) VALUES (2, 'IPA');
INSERT INTO `kategori` (`id`, `nama`) VALUES (3, 'Bahasa Indonesia');
INSERT INTO `kategori` (`id`, `nama`) VALUES (5, 'Matematika');
INSERT INTO `kategori` (`id`, `nama`) VALUES (7, 'Bahasa Inggris');
INSERT INTO `kategori` (`id`, `nama`) VALUES (8, 'Seni Budaya');
COMMIT;

-- ----------------------------
-- Table structure for peserta
-- ----------------------------
DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(11) unsigned DEFAULT NULL,
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `selesai_ujian` char(1) DEFAULT NULL,
  `tgl` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `user_id_peserta` (`user_id`) USING BTREE,
  CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of peserta
-- ----------------------------
BEGIN;
INSERT INTO `peserta` (`id`, `nomor`, `nik`, `nama`, `telp`, `created_at`, `updated_at`, `user_id`, `mulai`, `selesai`, `selesai_ujian`, `tgl`, `file`, `email`, `jurusan_id`) VALUES (54, NULL, '1111111111111111', 'Budi', '123', '2023-09-22 10:22:19', '2024-05-24 18:11:54', 57, NULL, NULL, NULL, '2 sept 2000', NULL, NULL, NULL);
INSERT INTO `peserta` (`id`, `nomor`, `nik`, `nama`, `telp`, `created_at`, `updated_at`, `user_id`, `mulai`, `selesai`, `selesai_ujian`, `tgl`, `file`, `email`, `jurusan_id`) VALUES (55, NULL, '1234567890123456', 'adi', '000000', '2024-05-24 13:17:13', '2024-05-24 13:55:53', 60, NULL, NULL, '1', NULL, NULL, 'adi@gmail.com', NULL);
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (56, 1);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (57, 2);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (60, 2);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'peserta', '2021-09-10 22:44:52', '2021-09-10 22:44:52');
COMMIT;

-- ----------------------------
-- Table structure for soal
-- ----------------------------
DROP TABLE IF EXISTS `soal`;
CREATE TABLE `soal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` int(10) unsigned DEFAULT NULL,
  `pertanyaan` text,
  `pil_a` text,
  `pil_b` text,
  `pil_c` text,
  `pil_d` text,
  `kunci` char(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `random1` int(11) unsigned DEFAULT NULL,
  `random2` int(11) unsigned DEFAULT NULL,
  `random3` int(11) unsigned DEFAULT NULL,
  `random4` int(11) unsigned DEFAULT NULL,
  `random5` int(11) unsigned DEFAULT NULL,
  `random6` int(11) unsigned DEFAULT NULL,
  `random7` int(11) unsigned DEFAULT NULL,
  `random8` int(11) unsigned DEFAULT NULL,
  `random9` int(11) unsigned DEFAULT NULL,
  `random0` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `kategori_id_soal` (`kategori_id`) USING BTREE,
  CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of soal
-- ----------------------------
BEGIN;
INSERT INTO `soal` (`id`, `kategori_id`, `pertanyaan`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `kunci`, `created_at`, `updated_at`, `random1`, `random2`, `random3`, `random4`, `random5`, `random6`, `random7`, `random8`, `random9`, `random0`) VALUES (162, 5, '<p>1+1=</p>', '<p>2</p>', '<p>3</p>', '<p>4</p>', '<p>5</p>', 'A', '2024-05-24 13:47:23', '2024-05-24 13:47:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `soal` (`id`, `kategori_id`, `pertanyaan`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `kunci`, `created_at`, `updated_at`, `random1`, `random2`, `random3`, `random4`, `random5`, `random6`, `random7`, `random8`, `random9`, `random0`) VALUES (163, 2, '<p>2+1 =</p>', '<p>3</p>', '<p>4</p>', '<p>5</p>', '<p>6</p>', 'A', '2024-05-24 13:47:37', '2024-05-24 13:47:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `soal` (`id`, `kategori_id`, `pertanyaan`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `kunci`, `created_at`, `updated_at`, `random1`, `random2`, `random3`, `random4`, `random5`, `random6`, `random7`, `random8`, `random9`, `random0`) VALUES (164, 3, '<p>money bahasa indonesia nya adalah</p>', '<p>uang</p>', '<p>dompet</p>', '<p>kartu</p>', '<p>kertas</p>', 'A', '2024-05-24 13:48:10', '2024-05-24 13:48:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `soal` (`id`, `kategori_id`, `pertanyaan`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `kunci`, `created_at`, `updated_at`, `random1`, `random2`, `random3`, `random4`, `random5`, `random6`, `random7`, `random8`, `random9`, `random0`) VALUES (165, 5, '<p>2+2=</p>', '<p>4</p>', '<p>5</p>', '<p>6</p>', '<p>8</p>', 'A', '2024-05-24 19:27:38', '2024-05-24 19:27:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (54, 'asrani', NULL, 'asrani', '2021-12-24 16:03:10', '$2y$10$xsRUh1LaeJYh/JyJNxMfueqZZDqzLkM//tgTkUxW3sS2wxgJxe.g.', 'Ub1Mko3CpHr70Tslu0xuwXdg923dLj0eU8QzTaUCzU0DGNAavIW2ajHWf33S', '2021-12-24 16:03:10', '2021-12-24 16:03:10');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (56, 'admin', NULL, 'admin', '2024-05-24 20:34:54', '$2y$10$d6r3kCFO2Dkh8hM0AwOwY.4qlamFP1DDMNC5Ue7/KxWgL1Wy7TR1u', '0m49OKDua51kiaI1YbIzcc6lsR6j8EFtWhp9hOVvtecWzzKUe9VsWBdE0UjH', '2024-05-24 20:34:54', '2024-05-24 20:34:54');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (57, 'adi', NULL, '1111111111111111', '2023-09-22 10:23:35', '$2y$10$UBcaQIvqW3eiCTC6iC1CP./S3gA7gX362kog9gntwsdo/sudMSvAG', 'DgH3QNCkYlJC8roMcGSR6eRlAFZRXjokeOErxC2tavb938qE6D7UYgzAhexl', '2023-09-22 10:23:35', '2023-09-22 10:23:35');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (60, 'adi', 'adi@gmail.com', '1234567890123456', '2024-05-24 13:17:13', '$2y$10$Z2hs054XxtVxIAyRm6Ew2udHqwtjHOk.Za3gXbLILQaguhaE0EmP.', NULL, '2024-05-24 13:17:13', '2024-05-24 13:17:13');
COMMIT;

-- ----------------------------
-- Table structure for waktu
-- ----------------------------
DROP TABLE IF EXISTS `waktu`;
CREATE TABLE `waktu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `durasi` int(11) unsigned DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of waktu
-- ----------------------------
BEGIN;
INSERT INTO `waktu` (`id`, `durasi`, `tanggal_mulai`, `tanggal_selesai`) VALUES (1, 1588410, '2021-12-24 16:00:00', '2024-12-31 17:30:00');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
