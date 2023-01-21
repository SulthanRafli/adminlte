-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 09:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlte`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_multiple`
--

CREATE TABLE `detail_multiple` (
  `idDetailMultiple` int(11) NOT NULL,
  `idMultiple` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `select2` text DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_multiple`
--

INSERT INTO `detail_multiple` (`idDetailMultiple`, `idMultiple`, `text`, `select2`, `number`, `visible`, `dateMake`, `dateUpdate`) VALUES
(1, 1, '31', 'Alaska', 3, 1, '2023-01-20 08:45:29', '2023-01-20 08:45:29'),
(2, 1, 'tfesfs', 'Texas', 4, 1, '2023-01-20 08:45:29', '2023-01-20 08:45:29'),
(3, 2, '21312', 'California', 321, 0, '2023-01-20 08:46:13', '2023-01-20 09:00:54'),
(4, 2, 'vdsfsdf', 'Texas', 31, 0, '2023-01-20 08:46:13', '2023-01-20 09:00:54'),
(5, 2, '21312', 'California', 321, 1, '2023-01-20 09:00:54', '2023-01-20 09:00:54'),
(6, 2, 'estset', 'Tennessee', 312, 1, '2023-01-20 09:00:54', '2023-01-20 09:00:54'),
(7, 2, '12313', 'Alaska', 321321, 1, '2023-01-20 09:00:54', '2023-01-20 09:00:54'),
(8, 3, '31231', 'California', 3, 1, '2023-01-20 09:05:11', '2023-01-20 09:05:11'),
(9, 3, '3213', 'Washington', 4, 1, '2023-01-20 09:05:11', '2023-01-20 09:05:11'),
(10, 3, '5123', 'Texas', 5, 1, '2023-01-20 09:05:11', '2023-01-20 09:05:11'),
(11, 3, '13asda', 'Washington', 3, 1, '2023-01-20 09:05:11', '2023-01-20 09:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idLogin`, `nama`, `username`, `password`, `visible`, `dateMake`, `dateUpdate`) VALUES
(1, 'test', 'test', 'test', 1, '2023-01-20 00:13:59', '2023-01-20 00:13:59'),
(2, 'tet23', 'tet2', 'tet2', 0, '2023-01-20 07:06:13', '2023-01-20 07:06:28'),
(3, 'test', 'test2', 'test', 1, '2023-01-20 09:03:35', '2023-01-20 09:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `multiple`
--

CREATE TABLE `multiple` (
  `idMultiple` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple`
--

INSERT INTO `multiple` (`idMultiple`, `text`, `number`, `visible`, `dateMake`, `dateUpdate`) VALUES
(1, 'test2', 2, 0, '2023-01-20 08:45:29', '2023-01-20 08:46:17'),
(2, 'test44', 54, 1, '2023-01-20 08:46:13', '2023-01-20 09:00:54'),
(3, 'test', 213, 1, '2023-01-20 09:05:11', '2023-01-20 09:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `single`
--

CREATE TABLE `single` (
  `idSingle` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `select2` text DEFAULT NULL,
  `textarea` text DEFAULT NULL,
  `mask` text DEFAULT NULL,
  `radio` text DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single`
--

INSERT INTO `single` (`idSingle`, `text`, `number`, `select2`, `textarea`, `mask`, `radio`, `visible`, `dateMake`, `dateUpdate`) VALUES
(1, 'test2', 2, 'Alaska', 'test2', '22/02/2222', 'radio3', 0, '2023-01-20 08:07:03', '2023-01-20 08:18:27'),
(2, 'tes', 2, 'Alaska', '312', '22/02/2222', 'radio2', 1, '2023-01-20 08:18:38', '2023-01-20 08:18:38'),
(3, 'res', 2, 'California', 'resres', '23/03/3222', 'radio3', 1, '2023-01-20 09:04:23', '2023-01-20 09:04:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_multiple`
--
ALTER TABLE `detail_multiple`
  ADD PRIMARY KEY (`idDetailMultiple`),
  ADD KEY `idMultiple` (`idMultiple`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indexes for table `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`idMultiple`);

--
-- Indexes for table `single`
--
ALTER TABLE `single`
  ADD PRIMARY KEY (`idSingle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_multiple`
--
ALTER TABLE `detail_multiple`
  MODIFY `idDetailMultiple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `multiple`
--
ALTER TABLE `multiple`
  MODIFY `idMultiple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `single`
--
ALTER TABLE `single`
  MODIFY `idSingle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
