-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 11:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_student`
--

CREATE TABLE `d_student` (
  `d_sid` int(11) NOT NULL,
  `d_suname` varchar(100) NOT NULL,
  `d_semail` varchar(50) NOT NULL,
  `d_sgender` varchar(10) NOT NULL,
  `d_slang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_student`
--

INSERT INTO `d_student` (`d_sid`, `d_suname`, `d_semail`, `d_sgender`, `d_slang`) VALUES
(17, 'bb', 'bb@bb.com', 'Male', 'Telugu,English,Hindi'),
(18, 'bd', 'bb@bb1.com', 'Female', 'English'),
(24, 'new', 'new@ttt.com', 'Male', 'Telugu,English,Hindi'),
(26, 'm1', 'mmm@gmail.com', 'Female', 'Telugu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `d_id` int(11) NOT NULL,
  `d_uname` varchar(20) NOT NULL,
  `d_lgnpwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`d_id`, `d_uname`, `d_lgnpwd`) VALUES
(1, 'admin@123.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_student`
--
ALTER TABLE `d_student`
  ADD PRIMARY KEY (`d_sid`),
  ADD UNIQUE KEY `d_semail` (`d_semail`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_uname` (`d_uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_student`
--
ALTER TABLE `d_student`
  MODIFY `d_sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
