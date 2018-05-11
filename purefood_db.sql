-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 10:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purefood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartproducts`
--

CREATE TABLE `cartproducts` (
  `id` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `cartItem` int(11) NOT NULL,
  `cartQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `cartUser` int(11) NOT NULL,
  `cartRefNum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cName` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cName`, `parent`) VALUES
(1, 'Drinks', 0),
(2, 'Snacks', 0),
(3, 'Vegetables', 0),
(4, 'Meat', 0),
(5, 'Seafood', 0),
(6, 'Dairies', 0),
(7, 'Fruits', 0),
(8, 'Canned Goods', 0),
(9, 'Bread', 0),
(10, 'Alcohol', 1),
(11, 'Hard Alcohol', 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pCategoryID` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `pDesc` varchar(255) NOT NULL,
  `pImage` varchar(255) NOT NULL,
  `pStocks` int(11) NOT NULL,
  `pPrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pCategoryID`, `pName`, `pDesc`, `pImage`, `pStocks`, `pPrice`) VALUES
(1, 1, 'Yakult Cultured Milk ', 'a Probiotic drinks.(5 pcs per pack)', 'yakult.png', 23, '45.00'),
(2, 7, 'testproduct', 'I am a test product', 'testproduct.png', 121, '122.00'),
(3, 4, 'jepoy', 'Love ni raia', 'jepoy.png', 100, '100.25'),
(4, 4, 'renz', 'katabi ko sa right', 'renz.jpg', 20, '15.62'),
(5, 9, 'ian', 'katabi ni renz', 'ian.png', 2322, '12.26'),
(6, 2, 'raia', 'love ni jepoy', 'raia.png', 23, '689.00'),
(7, 3, 'chris', 'love ni mart', 'chris.png', 23656, '15.22'),
(8, 6, 'mart', 'love ni chris', 'mart.png', 9898, '12.56'),
(9, 3, 'Spinach', 'Spinach is an edible flowering plant in the family Amaranthaceae native to central and western Asia. Its leaves are eaten as a vegetable. It is an annual plant growing as tall as 30 cm. Spinach may survive over winter in temperate regions.', 'spinach.jpg', 31, '15.00'),
(10, 2, 'Clover', 'Pinoy Tasty Clover Leaf', 'clover.jpg', 323, '5.00'),
(11, 2, '', '', 'clover.jpg', 0, '0.00'),
(12, 5, 'Chris Badette', 'Love na love ni mart', 'chris.jpg', 999, '1000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `roleName`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userFirstName` varchar(255) DEFAULT NULL,
  `userLastName` varchar(255) DEFAULT NULL,
  `userUid` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userCity` varchar(255) DEFAULT NULL,
  `userRole` int(11) NOT NULL DEFAULT '2',
  `userStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userFirstName`, `userLastName`, `userUid`, `userEmail`, `userPassword`, `userCity`, `userRole`, `userStatus`) VALUES
(1, 'Eugene', 'Avila', 'admin', 'avila.eugeneb@gmail.com', '71bf842bf28142860ab2712eed45a4d7b2e7f515', 'Pasig', 1, 1),
(2, NULL, NULL, 'testuser1', '1sdahndma@mail', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, 2, 1),
(3, NULL, NULL, 'testasdsad', 'sdakldkjsa@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, 2, 1),
(5, 'TestMaster', 'Ako', 'test123', 'test123@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Manila', 2, 2),
(6, 'Huge', 'Babyboy', 'avilaeugene', 'mail@google.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'Gotham', 2, 1),
(8, NULL, NULL, '1', '111213131@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, 2, 1),
(9, NULL, NULL, 'test123456', '1sdahndma@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, 2, 1),
(10, NULL, NULL, 'admin00', 'sdajasjdas@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, 2, 1),
(11, NULL, NULL, 'test123456789', 'test123@mail.com.ph', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `status`) VALUES
(1, 'Active'),
(2, 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartproducts`
--
ALTER TABLE `cartproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartProducts_fk0` (`cartID`),
  ADD KEY `cartProducts_fk1` (`cartItem`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_fk0` (`cartUser`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_fk0` (`pCategoryID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userUid` (`userUid`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD KEY `users_fk0` (`userRole`),
  ADD KEY `users_fk1` (`userStatus`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartproducts`
--
ALTER TABLE `cartproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartproducts`
--
ALTER TABLE `cartproducts`
  ADD CONSTRAINT `cartProducts_fk0` FOREIGN KEY (`cartID`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cartProducts_fk1` FOREIGN KEY (`cartItem`) REFERENCES `products` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_fk0` FOREIGN KEY (`cartUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk0` FOREIGN KEY (`pCategoryID`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fk0` FOREIGN KEY (`userRole`) REFERENCES `roles` (`roleID`),
  ADD CONSTRAINT `users_fk1` FOREIGN KEY (`userStatus`) REFERENCES `user_status` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
