-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 07:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labour_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `Day` varchar(20) NOT NULL,
  `shift` varchar(5) NOT NULL DEFAULT 'D1',
  `time_in` time NOT NULL,
  `edate` date DEFAULT NULL,
  `time_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `date`, `Day`, `shift`, `time_in`, `edate`, `time_out`) VALUES
(111, '2021-06-15', 'Tuesday', 'D', '07:48:00', NULL, NULL),
(123, '2021-06-15', 'Tuesday', 'N', '07:33:00', NULL, NULL),
(325, '2021-06-13', 'Sunday', 'N', '08:27:00', '2021-06-13', '08:31:00'),
(542, '2021-06-12', 'Saturday', 'D', '11:26:00', '2021-06-12', '11:27:00'),
(853, '2021-06-11', 'Friday', 'D', '11:50:00', '2021-06-12', '11:23:00'),
(1234, '2021-06-11', 'Friday', 'D', '12:35:00', '2021-06-12', '11:20:00'),
(1236, '2021-06-12', 'Saturday', 'D', '08:14:00', '0000-00-00', NULL),
(1447, '2021-06-13', 'Sunday', 'D', '10:07:00', '2021-06-13', '10:08:00'),
(6598, '2021-06-12', 'Saturday', 'D', '11:23:00', '2021-06-12', '11:27:00'),
(9688, '2021-06-11', 'Friday', 'D', '09:10:00', '0000-00-00', NULL),
(41357, '2021-06-11', 'Friday', 'D', '09:33:00', '0000-00-00', NULL),
(59687, '2021-06-11', 'Friday', 'D', '09:07:00', '0000-00-00', NULL),
(95666, '2021-06-11', 'Friday', 'D', '12:31:00', '0000-00-00', NULL),
(987554, '2021-06-11', 'Friday', 'D', '09:37:00', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `trade` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `govt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `trade`, `father_name`, `dob`, `govt_id`) VALUES
(111, 'chris', 'worker', 'paul', '1995-02-01', 1111),
(123, 'John', 'labour', 'pascal', '1999-01-01', 321),
(325, 'nikit', 'btech', 'ksjkf', '2000-05-02', 965),
(542, 'idi', 'se', '2ee', '2019-11-12', 245),
(853, 'kumdf', 'serr', 'jgd', '2000-10-16', 7963),
(1234, 'likd', 'dfdeo', 'lkdr', '9110-05-31', 12),
(1236, 'new bot', 'mech', 'bot', '2000-02-01', 6321),
(1447, 'sachin', 'klsa', 'ashok', '2002-02-10', 741),
(6598, 'lkldf', 'julkd', 'ekd', '2000-02-01', 6587),
(9688, 'this is', 'me', 'dae', '2031-08-09', 7569),
(41357, 'ujwalsdf', 'ser', 'jd', '2000-10-18', 1986),
(59687, 'kdf', 'se', 'jkd', '2222-10-16', 4562),
(95666, 'thisdf', 'dkk', 'dfdf', '2331-09-06', 4512),
(987554, 'Ujwl', 'ddfd', 'GD', '9232-05-23', 5569899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987555;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
