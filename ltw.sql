-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2018 at 03:34 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltw`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `ten`, `hinh`, `gia`) VALUES
(1, '  Loa vi tinh fenda U213A', 'fenda-u213', 220000);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'nhutlinh', 'nhutlinh'),
(2, 'quangbinh', 'quangbinh'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

DROP TABLE IF EXISTS `computers`;
CREATE TABLE IF NOT EXISTS `computers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `cauhinh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `ten`, `hinh`, `gia`, `cauhinh`, `hang`) VALUES
(1, 'Apple MacBook Air i5', 'apple-macbook-air-i5', 28990000, 'CPU:Intel Core i7 Kabylake Refresh, 2.20 GHz </br>RAM:	16 GB, DDR4 (On board), 2400 MHz', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `cauhinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `ten`, `hinh`, `gia`, `cauhinh`, `hang`) VALUES
(1, 'Iphone Xs Max', 'iphone-xs-max', 43990000, 'Ram: 4GB Rom: 512GB', 'apple'),
(2, 'Iphone Xs', 'iphone-xs', 29890000, 'Ram: 4GB Rom: 64GB', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` double NOT NULL,
  `cauhinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
