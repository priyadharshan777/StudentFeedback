-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 08:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feed`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `department` varchar(10) NOT NULL,
  `sec` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`username`, `password`, `email`, `phone_no`, `department`, `sec`) VALUES
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '', '', ''),
('darshan', '123', 'abc@gmail.com', '9876543210', 'MCA', 'A'),
('Ab', '123', 'ansd@gmail.com', '8464668760', 'CSE', 'A'),
('Aravindhan', '321', 'djokovic003@gmail.com', '741842', 'MCA', 'A'),
('dinesh', '1234', 'dinesh123@gmail.com', '8148313090', 'CSE', 'A'),
('aswin', '777', 'aswin@gmail.com', '7657676', 'CSEcse', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `details2`
--

CREATE TABLE `details2` (
  `Sub_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Reg_no` varchar(50) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL,
  `Sem` varchar(3) DEFAULT NULL,
  `Sec` varchar(2) DEFAULT NULL,
  `Sub_code` varchar(10) DEFAULT NULL,
  `c1` varchar(10) DEFAULT NULL,
  `c2` varchar(10) DEFAULT NULL,
  `c3` varchar(10) DEFAULT NULL,
  `c4` varchar(10) DEFAULT NULL,
  `c5` varchar(10) DEFAULT NULL,
  `c6` varchar(10) DEFAULT NULL,
  `c7` varchar(10) DEFAULT NULL,
  `c8` varchar(10) DEFAULT NULL,
  `c9` varchar(10) DEFAULT NULL,
  `c10` varchar(10) DEFAULT NULL,
  `c11` varchar(10) DEFAULT NULL,
  `c12` varchar(10) DEFAULT NULL,
  `c13` varchar(10) DEFAULT NULL,
  `c14` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`Reg_no`, `Department`, `Sem`, `Sec`, `Sub_code`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`) VALUES
('108', 'MCA', '1', 'A', '15MCA41', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'kjj'),
('112', 'MCA', '1', 'A', '15MCA41', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'jhv'),
('123', 'MCA', '1', 'A', '15MCA41', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'fine'),
('454', 'MCA', '1', 'A', '15MCA41', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'nkn'),
('12345', 'MCA', '1', 'A', '15MCA41', '3', '2', '1', '2', '1', '3', '3', '3', '2', '1', '1', '2', '2', 'satisfied'),
('555555', 'MCA', '1', 'A', '15MCA41', '3', '2', '2', '2', '3', '2', '1', '2', '3', '2', '2', '2', '2', 'good'),
('36363653', 'MCA', '1', 'A', '15MCA41', '2', '1', '2', '3', '3', '3', '3', '2', '2', '2', '2', '1', '1', 'good'),
('535', 'MCA', '1', 'A', '15MCA41', '2', '2', '2', '2', '2', '2', '2', '2', '', '2', '2', '2', '2', 'sfsdg'),
('202', 'MCA', '1', 'A', '15MCA41', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'good'),
('202', 'MCA', '1', 'A', '15MCA41', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'good'),
('202', 'MCA', '1', 'A', '15MCA41', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `finalreport`
--

CREATE TABLE `finalreport` (
  `Reg_no` varchar(50) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Sem` varchar(3) NOT NULL,
  `Sec` varchar(2) NOT NULL,
  `Sub_code` varchar(10) NOT NULL,
  `c1` varchar(10) NOT NULL,
  `c2` varchar(10) NOT NULL,
  `c3` varchar(10) NOT NULL,
  `c4` varchar(10) NOT NULL,
  `c5` varchar(10) NOT NULL,
  `c6` varchar(10) NOT NULL,
  `c7` varchar(10) NOT NULL,
  `c8` varchar(10) NOT NULL,
  `c9` varchar(10) NOT NULL,
  `c10` varchar(10) NOT NULL,
  `c11` varchar(10) NOT NULL,
  `c12` varchar(10) NOT NULL,
  `c13` varchar(10) NOT NULL,
  `c14` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `section` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_name`, `password`, `department`, `section`) VALUES
('ravi', '1234', 'MCA', 'A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
