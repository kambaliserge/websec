-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 09:19 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `room_type` text NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `check_in_time` text NOT NULL,
  `occupancy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `address`, `city`, `country`, `room_type`, `check_in`, `check_out`, `check_in_time`, `occupancy`) VALUES
(6, 'rwoga', 'rwo@123', 78809, 'mbugangali\r\nduwani', 'kigali', 'uganda', 'EXECUTIVE ROOM (265.69$ per night', '2021-08-05', '2021-08-07', '10:02', 'twin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `check_view`
-- (See below for the actual view)
--
CREATE TABLE `check_view` (
`name` text
,`email` text
);

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(30) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `email` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `code` int(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `Fname`, `Lname`, `email`, `username`, `password`, `code`, `status`) VALUES
(32, 'kambali', 'serge', 'kambaliserge16@gmail.com', 'kambali', 'b2d5c6200fb733fbc546d80ff4938b876fb31b8d', 831130, 'Verified'),
(33, 'niga', 'yy', 'kambalisergekwi@gmail.com', 'admin', 'b2d5c6200fb733fbc546d80ff4938b876fb31b8d', 373260, 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `token1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `email`, `token1`) VALUES
(25, 'nigayves@gmail.com', '11972b882c2798c1');

-- --------------------------------------------------------

--
-- Structure for view `check_view`
--
DROP TABLE IF EXISTS `check_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `check_view`  AS SELECT `name` AS `name`, `email` AS `email` FROM `booking` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
