-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 08:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SuggestionID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Quality` varchar(1000) NOT NULL,
  `Suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SuggestionID`, `UserID`, `Name`, `Quality`, `Suggestions`) VALUES
(1, 12, 'test test', '5', 'test'),
(2, 2, 'eee eee', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `UserID` int(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `RoomNumber` int(100) NOT NULL,
  `Board` varchar(80) NOT NULL,
  `Extra` varchar(30) NOT NULL,
  `CheckinDate` date NOT NULL,
  `CheckoutDate` date NOT NULL,
  `Paid` varchar(30) NOT NULL,
  `Pending` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`UserID`, `Name`, `RoomType`, `RoomNumber`, `Board`, `Extra`, `CheckinDate`, `CheckoutDate`, `Paid`, `Pending`) VALUES
(30, 'wkkw wkwk', 'Double', 11, 'Half Board', '', '2022-06-07', '2022-06-29', 'Yes', 'No'),
(31, 'king amrousy', 'Single', 1, 'Breakfast only', '', '2022-06-14', '2022-06-22', 'Yes', 'No'),
(29, 'zz zz', 'Single', 2, 'Breakfast only', '', '2022-06-15', '2022-06-22', 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` enum('Receptionist','QA') NOT NULL,
  `Enabled` enum('True','False') NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `Name`, `Email`, `Password`, `Role`, `Enabled`, `Comments`) VALUES
(42, 'sksk', 'ksksks@grnd.com', 'kssksk', 'Receptionist', 'False', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` text NOT NULL,
  `profile` text NOT NULL,
  `NationID` text NOT NULL,
  `Pending` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `profile`, `NationID`, `Pending`) VALUES
(26, 'sksk', 'sksks', 'wkw@gmail.com', '12345', '', '12345678901234', 'No'),
(27, 'king', 'amrousy', 'zzzki@gmail.com', '12345', '', '12345678901234', 'No'),
(28, 'test', 'test', 'testking@gmail.com', '12345', '', '12345678901234', 'No'),
(29, 'zz', 'zz', 'zzze@gmail.com', '12345', '', '12345678901234', 'No'),
(30, 'wkkw', 'wkwk', 'kingsosos@gmail.com', '12345', '', '12345678901234', ''),
(31, 'king', 'amrousy', 'soosy@gmail.com', '12345', '', '12345678901234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SuggestionID`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD UNIQUE KEY `StaffID` (`StaffID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SuggestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guests`
--
ALTER TABLE `guests`
  ADD CONSTRAINT `guests_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
