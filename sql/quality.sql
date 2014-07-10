-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2014 at 09:38 AM
-- Server version: 5.5.35-0+wheezy1
-- PHP Version: 5.3.3-7+squeeze19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users_quality`
--

-- --------------------------------------------------------

--
-- Table structure for table `pairings`
--

CREATE TABLE IF NOT EXISTS `pairings` (
  `Pairing_id` int(11) NOT NULL AUTO_INCREMENT,
  `Video_id1` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Video_id2` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Question` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Answer1` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Answer2` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Answer3` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Correct` int(1) NOT NULL,
  PRIMARY KEY (`Pairing_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=127 ;

--
-- Dumping data for table `pairings`
--

INSERT INTO `pairings` (`Pairing_id`, `Video_id1`, `Video_id2`, `Question`, `Answer1`, `Answer2`, `Answer3`, `Correct`) VALUES
(1, 'test1', 'test2', 'What color clothing did the mechanic wear?', 'Blue', 'Red', 'Yellow', 1),
(2, 'test1', 'test2', 'What color clothing did the mechanic wear?', 'Red', 'Yellow', 'Blue', 3),
(3, 'test1', 'test2', 'What color clothing did the mechanic wear?', 'Red', 'Blue', 'Yellow', 2),
(4, 'test1', 'test2', 'What was present in both videos?', 'Vehicles', 'Animals', 'Figurines', 1),
(5, 'test1', 'test2', 'What was present in both videos?', 'Animals', 'Figurines', 'Vehicles', 3),
(6, 'test1', 'test2', 'What was present in both videos?', 'Figurines', 'Vehicles', 'Animals', 2),
(7, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Motorbike', 'Car', 'Truck', 1),
(8, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Car', 'Truck', 'Motorbike', 3),
(9, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Truck', 'Motorbike', 'Car', 2),
(10, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Truck', 'Motorbike', 'Car', 2),
(11, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Motorbike', 'Truck', 'Car', 1),
(12, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Car', 'Truck', 'Motorbike', 3),
(13, 'test1', 'test2', 'What color was the blouse in the middle of the clip?', 'Black', 'Red', 'Blue', 2),
(14, 'test1', 'test2', 'What color was the blouse in the middle of the clip?', 'Red', 'Black', 'Blue', 1),
(15, 'test1', 'test2', 'What color was the blouse in the middle of the clip?', 'Blue', 'Black', 'Red', 3),
(16, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Motorbike', 'Truck', 'Car', 1),
(17, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Car', 'Motorbike', 'Truck', 2),
(18, 'test1', 'test2', 'What kind of vehicle did the person drive?', 'Truck', 'Car', 'Motorbike', 3),
(19, 'test1', 'test2', 'How many videos contained stopping?', '2', '0', '1', 2),
(20, 'test1', 'test2', 'How many videos contained stopping?', '0', '1', '2', 1),
(21, 'test1', 'test2', 'How many videos contained stopping?', '2', '1', '0', 3),
(22, 'test1', 'test2', 'What was visible in both videos?', 'People', 'Telephones', 'Dogs', 1),
(23, 'test1', 'test2', 'What was visible in both videos?', 'Telephones', 'People', 'Dogs', 2),
(24, 'test1', 'test2', 'What was visible in both videos?', 'Dogs', 'Telephones', 'People', 3),
(25, 'test1', 'test2', 'What was shown in the end of one video?', 'Text', 'Woods', 'Airplanes', 1),
(26, 'test1', 'test2', 'What was shown in the end of one video?', 'Woods', 'Text', 'Airplanes', 2),
(27, 'test1', 'test2', 'What was shown in the end of one video?', 'Airplanes', 'Woods', 'Text', 3),
(28, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 2),
(29, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'Sports', 'News', 3),
(30, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 1),
(31, 'test1', 'test2', 'What was shown below the red telephone?', 'Numbers', 'Barcodes', 'Signatures', 1),
(32, 'test1', 'test2', 'What was shown below the red telephone?', 'Signatures', 'Barcodes', 'Numbers', 3),
(33, 'test1', 'test2', 'What was shown below the red telephone?', 'Barcodes', 'Numbers', 'Signatures', 2),
(34, 'test1', 'test2', 'How many of the videos contained stoppings?', '2', '1', '0', 3),
(35, 'test1', 'test2', 'How many of the videos contained stoppings?', '0', '1', '2', 1),
(36, 'test1', 'test2', 'How many of the videos contained stoppings?', '2', '0', '1', 2),
(37, 'test1', 'test2', 'What activity was shown the videos?', 'Swimming', 'Dancing', 'Running', 2),
(38, 'test1', 'test2', 'What activity was shown the videos?', 'Dancing', 'Swimming', 'Running', 1),
(39, 'test1', 'test2', 'What activity was shown the videos?', 'Running', 'Swimming', 'Dancing', 3),
(40, 'test1', 'test2', 'What activity was shown in the videos?', 'Running', 'Fighting', 'Dancing', 3),
(41, 'test1', 'test2', 'What activity was shown in the videos?', 'Dancing', 'Fighting', 'Running', 1),
(42, 'test1', 'test2', 'What activity was shown in the videos?', 'Running', 'Dancing', 'Fighting', 2),
(43, 'test1', 'test2', 'Which activity was shown in both videos?', 'Racing', 'Fighting', 'Dancing', 3),
(44, 'test1', 'test2', 'Which activity was shown in both videos?', 'Racing', 'Dancing', 'Fighting', 2),
(45, 'test1', 'test2', 'Which activity was shown in both videos?', 'Dancing', 'Fighting', 'Racing', 1),
(46, 'test1', 'test2', 'What color clothing did the oldest man wear?', 'Black', 'Red', 'Blue', 1),
(47, 'test1', 'test2', 'What color clothing did the oldest man wear?', 'Red', 'Black', 'Blue', 2),
(48, 'test1', 'test2', 'What color clothing did the oldest man wear?', 'Blue', 'Red', 'Black', 3),
(49, 'test1', 'test2', 'What activity was shown in the videos?', 'Dancing', 'Fighting', 'Swimming', 1),
(50, 'test1', 'test2', 'What activity was shown in the videos?', 'Fighting', 'Dancing', 'Swimming', 2),
(51, 'test1', 'test2', 'What activity was shown in the videos?', 'Swimming', 'Fighting', 'Dancing', 3),
(52, 'test1', 'test2', 'What activity was shown in the videos?', 'Dancing', 'Fighting', 'Racing', 1),
(53, 'test1', 'test2', 'What activity was shown the videos?', 'Fighting', 'Dancing', 'Racing', 2),
(54, 'test1', 'test2', 'What activity was shown the videos?', 'Racing', 'Fighting', 'Dancing', 3),
(55, 'test1', 'test2', 'What was visible in both clips?', 'Car(s)', 'Bike(s)', 'Airplane(s)', 1),
(56, 'test1', 'test2', 'What was visible in both clips?', 'Bike(s)', 'Car(s)', 'Airplane(s)', 2),
(57, 'test1', 'test2', 'What was visible in both clips?', 'Airplane(s)', 'Bike(s)', 'Car(s)', 3),
(58, 'test1', 'test2', 'What kind of car were in the videos?', 'Police Car', 'Ambulance', 'Fire Truck', 1),
(59, 'test1', 'test2', 'What kind of car were in the videos?', 'Ambulance', 'Police Car', 'Fire Truck', 2),
(60, 'test1', 'test2', 'What kind of car were in the videos?', 'Fire Truck', 'Ambulance', 'Police Car', 3),
(61, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Police Car', 'Ambulance', 'Fire Truck', 1),
(62, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Ambulance', 'Police Car', 'Fire Truck', 2),
(63, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Fire Truck', 'Ambulance', 'Police Car', 3),
(64, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Police Car', 'Ambulance', 'Fire Truck', 1),
(65, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Ambulance', 'Police Car', 'Fire Truck', 2),
(66, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Fire Truck', 'Ambulance', 'Police Car', 3),
(67, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Police Car', 'Ambulance', 'Fire Truck', 1),
(68, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Ambulance', 'Police Car', 'Fire Truck', 2),
(69, 'test1', 'test2', 'What kind of vehicle were in the videos?', 'Fire Truck', 'Ambulance', 'Police Car', 3),
(70, 'test1', 'test2', 'What was present in both videos?', 'Car(s)', 'Bike(s)', 'Airplane(s)', 1),
(71, 'test1', 'test2', 'What was present in both videos?', 'Bike(s)', 'Car(s)', 'Airplane(s)', 2),
(72, 'test1', 'test2', 'What was present in both videos?', 'Airplane(s)', 'Bike(s)', 'Car(s)', 3),
(73, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 1),
(74, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 2),
(75, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'News', 'Sports', 3),
(76, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 1),
(77, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 2),
(78, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'News', 'Sports', 3),
(79, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 1),
(80, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 2),
(81, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'News', 'Sports', 3),
(82, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 1),
(83, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 2),
(84, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'News', 'Sports', 3),
(85, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 1),
(86, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 2),
(87, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'News', 'Sports', 3),
(88, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Sports', 'News', 'Movie', 1),
(89, 'test1', 'test2', 'What kind of content was shown in the videos?', 'News', 'Sports', 'Movie', 2),
(90, 'test1', 'test2', 'What kind of content was shown in the videos?', 'Movie', 'News', 'Sports', 3),
(91, 'test1', 'test2', 'What was present in both videos?', 'Pirates', 'Ninjas', 'Robots', 1),
(92, 'test1', 'test2', 'What was present in both videos?', 'Ninjas', 'Pirates', 'Robots', 2),
(93, 'test1', 'test2', 'What was present in both videos?', 'Robots', 'Ninjas', 'Pirates', 3),
(94, 'test1', 'test2', 'What was present in both videos?', 'Pirates', 'Ninjas', 'Robots', 1),
(95, 'test1', 'test2', 'What was present in both videos?', 'Ninjas', 'Pirates', 'Robots', 2),
(96, 'test1', 'test2', 'What was present in both videos?', 'Robots', 'Ninjas', 'Pirates', 3),
(97, 'test1', 'test2', 'What was present in both videos?', 'Pirates', 'Ninjas', 'Robots', 1),
(98, 'test1', 'test2', 'What was present in both videos?', 'Ninjas', 'Pirates', 'Robots', 2),
(99, 'test1', 'test2', 'What was present in both videos?', 'Robots', 'Ninjas', 'Pirates', 3),
(100, 'test1', 'test2', 'What was present in both videos?', 'Pirates', 'Ninjas', 'Robots', 1),
(102, 'test1', 'test2', 'What was present in both videos?', 'Robots', 'Ninjas', 'Pirates', 3),
(101, 'test1', 'test2', 'What was present in both videos?', 'Ninjas', 'Pirates', 'Robots', 2),
(103, 'test1', 'test2', 'What was present in both videos?', 'Pirates', 'Ninjas', 'Robots', 1),
(105, 'test1', 'test2', 'What was present in both videos?', 'Robots', 'Ninjas', 'Pirates', 3),
(104, 'test1', 'test2', 'What was present in both videos?', 'Ninjas', 'Pirates', 'Robots', 2),
(106, 'test1', 'test2', 'What was present in both videos?', 'Pirates', 'Ninjas', 'Robots', 1),
(107, 'test1', 'test2', 'What was present in both videos?', 'Ninjas', 'Pirates', 'Robots', 2),
(108, 'test1', 'test2', 'What was present in both videos?', 'Robots', 'Ninjas', 'Pirates', 3),
(109, 'test1', 'test2', 'What type of event were shown in the videos?', 'Concert', 'Wedding', 'Demonstration', 1),
(111, 'test1', 'test2', 'What type of event were shown in the videos?', 'Demonstration', 'Wedding', 'Concert', 3),
(110, 'test1', 'test2', 'What type of event were shown in the videos?', 'Wedding', 'Concert', 'Demonstration', 2),
(112, 'test1', 'test2', 'What type of event were shown in the videos?', 'Concert', 'Wedding', 'Demonstration', 1),
(113, 'test1', 'test2', 'What type of event were shown in the videos?', 'Wedding', 'Concert', 'Demonstration', 2),
(114, 'test1', 'test2', 'What type of event were shown in the videos?', 'Demonstration', 'Wedding', 'Concert', 3),
(115, 'test1', 'test2', 'What type of event were shown in the videos?', 'Concert', 'Wedding', 'Demonstration', 1),
(116, 'test1', 'test2', 'What type of event were shown in the videos?', 'Wedding', 'Concert', 'Demonstration', 2),
(117, 'test1', 'test2', 'What type of event were shown in the videos?', 'Demonstration', 'Wedding', 'Concert', 3),
(118, 'test1', 'test2', 'What type of event were shown in the videos?', 'Concert', 'Wedding', 'Demonstration', 1),
(119, 'test1', 'test2', 'What type of event were shown in the videos?', 'Wedding', 'Concert', 'Demonstration', 2),
(122, 'test1', 'test2', 'What type of event were shown in the videos?', 'Wedding', 'Concert', 'Demonstration', 2),
(123, 'test1', 'test2', 'What type of event were shown in the videos?', 'Demonstration', 'Wedding', 'Concert', 3),
(121, 'test1', 'test2', 'What type of event were shown in the videos?', 'Concert', 'Wedding', 'Demonstration', 1),
(120, 'test1', 'test2', 'What type of event were shown in the videos?', 'Demonstration', 'Wedding', 'Concert', 3),
(124, 'test1', 'test2', 'What type of event were shown in the videos?', 'Concert', 'Wedding', 'Demonstration', 1),
(125, 'test1', 'test2', 'What type of event were shown in the videos?', 'Wedding', 'Concert', 'Demonstration', 2),
(126, 'test1', 'test2', 'What type of event were shown in the videos?', 'Demonstration', 'Wedding', 'Concert', 3);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `Name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Test_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pairing_id` int(11) NOT NULL,
  `Vid1` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Vid2` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Prefer` int(11) NOT NULL,
  `Dummy` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Correct` tinyint(1) NOT NULL,
  PRIMARY KEY (`Test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `screentest`
--

CREATE TABLE IF NOT EXISTS `screentest` (
  `Name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Lowest` int(1) NOT NULL,
  `Highest` int(1) NOT NULL,
  `Star8` tinyint(1) NOT NULL,
  `Star1` tinyint(1) NOT NULL,
  `Star2` tinyint(1) NOT NULL,
  `Star3` tinyint(1) NOT NULL,
  `Star4` tinyint(1) NOT NULL,
  `Star5` tinyint(1) NOT NULL,
  `Star6` tinyint(1) NOT NULL,
  `Star7` tinyint(1) NOT NULL,
  `Time` int(11) NOT NULL,
  `ClickNum` int(11) NOT NULL,
  `Score` int(4) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `Subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Age` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Gender` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Environment` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Hours` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Next` int(11) NOT NULL,
  `Task_id` int(11) NOT NULL,
  `Pairing_id1` int(11) NOT NULL,
  `Pairing_id2` int(11) NOT NULL,
  `Pairing_id3` int(11) NOT NULL,
  `Pairing_id4` int(11) NOT NULL,
  `Pairing_id5` int(11) NOT NULL,
  `Pairing_id6` int(11) NOT NULL,
  `Pairing_id7` int(11) NOT NULL,
  `Pairing_id8` int(11) NOT NULL,
  `Pairing_id9` int(11) NOT NULL,
  `Question1` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Question2` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Question3` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `q1_pos` int(1) NOT NULL,
  `q2_pos` int(1) NOT NULL,
  `q3_pos` int(1) NOT NULL,
  `test_id1` int(11) NOT NULL,
  `test_id2` int(11) NOT NULL,
  `test_id3` int(11) NOT NULL,
  `test_id4` int(11) NOT NULL,
  `test_id5` int(11) NOT NULL,
  `test_id6` int(11) NOT NULL,
  `test_id7` int(11) NOT NULL,
  `test_id8` int(11) NOT NULL,
  `test_id9` int(11) NOT NULL,
  `BufferTime` int(11) NOT NULL,
  `Time_1_1` int(11) NOT NULL,
  `Time_1_2` int(11) NOT NULL,
  `Time_2_1` int(11) NOT NULL,
  `Time_2_2` int(11) NOT NULL,
  `Time_3_1` int(11) NOT NULL,
  `Time_3_2` int(11) NOT NULL,
  `Time_4_1` int(11) NOT NULL,
  `Time_4_2` int(11) NOT NULL,
  `Time_5_1` int(11) NOT NULL,
  `Time_5_2` int(11) NOT NULL,
  `Time_6_1` int(11) NOT NULL,
  `Time_6_2` int(11) NOT NULL,
  `Time_7_1` int(11) NOT NULL,
  `Time_7_2` int(11) NOT NULL,
  `Time_8_1` int(11) NOT NULL,
  `Time_8_2` int(11) NOT NULL,
  `Time_9_1` int(11) NOT NULL,
  `Time_9_2` int(11) NOT NULL,
  PRIMARY KEY (`Subject_id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `TaskID` int(2) NOT NULL AUTO_INCREMENT,
  `Pairing1` int(5) NOT NULL,
  `Pairing2` int(5) NOT NULL,
  `Pairing3` int(5) NOT NULL,
  `Pairing4` int(5) NOT NULL,
  `Pairing5` int(5) NOT NULL,
  `Pairing6` int(5) NOT NULL,
  `Pairing7` int(5) NOT NULL,
  `Pairing8` int(5) NOT NULL,
  `Pairing9` int(5) NOT NULL,
  `NumCompleted` int(10) NOT NULL DEFAULT '0',
  `NumStarted` int(3) NOT NULL,
  PRIMARY KEY (`TaskID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`TaskID`, `Pairing1`, `Pairing2`, `Pairing3`, `Pairing4`, `Pairing5`, `Pairing6`, `Pairing7`, `Pairing8`, `Pairing9`, `NumCompleted`, `NumStarted`) VALUES
(1, 1, 2, 3, 58, 59, 60, 79, 80, 81, 0, 0),
(2, 19, 20, 21, 94, 95, 96, 115, 116, 117, 0, 0),
(3, 37, 38, 39, 4, 5, 6, 25, 26, 27, 0, 0),
(4, 55, 56, 57, 40, 41, 42, 97, 98, 99, 0, 0),
(5, 73, 74, 75, 112, 113, 114, 43, 44, 45, 0, 0),
(6, 91, 92, 93, 76, 77, 78, 7, 8, 9, 0, 0),
(7, 109, 110, 111, 22, 23, 24, 61, 62, 63, 0, 0),
(8, 64, 65, 66, 49, 50, 51, 16, 17, 18, 0, 0),
(9, 100, 101, 102, 85, 86, 87, 34, 35, 36, 0, 0),
(10, 118, 119, 120, 67, 68, 69, 106, 107, 108, 0, 0),
(11, 46, 47, 48, 121, 122, 123, 88, 89, 90, 0, 0),
(12, 10, 11, 12, 31, 32, 33, 124, 125, 126, 0, 0),
(13, 82, 83, 84, 13, 14, 15, 70, 71, 72, 0, 0),
(14, 28, 29, 30, 103, 104, 105, 52, 53, 54, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
