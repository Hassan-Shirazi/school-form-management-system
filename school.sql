-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2025 at 06:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `f_cnic` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `c_level` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `study` varchar(100) NOT NULL,
  `lap_com` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `country`, `city`, `name`, `father`, `email`, `no`, `cnic`, `f_cnic`, `dob`, `course`, `c_level`, `address`, `study`, `lap_com`, `gender`, `image`) VALUES
(13, 'Pakistan', 'Karachi', 'Hassan', 'Muhammad Aslam', 'mhassansherazi152@gmail.com', '03703491729', '4240159667753', '4230159667753', '2008-08-14', 'AI & Data Science', 'Advance', 'House No 193', 'Inter', 'Yes', 'Male', '68b71840b327a.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
