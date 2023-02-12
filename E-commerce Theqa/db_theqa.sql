-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 10:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_theqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `image`) VALUES
(16, 'esraa', 1234, '02.jpg'),
(17, 'amany', 123456, '02.jpg'),
(18, 'esraa arfa', 1234, '2.jpg'),
(20, 'ahmed_medhat', 123456, 'photo_2023-01-21_23-55-28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product Name` text NOT NULL,
  `discount` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product Name`, `discount`, `price`, `quantity`) VALUES
(6, 10, ' T-Shrit', '290', '290', 0),
(7, 10, ' T-Shrit', '300', '300', 0),
(8, 10, ' T-Shrit', '300', '300', 0),
(9, 10, ' T-Shrit', '290', '290', 0),
(10, 10, ' T-Shrit', '290', '290', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(8, 'Clothes'),
(9, 'Shoes'),
(10, 'Accessories'),
(11, 'Sports'),
(12, 'Sale Off'),
(13, 'Featured'),
(14, 'Collections');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` text NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `user_id`) VALUES
(30, 'Ahmed Alaa', 'alaa@12344', 'aaaaaaaaaaaaaaaaaa', 0),
(32, 'Ahmed Medhat', 'ahmed_medhat@fayoum.com', 'GOOD WEBSITE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `tel` int(11) NOT NULL,
  `add_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `address`, `tel`, `add_info`) VALUES
(16, 13, 'ahmed_medhat', 'ahmeed@aaa.com', 'aaaaaaaaaaaa', 0, 'aaaaaaaaaa'),
(17, 13, 'ahmed_farouk', 'ahmeed@aaa.com', 'aaaaaaaaaaaa', 0, 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `order_pro`
--

CREATE TABLE `order_pro` (
  `id` int(11) NOT NULL,
  `order_info` int(11) NOT NULL,
  `pro_name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_pro`
--

INSERT INTO `order_pro` (`id`, `order_info`, `pro_name`, `price`) VALUES
(43, 16, 'Black H&M', 290),
(44, 17, 'Black H&M', 290),
(45, 17, 'Shrit Cotton', 230),
(46, 17, 'Ravin mens', 270),
(47, 17, 'Fred Parry', 300),
(48, 17, 'Yellow', 280),
(49, 17, 'Panda', 290);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `stock` tinyint(4) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `description`, `price`, `image`, `discount`, `stock`, `id_category`) VALUES
(14, 'Shrit Cotton', 'T-Shrit\r\n', '300', 'men-2.jpeg', '230', 15, 8),
(15, 'Ravin mens', '\r\nT-Shrit', '320', 'men-5.jpeg', '270', 30, 8),
(16, 'Black H&M', '\r\nT-Shrit', '340', 'men-1.png', '290', 10, 8),
(17, 'Fred Parry', '\r\nT-Shrit', '400', 'men-4.jpeg', '300', 12, 8),
(18, 'Gucci', '\r\nT-Shrit', '300', 'men-3.jpeg', '260', 16, 8),
(19, 'Cat', '\r\nT-Shrit', '320', 'men-4.jpeg', '270', 15, 8),
(20, 'Panda', '\r\nT-Shrit', '340', 'men-3.jpeg', '290', 22, 8),
(22, 'Yellow', '\nT-Shrit', '300', 'men-5.JPEG ', '280', 25, 8),
(23, 'Fred Black', '\nT-Shrit', '300', 'men-1.png', '280', 25, 8),
(24, 'PandaH&m', '\nT-Shrit', '300', 'men-4.jpeg', '280', 25, 8),
(25, 'White', 'T-Shirt', '300', 'White.jpg', '250', 25, 8),
(26, 'Black jacket', 'jacket', '400', 'men-7.png', '280', 25, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `img`) VALUES
(1, 'esraa\r\n', 'esraa14@gmail.com', '1234', '12345678', ''),
(2, 'esraa mahmoud', 'esraa@gmail.com', '12345', '12345678', ''),
(3, 'ahmed', 'ahmed@gmail.com', '1234', '12345678', ''),
(4, 'aya', 'aya@gmail.com', '1234', '12345678', ''),
(5, 'esraa', 'esraa14@gmail.com', '1234', '114337999', ''),
(6, 'ahmed', 'ah@gmail.com', '12345', '114337999', ''),
(7, 'ahmed', 'ahm@gmail.com', '1234', '114337999', ''),
(8, 'ahmed', 'ahmed11@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '114337999', ''),
(10, 'Ahmed Alaa', 'ahmed22@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01145613258', ''),
(11, 'ahmed', 'ahmed@33', 'e10adc3949ba59abbe56e057f20f883e', '01145613258', ''),
(12, 'ahmed', 'ahmed@99', '202cb962ac59075b964b07152d234b70', '01145613258', ''),
(13, 'Ahmed medhat', 'ahmed@55', 'e10adc3949ba59abbe56e057f20f883e', '01091705765', ''),
(14, 'ahmed@88', 'ahmed@88', 'e10adc3949ba59abbe56e057f20f883e', '01091705765', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_pro`
--
ALTER TABLE `order_pro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_info` (`order_info`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_pro`
--
ALTER TABLE `order_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_pro`
--
ALTER TABLE `order_pro`
  ADD CONSTRAINT `order_pro_ibfk_1` FOREIGN KEY (`order_info`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
