-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 12:57 PM
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
-- Database: `tabulation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontestant`
--

CREATE TABLE `tblcontestant` (
  `id` int(11) NOT NULL,
  `num` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontestant`
--

INSERT INTO `tblcontestant` (`id`, `num`, `name`) VALUES
(1, '1', 'Ardie'),
(15, '2', 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `tblfolkdance`
--

CREATE TABLE `tblfolkdance` (
  `id` int(11) NOT NULL,
  `judge_id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL,
  `choreography` float NOT NULL,
  `skills` float NOT NULL,
  `costume` float NOT NULL,
  `time` float NOT NULL,
  `overall` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbljudge`
--

CREATE TABLE `tbljudge` (
  `id` int(11) NOT NULL,
  `num` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `code` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljudge`
--

INSERT INTO `tbljudge` (`id`, `num`, `name`, `code`, `status`) VALUES
(3, '1', 'judge1', '266667', 0),
(4, '2', 'judge 2', '149797', 1),
(5, '3', 'judge 3', '285217', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontestant`
--
ALTER TABLE `tblcontestant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfolkdance`
--
ALTER TABLE `tblfolkdance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbljudge`
--
ALTER TABLE `tbljudge`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontestant`
--
ALTER TABLE `tblcontestant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblfolkdance`
--
ALTER TABLE `tblfolkdance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbljudge`
--
ALTER TABLE `tbljudge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
