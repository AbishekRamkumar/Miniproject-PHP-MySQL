-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 02:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_company` varchar(30) NOT NULL,
  `emp_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_company`, `emp_salary`) VALUES
(101, 'Arun', 'TCS', 45000),
(102, 'Ajith', 'Accenture', 40500),
(103, 'Kishore', 'Infosys', 55000),
(104, 'Ramnath', 'SBI', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `name` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`name`, `username`, `password`) VALUES
('Abishek', 'abishek@gmail.com', 'abishek123'),
('Kali Charan', 'kalicharan@gmail.com', 'kalicharan123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wickets`
--

CREATE TABLE `tbl_wickets` (
  `player_name` varchar(25) NOT NULL,
  `total_wickets` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wickets`
--

INSERT INTO `tbl_wickets` (`player_name`, `total_wickets`) VALUES
('Anil Kumble', 619),
('Kapil Dev', 434),
('Ravichandran Ashwin', 418),
('Harbhajan Singh', 410),
('Ishant Sharma', 311);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
