-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 09:01 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mappingdb`
--
ALTER TABLE `mappingdb`
  ADD PRIMARY KEY (`mapid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mappingdb`
--
ALTER TABLE `mappingdb`
  MODIFY `mapid` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
