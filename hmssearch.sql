-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 10:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmssearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `amb`
--

CREATE TABLE `amb` (
  `id` int(11) NOT NULL,
  `ccc_Name` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `total` int(7) NOT NULL,
  `ta` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amb`
--

INSERT INTO `amb` (`id`, `ccc_Name`, `contact`, `total`, `ta`) VALUES
(30, 'Rajiv Gandhi hospital', '86968303644', 50, 12),
(31, 'sujata', '8698303644', 12, 10),
(32, 'sujata', '8698303644', 12, 10),
(33, 'aa', '5454', 64, 54);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `id` int(11) NOT NULL,
  `ccc_Name` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `total` int(7) NOT NULL,
  `ta` int(7) NOT NULL,
  `covid` int(7) NOT NULL,
  `ca` int(7) NOT NULL,
  `icu` int(7) NOT NULL,
  `icua` int(11) NOT NULL,
  `gen` int(7) NOT NULL,
  `ga` int(7) NOT NULL,
  `o2` int(7) NOT NULL,
  `oa` int(7) NOT NULL,
  `venty` int(7) NOT NULL,
  `va` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `ccc_Name`, `contact`, `total`, `ta`, `covid`, `ca`, `icu`, `icua`, `gen`, `ga`, `o2`, `oa`, `venty`, `va`) VALUES
(28, 'asdfgh', '5454545454', 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54),
(29, 'sa', 's5654', 45, 4, 54, 4, 54, 5, 54, 54, 54, 54, 54, 54),
(30, 'sdf', '554', 54, 45, 45, 54, 54, 54, 54, 54, 545, 454, 54, 54),
(31, 'gg', '4545', 445, 454, 45, 454, 54, 55, 45, 454, 4, 545, 545, 454),
(32, 'jbhgkj', '335', 3, 0, 55, 5, 55, 0, 5, 0, 0, 0, 0, 0),
(33, 'jkjjkg', '5445', 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 5),
(34, 'jhj', '545', 5, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `apos` int(7) NOT NULL,
  `aneg` int(7) NOT NULL,
  `bpos` int(7) NOT NULL,
  `bneg` int(7) NOT NULL,
  `abpos` int(7) NOT NULL,
  `abneg` int(11) NOT NULL,
  `opos` int(7) NOT NULL,
  `oneg` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `bankName`, `contact`, `apos`, `aneg`, `bpos`, `bneg`, `abpos`, `abneg`, `opos`, `oneg`) VALUES
(27, 'suyash blood bank', '8698303644', 45, 41, 45, 41, 45, 41, 45, 41),
(28, 'yogi blood bank', '8698303644', 14, 15, 14, 12, 14, 14, 15, 15),
(29, 'sahyadri blood bank', '8698303644', 50, 20, 54, 52, 11, 22, 0, 12),
(30, 'sahyadri blood bank', '8698303644', 50, 20, 54, 52, 11, 22, 0, 12),
(31, 'sahyadri blood bank', '8698303644', 50, 20, 54, 52, 11, 22, 0, 12),
(32, 'pawar hospital', '9989874554', 21, 12, 45, 45, 54, 45, 45, 45),
(33, 'jbj355', '535', 5, 545, 51, 2, 2, 2, 2, 2),
(34, 'dsd', '454', 44, 54, 45, 4, 12, 12, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(50) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'GGSP', 'admin', 8979555556, 'ggsp@gmail.com', '4310b474f8424f6c50060977e893235a', '2019-11-29 12:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `Category`, `CreationDate`) VALUES
(42, 'Government Hopital', '2021-01-15 09:16:23'),
(43, 'Dental Hospital', '2021-01-15 09:16:34'),
(44, ' Multispeciality Hospital', '2021-01-15 09:16:42'),
(45, 'Neurology Clinic', '2021-01-15 09:16:53'),
(46, 'Children\'s Hospital ', '2021-01-15 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(50) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'hms', 'Welsome||||', NULL, NULL, '2021-01-15 12:41:22'),
(2, 'contactus', 'Contact Us', '04, Patil omplex, Sindhi Colony, Upnagar, Nashik, Maharashtra (IN) 422006', 'contact@hospital.com', 8698303644, '2021-01-08 12:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblperson`
--

CREATE TABLE `tblperson` (
  `ID` int(10) NOT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Picture` varchar(200) DEFAULT NULL,
  `Picture1` varchar(255) NOT NULL,
  `Picture2` varchar(255) NOT NULL,
  `Picture3` varchar(255) NOT NULL,
  `vdo` varchar(1000) NOT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblperson`
--

INSERT INTO `tblperson` (`ID`, `Category`, `Name`, `Picture`, `Picture1`, `Picture2`, `Picture3`, `vdo`, `MobileNumber`, `Address`, `City`, `RegDate`) VALUES
(45, 'Government Hopital', 'Civil Hospital, Nashik', '1e6ae4ada992769567b71815f124fac51617256271.jpg', '', '', '', '', 8698303644, 'Near New CBS, Nashik', 'Nashik', '2021-04-01 05:51:11'),
(46, 'Dental Hospital', 'spm Dental Hospital', 'b9fb9d37bdf15a699bc071ce49baea531617256317.jpg', '', '', '', '', 8698303644, 'nashik', 'Nashik', '2021-04-01 05:51:57'),
(47, ' Multispeciality Hospital', 'sujata birla hospita;', '1e6ae4ada992769567b71815f124fac51617262178.jpg', '', '', '', '', 8698303644, 'nashik', 'nashik', '2021-04-01 07:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblshop`
--

CREATE TABLE `tblshop` (
  `ID` int(10) NOT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Picture` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Mobile` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `Name`, `Email`, `Username`, `password`, `Mobile`) VALUES
(1, 'yogesh chitte', 'yogesh@gmail.com', 'yogesh', 'yogesh123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(21) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amb`
--
ALTER TABLE `amb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category` (`Category`),
  ADD KEY `CreationDate` (`CreationDate`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblperson`
--
ALTER TABLE `tblperson`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category` (`Category`(191)),
  ADD KEY `Category_2` (`Category`(191));

--
-- Indexes for table `tblshop`
--
ALTER TABLE `tblshop`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category` (`Category`(191)),
  ADD KEY `Category_2` (`Category`(191));

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amb`
--
ALTER TABLE `amb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblperson`
--
ALTER TABLE `tblperson`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblshop`
--
ALTER TABLE `tblshop`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
