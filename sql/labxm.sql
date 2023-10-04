-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2023 at 11:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labxm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contributorList`
--

CREATE TABLE `contributorList` (
  `cId` int(11) NOT NULL,
  `cNama` varchar(255) NOT NULL,
  `cEmail` varchar(255) NOT NULL,
  `cPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contributorList`
--

INSERT INTO `contributorList` (`cId`, `cNama`, `cEmail`, `cPass`) VALUES
(1, 'Check', 'Check', 'Check'),
(2, 'hgjhgjh', 'jgjhgj', '123');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pId` int(11) NOT NULL,
  `cId` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `modDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pId`, `cId`, `title`, `content`, `modDate`) VALUES
(1, 1, 'Knowledge is power.....', 'Description', '2023-10-04'),
(3, 2, 'Check', 'Check', '2023-10-04'),
(4, 1, 'Honesty is the best policy.....', 'Demo Description Updated...', '2023-10-04'),
(5, 1, 'check date', 'check date', '2023-10-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contributorList`
--
ALTER TABLE `contributorList`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contributorList`
--
ALTER TABLE `contributorList`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
