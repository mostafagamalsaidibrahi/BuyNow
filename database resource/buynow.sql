-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 03:06 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buynow`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `cId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `specifications` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `classif` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `specifications`, `price`, `image`, `classif`, `time`) VALUES
(15, 'Infinix X653 Smart 4, Dual SIM, 16 GB, 1 GB RAM, 4G LTE, 6.6 Inch - Black', 1329, '1593200607.jpg', 'Mobiles', '2020-06-26 19:43:27'),
(16, 'Xiaomi Redmi Note 9S Dual SIM - 6.67 Inch, 128 GB, 6 GB RAM, 4G LTE - Aurora Blue', 4444, '1593200645.jpg', 'Mobiles', '2020-06-26 19:44:05'),
(17, 'Nokia 7.2 Dual SIM - 128GB, 6GB RAM, 4G LTE, Ice', 3999, '1593200682.png', 'Mobiles', '2020-06-26 19:44:42'),
(18, 'Samsung Galaxy Fold Dual SIM - 512GB, 12GB RAM, 4G LTE, Black', 35000, '1593200729.jpg', 'Mobiles', '2020-06-26 19:45:29'),
(19, 'MOBILE OPPO F11 PRO 128 GB-6G THUNDER BLACK', 5699, '1593200785.jpg', 'Mobiles', '2020-06-26 19:46:25'),
(20, 'SHARP Refrigerator Digital No Frost 450 Liter, 2 Doors In Black Color With Plasmacluster SJ-PC58A(BK)', 8215, '1593200892.jpg', 'Electronics', '2020-06-26 19:48:58'),
(21, 'Samsung 328 Liter Refrigerator With Freezer on Bottom - Inox, RB33J3220SS/M', 9997, '1593200922.jpg', 'Electronics', '2020-06-26 19:48:42'),
(22, 'LG FH4G6TDY6 Front Load Waching Machine, Silver', 8489, '1593200991.jpg', 'Electronics', '2020-06-26 19:49:51'),
(23, 'TOSHIBA Washing Machine Top Automatic 11 Kg With Pump In Dark Silver Color AEW-1190SUP(DS)', 5425, '1593201015.jpg', 'Electronics', '2020-06-26 19:50:16'),
(24, 'TOSHIBA Washing Machine Top Automatic 11 Kg With Pump In Dark Silver Color AEW-1190SUP(DS)', 5425, '1593201016.jpg', 'Electronics', '2020-06-26 19:50:16'),
(25, 'Unionaire C6080GS-AC-383-IDSH-S i-Chef Gas Cooker With Fan - 5 Burners', 5400, '1593201065.jpg', 'Electronics', '2020-06-26 19:51:05'),
(26, 'Fresh Free Standing Ranges - Black', 2499, '1593201096.jpg', 'Electronics', '2020-06-26 19:51:36'),
(27, 'AIO-3480 PC With 24-Inch Display, Core i5 Processor/8GB RAM/1TB HDD/Intel UHD Graphics 620 Black', 12999, '1593201162.jpg', 'Computers', '2020-06-26 19:52:42'),
(28, 'PC-K984-785 SCHNEIDER ELECTRIC - CPU PCK984785', 14500, '1593201188.jpg', 'Computers', '2020-06-26 19:53:08'),
(29, 'Dell Desktop(9020) core i5 with monitor Dell Opt 9020 Desktop PC ‫(Intel Core i5,500', 6700, '1593201231.jpg', 'Computers', '2020-06-26 19:53:51'),
(30, 'Lenovo Laptop 15.6 Inch ,1 TB,4 GB RAM,Intel 7th Generation Core i3,DOS,Black - IDEAPAD 130-15IKB', 6450, '1593201272.jpg', 'Computers', '2020-06-26 19:54:32'),
(31, 'ProBook 450 G6 Laptop With 15.6-Inch Display, Intel Core i5 Processor/8GB RAM/1TB HDD/2GB NVIDIA GeForce MX130 Graphics Card With Bag Natural Silver', 12499, '1593201293.jpg', 'Computers', '2020-06-26 19:54:53'),
(32, 'Inspiron 5593 Laptop With 15.6-Inch Display, Core i7 Processor/8GB RAM/1TB HDD + 256GB SSD Hybrid Drive/4GB NVIDIA GeForce MX230 Graphics Card With English/Arabic Keyboard Platinum Silver', 14211, '1593201325.jpg', 'Computers', '2020-06-26 19:55:25'),
(33, 'Inspiron 5593 Laptop With 15.6-Inch Display, Core i7 Processor/8GB RAM/1TB HDD + 256GB SSD Hybrid Drive/4GB NVIDIA GeForce MX230 Graphics Card With English/Arabic Keyboard Platinum Silver', 14211, '1593201325.jpg', 'Computers', '2020-06-26 19:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `fullname`, `username`, `password`, `type`) VALUES
(1, 'mostafa', 'gamal', 'mostafa', 1),
(2, 'aaa', 's', 'qw', 0),
(3, 'ali', 'ali', 'ali', 0),
(4, 'teha', 'teha', 'teha', 0),
(5, 'yusra', 'yusra', 'yusra', 0),
(6, 'saber', 'saber', 'saber', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
