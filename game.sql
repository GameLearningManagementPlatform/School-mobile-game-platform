-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 06:00 PM
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
-- Database: `game_learning_management_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL,
  `domain_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `student_level` varchar(255) NOT NULL,
  `domain_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `game_name`, `company_id`, `domain_id`, `company_name`, `student_level`, `domain_name`, `description`, `image`) VALUES
(6, 'English Best', 125, 2, 'Cas Mobile', 'grade 5', 'English', 'best ', 'English_game.jpg'),
(8, 'Geograph', 455, 3, 'SAAS Mobile', 'grade 8', 'Geo', 'balalalla', 'Multiplication_game.png'),
(9, 'Multiplication', 315, 5, 'SAAS Mobile', 'grade 12', 'Mathematics', 'Best multiplication games', 'Multiplication_game.png'),
(11, 'English Best', 630, 5, 'Sohar Gurus', 'grade 2', 'English', 'English grammer', 'English_game.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
