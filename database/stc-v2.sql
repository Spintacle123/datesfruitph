-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for stc
CREATE DATABASE IF NOT EXISTS `stc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `stc`;

-- Dumping structure for table stc.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table stc.categories: ~0 rows (approximately)
INSERT INTO `categories` (`id`, `cat_name`) VALUES
	(1, 'Nuts');

-- Dumping structure for table stc.inquiries
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table stc.inquiries: ~3 rows (approximately)
INSERT INTO `inquiries` (`id`, `email`, `message`) VALUES
	(1, 'danielvitalista811@gmail.com', 'taeng yawa'),
	(2, 'danielvitalista811@gmail.com', 'lods'),
	(3, 'brytomenio@my.cspc.edu.ph', 'lodsssss');

-- Dumping structure for table stc.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL DEFAULT '0',
  `capital` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `code` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `prod_qntty` int(11) NOT NULL,
  `purchased` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `qty_change_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table stc.products: ~6 rows (approximately)
INSERT INTO `products` (`id`, `class`, `image`, `name`, `price`, `capital`, `description`, `code`, `qty`, `prod_qntty`, `purchased`, `status`, `qty_change_at`, `created_at`, `updated_at`) VALUES
	(163, 'Nuts', 'images/Sagai.jpg', 'Sagai', '150', 120, '', 'n1', 0, 100, 0, 1, '2023-05-21', '2023-05-31 13:14:04', '2023-05-31 13:49:16'),
	(164, 'Nuts', 'images/Sukkary.jpg', 'Sukkary', '150', 120, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat eros id purus tincidunt pulvinar. Nulla facilisi. Pellentesque tincidunt enim quis risus suscipit, eget egestas lorem sagittis', 'n2', 0, 100, 0, 1, '2023-05-21', '2023-05-31 13:14:04', '2023-05-31 13:41:39'),
	(166, 'Nuts', 'images/Kadrawi.jpg', 'Kadrawi', '150', 120, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat eros id purus tincidunt pulvinar. Nulla facilisi. Pellentesque tincidunt enim quis risus suscipit, eget egestas lorem sagittis', 'n4', 0, 100, 0, 1, '2023-05-21', '2023-05-31 13:14:04', '2023-05-31 13:41:45'),
	(167, 'Nuts', 'images/Khudri.jpg', 'Khudri', '150', 120, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat eros id purus tincidunt pulvinar. Nulla facilisi. Pellentesque tincidunt enim quis risus suscipit, eget egestas lorem sagittis', 'n5', 0, 100, 0, 1, '2023-05-21', '2023-05-31 13:14:04', '2023-05-31 13:42:03'),
	(168, 'Nuts', 'images/ajwa.jpg', 'Ajwa', '150', 120, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat eros id purus tincidunt pulvinar. Nulla facilisi. Pellentesque tincidunt enim quis risus suscipit, eget egestas lorem sagittis', 'n6', 0, 100, 0, 1, '2023-05-21', '2023-05-31 13:14:04', '2023-05-31 13:41:56'),
	(169, 'Nuts', 'images/datesfruits.jpg', 'fdfafaf', '150', 120, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat eros id purus tincidunt pulvinar. Nulla facilisi. Pellentesque tincidunt enim quis risus suscipit, eget egestas lorem sagittis', 'n7', 0, 100, 0, 1, '2023-05-22', '2023-05-31 13:14:04', '2023-05-31 13:41:50');

-- Dumping structure for table stc.products_units
CREATE TABLE IF NOT EXISTS `products_units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `unit` varchar(50) NOT NULL,
  `unit_value` varchar(50) NOT NULL,
  `unit_price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  KEY `product_id` (`product_id`),
  CONSTRAINT `FK_products_units_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- Dumping data for table stc.products_units: ~7 rows (approximately)
INSERT INTO `products_units` (`id`, `product_id`, `unit`, `unit_value`, `unit_price`, `created_at`, `updated_at`) VALUES
	(35, 164, 'gram', '1', 1, '2023-05-31 13:41:39', '2023-05-31 13:41:39'),
	(36, 164, 'gram', '1', 2, '2023-05-31 13:41:39', '2023-05-31 13:41:39'),
	(37, 164, 'piece', '1', 2, '2023-05-31 13:41:39', '2023-05-31 13:41:39'),
	(41, 169, 'piece', '2', 20, '2023-05-31 13:41:50', '2023-05-31 13:41:50'),
	(42, 169, 'piece', '20', 3050, '2023-05-31 13:41:50', '2023-05-31 13:41:50'),
	(43, 168, 'gram', '1', 1200, '2023-05-31 13:41:56', '2023-05-31 13:41:56'),
	(44, 168, 'gram', '2', 300, '2023-05-31 13:41:56', '2023-05-31 13:41:56'),
	(45, 168, 'kilo', '3', 10, '2023-05-31 13:41:56', '2023-05-31 13:41:56'),
	(46, 167, 'piece', '1', 1, '2023-05-31 13:42:03', '2023-05-31 13:42:03'),
	(47, 167, 'piece', '2', 500, '2023-05-31 13:42:03', '2023-05-31 13:42:03'),
	(48, 166, 'piece', '1', 1200, '2023-05-31 13:42:12', '2023-05-31 13:42:12'),
	(49, 166, 'gram', '1', 500, '2023-05-31 13:42:12', '2023-05-31 13:42:12'),
	(50, 166, 'kilo', '2', 200, '2023-05-31 13:42:12', '2023-05-31 13:42:12'),
	(51, 163, 'piece', '1', 1, '2023-05-31 13:49:16', '2023-05-31 13:49:16'),
	(52, 163, 'gram', '1', 2, '2023-05-31 13:49:16', '2023-05-31 13:49:16'),
	(53, 163, 'piece', '1', 3, '2023-05-31 13:49:16', '2023-05-31 13:49:16'),
	(54, 163, 'piece', '1', 4, '2023-05-31 13:49:16', '2023-05-31 13:49:16');

-- Dumping structure for table stc.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL,
  `datetime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table stc.reviews: ~9 rows (approximately)
INSERT INTO `reviews` (`id`, `product_id`, `name`, `rating`, `review`, `datetime`) VALUES
	(1, 66, 'Moses Ibanez', 5, '0', 1682610204),
	(2, 66, 'Moses Ibanez', 5, '0', 1682610231),
	(3, 66, 'Moses Ibanez', 5, 'trtyyy', 1682610311),
	(4, 59, 'Moses Ibanez', 5, 'hayyss', 1682610347),
	(5, 161, 'New User', 3, 'yawaaa', 1682649498),
	(6, 161, 'New User', 5, 'try 2', 1682650063),
	(7, 156, 'New User', 5, 'pala pala i2?', 1682665896),
	(8, 157, 'New User', 5, 'chainsaw ini?', 1682665909),
	(9, 157, 'User2', 0, 'yawaaaaaaa2', 1682671787);

-- Dumping structure for table stc.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 0,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  FULLTEXT KEY `email_2` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table stc.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `phone`, `address`, `role`, `usertype`, `image`, `status`) VALUES
	(112, 'Spintacle', 'Alvin Borromeo', 'alv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09826472526', 'Iriga City', 'Admin', 1, 'images/alv.jpg', 1),
	(113, 'User', 'New User', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09517645378', 'xtyduyduyuy', '', 0, '', 1),
	(114, 'User2', 'User2', 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09519287056', 'xtyduyduyuy', '', 0, '', 1),
	(115, 'Bryaw', 'Bryaw', 'bryaw@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09844833973', 'jhsgfiuabfJSNc', '', 0, '', 1),
	(116, '<script>alert(1);</script>', '<script>alert(1);</script>', '123@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '09123456789', '<script>alert(1);</script>', 'Cashier', 1, 'images/testing-nutella-3.jpg', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
