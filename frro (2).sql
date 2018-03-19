-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 08:08 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Table structure for table `address_details`
--

CREATE TABLE `address_details` (
  `id` int(8) NOT NULL,
  `address_out_side_India` varchar(1024) NOT NULL,
  `city_out_side_India` varchar(64) NOT NULL,
  `country` varchar(64) NOT NULL,
  `address_in_India` varchar(1024) NOT NULL,
  `state_in_India` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `pin_code_in_India` int(8) NOT NULL,
  `phone_number_in_India` bigint(13) NOT NULL,
  `email_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_details`
--

INSERT INTO `address_details` (`id`, `address_out_side_India`, `city_out_side_India`, `country`, `address_in_India`, `state_in_India`, `city`, `pin_code_in_India`, `phone_number_in_India`, `email_id`) VALUES
(1, '169 Durham Street', 'Anderson Park', 'new zealand', 'malbar hill', 'maharashtra', 'mumbai', 400050, 9875845268, 'ross.taylor@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `education_dept`
--

CREATE TABLE `education_dept` (
  `id` int(11) NOT NULL,
  `document_type` varchar(1024) NOT NULL,
  `current_degree` varchar(64) NOT NULL,
  `target_degree` varchar(64) NOT NULL,
  `institute_address` varchar(1024) NOT NULL,
  `institute_city` varchar(64) NOT NULL,
  `institute_state` varchar(1024) NOT NULL,
  `institute_pincode` int(15) NOT NULL,
  `No_of_years` int(2) NOT NULL,
  `email_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frro_login`
--

CREATE TABLE `frro_login` (
  `id` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frro_login`
--

INSERT INTO `frro_login` (`id`, `password`) VALUES
('frro', 'frro');

-- --------------------------------------------------------

--
-- Table structure for table `health_dep`
--

CREATE TABLE `health_dep` (
  `id` int(8) NOT NULL,
  `passport_number` varchar(15) NOT NULL,
  `visa_number` varchar(15) NOT NULL,
  `name_of_patient` varchar(64) NOT NULL,
  `visa_expiry_date` date NOT NULL,
  `insurance_number` varchar(15) NOT NULL,
  `expense_of_treatment` varchar(12) NOT NULL,
  `email_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_id` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email_id`, `password`) VALUES
('smartfrro@gmail.com', 'smart\r\n'),
('shree swami samarth', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `passport_details`
--

CREATE TABLE `passport_details` (
  `id` int(8) NOT NULL,
  `passport_number` varchar(15) NOT NULL,
  `country_of_issue` varchar(64) NOT NULL,
  `place_of_issue` varchar(64) NOT NULL,
  `date_of_issue` date NOT NULL,
  `expiry_date` date NOT NULL,
  `email_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passport_details`
--

INSERT INTO `passport_details` (`id`, `passport_number`, `country_of_issue`, `place_of_issue`, `date_of_issue`, `expiry_date`, `email_id`) VALUES
(1, 'LKNU8357', 'new zealand', 'anderson park', '2018-03-08', '2018-03-31', 'ross.taylor@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `id` int(8) NOT NULL,
  `issue_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `location_of_foreigner` varchar(64) NOT NULL,
  `police_station_name` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `email_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(8) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `given_name` varchar(64) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `father_name` varchar(64) NOT NULL,
  `mother_name` varchar(64) NOT NULL,
  `spouse_name` varchar(64) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(64) NOT NULL,
  `purpose` varchar(64) NOT NULL,
  `present_nationality` varchar(64) NOT NULL,
  `previous_nationality` varchar(64) NOT NULL,
  `indian_origin` varchar(8) NOT NULL,
  `profile_pic` varchar(1024) NOT NULL,
  `document` varchar(1024) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `verification` varchar(64) NOT NULL,
  `police_enquiry` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `surname`, `given_name`, `sex`, `father_name`, `mother_name`, `spouse_name`, `dob`, `religion`, `purpose`, `present_nationality`, `previous_nationality`, `indian_origin`, `profile_pic`, `document`, `email_id`, `verification`, `police_enquiry`) VALUES
(1, 'taylor ', 'ross', 'male', 'mike', 'keydan', 'harry', '1990-06-13', 'christian', 'education', 'new zealand', 'new zealand', 'yes', 'uploads/1521443257ross.jpg', 'uploads1/Regulations.pdf', 'ross.taylor@gmail.com', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(8) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `given_name` varchar(64) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `passport_no` varchar(15) NOT NULL,
  `nationality` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `verification` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email_id`, `mobile_no`, `surname`, `given_name`, `dob`, `gender`, `passport_no`, `nationality`, `password`, `verification`) VALUES
(1, 'smartfrro@gmail.com', 7588195302, 'frro', 'smart', '0000-00-00', 'M', 'BOM123', 'IND', '$2y$10$QMZ9ZmIrPRJrwgdB.l26YOp//poZ00S7QzH9y1O32lDVhpFjRZ7om', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visa_details`
--

CREATE TABLE `visa_details` (
  `id` int(8) NOT NULL,
  `visa_number` varchar(15) NOT NULL,
  `country_of_issue` varchar(64) NOT NULL,
  `place_of_issue` varchar(64) NOT NULL,
  `date_of_issue` date NOT NULL,
  `expiry_date` date NOT NULL,
  `visa_type` varchar(64) NOT NULL,
  `visa_subtype` varchar(10) NOT NULL,
  `email_id` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_details`
--

INSERT INTO `visa_details` (`id`, `visa_number`, `country_of_issue`, `place_of_issue`, `date_of_issue`, `expiry_date`, `visa_type`, `visa_subtype`, `email_id`) VALUES
(1, 'Visa123', 'india', 'mumbai', '2018-03-14', '2018-11-22', 'v1', 'v13', 'ross.taylor@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_details`
--
ALTER TABLE `address_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_dept`
--
ALTER TABLE `education_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frro_login`
--
ALTER TABLE `frro_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_dep`
--
ALTER TABLE `health_dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport_details`
--
ALTER TABLE `passport_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_details`
--
ALTER TABLE `visa_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_details`
--
ALTER TABLE `address_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_dept`
--
ALTER TABLE `education_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passport_details`
--
ALTER TABLE `passport_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visa_details`
--
ALTER TABLE `visa_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
