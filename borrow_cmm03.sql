-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 02:28 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `product_update` varchar(45) DEFAULT NULL,
  `product_show` enum('yes','no') DEFAULT 'yes',
  `product_amount` int(11) DEFAULT NULL,
  `product_return_date` date DEFAULT NULL,
  `product_realreturn_date` date DEFAULT NULL,
  `product_thumbnail` varchar(255) DEFAULT NULL,
  `product_detail` text,
  `product_intro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category_id`, `product_name`, `product_status`, `product_import_date`, `product_reservation`, `product_update`, `product_show`, `product_amount`, `product_return_date`, `product_realreturn_date`, `product_thumbnail`, `product_detail`, `product_intro`) VALUES
(1, 1, 'Canon 50D', 'waiting', NULL, NULL, NULL, 'yes', 1, NULL, NULL, 'camera.jpeg', 'test', 'intro'),
(2, 2, 'Sony 18-55', 'free', NULL, NULL, NULL, 'yes', 3, NULL, NULL, 'camera.jpeg', NULL, NULL),
(3, 1, 'Canon 5D MK II', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(4, 8, 'Apple Imac 27 5K\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(6, 1, 'Canon 40D', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(7, 1, 'Sony Alpha A55\r\n', 'free', NULL, NULL, NULL, 'yes', 3, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'Nikon D800', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(9, 1, 'Canon 6D MKII\r\n', 'free', NULL, NULL, NULL, 'yes', 3, NULL, NULL, NULL, NULL, NULL),
(10, 1, 'Canon 80D\r\n', 'free', NULL, NULL, NULL, 'yes', 3, NULL, NULL, NULL, NULL, NULL),
(11, 1, 'Canon A1\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(12, 1, 'Canon XL2\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(13, 1, 'Sony Handycam\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(14, 1, 'Panasonic 4K\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(15, 2, 'Sony 70-200\r\n\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, 'lens.jpeg', NULL, NULL),
(16, 2, '\r\nSony 24-70\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, 'lens.jpeg', NULL, NULL),
(17, 2, '\r\nNikon 85 mm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(18, 2, '\r\nNikon 24-70 mm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(19, 2, '\r\nCanon 24-70 mm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(20, 2, 'Canon 100 mm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(21, 2, '\r\nCanon 16-35\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(22, 2, 'Canon 10-22 ', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(23, 2, '\r\nCanon 70-200\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(24, 2, 'Canon 50 mm f/1.8stm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(25, 2, 'Canon 85 mm f/1.8 stm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(26, 2, 'Canon 100 mm f/2.8 stm', NULL, NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(27, 2, '\r\nCanon 16-35 mm f/2.8 stm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(28, 2, '\r\nCanon 24-70 mm f/2.8 stm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(29, 2, '\r\nCanon 17-40 mm f/4 usm\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(30, 2, '\r\nCanon 70-200 mm f/2.8 L IS II\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(31, 2, '\r\nCanon 24-105 mm f/4 L IS USM\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(32, 3, 'Speedlight 600 EX II RT\r\n', 'free', NULL, NULL, NULL, 'yes', 5, NULL, NULL, NULL, NULL, NULL),
(33, 4, '\r\nSaramonic Uwmic9\r\n', 'free', NULL, NULL, NULL, 'yes', 5, NULL, NULL, NULL, NULL, NULL),
(34, 4, '\r\nBoya BY-PVM 1000\r\n', 'free', NULL, NULL, NULL, 'yes', 5, NULL, NULL, NULL, NULL, NULL),
(35, 7, '\r\nphottix Ares II\r\n', 'free', NULL, NULL, NULL, 'yes', 10, NULL, NULL, NULL, NULL, NULL),
(36, 5, '\r\nFeiyu A2000\r\n', 'free', NULL, NULL, NULL, 'yes', 2, NULL, NULL, NULL, NULL, NULL),
(37, 5, 'Manfrotto mt 190 cx pro3\r\n', 'free', NULL, NULL, NULL, 'yes', 5, NULL, NULL, NULL, NULL, NULL),
(38, 9, 'Savage ชุดกระดาษฉากหลังสำหรับถ่ายภาพ', '', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(39, 6, '\r\nNeo Box Light 55W*4\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(40, 6, '\r\nExcella Prisma Plus Kit\r\n', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(41, 6, 'Reflector', 'free', NULL, NULL, NULL, 'yes', 1, NULL, NULL, NULL, NULL, NULL),
(42, 6, '\r\nYongnuo YN-160 \r\n', 'free', NULL, NULL, NULL, 'yes', 2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_student_id` int(11) DEFAULT NULL,
  `reservation_return_date` date DEFAULT NULL,
  `reservation_approve_name` varchar(255) DEFAULT NULL,
  `reservation_tackback_name` varchar(255) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
