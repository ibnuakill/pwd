-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2024 at 02:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belanja`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `total_belanja` int NOT NULL,
  `diskon` int NOT NULL,
  `total_bayar` int NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `total_belanja`, `diskon`, `total_bayar`, `tanggal`) VALUES
(1, 120000, 12000, 108000, '2024-07-23 10:16:40'),
(2, 120000, 12000, 108000, '2024-07-23 10:16:41'),
(3, 120000, 12000, 108000, '2024-07-23 10:18:49'),
(4, 50000, 2500, 47500, '2024-07-23 10:19:46'),
(5, 50000, 2500, 47500, '2024-07-23 10:22:17'),
(6, 45000, 0, 45000, '2024-07-23 10:22:29'),
(7, 49500, 0, 49500, '2024-07-23 10:22:37'),
(8, 50000, 2500, 47500, '2024-07-23 10:22:43'),
(9, 50000, 2500, 47500, '2024-07-23 10:22:51'),
(10, 50000, 2500, 47500, '2024-07-23 10:26:16'),
(11, 50000, 2500, 47500, '2024-07-23 10:26:35'),
(12, 500000, 50000, 450000, '2024-07-23 10:27:02'),
(13, 30000, 0, 30000, '2024-07-23 10:29:54'),
(14, 120000, 12000, 108000, '2024-07-23 10:34:22'),
(15, 80000, 4000, 76000, '2024-07-23 10:34:45'),
(16, 75000, 3750, 71250, '2024-07-23 10:37:22'),
(17, 120000, 12000, 108000, '2024-07-23 10:37:36'),
(18, 120000, 12000, 108000, '2024-07-23 10:38:42'),
(19, 120000, 12000, 108000, '2024-07-23 10:39:29'),
(20, 120000, 12000, 108000, '2024-07-23 10:39:54'),
(21, 120, 0, 120, '2024-07-23 10:43:24'),
(22, 20000, 0, 20000, '2024-07-23 10:44:56'),
(23, 120000, 12000, 108000, '2024-07-23 11:02:09'),
(24, 50000, 2500, 47500, '2024-07-23 11:04:41'),
(25, 50000, 2500, 47500, '2024-07-23 11:05:16'),
(26, 120000, 12000, 108000, '2024-07-23 11:05:25'),
(27, 30000, 0, 30000, '2024-07-23 11:07:39'),
(28, 120000, 12000, 108000, '2024-07-23 11:54:31'),
(29, 30000, 0, 30000, '2024-07-23 11:54:40'),
(30, 70000, 3500, 66500, '2024-07-23 11:54:47'),
(31, 48000, 0, 48000, '2024-07-24 15:39:12'),
(32, 59000, 2950, 56050, '2024-07-24 15:39:24'),
(33, 120000, 12000, 108000, '2024-07-24 15:39:36'),
(34, 120000, 12000, 108000, '2024-07-24 15:44:09'),
(35, 120000, 12000, 108000, '2024-07-24 16:23:11'),
(36, 120000, 12000, 108000, '2024-07-24 16:29:18'),
(37, 120000, 12000, 108000, '2024-07-24 16:29:20'),
(38, 54000, 2700, 51300, '2024-07-24 16:39:23'),
(39, 54000, 2700, 51300, '2024-07-24 16:40:07'),
(40, 54000, 2700, 51300, '2024-07-24 16:42:07'),
(41, 120000, 12000, 108000, '2024-07-24 16:42:12'),
(42, 120000, 12000, 108000, '2024-07-24 16:42:24'),
(43, 120000, 12000, 108000, '2024-07-24 16:43:58'),
(44, 35000, 0, 35000, '2024-07-24 16:47:41'),
(45, 35000, 0, 35000, '2024-07-24 16:49:28'),
(46, 120000, 12000, 108000, '2024-07-24 16:52:49'),
(47, 120000, 12000, 108000, '2024-07-24 16:54:05'),
(48, 120000, 12000, 108000, '2024-07-24 16:54:25'),
(49, 120000, 12000, 108000, '2024-07-24 16:55:24'),
(50, 120000, 12000, 108000, '2024-07-24 16:55:40'),
(51, 120000, 12000, 108000, '2024-07-24 16:56:07'),
(52, 20000, 0, 20000, '2024-07-24 16:56:22'),
(53, 20000, 0, 20000, '2024-07-24 16:57:28'),
(54, 50000, 2500, 47500, '2024-07-24 16:57:43'),
(55, 120000, 12000, 108000, '2024-07-25 13:08:07'),
(56, 120000, 12000, 108000, '2024-07-25 13:08:45'),
(57, 120000, 12000, 108000, '2024-07-25 13:08:50'),
(58, 120000, 12000, 108000, '2024-07-25 13:26:40'),
(59, 57000, 2850, 54150, '2024-07-25 13:26:51'),
(60, 12000, 0, 12000, '2024-07-25 13:26:59'),
(61, 120000, 12000, 108000, '2024-07-26 13:06:38'),
(62, 60000, 3000, 57000, '2024-07-26 13:06:46'),
(63, 30000, 0, 30000, '2024-07-26 13:06:52'),
(64, 50000, 2500, 47500, '2024-09-12 14:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(5, 'ibnu123', 'fbe449ef4973fb93bc7f4b36c71af944', 'sarkamganas406@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
