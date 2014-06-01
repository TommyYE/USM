-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 10:06 AM
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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `Room` (`RoomID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
