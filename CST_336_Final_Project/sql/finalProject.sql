-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2019 at 03:40 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4'),
('admin2', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4'),
('admin6', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'),
('FredTheAdmin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(120) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` varchar(1) NOT NULL,
  `stock` varchar(6) NOT NULL,
  `price` int(10) NOT NULL,
  `imageURL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `gender`, `type`, `size`, `stock`, `price`, `imageURL`) VALUES
(9, 'Blazer', 'Tailored Formal Blazer Jacket', 'M', 'jacket', 'M', '5', 200, 'img/clothing/men/jackets/1.jpg'),
(10, 'Casual Jacket', 'Casual Zip Up Jacket', 'M', 'jacket', 'S', '10', 100, 'img/clothing/men/jackets/2.jpg'),
(11, 'Plaid Jacket', 'Stylish Plaid Jacket', 'M', 'jacket', 'L', '10', 180, 'img/clothing/men/jackets/3.jpg'),
(12, 'Plaid Trench Coat', 'Casual Plaid Trench Coat', 'M', 'jacket', 'S', '10', 300, 'img/clothing/men/jackets/4.jpg'),
(13, 'Hiking Jacket', 'Warm Puff Hiking Jacket', 'M', 'jacket', 'M', '10', 400, 'img/clothing/men/jackets/5.jpg'),
(14, 'Skinny Jeans', 'Casual Black Skinny Jeans', 'M', 'pants', 'M', '10', 60, 'img/clothing/men/pants/6.jpg'),
(15, 'Cargo Pants', 'Dark Colored Casual Cargo Pants', 'M', 'pants', 'M', '10', 50, 'img/clothing/men/pants/5.jpg'),
(16, 'Bootcut Jeans', 'Bootcut Casual Denim Jeans', 'M', 'pants', 'M', '10', 60, 'img/clothing/men/pants/6.jpg'),
(17, 'Long Dress', 'Quinceanera Long Two Piece Set Quinceanera Ball Gown Sweet 16 Dress', 'F', 'dress', 'S', '10', 84, 'img/clothing/women/dress/4.png'),
(18, 'Glitter High Heels', 'Gold Glitter High Heels', 'F', 'shoes', 'S', '10', 46, 'img/clothing/women/shoes/5.jpg'),
(19, 'Hiking Shoes', 'Comfortable Hiking Shoes', 'F', 'shoes', 'M', '10', 78, 'img/clothing/women/shoes/8.jpg'),
(21, 'Lace Dress', ' Green Lace Panel Off The Shoulder Dress', 'F', 'dress', 'L', '10', 46, 'img/clothing/women/dress/1.png'),
(22, 'Vintage Dress', 'Vintage Forest Print Ruched Pin Up Dress', 'F', 'dress', 'M', '10', 72, 'img/clothing/women/dress/2.png'),
(23, 'Sleeveless Dress', 'Women\'s Sleeveless Sweetheart Flared Mini Dress', 'F', 'dress', 'S', '10', 68, 'img/clothing/women/dress/3.png'),
(24, 'High Heels Ankle Boots', 'Zip-up high-heel ankle boots.', 'F', 'shoes', 'S', '10', 91, 'img/clothing/women/shoes/4.jpg'),
(25, 'Polka Dot Sneakers Shoes', 'Breathable Canvas Polka Dot Sneakers', 'F', 'shoes', 'S', '10', 36, 'img/clothing/women/shoes/15.png'),
(26, 'Flare Cape Dress', 'Pink Flare Cape Dress', 'F', 'dress', 'S', '10', 31, 'img/clothing/women/dress/5.png'),
(27, ' Round Glasses', 'Retro Vintage Round Glasses', 'M', 'glasses', 'S', '10', 54, 'img/clothing/men/glasses/9.jpg'),
(28, 'Sunglasses', 'Polarized Sunglasses Men', 'M', 'glasses', 'S', '10', 77, 'img/clothing/men/glasses/1.jpg'),
(29, 'Flannel Shirt', 'Women\'s Long Sleeve Plaid Flannel Shirt', 'F', 'long sleeve shirts', 'S', '10', 0, 'img/clothing/women/long_sleeve_shirts/2.png'),
(30, 'Long Sleeve T shirts', 'Long-sleeve striped artist T-shirt', 'F', 'long sleeve shirts', 'S', '10', 17, 'img/clothing/women/long_sleeve_shirts/1.png'),
(31, 'Short Sleeve Button Up', 'slim wrinkle-resistant button-down short sleeve performance shirt', 'M', 'short sleeve shirts', 'M', '10', 44, 'img/clothing/men/short_sleeve_shirts/3.png'),
(32, 'White Short Sleeve Shirt', 'Short Sleeve Cabana Breeze Solid Button Down Camp Shirt ', 'M', 'short sleeve shirts', 'M', '10', 46, 'img/clothing/men/short_sleeve_shirts/2.png'),
(33, 'Light Pink Short Sleeves', 'Red Tape Light Pink Short Sleeves Shirt', 'M', 'short sleeve shirts', 'L', '10', 68, 'img/clothing/men/short_sleeve_shirts/1.png'),
(34, 'Blue Point Collar Shirt', 'Blue Unique Bargains Men Point Collar Button Down Short Sleeve Anchor Pattern Shirt', 'M', 'short sleeve shirts', 'S', '10', 46, 'img/clothing/men/short_sleeve_shirts/4.png'),
(35, 'Black Long Sleeve Shirt', 'Black classic long sleeved shirt with slim fit design', 'M', 'long sleeve shirts', 'S', '10', 79, 'img/clothing/men/long_sleeve_shirts/1.png'),
(36, 'Gray Neck T-shirt', 'Long Sleeve Heavyweight Crew Neck T-Shirt', 'M', 'long sleeve shirts', 'L', '10', 24, 'img/clothing/men/long_sleeve_shirts/4.png'),
(37, 'Cypress Denim', 'Solid Long-Sleeve Cypress Denim with Pocket Button Down Dress Shirt Light', 'M', 'long sleeve shirts', 'S', '10', 79, 'img/clothing/men/long_sleeve_shirts/3.png\r\n'),
(38, 'Navy style long sleeve shirt', 'Basic Navy style long-sleeve shirt ', 'M', 'long sleeve shirts', 'L', '10', 22, 'img/clothing/men/long_sleeve_shirts/2.png\r\n'),
(39, 'Jeans Baseball Cap', 'Dark Blue Jeans Baseball Cap Simple Style ', 'M', 'caps', 'S', '10', 23, 'img/clothing/men/caps/2.png\r\n'),
(40, 'White Baseball Cap', 'White baseball cap ', 'M', 'caps', 'S', '10', 46, 'img/clothing/men/caps/3.png'),
(41, 'Light Blue Baseball Cap', 'Light blue baseball cap for men', 'M', 'caps', 'S', '10', 31, 'img/clothing/men/caps/1.png'),
(42, 'Purple short sleeve shirt', 'Blue Soft Cotton Shirt', 'F', 'short sleeve shirts', 'M', '10', 33, 'img/clothing/women/short_sleeve_shirts/2.png'),
(43, 'Red Short Sleeve Stripe ', 'Womens Short Sleeve Stripe Shirt Red Stripe', 'F', 'short sleeve shirts', 'M', '10', 24, 'img/clothing/women/short_sleeve_shirts/1.png'),
(44, 'Light Pink Blouse', 'Spring Autumn Casual Chiffon Blouse Pink White Office', 'F', 'long sleeve shirts', 'S', '10', 44, 'img/clothing/women/long_sleeve_shirts/3.png'),
(45, ' Short Sleeve Polo Shirt', 'White Morgan Short Sleeve Polo Shirt', 'F', 'short sleeve shirts', 'S', '10', 41, 'img/clothing/women/short_sleeve_shirts/4.png'),
(46, 'Mid Rise \r\nJean Leggings', 'Mid Rise Wash Jean Leggings', 'F', 'pants', 'S', '10', 35, 'img/clothing/women/pants/13.png'),
(48, 'Super High Rise Jeans', 'Light blue high rise jeans', 'F', 'pants', 'S', '10', 56, 'img/clothing/women/pants/12.png'),
(49, 'Black Jean Leggings', 'Super soft black women skin tight denim pants', 'F', 'pants', 'M', '10', 30, 'img/clothing/women/pants/11.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` varchar(16) NOT NULL,
  `totalPrice` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user`, `totalPrice`, `date`) VALUES
(1, 'test', 1000, '2019-05-09 00:17:45'),
(2, 'test', 200, '2019-05-09 00:24:59'),
(3, 'shopaholic', 1000, '2019-05-09 00:35:14'),
(4, 'shopaholic', 11, '2019-05-09 00:36:32'),
(5, 'shopaholic', 701, '2019-05-09 00:36:32'),
(6, 'shopaholic', 127, '2019-05-09 00:36:32'),
(7, 'shopaholic', 101, '2019-05-09 00:36:32'),
(8, 'shopaholic', 57, '2019-05-09 00:36:32'),
(9, 'shopaholic', 99700, '2019-05-09 00:36:32'),
(10, 'shopaholic', 11, '2019-05-09 00:36:32'),
(11, 'shopaholic', 506, '2019-05-09 00:36:32'),
(12, 'shopaholic', 157, '2019-05-09 00:36:32'),
(13, 'shopaholic', 101, '2019-05-09 00:36:32'),
(14, 'shopaholic', 57, '2019-05-09 00:36:32'),
(15, 'shopaholic', 4000, '2019-05-09 00:36:32'),
(16, 'shopaholic', 11, '2019-05-09 00:36:32'),
(17, 'shopaholic', 701, '2019-05-09 00:36:32'),
(18, 'shopaholic', 127, '2019-05-09 00:36:32'),
(19, 'shopaholic', 101, '2019-05-09 00:36:32'),
(20, 'shopaholic', 57, '2019-05-09 00:36:32'),
(21, 'shopaholic', 2000, '2019-05-09 00:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `address`) VALUES
('shopaholic', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'shop@holic.mall', '123 Gotta St., Opshopp, IN 99999 '),
('test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@yourdomain.com', '123 Valley Lane, Somewhere, CA 55555'),
('user', 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4', 'user@gmail.com', '106 Oak St., Springfield, CA 55555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
