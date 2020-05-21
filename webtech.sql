-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 10:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentsID` int(16) NOT NULL,
  `doctorID` int(16) NOT NULL,
  `appointmentsStatus` varchar(16) NOT NULL DEFAULT '''0''',
  `patientId` int(16) NOT NULL,
  `Date` varchar(16) NOT NULL,
  `time` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorId` int(16) NOT NULL,
  `doctorName` varchar(32) NOT NULL,
  `doctorEmail` varchar(32) NOT NULL,
  `doctorPhoto` varchar(355) NOT NULL,
  `doctorPass` varchar(255) NOT NULL,
  `doctorPhone` varchar(16) NOT NULL,
  `doctorSSN` varchar(255) NOT NULL,
  `doctorCImage` varchar(255) NOT NULL,
  `doctorNidImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorId`, `doctorName`, `doctorEmail`, `doctorPhoto`, `doctorPass`, `doctorPhone`, `doctorSSN`, `doctorCImage`, `doctorNidImage`) VALUES
(8, 'adfs adfs', 'roy@gmail.com', '', '123', '55164', 'fdas', ' .jpg', '5ec445cb0c59a.jpg'),
(9, 'adfs adfs', 'roy1@gmail.com', '', '123', '55164', 'fdas', ' .jpg', '5ec445d383be7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `userEmail` varchar(32) NOT NULL,
  `u_image` varchar(355) NOT NULL,
  `userPhone` varchar(16) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userEmail`, `u_image`, `userPhone`, `userPassword`) VALUES
(12, 'fdas', 'tony@gmail.com', '5ec445a9e8710.jpg', '556', '123'),
(13, 'fdas', 'tony1@gmail.com', '5ec445b41f812.jpg', '556', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentsID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointmentsID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorId` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
