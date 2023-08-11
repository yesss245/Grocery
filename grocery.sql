-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 12:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `cpassword`, `email`) VALUES
('shraddha', 'Shraddha@1234', 'Shraddha@1234', 'shraddha@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(15) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `brand_desc` varchar(30) NOT NULL,
  `prod_img` varchar(20) NOT NULL,
  `categoryid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_desc`, `prod_img`, `categoryid`) VALUES
(1, 'MILK', 'Milk is the Best Quality', 'milk_logo.jpg', 1),
(2, 'YOGURT', 'good Quality', 'yogurt_logo1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `prod_img` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `cname`, `prod_img`) VALUES
(1, 'DAIRY', 'dairy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(20) NOT NULL,
  `gname` varchar(30) NOT NULL,
  `prod_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `gname`, `prod_img`) VALUES
(1, 'Tomatos', 'veg_tomatos.jpg'),
(2, 'potatos', 'veg_potatos.jpg'),
(3, 'Bringles', 'veg_breingal.jpg'),
(4, 'Karela', 'veg_karela.jpg'),
(5, 'Onion', 'veg_onion.jpg'),
(6, 'Capsicam', 'veg_capsicam.jpg'),
(7, 'Green Chilli', 'veg_greenchili.jpg'),
(8, 'Kothmir', 'veg_kothmire.jpg'),
(9, 'Carrots', 'veg_carrots.jpg'),
(10, 'Red Cobbige', 'veg_redcobbege.jpg'),
(11, 'Lassan', 'veg_lasan.jpg'),
(12, 'Addu', 'veg_aadu.jpg'),
(13, 'Red Chilli', 'ved_drichilli.jpg'),
(14, 'Beets', 'veg_beet.jpg'),
(15, 'Almond', 'nut_almond1.jpg'),
(16, 'Cashuew', 'nut_chasuew.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE `mailbox` (
  `no` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mailbox`
--

INSERT INTO `mailbox` (`no`, `name`, `email`, `subject`, `message`) VALUES
(1, 'shraddha', 'shraddha@gmail.com', 'response', 'i like this....');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `order_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pay_mod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`order_id`, `name`, `number`, `address`, `pay_mod`) VALUES
(1, 'shraddha', 9724125714, 'Udhna, surat', 'COD'),
(2, 'radha', 9081805369, 'surat ', 'COD'),
(3, 'Dixita', 7896532410, 'surat ', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(20) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `prod_desc` varchar(25) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `reprice` varchar(30) NOT NULL,
  `mfgdate` date NOT NULL,
  `expdate` date NOT NULL,
  `prod_img` varchar(25) NOT NULL,
  `brand_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `prod_name`, `prod_desc`, `weight`, `price`, `reprice`, `mfgdate`, `expdate`, `prod_img`, `brand_id`) VALUES
(1, 'AMUL MILK', 'Supar amul milk quality', '500 gm', 30, '28.00', '2023-03-28', '2023-12-31', 'taza.jpg', 1),
(2, 'Oikos Yogurt', 'Sugar Spun Run', '500 gm', 250, '245.00', '2023-04-11', '2023-04-29', 'yogurt_oikos.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `cpassword`, `email`, `first_name`, `last_name`) VALUES
('svnagotha', 'Shraddha@1234', 'Shraddha@1234', 'shraddha123@gmail.co', 'Shraddha', 'Nagotha');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(100) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `prod_name`, `price`, `Quantity`) VALUES
(1, 'AMUL MILK', 30, 3),
(1, 'Oikos Yogurt', 250, 1),
(2, 'AMUL MILK', 30, 3),
(3, 'Oikos Yogurt', 250, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
