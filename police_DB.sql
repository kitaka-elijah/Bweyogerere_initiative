-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 09:20 AM
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
-- Database: `police_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_ref`
--

CREATE TABLE `case_ref` (
  `id` int(11) NOT NULL,
  `case_ref_id` varchar(255) NOT NULL,
  `reg_by` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_ref`
--

INSERT INTO `case_ref` (`id`, `case_ref_id`, `reg_by`, `timestamp`) VALUES
(1, 'null', 'null', '2020-11-02 09:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `new_case`
--

CREATE TABLE `new_case` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `crimnal_surname` varchar(255) NOT NULL,
  `crimnal_firstname` varchar(255) NOT NULL,
  `evidence` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `withness` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, 'Kitaka Elijah', 'kitakaelijah7@gmail.com', '75101b84cc3579756fec4953f8cc456a', '2020-08-14 09:52:20'),
(2, 'Rodney Kavuma', 'kavumarodneykr@gmail.com', '43a57e57b8f53cd500793ed8b5511dde', '2020-11-03 13:05:30'),
(3, 'Kalanzi Elvis', 'kalanzi.elms28@gmail.com', '2762d7f6960df86e80f642984363a7a8', '2020-11-03 13:08:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_case`
--
ALTER TABLE `new_case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_case`
--
ALTER TABLE `new_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
