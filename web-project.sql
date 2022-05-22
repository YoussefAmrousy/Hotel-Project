-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 01:47 AM
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
(1, 'youssef', 'alamrousy', 'youssef.amrousy@gmail.com', '12345', 'eeekwk', '', '12345678901234'),
(2, 'dkks', 'ksksk', 'ksksk@gmail.com', '12345', 'ekwkwk', '', '12345678901234'),
(3, 'ekek', 'kkk', 'kkk@gmail.com', '12345', 'wkwkw', '', '12345678901234'),
(4, 'Youssef', 'Alamrousy', 'toy@gmail.com', '12345', 'ekwkw', '', '12345678901234'),
(5, 'zizo', 'king', 'zizoking@gmail.com', '12345', 'ewkwk', '', '12345678901234'),
(6, 'Youssef', 'Alamrousy', 'ewkw@gmail.com', 'Youssef1900', 'ewkwk', '', '12345678901234'),
(7, 'kkk', 'kkkk', 'kkkk@gmail.com', '12345', 'kkkk', '', '12345678901234'),
(8, 'zz', 'zz', 'sss@gmail.com', '12345', 'sksk', '', '12345678901234'),
(9, 'jjjjq', 'fhfhf', 'youssefekw@gmail.com', '12345', 'wkdkwkdw', '', '12345678901234'),
(10, 'gg', 'gg', 'ekwk@gmail.com', '12345', 'ekwwk', '', '12345678901234'),
(11, 'ekek', 'kkwk', 'kew@gmail.com', '12345', 'ekwkw', '', '12345678901234'),
(12, 'elwl', 'wjwjw', 'ejwjw@gmail.com', '12345', 'kewk', '', '12345678901234'),
(13, 'ekwkk', 'ekkwkwk', 'kewkw@gmail.com', '12345', 'ekwkwk', '', '12345678901234'),
(14, 'ewkkwk', 'wkwkkw', 'k@gmail.com', '12345', 'wkkwk', '', '12345678901234');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `UserID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `TotalGuests` int(1) NOT NULL,
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

INSERT INTO `guests` (`UserID`, `Name`, `TotalGuests`, `Guest1Name`, `Guest1ID`, `Guest2Name`, `Guest2ID`, `Guest3Name`, `Guest3ID`, `Guest4Name`, `Guest4ID`) VALUES
(2, 'dkks ksksk', 2, 'ekwkw', '12345678901234', '', '', '', '', '', ''),
(3, 'ekek kkk', 2, 'ewwkw', '12345678901234', '', '', '', '', '', ''),
(4, 'Youssef Alamrousy', 2, 'eww', '12345678901234', '', '', '', '', '', ''),
(5, 'zizo king', 2, 'amrousy', '12345678901234', '', '', '', '', '', ''),
(6, 'Youssef Alamrousy', 2, 'ewwe', '12345678901234', '', '', '', '', '', ''),
(6, 'Youssef Alamrousy', 2, 'ekekw', 'wkwkkw', '', '', '', '', '', ''),
(2, 'dkks ksksk', 4, 'jejwj', '12345678901234', 'wkkw', '12345678901234', 'kwekwk', '12345678901234', '', ''),
(7, 'kkk kkkk', 2, 'wkwkw', 'wkwkw', '', '', '', '', '', ''),
(3, 'ekek kkk', 3, '', '', '', '', '', '', '', ''),
(3, 'ekek kkk', 3, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `RoomNumber` int(10) NOT NULL,
  `Extra` varchar(30) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `CheckinDate` date NOT NULL,
  `CheckoutDate` date NOT NULL,
  `Paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guests`
--
ALTER TABLE `guests`
  ADD CONSTRAINT `guests_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `clients` (`ID`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `clients` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
