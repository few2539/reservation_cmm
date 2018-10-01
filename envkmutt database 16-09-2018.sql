-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 11:39 PM
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
-- Database: `envkmutt`
--

-- --------------------------------------------------------

--
-- Table structure for table `k_about`
--

CREATE TABLE `k_about` (
  `k_about_id` int(11) NOT NULL,
  `k_about_address_th` varchar(255) DEFAULT NULL,
  `k_about_address_en` varchar(255) DEFAULT NULL,
  `k_about_tel` varchar(45) DEFAULT NULL,
  `k_about_email` varchar(100) DEFAULT NULL,
  `k_about_lat` varchar(45) DEFAULT NULL,
  `k_about_lng` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `k_activity`
--

CREATE TABLE `k_activity` (
  `k_activity_id` int(11) NOT NULL,
  `k_activity_name_th` varchar(255) DEFAULT NULL,
  `k_activity_name_en` varchar(255) DEFAULT NULL,
  `k_activity_detail_th` text,
  `k_activity_detail_en` text,
  `k_activity_date` date DEFAULT NULL,
  `k_activity_status` varchar(45) DEFAULT NULL,
  `k_activity_show_calendar` varchar(45) DEFAULT NULL,
  `k_activity_tags` text,
  `k_activity_category_id` int(11) DEFAULT NULL,
  `k_activity_created_by` int(11) DEFAULT NULL,
  `k_activity_created_at` varchar(45) DEFAULT NULL,
  `k_activity_updated_by` int(11) DEFAULT NULL,
  `k_activity_updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `k_download`
--

CREATE TABLE `k_download` (
  `k_download_id` int(11) NOT NULL,
  `k_download_name_th` varchar(255) DEFAULT NULL,
  `k_download_name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `k_news`
--

CREATE TABLE `k_news` (
  `k_news_id` int(11) NOT NULL,
  `k_news_name_th` varchar(255) DEFAULT NULL,
  `k_news_name_enl` varchar(255) DEFAULT NULL,
  `k_news_detail_th` text,
  `k_news_detail_en` text,
  `k_news_date` date DEFAULT NULL,
  `k_news_status` varchar(45) DEFAULT NULL,
  `k_news_show_calendar` varchar(45) DEFAULT NULL,
  `k_news_tags` text,
  `k_news_catogory_id` int(11) DEFAULT NULL,
  `k_news_created_by` int(11) DEFAULT NULL,
  `k_news_created_at` varchar(45) DEFAULT NULL,
  `k_news_updated_by` int(11) DEFAULT NULL,
  `k_news_updated_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `k_setting`
--

CREATE TABLE `k_setting` (
  `k_setting_id` int(11) NOT NULL,
  `k_setting_email` varchar(255) DEFAULT NULL,
  `k_setting_googlemap_api` varchar(255) DEFAULT NULL,
  `k_setting_line_api` varchar(255) DEFAULT NULL,
  `k_setting_sms_username` varchar(255) DEFAULT NULL,
  `k_setting_sms_password` varchar(255) DEFAULT NULL,
  `k_setting_facebook_api` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `k_staff`
--

CREATE TABLE `k_staff` (
  `k_staff_id` int(11) NOT NULL,
  `k_staff_img` varchar(255) DEFAULT NULL,
  `k_staff_title_th` varchar(45) DEFAULT NULL,
  `k_stafftitle_en` varchar(45) DEFAULT NULL,
  `k_staff_fname_th` varchar(255) DEFAULT NULL,
  `k_staff_fname_en` varchar(255) DEFAULT NULL,
  `k_staff_lname_th` varchar(255) DEFAULT NULL,
  `k_staff_lname_en` varchar(255) DEFAULT NULL,
  `k_staff_position_th` varchar(255) DEFAULT NULL,
  `k_staff_position_en` varchar(255) DEFAULT NULL,
  `k_staff_email` varchar(255) DEFAULT NULL,
  `k_staff_tell` varchar(45) DEFAULT NULL,
  `k_staff_cv` enum('ON','OFF') DEFAULT NULL,
  `k_staff_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `k_about`
--
ALTER TABLE `k_about`
  ADD PRIMARY KEY (`k_about_id`);

--
-- Indexes for table `k_activity`
--
ALTER TABLE `k_activity`
  ADD PRIMARY KEY (`k_activity_id`);

--
-- Indexes for table `k_download`
--
ALTER TABLE `k_download`
  ADD PRIMARY KEY (`k_download_id`);

--
-- Indexes for table `k_news`
--
ALTER TABLE `k_news`
  ADD PRIMARY KEY (`k_news_id`);

--
-- Indexes for table `k_setting`
--
ALTER TABLE `k_setting`
  ADD PRIMARY KEY (`k_setting_id`);

--
-- Indexes for table `k_staff`
--
ALTER TABLE `k_staff`
  ADD PRIMARY KEY (`k_staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `k_about`
--
ALTER TABLE `k_about`
  MODIFY `k_about_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_activity`
--
ALTER TABLE `k_activity`
  MODIFY `k_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_download`
--
ALTER TABLE `k_download`
  MODIFY `k_download_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_news`
--
ALTER TABLE `k_news`
  MODIFY `k_news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_setting`
--
ALTER TABLE `k_setting`
  MODIFY `k_setting_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_staff`
--
ALTER TABLE `k_staff`
  MODIFY `k_staff_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
