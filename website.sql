-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` bigint(20) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `img_path`, `name`, `date`) VALUES
(1, 'nikes/airforce/airforce7.webp', 'Nike Air Force', '2024-02-01 16:02:19'),
(2, 'nikes/airforce/airforce2.webp', 'Nike Air Force', '2024-02-01 16:31:56'),
(3, 'nikes/airforce/airforce9.jpg', 'Nike Air Force', '2024-02-01 16:32:16'),
(4, 'nikes/airforce/airforce5.webp', 'Nike Air Force', '2024-02-01 16:32:39'),
(5, 'nikes/uptempo/uptempo5.jpg', 'Nike Uptempo', '2024-02-01 16:32:59'),
(6, 'nikes/uptempo/uptempo9.jpg', 'Nike Uptempo', '2024-02-01 16:33:51'),
(7, 'nikes/uptempo/uptempo3.jpg', 'Nike Uptempo', '2024-02-01 16:34:10'),
(8, 'nikes/uptempo/uptempo4.jpg', 'Nike Uptempo', '2024-02-01 16:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `password`, `date`) VALUES
(1, 31573855, 'Aldin', 'aldin@gmail.com', '123123123', '2024-01-24 23:32:44'),
(2, 818797923341879200, 'Blend', 'Blend@gmail.com', '292929292', '2024-01-24 23:40:44'),
(3, 542146877753910, 'lalala', 'lalala@gmail.com', '0919091', '2024-01-24 23:53:54'),
(7, 89512525712355420, 'kakakakak', 'asmdn@gmail.com', 'aksk29929s', '2024-01-25 20:47:19'),
(10, 28197069692, 'Muhamet', 'meti@gmail.com', 'akssmsms', '2024-01-28 20:25:32'),
(11, 116586878432340082, 'Mimi', 'mimi@gmail.com', 'mimi123', '2024-01-31 19:37:39'),
(12, 18771325235936, 'Mbappe', 'lionelmessi@gmail.com', 'lionelmbappe', '2024-01-31 20:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
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
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
