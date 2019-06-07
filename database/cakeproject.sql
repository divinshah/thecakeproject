-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 07:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `id` int(11) NOT NULL,
  `cakeName` varchar(30) NOT NULL,
  `cakeDesc` text NOT NULL,
  `cakeImage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `cakeName`, `cakeDesc`, `cakeImage`) VALUES
(4, 'choco', 'chocolate cake', '595195.jpg'),
(5, 'Red velvet new', 'A red textured cake', '184355.jpeg'),
(6, 'Chocolate', 'Delicious chocolate flavour', '885119.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_delivery_info`
--

CREATE TABLE `checkout_delivery_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `streetname` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `province` varchar(300) NOT NULL,
  `postal_code` varchar(300) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `phone_no` varchar(300) NOT NULL,
  `delivery_date` varchar(300) NOT NULL,
  `order_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_delivery_info`
--

INSERT INTO `checkout_delivery_info` (`id`, `firstname`, `lastname`, `streetname`, `city`, `province`, `postal_code`, `email_id`, `phone_no`, `delivery_date`, `order_id`) VALUES
(9, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-01', '5cf2c166b7e48'),
(10, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-01', '5cf2c2674e3e1'),
(11, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-01', '5cf2c48546af4'),
(12, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmail.com', '2233445566', '2019-06-01', '5cf2c59b8b3ef'),
(14, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmail.com', '2233445566', '2019-06-01', '5cf2c76292a2b'),
(16, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-01', '5cf2cc5779617'),
(35, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf56b11a5c08'),
(36, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf56b3c8ba08'),
(37, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-20', '5cf56b85195f6'),
(39, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-07-01', '5cf56ccbc87da'),
(52, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a14484f35'),
(53, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a15ae3b2b'),
(54, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a1c4497c9'),
(56, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-03', '5cf5a20b57603'),
(57, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-03', '5cf5a20e165d0'),
(58, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-03', '5cf5a21108a7e'),
(59, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-03', '5cf5a24d0a951'),
(60, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-03', '5cf5a24f67e4b'),
(61, 'Mishwa', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a256a6cfa'),
(67, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a4e970f0a'),
(68, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a4ed0e286'),
(69, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5a5e2092ca'),
(70, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-26', '5cf5a6b924c6d'),
(71, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-26', '5cf5a72098a3e'),
(72, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-03', '5cf5d5390f3ff'),
(73, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-26', '5cf5d679360a6'),
(74, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-04', '5cf5db6480f33'),
(75, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-04', '5cf5dcf8b6326'),
(76, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-04', '5cf5dd367d487'),
(77, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-04', '5cf5dd46959c9'),
(78, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-26', '5cf5ddbedc4ac'),
(79, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-26', '5cf5ddf88de1e'),
(80, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j5', 'v@gmailcom', '2233445566', '2019-06-04', '5cf5ded462a99'),
(81, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5df8cc118f'),
(82, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-26', '5cf5e0a6b62ae'),
(83, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e0b930760'),
(84, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e0d1f3ca2'),
(85, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e0dfd231d'),
(86, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e0e45bb98'),
(87, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e102a2f30'),
(88, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e116d0d90'),
(89, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e11f6aa0c'),
(90, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e14c4be9f'),
(91, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e15315ff8'),
(92, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5e184a1ae0'),
(93, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5e18f8de2f'),
(94, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5e19c7d213'),
(95, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5e1ab35d87'),
(96, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5e1c8adcc1'),
(97, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5e93d7451f'),
(98, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '12345678901', '2019-06-03', '5cf5e951897ec'),
(99, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '1234567890', '2019-06-03', '5cf5e9573e4e8'),
(100, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '1234567890', '2019-06-03', '5cf5e9833fda8'),
(101, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5eb15e5b25'),
(102, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5eb6e469ea'),
(103, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5eb88d57d0'),
(104, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5ec95a03fe'),
(105, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5ee3d93b66'),
(106, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-03', '5cf5ee7854acc'),
(107, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5ee890321f'),
(108, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5ef38d3ee7'),
(109, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5ef3c8b1e6'),
(110, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5ef4eba45e'),
(111, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-07', '5cf5ef89d552c'),
(112, 'margi', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'm@gmail.com', '2233445566', '2019-06-07', '5cf5efa07594a'),
(113, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5efb588d11'),
(114, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5efc9e912b'),
(115, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5efe8d0176'),
(116, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f07a8b6cd'),
(117, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f07dabf7f'),
(118, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f1c41044c'),
(119, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f23336c6c'),
(120, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f237d9369'),
(121, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f25ad7b01'),
(122, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f4c0964ab'),
(123, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f4c9a104b'),
(124, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-05-28', '5cf5f4eab870f'),
(125, 'Vishu', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-04', '5cf5f526e907f'),
(126, 'Vishu', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-04', '5cf5f54d2f0d1'),
(127, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '1234567890', '2019-06-03', '5cf5f6566bb38'),
(128, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '1234567890', '2019-06-03', '5cf5f66416f68'),
(129, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '1234567890', '2019-06-03', '5cf5f670d518d'),
(130, 'nevil', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '1234567890', '2019-06-03', '5cf5f6a057f29'),
(131, 'binita', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-04', '5cf5fa5fcc88f'),
(132, 'Vishu', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-05', '5cf5fa6d7b8bc'),
(133, 'vishal', 'patel', 'Humberwood', 'Etobicoke', 'Ontario', 'm9w 7j4', 'v@gmail.com', '2233445566', '2019-06-04', '5cf5faf8b4ca6');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'jetaltandel', 'tandeljetal@gmail.com', 'Jetal0618'),
(2, 'jetaltandel', 'tandeljetal@gmail.com', 'Jetal0618'),
(4, 'divya', 'divysvit@gmail.com', 'sds'),
(5, 'new user', 'yuyu@gmail.com', 'sds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_delivery_info`
--
ALTER TABLE `checkout_delivery_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkout_delivery_info`
--
ALTER TABLE `checkout_delivery_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
