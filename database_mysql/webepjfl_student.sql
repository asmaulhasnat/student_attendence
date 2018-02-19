-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2018 at 07:21 AM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webepjfl_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendence`
--

CREATE TABLE IF NOT EXISTS `tbl_attendence` (
  `statid` int(11) NOT NULL AUTO_INCREMENT,
  `satroll` int(11) NOT NULL,
  `attendence` varchar(255) NOT NULL,
  `attendencetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attendenceday` int(11) NOT NULL,
  PRIMARY KEY (`statid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tbl_attendence`
--

INSERT INTO `tbl_attendence` (`statid`, `satroll`, `attendence`, `attendencetime`, `attendenceday`) VALUES
(62, 1, 'present', '2017-03-27 11:00:00', 0),
(63, 2, 'absent', '2017-03-27 11:00:00', 0),
(64, 3, 'present', '2017-03-27 11:00:00', 0),
(65, 4, 'present', '2017-03-27 11:00:00', 0),
(66, 5, 'present', '2017-03-27 11:00:00', 0),
(67, 100, '', '2017-04-15 07:48:09', 0),
(68, 12345, '', '2017-05-15 19:28:21', 0),
(69, 1, 'present', '2017-05-15 07:00:00', 0),
(70, 2, 'absent', '2017-05-15 07:00:00', 0),
(71, 3, 'present', '2017-05-15 07:00:00', 0),
(72, 4, 'present', '2017-05-15 07:00:00', 0),
(73, 5, 'absent', '2017-05-15 07:00:00', 0),
(74, 100, 'absent', '2017-05-15 07:00:00', 0),
(75, 12345, 'present', '2017-05-15 07:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `stname` varchar(255) NOT NULL,
  `stroll` int(11) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stid`, `stname`, `stroll`) VALUES
(1, 'asmaul hasnat', 1),
(2, 'farjana akther', 2),
(3, 'rakib', 3),
(4, 'masruba', 4),
(17, 'farjana hasnat', 5),
(18, 'sumon', 100),
(19, 'emon', 12345);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
