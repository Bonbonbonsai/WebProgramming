-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 03:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s047v`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `s_id` varchar(10) NOT NULL,
  `i_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`s_id`, `i_id`) VALUES
('00128', '45565'),
('12345', '10101'),
('23121', '76543'),
('44553', '22222'),
('45678', '22222'),
('76543', '45565'),
('76653', '98345'),
('98765', '98345'),
('98988', '76766');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `building` varchar(30) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`building`, `room_number`, `capacity`) VALUES
('Computer', '120', 50),
('Packard', '101', 500),
('Painter', '514', 10),
('Taylor', '3128', 70),
('Watson', '100', 30);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `credits` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`) VALUES
('BIO-101', 'Intro. to Biology', 'Biology', 4),
('BIO-301', 'Genetics', 'Biology', 4),
('BIO-399', 'Computational Biology', 'Biology', 3),
('CS-101', 'Intro. to Computer Science', 'Comp. Sci.', 4),
('CS-190', 'Game Design', 'Comp. Sci.', 4),
('CS-315', 'Robotics', 'Comp. Sci.', 3),
('CS-319', 'Image Processing', 'Comp. Sci.', 3),
('CS-347', 'Database System Concepts', 'Comp. Sci.', 3),
('EE-181', 'Intro. to Digital Systems', 'Elec. Eng', 3),
('FIN-201', 'Investment Banking', 'Finance', 3),
('HIS-201', 'World History', 'History', 3),
('MU-199', 'Music Video Production', 'Music', 3),
('PHY-101', 'Physical Principles', 'Physics', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(30) NOT NULL,
  `building` varchar(30) NOT NULL,
  `budget` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `building`, `budget`) VALUES
('Biology', 'Watson', 90000),
('Comp. Sci.', 'Taylor', 100000),
('Elec. Eng.', 'Taylor', 85000),
('Finance', 'Painter', 120000),
('History', 'Painter', 50000),
('Music', 'Packard', 80000),
('Physics', 'Watson', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ID` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`ID`, `name`, `dept_name`, `salary`) VALUES
('10101', 'Srinivasan', 'Comp.Sci', 65000),
('12121', 'Wu', 'Finance', 90000),
('15151', 'Mozart', 'Music', 40000),
('22222', 'Einstein', 'Physics', 95000),
('32343', 'El said', 'History', 60000),
('33456', 'Gold', 'Physics', 87000),
('45565', 'Katz', 'Comp. Sci.', 75000),
('58583', 'Califieri', 'History', 62000),
('76543', 'Singh', 'Finance', 80000),
('76766', 'Crick', 'Biology', 72000),
('83821', 'Brandt', 'Comp. Sci.', 92000),
('98345', 'Kim', 'Elec. Eng.', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

CREATE TABLE `prereq` (
  `course_id` varchar(10) NOT NULL,
  `prereq_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `prereq`
--

INSERT INTO `prereq` (`course_id`, `prereq_id`) VALUES
('BIO-301', 'BIO-101'),
('BIO-399', 'BIO-101'),
('CS-190', 'CS-101'),
('CS-315', 'CS-101'),
('CS-319', 'CS-101'),
('CS-347', 'CS-101'),
('EE-181', 'PHY-101');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_id` varchar(20) NOT NULL,
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
  `building` varchar(20) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `time_slot_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`course_id`, `sec_id`, `semester`, `year`, `building`, `room_number`, `time_slot_id`) VALUES
('BIO-101', '1', 'Summer', 2017, 'Painter', '514', 'B'),
('BIO-301', '1', 'Summer', 2018, 'Painter', '514', 'A'),
('CS-101', '1', 'Fall', 2017, 'Packard', '101', 'H'),
('CS-101', '1', 'Spring', 2018, 'Packard', '101', 'F'),
('CS-190', '2', 'Spring', 2017, 'Taylor', '3128', 'A'),
('EE-181', '1', 'Spring', 2017, 'Taylor', '3128', 'C'),
('FIN-201', '1', 'Spring', 2018, 'Packard', '101', 'B'),
('HIS-351', '1', 'Spring', 2018, 'Painter', '514', 'C'),
('MU-199', '1', 'Spring', 2018, 'Packard', '101', 'D'),
('PHY-101', '1', 'Fall', 2017, 'Watson', '100', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `tot_cred` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `dept_name`, `tot_cred`) VALUES
('00128', 'Zhang', 'Comp. Sci.', 102),
('12345', 'Shankar', 'Comp. Sci.', 32),
('19991', 'Brandt', 'History', 80),
('23121', 'Chavez', 'Finance', 110),
('44553', 'Peltier', 'Physics', 56),
('45678', 'Levy', 'Physics', 46),
('54321', 'Williams', 'Comp. Sci.', 54),
('55739', 'Sanchez', 'Music', 38),
('70557', 'Snow', 'Physics', 0),
('76543', 'Brown', 'Comp. Sci.', 58),
('76653', 'Aoi', 'Elec. Eng.', 60),
('98765', ' Bourikas', 'Elec. Eng.', 98),
('98988', 'Tanaka', 'Biology', 120);

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `ID` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `grade` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`ID`, `course_id`, `sec_id`, `semester`, `year`, `grade`) VALUES
('00128', 'CS-101', '1', 'Fall', 2017, 'A'),
('00128', 'CS-347', '1', 'Fall', 2017, 'A-'),
('12345', 'CS-101', '1', 'Fall', 2017, 'C'),
('12345', 'CS-190', '2', 'Spring', 2017, 'A'),
('12345', 'CS-315', '1', 'Spring', 2018, 'A'),
('12345', 'CS-347', '1', 'Fall', 2017, 'A'),
('19991', 'HIS-351', '1', 'Spring', 2018, 'B'),
('23121', 'FIN-201', '1', 'Spring', 2018, 'C+'),
('44553', 'PHY-101', '1', 'Fall', 2017, 'B-'),
('45678', 'CS-101', '1', 'Fall', 2017, 'F'),
('45678', 'CS-101', '1', 'Spring', 2018, 'B+'),
('45678', 'CS-319', '1', 'Spring', 2018, 'B'),
('54321', 'CS-101', '1', 'Fall', 2017, 'A-'),
('54321', 'CS-190', '2', 'Spring', 2017, 'B+'),
('55739', 'MU-199', '1', 'Spring', 2018, 'A-'),
('76543', 'CS-101', '1', 'Fall', 2017, 'A'),
('76543', 'CS-319', '2', 'Spring', 2018, 'A'),
('76653', 'EE-181', '1', 'Spring', 2017, 'C'),
('98765', 'CS-101', '1', 'Fall', 2017, 'C-'),
('98765', 'CS-315', '1', 'Spring', 2018, 'B'),
('98988', 'BIO-101', '1', 'Summer', 2017, 'A'),
('98988', 'BIO-301', '1', 'Summer', 2018, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ID` varchar(10) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `sec_id` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`ID`, `course_id`, `sec_id`, `semester`, `year`) VALUES
('10101', 'CS-101', '1', 'Fall', 2017),
('12121', 'FIN-201', '1', 'Spring', 2018),
('15151', 'MU-199', '1', 'Spring', 2018),
('22222', 'PHY-101', '1', 'Fall', 2017),
('32343', 'HIS-351', '1', 'Spring', 2018),
('45565', 'CS-101', '1', 'Spring', 2018),
('45565', 'CS-319', '1', 'Spring', 2018),
('76766', 'BIO-101', '1', 'Summer', 2017),
('76766', 'BIO-301', '1', 'Summer', 2018),
('83821', 'CS-190', '1', 'Spring', 2017),
('83821', 'CS-190', '2', 'Spring', 2017),
('83821', 'CS-319', '2', 'Spring', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `time_slot_id` varchar(5) NOT NULL,
  `day` varchar(5) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`time_slot_id`, `day`, `start_time`, `end_time`) VALUES
('A', 'F', '08:00:00', '08:50:00'),
('A', 'M', '08:00:00', '08:50:00'),
('A', 'W', '08:00:00', '08:50:00'),
('B', 'F', '09:00:00', '09:50:00'),
('B', 'M', '09:00:00', '09:50:00'),
('B', 'W', '09:00:00', '09:50:00'),
('C', 'F', '11:00:00', '11:50:00'),
('C', 'M', '11:00:00', '11:50:00'),
('C', 'W', '11:00:00', '11:50:00'),
('D', 'F', '13:00:00', '13:50:00'),
('D', 'M', '13:00:00', '13:50:00'),
('D', 'W', '13:00:00', '13:50:00'),
('E', 'T', '10:30:00', '11:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`building`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`course_id`,`prereq_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`time_slot_id`,`day`,`start_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
