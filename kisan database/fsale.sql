-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2020 at 02:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `fsale`
--

CREATE TABLE `fsale` (
  `sno` int(8) NOT NULL,
  `id` varchar(7) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `crop` varchar(40) NOT NULL,
  `des` varchar(200) NOT NULL,
  `price` int(6) NOT NULL,
  `quan` int(6) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `code` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fsale`
--

INSERT INTO `fsale` (`sno`, `id`, `photo`, `crop`, `des`, `price`, `quan`, `unit`, `code`, `product_id`) VALUES
(1, 'FA84051', 'photo/tensor graph.png', 'padfaasdf', 'asdfasd12', 121, 122, 'grams', 'potato1', 1),
(2, 'FA84051', 'photo/potato.jpg', 'potato', 'local', 30, 200, 'kg', 'potato2', 2),
(3, 'FA84051', 'photo/constant.png', 'city', 'test', 3222, 123, 'tones', 'potato3', 3),
(12, 'FA84051', 'photo/tensor graph.png', 'cotton', 'ewrtyuy', 1223, 32, 'tones', '8390', 28939),
(13, 'FA84051', 'photo/rahul.jpg', 'rahul', 'rahul crops', 321, 123, 'tones', '5643', 16278);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fsale`
--
ALTER TABLE `fsale`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fsale`
--
ALTER TABLE `fsale`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
