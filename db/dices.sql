-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 01:50 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dices`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `roll1` varchar(20) NOT NULL,
  `roll2` varchar(20) NOT NULL,
  `roll3` varchar(20) NOT NULL,
  `roll4` varchar(20) NOT NULL,
  `winings` varchar(5) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `username`, `roll1`, `roll2`, `roll3`, `roll4`, `winings`, `ip`, `date`) VALUES
(3, 'vytas', '6,6,6', '1,1,6', '6,5,1', '5,2,3', '0.7', '', '2017-10-27 09:47:46'),
(4, 'vytas', '4,5,3', '6,1,2', '4,1,5', '4,2,2', '0.2', '', '2017-10-27 09:50:34'),
(5, 'vytas', '6,2,4', '3,2,6', '3,3,3', '5,6,6', '0.9', '', '2017-10-27 09:52:10'),
(6, 'matas', '6,1,3', '4,4,5', '5,3,1', '2,4,4', '0.8', '', '2017-10-27 09:59:54'),
(7, 'matas', '3,2,3', '1,4,6', '6,5,1', '2,6,4', '0.3', '', '2017-10-27 09:59:59'),
(8, 'matas', '3,5,6', '5,2,2', '1,4,3', '1,2,1', '0.3', '', '2017-10-27 10:00:02'),
(9, 'vytas', '2,6,6', '1,6,1', '5,5,5', '5,6,4', '1.2', '', '2017-10-27 11:28:53'),
(10, 'vytas', '6,1,3', '2,6,6', '4,1,3', '4,2,3', '0.6', '', '2017-10-27 11:39:04'),
(11, 'vytas', '2,3,1', '6,2,5', '2,2,6', '3,2,4', '0.2', '', '2017-10-27 11:39:17'),
(12, 'vytas', '3,4,6', '6,5,4', '4,4,5', '4,1,2', '0.4', '', '2017-10-30 09:10:39'),
(13, 'vytas', '5,6,4', '2,6,1', '2,6,5', '6,5,5', '0.5', '', '2017-10-30 09:17:23'),
(14, 'vytas', '3,4,1', '4,2,4', '5,4,2', '3,3,2', '0.7', '', '2017-10-30 09:21:57'),
(15, 'vytas', '3,6,6', '6,2,2', '1,3,1', '5,6,6', '1.5', '', '2017-10-30 09:25:37'),
(16, 'vytas', '2,2,1', '1,3,2', '3,6,4', '1,1,5', '0.3', '', '2017-10-30 09:26:34'),
(17, 'vytas', '3,6,3', '6,4,2', '6,4,3', '1,2,3', '0.3', '', '2017-10-30 09:28:30'),
(18, 'vytas', '4,3,6', '3,6,1', '4,4,1', '1,1,5', '0.5', '', '2017-10-30 09:29:40'),
(19, 'vytas', '5,2,2', '3,5,3', '4,6,3', '2,6,3', '0.5', '', '2017-10-30 09:30:34'),
(20, 'vytas', '5,6,3', '1,3,3', '1,5,3', '5,4,6', '0.3', '', '2017-10-30 09:31:43'),
(21, 'vytas', '3,4,2', '6,1,3', '6,1,5', '5,6,2', '0', '', '2017-10-30 09:47:45'),
(22, 'vytas', '2,6,4', '6,2,2', '3,4,5', '5,5,6', '0.7', '', '2017-10-30 10:05:56'),
(23, 'vytas', '6,5,5', '4,4,6', '2,6,2', '2,6,6', '1.7', '', '2017-10-30 10:09:12'),
(24, 'vytas', '1,2,1', '2,3,3', '4,2,3', '6,6,2', '1', '', '2017-10-30 10:12:32'),
(25, 'vytas', '6,4,1', '3,5,2', '1,5,5', '4,2,5', '0.5', '', '2017-10-30 10:13:42'),
(26, 'vytas', '3,3,6', '5,2,5', '3,5,5', '5,2,6', '1.3', '', '2017-10-30 10:14:56'),
(27, 'vytas', '2,2,3', '5,6,2', '5,4,3', '4,4,1', '0.6', '', '2017-10-30 10:15:40'),
(28, 'vytas', '1,5,2', '1,2,4', '2,5,5', '3,6,6', '1.1', '', '2017-10-30 10:17:47'),
(29, 'vytas', '6,4,3', '3,2,5', '4,2,4', '5,2,4', '0.4', '', '2017-10-30 10:29:18'),
(30, 'vytas', '6,5,2', '2,3,4', '6,1,2', '3,2,6', '0', '', '2017-10-30 10:29:38'),
(31, 'vytas', '5,6,6', '4,1,1', '3,6,6', '4,4,2', '1.7', '', '2017-10-30 10:31:23'),
(32, 'vytas', '6,5,2', '3,1,3', '1,5,4', '3,1,3', '0.6', '', '2017-10-30 10:31:48'),
(33, 'vytas', '6,1,5', '3,4,6', '5,3,2', '5,1,6', '0', '', '2017-10-30 10:46:26'),
(34, 'vytas', '3,1,2', '5,2,1', '5,2,4', '4,4,4', '0.4', '', '2017-10-30 10:55:13'),
(35, 'vytas', '6,4,5', '6,6,6', '3,2,6', '6,2,6', '1.2', '', '2017-10-30 10:56:12'),
(36, 'vytas', '3,5,4', '6,5,5', '3,6,6', '2,5,5', '1.6', '', '2017-10-30 11:03:01'),
(37, 'vytas', '3,1,6', '3,3,3', '6,2,2', '2,6,5', '0.5', '', '2017-10-30 11:11:29'),
(38, 'vytas', '1,3,6', '3,6,2', '5,4,2', '5,4,4', '0.4', '', '2017-10-30 12:39:09'),
(39, 'vytas', '4,1,5', '2,2,5', '1,3,4', '2,6,5', '0.2', '', '2017-10-30 12:47:28'),
(40, 'vytas', '4,3,6', '2,5,3', '1,3,4', '4,6,4', '0.4', '', '2017-10-30 12:47:51'),
(41, 'vytas', '5,4,6', '5,3,3', '5,6,2', '1,5,5', '0.8', '', '2017-10-30 12:51:38'),
(42, 'vytas', '5,4,4', '1,4,3', '5,3,3', '4,3,5', '0.7', '', '2017-10-30 12:52:26'),
(43, 'vytas', '2,6,2', '5,6,5', '5,5,4', '6,4,4', '1.6', '', '2017-10-30 13:04:25'),
(45, 'vytas', '2,3,1', '2,6,4', '1,3,2', '4,4,3', '0.4', '', '2017-10-30 13:25:40'),
(46, 'vytas', '3,1,2', '2,4,5', '1,2,5', '3,3,2', '0.3', '', '2017-10-30 13:34:47'),
(47, 'vytas', '5,1,3', '1,6,6', '6,2,6', '4,3,3', '1.5', '::1', '2017-10-30 13:39:49'),
(48, 'vytas', '3,6,1', '4,3,2', '6,4,2', '4,4,2', '0.4', '::1', '2017-10-30 13:53:54'),
(50, 'vytas', '3,6,3', '6,3,6', '1,1,6', '1,5,3', '1', '::1', '2017-10-30 13:59:58'),
(55, 'matas', '5,4,5', '1,1,1', '2,5,6', '1,5,3', '0.6', '::1', '2017-10-30 14:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `username`) VALUES
(1, '0', '$2y$10$9h1FGbgUNw6.U7fKLDq3uOb2ENhurLtcudBsaYtysE9Fp9Qn6q22S', 'vytas'),
(8, '0', '$2y$10$PaBMCvwXq83qDzp26k05r.erYR3jtWpG77SeF4tzN4W1TujDEDKv6', 'matas'),
(9, '0', '$2y$10$iOB2qCdXE79yW4e.wZj.puk7imzcFQne7P9HjIyMSTYtZLFazP9rG', 'tada'),
(10, 'Tomas', '$2y$10$zoB/ItixWR7Mf21iQ2UOd.LMD.n1BMHNVn3p6pwCFde8Krt45Ynlu', 'Bybys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
