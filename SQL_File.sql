-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 04:19 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentiit`
--

-- --------------------------------------------------------

--
-- Table structure for table `endsession`
--

CREATE TABLE IF NOT EXISTS `endsession` (
  `id` varchar(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sessions` varchar(10) NOT NULL,
  `lecname` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `stime` varchar(10) NOT NULL,
  `etime` varchar(10) NOT NULL,
  `note` varchar(300) NOT NULL,
  `task` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `endsession`
--

INSERT INTO `endsession` (`id`, `fname`, `sessions`, `lecname`, `date`, `stime`, `etime`, `note`, `task`) VALUES
('ST01', 'Bruce Wayne', '2', 'Mrs. Harley', '12/04/2017', '12:00 pm', '02:00 pm', 'Well done project.', 'Perform presentation.');

-- --------------------------------------------------------

--
-- Table structure for table `lecsession`
--

CREATE TABLE IF NOT EXISTS `lecsession` (
  `sessions` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lecname` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `stime` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecsession`
--

INSERT INTO `lecsession` (`sessions`, `id`, `fname`, `lecname`, `date`, `stime`) VALUES
(2, 'ST01', 'Bruce Wayne', 'Mrs. Harley', '12/04/2017', '12:00 pm'),
(3, 'ST02', 'Klark Kent', 'Mr. Blue', '17/04/2017', '4:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `office` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`name`, `password`, `office`) VALUES
('Blue', 'blue', 'Computing'),
('Harley', 'harley', 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `password`) VALUES
('ST01', 'Bruce', 'Wayne', 'st01'),
('ST02', 'Klark ', 'Kent', 'st02'),
('ST03', 'Inoj', 'Gamage', 'st03'),
('ST04', 'Luke', 'Skywalker', 'st04'),
('ST05', 'Nadeem', 'Fazloon', 'st05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecsession`
--
ALTER TABLE `lecsession`
  ADD PRIMARY KEY (`sessions`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecsession`
--
ALTER TABLE `lecsession`
  MODIFY `sessions` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
