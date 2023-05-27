-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 03:37 PM
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
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `infoId` varchar(255) DEFAULT NULL,
  `ownership` varchar(255) DEFAULT NULL,
  `tenderLocation` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `tenderNumber` int(255) DEFAULT NULL,
  `tenderDesc` text DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `publishingDatetime` datetime DEFAULT NULL,
  `startDatetime` datetime DEFAULT NULL,
  `endDatetime` datetime DEFAULT NULL,
  `emdType` varchar(255) DEFAULT NULL,
  `emdAmt` int(11) DEFAULT NULL,
  `tenderValue` int(255) NOT NULL,
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
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `category`, `infoId`, `ownership`, `tenderLocation`, `sector`, `tenderNumber`, `tenderDesc`, `material`, `quantity`, `publishingDatetime`, `startDatetime`, `endDatetime`, `emdType`, `emdAmt`, `tenderValue`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`, `file`) VALUES
(48, 'Procurement Tenders', '1A1a', 'Shopemetaal', 'Mizoram', 'Private', 111, 'Waste Management', 'Steel', '120 nos', '2023-05-27 15:49:00', '2023-05-31 15:49:00', '2023-06-01 15:49:00', 'Cash', 8700, 150000, 'SNPL', 'Mizoram', 'Mizo Street', 'Mizoram', '08792299684', 'sales2211@gmail.com', 'Indu ', 'a:2:{i:0;s:18:\"Screenshot (2).png\";i:1;s:18:\"Screenshot (3).png\";}', ''),
(50, 'Disposal Tenders', '1A1a', 'Lead', 'Mizoram', 'Public', 1112, 'NJZSKAB,DJBAW', 'Glass', '120 nos', '2023-05-27 16:46:00', '2023-06-06 16:46:00', '2023-06-07 16:46:00', 'Cash', 123, 999999, 'SNPLa', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:19:\"Screenshot (17).png\";i:1;s:19:\"Screenshot (24).png\";}', ''),
(51, 'Business Tenders', 'RTD', 'Shopemetal', 'Haryana', 'Private', 0, 'Steel ', 'Steel', '120 mt', '2023-05-27 16:49:00', '2023-05-29 16:49:00', '2023-05-28 16:49:00', 'DD', 7847, 999, 'SNPL', 'Bangalore ', 'No 135/73, Vinayaka Layout, Opposite to Binnamangala Nursery, Nelamangala', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', ''),
(52, 'Procurement Tenders', '346', 'sxdcrswdc', 'Manipur', 'Private', 433, 'fdfghjjkl', 'qwxsddse', '3 kg', '2023-05-12 17:12:00', '2023-05-26 17:12:00', '2023-05-24 17:12:00', 'Cash', 3456, 4578, 'swderftg', 'kr puram', 'SASASX', 'AAASAS', '1234567', 'hr@example.com', 'xfvgbhjn', 'a:3:{i:0;s:6:\"33.png\";i:1;s:5:\"4.png\";i:2;s:5:\"5.png\";}', 'a:2:{i:0;s:23:\"Subiktha_Shalom (3).pdf\";i:1;s:23:\"Subiktha_Shalom (2).pdf\";}'),
(53, 'Procurement Tenders', '346', 'sxdcrswdc', 'Nagaland', 'Private', 213, 'dfgfhyj', 'qwxsddse', '12 kg', '2023-05-19 17:15:00', '2023-05-25 17:16:00', '2023-05-25 17:16:00', 'DD', 6, 3443, 'swderftg', 'kr puram', 'SASASX', 'AAASAS', '1234567', 'subiktha.shalom0302@gmail.com', 'xfvgbhjn', 'a:2:{i:0;s:5:\"6.png\";i:1;s:5:\"7.png\";}', 'a:1:{i:0;s:23:\"Subiktha_Shalom (2).pdf\";}'),
(54, 'Manufacturing Tenders', '434354', 'sxdcrswdc', 'Manipur', 'Public', 344, 'ynhbgvfdcsxazzasxdcfvgbhnjmu', 'steel', '3223 kg', '2023-05-30 18:26:00', '2023-05-13 18:26:00', '2023-05-18 18:26:00', 'DD', 21232, 3334, 'shopemet', 'kr puram', 'SASASX', 'sacsd', '1234567', 'ljb@gmail.com', 'xfvgbhjn', 'a:3:{i:0;s:27:\"pexels-piccinng-2977527.jpg\";i:1;s:36:\"pexels-robert-gruszecki-11657224.jpg\";i:2;s:36:\"pexels-stein-egil-liland-1933319.jpg\";}', 'a:1:{i:0;s:10:\"ESE TT.pdf\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
