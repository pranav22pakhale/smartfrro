-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 12:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frro`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardinfo`
--

CREATE TABLE `cardinfo` (
  `cardno` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardinfo`
--

INSERT INTO `cardinfo` (`cardno`, `location`, `ts`) VALUES
('1246087323576360570', 'Lakdipool', '2018-03-30 10:04:25'),
('2229403306745730256', 'Isnapur', '2018-03-30 10:03:24'),
('2567700531154055460', 'zaherabad', '2018-03-30 10:00:41'),
('4077447684686310583', 'gachibowli', '2018-03-30 10:00:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardinfo`
--
ALTER TABLE `cardinfo`
  ADD PRIMARY KEY (`cardno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
