-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 05:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himali`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'aa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Subject`, `message`) VALUES
(1, 'cbnc', 'fn', 'gnfgn', 'bsbs'),
(2, 'Anuradha Sharma', 'AnuradhaSharma123@gmail.com', 'Delivery', 'Delivery can be more fast'),
(3, 'gg', 'vv', 'hh', 'hh'),
(4, 'Sanjana Nehwal', 'SanjanaNehwal199@gmail.com', 'Price', 'Price is very affordable');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(9) NOT NULL,
  `category` varchar(30) NOT NULL,
  `item_Name` varchar(30) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `description` varchar(30) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `category`, `item_Name`, `quantity`, `price`, `image`, `description`, `message`) VALUES
(54, 'SWEETS', 'rossogolla', '2 kg', '360/kg', './images/64204cb14c041.jpg', 'tasty', ''),
(55, 'NAMKEENS', 'nimki', '5 kg', '240/kg', './images/64204cd7a002a.jpg', 'crunchy', ''),
(56, 'BAKERY', 'jeera biscuit', '10 pcs', '50/pcs', './images/64204d219540a.jpg', 'fresh', ''),
(57, '4', 'puri', '5 plate', '30/plate', './images/64204fd899076.jpg', 'fresh', ''),
(58, 'SWEETS', 'sandesh', '6 kg', '150/250g', './images/6420520bf1c9e.jpg', 'fresh', ''),
(59, 'NAMKEENS', 'bb', '24', '44', './images/642052a2782d1.jpg', 'hg', ''),
(60, 'BAKERY', 'fgjj', '1', '44', './images/6420538b72c12.jpg', 'b', ''),
(61, 'BAKERY', ' cv', '344', '436', './images/642054101757a.jpg', 'ghr', ''),
(62, 'RESTAURANT', 'cbbnb', 'dfh', 'n', './images/6420552125f84.jpg', 'ngh', ''),
(63, 'NAMKEENS', 'nimki', '5', '636', './images/6420623c64d99.jpg', 'ncn', ''),
(64, 'SWEETS', 'fgf', '53', '35', './images/642071dd7cfaa.jpg', 'fdf', ''),
(65, 'BAKERY', 'bis', '23', '342', './images/64211ddb0bebe.jpg', 'gffg', ''),
(66, 'SWEETS', 'gggg', '44', '5', './images/64211f029540a.jpg', 'bvnvb', ''),
(67, 'NAMKEENS', 'bhuja', '4kg', '240/kg', './images/642151311732d.jpg', 'crunchy', ''),
(68, 'NAMKEENS', 'ggg', '56', '56', './images/642153df964dd.jpg', 'chf', ''),
(69, 'RESTAURANT', 'chhat', '10 plates', '50/plate', './images/64215a75adda8.jpg', 'fresh', ''),
(70, 'BAKERY', 'COCONUT BISCUIT', '10 KG', '100/KG', './images/64224f9ec4c4e.jpg', 'CRUNCHY', ''),
(71, 'RESTAURANT', 'ALU PARATHA', '10 PCS', '50 RUPEES/PCS', './images/64226ff60d843.jpeg', 'FRESH & TASTY', ''),
(72, 'NAMKEENS', 'jeera biscuit', '11', '11', './images/6423fcf98ce80.png', 'adad', ''),
(73, 'SWEETS', 'jeera biscuit', '2 kg', '11', './images/6423fff53c950.png', 'tasty', ''),
(74, 'SWEETS', 'jeera biscuit', '1 kg', '11', './images/6424088c691d6.jpg', 'crunchy', ''),
(75, 'NAMKEENS', 'jeera biscuit', '1 kg', '240/kg', './images/64240a262c463.jpg', 'tasty', ''),
(76, 'SWEETS', 'rosoogolla', '2', '400/kg', './images/64240dde5000a.jpg', 'qqs', ''),
(77, 'SWEETS', 'rosoogolla', '2', '400/kg', './images/64240e044d7fe.png', 'qqs', ''),
(78, 'RESTAURANT', 'aaAA', '22', '222', './images/642bf534dba79.jpg', 'hjvh', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'anuragthapa', '123'),
(2, 'aa', 'aa'),
(3, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(9) NOT NULL,
  `firstName` varchar(16) NOT NULL,
  `lastName` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(16) NOT NULL,
  `phone` int(12) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstName`, `lastName`, `email`, `password`, `date`, `gender`, `phone`, `role`) VALUES
(15, 'Anurag ', 'thapa', 'guptanikita012345@gmail.com', '123', '2023-03-23', 'male', 0, 0),
(17, 'Anurag ', 'thapa', 'aaa', '123', '2023-03-23', 'female', 0, 0),
(18, 'Anurag ', 'thapa', 'anuragthapa166@gmail.com', '123', '2023-03-23', 'male', 0, 0),
(19, 'Nikita', 'gupta', '2424', 'aaa', '2023-03-23', 'female', 0, 0),
(20, 'nikita', 'g', '475y348', 'aaa', '2023-03-26', 'female', 0, 0),
(21, 'skjnfkjdskjds', 'ds', '4374', '123', '2023-03-26', 'female', 0, 0),
(22, 'sdgs', 'bc', '636363', '123', '2023-03-26', 'female', 0, 0),
(23, 'vb', 'b', '33', '111', '2023-03-26', 'female', 0, 1),
(24, 'nik', 'gup', '777', '111', '2023-03-26', 'female', 0, 0),
(25, 'anu', 'tha', '77', '12', '2023-03-26', 'female', 0, 1),
(26, 'qqq', 'qqq', '123', '11', '2023-04-04', 'male', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(9) NOT NULL,
  `firstName` varchar(16) NOT NULL,
  `lastName` varchar(16) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstName`, `lastName`, `phone`, `password`, `date`, `Gender`) VALUES
(11, 'anurag', 'thapa', 'anuragthapa166@gmail.com', '123', '0000-00-00', 'male'),
(12, 'anurag', 'thapa', '13154165456', '123', '0000-00-00', 'male'),
(13, 'anurag', 'thapa', '1234455', 'gsdd', '0000-00-00', 'male'),
(14, 'rwrwr', 'wrwrr', 'anrhg@gmail.com', 'ggg', '0000-00-00', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
