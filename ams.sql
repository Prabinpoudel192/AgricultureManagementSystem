-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 10:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `uname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`uname`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `document` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `document`) VALUES
(19, '../dbimage/Hello I am buyer.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `buyerlogin`
--

CREATE TABLE `buyerlogin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyerlogin`
--

INSERT INTO `buyerlogin` (`id`) VALUES
(19);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `fname`, `mname`, `lname`, `gender`, `mobile`, `address`, `uname`, `password`) VALUES
(16, 'Kiran', 'kumar', 'poudel', 'male', '9852414785', 'khairahani-1 chitwan,nepal', 'kiran123', '123456'),
(17, 'Sabin', '', 'Bantawa', 'male', '9852475863', 'Bharatpur-10 chitwan,nepal', 'sabin123', '123456'),
(18, 'Subodh', '', 'Prjapati', 'male', '9865421754', 'pokhara-05 kaski,nepal', 'subodh123', '123456'),
(19, 'manik', '', 'shrestha', 'male', '9845248754', 'tandi-01 chitwan,nepal', 'manik123', '123456'),
(20, 'suman', '', 'shrestha', 'male', '9867542158', 'chainpur-01 chitwan,nepal', 'suman123', '123456'),
(21, 'Amit', '', 'Kandel', 'male', '9865852545', 'ranapa-1 chitwan,nepal', 'amit123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `document` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `document`) VALUES
(18, '../dbimage/Hello I am Technician.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `techniciancon`
--

CREATE TABLE `techniciancon` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `techniciancon`
--

INSERT INTO `techniciancon` (`id`, `comment`, `image`) VALUES
(18, 'What will be the future of farming, An informational video.', '../dbimage/The Future of Farming.mp4'),
(18, 'Maize Cultivation a complete guide.', '../dbimage/Complete Guide For Profitable Maize Production.mp4'),
(18, 'How to grow carrot and take care of it informational video.', '../dbimage/How To Grow Carrots _ Carrot Farming _ Carrot Cultivation.mp4'),
(18, 'how to do rice cultivation', '../dbimage/Rice Farming_ Complete Guide from Seeds to Harvest.mp4'),
(18, 'how to do rice cultivation', '../dbimage/Rice Farming_ Complete Guide from Seeds to Harvest.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `technicianlogin`
--

CREATE TABLE `technicianlogin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technicianlogin`
--

INSERT INTO `technicianlogin` (`id`) VALUES
(18);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `comment`, `image`) VALUES
(17, '५ कट्ठमा खेती गरिएको भिन्डी बिकृमा किन्न इक्चुक्ले तुरुन्त सम्पर्क गर्नु होला । ', '../dbimage/ladyfinger.jpg'),
(21, 'This is amit post', '../dbimage/346168128_803000164306782_4287255663251669221_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
