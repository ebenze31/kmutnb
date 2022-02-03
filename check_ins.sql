-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2022 at 09:37 AM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viicheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_ins`
--

CREATE TABLE `check_ins` (
  `id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `check_in_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_ins`
--

INSERT INTO `check_ins` (`id`, `created_at`, `updated_at`, `user_id`, `time_in`, `time_out`, `check_in_at`, `student_id`) VALUES
(1, '2022-02-02 09:55:26', '2022-02-02 09:55:26', 1, '2022-02-02 16:55:24', NULL, '2บี กรีน จำกัด', '1'),
(2, '2022-02-02 09:55:32', '2022-02-02 09:55:32', 1, NULL, '2022-02-02 16:55:30', '2บี กรีน จำกัด', '1'),
(3, '2022-02-02 09:55:40', '2022-02-02 09:55:40', 1, '2022-02-02 16:55:39', NULL, '2บี กรีน จำกัด', '1'),
(4, '2022-02-02 09:55:46', '2022-02-02 09:55:46', 1, NULL, '2022-02-02 16:55:44', '2บี กรีน จำกัด', '1'),
(5, '2022-02-02 09:55:53', '2022-02-02 09:55:53', 64, '2022-02-02 16:55:47', NULL, '2บี กรีน จำกัด', '2'),
(6, '2022-02-02 09:56:54', '2022-02-02 09:56:54', 64, NULL, '2022-02-02 16:56:50', '2บี กรีน จำกัด', '2'),
(7, '2022-02-02 09:57:00', '2022-02-02 09:57:00', 64, '2022-02-02 16:56:59', NULL, '2บี กรีน จำกัด', '2'),
(8, '2022-02-02 09:57:05', '2022-02-02 09:57:05', 64, NULL, '2022-02-02 16:57:04', '2บี กรีน จำกัด', '2'),
(9, '2022-02-02 09:57:11', '2022-02-02 09:57:11', 64, '2022-02-02 16:57:10', NULL, '2BGREEN', NULL),
(10, '2022-02-02 09:57:15', '2022-02-02 09:57:15', 64, NULL, '2022-02-02 16:57:14', '2BGREEN', NULL),
(11, '2022-02-02 09:57:20', '2022-02-02 09:57:20', 64, '2022-02-02 16:57:18', NULL, '2BGREEN', NULL),
(12, '2022-02-02 09:57:22', '2022-02-02 09:57:22', 64, NULL, '2022-02-02 16:57:18', '2BGREEN', NULL),
(13, '2022-02-02 09:57:26', '2022-02-02 09:57:26', 64, '2022-02-02 16:57:25', NULL, '2BGREEN', NULL),
(14, '2022-02-02 09:57:29', '2022-02-02 09:57:29', 64, NULL, '2022-02-02 16:57:28', '2BGREEN', NULL),
(15, '2022-02-02 09:57:32', '2022-02-02 09:57:32', 64, '2022-02-02 16:57:28', NULL, '2BGREEN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_ins`
--
ALTER TABLE `check_ins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_ins`
--
ALTER TABLE `check_ins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
