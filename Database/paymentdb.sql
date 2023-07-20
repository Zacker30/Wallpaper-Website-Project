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
-- Database: `paymentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cnumber` int(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` int(50) NOT NULL,
  `year` int(50) NOT NULL,
  `cvv` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `fname`, `email`, `cname`, `address`, `cnumber`, `city`, `exp`, `state`, `zipcode`, `year`, `cvv`) VALUES
(1, 'ada', 'adad@gmal.com', 'adadad', 'adad', 2147483647, 'asdasd', 'asdas', 'asd', 123456, 1111, 2222),
(2, 'Dishant Modi', 'devmodi30@gmail.com', 'Dishant Modi', 'i dunno', 2147483647, 'Surat', 'November', 'Gujarat', 395017, 2026, 6969),
(3, 'majju', 'majju@gmail.com', 'pratham', 'asjkdjkasd', 2147483647, 'pune', 'november', 'maharastra', 12345, 1999, 6969),
(4, 'abc', 'ajdjabd@gmail.com', 'akjda', 'asdk', 2147483647, 'kanskd', 'november', 'knaskd', 154664, 2002, 3245),
(5, 'pratham', 'prathammajethia@gmail.com', 'Prtaham Majethia', 'abcderd', 2147483647, 'pune', 'november', 'maharastra', 123456, 2025, 3551),
(6, 'asda', 'asdasd@gmail.com', 'asdasd', 'asdasdas', 2147483647, 'asdasd', 'asdasd', 'asda', 123456, 2222, 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
