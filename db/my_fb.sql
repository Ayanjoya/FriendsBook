-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2020 at 12:46 PM
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
(1, 1, 'Ayan Khan', 'ayan.khan.joya6228@gmail.com', 'male', 'No Bio Yet', '2020-05-01', 'shanti nagar,near joshi marg', 'profileimages/1IMG20200512154353.jpg', 'backimages/1IMG20200512154353.jpg'),
(2, 3, 'www', 'www@gmail.com', 'male', 'No Bio Yet', '2020-05-03', 'shanti nagar,near joshi marg', 'avatar.png', 'backimages/cover111222333.png'),
(3, 4, 'wwa', 'w@gmail.com', 'male', 'No Bio Yet', '2020-05-30', 'shanti nagar,near joshi marg', 'avatar.png', 'backimages/cover111222333.png');

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
(1, 'Ayan Khan', 'ayan.khan.joya6228@gmail.com', '12345', '9928136009', '2020-05-14 10:03:12', 'no', 'no'),
(2, 'Ayan Khan', 'paas@gmail.com', '12345', '9928136009', '2020-05-14 14:04:18', 'no', 'no'),
(3, 'www', 'www@gmail.com', '12345', '9928136009', '2020-05-17 22:26:20', 'no', 'no'),
(4, 'wwa', 'w@gmail.com', '12345', '9928136009', '2020-05-17 22:36:01', 'yes', 'no');

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
  `color` varchar(700) DEFAULT NULL,
  `background` varchar(700) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `friend` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
