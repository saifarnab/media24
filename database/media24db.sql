-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 04:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media24db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `air`
--

CREATE TABLE `air` (
  `airID` int(11) NOT NULL,
  `nameID` int(11) NOT NULL,
  `terminal` int(11) NOT NULL,
  `pricePerDay` decimal(7,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airportname`
--

CREATE TABLE `airportname` (
  `nameID` int(11) NOT NULL,
  `airportName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billarea`
--

CREATE TABLE `billarea` (
  `areaID` int(11) NOT NULL,
  `areaName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billarea`
--

INSERT INTO `billarea` (`areaID`, `areaName`) VALUES
(1, 'Dhanmondi'),
(2, 'Shahbug'),
(3, 'Mirpur'),
(4, 'New-Market'),
(12, 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `billboard`
--

CREATE TABLE `billboard` (
  `billID` int(11) NOT NULL,
  `areaID` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `pricePerDay` decimal(7,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `dateOfOrder` date DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billboard`
--

INSERT INTO `billboard` (`billID`, `areaID`, `location`, `pricePerDay`, `availability`, `dateOfOrder`, `size`) VALUES
(5, 2, 'Roof top of Bardem Hospital, Shahbug cottor', '250.00', 'Yes', NULL, '80*80'),
(11, 12, 'front of noth tower, sector 5', '245.00', 'Yes', NULL, '50*40'),
(12, 12, 'Roof top of rajlokkhi, sector 7', '180.00', 'No', NULL, '45*75'),
(14, 1, 'Front of kery Plaza', '210.00', 'No', NULL, '50*50'),
(16, 3, 'left pllar of mirpur 10 gol cottor ', '280.00', 'Yes', NULL, '70*49'),
(18, 3, 'Mirpur Zoo circle', '250.00', 'No', NULL, '90*50'),
(19, 2, 'Ramna Gate', '370.00', 'Yes', NULL, '50*39'),
(20, 1, 'Meena Bazar Bulding, dhanmondi 19', '240.00', 'Yes', NULL, '45*35'),
(21, 12, 'Jahan Plaza roof top', '170.00', 'No', NULL, '39*34'),
(23, 2, 'Hossainplaza ,RoofTop', '250.00', 'No', NULL, '50*56'),
(24, 1, 'walton Plaza roof top, zigatola', '145.00', 'Yes', NULL, '45*40'),
(25, 1, 'Road No 27 ,Siemens Rooftop', '270.00', 'No', NULL, '88*47'),
(26, 1, 'Front of Gorila Gens', '220.00', 'No', NULL, '60*40'),
(27, 2, 'Seshu Park Gate', '350.00', 'Yes', NULL, '99*77'),
(28, 2, 'Aziz super market gate', '290.00', 'No', NULL, '50*50'),
(29, 3, 'Begum hajri mall, mirpur 2', '145.00', 'Yes', NULL, '35*35'),
(30, 3, 'Beside fire service mirpur 10', '310.00', 'Yes', NULL, '77*50'),
(31, 12, '12 no. sector park gate', '115.00', 'Yes', NULL, '40*35');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busID` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `routeID` int(11) NOT NULL,
  `pricePerTour` decimal(7,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `busroute`
--

CREATE TABLE `busroute` (
  `routeID` int(11) NOT NULL,
  `routeName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinemaID` int(11) NOT NULL,
  `hallID` int(11) NOT NULL,
  `hallNumber` int(11) NOT NULL,
  `pricePerShow` decimal(7,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hallname`
--

CREATE TABLE `hallname` (
  `hallID` int(11) NOT NULL,
  `hallName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rail`
--

CREATE TABLE `rail` (
  `railID` int(11) NOT NULL,
  `stationID` int(11) NOT NULL,
  `terminal` int(11) NOT NULL,
  `pricePerDay` decimal(7,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `railstation`
--

CREATE TABLE `railstation` (
  `stationID` int(11) NOT NULL,
  `stationName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `van`
--

CREATE TABLE `van` (
  `vanID` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `routeID` int(11) NOT NULL,
  `pricePerTour` decimal(7,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vanroute`
--

CREATE TABLE `vanroute` (
  `routeID` int(11) NOT NULL,
  `routeName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `air`
--
ALTER TABLE `air`
  ADD PRIMARY KEY (`airID`),
  ADD KEY `nameID` (`nameID`);

--
-- Indexes for table `airportname`
--
ALTER TABLE `airportname`
  ADD PRIMARY KEY (`nameID`);

--
-- Indexes for table `billarea`
--
ALTER TABLE `billarea`
  ADD PRIMARY KEY (`areaID`);

--
-- Indexes for table `billboard`
--
ALTER TABLE `billboard`
  ADD PRIMARY KEY (`billID`),
  ADD KEY `areaID` (`areaID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busID`),
  ADD KEY `routeID` (`routeID`);

--
-- Indexes for table `busroute`
--
ALTER TABLE `busroute`
  ADD PRIMARY KEY (`routeID`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinemaID`),
  ADD KEY `hallID` (`hallID`);

--
-- Indexes for table `hallname`
--
ALTER TABLE `hallname`
  ADD PRIMARY KEY (`hallID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `rail`
--
ALTER TABLE `rail`
  ADD PRIMARY KEY (`railID`),
  ADD KEY `stationID` (`stationID`);

--
-- Indexes for table `railstation`
--
ALTER TABLE `railstation`
  ADD PRIMARY KEY (`stationID`);

--
-- Indexes for table `van`
--
ALTER TABLE `van`
  ADD PRIMARY KEY (`vanID`),
  ADD KEY `routeID` (`routeID`);

--
-- Indexes for table `vanroute`
--
ALTER TABLE `vanroute`
  ADD PRIMARY KEY (`routeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `air`
--
ALTER TABLE `air`
  MODIFY `airID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `airportname`
--
ALTER TABLE `airportname`
  MODIFY `nameID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billarea`
--
ALTER TABLE `billarea`
  MODIFY `areaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `billboard`
--
ALTER TABLE `billboard`
  MODIFY `billID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `busID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `busroute`
--
ALTER TABLE `busroute`
  MODIFY `routeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinemaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hallname`
--
ALTER TABLE `hallname`
  MODIFY `hallID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rail`
--
ALTER TABLE `rail`
  MODIFY `railID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `railstation`
--
ALTER TABLE `railstation`
  MODIFY `stationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `van`
--
ALTER TABLE `van`
  MODIFY `vanID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vanroute`
--
ALTER TABLE `vanroute`
  MODIFY `routeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `air`
--
ALTER TABLE `air`
  ADD CONSTRAINT `air_ibfk_1` FOREIGN KEY (`nameID`) REFERENCES `airportname` (`nameID`);

--
-- Constraints for table `billboard`
--
ALTER TABLE `billboard`
  ADD CONSTRAINT `billboard_ibfk_1` FOREIGN KEY (`areaID`) REFERENCES `billarea` (`areaID`);

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`routeID`) REFERENCES `busroute` (`routeID`);

--
-- Constraints for table `cinema`
--
ALTER TABLE `cinema`
  ADD CONSTRAINT `cinema_ibfk_1` FOREIGN KEY (`hallID`) REFERENCES `hallname` (`hallID`);

--
-- Constraints for table `rail`
--
ALTER TABLE `rail`
  ADD CONSTRAINT `rail_ibfk_1` FOREIGN KEY (`stationID`) REFERENCES `railstation` (`stationID`);

--
-- Constraints for table `van`
--
ALTER TABLE `van`
  ADD CONSTRAINT `van_ibfk_1` FOREIGN KEY (`routeID`) REFERENCES `vanroute` (`routeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
