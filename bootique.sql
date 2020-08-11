-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 10:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootique`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `Men_Women` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(50) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `phone` int(100) NOT NULL,
  `Message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `phone`, `Message`) VALUES
(1, 'saniya', 'ali', 0, 'hyee'),
(2, 'aadasd', 'Ahmed', 12312312, 'asdasd'),
(3, 'Hammad', 'Ahmed', 12312312, 'asda'),
(4, 'Hammad', 'Ahmed', 12345678, 'This is for checking'),
(5, 'Zaid', 'Asif', 123456777, 'This is Zaid asif');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(10) NOT NULL,
  `dress_name` text NOT NULL,
  `headerpic` varchar(10000) NOT NULL,
  `pic_ref` text NOT NULL,
  `price` int(10) NOT NULL,
  `product_detailes` text NOT NULL,
  `size` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `dress_name`, `headerpic`, `pic_ref`, `price`, `product_detailes`, `size`) VALUES
(32, 'Normalization testing for men', 'img/men/50/50 (0).gif', 'img/men/50/50 (0).gif,,img/men/50/50 (1).gif', 1444, 'Bohat acha hai', 'Small,Medium,Large,Extra Large'),
(33, 'Normalization testing for men 2', 'img/men/50/50 (0).gif', 'img/men/50/50 (0).gif,,img/men/50/50 (1).gif', 14444, 'Bohat acha hai', 'Small,Medium,Large,Extra Large'),
(34, 'Normalization testing for men 3', 'img/men/50/50 (0).jpg', 'img/men/50/50 (0).jpg,,img/men/50/50 (1).jpg,img/men/50/50 (2).jpg,img/men/50/50 (3).jpg', 144444, 'Bohat acha hai', 'Small,Medium,Large,Extra Large'),
(35, 'Designer Jacket', 'img/men/50/50 (0).gif', 'img/men/50/50 (0).gif,,img/men/50/50 (1).gif,img/men/50/50 (2).gif,img/men/50/50 (3).gif', 4000, 'Bohat acha hai', 'Small,Large,Extra Large');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Men_women` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `User_id`, `Men_women`) VALUES
(1, 43, 4, 'Women'),
(2, 43, 4, 'Women'),
(3, 35, 4, 'Men'),
(4, 35, 4, 'Men'),
(5, 43, 4, 'Women'),
(6, 49, 4, 'Women'),
(7, 34, 4, 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `table_menpic_ref`
--

CREATE TABLE `table_menpic_ref` (
  `id` int(11) NOT NULL,
  `pic_ref` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_menpic_ref`
--

INSERT INTO `table_menpic_ref` (`id`, `pic_ref`) VALUES
(49, 'img/women/49/49 (0).jpg'),
(49, 'img/women/49/49 (1).jpg'),
(49, 'img/women/49/49 (2).jpg'),
(49, 'img/women/49/49 (0).jpg'),
(49, 'img/women/49/49 (1).jpg'),
(49, 'img/women/49/49 (2).jpg'),
(35, 'img/men/50/50 (0).gif'),
(35, 'img/men/50/50 (1).gif'),
(35, 'img/men/50/50 (2).gif'),
(35, 'img/men/50/50 (3).gif');

-- --------------------------------------------------------

--
-- Table structure for table `table_mensize`
--

CREATE TABLE `table_mensize` (
  `id` int(11) NOT NULL,
  `size` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_mensize`
--

INSERT INTO `table_mensize` (`id`, `size`) VALUES
(49, 'Small'),
(49, 'Medium'),
(49, 'Large'),
(49, 'Extra Large'),
(49, 'Small'),
(49, 'Medium'),
(49, 'Large'),
(49, 'Extra Large'),
(34, 'Small'),
(34, 'Medium'),
(34, 'Large'),
(34, 'Extra Large'),
(35, 'Small'),
(35, 'Large'),
(35, 'Extra Large');

-- --------------------------------------------------------

--
-- Table structure for table `table_picref`
--

CREATE TABLE `table_picref` (
  `id` int(10) NOT NULL,
  `pic_ref` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_picref`
--

INSERT INTO `table_picref` (`id`, `pic_ref`) VALUES
(42, 'img/women/42/42 (0).jpg'),
(42, 'img/women/42/42 (1).jpg'),
(42, 'img/women/42/42 (2).jpg'),
(46, 'img/women/46/46 (0).jpg'),
(46, 'img/women/46/46 (1).jpg'),
(46, 'img/women/46/46 (2).jpg'),
(47, 'img/women/47/47 (0).jpg'),
(47, 'img/women/47/47 (1).jpg'),
(47, 'img/women/47/47 (2).jpg'),
(48, 'img/women/48/48 (0).jpg'),
(48, 'img/women/48/48 (1).jpg'),
(48, 'img/women/48/48 (2).jpg'),
(49, 'img/women/49/49 (0).jpg'),
(49, 'img/women/49/49 (1).jpg'),
(49, 'img/women/49/49 (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_size`
--

CREATE TABLE `table_size` (
  `id` int(11) NOT NULL,
  `size` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_size`
--

INSERT INTO `table_size` (`id`, `size`) VALUES
(49, 'Small'),
(49, 'Medium'),
(49, 'Large'),
(49, 'Extra Large');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `Phone`, `Address`, `city`) VALUES
(4, 'hammad', 'ahmed', 'hammad@gmail.com', '12345', '1234567', 'UserAddress', 'Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `dressname` varchar(10000) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `Details` varchar(10000) NOT NULL,
  `headerpic` varchar(10000) NOT NULL,
  `pic_ref` varchar(10000) NOT NULL,
  `size` varchar(100) NOT NULL,
  `fabric` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_1` (`User_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
