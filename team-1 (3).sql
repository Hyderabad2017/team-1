-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 05:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `admiName` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examdb`
--

CREATE TABLE `examdb` (
  `examid` int(25) NOT NULL,
  `ename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_qualification`
--

CREATE TABLE `exam_qualification` (
  `eqid` int(100) NOT NULL,
  `qual1` text NOT NULL,
  `qual2` text NOT NULL,
  `qual3` text NOT NULL,
  `qual4` text NOT NULL,
  `qual5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mappingdb`
--

CREATE TABLE `mappingdb` (
  `mapid` int(10) NOT NULL,
  `vid` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `vname` varchar(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `vaddress` varchar(25) NOT NULL,
  `saddress` varchar(25) NOT NULL,
  `vemail` varchar(25) NOT NULL,
  `semail` varchar(25) NOT NULL,
  `vmobile` int(10) NOT NULL,
  `smobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE `studentdb` (
  `sid` int(10) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `semail` varchar(25) NOT NULL,
  `smobile` int(10) NOT NULL,
  `squalification` text NOT NULL,
  `spwd` varchar(255) NOT NULL,
  `sgender` text NOT NULL,
  `slang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_1`
--

CREATE TABLE `team_1` (
  `vid` int(11) NOT NULL,
  `vname` varchar(150) NOT NULL,
  `vaddress` varchar(150) NOT NULL,
  `vemail1` varchar(15) NOT NULL,
  `vemail2` varchar(15) NOT NULL,
  `vmobile1` int(10) NOT NULL,
  `vmobile2` int(10) NOT NULL,
  `vqualification` text NOT NULL,
  `vpwd` varchar(20) NOT NULL,
  `vgender` text NOT NULL,
  `vlang` text NOT NULL,
  `vstatus` text NOT NULL,
  `vdaysav` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_1`
--

INSERT INTO `team_1` (`vid`, `vname`, `vaddress`, `vemail1`, `vemail2`, `vmobile1`, `vmobile2`, `vqualification`, `vpwd`, `vgender`, `vlang`, `vstatus`, `vdaysav`) VALUES
(1, 'abc', 'xyz', 'sindhu@gmail.', 'sindhu@gmail', 77777, 55555, 'ca', '12344', 'gemale', 'telugu', 'not', 'monday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `examdb`
--
ALTER TABLE `examdb`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `exam_qualification`
--
ALTER TABLE `exam_qualification`
  ADD PRIMARY KEY (`eqid`);

--
-- Indexes for table `mappingdb`
--
ALTER TABLE `mappingdb`
  ADD PRIMARY KEY (`mapid`);

--
-- Indexes for table `studentdb`
--
ALTER TABLE `studentdb`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `team_1`
--
ALTER TABLE `team_1`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mappingdb`
--
ALTER TABLE `mappingdb`
  MODIFY `mapid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentdb`
--
ALTER TABLE `studentdb`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team_1`
--
ALTER TABLE `team_1`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
