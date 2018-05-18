-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 10:58 AM
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
(1, 4, 'Pork Liempo Sobi', '500g, Supersavers RF SS Pork Liempo Sobi ', 'liempo.jpg', 100, '135.00'),
(2, 1, 'Emperador', '1 Litre Emperador Brandy Light', 'empe.jpg', 85, '119.50'),
(3, 8, 'PureFoods Corned Beef', '210g', 'cornedbeef.jpg', 100, '87.75'),
(4, 1, 'Ceres Apple Juice', '1 Litre', 'ceresapple.jpg', 1001, '19.50'),
(5, 1, '7 UP soda in can', '330ML', '7up.jpg', 50, '72.00'),
(6, 1, 'C2 Apple Green Tea', '1 Litre', 'c2apple.jpg', 56, '41.75'),
(7, 1, 'Cobra Smart', ' Energy Drink,350ml', 'cobra_smart_fa.jpg', 50, '69.00'),
(8, 2, 'Oishi Crispy Patata', '90g', 'oishi_crispy_patata_90g.jpg', 50, '18.00'),
(9, 2, 'Tostitos', ' Restaurant Style, 10oz', 'tostitos_original_restaurant_style_10oz.jpg', 25, '163.75'),
(10, 2, 'Piattos', '40g', 'piattos_sour_cream_onion_potato_chips_40g.jpg', 25, '36.00'),
(11, 2, 'Pringles Chips', 'Sour Cream, 110g', 'pringles_sour_cream_110g.jpg', 24, '69.00'),
(12, 2, 'Roller Coaster', 'Cheddar Potato Rings, 24g', 'rollercoaster.jpg', 26, '17.00'),
(13, 3, 'Tomato', 'Fresh,250g', 'tomato.jpg', 23111, '60.00'),
(14, 3, 'Carrots', 'Fresh, 250g', 'carrots.jpg', 100, '126.00'),
(15, 3, 'Jumbo Potato', '250g', 'jumbopotato.jpg', 50, '99.75'),
(16, 3, 'Onion', 'Fresh,250g', 'onion.jpg', 100, '90.00'),
(17, 3, 'Cabbage', 'Fresh, 250g', 'cabbage.jpg', 100, '108.00'),
(18, 4, 'Lechon Kawali Cut', 'Pork Lechon Kawali Cut , 250g', 'kawalicut.jpg', 100, '285.00'),
(19, 4, 'Pork Longganisa', 'Nueva Cabanatuan, 250g', 'nueva_cabanatuan_skinless_pork_longganisa.jpg', 100, '250.00'),
(20, 4, 'Pork Tocino', 'Meaty Pork Tocino, 250g', 'nueva_cabanatuan_pork_tocino.jpg', 100, '240.00'),
(21, 4, 'Pork Cubes', 'Pork Cubes, 250g', 'porkcubes.jpg', 100, '235.00'),
(22, 4, 'Ox Stripe', 'Ox Stripe, 250g', 'oxstripe.jpg', 100, '195.00'),
(23, 5, 'Shrimp', 'White Shrimp, 250g ', 'shrimp_2_2017.jpg', 100, '638.00'),
(24, 5, 'Shrimp B', 'Black Shrimp, 250g', 'shrimp_2017.jpg', 100, '1098.00'),
(25, 5, 'Squid', 'Large Squid, 250g', 'squid_2017.jpg', 100, '548.00'),
(26, 5, 'Tilapia', 'Large Tilapia, 250g', 'tilapia_large_2017.jpg', 100, '145.00'),
(27, 6, 'Anchor UHT', 'FullCream Milk 1 Liter', 'anchor_uht_full_cream_milk_1l.jpg', 100, '76.00'),
(28, 6, 'Anchor Butter', 'Spreadable, 200g', 'anchorspreadable.jpg', 100, '135.00'),
(29, 6, 'Anchor Butter', 'Unsalted 227g', 'anchorunsalted227g.jpg', 100, '120.00'),
(30, 6, 'Queensland Butter', '500g', 'queensland_butter_500g.jpg', 100, '342.00'),
(31, 6, 'Star Margarine', '250g', 'star_margarine_250g.jpg', 100, '67.00'),
(32, 7, 'Watermelon', 'White/Black', 'watermelon_white_black_beauty.jpg', 100, '55.00'),
(33, 7, 'Alfa Fuji Apple', '250g', 'alfa_fuji_apple.jpg', 100, '295.00'),
(34, 7, 'Mango Ripe', 'Ripe Mango, 250g', 'mango_ripe_large.jpg', 100, '199.00'),
(35, 7, 'Crimson Grapes', '250g, Fresh', 'crimson_grapes.jpg', 100, '399.00'),
(36, 7, 'Farm Lemons', 'Yellow Lemons, Fresh. 250g', 'lemon_yellow.jpg', 100, '335.00'),
(37, 8, 'Campbell', 'Golden Corn Soup', 'campbell.jpg', 100, '64.50'),
(38, 8, 'Campbell Mushroom Soup', 'Cream of Mushroom Soup, 200z', 'campbellmush.jpg', 100, '57.50'),
(39, 8, 'CDO Karne Norte', '150g', 'cdo_karne_norte_150g.jpg', 100, '26.50'),
(40, 8, 'Tulips Pork', 'Luncheon Meat, 340g', 'tulip_pork_luncheon_meat_340g.jpg', 100, '100.00'),
(41, 8, 'Maling', 'Pork Luncheon Meat, 170g', 'maling_pork_luncheon_meat_170g.jpg', 100, '43.50'),
(42, 8, 'Chinese-style Luncheon Meat', 'Chinese-style Luncheon Meat, 165g', 'purefoods_chinese_luncheon_meat_165g.jpg', 100, '32.50'),
(43, 8, 'Highlands Corned Beef', '180g', 'highlands_corned_beef_180g_new.jpg', 100, '52.25'),
(44, 9, 'Tiffany Hotdog', '8 Rolls', 'tiffany_hotdog_rolls_8s.jpg', 100, '36.50'),
(45, 9, 'White King Puto Mix', '200g', 'puto.jpg', 100, '39.00'),
(46, 9, 'White King Bibingka Mix', '500g', 'bibingka.jpg', 100, '92.00'),
(47, 9, 'Wheat- Bread', 'Sugar Free , 350g', 'sugar.jpg', 100, '77.00');

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
  `userStreet` varchar(255) DEFAULT NULL,
  `userBrgy` varchar(255) DEFAULT NULL,
  `userCity` varchar(255) DEFAULT NULL,
  `userRole` int(11) NOT NULL DEFAULT '2',
  `userStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userFirstName`, `userLastName`, `userUid`, `userEmail`, `userPassword`, `userStreet`, `userBrgy`, `userCity`, `userRole`, `userStatus`) VALUES
(1, 'Eugene', 'Avila', 'admin', 'avila.eugeneb@gmail.com', '71bf842bf28142860ab2712eed45a4d7b2e7f515', NULL, NULL, 'Pasig', 1, 1),
(2, NULL, NULL, 'testuser1', '1sdahndma@mail', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(3, NULL, NULL, 'testasdsad', 'sdakldkjsa@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(5, 'TestMaster', 'Ako', 'test123', 'test123@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 'Manila', 2, 2),
(6, 'Huge', 'Babyboy', 'avilaeugene', 'mail@google.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, 'Gotham', 2, 1),
(8, NULL, NULL, '1', '111213131@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(9, NULL, NULL, 'test123456', '1sdahndma@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(10, NULL, NULL, 'admin00', 'sdajasjdas@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(11, NULL, NULL, 'test123456789', 'test123@mail.com.ph', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(12, NULL, NULL, 'test120408', 'sdnakdsa@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 2, 1),
(13, '', '', 'hello123', 'hello123@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, '', 2, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
