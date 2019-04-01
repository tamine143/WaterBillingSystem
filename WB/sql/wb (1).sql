-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 10:46 AM
-- Server version: 10.1.34-MariaDB
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
-- Database: `wb`
--

-- --------------------------------------------------------

--
-- Table structure for table `commercialbill`
--

CREATE TABLE `commercialbill` (
  `Reading_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  `Previous_Reading` decimal(10,2) NOT NULL,
  `Present_Reading` decimal(10,2) NOT NULL,
  `Cutting_Date` date NOT NULL,
  `Bill_Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `Account_no` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Middle_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Purok` varchar(50) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `Birth_place` varchar(50) NOT NULL,
  `Contact_no` varchar(20) NOT NULL,
  `Civil_status` varchar(20) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Spouse_name` varchar(50) NOT NULL,
  `Mother_name` varchar(50) NOT NULL,
  `Father_name` varchar(50) NOT NULL,
  `Type_of_residence` varchar(50) NOT NULL,
  `Public_or_Private` varchar(50) NOT NULL,
  `Senior_or_Pwd` varchar(50) NOT NULL,
  `Monthly_income` decimal(10,2) NOT NULL,
  `Meter_brand` varchar(50) NOT NULL,
  `Date_installed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resedentialbill`
--

CREATE TABLE `resedentialbill` (
  `Reading_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  `Previous_Reading` decimal(10,2) NOT NULL,
  `Present_Reading` decimal(10,2) NOT NULL,
  `Cutting_Date` date NOT NULL,
  `Bill_Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`Account_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
