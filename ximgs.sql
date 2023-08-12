-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12 أغسطس 2023 الساعة 09:43
-- إصدار الخادم: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `ximgs`
--
CREATE DATABASE IF NOT EXISTS `ximgs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `ximgs`;

-- --------------------------------------------------------

--
-- بنية الجدول `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `img_id` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- إرجاع أو استيراد بيانات الجدول `imgs`
--

INSERT INTO `imgs` (`id`, `img_id`, `img_src`) VALUES
(4, 'rphpl6K0rK2', 'de2c11ce004ce85793d3e6b83da19d8f.jpg'),
(5, 'T0VATrpIEe4', '2836770d9df75ed791f1120e9ae27559.jpg'),
(6, 'HmkMuf4L0bI', 'abee0b549bf6f0f4857069016973d8d2.jpg'),
(7, '5QkFMtcb9M0', '23d9df2117882a6831680fe149133cef.jpg'),
(8, 'vf45Ix4aM0U', '688a22bf3e039df6371d6566b6d21c4b.jpg'),
(9, '7Nl3aTz3zXC', 'e4bf31416d07f496256ebbf900e6524a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
