-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 02:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diemtra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khu_vuc`
--

CREATE TABLE `tbl_khu_vuc` (
  `khu_vuc_id` int(11) NOT NULL,
  `ten_khu_vuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khu_vuc`
--

INSERT INTO `tbl_khu_vuc` (`khu_vuc_id`, `ten_khu_vuc`) VALUES
(1, 'Hoàng Mai'),
(2, 'Cầu Giấy'),
(3, 'Thanh Xuân'),
(4, 'Đống Đa'),
(5, 'Ba Đình');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phong_tro`
--

CREATE TABLE `tbl_phong_tro` (
  `phong_tro_id` int(11) NOT NULL,
  `ten_phong_tro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `khu_vuc_id` int(11) NOT NULL,
  `gia_thue` int(11) NOT NULL,
  `mo_ta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_khu_vuc`
--
ALTER TABLE `tbl_khu_vuc`
  ADD PRIMARY KEY (`khu_vuc_id`);

--
-- Indexes for table `tbl_phong_tro`
--
ALTER TABLE `tbl_phong_tro`
  ADD PRIMARY KEY (`phong_tro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_khu_vuc`
--
ALTER TABLE `tbl_khu_vuc`
  MODIFY `khu_vuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_phong_tro`
--
ALTER TABLE `tbl_phong_tro`
  MODIFY `phong_tro_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
