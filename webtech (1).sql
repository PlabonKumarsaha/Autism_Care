-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2020 at 04:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointmentsID`, `doctorID`, `appointmentsStatus`, `patientId`, `Date`, `time`) VALUES
(108, 10, '\'0\'', 16, '21/May/2020', '10.00am'),
(109, 10, '\'0\'', 15, '21/May/2020', '11.00am'),
(110, 10, '\'0\'', 14, '21/May/2020', '12.00pm'),
(111, 10, '\'0\'', 0, '21/May/2020', '4.00pm'),
(112, 10, '\'0\'', 0, '21/May/2020', '1.00pm'),
(113, 10, '\'0\'', 0, '21/May/2020', '2.00pm'),
(114, 10, '\'0\'', 0, '21/May/2020', '3.00pm'),
(115, 11, '\'0\'', 0, '21/May/2020', '10.00am'),
(116, 11, '\'0\'', 0, '21/May/2020', '4.00pm'),
(117, 11, '\'0\'', 0, '21/May/2020', '9.00pm'),
(118, 12, '\'0\'', 0, '21/May/2020', '10.00am'),
(119, 12, '\'0\'', 0, '21/May/2020', '12.00pm'),
(120, 12, '\'0\'', 0, '21/May/2020', '1.00pm'),
(121, 14, '\'0\'', 0, '21/May/2020', '10.00am'),
(122, 14, '1', 16, '21/May/2020', '11.00am'),
(123, 14, '\'0\'', 0, '21/May/2020', '4.00pm');

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
(10, 'dummy  data', 'dummy@gmail.com', '', '$2y$10$xCrSJdYdwOgBAcNxUrFKmOyFEP9QC4R4.Kdf.vDZ6bluNnVkwb0.6', '0168', 'i am a dummy doctor', '5ec62a4d25e49.jpg', '5ec62a4d2611e.jpg'),
(11, 'DR.Tanmoy Debnath ', 'tanmoy@gmail.com', '', '$2y$10$w7f.m6MzSy2jm44xywMTZONgE2ysUAneTVWmybUG77cPy24wctLvu', '018', 'I am a doctor with 10 year experience . I am currently working at ABC hostpital', '5ec62f5116f1f.jpg', '5ec62f511712b.jpg'),
(12, 'DR.Pankoj sharkar ', 'sarkar@gmail.com', '', '$2y$10$RHqMQTANlII2xTpXoFlw0eiSoe9c64Mi7pPlJoO77h5xzjnzRf2vO', '0119', 'I am a doctor with 10 year experience . I am currently working at bdc hostpital', '5ec62f769bc95.jpg', '5ec62f769bee3.jpg'),
(13, 'DR. mashfik ahmed ', 'ahmed@gmail.com', '', '$2y$10$bSIDrzKhC2gMOKFLpAT67ukz/ex97xEcOywzJSi2SXXIBDvFPpbhy', '0129', 'I am a doctor with 9 year experience . I am currently working at kbc hospital', '5ec62f9cd2383.jpg', '5ec62f9cd27df.jpg'),
(14, 'DR. Sajib  saha', 'ahmed@gmail.com', '', '$2y$10$VRNjaHMpyA25ERGcjvqftOfjHw6pU5PZyy8hHCKNscHsQ30wYFTqK', '0129', 'I am a doctor with 12 year experience . I am currently working at kbc hospital', '5ec62fe2647f7.jpg', '5ec62fe264a1c.jpg'),
(15, 'ABc abc', 'abc@gmail.com', '', '$2y$10$WaORurccFyrJVAkBYxg8DO/ZiEp1N7XY61FqM8InzcMxLa468sOaC', '0169', 'i am doctor', '5ec635c316d3a.jpg', '5ec635c316fa1.jpg');

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
(13, 'fdas', 'tony1@gmail.com', '5ec445b41f812.jpg', '556', '123'),
(14, 'dumy', 'abc@gmail.com', '5ec629cccc6af.jpg', '0169', '$2y$10$F3dMCm8GuJqLL0cce/kihev19CqlvF.o5mP/g500l5iok9RnypI/i'),
(15, 'plabon kumar saha', 'pks@gmail.com', '5ec62eeb8175f.jpg', '0168', '$2y$10$5XBx0A0Y6Fk7eYf.8Dxu6OxlnocNkB7MC/V7OOqxEuiPLFhZfqiO2'),
(16, 'Tanvir Anjum', 'Tanvir@gmail.com', '5ec62f00ba046.jpg', '0169', '$2y$10$/4m5zcvUn9LQbskZcYNHxupcfAF79wlR55r4v/3.GCWEsN1dyMI1a');

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
  MODIFY `appointmentsID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorId` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
