-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 07:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `Sam` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diesease`
--

CREATE TABLE `diesease` (
  `ID` int(11) NOT NULL,
  `Diesease_name` varchar(50) NOT NULL,
  `Diet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diesease`
--

INSERT INTO `diesease` (`ID`, `Diesease_name`, `Diet`) VALUES
(0, 'Dengue', 'Diary products, leafy Vegetables,Papaya leaf Juice'),
(0, 'Jaundice', ' papaya,mango,kale broccoli berries oatmeal,almond'),
(0, 'Malaria', 'grain cereals,green leafy vegetables,skin fruits'),
(0, 'Typhoid', 'Raw Vegetable salad,fresh fruits,High Calorie Diet');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Disease` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `Password`, `Disease`) VALUES
('sandeep123', 'sam', 'typhoid'),
('test', '1234', 'malaria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diesease`
--
ALTER TABLE `diesease`
  ADD PRIMARY KEY (`Diesease_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
