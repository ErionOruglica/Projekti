-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 10:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestsellers`
--

CREATE TABLE `bestsellers` (
  `Id` int(11) NOT NULL,
  `Fotoja` varchar(255) NOT NULL,
  `Marka` varchar(255) NOT NULL,
  `Pershkrimi` varchar(255) NOT NULL,
  `Cmimi_Aktual` varchar(255) NOT NULL,
  `Cmimi_Zbritjes` varchar(255) NOT NULL,
  `Perqindja_Zbritjes` varchar(255) NOT NULL,
  `LastEditedBY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestsellers`
--

INSERT INTO `bestsellers` (`Id`, `Fotoja`, `Marka`, `Pershkrimi`, `Cmimi_Aktual`, `Cmimi_Zbritjes`, `Perqindja_Zbritjes`, `LastEditedBY`) VALUES
(5, '../../images/card1.jpg', 'Lenovo', 'Çantë shpine për laptop 15.6', '$20', '$40', '50%', 'eo611125@ubt-uni.net'),
(6, '../../images/card2.jpg', 'Gigabyte', 'Disk SSD GIGABYTE, M.2 - 256GB', '$29.50', '$33.50', '12% off', 'eo611125@ubt-uni.net'),
(7, '../../images/card3.jpg', 'Razer', 'Maus Razer DeathAdder V2 Mini', '$29.50', '$69.50', '58% off', 'eo611125@ubt-uni.net'),
(8, '../../images/card4.jpg', 'QCY', 'Dëgjuese QCY TWS T1C, të bardha', '$19.50', '$39.50', '51% off', 'eo611125@ubt-uni.net'),
(9, '../../images/card5.jpg', 'ACER', 'Laptop Acer Nitro 5 (AN515-57)', '$1,131.50', '', '', 'eo611125@ubt-uni.net'),
(10, '../../images/card6.jpg', 'WD RED', 'Hard disk WD Red, 3.5', '$169.50', '$229.50', '26% off', 'eo611125@ubt-uni.net'),
(11, '../../images/card7.jpg', 'AMD', 'Procesor AMD Ryzen 3 4100', '', '$109.30', '', 'eo611125@ubt-uni.net'),
(12, '../../images/card8.jpg', 'ASUS', 'Monitor ASUS Gaming VG249Q - 23.8\'\' LED', '$225.50', '$238.50', '5% off', 'eo611125@ubt-uni.net'),
(13, '../../images/card9.jpg', 'Samsung', 'Karikues Samsung EP-TA12', '$12.50', '$14.50', '22% off', 'eo611125@ubt-uni.net'),
(14, '../../images/card10.jpg', 'Samsung', 'Celular Samsung Galaxy A13', '$109.50', '', '', 'eo611125@ubt-uni.net');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(255) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_body` varchar(255) NOT NULL,
  `menu_price` varchar(255) NOT NULL,
  `LastEditedBY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `menu_image`, `menu_title`, `menu_body`, `menu_price`, `LastEditedBY`) VALUES
(4, '../../images/malli1.jpg', 'Televizor Samsung', 'Televizor Samsung UE50AU7172UXXH, 50 \"/ 125 cm', '$649.50', 'Bo56036@ubt-uni.net'),
(5, '../../images/malli2.jpg', 'Apple', 'Apple Watch SE2 GPS 44mm, Starlight Aluminium Case', '$372.00', 'Bo56036@ubt-uni.net'),
(6, '../../images/malli3.jpg', 'INTEL', 'Procesor Intel Core i5-12400F', '$252.50', 'Bo56036@ubt-uni.net'),
(7, '../../images/malli4.jpg', 'Logitech', 'Maus Gaming Logitech', '$69.40', 'Bo56036@ubt-uni.net'),
(8, '../../images/malli5.jpg', 'APPLE', 'Apple watch smart ', '$250', 'Bo56036@ubt-uni.net'),
(9, '../../images/malli6.jpg', 'JBL', 'Altoparlant JBL CLIP 4, i kaltër i hapur', '$59.50', 'Bo56036@ubt-uni.net'),
(10, '../../images/malli7.jpg', 'APPLE', 'Apple MagSafe Charger', '$66.50', 'Bo56036@ubt-uni.net'),
(11, '../../images/malli8.jpg', 'KINGSTON', 'USB Kingston Exodia Data Traveler, 32GB', '$7.50', 'Bo56036@ubt-uni.net'),
(12, '../../images/malli9.jpg', 'APPLE', 'Apple AirPods (3rd gen.)', '$259.00', 'Bo56036@ubt-uni.net'),
(13, '../../images/malli10.jpg', 'Logitech', 'Kamerë Logitech StreamCam C980, e hirtë', '$139.50', 'Bo56036@ubt-uni.net'),
(14, '../../images/Malli15.jpg', 'Fletore', 'Fletore League of Legends - Hextech Logo, A5', '€17.50 ', 'Bo56036@ubt-uni.net'),
(15, '../../images/Malli14.jpg', 'Telefon', 'Telefon Grandstream GXP2130v2', '€119.50', 'Bo56036@ubt-uni.net'),
(16, '../../images/Malli13.jpg', 'Ngjyre per printer', 'Ngjyrë për printer EPSON C13T67344A, e verdhë\r\n', '19.50 €', 'Bo56036@ubt-uni.net'),
(17, '../../images/Malli12.jpg', 'HP', 'Printer HP', '$250', 'Bo56036@ubt-uni.net');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `Emri_Plote` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mesazhi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `Emri_Plote`, `Email`, `Mesazhi`) VALUES
(4, '0', '0', '0'),
(5, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Mbiemri` varchar(255) NOT NULL,
  `Emaili` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Emri`, `Mbiemri`, `Emaili`, `Password`, `role`) VALUES
(1, 'Erion', 'Oruglica', 'eo611125@ubt-uni.net', 'erion1234', 'admin'),
(2, 'Ardian', 'Sutaj', 'ardiansutaj@ubt-uni.net', 'ardian123', 'admin'),
(3, 'Blend', 'Osmani', 'Bo56036@ubt-uni.net', 'Blend11osmani', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestsellers`
--
ALTER TABLE `bestsellers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestsellers`
--
ALTER TABLE `bestsellers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
