-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 02:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'Nuts');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `email`, `message`) VALUES
(1, 'danielvitalista811@gmail.com', 'taeng yawa'),
(2, 'danielvitalista811@gmail.com', 'lods'),
(3, 'brytomenio@my.cspc.edu.ph', 'lodsssss');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `capital` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `code` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `prod_qntty` int(11) NOT NULL,
  `purchased` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `qty_change_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `class`, `image`, `name`, `price`, `capital`, `description`, `code`, `qty`, `prod_qntty`, `purchased`, `status`, `qty_change_at`) VALUES
(163, 'Nuts', 'images/Sagai.jpg', 'Sagai', '150', 120, 'cccccc', 'n1', 0, 100, 0, 1, '2023-05-21'),
(164, 'Nuts', 'images/Sukkary.jpg', 'Sukkary', '150', 120, '', 'n2', 0, 100, 0, 1, '2023-05-21'),
(166, 'Nuts', 'images/Kadrawi.jpg', 'Kadrawi', '150', 120, '', 'n4', 0, 100, 0, 1, '2023-05-21'),
(167, 'Nuts', 'images/Khudri.jpg', 'Khudri', '150', 120, '', 'n5', 0, 100, 0, 1, '2023-05-21'),
(168, 'Nuts', 'images/ajwa.jpg', 'Ajwa', '150', 120, '', 'n6', 0, 100, 0, 1, '2023-05-21'),
(169, 'Nuts', 'images/datesfruits.jpg', 'fdfafaf', '150', 120, 'sbkjsabdsjad', 'n7', 0, 100, 0, 1, '2023-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 0,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `phone`, `address`, `role`, `usertype`, `image`, `status`) VALUES
(112, 'Spintacle', 'Alvin Borromeo', 'alv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09826472526', 'Iriga City', 'Admin', 1, 'images/alv.jpg', 1),
(113, 'User', 'New User', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09517645378', 'xtyduyduyuy', '', 0, '', 1),
(114, 'User2', 'User2', 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09519287056', 'xtyduyduyuy', '', 0, '', 1),
(115, 'Bryaw', 'Bryaw', 'bryaw@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '09844833973', 'jhsgfiuabfJSNc', '', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);
ALTER TABLE `users` ADD FULLTEXT KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
