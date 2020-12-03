-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 05:05 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtst`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_profile`
--

CREATE TABLE `t_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_profile`
--

INSERT INTO `t_profile` (`id`, `name`, `email`, `birthday`, `address`) VALUES
(1, 'Jungkook', 'bts.bighit@gmail.com', '1997-09-01', 'Seoul'),
(2, 'Park Jimin', 'bts.bighit@gmail.com', '1995-10-13', 'Seoul, Korea Selatan'),
(3, 'Rehuel Grace', 'rehuelgrace@gmail.com', '2000-03-12', 'Medan, Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_profile`
--
ALTER TABLE `t_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identifier` (`email`,`birthday`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_profile`
--
ALTER TABLE `t_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
