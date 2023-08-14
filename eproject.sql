-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 09:03 PM
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
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlaywer`
--

CREATE TABLE `addlaywer` (
  `lawyer_id` int(11) NOT NULL,
  `laywer_name` varchar(100) NOT NULL,
  `l_image` varchar(100) NOT NULL,
  `cases` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addlaywer`
--

INSERT INTO `addlaywer` (`lawyer_id`, `laywer_name`, `l_image`, `cases`, `city`) VALUES
(3, 'abdullah', 'portfolio-2.jpg', '', ''),
(4, 'abdullah', 'portfolio-2.jpg', '', ''),
(5, 'dahim sami', 'team-1.jpg', '', 'karachi'),
(6, 'dahim sami', 'team-1.jpg', '', 'karachi'),
(7, 'abrar', 'carousel-2.jpg', '', 'karachi'),
(8, 'dahim sami', 'carousel-2.jpg', 'fghfyf', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `addlaywers_details`
--

CREATE TABLE `addlaywers_details` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `d_city` varchar(100) NOT NULL,
  `d_cases` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `textarea` varchar(255) NOT NULL,
  `addlawyer_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlaywer`
--
ALTER TABLE `addlaywer`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `addlaywers_details`
--
ALTER TABLE `addlaywers_details`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `addlawyer_fk` (`addlawyer_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addlaywer`
--
ALTER TABLE `addlaywer`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addlaywers_details`
--
ALTER TABLE `addlaywers_details`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addlaywers_details`
--
ALTER TABLE `addlaywers_details`
  ADD CONSTRAINT `addlaywers_details_ibfk_1` FOREIGN KEY (`addlawyer_fk`) REFERENCES `addlaywer` (`lawyer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
