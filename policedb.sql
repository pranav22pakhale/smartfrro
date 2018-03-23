-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 12:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `id` int(8) NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `purpose` varchar(64) NOT NULL,
  `issue_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `location_of_foreigner` varchar(64) NOT NULL,
  `police_station_name` varchar(64) NOT NULL,
  `verification` varchar(25) NOT NULL,
  `police_enquiry` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`id`, `name`, `surname`, `email_id`, `purpose`, `issue_date`, `expiry_date`, `location_of_foreigner`, `police_station_name`, `verification`, `police_enquiry`) VALUES
(1, 'abc', '', '', 'business', '0000-00-00', '0000-00-00', '', '', 'verified', 'requested'),
(2, 'jack', '', '', 'medic', '0000-00-00', '0000-00-00', '', '', 'verified', 'done'),
(3, 'hena', '', '', 'journalism', '0000-00-00', '0000-00-00', '', '', 'unverified', 'suspicious'),
(4, 'julite', '', '', 'education', '0000-00-00', '0000-00-00', '', '', 'unverified', 'not_requested');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
