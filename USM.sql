-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 10:17 AM
-- Server version: 5.5.33
-- PHP Version: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `USM`
--

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE IF NOT EXISTS `Course` (
  `CourseCode` varchar(8) NOT NULL,
  `RoomID` int(11) NOT NULL,
  `Day` varchar(12) NOT NULL,
  `Start` time NOT NULL,
  `End` time NOT NULL,
  PRIMARY KEY (`RoomID`,`Day`,`Start`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Course Information Table';

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`CourseCode`, `RoomID`, `Day`, `Start`, `End`) VALUES
('COMS3200', 200, 'Monday', '09:00:00', '12:00:00'),
('CSSE2310', 200, 'Wednesday', '12:00:00', '15:00:00'),
('COMP3506', 301, 'Friday', '13:00:00', '16:00:00'),
('INFS2200', 302, 'Thursday', '10:00:00', '12:00:00'),
('COMS3200', 302, 'Wednesday', '12:00:00', '13:00:00'),
('DECO3800', 316, 'Tuesday', '12:00:00', '04:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
  `ReviewID` int(11) NOT NULL AUTO_INCREMENT,
  `RoomNumber` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `T1` int(1) NOT NULL DEFAULT '0',
  `T2` int(1) NOT NULL DEFAULT '0',
  `T3` int(1) NOT NULL DEFAULT '0',
  `T4` int(1) NOT NULL DEFAULT '0',
  `T5` int(1) NOT NULL DEFAULT '0',
  `L1` int(1) NOT NULL DEFAULT '0',
  `L2` int(1) NOT NULL DEFAULT '0',
  `L3` int(1) NOT NULL DEFAULT '0',
  `L4` int(1) NOT NULL DEFAULT '0',
  `L5` int(1) NOT NULL DEFAULT '0',
  `L6` int(1) NOT NULL DEFAULT '0',
  `N1` int(1) NOT NULL DEFAULT '0',
  `N2` int(1) NOT NULL DEFAULT '0',
  `N3` int(1) NOT NULL DEFAULT '0',
  `Comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ReviewID`),
  KEY `ForeignKey` (`RoomNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`ReviewID`, `RoomNumber`, `Date`, `Time`, `T1`, `T2`, `T3`, `T4`, `T5`, `L1`, `L2`, `L3`, `L4`, `L5`, `L6`, `N1`, `N2`, `N3`, `Comment`) VALUES
(1, 200, '2014-06-02', '2014-06-01 09:48:06', 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, -21, 0, 'Chilly');

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE IF NOT EXISTS `Room` (
  `RoomID` int(11) NOT NULL,
  `MainUse` text NOT NULL,
  `Description` text NOT NULL,
  `MaxOccupants` int(11) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Room Information Stored here to be retrieved';

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`RoomID`, `MainUse`, `Description`, `MaxOccupants`) VALUES
(200, 'Lecture Theatre', 'Lecture Theatre', 200),
(301, 'Learning', 'Learning', 30),
(302, 'Learning', 'Learning', 29),
(316, 'Learning', 'Learning', 30),
(317, 'Learning', 'Learning', 30);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `Room` (`RoomID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `Reviews_ibfk_1` FOREIGN KEY (`RoomNumber`) REFERENCES `Room` (`RoomID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
