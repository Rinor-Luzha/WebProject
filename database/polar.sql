-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 03:41 PM
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
-- Database: `polar`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `imageuri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `imageuri`) VALUES
(1, 'images/slider/gigabyteMonitor.jpg'),
(2, 'images/slider/msiLaptop.png'),
(3, 'images/slider/razerPc.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'new'),
(2, 'trending');

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `productId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`productId`, `categoryId`) VALUES
(58, 2),
(59, 2),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 2),
(65, 1),
(76, 1),
(80, 1),
(82, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `imageuri` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `lastEditedBy` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `price`, `imageuri`, `type`, `lastEditedBy`) VALUES
(54, 'MSI Optix MEG381CQR Gaming Monitor 38\", IPS, 175Hz, Black', '999.99', 'images/monitor/monitor6.png', 'monitor', NULL),
(55, 'MSI Optix MPG341CQR Gaming Monitor 27\" WQHD, IPS, 170Hz, Black', '950.99', 'images/monitor/monitor7.png', 'monitor', 'rinor luzha'),
(56, 'MSI Optix G242 Gaming Monitor 23.8\" WQHD, IPS, 144Hz, Grey', '699.99', 'images/monitor/monitor8.png', 'monitor', NULL),
(57, 'MSI Optix G242 Gaming Monitor 23.8\" WQHD, IPS, 144Hz, Grey', '699.99', 'images/monitor/monitor8.png', 'monitor', NULL),
(58, 'MSI MAG VAMPIRIC 300 SeriesIntel Core i5, 16 GB RAM, 512 GB SSD, NVIDIA GeForce GTX 1650 Ti, grey', '1800.00', 'images/desktop/desktop2.png', 'desktop', NULL),
(59, 'MSI GS76 STEALTH Core i7 11th Gen, 16 GB RAM, 512 GB SSD, NVIDIA® GeForce GTX™ 1650 Ti, Black', '2200.00', 'images/laptop/laptop2.png', 'laptop', NULL),
(60, 'OMEN by HP 30L GT13-0038nc, Intel Core i7, 32GB RAM, 2TB SSD, NVIDIA GeForce RTX 3080, black', '2000.99', 'images/desktop/desktop6.png', 'desktop', 'rinor luzha'),
(61, 'DELL ALIENWARE M15 R6 GAMING Core i9 12th Gen, 32 GB RAM, 1 TBSSD, NVIDIA® GeForce RTX™ 3050 Ti, Black', '1999.99', 'images/laptop/laptop1.png', 'laptop', 'rinor luzha'),
(62, 'DELL ALIENWARE M15 R6 GAMING Core i7 11th Gen, 16 GB RAM, 512GB SSD, NVIDIA® GeForce RTX™ 3050 Ti, White', '2199.99', 'images/laptop/laptop7.png', 'laptop', NULL),
(63, 'MSI Aegis TI3 VR7RD SLI-031EU, 32GB DDR4, 16GB GDDR5,NVIDIA® GeForce RTX™ 2080, black', '2200.00', 'images/desktop/desktop1.png', 'desktop', NULL),
(64, 'MSI MAG VAMPIRIC 300 SeriesIntel Core i5, 32 GB RAM, 1 TB SSD, NVIDIA GeForce GTX 1650 Ti, balck', '2509.99', 'images/desktop/desktop3.png', 'desktop', NULL),
(65, 'MSI MAG VAMPIRIC 300 SeriesIntel Core i7, 16 GB RAM, 512 GB SSD, NVIDIA GeForce GTX 1650 Ti, black', '2250.00', 'images/desktop/desktop4.png', 'desktop', NULL),
(66, 'MSI MAG VAMPIRIC 300 SeriesIntel Core i7, 8 GB RAM, 1 TB SSD, NVIDIA GeForce GTX 1660 Ti, black', '2250.00', 'images/desktop/desktop5.png', 'desktop', NULL),
(67, 'DELL ALIENWARE AURORA R13 GAMING Core i5, 16 GB RAM, 512 GB SSD, NVIDIA GeForce RTX 2070, grey', '2800.59', 'images/desktop/desktop7.png', 'desktop', NULL),
(68, 'DELL ALIENWARE AURORA R14 GAMING AMD Ryzen™ 9, 64 GB RAM, 2 TB SSD, AMD Radeon™ RX 6800 XT 16GB GDDR6, Black', '3200.99', 'images/desktop/desktop8.png', 'desktop', NULL),
(69, 'DELL ALIENWARE AURORA R12 GAMING Core i5 11th Gen, 8 GB RAM, 256 GB SSD, NVIDIA GeForce GTX 1650 Ti, white', '3200.99', 'images/desktop/desktop9.png', 'desktop', NULL),
(70, 'DELL ALIENWARE AURORA R12 GAMING Core i7 10th Gen, 16 GB RAM, 256 GB SSD, NVIDIA GeForce GTX 980, grey', '3200.99', 'images/desktop/desktop10.png', 'desktop', NULL),
(71, 'MSI GE76 Raider Dragon Edition Tiamat Core i9, 32 GB RAM, 1 TB SSD, NVIDIA® GeForce RTX™ 3080, Gold', '3699.99', 'images/laptop/laptop3.png', 'laptop', NULL),
(72, 'MSI GE75 Raider Core i9 10th Gen, 16 GB RAM, 512 GB SSD, NVIDIA® GeForce RTX™ 2080 SUPER, Black', '2500.99', 'images/laptop/laptop4.png', 'laptop', NULL),
(73, 'MSI Stealth 15M Core i7 11th Gen, 16 GB RAM, 512 GB SSD, NVIDIA® GeForce RTX™ 3060, White', '2900.99', 'images/laptop/laptop5.png', 'laptop', NULL),
(74, 'DELL ALIENWARE M15 R6 GAMING Core i7 11th Gen, 16 GB RAM, 1 TB SSD, NVIDIA® GeForce RTX™ 3050 Ti, Black', '1999.99', 'images/laptop/laptop6.png', 'laptop', NULL),
(75, 'DELL ALIENWARE M15 R6 GAMING Core i9 12th Gen, 32 GB RAM, 512 GB SSD, NVIDIA® GeForce RTX™ 3050 Ti, Black', '2900.99', 'images/laptop/laptop8.png', 'laptop', NULL),
(76, 'ACER PREDATOR TRITON 500 SE Core i7 11th Gen, 16 GB RAM, 512 GB SSD, NVIDIA® GeForce RTX™ 3050 ti, Silver', '2950.99', 'images/laptop/laptop9.png', 'laptop', NULL),
(77, 'ACER PREDATOR HELIOS 500 Core i9 10th Gen, 16 GB RAM, 512 GB SSD, NVIDIA® GeForce RTX™ 3060, Black', '3100.00', 'images/laptop/laptop10.png', 'laptop', NULL),
(78, 'ACER Predator Z35 UltraWide QHD 4K, 35\", 200Hz, Black/Red', '700.00', 'images/monitor/monitor1.png', 'monitor', NULL),
(79, 'ACER Predator X35 UltraWide HDR 4K, 35\", 200Hz, Black', '960.99', 'images/monitor/monitor2.png', 'monitor', NULL),
(80, 'ACER PREDATOR X38 UltraWide QHD 4K Curved, 35\", 175Hz, Grey', '850.99', 'images/monitor/monitor3.png', 'monitor', NULL),
(81, 'ASUS TUF VG27AQL1A Gaming Monitor 27\" WQHD, IPS, 170Hz, Black', '800.00', 'images/monitor/monitor4.png', 'monitor', NULL),
(82, 'ASUS ROG SWIFT PG43UQ Gaming Monitor 43\" 4K UHD, IPS, 144Hz, Black', '950.00', 'images/monitor/monitor5.png', 'monitor', NULL),
(83, 'MSI Optix MEG381CQR Gaming Monitor 38\", IPS, 175Hz, Black', '999.99', 'images/monitor/monitor6.png', 'monitor', NULL),
(84, 'MSI Optix MPG341CQR Gaming Monitor 27\" WQHD, IPS, 170Hz, Black', '950.99', 'images/monitor/monitor7.png', 'monitor', NULL),
(85, 'MSI Optix G242 Gaming Monitor 23.8\" WQHD, IPS, 144Hz, Grey', '699.99', 'images/monitor/monitor8.png', 'monitor', NULL),
(86, 'MSI Optix G242 Gaming Monitor 23.8\" WQHD, IPS, 144Hz, Grey', '699.99', 'images/monitor/monitor8.png', 'monitor', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userproducts`
--

CREATE TABLE `userproducts` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userproducts`
--

INSERT INTO `userproducts` (`id`, `userId`, `productId`) VALUES
(46, 6, 80),
(47, 6, 74);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `birthdate` date NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `gender`, `birthdate`, `usertype`) VALUES
(6, 'rinor', 'luzha', 'rinor@luzha.com', '494901d902629bee9cf130d700e4161f', 'M', '2003-12-28', 'admin'),
(8, 'ardit', 'begaj', 'ardit@begaj.com', '494901d902629bee9cf130d700e4161f', 'M', '2002-02-13', 'user');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`productId`,`categoryId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userproducts`
--
ALTER TABLE `userproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);


--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `userproducts`
--
ALTER TABLE `userproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD CONSTRAINT `productcategories_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productcategories_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userproducts`
--
ALTER TABLE `userproducts`
  ADD CONSTRAINT `userproducts_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userproducts_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
