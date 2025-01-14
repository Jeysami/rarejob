-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 04:34 AM
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
-- Database: `rarejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogppost`
--

CREATE TABLE `blogppost` (
  `blog_id` int(50) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` varchar(100) NOT NULL,
  `blog_content` varchar(255) NOT NULL,
  `blog_createddate` datetime NOT NULL,
  `blod_updatedate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogppost`
--

INSERT INTO `blogppost` (`blog_id`, `blog_title`, `blog_description`, `blog_content`, `blog_createddate`, `blod_updatedate`) VALUES
(1, 'title', 'description', 'text', '2025-01-14 12:17:35', '0000-00-00 00:00:00'),
(2, 'test', 'test2', '', '2025-01-14 12:23:22', '0000-00-00 00:00:00'),
(3, 'test jar', 'test jar2', 'png-transparent-glass-bottle-jar-transparency-and-translucency-glass-jar-empty-clear-glass-jar-glass-lid-bottle-thumbnail.png', '2025-01-14 12:26:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(50) NOT NULL,
  `emp_code` varchar(50) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_bday` date NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_password` varchar(50) NOT NULL,
  `emp_status` int(3) NOT NULL COMMENT '1-resigned',
  `emp_createddate` datetime NOT NULL,
  `emp_createdby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_code`, `emp_name`, `emp_bday`, `emp_email`, `emp_password`, `emp_status`, `emp_createddate`, `emp_createdby`) VALUES
(1, 'JM123', 'Jessa Mae Calayo', '1998-05-03', 'jmscalayo@rarejob.com', '1aca920d9950c1d3af79af96037ab975', 0, '2025-01-14 03:11:56', 'jmscalayo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogppost`
--
ALTER TABLE `blogppost`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_code` (`emp_code`),
  ADD UNIQUE KEY `emp_email` (`emp_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogppost`
--
ALTER TABLE `blogppost`
  MODIFY `blog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
