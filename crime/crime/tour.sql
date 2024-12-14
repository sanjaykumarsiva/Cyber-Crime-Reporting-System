-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 11:20 AM
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
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_type` varchar(100) DEFAULT NULL,
  `package_location` varchar(30) DEFAULT NULL,
  `package_price` varchar(30) DEFAULT NULL,
  `package_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `package_name`, `package_type`, `package_location`, `package_price`, `package_image`) VALUES
(1, 'Kerala Wonders & Kerala Cultures', 'family package', 'Tamilnadu', 'RS.13,000', 'tourimages/kerala.jfif'),
(2, 'Goa Wonders & Beautiful places', 'couple package', 'India', 'RS.25,000', 'tourimages/goa.jfif'),
(3, 'Ooty Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.15,000', 'tourimages/ooty.jfif'),
(4, 'Czech Republic Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.75,000', 'tourimages/czech.jfif'),
(5, 'America Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.1,25,000', 'tourimages/america.jfif'),
(6, 'Switzerland Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.97,000', 'tourimages/switz.jfif'),
(7, 'Kodaikanal Wonders & Hills Stations', 'family package', 'Tamilnadu', 'RS.19,000', 'tourimages/kodaikanal.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
