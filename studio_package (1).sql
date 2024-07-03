-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 06:29 PM
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
-- Database: `studio package`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `nic_number` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`first_name`, `last_name`, `nic_number`, `phone_number`, `email_address`, `message`) VALUES
('Sasindu', 'padmasiri', '200050127849', 762696915, 'Sasindu@gmail', 'preshoot'),
('Charith', 'dharmawickrma', '20005689456', 776986579, 'charith2gmail.com', 'Weeding'),
('Rashmika', 'Rashiprabha', '200056894567', 740852365, 'rashmika@gmail.com', 'Pre shoot'),
('Shashika', 'Withanage', '200056897465', 779437957, 'shashika@gmail.com', 'Home Coming'),
('Dakshina', 'Rashiprabha', '200078501249', 740852365, 'rashi@gmail.com', 'engagement'),
('Dakshina', 'Rashiprabha', '20032501107', 740852365, 'rashi@gmail.com', 'hi'),
('Nathasha', 'Wimukthi', '200335689454', 740852365, 'Nathasha@gmail.com', 'Pre Shoot'),
('Dilmi ', 'Tharushika', '20041536897', 762696915, 'Sasindu@gmail', 'Pre Shoot'),
('Nawodya', 'Attanayake', '995440253v', 772583695, 'nawodya@gmail.com', 'wedding');

-- --------------------------------------------------------

--
-- Table structure for table `event1`
--

CREATE TABLE `event1` (
  `ID` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `date` date NOT NULL,
  `timefrom` text NOT NULL,
  `timeto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event1`
--

INSERT INTO `event1` (`ID`, `fName`, `location`, `date`, `timefrom`, `timeto`) VALUES
(1, '0', 'Kandy', '2023-10-24', '08:00', '16:00'),
(2, '0', 'Galleface', '2023-11-21', '08:30', '10:30'),
(3, 'Rashiprabha', 'Colombo', '2023-09-28', '08:30', '16:30'),
(4, 'Winumi', 'Galleface', '2023-10-11', '09:00', '00:00'),
(5, 'Charith', 'Galle', '2023-09-29', '10:30', '12:30'),
(6, 'Sasindu padmasiri', 'Colombo', '2023-09-30', '08:08', '14:30'),
(7, 'Dasuni', 'Wettland', '2023-10-31', '08:00', '14:00'),
(8, 'Easadi', 'Peradeniya garden', '2023-10-24', '09:30', '14:00'),
(9, 'Sadali', 'Gampaha', '2023-10-07', '14:30', '16:30'),
(10, 'Dilmi', 'haggala', '2023-10-02', '14:30', '17:30'),
(11, 'Dilmi', 'Galleface', '2023-10-07', '08:00', '22:00'),
(12, 'Dilmi', 'Colombo', '2023-10-02', '09:00', '14:00'),
(13, 'Winumi', 'Colombo', '2023-10-07', '22:00', '02:00'),
(14, 'Rashmi', 'Colombo', '2023-10-06', '02:30', '15:30');

-- --------------------------------------------------------

--
-- Table structure for table `hom_package`
--

CREATE TABLE `hom_package` (
  `CustomerName` varchar(200) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  `ASize` varchar(200) NOT NULL,
  `APages` int(50) NOT NULL,
  `ALamination` varchar(200) NOT NULL,
  `AlbumCasing` varchar(200) NOT NULL,
  `ESize` varchar(200) NOT NULL,
  `EType` varchar(200) NOT NULL,
  `EQuantity` int(50) NOT NULL,
  `TCSize` varchar(200) NOT NULL,
  `TCQuantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hom_package`
--

INSERT INTO `hom_package` (`CustomerName`, `ContactNumber`, `ASize`, `APages`, `ALamination`, `AlbumCasing`, `ESize`, `EType`, `EQuantity`, `TCSize`, `TCQuantity`) VALUES
('Dakshina Rashiprabha', 740852365, '12 X 16', 50, 'Matle', 'Album box', '12 X 18', 'Black frame', 5, '5 X 7', 250),
('Rashmi', 779437956, '10 X 20', 20, 'Sard glass', 'Album box', '16 X 24', 'Fiber', 2, '6 X 6', 286),
('Winumi', 768956375, '10 X 20', 40, 'Sard glass', 'Album bag', '20 X 30', 'White box frame', 4, '5 X 8', 3),
('Kasuri', 740852365, '10 X 20', 60, 'Sard glass', 'Album box', '12 X 18', 'Fiber', 2, '4 X 8', 134),
('Bimal', 779437957, '10 X 24', 60, 'Velvet', 'Album bag', '16 X 24', 'Black frame', 4, '4 X 6', 285),
('Minuri', 779137937, '8 X 29', 40, 'Velvet', 'Album box', '8 X 12', 'Black frame', 6, '4 X 8', 234),
('Sashika', 776859678, '10 X 24', 30, 'Velvet', 'Album box', '12 X 18', 'Wooden frame', 6, '4 X 6', 123),
('Dinushika', 740852365, '10 X 24', 40, 'Velvet', 'Album bag', '16 X 24', 'Black frame', 6, '5 X 7', 153),
('Maduri', 762696915, '10 X 24', 30, 'Glass', 'Album box', '10 X 15', 'White box frame', 2, '4 X 8', 124),
('Kagel', 768956375, '12 X 16', 60, 'Velvet', 'Album box', '16 X 24', 'Black frame', 4, '5 X 7', 135),
('Yasith', 779586235, '12 X 18', 50, 'Sard glass', 'Album box', '10 X 15', 'Wooden frame', 2, '4 X 8', 234),
('rashi', 762696915, '10 X 24', 40, 'Velvet', 'Album bag', '8 X 12', 'Wooden frame', 6, '5 X 7', 234),
('Rashmika', 776859426, '8 X 29', 60, 'Velvet', 'Album bag', '10 X 15', 'Wooden frame', 5, '4 X 8', 123);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `image_path`) VALUES
(1, 'YASA0012.jpg', 'uploads/YASA0012.jpg'),
(2, 'YASA0032.jpg', 'uploads/YASA0032.jpg'),
(3, 'YASA0193.jpg', 'uploads/YASA0193.jpg'),
(4, 'YASA0202.jpg', 'uploads/YASA0202.jpg'),
(5, 'YASA0209.jpg', 'uploads/YASA0209.jpg'),
(6, 'YASA0163 copy.jpg', 'uploads/YASA0163 copy.jpg'),
(7, 'YASA0214.jpg', 'uploads/YASA0214.jpg'),
(8, 'YASA0012.jpg', 'uploads/YASA0012.jpg'),
(9, 'YASA0097.jpg', 'uploads/YASA0097.jpg'),
(10, 'YASA0012.jpg', 'uploads/YASA0012.jpg'),
(11, 'YASA0185.jpg', 'uploads/YASA0185.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package_form_data`
--

CREATE TABLE `package_form_data` (
  `customer_name` varchar(200) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `asize` varchar(200) NOT NULL,
  `apage` varchar(200) NOT NULL,
  `alamination` varchar(200) NOT NULL,
  `acasing` varchar(200) NOT NULL,
  `esize` varchar(200) NOT NULL,
  `etype` varchar(200) NOT NULL,
  `eQuantity` int(50) NOT NULL,
  `tcsize` varchar(200) NOT NULL,
  `tcQuantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_form_data`
--

INSERT INTO `package_form_data` (`customer_name`, `contact_number`, `asize`, `apage`, `alamination`, `acasing`, `esize`, `etype`, `eQuantity`, `tcsize`, `tcQuantity`) VALUES
('Nawodya Attanayake', 772583695, '10 X 24', '50', 'Sard glass', 'Album bag', '10 X 15', 'Fiber', 4, '5 X 8', 280),
('Nawodya Chamodi', 772583695, '8 X 29', '40', 'Sard glass', 'Album box', '12 X 18', 'Black frame', 6, '5 X 7', 157),
('Dakshina Rashiprabha', 740852365, '10 X 20', '40', 'Velvet', 'Album bag', '10 X 15', 'Wooden frame', 5, '5 X 7', 135),
('Rashmika', 779437927, '10 X 24', '40', 'Sard glass', 'Album box', '10 X 15', 'Wooden frame', 5, '5 X 8', 185),
('Dilmi', 779137937, '8 X 29', '30', 'Matle', 'Album bag', '8 X 12', 'White box frame', 6, '4 X 8', 190),
('Charith', 779437957, '10 X 24', '40', 'Velvet', 'Album bag', '20 X 30', 'Fiber', 6, '5 X 7', 265);

-- --------------------------------------------------------

--
-- Table structure for table `pre_package`
--

CREATE TABLE `pre_package` (
  `CustomerName` varchar(200) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  `ASize` varchar(200) NOT NULL,
  `APages` varchar(200) NOT NULL,
  `ALamination` varchar(200) NOT NULL,
  `AlbumCasing` varchar(200) NOT NULL,
  `ESize` varchar(200) NOT NULL,
  `EType` varchar(200) NOT NULL,
  `EQuantity` int(50) NOT NULL,
  `TCSize` varchar(200) NOT NULL,
  `TCQuantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pre_package`
--

INSERT INTO `pre_package` (`CustomerName`, `ContactNumber`, `ASize`, `APages`, `ALamination`, `AlbumCasing`, `ESize`, `EType`, `EQuantity`, `TCSize`, `TCQuantity`) VALUES
('Nawodya Attanayake', 772583695, '10 X 24', '40', 'Sard glass', 'Album bag', '12 X 18', 'Wooden frame', 3, '5 X 7', 190),
('Kasun', 756983523, '10 X 20', '60', 'Glass', 'Album bag', '10 X 15', 'Fiber', 5, '4 X 8', 280),
('Sasindu padmasiri', 762696915, '12 X 24', '20', 'Metalic', 'Album box', '10 X 15', 'Black frame', 4, '5 X 7', 120),
('Ujith', 754863758, '12 X 18', '10', 'Metalic', 'Album bag', '12 X 18', 'Black frame', 2, '5 X 8', 250),
('Charith', 715486325, '10 X 24', '60', 'Silky matle', 'Album box', '16 X 24', 'White box frame', 2, '6 X 6', 230),
('Supun', 789642583, '10 X 24', '60', 'Matle', 'Album box', '10 X 15', 'Wooden frame', 2, '5 X 8', 190),
('Padmakumara', 742563654, '12 X 24', '20', 'Sard glass', 'Album bag', '8 X 12', 'Black frame', 3, '5 X 7', 170),
('Saman', 745812625, '12 X 24', '40', 'Sard glass', 'Album box', '8 X 12', 'Black frame', 2, '4 X 8', 225),
('Kamal', 779437917, '8 X 29', '30', 'Silky matle', 'Album box', '16 X 24', 'Fiber', 5, '5 X 8', 138),
('Diwya', 77943794, '10 X 20', '30', 'Velvet', 'Album box', '12 X 18', 'Black frame', 5, '5 X 8', 136),
('Nawodya', 740852365, '12 X 18', '30', 'Velvet', 'Album bag', '12 X 18', 'Fiber', 5, '5 X 8', 250);

-- --------------------------------------------------------

--
-- Table structure for table `wed_package`
--

CREATE TABLE `wed_package` (
  `wed_ID` int(20) NOT NULL,
  `customerName` varchar(200) NOT NULL,
  `ContactNumber` int(10) NOT NULL,
  `ASize` varchar(200) NOT NULL,
  `APages` int(50) NOT NULL,
  `ALamination` varchar(200) NOT NULL,
  `AlbumCasing` varchar(200) NOT NULL,
  `ESize` varchar(200) NOT NULL,
  `EType` varchar(200) NOT NULL,
  `EQuantity` int(50) NOT NULL,
  `TCSize` varchar(200) NOT NULL,
  `TCQuantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`nic_number`);

--
-- Indexes for table `event1`
--
ALTER TABLE `event1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wed_package`
--
ALTER TABLE `wed_package`
  ADD PRIMARY KEY (`wed_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event1`
--
ALTER TABLE `event1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wed_package`
--
ALTER TABLE `wed_package`
  MODIFY `wed_ID` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
