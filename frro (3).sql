-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 05:06 PM
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
(1, ' 87 Rowland Rd', 'OSGODBY', 'UK', 'bandra', 'maharashtra', 'mumbai', 400050, 8888888888, 'mike.ross@gmail.com'),
(2, '1111 Calle Vista Dr, Beverly Hills, CA', 'Beverly Hills', 'USA', 'malad', 'maharashtra', 'mumbai', 400057, 9052525520, 'tomcruise@gmail.com'),
(3, 'Gilmore.Bahrain', 'Bahrain', 'Bahrain', 'cuff parade,Mumbai', 'maharashtra', 'mumbai', 400050, 1122334455, 'kokra@gmail.com'),
(4, 'street', 'syria', 'america', 'ch street', 'goa', 'panji', 300098, 9898989898, 'wmiller@gmail.com'),
(5, 'California', 'Elle', 'America', 'Vile Parle', 'Maharashtra', 'Mumbai', 400057, 9920714315, 'dakota.johnson@gmail.com'),
(6, 'Canada', 'Canada', 'America', 'Andheri', 'Maharashtra', 'Mumbai', 400058, 9833029361, 'ellie1.goulding@gmail.com'),
(7, '5 street', 'new yprk', 'USA', 'dadar', 'maharashtra', 'mumbai', 400051, 7588195302, 'pranav22pakhale@gmail.com'),
(8, '', '', '', '', '', '', 0, 0, ''),
(9, '', '', '', '', '', '', 0, 0, '');

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
  `course_duration` varchar(64) NOT NULL
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
(1, '0', 'snghrsh angheri est, Karani Ln, Sangharsh Nagar, Chandivali, Kurla, Mumbai, Maharashtra 400086, India', '2018-03-25 02:42:35'),
(2, '0', '', '2018-03-25 16:28:57'),
(3, '0', '', '2018-03-25 16:31:41'),
(4, '0', '', '2018-03-25 16:31:48'),
(5, '0', '', '2018-03-25 16:34:44'),
(6, '0', '', '2018-03-25 19:08:26'),
(7, '0', 'B3, Raunak Park, Kokanipada, Gawand Baug, Thane West, Thane, Maharashtra 400610, India', '2018-03-25 19:08:57'),
(8, '0', 'Siddhachal Phase 8, Siddhachal Housing Society, Pawar Nagar, Thane West, Thane, Maharashtra 400610, India', '2018-03-25 19:11:42'),
(9, '0', '', '2018-03-25 19:49:42'),
(10, '0', '', '2018-03-25 19:49:50'),
(11, '0', 'B3, Raunak Park, Kokanipada, Gawand Baug, Thane West, Thane, Maharashtra 400610, India', '2018-03-25 19:51:07'),
(12, '0', '', '2018-03-25 19:58:43'),
(13, 'dakota.johnson@gmail.com', 'Siddhachal Phase 4, Siddhachal Housing Society, Pawar Nagar, Thane West, Thane, Maharashtra 400610, India', '2018-03-25 20:01:58'),
(14, 'dakota.johnson@gmail.com', '', '2018-03-25 20:04:25'),
(15, 'dakota.johnson@gmail.com', '', '2018-03-25 20:04:43'),
(16, 'dakota.johnson@gmail.com', '', '2018-03-25 20:04:50'),
(17, 'pranav22pakhale@gmail.com', '', '2018-03-25 20:05:55'),
(18, 'pranav22pakhale@gmail.com', '', '2018-03-25 20:06:14'),
(19, 'dakota.johnson@gmail.com', '', '2018-03-25 20:09:20'),
(20, 'pranav22pakhale@gmail.com', 'A-2, Raunak Park, Kokanipada, Gawand Baug, Thane West, Thane, Maharashtra 400610, India', '2018-03-25 20:10:39'),
(21, 'pranav22pakhale@gmail.com', '', '2018-03-25 20:11:48');

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
(1, '12345BOm', 'uk', 'OSGODBY', '2017-05-09', '2020-11-26', 'mike.ross@gmail.com'),
(2, '12134567AME', 'USA', 'CA', '2011-02-02', '2030-02-02', 'tomcruise@gmail.com'),
(3, '123456UUU', 'Bahrain', 'Bahrain', '2017-11-02', '2018-03-02', 'kokra@gmail.com'),
(4, '123456BOM', 'america', 'america', '2017-09-09', '2017-08-09', 'wmiller@gmail.com'),
(5, '112345US', 'America', 'America', '2018-01-02', '2018-05-05', 'dakota.johnson@gmail.com'),
(6, '121345US', 'America', 'America', '2018-05-03', '2019-07-04', 'ellie1.goulding@gmail.com'),
(7, '123456BOM', 'India', 'India', '2018-03-21', '2018-03-31', 'pranav22pakhale@gmail.com'),
(8, '', '', '', '0000-00-00', '0000-00-00', ''),
(9, '', '', '', '0000-00-00', '0000-00-00', '');

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
(1, 'ross', 'mike', 'male', 'harry', 'aana', 'rachle', '1981-11-11', 'christian', 'business', 'british', 'british', 'no', 'uploads/1521632753mike_ross.jpg', 'uploads1/ForeigD-FRRO_version223.6.11.pdf', 'mike.ross@gmail.com', 'unverified', ''),
(2, 'Cruise', 'Tom Cruise', 'male', 'Papa', 'Mom', 'Wife', '1982-01-01', 'Hindu', 'Action', 'America', 'Africa', 'no', 'uploads/1521633788tom.jpg', 'uploads1/Abstract_Tracking_Shipment_pdf (1).pdf', 'tomcruise@gmail.com', 'requested', ''),
(3, 'Luther', 'Lex', 'male', 'Alex', 'Alice', 'Lisha', '1997-01-03', 'Christian', 'Journalism', 'Bahrain', 'Bahrain', 'no', 'uploads/1521634891Lex_Luthor.jpg', 'uploads1/details.pdf', 'kokra@gmail.com', 'requested', ''),
(4, 'scofield', 'michael', 'male', 'dario', 'emila', 'sarah', '1990-09-09', 'christian', 'education', 'american', 'american', 'no', 'uploads/1521701833wmiller.jpg', 'uploads1/Offer letter - Pranav.pdf', 'wmiller@gmail.com', 'unverified', ''),
(5, 'Johnson', 'Dakota', 'male', 'Ross', 'Anastesia', 'Christian Grey', '1997-12-05', 'Christan', 'Medic', 'America', 'American', 'no', 'uploads/1521702932dakota.jpg', 'uploads1/Abstract_Tracking_Shipment_pdf (1).pdf', 'dakota.johnson@gmail.com', 'rejected', ''),
(7, 'Goulding', 'Ellie', 'male', 'Thomas', 'Carol', 'Ed Sheeran', '1998-09-03', 'Christian', 'Journalism', 'American', 'American', 'no', 'uploads/1521704208ellie.jpg', 'uploads1/aitassignment1718.pdf', 'ellie1.goulding@gmail.com', 'verified', ''),
(8, 'pakhale', 'pranav', 'male', 'sanjay', 'pratibha', 'm', '1997-04-22', 'Hindu', 'education', 'Indian', 'Indian', 'yes', 'uploads/1521712419Pranav_Pakhale.jpg', 'uploads1/linkedin_howto.pdf', 'pranav22pakhale@gmail.com', 'rejected', ''),
(9, '', '', 'male', '', '', '', '0000-00-00', '', '', '', '', 'yes', 'uploads/1521714984', 'uploads1/', '', 'unverified', '');

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
(1, 'mike.ross@gmail.com', 8888888888, 'ross', 'mike', '0000-00-00', 'M', '12345BOM', 'GBR', '$2y$10$Arm6wGLEVkGhzYwJr9dk3.JRa/ruq7wLUMhgY9g24e8mDAhyWJSju', NULL),
(2, 'tomcruise@gmail.com', 9052525520, 'cruise', 'Tom Cruise', '0000-00-00', 'M', '1234567AME', 'ASM', '$2y$10$yftyapSoyi3f3/LQRw2.RuF7dp80wNjWmSNY.VuRL4KFYKpSWsn8C', NULL),
(3, 'kokra@gmail.com', 1122334455, 'Luther', 'Lex', '2008-09-08', 'M', '134567uuu', 'BHR', '$2y$10$0VTj1.g1oW5KnXgl.S0JD.o1OoRmLJQv6IAL2aQKyfZbVwSEbkfH6', NULL),
(4, 'wmiller@gmail.com', 9999999999, '', 'michael', '0000-00-00', 'M', '123456BOM', 'AUS', '$2y$10$khiQvdegnFsAvfjW0xyYNuOH8fmgYrC3XdoJSYPuwnd9TPBYIONTK', NULL),
(5, 'dakota.johnson@gmail.com', 9920714315, 'Johnson', 'Dakota', '0000-00-00', 'F', '11234US', 'USA', '$2y$10$lFTv5238Zuhk1L6srZ7C2ucG6kukUGoYamoEUuM8pb.awW.QUbAp.', NULL),
(6, 'ellie1.goulding@gmail.com', 9833029361, 'Goulding', 'Ellie', '0000-00-00', 'F', '11324US', 'USA', '$2y$10$WWgoAgLvp.HMByL0Zdalb.aCQv52nZDFIktLj383SgYRmYS00aPLy', NULL),
(8, 'pranav22pakhale@gmail.com', 7588195302, 'pakhale', 'pranav', '0000-00-00', 'M', '123456789BOm', 'IND', '$2y$10$JLurMbzbiMYT/rSX7XMF4.3GNlhJeHlqeYh8yMUksErdvMdF0JQxy', NULL),
(9, 'harvey.specter@gmail.com', 7588195302, 'specter', 'harvey', '0000-00-00', 'M', '12345678BOm', 'IND', '$2y$10$HavaLp0jUjZJerifWFrAdOjw.AeRKN3a8mvTiNekpBOIex8iPAIxy', NULL);

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
(1, 'visa12345', 'india', 'mumbai', '2018-03-16', '2019-10-16', 'v1', 'v21', 'mike.ross@gmail.com'),
(2, '123456TOMC', 'USA', 'CA', '2018-01-24', '2018-04-27', 'S1X', 'v22', 'tomcruise@gmail.com'),
(3, '12345uuuu', 'Bahrain', 'Bahrain', '2018-03-01', '2018-03-03', 'S3X', 'S1X', 'kokra@gmail.com'),
(4, 'njnknkjcbjag', 'america', 'america', '2017-08-09', '2017-08-09', 'Education', 'VS1', 'wmiller@gmail.com'),
(6, '123456TODS', 'America', 'America', '2018-02-02', '2018-05-04', 'Medic', 'Medic', 'dakota.johnson@gmail.com'),
(7, '123456TODS', 'America', 'America', '2018-02-02', '2018-05-04', 'Medic', 'Medic', 'dakota.johnson@gmail.com'),
(8, '3456712', 'America', 'America', '2018-05-05', '2018-07-07', 'Medic', 'Medic', 'ellie1.goulding@gmail.com'),
(9, 'visa12345', 'india', 'mumbai', '2018-03-12', '2018-03-30', 'v1', 'v5', 'pranav22pakhale@gmail.com'),
(10, '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
(11, '', '', '', '0000-00-00', '0000-00-00', '', '', '');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `education_dept`
--
ALTER TABLE `education_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_location`
--
ALTER TABLE `live_location`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `passport_details`
--
ALTER TABLE `passport_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visa_details`
--
ALTER TABLE `visa_details`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
