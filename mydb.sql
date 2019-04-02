-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 04:01 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank info`
--

CREATE TABLE `bank info` (
  `Bank Account Number` int(11) NOT NULL,
  `Password` varchar(88) NOT NULL,
  `Bank Name` varchar(88) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offer info`
--

CREATE TABLE `offer info` (
  `ID_no` int(11) NOT NULL,
  `Operator` varchar(66) NOT NULL,
  `Offer` varchar(188) NOT NULL,
  `Image` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user info`
--

CREATE TABLE `user info` (
  `ID` int(88) NOT NULL,
  `Password` varchar(88) NOT NULL,
  `Bank Account Number` int(88) NOT NULL,
  `Mobile Number` int(88) NOT NULL,
  `Email` varchar(88) NOT NULL,
  `Date Of Birth` varchar(88) NOT NULL,
  `Gender` varchar(88) NOT NULL
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank info`
--
ALTER TABLE `bank info`
  ADD PRIMARY KEY (`Bank Account Number`);

--
-- Indexes for table `offer info`
--
ALTER TABLE `offer info`
  ADD PRIMARY KEY (`ID_no`);

--
-- Indexes for table `user info`
--
ALTER TABLE `user info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer info`
--
ALTER TABLE `offer info`
  MODIFY `ID_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user info`
--
ALTER TABLE `user info`
  MODIFY `ID` int(88) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
