-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 07:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donatetheblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact_no` varchar(16) NOT NULL,
  `save_life_date` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `gender`, `email`, `city`, `dob`, `contact_no`, `save_life_date`, `password`, `blood_group`) VALUES
(8, 'Laisul Morshed', 'Male', 'lm3123@gmail.com', 'Gazipur', '1996-04-03', '12345878810', '0', '8ddcff3a80f4189ca1c9d4d902c3c909', 'A+'),
(9, 'Sabbir Hossain', 'Male', 'sh1389045@gmail.com', 'Tangail', '1997-09-18', '01926241906', '0', 'e10adc3949ba59abbe56e057f20f883e', 'A-'),
(10, 'dummy ', 'Fe-male', 'sh124@gmail.com', 'Sherpur', '1972-02-01', '12348678910', '0', 'dc0fa7df3d07904a09288bd2d2bb5f40', 'A-'),
(11, 'DummyTwo', 'Male', 'hp123@gmail.com', 'Bogura', '1998-09-15', '12335678910', '0', '5690d363233fab288d51e9b4b4c70edb', 'B+'),
(12, 'Sabbir Hossain', 'Male', 'h.sabbir366@yahoo.com', 'Gopalganj', '1997-09-10', '01956241906', '0', 'e719b97358a676ad529e8970a7de311a', 'A-'),
(13, 'Khan alam', 'Male', 'h.sabbi36@yahoo.com', 'Jamalpur', '1995-09-17', '01926241908', '0', '5690d363233fab288d51e9b4b4c70edb', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
