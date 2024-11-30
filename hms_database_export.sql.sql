-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 05:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_creds`
--

CREATE TABLE `admin_creds` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_creds`
--

INSERT INTO `admin_creds` (`sr_no`, `name`, `pass`) VALUES
(1, 'shannon', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `landloard`
--

CREATE TABLE `landloard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landloard`
--

INSERT INTO `landloard` (`id`, `name`, `email`, `phone_number`, `address`, `date_of_birth`, `password`) VALUES
(1, 'shannon', 'shannon@gmail.com', '011452387', 'Kottava', '2024-03-07', '785412');

-- --------------------------------------------------------

--
-- Table structure for table `roominformation`
--

CREATE TABLE `roominformation` (
  `RoomID` int(11) NOT NULL,
  `RoomName` varchar(255) NOT NULL,
  `RoomImage` mediumblob NOT NULL,
  `RoomPrice` decimal(10,2) NOT NULL,
  `RoomFeatures` text NOT NULL,
  `RoomFacilities` text NOT NULL,
  `Latitude` decimal(10,6) NOT NULL,
  `Longitude` decimal(10,6) NOT NULL,
  `Accepted` tinyint(1) DEFAULT 0,
  `booking_status` enum('available','pending','booked') DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roominformation`
--

INSERT INTO `roominformation` (`RoomID`, `RoomName`, `RoomImage`, `RoomPrice`, `RoomFeatures`, `RoomFacilities`, `Latitude`, `Longitude`, `Accepted`, `booking_status`) VALUES
(13, 'test 01', 0x75706c6f6164732f312e6a7067, 20000.00, 'WIFi', 'test 03', 6.851902, 79.915219, 0, 'booked'),
(15, 'test', 0x75706c6f6164732f312e6a7067, 55000.00, 'WIFi', 'test 03', 1.255580, 1.236570, 1, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone_number`, `address`, `date_of_birth`, `password`) VALUES
(1, 'nipuni', 'nipini@gmail.com', '01125487965', 'kottava', '2024-03-06', '36985'),
(2, 'tharushi', 'tharushi@gmail.com', '0764546473', '30,wattala', '2024-07-07', '2345677');

-- --------------------------------------------------------

--
-- Table structure for table `wardens`
--

CREATE TABLE `wardens` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wardens`
--

INSERT INTO `wardens` (`id`, `name`, `email`, `phone_number`, `address`, `date_of_birth`, `password`) VALUES
(3, 'x', 'shannon@gmail.com', '012547896', 'maharaga', '2024-03-28', '147852'),
(6, 'x', 'shannon@gmail.com', '147852369', 'maharagama', '2024-03-30', '123546'),
(7, 'nipuni', 'nipini@gmail.com', '1235478', 'homahama', '2024-03-27', '963258'),
(9, 'x', 'shannon@gmail.com', '134355', 'k', '2024-03-27', '5896547'),
(10, 'charlie', 'charlie@gmail.com', '0777666435', 'bandarawela', '2024-04-12', '55678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_creds`
--
ALTER TABLE `admin_creds`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `landloard`
--
ALTER TABLE `landloard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roominformation`
--
ALTER TABLE `roominformation`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wardens`
--
ALTER TABLE `wardens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_creds`
--
ALTER TABLE `admin_creds`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `landloard`
--
ALTER TABLE `landloard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roominformation`
--
ALTER TABLE `roominformation`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wardens`
--
ALTER TABLE `wardens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
