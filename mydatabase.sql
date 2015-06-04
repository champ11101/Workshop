-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2015 at 11:29 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `username` varchar(20) NOT NULL,
  `IP_address` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `incoming_message`
--

CREATE TABLE IF NOT EXISTS `incoming_message` (
  `sender_username` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `UserID` int(3) unsigned zerofill NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER',
  `IP_address` varchar(12) NOT NULL DEFAULT '10.70.77.161'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`, `IP_address`) VALUES
(001, 'champ11101', '1234', 'Chalit Wangvorapinyo', 'USER', '10.70.77.161');

-- --------------------------------------------------------

--
-- Table structure for table `message_offline`
--

CREATE TABLE IF NOT EXISTS `message_offline` (
  `No.` int(3) unsigned zerofill NOT NULL,
  `send_to` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `from_IP` varchar(12) NOT NULL DEFAULT '10.70.77.161'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `message_offline`
--
ALTER TABLE `message_offline`
  ADD PRIMARY KEY (`No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message_offline`
--
ALTER TABLE `message_offline`
  MODIFY `No.` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
