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
-- Table structure for table `cardholdersdetail`
--

CREATE TABLE `cardholdersdetail` (
  `cardno` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardholdersdetail`
--

INSERT INTO `cardholdersdetail` (`cardno`, `emailid`, `ts`) VALUES
('4077447684686310', 'tomcruise@gmail.com', '2018-03-30 10:12:40'),
('7700531154055460', 'kokra@gmail.com', '2018-03-30 10:13:07'),
('2229403306745730', 'wmiller@gmail.com', '2018-03-30 10:13:56'),
('6975705285940200', 'dakota.johnson@gmail.com', '2018-03-30 10:15:56'),
('2077789194918680', 'ellie1.goulding@gmail.com', '2018-03-30 10:16:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
