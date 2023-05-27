-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 03:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `infoId` varchar(255) DEFAULT NULL,
  `ownership` varchar(255) DEFAULT NULL,
  `aucLocation` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `aucNumber` varchar(255) DEFAULT NULL,
  `aucDescription` text DEFAULT NULL,
  `aucValue` varchar(255) NOT NULL,
  `aucSource` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `ePublishingDateTime` datetime DEFAULT NULL,
  `startDatetime` datetime DEFAULT NULL,
  `endDatetime` datetime DEFAULT NULL,
  `insStartdatetime` datetime DEFAULT NULL,
  `insEnddatetime` datetime DEFAULT NULL,
  `emdType` varchar(255) DEFAULT NULL,
  `emdAmt` decimal(10,2) DEFAULT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactPerson` varchar(255) DEFAULT NULL,
  `img` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `category`, `infoId`, `ownership`, `aucLocation`, `sector`, `aucNumber`, `aucDescription`, `aucValue`, `aucSource`, `material`, `quantity`, `ePublishingDateTime`, `startDatetime`, `endDatetime`, `insStartdatetime`, `insEnddatetime`, `emdType`, `emdAmt`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`, `file`) VALUES
(87, 'Manufacturing Tenders', '1A1a', 'Shopemetaal', 'Mizoram', 'Public', '222', 'THFH', '121999', 'www.bhel.co.i', 'Steelaewc', '120 mt', '2023-05-27 10:04:00', '2023-05-30 10:04:00', '2023-05-31 10:04:00', '2023-05-28 10:04:00', '2023-05-29 10:04:00', 'Cash', '1222.00', 'dwasd', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '8792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', ''),
(89, 'Disposal Tenders', '1A1a', 'a', 'Meghalaya', 'Private', 'AUC/DTDPL/Ferrous/12/20/7', 'Steel', '1897', 'www.google.com', 'Steel', '25 ton', '2023-05-27 12:24:00', '2023-05-29 12:24:00', '2023-05-30 12:24:00', '2023-05-27 12:24:00', '2023-05-28 12:24:00', 'DD', '8999.00', 'SNPL', 'Bangalore ', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', ''),
(90, 'Disposal Tenders', '1A1', 'Shopemetaal', 'Haryana', 'Public', 'AUC/DTDPL/Ferrous/12/20/8', 'Ferrous Components', '125225', 'www.bhel.co.in', 'Iron', '80 kg', '2023-05-26 12:50:00', '2023-06-01 12:50:00', '2023-06-02 12:50:00', '2023-05-27 12:51:00', '2023-05-28 12:51:00', 'DD', '888.00', 'Shopemet', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'sales@gmail.com', 'Suchitha', '', ''),
(91, 'Consultancy Tenders', '1A1', 'Shopemetaal', 'Haryana', 'Private', 'AUC/20/8DTDPL/Ferrous/12/', 'Aluminium Components', '125225', 'www.bhel.co.in', 'Aluminium ', '78 kg', '2023-05-26 12:50:00', '2023-06-01 12:50:00', '2023-06-02 12:50:00', '2023-05-27 12:51:00', '2023-05-28 12:51:00', 'DD', '70000.00', 'Shopemet', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'sales@gmail.com', 'Suchitha', '', ''),
(92, 'Manufacturing Tenders', '232', 'sxdcrswdc', 'Meghalaya', 'Private', '345', 'yggfgcfgc', '211', 'dcsde', 'steel', '16 ton', '2023-06-01 18:02:00', '2023-06-09 18:02:00', '2023-06-09 18:02:00', '2023-05-04 18:02:00', '2023-05-23 18:03:00', 'Cash', '322332.00', 'shopemet', 'kr puram', 'SASASX', 'sacsd', '2133333322112', '20bcar110@gcu.edu.in', 'xfvgbhjn', '', ''),
(93, 'Manufacturing Tenders', '346', 'sxdcrswdc', 'Manipur', 'Private', '4365', 'fgghjhds', '211', 'dcsde', 'steel', '16 mt', '2023-05-25 18:04:00', '2023-05-26 18:04:00', '2023-05-29 18:04:00', '2023-05-30 18:04:00', '2023-05-31 18:04:00', 'DD', '3454.00', 'shopemet', 'kr puram', 'awsxse', 'sacsd', '1234567', '20bcar110@gcu.edu.in', 'xfvgbhjn', '', ''),
(94, 'Disposal Tenders', '346', 'dfgh', 'Mizoram', 'Private', '345', 'jnhbgvfdxszxsdfgvbhnjumkilo,mkjnhbgvfdcx', '8765432', 'dcsde', 'qwxsddse', '7 kg', '2023-05-26 18:29:00', '2023-05-29 18:30:00', '2023-05-30 18:30:00', '2023-05-31 18:30:00', '2023-05-19 18:30:00', 'Cash', '14.00', 'swderftg', 'ease', 'awsxse', 'AAASAS', '876543', '20bcar110@gcu.edu.in', 'xfvgbhjn', '', ''),
(95, 'Procurement Tenders', '346', 'dfgh', 'Maharashtra', 'Public', '545656', 'asdxcvbnm,', '3456', 'Azsdxcfgvbhnm,.', 'qwxsddse', '8 kg', '2023-05-29 18:32:00', '2023-05-19 18:32:00', '2023-05-27 21:33:00', '2023-05-27 18:37:00', '2023-05-27 18:37:00', 'DD', '8455.00', 'shopemet', 'ease', 'awsxse', 'AAASAS', '1232454', 'hr@example.com', 'xfvgbhjn', 'a:3:{i:0;s:5:\"4.png\";i:1;s:5:\"5.png\";i:2;s:5:\"6.png\";}', 'a:1:{i:0;s:10:\"ESE TT.pdf\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
