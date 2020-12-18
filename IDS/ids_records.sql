-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 12:48 PM
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
-- Database: `ids`
--

-- --------------------------------------------------------

--
-- Table structure for table `ids_records`
--

CREATE TABLE `ids_records` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `qualification` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `created on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ids_records`
--

INSERT INTO `ids_records` (`id`, `name`, `email`, `password`, `qualification`, `gender`, `address`, `phone`, `created on`, `updated on`) VALUES
(1, 'ashu', 'ruhani@gmail.com', '123', 'MCA,BBA', 'female', 'India', 'ruhani@gmail.com', '2020-12-18 09:46:03', '2020-12-18 10:20:16'),
(2, 'priya', 'ruhani@gmail.com', '12345', 'MCA,BBA', 'female', ' PTK ', 'ruhani@gmail.com', '2020-12-18 09:51:25', '2020-12-18 10:20:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ids_records`
--
ALTER TABLE `ids_records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ids_records`
--
ALTER TABLE `ids_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
