-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 11:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custId`, `name`, `password`) VALUES
(1, 'quang', '123'),
(2, 'smoker', '123'),
(3, 'faris', '123'),
(4, 'hello', '123'),
(5, 'haziq', '123'),
(19, 'quagn123', '123456'),
(20, 'quang123', '456'),
(21, 'user', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` varchar(9) NOT NULL,
  `address` varchar(240) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `address`, `lat`, `lng`) VALUES
('ACM', 'BLK 98A ALJUNIED CRESCENT\r\n', 1.321180, 103.884933),
('BJ30', 'BLK 510A JELAPANG ROAD', 1.387083, 103.768974),
('BJ31', 'BLK 513A JELAPANG ROAD', 1.387898, 103.767433),
('BR8', 'BLK 76/77 LORONG LIMAU', 1.325210, 103.854591),
('BR9', 'BLK 69 MOULMEIN ROAD', 1.318950, 103.850540),
('BTM', 'BLK 2B BOON TIONG ROAD', 1.286935, 103.833084),
('B48B', 'BLK 547C BEDOK NORTH AVENUE 1', 1.330184, 103.925812),
('B49', 'BLK 549/551 BEDOK NORTH AVENUE 1', 1.332114, 103.926704),
('ABCD', 'BLK 548 Bedok North Ave 1', 1.331300, 103.926865),
('EFG', 'Temasek Polytechnic', 1.345185, 103.931808);

-- --------------------------------------------------------

--
-- Table structure for table `upload3`
--

CREATE TABLE `upload3` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `file` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload3`
--

INSERT INTO `upload3` (`id`, `email`, `username`, `message`, `file`) VALUES
(30, '1901990@sit.singaporetech.edu.sg', 'hqi', 'drfd', '1609-upload (1).sql'),
(47, '1901990@sit.singaporetech.edu.sg', 'haziq', '12345678', '3249-upload.sql'),
(48, '1903@gjmai.do', 'kopj', 'ibi', '2176-package.json'),
(49, '1903@gjmai.do', 'kopj', 'ibi', '7579-package.json'),
(50, 'hyu', 'hui', 'nkjn', '4065-package.json'),
(51, 'jsadj@gmail.com', 'llll', 'jkjk', '5103-'),
(52, 'asdas@gmail.com', 'lol', 'dsd', '5239-Welcome.php'),
(53, 'faris@gmail.com', 'Faris', 'Hi', '6951-Welcome.php'),
(54, 'Alex@gmail.com', 'Alex', 'Hi', '1426-Welcome.php');

-- --------------------------------------------------------

--
-- Table structure for table `user_reservation`
--

CREATE TABLE `user_reservation` (
  `userId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `carparkId` int(11) NOT NULL,
  `lotId` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `check_in` varchar(20) NOT NULL,
  `check_out` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reservation`
--

INSERT INTO `user_reservation` (`userId`, `bookId`, `carparkId`, `lotId`, `address`, `price`, `check_in`, `check_out`) VALUES
(2, 1, 1, 68, 'BLK 153-167 BISHAN STREET 13', 0.76, '', ''),
(1, 2, 2, 23, 'BLK 747/752 YISHUN STREET 72', 0.76, '', ''),
(4, 4, 3, 222, 'BLK 613C BEDOK RESERVOIR ROAD', 0.76, '', ''),
(21, 39, 2, 23, 'BLK 747/752 YISHUN STREET 72', 0.76, '2021-04-05 19:30', '2021-04-06 20:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload3`
--
ALTER TABLE `upload3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reservation`
--
ALTER TABLE `user_reservation`
  ADD PRIMARY KEY (`bookId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `upload3`
--
ALTER TABLE `upload3`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_reservation`
--
ALTER TABLE `user_reservation`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_reservation`
--
ALTER TABLE `user_reservation`
  ADD CONSTRAINT `user_reservation_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `customer` (`custId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
