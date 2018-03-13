-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 06:49 AM
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
  `city/district` varchar(64) NOT NULL,
  `pin_code_in_India` int(8) NOT NULL,
  `phone_number_in_India` int(13) NOT NULL,
  `mobile_number_in_India` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `arrival_details`
--

CREATE TABLE `arrival_details` (
  `id` int(8) NOT NULL,
  `Place_of_embarkation_or_boarding_for_India` varchar(64) NOT NULL,
  `City_of_embarkation_or_boarding_for_India` varchar(64) NOT NULL,
  `Country_of_embarkation_or_boarding_for_India` varchar(64) NOT NULL,
  `Date_of_arrival_in_India` date NOT NULL,
  `Place_of_disembarkation_or_arrival_in_India` varchar(64) NOT NULL,
  `Mode_of_Journey` varchar(30) NOT NULL,
  `Purpose_of_visit_to_India` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `No_of_years` int(2) NOT NULL
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
  `expense_of_treatment` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email_id` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `id` int(8) NOT NULL,
  `issue_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `location_of_foreigner` varchar(64) NOT NULL,
  `verification_required` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `police_station_name` varchar(64) NOT NULL
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
  `place_of_birth` varchar(64) NOT NULL,
  `birth_city` varchar(64) NOT NULL,
  `birth_country` varchar(64) NOT NULL,
  `height_cm` decimal(10,0) NOT NULL,
  `religion` varchar(64) NOT NULL,
  `identification_mark` varchar(64) NOT NULL,
  `present_nationality` varchar(64) NOT NULL,
  `previous_nationality` varchar(64) NOT NULL,
  `manner_of_acquiring present nationality` varchar(64) NOT NULL,
  `dual_nationality` tinyint(1) NOT NULL,
  `indian_origin` tinyint(1) NOT NULL,
  `have_you_serve_in_defenece_force` int(11) NOT NULL,
  `profile_pic` varchar(1024) NOT NULL,
  `document` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `email_id` varchar(64) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `given_name` varchar(64) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `passport_no` varchar(15) NOT NULL,
  `nationality` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visa details`
--

CREATE TABLE `visa details` (
  `id` int(8) NOT NULL,
  `visa_number` int(15) NOT NULL,
  `country_of_issue` int(64) NOT NULL,
  `place_of_issue` int(64) NOT NULL,
  `date_of_issue` date NOT NULL,
  `expiry_date` date NOT NULL,
  `valid_for` varchar(64) NOT NULL,
  `visa_type` varchar(64) NOT NULL,
  `visa_subtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_details`
--
ALTER TABLE `address_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrival_details`
--
ALTER TABLE `arrival_details`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa details`
--
ALTER TABLE `visa details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_details`
--
ALTER TABLE `address_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `arrival_details`
--
ALTER TABLE `arrival_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_dept`
--
ALTER TABLE `education_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passport_details`
--
ALTER TABLE `passport_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visa details`
--
ALTER TABLE `visa details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
