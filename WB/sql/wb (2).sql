-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 04:22 AM
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
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `Account_no` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `present_reading` int(11) NOT NULL,
  `previous_reading` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `cutting_date` date NOT NULL,
  `bill_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `Account_no`, `billing_date`, `present_reading`, `previous_reading`, `due_date`, `cutting_date`, `bill_amount`) VALUES
(1, 100, '2019-03-01', 11, 11, '2019-03-02', '2019-03-16', '2019.00'),
(10, 100, '2019-03-02', 10, 10, '2019-03-23', '2019-03-29', '2019.00'),
(261626, 100, '2019-03-07', 5, 123, '2019-03-06', '2019-03-22', '2019.00');

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `minimum` int(11) NOT NULL,
  `maximum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`minimum`, `maximum`) VALUES
(10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `Account_no` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Purok` varchar(20) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Birthdate` date NOT NULL,
  `Birth_place` varchar(50) NOT NULL,
  `Contact_no` varchar(20) NOT NULL,
  `Civil_status` varchar(20) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `Spouse_name` varchar(20) NOT NULL,
  `Mother_name` varchar(20) NOT NULL,
  `Father_name` varchar(20) NOT NULL,
  `Type_of_residence` varchar(20) NOT NULL,
  `Public_or_Private` varchar(20) NOT NULL,
  `Senior_or_Pwd` varchar(20) NOT NULL,
  `Monthly_income` decimal(10,2) NOT NULL,
  `Meter_brand` varchar(20) NOT NULL,
  `Date_installed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`Account_no`, `First_name`, `Middle_name`, `Last_name`, `Purok`, `Barangay`, `City`, `Birthdate`, `Birth_place`, `Contact_no`, `Civil_status`, `Occupation`, `Spouse_name`, `Mother_name`, `Father_name`, `Type_of_residence`, `Public_or_Private`, `Senior_or_Pwd`, `Monthly_income`, `Meter_brand`, `Date_installed`) VALUES
(100, 'werty', 'man', 'men', 'p3', 'proper langcangan', 'oroquieta city', '3333-12-11', 'qwewe', '58444', '<br />\r\n<b>Notice</b', 'qewe', 'wqewq', 'eqweqwe', 'weqwe', 'commercial', 'private', 'wqewq', '15161.00', 'eqwew', '1616-12-05'),
(1001, 'John Elmer', 'Pagsiat', 'Tamine', 'p-2', 'proper langcangan', 'oroquieta city', '1995-10-11', 'MOPH', '09663929732', 'widow', 'Programmer', 'none', 'Teresita', 'Elmer', 'residential', 'public', 'none', '60000.00', 'ambot', '2009-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `pwd` int(11) NOT NULL,
  `senior` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`pwd`, `senior`) VALUES
(10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `receipt_no` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `Account_no` int(11) NOT NULL,
  `Senior_or_Pwd` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  `Bill_Amount` decimal(10,2) NOT NULL,
  `total_amount_to_be_pay` decimal(10,2) NOT NULL,
  `Date_payed` date NOT NULL,
  `Mode_of_payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`receipt_no`, `billing_id`, `Account_no`, `Senior_or_Pwd`, `discount`, `penalty`, `Bill_Amount`, `total_amount_to_be_pay`, `Date_payed`, `Mode_of_payment`) VALUES
(1, 1, 100, 'Pwd', 10, 0, '2019.00', '2009.00', '2019-03-28', ''),
(3, 1, 100, 'Senior', 20, 0, '2019.00', '1999.00', '2019-03-05', 'cash'),
(4, 1, 100, 'Senior', 20, 0, '2019.00', '1999.00', '2019-03-28', ''),
(2000, 1, 100, 'Senior', 20, 0, '2019.00', '1999.00', '2019-03-30', 'commercial');

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `penalty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`penalty`) VALUES
(5);

-- --------------------------------------------------------

--
-- Table structure for table `residential`
--

CREATE TABLE `residential` (
  `minimum` int(11) NOT NULL,
  `maximum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residential`
--

INSERT INTO `residential` (`minimum`, `maximum`) VALUES
(10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `Account_no` (`Account_no`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`Account_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`receipt_no`),
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `Account_no` (`Account_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`Account_no`) REFERENCES `consumer` (`Account_no`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`billing_id`) REFERENCES `billing` (`billing_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`Account_no`) REFERENCES `consumer` (`Account_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
