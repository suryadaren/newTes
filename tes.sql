-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 05:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('administrator','officer','user') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `usia`, `telepon`, `email`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(4, 'surya', 'padang', '22', '085212341234', 'surya@gmail.com', '$2y$10$FzzthCdSAkoCx3AAvYW9h.8m8HAMDH75Wrikrk9JqHffZlOC5owie', NULL, 'administrator', '2019-12-17 00:53:56', '2019-12-17 00:53:56'),
(5, 'daren', 'jakarta', '23', '0852', 'daren@gmail.com', '$2y$10$1kv.oeth.BS4ipqJ4y8AReH7cAoBMV2TcBOFfr2vbdto7eKnWGcrm', NULL, 'officer', '2019-12-17 01:00:18', '2019-12-17 01:00:18'),
(6, 'hafizh', 'malang', '25', '0876544', 'hafizh@gmail.com', '$2y$10$Y3xBVfQJBVnnxU2QZLjEKOqNVsG16z6fdMXa8pPBL4TgcisNyBliW', NULL, 'user', '2019-12-17 01:00:41', '2019-12-17 01:00:41'),
(7, 'tes', 'tes', '11', '0988', 'tes@gmail.com', '$2y$10$1MXOVHdNvSqZCdBos0WJWOz8X82aXQwRr3ICBIpylQR4JpjmOAvvm', NULL, 'administrator', '2019-12-17 01:32:53', '2019-12-17 01:32:53'),
(8, 'tesss', 'tesss', '222', '977', 'tessss@gmail.com', '$2y$10$KomrKjSgshf39knrbWMLy.sHfPJMLT.O7WOd46BdlK28vRKZGlXj2', NULL, 'officer', '2019-12-17 01:33:43', '2019-12-17 01:33:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
