-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 05:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alsaeeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` smallint(6) NOT NULL,
  `ad_fname` varchar(20) NOT NULL,
  `ad_mname` varchar(20) NOT NULL,
  `ad_lname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_fname`, `ad_mname`, `ad_lname`, `password`) VALUES
(1, 'seif', 'aldin', 'alrumaimah', '773235304'),
(2, 'ammar', 'pro', 'max', '733000344');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `col_id` tinyint(4) NOT NULL,
  `col_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`col_id`, `col_name`) VALUES
(1, 'كلية طب الاسنان'),
(2, 'كلية العلوم الطبية'),
(3, 'كلية الهندسة وتقنية المعلومات'),
(4, 'كلية العلوم الإدارية والإنسانية');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_name` varchar(50) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_phone` varchar(15) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_name`, `con_email`, `con_phone`, `comment`) VALUES
('aaa', 'ssssssssskkk@dfghj', '8888888', 'gggggggggggggggggggggggggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `g_id` bigint(20) NOT NULL,
  `m_mark` tinyint(4) NOT NULL,
  `f_mark` tinyint(4) NOT NULL,
  `sub_id` smallint(6) NOT NULL,
  `std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`g_id`, `m_mark`, `f_mark`, `sub_id`, `std_id`) VALUES
(67, 40, 60, 1, 1),
(68, 40, 59, 2, 1),
(69, 40, 60, 3, 1),
(70, 40, 55, 4, 1),
(71, 33, 45, 5, 1),
(72, 35, 53, 6, 1),
(73, 40, 60, 7, 1),
(74, 40, 60, 8, 1),
(75, 39, 57, 9, 1),
(76, 38, 58, 10, 1),
(77, 33, 55, 11, 1),
(78, 40, 60, 12, 1),
(79, 39, 59, 13, 1),
(80, 99, 99, 1, 2),
(81, 99, 99, 2, 2),
(82, 99, 99, 3, 2),
(83, 99, 99, 4, 2),
(84, 99, 99, 5, 2),
(85, 99, 99, 6, 2),
(86, 99, 99, 7, 2),
(87, 99, 99, 8, 2),
(88, 99, 99, 9, 2),
(89, 99, 99, 10, 2),
(90, 99, 99, 11, 2),
(91, 99, 99, 12, 2),
(92, 99, 99, 13, 2),
(93, 99, 99, 14, 2),
(94, 99, 99, 15, 2),
(95, 99, 99, 16, 2),
(96, 99, 99, 17, 2),
(97, 99, 99, 18, 2),
(98, 99, 99, 18, 2),
(99, 99, 99, 19, 2),
(100, 99, 99, 20, 2),
(101, 99, 99, 21, 2),
(102, 99, 99, 20, 2),
(103, 99, 99, 23, 2),
(104, 99, 99, 24, 2),
(105, 99, 99, 25, 2),
(106, 99, 99, 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `specializ`
--

CREATE TABLE `specializ` (
  `spec_id` tinyint(4) NOT NULL,
  `spec_name` varchar(40) NOT NULL,
  `col_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specializ`
--

INSERT INTO `specializ` (`spec_id`, `spec_name`, `col_id`) VALUES
(1, 'جراحة الفم والاسنان', 1),
(2, 'طب بشري', 2),
(7, 'صيدلة', 2),
(8, 'مختبرات', 2),
(9, 'تمريض', 2),
(10, 'قبالة', 2),
(11, 'صحة مجتمع', 2),
(12, 'هندسة مدنية', 3),
(13, 'تقنية معلومات', 3),
(14, 'جرافيكس', 3),
(15, 'محاسبة', 4),
(16, 'ادارة اعمال', 4),
(17, 'نظم معلومات ادارية', 4),
(18, 'علوم مالية ومصرفية', 4),
(19, 'علوم سياسية ودبلوماسية', 4);

-- --------------------------------------------------------

--
-- Table structure for table `spec_sub`
--

CREATE TABLE `spec_sub` (
  `sub_id` smallint(6) NOT NULL,
  `spec_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spec_sub`
--

INSERT INTO `spec_sub` (`sub_id`, `spec_id`) VALUES
(13, 7),
(13, 6),
(13, 12),
(13, 10),
(13, 26),
(13, 16),
(13, 23),
(13, 15),
(13, 21),
(13, 2),
(13, 19),
(13, 24),
(13, 5),
(13, 11),
(13, 14),
(13, 18),
(13, 22),
(13, 17),
(13, 17),
(13, 1),
(13, 25),
(13, 16),
(13, 9),
(0, 0),
(13, 13),
(13, 3),
(13, 8),
(13, 4),
(13, 4),
(13, 3),
(13, 20);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `m_name` varchar(15) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `spec_id` tinyint(4) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `f_name`, `m_name`, `l_name`, `spec_id`, `pass`) VALUES
(1, 'بسام', 'فيصل', 'الكوكباني', 13, 'bassam'),
(2, 'وجيه', 'محمد', 'الرميمه', 13, 'wajeehx'),
(3, 'عمار', 'احمد', 'الهاشمي', 13, 'ammarx'),
(4, 'وليد', 'فيصل', 'عوض', 13, 'waleedx');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` smallint(6) NOT NULL,
  `sub_name` varchar(40) NOT NULL,
  `term_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `term_id`) VALUES
(1, 'لغة عربية', 1),
(2, 'ثقافة اسلامية', 1),
(3, 'مبادئ برمجة', 1),
(4, 'مهارة حاسوب', 1),
(5, 'رياضيات 1', 1),
(6, 'انجليزي 1', 1),
(7, 'احصاء واحتمالات', 2),
(8, 'مهارات الاتصال', 2),
(9, 'م. في تقنية المعلومات', 2),
(10, 'برمجة حاسوب', 2),
(11, 'رياضيات 2', 2),
(12, 'انجليزي 2', 2),
(13, 'م. في نظم المعلومات', 3),
(14, 'رياضيات متقطعة', 3),
(15, 'تصميم الويب', 3),
(16, 'برمجة موجهة', 3),
(17, 'قواعد بيانات 1', 3),
(18, 'شبكات وتراسل البيانات', 3),
(19, 'ثقافة وطنية', 3),
(20, 'هياكل بيانات', 4),
(21, 'تنظيم حاسوب', 4),
(22, 'طرق البحث العلمي', 4),
(23, 'برمجة ويب 2', 4),
(24, 'ثقافة وطنية 2', 4),
(25, 'قواعد بيانات 2', 4),
(26, 'برمجة مرئية', 4);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` tinyint(4) NOT NULL,
  `term_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `term_name`) VALUES
(1, 'الترم الأول'),
(2, 'الترم الثاني'),
(3, 'الترم الثالث'),
(4, 'الترم الرابع');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `std_id_fk` (`std_id`),
  ADD KEY `sub_id_fk` (`sub_id`) USING BTREE;

--
-- Indexes for table `specializ`
--
ALTER TABLE `specializ`
  ADD PRIMARY KEY (`spec_id`),
  ADD KEY `col_id_fk` (`col_id`);

--
-- Indexes for table `spec_sub`
--
ALTER TABLE `spec_sub`
  ADD KEY `spec_id_fk` (`spec_id`),
  ADD KEY `sub_id_fk` (`sub_id`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `spec_id_fk` (`spec_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `term_id_fk` (`term_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `col_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `g_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `specializ`
--
ALTER TABLE `specializ`
  MODIFY `spec_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `std_id_fk` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_id_fk` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `specializ`
--
ALTER TABLE `specializ`
  ADD CONSTRAINT `col_id_fk` FOREIGN KEY (`col_id`) REFERENCES `college` (`col_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `spec_id_fk` FOREIGN KEY (`spec_id`) REFERENCES `specializ` (`spec_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `term_id_fk` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
