-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 10:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtechprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `theme_name` varchar(20) NOT NULL,
  `Function_name` varchar(20) NOT NULL,
  `Cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL,
  `placeid` int(100) NOT NULL,
  `photographer` varchar(20) NOT NULL DEFAULT 'Not Assign',
  `catering` varchar(20) NOT NULL DEFAULT 'Not Assign'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `cid`, `date`, `placeid`, `photographer`, `catering`) VALUES
(1, 1, '2020-04-02', 2, 'Paul', 'Efty');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `cid` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `exp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`cid`, `name`, `age`, `exp`) VALUES
(1, 'ifty', '25', '02'),
(2, 'efty', '20', '05');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contactNo` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `email`, `contactNo`, `eventname`) VALUES
(1, 'Mr.Karim Hasan ', 'karim@gmail.com', 1234567, 'Wedding Reception');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `BG` varchar(5) NOT NULL,
  `JoiningDate` date NOT NULL,
  `position` varchar(20) NOT NULL,
  `status` int(2) NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `username`, `password`, `gender`, `email`, `DOB`, `BG`, `JoiningDate`, `position`, `status`, `address`) VALUES
(2, 'Efty', '1234', 'male', 'Efty@gmail.com', '0000-00-00', '', '0000-00-00', 'Catering', 0, 'Dhaka'),
(3, 'Pobitro', '1234', 'male', 'N@gmail.com', '0000-00-00', '', '0000-00-00', 'Photographer', 0, 'Dhaka'),
(72, 'Rahik', '1234', 'male', 'rahikuljannat@gmail.com', 'B+', 'B+', '0000-00-00', 'Admin', 0, 'South Nataipara'),
(73, 'Nahid', '', 'male', 'nahid@gmail.com', 'B+', 'B+', '0000-00-00', 'Designer', 0, 'kkkkkkkk'),
(74, 'Rahik', '', 'male', 'rahikuljannat3022@outlook.com', 'A+', 'A+', '0000-00-00', 'Photographer', 0, 'South Nataipara'),
(75, 'Rahik', '', 'male', 'rahikuljannat3022@outlook.com', 'A+', 'A+', '0000-00-00', 'Photographer', 0, 'South Nataipara'),
(77, 'Rahik', '22222222', 'male', 'adittyarahman96@gmail.com', 'A-', 'A-', '0000-00-00', 'Cook', 0, 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `eventplace`
--

CREATE TABLE `eventplace` (
  `eventid` int(10) NOT NULL,
  `placeid` int(10) NOT NULL,
  `placeName` varchar(50) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventplace`
--

INSERT INTO `eventplace` (`eventid`, `placeid`, `placeName`, `cost`) VALUES
(1, 1, 'Grand Ballroom, Pan Pacific Sonargaon', 100000),
(1, 2, 'Celebration Hall, Dhaka Regency Hotel and Resort', 150000),
(1, 3, 'La Vita Banquet Hall, Lakeshore Hotel', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(10) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `functionName` varchar(50) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `eventname`, `functionName`, `cost`) VALUES
(4, 'Wedding', 'Royal Wedding planning at ', 100000),
(17, 'Wedding', 'Reception', 80000),
(29, 'Birthday', 'Birthday-party Themes', 50000),
(32, 'Birthday', 'Birthday Mascot or Doll', 30000),
(33, 'Picnic', 'Historical place visit organize', 60000),
(34, 'Picnic', 'Sent Martin Tour', 50000),
(35, '', '', 20000),
(36, '', '', 20000),
(37, '', '', 22222),
(38, '', '', 233333),
(39, 'qwq', 'qwq', 2323),
(40, 'qwq', 'qwq', 222222);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `eid` int(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `eid`, `password`) VALUES
(1, 1, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pakage`
--

CREATE TABLE `pakage` (
  `pakageid` int(11) NOT NULL,
  `eventid` int(10) NOT NULL,
  `eventname` varchar(20) NOT NULL,
  `pakageCost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakage`
--

INSERT INTO `pakage` (`pakageid`, `eventid`, `eventname`, `pakageCost`) VALUES
(1, 1, 'Wedding', 100000),
(2, 2, 'Reception', 100000),
(3, 3, 'Picnic', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `Name` varchar(10) NOT NULL,
  `Id` int(10) NOT NULL,
  `Degignation` varchar(10) NOT NULL,
  `Address` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`Name`, `Id`, `Degignation`, `Address`) VALUES
('Kumar', 2, 'Cameraman', 'Dhaka'),
('Pobitro', 10, 'Photograph', 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectid` int(10) NOT NULL,
  `themename` varchar(20) NOT NULL,
  `functionName` varchar(20) NOT NULL,
  `cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectid`, `themename`, `functionName`, `cost`) VALUES
(1, 'Modern Wedding', 'Wedding', '200000'),
(2, 'Vintage Style ', 'Birthday Party', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `eid` int(10) NOT NULL,
  `ename` varchar(10) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`eid`, `ename`, `salary`) VALUES
(1, 'Manager', '20000'),
(2, 'Photograph', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `eventplace`
--
ALTER TABLE `eventplace`
  ADD PRIMARY KEY (`placeid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakage`
--
ALTER TABLE `pakage`
  ADD PRIMARY KEY (`pakageid`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `eventplace`
--
ALTER TABLE `eventplace`
  MODIFY `placeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pakage`
--
ALTER TABLE `pakage`
  MODIFY `pakageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
