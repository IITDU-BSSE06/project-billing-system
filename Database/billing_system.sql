-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 01:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`admin_id`, `user_id`, `user_type`, `program_id`) VALUES
(0, 14, 'coordinator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `bill_name` varchar(100) NOT NULL,
  `bill_amount` double(10,0) NOT NULL,
  `bill_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bill_categories` text NOT NULL,
  `bill_categories_criteria` text NOT NULL,
  `coordinator_decision` int(11) NOT NULL,
  `director_decision` int(11) NOT NULL,
  `decision` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `bill_name`, `bill_amount`, `bill_time`, `bill_categories`, `bill_categories_criteria`, `coordinator_decision`, `director_decision`, `decision`, `user_id`) VALUES
(1, 'BSSE Program', 0, '2016-11-15 14:03:51', '', '', 1, 2, 1, 15),
(2, 'MSSE Program', 0, '2016-11-15 17:03:55', '', '', 0, 0, 0, 15),
(3, 'PGD IT Program', 0, '2016-11-15 17:04:24', '', '', 1, 0, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `expression` varchar(100) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `expression`, `program_id`) VALUES
(1, 'script checking', '', 0),
(2, 'supervision', '', 0),
(3, '11', '', 10),
(4, '12', '', 10),
(5, 'lul', '3+5+6', 11),
(6, 'laal', '1*2', 11),
(7, 'lul', '3+5+6', 11),
(8, 'laal', '1*2', 11),
(9, 'marksheet', '( 3 * 4 )', 2);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `criteria_id` int(11) NOT NULL,
  `criteria_name` varchar(50) NOT NULL,
  `program_id` int(11) NOT NULL,
  `criteria_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `criteria_name`, `program_id`, `criteria_amount`) VALUES
(1, 'contribution', 0, NULL),
(2, 'taka', 0, NULL),
(3, '12345', 10, NULL),
(4, 'maruf', 11, NULL),
(5, 'jibair', 11, NULL),
(6, 'taw', 11, NULL),
(7, 'maruf', 11, NULL),
(8, 'jibair', 11, NULL),
(9, 'taw', 11, NULL),
(10, 'taka per credit', 2, NULL),
(11, 'contribution', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `info` varchar(100) NOT NULL,
  `is_seen` int(11) NOT NULL DEFAULT '0',
  `notification_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_id`, `info`, `is_seen`, `notification_time`) VALUES
(1, 15, 'Your bill on BSSE Program has been submitted for approval.', 1, '2016-11-16 14:29:40'),
(2, 15, 'Your bill on BSSE Program has been approved.', 1, '2016-11-16 14:29:58'),
(3, 15, 'Your bill on BSSE Program has been submitted for approval.', 1, '2016-11-16 14:30:53'),
(4, 15, 'Your bill on PGD IT Program has been submitted for approval.', 1, '2016-11-16 14:30:53'),
(5, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 14:30:53'),
(6, 15, 'Your bill on MSSE Program has been submitted for approval.', 1, '2016-11-16 14:30:53'),
(7, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:23:31'),
(8, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:23:31'),
(9, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:23:31'),
(10, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:23:32'),
(11, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:24:43'),
(12, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:24:43'),
(13, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:24:43'),
(14, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:27:33'),
(15, 15, 'Your bill on PGD IT Program has been approved.', 1, '2016-11-16 15:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`) VALUES
(1, 'BSSE'),
(2, 'MSSE'),
(3, 'PGD IT NEW PRogram'),
(4, 'lame'),
(5, 'ahaha'),
(6, 'new prog'),
(7, 'new progppppppp'),
(8, 'new progppppppp'),
(9, 'pgdit updated'),
(10, '123'),
(11, 'checking'),
(12, 'checking'),
(13, 'msse');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submission_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `bill_name` varchar(50) NOT NULL,
  `bill_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`submission_id`, `user_name`, `bill_name`, `bill_time`) VALUES
(1, 'Fazle Mohammed Tawsif', 'PGD IT Program', '2016-11-16 14:42:12'),
(2, 'Ariful Hoque Maruf', 'BSSE Program', '2016-11-16 14:42:12'),
(3, 'Fazle Mohammed Tawsif', 'MSSE Program', '2016-11-16 14:42:12'),
(4, 'Fazle Mohammed Tawsif', 'BSSE Program', '2016-11-16 14:42:12'),
(5, 'Fazle Mohammed Tawsif', 'Short Course Program', '2016-11-16 14:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_verification` varchar(50) NOT NULL,
  `user_activation` int(10) NOT NULL,
  `user_designation` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_signature` text NOT NULL,
  `user_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_verification`, `user_activation`, `user_designation`, `user_address`, `user_signature`, `user_image`) VALUES
(14, 'Ariful Hoque Maruf', 'ahqmrf@gmail.com', '111111', 'de798f00cacec5b0ecf791d40b8d1158', 1, 'lecturer', '', '', ''),
(15, 'Fazle Mohammed Tawsif', 'tawsif@gmail.com', '111111', '', 1, '', '', '', 'uploads/12-15.PNG'),
(16, 'maruf', 'maruf.iitdu@gmail.com', '111111', '1f9919a485121f5c6c87e615d005ddf5', 1, 'lecturer', '', '', ''),
(17, 'Md. Jubair Ibna Mostafa', 'jubair0614@gmail.com', '', '2bdbdb649c74eb87886b6a810c7f8f72', 1, 'assistantProfessor', '', '', 'uploads/About Window.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`criteria_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `criteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
