-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 11:14 AM
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
-- Table structure for table `tbl_column`
--

CREATE TABLE `tbl_column` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_detail` text NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_add` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_column`
--

INSERT INTO `tbl_column` (`c_id`, `c_name`, `c_detail`, `c_img`, `c_date`, `c_add`) VALUES
(6, 'หหก', '<p>หกดเ</p>\r\n', '201480171720200609_215947.jpg', '0000-00-00 00:00:00', 'no'),
(7, 'แพ็คเกจเริ่มต้น', '<h1>แพ็คเกจสำหรับผู้เริ่มต้น</h1>\r\n\r\n<h2>&nbsp; &nbsp; &nbsp; &nbsp; ของแถมเยอะจุใจ!พร้อมเป็นเจ้าของ</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<ul>\r\n	<li>ถังชาสแตนเลส</li>\r\n	<li>ถุงชงชา</li>\r\n	<li>ที่หนีบชา</li>\r\n	<li>แก้วชงน้้ำ</li>\r\n	<li>แก้วตวงชา</li>\r\n	<li>แก้วตวงนม</li>\r\n	<li>ช้อนตักกาแฟ</li>\r\n	<li>ช้อนคน</li>\r\n	<li>ป้ายลิขสิทธิ์</li>\r\n	<li>ป้ายเมนูลิขสิทธิ์</li>\r\n	<li>ไวนิลธงญี่ปุ่น</li>\r\n	<li>ใบสูตรทุกเมนู</li>\r\n	<li>ใบสะสมแต้ม</li>\r\n	<li>ตรายางลิขสิทธิ์</li>\r\n	<li>คอร์สเรียนทำน้ำฟรี 2 วัน!</li>\r\n</ul>\r\n\r\n<hr />\r\n<p><a href=\"https://ibb.co/Yjnb7sv\"><img alt=\"single\" src=\"https://i.ibb.co/2KV574X/single.jpg\" /></a></p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n', '4159720720200529_030618.png', '0000-00-00 00:00:00', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_column`
--
ALTER TABLE `tbl_column`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_column`
--
ALTER TABLE `tbl_column`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
