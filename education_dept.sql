-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 11:46 AM
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
-- Database: `education_dept`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(11) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `institute_name` varchar(64) NOT NULL,
  `institute_location` varchar(64) NOT NULL,
  `course_name` varchar(64) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_status` varchar(10) NOT NULL DEFAULT 'ongoing'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `email_id`, `institute_name`, `institute_location`, `course_name`, `course_duration`, `course_status`) VALUES
(2, 'ty@gmail.com', 'RAIT', 'Kharghar', 'TP', '4', 'ongoing'),
(3, 'fy@gmail.com', 'FRCRCE', 'Bandra', 'TP', '4', 'done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
