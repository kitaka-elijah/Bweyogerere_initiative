-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 08:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `nin` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `child1` int(11) NOT NULL,
  `child2` int(11) NOT NULL,
  `child3` int(11) NOT NULL,
  `child4` int(11) NOT NULL,
  `child5` int(11) NOT NULL,
  `child6` int(11) NOT NULL,
  `child7` int(11) NOT NULL,
  `child8` int(11) NOT NULL,
  `membership_fees` int(11) NOT NULL DEFAULT 40000,
  `passcard` int(11) NOT NULL DEFAULT 25000,
  `certificate` int(11) NOT NULL DEFAULT 5000,
  `members_total` varchar(255) NOT NULL,
  `reg_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `registered_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL DEFAULT 'No Edits Made'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passport_photos`
--

CREATE TABLE `passport_photos` (
  `id` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `savings_receipt`
--

CREATE TABLE `savings_receipt` (
  `id` int(11) NOT NULL,
  `receipt_number` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `savings` varchar(255) NOT NULL,
  `processing_fees` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `cdc` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term1`
--

CREATE TABLE `term1` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `child_id` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL DEFAULT 'TERM 1',
  `total_fees` int(11) NOT NULL,
  `processing_fees` int(11) NOT NULL,
  `savings` int(11) GENERATED ALWAYS AS (`total_fees` - `processing_fees`) VIRTUAL,
  `education_grants` int(11) GENERATED ALWAYS AS (`savings` * 1) VIRTUAL,
  `with_draws_status` varchar(255) NOT NULL DEFAULT 'WITH DRAW NOT PAID',
  `collector` varchar(255) NOT NULL DEFAULT 'COLLECTOR NOT REG',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `term_status` varchar(255) NOT NULL DEFAULT 'On Going',
  `withdrawn_by` varchar(255) NOT NULL DEFAULT 'NOT YET WITHDRAWN',
  `text` varchar(255) NOT NULL DEFAULT 'WITH DRAWABLE MONEY:-',
  `text1` varchar(255) NOT NULL DEFAULT '/=',
  `cdc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term2`
--

CREATE TABLE `term2` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `child_id` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL DEFAULT 'TERM 1',
  `total_fees` int(11) NOT NULL,
  `processing_fees` int(11) NOT NULL,
  `savings` int(11) GENERATED ALWAYS AS (`total_fees` - `processing_fees`) VIRTUAL,
  `education_grants` int(11) GENERATED ALWAYS AS (`savings` * 1) VIRTUAL,
  `with_draws_status` varchar(255) NOT NULL DEFAULT 'WITH DRAW NOT PAID',
  `collector` varchar(255) NOT NULL DEFAULT 'COLLECTOR NOT REG',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `term_status` varchar(255) NOT NULL DEFAULT 'On Going',
  `withdrawn_by` varchar(255) NOT NULL DEFAULT 'NOT YET WITHDRAWN',
  `text` varchar(255) NOT NULL DEFAULT 'WITH DRAWABLE MONEY:-',
  `text1` varchar(255) NOT NULL DEFAULT '/=',
  `cdc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term3`
--

CREATE TABLE `term3` (
  `id` int(11) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `child_id` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL DEFAULT 'TERM 1',
  `total_fees` int(11) NOT NULL,
  `processing_fees` int(11) NOT NULL,
  `savings` int(11) GENERATED ALWAYS AS (`total_fees` - `processing_fees`) VIRTUAL,
  `education_grants` int(11) GENERATED ALWAYS AS (`savings` * 1) VIRTUAL,
  `with_draws_status` varchar(255) NOT NULL DEFAULT 'WITH DRAW NOT PAID',
  `collector` varchar(255) NOT NULL DEFAULT 'COLLECTOR NOT REG',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `term_status` varchar(255) NOT NULL DEFAULT 'On Going',
  `withdrawn_by` varchar(255) NOT NULL DEFAULT 'NOT YET WITHDRAWN',
  `text` varchar(255) NOT NULL DEFAULT 'WITH DRAWABLE MONEY:-',
  `text1` varchar(255) NOT NULL DEFAULT '/=',
  `cdc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `total_withdraw_receipt`
--

CREATE TABLE `total_withdraw_receipt` (
  `id` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `total_with_draw` varchar(255) NOT NULL,
  `withdrawn_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cdc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `receipt_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `timestamp`) VALUES
(1, 'Kitaka Elijah', 'kitakaelijah7@gmail.com', '75101b84cc3579756fec4953f8cc456a', '2020-08-14 09:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_receipt`
--

CREATE TABLE `withdraw_receipt` (
  `id` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `with_draw` varchar(255) NOT NULL,
  `withdrawn_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cdc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `receipt_number` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentReg`
--
ALTER TABLE `parentReg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport_photos`
--
ALTER TABLE `passport_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savings_receipt`
--
ALTER TABLE `savings_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term1`
--
ALTER TABLE `term1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term2`
--
ALTER TABLE `term2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term3`
--
ALTER TABLE `term3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_withdraw_receipt`
--
ALTER TABLE `total_withdraw_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_receipt`
--
ALTER TABLE `withdraw_receipt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `childReg`
--
ALTER TABLE `childReg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `childReg2`
--
ALTER TABLE `childReg2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parentReg`
--
ALTER TABLE `parentReg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passport_photos`
--
ALTER TABLE `passport_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savings_receipt`
--
ALTER TABLE `savings_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term1`
--
ALTER TABLE `term1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term2`
--
ALTER TABLE `term2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `term3`
--
ALTER TABLE `term3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `total_withdraw_receipt`
--
ALTER TABLE `total_withdraw_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw_receipt`
--
ALTER TABLE `withdraw_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
