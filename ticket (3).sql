-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2023 at 11:46 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `send_message` text COLLATE utf8_persian_ci,
  `recive_message` text COLLATE utf8_persian_ci,
  `id_ticket` int(11) NOT NULL,
  `title_ticket` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_ticket` (`id_ticket`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `send_message`, `recive_message`, `id_ticket`, `title_ticket`, `status`, `user_id`) VALUES
(7, 'salam kardam', NULL, 13, 'salam', 0, 7),
(8, 'salam kardam', NULL, 14, 'aleik', 0, 7),
(9, 'salam kardam', NULL, 15, 'ss', 0, 8),
(10, 'salam kardam', NULL, 16, 'tt', 0, 8),
(11, 'salam kardam', NULL, 17, 'ss', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `new_ticket`
--

DROP TABLE IF EXISTS `new_ticket`;
CREATE TABLE IF NOT EXISTS `new_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_yourtablename` (`user_id`,`title`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `new_ticket`
--

INSERT INTO `new_ticket` (`id`, `title`, `content`, `user_id`) VALUES
(13, 'salam', 'salam kardam', 7),
(14, 'aleik', 'salam kardam', 7),
(15, 'ss', 'salam kardam', 8),
(16, 'tt', 'salam kardam', 8),
(17, 'ss', 'salam kardam', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `is_admin`) VALUES
(6, 'hedye', 'bahadori', 'hedye', 'hedye@gmail.com', '123456', 1),
(7, 'ali', 'shams', 'ali', 'ali@gmail.com', '123456', 0),
(8, 'elahe', 'shams', 'elahe', 'elahe@gmail.com', '123456', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
