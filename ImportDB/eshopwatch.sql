-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2025 at 04:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `admin`) VALUES
(0, 'administarition', 'admin', 'admin@gmail.com', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `productid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`) VALUES
(25, '1', '8'),
(26, '1', '124'),
(28, '11', '20'),
(30, '12', '4'),
(33, '15', '21'),
(34, '15', '4'),
(35, '15', '1'),
(36, '15', '4');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `country`, `subject`) VALUES
(3, 'arjun', 'rayjada', 'arjun21@gmail.com', 'India', 'best quality product !'),
(4, 'parth', 'patel', 'patel@gmail.com', 'India', 'very nice product and best quality !');

-- --------------------------------------------------------

--
-- Table structure for table `myusers`
--

CREATE TABLE `myusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`id`, `name`, `username`, `email`, `password`, `admin`) VALUES
(19, 'test', 'test21', 'test@gmail.com', '$2y$10$E3mGEGKVV8gXoCL4PtPcNuoYSAXsF/ODMAwlr4mQWchmr/nVk8xOK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `expmonth` varchar(255) NOT NULL,
  `expyear` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `sameadr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `firstname`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `sameadr`) VALUES
(8, 'arjun', 'rayjada', 'moti ghansari', 'keshod', 'gujrat', '362220', 'ad rayjada', '445547195823', '11', '2045', '562', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `fileUpload` varchar(255) NOT NULL,
  `fileDescription` varchar(255) NOT NULL,
  `filePrice` varchar(255) NOT NULL,
  `fileStock` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `fileName`, `fileUpload`, `fileDescription`, `filePrice`, `fileStock`, `type`) VALUES
(1, 'Jaeger-LeCoultre', 'orrrr.png', 'Color-Silver', '365', '9', 'Index'),
(3, 'Leather Omega', 'strapp.jpg', 'Color-Brown Color-Black', '80', '222', 'Index'),
(4, 'Junghans', 'juhanii.jpg', 'Color-Brown', '554', '3', 'Index'),
(5, 'Jaeger-LeCoultre', 'kalterii.jpg', 'Color-Blue', '656', '8', 'Indexi'),
(6, 'Jaeger-LeCoultre', 'zii.jpg', 'Color-Black', '345', '5', 'Indexi'),
(8, 'Jaeger-LeCoultre', 'browi.jpg', 'Color-Gold', '365', '8', 'Indexi'),
(9, 'Jaeger-LeCoultre', 'quii.jpg', 'Color-Rose', '565', '19', 'News'),
(10, 'Tissot', 'tisii.jpg', 'Color-Rose', '687', '10', 'News'),
(11, 'Jaeger-LeCoultre', 'diaa.jpg', 'Color-Rose', '656', '9', 'News'),
(12, 'Michael Kors', 'majki.jpg', 'Color-Rose', '878', '6', 'News'),
(17, 'Hugo Boss', 'bossii.jpg', 'Color-Black', '555', '6', 'Watches'),
(19, 'Rado', 'radoi.jpg', 'Color-Silver', '656', '2', 'Watches'),
(20, 'Tissot', 'tisi19.jpg', 'Color-Silver', '654', '2', 'Watches'),
(21, 'Tissot', 'tisooi.jpg', 'Color-Silver', '354', '5', 'Watches'),
(22, 'Michael Kors', 'mczi.jpg', 'Color-Black', '547', '4', 'Watches'),
(23, 'Michael Kors', 'michi.jpg', 'Color-Gold', '654', '5', 'Watches'),
(24, 'Rado', 'radii.jpg', 'Color-Black', '251', '3', 'Watches'),
(25, 'Rado', 'whitrad.jpg', 'Color-White', '654', '8', 'Watches'),
(26, 'Hamilton', 'ham3.jpg', 'Color-Silver', '547', '8', 'Watchunder'),
(27, 'Hamilton', 'hamilton.jpg', 'Color-Silver-Rose', '674', '4', 'Watchunder'),
(28, 'Rado', 'radblui.jpg', 'Color-Silver', '897', '3', 'Watchunder'),
(29, 'Rado', 'radrosegr.jpg', 'Color-Silver-Rose', '678', '2', 'Watchunder'),
(30, 'Rado', 'goldblac.jpg', 'Color-Gold-Grey', '874', '4', 'Classic'),
(31, 'Rado', 'blackrad.jpg', 'Color-Silver', '647', '3', 'Classic'),
(32, 'Daude Bernard', 'daude.png', 'Color-Silver', '465', '4', 'Classic'),
(33, 'Tissot', 'oldi.jpg', 'Color-Silver', '754', '7', 'Classic'),
(34, 'Tissot', 'oldtis.jpg', 'Color-Gold', '854', '1', 'Classic'),
(35, 'Tissot', 'leth.jpg', 'Color-Silver', '578', '1', 'Classic'),
(36, 'William Strouch', 'willia.jpg', 'Color-Gold', '657', '2', 'Classic'),
(37, 'Edox', 'edox.jpg', 'Color-Silver', '457', '5', 'Classic'),
(38, 'Tissot', 'meta.jpg', 'Color-Silver', '687', '4', 'Classic'),
(39, 'Tissot', 'rose.jpg', 'Color-Rose', '999', '1', 'Classic'),
(40, 'Rado', 'rosil.jpg', 'Color-Silver-Rose', '899', '3', 'Classic'),
(41, 'Rado', 'silvrad.jpg', 'Color-Silver', '1200', '3', 'Classic'),
(42, 'Hamilton', 'hami2.jpg', 'Color-Silver', '987', '2', 'Classic1'),
(43, 'Invicta', 'inv.jpg', 'Color-Gold', '1000', '3', 'Classic1'),
(45, 'Rado', 'radwh.jpg', 'Color-White', '1500', '3', 'Classic1'),
(46, 'Hamilton', 'ham5.jpg', 'Color-Silver', '2000', '1', 'Classic1'),
(47, 'Lorenz', 'lorenzi.jpg', 'Color-Black', '1000', '4', 'Classic1'),
(48, 'Hamilton', 'ham4.jpg', 'Color-Silver', '900', '5', 'Classic1'),
(49, 'Tissot', 'limit.jpg', 'Color-Rose', '4500', '4', 'Classic1'),
(50, 'Ulysse Nardin', 'nard.jpg', 'Color-Blue', '665', '6', 'New1'),
(51, 'Ulysse Nardin', 'nardii.jpg', 'Color-Blue', '987', '9', 'New1'),
(52, 'Hublot', 'hublot.png', 'Color-Rose-Diamonds', '25000', '2', 'New1'),
(53, 'Hublot', 'hublotii.png', 'Color-Rose', '18000', '5', 'New1'),
(54, 'Jaeger-LeCoultre', 'night.jpg', 'Color-Silver', '600', '7', 'Indexi'),
(57, 'Tactical', 'rryp.jpg', 'Color-Grey', '55', '75', 'Straps'),
(58, 'Calf', 'zile.jpg', 'Color-Black', '60', '80', 'Straps'),
(59, 'Woven Nylon', 'green.jpg', 'Color-Green', '90', '61', 'Straps'),
(60, 'Calf', 'brwl.jpg', 'Color-Light-Brown', '40', '222', 'Straps'),
(61, 'Genuine', 'dy.jpg', 'Color-Brown', '98', '47', 'Straps'),
(62, 'M5', 'darkblu.jpg', 'Color-Dark-Blue', '74', '30', 'Straps'),
(63, 'Calf', 'brg.jpg', 'Color-Brown', '62', '24', 'Straps'),
(64, 'BlueShark', 'blush.jpg', 'Color-Black', '87', '99', 'Straps'),
(65, 'Genuine', 'navi.jpg', 'Color-Black', '69', '81', 'Straps'),
(66, 'Calf', 'calf.jpg', 'Color-Black-Leather', '100', '25', 'Straps'),
(67, 'Racing', 'bor.jpg', 'Color-White', '89', '63', 'Straps'),
(68, 'Nordi', 'bori.jpg', 'Color-White', '65', '80', 'Straps'),
(69, 'Kanzoy', 'grey.jpg', 'Color-Grey', '78', '30', 'Straps1'),
(70, 'GoldStart', 'goldst.jpg', 'Color-Light-Green', '96', '65', 'Straps1'),
(71, 'Genuine', 'dyja.jpg', 'Color-Brown', '65', '32', 'Straps1'),
(72, 'Miltat', 'bbli.jpg', 'Color-Blue', '68', '32', 'Straps1'),
(73, 'Genuine', 'plas.jpg', 'Color-Black', '56', '89', 'Straps1'),
(74, 'Fossil', 'metal.jpg', 'Color-Silver', '120', '32', 'Straps1'),
(75, 'Huami', 'snak.jpg', 'Color-Black', '99', '34', 'Straps1'),
(76, 'Boyer', 'boyer.jpg', 'Color-Silver', '69', '23', 'Straps1'),
(77, 'Longines', 'longi.jpg', 'Color-Silver', '687', '14', 'Womenwatch'),
(78, 'Longines', 'longii.jpg', 'Color-Silver', '987', '6', 'Womenwatch'),
(79, 'Longines', 'longiii.jpg', 'Color-Silver-Rose', '1598', '8', 'Womenwatch'),
(80, 'Longines', 'longiiii.jpg', 'Color-Silver-Rose-Diamonds', '8000', '3', 'Womenwatch'),
(81, 'Longines', 'longiiiii.png', 'Color-Silver-Gold', '1200', '6', 'Womenwatch'),
(82, 'Longines', 'long.jpg', 'Color-Silver-Gold', '3000', '1', 'Womenwatch'),
(83, 'Longines', 'longg.jpg', 'Color-Silver-Rose', '1999', '2', 'Womenwatch'),
(84, 'Longines', 'longgg.jpg', 'Color-Gold', '2000', '3', 'Womenwatch'),
(85, 'Longines', 'longr.jpg', 'Color-Rose', '1542', '4', 'Womenwatch'),
(86, 'Longines', 'longrr.jpg', 'Color-Silver-Rose', '3210', '3', 'Womenwatch'),
(87, 'Longines', 'longs.jpg', 'Color-Silver-Diamonds', '7000', '2', 'Womenwatch'),
(88, 'Longines', 'longss.jpg', 'Color-Silver-Gold', '5400', '3', 'Womenwatch'),
(89, 'Michael Kors', 'mcpink.jpg', 'Color-Rose', '2100', '3', 'Womenwatch1'),
(90, 'Michael Kors', 'mcpnk.png', 'Color-Rose', '3245', '2', 'Womenwatch1'),
(91, 'Michael Kors', 'purp.jpg', 'Color-Rose-Purple', '5412', '3', 'Womenwatch1'),
(92, 'Michael Kors', 'rosdmd.jpg', 'Color-Rose-Diamonds', '13000', '2', 'Womenwatch1'),
(93, 'Michael Kors', 'ros.jpg', 'Color-Rose', '2000', '11', 'Womenwatch1'),
(94, 'Michael Kors', 'whros.jpg', 'Color-Rose-White', '3654', '3', 'Womenwatch1'),
(95, 'Michael Kors', 'golddmd.jpg', 'Color-Gold-Diamond', '9000', '2', 'Womenwatch1'),
(96, 'Michael Kors', 'golros.jpg', 'Color-Gold-Rose', '6421', '2', 'Womenwatch1'),
(97, 'Bas&Lokes', 'loki.jpg', 'Color-Black', '684', '3', 'Luxuary'),
(98, 'Bas&Lokes', 'loki2.jpg', 'Color-Brown', '954', '2', 'Luxuary'),
(99, 'Bas&Lokes', 'loki3.jpg', 'Color-Black', '652', '8', 'Luxuary'),
(100, 'Bas&Lokes', 'loki4.jpg', 'Color-Blue', '785', '1', 'Luxuary'),
(102, 'Bas&Lokes', 'lux.jpg', 'Color-Brown', '854', '2', 'Index'),
(103, 'Roberto Cavalli', 'robca.jpg', 'Color-Silver', '5214', '2', 'Menwatch'),
(104, 'Roberto Cavalli', 'robcaa.jpg', 'Color-Black-Gold', '5482', '1', 'Menwatch'),
(105, 'Roberto Cavalli', 'robcaaa.jpg', 'Color-Silver-Gold', '2235', '5', 'Menwatch'),
(106, 'Michael Kors', 'mch1.jpg', 'Color-Silver', '3241', '3', 'Menwatch'),
(107, 'Michael Kors', 'mch2.jpg', 'Color-Silver', '5642', '9', 'Menwatch'),
(108, 'Michael Kors', 'mch3.jpg', 'Color-Black', '5642', '3', 'Menwatch'),
(109, 'Michael Kors', 'mch4.jpg', 'Color-Blue', '5321', '3', 'Menwatch'),
(110, 'Michael Kors', 'mch5.jpg', 'Color-Silver', '6587', '1', 'Menwatch'),
(111, 'Michael Kors', 'mch6.jpg', 'Color-Silver', '7451', '2', 'Menwatch'),
(112, 'Michael Kors', 'mch7.jpg', 'Color-Silver', '2542', '1', 'Menwatch'),
(113, 'Michael Kors', 'mch8.jpg', 'Color-Dark-Blue', '2598', '3', 'Menwatch'),
(114, 'Emporio Armani', 'arman.jpg', 'Color-Silver', '9854', '3', 'Menwatch'),
(115, 'Skagen', 'skagen.jpg', 'Color-Silver', '3652', '2', 'Menwatchunder'),
(116, 'Skagen', 'sakgen1.jpg', 'Color-Black', '2154', '1', 'Menwatchunder'),
(117, 'Skagen', 'skagen2.jpg', 'Color-Black', '3212', '2', 'Menwatchunder'),
(118, 'Skagen', 'skagen3.jpg', 'Color-Black', '2546', '4', 'Menwatchunder'),
(119, 'Skagen', 'skagen4.jpg', 'Color-Silver', '6517', '3', 'Menwatchunder'),
(120, 'Skagen', 'skagen5.jpg', 'Color-Black', '2142', '2', 'Menwatchunder'),
(121, 'Skagen', 'skagen6.jpg', 'Color-Dark-Green', '8546', '2', 'Menwatchunder'),
(122, 'Hublot', 'hubni.jpg', 'Color-Rose', '12014', '8', 'Menwatchunder'),
(124, 'Hamilton', 'hami123.jpg', 'Color-Silver-White', '1235', '2', 'Classic1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `myusers`
--
ALTER TABLE `myusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
