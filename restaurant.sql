-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2022 at 02:27 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `description`) VALUES
(2, 'Leotrim', 'Rexhaj', 'Gjithqka ne rregull!!');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `res_firstname` varchar(30) NOT NULL,
  `res_lastname` varchar(30) NOT NULL,
  `adresa` varchar(30) NOT NULL,
  `res_email` varchar(30) NOT NULL,
  `res_phone` varchar(30) NOT NULL,
  `res_date` date NOT NULL,
  `res_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `res_firstname`, `res_lastname`, `adresa`, `res_email`, `res_phone`, `res_date`, `res_time`) VALUES
(1, 'Rexhaj', 'Leotrim', 'Peje', 'leotrim_rexhaj@hotmail.com', '+38345634394', '2022-02-11', '12:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `stafi`
--

CREATE TABLE `stafi` (
  `id` int(11) NOT NULL,
  `staf_firstname` varchar(30) NOT NULL,
  `staf_lastname` varchar(30) NOT NULL,
  `staf_phone` varchar(30) NOT NULL,
  `photo` blob NOT NULL,
  `staf_email` varchar(30) NOT NULL,
  `adresa` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafi`
--

INSERT INTO `stafi` (`id`, `staf_firstname`, `staf_lastname`, `staf_phone`, `photo`, `staf_email`, `adresa`, `position`, `salary`) VALUES
(1, 'Leotrim', 'Rexhaj', '+38345634394', 0x706f7374312e706e67, 'leotrim_rexhaj@hotmail.com', 'Peje', 'Shef', '2000$'),
(3, 'Leotrim', 'Rexhaj', '+38345634394', 0x706f7374312e706e67, 'leotrim_rexhaj@hotmail.com', 'Peje', 'Shef', '2000$');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(1, 'Burim', 'Avdiu', '044111222', 'burim.avdiu@probitacademy.com', '123456'),
(2, 'Clirim', 'Kastrati', '044111222', 'clirim.kastrati@probitacademy.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafi`
--
ALTER TABLE `stafi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stafi`
--
ALTER TABLE `stafi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
