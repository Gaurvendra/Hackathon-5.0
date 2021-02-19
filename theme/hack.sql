-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 10:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `theme` varchar(32) NOT NULL,
  `counter` int(11) UNSIGNED NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`theme`, `counter`) VALUES
('a1', 0),
('a2', 1),
('a3', 3),
('a4', 4),
('a5', 5),
('b1', 6),
('b2', 7),
('b3', 8),
('b4', 9),
('b5', 10),
('b6', 11);

-- --------------------------------------------------------

--
-- Table structure for table `teamdetails`
--

CREATE TABLE `teamdetails` (
  `teamid` varchar(4) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(34) DEFAULT NULL,
  `otp` int(10) NOT NULL,
  `theme` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teamdetails`
--

INSERT INTO `teamdetails` (`teamid`, `name`, `email`, `otp`, `theme`) VALUES
('T000', 'test', 'test@csi.com', 123456, 'Challenges in Agriculture Sector'),
('T001', 'TEST2', 'abc.xom', 12, 'Indian Combat and Defence'),
('T003', 'Gaurvendra', 'dfvdfvdfvdfvdfvdfv', 1234, 'Challenges in Agriculture Sector'),
('T004', 'hbserf', 'sshdfhdsfh', 124563, 'Challenges in Agriculture Sector'),
('T005', 'sdfdvsd', 'fdgs', 1234, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`theme`);

--
-- Indexes for table `teamdetails`
--
ALTER TABLE `teamdetails`
  ADD PRIMARY KEY (`teamid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
