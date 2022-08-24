/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50734
 Source Host           : localhost:8889
 Source Schema         : web_pendaker3

 Target Server Type    : MySQL
 Target Server Version : 50734
 File Encoding         : 65001

 Date: 24/08/2022 15:34:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for daftar_daerah
-- ----------------------------
DROP TABLE IF EXISTS `daftar_daerah`;
CREATE TABLE `daftar_daerah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daftar` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of daftar_daerah
-- ----------------------------
BEGIN;
INSERT INTO `daftar_daerah` VALUES (1, 'Kota Samarinda', '2022-07-20 19:20:09', '2022-07-20 19:20:09', NULL);
INSERT INTO `daftar_daerah` VALUES (2, 'Kota Bontang', '2022-07-20 20:05:58', '2022-07-20 20:05:58', NULL);
INSERT INTO `daftar_daerah` VALUES (3, 'Kota Balikpapan', '2022-07-20 20:06:11', '2022-07-20 20:06:11', NULL);
INSERT INTO `daftar_daerah` VALUES (4, 'Kabupaten Kutai Kartanegara', '2022-07-27 16:45:06', '2022-07-27 16:45:06', NULL);
INSERT INTO `daftar_daerah` VALUES (5, 'Kabupaten Kutai Timur', '2022-07-27 16:45:20', '2022-07-27 16:45:20', NULL);
INSERT INTO `daftar_daerah` VALUES (6, 'Kabupaten Kutai Barat', '2022-07-27 16:45:41', '2022-07-27 16:45:41', NULL);
INSERT INTO `daftar_daerah` VALUES (7, 'Kabupaten Berau', '2022-07-27 16:45:55', '2022-07-27 16:45:55', NULL);
INSERT INTO `daftar_daerah` VALUES (8, 'Kabupaten Mahakam Ulu', '2022-07-27 16:46:08', '2022-07-27 16:46:08', NULL);
INSERT INTO `daftar_daerah` VALUES (9, 'Kabupaten Penajam Paser Utara', '2022-07-27 16:46:26', '2022-07-27 16:46:26', NULL);
INSERT INTO `daftar_daerah` VALUES (10, 'Kabupaten Paser', '2022-07-27 16:46:42', '2022-07-27 16:46:42', NULL);
INSERT INTO `daftar_daerah` VALUES (11, 'Provinsi Kaltim', '2022-08-24 13:58:41', '2022-08-24 13:58:44', NULL);
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bidang_kerjasama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `pks` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `pihak` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `id_nama_daerah` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for pendataker
-- ----------------------------
DROP TABLE IF EXISTS `pendataker`;
CREATE TABLE `pendataker` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `daftar_daerah_id` int(11) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `pks` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `unitkerja` varchar(255) NOT NULL,
  `mitrakerja` varchar(255) NOT NULL,
  `tahapan` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` int(255) NOT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `nama_daerah` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pendataker_daftar_daerah1_idx` (`daftar_daerah_id`),
  CONSTRAINT `fk_pendataker_daftar_daerah1` FOREIGN KEY (`daftar_daerah_id`) REFERENCES `daftar_daerah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pendataker
-- ----------------------------
BEGIN;
INSERT INTO `pendataker` VALUES (1, 3, 'sdwq', '8dasew', 'fsdfs', '20', '1 tahun', 'dsfsd', 'uhui', 'iuh', 'huiuh', 2022, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pendataker` VALUES (2, 1, 'sdwq', '8dasew', 'fsdfs', '20', '1 tahun', 'dsfsd', 'uhui', 'iuh', 'huiuh', 2022, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `pendataker` VALUES (3, 3, 'sdfsdfewr', 'f3924', 'fdsjff43', '2022-08-24', '1 tahun', '3249sd', 's90fur43', 'fs943', '4ffebcfb-84a3-4845-a361-daa5fe00d02e.pdf', 2023, NULL, NULL, '2022-08-24 14:46:57', '2022-08-24 14:46:57', NULL);
INSERT INTO `pendataker` VALUES (4, 5, 'Pendidikan', '3120sdsf93232', '329408sdfdsf', '2022-08-24', '2 Tahun', 'dasirewr', 'sdfewewio', 'sdfiere', 'eba4da68-4e94-4c56-a8d9-9a91c73247e7.pdf', 2022, NULL, NULL, '2022-08-24 14:58:24', '2022-08-24 14:58:24', NULL);
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
INSERT INTO `personal_access_tokens` VALUES (3, 'App\\Models\\User', 4, 'auth_token', 'd3d3aa408fb075ed9e1d727cfa5f3fcdd3404c8e0f761040d4071f0c013c9e53', '[\"*\"]', NULL, '2022-08-24 15:11:29', '2022-08-24 15:11:29');
INSERT INTO `personal_access_tokens` VALUES (4, 'App\\Models\\User', 4, 'auth_token', '718acc9a1fe4aa721f8834f6cd73d61df2ae6b4fd301b3edab9235c8916ff8a2', '[\"*\"]', NULL, '2022-08-24 15:19:28', '2022-08-24 15:19:28');
INSERT INTO `personal_access_tokens` VALUES (5, 'App\\Models\\User', 4, 'auth_token', 'a71750ce4dc9f546d575fccedb2a3ed2b6e37569170df4868cc8abd192f8b7a0', '[\"*\"]', NULL, '2022-08-24 15:19:55', '2022-08-24 15:19:55');
INSERT INTO `personal_access_tokens` VALUES (6, 'App\\Models\\User', 4, 'auth_token', '422b54d8a33f44935d05d73c5dac3002c457405e24328eae1f1285ce8e99d708', '[\"*\"]', NULL, '2022-08-24 15:20:22', '2022-08-24 15:20:22');
INSERT INTO `personal_access_tokens` VALUES (7, 'App\\Models\\User', 4, 'auth_token', '588ced99d42e574b350d100ee354da2127da40ecfa9f13c52d07ae2e7dce5e29', '[\"*\"]', NULL, '2022-08-24 15:22:22', '2022-08-24 15:22:22');
INSERT INTO `personal_access_tokens` VALUES (8, 'App\\Models\\User', 4, 'auth_token', 'b1a751b361b4fcc45b068e7fc187d1201a7f06119d1fed174edc9c7113eca5c0', '[\"*\"]', '2022-08-24 15:29:31', '2022-08-24 15:22:30', '2022-08-24 15:29:31');
INSERT INTO `personal_access_tokens` VALUES (9, 'App\\Models\\User', 4, 'auth_token', '260fa35ea6eaf1fb34df14b19dedac45325c9251e6d8794a2f112036493c3248', '[\"*\"]', '2022-08-24 15:33:16', '2022-08-24 15:25:10', '2022-08-24 15:33:16');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_daerah_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `fk_users_daftar_daerah_idx` (`daftar_daerah_id`),
  CONSTRAINT `fk_users_daftar_daerah` FOREIGN KEY (`daftar_daerah_id`) REFERENCES `daftar_daerah` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Hafidz 99', 'hafidzagustillah17@gmail.com', NULL, '$2y$10$xvSj7G4ISbtGfwSnW4h97uoyYyg3om2Kji.8EAOWWsKuA7QQnaPnO', NULL, NULL, '2022-06-29 16:49:15', '2022-06-29 16:49:15');
INSERT INTO `users` VALUES (2, 'Sinta', 'sinta@gmail.com', NULL, '$2y$10$8/MK3AJvh3s9AUGDpDnLPeqJHd4sHz6zHuGtmtJgfag5r4PY1eN8K', NULL, NULL, '2022-07-05 14:49:44', '2022-07-05 14:49:44');
INSERT INTO `users` VALUES (3, 'Gubernur', 'kaltim@gmail.com', NULL, '$2y$10$WM2qM/2CPnB2wAy7arY8VeGOK5a9Ld5tApTZ3aYnwUFKoQ2P1BeUu', NULL, NULL, '2022-07-06 11:55:20', '2022-07-06 11:55:20');
INSERT INTO `users` VALUES (4, 'admin', 'admin@admin.com', NULL, '$2y$10$/qTSJU8u0FpudCrwJZHFEuR6PRIiWZSXlT9OdoKpoK1Org.PIZ2Cu', 1, NULL, '2022-06-29 16:49:15', '2022-08-04 02:11:36');
INSERT INTO `users` VALUES (5, 'admin samarinda', 'smd@gmail.com', NULL, '12345678', NULL, NULL, '2022-08-24 15:33:56', '2022-08-24 15:33:56');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
