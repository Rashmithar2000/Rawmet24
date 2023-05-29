-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2023 at 10:37 AM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'shopemet', 'shopemet'),
(2, 'admin', 'admin'),
(3, 'user', 'user');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `category`, `infoId`, `ownership`, `aucLocation`, `sector`, `aucNumber`, `aucDescription`, `aucValue`, `aucSource`, `material`, `quantity`, `ePublishingDateTime`, `startDatetime`, `endDatetime`, `insStartdatetime`, `insEnddatetime`, `emdType`, `emdAmt`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`, `file`) VALUES
(95, 'Procurement Tenders', '346', 'dfgh', 'Maharashtra', 'Public', '545656', 'asdxcvbnm,', '3456', 'Azsdxcfgvbhnm,.', 'qwxsddse', '8 kg', '2023-05-29 18:32:00', '2023-05-19 18:32:00', '2023-05-27 21:33:00', '2023-05-27 18:37:00', '2023-05-27 18:37:00', 'DD', 8455.00, 'shopemet', 'ease', 'awsxse', 'AAASAS', '1232454', 'hr@example.com', 'xfvgbhjn', 'a:3:{i:0;s:5:\"4.png\";i:1;s:5:\"5.png\";i:2;s:5:\"6.png\";}', 'a:1:{i:0;s:10:\"ESE TT.pdf\";}');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `subCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `subCategory`) VALUES
(1, 'Consultancy Tenders', ''),
(2, 'Procurement Tenders', ''),
(3, 'Manufacturing Tenders', ''),
(4, 'Disposal Tenders', ''),
(5, 'Business Tenders', ''),
(6, 'Public Tenders', '');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `infoId` varchar(255) DEFAULT NULL,
  `ir` varchar(255) DEFAULT NULL,
  `fe` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `dealValue` varchar(255) NOT NULL,
  `dealDatetime` datetime DEFAULT NULL,
  `docCreatedby` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `industrialArea` varchar(255) DEFAULT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `contactPerson` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(255) DEFAULT NULL,
  `whatsappNumber` varchar(255) DEFAULT NULL,
  `gstin` varchar(255) DEFAULT NULL,
  `orderType` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `specification` varchar(255) DEFAULT NULL,
  `dor` datetime DEFAULT NULL,
  `expQuotation` int(25) DEFAULT NULL,
  `img` varchar(300) NOT NULL,
  `filenames` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `category`, `infoId`, `ir`, `fe`, `quantity`, `dealValue`, `dealDatetime`, `docCreatedby`, `location`, `industrialArea`, `companyName`, `contactPerson`, `email`, `address`, `city`, `state`, `contactNumber`, `whatsappNumber`, `gstin`, `orderType`, `material`, `specification`, `dor`, `expQuotation`, `img`, `filenames`) VALUES
(56, 'Manufacturing Tenders', '1A1', 'Chaitra', '12dda', '120 ton', '2121', '2023-05-27 18:26:00', ' Rasha', 'Meghalaya', 'Indiranangara', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996841231', 'Service', 'Steel', 'DRCFERVERTV', '2023-05-28 18:27:00', 3222, 'a:2:{i:0;s:19:\"Screenshot (16).png\";i:1;s:19:\"Screenshot (18).png\";}', 'a:2:{i:0;s:31:\"reactjs-interview-questions.pdf\";i:1;s:40:\"html-interview-questions-and-answers.pdf\";}'),
(57, 'Manufacturing Tenders', '1A1a', 'Chaitra', 'Shariff', '120 kg', '12212', '2023-05-29 18:40:00', ' Rasheee', 'Manipur', 'Indiranangara', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996848', 'Service', 'Steel', 'wqdewferfgear', '2023-05-31 18:41:00', 123, 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:1:{i:0;s:41:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023.pdf\";}'),
(58, 'Manufacturing Tenders', '1A1a', 'a', 'Shalom', '222 ton', '2112', '2023-05-28 18:45:00', ' Raksha', 'Jharkhand', 'Indiranangara', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '2923932093', '87922996841231', 'Service', 'Copper', 'Copper', '2023-05-31 18:46:00', 87000, 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:2:{i:0;s:45:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023 (1).pdf\";i:1;s:41:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023.pdf\";}');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive_deals`
--

CREATE TABLE `exclusive_deals` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `infoId` varchar(255) DEFAULT NULL,
  `ir` varchar(255) DEFAULT NULL,
  `fe` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `dealValue` varchar(255) NOT NULL,
  `dealDatetime` datetime DEFAULT NULL,
  `docCreatedby` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `industrialArea` varchar(255) DEFAULT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `contactPerson` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(255) DEFAULT NULL,
  `whatsappNumber` varchar(255) DEFAULT NULL,
  `gstin` varchar(255) DEFAULT NULL,
  `orderType` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `dor` datetime DEFAULT NULL,
  `expQuotation` int(25) DEFAULT NULL,
  `img` varchar(300) NOT NULL,
  `filenames` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exclusive_deals`
--

INSERT INTO `exclusive_deals` (`id`, `category`, `infoId`, `ir`, `fe`, `quantity`, `dealValue`, `dealDatetime`, `docCreatedby`, `location`, `industrialArea`, `companyName`, `contactPerson`, `email`, `address`, `city`, `state`, `contactNumber`, `whatsappNumber`, `gstin`, `orderType`, `material`, `specification`, `dor`, `expQuotation`, `img`, `filenames`) VALUES
(12, 'Manufacturing Tenders', '1A1a', 'a', 'Shalom', '222 ton', '2112', '2023-05-28 18:45:00', ' Raksha', 'Jharkhand', 'Indiranangara', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '2923932093', '87922996841231', 'Service', 'Copper', 'Copper', '2023-05-31 18:46:00', 87000, 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:2:{i:0;s:45:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023 (1).pdf\";i:1;s:41:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023.pdf\";}');

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

CREATE TABLE `info_table` (
  `id` int(20) NOT NULL,
  `infoId` int(20) NOT NULL,
  `showName` varchar(1000) NOT NULL,
  `dateTime` datetime NOT NULL,
  `profile` varchar(1000) NOT NULL,
  `organizedBy` varchar(255) NOT NULL,
  `organizedAdd` varchar(255) NOT NULL,
  `venue` varchar(1000) NOT NULL,
  `map` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_table`
--

INSERT INTO `info_table` (`id`, `infoId`, `showName`, `dateTime`, `profile`, `organizedBy`, `organizedAdd`, `venue`, `map`) VALUES
(2, 1, 'RID SHOW', '2023-05-26 12:38:00', 'Rasha', 'Rashu', 'organizedAdd', 'Binnamangala', 'https://goo.gl/maps/eGsWmGu9ChwH12FeA');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`state_id`, `state_name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jharkhand'),
(11, 'Karnataka'),
(12, 'Kerala'),
(13, 'Madhya Pradesh'),
(14, 'Maharashtra'),
(15, 'Manipur'),
(16, 'Meghalaya'),
(17, 'Mizoram'),
(18, 'Nagaland'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Rajasthan'),
(22, 'Sikkim'),
(23, 'Tamil Nadu'),
(24, 'Telangana'),
(25, 'Tripura'),
(26, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(28, 'West Bengal'),
(29, 'Andaman and Nicobar Islands'),
(30, 'Chandigarh'),
(31, 'Dadra and Nagar Haveli'),
(32, 'Daman and Diu'),
(33, 'Lakshadweep'),
(34, 'Puducherry'),
(35, 'Jammu and Kashmir');

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
(1, 'Copper', 'Cu1', 9831, '2023-05-26 09:57:56.457255'),
(2, 'Copper', 'Cu2', 10831, '2023-05-26 09:57:56.457255'),
(3, 'Aluminium', 'ADC1', 2460, '2023-05-26 09:57:56.457255'),
(4, 'Aluminium', 'ADC2', 2360, '2023-05-26 09:57:56.457255'),
(5, 'Aluminium', 'ADC3', 2550, '2023-05-26 09:57:56.457255');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`) VALUES
(24, 'rashpriya2211', 'rashpriya2211@gmail.com', 'UmFzaA=='),
(25, 'Shalom', 'shalom123@gmail.com', 'U2hhbG9t');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `category`, `infoId`, `ownership`, `tenderLocation`, `sector`, `tenderNumber`, `tenderDesc`, `material`, `quantity`, `publishingDatetime`, `startDatetime`, `endDatetime`, `emdType`, `emdAmt`, `tenderValue`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`, `file`) VALUES
(56, 'Business Tenders', '1A1a', 'Shopemet', 'Manipur', 'Public', 1112, 'Steel', 'Steel', '555 ton', '2023-05-27 19:21:00', '2023-06-05 19:21:00', '2023-06-06 19:21:00', 'DD', 555, 8988, 'SNPL', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:2:{i:0;s:45:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023 (1).pdf\";i:1;s:41:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023.pdf\";}');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `file_name` blob NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `file_name`, `file_path`, `upload_date`) VALUES
(2, 0x53637265656e73686f7420283330292e706e67, 'uploads/Screenshot (30).png', '2023-05-26 04:38:00'),
(3, 0x53637265656e73686f74202831292e706e67, 'uploads/Screenshot (1).png', '2023-05-26 04:39:32'),
(4, 0x53637265656e73686f74202832292e706e67, 'uploads/Screenshot (2).png', '2023-05-26 04:57:30'),
(5, 0x53637265656e73686f7420283234292e706e67, 'uploads/Screenshot (24).png', '2023-05-26 05:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exclusive_deals`
--
ALTER TABLE `exclusive_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_table`
--
ALTER TABLE `info_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `metal`
--
ALTER TABLE `metal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `exclusive_deals`
--
ALTER TABLE `exclusive_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info_table`
--
ALTER TABLE `info_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metal`
--
ALTER TABLE `metal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
