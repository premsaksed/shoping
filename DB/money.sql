-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 17, 2021 at 06:28 PM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
