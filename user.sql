-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 02:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `remark`) VALUES
('user@1', 'user 1', '$2y$10$MMTpOCWnl2tLcMaTQbTH/.9kEHFJmSHjib7cwQxVsodbONk8vAdrm', ''),
('user@2', 'user 2', '$2y$10$OwkLWzjtEoQm2W/eTxaHMuelyT2ziihC4azY2MysZCSSc0/UAdCI.', ''),
('user@3', 'user 3', '$2y$10$R.uJGfjw2INMZbSIPehPH.yu2sa67v577H6vysXrQZjCVGoR6GATe', ''),
('user@4', 'user 4', '$2y$10$Y/CQzMtq/X1zDMkA7KquEuCD9KZ.wCjlVxsHzbvR9gWqAqwPsMdpK', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
