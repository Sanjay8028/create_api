-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 09:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `create_partner`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `acc_type` varchar(255) NOT NULL,
  `acc_no` int(255) NOT NULL,
  `IFSC` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `bank_name`, `holder_name`, `acc_type`, `acc_no`, `IFSC`, `date`) VALUES
(1, ' sbi', 'raju', 'saving', 2147483647, ' sbin002314', '2022-04-13 12:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `office` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `officAdd` varchar(255) NOT NULL,
  `resLandmark` varchar(255) NOT NULL,
  `resCity` varchar(255) NOT NULL,
  `resPincode` int(255) NOT NULL,
  `resDistrict` varchar(255) NOT NULL,
  `resState` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `office`, `landmark`, `city`, `pincode`, `district`, `state`, `officAdd`, `resLandmark`, `resCity`, `resPincode`, `resDistrict`, `resState`, `date`) VALUES
(1, 'gurgaon', 'London', 'gurgaon', 122001, 'vzvzcx', 'Haryana', 'gurgaon', 'London', 'gurgaon', 122001, 'vzvzcx', 'Haryana', '2022-04-13 11:53:09'),
(2, 'gurgaon', 'London', 'gurgaon', 122001, 'mp', 'Haryana', 'gurgaon', 'america', 'gurgaon', 122001, 'haryana', 'Haryana', '2022-04-20 05:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `limit` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `token`, `status`, `limit`) VALUES
(1, 'wqieowpieoidkfjjfjk', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_deatails`
--

CREATE TABLE `user_deatails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `othe_no` int(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `shop` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_deatails`
--

INSERT INTO `user_deatails` (`id`, `name`, `father`, `dob`, `email`, `contact`, `othe_no`, `education`, `shop`, `pan_no`, `gender`, `date`) VALUES
(1, 'hhh', 'dayal', '2022-04-01', 'sdfsdf22@gmail.com', 2147483647, 2147483647, 'b.tech', 'bitspanindia', 'AAAAA9999A', 'male', '2022-04-13 09:56:45'),
(2, 'ravina', 'tandan', '2022-03-31', 'out@gmail.com', 546478263, 628448696, 'bca', 'bitspanindia', 'AAAAA9999A', 'female', '2022-04-20 05:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_deatails`
--
ALTER TABLE `user_deatails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_deatails`
--
ALTER TABLE `user_deatails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
