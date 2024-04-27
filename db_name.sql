-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 02:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_table`
--

CREATE TABLE `db_table` (
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` int(25) NOT NULL,
  `cpassword` int(25) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `address` varchar(120) NOT NULL,
  `city` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_table`
--

INSERT INTO `db_table` (`fname`, `lname`, `email`, `password`, `cpassword`, `date`, `gender`, `mobile_number`, `address`, `city`, `state`, `country`) VALUES
('drashti', 'patel', 'manu@gmail.com', 123456, 123456, '2023-09-06', 'Female', 1234567890, 'Mandai Lake Road', 'Kandy', 'mumbai', 'Singapore'),
('dhiral', 'patel', 'dhiral.patel@cipherhex.com', 0, 0, '2023-09-06', 'Female', 1234567890, 'Mandai Lake Road', 'vapi', 'gujarat', 'Singapore'),
('juli', 'patel', 'juli@gmail.com', 0, 0, '2023-09-06', 'Female', 1234567890, 'Mandai Lake Road', 'vapi', 'gujarat', 'Singapore'),
('abc', 'patel', 'abc@gmail.com', 123, 123, '2023-09-06', 'Male', 1234567890, 'Mandai Lake Road', 'vapi', 'gujarat', 'Singapore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
