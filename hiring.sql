-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 08:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiring`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcv`
--

CREATE TABLE `allcv` (
  `id` int(11) NOT NULL,
  `cvName` varchar(1111) NOT NULL,
  `cvFileName` varchar(1111) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allcv`
--

INSERT INTO `allcv` (`id`, `cvName`, `cvFileName`, `userId`, `date`) VALUES
(9, 'newCV', '1522486636-4', 4, '2018-03-31 08:57:16'),
(11, 'aaa', '1531895391-6', 6, '2018-07-18 06:29:51'),
(12, 'asdfs', '1531895430-6', 6, '2018-07-18 06:30:30'),
(15, 'new', '1531895965-6', 6, '2018-07-18 06:39:25'),
(16, 'number 1', '1532038942-5', 5, '2018-07-19 22:22:22'),
(17, 'cv 2', '1532039053-5', 5, '2018-07-19 22:24:13'),
(18, 'First CV', '1532970972-8', 8, '2018-07-30 17:16:12'),
(19, 'Amir CV', '1534615727-11', 11, '2018-08-18 18:08:47'),
(20, 'test', '1679213953-11', 11, '2023-03-19 08:19:13'),
(33, '33', '1679457711-1', 1, '2023-03-22 04:01:51'),
(34, '33', '1679457740-1', 1, '2023-03-22 04:02:20'),
(37, 'qw', '1679564973-1', 1, '2023-03-23 09:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dbdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `dbdate`) VALUES
(1, 'test', 'test', 'Md.Kamruzzaman', '2017-10-13 12:24:45'),
(2, 'kashi', 'kashi', 'Kashif Iqbal', '2017-10-13 13:49:39'),
(3, 'fk@solply', 'solply786', 'some', '2018-02-07 08:26:42'),
(4, 'fk', 'fk', 'Fayyaz Khan', '2018-03-31 08:55:36'),
(5, 'prieto', 'prieto', 'Prieto Ana', '2018-07-14 15:17:17'),
(6, 'aaa', 'aaa', 'Fayyaz Khan', '2018-07-18 06:20:27'),
(7, 'wedde', 'wedeedeed', 'wedeede', '2018-07-19 22:16:51'),
(8, 'MFS', 'pakistan742', 'nisa', '2018-07-30 17:11:39'),
(9, 'sehrish cheema', '123qazxsw', 'sehrish', '2018-07-30 17:15:55'),
(10, 'sehrish cheema', '123qazxsw', 'sehrish', '2018-07-30 17:15:55'),
(11, 'mirek', 'pass123', 'Amir', '2018-08-12 16:58:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcv`
--
ALTER TABLE `allcv`
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
-- AUTO_INCREMENT for table `allcv`
--
ALTER TABLE `allcv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
