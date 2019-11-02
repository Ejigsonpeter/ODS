-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 05:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casted_cipher`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_file`
--

CREATE TABLE `case_file` (
  `id` int(30) NOT NULL,
  `fileno` varchar(30) NOT NULL,
  `investigatingofficer` varchar(30) NOT NULL,
  `casedescription` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `object_detected` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `victim` varchar(30) NOT NULL,
  `suspect` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_file`
--

INSERT INTO `case_file` (`id`, `fileno`, `investigatingofficer`, `casedescription`, `picture`, `object_detected`, `date`, `status`, `victim`, `suspect`, `location`) VALUES
(1, '23992986', 'CIpher Chinua', 'Criminal', 'images/1.jpg', 'Person,handbag and backpack', '2019-11-28', 'pending', 'peter', 'john', 'mpape');

-- --------------------------------------------------------

--
-- Table structure for table `drones`
--

CREATE TABLE `drones` (
  `id` int(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `serialnumber` varchar(30) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drones`
--

INSERT INTO `drones` (`id`, `model`, `serialnumber`, `ip_address`, `date`) VALUES
(1, 'DJI', '23883892822', '192.345.234.2222', '2019-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Chinua Ene Victor', 'mvp', 'enevictorchinua@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_file`
--
ALTER TABLE `case_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drones`
--
ALTER TABLE `drones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_file`
--
ALTER TABLE `case_file`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drones`
--
ALTER TABLE `drones`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
