-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2025 at 05:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(74, 'Nhẫn cưới', 'Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau', '4032000.00', './gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png'),
(90, 'Nhẫn cưới', 'Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau', '4032000.00', './gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png'),
(92, 'Nhẫn cưới', 'Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau', '4032000.00', 'sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png'),
(93, 'Nhẫn cưới', 'Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau', '4032000.00', 'sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png'),
(94, 'Bông tai', 'Bông tai Vàng trắng 14K đính đá Synthetic Disney Cinderella', '5779000.00', 'gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
