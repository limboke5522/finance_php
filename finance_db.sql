-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 10:31 AM
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
-- Database: `finance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_fn`
--

CREATE TABLE `category_fn` (
  `id_cg` int(10) NOT NULL,
  `name_cg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `values_bg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_fn`
--

INSERT INTO `category_fn` (`id_cg`, `name_cg`, `values_bg`) VALUES
(4, 'ไปเที่ยวพักร้อน', 1000),
(5, 'ไปเที่ยวพักหนาว', 2000),
(6, 'ซื้ออุปกรณ์', 3000),
(8, 'ค่าบำรุงรักษา', 200000),
(9, '2', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id_expen` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name_ex` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `values_ex` float NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time_ex` date NOT NULL,
  `pro_expen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time_st` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id_expen`, `name_ex`, `values_ex`, `category`, `time_ex`, `pro_expen`, `time_st`) VALUES
(0000000007, 'เลี้ยงเหล้าหมี', 100, 'ไปเที่ยวพักร้อน', '2019-02-16', '', '2019-02-07 06:57:13'),
(0000000008, 'ให้เงินหมี', 150, 'ไปเที่ยวพักหนาว', '2019-02-07', '', '2019-02-07 06:58:28'),
(0000000009, 'คอมพิวเตอร์', 200, 'ซื้ออุปกรณ์', '2019-02-16', '', '2019-02-07 06:58:47'),
(0000000011, 'แม่ให้เงินมากินข้าว', 30000, 'ค่าบำรุงรักษา', '2019-02-23', '', '2019-02-07 09:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id_reve` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name_rn` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `values_rn` float NOT NULL,
  `category_rn` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_rn` date NOT NULL,
  `pro_reve` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time_st` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id_reve`, `name_rn`, `values_rn`, `category_rn`, `date_rn`, `pro_reve`, `time_st`) VALUES
(0000000007, 'พ่อให้เงิน', 300, 'ไปเที่ยวพักร้อน', '2019-02-22', '', '2019-02-07 06:54:28'),
(0000000008, 'แม่ให้เงินมากินข้าว', 100, 'ไปเที่ยวพักหนาว', '2019-02-22', '', '2019-02-07 06:54:48'),
(0000000009, 'ขนม', 150, 'ซื้ออุปกรณ์', '2019-02-22', '', '2019-02-07 06:55:15'),
(0000000010, 'พ่อให้เงิน2', 100, 'ไปเที่ยวพักร้อน', '2019-02-10', '', '2019-02-07 06:55:33'),
(0000000011, 'แม่ให้เงินมากินข้าว2', 150, 'ไปเที่ยวพักหนาว', '2019-02-07', '', '2019-02-07 06:55:52'),
(0000000012, 'ขนม2', 300, 'ซื้ออุปกรณ์', '2019-02-15', '', '2019-02-07 06:56:10'),
(0000000013, 'ถูกหวย', 1500, 'ไปเที่ยวพักร้อน', '2019-02-21', '', '2019-02-07 08:08:10'),
(0000000014, 'คอมพิวเตอร์', 200000, 'ค่าบำรุงรักษา', '2019-02-15', '', '2019-02-07 09:23:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_fn`
--
ALTER TABLE `category_fn`
  ADD PRIMARY KEY (`id_cg`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id_expen`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id_reve`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_fn`
--
ALTER TABLE `category_fn`
  MODIFY `id_cg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id_expen` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id_reve` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
