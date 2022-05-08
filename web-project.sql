-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 07:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` text NOT NULL,
  `Address` text NOT NULL,
  `profile` text NOT NULL,
  `NationID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Address`, `profile`, `NationID`) VALUES
(1, 'e', 'e', 'e@gmail.com', '12345', 'e', '2019-07-26T02_11_35.jpg', '12345678901234'),
(2, 'zzz', 'zzz', 'ee@gmail.com', '12345', 'eeew', '2019-07-26T02_11_35.jpg', '12345678901234'),
(3, 'ff', 'ff', 'kll@gmail.com', '12345', 'elwlw', '2019-07-26T02_11_35.jpg', '12345678901234'),
(4, 'fff', 'ff', 'klle@gmail.com', '12345', 'ee', '2019-07-26T02_11_35.jpg', '12345678901234'),
(5, 'ee', 'eee', 'eeeeee@gmail.com', '12345', 'eee', '2019-07-26T02_11_35.jpg', '12345678901234'),
(6, 'fff', 'fff', 'ffff@gmail.com', '12345', 'efffe', 'IMG_3691.JPG', '12345678901234'),
(7, 'ee', 'ee', 'ewkwa@gmail.com', '12345', 'ekwkw', 'IMG_3691.JPG', '12345678901234'),
(8, 'eeee', 'eeeee', 'kskskskssksk@gmail.com', '12345', 'kekwkw', 'IMG_3691.JPG', '12345678901234');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `UserID` int(11) NOT NULL,
  `Guest1Name` varchar(30) NOT NULL,
  `Guest1ID` varchar(14) NOT NULL,
  `Guest2Name` varchar(30) NOT NULL,
  `Guest2ID` varchar(14) NOT NULL,
  `Guest3Name` varchar(30) NOT NULL,
  `Guest3ID` varchar(14) NOT NULL,
  `Guest4Name` varchar(30) NOT NULL,
  `Guest4ID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`UserID`, `Guest1Name`, `Guest1ID`, `Guest2Name`, `Guest2ID`, `Guest3Name`, `Guest3ID`, `Guest4Name`, `Guest4ID`) VALUES
(1, '22', '22', '', '', '', '', '', ''),
(2, 'ee', '11', '', '', '', '', '', ''),
(5, 'ee', 'ee', '', '', '', '', '', ''),
(5, 'ee', 'ee', '', '', '', '', '', ''),
(6, 'ee', '3', 'ee', '3', 'eee', '4', 'eee', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guests`
--
ALTER TABLE `guests`
  ADD CONSTRAINT `guests_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `clients` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
