-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 10:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perspective`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

DROP TABLE IF EXISTS `art`;
CREATE TABLE `art` (
  `id` int(15) NOT NULL,
  `observer_id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `image_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `observer`
--

DROP TABLE IF EXISTS `observer`;
CREATE TABLE `observer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `creationDate` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `observer`
--

INSERT INTO `observer` (`id`, `username`, `email`, `password`, `creationDate`) VALUES
(5, 'yee', 'haw@gmail.com', '$2y$10$oCkbGzHKEU3Yue.BC5HpDu1Lqr5XmJqMWb.4KHr4Z7BFka4aVQNv2', '2021-01-07 16:45:05'),
(2, 'bruh', 'bruh@bruh.com', '$2y$10$dc/76hD6HZJgDa6/C53e0uELeZq8YbwFVZRJ4kZi0d/xJhVhw.9I2', '2021-01-04 23:42:17'),
(3, 'test', 'test@test.com', '$2y$10$AcKwZB4q1AvP5PKMLPqrR.gwRe0hW/ErRsm4xOyk0B/HbUiZTWQb.', '2021-01-04 23:45:39'),
(4, 'test2', 'test2@test.com', '$2y$10$dvYZNmsRpTX28KlGMfSm9eqtlXlTFXSK67e4z4QxXMzA4aIvYsZHO', '2021-01-04 23:46:07'),
(6, 'yikes', 'yikes@gmail.com', '$2y$10$rNO3G40xLaM6M/XgevDR9udgHSYAkpY5UGMkYSi3z2cL6jxj9Wpki', '2021-01-07 17:01:58'),
(10, 'abdi', 'abdidewax86@gmail.com', '$2y$10$PaxEQg.AtKhex4Lsc0446ubSh1y1k97VTHSqGosOw6gTL91iNO2/u', '2021-01-17 15:07:41'),
(11, 'abdi', 'updi@dewa.com', '$2y$10$nk5SapFyxW4pFWLhumF97ek5QAz9x6rSXGDMQ/udukyPX0rSCp1jm', '2021-01-17 16:01:44'),
(12, 'abdi', 'downdi@gmail.com', '$2y$10$V9PB0eX8zFqgwpZod/R1lOR/Ftqm26isNUluOxLpRFYdo5YrLKTqy', '2021-01-17 16:03:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observer`
--
ALTER TABLE `observer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `observer`
--
ALTER TABLE `observer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
