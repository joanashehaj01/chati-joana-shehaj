-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 06:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `logout`
--

CREATE TABLE `logout` (
  `user_id` int(10) NOT NULL,
  `logout_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logout`
--

INSERT INTO `logout` (`user_id`, `logout_time`) VALUES
(1, '2020-03-18 01:12:33'),
(1, '2020-03-18 01:19:35'),
(4, '2020-03-18 01:23:09'),
(2, '2020-03-18 01:24:07'),
(1, '2020-03-19 01:22:18'),
(1, '2020-03-19 01:26:57'),
(1, '2020-03-19 01:28:45'),
(1, '2020-03-19 01:30:51'),
(1, '2020-03-19 01:33:04'),
(1, '2020-03-19 02:05:53'),
(1, '2020-03-19 02:12:28'),
(1, '2020-03-19 02:37:30'),
(1, '2020-03-19 02:39:55'),
(1, '2020-03-19 16:13:27'),
(1, '2020-03-19 16:44:29'),
(2, '2020-03-19 16:45:01'),
(1, '2020-03-19 16:50:23'),
(1, '2020-03-19 16:54:42'),
(2, '2020-03-19 17:01:08'),
(1, '2020-03-19 17:11:02'),
(2, '2020-03-19 17:11:14'),
(1, '2020-03-19 17:29:40'),
(5, '2020-03-19 17:39:46'),
(1, '2020-03-19 17:40:39'),
(1, '2020-03-19 17:48:13'),
(2, '2020-03-19 17:48:53'),
(5, '2020-03-19 17:49:13'),
(1, '2020-03-23 20:41:49'),
(2, '2020-03-24 13:08:06'),
(1, '2020-03-24 23:48:29'),
(1, '2020-03-24 23:48:36'),
(2, '2020-03-24 23:50:11'),
(1, '2020-03-24 23:50:35'),
(2, '2020-03-24 23:55:38'),
(2, '2020-03-25 00:06:13'),
(1, '2020-03-30 02:40:10'),
(1, '2020-03-30 02:40:19'),
(7, '2020-09-02 13:57:30'),
(7, '2020-09-02 13:59:14'),
(7, '2020-09-02 14:00:51'),
(7, '2020-09-02 14:01:19'),
(7, '2020-09-02 14:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_msg` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(10) NOT NULL,
  `from_user` varchar(100) DEFAULT NULL,
  `to_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_msg`, `message`, `username`, `date`, `user_id`, `from_user`, `to_user`) VALUES
(277, 'hi', 'mam', '2020-09-02 14:00:34', 7, NULL, NULL),
(278, 'test', 'mam', '2020-09-02 14:09:55', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(70) DEFAULT NULL,
  `Tipi` varchar(100) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `Tipi`, `image`, `login_time`) VALUES
(1, 'joana', 'shehaj', 'joana', '18f01959ff46071d73905d549cafde20', '', 'Admin', '', '2020-03-17 23:25:32'),
(2, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Perdorues', '', '2020-03-17 23:25:32'),
(5, 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', NULL, 'Perdorues', NULL, '2020-03-19 16:50:32'),
(6, 'Joana', 'Shehaj', 'joana', '18f01959ff46071d73905d549cafde20', NULL, 'Perdorues', NULL, '2020-09-02 13:52:07'),
(7, 'mam', 'mam', 'mam', '6b67853e42898de8e7f7953331e938cc', NULL, 'Perdorues', NULL, '2020-09-02 13:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `id_online` int(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `session` varchar(100) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`id_online`, `user_id`, `session`, `login_time`) VALUES
(19, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-18 01:12:16'),
(20, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-18 01:18:56'),
(21, 4, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-18 01:21:51'),
(22, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-18 01:23:51'),
(23, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-18 23:37:41'),
(24, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 01:22:22'),
(25, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 01:27:02'),
(26, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 01:28:49'),
(27, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 01:30:55'),
(28, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 01:33:09'),
(29, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 02:06:07'),
(30, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 02:12:33'),
(31, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 02:37:34'),
(32, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 02:40:00'),
(33, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 16:14:01'),
(34, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 16:44:35'),
(35, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 16:45:06'),
(36, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 16:50:54'),
(37, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 16:54:47'),
(38, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:01:13'),
(39, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:11:09'),
(40, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:11:20'),
(41, 5, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:29:44'),
(42, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:39:54'),
(43, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:40:45'),
(44, 1, 'g2t9k2ris9jq24djsifobsifpu', '2020-03-19 17:41:32'),
(45, 5, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:48:57'),
(46, 1, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-19 17:49:19'),
(47, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-23 20:41:57'),
(48, 2, 'ig0e7i9mdtggbtrhs6naau41ar', '2020-03-24 13:08:20'),
(49, 1, '27quean2epmqm0chba8jq7g524', '2020-03-24 23:05:20'),
(50, 1, '27quean2epmqm0chba8jq7g524', '2020-03-24 23:48:33'),
(51, 2, '27quean2epmqm0chba8jq7g524', '2020-03-24 23:48:41'),
(52, 1, '27quean2epmqm0chba8jq7g524', '2020-03-24 23:50:16'),
(53, 2, '27quean2epmqm0chba8jq7g524', '2020-03-24 23:50:40'),
(54, 2, '27quean2epmqm0chba8jq7g524', '2020-03-24 23:55:44'),
(55, 1, '27quean2epmqm0chba8jq7g524', '2020-03-25 00:07:02'),
(56, 1, 'nl6a9qa7s8bo0ecuqgr5fnj2lj', '2020-03-29 23:54:42'),
(57, 1, 'nl6a9qa7s8bo0ecuqgr5fnj2lj', '2020-03-30 02:40:16'),
(58, 7, 'uq2af9s3mklkn6cti3ph806koh', '2020-09-02 13:57:22'),
(59, 7, 'uq2af9s3mklkn6cti3ph806koh', '2020-09-02 13:57:51'),
(60, 7, 'uq2af9s3mklkn6cti3ph806koh', '2020-09-02 14:00:28'),
(61, 7, 'uq2af9s3mklkn6cti3ph806koh', '2020-09-02 14:00:59'),
(62, 7, 'uq2af9s3mklkn6cti3ph806koh', '2020-09-02 14:08:46'),
(63, 7, 'uq2af9s3mklkn6cti3ph806koh', '2020-09-02 14:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logout`
--
ALTER TABLE `logout`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`id_online`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_online`
--
ALTER TABLE `user_online`
  MODIFY `id_online` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
