-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 05:22 AM
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
-- Database: `code_igniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `DateOfRegistration` date DEFAULT NULL,
  `AssignedSalesperson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Phone`, `Address`, `DateOfRegistration`, `AssignedSalesperson`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890', '123 Elm St, Springfield', '2024-12-01', 0),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '987-654-3210', '456 Oak St, Metropolis', '2024-11-15', 0),
(3, 'Michael', 'Brown', 'michael.brown@example.com', '456-123-7890', '789 Pine St, Gotham', '2024-10-20', 0),
(4, 'Emily', 'Davis', 'emily.davis@example.com', '789-654-1230', '321 Maple St, Star City', '2024-09-12', 0),
(5, 'Chris', 'Wilson', 'chris.wilson@example.com', '654-321-9870', '654 Cedar St, Central City', '2024-08-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `interactions`
--

CREATE TABLE `interactions` (
  `InteractionID` int(11) NOT NULL,
  `DateOfInteraction` date DEFAULT NULL,
  `Type` enum('Call','Meeting','Email') DEFAULT NULL,
  `Notes` text DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `SalespersonID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interactions`
--

INSERT INTO `interactions` (`InteractionID`, `DateOfInteraction`, `Type`, `Notes`, `CustomerID`, `SalespersonID`) VALUES
(1, '2024-12-05', '', 'Discussed product features and pricing.', 1, 101),
(2, '2024-12-06', 'Email', 'Sent follow-up proposal and brochures.', 2, 102),
(3, '2024-12-07', 'Meeting', 'Demo presentation at the client site.', 3, 103),
(4, '2024-12-08', '', 'Clarified details about shipping and returns.', 4, 104),
(5, '2024-12-09', 'Email', 'Confirmed order placement and delivery date.', 5, 105);

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `LeadID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `LeadSource` varchar(50) DEFAULT NULL,
  `Status` enum('New','In Progress','Converted','Closed') DEFAULT NULL,
  `AssignedSalesperson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`LeadID`, `FirstName`, `LastName`, `Email`, `Phone`, `LeadSource`, `Status`, `AssignedSalesperson`) VALUES
(1, 'Alex', 'Johnson', 'alex.johnson@example.com', '123-456-7890', 'Website', '', 0),
(2, 'Taylor', 'White', 'taylor.white@example.com', '987-654-3210', 'Referral', '', 0),
(3, 'Jordan', 'Green', 'jordan.green@example.com', '456-789-1230', 'Social Media', '', 0),
(4, 'Morgan', 'Lee', 'morgan.lee@example.com', '789-123-4560', 'Trade Show', '', 0),
(5, 'Casey', 'Brown', 'casey.brown@example.com', '321-654-9870', 'Email Campaign', 'Converted', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salespersons`
--

CREATE TABLE `salespersons` (
  `SalespersonID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `HireDate` date DEFAULT NULL,
  `SalesTarget` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salespersons`
--

INSERT INTO `salespersons` (`SalespersonID`, `FirstName`, `LastName`, `Email`, `Phone`, `HireDate`, `SalesTarget`) VALUES
(101, 'Alice', 'Johnson', 'alice.johnson@example.com', '123-987-6543', '2022-05-15', 500000.00),
(102, 'Bob', 'Williams', 'bob.williams@example.com', '234-876-5432', '2021-08-20', 450000.00),
(103, 'Cathy', 'Adams', 'cathy.adams@example.com', '345-765-4321', '2023-02-10', 400000.00),
(104, 'David', 'Clark', 'david.clark@example.com', '456-654-3210', '2020-11-05', 600000.00),
(105, 'Emma', 'Watson', 'emma.watson@example.com', '567-543-2109', '2019-03-25', 550000.00);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionID` int(11) NOT NULL,
  `TransactionDate` date DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `TotalPrice` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionID`, `TransactionDate`, `CustomerID`, `ProductID`, `Amount`, `Quantity`, `TotalPrice`) VALUES
(1, '2024-12-01', 1, 101, 150.00, 2, 300.00),
(2, '2024-12-02', 2, 102, 200.00, 1, 200.00),
(3, '2024-12-03', 3, 103, 75.50, 3, 226.50),
(4, '2024-12-04', 4, 104, 120.00, 4, 480.00),
(5, '2024-12-05', 5, 105, 50.00, 5, 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'small', 'small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`InteractionID`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`LeadID`);

--
-- Indexes for table `salespersons`
--
ALTER TABLE `salespersons`
  ADD PRIMARY KEY (`SalespersonID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `interactions`
--
ALTER TABLE `interactions`
  MODIFY `InteractionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `LeadID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salespersons`
--
ALTER TABLE `salespersons`
  MODIFY `SalespersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
