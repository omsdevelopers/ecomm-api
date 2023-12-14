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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.brands: ~0 rows (approximately)
REPLACE INTO `brands` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(8, 'NaattuMaadu', 0, NULL, NULL);

-- Dumping structure for table ecommerce.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=408 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.carts: ~4 rows (approximately)
REPLACE INTO `carts` (`id`, `user_id`, `session_id`, `product_id`, `name`, `size`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
	(403, NULL, '527fca25-6a15-4eea-aefb-7667d6786e79', 27, 'Grapes', '0', 2, 50.00, 100.000000, '2023-12-04 19:41:00', '2023-12-04 19:41:00'),
	(404, NULL, '527fca25-6a15-4eea-aefb-7667d6786e79', 27, 'Grapes', '0', 1, 50.00, 50.000000, '2023-12-04 20:02:50', '2023-12-04 20:02:50'),
	(405, NULL, '527fca25-6a15-4eea-aefb-7667d6786e79', 27, 'Grapes', '0', 3, 50.00, 150.000000, '2023-12-06 11:49:50', '2023-12-06 11:49:50'),
	(406, NULL, '527fca25-6a15-4eea-aefb-7667d6786e79', 27, 'Grapes', '0', 5, 50.00, 250.000000, '2023-12-06 14:59:41', '2023-12-06 14:59:41'),
	(407, NULL, '527fca25-6a15-4eea-aefb-7667d6786e79', 27, 'Grapes', '0', NULL, 50.00, 50.000000, '2023-12-06 15:09:30', '2023-12-06 15:09:30');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table ecommerce.category: ~2 rows (approximately)
REPLACE INTO `category` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
	(6, 'Milk', 'milk', 'Milk', 'Milk product', 'milk', 1, 0, 0, '2023-11-01 06:41:02', '2023-11-01 06:41:02'),
	(7, 'Ghee', 'Ghee', 'Ghee', 'Ghee', 'Ghee', 1, 0, 0, '2023-11-25 06:25:31', '2023-11-25 06:25:31');

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

-- Dumping structure for table ecommerce.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ecommerce.gallery: ~0 rows (approximately)
REPLACE INTO `gallery` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Ghee', '1701252699.jpg', '1', '2023-11-29 18:11:39', '2023-11-29 18:11:39');

-- Dumping structure for table ecommerce.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.migrations: ~4 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_20_113409_create_carts_table', 2),
	(6, '2016_06_01_000001_create_oauth_auth_codes_table', 3),
	(7, '2016_06_01_000002_create_oauth_access_tokens_table', 3),
	(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 3),
	(9, '2016_06_01_000004_create_oauth_clients_table', 3),
	(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 3);

-- Dumping structure for table ecommerce.oauth_personal_access_clients
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.oauth_personal_access_clients: ~0 rows (approximately)

-- Dumping structure for table ecommerce.oauth_refresh_tokens
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.oauth_refresh_tokens: ~0 rows (approximately)

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ecommerce.orders: ~2 rows (approximately)
REPLACE INTO `orders` (`id`, `user_id`, `session_id`, `billing_first_name`, `billing_last_name`, `billing_company_name`, `billing_address`, `billing_apartment`, `billing_city`, `billing_state`, `billing_postcode`, `billing_email`, `billing_phone`, `order_notes`, `order_id`, `payment_method`, `razorpay_payment_id`, `order_status`, `product_id`, `quantity`, `subtotal`, `payment_status`, `created_at`, `updated_at`) VALUES
	(37, NULL, NULL, 'super', 'admin', 'naatumaadu', 'kanyakumari', NULL, 'Nagercoil', 'TamilNadu', '629163', 'admin@mail.com', NULL, NULL, 'order_N8y08tls7xWfIy', 'Razorpay', '122', 'pending', '[27,27,27]', NULL, 310.000000, 'paid', '2023-12-06 14:50:14', '2023-12-06 14:50:37'),
	(38, NULL, NULL, 'super', 'admin', 'naatumaadu', 'kanyakumari', NULL, 'Nagercoil', 'TamilNadu', '629163', 'admin@mail.com', NULL, NULL, 'order_N8yFWHqQ20rGpv', 'Razorpay', '122', 'pending', '[27,27,27,27]', NULL, 560.000000, 'paid', '2023-12-06 15:04:48', '2023-12-06 15:05:16'),
	(39, NULL, NULL, 'super', 'admin', 'naatumaadu', 'kanyakumari', NULL, 'Nagercoil', 'TamilNadu', '629163', 'admin@mail.com', NULL, NULL, 'order_N8yKhcNhcqOyxQ', 'Razorpay', '122', 'pending', '[27,27,27,27,27]', NULL, 610.000000, 'paid', '2023-12-06 15:09:42', '2023-12-06 15:10:07');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.personal_access_tokens: ~27 rows (approximately)
REPLACE INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
	(1, 'App\\Models\\User', 18, 'auth_token', 'a2ca03b5ad526597984585eb297f57d1fec632809d97478d1ee68c5c95cfdd92', '["*"]', NULL, NULL, '2023-12-01 19:41:02', '2023-12-01 19:41:02'),
	(2, 'App\\Models\\User', 18, 'auth_token', 'c44b5baae8e1b41d6d916b3f4f54dc8063756860662c73f59580ea131d93baaf', '["*"]', NULL, NULL, '2023-12-01 19:41:26', '2023-12-01 19:41:26'),
	(3, 'App\\Models\\User', 18, 'ss', '438114ed2cdd8f36c51ea0952e27643b0c593777055d14dc5c63e7a8fa77d38c', '["*"]', NULL, NULL, '2023-12-01 19:43:48', '2023-12-01 19:43:48'),
	(4, 'App\\Models\\User', 18, 'auth_token', '85995e9989d1758fe801d0da09f15ceb27a72d116deb0c71fb6001ceffbd398f', '["*"]', NULL, NULL, '2023-12-01 19:45:08', '2023-12-01 19:45:08'),
	(5, 'App\\Models\\User', 18, 'auth_token', '30c34b3e89f8e52f4840b6e1adc98275f55de5f4f9bc374e66a3e22d3310713e', '["*"]', NULL, NULL, '2023-12-01 19:53:15', '2023-12-01 19:53:15'),
	(6, 'App\\Models\\User', 18, 'auth_token', '94b07a9fdc8f6525ad5a60841ac6092a4c0ea46d60a91d91b83a6ad78a47bc14', '["*"]', NULL, NULL, '2023-12-01 19:53:29', '2023-12-01 19:53:29'),
	(7, 'App\\Models\\User', 18, 'auth_token', '9c7c31639893c1ea3337e90a343d62866c8be3eb6b85d52e45fb48a65981c49e', '["*"]', NULL, NULL, '2023-12-01 19:54:17', '2023-12-01 19:54:17'),
	(8, 'App\\Models\\User', 17, 'API TOKEN', 'dd9315454f8b00b1d2da6d235bb5277cc9e4de2c0b7883dbc567cecc6869414a', '["*"]', NULL, NULL, '2023-12-02 14:12:05', '2023-12-02 14:12:05'),
	(9, 'App\\Models\\User', 17, 'API TOKEN', '37afbd645da25979efe2828e6fd1e928269337bc2912899b0cf2677683fe375d', '["*"]', NULL, NULL, '2023-12-02 14:58:11', '2023-12-02 14:58:11'),
	(10, 'App\\Models\\User', 17, 'API TOKEN', 'bcf54a7a364f413f913e7dce2051063527b262233a8cada43e6f22f3eee189ab', '["*"]', NULL, NULL, '2023-12-02 15:41:14', '2023-12-02 15:41:14'),
	(11, 'App\\Models\\User', 17, 'API TOKEN', 'ec71f7a623c9c734b4844abb8a53a97b25df5b37e796242e913ae54debe9a5e4', '["*"]', NULL, NULL, '2023-12-02 15:41:58', '2023-12-02 15:41:58'),
	(12, 'App\\Models\\User', 17, 'API TOKEN', '92e553d85f4fdc2f679678622b4c10071fe207f9e05b57ff526c492e882c0227', '["*"]', NULL, NULL, '2023-12-02 15:42:19', '2023-12-02 15:42:19'),
	(13, 'App\\Models\\User', 17, 'API TOKEN', '5e4fbcb3432cc0fc52f3125f6258a7a7dc8e3e17632b874c94669503eefbc160', '["*"]', NULL, NULL, '2023-12-02 15:42:59', '2023-12-02 15:42:59'),
	(14, 'App\\Models\\User', 17, 'API TOKEN', 'fe8d0d73c3fb8579b42aabccd697f740ecf4518735e926158994ce1be4191509', '["*"]', NULL, NULL, '2023-12-02 15:44:09', '2023-12-02 15:44:09'),
	(15, 'App\\Models\\User', 17, 'API TOKEN', '78a87d17bc5c9fdf44c2229e6a38f8845ee0f84934e86a6ec833e0f31670e860', '["*"]', NULL, NULL, '2023-12-02 15:44:37', '2023-12-02 15:44:37'),
	(16, 'App\\Models\\User', 17, 'API TOKEN', '0b453de60332db9f35595acf40f836fbf0d77677830c2503b9c92972babc267e', '["*"]', NULL, NULL, '2023-12-02 16:02:32', '2023-12-02 16:02:32'),
	(17, 'App\\Models\\User', 17, 'API TOKEN', 'bdd0d7066b4231b5b553e47df0a39ad1995c9351871453cfa17f945dfb6bca49', '["*"]', NULL, NULL, '2023-12-02 16:03:18', '2023-12-02 16:03:18'),
	(18, 'App\\Models\\User', 17, 'API TOKEN', 'ea140cf6f9081c890c0e04ab40727f93bd3f810b6e9bcfac6b90ff24696a5a8a', '["*"]', NULL, NULL, '2023-12-02 16:42:39', '2023-12-02 16:42:39'),
	(19, 'App\\Models\\User', 17, 'API TOKEN', '07c0b53eca40f5033654e71ed3e0d927c85b45efe14d25dad4fc5a2f44a33dd6', '["*"]', NULL, NULL, '2023-12-02 16:46:06', '2023-12-02 16:46:06'),
	(20, 'App\\Models\\User', 17, 'API TOKEN', 'f165af565a4507df6b1d63075cd333e80f0c18a9b7de7a3353215c0a12bf1d72', '["*"]', NULL, NULL, '2023-12-02 16:48:22', '2023-12-02 16:48:22'),
	(21, 'App\\Models\\User', 17, 'API TOKEN', 'f0a0b652c4847bf44a57267c318cf1608d6c68c484365c193d3fe9d8f145905d', '["*"]', NULL, NULL, '2023-12-02 16:52:13', '2023-12-02 16:52:13'),
	(22, 'App\\Models\\User', 17, 'API TOKEN', '1d6f1f28b5375c610565c8528ebd0503edf09f2b434a19f5fee478ffe6d6306f', '["*"]', NULL, NULL, '2023-12-02 16:52:34', '2023-12-02 16:52:34'),
	(23, 'App\\Models\\User', 17, 'API TOKEN', '0f7c3dc97d7644210bca77ed235ade80f395d0979a23d6e2bf461f4dcc49c369', '["*"]', NULL, NULL, '2023-12-02 16:54:10', '2023-12-02 16:54:10'),
	(24, 'App\\Models\\User', 17, 'API TOKEN', '9ece80abb2abbb6f050b3cd69c156bf06b82ef6002f5c13371b9be4af4a9e9a1', '["*"]', NULL, NULL, '2023-12-04 12:11:26', '2023-12-04 12:11:26'),
	(25, 'App\\Models\\User', 17, 'API TOKEN', '017f37c88432c3fdcaca22e63277267ed2b18365f424fe24bb92e8f1098f2901', '["*"]', NULL, NULL, '2023-12-04 16:14:47', '2023-12-04 16:14:47'),
	(26, 'App\\Models\\User', 17, 'API TOKEN', '124222fc7032cf3e1c973147c588b145c8de189d8a887cd410a5abe889017c36', '["*"]', NULL, NULL, '2023-12-04 16:49:03', '2023-12-04 16:49:03'),
	(27, 'App\\Models\\User', 17, 'API TOKEN', '51be366b28cd207a635ead825908f1bd0e4bb128f0c1de6c260c379124fe22dc', '["*"]', NULL, NULL, '2023-12-04 17:52:57', '2023-12-04 17:52:57');

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
  `featured` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.products: ~0 rows (approximately)
REPLACE INTO `products` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`, `category_id`, `brand_id`, `image`, `size`, `featured`) VALUES
	(27, 'Grapes', 50.00, 'A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history.', '2023-12-04 19:34:44', '2023-12-04 19:34:44', '7', '8', '3g2LX9L9VKA08kKyYXi9.jpg', '500g:30, 1.5kg:200', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecommerce.users: ~17 rows (approximately)
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
	(17, 'jinu', 'jinu@gmail.com', NULL, '$2y$10$ykYalpxBuO7GliAQKI9Amu6Kg3wcsUCg8cY2LTmPAChPxWqCsJIFO', NULL, 0, 0, 0, '2023-11-18 18:50:58', '2023-11-18 18:50:58'),
	(18, 'alex', 'h@gmail.com', NULL, '$2y$10$ib3I1Kt.MQcprfYm3es1T.adlw86EENjn17rsKCXJkR.PDSCaFFJe', NULL, 0, 0, 0, '2023-12-01 17:18:14', '2023-12-01 17:18:14'),
	(19, 'alex12', 'aki@h.com', NULL, '$2y$10$9j8y2Oac4yfkxBHBPRItBuVugoPeBqHd1UvOKAxuk/r.3w6G.RGSG', NULL, 0, 0, 0, '2023-12-01 17:31:43', '2023-12-01 17:31:43'),
	(20, 'jinu77', 'we@gmail.com', NULL, '$2y$10$rr9CjwesR6LnrCnlY19UseyMoziS3.JW6sSx9R.8u/fYXQDo..HRa', NULL, 0, 0, 0, '2023-12-01 20:28:38', '2023-12-01 20:28:38'),
	(21, 'a', 'aaa@gmail.com', NULL, '$2y$10$CmEmbQUx66mOpGtcs46N9OFWyqlqo9/bf8XfIfa1Wm4T.mmZKQgaW', NULL, 0, 0, 0, '2023-12-02 14:12:59', '2023-12-02 14:12:59'),
	(22, 'ale123', 'alex@gmail.com', NULL, '$2y$10$vglXPgyRKvVNbal3RnKRL.NZsHqmDOA7D3/NKraNMGZ8uFozhIY9i', NULL, 0, 0, 0, '2023-12-02 14:13:29', '2023-12-02 14:13:29');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
