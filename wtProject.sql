-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 10:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `signUp`
--

CREATE TABLE `signUp` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `signUp`
--

INSERT INTO `signUp` (`id`, `name`, `email`, `password`) VALUES
(3, 'Shyam Pandav', 'svpandav@mitaoe.ac.in', 'shyam'),
(4, 'Rohit Bhosale', 'rabhosale@mitaoe.ac.in', '1234'),
(5, 'Saurabh', 'sbgavade@mitaoe.ac.in', 'shyam');

-- --------------------------------------------------------

--
-- Table structure for table `streamInfo`
--

CREATE TABLE `streamInfo` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `streamInfo`
--

INSERT INTO `streamInfo` (`id`, `title`, `date`, `start`, `end`) VALUES
(26, 'wt', '2019-06-06', '05:05', '08:08'),
(27, 'wt', '2019-11-24', '05:03', '06:06'),
(28, 'saurabh', '2019-11-24', '05:30', '06:00'),
(29, 'WT', '2019-11-25', '09:00', '09:30'),
(30, 'Wt', '2019-11-25', '10:00', '11:00'),
(31, 'WT', '2019-11-26', '10:00', '11:00'),
(32, 'Wt', '2019-11-25', '10:00', '11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signUp`
--
ALTER TABLE `signUp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streamInfo`
--
ALTER TABLE `streamInfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signUp`
--
ALTER TABLE `signUp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `streamInfo`
--
ALTER TABLE `streamInfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
