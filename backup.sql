-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ecommerce
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ecommerce`;

-- Dumping structure for table ecommerce.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.brands: ~5 rows (approximately)
REPLACE INTO `brands` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Bitcoin', 0, NULL, NULL),
	(3, 'eth', 0, NULL, NULL),
	(4, 'akhil12`', 0, NULL, NULL),
	(5, 'AkhilJinu', 0, NULL, NULL),
	(6, 'Spyberrys_UI_service', 0, NULL, NULL);

-- Dumping structure for table ecommerce.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `product_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_product_id_foreign` (`product_id`),
  CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=193 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.carts: ~3 rows (approximately)
REPLACE INTO `carts` (`id`, `user_id`, `product_id`, `name`, `size`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
	(192, 0, 20, 'Diary', '0', 2, 1.00, '2023-11-21 20:19:31', '2023-11-21 20:19:31');

-- Dumping structure for table ecommerce.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `is_delete` tinyint NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecommerce.category: ~6 rows (approximately)
REPLACE INTO `category` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 'Gauzecom', 'Woolen Bag', '', '', 'bags, woolen', 1, 0, 1, '2023-10-27 00:58:44', '2023-10-27 04:42:47'),
	(2, 'Indira', 'Woolen Bags', 'woolens doll', 'do', 'Woolen Bag', 1, 1, 1, '2023-10-27 00:59:29', '2023-10-27 04:46:43'),
	(3, 'Laptop', 'Laptop', 'Laptop', 'Laptop', 'Laptop', 1, 0, 0, '2023-10-27 01:02:05', '2023-10-27 01:02:05'),
	(4, 'Water can', 'Water can', 'Water can, Big Can , Oil Can', 'Water can', 'Water can', 1, 0, 1, '2023-10-27 01:28:51', '2023-10-27 04:42:39'),
	(5, 'Roof Panel', 'Roof Panel 2024', 'Roof Panel , Roof', 'Roof Panel', 'Roof Panel, roof', 1, 0, 1, '2023-10-27 03:08:42', '2023-11-01 06:37:54'),
	(6, 'Milk', 'milk', 'Milk', 'Milk product', 'milk', 1, 0, 0, '2023-11-01 06:41:02', '2023-11-01 06:41:02');

-- Dumping structure for table ecommerce.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table ecommerce.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.migrations: ~4 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_20_113409_create_carts_table', 2);

-- Dumping structure for table ecommerce.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table ecommerce.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table ecommerce.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.products: ~4 rows (approximately)
REPLACE INTO `products` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`, `category_id`, `brand_id`, `image`, `size`) VALUES
	(17, 'Ghee', 3.00, 'New Ghee Varient', '2023-11-18 12:30:16', '2023-11-18 12:30:16', '1', '5', 'FROGkWb8c5rQmBOfVCmV.png', NULL),
	(19, 'Milk', 2.00, 'Milk', '2023-11-18 17:04:05', '2023-11-18 17:04:05', '2', '3', 'fmA879QzFcGT1DthL56D.png', NULL),
	(20, 'Diary', 1.00, 'new one', '2023-11-18 18:08:45', '2023-11-18 18:08:45', '2', '2', 'uCWtt0ZPEoB1g7IN2HKG.png', '500g:30, 1.5kg:200'),
	(21, 'Ghee', 2.00, 'new one', '2023-11-18 18:47:37', '2023-11-18 18:47:37', '2', '2', 'ZjTAdCqJZv6v9npTXJm6.png', '500g:30, 1.5kg:200');

-- Dumping structure for table ecommerce.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0' COMMENT '0:customer\r\n1:admin',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0:active, 1:inactive',
  `is_delete` tinyint NOT NULL DEFAULT '0' COMMENT '0:notdeleted, 1:deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.users: ~12 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@mail.com', '2023-10-23 11:49:15', '$2y$10$jAVevbqZ0VFE1pd5Vz3.3.uL43zpsmOsG9Woe2qd25I5uDisOdxQO', NULL, 1, 0, 0, NULL, NULL),
	(4, 'NEW', 'admin@admin.com', NULL, '$2y$10$7LiKmtyHDVfLkrmM.K.si./G5/6E3jSV7kJm/cWzsvu2VdIBeNDyO', NULL, 1, 0, 0, '2023-10-24 18:51:16', '2023-10-24 21:12:02'),
	(5, 'Emp 1', 'rajkannan@m.com', NULL, '$2y$10$jAVevbqZ0VFE1pd5Vz3.3.uL43zpsmOsG9Woe2qd25I5uDisOdxQO', NULL, 0, 0, 0, '2023-10-24 18:52:36', '2023-10-24 18:52:36'),
	(6, 'done', 'done@m.com', NULL, '$2y$10$lY08Jze.0Txl0O23svJEV.vbltDNXKlA6emRJeYqkpeW0erwX9j5G', NULL, 1, 0, 1, '2023-10-24 18:53:55', '2023-10-24 21:17:30'),
	(7, 'dd', 'd@d.com', NULL, '$2y$10$W4jUDa5w0A1Zkzqjp3ktQOla9bzYFT.55lrIEDlc5RI4sGS3tXJSG', NULL, 1, 0, 1, '2023-10-24 18:56:02', '2023-10-24 21:16:59'),
	(9, 'Indira', 'adminupdated3@mail.com', NULL, '$2y$10$oQxCPTyPlGfVLTdhhbmm2.kMMdcGMxwJP4mPzpJSm./JsfBWl1jnO', NULL, 1, 1, 1, '2023-10-24 18:57:09', '2023-10-24 21:16:49'),
	(10, 'Gauzecom', 'admin2323@mail.com', NULL, '$2y$10$Htvg3X90t3W4bzIWbpjjoOorJXDgAFMAlhlQ1dBexWdxQQR4dg7rC', NULL, 1, 0, 1, '2023-10-24 21:18:46', '2023-10-24 21:18:46'),
	(11, 'Gauzecomwde', 'superadmsdsdin16@elsecolor.com', NULL, '$2y$10$kvX0iAPZZiT4T/3wA6qkhOwG8wpngjnsGf8TTb6mrosV0fIFYNuZe', NULL, 1, 0, 1, '2023-10-24 21:20:08', '2023-10-24 21:34:37'),
	(12, 'fi', 'adminddd@admin.com', NULL, '$2y$10$OPSRm51iKW4sdT2sVe87fePoSoBD6eUagVlyVXqqSSyhZ6WuwdFqW', NULL, 1, 0, 1, '2023-10-24 22:08:27', '2023-10-25 19:43:11'),
	(13, 'retret', 'etet@gfhf.ff', NULL, '$2y$10$Szqp8ZnM2Ic7ufMWVqiQR.VznWQHJOk0Cug6xZI8.N9ULFCo1nk.m', NULL, 1, 1, 1, '2023-10-24 22:28:40', '2023-10-25 00:24:24'),
	(14, 'hi', 'hi@hi.c', NULL, '$2y$10$DAf1Jx/BcVgwZdKOAy94Yet5zw118vYUDmrXSbooxJQVl1yQJbANS', NULL, 1, 0, 0, '2023-10-25 19:44:36', '2023-10-25 19:44:36'),
	(15, 'ho', 'ho@ho.co', NULL, '$2y$10$XYBTY803EPOt4lgemN84kOFRrnEnjuBMi1V7K8S6Cu70mbqNrnNw6', NULL, 1, 0, 1, '2023-10-25 19:45:02', '2023-10-26 23:19:12'),
	(16, 'manju', 'manju@gmail.com', NULL, '$2y$10$QJmVq4lfH/7I7t0hhmyq8u0LflvcyomAEBDwSVnw38LpxoYYGXkuW', NULL, 0, 0, 0, '2023-11-16 18:57:41', '2023-11-16 18:57:41'),
	(17, 'jinu', 'jinu@gmail.com', NULL, '$2y$10$ykYalpxBuO7GliAQKI9Amu6Kg3wcsUCg8cY2LTmPAChPxWqCsJIFO', NULL, 0, 0, 0, '2023-11-18 18:50:58', '2023-11-18 18:50:58');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
