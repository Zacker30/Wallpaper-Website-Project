-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 06:58 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Zac', '$2y$10$C0P/iQZ.UTbGTKPmGNhWwOICRcMDI6lHKLp6wBrQDWumA1kTfqNHO', '2022-11-28 17:56:57'),
(2, 'pratham', '$2y$10$yzpT1VPUULnBJNdd.LNR8uXXOkpjB8/cmBIz8MuAQaypHR8gEw86O', '2022-11-28 18:26:08'),
(3, 'manavpaliwal97', '$2y$10$pDggUTF6Mgjw3XxbQ/tNNOs4V2H.gricQH5ajjD5E7ex7I4pAMNuK', '2022-11-28 23:41:23'),
(4, 'suruj', '$2y$10$/b.7OjE.O09wCRkzkeSeN.5hEcsheyaVl1.h.64P513q/BeO9r1H6', '2022-11-29 00:40:15'),
(5, 'Zacker300', '$2y$10$Lhl5.tMcoSUs73y1pVdvM.2w0yP.uGil1VBdWWNm7IVHppT14MzIa', '2022-11-30 21:01:30'),
(6, 'Dishant', '$2y$10$FsN/C0fGAAW1Rr1G0SSMqeHBT3v0mKmSc8sB1swZT6uE8J0JdNIqy', '2022-12-01 01:15:46'),
(7, 'balls', '$2y$10$ajb659hDzNoP3bmbwaBADOZHmUgp1azbO//4hWMXAZTAnqETDMObi', '2022-12-04 18:01:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
