-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 06:00 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get_well_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `username` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `rh_factor` varchar(5) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `doctor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`username`, `first_name`, `last_name`, `contact`, `gender`, `blood_group`, `rh_factor`, `country`, `date_time`, `doctor`) VALUES
('sad', 's', 's', 2147483647, 'M', 'A', '+ve', 'India', '2017-11-15 12:30:00', 'Dr. Bejoy Abraham'),
('sa', 'Nikhil', 'Thakurdesai', 873632882, 'M', 'A', '+ve', 'India', '2017-11-21 15:45:00', 'Dr. Bejoy Abraham'),
('sa', 'Aayush ', 'Shah', 873632882, 'M', 'A', '+ve', 'India', '2017-11-28 17:30:00', 'Dr. Bejoy Abraham'),
('asawari', 'Asawari', 'Thakurdesai', 2147483647, 'F', 'O', '+ve', 'India', '2017-11-10 11:00:00', 'Dr. Annu Aggarwal');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `rh_factor` varchar(5) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `first_name`, `last_name`, `password`, `contact`, `gender`, `blood_group`, `rh_factor`, `country`) VALUES
('ad', 's', 's', 'abcd12', 2147483647, 'M', 'A', '+ve', 'India'),
('asawari', 'Asawari', 'Thakurdesai', 'abcd12', 2147483647, 'F', 'O', '+ve', 'India'),
('das', 'das', 'das', 'abcd12', 2147483647, 'M', 'A', '+ve', 'India'),
('ds', 'ds', 'ds', 'abcd', 2147483647, 'M', 'A', '+ve', 'India'),
('masd', 'masd', 'masd', 'abcd', 2147483647, 'M', 'A', '+ve', 'India'),
('neha', 'neha', 't', 'abcd12', 327323279, 'F', 'O', '+ve', 'India'),
('nikhil', 'nikhil', 't', 'abcd', 382473843, 'M', 'A', '+ve', 'India'),
('sa', 's', 's', 'abcd12', 873632882, 'M', 'A', '+ve', 'India'),
('sad', 's', 's', 'abcd12', 2147483647, 'M', 'A', '+ve', 'India'),
('sam', 'sam', 'sam', 'abcd12', 2147483647, 'M', 'A', '+ve', 'India'),
('sas', 'sas', 'sas', 'abcd', 234333332, 'M', 'A', '+ve', 'India'),
('shripad', 'Shripad', 'Thakurdesai', 'abcd12', 2147483647, 'M', 'AB', '+ve', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
