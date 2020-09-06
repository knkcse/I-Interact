-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 04:54 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `INTERACT`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `class` varchar(200) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL,
  `assignment` varchar(300) NOT NULL,
  `marks` varchar(100) NOT NULL DEFAULT '-',
  PRIMARY KEY (`student_id`,`faculty_id`,`subject`,`assignment`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`sno`, `student_id`, `faculty_id`, `subject`, `class`, `year`, `date`, `path`, `assignment`, `marks`) VALUES
(35, 'B121107', 'R121250', 'DBMS', 'AB1-007', 'E3', '2017-03-09 11:54:32', './StudentAssignments/assignment32017_lamborghini_centenario-1920x1080.jpg', 'assignment3', '-'),
(34, 'B121107', 'RCS111', 'DBMS', 'AB1-007', 'E3', '2017-03-09 11:53:39', './StudentAssignments/assignment3Bahubali2 firstlook.jpg', 'assignment3', '-'),
(33, 'B121247', 'RCS111', 'JAVA', 'ABI-102', 'E2', '2017-03-08 21:33:38', './StudentAssignments/assignment2Screenshot from 2017-03-08 21:10:51.png', 'assignment2', '7'),
(29, 'B121250', 'RCS111', 'DBMS', 'AB-I 007', 'E3', '2017-03-08 15:33:08', './StudentAssignments/assignment1something.txt.tar', 'assignment1', '4'),
(30, 'B121250', 'RCS111', 'JAVA', 'AB-I 007', 'E3', '2017-03-08 15:36:01', './StudentAssignments/assignment1something.txt', 'assignment1', '6'),
(31, 'B121250', 'RCS111', 'JAVA', 'AB-I 007', 'E3', '2017-03-08 15:37:58', './StudentAssignments/assignment3something.txt.pdf', 'assignment3', '8'),
(21, 'B121250', 'RCS112', 'JAVA', 'AB-I 007', 'E3', '2017-03-03 10:37:21', './StudentAssignments/assignment2Untitled 1.pdf', 'assignment2', '-'),
(20, 'B121250', 'RCS112', 'SE', 'AB-I 007', 'E3', '2017-03-01 23:58:31', './StudentAssignments/assignment1Untitled 1.pdf', 'assignment1', '-'),
(19, 'B121250', 'RCS112', 'SE', 'AB-I 007', 'E3', '2017-03-01 23:57:14', './StudentAssignments/assignment2pp.jpg', 'assignment2', '-'),
(32, 'B121250', 'RCS1122', 'SE', 'AB-I 007', 'E3', '2017-03-08 19:50:07', './StudentAssignments/assignment1something.txt.pdf', 'assignment1', '-'),
(23, 'B121250', 'RCS114', 'DS', 'AB-I 007', 'E3', '2017-03-03 22:16:14', './StudentAssignments/assignment330-Best-Teamwork-Quotes-saying.jpg', 'assignment3', '-'),
(37, 'B121250', 'RCST1100', 'JAVA', 'AB-I 007', 'E3', '2017-03-09 21:01:26', './StudentAssignments/assignment4assignment.txt', 'assignment4', '-'),
(24, 'B121283', 'RCS111', 'SE', 'ABII-012', 'E3', '2017-03-05 15:06:59', './StudentAssignments/assignment4IMG_20141201_113807121.jpg', 'assignment4', '3'),
(36, 'B121526', 'RCS111', 'JAVA', 'ABI-007', 'E3', '2017-03-09 12:09:45', './StudentAssignments/assignment2sdfet.txt', 'assignment2', '-');

-- --------------------------------------------------------

--
-- Table structure for table `Chat`
--

CREATE TABLE IF NOT EXISTS `Chat` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` varchar(100) DEFAULT NULL,
  `to_id` varchar(100) DEFAULT NULL,
  `chat` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `Chat`
--

INSERT INTO `Chat` (`sno`, `from_id`, `to_id`, `chat`, `date`) VALUES
(1, 'RCS111', 'B121250', 'Hi how are you', '2017-03-08 10:38:30'),
(4, 'B121250', 'RCS111', 'Hi sir, im fine', '2017-03-08 11:00:42'),
(5, 'B121250', 'RCS111', 'Sir, where are you sir?', '2017-03-08 11:03:05'),
(6, 'B121250', 'REC2231', 'Hai sir', '2017-03-08 11:10:57'),
(7, 'B121250', 'REC2231', 'how are you?', '2017-03-08 11:11:05'),
(8, 'B121250', 'RCS112', 'Hai sir.,', '2017-03-08 19:49:55'),
(9, 'B121250', 'RCS111', 'Naveen kumar??', '2017-03-08 20:57:26'),
(10, 'RCS111', 'B121250', 'Naveen Kumar, You are alwyas wel come', '2017-03-08 20:57:51'),
(13, 'RCS111', 'B121250', 'Can you come to class now?', '2017-03-08 21:02:46'),
(14, 'B121247', 'RCS111', 'Hi sir, How are you?', '2017-03-08 21:39:16'),
(15, 'RCS111', 'b121247', 'Yah im fine , You?', '2017-03-08 21:39:38'),
(16, 'B121092', 'RCS111', 'vola..', '2017-03-08 22:21:02'),
(17, 'B121011', 'RCS111', 'Good Evening Sir,\r\n', '2017-03-08 22:21:06'),
(18, 'B121092', 'RCS111', 'oye vola', '2017-03-08 22:21:13'),
(19, 'RCS111', 'B121092', 'Hai srikanth', '2017-03-08 22:21:19'),
(20, 'RCS111', 'B121011', 'Hai chintu', '2017-03-08 22:21:27'),
(21, 'B121011', 'RCS111', 'Sir, How are you', '2017-03-08 22:21:48'),
(22, 'RCS111', 'B121011', 'Chintu can you come to class daily?', '2017-03-08 22:22:36'),
(23, 'B121107', 'RCS112', 'hai\r\n', '2017-03-09 11:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `Debate`
--

CREATE TABLE IF NOT EXISTS `Debate` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(1000) NOT NULL,
  `text` varchar(200) NOT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Debate`
--

INSERT INTO `Debate` (`sno`, `id`, `text`, `post`, `date`) VALUES
(1, 'B121283', '', 'Hai, Every one', '2017-03-02 00:00:00'),
(2, 'B121283', '', 'Hai, Every one', '2017-03-02 00:00:00'),
(3, 'B121283', '', 'Hai, Every one', '2017-03-02 00:00:00'),
(4, 'B121250', '', 'Hi , how are you Sree?', '2017-03-02 00:00:00'),
(5, 'B121283', '', 'Im fine', '2017-03-02 00:00:00'),
(6, 'B121250', '', 'Hi , how are you Sree?', '2017-03-02 00:00:00'),
(7, 'B121283', '', 'Im fine', '2017-03-02 00:00:00'),
(8, 'B121250', '', 'Yah, to day topic is', '2017-03-02 00:00:00'),
(9, 'B121250', '', 'Anilnaveen', '2017-03-02 23:02:51'),
(10, 'B121250', '', 'Anilnaveen', '2017-03-02 23:03:16'),
(11, 'B121250', '', 'TYpe', '2017-03-03 12:50:38'),
(12, 'B121250', '', 'TYpe', '2017-03-03 12:53:28'),
(13, 'B121250', '', 'Hi\r\nEveryone', '2017-03-05 13:50:16'),
(14, 'RCS111', '', 'Hi every one', '2017-03-08 20:20:17'),
(15, 'RCS111', '', 'Hi every one', '2017-03-08 20:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `DebateRegister`
--

CREATE TABLE IF NOT EXISTS `DebateRegister` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `winner` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `DebateRegister`
--

INSERT INTO `DebateRegister` (`sno`, `id`, `name`, `branch`, `date`, `winner`) VALUES
(28, 'B121011', 'Chintu Yadav Sara', 'ABI-007', '2017-03-08', '-'),
(29, 'B121107', 'Vamsi Chaitanya', 'AB1-007', '2017-03-09', '-'),
(27, 'B121247', 'poojachowhan', 'ABI-102', '2017-03-08', '-'),
(19, 'B121250', 'Naveen Kumar Kammari', 'AB-I 007', '2017-03-08', '-'),
(18, 'B121283', 'Jayasree', 'ABII-12', '2017-03-08', '-'),
(26, 'RCS111', 'Sujoy', 'CSE', '2017-03-08', '-');

-- --------------------------------------------------------

--
-- Table structure for table `DebateSession`
--

CREATE TABLE IF NOT EXISTS `DebateSession` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `debate` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `FacultyDetails`
--

CREATE TABLE IF NOT EXISTS `FacultyDetails` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `gmail` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`faculty_id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `FacultyDetails`
--

INSERT INTO `FacultyDetails` (`sno`, `faculty_id`, `name`, `gmail`, `password`, `department`, `mobile`, `dob`, `path`) VALUES
(17, 'R121250', 'Kammari Naveen Kumar', 'nadigot@gmail.com', 'rgukt123', 'CSE', '7731840284', '08 03 2017', './Profiles/default.png'),
(8, 'RCHE1111', 'Srikanth', 'srikanth@gmail.com', 'rgukt123', 'CHEM', '2233443322', NULL, './Profiles/default.png'),
(9, 'RCIVIL12121', 'Harish', 'harish@gmail.com', 'rgukt123', 'CIVIL', '8899887755', NULL, './Profiles/default.png'),
(10, 'RCS111', 'Sujoy', 'sujoy@gmail.com', 'anilnaveensree', 'CSE', '2233223322', NULL, './Profiles/default.png'),
(2, 'RCS1111', 'Shekhar', 'shekar@gmail.com', 'rgukt123', 'CSE', '2233445544', NULL, './Profiles/default.png'),
(11, 'RCS112', 'Samit', 'samity@gmail.com', 'rgukt123', 'CSE', '2233223322', NULL, './Profiles/default.png'),
(4, 'RCS1122', 'Sujoy', 'sujoy@gmail.com', 'rgukt123', 'CSE', '1122334455', NULL, './Profiles/default.png'),
(1, 'RCST1100', 'Ranjith', 'ranjith@gmail.com', 'rgukt123', 'CSE', '8899009900', NULL, './Profiles/default.png'),
(3, 'REC1100', 'Sagar', 'sagar@gmail.com', 'rgukt123', 'ECE', '8899778899', NULL, './Profiles/default.png'),
(6, 'REC2231', 'prashanth', 'prashanth@gmail.com', 'rgukt123', 'ECE', '22339944', NULL, './Profiles/default.png'),
(7, 'RME1111', 'Narendar', 'narender@gmail.com', 'rgukt123', 'ME', '3344552233`', NULL, './Profiles/default.png'),
(5, 'RMM1100', 'Ashok', 'asho@gmail.com', 'rgukt123', 'MME', '22334455', NULL, './Profiles/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `remark` varchar(1000) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`student_id`,`faculty_id`,`date`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `student_id`, `faculty_id`, `rating`, `remark`, `branch`, `date`) VALUES
(19, 'B121011', 'R121250', 5, 'Good job Mr. Naveen Kumar Kammari\r\n', 'CSE', '2017-03-08'),
(14, 'B121250', 'RCS111', 3, 'Int', 'CSE', '2017-03-05'),
(16, 'B121250', 'RCS111', 3, 'GOod', 'CSE', '2017-03-08'),
(18, 'B121250', 'RCS1111', 3, 'Cool', 'CSE', '2017-03-08'),
(15, 'B121250', 'RCS112', 3, 'sfr', 'CSE', '2017-03-05'),
(17, 'B121250', 'RCS1122', 5, 'as', 'CSE', '2017-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `NoticeBoard`
--

CREATE TABLE IF NOT EXISTS `NoticeBoard` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(200) DEFAULT NULL,
  `purpose` varchar(1000) NOT NULL,
  `notice` varchar(1000) DEFAULT NULL,
  `path_attachment` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `NoticeBoard`
--

INSERT INTO `NoticeBoard` (`sno`, `id`, `purpose`, `notice`, `path_attachment`, `date`) VALUES
(1, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', './noticeboard/Bootstrap Glyphicon Components.zip', '2017-03-02 23:25:29'),
(2, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', './noticeboard/Bootstrap Glyphicon Components.zip', '2017-03-02 23:25:33'),
(3, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:36'),
(4, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:37'),
(5, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', './noticeboard/Bootstrap Glyphicon Components.zip', '2017-03-02 23:25:37'),
(6, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:38'),
(7, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:38'),
(8, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:39'),
(9, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', './noticeboard/Bootstrap Glyphicon Components.zip', '2017-03-02 23:25:39'),
(10, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:40'),
(11, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:40'),
(12, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', 'NULL', '2017-03-02 23:25:40'),
(13, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', './noticeboard/Bootstrap Glyphicon Components.pdf', '2017-03-02 23:25:41'),
(14, 'B121212', 'Notice for E3 students regording your intership offers by Vitwit technologies.', 'Read books', './StudentAssignments/assignment1Untitled 1.pdf', '2017-03-02 23:25:41'),
(15, 'RCS111', 'Dear all E3 students', 'We are here to inform you about Internship. Some Companies are providing summer internship.So Please Visit websites of them.', 'NULL', '2017-03-08 21:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE IF NOT EXISTS `Question` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) DEFAULT NULL,
  `question` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`sno`, `id`, `question`, `date`, `count`) VALUES
(1, 'B121250', 'How can I learn C++ easily?', '0000-00-00 00:00:00', 1),
(2, 'B121251', 'How can i learn C?', '2017-02-18 10:42:00', 1),
(3, 'B121252', 'How can I improve my Communication skills?', '2017-02-18 10:44:17', 1),
(4, 'B121254', 'How can I attend Placements effectively?', '2017-02-18 11:22:15', 1),
(5, 'B121250', 'What is Watt', '2017-02-25 23:57:38', 2),
(6, 'B121250', 'What is ML?', '2017-02-28 13:04:26', 3),
(7, 'B121250', 'What is ML?', '2017-02-28 13:04:30', 4),
(8, 'B121250', 'What Iam?', '2017-03-02 00:30:08', 5),
(9, 'B121250', 'AnilNaveen Kumar ?', '2017-03-03 13:35:46', 6),
(11, 'B121283', 'What is PPL?', '2017-03-05 14:01:20', 7),
(12, 'B121247', 'How can i over come Stage Fear?', '2017-03-08 21:32:29', 1),
(13, 'B121092', 'Hola..', '2017-03-08 22:17:58', 1),
(14, 'B121092', 'how to compile c file in Linux..', '2017-03-08 22:19:07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Question_Answers`
--

CREATE TABLE IF NOT EXISTS `Question_Answers` (
  `id` varchar(20) DEFAULT NULL,
  `aid` varchar(20) DEFAULT NULL,
  `answer` varchar(300) DEFAULT NULL,
  `date` datetime NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Question_Answers`
--

INSERT INTO `Question_Answers` (`id`, `aid`, `answer`, `date`, `count`) VALUES
('B121250', 'B082597', 'Yah, obvisouly you can learn it by using internet.', '2017-02-01 00:00:00', 1),
('B121250', 'B121283', 'You can learn it by using internet', '2017-02-09 00:00:00', 1),
('B121251', 'B121250', 'C++ is an easy subject so u can learn it by using internet', '2017-02-25 23:43:53', 1),
('B121250', 'B121250', 'I have done it but some what difficult', '2017-02-25 23:46:29', 0),
('B121250', 'B121250', 'adf', '2017-02-26 17:49:03', 5),
('B121250', 'B121250', 'adfasdfadf', '2017-02-26 17:49:09', 0),
('B121251', 'B121250', 'Let us c book is extraordinary book for C.', '2017-02-26 17:57:52', 1),
('B121250', 'B121250', 'You are great', '2017-03-02 00:31:21', 8),
('B121250', 'B121283', 'He is my brother.', '2017-03-05 13:54:36', 9),
('B121250', 'B121283', 'He is one of my best brother.', '2017-03-05 13:58:15', 9),
('B121250', 'B121283', 'He is my lovely brothers...', '2017-03-05 13:59:32', 9),
('B121250', 'B121283', 'ML is machine learning which is a part of Artificial Intelligence. It has many kinds fields. It is a subject which explains about how a machine can learn as a human.', '2017-03-05 14:02:34', 7),
('B121283', 'B121250', 'PPL is principle of programming languages', '2017-03-08 19:49:28', 11),
('B121283', 'RCS111', 'PPL is an important subject in computer sceince and engineering.', '2017-03-08 21:06:53', 11),
('B121250', 'RCS111', 'Here is the faculty.', '2017-03-08 21:30:48', 9),
('B121092', 'B121011', 'open terminal and type the following command$ gcc file_name.c -o filename2 -stdc=c99', '2017-03-08 22:20:00', 14),
('B121092', 'B121107', 'Genius.', '2017-03-09 11:52:15', 14);

-- --------------------------------------------------------

--
-- Table structure for table `RegisterDebate`
--

CREATE TABLE IF NOT EXISTS `RegisterDebate` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `StudentDetails`
--

CREATE TABLE IF NOT EXISTS `StudentDetails` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` char(7) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `year` char(10) DEFAULT NULL,
  `class` varchar(200) NOT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `gmail` varchar(200) DEFAULT NULL,
  `dateOfBirth` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `sno` (`sno`),
  UNIQUE KEY `gmail` (`gmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `StudentDetails`
--

INSERT INTO `StudentDetails` (`sno`, `student_id`, `name`, `year`, `class`, `branch`, `gmail`, `dateOfBirth`, `mobile`, `password`, `path`) VALUES
(22, 'B121011', 'Chintu Yadav Sara', 'E3', 'ABI-007', 'CSE', 'chintuyadav.sr336@gmail.com', '21 09 1996', '9963618687', 'chintu1011', './Profiles/B121011loneliness-wide.jpg'),
(21, 'B121092', 'Srikanth', 'E3', 'ABI-007', 'CSE', 'srikanth.chekuri92@gmail.com', '03 03 2003', '8106307494', '12345678', './Profiles/default.png'),
(23, 'B121107', 'Vamsi Chaitanya', 'E3', 'AB1-007', 'CSE', 'vamsichaitanya88@gmail.com', '15 02 1997', '9493854096', 'friend123', './Profiles/B12110715589517_533217813551566_3330349429615821161_n.jpg'),
(19, 'b121247', 'poojachowhan', 'E2', 'ABI-102', 'CSE', 'pooja.chowhan12@gmail.com', '17 04 2008', '1234567890', 'pooja123', './Profiles/b121247Aqua Young_20160117_204014.jpg'),
(1, 'B121250', 'Naveen Kumar Kammari', 'E3', 'AB-I 007', 'CSE', 'naveen97.kammari@gmail.com', '2017-03-04 10:17:54', '7731840284', 'anilnaveensree', './Profiles/B121250IMG_1888.JPG'),
(18, 'B121251', 'Murali', 'E3', 'ABI-102', 'CSE', 'margamsrikanth7@gmail.com', '02 03 2017', '7731840284', 'naveen', './Profiles/default.png'),
(2, 'B121283', 'Jayasree', 'E3', 'ABII-012', 'MME', 'jayasree@gmail.com', '19/01/1997', '9491841838', 'anilnaveensree', './Profiles/B121250PicsArt_11-29-08.41.09.png'),
(20, 'b121391', 'srinu k', 'E3', 'ab1 007', 'ECE', 'srnbu@gmail.com', '08 03 2017', '8972382731', 'srinu', './Profiles/default.png'),
(24, 'B121526', 'Rakesh', 'E3', 'ABI-007', 'CSE', 'rakeshvn526@gmail.com', '25 07 1996', '8985169219', 'rak@rude123', './Profiles/B12152614976407_976063895870982_6327566507626733812_o.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
