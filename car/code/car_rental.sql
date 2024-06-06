-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2024 at 06:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `car_id`, `user_id`, `start_date`, `end_date`) VALUES
(1, 5, 3, '2024-06-03', '2024-06-04'),
(2, 5, 3, '2024-06-03', '2024-06-04'),
(3, 5, 3, '2024-06-03', '2024-06-04'),
(4, 5, 1, '2024-06-20', '2024-06-26'),
(5, 5, 1, '2024-06-20', '2024-06-26'),
(6, 5, 1, '2024-06-20', '2024-06-26'),
(7, 6, 1, '2024-06-12', '2024-06-19'),
(8, 6, 1, '2024-06-06', '2024-06-08'),
(9, 8, 3, '2024-06-05', '2024-06-12'),
(10, 4, 5, '2024-06-05', '2024-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `car_name`, `brand`, `location`, `price`, `Description`, `Picture`) VALUES
(4, 'bwm3', 'merecedesbench', 'Dheli', 10000000, 'parents', 'mercedesbench.jpg'),
(5, 'BMW', 'bmw', 'up', 20000000, 'family and friends', 'bmw.jpg'),
(6, 'aulto', 'brezza', 'maharastra', 3500000, 'for friends', 'brezza.jpg'),
(7, 'Honda', 'kia', 'kerla', 200000, 'Family', 'kia.jpg'),
(8, 'aulto', 'innova', 'Karanataka', 200000, 'for friends', 'innova.jpg'),
(9, 'aulto', 'innova', 'kerla', 250000, 'family friendly', 'nissan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `phone`, `email`, `password`, `confirm_password`) VALUES
(1, 'mj', '7865467876', 'mj123@gmail.com', 'mj123', ''),
(7, 'Vaishnavi alur', '7654345678', 'vaishnavialurv@gamil.com', 'vaishu123', ''),
(12, 'rani', '9876545678', 'raju@gmail.com', 'raju123', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`Id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Vaishnavi alur', '7865467876', 'vaishnavialurv@gamil.com', 'vaishu'),
(3, 'rishi', '7865467876', 'dk@gmail.com', 'vaish'),
(5, 'mj', '9876543212', 'mj123@gmail.com', 'mj123'),
(6, 'mj12', '987123456', 'mj12@gmail.com', 'mj1234'),
(7, 'admin', '123456789', 'admin@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
