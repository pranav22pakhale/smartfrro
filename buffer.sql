-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 07:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buffer`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_queue`
--

CREATE TABLE `education_queue` (
  `id` int(11) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `institute_name` varchar(64) NOT NULL,
  `institute_location` varchar(64) NOT NULL,
  `course_name` varchar(64) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_status` varchar(10) NOT NULL DEFAULT 'ongoing',
  `dirty_bit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_queue`
--

INSERT INTO `education_queue` (`id`, `email_id`, `institute_name`, `institute_location`, `course_name`, `course_duration`, `course_status`, `dirty_bit`) VALUES
(4, 'ty@gmail.com', 'RAIT', 'Kharghar', 'TP', '4', 'ongoing', 0),
(5, 'fy@gmail.com', 'FRCRCE', 'Bandra', 'TP', '4', 'done', 0),
(6, 'ty@gmail.com', 'RAIT', 'Kharghar', 'TP', '4', 'ongoing', 0),
(7, 'fy@gmail.com', 'FRCRCE', 'Bandra', 'TP', '4', 'done', 0),
(8, 'ty@gmail.com', 'RAIT', 'Kharghar', 'TP', '4', 'ongoing', 0),
(9, 'fy@gmail.com', 'FRCRCE', 'Bandra', 'TP', '4', 'done', 0),
(10, 'ty@gmail.com', 'RAIT', 'Kharghar', 'TP', '4', 'ongoing', 0),
(11, 'fy@gmail.com', 'FRCRCE', 'Bandra', 'TP', '4', 'done', 0),
(12, 'ty@gmail.com', 'RAIT', 'Kharghar', 'TP', '4', 'ongoing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
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
  `police_enquiry` varchar(64) NOT NULL,
  `dirty_bit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`id`, `name`, `surname`, `email_id`, `purpose`, `issue_date`, `expiry_date`, `location_of_foreigner`, `police_station_name`, `verification`, `police_enquiry`, `dirty_bit`) VALUES
(7131, 'ross', 'taylor ', 'ross.taylor@gmail.com', 'education', '2018-03-14', '2018-11-22', 'malbar hill', '400050', 'unverified', 'requested', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education_queue`
--
ALTER TABLE `education_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_queue`
--
ALTER TABLE `education_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
