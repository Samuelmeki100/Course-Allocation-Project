-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 11:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course allocation project`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Certification` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `Name`, `Certification`) VALUES
(0, 'Catholic University of Malawi', NULL),
(1, 'University of Livingstonia', NULL),
(2, 'Nkhoma University', NULL),
(3, 'Daughter of immaculate and St ', NULL),
(4, 'Daeyang University', NULL),
(5, 'Pentecostal Life University', NULL),
(6, 'Malawi Assemblies of Godz()', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collegecourse`
--

CREATE TABLE `collegecourse` (
  `college` int(11) DEFAULT NULL,
  `course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegecourse`
--

INSERT INTO `collegecourse` (`college`, `course`) VALUES
(6, 1),
(6, 3),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `details` text,
  `duration` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `details`, `duration`) VALUES
(1, 'Education faculty', 'BEd. English minor social studies\r\nBEd. History Minor social studies\r\nBed. ICT Minor Mathematics\r\nBed. Religious education Minor social Studies\r\nBEd. social studies minor English\r\nBEd. Social Studies Minor history\r\nDiploma in Earlychildood', 4),
(2, 'Commerce Faculty', 'BCom. accounting\r\nBCom. Banking and  finance\r\nBCom. business administration\r\nBCom. business information systems\r\nBCom. human resource management\r\nBCom. insrance\r\naccounting concentration course\r\nbanking and finance concentration', 4),
(3, 'Theology Faculty', 'BA. Biblical studies\r\nBA. ministerial counseling\r\nBA.christian education\r\nBA. intercultural studies\r\n', 4),
(4, 'bible studies courses', 'studying the bible and understanding it', 4),
(5, 'business admin/management ', 'learn how to manage your business in different ways', 4),
(6, 'christian education', 'your life in christ', 4),
(7, 'community development', 'develop your community', 4),
(8, 'mass communication', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `coursemodule`
--

CREATE TABLE `coursemodule` (
  `module` int(11) DEFAULT NULL,
  `course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education_program`
--

CREATE TABLE `education_program` (
  `Name` char(10) NOT NULL,
  `Discrption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectsubjects`
--

CREATE TABLE `projectsubjects` (
  `subject` int(11) NOT NULL,
  `programe` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requeirdsubjectcourses`
--

CREATE TABLE `requeirdsubjectcourses` (
  `SubjectID` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requeirdsubjectcourses`
--

INSERT INTO `requeirdsubjectcourses` (`SubjectID`, `course`) VALUES
(13, 3),
(1, 5),
(9, 7),
(12, 7),
(10, 8),
(2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) DEFAULT NULL,
  `surname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `contact adress` varchar(50) NOT NULL,
  `model` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `surname`, `firstname`, `DOB`, `Gender`, `contact adress`, `model`, `Email`) VALUES
(1, 'samuel', 'meki', '1993-03-16', 'Male', 'BOX 1412 LL', 2147483647, 'Ricousemeki@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stundent educational profile`
--

CREATE TABLE `stundent educational profile` (
  `studentID` int(11) DEFAULT NULL,
  `gradution year` char(4) DEFAULT NULL,
  `1best` char(30) DEFAULT NULL,
  `2best` char(30) DEFAULT NULL,
  `3best` char(30) DEFAULT NULL,
  `4best` char(30) DEFAULT NULL,
  `5best` char(30) DEFAULT NULL,
  `6best` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stundent educational profile`
--

INSERT INTO `stundent educational profile` (`studentID`, `gradution year`, `1best`, `2best`, `3best`, `4best`, `5best`, `6best`) VALUES
(1, '2012', 'Math', 'English', 'Chichewa', 'Freanch', 'social study', 'Bible Studys');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'Math'),
(2, 'English'),
(3, ' Biology'),
(4, 'Physics/physical '),
(5, 'sciance'),
(6, 'Chemistry'),
(7, 'Music '),
(8, 'History'),
(9, 'Social'),
(10, ' Chichewa'),
(11, 'Geography'),
(12, 'Agriculture'),
(13, 'Bible knowlage');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `User Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `PP` tinyint(1) DEFAULT '0',
  `EP` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `User Name`, `Email`, `Password`, `PP`, `EP`) VALUES
(1, '12345', 'innocentphiri75@gmail.com', '12345', 0, 0),
(4, 'Q@q.c', 'Q@q.c', 'Q@q.c', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collegecourse`
--
ALTER TABLE `collegecourse`
  ADD KEY `college` (`college`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursemodule`
--
ALTER TABLE `coursemodule`
  ADD KEY `module` (`module`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `education_program`
--
ALTER TABLE `education_program`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectsubjects`
--
ALTER TABLE `projectsubjects`
  ADD KEY `subject` (`subject`),
  ADD KEY `programe` (`programe`);

--
-- Indexes for table `requeirdsubjectcourses`
--
ALTER TABLE `requeirdsubjectcourses`
  ADD KEY `SubjectID` (`SubjectID`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD KEY `id` (`id`);

--
-- Indexes for table `stundent educational profile`
--
ALTER TABLE `stundent educational profile`
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `collegecourse`
--
ALTER TABLE `collegecourse`
  ADD CONSTRAINT `collegecourse_ibfk_1` FOREIGN KEY (`college`) REFERENCES `college` (`id`),
  ADD CONSTRAINT `collegecourse_ibfk_2` FOREIGN KEY (`course`) REFERENCES `course` (`id`);

--
-- Constraints for table `coursemodule`
--
ALTER TABLE `coursemodule`
  ADD CONSTRAINT `coursemodule_ibfk_1` FOREIGN KEY (`module`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `coursemodule_ibfk_2` FOREIGN KEY (`course`) REFERENCES `course` (`id`);

--
-- Constraints for table `projectsubjects`
--
ALTER TABLE `projectsubjects`
  ADD CONSTRAINT `projectsubjects_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `projectsubjects_ibfk_2` FOREIGN KEY (`programe`) REFERENCES `education_program` (`Name`);

--
-- Constraints for table `requeirdsubjectcourses`
--
ALTER TABLE `requeirdsubjectcourses`
  ADD CONSTRAINT `requeirdsubjectcourses_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `requeirdsubjectcourses_ibfk_2` FOREIGN KEY (`course`) REFERENCES `course` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `stundent educational profile`
--
ALTER TABLE `stundent educational profile`
  ADD CONSTRAINT `stundent educational profile_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
