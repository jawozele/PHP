-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2020 at 09:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tca20`
--

-- --------------------------------------------------------

--
-- Table structure for table `uh_enrolments`
--

CREATE TABLE `uh_enrolments` (
  `id` int(4) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `option_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uh_enrolments`
--

INSERT INTO `uh_enrolments` (`id`, `username`, `option_id`) VALUES
(1, '2wilst82', 1),
(2, '3palmk73', 2),
(3, '1stevj61', 3),
(4, '2wilst82', 2),
(5, '3palmk73', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uh_options`
--

CREATE TABLE `uh_options` (
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `staff` varchar(50) DEFAULT NULL,
  `nstudents` int(10) DEFAULT NULL,
  `li_mit` int(4) DEFAULT NULL,
  `option_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uh_options`
--

INSERT INTO `uh_options` (`name`, `description`, `staff`, `nstudents`, `li_mit`, `option_id`) VALUES
('Advanced Java', 'A subject introducing advanced programming in Java', 'mcranshaw', 10, 40, 1),
('Advanced Web Development', 'A subject introducing advanced JavaScript and PHP frameworks', 'djosg', 15, 40, 2),
('Advanced Advanced Databases', 'A subject introducing advanced database development', 'amonger', 12, 40, 3);

-- --------------------------------------------------------

--
-- Table structure for table `uh_questions`
--

CREATE TABLE `uh_questions` (
  `id` int(4) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `option_id` int(4) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uh_questions`
--

INSERT INTO `uh_questions` (`id`, `username`, `option_id`, `question`) VALUES
(1, '2wilst82', 1, 'Will you cover Java web development such as JSP?'),
(2, '3palmk73', 2, 'Will you cover object-oriented JavaScript?'),
(3, '1stevj61', 3, 'Will you cover non-SQL databases like MongoDB?');

-- --------------------------------------------------------

--
-- Table structure for table `uh_users`
--

CREATE TABLE `uh_users` (
  `id` int(4) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `utype` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uh_users`
--

INSERT INTO `uh_users` (`id`, `username`, `password`, `name`, `utype`) VALUES
(1, 'mcranshaw', 'mcran123', 'Mark Cranshaw', 0),
(2, 'rcooper', 'robc123', 'Rob Cooper', 0),
(3, 'mudall', 'mark123', 'Mark Udall', 0),
(4, 'amonger', 'al123', 'Al Monger', 0),
(5, 'djosg', 'david123', 'David Osguthorpe', 0),
(6, '2wilst82', 'egg882', 'Tim Wilson', 1),
(7, '3palmk73', 'cat381', 'Kate Palmer', 1),
(8, '1stevj61', 'newyork905', 'Kate Palma', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uh_enrolments`
--
ALTER TABLE `uh_enrolments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uh_options`
--
ALTER TABLE `uh_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `uh_questions`
--
ALTER TABLE `uh_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uh_users`
--
ALTER TABLE `uh_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uh_enrolments`
--
ALTER TABLE `uh_enrolments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uh_options`
--
ALTER TABLE `uh_options`
  MODIFY `option_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uh_questions`
--
ALTER TABLE `uh_questions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uh_users`
--
ALTER TABLE `uh_users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
