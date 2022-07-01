-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 08:28 PM
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
-- Table structure for table `addcomment`
--

CREATE TABLE `addcomment` (
  `id` smallint(5) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `comment` varchar(500) CHARACTER SET utf8 NOT NULL,
  `pageId` smallint(3) NOT NULL,
  `date-created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcomment`
--

INSERT INTO `addcomment` (`id`, `name`, `comment`, `pageId`, `date-created`) VALUES
(11, '1', 'dfg', 1, '2020-05-24 18:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `prdsales`
--
-- Error reading structure for table chamix.prdsales: #1932 - Table 'chamix.prdsales' doesn't exist in engine
-- Error reading data for table chamix.prdsales: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `chamix`.`prdsales`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `prd_type_trl`
--

CREATE TABLE `prd_type_trl` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prd_type_trl`
--

INSERT INTO `prd_type_trl` (`t_id`, `t_name`) VALUES
(5, 'ชา'),
(6, 'อิตาเลียนโซดา'),
(7, 'กาแฟ');

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
(1, 'test', '<p>test</p>\r\n', '130310054720200505_194249.png', '0000-00-00 00:00:00', 'yes'),
(2, 'ดีจ้า', '<h2>Lorem Ipsum คืออะไร?</h2>\r\n\r\n<p>Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>\r\n\r\n<h2>ทำไมจึงต้องนำมาใช้?</h2>\r\n\r\n<p>มีหลักฐานที่เป็นข้อเท็จจริงยืนยันมานานแล้ว ว่าเนื้อหาที่อ่านรู้เรื่องนั้นจะไปกวนสมาธิของคนอ่านให้เขวไปจากส่วนที้เป็น Layout เรานำ Lorem Ipsum มาใช้เพราะความที่มันมีการกระจายของตัวอักษรธรรมดาๆ แบบพอประมาณ ซึ่งเอามาใช้แทนการเขียนว่า &lsquo;ตรงนี้เป็นเนื้อหา, ตรงนี้เป็นเนื้อหา&#39; ได้ และยังทำให้มองดูเหมือนกับภาษาอังกฤษที่อ่านได้ปกติ ปัจจุบันมีแพ็กเกจของซอฟท์แวร์การทำสื่อสิ่งพิมพ์ และซอฟท์แวร์การสร้างเว็บเพจ (Web Page Editor) หลายตัวที่ใช้ Lorem Ipsum เป็นแบบจำลองเนื้อหาที่เป็นค่าตั้งต้น และเวลาที่เสิร์ชด้วยคำว่า &#39;lorem ipsum&#39; ผลการเสิร์ชที่ได้ก็จะไม่พบบรรดาเว็บไซต์ที่ยังคงอยู่ในช่วงเริ่มสร้างด้วย โดยหลายปีที่ผ่านมาก็มีการคิดค้นเวอร์ชั่นต่างๆ ของ Lorem Ipsum ขึ้นมาใช้ บ้างก็เป็นความบังเอิญ บ้างก็เป็นความตั้งใจ (เช่น การแอบแทรกมุกตลก)</p>\r\n', '9023492620200505_220121.jpg', '0000-00-00 00:00:00', 'yes'),
(5, 'ชามิกซ์คืออะไร?', '<p>&nbsp; &nbsp; &nbsp;คือ.. ชาที่ผ่านการคิดค้นนำใบชาต่างๆที่มีคุณภาพที่สุดมาผสมผสานกันจนเกิดความลงตัว ทำให้ชามีเอกลักษณ์ของรสชาติที่โดดเด่น เช่น เข้มข้น กลมกล่อม หอมละมุนติดคอติดจมูกไปเลยที่เดียว&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ทั้งนี้เพื่อให้ได้รสชาติของชาที่จะตอบโจทย์ความต้องการของลูกค้ามากที่สุด ชามิกซ์จึงได้ใช้เวลาในการศึกษาคิดค้นและทดลองนำใบชาต่างๆทั้งใบชาที่ได้รับความนิยมในบ้านเราและที่ได้รับการนิยมกันในต่างประเทศ มาผสมผสานกันเพื่อให้ได้ผงชาที่มีคุณภาพที่ดี และด้วยระยะเวลาในการทดลองอย่างต่อเนื่องจนทำให้ได้สูตรการผสม ชา ที่เกิดความลงตัวในที่สุด พร้อมเทคนิคพิเศษโดยเฉพาะที่ทางชามิกซ์ได้คิดค้นขึ้น เช่นกระบวนการทำน้ำชาให้เข้ม ลำดับขั้นตอนวิธีการทำน้ำต่างๆ เลยทำให้รสชาติของน้ำชามีความเข้มข้น กลมกล่อม หอมละมุน สัมผัสได้ถึงความแตกต่างในแก้วเดียว ซึ่งความแตกต่างของชามิกซ์นั้น จะมีเอกลักษณ์ของรสชาติที่โดดเด่น เช่น มีความเข้มข้นเป็นพิเศษ จะมีความหอมหวานและมันกว่า ความเข้มข้นและความหอมของชาจะติดจมูกติดลิ้นหายใจออกความหอมของกลิ่นชากันเลยที่เดียว และความแตกต่างอีกอย่างหนึ่งคือ ถึงแม้น้ำแข็งจะละลายแต่ ชา ก็ยังคงรสชาติเข้มหอมหวานเหมือนเดิม นอกจากนั้นก็ยังมีเมนูอีกหลายเมนูที่ได้คิดค้นและรังสรรค์ขึ้นมา พร้อมให้สัมผัสถึงความอร่อยแบบเข้มข้นถึงใจกันอีกกว่า 90 เมนู การันตีความเข้มข้นทุกเมนู เพราะเราได้ทำการทดลองอย่างจริงจังเพื่อให้ได้รสชาติที่เข้มข้นอย่างลงตัว ก่อนนำขายสู่ผู้บริโภคทุกครั้ง &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />\r\n&nbsp; &nbsp; &nbsp;&nbsp;<br />\r\nสโลแกนแบรนด์ &nbsp; &nbsp; &quot; ที่สุดแห่งชา..ต้องชามิกซ์&quot;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;อร่อยเข้มอร่อยคุ้ม ให้คุณ ได้ทุกวัน &quot;&nbsp;</p>\r\n', '163377950520200526_153343.png', '0000-00-00 00:00:00', 'yes'),
(6, 'หหก', 'หกดเ', '1281489020200526_153442.png', '0000-00-00 00:00:00', 'no');

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
  `em_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`em_id`, `em_name`, `em_address`, `em_designation`, `em_images`, `em_email`, `em_password`, `em_phone`, `em_date`) VALUES
(3, '345t', '<p>fgh</p>\r\n', 'Organize', '', 'dwee@mgam.com', 'werty', '345', '0000-00-00 00:00:00'),
(4, 'wertyu', '<p>dgthtyju</p>\r\n', 'Admin', '', '23456789@ssdfg.oc', '2345678', '123456789', '2020-04-18 19:12:48'),
(5, '123456', '<p>sdfghj</p>\r\n', 'Organize', '', '456@gmail.com', '1234567', '1234567', '2020-04-27 09:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income`
--

CREATE TABLE `tbl_income` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `amount` float(10,2) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เงินได้';

--
-- Dumping data for table `tbl_income`
--

INSERT INTO `tbl_income` (`id`, `detail`, `amount`, `datesave`) VALUES
(1, 'รายได้จากการสอนทำเว็บไซต์', 50000.00, '2018-07-31 21:33:19'),
(2, 'รายได้จากการสอนทำเว็บไซต์', 40000.00, '2018-09-07 21:33:19'),
(3, 'รายได้จากการสอนทำเว็บไซต์', 70000.00, '2018-09-06 21:34:43'),
(4, 'รายได้จากการสอนทำเว็บไซต์', 80000.00, '2018-09-05 21:34:43'),
(5, 'รายได้จากการสอนทำเว็บไซต์', 40000.00, '2017-07-02 10:00:00'),
(6, 'รายได้จากการสอนทำเว็บไซต์', 50000.00, '2017-06-19 10:00:00'),
(7, 'รายได้จากการสอนทำเว็บไซต์', 5000.00, '2018-09-09 23:26:46'),
(8, 'รายได้จากการสอนทำเว็บไซต์', 5000.00, '2018-09-09 23:26:53'),
(9, 'รายได้จากการสอนทำเว็บไซต์', 100000.00, '2018-09-09 23:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prd`
--

CREATE TABLE `tbl_prd` (
  `id` int(11) NOT NULL,
  `em_id` int(100) NOT NULL COMMENT 'รหัสคนเพิ่มข้อมูล',
  `type_id` int(100) NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `price` float(10,2) NOT NULL,
  `images` varchar(100) CHARACTER SET utf8 NOT NULL,
  `view` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prd`
--

INSERT INTO `tbl_prd` (`id`, `em_id`, `type_id`, `name`, `detail`, `price`, `images`, `view`, `datesave`) VALUES
(37, 0, 7, 'เอสเปรสโซ', 'ชงจากเมล็ดกาแฟแท้ กาแฟดำเข้มข้น อร่อยลงตัว', 25.00, '45000939120200518_093330.jpg', '', '2020-05-18 02:33:30'),
(35, 0, 6, 'แดงโซดามะนาว', 'เฮลบลูบอยแดงผสมโซดาและมะนาว สดชื่น ', 25.00, '155948675920200518_092723.jpg', '', '2020-05-18 02:27:23'),
(34, 0, 5, 'ชานมเย็น', 'เฮลบลูบอยผสมนมข้นหวาน อร่อย หวานมันลงตัว', 25.00, '178858052720200518_092650.jpg', '', '2020-05-18 02:26:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcomment`
--
ALTER TABLE `addcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prd_type_trl`
--
ALTER TABLE `prd_type_trl`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_column`
--
ALTER TABLE `tbl_column`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `tbl_prd`
--
ALTER TABLE `tbl_prd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcomment`
--
ALTER TABLE `addcomment`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prd_type_trl`
--
ALTER TABLE `prd_type_trl`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_column`
--
ALTER TABLE `tbl_column`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_prd`
--
ALTER TABLE `tbl_prd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
