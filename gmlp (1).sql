-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 03:59 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `game_developers`
--

CREATE TABLE `game_developers` (
  `game_dev_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `API_key` varchar(255) NOT NULL,
  `verification_status` tinyint(4) NOT NULL DEFAULT 0,
  `verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_developers`
--

INSERT INTO `game_developers` (`game_dev_id`, `company_name`, `address`, `country`, `email`, `phone`, `created_at`, `API_key`, `verification_status`, `verified_at`) VALUES
(1, 'Cas Mobile', '65, Test street, Oman', 'UAE', 'xyz@email.com', '926-244-2342', '2020-04-26 23:49:05', 'asdfghjkl', 1, '2020-04-27 07:24:26');

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
  `image` varchar(255) NOT NULL,
  `game_dev_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_registration`
--

INSERT INTO `game_registration` (`game_id`, `company_name`, `game_name`, `domain_name`, `student_level`, `description`, `gameurl`, `image`, `game_dev_id`) VALUES
(1, 'SAAS Mobile', 'Physics perfect', 'Physics', 'Grade 10', 'Best physics game available with lab tutorials', 'www.sur.cas.edu.om', 'Biology_game.jpg', NULL),
(2, 'Cas Mobile', 'Chemisty Perfect', 'Chemistry', 'Grade 9', 'Best Chem game', 'https://www.youtube.com/', 'Multiplication_game.png', 1),
(3, 'Cas Mobile', 'English Best', 'English', 'Grade 5', 'best  english grammer .Match vocabularies to improve your english speaking skills.', 'https://www.facebook.com/', 'English_game.jpg', 1);

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
-- Table structure for table `score_board`
--

CREATE TABLE `score_board` (
  `score_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `play_mode` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score_board`
--

INSERT INTO `score_board` (`score_id`, `player_id`, `game_id`, `play_mode`, `start_time`, `end_time`, `score`, `created_at`) VALUES
(2, 1, 1, 'single', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 23, '2020-04-27 09:21:55'),
(3, 1, 1, 'single', '2020-04-27 10:19:20', '2020-04-27 10:23:54', 31, '2020-04-27 09:23:26'),
(5, 1, 1, 'single', '2020-04-27 10:19:20', '2020-04-27 10:23:54', 31, '2020-04-27 12:14:26'),
(6, 1, 2, 'single', '2020-04-27 10:19:20', '2020-04-27 10:23:54', 31, '2020-04-27 12:15:42'),
(7, 1, 3, 'single', '2020-04-27 10:19:20', '2020-04-27 10:23:54', 15, '2020-04-27 12:16:21');

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
-- Indexes for table `game_developers`
--
ALTER TABLE `game_developers`
  ADD PRIMARY KEY (`game_dev_id`);

--
-- Indexes for table `game_registration`
--
ALTER TABLE `game_registration`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `fk_game_dev_id` (`game_dev_id`);

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
-- Indexes for table `score_board`
--
ALTER TABLE `score_board`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `fk_game_id` (`game_id`),
  ADD KEY `fk_player_id` (`player_id`);

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
-- AUTO_INCREMENT for table `game_developers`
--
ALTER TABLE `game_developers`
  MODIFY `game_dev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `score_board`
--
ALTER TABLE `score_board`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `game_registration`
--
ALTER TABLE `game_registration`
  ADD CONSTRAINT `fk_game_dev_id` FOREIGN KEY (`game_dev_id`) REFERENCES `game_developers` (`game_dev_id`);

--
-- Constraints for table `score_board`
--
ALTER TABLE `score_board`
  ADD CONSTRAINT `fk_game_id` FOREIGN KEY (`game_id`) REFERENCES `game_registration` (`game_id`),
  ADD CONSTRAINT `fk_player_id` FOREIGN KEY (`player_id`) REFERENCES `student_registration` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
