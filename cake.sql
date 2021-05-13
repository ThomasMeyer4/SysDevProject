-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 05:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--
CREATE DATABASE IF NOT EXISTS `cake` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cake`;

-- --------------------------------------------------------

--
-- Table structure for table `cake_order`
--

DROP TABLE IF EXISTS `cake_order`;
CREATE TABLE `cake_order` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `description` varchar(128) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `confirmation` enum('pending','accepted','denied','') NOT NULL DEFAULT 'pending',
  `status` enum('ongoing','completed','','') NOT NULL DEFAULT 'ongoing',
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_order`
--

INSERT INTO `cake_order` (`order_id`, `client_id`, `description`, `date`, `confirmation`, `status`, `price`) VALUES
(2, 2, 'I would like to request an order of a red velvet cake with the group red velvet as the main theme of the cake! In terms of size,', '2021-05-12', 'pending', 'ongoing', '0.00'),
(3, 3, 'I would like to order a cake with Jungkook as the main theme. In terms of flavor and size, medium is fine and chocolate would be', '2021-05-12', 'pending', 'ongoing', '0.00'),
(4, 3, 'I would like to order a cake with anime as the main theme. In terms of flavor and size, small is good enough and vanilla would b', '2021-05-12', 'accepted', 'completed', '45.00'),
(6, 3, 'I would like a big cake!', '2021-05-12', 'pending', 'ongoing', '0.00'),
(7, 1, 'I would like a programming themed cake with a red velvet flavour. ', '2021-05-13', 'pending', 'ongoing', '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `address` varchar(64) NOT NULL,
  `phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `user_id`, `first_name`, `last_name`, `address`, `phone`) VALUES
(1, 1, 'Herbert', 'Domingo', '6363 Trans Island Ave', '4935861266'),
(2, 3, 'Herbert', 'Domingo', '7578 Trans Island Ave', '1968653698'),
(3, 4, 'Herbert', 'Domingo', '6312 Trans Island Ave.', '4935861266');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `name`, `quantity`) VALUES
(1, 'Eggs', 123),
(2, 'Milk', 14),
(3, 'Butter', 15),
(4, 'Flour', 12),
(5, 'Chocolate', 123),
(6, 'Icing Sugar', 123);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `filename` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `staff_id`, `description`, `price`, `filename`) VALUES
(1, 'Mango Cake', 2, 'Mango Tres Leches Cake', '15.99', '609c615c89284.jpg'),
(2, 'Chocolate Cake', 2, 'Divine Chocolate Moist Cake', '12.99', '609c61bdf1379.jpg'),
(3, 'Camera Cake', 2, 'Custom Designed Camera Cake', '160.99', '609c61e765841.jpg'),
(4, 'Lion Cake', 2, 'Lion Cake for Kings!', '60.99', '609c6204e626b.jpg'),
(5, 'Valorant Themed Cake', 2, 'Valorant Cake for Gamers!', '41.99', '609c623391e24.jpg'),
(6, 'LV Cake', 1, 'Custom LV Cake ', '160.99', '609c7608d4139.jpg'),
(9, 'Strawberry Cake', 1, 'Cake', '60.99', '609c769c620f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `position` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `user_id`, `first_name`, `last_name`, `position`) VALUES
(1, 1, 'Herbert', 'Domingo', 'Admin'),
(2, 2, 'Anthonie', 'Domingo', 'Baker');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password_hash` varchar(64) NOT NULL,
  `is_staff` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password_hash`, `is_staff`) VALUES
(1, 'admin', '$2y$10$kP2aIPKuInjfKjmqASJEWedHLgYXKg2pP0ESCMt9u8WICDC7gimi2', 1),
(2, 'Staff', '$2y$10$Qmx4P.XQgDAiruqhZc1c7uk7iADouEHbEz1SEY9CR7Qde5wr/lU3e', 1),
(3, 'herbert', '$2y$10$f/6WoDylMywlyCnCjnD5AuLuVrIu0TSpN6GtfRNWg0XrTe5aOjJ0W', 0),
(4, 'herbert1', '$2y$10$T4kVbX9MLlAZ95sqM0uUuOXGQcTf15gDycw/2NmL.OJzgRCmMKuqu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_order`
--
ALTER TABLE `cake_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cake_order_to_client` (`client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `client_to_user` (`user_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_to_staff` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_to_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake_order`
--
ALTER TABLE `cake_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cake_order`
--
ALTER TABLE `cake_order`
  ADD CONSTRAINT `cake_order_to_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_to_staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
