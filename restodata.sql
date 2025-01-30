-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 08:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurantinfo`
--

CREATE TABLE `restaurantinfo` (
  `restoID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `restoName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `OpenTime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `closeTime` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lowestprice` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `highestprice` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `restolocation` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `typeofresto` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageurl` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '../imgs/demo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurantinfo`
--

INSERT INTO `restaurantinfo` (`restoID`, `userID`, `username`, `restoName`, `OpenTime`, `closeTime`, `contact`, `lowestprice`, `highestprice`, `restolocation`, `typeofresto`, `fullname`, `imageurl`) VALUES
(11, 20, 'nikhil123', 'khana', '10:30 am', '12:00 am', '+91 7766554433', '10', '10000', 'jaipur,Rajasthan', 'MIX', 'Nikhil Kumar', 'https://th.bing.com/th/id/OIP.xq2LirTKvbRaT5AljuXB9wHaEq?pid=ImgDet&rs=1'),
(12, 21, 'abinR', 'superMasala', '6 am', '11pm', '+91 1231234568', '10', '1000', 'mumbai railway station', 'V', 'abhin rathore', 'https://th.bing.com/th/id/R.5d5da0eaaab84a0dde3c2c0cebb84242?rik=pJpoungH48pi7g&pid=ImgRaw&r=0');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` int(11) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userpass` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservations` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contactno` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressofuser` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userdesc` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `fullname`, `username`, `email`, `userpass`, `reservations`, `contactno`, `addressofuser`, `userdesc`) VALUES
(20, 'Nikhil Kumar', 'nikhil123', 'nikhil@gmail.com', '$2y$10$6BKjo5nzmV9Xp0lRnjSCAOszlR2NDTFcNvj9XuxMW1fG7Q7TyWZ/i', 'khana', '+91 7558498271', 'vasco-da-gama,Goa', 'I am a frontend developer. I love to do designing.'),
(21, 'abhin rathore', 'abinR', 'list.append17@gmail.com', '$2y$10$pSHMVo89/uqSrQs9xwkT6eai3rdn9vleLU9d7TAsSJQz5/jPapW9m', 'khana', '+911231231235', 'D block, minar nagar, mumbai', 'i am a 1st year student perusing BE in Information technology.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurantinfo`
--
ALTER TABLE `restaurantinfo`
  ADD PRIMARY KEY (`restoID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurantinfo`
--
ALTER TABLE `restaurantinfo`
  MODIFY `restoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
