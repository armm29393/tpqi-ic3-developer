-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2019 at 05:20 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_ID` varchar(5) NOT NULL,
  `menu_Name` varchar(50) NOT NULL,
  `menu_Type` varchar(2) NOT NULL,
  `menu_price` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_ID`, `menu_Name`, `menu_Type`, `menu_price`) VALUES
('1234', 'asdf', '1', 0),
('m0001', 'ข้าวผัดอเมริกัน', '1', 70),
('m0002', 'ไอศกรีม', '2', 50),
('m0003', 'ข้าวผัดปู', '1', 80),
('m0004', 'ผัดมักกะโรนีกุ้ง', '1', 100),
('m0005', 'ปอเปี๊ยะสด', '3', 60),
('m0006', 'ปอเปี๊ยะทอด', '3', 60),
('m5555', 'ไก่', '1', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
