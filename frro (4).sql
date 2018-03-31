-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 09:49 AM
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
(1, 'Australia', 'Australia', 'Austyralia', 'Telangana', 'telangana', 'Hyderabad', 400050, 9619087550, 'raut.atharva1997@gmail.com'),
(2, 'Bangladesh', 'kkfs', 'hello', 'Mumbai', 'Maharashtra', 'Mumbai', 400052, 9757250372, 'jaydeepranoliya24@gmail.com'),
(3, 'uk', 'uk', 'uk', 'dadar', 'maharastra', 'mumbai', 400050, 7588195302, 'pranav22pakhale@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `education_dept`
--

CREATE TABLE `education_dept` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(1024) NOT NULL,
  `institute_location` varchar(64) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `course_name` varchar(128) NOT NULL,
  `course_duration` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_dept`
--

INSERT INTO `education_dept` (`id`, `institute_name`, `institute_location`, `email_id`, `course_name`, `course_duration`, `status`) VALUES
(1, 'CVR college', 'rangareddy', 'raut.atharva1997@gmail.com', 'BE', '4', 0),
(2, 'CMR', 'Hydrabad', 'jaydeepranoliya24@gmail.com', 'Btech', '4 years', 0);

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
('a', 'edu'),
('frro', 'frro'),
('police', 'police');

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
-- Table structure for table `live_location`
--

CREATE TABLE `live_location` (
  `id` int(8) NOT NULL,
  `email_id` varchar(64) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live_location`
--

INSERT INTO `live_location` (`id`, `email_id`, `address`, `date_time`) VALUES
(1, 'raut.atharva1997@gmail.com', '171, Subhas Sarobar Park, Phool Bagan, Beleghata, Kolkata, West Bengal 700010, India', '2018-03-31 06:47:32');

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
('shree swami samarth', 'a'),
('', '12345'),
('', ''),
('', ''),
('r@gmail.com', '123445');

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
(1, '123456AUS', 'Australia', 'Sydney', '2018-01-05', '2018-04-29', 'raut.atharva1997@gmail.com'),
(2, '9876543BAN', 'Bangladesh', 'Bangladesh', '2017-02-07', '2018-04-19', 'jaydeepranoliya24@gmail.com'),
(3, '56buo', 'india', 'india', '2018-03-02', '2024-10-24', 'pranav22pakhale@gmail.com');

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
(1, 'Raut', 'Atharva', 'male', 'Unmesh', 'Pallavi', 'abc', '1997-08-29', 'hindu', 'education', 'Australian', 'Australian', 'yes', 'uploads/1522458697Atharva.jpg', 'uploads1/1522458697Abstract_Tracking_Shipment_pdf (1).pdf', 'raut.atharva1997@gmail.com', 'verified', 'done'),
(2, 'Ranoliya', 'Jaydeep', 'male', 'Mansukhbhai', 'Shobhanaben', 'abcde', '1998-05-24', 'Hindu', 'education', 'Bangladesh', 'Bangladesh', 'yes', 'uploads/1522465258Lex_Luthor.jpg', 'uploads1/1522465258AICTE SIH Final Nodal centers 2018 .pdf', 'jaydeepranoliya24@gmail.com', 'unverified', 'requested'),
(3, 'Pakhale', 'Pranav', 'male', 'sanjay', 'pratibha', '', '2002-02-28', 'hindu', 'jouranlism', 'indian', 'indian', 'yes', 'uploads/1522478034Pranav_Pakhale.jpg', 'uploads1/1522478034Basic Coding guidelines.pdf', 'pranav22pakhale@gmail.com', 'unverified', 'requested');

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
  `verification` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email_id`, `mobile_no`, `surname`, `given_name`, `dob`, `gender`, `passport_no`, `nationality`, `password`, `verification`) VALUES
(1, 'raut.atharva1997@gmail.com', 9619087550, 'Raut', 'Atharva', '1997-08-29', 'M', '123456AUS', 'AUS', '$2y$10$i6r0vPpnvLCpJpaqH6fziO9NLo1qWcAgVM9rtsDjm.pwf.rLhEG3i', 0),
(2, 'jaydeepranoliya24@gmail.com', 9757250372, 'Ranoliya', 'Jaydeep', '1998-05-24', 'M', '9876543BAN', 'BGD', '$2y$10$dD8GIOwwwWCvG70VGoK4susnqYZP53wL3iUJIvSDkqSErBwiDZCxm', 1),
(3, 'pranav22pakhale@gmail.com', 7588195302, 'Pakhale', 'Pranav', '2002-02-28', 'M', '56buo', 'IND', '$2y$10$grd5zLqNSXanSmU2retP/eQylUb47BdhbCXc5svKuTZcB4UzIohLe', 1);

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
  `email_id` varchar(64) NOT NULL,
  `mobile_no` varchar(19) NOT NULL,
  `given_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_details`
--

INSERT INTO `visa_details` (`id`, `visa_number`, `country_of_issue`, `place_of_issue`, `date_of_issue`, `expiry_date`, `visa_type`, `visa_subtype`, `email_id`, `mobile_no`, `given_name`) VALUES
(1, '12345AUS', 'Australia', 'Australia', '2018-03-01', '2018-11-10', 'ABC', 'BC', 'raut.atharva1997@gmail.com', '9619087550', 'atharva'),
(2, '987654BAN', 'Bangladesh', 'Bangladesh', '2018-03-01', '2018-08-09', 'C', 'C+', 'jaydeepranoliya24@gmail.com', '9757250372', 'jaydeep'),
(3, 'v123467', 'india', 'mumbai', '2018-03-10', '2019-01-19', 'v56', 'vt4yf', 'pranav22pakhale@gmail.com', '7588195302', 'pranav');

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
-- Indexes for table `live_location`
--
ALTER TABLE `live_location`
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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education_dept`
--
ALTER TABLE `education_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `live_location`
--
ALTER TABLE `live_location`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passport_details`
--
ALTER TABLE `passport_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visa_details`
--
ALTER TABLE `visa_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
