-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2023 at 12:14 PM
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
  `matDesc` varchar(255) DEFAULT NULL,
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

INSERT INTO `auction` (`id`, `category`, `infoId`, `ownership`, `aucLocation`, `sector`, `aucNumber`, `aucDescription`, `aucValue`, `aucSource`, `material`, `matDesc`, `quantity`, `ePublishingDateTime`, `startDatetime`, `endDatetime`, `insStartdatetime`, `insEnddatetime`, `emdType`, `emdAmt`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`, `file`) VALUES
(106, 'Procurement Tenders', 'RAD1', 'Shopemet', 'Goa', 'Private', 'AUC/DTDPL/Iron/12', 'Steel Pipes worth Rs.99999. Steel pipes with diameter 8cms.', '99999', 'www.shopemet.com', 'Copper', 'Durgapur 5.5 Wire', '120 ton', '2023-06-08 15:00:00', '2023-06-14 15:00:00', '2023-06-15 15:00:00', '2023-06-11 15:00:00', '2023-06-12 15:00:00', 'Online Payment/ Net Banking', 9999.00, 'Shopemet', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', ''),
(108, 'Procurement Tenders', '1A1a', 'Shopemetal', 'Mizoram', 'Private', 'AUC/DTDPL/Ferrous', 'Ferrous compound- Iron rods weighing 0.4 kg each', '999999', 'www.shopemet.com', 'Brass', 'Honey', '123 kg', '2023-06-08 16:28:00', '2023-06-11 16:28:00', '2023-06-12 16:28:00', '2023-06-09 16:29:00', '2023-06-10 16:29:00', 'Online Payment/ Net Banking', 5000.00, 'Shopemet', 'Bangalore', 'Commercial Street', 'Bangalore ', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', ''),
(109, 'Business Tenders', 'RAD1', 'SNPL', 'Andhra Pradesh', 'Private', 'AUC/DTDPL/Ferrous', 'Ferrous Compounds', '999999', 'www.shopemet.com', 'Brass', 'Accessories Scrap', '120 mt', '2023-06-08 18:04:00', '2023-06-11 02:04:00', '2023-06-11 18:04:00', '2023-06-09 18:04:00', '2023-06-10 18:05:00', 'Online Payment/ Net Banking', 9999.00, 'SNPL', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_dashboard`
--

CREATE TABLE `buyer_dashboard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subscription` varchar(255) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL,
  `fromDate` timestamp NULL DEFAULT NULL,
  `toDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer_dashboard`
--

INSERT INTO `buyer_dashboard` (`id`, `name`, `email`, `password`, `subscription`, `amount`, `fromDate`, `toDate`) VALUES
(1, 'buyer', 'buyer@gmail.com', 'YnV5ZXI=', '1', 9999, '2023-05-30 12:49:42', '2023-08-30 12:49:42'),
(5, 'Rashmitha R', 'rashpriya2211@gmail.com', 'UmFzaG1pdGhh', '1', 9999, '2023-06-07 12:48:00', '2023-09-07 09:17:17'),
(7, 'Shalom', 'shalom123@gmail.com', 'U2hhbG9t', '1', 9999, '2023-06-07 09:22:40', '2023-09-07 09:22:44'),
(8, 'Surya', 'surya@gmail.com', 'U3VyeWE=', '1', 4999, '2023-06-07 09:25:04', '2023-08-07 09:25:08'),
(10, 'Sagar', 'sagar123@gmail.com', 'U2FnYXI=', '0', 0, NULL, NULL),
(11, 'Admin', 'admin@gmail.com', 'QWRtaW4=', '1', 9999999, '2023-06-09 04:46:00', '2030-12-31 04:46:00');

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
  `matDesc` varchar(255) NOT NULL,
  `specification` varchar(255) DEFAULT NULL,
  `dor` datetime DEFAULT NULL,
  `expQuotation` int(25) DEFAULT NULL,
  `img` varchar(300) NOT NULL,
  `filenames` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `category`, `infoId`, `ir`, `fe`, `quantity`, `dealValue`, `dealDatetime`, `docCreatedby`, `location`, `industrialArea`, `companyName`, `contactPerson`, `email`, `address`, `city`, `state`, `contactNumber`, `whatsappNumber`, `gstin`, `orderType`, `material`, `matDesc`, `specification`, `dor`, `expQuotation`, `img`, `filenames`) VALUES
(56, 'Disposal Tenders', '1A1', 'Chaitra', '12dda', '120 ton', '2121', '2023-05-27 18:26:00', ' Rasha', 'Meghalaya', ' Rasha', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996841231', 'Service', 'Steel', 'HONEY', 'DRCFERVERTV', '2023-05-28 18:27:00', 3222, 'a:2:{i:0;s:19:\"Screenshot (16).png\";i:1;s:19:\"Screenshot (18).png\";}', 'a:2:{i:0;s:31:\"reactjs-interview-questions.pdf\";i:1;s:40:\"html-interview-questions-and-answers.pdf\";}'),
(57, 'Manufacturing Tenders', '1A1a', 'Chaitra', 'Shariff', '120 kg', '12212', '2023-05-29 18:40:00', ' Rasheee', 'Manipur', 'Indiranangara', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996848', 'Service', 'Steel', 'HONEY', 'wqdewferfgear', '2023-05-31 18:41:00', 123, 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:1:{i:0;s:41:\"WEG_INDUSTRIES_HOSUR_DT_30TH_MAY_2023.pdf\";}'),
(60, 'Manufacturing Tenders', '1A1a', 'Shalom', 'Shariff', '120 nos', '50000', '2023-06-03 10:51:00', ' Rash', 'Madhya Pradesh', 'Indiranangara', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '8792299684684', 'Service', 'Copper', 'HONEY', 'Copper', '2023-06-03 10:52:00', 50000, 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:1:{i:0;s:22:\"Terms & Conditions.pdf\";}'),
(61, 'Business Tenders', 'RLD', 'Shariff', 'Shalom', '155 ton', '99999', '2023-06-10 12:36:00', ' Sagara', 'Haryana', 'Indiranangara', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '29968412387924', 'Service', 'Copper', 'HONEY', 'Copper Rods', '2023-06-10 12:37:00', 890000, 'a:1:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";}', 'a:1:{i:0;s:12:\"About US.pdf\";}'),
(62, 'Beer Can Scrap', '1A1R', 'Shariff', 'Shalom', '120 mt', '99999', '2023-06-10 17:52:00', ' Sagara', 'Odisha', ' Sagara', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '412341879229968', 'Procurement', 'Copper', 'HONEY', 'Beer Can Scrap', '2023-06-17 17:53:00', 999999, 'a:1:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";}', 'a:1:{i:0;s:12:\"About US.pdf\";}');

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
  `status` int(255) NOT NULL DEFAULT 0,
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
  `matDesc` varchar(255) DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `dor` datetime DEFAULT NULL,
  `expQuotation` int(25) DEFAULT NULL,
  `img` varchar(300) NOT NULL,
  `filenames` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exclusive_deals`
--

INSERT INTO `exclusive_deals` (`id`, `category`, `infoId`, `ir`, `fe`, `quantity`, `dealValue`, `status`, `dealDatetime`, `docCreatedby`, `location`, `industrialArea`, `companyName`, `contactPerson`, `email`, `address`, `city`, `state`, `contactNumber`, `whatsappNumber`, `gstin`, `orderType`, `material`, `matDesc`, `specification`, `dor`, `expQuotation`, `img`, `filenames`) VALUES
(16, 'Procurement Teders', 'RED', 'Chaitra', 'Shariff', '55 mt', '7500000', 1, '2023-06-03 17:38:00', ' Sagar', 'Uttarakhand', ' Sagar', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87928792299684', 'Service', 'Aluminium', 'HONEY', 'Exclusive Aluminum Deal', '2023-06-03 17:39:00', 500000, 'a:1:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";}', 'a:1:{i:0;s:22:\"Terms & Conditions.pdf\";}'),
(17, 'Procurement Tenders', '1A1', '2323a', '12dda', '120 kg', '32243', 1, '2023-06-08 18:18:00', ' Rasha', 'Mizoram', ' Rasha', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '6841238792299', 'Service', 'Glass', 'HONEY', 'Exclusive Aluminum Deal', '2023-06-10 18:19:00', 999, 'a:1:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";}', 'a:1:{i:0;s:12:\"About US.pdf\";}'),
(18, 'Honey', 'RAD123', 'Shalom', 'Shalom', '120 mt', '99999', 0, '2023-06-09 18:24:00', ' Sagar', 'Nagaland', ' Sagar', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996841231', 'Service', 'Glass', 'HONEY', 'Exclusive Aluminum Deal', '2023-06-10 18:25:00', 9999, 'a:1:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";}', 'a:1:{i:0;s:12:\"About US.pdf\";}'),
(19, 'Accessories Scrap', '1A1a', 'Shariff', 'Shalom', '120 ton', '32342', 1, '2023-06-08 18:46:00', ' Sagar', 'Nagaland', ' Sagar', 'SNPLaa', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996841231', 'Service', 'Brass', 'Beer Can Scrap', 'Aluminium Scrap ', '2023-06-10 18:46:00', 9999, 'a:1:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";}', 'a:1:{i:0;s:22:\"Terms & Conditions.pdf\";}');

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
(4, 1, 'RID SHOW2', '2023-06-09 15:54:00', 'Joyalukas', 'Joyalukas ', 'https://goo.gl/maps', 'Joyalukas ', 'https://www.google.com/maps/place/HAL+Engine+Division+Materials+Gate/@12.9807806,77.6421572,15z/data=!4m6!3m5!1s0x3bae13ec927bf99b:0xd1e4908992f2dd8e!8m2!3d12.9843788!4d77.6502157!16s%2Fg%2F1tfhdw4w?entry=ttu'),
(9, 0, 'RID SHOW1', '2023-06-09 12:29:00', 'Joyalukas', 'Joyalukas', 'https://goo.gl/maps', 'Commercial Street', 'https://goo.gl/maps/eGsWmGu9ChwH12FeAaa'),
(10, 1, 'RID SHOWa', '2023-06-08 12:33:00', 'Joyalukas', 'Joyalukas', 'Indiranagara', 'Joyalukas ', 'https://goo.gl/maps/FueV6H6MN1DPkDvF92a');

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
  `price` int(11) NOT NULL,
  `timestamp` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metal`
--

INSERT INTO `metal` (`id`, `metal`, `scrap_metal`, `price`, `timestamp`) VALUES
(1, 'Copper', 'Z Rod', 9831, '2023-06-09 18:23:00.000000'),
(2, 'Copper', 'Armature Scrap', 10831, '2023-05-26 09:57:56.457255'),
(3, 'Copper', 'Cable Scrap', 2460, '2023-05-26 09:57:56.457255'),
(4, 'Copper', 'Casting NG Rod', 2360, '2023-05-26 09:57:56.457255'),
(5, 'Copper', 'Armature Scrap Plant', 2550, '2023-05-26 09:57:56.457255'),
(6, 'Copper', 'Supper D', 8000, '2023-06-09 18:06:24.000000'),
(7, 'Copper', 'CC Rod', 7000, '2023-06-09 18:23:00.000000'),
(8, 'Aluminium', 'Rod', 8888, '2023-06-16 18:24:00.000000'),
(9, 'Aluminium', 'Ingot', 8888, '2023-06-09 18:24:00.000000'),
(10, 'Aluminium', 'Wire Scrap', 8888, '2023-06-09 18:26:00.000000'),
(11, 'Aluminium', 'Sheet Cutting', 8888, '2023-06-09 18:26:00.000000'),
(12, 'Aluminium', 'Utensil Scrap', 8888, '2023-06-09 18:27:00.000000'),
(13, 'Aluminium', 'Accessories Scrap', 8888, '2023-06-09 18:26:00.000000'),
(14, 'Aluminium', 'Section', 8888, '2023-06-09 18:27:00.000000'),
(15, 'Aluminium', 'TT', 8888, '2023-06-09 18:27:00.000000'),
(16, 'Aluminium', 'Beer Can Scrap', 8888, '2023-06-09 18:26:00.000000'),
(17, 'Brass', 'Honey', 9831, '2023-06-09 18:27:00.000000'),
(18, 'Brass', 'Accessories Scrap', 9831, '2023-06-09 18:27:00.000000'),
(19, 'Brass', 'Sheet Cutting', 9831, '2023-06-09 18:25:00.000000'),
(20, 'Raditor', 'Raditor', 3800, '2023-06-09 18:28:00.000000'),
(21, 'Battery', 'Black Base', 3800, '2023-06-09 18:26:00.000000'),
(22, 'Battery', 'White Base', 3800, '0000-00-00 00:00:00.000000'),
(23, 'Lead', 'Lead', 3800, '2023-06-09 18:28:00.000000'),
(24, 'Nickel', 'Nickel', 3800, '2023-06-09 18:28:00.000000'),
(25, 'Tin', '', 3800, '0000-00-00 00:00:00.000000'),
(27, 'Zinc', 'Dross', 6700, '0000-00-00 00:00:00.000000'),
(28, 'Zinc', 'Hindustan', 6700, '0000-00-00 00:00:00.000000'),
(29, 'Zinc', 'PMI', 6700, '0000-00-00 00:00:00.000000'),
(30, 'Iron Scrap', 'Mandi Gobindgarh', 6000, '2023-06-28 18:35:44.000000'),
(31, 'Iron Scrap', 'Alang', 6000, '2023-06-28 18:35:44.000000'),
(32, 'Iron Scrap', 'Mandi melting Scrap', 6000, '2023-06-28 18:35:44.000000'),
(33, 'Iron Scrap', 'Mandi CRC Scrap', 6000, '2023-06-28 18:35:44.000000'),
(34, 'Iron Scrap', 'Ahemdabad', 6000, '2023-06-09 18:29:00.000000'),
(35, 'Iron Scrap', 'Bhavnagar', 6000, '2023-06-28 18:35:44.000000'),
(36, 'Iron Scrap', 'Bhiwadi', 6000, '2023-06-28 18:35:44.000000'),
(37, 'Iron Scrap', 'Bhiwadi Melting', 6000, '2023-06-28 18:35:44.000000'),
(38, 'Iron Scrap', 'Bhiwadi Turning Scrap', 6000, '2023-06-28 18:35:44.000000'),
(39, 'Iron Scrap', 'Chennai', 6000, '2023-06-28 18:35:44.000000'),
(40, 'Iron Scrap', 'Delhi', 6000, '2023-06-28 18:35:44.000000'),
(41, 'Iron Scrap', 'Durgapur', 6000, '2023-06-28 18:35:44.000000'),
(42, 'Iron Scrap', 'Ghaziabad', 6000, '2023-06-28 18:35:44.000000'),
(43, 'Iron Scrap', 'Hyderabad', 6000, '2023-06-28 18:35:44.000000'),
(44, 'Iron Scrap', 'Indore', 6000, '2023-06-28 18:35:44.000000'),
(45, 'Iron Scrap', 'Indore Old Scrap', 6000, '2023-06-28 18:35:44.000000'),
(46, 'Iron Scrap', 'Jaipur', 6000, '2023-06-28 18:35:44.000000'),
(47, 'Iron Scrap', 'Jalna Super', 6000, '2023-06-28 18:35:44.000000'),
(48, 'Iron Scrap', 'Jalna Melting', 6000, '2023-06-28 18:35:44.000000'),
(49, 'Iron Scrap', 'kanpur', 6000, '2023-06-28 18:35:44.000000'),
(50, 'Iron Scrap', 'kolkata', 6000, '2023-06-28 18:35:44.000000'),
(51, 'Iron Scrap', 'ludhiana', 6000, '2023-06-28 18:35:44.000000'),
(52, 'Iron Scrap', 'Mujaffarnagar', 6000, '2023-06-28 18:35:44.000000'),
(53, 'Iron Scrap', 'Mumbai', 6000, '2023-06-28 18:35:44.000000'),
(54, 'Iron Scrap', 'Nagpur', 6000, '2023-06-28 18:35:44.000000'),
(55, 'Iron Scrap', 'Raigarh', 6000, '2023-06-28 18:35:44.000000'),
(56, 'Iron Scrap', 'raipur', 6000, '2023-06-28 18:35:44.000000'),
(57, 'Iron Scrap', 'Rourkela', 6000, '2023-06-28 18:35:44.000000'),
(58, 'MS Billet', 'Mandi Gobindgarh', 5000, '2023-06-20 18:35:44.000000'),
(59, 'MS Billet', 'Ahemdabad', 5000, '2023-06-20 18:35:44.000000'),
(60, 'MS Billet', 'Alang', 5000, '2023-06-20 18:35:44.000000'),
(61, 'MS Billet', 'Bhavnagar', 5000, '2023-06-20 18:35:44.000000'),
(62, 'MS Billet', 'Bhiwadi', 5000, '2023-06-20 18:35:44.000000'),
(63, 'MS Billet', 'Chennai', 5000, '2023-06-20 18:35:44.000000'),
(64, 'MS Billet', 'Durgapur', 5000, '2023-06-20 18:35:44.000000'),
(65, 'MS Billet', 'Ghaziabad', 5000, '2023-06-20 18:35:44.000000'),
(66, 'MS Billet', 'Goa', 5000, '2023-06-20 18:35:44.000000'),
(67, 'MS Billet', 'Himanchal', 5000, '2023-06-20 18:35:44.000000'),
(68, 'MS Billet', 'Hyderbad', 5000, '2023-06-20 18:35:44.000000'),
(69, 'MS Billet', 'Indore', 5000, '2023-06-20 18:35:44.000000'),
(70, 'MS Billet', 'Jaipur', 5000, '2023-06-20 18:35:44.000000'),
(71, 'MS Billet', 'Jalna', 5000, '2023-06-20 18:35:44.000000'),
(72, 'MS Billet', 'Jammu', 5000, '2023-06-20 18:35:44.000000'),
(73, 'MS Billet', 'Kanpur', 5000, '2023-06-20 18:35:44.000000'),
(74, 'MS Billet', 'Kolkata', 5000, '2023-06-20 18:35:44.000000'),
(75, 'MS Billet', 'Ludhiana', 5000, '2023-06-20 18:35:44.000000'),
(76, 'MS Billet', 'Mujaffarnagar', 5000, '2023-06-20 18:35:44.000000'),
(77, 'MS Billet', 'Mumbai', 5000, '2023-06-20 18:35:44.000000'),
(78, 'MS Billet', 'Raigarh', 5000, '2023-06-20 18:35:44.000000'),
(79, 'MS Billet', 'Raipur', 5000, '2023-06-20 18:35:44.000000'),
(80, 'MS Billet', 'Rourkela', 5000, '2023-06-20 18:35:44.000000'),
(81, 'Stainless Steel', 'Delhi SS (Mix Scrap)', 4500, '2023-06-09 18:26:00.000000'),
(82, 'Stainless Steel', 'Delhi SS (Mix Scrap)', 4500, '2023-06-26 18:53:29.000000'),
(83, 'Stainless Steel', 'Delhi SS (202 Scrap)', 4500, '2023-06-26 18:53:29.000000'),
(84, 'Stainless Steel', 'Delhi SS (304 Scrap)', 4500, '2023-06-26 18:53:29.000000'),
(85, 'Stainless Steel', 'Delhi SS (309 Scrap)', 4500, '2023-06-26 18:53:29.000000'),
(86, 'Stainless Steel', 'Delhi SS (310 Scrap)', 4500, '2023-06-26 18:53:29.000000'),
(87, 'Stainless Steel', 'Delhi SS (316 Scrap)', 4500, '2023-06-26 18:53:29.000000'),
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
(136, 'TMT', 'Mandi Gobindgarh', 1000, '2023-06-09 18:24:00.000000'),
(137, 'Structural & Pipe', 'Gobindgarh Angle', 7777, '0000-00-00 00:00:00.000000'),
(138, 'Structural & Pipe', 'Gobindgarh Channel', 7777, '0000-00-00 00:00:00.000000'),
(139, 'Structural & Pipe', 'Gobindgarh Girder', 7777, '0000-00-00 00:00:00.000000'),
(140, 'Structural & Pipe', 'Gobindgarh Patra', 7777, '0000-00-00 00:00:00.000000'),
(141, 'Structural & Pipe', 'Gobindgarh Round', 7777, '0000-00-00 00:00:00.000000'),
(142, 'Structural & Pipe', 'Gobindgarh T-Iron', 7777, '0000-00-00 00:00:00.000000'),
(143, 'Structural & Pipe', 'Gobindgarh Z-Section', 7777, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `exclusiveDeal_id` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `name`, `exclusiveDeal_id`, `status`, `timestamp`) VALUES
(7, 'Admin', '16', 1, '2023-06-10 08:41:42'),
(8, 'buyer', '17', 1, '2023-06-10 08:43:07'),
(9, 'buyer', '19', 1, '2023-06-10 09:12:29');

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
  `matDesc` varchar(255) DEFAULT NULL,
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

INSERT INTO `tenders` (`id`, `category`, `infoId`, `ownership`, `tenderLocation`, `sector`, `tenderNumber`, `tenderDesc`, `material`, `matDesc`, `quantity`, `publishingDatetime`, `startDatetime`, `endDatetime`, `emdType`, `emdAmt`, `tenderValue`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`, `file`) VALUES
(63, 'Procurement Tenders', 'AAAA', 'LeadERRE', 'Manipur', 'Private', 112, 'Copper', 'Copper', 'HONEY', '75 nos', '2023-05-31 12:45:00', '2023-06-02 12:45:00', '2023-06-04 12:45:00', 'DD', 90000, 56556565, 'Shopemet', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', ''),
(64, 'Disposal Tenders', 'RTD', 'Lead Squared', 'Puducherry', 'Private', 20, 'Copper', 'Copper', 'Raipur 10 swg HB Wire', '88 ton', '2023-06-01 15:46:00', '2023-06-09 15:46:00', '2023-06-10 15:46:00', 'DD', 65000, 150000, 'SNPL', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', '', ''),
(65, 'Consultancy Tenders', 'RTD', 'Shopemet', 'Uttar Pradesh', 'Public', 60, 'Steel', 'Steel', 'HONEY', '120 kg', '2023-06-01 18:13:00', '2023-06-07 18:13:00', '2023-06-08 18:13:00', 'DD', 50000, 900000, 'Shopemet', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}', 'a:2:{i:0;s:12:\"About US.pdf\";i:1;s:22:\"Terms & Conditions.pdf\";}'),
(67, 'Public Tenders', 'RTD', 'Shopemet', 'Tripura', 'Private', 50, 'Steel Weldings', 'Steel ', 'HONEY', '85 nos', '2023-06-01 18:20:00', '2023-06-03 18:21:00', '2023-06-05 18:21:00', 'Cash', 6000, 9000, 'SNPL', 'Tripura', 'No 135/73, Tripura', 'Tripura', '08996847922', 'snpl123@gmail.com', 'Anu', 'a:2:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";i:1;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";}', 'a:1:{i:0;s:12:\"About US.pdf\";}'),
(68, 'Disposal Tenders', '1A1', 'Lead Squared', 'Mizoram', 'Private', 0, 'Steel', 'Steel', 'HONEY', '120 mt', '2023-06-07 12:35:00', '2023-06-10 12:35:00', '2023-06-11 12:35:00', 'Cash', 9999, 700000, 'SNPL', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:46:\"background-with-metallic-grid-line-texture.jpg\";i:1;s:53:\"abstract-texture-background-with-metallic-designs.jpg\";}', 'a:1:{i:0;s:12:\"About US.pdf\";}');

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
-- Indexes for table `buyer_dashboard`
--
ALTER TABLE `buyer_dashboard`
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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `buyer_dashboard`
--
ALTER TABLE `buyer_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `exclusive_deals`
--
ALTER TABLE `exclusive_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `info_table`
--
ALTER TABLE `info_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `metal`
--
ALTER TABLE `metal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
