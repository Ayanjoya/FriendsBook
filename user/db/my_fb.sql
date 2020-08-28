-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2020 at 04:54 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user_id`, `creator_id`, `messege`) VALUES
(1, 2, 2, 'fsfsfsf'),
(2, 2, 2, 'fsfsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `creator_id`, `comment`, `time`) VALUES
(1, 3, 1, 3, 'comment by ayan khan', '2020-07-27 05:13:40'),
(2, 2, 1, 3, 'ok a comment', '2020-07-27 05:14:46'),
(3, 2, 1, 3, 'not a comment', '2020-07-27 05:17:18'),
(4, 2, 1, 3, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-27 06:48:25'),
(5, 2, 1, 3, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-27 13:28:48'),
(6, 2, 1, 3, 'jhgj', '2020-07-27 13:28:51'),
(7, 2, 1, 3, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-27 15:43:00'),
(8, 2, 1, 3, 'JianHao Tan', '2020-07-27 16:20:51'),
(9, 2, 1, 3, 'wow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a page', '2020-07-28 03:57:10'),
(10, 2, 1, 3, 'not a comment', '2020-07-29 04:10:34'),
(11, 2, 1, 3, 'a', '2020-07-29 04:10:55'),
(12, 2, 1, 3, 'lol', '2020-07-29 05:54:38'),
(13, 2, 2, 2, 'WOW', '2020-07-29 06:33:41'),
(14, 2, 2, 2, 'ok', '2020-07-29 06:39:40'),
(15, 2, 2, 2, 'ok', '2020-07-29 06:39:59'),
(16, 2, 2, 2, 'lol', '2020-07-29 06:40:02'),
(17, 2, 2, 2, 'lol', '2020-07-29 06:40:05'),
(18, 2, 2, 2, 'lol', '2020-07-29 06:41:08'),
(19, 2, 3, 2, 'lol', '2020-07-29 06:54:09'),
(20, 2, 3, 2, 'lol', '2020-07-29 06:54:12'),
(21, 2, 2, 2, ' wow', '2020-07-29 07:15:58'),
(22, 2, 2, 2, 'wow', '2020-07-29 07:16:00'),
(23, 2, 2, 2, 'wow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow ', '2020-07-29 07:16:02'),
(24, 2, 2, 2, 'wow', '2020-07-29 07:21:26'),
(25, 2, 3, 2, '... Ayan Khan  lol ... Ayan Khan  lol', '2020-07-29 08:56:13'),
(27, 2, 2, 2, 'hkjsf', '2020-07-30 04:17:14'),
(28, 2, 1, 3, 'lol', '2020-07-31 15:59:36'),
(29, 2, 7, 2, 'a', '2020-07-31 16:11:29'),
(30, 2, 6, 2, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-31 17:09:24'),
(31, 2, 3, 2, '1', '2020-08-01 13:18:47'),
(32, 2, 4, 2, 'hi', '2020-08-04 08:44:04'),
(33, 2, 4, 2, 'ok', '2020-08-04 08:44:14'),
(34, 3, 1, 3, 'comment by ayan khan', '2020-07-27 05:13:40'),
(35, 2, 1, 3, 'ok a comment', '2020-07-27 05:14:46'),
(36, 2, 1, 3, 'not a comment', '2020-07-27 05:17:18'),
(37, 2, 1, 3, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-27 06:48:25'),
(38, 2, 1, 3, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-27 13:28:48'),
(39, 2, 1, 3, 'jhgj', '2020-07-27 13:28:51'),
(40, 2, 1, 3, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-27 15:43:00'),
(41, 2, 1, 3, 'JianHao Tan', '2020-07-27 16:20:51'),
(42, 2, 1, 3, 'wow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a page', '2020-07-28 03:57:10'),
(43, 2, 1, 3, 'not a comment', '2020-07-29 04:10:34'),
(44, 2, 1, 3, 'a', '2020-07-29 04:10:55'),
(45, 2, 1, 3, 'lol', '2020-07-29 05:54:38'),
(46, 2, 2, 2, 'WOW', '2020-07-29 06:33:41'),
(47, 2, 2, 2, 'ok', '2020-07-29 06:39:40'),
(48, 2, 2, 2, 'ok', '2020-07-29 06:39:59'),
(49, 2, 2, 2, 'lol', '2020-07-29 06:40:02'),
(50, 2, 2, 2, 'lol', '2020-07-29 06:40:05'),
(51, 2, 2, 2, 'lol', '2020-07-29 06:41:08'),
(52, 2, 3, 2, 'lol', '2020-07-29 06:54:09'),
(53, 2, 3, 2, 'lol', '2020-07-29 06:54:12'),
(54, 2, 2, 2, ' wow', '2020-07-29 07:15:58'),
(55, 2, 2, 2, 'wow', '2020-07-29 07:16:00'),
(56, 2, 2, 2, 'wow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow what a pagewow ', '2020-07-29 07:16:02'),
(57, 2, 2, 2, 'wow', '2020-07-29 07:21:26'),
(58, 2, 3, 2, '... Ayan Khan  lol ... Ayan Khan  lol', '2020-07-29 08:56:13'),
(59, 2, 2, 2, 'hkjsf', '2020-07-30 04:17:14'),
(60, 2, 1, 3, 'lol', '2020-07-31 15:59:36'),
(61, 2, 7, 2, 'a', '2020-07-31 16:11:29'),
(62, 2, 6, 2, ' comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan comment by ayan khan', '2020-07-31 17:09:24'),
(63, 2, 3, 2, '1', '2020-08-01 13:18:47'),
(64, 2, 4, 2, 'hi', '2020-08-04 08:44:04'),
(65, 2, 4, 2, 'ok', '2020-08-04 08:44:14'),
(66, 1, 14, 1, 'ok', '2020-08-12 07:45:16'),
(67, 1, 14, 1, 'csvxcvxvx', '2020-08-13 02:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `more` text NOT NULL,
  `rule` text NOT NULL,
  `price` text NOT NULL,
  `winning` text NOT NULL,
  `till-text` text NOT NULL,
  `till-time` text NOT NULL,
  `delete_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `icon`, `title`, `text`, `more`, `rule`, `price`, `winning`, `till-text`, `till-time`, `delete_on`) VALUES
(28, '../single.png', 'selfie king', 'post a selfie with #selfie_king top 3 player will win', '1. click a selfie<br>2. in description write #selfie_king<br>3. we will choose the winner by the count of likes', '1. multipel selfies will disqualify you<br>2. we will deliver the price at your address', 'soclpie mug', 'most liked top 3 selfie will win', '1st Of September', '2020-09-01', '2020-09-02'),
(29, '../single.png', 'sd', 'dsf', 'sd', 's', 'asfd', 'sdf', 'sfd', '1111-11-11', '0011-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `event_winner`
--

CREATE TABLE `event_winner` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(70, 2, 1, 14, '2020-08-12 15:00:53');

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
(1, 2, 3, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-07-27 05:16:16'),
(2, 2, 3, 'Started Following You', '', '@', '2020-07-27 05:16:18'),
(3, 2, 3, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-07-28 03:57:39'),
(4, 2, 3, 'Started Following You', '', '@', '2020-07-28 03:57:40'),
(5, 2, 3, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-07-28 04:49:45'),
(6, 2, 2, 'Started Following You', '', '@', '2020-07-29 07:43:04'),
(7, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:27:15'),
(8, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:27:20'),
(9, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:33:32'),
(10, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:33:33'),
(11, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:33:34'),
(12, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:33:34'),
(13, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:33:35'),
(14, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:33:37'),
(15, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:33:37'),
(16, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:33:38'),
(17, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:41:12'),
(18, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:44:53'),
(19, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:49:14'),
(20, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:49:17'),
(21, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:49:19'),
(22, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:53:49'),
(23, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:54:37'),
(24, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:54:46'),
(25, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:54:54'),
(26, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:54:56'),
(27, 2, 2, 'Unfollowing You', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 11:55:00'),
(28, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:55:10'),
(29, 2, 2, 'Started Following You', '', '@', '2020-08-01 11:55:53'),
(30, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:11:47'),
(31, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:12:04'),
(32, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:12:06'),
(33, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:12:24'),
(34, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:12:27'),
(35, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:13:05'),
(36, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:13:11'),
(37, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 12:13:12'),
(38, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 13:26:55'),
(39, 2, 2, 'Liked Your Post', 'profileimages/22tjTPQAU.jpg', '@Ayan Khan', '2020-08-01 13:26:57'),
(40, 2, 2, 'Ayan Khan', 'profileimages/22tjTPQAU.jpg', 'Started Following You', '2020-08-01 18:22:08'),
(41, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-01 18:23:22'),
(42, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-01 18:23:30'),
(43, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-01 18:25:38'),
(44, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-01 18:25:55'),
(45, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-01 18:26:05'),
(46, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 03:52:22'),
(47, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 03:53:49'),
(48, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 03:54:21'),
(49, 2, 2, 'Started UnFollowing You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 03:56:25'),
(50, 2, 3, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-02 03:56:36'),
(51, 2, 3, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-02 03:56:40'),
(52, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 04:00:57'),
(53, 2, 2, 'Started UnFollowing You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 04:02:52'),
(54, 2, 2, 'Started Following You', 'profileimages/22tjTPQAU.jpg', 'Ayan Khan', '2020-08-02 04:25:34'),
(55, 3, 2, 'Started Following You', 'profileimages/2ML.jpg', 'ayan', '2020-08-03 17:22:34'),
(56, 3, 2, 'Started UnFollowing You', 'profileimages/2ML.jpg', 'ayan', '2020-08-03 17:22:35'),
(57, 3, 2, 'Started Following You', 'profileimages/2ML.jpg', 'ayan', '2020-08-03 17:22:36'),
(58, 3, 2, 'Liked Your Post', 'avatar.png', '@ayan', '2020-08-03 17:22:37'),
(59, 2, 2, 'Liked Your Post', 'profileimages/2ML.jpg', '@Ayan Khan', '2020-08-06 06:09:19'),
(60, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:52:57'),
(61, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:52:59'),
(62, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:53:00'),
(63, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-08-06 09:54:36'),
(64, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:41'),
(65, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:41'),
(66, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:41'),
(67, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:41'),
(68, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:41'),
(69, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:42'),
(70, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:42'),
(71, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:42'),
(72, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:42'),
(73, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:42'),
(74, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:42'),
(75, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 09:54:44'),
(76, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:44'),
(77, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:45'),
(78, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:45'),
(79, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:45'),
(80, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:46'),
(81, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:46'),
(82, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:46'),
(83, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:46'),
(84, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:46'),
(85, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:46'),
(86, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:47'),
(87, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:47'),
(88, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:47'),
(89, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:47'),
(90, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:47'),
(91, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:48'),
(92, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:48'),
(93, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:48'),
(94, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:48'),
(95, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:49'),
(96, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 10:22:52'),
(97, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:30'),
(98, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:32'),
(99, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:32'),
(100, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:33'),
(101, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:33'),
(102, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:33'),
(103, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:33'),
(104, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:33'),
(105, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:33'),
(106, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:34'),
(107, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 11:09:34'),
(108, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-08-06 11:09:36'),
(109, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-08-06 11:09:38'),
(110, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 13:40:29'),
(111, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 13:40:30'),
(112, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 13:40:31'),
(113, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 13:40:31'),
(114, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 13:40:32'),
(115, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-08-06 13:56:01'),
(116, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:08'),
(117, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:09'),
(118, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:09'),
(119, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:09'),
(120, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:09'),
(121, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:10'),
(122, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:10'),
(123, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:10'),
(124, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:10'),
(125, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:12'),
(126, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:21'),
(127, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:27'),
(128, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:29'),
(129, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:30'),
(130, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:31'),
(131, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:31'),
(132, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:32'),
(133, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-06 14:30:37'),
(134, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-08-07 10:31:04'),
(135, 1, 1, 'Liked Your Post', 'avatar.png', '@Ayan Khan', '2020-08-07 10:31:07'),
(136, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-07 10:31:58'),
(137, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 10:32:02'),
(138, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-07 10:32:03'),
(139, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 10:32:06'),
(140, 1, 1, 'Started Following You', 'avatar.png', 'Ayan Khan', '2020-08-07 10:32:07'),
(141, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:26:41'),
(142, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:26:55'),
(143, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:00'),
(144, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:01'),
(145, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:02'),
(146, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:02'),
(147, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:03'),
(148, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:03'),
(149, 1, 1, 'Started UnFollowing You', 'avatar.png', 'Ayan Khan', '2020-08-07 17:27:03'),
(150, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:27'),
(151, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:29'),
(152, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:36'),
(153, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:37'),
(154, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:38'),
(155, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:39'),
(156, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:40'),
(157, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:41'),
(158, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:41'),
(159, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:43'),
(160, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:44'),
(161, 2, 1, 'Started UnFollowing You', 'avatar.png', 'soclpie', '2020-08-09 04:55:46'),
(162, 1, 1, 'Started UnFollowing You', 'profileimages/1Instagram-Blog-Post.jpg', 'Ayan Khan', '2020-08-09 07:54:19'),
(163, 1, 1, 'Liked Your Post', 'profileimages/1Instagram-Blog-Post.jpg', '@Ayan Khan', '2020-08-09 07:54:20'),
(164, 1, 1, 'Started UnFollowing You', 'profileimages/1Instagram-Blog-Post.jpg', 'Ayan Khan', '2020-08-09 07:55:23'),
(165, 1, 1, 'Liked Your Post', 'profileimages/1Instagram-Blog-Post.jpg', '@Ayan Khan', '2020-08-10 06:35:18'),
(166, 1, 1, 'Started UnFollowing You', 'profileimages/1Instagram-Blog-Post.jpg', 'Ayan Khan', '2020-08-12 07:49:16'),
(167, 1, 1, 'Liked Your Post', 'profileimages/1ad_img.png', '@Ayan Khan', '2020-08-24 09:32:29'),
(168, 1, 1, 'Started UnFollowing You', 'profileimages/1ad_img.png', 'Ayan Khan', '2020-08-24 09:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE `participate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`id`, `user_id`, `event_id`) VALUES
(77, 1, 28);

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
(1, 1, 'Ayan Khan', 'ayan.khan.joya6228@gmail.com', 'male', 'fdsfds ', '3333-03-23', 'shanti nagar,near joshi marg', 'profileimages/1ad_img.png', 'backimages/1add4.png'),
(2, 2, 'soclpie', 'soclpie@gmail.com', 'male', 'No Bio Yet', '1111-11-11', 'shanti nagar,near joshi marg', 'avatar.png', 'backimages/cover111222333.png');

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
  `banned` varchar(20) NOT NULL DEFAULT 'no',
  `school` text NOT NULL,
  `class` text NOT NULL,
  `sec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`, `school`, `class`, `sec`) VALUES
(1, 'Ayan Khan', 'ayan.khan.joya6228@gmail.com', '12345', '9928136009', '2020-08-06 15:14:31', 'yes', 'no', 'st teresa', '7', 'B'),
(2, 'soclpie', 'soclpie@gmail.com', '12345', '9928136009', '2020-08-08 13:34:34', 'yes', 'no', 'st teresa', '7', 'B');

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
(12, 3, 2, 8, '2020-08-03 17:22:37'),
(22, 1, 1, 14, '2020-08-24 09:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(700) NOT NULL,
  `description` text NOT NULL,
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
(15, 1, 'Ayan Khan', 'ayan.khan.joya6228@gmail.com', 'dgdg', NULL, NULL, NULL, NULL, NULL, '#000000', '#000000', '2020-08-27 08:06:24', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_winner`
--
ALTER TABLE `event_winner`
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
-- Indexes for table `participate`
--
ALTER TABLE `participate`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `event_winner`
--
ALTER TABLE `event_winner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `participate`
--
ALTER TABLE `participate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_likes`
--
ALTER TABLE `user_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
