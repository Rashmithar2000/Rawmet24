-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2023 at 01:26 PM
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
  `contactPerson` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `category`, `infoId`, `ownership`, `aucLocation`, `sector`, `aucNumber`, `aucDescription`, `aucValue`, `aucSource`, `material`, `quantity`, `ePublishingDateTime`, `startDatetime`, `endDatetime`, `insStartdatetime`, `insEnddatetime`, `emdType`, `emdAmt`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`) VALUES
(87, 'Manufacturing Tenders', '1A1a', 'Shopemetaal', 'Mizoram', 'Public', '222', 'THFH', '121999', 'www.bhel.co.i', 'Steelaewc', '120 mt', '2023-05-27 10:04:00', '2023-05-30 10:04:00', '2023-05-31 10:04:00', '2023-05-28 10:04:00', '2023-05-29 10:04:00', 'Cash', 1222.00, 'dwasd', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '8792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R'),
(89, 'Disposal Tenders', '1A1a', 'a', 'Meghalaya', 'Private', 'AUC/DTDPL/Ferrous/12/20/7', 'Steel', '1897', 'www.google.com', 'Steel', '25 ton', '2023-05-27 12:24:00', '2023-05-29 12:24:00', '2023-05-30 12:24:00', '2023-05-27 12:24:00', '2023-05-28 12:24:00', 'DD', 8999.00, 'SNPL', 'Bangalore ', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R'),
(90, 'Disposal Tenders', '1A1', 'Shopemetaal', 'Haryana', 'Public', 'AUC/DTDPL/Ferrous/12/20/8', 'Ferrous Components', '125225', 'www.bhel.co.in', 'Iron', '80 kg', '2023-05-26 12:50:00', '2023-06-01 12:50:00', '2023-06-02 12:50:00', '2023-05-27 12:51:00', '2023-05-28 12:51:00', 'DD', 888.00, 'Shopemet', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'sales@gmail.com', 'Suchitha'),
(91, 'Consultancy Tenders', '1A1', 'Shopemetaal', 'Haryana', 'Private', 'AUC/20/8DTDPL/Ferrous/12/', 'Aluminium Components', '125225', 'www.bhel.co.in', 'Aluminium ', '78 kg', '2023-05-26 12:50:00', '2023-06-01 12:50:00', '2023-06-02 12:50:00', '2023-05-27 12:51:00', '2023-05-28 12:51:00', 'DD', 70000.00, 'Shopemet', 'Bangalore', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'sales@gmail.com', 'Suchitha');

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
  `expQuotation` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `category`, `infoId`, `ir`, `fe`, `quantity`, `dealValue`, `dealDatetime`, `docCreatedby`, `location`, `industrialArea`, `companyName`, `contactPerson`, `email`, `address`, `city`, `state`, `contactNumber`, `whatsappNumber`, `gstin`, `orderType`, `material`, `specification`, `dor`, `expQuotation`) VALUES
(37, 'Disposal Tenders', 'RLD', 'Shalom', 'Shariff', '90 MT', '7800', '2023-05-29 10:03:00', ' Raksha', 'Bihar', 'Peenya', 'SNPL', 'Robin', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '44448792299684', 'Procurement', 'Bronze', 'Design, Manufacturing & Supply of Domestic Content Requirement Complaint Mono Perc Bifacial Solar Module 530 WP+ for Pavagada Solar PV Project at Karnataka.', '2023-05-30 10:04:00', 9999),
(38, 'Disposal Tenders', 'RLD', 'Shalom', 'Shariff', '30 KG', '680', '2023-06-03 13:03:00', ' Raksha', 'Nagaland', 'Peenya', 'RAWMET', 'Surya', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '44448792299684', 'Service', 'Glass', 'Design, Manufacturing & Supply of Domestic Content Requirement Complaint Mono Perc Bifacial Solar Module 530 WP+ for Pavagada Solar PV Project at Karnataka.', '2023-06-05 10:04:00', 3339),
(39, 'Public Tenders', 'RLD5', 'Shariff', 'Shalom', '70 MT', '6894', '2023-05-31 10:07:00', ' Abhirami', 'Chhattisgarh', 'Indiranangar', 'SNPL', 'Abhirami', 'rashpriya2211@gmail.com', 'Vinayaka Layout,', 'Bangalore ', 'Manipur', '8792299684', '9968487922', '85558792299684', 'Service', 'Copper', 'Construction of 4laning from Saura (Sasaram) at Ch.0.000 to Pattar at Ch 84.400 of Patna-Arraha-Sasaram corridor of NH-119A with a SPUR connectivity of 4.3 km with Arraha Mohania (new NH-319) at Asni under BMP in the State of Bihar on HAM Mode', '2023-06-05 10:08:00', 999),
(40, 'Manufacturing Tenders', 'RLD5', 'Shariff', 'Shalom', '74 NOs', '6894', '2023-05-31 10:07:00', ' Abhirami', 'Karnataka', 'Bangalore', 'Manipur Traders', 'Abhirami', 'rashpriya2211@gmail.com', 'Vinayaka Layout,', 'Bangalore', 'Karnataka', '8792299684', '9968487922', '85558792299684', 'Procurement', 'Gold', 'Construction of 4laning from Saura (Sasaram) at Ch.0.000 to Pattar at Ch 84.400 of Patna-Arraha-Sasaram corridor of NH-119A with a SPUR connectivity of 4.3 km with Arraha Mohania (new NH-319) at Asni under BMP in the State of Bihar on HAM Mode', '2023-06-05 10:08:00', 999),
(41, 'Manufacturing Tenders', 'RLD5', 'Sangam', 'Cyril', '200 NOs', '888', '2023-05-31 10:07:00', ' Aarav', 'Gujarat', 'Gaya', 'Chinanai Enterprises', 'Aarav', 'rashpriya2211@gmail.com', 'Vinayaka Layout,', 'Gaya', 'Gujarat', '8792299684', '9968487922', '85558792299684', 'Procurement', 'Steel', 'Arraha Mohania (new NH-319) at Asni under BMP in the State of Bihar on HAM Mode Construction of 4laning from Saura (Sasaram) at Ch.0.000 to Pattar at Ch 84.400 of Patna-Arraha-Sasaram corridor of NH-119A with a SPUR connectivity of 4.3 km with ', '2023-06-05 10:08:00', 777),
(42, 'Manufacturing Tenders', 'RLD6', 'Chaitra', 'Chandan', '80 KG', '888', '2023-05-31 10:07:00', ' Sangam', 'Chhattisgarh', 'Chirapunji', 'Chirapunji Traders', 'Aarav', 'rashpriya2211@gmail.com', 'Commercial Layout,', 'Gaya', 'Chhattisgarh', '8793499684', '8799968422', '22996848555879', 'Service', 'Timber', 'BMP in the State of Bihar on HAM Mode Construction of 4laning from Saura (Sasaram) at Ch.0.000 to Pattar at Ch 84.400 of Patna-Arraha-Sasaram corridor of NH-119A with a SPUR connectivity of 4.3 km with  BMP in the State of Bihar on HAM Mode Construction o', '2023-06-05 10:08:00', 10000),
(43, 'Manufacturing Tenders', 'RLD6', 'Bob', 'Tarun', '55 MT', '455', '2023-05-31 13:10:00', ' Sagar', 'Haryana', 'Chirapunji', 'Chirapunji Traders', 'Aarav', 'rashpriya2211@gmail.com', 'Commercial Layout,', 'Gaya', 'Haryana', '6842299684', '6842287999', '55587922996848', 'Service', 'Timber', 'BMP in the State of Bihar on HAM Mode Construction of 4laning from Saura (Sasaram) at Ch.0.000 to Pattar at Ch 84.400 of Patna-Arraha-Sasaram corridor of NH-119A wit-Sasaram corridor of NH-119A with a SPUR connectivity of 4.3 km with Arraha Mohania (new N', '2023-06-05 10:08:00', 999),
(44, 'Procurement Tenders', 'RLD8', 'Sagar', 'Sagar', '75 MT', '769', '2023-05-31 13:10:00', ' Sagar', 'Odisha', 'Chirapunji', 'L& T ', 'Sagar', 'rashpriya2211@gmail.com', 'Commercial Layout,', 'Sagar', 'Odisha', '6842299684', '6842287999', '96848555879229', 'Service', 'Brass', 'HAM Mode Construction of 4laning from Saura (Sasaram) at Ch.0.000 to Pattar at Ch 84.400 of Patna-Arraha-Sasaram corridor of NH-119A wit-Sasaram corridor of NH-119A with a SPUR connectivity of 4.3 km with Arraha Mohania (new NH-319) at Asni under BMP in t', '2023-06-05 10:08:00', 10000),
(46, 'Disposal Tenders', '14W12465', 'Chaitra', 'Shariff', '123 MT', '568', '2023-05-25 17:37:00', ' Sagar', 'Meghalaya', 'Peenya', 'SNPL', 'Rashmitha ', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '879229968413212', 'Service', 'Steel', 'Appointment of Advanced Metering Infrastructure (AMI) Service Provider for Smart Prepaid Metering.', '2023-06-03 17:38:00', 7878),
(47, 'Manufacturing Tenders', '1A1a', 'a', 'Shalom', '120 nos', '2112', '2023-05-29 10:39:00', ' Sagar', 'Telangana', 'Indiranangara', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996841231', 'Service', 'Steel', 'DAhEBYMBFMCHYUYUZ,HCSFWEN SZkbwjsdnwekjbfc,uaeiruvn.rjkdfc ', '2023-05-30 10:39:00', 12323),
(49, 'Disposal Tenders', '1A1a', 'Chaitra', 'ShahidaShariff', '88 nos', '88989', '2023-05-24 11:27:00', ' Raksha', 'Nagaland', 'Peenya', 'SNPLaaa', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '85558792299684', 'Service', 'Steel', 'ewgfergfersfvesd', '2023-05-29 11:27:00', 89889),
(50, 'Manufacturing Tenders', '1A1a', 'Chaitra', 'ShahidaShariff', '89 nos', '3434', '2023-05-27 11:37:00', ' Rashaa', 'Madhya Pradesh', 'aasd', 'SNPLaaa', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '87922996841234', 'Procurement', 'Steelaewc', 'SteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewcSteelaewc', '2023-05-26 11:37:00', 21322);

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
  `expQuotation` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exclusive_deals`
--

INSERT INTO `exclusive_deals` (`id`, `category`, `infoId`, `ir`, `fe`, `quantity`, `dealValue`, `dealDatetime`, `docCreatedby`, `location`, `industrialArea`, `companyName`, `contactPerson`, `email`, `address`, `city`, `state`, `contactNumber`, `whatsappNumber`, `gstin`, `orderType`, `material`, `specification`, `dor`, `expQuotation`) VALUES
(7, 'Manufacturing Tenders', '1A1a', 'Shalom', 'Shariff', '150 mt', '7775', '2023-05-27 11:17:00', ' Rasheee', 'Haryana', 'Chirapunji', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '8792299684', 'Service', 'Steelw11', 'w3rfeargvrdtdb', '2023-05-27 11:18:00', 213123),
(8, 'Manufacturing Tenders', '1A1a', '2323a', '12dda', '120 mt', '248498', '2023-05-30 11:31:00', ' Rashaa', 'Goa', 'Peenya', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '879229252', '9449868952652', 'Service', 'Copper', 'frweter4zeryergzze', '2023-06-01 11:31:00', 1528),
(10, 'Procurement Tenders', '1A1a', '2323a', '12dda', '120 ton', '223', '2023-06-02 11:39:00', ' Raksha', 'Meghalaya', 'Indiranangara', 'SNPL', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '9238237733', '323333332wdw323', 'Procurement', 'Steel', 'e3wedw3d', '2023-05-29 11:39:00', 2322323),
(11, 'Business Tenders', '1A1', 'Shalom', 'Shalom', '555 ton', '55878', '2023-05-27 11:41:00', ' Sagar', 'Meghalaya', 'Indiranangara', 'Shopemet', 'Rashmitha Soumya Sindu R', 'rashpriya2211@gmail.com', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', 'Karnataka', '8792299684', '8792299684', '8792299684125', 'Service', 'Aluminium', 'AluminiumAluminiumAluminiumAluminiumAluminium', '2023-05-30 11:42:00', 33232);

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
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `category`, `infoId`, `ownership`, `tenderLocation`, `sector`, `tenderNumber`, `tenderDesc`, `material`, `quantity`, `publishingDatetime`, `startDatetime`, `endDatetime`, `emdType`, `emdAmt`, `tenderValue`, `companyName`, `location`, `street`, `city`, `telephone`, `email`, `contactPerson`, `img`) VALUES
(48, 'Procurement Tenders', '1A1a', 'Shopemetaal', 'Mizoram', 'Private', 111, 'Waste Management', 'Steel', '120 nos', '2023-05-27 15:49:00', '2023-05-31 15:49:00', '2023-06-01 15:49:00', 'Cash', 8700, 150000, 'SNPL', 'Mizoram', 'Mizo Street', 'Mizoram', '08792299684', 'sales2211@gmail.com', 'Indu ', 'a:2:{i:0;s:18:\"Screenshot (2).png\";i:1;s:18:\"Screenshot (3).png\";}'),
(50, 'Disposal Tenders', '1A1a', 'Lead', 'Mizoram', 'Public', 1112, 'NJZSKAB,DJBAW', 'Glass', '120 nos', '2023-05-27 16:46:00', '2023-06-06 16:46:00', '2023-06-07 16:46:00', 'Cash', 123, 999999, 'SNPLa', 'Bangalore Rural', 'No 135/73, Vinayaka Layout,', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:19:\"Screenshot (17).png\";i:1;s:19:\"Screenshot (24).png\";}'),
(51, 'Business Tenders', 'RTD', 'Shopemetal', 'Haryana', 'Private', 0, 'Steel ', 'Steel', '120 mt', '2023-05-27 16:49:00', '2023-05-29 16:49:00', '2023-05-28 16:49:00', 'DD', 7847, 999, 'SNPL', 'Bangalore ', 'No 135/73, Vinayaka Layout, Opposite to Binnamangala Nursery, Nelamangala', 'Bangalore Rural', '08792299684', 'rashpriya2211@gmail.com', 'Rashmitha Soumya Sindu R', 'a:2:{i:0;s:59:\"metal-preparations-are-ready-following-stage-processing.jpg\";i:1;s:33:\"large-steel-factory-warehouse.jpg\";}');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `exclusive_deals`
--
ALTER TABLE `exclusive_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
