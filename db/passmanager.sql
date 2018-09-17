-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 16, 2018 at 12:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `C_ID` int(5) NOT NULL,
  `C_NAME` char(20) NOT NULL,
  `C_ADDRESS` varchar(40) NOT NULL,
  `C_CONTACT_NUMBER` int(10) NOT NULL,
  `C_EMAIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`C_ID`, `C_NAME`, `C_ADDRESS`, `C_CONTACT_NUMBER`, `C_EMAIL`) VALUES
(1, 'google', '1600 Amphitheatre Parkway,Mountain View,', 2147483647, 'google@gmail.org.com'),
(2, 'amazon', 'Amazon.com, Inc. 410 Terry Ave N Seattle', 1830009009, 'amazon@org.com');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `D_ID` int(5) NOT NULL,
  `OS` char(20) DEFAULT NULL,
  `BROWSER_NAME` char(10) DEFAULT NULL,
  `BROWSER_VERSION` int(5) DEFAULT NULL,
  `IP_ADDRESS` int(15) NOT NULL,
  `USER_ID` int(5) DEFAULT NULL,
  `S_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`D_ID`, `OS`, `BROWSER_NAME`, `BROWSER_VERSION`, `IP_ADDRESS`, `USER_ID`, `S_ID`) VALUES
(1, 'linux', 'firefox', 405, 17242542, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_account`
--

CREATE TABLE `master_account` (
  `M_ID` int(5) NOT NULL,
  `M_NAME` char(20) NOT NULL,
  `M_USERNAME` char(20) NOT NULL,
  `M_PASSWORD` varchar(30) NOT NULL,
  `C_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_account`
--

INSERT INTO `master_account` (`M_ID`, `M_NAME`, `M_USERNAME`, `M_PASSWORD`, `C_ID`) VALUES
(1, 'Arbaz', 'Arbaz Shaikh', 'Arbaz@12Shaikh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_account`
--

CREATE TABLE `site_account` (
  `S_ID` int(5) NOT NULL,
  `USERNAME` char(20) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `WEBSITE_NAME` char(40) DEFAULT NULL,
  `WEBSITE_URL` varchar(40) NOT NULL,
  `USER_ID` int(5) DEFAULT NULL,
  `M_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_account`
--

INSERT INTO `site_account` (`S_ID`, `USERNAME`, `PASSWORD`, `WEBSITE_NAME`, `WEBSITE_URL`, `USER_ID`, `M_ID`) VALUES
(1, 'Arbazsk', 'arbaz12345', 'codeAcedemy', 'www.codeAcedemy.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(5) NOT NULL,
  `UNAME` char(20) NOT NULL,
  `UPHONE` int(10) NOT NULL,
  `UEMAIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `UNAME`, `UPHONE`, `UEMAIL`) VALUES
(1, 'ARBAZ', 1234567890, 'ARBAZ123@GMAIL.COM'),
(2, 'SOHAIL', 2147483647, 'SOHAIL456@GMAIL.COM'),
(3, 'REHAN', 1336896545, 'REHAN3259@GMAIL.COM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`D_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Indexes for table `master_account`
--
ALTER TABLE `master_account`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `site_account`
--
ALTER TABLE `site_account`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `C_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `D_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_account`
--
ALTER TABLE `master_account`
  MODIFY `M_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_account`
--
ALTER TABLE `site_account`
  MODIFY `S_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `device_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`),
  ADD CONSTRAINT `device_ibfk_2` FOREIGN KEY (`S_ID`) REFERENCES `site_account` (`S_ID`);

--
-- Constraints for table `master_account`
--
ALTER TABLE `master_account`
  ADD CONSTRAINT `master_account_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `company` (`C_ID`);

--
-- Constraints for table `site_account`
--
ALTER TABLE `site_account`
  ADD CONSTRAINT `site_account_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`),
  ADD CONSTRAINT `site_account_ibfk_2` FOREIGN KEY (`M_ID`) REFERENCES `master_account` (`M_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
