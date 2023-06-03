-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 03:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `metal`
--

CREATE TABLE `metal` (
  `id` int(11) NOT NULL,
  `metal` varchar(100) NOT NULL,
  `scrap_metal` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `timestamp` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metal`
--

INSERT INTO `metal` (`id`, `metal`, `scrap_metal`, `price`, `timestamp`) VALUES
(1, 'Copper', 'Z Rod', 9831, '2023-05-26 09:57:56.457255'),
(2, 'Copper', 'Armature Scrap', 10831, '2023-05-26 09:57:56.457255'),
(3, 'Copper', 'Cable Scrap', 2460, '2023-05-26 09:57:56.457255'),
(4, 'Copper', 'Casting NG Rod', 2360, '2023-05-26 09:57:56.457255'),
(5, 'Copper', 'Armature Scrap Plant', 2550, '2023-05-26 09:57:56.457255'),
(6, 'Copper', 'Supper D', 0, '0000-00-00 00:00:00.000000'),
(7, 'Copper', 'CC Rod', 0, '0000-00-00 00:00:00.000000'),
(8, 'Aluminium', 'Rod', 8888, '0000-00-00 00:00:00.000000'),
(9, 'Aluminium', 'Ingot', 8888, '0000-00-00 00:00:00.000000'),
(10, 'Aluminium', 'Wire Scrap', 8888, '0000-00-00 00:00:00.000000'),
(11, 'Aluminium', 'Sheet Cutting', 8888, '0000-00-00 00:00:00.000000'),
(12, 'Aluminium', 'Utensil Scrap', 8888, '0000-00-00 00:00:00.000000'),
(13, 'Aluminium', 'Accessories Scrap', 8888, '0000-00-00 00:00:00.000000'),
(14, 'Aluminium', 'Section', 8888, '0000-00-00 00:00:00.000000'),
(15, 'Aluminium', 'TT', 8888, '0000-00-00 00:00:00.000000'),
(16, 'Aluminium', 'Beer Can Scrap', 8888, '0000-00-00 00:00:00.000000'),
(17, 'Brass', 'Honey', 9831, '0000-00-00 00:00:00.000000'),
(18, 'Brass', 'Accessories Scrap', 9831, '0000-00-00 00:00:00.000000'),
(19, 'Brass', 'Sheet Cutting', 9831, '0000-00-00 00:00:00.000000'),
(101, 'Wire Rod', 'Durgapur 5.5 Wire', 9999, '0000-00-00 00:00:00.000000'),
(102, 'Wire Rod', 'Durgapur 12G HB Wire', 9999, '0000-00-00 00:00:00.000000'),
(103, 'Wire Rod', 'Durgapur 20G Binding Wire', 9999, '0000-00-00 00:00:00.000000'),
(104, 'Wire Rod', 'Haryana 8G Wire', 9999, '0000-00-00 00:00:00.000000'),
(105, 'Wire Rod', 'Haryana 10G Wire', 9999, '0000-00-00 00:00:00.000000'),
(106, 'Wire Rod', 'Haryana 12G Wire', 9999, '0000-00-00 00:00:00.000000'),
(107, 'Wire Rod', 'Haryana 14G Wire', 9999, '0000-00-00 00:00:00.000000'),
(108, 'Wire Rod', 'Raipur 7mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(109, 'Wire Rod', 'Raipur 8mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(110, 'Wire Rod', 'Raipur 10mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(111, 'Wire Rod', 'Raipur 12mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(112, 'Wire Rod', 'Raipur 14mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(113, 'Wire Rod', 'Raipur 16mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(114, 'Wire Rod', 'Raipur 18 swg Binding Wire', 9999, '0000-00-00 00:00:00.000000'),
(115, 'Wire Rod', 'Raipur 20 swg Binding Wire', 9999, '0000-00-00 00:00:00.000000'),
(116, 'Wire Rod', 'Raipur12X12 Barbed Wire', 9999, '0000-00-00 00:00:00.000000'),
(117, 'Wire Rod', 'Raipur 13X13 Barbed Wire', 9999, '0000-00-00 00:00:00.000000'),
(118, 'Wire Rod', 'Raipur 8 swg HB Wire', 9999, '0000-00-00 00:00:00.000000'),
(119, 'Wire Rod', 'Raipur 10 swg HB Wire', 9999, '0000-00-00 00:00:00.000000'),
(120, 'Wire Rod', 'Raipur 12 swg HB Wire', 9999, '0000-00-00 00:00:00.000000'),
(121, 'Wire Rod', 'Raipur 14 swg HB Wire', 9999, '0000-00-00 00:00:00.000000'),
(122, 'Wire Rod', 'Raipur 15 swg HB Wire/ Panel Pin Nails', 9999, '0000-00-00 00:00:00.000000'),
(123, 'Wire Rod', 'Raipur 18 swg HB Wire/ Panel Pin Nail', 9999, '0000-00-00 00:00:00.000000'),
(124, 'Wire Rod', 'Raipur 8 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(125, 'Wire Rod', 'Raipur 9 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(126, 'Wire Rod', 'Raipur 10 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(127, 'Wire Rod', 'Raipur 11 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(128, 'Wire Rod', 'Raipur 12 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(129, 'Wire Rod', 'Raipur 13 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(130, 'Wire Rod', 'Raipur 14 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(131, 'Wire Rod', 'Raipur 16 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(132, 'Wire Rod', 'Raipur 18 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(133, 'Wire Rod', 'Raipur 20 Swg G.I Wire', 9999, '0000-00-00 00:00:00.000000'),
(134, 'Wire Rod', 'Raipur 5.5 mm Wire', 9999, '0000-00-00 00:00:00.000000'),
(136, 'TMT', 'Mandi Gobindgarh', 0, '0000-00-00 00:00:00.000000'),
(137, 'Structural & Pipe', 'Gobindgarh Angle', 7777, '0000-00-00 00:00:00.000000'),
(138, 'Structural & Pipe', 'Gobindgarh Channel', 7777, '0000-00-00 00:00:00.000000'),
(139, 'Structural & Pipe', 'Gobindgarh Girder', 7777, '0000-00-00 00:00:00.000000'),
(140, 'Structural & Pipe', 'Gobindgarh Patra', 7777, '0000-00-00 00:00:00.000000'),
(141, 'Structural & Pipe', 'Gobindgarh Round', 7777, '0000-00-00 00:00:00.000000'),
(142, 'Structural & Pipe', 'Gobindgarh T-Iron', 7777, '0000-00-00 00:00:00.000000'),
(143, 'Structural & Pipe', 'Gobindgarh Z-Section', 7777, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metal`
--
ALTER TABLE `metal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metal`
--
ALTER TABLE `metal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
