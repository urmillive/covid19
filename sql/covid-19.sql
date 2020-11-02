-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 07:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'urmil', 'urmil');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `ans_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'yes', 1),
(2, 'No', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_signup`
--

CREATE TABLE `client_signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_signup`
--

INSERT INTO `client_signup` (`id`, `name`, `mobile`, `username`, `password`) VALUES
(1, 'sample', '1231231231', 'sample', 'sampel'),
(2, 'urmil', '1231231231', 'urmil', '123'),
(3, 'urmil', '123456789', 'sdfsf', 'sdfsdf'),
(4, 'chiman', '9979715643', 'chiman', '123123'),
(5, 'rudra', '9327531470', 'rudra', 'rudra#234'),
(6, 'Rakesh Savaliya', '9979915615', 'rakesh123', 'rakesh123'),
(7, 'surya', '9919011558', 'surya', 'surya');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `reason`) VALUES
(3, 'hi', 'hi@gmail.com', '1231231231', 'sample details'),
(4, 'sadfsf', 'sfsf2@gmail.com', '123', 'lorem'),
(5, 'tests', 'test@gmail.com', '1231231231', 'hi there');

-- --------------------------------------------------------

--
-- Table structure for table `contra`
--

CREATE TABLE `contra` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contra`
--

INSERT INTO `contra` (`id`, `fname`, `lname`, `username`, `email`, `city`, `zip`, `reason`) VALUES
(1, 'Urmil', 'Rupareliya', 'urmil', 'urmil@gmail.com', 'amreli', 123123, 'hi there');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `ans_id` int(255) NOT NULL,
  `a1` varchar(1000) NOT NULL,
  `a2` varchar(1000) NOT NULL,
  `a3` varchar(1000) NOT NULL,
  `a4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questions`, `ans_id`, `a1`, `a2`, `a3`, `a4`) VALUES
(1, 'What is your age ?', 1, '6-18', '19-25', '25-40', '40-above'),
(2, 'Are you having one or more of the following symptoms ?', 4, 'Feeling shortness of breath', 'Fever or dry cough', 'Running Nose', 'None of above'),
(3, 'Do you currently have any of these health conditions ?', 4, 'Asthma', 'Cancer', 'diabetes', 'None of above'),
(4, 'Have you or someone in your family staying with you came in close contact with a laboratory confirmed COVID-19 patient in the last 14 days without protective gear(mask or PPE)?', 2, 'YES', 'NO', '', ''),
(5, 'what is your color code in Aarogya Setu app ? (the aarogya setu app categorizes user into 4 colors based on self assessment)', 4, 'Red color(COVID positive)', 'Orange color (Hight Risk)', 'Yellow Color (Moderate Risk)', 'Green color (Low Risk)');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `ttmp` datetime NOT NULL DEFAULT current_timestamp(),
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `post`, `ttmp`, `sname`) VALUES
(5, 'hi there\r\n', '2020-10-05 09:25:18', 'urmil'),
(6, 'sdf', '2020-10-05 09:27:37', 'urmil'),
(7, 'sd', '2020-10-05 10:08:14', 'surya'),
(8, 'sdf', '2020-10-05 10:21:54', 'surya'),
(9, 'hello guys', '2020-10-05 10:22:01', 'surya'),
(10, 'hi need a logo\r\n', '2020-10-05 10:22:37', 'urmil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `client_signup`
--
ALTER TABLE `client_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contra`
--
ALTER TABLE `contra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_signup`
--
ALTER TABLE `client_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contra`
--
ALTER TABLE `contra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
