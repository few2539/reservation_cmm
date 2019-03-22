-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 03:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
  `product_status` enum('available','waiting','approved','reject') DEFAULT NULL,
  `product_import_date` varchar(45) DEFAULT NULL,
  `product_reservation` date DEFAULT NULL,
  `product_return_date` date DEFAULT NULL,
  `product_update` varchar(45) DEFAULT NULL,
  `product_show` enum('yes','no') DEFAULT 'yes',
  `product_amount` int(11) DEFAULT NULL,
  `product_thumbnail` varchar(255) DEFAULT NULL,
  `product_detail` text,
  `product_intro` varchar(255) DEFAULT NULL,
  `product_booking` varchar(255) DEFAULT NULL,
  `product_sendmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category_id`, `product_name`, `product_status`, `product_import_date`, `product_reservation`, `product_return_date`, `product_update`, `product_show`, `product_amount`, `product_thumbnail`, `product_detail`, `product_intro`, `product_booking`, `product_sendmail`) VALUES
(1, 1, 'Canon 50D', 'available', '21/3/2562', NULL, NULL, NULL, 'yes', 1, 'Canon 50D.jpg', NULL, NULL, NULL, NULL),
(2, 1, 'Nikon D800 ', 'available', '21/3/2562', NULL, NULL, NULL, 'yes', 1, 'Nikon D800.jpg', NULL, NULL, NULL, NULL),
(3, 1, 'Canon 6D Mark II (6d-1) ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon 6D Mark II (6d-1).jpg', NULL, NULL, NULL, NULL),
(4, 1, 'CANON 6DMKII (6D-2) ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON 6DMKII (6D-2).jpg', NULL, NULL, NULL, NULL),
(5, 1, 'CANON 6DMKII (6D-3) ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON 6DMKII (6D-3).jpg', NULL, NULL, NULL, NULL),
(6, 1, 'Sony Alpha A55 ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Sony Alpha A55.jpg', NULL, NULL, NULL, NULL),
(7, 1, 'Canon 80D(80D-1) ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon 80D(80D-1).jpg', NULL, NULL, NULL, NULL),
(8, 1, 'CANON 80D (80D-2) ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON 80D (80D-2).jpg', NULL, NULL, NULL, NULL),
(9, 2, 'CANON canon 24-105 ', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON canon 24-105.jpg', NULL, NULL, NULL, NULL),
(10, 2, 'CANON canon 17-40', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON canon 17-40.jpg', NULL, NULL, NULL, NULL),
(11, 2, 'CANON 50mm', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON 50mm.jpg', NULL, NULL, NULL, NULL),
(12, 2, 'Canon 10-22 mm F3.5-4.5 USM', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon 10-22 mm F3.5-4.5 USM.jpg', NULL, NULL, NULL, NULL),
(13, 2, 'Canon 16-35 mm F2.8', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon 16-35 mm F2.8.jpg', NULL, NULL, NULL, NULL),
(14, 2, 'CANON 24-70 F2.8', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON 24-70 F2.8.jpg', NULL, NULL, NULL, NULL),
(15, 2, 'Canon 70-200 mm F2.8 S SM', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon 70-200 mm F2.8 S SM.jpg', NULL, NULL, NULL, NULL),
(16, 2, 'CANON Canon 70-200 mm F2.8 S SM', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'CANON Canon 70-200 mm F2.8 S SM.jpg', NULL, NULL, NULL, NULL),
(17, 2, 'Canon EF 70-200mm F2.8', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon EF 70-200mm F2.8.jpg', NULL, NULL, NULL, NULL),
(18, 2, 'Canon MACRO EF 100mm F2.8', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon MACRO EF 100mm F2.8.jpg', NULL, NULL, NULL, NULL),
(19, 2, 'Canon ZOOMEF24-70 F2.8', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon ZOOMEF24-70 F2.8.jpg', NULL, NULL, NULL, NULL),
(20, 2, 'Nikon AF-S NIKKOR 24-70mm', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Nikon AF-S NIKKOR 24-70mm.jpg', NULL, NULL, NULL, NULL),
(21, 2, 'Nikon AF-S NIKKOR 85mm', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Nikon AF-S NIKKOR 85mm.jpg', NULL, NULL, NULL, NULL),
(22, 1, 'Panasonic Handycam 4K', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Panasonic Handycam 4K.jpg', NULL, NULL, NULL, NULL),
(23, 3, 'Canon Speedlight 600 EX II RT', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Canon Speedlight 600 EX II RT.jpg', NULL, NULL, NULL, NULL),
(24, 6, 'Yongnuo (YN-1) YN-160', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Yongnuo (YN-1) YN-160.jpg', NULL, NULL, NULL, NULL),
(25, 6, 'Yongnuo YN-160(YN-2)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Yongnuo YN-160(YN-2).jpg', NULL, NULL, NULL, NULL),
(26, 6, 'FalconEyes ไฟขาว ตัวที่1 1000w', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'FalconEyes ไฟขาว ตัวที่1 1000w.jpg', NULL, NULL, NULL, NULL),
(27, 6, 'FalconEyes ไฟขาว ตัวที่2 1000w', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'FalconEyes ไฟขาว ตัวที่2 1000w.jpg', NULL, NULL, NULL, NULL),
(28, 6, 'Qihe ไฟส้ม 500w ตัวที่1', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Qihe ไฟส้ม 500w ตัวที่1.jpg', NULL, NULL, NULL, NULL),
(29, 6, 'Qihe ไฟส้ม 500w ตัวที่2', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Qihe ไฟส้ม 500w ตัวที่2.jpg', NULL, NULL, NULL, NULL),
(30, 4, 'Saramonic Uwmic9 (SM-1)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Saramonic Uwmic9 (SM-1).jpg', NULL, NULL, NULL, NULL),
(31, 4, 'Saramonic Uwmic9 (SM-2)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Saramonic Uwmic9 (SM-1).jpg', NULL, NULL, NULL, NULL),
(32, 4, 'Saramonic Uwmic9 (SM-3)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Saramonic Uwmic9 (SM-1).jpg', NULL, NULL, NULL, NULL),
(33, 4, 'Saramonic Uwmic9 (SM-4)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Saramonic Uwmic9 (SM-1).jpg', NULL, NULL, NULL, NULL),
(34, 4, 'Saramonic Uwmic9 (SM-5)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Saramonic Uwmic9 (SM-1).jpg', NULL, NULL, NULL, NULL),
(35, 4, 'Boya BY-PVM 1000 (BY-1)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Boya BY-PVM 1000 (BY-1).jpg', NULL, NULL, NULL, NULL),
(36, 4, 'Boya BY-PVM 1000 (BY-2)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Boya BY-PVM 1000 (BY-1).jpg', NULL, NULL, NULL, NULL),
(37, 4, 'Boya BY-PVM 1000 (BY-3)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Boya BY-PVM 1000 (BY-1).jpg', NULL, NULL, NULL, NULL),
(38, 4, 'Boya BY-PVM 1000 (BY-4)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Boya BY-PVM 1000 (BY-1).jpg', NULL, NULL, NULL, NULL),
(39, 5, 'Manfrotto MT547B (MF-PAN-1)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT547B (MF-PAN-1).jpg', NULL, NULL, NULL, NULL),
(40, 5, 'Manfrotto MT547B (MF-PAN-2)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT547B (MF-PAN-1).jpg', NULL, NULL, NULL, NULL),
(41, 5, 'Manfrotto MT 190 CX PRO3 (MF-1)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT 190 CX PRO3 (MF-1).jpg', NULL, NULL, NULL, NULL),
(42, 5, 'Manfrotto MT 190 CX PRO3 (MF-2)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT 190 CX PRO3 (MF-1).jpg', NULL, NULL, NULL, NULL),
(43, 5, 'Manfrotto MT 190 CX PRO3 (MF-3)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT 190 CX PRO3 (MF-1).jpg', NULL, NULL, NULL, NULL),
(44, 5, 'Manfrotto MT 190 CX PRO3 (MF-4)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT 190 CX PRO3 (MF-1).jpg', NULL, NULL, NULL, NULL),
(45, 5, 'Manfrotto MT 190 CX PRO3 (MF-5)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Manfrotto MT 190 CX PRO3 (MF-1).jpg', NULL, NULL, NULL, NULL),
(46, 5, 'Sony ขาตั้ง ตัวที่1', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Sony ขาตั้ง ตัวที่2.jpg', NULL, NULL, NULL, NULL),
(47, 5, 'Sony ขาตั้ง ตัวที่2', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Sony ขาตั้ง ตัวที่2.jpg', NULL, NULL, NULL, NULL),
(48, 7, 'Phottix Ares II (PH-1).jpg', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(49, 7, 'Phottix Ares II (PH-2)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(50, 7, 'Phottix Ares II (PH-3)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(51, 7, 'Phottix Ares II (PH-4)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(52, 7, 'Phottix Ares II (PH-5)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(53, 7, 'Phottix Ares II (PH-6)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(54, 7, 'Phottix Ares II (PH-7)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(55, 7, 'Phottix Ares II (PH-8)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(56, 7, 'Phottix Ares II (PH-9)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Phottix Ares II (PH-1).jpg', NULL, NULL, NULL, NULL),
(57, 4, 'Boya BY-PVM 1000 (BY-5)', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Boya BY-PVM 1000 (BY-1).jpg', NULL, NULL, NULL, NULL),
(58, 7, 'Reflector ตัวใหม่', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Reflector ตัวใหม่.jpg', NULL, NULL, NULL, NULL),
(59, 7, 'White Background Backdrop', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'White Background Backdrop.jpg', NULL, NULL, NULL, NULL),
(60, 7, 'Reflector ตัวที่1', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Reflector ตัวที่1.jpg', NULL, NULL, NULL, NULL),
(61, 7, 'Reflector ตัวที่2', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Reflector ตัวที่1.jpg', NULL, NULL, NULL, NULL),
(62, 7, 'Benro ขาล้อดอลลี่ ตัวที่1', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Benro ขาล้อดอลลี่ ตัวที่2.jpg', NULL, NULL, NULL, NULL),
(63, 7, 'Benro ขาล้อดอลลี่ ตัวที่2', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Benro ขาล้อดอลลี่ ตัวที่2.jpg', NULL, NULL, NULL, NULL),
(64, 7, 'Sekonic ที่วัดแสง', 'available', NULL, NULL, NULL, NULL, 'yes', 1, 'Sekonic ที่วัดแสง.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_product_id` int(11) DEFAULT NULL,
  `reservation_student_id` varchar(11) DEFAULT NULL,
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
(1, NULL, '123', '2018-10-03', 'test', 'test', '2018-10-01', NULL, NULL, NULL, NULL),
(18, NULL, '1233123', '0000-00-00', NULL, 'test1', '0000-00-00', NULL, NULL, NULL, NULL),
(19, NULL, '2147483647', '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(20, NULL, '123213213', '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(21, NULL, '123213213', '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(22, NULL, '123213213', '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(23, NULL, '123213213', '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(24, NULL, '123213213', '0000-00-00', NULL, 'testtest', '0000-00-00', NULL, NULL, NULL, NULL),
(25, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(26, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(27, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(28, NULL, '13213', '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(29, NULL, '13213', '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(30, NULL, '123213', '0000-00-00', NULL, 'asdsad', '0000-00-00', NULL, NULL, NULL, NULL),
(31, NULL, '123123', '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(32, NULL, '123123', '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(33, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(34, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(35, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(36, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(37, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(38, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(39, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(40, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(41, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(42, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(43, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(44, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(45, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(46, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(47, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(48, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(49, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(50, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(51, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(52, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(53, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(54, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(55, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(56, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(57, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(58, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(59, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(60, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(61, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(62, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(63, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(64, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(65, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(66, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(67, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(68, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(69, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(70, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(71, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(72, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(73, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(74, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(75, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(76, NULL, '4235', '0000-00-00', NULL, 'asdasd', '0000-00-00', NULL, NULL, NULL, NULL),
(77, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(78, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(79, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(80, NULL, '1234556', '0000-00-00', NULL, 'abctest', '0000-00-00', NULL, NULL, NULL, NULL),
(81, NULL, '1234556', '0000-00-00', NULL, 'abctest', '0000-00-00', NULL, NULL, NULL, NULL),
(82, NULL, '123123213', '0000-00-00', NULL, 'test4', '0000-00-00', NULL, NULL, NULL, NULL),
(83, NULL, '123123213', '0000-00-00', NULL, 'test4', '0000-00-00', NULL, NULL, NULL, NULL),
(84, NULL, '123123', '0000-00-00', NULL, 'asdas', '0000-00-00', NULL, NULL, NULL, NULL),
(85, NULL, '123123', '0000-00-00', NULL, 'asdas', '0000-00-00', NULL, NULL, NULL, NULL),
(86, NULL, '123123', '0000-00-00', NULL, 'test5', '0000-00-00', NULL, NULL, NULL, NULL),
(87, NULL, '123123', '0000-00-00', NULL, 'test5', '0000-00-00', NULL, NULL, NULL, NULL),
(88, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(89, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(90, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(91, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(92, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(93, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(94, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(95, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(96, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(97, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(98, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(99, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(100, NULL, '23423423', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(101, NULL, '23423423', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(102, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(103, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(104, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(105, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(106, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(107, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(108, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(109, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(110, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(111, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(112, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(113, NULL, '123123', '0000-00-00', NULL, 'test', '0000-00-00', NULL, NULL, NULL, NULL),
(114, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(115, NULL, '123123', NULL, NULL, 'asdsa', NULL, NULL, NULL, NULL, NULL),
(116, NULL, '123123', '2018-10-17', NULL, 'asdsa', '2018-10-15', NULL, NULL, NULL, NULL),
(117, NULL, '123123', '0000-00-00', NULL, 'asdsa', '0000-00-00', NULL, NULL, NULL, NULL),
(118, NULL, '123123', '0000-00-00', NULL, 'asdsa', '0000-00-00', NULL, NULL, NULL, NULL),
(119, NULL, '0', '2018-10-18', NULL, '', '2018-10-15', NULL, NULL, NULL, NULL),
(120, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(121, NULL, '0', '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(122, NULL, '0', '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(123, NULL, '0', '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(124, NULL, '0', '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(125, NULL, '0', '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(126, NULL, '0', '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(127, NULL, '0', '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(128, NULL, '0', '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(129, NULL, '0', '2018-10-22', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(130, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(131, NULL, '0', '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(132, NULL, '0', '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(133, NULL, '0', '2018-10-23', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(134, NULL, '0', '2018-10-25', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(135, NULL, '0', '2018-10-30', NULL, '', '2018-10-20', NULL, NULL, NULL, NULL),
(136, NULL, '0', '2018-10-24', NULL, 'test', '2018-10-21', NULL, NULL, NULL, NULL),
(137, NULL, '0', '2018-10-23', NULL, 'test', '2018-10-21', NULL, NULL, NULL, NULL),
(138, NULL, '123123', '2018-10-23', NULL, 'haha', '2018-10-21', NULL, NULL, NULL, NULL),
(139, NULL, '123123', '2018-10-24', NULL, 'test', '2018-10-21', NULL, NULL, NULL, NULL),
(140, NULL, '0', '2018-10-23', NULL, 'notnot', '2018-10-21', NULL, NULL, NULL, NULL),
(141, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(142, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(143, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(144, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(145, NULL, '0', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL),
(146, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(147, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(148, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(149, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(150, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(151, NULL, '0', '0000-00-00', NULL, '', '0000-00-00', NULL, NULL, NULL, NULL),
(152, NULL, '0', '2018-10-23', NULL, 'asdsad', '2018-10-21', NULL, NULL, NULL, NULL),
(153, 6, '5580800', '2018-10-23', NULL, 'notnotnot', '2018-10-21', NULL, NULL, NULL, NULL),
(154, 6, '2147483647', '2018-10-23', NULL, 'notnot', '2018-10-21', '2018-10-21', NULL, NULL, NULL),
(155, 6, '5508080', '2018-10-24', NULL, 'not123', '2018-10-21', '2018-10-21', NULL, NULL, NULL),
(156, 6, '5508080', '2018-10-24', NULL, 'not123', '2018-10-21', '2018-10-21', NULL, NULL, NULL),
(157, 1, '123123', '2018-10-24', NULL, 'asada', '2018-10-15', '2018-10-21', NULL, NULL, NULL),
(158, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2018-10-22', NULL, NULL, NULL),
(159, 6, '2147483647', '2018-10-24', NULL, 'notnottest', '2018-10-22', '2018-10-22', NULL, NULL, NULL),
(160, 3, '2147483647', '2018-10-24', NULL, 'nottest', '2018-10-22', '2018-10-22', '0806565654', 'CMM-456', 'ถ่ายหนังสั้น'),
(161, 7, '2147483647', '2018-10-24', NULL, 'notnotnot', '2018-10-22', '2018-10-22', '08050505050', 'CMM-456', 'ถ่ายหนังสั้น'),
(162, 7, '2147483647', '2018-10-24', NULL, 'notnotnot', '2018-10-22', '2018-10-22', '08050505050', 'CMM-456', 'ถ่ายหนังสั้น'),
(163, 3, '123123123', '2018-10-30', NULL, 'hahaha', '2018-10-28', '2018-10-28', '56165464', 'CMM-888', 'ทำงานจ้า'),
(164, 9, '45275277', '2018-11-13', NULL, 'notnotnot', '2018-11-10', '2018-11-10', '', '', ''),
(165, 9, '2147483647', '2018-11-23', NULL, 'pepan', '2018-11-21', '2018-11-21', '08055855555', 'CMM-555', '1234567789'),
(166, 14, '58080500279', '2018-11-23', NULL, 'pepankub', '2018-11-21', '2018-11-21', '08054646465', 'CMM-555', 'tummaila'),
(167, 6, '56516515', '2019-02-05', NULL, 'asdasdsadasdasd', '2019-02-03', '2019-02-03', 'sadasd', 'asdasd', 'sadas'),
(168, 12, '', '2019-02-05', NULL, 'sadasd', '2019-02-03', '2019-02-03', '', '', ''),
(169, 8, '', '2019-02-06', NULL, 'asdasdsad', '2019-02-03', '2019-02-03', '', '', ''),
(170, 3, '', '2019-02-21', NULL, 'defsdf', '2019-02-19', '2019-02-19', '', '', ''),
(171, 6, '580805055', '2019-02-26', NULL, 'notnot', '2019-02-24', '2019-02-23', 'asdsadsad', 'asdsadasd', 'asdsad'),
(172, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2019-02-24', NULL, NULL, NULL),
(173, 1, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(174, 8, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(175, 8, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(176, 9, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(177, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2019-02-24', NULL, NULL, NULL),
(178, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2019-02-24', NULL, NULL, NULL),
(179, 7, '', '2019-02-25', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(180, 8, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(181, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2019-02-24', NULL, NULL, NULL),
(182, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2019-02-24', NULL, NULL, NULL),
(183, NULL, NULL, '0000-00-00', NULL, NULL, '0000-00-00', '2019-02-24', NULL, NULL, NULL),
(184, 9, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(185, 9, '', '2019-02-26', NULL, 'test', '2019-02-24', '2019-02-24', '', '', ''),
(186, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(187, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(188, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(189, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(190, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(191, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(192, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(193, 10, '', '0000-00-00', NULL, 'test', '0000-00-00', '2019-02-24', '', '', ''),
(194, 7, 'asdasd', '2019-03-03', NULL, 'test', '2019-03-01', '2019-03-01', '', 'asdasd', 'a'),
(195, 8, '123123', '2019-03-03', NULL, 'test', '2019-03-01', '2019-03-01', '', '', ''),
(196, 9, '123213', '0000-00-00', NULL, 'test', '0000-00-00', '2019-03-06', '', 'asdsad', 'Maxbaeiei@gmail.com'),
(197, 9, '123213', '0000-00-00', NULL, 'test', '0000-00-00', '2019-03-06', '', 'asdsad', 'Maxbaeiei@gmail.com'),
(198, 8, 'asdsa', '0000-00-00', NULL, 'sadsad', '0000-00-00', '2019-03-06', 'asdsad', 'asdasd', 'asd'),
(199, 11, 'asdas', '0000-00-00', NULL, 'asdasd', '0000-00-00', '2019-03-06', 'asd', 'asdasd', 'asdasd'),
(200, 11, 'asdas', '0000-00-00', NULL, 'asdasd', '0000-00-00', '2019-03-06', 'asd', 'asdasd', 'asdasd'),
(201, 11, 'asd', '0000-00-00', NULL, 'sdfwa', '0000-00-00', '2019-03-06', 'asd', 'dasd', 'asds'),
(202, 11, 'asd', '0000-00-00', NULL, 'sdfwa', '0000-00-00', '2019-03-06', 'asd', 'dasd', 'asds'),
(203, 11, 'asd', '0000-00-00', NULL, 'asdsad', '0000-00-00', '2019-03-06', 'adasd', 'asdas', 'as'),
(204, 11, 'asdasd', '0000-00-00', NULL, 'sadasdasd', '0000-00-00', '2019-03-06', 'asas', 'sadas', 'das'),
(205, 13, '', '0000-00-00', NULL, 'edewdwe', '0000-00-00', '2019-03-07', '', '', ''),
(206, 13, '', '0000-00-00', NULL, 'edewdwe', '0000-00-00', '2019-03-07', '', '', ''),
(207, 12, '', '0000-00-00', NULL, 'fdsfsdfsd', '0000-00-00', '2019-03-07', '', '', ''),
(208, 14, '555', '2019-03-09', NULL, 'test', '2019-03-07', '2019-03-07', '', '', ''),
(209, 11, '5555', '2019-03-13', NULL, 'llll', '2019-03-11', '2019-03-07', '', '', ''),
(210, 11, '', '2019-03-09', NULL, 'dsfdsf', '2019-03-07', '2019-03-07', '', '', ''),
(211, 6, '', '0000-00-00', NULL, '', '0000-00-00', '2019-03-07', '', '', '');

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
  `user_email` varchar(255) DEFAULT NULL,
  `student_id` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_usergroup_id`, `user_username`, `user_password`, `user_fname`, `user_lname`, `user_email`, `student_id`) VALUES
(1, 1, 'admin', 'adminpassword', 'phuridate', 'thenarong', 'phuridatefew2539@gmail.com', '58080500232'),
(2, 2, 'student', 'studentpassword', 'peraphan', 'rattanaphan', 'Maxbaeiei@gmail.com', '58080500279'),
(4, 1, NULL, NULL, 'wefewf', 'wefewf', 'fewf', NULL);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usergrouop`
--
ALTER TABLE `usergrouop`
  MODIFY `usergrouop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
