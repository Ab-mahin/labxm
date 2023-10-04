-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2023 at 03:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmId` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmId`, `pId`, `com`) VALUES
(1, 1, 'It\'s a fact');

-- --------------------------------------------------------

--
-- Table structure for table `contributorList`
--

CREATE TABLE `contributorList` (
  `cId` int(11) NOT NULL,
  `cNama` varchar(255) NOT NULL,
  `cEmail` varchar(255) NOT NULL,
  `cPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contributorList`
--

INSERT INTO `contributorList` (`cId`, `cNama`, `cEmail`, `cPass`) VALUES
(1, 'Check', 'Check', 'Check'),
(2, 'hgjhgjh', 'jgjhgj', '123'),
(3, 'Third', 'Check1', 'Check');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pId` int(11) NOT NULL,
  `cId` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `modDate` date DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pId`, `cId`, `title`, `content`, `modDate`, `img`) VALUES
(1, 1, 'Knowledge is power.....', 'Believe it to be succeed.', '2023-10-04', NULL),
(4, 1, 'Honesty is the best policy.....', 'This is a moral virtue...', '2023-10-04', NULL),
(17, 2, 'This is a graph algo', 'This is a tree', '2023-10-04', 'img/2-17-2023-10-04-graph.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmId`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contributorList`
--
ALTER TABLE `contributorList`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
