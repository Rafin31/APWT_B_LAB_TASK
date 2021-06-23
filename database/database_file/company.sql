-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 01:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(32) NOT NULL,
  `Full_name` varchar(32) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `Phone_Number` varchar(32) NOT NULL,
  `Company` varchar(32) NOT NULL,
  `City` varchar(32) NOT NULL,
  `Country` varchar(32) NOT NULL,
  `User_type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `Full_name`, `user_name`, `Email`, `password`, `Phone_Number`, `Company`, `City`, `Country`, `User_type`) VALUES
(1, 'Asif Hossain', 'asd', 'asifhossain976@email.com', 'Iamboss@007', '01986306597', 'NASA', 'DHAKA', 'Bangladesh', 'customer'),
(3, 'Lutfa', 'Lutfa', 'LUTFA@email.com', 'c405a053c8b200759e266a520524644d', '01986306597', 'Robi', 'DHAKA', 'Bangladesh', 'customer'),
(4, 'amir', 'rubby', 'asifhossain976@gmail.com', 'c405a053c8b200759e266a520524644d', '01986306597', 'NASA', 'DHAKA', 'Bangladesh', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
