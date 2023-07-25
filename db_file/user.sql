-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 11:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `cnum` varchar(15) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `active_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `address`, `photo`, `status`, `votes`, `role`, `cnum`, `token`, `active_status`) VALUES
(8, 'gp', '98', '123', 'Ctwn', 'PP.jpg', 1, 7, 2, NULL, '', ''),
(9, 'bj', '9811111111', '123', 'kalika', 'WIN_20210712_11_31_0', 1, 0, 1, NULL, '', ''),
(10, 'AM', '9822222222', '123', 'Ramnager', 'WIN_20210712_11_31_0', 1, 4, 2, NULL, '', ''),
(11, 'Anzam', '9833333333', '123', 'sardi', 'WIN_20210712_11_31_0', 1, 2, 2, NULL, '', ''),
(12, 'saurav', '9844444444', '123', 'gorkha', 'WIN_20210712_11_31_0', 1, 0, 1, NULL, '', ''),
(13, 'sankalpa', '9855555555', '123', 'cancer', 'WIN_20210712_11_31_0', 1, 0, 1, NULL, '', ''),
(14, 'ayush', '9866666666', '123', 'cancer', '', 1, 0, 1, NULL, '', ''),
(15, 'sms', '9888888888', '1234', 'kalika', 'WIN_20210712_11_31_0', 1, 0, 1, NULL, '', ''),
(43, 'cow', '11', '123', 'ctwn', 'erdraw.jpg', 0, 0, 2, '11111', '', ''),
(50, 'man', '22', '123', 'ktm', 'erdraw.jpg', 0, 0, 2, '12345', '', ''),
(51, 'nan', '33', '123', 'ktm', 'erdraw.jpg', 0, 0, 2, '1122', '', ''),
(52, 'jam', '44', '123', 'ktm', 'erdraw.jpg', 0, 0, 2, '456', '', ''),
(54, 'mam', '66', '123', 'ktm', 'erdraw.jpg', 1, 0, 2, '789', '', ''),
(55, 'new', '99', '123', 'ktmn', 'erdraw.jpg', 1, 0, 2, '321', '', ''),
(56, 'samar', 'samar@gmail.com', '123', 'lolo', 'erdraw.jpg', 0, 0, 1, '09876', '', ''),
(58, 'bob', 'samar@gmail.com', '1234', 'okla', 'erdraw.jpg', 0, 0, 1, '4764764', '', ''),
(59, 'newcandidate', 'hallad@gmail.com', '123', 'kik', 'erdraw.jpg', 0, 0, 2, '37623', '', ''),
(60, 'gopal', 'gopal@gmail.com', '$2y$10$gh1ZP7PWiENJZ2OJCELjfuZ0yCg8evwE0HMd81Ct3Yx', 'ktm', 'erdraw.jpg', 0, 0, 1, '35453785', '', ''),
(62, 'samar', 'addyad00@gmail.com', '$2y$10$iwSXC6R2RMXa4HmhSz8YruHrsP4MDhRNWaxoLFkefoa', 'ktm', 'erdraw.jpg', 0, 0, 1, '346736', '', ''),
(63, 'lol', 'lol@lol.com', '$2y$10$V1aSnleFy1qYpP.WvUkSju7FUoSVpqLuoh4xYCn49pw', 'lol', 'erdraw.jpg', 0, 0, 1, '534653', 'c00c84ca1668a5acf5e6e2fdbaf08a', 'inactive'),
(80, 'SMS', 'dhakalsms1@gmail.com', '$2y$10$DbrWWZ7xf0wo.Foj.5WToOdCuubSkk1leDVVltoTlCV', 'Simara', 'PP.jpg', 0, 0, 1, '7537257', '0c8d8624ab9d4b41fb2cd04a9c5849', 'inactive'),
(81, 'Addy', 'dhitalsamar@gmail.com', '$2y$10$cxRHX4oh.DOmeD/iyZnRLuk5eO5L.qWHo9EPfktgGxx', 'Simara', 'PP.jpg', 0, 0, 1, '76532653', 'e01a1f3e7196337b00ba004faba163', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnum` (`cnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
