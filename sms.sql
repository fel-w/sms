-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2018 at 06:09 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

DROP TABLE IF EXISTS `accountant`;
CREATE TABLE IF NOT EXISTS `accountant` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`Email`, `Password`) VALUES
('nicokwizera@gmail.com', 'nicholas1234');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

DROP TABLE IF EXISTS `biodata`;
CREATE TABLE IF NOT EXISTS `biodata` (
  `Surname` text NOT NULL,
  `Othernames` text NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Religion` text NOT NULL,
  `Gender` text NOT NULL,
  `Nationality` text NOT NULL,
  `Maritalstatus` text NOT NULL,
  `Residence` text NOT NULL,
  `Name` text NOT NULL,
  `EmailAddress` varchar(40) NOT NULL,
  `Relationship` text NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `Placeofresidence` text NOT NULL,
  `referenceNo` int(25) NOT NULL AUTO_INCREMENT,
  `Courses` varchar(100) NOT NULL,
  `reference` varchar(30) NOT NULL DEFAULT 'sms/',
  PRIMARY KEY (`referenceNo`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`Surname`, `Othernames`, `MobileNumber`, `Email`, `Dateofbirth`, `Religion`, `Gender`, `Nationality`, `Maritalstatus`, `Residence`, `Name`, `EmailAddress`, `Relationship`, `MobileNo`, `Placeofresidence`, `referenceNo`, `Courses`, `reference`) VALUES
('kaskdkk', 'klkeioioe', '39389838377', 'kaamasu@gmail.com', '2018-04-10', 'jksdkj', 'male', 'mdflkkl', 'sdkdsklsd', 'jdkjlfkjfk', 'kvkkfjlkljfjkdjk', 'kakmasu@gmail.com', 'dsknkdfkjldf', 'kdfkgjkwrk', 'jdkjlfkjfk', 47, 'MASTERS OF IS', 'sms/'),
('kaskdkk', 'klkeioioe', '39389838377', 'kaamasu@gmail.com', '2018-04-10', 'jksdkj', 'male', 'mdflkkl', 'sdkdsklsd', 'jdkjlfkjfk', 'kvkkfjlkljfjkdjk', 'kakmasu@gmail.com', 'dsknkdfkjldf', 'kdfkgjkwrk', 'jdkjlfkjfk', 48, 'MASTERS OF IS', 'sms/');

-- --------------------------------------------------------

--
-- Table structure for table `courseunits`
--

DROP TABLE IF EXISTS `courseunits`;
CREATE TABLE IF NOT EXISTS `courseunits` (
  `Coursecode` varchar(100) NOT NULL,
  `Coursename` varchar(100) NOT NULL,
  `Program` varchar(100) NOT NULL,
  `id` int(22) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseunits`
--

INSERT INTO `courseunits` (`Coursecode`, `Coursename`, `Program`, `id`) VALUES
('CS 505', 'Advanced Programming', 'Masters of Computing ', 1),
('CS 506', 'Contemporary Issues in Computing', 'Masters of Computing ', 2),
('CS 507', 'Machine Learning', 'Masters of Computing', 3),
('TM 500', 'Research Methods ', 'Masters of Computing', 4),
('SE 500', 'Software Design & Modeling', 'Masters of Computing', 5),
('IT 501', 'Electronic commerce Technologies', 'Masters of IT', 6),
('CS 508', 'Cell phone Applications Development', 'Masters of IT', 7),
('CS 509', 'Mobile Cloud Computing', 'Masters of IT', 8),
('CS 510', 'Cryptosystems', 'Masters of IT', 9),
('NW 500', 'Unified Communications Design', 'Masters of IT', 10),
('CS 600', 'Advanced Programming', 'Masters of IS', 11),
('CS 601', 'Contemporary Issues in computing', 'Masters of IS', 12),
('CS 602', 'Machine Learning', 'Masters of IS', 13),
('TM 500', 'Research Methods', 'Masters of IS', 14),
('SE 600', 'Software Design & Modeling', 'Masters of IS', 15),
('CS 505', 'Advanced Programming', 'Diploma Software Engineering', 16),
('CS 506', 'Contemporary Issues in Computing', 'Diploma Software Engineering', 17),
('CS 511', 'Information Security', 'Diploma Software Engineering', 18),
('TM 500', 'Research Methods', 'Diploma Software Engineering', 19);

-- --------------------------------------------------------

--
-- Table structure for table `diploma_softawre_engineering`
--

DROP TABLE IF EXISTS `diploma_softawre_engineering`;
CREATE TABLE IF NOT EXISTS `diploma_softawre_engineering` (
  `Othernames` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `RegistrationNo` varchar(100) NOT NULL,
  `Payment` int(11) NOT NULL,
  `CS 505 Advanced Programming` varchar(50) NOT NULL,
  `CS 506 Contemporary Issues in Computing` varchar(50) NOT NULL,
  `CS 511 Information Security` varchar(50) NOT NULL,
  `TM 500 Research Methods` varchar(50) NOT NULL,
  PRIMARY KEY (`RegistrationNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diploma_softawre_engineering`
--

INSERT INTO `diploma_softawre_engineering` (`Othernames`, `LastName`, `RegistrationNo`, `Payment`, `CS 505 Advanced Programming`, `CS 506 Contemporary Issues in Computing`, `CS 511 Information Security`, `TM 500 Research Methods`) VALUES
('Felix', 'Wangota', '17/U/5555/PS', 700000, '89%', '80%', '78%', '75%');

-- --------------------------------------------------------

--
-- Table structure for table `masters_of_computing`
--

DROP TABLE IF EXISTS `masters_of_computing`;
CREATE TABLE IF NOT EXISTS `masters_of_computing` (
  `OtherNames` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `RegistrationNo` varchar(100) NOT NULL,
  `Payment` int(11) NOT NULL,
  `CS 505 Advanced Programming` varchar(20) NOT NULL,
  `CS 506 Contemporary Issues in Computing` varchar(20) NOT NULL DEFAULT '%',
  `CS 507 Machine Learning` varchar(20) NOT NULL DEFAULT '%',
  `TM 500 Research Methods` varchar(20) NOT NULL DEFAULT '%',
  `SE 500 Software Design & Modeling` varchar(20) NOT NULL DEFAULT '%',
  PRIMARY KEY (`RegistrationNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masters_of_computing`
--

INSERT INTO `masters_of_computing` (`OtherNames`, `LastName`, `RegistrationNo`, `Payment`, `CS 505 Advanced Programming`, `CS 506 Contemporary Issues in Computing`, `CS 507 Machine Learning`, `TM 500 Research Methods`, `SE 500 Software Design & Modeling`) VALUES
('Nicholas', 'Kwizera', '17/U/5536/PS', 900000, '80%', '70%', '75%', '79%', '80%'),
('Mujaidu', 'Amutuhaire', '17/U/1143/PS', 950000, '88%', '76%', '70%', '72%', '87%');

-- --------------------------------------------------------

--
-- Table structure for table `masters_of_is`
--

DROP TABLE IF EXISTS `masters_of_is`;
CREATE TABLE IF NOT EXISTS `masters_of_is` (
  `LastName` varchar(20) NOT NULL,
  `OtherNames` varchar(20) DEFAULT NULL,
  `RegistrationNo` varchar(100) NOT NULL,
  `Payment` int(11) NOT NULL,
  `CS 600 Advanced Programming` varchar(10) NOT NULL,
  `CS 601 Contemporary Issues in Computing` varchar(11) NOT NULL,
  `CS 602 Machine Learning` varchar(11) NOT NULL,
  `TM 500 Research Methods` varchar(11) NOT NULL,
  `SE 600 Software Design & Modeling` varchar(11) NOT NULL,
  PRIMARY KEY (`RegistrationNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masters_of_is`
--

INSERT INTO `masters_of_is` (`LastName`, `OtherNames`, `RegistrationNo`, `Payment`, `CS 600 Advanced Programming`, `CS 601 Contemporary Issues in Computing`, `CS 602 Machine Learning`, `TM 500 Research Methods`, `SE 600 Software Design & Modeling`) VALUES
('Kamasu', 'Paul', '17/U/1533/PS', 1000000, '85', '82', '80', '70', '75');

-- --------------------------------------------------------

--
-- Table structure for table `masters_of_it`
--

DROP TABLE IF EXISTS `masters_of_it`;
CREATE TABLE IF NOT EXISTS `masters_of_it` (
  `LastName` varchar(20) NOT NULL,
  `OtherNames` varchar(20) NOT NULL,
  `RegistrationNo` varchar(100) NOT NULL,
  `Payment` int(11) NOT NULL,
  `IT 501 Electronic Commerce Technologies` varchar(10) NOT NULL,
  `CS 508 Cell phone Applications Development` varchar(10) NOT NULL,
  `CS 509 Mobile Cloud Computing` varchar(10) NOT NULL,
  `NW 500 Unified Communications Design` varchar(10) DEFAULT NULL,
  `CS 510 Cryptosystems` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`RegistrationNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masters_of_it`
--

INSERT INTO `masters_of_it` (`LastName`, `OtherNames`, `RegistrationNo`, `Payment`, `IT 501 Electronic Commerce Technologies`, `CS 508 Cell phone Applications Development`, `CS 509 Mobile Cloud Computing`, `NW 500 Unified Communications Design`, `CS 510 Cryptosystems`) VALUES
('Kiyingi', 'Aloysious', '17/U/8976/PS', 1000000, '86', '80', '70', '74', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registeredstudents`
--

DROP TABLE IF EXISTS `registeredstudents`;
CREATE TABLE IF NOT EXISTS `registeredstudents` (
  `Last Name` varchar(50) NOT NULL,
  `Other Names` varchar(20) NOT NULL,
  `Number of course units` varchar(7) NOT NULL,
  `Program` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

DROP TABLE IF EXISTS `registrar`;
CREATE TABLE IF NOT EXISTS `registrar` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`id`, `Email`, `password`) VALUES
(9, 'nicokwizera@gmail.com', 'nicholas1000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `RegNo` varchar(50) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `RegNo`, `courseName`) VALUES
(9, '20', 'IT501:Electronic Commerce Technologies'),
(10, '20', 'CS602:Machine Learning'),
(11, '20', 'CS508:Cell Phone Applications Development'),
(12, '20', 'CS510:Cryptosystems'),
(13, '20', 'IT501:Electronic Commerce Technologies'),
(14, '20', 'CS602:Machine Learning'),
(15, '20', 'CS508:Cell Phone Applications Development'),
(16, '20', 'CS510:Cryptosystems'),
(17, '20', 'Masters of Computing'),
(18, '20', 'Masters of Computing'),
(19, '20', 'Masters of Computing'),
(20, '20', 'Masters of Computing'),
(21, '56', 'Masters of IT'),
(22, '56', 'Masters of IT'),
(23, '56', 'Masters of IT'),
(24, '56', 'Masters of IT'),
(25, '93', 'TM500:Research Methods'),
(26, '93', 'CS508:Cell Phone Applications Development'),
(27, '93', 'CS508:Cell Phone Applications Development'),
(28, '93', 'CS600:Advanced Programming'),
(29, '93', 'TM500:Research Methods'),
(30, '93', 'CS508:Cell Phone Applications Development'),
(31, '93', 'CS508:Cell Phone Applications Development'),
(32, '93', 'CS600:Advanced Programming'),
(33, '36', 'Masters of IT'),
(34, '36', 'Masters of IT'),
(35, '36', 'Masters of IT'),
(36, '36', 'Masters of IT'),
(37, '37', 'Masters of IT'),
(38, '37', 'Masters of IT'),
(39, '37', 'Masters of IT'),
(40, '37', 'Masters of IT'),
(41, '37', 'Masters of IT'),
(42, '37', 'Masters of IT'),
(43, '37', 'Masters of IT'),
(44, '37', 'Masters of IT'),
(45, '32', 'TM500:Research Methods'),
(46, '32', 'CS507:Machine Learning'),
(47, '32', 'SE500:Software Design & Modelling'),
(48, '32', 'CS509:Mobile Cloud Computing'),
(49, '34', 'TM500:Research Methods'),
(50, '34', 'TM500:Research Methods'),
(51, '34', 'TM500:Research Methods'),
(52, '34', 'CS505:Advanced Programming'),
(53, '34', 'TM500:Research Methods'),
(54, '34', 'TM500:Research Methods'),
(55, '34', 'TM500:Research Methods'),
(56, '34', 'CS505:Advanced Programming'),
(57, '242', 'none'),
(58, '242', 'CS601:Conteporary Issues in Computing'),
(59, '242', 'CS602:Machine Learning'),
(60, '242', 'SE600:Software Design& Modelling'),
(61, '12', 'none'),
(62, '12', 'CS600:Advanced Programming'),
(63, '12', 'SE600:Software Design& Modelling'),
(64, '12', 'CS602:Machine Learning'),
(65, '444', 'IT501:Electronic Commerce Technologies'),
(66, '444', 'IT501:Electronic Commerce Technologies'),
(67, '444', 'none'),
(68, '444', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `semester_guide`
--

DROP TABLE IF EXISTS `semester_guide`;
CREATE TABLE IF NOT EXISTS `semester_guide` (
  `Date` date NOT NULL,
  `Activity` varchar(50) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_guide`
--

INSERT INTO `semester_guide` (`Date`, `Activity`, `Location`) VALUES
('2018-05-19', 'Openning day of semester', 'Main building'),
('2018-06-25', 'Fist set of tests', 'Lecture rooms'),
('2018-07-02', 'Career guidance', 'Main hall'),
('2018-07-20', 'Second set of tests', 'Lecture rooms'),
('2018-08-24', 'Concluding of semester lectures', 'School'),
('2018-09-03', 'End of Semester exams', 'Lecture rooms'),
('2018-09-22', 'Closing da of the semester', 'Main building');

-- --------------------------------------------------------

--
-- Table structure for table `sudent`
--

DROP TABLE IF EXISTS `sudent`;
CREATE TABLE IF NOT EXISTS `sudent` (
  `RegistrationNo` varchar(100) NOT NULL DEFAULT '17/U/  /PS',
  `Lastname` text NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Profile pic` varchar(20) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Next of kin Name` varchar(20) NOT NULL,
  `Religion` text NOT NULL,
  `Gender` char(10) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Marital Status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sudent`
--

INSERT INTO `sudent` (`RegistrationNo`, `Lastname`, `First Name`, `Profile pic`, `E-mail`, `Next of kin Name`, `Religion`, `Gender`, `Nationality`, `Marital Status`) VALUES
('17/U/5536/PS', 'Kwizera', '', '', '', '', '', '', '', ''),
('17/U/5555/PS', 'Nkusi', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
