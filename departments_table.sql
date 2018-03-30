-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 10:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `journalism_dept`
--

CREATE TABLE `journalism_dept` (
  `email_id` varchar(50) NOT NULL,
  `duration` float NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `purpose_in_brief` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journalism_dept`
--

INSERT INTO `journalism_dept` (`email_id`, `duration`, `company_name`, `purpose_in_brief`) VALUES
('e', 2, 'aa', 'aaaaaaaaaaaaaaaaaaa'),
('e', 5, 'k', 'a'),
('', 5, 'k', 'a'),
('', 5, 'k', 'a'),
('jaydeepranoliya24@gmail.com', 0, 'aa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `medical_dept`
--

CREATE TABLE `medical_dept` (
  `email_id` varchar(50) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `medical_specialist` varchar(50) NOT NULL,
  `specialist_name` varchar(50) NOT NULL,
  `admit_date` date NOT NULL,
  `hospital_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_dept`
--

INSERT INTO `medical_dept` (`email_id`, `hospital_name`, `medical_specialist`, `specialist_name`, `admit_date`, `hospital_location`) VALUES
('net', 'aaaaaa', 'aaaaaa', 'aa', '0000-00-00', 'aaaaaa'),
('jaydeepranoliya24@gmail.com', 'aaaaaa', 'aaaaaa', 'aa', '0000-00-00', 'aaaaaa'),
('jaydeepranoliya24@gmail.com', 'aaaaaa', 'aaa', 'ss', '2222-02-22', 'aaaaaa'),
('jaydeepranoliya24@gmail.com', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `others_dept`
--

CREATE TABLE `others_dept` (
  `email_id` varchar(50) NOT NULL,
  `purpose_in_brief` varchar(1024) NOT NULL,
  `inviter_name` varchar(50) NOT NULL,
  `inviter_contact_no` int(15) NOT NULL,
  `inviter_email_id` varchar(50) NOT NULL,
  `inviter_location` varchar(255) NOT NULL,
  `duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others_dept`
--

INSERT INTO `others_dept` (`email_id`, `purpose_in_brief`, `inviter_name`, `inviter_contact_no`, `inviter_email_id`, `inviter_location`, `duration`) VALUES
('jaydeepranoliya24@gmail.com', 'aaa', 'a', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `others_dept`
--
ALTER TABLE `others_dept`
  ADD PRIMARY KEY (`email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
