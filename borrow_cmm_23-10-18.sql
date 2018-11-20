-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 05:50 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrow_cmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_name_en` varchar(255) DEFAULT NULL,
  `category_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_name_en`, `category_code`) VALUES
(1, 'กล้อง DSLR', 'Camera', 'camera'),
(2, 'เลนส์', 'Lens', 'lens'),
(3, 'แฟลชกล้อง', 'Flash', 'flash'),
(4, 'ชุดไมค์', 'Mic', 'mic'),
(5, 'ขาตั้ง', 'Tripod', 'tripod'),
(6, 'ชุดไฟ', 'Light Set', 'light_set'),
(7, 'อุปกรณ์เสริม', 'Accessory', 'accessary'),
(8, 'คอมพิวเตอร์', 'Computer', 'computer'),
(9, 'อื่นๆ', 'Other', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_status` enum('free','waiting','approved','reject') DEFAULT NULL,
  `product_import_date` varchar(45) DEFAULT NULL,
  `product_reservation` date DEFAULT NULL,
  `product_return_date` date DEFAULT NULL,
  `product_update` varchar(45) DEFAULT NULL,
  `product_show` enum('yes','no') DEFAULT 'yes',
  `product_amount` int(11) DEFAULT NULL,
  `product_thumbnail` varchar(255) DEFAULT NULL,
  `product_detail` text,
  `product_intro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category_id`, `product_name`, `product_status`, `product_import_date`, `product_reservation`, `product_return_date`, `product_update`, `product_show`, `product_amount`, `product_thumbnail`, `product_detail`, `product_intro`) VALUES
(1, 1, 'Canon 50D', 'approved', NULL, NULL, NULL, '1539540727', 'yes', 0, 'camera.jpeg', NULL, NULL),
(2, 2, 'Sony 18-55', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'lens.jpeg', NULL, NULL),
(3, 1, 'Canon 5D MK II', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, NULL),
(4, 8, 'Apple Imac 27 5K\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(6, 1, 'Canon 40D', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, ''),
(7, 1, 'Sony Alpha A55\r\n', 'approved', NULL, NULL, NULL, NULL, 'yes', 0, 'camera.jpeg', NULL, ''),
(8, 1, 'Nikon D800', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, ''),
(9, 1, 'Canon 6D MKII\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, ''),
(10, 1, 'Canon 80D\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, ''),
(11, 1, 'Canon A1\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, NULL),
(12, 1, 'Canon XL2\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, NULL),
(13, 1, 'Sony Handycam\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, NULL),
(14, 1, 'Panasonic 4K\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'camera.jpeg', NULL, NULL),
(15, 2, 'Sony 70-200\r\n\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'lens.jpeg', NULL, NULL),
(16, 2, '\r\nSony 24-70\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, 'lens.jpeg', NULL, NULL),
(17, 2, '\r\nNikon 85 mm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(18, 2, '\r\nNikon 24-70 mm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(19, 2, '\r\nCanon 24-70 mm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(20, 2, 'Canon 100 mm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(21, 2, '\r\nCanon 16-35\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(22, 2, 'Canon 10-22 ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(23, 2, '\r\nCanon 70-200\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(24, 2, 'Canon 50 mm f/1.8stm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(25, 2, 'Canon 85 mm f/1.8 stm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(26, 2, 'Canon 100 mm f/2.8 stm', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(27, 2, '\r\nCanon 16-35 mm f/2.8 stm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(28, 2, '\r\nCanon 24-70 mm f/2.8 stm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(29, 2, '\r\nCanon 17-40 mm f/4 usm\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(30, 2, '\r\nCanon 70-200 mm f/2.8 L IS II\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(31, 2, '\r\nCanon 24-105 mm f/4 L IS USM\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(32, 3, 'Speedlight 600 EX II RT\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(33, 4, 'Saramonic Uwmic9\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(34, 4, 'Boya BY-PVM 1000\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(35, 7, 'phottix Ares II\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(36, 5, 'Feiyu A2000\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(37, 5, 'Manfrotto mt 190 cx pro3\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(38, 9, 'Savage ชุดกระดาษฉากหลังสำหรับถ่ายภาพ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(39, 6, 'Neo Box Light 55W*4\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(40, 6, '\r\nExcella Prisma Plus Kit\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(41, 6, 'Reflector', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(42, 6, 'Yongnuo YN-160 \r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(43, 1, 'Sony Alpha A55\r\n', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(44, 1, 'Sony Alpha A55', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(45, 1, '	\r\nCanon 6D MKII', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(46, 1, '	\r\nCanon 6D MKII', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(47, 1, 'Canon 80D', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(48, 1, 'Canon 80D', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(49, 2, 'Sony 18-55', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(50, 2, 'Sony 18-55', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(51, 3, 'Speedlight 600 EX II RT', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(52, 3, 'Speedlight 600 EX II RT', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(53, 3, 'Speedlight 600 EX II RT', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(54, 3, 'Speedlight 600 EX II RT', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(55, 4, 'Saramonic Uwmic9', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(56, 4, 'Saramonic Uwmic9', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(57, 4, 'Saramonic Uwmic9', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(58, 4, 'Saramonic Uwmic9', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(59, 4, 'Boya BY-PVM 1000', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(60, 4, 'Boya BY-PVM 1000', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(61, 4, 'Boya BY-PVM 1000', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(62, 4, 'Boya BY-PVM 1000', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(63, 5, 'Feiyu A2000', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(64, 5, 'Manfrotto mt 190 cx pro3', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(65, 5, 'Manfrotto mt 190 cx pro3', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(66, 5, 'Manfrotto mt 190 cx pro3', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(67, 5, 'Manfrotto mt 190 cx pro3', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(68, 6, 'Yongnuo YN-160', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(69, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(70, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(71, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(72, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(73, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(74, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(75, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(76, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL),
(77, 7, 'phottix Ares II ', 'free', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_product_id` int(11) DEFAULT NULL,
  `reservation_student_id` int(11) DEFAULT NULL,
  `reservation_return_date` date DEFAULT NULL,
  `reservation_approve_name` varchar(255) DEFAULT NULL,
  `reservation_tackback_name` varchar(255) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_create_date` date DEFAULT NULL,
  `reservation_phonenumber` varchar(15) DEFAULT NULL,
  `reservation_subject` text,
  `reservation_usefor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `reservation_product_id`, `reservation_student_id`, `reservation_return_date`, `reservation_approve_name`, `reservation_tackback_name`, `reservation_date`, `reservation_create_date`, `reservation_phonenumber`, `reservation_subject`, `reservation_usefor`) VALUES
(1, NULL, 123, '2018-10-03', 'test', 'test', '2018-10-01', NULL, NULL, NULL, NULL),
(18, NULL, 1233123, '0000-00-00', NULL, 'test1', '0000-00-00', NULL, NULL, NULL, NULL),
(19, NULL, 2147483647, '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(20, NULL, 123213213, '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(21, NULL, 123213213, '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(22, NULL, 123213213, '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(23, NULL, 123213213, '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(24, NULL, 123213213, '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(25, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(26, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(27, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(28, NULL, 13213, '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(29, NULL, 13213, '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(30, NULL, 123213, '0000-00-00', NULL, 'asdsad', '0000-00-00', NULL, NULL, NULL, NULL),
(31, NULL, 123123, '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(32, NULL, 123123, '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(33, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(34, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(35, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(36, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(37, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(38, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(39, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(40, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(41, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(42, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(43, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(44, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(45, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(46, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(47, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(48, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(49, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(50, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(51, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(52, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(53, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(54, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(55, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(56, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(57, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(58, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(59, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(60, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(61, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(62, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(63, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(64, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(65, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(66, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(67, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(68, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(69, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(70, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(71, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(72, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(73, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(74, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(75, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(76, NULL, 4235, '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(77, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(78, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(79, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(80, NULL, 1234556, '0000-00-00', NULL, 'abctest', '0000-00-00', NULL, NULL, NULL, NULL),
(81, NULL, 1234556, '0000-00-00', NULL, 'abctest', '0000-00-00', NULL, NULL, NULL, NULL),
(82, NULL, 123123213, '0000-00-00', NULL, 'test4', '0000-00-00', NULL, NULL, NULL, NULL),
(83, NULL, 123123213, '0000-00-00', NULL, 'test4', '0000-00-00', NULL, NULL, NULL, NULL),
(84, NULL, 123123, '0000-00-00', NULL, 'asdas', '0000-00-00', NULL, NULL, NULL, NULL),
(85, NULL, 123123, '0000-00-00', NULL, 'asdas', '0000-00-00', NULL, NULL, NULL, NULL),
(86, NULL, 123123, '0000-00-00', NULL, 'test5', '0000-00-00', NULL, NULL, NULL, NULL),
(87, NULL, 123123, '0000-00-00', NULL, 'test5', '0000-00-00', NULL, NULL, NULL, NULL),
(88, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(89, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(90, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(91, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(92, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(93, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(94, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(95, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(96, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(97, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(98, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(99, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(100, NULL, 23423423, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(101, NULL, 23423423, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(102, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(103, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(104, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(105, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(106, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(107, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(108, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(109, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(110, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(111, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(112, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(113, NULL, 123123, '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(114, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(115, NULL, 123123, NULL, NULL, 'asdsa', NULL, NULL, NULL, NULL, NULL),
(116, NULL, 123123, '2018-10-17', NULL, 'asdsa', '2018-10-15', NULL, NULL, NULL, NULL),
(117, NULL, 123123, '0000-00-00', NULL, 'asdsa', '0000-00-00', NULL, NULL, NULL, NULL),
(118, NULL, 123123, '0000-00-00', NULL, 'asdsa', '0000-00-00', NULL, NULL, NULL, NULL),
(119, NULL, 0, '2018-10-18', NULL, '', '2018-10-15', NULL, NULL, NULL, NULL),
(120, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(121, NULL, 0, '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(122, NULL, 0, '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(123, NULL, 0, '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(124, NULL, 0, '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(125, NULL, 0, '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(126, NULL, 0, '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(127, NULL, 0, '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(128, NULL, 0, '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(129, NULL, 0, '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(130, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(131, NULL, 0, '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(132, NULL, 0, '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(133, NULL, 0, '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(134, NULL, 0, '2018-10-25', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(135, NULL, 0, '2018-10-30', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(136, NULL, 0, '2018-10-24', NULL, 'test', '2018-10-21', NULL, NULL, NULL, NULL),
(137, NULL, 0, '2018-10-23', NULL, 'test', '2018-10-21', NULL, NULL, NULL, NULL),
(138, NULL, 123123, '2018-10-23', NULL, 'haha', '2018-10-21', NULL, NULL, NULL, NULL),
(139, NULL, 123123, '2018-10-24', NULL, 'test', '2018-10-21', NULL, NULL, NULL, NULL),
(140, NULL, 0, '2018-10-23', NULL, 'notnot', '2018-10-21', NULL, NULL, NULL, NULL),
(141, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(142, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(143, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(144, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(145, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
(146, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(147, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(148, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(149, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(150, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(151, NULL, 0, '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(152, NULL, 0, '2018-10-23', NULL, 'asdsad', '2018-10-21', NULL, NULL, NULL, NULL),
(153, 6, 5580800, '2018-10-23', NULL, 'notnotnot', '2018-10-21', NULL, NULL, NULL, NULL),
(154, 6, 2147483647, '2018-10-23', NULL, 'notnot', '2018-10-21', '2018-10-21', NULL, NULL, NULL),
(155, 6, 5508080, '2018-10-24', NULL, 'not123', '2018-10-21', '2018-10-21', NULL, NULL, NULL),
(156, 6, 5508080, '2018-10-24', NULL, 'not123', '2018-10-21', '2018-10-21', NULL, NULL, NULL),
(157, 1, 123123, '2018-10-24', NULL, 'asada', '2018-10-15', '2018-10-21', NULL, NULL, NULL),
(158, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2018-10-22', NULL, NULL, NULL),
(159, 6, 2147483647, '2018-10-24', NULL, 'notnottest', '2018-10-22', '2018-10-22', NULL, NULL, NULL),
(160, 3, 2147483647, '2018-10-24', NULL, 'nottest', '2018-10-22', '2018-10-22', '0806565654', 'CMM-456', 'ถ่ายหนังสั้น'),
(161, 7, 2147483647, '2018-10-24', NULL, 'notnotnot', '2018-10-22', '2018-10-22', '08050505050', 'CMM-456', 'ถ่ายหนังสั้น'),
(162, 7, 2147483647, '2018-10-24', NULL, 'notnotnot', '2018-10-22', '2018-10-22', '08050505050', 'CMM-456', 'ถ่ายหนังสั้น');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_usergroup_id` int(11) DEFAULT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_fname` varchar(255) DEFAULT NULL,
  `user_lname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_usergroup_id`, `user_username`, `user_password`, `user_fname`, `user_lname`, `user_email`) VALUES
(1, 1, 'admin', 'adminpassword', 'phuridate', 'thenarong', 'phuridatefew2539@gmail.com'),
(2, 2, 'student', 'studentpassword', 'peraphan', 'rattanaphan', 'Maxbaeiei@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usergrouop`
--

CREATE TABLE `usergrouop` (
  `usergrouop_id` int(11) NOT NULL,
  `usergrouop_name` varchar(255) DEFAULT NULL,
  `usergrouop_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergrouop`
--

INSERT INTO `usergrouop` (`usergrouop_id`, `usergrouop_name`, `usergrouop_status`) VALUES
(1, 'admin', 'yes'),
(2, 'student', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usergrouop`
--
ALTER TABLE `usergrouop`
  ADD PRIMARY KEY (`usergrouop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usergrouop`
--
ALTER TABLE `usergrouop`
  MODIFY `usergrouop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
