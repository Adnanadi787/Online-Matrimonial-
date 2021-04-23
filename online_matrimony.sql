-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 06:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmntinfodata`
--

CREATE TABLE `cmntinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmntinfodata`
--

INSERT INTO `cmntinfodata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(1, 'adnan', 'adi123@gmail.com', '01680075963', '');

-- --------------------------------------------------------

--
-- Table structure for table `logininfodata`
--

CREATE TABLE `logininfodata` (
  `id` int(100) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profileonfo_data`
--

CREATE TABLE `profileonfo_data` (
  `id` int(100) NOT NULL,
  `id_from_reg` int(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `look` varchar(30) NOT NULL,
  `body` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `skin` varchar(30) NOT NULL,
  `smoke` varchar(30) NOT NULL,
  `a_min` varchar(30) NOT NULL,
  `a_max` varchar(30) NOT NULL,
  `hmin` varchar(30) NOT NULL,
  `hmax` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registerinfo_data`
--

CREATE TABLE `registerinfo_data` (
  `id` int(100) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('m','f') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerinfo_data`
--

INSERT INTO `registerinfo_data` (`id`, `user`, `email`, `password`, `mobile`, `dob`, `gender`) VALUES
(1, '0', '0', '0', 1680075896, '1990-01-11', ''),
(2, 'Adnan', 'adnanalmim@yahoo.com', 'Asdf1234', 1680075896, '1990-12-12', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmntinfodata`
--
ALTER TABLE `cmntinfodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logininfodata`
--
ALTER TABLE `logininfodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileonfo_data`
--
ALTER TABLE `profileonfo_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerinfo_data`
--
ALTER TABLE `registerinfo_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmntinfodata`
--
ALTER TABLE `cmntinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logininfodata`
--
ALTER TABLE `logininfodata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profileonfo_data`
--
ALTER TABLE `profileonfo_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registerinfo_data`
--
ALTER TABLE `registerinfo_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
