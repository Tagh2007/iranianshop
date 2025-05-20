-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2023 at 05:56 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `orderDate` date NOT NULL,
  `pro_code` int NOT NULL,
  `pro_qty` int NOT NULL,
  `pro_price` float NOT NULL,
  `mobile` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `address` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `trackcode` varchar(24) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `state` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_code` int NOT NULL COMMENT 'کد کالا(کلید اصلی)',
  `pro_name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'نام کالا',
  `pro_qty` int NOT NULL COMMENT 'تعداد موجودی',
  `pro_price` float NOT NULL COMMENT 'قیمت کالا',
  `pro_image` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'نام پرونده تصویر کالا',
  `pro_detail` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'توضیحات کالا',
  PRIMARY KEY (`pro_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `realName` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL COMMENT 'نام واقعی کاربر',
  `userName` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'نام کاربری کلید () اصلی',
  `password` varchar(20) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL COMMENT 'گذرواژه',
  `email` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL COMMENT 'رایانامه',
  `type` tinyint(1) NOT NULL COMMENT 'نوع کاربرکاربر/مدیر () عادی',
  PRIMARY KEY (`realName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
