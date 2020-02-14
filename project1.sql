-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 01:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` bigint(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phoneno`, `password`, `createdat`) VALUES
(1, 'baljeet', 'baljeet@gmail.com', 55, '22', '2020-02-14 09:56:00'),
(2, 'baljeet', 'baljeet123@gmail.com', 655566, '55', '2020-02-14 10:17:32'),
(3, 'baljeet', 'baljeet@gmail.com', 55, '55', '2020-02-14 10:19:08'),
(4, 'baljeet', 'baljeet@gmail.com', 8888888, '77', '2020-02-14 10:19:40'),
(5, 'baljeet', 'baljeet1@gmail.com', 66, '88', '2020-02-14 10:22:24'),
(6, 'baljeet', 'baljeet1@gmail.com', 66, '66', '2020-02-14 10:23:12'),
(7, 'baljeet', 'baljeet1@gmail.com', 99999999999, '12', '2020-02-14 10:24:38'),
(8, 'baljeet', 'baljeet2@gmail.com', 655566, '66', '2020-02-14 10:36:03'),
(9, 'baljeet', 'baljeet@gmail.com', 655566, '69', '2020-02-14 10:48:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
