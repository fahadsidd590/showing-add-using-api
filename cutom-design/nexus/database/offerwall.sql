-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offerwall`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `username`, `email`, `password`) VALUES
(8, 'Muhammad Qadama', 'qadama', 'qadamaalam@gmail.com', 'qadama'),
(9, 'Fahad Siddiqui', 'Fahad', 'fahad@gmail.com', 'fahad'),
(10, 'Zaeem  Khan', 'Zaeem', 'zaeem@gmai.com', 'zaeem');

-- --------------------------------------------------------

--
-- Table structure for table `website_data`
--

CREATE TABLE `website_data` (
  `id` int(11) NOT NULL,
  `website_title` varchar(100) NOT NULL,
  `website_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_data`
--

INSERT INTO `website_data` (`id`, `website_title`, `website_url`) VALUES
(82, '', ''),
(83, 'qad', 'www.google.com'),
(84, 'fahad', 'www.google.com'),
(85, 'qad', 'www.google.com'),
(86, 'Google', 'www.google.com'),
(87, 'Google', 'www.google.com'),
(88, 'Google', 'www.google.com'),
(89, 'Google', 'www.google.com'),
(90, 'qadama', 'www.google.com'),
(91, 'Google', 'www.google.com'),
(92, 'Google', 'www.google.com'),
(93, 'google', 'www.google.com'),
(94, 'twitter', 'www.twitter.com'),
(95, 'Facebook', 'www.facebook.com'),
(96, 'Facebook', 'www.facebook.com'),
(97, 'facebook', 'www.facebook.com'),
(98, 'facebook', 'www.facebook.com'),
(99, 'twitter', 'www.twitter.com'),
(100, 'facebook', 'www.twitter.com'),
(101, 'facebook', 'www.facebook.com'),
(102, 'khan', 'remove.bg'),
(103, 'facebook', 'www.facebook.com'),
(104, 'facebook', 'www.facebook.com'),
(105, 'facebook', 'www.facebook.com'),
(106, 'twitter', 'www.twitter.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_data`
--
ALTER TABLE `website_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `website_data`
--
ALTER TABLE `website_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
