-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(4) NOT NULL,
  `emp_title` varchar(10) DEFAULT NULL,
  `emp_name` varchar(20) DEFAULT NULL,
  `emp_dob` date DEFAULT NULL,
  `emp_doj` date DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `emp_city` varchar(30) DEFAULT NULL,
  `emp_state` varchar(30) DEFAULT NULL,
  `emp_pincode` int(15) DEFAULT NULL,
  `emp_mobno` bigint(20) DEFAULT NULL,
  `emp_mailid` varchar(50) DEFAULT NULL,
  `emp_panno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_title`, `emp_name`, `emp_dob`, `emp_doj`, `emp_address`, `emp_city`, `emp_state`, `emp_pincode`, `emp_mobno`, `emp_mailid`, `emp_panno`) VALUES
(1, 'Mr', 'Sucheth kashyap', '2001-10-04', '2022-01-01', '#23/1 Slv sapphire apt', 'Bangalore', 'Karnataka', 560090, 8497086806, 'sucheth.kashyap2001@gmail.com', 'KKBK8831B'),
(6, 'Mr', 'Rishab naik', '2022-01-01', '2022-04-08', '#45/2', 'Bangalore', 'Karnataka', 560056, 9898767656, 'rishab2001@gmail.com', 'KJP3399KG'),
(7, 'Mrs', 'Neha pujari', '2022-01-01', '2022-01-23', '#12/2 Raheja apt', 'Gulbarga', 'Karnataka', 432001, 9754689737, 'nehapujari19@gmail.com', 'KJP3399KG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
