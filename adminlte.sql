-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 07:35 AM
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
-- Table structure for table `detail_master_multiple`
--

CREATE TABLE `detail_master_multiple` (
  `idDetailMasterMultiple` int(11) NOT NULL,
  `idMasterMultiple` int(11) DEFAULT NULL,
  `text` text NOT NULL DEFAULT current_timestamp(),
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `idMaster` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_multiple`
--

CREATE TABLE `master_multiple` (
  `idMasterMultiple` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `single`
--

CREATE TABLE `single` (
  `idSingle` int(11) NOT NULL,
  `idMaster` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `textarea` text DEFAULT NULL,
  `mask` text DEFAULT NULL,
  `radio` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `file` text DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT 1,
  `dateMake` datetime NOT NULL DEFAULT current_timestamp(),
  `dateUpdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_master_multiple`
--
ALTER TABLE `detail_master_multiple`
  ADD PRIMARY KEY (`idDetailMasterMultiple`),
  ADD KEY `idMasterMultiple` (`idMasterMultiple`);

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
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`idMaster`);

--
-- Indexes for table `master_multiple`
--
ALTER TABLE `master_multiple`
  ADD PRIMARY KEY (`idMasterMultiple`);

--
-- Indexes for table `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`idMultiple`);

--
-- Indexes for table `single`
--
ALTER TABLE `single`
  ADD PRIMARY KEY (`idSingle`),
  ADD KEY `idMaster` (`idMaster`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_master_multiple`
--
ALTER TABLE `detail_master_multiple`
  MODIFY `idDetailMasterMultiple` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_multiple`
--
ALTER TABLE `detail_multiple`
  MODIFY `idDetailMultiple` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `idMaster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_multiple`
--
ALTER TABLE `master_multiple`
  MODIFY `idMasterMultiple` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multiple`
--
ALTER TABLE `multiple`
  MODIFY `idMultiple` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `single`
--
ALTER TABLE `single`
  MODIFY `idSingle` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
