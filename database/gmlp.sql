-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 12:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmlp`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_registration`
--

CREATE TABLE `game_registration` (
  `game_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `domain_name` varchar(255) NOT NULL,
  `student_level` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gameurl` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_registration`
--

INSERT INTO `game_registration` (`game_id`, `company_name`, `game_name`, `domain_name`, `student_level`, `description`, `gameurl`, `image`) VALUES
(1, 'SAAS Mobile', 'Physics perfect', 'Physics', 'Grade 10', 'Best physics game available with lab tutorials', 'www.sur.cas.edu.om', 'Biology_game.jpg'),
(2, 'Cas Mobile', 'Chemisty Perfect', 'Chemistry', 'Grade 9', 'Best Chem game', 'https://www.youtube.com/', 'Multiplication_game.png'),
(3, 'Cas Mobile', 'English Best', 'English', 'Grade 5', 'best  english grammer .Match vocabularies to improve your english speaking skills.', 'https://www.facebook.com/', 'English_game.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `schooladmin_schoolmanager`
--

CREATE TABLE `schooladmin_schoolmanager` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schooladmin_schoolmanager`
--

INSERT INTO `schooladmin_schoolmanager` (`user_id`, `firstname`, `secondname`, `role`, `email`, `phonenumber`, `school_id`) VALUES
(13, 'ALAMIN', 'MAGOTI', 'School Administrator', 'alihassanmzungu930@gmail.com', '+254704979852', 1),
(14, 'Yaqoub', 'Al Farsy', 'School Administrator', 'cg.sur@cas.edu.om', '+96825540040', 3);

-- --------------------------------------------------------

--
-- Table structure for table `school_list`
--

CREATE TABLE `school_list` (
  `school_id` int(11) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `schooladdress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_list`
--

INSERT INTO `school_list` (`school_id`, `schoolname`, `schooladdress`) VALUES
(1, 'Al Ghubra Private School- 593175', 'SUR'),
(2, 'Oman Sail Sur Sailing School', 'SUR'),
(3, 'Alaajh School for Basic Education Girls', 'SUR'),
(4, 'Hay Al-Sharooq International School', 'SUR'),
(5, 'Indian School', 'SUR'),
(6, 'Qabas Oman School', 'SUR');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `studentlevel` varchar(255) NOT NULL,
  `school_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`user_id`, `firstname`, `secondname`, `email`, `studentlevel`, `school_id`) VALUES
(1, 'ALAMIN', 'JUMA', 'alimagoti95@gmail.com', 'Grade 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_registration`
--

CREATE TABLE `teacher_registration` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `teacherSubject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `school_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_registration`
--

INSERT INTO `teacher_registration` (`user_id`, `firstname`, `secondname`, `teacherSubject`, `email`, `phonenumber`, `school_id`) VALUES
(4, 'Yaqoub', 'Al Farsy', 'Mathematics', 'cg.sur@cas.edu.om', '+96825540040', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_authentication`
--

CREATE TABLE `user_authentication` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_authentication`
--

INSERT INTO `user_authentication` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '80a19f669b02edfbc208a5386ab5036b', 'Platform Admin'),
(12, 'alamin5991', '443c579704d87bbf273a47aeeb794588', 'School Admin'),
(13, 'ali', 'c707266b06e583af237abb082a1bbe99', 'School Manager'),
(14, 'sahali', 'e1bfd7cd5bb0d465f271456e5c1bded7', 'Teacher'),
(15, 'hadija', 'ce02c38d0fecefab08b0745e404f4993', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_registration`
--
ALTER TABLE `game_registration`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `schooladmin_schoolmanager`
--
ALTER TABLE `schooladmin_schoolmanager`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_userRegistration_schoolList` (`school_id`);

--
-- Indexes for table `school_list`
--
ALTER TABLE `school_list`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `foreignKey_StudentRegistration_schoolList` (`school_id`);

--
-- Indexes for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `foreignKey_TeacherRegistration_schoolList` (`school_id`);

--
-- Indexes for table `user_authentication`
--
ALTER TABLE `user_authentication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_registration`
--
ALTER TABLE `game_registration`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schooladmin_schoolmanager`
--
ALTER TABLE `schooladmin_schoolmanager`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `school_list`
--
ALTER TABLE `school_list`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_authentication`
--
ALTER TABLE `user_authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schooladmin_schoolmanager`
--
ALTER TABLE `schooladmin_schoolmanager`
  ADD CONSTRAINT `fk_userRegistration_schoolList` FOREIGN KEY (`school_id`) REFERENCES `game_learning_management_platform`.`school_list` (`school_id`);

--
-- Constraints for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `foreignKey_StudentRegistration_schoolList` FOREIGN KEY (`school_id`) REFERENCES `school_list` (`school_id`);

--
-- Constraints for table `teacher_registration`
--
ALTER TABLE `teacher_registration`
  ADD CONSTRAINT `foreignKey_TeacherRegistration_schoolList` FOREIGN KEY (`school_id`) REFERENCES `school_list` (`school_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
