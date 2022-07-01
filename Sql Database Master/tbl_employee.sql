-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 11:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chamix`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `em_id` int(11) NOT NULL,
  `em_name` varchar(20) NOT NULL,
  `em_address` text NOT NULL,
  `em_designation` varchar(10) NOT NULL,
  `em_images` varchar(255) NOT NULL,
  `em_email` varchar(50) NOT NULL,
  `em_password` varchar(20) NOT NULL,
  `em_phone` varchar(13) NOT NULL,
  `em_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `em_branch` varchar(100) NOT NULL COMMENT 'สาขา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`em_id`, `em_name`, `em_address`, `em_designation`, `em_images`, `em_email`, `em_password`, `em_phone`, `em_date`, `em_branch`) VALUES
(3, '345t', '<p>fgh</p>\r\n', 'Organize', '', 'dwee@mgam.com', 'werty', '345', '2020-05-29 11:22:55', 'สี่แยก'),
(4, 'wertyu', '<p>dgthtyju</p>\r\n', 'Admin', '', '23456789@ssdfg.oc', '2345678', '123456789', '2020-05-29 11:20:16', 'หาดใหญ่'),
(5, '123456', '<p>sdfghj</p>\r\n', 'Organize', '', '456@gmail.com', '1234567', '1234567', '2020-04-27 09:54:21', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`em_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
