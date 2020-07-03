-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2020 at 09:18 AM
-- Server version: 5.7.27
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_fb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `creator_id`, `comment`, `time`) VALUES
(1, 1, 4, 1, 'whata icon', '2020-06-09 10:17:29'),
(2, 1, 4, 1, 'fff', '2020-06-09 14:53:24'),
(3, 1, 6, 1, 'dafasfasdfsfsdfasdf', '2020-06-09 14:59:16'),
(4, 1, 1, 1, 'lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala', '2020-06-10 06:27:41'),
(5, 1, 1, 1, 'lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. ', '2020-06-10 06:28:09'),
(6, 1, 1, 1, 'wowwww', '2020-06-10 10:56:31'),
(7, 1, 1, 1, 'lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala.lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lalalalalalallalallalalaaaaaalll. lala.', '2020-06-13 06:03:23'),
(8, 1, 1, 1, 'wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. ', '2020-06-13 16:39:56'),
(9, 1, 1, 1, 'wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo. wowoowowowowo.', '2020-06-13 16:40:07'),
(10, 1, 1, 1, 'wow i neeed this', '2020-06-14 07:13:51'),
(11, 1, 1, 1, '╔┓┏╦━━╦┓╔┓╔━━╗ ║┗┛║┗━╣┃║┃║ 0 0 ║ ║┏┓║┏━╣┗╣┗╣╰╯║ ╚┛┗╩━━╩━╩━╩━━╝', '2020-06-14 08:20:11'),
(12, 1, 1, 1, '╔┓┏╦━━╦┓╔┓╔━━╗ ║┗┛║┗━╣┃║┃║ 0 0 ║ ║┏┓║┏━╣┗╣┗╣╰╯║ ╚┛┗╩━━╩━╩━╩━━╝', '2020-06-14 08:20:18'),
(13, 1, 1, 1, '╔┓┏╦━━╦┓╔┓╔━━╗\r\n║┗┛║┗━╣┃║┃║ 0 0 ║\r\n║┏┓║┏━╣┗╣┗╣╰╯║\r\n╚┛┗╩━━╩━╩━╩━━╝', '2020-06-14 08:21:34'),
(14, 1, 1, 1, 'Hellow', '2020-06-14 08:21:52'),
(15, 3, 1, 1, 'hi budddyyyyy', '2020-06-15 11:34:35'),
(16, 3, 1, 1, 'sssssssssjfsjfsjflsfslfsf;', '2020-06-15 11:34:58'),
(17, 3, 1, 1, 'sfsafsafssafsafasfsaf', '2020-06-15 11:35:04'),
(18, 3, 1, 1, 'sssssss', '2020-06-15 11:35:52'),
(19, 3, 13, 1, 'ddddddddddddddddd', '2020-06-16 08:06:22'),
(20, 3, 13, 1, 'wwpowowowowowowo', '2020-06-16 11:26:00'),
(21, 3, 8, 1, 'posting in socualfjshskfhskfjhskjf', '2020-06-16 11:33:43'),
(22, 3, 14, 3, 'hi', '2020-06-17 07:38:51'),
(23, 3, 14, 3, 'wow mac book air', '2020-06-17 08:19:57'),
(24, 3, 1, 1, 'oyoyoyoyoyoyoyoyooyoyyoyoyyooyoyoyoyoyoyoyooyoyoyoyoyooy', '2020-06-17 11:41:09'),
(25, 3, 17, 3, 'hi all lol', '2020-06-19 13:45:59'),
(26, 3, 17, 3, 'hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. hahahhahahahhahahh. hahahahhahahahhahahahhahah. ', '2020-06-23 06:52:11'),
(27, 3, 17, 3, 'nnn', '2020-06-23 14:24:12'),
(28, 3, 17, 3, 'lllllll', '2020-06-23 14:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `user_id`, `creator_id`, `post_id`, `time`) VALUES
(2, 1, 1, 1, '2020-06-13 16:40:34'),
(5, 2, 3, 17, '2020-06-19 03:40:33'),
(9, 3, 3, 17, '2020-06-23 14:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `user_id`, `creator_id`, `title`, `icon`, `text`, `time`) VALUES
(1, 1, 1, 'Started Following You', '', '@', '2020-06-09 16:00:31'),
(2, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:23:06'),
(3, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-06-10 04:23:59'),
(4, 1, 1, 'Started Following You', '', '@', '2020-06-10 04:24:07'),
(5, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:25:47'),
(6, 1, 1, 'Started Following You', '', '@', '2020-06-10 04:26:11'),
(7, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:26:15'),
(8, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:26:36'),
(9, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:28:22'),
(10, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:28:23'),
(11, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:28:33'),
(12, 1, 1, 'Started Following You', '', '@', '2020-06-10 04:31:08'),
(13, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:31:39'),
(14, 1, 1, 'Started Following You', '', '@', '2020-06-10 04:31:40'),
(15, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:31:41'),
(16, 1, 1, 'Started Following You', '', '@', '2020-06-10 04:31:41'),
(17, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 04:50:46'),
(18, 1, 1, 'Started Following You', '', '@', '2020-06-10 04:50:46'),
(19, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 06:19:11'),
(20, 1, 1, 'Started Following You', '', '@', '2020-06-10 06:20:36'),
(21, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 06:22:11'),
(22, 1, 1, 'Started Following You', '', '@', '2020-06-10 06:22:18'),
(23, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 06:22:43'),
(24, 1, 1, 'Liked Your Post', 'profileimages/1IMG20200512154353.jpg', '@Ayan Khan', '2020-06-10 06:27:20'),
(25, 1, 1, 'Started Following You', '', '@', '2020-06-10 06:27:27'),
(26, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 06:27:33'),
(27, 1, 1, 'Commented On Your Post', '', '@', '2020-06-10 06:27:41'),
(28, 1, 1, 'Commented On Your Post', '', '@', '2020-06-10 06:27:58'),
(29, 1, 1, 'Commented On Your Post', '', '@', '2020-06-10 06:28:03'),
(30, 1, 1, 'Commented On Your Post', '', '@', '2020-06-10 06:28:09'),
(31, 1, 1, 'Started Following You', '', '@', '2020-06-10 10:39:08'),
(32, 1, 1, 'Liked Your Post', 'profileimages/1IMG20200512154353.jpg', '@Ayan Khan', '2020-06-10 10:56:26'),
(33, 1, 1, 'Commented On Your Post', '', '@', '2020-06-10 10:56:31'),
(34, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 10:56:39'),
(35, 1, 1, 'Started Following You', '', '@', '2020-06-10 10:56:39'),
(36, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 10:56:40'),
(37, 1, 1, 'Started Following You', '', '@', '2020-06-10 11:00:31'),
(38, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 11:00:32'),
(39, 1, 1, 'Started Following You', '', '@', '2020-06-10 11:19:44'),
(40, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 11:19:45'),
(41, 1, 1, 'Started Following You', '', '@', '2020-06-10 14:14:45'),
(42, 1, 1, 'Unfollowing You', '', '@', '2020-06-10 14:14:46'),
(43, 2, 1, 'Started Following You', '', '@', '2020-06-10 14:19:15'),
(44, 2, 1, 'Unfollowing You', '', '@', '2020-06-10 14:19:22'),
(45, 2, 1, 'Started Following You', '', '@', '2020-06-10 14:19:27'),
(46, 2, 1, 'Unfollowing You', '', '@', '2020-06-10 14:19:40'),
(47, 2, 1, 'Started Following You', '', '@', '2020-06-10 14:19:44'),
(48, 2, 1, 'Unfollowing You', '', '@', '2020-06-10 14:24:03'),
(49, 2, 1, 'Started Following You', '', '@', '2020-06-10 14:24:40'),
(50, 2, 1, 'Unfollowing You', '', '@', '2020-06-10 14:24:45'),
(51, 2, 1, 'Started Following You', '', '@', '2020-06-10 16:26:37'),
(52, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:36:21'),
(53, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:46:45'),
(54, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:47:51'),
(55, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:47:54'),
(56, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:47:58'),
(57, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:48:11'),
(58, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:48:58'),
(59, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:49:01'),
(60, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:49:20'),
(61, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:49:25'),
(62, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:49:55'),
(63, 2, 1, 'Started Following You', '', '@', '2020-06-11 07:50:03'),
(64, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:50:07'),
(65, 2, 1, 'Unfollowing You', '', '@', '2020-06-11 07:50:50'),
(66, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 06:02:39'),
(67, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 06:02:59'),
(68, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 06:03:18'),
(69, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 06:03:23'),
(70, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 06:03:34'),
(71, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 06:03:46'),
(72, 1, 1, 'Started Following You', '', '@', '2020-06-13 06:03:54'),
(73, 1, 1, 'Unfollowing You', '', '@', '2020-06-13 06:03:55'),
(74, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 16:39:56'),
(75, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 16:40:07'),
(76, 1, 1, 'Commented On Your Post', '', '@', '2020-06-13 16:40:22'),
(77, 1, 1, 'Started Following You', '', '@', '2020-06-13 16:40:34'),
(78, 1, 1, 'Commented On Your Post', '', '@', '2020-06-14 07:13:51'),
(79, 1, 1, 'Commented On Your Post', '', '@', '2020-06-14 08:20:11'),
(80, 1, 1, 'Commented On Your Post', '', '@', '2020-06-14 08:20:18'),
(81, 1, 1, 'Commented On Your Post', '', '@', '2020-06-14 08:21:34'),
(82, 1, 1, 'Commented On Your Post', '', '@', '2020-06-14 08:21:52'),
(83, 1, 1, 'Commented On Your Post', '', '@', '2020-06-15 10:13:48'),
(84, 3, 1, 'Commented On Your Post', '', '@', '2020-06-15 11:34:35'),
(85, 3, 1, 'Commented On Your Post', '', '@', '2020-06-15 11:34:58'),
(86, 3, 1, 'Liked Your Post', 'avatar.png', '@SoclPie', '2020-06-15 11:35:00'),
(87, 3, 1, 'Started Following You', '', '@', '2020-06-15 11:35:01'),
(88, 3, 1, 'Commented On Your Post', '', '@', '2020-06-15 11:35:04'),
(89, 3, 1, 'Commented On Your Post', '', '@', '2020-06-15 11:35:52'),
(90, 3, 1, 'Commented On Your Post', '', '@', '2020-06-16 08:06:22'),
(91, 3, 1, 'Commented On Your Post', '', '@', '2020-06-16 11:26:00'),
(92, 3, 1, 'Liked Your Post', 'avatar.png', '@SoclPie', '2020-06-16 11:26:03'),
(93, 3, 1, 'Commented On Your Post', '', '@', '2020-06-16 11:33:43'),
(94, 3, 3, 'Commented On Your Post', '', '@', '2020-06-17 07:38:51'),
(95, 3, 3, 'Liked Your Post', 'avatar.png', '@SoclPie', '2020-06-17 07:39:12'),
(96, 3, 3, 'Liked Your Post', 'avatar.png', '@SoclPie', '2020-06-17 08:18:43'),
(97, 3, 3, 'Liked Your Post', 'avatar.png', '@SoclPie', '2020-06-17 08:18:43'),
(98, 3, 3, 'Commented On Your Post', '', '@', '2020-06-17 08:19:57'),
(99, 3, 1, 'Unfollowing You', '', '@', '2020-06-17 11:24:09'),
(100, 3, 3, 'Started Following You', '', '@', '2020-06-17 11:24:40'),
(101, 3, 1, 'Commented On Your Post', '', '@', '2020-06-17 11:41:09'),
(102, 3, 3, 'Liked Your Post', 'profileimages/311IMG20200512154353.jpg', '@SoclPie', '2020-06-18 18:19:28'),
(103, 3, 1, 'Liked Your Post', 'profileimages/311IMG20200512154353.jpg', '@SoclPie', '2020-06-19 03:39:04'),
(104, 2, 3, 'Liked Your Post', 'avatar.png', '@andmin2', '2020-06-19 03:40:33'),
(105, 2, 3, 'Started Following You', '', '@', '2020-06-19 03:40:33'),
(106, 2, 1, 'Liked Your Post', 'avatar.png', '@andmin2', '2020-06-19 03:40:53'),
(107, 3, 1, 'Unfollowing You', '', '@', '2020-06-19 11:45:01'),
(108, 3, 3, 'Commented On Your Post', '', '@', '2020-06-19 13:45:59'),
(109, 3, 3, 'Started Following You', '', '@', '2020-06-22 13:35:11'),
(110, 3, 3, 'Unfollowing You', '', '@', '2020-06-23 06:51:15'),
(111, 3, 3, 'Commented On Your Post', '', '@', '2020-06-23 06:52:11'),
(112, 3, 3, 'Started Following You', '', '@', '2020-06-23 06:53:22'),
(113, 3, 3, 'Commented On Your Post', '', '@', '2020-06-23 14:24:12'),
(114, 3, 1, 'Unfollowing You', '', '@', '2020-06-23 14:25:21'),
(115, 3, 3, 'Started Following You', '', '@', '2020-06-23 14:25:29'),
(116, 3, 3, 'Unfollowing You', '', '@', '2020-06-23 14:25:29'),
(117, 3, 3, 'Liked Your Post', 'profileimages/311IMG20200512154353.jpg', '@SoclPie', '2020-06-23 14:25:31'),
(118, 3, 3, 'Started Following You', '', '@', '2020-06-23 14:28:30'),
(119, 3, 3, 'Commented On Your Post', '', '@', '2020-06-23 14:29:55'),
(120, 3, 3, 'Liked Your Post', 'profileimages/311IMG20200512154353.jpg', '@SoclPie', '2020-06-23 14:30:09'),
(121, 3, 3, 'Liked Your Post', 'profileimages/311IMG20200512154353.jpg', '@SoclPie', '2020-06-23 14:30:11'),
(122, 3, 3, 'Liked Your Post', 'profileimages/311IMG20200512154353.jpg', '@SoclPie', '2020-06-23 14:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(700) NOT NULL,
  `email` varchar(700) NOT NULL,
  `gender` varchar(700) NOT NULL,
  `bio` varchar(700) NOT NULL DEFAULT 'No Bio Yet',
  `dob` date NOT NULL,
  `address` varchar(700) NOT NULL,
  `img` varchar(700) NOT NULL DEFAULT 'avatar.png',
  `back_cover` varchar(700) NOT NULL DEFAULT 'backimages/cover111222333.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover`) VALUES
(1, 1, 'Ayan Khan', 'admin@gmail.com', 'male', 'No Bio Yet', '2020-06-25', 'shanti nagar,near joshi marg', 'profileimages/191IMG20200512154353.jpg', 'backimages/1Code-It-–-Logical-HD-Wallpaper.jpg'),
(2, 2, 'andmin2', 'admin2@gmail.com', 'male', 'No Bio Yet', '2020-06-28', 'shanti nagar,near joshi marg', 'avatar.png', 'backimages/cover111222333.png'),
(3, 3, 'SoclPie', 'soclpie@gmail.com', 'male', 'A complete solution covering all aspects of your social media strategy. We are now in beta. Sign up and get a chance to win free early access', '2020-06-25', 'shanti nagar,near joshi marg', 'profileimages/311IMG20200512154353.jpg', 'backimages/3signin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` varchar(10) NOT NULL DEFAULT 'no',
  `banned` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`) VALUES
(1, 'Ayan Khan', 'admin@gmail.com', '12345', '9928136009', '2020-06-09 21:15:15', 'no', 'no'),
(2, 'andmin2', 'admin2@gmail.com', '12345', '9928136009', '2020-06-10 19:48:05', 'no', 'no'),
(3, 'SoclPie', 'soclpie@gmail.com', '12345', '9928136009', '2020-06-15 17:03:25', 'no', 'no'),
(5, 'aarifa', 'ayan.khan.joya6228@gmail.com', 'password', '999999999', '2020-06-17 09:48:33', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user_likes`
--

CREATE TABLE `user_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `creator_id` int(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_likes`
--

INSERT INTO `user_likes` (`id`, `user_id`, `creator_id`, `post_id`, `time`) VALUES
(3, 1, 1, 1, '2020-06-10 10:56:26'),
(4, 3, 1, 1, '2020-06-15 11:35:00'),
(5, 3, 1, 13, '2020-06-16 11:26:03'),
(8, 3, 3, 14, '2020-06-17 08:18:43'),
(10, 3, 1, 8, '2020-06-19 03:39:04'),
(11, 2, 3, 17, '2020-06-19 03:40:33'),
(12, 2, 1, 13, '2020-06-19 03:40:53'),
(16, 3, 3, 17, '2020-06-23 14:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(700) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `media` varchar(2000) DEFAULT NULL,
  `media2` varchar(700) DEFAULT NULL,
  `media3` varchar(700) DEFAULT NULL,
  `media4` varchar(700) DEFAULT NULL,
  `url` varchar(700) DEFAULT NULL,
  `color` varchar(700) DEFAULT NULL,
  `background` varchar(700) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `friend` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `url`, `color`, `background`, `time`, `friend`) VALUES
(1, 1, 'Ayan Khan', 'admin@gmail.com', 'my first post', 'post/15917175871wallpaper.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-09 15:46:27', ''),
(2, 1, 'Ayan Khan', 'admin@gmail.com', 'movie', 'post/15917176731thumb.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=LvCrSFsxpsk', NULL, NULL, '2020-06-09 15:47:53', ''),
(3, 1, 'Ayan Khan', 'admin@gmail.com', 'music', 'post/15917639201thumb.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=vO15zpO5kc4', NULL, NULL, '2020-06-10 04:38:40', ''),
(4, 1, 'Ayan Khan', 'admin@gmail.com', 'joke', 'post/15917643021thumb.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=fBudaE5qgnU', NULL, NULL, '2020-06-10 04:45:02', ''),
(6, 1, 'Ayan Khan', 'admin@gmail.com', 'music', 'post/15920539701thumb.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=eIc4mqyN1Q8&feature=emb_rel_pause', NULL, NULL, '2020-06-13 13:12:50', ''),
(7, 1, 'Ayan Khan', 'admin@gmail.com', '2 + 2 = 5 kaise galti se', NULL, NULL, NULL, NULL, NULL, '#ffffff', '#000000', '2020-06-14 07:12:22', ''),
(8, 1, 'Ayan Khan', 'admin@gmail.com', 'my hotooooooo', 'post/15921248091bg4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-14 08:53:29', ''),
(9, 1, 'Ayan Khan', 'admin@gmail.com', 'music', 'post/15921286951bg4.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=y50Y5IT3WBE', NULL, NULL, '2020-06-14 09:58:15', ''),
(10, 1, 'Ayan Khan', 'admin@gmail.com', 'music', 'post/15921287371bg4.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=SMs0GnYze34', NULL, NULL, '2020-06-14 09:58:57', ''),
(11, 1, 'Ayan Khan', 'admin@gmail.com', 'lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala  ', NULL, NULL, NULL, NULL, NULL, '#ffffff', '#000000', '2020-06-14 11:05:46', ''),
(13, 1, 'Ayan Khan', 'admin@gmail.com', 'logo', 'post/15922933801onlinelogomaker-061620-1256-6484.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-16 07:43:00', ''),
(14, 3, 'SoclPie', 'soclpie@gmail.com', 'lol', 'post/1592379508315917175871wallpaper.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-17 07:38:28', ''),
(16, 3, 'SoclPie', 'soclpie@gmail.com', 'lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala lalalalallalalla alalalalalalla allalalalallalal allalalalalallal ala', NULL, NULL, NULL, NULL, NULL, '#0088ff', '#ff7070', '2020-06-17 14:25:39', ''),
(17, 3, 'SoclPie', 'soclpie@gmail.com', 'jjjj', 'post/15925043613Screen Shot 2020-05-25 at 5.06.26 PM.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 18:19:21', ''),
(18, 3, 'SoclPie', 'soclpie@gmail.com', 'wathh', 'post/15925676323Screen Shot 2020-05-25 at 5.06.26 PM.png', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=7-qGKqveZaM', NULL, NULL, '2020-06-19 11:53:52', ''),
(19, 3, 'SoclPie', 'soclpie@gmail.com', 'jokevghgkj ', NULL, NULL, NULL, NULL, NULL, '#4d62a3', '#0033ff', '2020-06-23 14:23:58', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_likes`
--
ALTER TABLE `user_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_likes`
--
ALTER TABLE `user_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
