-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 12:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL COMMENT '1',
  `Name` varchar(250) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `uname`, `pass`, `email`, `phone`) VALUES
(1, 'imon islam', 'imon', '123', 'imon@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'biscuit'),
(2, 'cake'),
(4, 'mustard oil'),
(5, 'soft drink'),
(3, 'soybean oil'),
(6, 'water');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL COMMENT '1',
  `Name` varchar(250) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `uname`, `pass`, `email`, `phone`, `address`) VALUES
(1, 'bob frank', 'bob', '123', 'bob@gmail.com', 1313234435, 'mirpur- 1, house: 32,road 30');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boy`
--

CREATE TABLE `delivery_boy` (
  `id` int(5) NOT NULL COMMENT '1',
  `Name` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(5) NOT NULL COMMENT '1',
  `name` varchar(30) NOT NULL,
  `unit_price` int(5) NOT NULL,
  `unit_qty` int(5) NOT NULL,
  `expire_date` date NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `name`, `unit_price`, `unit_qty`, `expire_date`, `image`, `category_id`) VALUES
(1, 'marie gold', 50, 25, '2020-05-31', '../storage/product_image/wallhaven-13y333.jpg', 1),
(2, 'Energy', 50, 25, '2020-05-31', NULL, 1),
(3, 'dan choclate cake', 80, 25, '2020-05-31', '', 2),
(4, 'dan chaoclate muffin', 15, 25, '2020-05-31', '', 2),
(5, 'Radhuni mustard oil (1ltr)', 190, 25, '2020-06-30', '', 4),
(6, 'ACI mustard oil (1 ltr)', 190, 25, '2020-06-30', '', 4),
(7, 'Rupchada soybean oil (1ltr)', 90, 25, '2020-05-31', '', 3),
(8, 'Pusti Soybean Oil (poly)', 90, 25, '2020-05-31', '', 3),
(9, 'pepsi(500ml)', 20, 25, '2020-05-31', NULL, 5),
(10, '7up(500ml)', 25, 25, '2020-05-31', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `id` int(5) NOT NULL COMMENT '1',
  `Name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`id`, `Name`, `uname`, `pass`, `email`, `phone`, `address`) VALUES
(1, 'xyx xx', 'xxx', '123', 'x@gamil.com', 1230123, 'mirpur-1 dhaka'),
(2, 'abir islam', 'abir', '123', 'abir@gmail.com', 131321312, 'mirpur- 1, house: 32,road 20');

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE `shop_order` (
  `p_id` int(5) NOT NULL COMMENT '1',
  `uname` varchar(30) NOT NULL,
  `address` varchar(999) NOT NULL,
  `name` varchar(30) NOT NULL,
  `unit_price` int(5) NOT NULL,
  `unit_qty` int(5) NOT NULL,
  `expire_date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_order`
--

INSERT INTO `shop_order` (`p_id`, `uname`, `address`, `name`, `unit_price`, `unit_qty`, `expire_date`, `image`, `category_id`) VALUES
(1, 'abir', 'mirpur-1, house:32,road 20', 'coca-cola (600ml)', 40, 20, '2020-05-31', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_order`
--
ALTER TABLE `shop_order`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_boy`
--
ALTER TABLE `delivery_boy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '1';

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_order`
--
ALTER TABLE `shop_order`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
