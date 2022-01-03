-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 03:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couriermanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `adminname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`adminname`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(25) NOT NULL,
  `branch_addr` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_ph` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_addr`, `branch_name`, `branch_ph`) VALUES
(2834, 'Navanagar,Bagalkot', 'Bagalkot', '9612458796'),
(9675, 'ilkal', 'Guledagudd', '8951379660');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courierid` int(25) NOT NULL,
  `custid` int(25) NOT NULL,
  `prod_id` int(25) NOT NULL,
  `courier_weight` int(25) NOT NULL,
  `courier_type` varchar(50) NOT NULL,
  `prod_desc` varchar(100) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `dest_ph` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courierid`, `custid`, `prod_id`, `courier_weight`, `courier_type`, `prod_desc`, `Source`, `Destination`, `dest_ph`) VALUES
(4505, 60505, 98507, 4, 'qwe', 'sdfhfhsdgf', 'bagalkot', 'hubli', '8951379660'),
(16730, 99187, 56857, 5, 'gadegts', 'mouse', 'adat bazar Bagalkot', 'House no:10,7th cross,vidhyageri,BAgalkot', '7851249632'),
(19787, 73729, 26356, 7, 'qwert', 'hkjfdjj', 'house no:34,jayanagar,bangalore', 'houseno:23,vijayanagar,bangalore', '6951247896'),
(43449, 60505, 7354, 4, 'Book', 'Indira novia', 'bagalkot', 'hubli', '8951379660'),
(74385, 33378, 63179, 8, 'books', 'book', 'jayanager', 'raghuvanahalli', '9564127895');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(25) NOT NULL,
  `custname` varchar(25) NOT NULL,
  `custemail` varchar(50) NOT NULL,
  `custph` varchar(12) NOT NULL,
  `custaddr` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `custname`, `custemail`, `custph`, `custaddr`, `password`) VALUES
(1270, 'Mallikarjun', 'malluarali123@gmail.com', '9110888132', 'opposite to HDFC BGK', 'bWFsbHU='),
(7802, 'apb', 'apb1@gmail.com', '2147483647', 'Bembalagi ginning factory,Bvvs college road Bagalk', '202cb962ac59075b964b07152d234b70'),
(33378, 'name1', 'shradhyar4420@gmail.com', '8952130142', 'jayanagar', 'bmFtZTE='),
(36153, 'nandish', 'nandhish06022002@gmail.com', '7022389920', 'College road', 'bmFuZGlzaA=='),
(60505, 'Shravan8014', 'shravan.bembalagi@gmail.com', '8951379660', 'Bembalagi ginning factory,Bvvs college road Bagalk', 'MTIzNA=='),
(73729, 'nagesh', 'nageshbs0817@gmail.com', '7564123484', 'Bangalore', 'bmFnZXNo'),
(93657, 'ap', 'apb@gmail.com', '2147483647', 'asd', '202cb962ac59075b964b07152d234b70'),
(96584, 'admin', 'admin@gmail.com', '2147483647', 'Bembalagi ginning factory,Bvvs college road Bagalk', '21232f297a57a5a743894a0e4a801fc3'),
(99187, 'altaf', 'altafkandagal01@gmail.com', '8044278877', 'Adat Bazar BGK', 'YWx0YWY=');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `cust_id` int(25) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `courier_id` int(25) NOT NULL,
  `del_id` varchar(25) NOT NULL,
  `del_date` date NOT NULL,
  `dest_addr` varchar(100) NOT NULL,
  `del_type` varchar(50) NOT NULL,
  `dest_ph` varchar(12) NOT NULL,
  `cust_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`cust_id`, `emp_id`, `courier_id`, `del_id`, `del_date`, `dest_addr`, `del_type`, `dest_ph`, `cust_name`) VALUES
(60505, 5468, 4505, 'SJNT', '2021-11-26', 'hubli', 'byroad', '8951379660', 'Shravan8014'),
(99187, 5960, 16730, '1WDC', '2021-11-25', 'House no:10,7th cross,vidhyageri,BAgalkot', 'byroad', '7851249632', 'altaf'),
(73729, 5468, 19787, '9CR7', '2021-11-27', 'houseno:23,vijayanagar,bangalore', 'byroad', '6951247896', 'nagesh');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(25) NOT NULL,
  `branch_id` int(25) NOT NULL,
  `emp_ph` varchar(12) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_addr` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `branch_id`, `emp_ph`, `emp_name`, `emp_addr`, `emp_email`, `emp_rating`) VALUES
(5468, 9675, '8951379660', 'Shravan', 'Bembalagi', 'shravan.bembalagi@gmail.com', 10),
(5960, 2834, '9624518693', 'Prabhu', 'Vinayak nagar,Hubli', 'prabhud7411@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `empname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeelogin`
--

INSERT INTO `employeelogin` (`empname`, `email`, `password`) VALUES
('rahul', 'rahul@gmail.com', '526mn'),
('shravan', 'shravan.bembalagi@gmail.com', '527vs');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `ship_id` varchar(25) NOT NULL,
  `cust_id` int(25) NOT NULL,
  `ship_desc` varchar(50) NOT NULL,
  `ship_date` date NOT NULL,
  `cust_ph` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`ship_id`, `cust_id`, `ship_desc`, `ship_date`, `cust_ph`) VALUES
('8H1A', 73729, 'byroad', '2021-10-28', '7564123484'),
('QIE7', 99187, 'byroad', '2021-11-26', '8044278877'),
('RB5K', 60505, 'byroad', '2021-11-13', '2147483647'),
('Z6G5', 60505, 'byroad', '2021-11-27', '8951379660');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `tracking_id` varchar(25) NOT NULL,
  `courier_id` int(25) NOT NULL,
  `current_loc` varchar(25) NOT NULL,
  `status1` varchar(50) NOT NULL,
  `cur_date` date NOT NULL,
  `del_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`tracking_id`, `courier_id`, `current_loc`, `status1`, `cur_date`, `del_date`) VALUES
('623B', 16730, ' naragund', 'Delivered', '2021-11-25', '2021-11-26'),
('FU2U', 43449, ' abc', 'Out For Delivery', '2021-11-20', '2021-11-30'),
('L3ZE', 19787, ' rajajinagar', 'Delivered', '2021-10-30', '2021-11-27'),
('ZZZV', 4505, ' sirsi', 'Delivered', '1970-01-22', '1970-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courierid`),
  ADD KEY `fkcustid` (`custid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD KEY `courier_id` (`courier_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`ship_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `courier_id` (`courier_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `fkcustid` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courierid`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`custid`),
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`custid`);

--
-- Constraints for table `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `tracking_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courierid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
