-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 03:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `bypass`
--

CREATE TABLE `bypass` (
  `reg_subject` varchar(100) NOT NULL,
  `bypass_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bypass`
--

INSERT INTO `bypass` (`reg_subject`, `bypass_answer`) VALUES
('FSC 111', 'REPRODUCTION'),
('FSC 112 ', 'REPRODUCTION'),
('FSC 113 ', 'REPRODUCTION'),
('FSC 114 ', 'REPRODUCTION'),
('FSC 115 ', 'REPRODUCTION');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `student` varchar(500) NOT NULL,
  `matric_no` varchar(500) NOT NULL,
  `reg_subject` varchar(500) NOT NULL,
  `reg_date` varchar(500) NOT NULL,
  `reg_option` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`student`, `matric_no`, `reg_subject`, `reg_date`, `reg_option`) VALUES
('ANYILE VICTOR CHIBUIKE', '2393948494', 'SELECT SUBJECT', '18/01/22', 'STATISTICS'),
('ANYILE VICTOR CHIBUIKE', '2393948494', 'FSC 111', '18/01/22', 'PURE MATHEMATICS'),
('ANYILE VICTOR CHIBUIKE', '2393948494', 'FSC 111', '19/01/2022', 'INDUSTRIAL MATHEMATICS'),
('ANYILE VICTOR CHIBUIKE', '2393948494', 'FSC 111', '01/19/2022', 'INDUSTRIAL MATHEMATICS'),
('ANYILE VICTOR CHIBUIKE', '2393948494', 'FSC 111', '2022-01-19', 'INDUSTRIAL MATHEMATICS'),
('DARKWEB KNG', '2393948494', 'FSC 111', '2022-01-19', 'INDUSTRIAL MATHEMATICS'),
('ANYILE VICTOR CHIBUIKE', '2393948494', 'FSC 112', '2022-03-07', 'SELECT OPTION');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
