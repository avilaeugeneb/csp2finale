-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 10:54 AM
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

--
-- Dumping data for table `cartproducts`
--

INSERT INTO `cartproducts` (`id`, `cartID`, `cartItem`, `cartQty`) VALUES
(19, 2, 2, 1),
(20, 2, 4, 1),
(21, 2, 5, 1),
(22, 3, 2, 9),
(23, 3, 4, 10),
(24, 3, 1, 5),
(25, 3, 18, 4),
(26, 3, 26, 5),
(27, 3, 31, 6),
(42, 6, 32, 5),
(43, 6, 33, 7),
(44, 6, 34, 9),
(45, 6, 35, 9),
(46, 6, 44, 1),
(47, 6, 45, 4),
(48, 6, 46, 50),
(49, 7, 32, 5),
(50, 7, 34, 9),
(51, 7, 44, 100),
(52, 7, 45, 4),
(53, 8, 2, 1),
(54, 8, 4, 1),
(55, 8, 5, 110),
(56, 8, 6, 1),
(57, 9, 2, 6),
(58, 9, 4, 7),
(59, 9, 5, 6),
(60, 9, 7, 6),
(61, 9, 3, 5),
(62, 10, 4, 1),
(63, 10, 5, 1),
(64, 10, 6, 1),
(65, 11, 2, 1),
(66, 11, 4, 1),
(67, 11, 5, 1),
(68, 11, 6, 1),
(69, 11, 7, 1),
(70, 11, 24, 1),
(71, 11, 25, 1),
(72, 12, 4, 7),
(73, 12, 5, 1),
(74, 12, 6, 1),
(75, 12, 2, 1),
(76, 12, 7, 5),
(77, 13, 5, 1),
(78, 13, 6, 1),
(79, 13, 4, 1),
(80, 13, 2, 1),
(81, 13, 7, 1),
(82, 13, 44, 1),
(83, 13, 45, 5),
(84, 13, 46, 1),
(85, 13, 1, 50),
(86, 13, 22, 20),
(87, 14, 6, 5),
(88, 14, 5, 5),
(89, 14, 7, 4),
(90, 14, 41, 3),
(91, 14, 42, 6),
(92, 14, 43, 4),
(93, 15, 2, 4),
(94, 15, 4, 3),
(95, 15, 5, 1),
(96, 15, 6, 1),
(97, 15, 7, 5),
(98, 16, 44, 1),
(99, 16, 47, 1),
(100, 16, 46, 1),
(101, 16, 33, 1),
(102, 16, 35, 1),
(103, 16, 36, 1),
(104, 16, 23, 1),
(105, 16, 24, 1),
(106, 17, 5, 1),
(107, 17, 6, 1),
(108, 17, 2, 1),
(109, 17, 4, 1),
(110, 17, 7, 1),
(111, 18, 28, 1),
(112, 18, 29, 1),
(113, 19, 33, 1),
(114, 19, 35, 1),
(115, 20, 28, 1),
(116, 20, 29, 1),
(117, 20, 27, 1),
(118, 20, 30, 1),
(119, 21, 18, 1),
(120, 21, 22, 1),
(121, 21, 21, 1),
(122, 21, 1, 1),
(123, 22, 23, 1),
(124, 22, 24, 1),
(125, 23, 26, 1),
(126, 23, 25, 1),
(128, 24, 17, 1),
(129, 24, 28, 1),
(130, 24, 29, 1),
(131, 24, 27, 1),
(132, 24, 30, 1),
(133, 25, 44, 1),
(134, 25, 47, 1),
(135, 26, 45, 23),
(136, 26, 1, 12),
(137, 26, 20, 23),
(138, 27, 33, 1),
(139, 27, 35, 1),
(140, 27, 36, 1),
(141, 28, 36, 1),
(142, 28, 35, 1),
(143, 28, 33, 1),
(144, 29, 33, 1),
(145, 29, 32, 1),
(146, 29, 35, 1),
(147, 29, 36, 1),
(148, 30, 47, 8),
(149, 30, 46, 12),
(150, 30, 45, 1),
(151, 31, 37, 8),
(152, 31, 38, 10),
(153, 32, 28, 10),
(154, 32, 29, 95),
(155, 32, 27, 56),
(156, 32, 50, 95),
(157, 32, 30, 95),
(159, 32, 44, 656),
(160, 32, 47, 989),
(161, 32, 46, 656),
(162, 32, 45, 989),
(163, 33, 50, 1),
(164, 33, 44, 1),
(165, 33, 28, 1),
(166, 33, 29, 1),
(167, 33, 10, 3),
(168, 34, 47, 5),
(169, 34, 46, 5),
(170, 35, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `cartUser` int(11) NOT NULL,
  `cartRefNum` varchar(255) NOT NULL,
  `cartStatus` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `cartUser`, `cartRefNum`, `cartStatus`) VALUES
(1, 1, 'PUREccc8f540b0d651e15dd338e37873715e-xyz', 1),
(2, 1, 'PURE5615fb365d700dd3b957f8b3df48c018-xyz', 1),
(3, 1, 'PURE4cc8fcce2f21038fbd0c88d2790befcc-xyz', 1),
(4, 1, 'PURE89ff2390b33333c0460630354d00062b-xyz', 1),
(5, 1, 'PUREec0f270923e13bd63eed09d3b9791c5f-xyz', 1),
(6, 1, 'PURE23b2e7b16cb804e339762fb682fe906b-xyz', 1),
(7, 1, 'PUREd60ccb50224155d8093254fcc5511258-xyz', 1),
(8, 1, 'PUREed7b9fb782dee391fb90ff03fc8ec682-xyz', 1),
(9, 1, 'PURE62d19d5e25361b90875ee327304786dd-xyz', 1),
(10, 1, 'PURE37b6030e5f6863757971cd96238014c0-xyz', 1),
(11, 14, 'PURE64c0cd75378061f748e3f8fc34621b20-xyz', 1),
(12, 14, 'PURE720c794926c738400c4b007f32651706-xyz', 1),
(13, 14, 'PAY-7UW83335AE432380FLMAVATQ', 1),
(14, 14, 'PAY-1B540619T2729862NLMAV6VQ', 1),
(15, 14, 'PURE629edf1d0ce077fb7f1f90d1800c32ed-xyz', 1),
(16, 1, 'PURE46303f6620b75906b4842b17330102cd-xyz', 1),
(17, 1, 'PUREbeb100bb9ed055986b391758f0241746-xyz', 1),
(18, 1, 'PUREb0cd5fb358e80f5689bc9c6534020eed-xyz', 1),
(19, 1, 'PURE85b32fc0e3b3123bd258e607350861e9-xyz', 1),
(20, 1, 'PURE7dc60188402d609393389668804e99e0-xyz', 1),
(21, 1, 'PURE09244d52000e32c42e9d70902d5b4b38-xyz', 1),
(22, 1, 'PURE9120400045c4155d294ce90df9d331ff-xyz', 1),
(23, 1, 'PURE1d10e4e3b60527c477707562e9977dbb-xyz', 1),
(24, 1, 'PURE702b16f717867f679c6d61334f5c0227-xyz', 1),
(25, 15, 'PUREd05d5c25699b0fe727546d4c731d19c6-xyz', 1),
(26, 15, 'PURE0009c1180f4d003e2391e26b80563903-xyz', 1),
(27, 15, 'PURE9000624b5e76ddec81520341bbdcb321-xyz', 1),
(28, 15, 'PURE31e038f888088d9095586e739cbff67d-xyz', 1),
(29, 15, 'PURE06e044c7e170015ef0c3cf6c8f2e4f13-xyz', 1),
(30, 16, 'PURE0c053725e0dc090157f4eb392c037f6e-xyz', 1),
(31, 17, 'PURE03f1cbb61b1e02418ff638f58958900c-xyz', 1),
(32, 16, 'PUREe0cd70790b479cbf627d2bc4b4ff10b2-xyz', 1),
(33, 18, 'PUREdeec1dc06b5bc739b5051e4705982c6f-xyz', 1),
(34, 18, 'PUREffb3fe2263dfd5f2d200309de0c55370-xyz', 1),
(35, 16, 'PURE5b62dbcb40cc4063d47d90f5f1038fe7-xyz', 1);

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
-- Table structure for table `orderstatuses`
--

CREATE TABLE `orderstatuses` (
  `id` int(2) NOT NULL,
  `statusname` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orderstatuses`
--

INSERT INTO `orderstatuses` (`id`, `statusname`) VALUES
(1, 'In Progress'),
(2, 'Pending'),
(3, 'Completed');

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
(2, 1, 'Emperador', '1 Litre Emperador Brandy Light', 'empe.jpg', 85, '126.56'),
(3, 8, 'PureFoods Corned Beef', '210g', 'cornedbeef.jpg', 100, '87.75'),
(4, 1, 'Ceres Apple Juice', '1 Litre', 'ceresapple.jpg', 50, '19.50'),
(5, 1, '7 UP in can', '330ML', '7up.jpg', 50, '50.00'),
(6, 1, 'C2 Apple Green Tea', '1 Litre', 'c2apple.jpg', 56, '5.00'),
(7, 1, 'Cobra Smart', ' Energy Drink,350ml', 'cobra_smart_fa.jpg', 50, '69.00'),
(8, 2, 'Oishi Crispy Patata', '90g', 'oishi_crispy_patata_90g.jpg', 50, '25.00'),
(9, 2, 'Tostitos', ' Restaurant Style, 10oz', 'tostitos_original_restaurant_style_10oz.jpg', 25, '163.75'),
(10, 2, 'Piattos', '40g', 'piattos_sour_cream_onion_potato_chips_40g.jpg', 25, '36.00'),
(11, 2, 'Pringles Chips', 'Sour Cream, 110g', 'pringles_sour_cream_110g.jpg', 24, '69.00'),
(12, 2, 'Roller Coaster', 'Cheddar Potato Rings, 24g', 'rollercoaster.jpg', 26, '26.00'),
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
(28, 6, 'Anchor Butter', 'Ako ay isang Anchor Butter na 250g', 'anchorspreadable.jpg', 100, '135.00'),
(29, 6, 'Anchor Butter', 'Unsalted 227g', 'anchorunsalted227g.jpg', 100, '120.00'),
(30, 6, 'Queensland Butter', '500g', 'queensland_butter_500g.jpg', 100, '342.00'),
(31, 6, 'Star Margarine', '250g', 'star_margarine_250g.jpg', 100, '67.00'),
(32, 7, 'Watermelon', 'White/Black', 'watermelon_white_black_beauty.jpg', 100, '55.00'),
(33, 7, 'Alfa Fuji Apple', '250g', 'alfa_fuji_apple.jpg', 100, '295.00'),
(34, 7, 'Mango Ripe', 'Ripe Mango, 250g', 'mango_ripe_large.jpg', 100, '199.00'),
(35, 7, 'Crimson Grapes', '250g, Fresh', 'crimson_grapes.jpg', 100, '400.00'),
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
(47, 9, 'Wheat Bread', 'Sugar Free , 350g', 'sugar.jpg', 100, '70.00'),
(50, 9, 'Focaccia', 'Wheat Bread', 'focaccia.jpg', 110, '148.00');

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
  `userStreet` varchar(255) DEFAULT '" "',
  `userBrgy` varchar(255) DEFAULT '" "',
  `userCity` varchar(255) DEFAULT '" "',
  `userRole` int(11) NOT NULL DEFAULT '2',
  `userStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userFirstName`, `userLastName`, `userUid`, `userEmail`, `userPassword`, `userStreet`, `userBrgy`, `userCity`, `userRole`, `userStatus`) VALUES
(1, 'Eugene', 'Avila', 'admin', 'avila.eugeneb@gmail.com', '71bf842bf28142860ab2712eed45a4d7b2e7f515', ' ', ' ', 'Pasig', 1, 1),
(2, NULL, NULL, 'testuser1', '1sdahndma@mail', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', '  ', 2, 1),
(3, NULL, NULL, 'testasdsad', 'sdakldkjsa@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(5, 'TestMaster', 'Ako', 'test123', 'test123@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', 'Manila', 2, 2),
(6, 'Huge', 'Babyboy', 'avilaeugene', 'mail@google.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', 'Gotham', 2, 1),
(8, NULL, NULL, '1', '111213131@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(9, NULL, NULL, 'test123456', '1sdahndma@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(10, NULL, NULL, 'admin00', 'sdajasjdas@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(11, NULL, NULL, 'test123456789', 'test123@mail.com.ph', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(12, NULL, NULL, 'test120408', 'sdnakdsa@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(13, '', '', 'hello123', 'hello123@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', '', 2, 1),
(14, NULL, NULL, 'admin123', '123456789@mail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(15, NULL, NULL, 'renzchler', 'oxino.renzchler@gmail.com', 'b1d52a42cb23b56188816dae832002a5b44bf330', ' ', ' ', ' ', 2, 1),
(16, '', '', 'avila123', 'frifster2014@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', '', 2, 1),
(17, 'PJ', '', 'tuitt123', 'pjsaracho@tuitt.com', '54a659c75df8135d31537959eff0c0e3876c86d2', ' ', ' ', 'QC', 2, 1),
(18, NULL, NULL, 'dyosa', 'ghiaburac@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', ' ', 2, 1),
(19, 'Frifster Ako', '', 'frifster', 'frifster.2014@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', ' ', ' ', '', 2, 1);

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
  ADD KEY `carts_fk0` (`cartUser`),
  ADD KEY `carts_fk1` (`cartStatus`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderstatuses`
--
ALTER TABLE `orderstatuses`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orderstatuses`
--
ALTER TABLE `orderstatuses`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
  ADD CONSTRAINT `carts_fk0` FOREIGN KEY (`cartUser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_fk1` FOREIGN KEY (`cartStatus`) REFERENCES `orderstatuses` (`id`);

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
