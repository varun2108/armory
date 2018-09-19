-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 06:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armary`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulets_loaded`
--

CREATE TABLE `bulets_loaded` (
  `wepon_id` varchar(15) NOT NULL,
  `bulet_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bulets_used`
--

CREATE TABLE `bulets_used` (
  `bulet_no` varchar(20) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `denial_list`
--

CREATE TABLE `denial_list` (
  `emp_id` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `address` varchar(35) NOT NULL,
  `contact_no` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `designation`, `address`, `contact_no`) VALUES
('sl01', 'vishnesh', 'soldier', 'vishakapatnam', 9986972757),
('sl02', 'shashank', 'soldier', 'mumbai', 8217672005),
('sl03', 'bhuvan', 'soldier', 'davangere', 9440478998),
('sl04', 'vinay', 'soldier', 'banglore', 9573907464),
('sl05', 'iaan', 'soldier', 'vijaywada', 8500414917),
('sl06', 'amith', 'soldier', 'hyderabad', 9739352373),
('sl07', 'jafar', 'soldier', 'calcutta', 9740119903),
('sl08', 'vivek', 'soldier', 'salem', 9686172111),
('sl09', 'umesh', 'soldier', 'Indupur', 8951579864),
('sl10', 'shreyas', 'soldier', 'chennai', 9686422111),
('sl11', 'shantesh', 'soldier', 'raichur', 8971077679),
('sl12', 'nishit', 'soldier', 'jaipur', 9480548412),
('sl13', 'kadeer', 'soldier', 'Bijapur', 7795110387),
('sl14', 'madhusudan', 'soldier', 'Raipur', 9686838066),
('sl15', 'kishore', 'soldier', 'panaji', 9482989195),
('sl16', 'harish', 'soldier', 'karnool', 9742795999),
('sl17', 'pranav', 'soldier', 'ranebennur', 8500464517),
('sl18', 'nithin', 'soldier', 'kashmir', 9998852018),
('sl19', 'rakesh', 'soldier', 'orissa', 8102588999),
('sl20', 'siddarth', 'soldier', 'rajasthan', 8123616263),
('st01', 'varun', 'staff', 'davangere', 9164303119),
('st02', 'thriveni', 'staff', 'davangere', 9886070677),
('st03', 'raksha', 'staff', 'davangere', 9148267651),
('st04', 'siddesh', 'staff', 'davangere', 9916618248);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `emp_id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`emp_id`, `username`, `password`) VALUES
('st01', 'varun', 'varun217'),
('st02', 'thriveni', 'thriveni97'),
('st03', 'raksha', 'raksha123'),
('st04', 'siddesh', 'siddesh34');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `emp_id` varchar(10) NOT NULL,
  `weponname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`emp_id`, `weponname`) VALUES
('st01', 'ak47'),
('sl01', 'M4 Carbine'),
('sl02', 'Beretta M9 Pistol'),
('sl03', 'M224 60mm Mortar'),
('sl04', 'M252 Mortar'),
('sl05', 'FGM-148 Javelin'),
('sl06', 'Avenger Weapon System'),
('sl07', 'Patriot PAC-3'),
('sl08', 'MK-28 25mm Gun'),
('sl09', 'Mk16 SCAR'),
('sl10', 'MK19 Grenade Machine Gun'),
('sl11', 'Avenger Weapon System'),
('sl12', 'Beretta M9 Pistol'),
('sl13', 'FGM-148 Javelin'),
('sl14', 'M224 60mm Mortar'),
('sl15', 'M252 Mortar'),
('sl16', 'M4 Carbine'),
('sl17', 'MK-28 25mm Gun'),
('sl18', 'Mk16 SCAR'),
('sl19', 'MK19 Grenade Machine Gun'),
('sl20', 'Patriot PAC-3');

-- --------------------------------------------------------

--
-- Table structure for table `wepon`
--

CREATE TABLE `wepon` (
  `wepon_name` varchar(30) NOT NULL,
  `manufactorur` varchar(30) NOT NULL,
  `available_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wepon`
--

INSERT INTO `wepon` (`wepon_name`, `manufactorur`, `available_no`) VALUES
('Avenger weapon system', '', 5),
('Beretta M9 Pistol', '', 5),
('FGM-148 Javelin', '', 5),
('M224 60mm Mortar', '', 5),
('M252 Mortar', '', 5),
('M4 Carbine', '', 5),
('MK-28 25mm Gun', '', 5),
('MK16 SCAR', '', 5),
('MK19 Grenade Machine Gun', '', 5),
('Patriot PAC-3', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `wepon_hold`
--

CREATE TABLE `wepon_hold` (
  `emp_id` varchar(10) NOT NULL,
  `wepon_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wepon_hold`
--

INSERT INTO `wepon_hold` (`emp_id`, `wepon_id`) VALUES
('st01', '');

-- --------------------------------------------------------

--
-- Table structure for table `wepon_identity`
--

CREATE TABLE `wepon_identity` (
  `wepon_id` varchar(15) NOT NULL,
  `wepon_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wepon_identity`
--

INSERT INTO `wepon_identity` (`wepon_id`, `wepon_name`) VALUES
('w01', 'Avenger weapon system'),
('w02', 'Beretta M9 Pistol'),
('w03', 'FGM-148 Javelin'),
('w05', 'M224 60mm Mortar'),
('w06', 'M252 Mortar'),
('w04', 'M4 Carbine'),
('w07', 'MK-28 25mm Gun'),
('w08', 'MK16 SCAR'),
('w09', 'MK19 Grenade Machine Gun'),
('w10', 'Patriot PAC-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulets_loaded`
--
ALTER TABLE `bulets_loaded`
  ADD PRIMARY KEY (`bulet_no`),
  ADD KEY `wepon_id` (`wepon_id`);

--
-- Indexes for table `bulets_used`
--
ALTER TABLE `bulets_used`
  ADD PRIMARY KEY (`bulet_no`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `denial_list`
--
ALTER TABLE `denial_list`
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `contact_no` (`contact_no`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `wepon`
--
ALTER TABLE `wepon`
  ADD PRIMARY KEY (`wepon_name`);

--
-- Indexes for table `wepon_hold`
--
ALTER TABLE `wepon_hold`
  ADD PRIMARY KEY (`wepon_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `wepon_identity`
--
ALTER TABLE `wepon_identity`
  ADD PRIMARY KEY (`wepon_id`),
  ADD KEY `wepon_name` (`wepon_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bulets_loaded`
--
ALTER TABLE `bulets_loaded`
  ADD CONSTRAINT `bulets_loaded_ibfk_1` FOREIGN KEY (`wepon_id`) REFERENCES `wepon_identity` (`wepon_id`);

--
-- Constraints for table `bulets_used`
--
ALTER TABLE `bulets_used`
  ADD CONSTRAINT `bulets_used_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `denial_list`
--
ALTER TABLE `denial_list`
  ADD CONSTRAINT `denial_list_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `password`
--
ALTER TABLE `password`
  ADD CONSTRAINT `password_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `wepon_hold`
--
ALTER TABLE `wepon_hold`
  ADD CONSTRAINT `wepon_hold_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `wepon_identity`
--
ALTER TABLE `wepon_identity`
  ADD CONSTRAINT `wepon_identity_ibfk_1` FOREIGN KEY (`wepon_name`) REFERENCES `wepon` (`wepon_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
