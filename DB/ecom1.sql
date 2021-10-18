-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2021 at 04:26 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `OrderID` varchar(50) NOT NULL,
  `ID_user` int(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `money` int(10) NOT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`OrderID`, `ID_user`, `date`, `time`, `money`, `Status`) VALUES
('1', 1, '2021-10-07', '222', 2000, 1),
('2', 1, '2021-10-07', '222', 2000, 2),
('00019', 2, '2021-10-13', '09.50', 3456, 1),
('00019', 2, '2021-10-13', '09.50', 3456, 1),
('00029', 2, '2021-10-21', '09.50', 666, NULL),
('00022', 2, '2021-10-08', '09.50', 66, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `OrderDate` datetime NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` int(1) NOT NULL,
  `track` text,
  `User_ID` int(10) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `Name`, `Address`, `Tel`, `Email`, `Status`, `track`, `User_ID`, `money`) VALUES
(00001, '2012-03-15 09:59:13', 'Weerachai Nukitram', '1234 Lapharo Bangkok Thailand', '0819876107', 'is_php@hotmail.com', 1, '', 2, ''),
(00002, '2012-03-15 10:15:03', 'Weerachai Nukitram', '1234 Latpharo Bangkok Thailand', '0819876107', 'is_php@hotmail.com', 1, '12345', 2, ''),
(00003, '2021-10-11 03:32:58', '123', 'qwer', '123', 'qwer', 1, '12345678', 0, ''),
(00004, '2021-10-11 08:01:27', '2', '2', '2', '2', 1, '986544', 0, ''),
(00005, '2021-10-12 02:10:34', '', '', '', '', 1, '111111', 0, ''),
(00006, '2021-10-12 02:12:23', 'ๅ', 'ๅ', 'ๅ', 'ๅ', 0, '', 0, ''),
(00007, '2021-10-12 02:37:45', '1', '2', '3', '4', 0, '', 2, ''),
(00008, '2021-10-17 16:09:08', '2', '2', '2', '2', 0, NULL, NULL, NULL),
(00009, '2021-10-17 16:09:41', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, NULL, NULL),
(00010, '2021-10-17 16:21:45', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, NULL, NULL),
(00011, '2021-10-17 16:26:24', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00012, '2021-10-17 16:37:19', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00013, '2021-10-17 16:38:25', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00014, '2021-10-17 16:40:22', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00015, '2021-10-17 16:40:53', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00016, '2021-10-17 16:43:17', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00017, '2021-10-17 16:48:14', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00018, '2021-10-17 16:49:05', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00019, '2021-10-17 16:50:19', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, '1'),
(00020, '2021-10-17 16:52:13', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00021, '2021-10-17 16:53:28', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00022, '2021-10-17 16:55:28', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, '1'),
(00023, '2021-10-17 16:56:52', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, NULL, NULL),
(00024, '2021-10-17 16:58:14', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 1, '11111', 2, NULL),
(00025, '2021-10-17 17:07:50', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, '0'),
(00026, '2021-10-17 17:14:54', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00027, '2021-10-17 17:16:27', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00028, '2021-10-17 17:16:56', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, NULL),
(00029, '2021-10-17 17:18:17', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 0, NULL, 2, '1'),
(00030, '2021-10-17 17:32:30', 'user bbbb', ' 123 ', '111', 'test@gmail.com', 1, '12345', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `DetailID` int(5) NOT NULL,
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ProductID` int(4) NOT NULL,
  `Qty` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`DetailID`, `OrderID`, `ProductID`, `Qty`) VALUES
(1, 00001, 4, 1),
(2, 00002, 3, 3),
(3, 00002, 1, 1),
(4, 00002, 4, 1),
(5, 00003, 2, 1),
(6, 00003, 1, 1),
(7, 00003, 4, 19),
(8, 00003, 3, 1),
(9, 00004, 1, 3),
(10, 00004, 3, 1),
(11, 00005, 2, 3),
(12, 00006, 2, 1),
(13, 00007, 2, 18),
(14, 00008, 2, 1),
(15, 00009, 2, 1),
(16, 00010, 2, 1),
(17, 00011, 3, 1),
(18, 00012, 3, 1),
(19, 00013, 3, 1),
(20, 00014, 2, 1),
(21, 00015, 3, 1),
(22, 00016, 1, 1),
(23, 00017, 2, 1),
(24, 00018, 2, 1),
(25, 00019, 2, 1),
(26, 00020, 2, 1),
(27, 00020, 3, 1),
(28, 00021, 3, 1),
(29, 00022, 2, 1),
(30, 00023, 2, 1),
(31, 00024, 2, 1),
(32, 00025, 2, 1),
(33, 00026, 3, 3),
(34, 00026, 4, 1),
(35, 00027, 3, 3),
(36, 00027, 4, 1),
(37, 00028, 3, 3),
(38, 00028, 4, 1),
(39, 00029, 3, 3),
(40, 00029, 4, 1),
(41, 00030, 2, 2),
(42, 00030, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(4) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  `detailed` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Picture`, `detailed`) VALUES
(1, 'Product 1', 100, '1.png', ''),
(2, 'Product 2', 200, '2.png', ''),
(3, 'Product 3', 300, '3.png', ''),
(4, 'Product 4', 400, '4.png', ''),
(12, 'sdfgh', 12222, NULL, 'fgh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Firstname` varchar(100) DEFAULT NULL,
  `Lastname` varchar(100) DEFAULT NULL,
  `Userlevel` varchar(1) DEFAULT NULL,
  `Address` text,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `Userlevel`, `Address`, `Tel`, `Email`) VALUES
(1, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'aaa', 'A', '', '', ''),
(2, 'bbb', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'bbbb', 'M', '123', '111', 'test@gmail.com'),
(11, 'prem', 'd41d8cd98f00b204e9800998ecf8427e', 'prem', 'prem', 'M', 'prem', '0', 'p@g.c'),
(10, 'bol', '81dc9bdb52d04dc20036dbd8313ed055', 'bol', 'bol', 'A', 'bol', '213123', 'bol'),
(12, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', 'M', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `DetailID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
