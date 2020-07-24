-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2020 at 09:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bweyos`
--

-- --------------------------------------------------------

--
-- Table structure for table `childReg`
--

CREATE TABLE `childReg` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childReg`
--

INSERT INTO `childReg` (`id`, `parents_id`, `student_ID`, `firstname`, `surname`, `gender`, `day`, `month`, `year`, `esbac`, `fromm`, `to`, `childpassport_photo`, `status`, `date`, `timestamp`) VALUES
(1, 'parent1', 'S001', 'elijah1', 'kitaka1', 'Male', '1', 'January', '2020', 'PESA', '2020', '2050', 's1.jpeg', 'Active', '2020-07-08', '2020-07-08 18:19:43'),
(2, 'parent2', 'S002', 'firstname2', 'surname2', 'Male', '1', 'May', '2015', 'SESA', '2018', '2047', 'S2.jpeg', 'Active', '2020-07-08', '2020-07-08 18:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `childReg2`
--

CREATE TABLE `childReg2` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childReg2`
--

INSERT INTO `childReg2` (`id`, `parents_id`, `student_ID`, `firstname`, `surname`, `gender`, `day`, `month`, `year`, `esbac`, `fromm`, `to`, `childpassport_photo`, `status`, `date`, `timestamp`) VALUES
(1, 'parent2', 'S003', 'firstname3', 'surname3', 'Male', '15', 'August', '2013', 'PESA', '2019', '2049', 'S3.jpeg', 'Active', '2020-07-08', '2020-07-08 18:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `childReg3`
--

CREATE TABLE `childReg3` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childReg4`
--

CREATE TABLE `childReg4` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childReg5`
--

CREATE TABLE `childReg5` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childReg6`
--

CREATE TABLE `childReg6` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childReg7`
--

CREATE TABLE `childReg7` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `childReg8`
--

CREATE TABLE `childReg8` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `student_ID` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `esbac` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `childpassport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parentReg`
--

CREATE TABLE `parentReg` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `nin` varchar(255) NOT NULL DEFAULT 'No NIN',
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `maritalstatus` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `next_of_kin_surname` varchar(255) NOT NULL,
  `next_of_kin_firstname` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `next_of_kin_telephone` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL DEFAULT 'No Account Number',
  `bank` varchar(255) NOT NULL DEFAULT 'No Bank',
  `branch` varchar(255) NOT NULL DEFAULT 'No Branch',
  `cdc` varchar(255) NOT NULL,
  `passport_photo` varchar(255) NOT NULL DEFAULT 'defaultpp/default.jpg',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentReg`
--

INSERT INTO `parentReg` (`id`, `parents_id`, `surname`, `firstname`, `nin`, `phone`, `gender`, `maritalstatus`, `occupation`, `day`, `month`, `year`, `location`, `religion`, `next_of_kin_surname`, `next_of_kin_firstname`, `relationship`, `next_of_kin_telephone`, `account_number`, `bank`, `branch`, `cdc`, `passport_photo`, `date`, `time`, `status`) VALUES
(1, 'parent1', 'kitaka', 'elijah', '001', '0703888572', 'Male', 'Single', 'CTO', '9', 'April', '1992', 'Butto', 'BornAgain', 'Namutebi', 'Peace', 'Sister', '0757792610', '', '', '', '', 'p1.jpeg', '2020-07-08', '21:11:59', 'active'),
(2, 'parent2', 'kalenzi', 'derick', '', '0703888572', 'Male', 'Married', 'Businessman', '1', 'January', '2007', 'kireka', 'BornAgain', 'henry', 'hillary', 'brother', '0703888572', '0012436787', 'BOA', 'nitinda', 'Bweyos', 'p2.jpeg', '2020-07-08', '21:25:19', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childReg`
--
ALTER TABLE `childReg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg2`
--
ALTER TABLE `childReg2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg3`
--
ALTER TABLE `childReg3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg4`
--
ALTER TABLE `childReg4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg5`
--
ALTER TABLE `childReg5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg6`
--
ALTER TABLE `childReg6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg7`
--
ALTER TABLE `childReg7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childReg8`
--
ALTER TABLE `childReg8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentReg`
--
ALTER TABLE `parentReg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `childReg`
--
ALTER TABLE `childReg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `childReg2`
--
ALTER TABLE `childReg2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `childReg3`
--
ALTER TABLE `childReg3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `childReg4`
--
ALTER TABLE `childReg4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `childReg5`
--
ALTER TABLE `childReg5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `childReg6`
--
ALTER TABLE `childReg6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `childReg7`
--
ALTER TABLE `childReg7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `childReg8`
--
ALTER TABLE `childReg8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parentReg`
--
ALTER TABLE `parentReg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
