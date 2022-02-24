-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 09:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcq_answer`
--

CREATE TABLE `mcq_answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `is_correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq_answer`
--

INSERT INTO `mcq_answer` (`id`, `question_id`, `option`, `is_correct`) VALUES
(5, 2, 'Vxcvx', 0),
(6, 2, 'Vxcvvx', 0),
(7, 2, 'Vxvxv', 0),
(8, 2, 'Xvxvx', 0),
(9, 3, 'Options1cc', 0),
(10, 3, 'Options2', 0),
(11, 3, 'Options3', 0),
(12, 3, 'Options4', 1),
(13, 4, 'Bcbcbcvbcvbcbcbcv', 0),
(14, 4, 'Cbcb', 0),
(15, 4, 'Cbcbcb', 0),
(16, 4, 'Cbcb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mcq_master`
--

CREATE TABLE `mcq_master` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `isPaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq_master`
--

INSERT INTO `mcq_master` (`id`, `course_id`, `question`, `isPaid`) VALUES
(2, 2, 'Vxcv', 1),
(3, 2, 'Vxcv', 0),
(4, 6, 'Vbcvb', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mcq_answer`
--
ALTER TABLE `mcq_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_master`
--
ALTER TABLE `mcq_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mcq_answer`
--
ALTER TABLE `mcq_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mcq_master`
--
ALTER TABLE `mcq_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
