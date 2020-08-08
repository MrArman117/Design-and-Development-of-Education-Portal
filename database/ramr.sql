-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 07:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramr`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`) VALUES
(1, 'programming', 'csec-114'),
(2, 'database', 'csec-115'),
(3, 'networking', 'csec-116');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `teacher_name`, `filepath`, `topic`) VALUES
(2, 'Lecture 3', 'saifullah sadi', 'events/invoice of nextSolution IT.pdf', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `last_ids`
--

CREATE TABLE `last_ids` (
  `teacher_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_ids`
--

INSERT INTO `last_ids` (`teacher_id`, `student_id`, `id`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 3, 3),
(5, 4, 4),
(8, 5, 5),
(9, 0, 6),
(10, 0, 7),
(11, 0, 8),
(12, 0, 9),
(0, 6, 10),
(0, 7, 11),
(13, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `teacher_name`, `type`) VALUES
(1, 'Deadline for assignment on SE', 'Saifullah Sadi', 'Programming'),
(2, 'A Assignment will be taken.', 'saifullah sadi', 'Programming'),
(4, 'CT will be taken on Monday', 'saifullah sadi', 'Programming'),
(5, 'assignment is cancelled', 'saifullah sadi', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `address2` text,
  `city` varchar(50) DEFAULT NULL,
  `remember_me` int(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `email`, `address`, `address2`, `city`, `remember_me`, `password`, `dept`, `type`, `photo`) VALUES
(1, 'Md Rajib', 'Mridha', 'rajib@gmail.com', 'kachabazar, DakshinKhan', 'Apartment, floor, city', 'Dhaka', 1, 'rajib', 'CSE', 'rajib', 'IMG_20170329_162436 - Copy.jpg'),
(2, 'Md Arman', 'Hossain', 'hossain@gmail.com', 'dewan bari', 'kachabazar', 'Dhaka', 1, 'arman', 'CSE', 'arman', '20180209234011_IMG_9203.JPG'),
(3, 'Munira Munmun', 'Mim', 'mim@gmail.com', 'Dhaka,Uttara,sector-12', 'Chittagong', 'Dhaka', 1, 'mim', 'CSE', 'mimo', 'mim.jpg'),
(4, 'Jannatun Nessa', 'Rushni', 'rushni@gmail.com', 'Tongi', 'Dhaka', 'Gazipur', 1, 'rushni', 'CSE', 'temp', 'rushni.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cou`
--

CREATE TABLE `stu_cou` (
  `studentid` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `address2` text,
  `city` varchar(50) DEFAULT NULL,
  `remember_me` int(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `first_name`, `last_name`, `email`, `address`, `address2`, `city`, `remember_me`, `password`, `position`, `type`, `photo`) VALUES
(1, 'Dr. A.H.M Saifullah', 'Sadi', 'sadi@gmail.com', 'uttara', 'dhaka', 'Dhaka-1230', 1, 'sadi', 'Associate Professor , Dept of CSE, Uttara University', 'sadi', '39256-saifullah.jpg'),
(2, 'Dr Mizanur', 'Rahman', 'mizan@gmail.com', 'dhaka', 'dhaka', 'Dhaka', 0, 'mizan', 'Chairman, Department of CSE', 'mizan', '010c1-mijanur.jpg'),
(13, 'Samirah', 'Anwar', 'samirah@gmail.com', 'Uttara', 'Uttara', 'Dhaka-1230', 0, 'samirah', 'Lecturer, Dept of CSE, Uttara University', 'samirah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_degree`
--

CREATE TABLE `teacher_degree` (
  `teacher_id` int(11) DEFAULT NULL,
  `degree_name` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_degree`
--

INSERT INTO `teacher_degree` (`teacher_id`, `degree_name`, `id`) VALUES
(1, 'Ph.D in Engineering (Mechatronics/Robotics), IIUM, Malaysia', 1),
(1, 'Master of Science Mechatronics Engineering, IIUM, Malaysia', 2),
(1, 'B.Sc. (Hons.) in Computer Science and Engineering, IIUC, Bangladesh', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tea_cou`
--

CREATE TABLE `tea_cou` (
  `teacher_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `filepath` text,
  `description` text,
  `course_type` varchar(255) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `filepath`, `description`, `course_type`, `teacher_id`) VALUES
(40, 'uploads/invoice of nextSolution IT.pdf', 'Lecture 2', 'programming', 1),
(41, 'uploads/CV-of-MUNIRA.docx', 'Lecture 3', 'software_engineering', 1),
(42, 'uploads/24_Project_BOOK-19-UPDATE.pdf', 'Lecture_01', 'programming', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_ids`
--
ALTER TABLE `last_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_degree`
--
ALTER TABLE `teacher_degree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `last_ids`
--
ALTER TABLE `last_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `teacher_degree`
--
ALTER TABLE `teacher_degree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
