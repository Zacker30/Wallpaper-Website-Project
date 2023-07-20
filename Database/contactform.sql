-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 06:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-data`
--

CREATE TABLE `contact-data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(55) NOT NULL,
  `messages` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-data`
--

INSERT INTO `contact-data` (`id`, `firstname`, `lastname`, `phone`, `email`, `messages`, `file`) VALUES
(1, 'Rick', 'Astley', '9694201135', 'abc@gmail.com', 'Mic testing', ''),
(2, 'abc', 'def', '123456', 'abc@gmail.com', '123', ''),
(3, 'unknown', 'abc', '7817822000', 'devmodi30@gmail.com', 'any message', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-data`
--
ALTER TABLE `contact-data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact-data`
--
ALTER TABLE `contact-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
