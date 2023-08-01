-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 10:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd_operation`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(255) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `course_name`) VALUES
(1, 'Web Developer'),
(2, 'Fornt End'),
(3, 'Back End');

-- --------------------------------------------------------

--
-- Table structure for table `student_applay_form`
--

CREATE TABLE `student_applay_form` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualifation` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `support` varchar(255) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_applay_form`
--

INSERT INTO `student_applay_form` (`id`, `name`, `qualifation`, `phone`, `email`, `support`, `course`) VALUES
(1, 'Sohan kumar', '12th', '4556789666', 'sohankumar@gmail.com', 'Rajkumarwebdeveloper', 'Web_Developer'),
(2, 'Rajiv kr', 'Honers part-1', '7896458965', 'rajivkr@gmail.com', 'HarishWebdeveloper', 'back_end'),
(4, 'Aman kumar', '10th', '8899775566', 'amankr123@gmail.com', 'Rajkumarwebdeveloper', 'Fornt End'),
(11, 'Anmolkumar', '12th', '8899502030', 'anmolkumar@gmail.com', 'Rajkumarwebdeveloper', 'back_end'),
(12, 'Arjun kumar shah', 'honers-part-3', '9080706050', 'arjunkr@gmail.com', 'amankrfrontwebdeveloper', 'Fornt End'),
(13, 'Vinod Raj', '10th', '7896458965', 'vinodkr@gmail.com', 'amankrfrontwebdeveloper', 'Web_Developer'),
(16, 'Vinod Raj', 'Honers part-1', '8899775566', 'vinodkr@gmail.com', 'HarishWebdeveloper', 'Web_Developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `student_applay_form`
--
ALTER TABLE `student_applay_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_applay_form`
--
ALTER TABLE `student_applay_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
