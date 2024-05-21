-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2024 at 06:45 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

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
-- Table structure for table `addcategory`
--

DROP TABLE IF EXISTS `addcategory`;
CREATE TABLE IF NOT EXISTS `addcategory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tagline` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`id`, `name`, `tagline`, `image`) VALUES
(19, 'Bakery', 'xxxx', './images/643e3487d0470.jpg'),
(28, 'Sweets', 'Sweet is never enough', './images/6453758b32788.jpg'),
(29, 'Snacks', 'Make snack time complete.', './images/64537afd4fa35.jpg'),
(31, 'Namkeens', 'Crunchy & Crispy', 'images/NAMKEENS2.jpg'),
(34, 'Juice', 'Cold & Slicy', './images/64bf8f0b9d308.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'aa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `flag` int NOT NULL,
  `prod_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cart_quantity` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `cid` int NOT NULL,
  `prod_id` varchar(6) NOT NULL,
  `quantity` varchar(6) NOT NULL,
  `o_date` varchar(34) NOT NULL,
  `time` varchar(10) NOT NULL,
  `UserName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `home` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `town_city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `pincode` int NOT NULL,
  `status` int NOT NULL,
  `reason` varchar(400) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `pid`, `cid`, `prod_id`, `quantity`, `o_date`, `time`, `UserName`, `home`, `town_city`, `phone_no`, `email`, `pincode`, `status`, `reason`, `price`) VALUES
(341, '64c75276460f6', 38, '100', '15', '2023-07-31', '11:50:19am', 'Youjan SUbba', 'near garage line', 'Sonada', '9898989898', 'youjan.com', 734209, 3, 'Rainy Day', 600),
(342, '64c75276460f6', 38, '109', '15', '2023-07-31', '11:50:19am', 'Youjan SUbba', 'near garage line', 'Sonada', '9898989898', 'youjan.com', 734209, 3, 'Rainy Day', 600),
(343, '64c754c474be3', 30, '102', '1', '2023-07-31', '11:59:40am', 'Anuragggg', 'ram Prasad sweet shop', 'Sonada', '9477744235', 'guptanikita012345@gmail.com', 734209, 0, '', 320),
(344, '64cc93beec915', 38, '122', '5', '2023-08-04', '11:29:43am', 'Youjan new', 'ram Prasad sweet shop', 'Sonada', '0477744235', 'guptanikita012345@gmail.com', 734209, 2, '', 200),
(345, '64cc93beec915', 38, '123', '5', '2023-08-04', '11:29:43am', 'Youjan new', 'ram Prasad sweet shop', 'Sonada', '0477744235', 'guptanikita012345@gmail.com', 734209, 2, '', 200),
(312, '64649b5c0125a', 33, '109', '1', '2023-05-17', '02:46:18pm', 'h', 'ram Prasad sweet shop', 'Sonada', ' 1 07477744235', 'guptanikita012345@gmail.com', 734209, 1, '', 40),
(313, '64649c53a4094', 33, '100', '1', '2023-05-17', '02:50:30pm', 'tfygjtrdyfuy', 'bgvvfc', 'bgvfc', 'bgvfc', 'b', 0, 1, '', 400),
(340, '64c0b8df8b7b6', 37, '103', '1', '2023-07-26', '11:41:25am', 'nancy tamang', 'sonada tn', 'sonada', ' 1 07477744235', 'nancytamang@gmail.com', 734209, 3, 'u r foked up', 280),
(339, '64c0b8df8b7b6', 37, '107', '1', '2023-07-26', '11:41:25am', 'nancy tamang', 'sonada tn', 'sonada', ' 1 07477744235', 'nancytamang@gmail.com', 734209, 3, 'u r foked up', 280),
(332, '64bf867ae9557', 35, '104', '5', '2023-07-25', '01:53:51pm', 'Priyanka', 'ram Prasad sweet shop', 'Sonada', '9898989898', 'guptappp47@gmail.com', 734209, 3, 'Expected delivery time has changed .The product will be arriving too late ', 1200),
(333, '64bf867ae9557', 35, '122', '5', '2023-07-25', '01:53:51pm', 'Priyanka', 'ram Prasad sweet shop', 'Sonada', '9898989898', 'guptappp47@gmail.com', 734209, 3, 'Expected delivery time has changed .The product will be arriving too late ', 1200),
(338, '64c086e83d7e9', 33, '108', '2', '2023-07-26', '08:10:18am', 'Nimrit Sharma', 'Near Garage Line', 'Sonada', '8477744235', 'guptanikita012345@gmail.com', 734209, 0, '', 100),
(337, '64c086e83d7e9', 33, '100', '2', '2023-07-26', '08:10:18am', 'Nimrit Sharma', 'Near Garage Line', 'Sonada', '8477744235', 'guptanikita012345@gmail.com', 734209, 0, '', 100),
(336, '64bfea964d456', 35, '97', '1', '2023-07-25', '09:00:43pm', 'pppp', 'ram Prasad sweet shop', 'Sonada', '9477744235', 'guptanikita012345@gmail.com', 734209, 0, '', 360),
(334, '64bfc45f2a277', 33, '105', '3', '2023-07-25', '06:18:15pm', 'Priya', 'holy cross school', 'Sonada', '6756787890', 'priya0345@gmail.com', 734209, 1, '', 120),
(335, '64bfc45f2a277', 33, '123', '3', '2023-07-25', '06:18:15pm', 'Priya', 'holy cross school', 'Sonada', '6756787890', 'priya0345@gmail.com', 734209, 1, '', 120);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Subject`, `message`) VALUES
(5, 'Riya Sharma', 'RiyaSharma235@gmail.com', 'Delivery', 'Delivery can be more fast....'),
(6, 'Ankita Tamang', 'AnkitaTamang13@gmail.com', 'Price', 'Price can be more affordable...'),
(7, 'Sakshi Singh', 'SakshiSingh33@gmail.com', 'Food', 'Amazing Food.....'),
(8, 'Aryan Pradhan', 'AryanPradhan44@gmail.com', 'Affordable,fresh', 'Ram Prasad\'s Sweets is nice option for fast food as well as sweets.\r\nDifferent variety of sweets ava'),
(9, 'Aarav Singh', 'AaravSingh22@gmail.com', 'Reasonable', 'The place is famous for various kind of sweets. The rate of the sweets are fairly reasonable.'),
(10, 'Nikki Singh', 'singhnikki345@gmail.com', 'Food', 'Amazing sweets & bakery at very affordable price.'),
(11, 'Priyanka Gupta', 'PRIYANKA@2023', 'Delivery', 'I got easy delivery of sweets....');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

DROP TABLE IF EXISTS `food_category`;
CREATE TABLE IF NOT EXISTS `food_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`id`, `category`, `image`) VALUES
(1, 'food', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cid` int NOT NULL,
  `category` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_Name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `price` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_for` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `specials` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `cid`, `category`, `item_Name`, `quantity`, `price`, `price_for`, `image`, `description`, `specials`) VALUES
(97, 28, 'Sweets', 'Gulab Jamun', 0, '360', 'per kg', './images/644febe720c34.jpg', 'Fresh & Soft', 0),
(98, 28, 'Sweets', 'Sandesh', 50, '600', 'per kg', './images/644fecf7b2717.jpg', 'Soft & Tasty', 1),
(100, 28, 'Sweets', 'Malai Chamcham', 23, '400', 'per kg', './images/644feeae44217.jpg', 'Lip-smacking Bengali sweet', 0),
(102, 28, 'Sweets', 'Milk-Cake', 14, '320', 'per kg', './images/644ff23993a9c.jpg', 'Rich and decadent, caramelized', 0),
(103, 28, 'Sweets', 'Laddoo', 48, '280', 'per kg', './images/644ff2beb44f9.jpg', 'Mall boondies carefully moulde', 0),
(104, 28, 'Sweets', 'Soan-Papdi', 55, '340', 'per kg', './images/644ff42f3c28c.jpg', 'Soan papdi is a popular Indian', 0),
(105, 28, 'Sweets', 'Barfi', 16, '250', 'per kg', './images/644ff498eea1c.jpg', 'TASTY', 0),
(106, 28, 'Sweets', 'Kaju Barfi', 40, '800', 'per kg', './images/644ff52095483.jpg', 'perfect taste', 0),
(107, 19, 'Bakery', 'Jeera Biscuit', 49, '40', 'per packet', './images/644ff62b525a2.jpg', ' Indian Jeera biscuits are sim', 0),
(108, 19, 'Bakery', 'Coconut Biscuit', 8, '50', 'per packet', './images/644ff6a171f50.jpg', 'Delight foods brings you handc', 0),
(109, 19, 'Bakery', 'Suji Biscuit', 25, '40', 'per packet', './images/644ff783d00a2.jpg', 'These solid assorted cookies a', 1),
(110, 19, 'Bakery', 'Puff Biscuit', 50, '200', 'per kg', './images/644ff85fde95a.jpg', 'Puff is maida free, made from ', 0),
(114, 19, 'Bakery', 'Badam Biscuit', 60, '60', 'per packet', './images/644ffd50aa8ec.jpg', 'Delicious almond cookies which', 1),
(122, 31, 'Namkeens', 'bhuja', 50, '240', 'per kg', './images/64882a50a0bf6.jpg', 'Fresh & Crunchy', 0),
(123, 29, 'Snacks', 'Poori Sabji', 42, '40', 'per plate', 'images/SNA.jpg', 'hot & fresh', 0),
(127, 34, 'Juice', 'Orange Juice', 50, '50', 'per glass', './images/64bff141477b1.jpeg', 'cold & slicy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `role` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstName`, `lastName`, `email`, `password`, `date`, `gender`, `phone`, `role`) VALUES
(30, 'Anurag', 'Thapa', 'anuragthapa120@gmail.com', '123', '2023-04-29', 'male', 0, 0),
(32, 'nikita', 'gupta', 'niki120@gmail.com', '123', '2023-04-30', 'female', 0, 0),
(33, 'HDHDFH', 'RHDHRD', 'AA', 'AA', '2023-05-02', 'male', 0, 0),
(34, 'fgh', 'hhh', 'cc', 'cc', '2023-05-02', 'female', 0, 0),
(35, 'PRIYANKA', 'GUPTA', 'PRIYANKA@2023', 'pppppppp', '2001-05-18', 'female', 0, 0),
(36, 'Aman', 'Tamang', '9898989898', '99999999', '2006-06-28', 'male', 0, 1),
(37, 'nancy', 'Tamang', 'nancytamang123@gmail.com', '123', '2023-07-26', 'female', 0, 0),
(38, 'Youjan', 'Subba', 'youjan.com', '123', '2023-07-31', 'male', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `cid` int NOT NULL,
  `Name_Card` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `card_number` int NOT NULL,
  `Exp_Month` varchar(50) NOT NULL,
  `Exp_Year` varchar(50) NOT NULL,
  `CVV` int NOT NULL,
  `tot` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pid`, `cid`, `Name_Card`, `card_number`, `Exp_Month`, `Exp_Year`, `CVV`, `tot`) VALUES
(157, '64c0b8df8b7b6', 37, 'nancy tamang', 2147483647, 'june', '2023', 909, 320),
(156, '64c086e83d7e9', 33, 'Nimrit Sharma', 2147483647, 'December', '2028', 345, 500),
(155, '64bfea964d456', 35, 'ppp', 798634867, 'december', '2029', 239, 360),
(154, '64bfc45f2a277', 33, 'Priya', 2147483647, 'december', '2028', 345, 620),
(153, '64bf867ae9557', 35, 'Priyanka', 2147483647, 'June', '2028', 578, 2900),
(152, '64bf83ba2b19e', 35, 'Priyanka', 2147483647, 'May', '2026', 244, 1880),
(151, '64a58443d23db', 33, 'Nikita Gupta', 76757, 'July', '2025', 333, 200),
(150, '6488284e98b3c', 33, 'Nikki', 2147483647, 'may', '2028', 222, 1540),
(149, '6486e2e088e6c', 33, 'Anuragini Routh', 2147483647, 'May', '2027', 277, 820),
(148, '6464a170c7abf', 33, 'FFF', 745745, 'MAY', '4444', 333, 400),
(147, '64649fc92e890', 33, 'rrr', 986368936, 'may', '2222', 222, 400),
(146, '64649f364f073', 33, 'dvd', 56756765, 'may', '2222', 222, 40),
(158, '64c75276460f6', 38, 'Youjan Subba', 2147483647, 'December', '2026', 678, 4600),
(159, '64c754c474be3', 30, 'Anuraggg', 6786789, 'may', '2039', 567, 320),
(160, '64cc93beec915', 38, 'Youjan New', 2147483647, 'May', '2029', 234, 680);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstName`, `lastName`, `phone`, `password`, `date`, `Gender`) VALUES
(11, 'anurag', 'thapa', 'anuragthapa166@gmail.com', '123', '0000-00-00', 'male'),
(12, 'anurag', 'thapa', '13154165456', '123', '0000-00-00', 'male'),
(13, 'anurag', 'thapa', '1234455', 'gsdd', '0000-00-00', 'male'),
(14, 'rwrwr', 'wrwrr', 'anrhg@gmail.com', 'ggg', '0000-00-00', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
