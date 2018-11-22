-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 12:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sasanun`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(2) NOT NULL,
  `departmentName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `departmentName`) VALUES
(11, 'เดินรถ'),
(12, 'การเงิน'),
(13, 'ทรัพยากรบุคคล'),
(14, 'ซ่อมบำรุง');

-- --------------------------------------------------------

--
-- Table structure for table `department_position`
--

CREATE TABLE `department_position` (
  `department_id` int(2) NOT NULL,
  `position_id` int(3) NOT NULL,
  `positionSalary` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_position`
--

INSERT INTO `department_position` (`department_id`, `position_id`, `positionSalary`) VALUES
(11, 101, 2345),
(12, 101, 90000),
(12, 201, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(3) NOT NULL,
  `educationName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `educationName`) VALUES
(33, '2345'),
(101, 'ชั้นมัธยมศึกษาชั้นปีที่3'),
(102, 'ชั้นมัธยมศึกษาชั้นปีที่6'),
(301, 'ปริญญาตรี'),
(302, 'ปริญญาโท'),
(303, 'ปริญญาเอก');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employees_id` int(9) NOT NULL,
  `profile_id` varchar(13) DEFAULT NULL,
  `department_id` int(2) DEFAULT NULL,
  `position_id` int(3) DEFAULT NULL,
  `jobStatus` enum('ทำงาน','ถูกพักงาน','ยกเลิกทำงาน') DEFAULT NULL,
  `officeAddress` varchar(100) DEFAULT NULL,
  `startWorkingDay` date DEFAULT NULL,
  `endWorkingDay` date DEFAULT NULL,
  `staffStaus` enum('รายเดือน','รายวัน') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employees_id`, `profile_id`, `department_id`, `position_id`, `jobStatus`, `officeAddress`, `startWorkingDay`, `endWorkingDay`, `staffStaus`) VALUES
(11201001, '1709800262859', 12, 33, 'ทำงาน', '22', '2018-11-10', '2018-11-13', 'รายเดือน');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(4) NOT NULL,
  `newsList` varchar(200) DEFAULT NULL,
  `newsDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `newsList`, `newsDate`) VALUES
(25, 'รายละเอียด', '2018-11-15'),
(26, '1222', '2018-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(3) NOT NULL,
  `positionName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `positionName`) VALUES
(33, '2345'),
(101, 'ผู้จัดการ'),
(201, 'พนักงาน');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` varchar(13) NOT NULL,
  `name_lastName` varchar(60) DEFAULT NULL,
  `profileBirthday` date DEFAULT NULL,
  `profileGender` enum('ชาย','หญิง') DEFAULT NULL,
  `profileAddress` varchar(100) DEFAULT NULL,
  `education_id` int(3) DEFAULT NULL,
  `profileTel` varchar(10) DEFAULT NULL,
  `profileEmail` varchar(50) DEFAULT NULL,
  `profileStatus` enum('รอการตรวจสอบ','พนักงาน') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `name_lastName`, `profileBirthday`, `profileGender`, `profileAddress`, `education_id`, `profileTel`, `profileEmail`, `profileStatus`) VALUES
('1709800262859', 'นาย ธนพนธ์ เชยงาม', '2018-11-01', 'ชาย', '85 ถนน มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000', 301, '0882881375', '584259012@webmail.npru.ac.th', 'พนักงาน'),
('1719900409932', 'นางสาวชิญานันท์ สิทธิเพ็ง', '2018-11-01', 'หญิง', '85 ถนน มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000', 301, '0879788214', '584259024@webmail.npru.ac.th', 'พนักงาน'),
('1759900292091', 'นายวรวิทย์ เจริญกุล', '2018-11-01', 'ชาย', '85 ถนน มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000', 301, '0822444074', '584259021@webmail.npru.ac.th', 'รอการตรวจสอบ'),
('1759900292222', 'thanapon', '2018-11-01', 'ชาย', 'thanapon', 301, '301', '301', 'พนักงาน');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` varchar(12) NOT NULL,
  `profile_id` varchar(13) DEFAULT NULL,
  `department_id` int(2) DEFAULT NULL,
  `position_id` int(3) DEFAULT NULL,
  `talent` varchar(100) DEFAULT NULL,
  `applicationDate` date DEFAULT NULL,
  `education_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `profile_id`, `department_id`, `position_id`, `talent`, `applicationDate`, `education_id`) VALUES
('081025610002', '1719900409932', 12, 101, '123', '2018-11-01', 102),
('081025610003', '1719900409932', 12, 101, '123', '2018-11-01', 102);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` varchar(17) NOT NULL,
  `employees_id` int(9) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `cost_of_living` double DEFAULT NULL,
  `extra_Income` double DEFAULT NULL,
  `otherEarning` double DEFAULT NULL,
  `payTariff` double DEFAULT NULL,
  `paySocialSecurity` double DEFAULT NULL,
  `prePaid` double DEFAULT NULL,
  `payOther` double DEFAULT NULL,
  `salaryDay` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salaryhistory`
--

CREATE TABLE `salaryhistory` (
  `salaryHistory_id` varchar(17) NOT NULL,
  `employees_id` int(9) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `salaryHistoryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `a` int(17) NOT NULL,
  `b` int(10) NOT NULL,
  `c` int(10) NOT NULL,
  `d` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`a`, `b`, `c`, `d`) VALUES
(111111111, 11, 11, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `department_position`
--
ALTER TABLE `department_position`
  ADD PRIMARY KEY (`department_id`,`position_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employees_id`),
  ADD KEY `FK` (`profile_id`,`department_id`,`position_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`),
  ADD KEY `FK` (`positionName`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `FK` (`education_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`),
  ADD KEY `FK` (`profile_id`,`department_id`,`position_id`,`education_id`),
  ADD KEY `education_id` (`education_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `FK` (`employees_id`);

--
-- Indexes for table `salaryhistory`
--
ALTER TABLE `salaryhistory`
  ADD PRIMARY KEY (`salaryHistory_id`),
  ADD KEY `FK` (`employees_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`a`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department_position`
--
ALTER TABLE `department_position`
  ADD CONSTRAINT `department_position_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`),
  ADD CONSTRAINT `department_position_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`),
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`education_id`) REFERENCES `education` (`education_id`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`education_id`) REFERENCES `education` (`education_id`),
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`),
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `register_ibfk_4` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`employees_id`);

--
-- Constraints for table `salaryhistory`
--
ALTER TABLE `salaryhistory`
  ADD CONSTRAINT `salaryhistory_ibfk_1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`employees_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
