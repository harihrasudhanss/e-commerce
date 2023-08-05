-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 12:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw_whisky`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quanity` varchar(3) NOT NULL,
  `product` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `order_id` int(20) NOT NULL,
  `door` varchar(10) NOT NULL,
  `village` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `ordered_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `email`, `quanity`, `product`, `price`, `order_id`, `door`, `village`, `city`, `district`, `state`, `ordered_date`) VALUES
(1, 'harihara243@gmail.com', '0', 'amrut', 18500, 352, '', '', '', '', '', '2023-04-17 02:04:54'),
(2, 'hariharamass243@gmail.com', '0', 'Amrut', 18500, 9180, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(3, 'hariharamass243@gmail.com', '0', 'Amrut', 18500, 167042, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(4, 'hariharamass243@gmail.com', '0', 'Amrut', 18500, 15583, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(5, 'hariharamass243@gmail.com', '5', 'Amrut', 9250, 5075, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(6, 'hariharamass243@gmail.com', '5', 'Amrut', 9250, 117927, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(7, 'hariharamass243@gmail.com', '0', 'Amrut', 9250, 117927, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(8, 'hariharamass243@gmail.com', '0', 'Amrut', 9250, 117927, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(9, 'hariharamass243@gmail.com', '5', 'Amrut', 9250, 117927, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(10, 'hariharamass243@gmail.com', '10', 'Amrut', 18500, 172498, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(11, 'hariharamass243@gmail.com', '10', 'old monk', 7500, 183088, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(12, 'hariharamass243@gmail.com', '10', 'Penfolds', 117500, 119671, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54'),
(13, 'hariharamass243@gmail.com', '10', 'Sprite', 600, 152852, '2/82', 'devanam palayam', 'kinathukadavu', 'coimbatore', 'tamil nadu', '2023-04-17 02:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `quanity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `quanity`, `price`, `product_id`) VALUES
(1, 'Amrut', 30, 1850, 'r5'),
(2, 'old monk', 70, 750, 'r1'),
(3, 'penfolds', 40, 11750, 'w1'),
(4, 'sprite', 40, 60, 's9'),
(5, 'cabo', 50, 4050, 'r2'),
(6, 'makazai', 50, 1300, 'r3'),
(7, 'sagredo aldeia', 50, 1500, 'r4'),
(8, 'mcdowell\'s', 50, 1045, 'r6'),
(9, 'hercules', 50, 672, 'r7'),
(10, 'contessa', 50, 1803, 'r8'),
(11, 'havana club', 50, 1100, 'r9'),
(12, 'bacardi', 50, 580, 'r10'),
(13, 'captain morgan', 50, 700, 'r11'),
(14, 'malibu', 50, 1475, 'r12'),
(15, 'barcelo', 50, 2459, 'r13'),
(16, 'el dorado', 50, 3033, 'r14'),
(17, 'appleton', 50, 1885, 'r15'),
(18, 'zacapa', 50, 5411, 'r16'),
(19, 'jnoon', 50, 766, 'w2'),
(20, 'dom perignon', 50, 17464, 'w3'),
(21, 'barefoot', 50, 1227, 'w4'),
(22, 'sette', 50, 0, 'w5'),
(23, 'yellow tail', 50, 0, 'w6'),
(24, 'cabernet sauvignon', 50, 0, 'w7'),
(25, 'arrayan albillo', 50, 0, 'w8'),
(26, 'meiomi pinot nair', 50, 0, 'w9'),
(27, 'gallo family', 50, 0, 'w10'),
(28, 'casillero', 50, 0, 'w11'),
(29, 'black box', 50, 0, 'w12'),
(30, 'big banyan', 50, 0, 'w13'),
(31, 'granache rose', 50, 0, 'w14'),
(32, 'zampa soiree', 50, 0, 'w15'),
(33, 'moilard grivot', 50, 0, 'w16'),
(34, 'apple juice', 100, 300, 'd1'),
(35, 'coconut water', 100, 350, 'd2'),
(36, 'hot chocolate', 100, 300, 'd3'),
(37, 'club soda', 100, 200, 'd4'),
(38, 'ginger beer', 100, 350, 'd5'),
(39, 'fruit punch', 100, 159, 'd6'),
(40, 'ice cream', 100, 249, 'd7'),
(41, 'apple juice', 100, 199, 'd8'),
(42, 'sparkling juice', 100, 239, 'd10'),
(43, 'lemonade', 100, 119, 'd11'),
(44, 'grape fruit juice', 100, 159, 'd12'),
(45, 'coka cola', 100, 80, 'd13'),
(46, 'orange juice', 100, 150, 'd14'),
(47, 'tonic water', 50, 100, 'd15'),
(48, 'water', 200, 40, 'd16');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `phone_number`, `email`, `password`, `reg_date`) VALUES
(1, 'hariharasudhan', '8778370145', 'hariharamass243@gmail.com', '123456', '2023-04-10 09:25:10'),
(2, 'athesh', '9524052065', 'athesh@gmail.com', '123456', '2023-04-10 12:12:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
