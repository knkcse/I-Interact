-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2017 at 04:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `INTERACT`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `sno` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `class` varchar(200) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL,
  `assignment` varchar(300) NOT NULL,
  `marks` varchar(100) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`sno`, `student_id`, `faculty_id`, `subject`, `class`, `year`, `date`, `path`, `assignment`, `marks`) VALUES
(34, 'B121250', 'RCS111', 'Linux Programming', 'AB-I 007', 'E3', '2017-03-18 21:29:07', './StudentAssignments/assignment2IMG-20170304-WA0009.jpg', 'assignment2', '4'),
(35, 'B121250', 'RCS1111', 'Software Engineering', 'AB-I 007', 'E3', '2017-04-11 18:54:28', './StudentAssignments/assignment116142354_377928095904800_1692720010336106293_n.jpg', 'assignment1', '-'),
(32, 'B121250', 'RCS112', 'Linux Programming', 'AB-I 007', 'E3', '2017-03-17 00:06:05', './StudentAssignments/assignment316142354_377928095904800_1692720010336106293_n.jpg', 'assignment3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `Chat`
--

CREATE TABLE `Chat` (
  `sno` int(11) NOT NULL,
  `from_id` varchar(100) DEFAULT NULL,
  `to_id` varchar(100) DEFAULT NULL,
  `chat` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Chat`
--

INSERT INTO `Chat` (`sno`, `from_id`, `to_id`, `chat`, `date`) VALUES
(1, 'RCS111', 'B121250', 'Hi how are you', '2017-03-08 10:38:30'),
(2, 'B121250', 'RCS111', 'Hi sir, im fine. how are you?', '2017-03-08 23:16:43'),
(31, 'RCS111', 'B121250', 'Im fine. What about you?', '2017-03-18 21:28:21'),
(32, 'B121250', 'RCS1122', 'ashdfasdf', '2017-03-19 21:47:12'),
(33, 'B121250', 'RCS1122', 'hai sir how are you?', '2017-03-19 21:49:29'),
(34, 'B121212', 'REC1100', 'hi', '2017-03-26 23:31:30'),
(35, 'B121250', 'RCS1111', 'Hi sir', '2017-04-11 18:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `Debate`
--

CREATE TABLE `Debate` (
  `sno` int(11) NOT NULL,
  `id` varchar(1000) NOT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Debate`
--

INSERT INTO `Debate` (`sno`, `id`, `post`, `date`) VALUES
(4, 'B121250', 'Hi , how are you Sree?', '2017-03-02 00:00:00'),
(6, 'B121250', 'Hi , how are you Sree?', '2017-03-02 00:00:00'),
(8, 'RCS1111', 'Yah, to day topic is', '2017-03-02 00:00:00'),
(9, 'B121250', 'Anilnaveen', '2017-03-02 23:02:51'),
(13, 'RCS111', 'Hi\r\nEveryone', '2017-03-05 13:50:16'),
(16, 'R121250', 'Hai', '2017-03-18 21:21:14'),
(17, 'R121250', 'Hai', '2017-03-18 21:22:21'),
(18, 'R121250', 'Hai', '2017-03-18 21:22:52'),
(19, 'RCS111', 'hai', '2017-03-19 21:59:31'),
(20, 'RCS111', 'hai', '2017-03-19 21:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `DebateRegister`
--

CREATE TABLE `DebateRegister` (
  `sno` int(11) NOT NULL,
  `id` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `winner` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DebateRegister`
--

INSERT INTO `DebateRegister` (`sno`, `id`, `name`, `branch`, `date`, `winner`) VALUES
(18, 'RCS111', 'Sujoy', 'CSE', '2017-03-09', '-'),
(19, 'RSC11276', 'Naveen', 'CSE', '2017-03-16', '-');

-- --------------------------------------------------------

--
-- Table structure for table `DebateSession`
--

CREATE TABLE `DebateSession` (
  `sno` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `debate` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `FacultyDetails`
--

CREATE TABLE `FacultyDetails` (
  `sno` int(11) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `gmail` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FacultyDetails`
--

INSERT INTO `FacultyDetails` (`sno`, `faculty_id`, `name`, `gmail`, `password`, `department`, `mobile`, `dob`, `path`) VALUES
(17, 'R121250', 'Kammari Naveen Kumar', 'nadigot@gmail.com', 'rgukt123', 'CSE', '7731840284', '08 03 2017', './Profiles/R121250IMG-20170304-WA0009.jpg'),
(8, 'RCHE1111', 'Srikanth', 'srikanth@gmail.com', 'rgukt123', 'CHEM', '2233443322', NULL, './Profiles/default.png'),
(9, 'RCIVIL12121', 'Harish', 'harish@gmail.com', 'rgukt123', 'CIVIL', '8899887755', NULL, './Profiles/default.png'),
(10, 'RCS111', 'Sujoy', 'sujoy@gmail.com', 'RGUKT123', 'CSE', '2233223322', NULL, './Profiles/RCS11130-Best-Teamwork-Quotes-Teamwork.jpg'),
(2, 'RCS1111', 'Shekhar', 'shekar@gmail.com', 'rgukt123', 'CSE', '2233445544', NULL, './Profiles/default.png'),
(11, 'RCS112', 'Samit', 'samity@gmail.com', 'rgukt123', 'CSE', '2233223322', NULL, './Profiles/default.png'),
(4, 'RCS1122', 'Sujoy', 'sujoy@gmail.com', 'rgukt123', 'CSE', '1122334455', NULL, './Profiles/default.png'),
(21, 'RCS1515', 'Venu', 'naven97.kammari@gmail.com', 'anilnaveen', 'CSE', '7731840284', '03 03 2009', './Profiles/default.png'),
(1, 'RCST1100', 'Ranjith', 'ranjith@gmail.com', 'rgukt123', 'CSE', '8899009900', NULL, './Profiles/default.png'),
(3, 'REC1100', 'Sagar', 'sagar@gmail.com', 'rgukt123', 'ECE', '8899778899', NULL, './Profiles/default.png'),
(6, 'REC2231', 'prashanth', 'prashanth@gmail.com', 'rgukt123', 'ECE', '22339944', NULL, './Profiles/default.png'),
(7, 'RME1111', 'Narendar', 'narender@gmail.com', 'rgukt123', 'ME', '3344552233`', NULL, './Profiles/default.png'),
(5, 'RMM1100', 'Ashok', 'asho@gmail.com', 'rgukt123', 'MME', '22334455', NULL, './Profiles/default.png'),
(20, 'RSC11276', 'Naveen', 'aa@gmail.com', 'anilnaveen', 'CSE', '7731840284', '15 03 2017', './Profiles/RSC1127630-Best-Teamwork-Quotes-Teamwork.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `remark` varchar(1000) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `student_id`, `faculty_id`, `rating`, `remark`, `branch`, `date`) VALUES
(14, 'B121250', 'RCS111', 3, 'Int', 'CSE', '2017-03-05'),
(17, 'B121250', 'RCS1111', 3, 'super', 'CSE', '2017-03-19'),
(15, 'B121250', 'RCS112', 3, 'sfr', 'CSE', '2017-03-05'),
(18, 'B121250', 'RCS1122', 4, 'GOod', 'CSE', '2017-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `NoticeBoard`
--

CREATE TABLE `NoticeBoard` (
  `sno` int(11) NOT NULL,
  `id` varchar(200) DEFAULT NULL,
  `purpose` varchar(1000) NOT NULL,
  `notice` varchar(1000) DEFAULT NULL,
  `path_attachment` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NoticeBoard`
--

INSERT INTO `NoticeBoard` (`sno`, `id`, `purpose`, `notice`, `path_attachment`, `date`) VALUES
(70, 'R121250', 'Notice for E3 Students', 'All e3 Students have to submit their internship details before 15th May', 'NULL', '2017-04-10 23:24:36'),
(71, 'R121250', 'Sports notice', 'Dear students we are here to inform you that , We are going to celebrate Sports day on 8th march. ', 'NULL', '2017-04-10 23:26:13'),
(72, 'R121250', 'Internship offer by VitWit.com', 'Dear all e3 students, VitWit is going to offer you a summer internship . Please send your resumes at intership@vitwit.com', 'NULL', '2017-04-10 23:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `sno` int(11) NOT NULL,
  `id` varchar(20) DEFAULT NULL,
  `question` varchar(1000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`sno`, `id`, `question`, `date`, `count`) VALUES
(18, 'B121250', 'How can I Learn Image Processing?', '2017-04-10 23:20:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Question_Answers`
--

CREATE TABLE `Question_Answers` (
  `id` varchar(20) DEFAULT NULL,
  `aid` varchar(20) DEFAULT NULL,
  `answer` varchar(300) DEFAULT NULL,
  `date` datetime NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RegisterDebate`
--

CREATE TABLE `RegisterDebate` (
  `sno` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `StudentDetails`
--

CREATE TABLE `StudentDetails` (
  `sno` int(11) NOT NULL,
  `student_id` char(7) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `year` char(10) DEFAULT NULL,
  `class` varchar(200) NOT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `gmail` varchar(200) DEFAULT NULL,
  `dateOfBirth` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `StudentDetails`
--

INSERT INTO `StudentDetails` (`sno`, `student_id`, `name`, `year`, `class`, `branch`, `gmail`, `dateOfBirth`, `mobile`, `password`, `path`) VALUES
(22, 'B089756', 'Kammari Naveen Kumar', 'E3', 'ABI-007', 'CSE', 'aniln519@gmail.com', '10 04 2000', '9133428528', 'anilnaveen', './Profiles/default.png'),
(20, 'B121211', 'Kiran below', 'E3', 'ABII-012', 'MME', 'naveen97.kammri@gmail.com', '21 03 2017', '7731840284', 'anilnaveensree', './Profiles/default.png'),
(21, 'B121212', 'A kiran kumar', 'E3', 'ABII-112', 'ECE', 'kiranrgukt1212@gmail.com', '06 06 1996', '9133665090', 'kiran.a', './Profiles/B121212a23ecf75a58af60ed8426e01ef3d5d5d.jpg'),
(19, 'b121247', 'poojachowhan', 'E2', 'ABI-102', 'CSE', 'pooja.chowhan12@gmail.com', '17 04 2008', '1234567890', 'pooja123', './Profiles/b121247Aqua Young_20160117_204014.jpg'),
(1, 'B121250', 'Naveen Kumar Kammari', 'E3', 'AB-I 007', 'CSE', 'naveen97.kammari@gmail.com', '2017-03-04 10:17:54', '7731840284', 'anilnaveensree', './Profiles/B121250IMG_1888.JPG'),
(18, 'B121251', 'Murali', 'E3', 'ABI-102', 'CSE', 'margamsrikanth7@gmail.com', '02 03 2017', '7731840284', 'naveen', './Profiles/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sno` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `suject` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sno`, `branch`, `suject`, `subject_id`) VALUES
(3, 'CSE', 'Principle of Programming Languages', 'CS3201'),
(2, 'CSE', 'Linux Programming', 'CS3202'),
(1, 'CSE', 'Data Mining', 'CS3203'),
(0, 'CSE', 'Computer Networks', 'CS3204'),
(4, 'CSE', 'Software Engineering', 'CS3205'),
(6, 'MME', 'Java', 'CS9001'),
(5, 'MME', 'Materials', 'MM3202');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`student_id`,`faculty_id`,`subject`,`assignment`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `Chat`
--
ALTER TABLE `Chat`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Debate`
--
ALTER TABLE `Debate`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `DebateRegister`
--
ALTER TABLE `DebateRegister`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `DebateSession`
--
ALTER TABLE `DebateSession`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `FacultyDetails`
--
ALTER TABLE `FacultyDetails`
  ADD PRIMARY KEY (`faculty_id`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`student_id`,`faculty_id`,`date`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `NoticeBoard`
--
ALTER TABLE `NoticeBoard`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Question_Answers`
--
ALTER TABLE `Question_Answers`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `RegisterDebate`
--
ALTER TABLE `RegisterDebate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `sno` (`sno`),
  ADD UNIQUE KEY `gmail` (`gmail`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `Chat`
--
ALTER TABLE `Chat`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `Debate`
--
ALTER TABLE `Debate`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `DebateRegister`
--
ALTER TABLE `DebateRegister`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `DebateSession`
--
ALTER TABLE `DebateSession`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `FacultyDetails`
--
ALTER TABLE `FacultyDetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `NoticeBoard`
--
ALTER TABLE `NoticeBoard`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `RegisterDebate`
--
ALTER TABLE `RegisterDebate`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
