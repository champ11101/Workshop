-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 12:07 PM
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

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`username`, `IP_address`) VALUES
('james', '10.70.19.36'),
('mint', '10.70.60.201'),
('toomtam', '10.73.18.236');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`, `IP_address`) VALUES
(001, 'champ', '1234', 'Chalit Wangvorapinyo', 'USER', '10.70.77.161');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL,
  `recipients` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `recipients`, `message`, `sender`) VALUES
(1, 'champ', 'Hi', 'toom'),
(2, 'champ', '', 'toom'),
(3, 'champ', '', 'toom'),
(4, 'champ', 'Hello', 'toom'),
(5, 'champ', 'Helloooooo', 'toom'),
(6, 'champ', 'สวัสดีจ๊ะ มาทำไรกันหยอ เหอ\r\n5555\r\nหนึ่งสองสามสี่\r\n\r\n\r\n\r\n555', 'toom'),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, 'champ', 'k à¸™à¸²à¸²', 'Jame'),
(14, 'champ', 'kkk', 'Jame'),
(15, 'champ', 'ตามนั้น', 'Jame'),
(16, 'champ', 'Hello 11', 'toom'),
(17, 'champ', 'Hello12', 'toom'),
(18, 'champ', 'Hello13', 'toom');

-- --------------------------------------------------------

--
-- Table structure for table `send_message`
--

CREATE TABLE IF NOT EXISTS `send_message` (
  `ID` int(3) NOT NULL,
  `send_to` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(20) NOT NULL DEFAULT 'champ',
  `status` enum('true','false') NOT NULL DEFAULT 'false' COMMENT 'sending status'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_message`
--

INSERT INTO `send_message` (`ID`, `send_to`, `message`, `sender`, `status`) VALUES
(1, 'mint', '555555555555555555555555555\r\n', 'champ', 'false'),
(2, 'james', 'แนรแฟ้สหรกิอฟ้าิกผปแสาิอบนไีิอสผปาแิอวฟไาืดหกวส่ิ วฟหกืแงสืฟหกงรแื ฟนวหกดืแสหนกยปอทงหกนยดวาปแอบไพดหวส่อไืว', 'champ', 'false'),
(3, 'mint', 'vsfdgvsthbdfgh', 'champ', 'false'),
(4, 'james', 'vdzgcvkjhbflvkxh982347523', 'champ', 'false'),
(5, 'toomtam', 'kczvygldhfg', 'champ', 'false'),
(6, 'mint', 'afgdhtjfuyfghfdsaretyfgfd', 'champ', 'false'),
(7, 'toomtam', 'sdfbrshdfg', 'champ', 'false'),
(8, 'mint', 'nfgihk,xghnxgf', 'champ', 'false'),
(9, 'james', 'poqurfgusgjgcvjhm', 'champ', 'false');

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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `send_message`
--
ALTER TABLE `send_message`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `send_message`
--
ALTER TABLE `send_message`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
