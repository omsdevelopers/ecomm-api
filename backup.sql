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
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `total` decimal(20,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_product_id_foreign` (`product_id`),
  CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.carts: ~13 rows (approximately)
REPLACE INTO `carts` (`id`, `user_id`, `session_id`, `product_id`, `name`, `size`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
	(231, 17, NULL, 22, 'Chocolate', '50', 1, 50.00, 50.000000, '2023-11-22 19:42:24', '2023-11-23 15:02:41'),
	(238, 17, NULL, 21, 'Ghee', '30', 1, 2.00, 30.000000, '2023-11-22 19:45:55', '2023-11-23 15:02:41'),
	(239, NULL, NULL, 21, 'Ghee', '30', NULL, 2.00, NULL, '2023-11-22 19:58:29', '2023-11-22 19:58:29'),
	(240, NULL, NULL, 21, 'Ghee', '30', NULL, 2.00, NULL, '2023-11-22 20:02:44', '2023-11-22 20:02:44'),
	(241, NULL, NULL, 21, 'Ghee', '30', NULL, 2.00, NULL, '2023-11-22 20:06:07', '2023-11-22 20:06:07'),
	(242, NULL, NULL, 21, 'Ghee', '30', NULL, 2.00, NULL, '2023-11-22 20:06:10', '2023-11-22 20:06:10'),
	(243, NULL, NULL, 21, 'Ghee', '200', NULL, 2.00, NULL, '2023-11-22 20:06:52', '2023-11-22 20:06:52'),
	(244, NULL, NULL, 21, 'Ghee', '200', NULL, 2.00, NULL, '2023-11-22 20:07:16', '2023-11-22 20:07:16'),
	(245, NULL, NULL, 21, 'Ghee', '30', NULL, 2.00, NULL, '2023-11-22 20:08:19', '2023-11-22 20:08:19'),
	(246, NULL, '0', 21, 'Ghee', '30', NULL, 2.00, NULL, '2023-11-22 20:13:51', '2023-11-22 20:13:51'),
	(261, 17, 'null', 22, 'Chocolate', '200', 1, 50.00, 200.000000, '2023-11-23 14:59:51', '2023-11-23 15:02:41'),
	(262, 17, 'null', 21, 'Ghee', '200', 2, 2.00, 400.000000, '2023-11-23 15:01:16', '2023-11-23 15:02:41'),
	(268, NULL, 'oshBGlMWQp7t0DTLGDKB4CWigGJzjU8If3KB9c33', 21, 'Ghee', '200', 3, 30.00, 600.000000, '2023-11-23 18:54:41', '2023-11-23 20:10:45'),
	(269, NULL, 'oshBGlMWQp7t0DTLGDKB4CWigGJzjU8If3KB9c33', 22, 'Chocolate', '200', 2, 50.00, 400.000000, '2023-11-23 18:54:53', '2023-11-23 20:10:45'),
	(271, NULL, 'i18uAKP2iVkNjvWGD3JWYww9NV0n44gPcuQNM8QJ', 22, 'Chocolate', '250', 5, 50.00, NULL, '2023-11-24 16:35:58', '2023-11-24 16:35:58'),
	(272, NULL, 'i18uAKP2iVkNjvWGD3JWYww9NV0n44gPcuQNM8QJ', 20, 'Diary', '200', 3, 30.00, NULL, '2023-11-24 16:36:03', '2023-11-24 16:36:03'),
	(274, NULL, 'i18uAKP2iVkNjvWGD3JWYww9NV0n44gPcuQNM8QJ', 21, 'Ghee', '30.00', 2, 30.00, NULL, '2023-11-24 16:36:30', '2023-11-24 16:36:30'),
	(275, 1, 'null', 22, 'Chocolate', '200', NULL, 50.00, NULL, '2023-11-24 19:50:07', '2023-11-24 19:50:07'),
	(276, 1, 'null', 20, 'Diary', '200', 3, 30.00, NULL, '2023-11-24 19:50:17', '2023-11-24 19:50:17');

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

-- Dumping structure for table ecommerce.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `billing_first_name` varchar(255) DEFAULT NULL,
  `billing_last_name` varchar(255) DEFAULT NULL,
  `billing_company_name` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_apartment` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_state` varchar(255) DEFAULT NULL,
  `billing_postcode` varchar(20) DEFAULT NULL,
  `billing_email` varchar(255) DEFAULT NULL,
  `billing_phone` varchar(20) DEFAULT NULL,
  `order_notes` text,
  `order_id` varchar(255) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `razorpay_payment_id` varchar(255) DEFAULT NULL,
  `order_status` enum('pending','processing','completed','cancelled','shipped') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'pending',
  `product_id` text NOT NULL,
  `quantity` int DEFAULT NULL,
  `subtotal` decimal(20,6) DEFAULT NULL,
  `payment_status` enum('paid','unpaid') DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ecommerce.orders: ~3 rows (approximately)
REPLACE INTO `orders` (`id`, `user_id`, `session_id`, `billing_first_name`, `billing_last_name`, `billing_company_name`, `billing_address`, `billing_apartment`, `billing_city`, `billing_state`, `billing_postcode`, `billing_email`, `billing_phone`, `order_notes`, `order_id`, `payment_method`, `razorpay_payment_id`, `order_status`, `product_id`, `quantity`, `subtotal`, `payment_status`, `created_at`, `updated_at`) VALUES
	(7, NULL, 'i18uAKP2iVkNjvWGD3JWYww9NV0n44gPcuQNM8QJ', 'manu', 'sunil', 'Sri Dhanlakshmi Collection Silk', 'pinpaa', '13.278', 'kk', 'TN', '676565', 'port@gmail.com', '78786767675', 'New order', 'order_N4Hjtc4bNGiQ4x', 'Razorpay', NULL, 'pending', '["22","20","21"]', NULL, NULL, 'paid', '2023-11-24 18:52:09', '2023-11-24 19:39:06'),
	(8, 17, 'null', 'asha', 'jini', 'Sri Dhanlakshmi Collection Silk', 'pinpaa', '13.278', 'kk', 'TN', '676565', 'port@gmail.com', '78786767675', 'Please carfeul', 'order_N4HnZgo8W56YvM', 'Razorpay', NULL, 'pending', '["22","21","22","21"]', NULL, NULL, 'paid', '2023-11-24 18:55:37', '2023-11-24 18:56:05'),
	(9, 1, 'null', 'super', 'admin', 'naatumaadu', 'kanyakumari', 'DD complex', 'Nagercoil', 'TamilNadu', '629163', 'admin@mail.com', '9655804632', 'new one', 'order_N4IkUGCiHu16my', 'Razorpay', NULL, 'processing', '["22","20"]', NULL, NULL, 'paid', '2023-11-24 19:51:24', '2023-11-24 19:52:45');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.products: ~4 rows (approximately)
REPLACE INTO `products` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`, `category_id`, `brand_id`, `image`, `size`) VALUES
	(17, 'Ghee', 3.00, 'New Ghee Varient', '2023-11-18 12:30:16', '2023-11-18 12:30:16', '1', '5', 'FROGkWb8c5rQmBOfVCmV.png', NULL),
	(19, 'Milk', 2.00, 'Milk', '2023-11-18 17:04:05', '2023-11-18 17:04:05', '2', '3', 'fmA879QzFcGT1DthL56D.png', NULL),
	(20, 'Diary', 30.00, 'new one', '2023-11-18 18:08:45', '2023-11-18 18:08:45', '2', '2', 'uCWtt0ZPEoB1g7IN2HKG.png', '500g:30, 1.5kg:200'),
	(21, 'Ghee', 30.00, 'new one', '2023-11-18 18:47:37', '2023-11-18 18:47:37', '2', '2', 'ZjTAdCqJZv6v9npTXJm6.png', '500g:30, 1.5kg:200'),
	(22, 'Chocolate', 50.00, 'Chocolate', '2023-11-22 15:48:28', '2023-11-22 15:48:28', '2', '3', '6IkQqGtMLra5xtLDU8bv.jpg', '500g:50, 1.5kg:200, 2kg:250');

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
