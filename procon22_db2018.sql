-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2019 at 07:21 AM
-- Server version: 5.6.43-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procon22_db2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `trncd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `district` varchar(10) NOT NULL,
  `approver` varchar(10) NOT NULL,
  `controlno` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `regstatus` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `badgename` varchar(100) NOT NULL,
  `birthday` varchar(12) NOT NULL,
  `positionheld` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `homeaddres` varchar(200) NOT NULL,
  `corpaddress` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `clubname` varchar(100) NOT NULL,
  `sponsorclub` varchar(100) NOT NULL,
  `allergies` varchar(200) NOT NULL,
  `diet` varchar(100) NOT NULL,
  `medicalcond` varchar(100) NOT NULL,
  `specialreq` varchar(100) NOT NULL,
  `others` varchar(200) NOT NULL,
  `foodtype` varchar(10) NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_rela` varchar(20) NOT NULL,
  `cont_email` varchar(100) NOT NULL,
  `cont_no` varchar(20) NOT NULL,
  `tshirt` varchar(10) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `trncd` varchar(50) NOT NULL,
  `trnamt` varchar(20) NOT NULL,
  `trndate` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration_batch`
--

CREATE TABLE `registration_batch` (
  `batch` varchar(20) NOT NULL,
  `qty` int(225) NOT NULL,
  `DISPLAY` varchar(200) NOT NULL,
  `AMOUNT` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
