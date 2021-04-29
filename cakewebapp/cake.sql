-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 11:51 PM
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
  `client_id` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `confirmation` enum('pending','accepted','denied','') NOT NULL DEFAULT 'pending',
  `status` enum('ongoing','completed','','') NOT NULL DEFAULT 'ongoing',
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `address` varchar(64) NOT NULL,
  `phone` char(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE `picture` (
  `picture_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `filename` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `picture_id` int(11) NOT NULL,
  `description` varchar(128) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `position` varchar(16) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `picture_to_cake_order` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_to_picture` (`picture_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `sale_to_cake_order` (`order_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake_order`
--
ALTER TABLE `cake_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cake_order`
--
ALTER TABLE `cake_order`
  ADD CONSTRAINT `cake_order_to_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_to_cake_order` FOREIGN KEY (`order_id`) REFERENCES `cake_order` (`order_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_to_picture` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`picture_id`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_to_cake_order` FOREIGN KEY (`order_id`) REFERENCES `cake_order` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
