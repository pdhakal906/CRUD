-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housedetail`
--

-- --------------------------------------------------------

--
-- Table structure for table `eco_status`
--

CREATE TABLE `eco_status` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `employment_status` varchar(999) NOT NULL,
  `income_source` varchar(999) NOT NULL,
  `monthly_income` varchar(999) NOT NULL,
  `dependent_members` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `water_facility` varchar(999) NOT NULL,
  `toilet_facility` varchar(999) NOT NULL,
  `fuel_facility` varchar(999) NOT NULL,
  `light_facility` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fam_head`
--

CREATE TABLE `fam_head` (
  `house_number` int(11) NOT NULL,
  `address` varchar(999) NOT NULL,
  `tole` varchar(999) NOT NULL,
  `religion` varchar(999) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `head_name_eng` varchar(999) NOT NULL,
  `head_age` varchar(999) NOT NULL,
  `head_gender` varchar(999) NOT NULL,
  `head_citizenship` varchar(999) NOT NULL,
  `head_occupation` varchar(999) NOT NULL,
  `education` varchar(999) NOT NULL,
  `mobile` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fam_mem`
--

CREATE TABLE `fam_mem` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `name` varchar(999) NOT NULL,
  `mem_name_eng` varchar(999) NOT NULL,
  `age` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `relation` varchar(999) NOT NULL,
  `citizenship` varchar(999) NOT NULL,
  `occupation` varchar(999) NOT NULL,
  `education` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `living_status`
--

CREATE TABLE `living_status` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `property_status` varchar(999) NOT NULL,
  `land_area` varchar(999) NOT NULL,
  `house_type` varchar(999) NOT NULL,
  `room_number` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `geographic_status` varchar(999) NOT NULL,
  `health_facility` varchar(999) NOT NULL,
  `land_value` varchar(999) NOT NULL,
  `road_facility` varchar(999) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `head_name` varchar(100) NOT NULL,
  `vehicle` varchar(999) NOT NULL,
  `communication` varchar(999) NOT NULL,
  `fridge` varchar(999) NOT NULL,
  `domestic_animals` varchar(999) NOT NULL,
  `domestic_birds` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eco_status`
--
ALTER TABLE `eco_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delfk1` (`house_number`),
  ADD KEY `editfk1` (`head_name`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delfk2` (`house_number`),
  ADD KEY `editfk2` (`head_name`);

--
-- Indexes for table `fam_head`
--
ALTER TABLE `fam_head`
  ADD PRIMARY KEY (`house_number`),
  ADD KEY `head_name` (`head_name`);

--
-- Indexes for table `fam_mem`
--
ALTER TABLE `fam_mem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delfk3` (`house_number`),
  ADD KEY `editfk3` (`head_name`);

--
-- Indexes for table `living_status`
--
ALTER TABLE `living_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delfk4` (`house_number`),
  ADD KEY `editfk4` (`head_name`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delfk5` (`house_number`),
  ADD KEY `editfk5` (`head_name`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delfk6` (`house_number`),
  ADD KEY `editfk6` (`head_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eco_status`
--
ALTER TABLE `eco_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fam_mem`
--
ALTER TABLE `fam_mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `living_status`
--
ALTER TABLE `living_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eco_status`
--
ALTER TABLE `eco_status`
  ADD CONSTRAINT `delfk1` FOREIGN KEY (`house_number`) REFERENCES `fam_head` (`house_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `editfk1` FOREIGN KEY (`head_name`) REFERENCES `fam_head` (`head_name`) ON UPDATE CASCADE;

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `delfk2` FOREIGN KEY (`house_number`) REFERENCES `fam_head` (`house_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `editfk2` FOREIGN KEY (`head_name`) REFERENCES `fam_head` (`head_name`) ON UPDATE CASCADE;

--
-- Constraints for table `fam_mem`
--
ALTER TABLE `fam_mem`
  ADD CONSTRAINT `delfk3` FOREIGN KEY (`house_number`) REFERENCES `fam_head` (`house_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `editfk3` FOREIGN KEY (`head_name`) REFERENCES `fam_head` (`head_name`) ON UPDATE CASCADE;

--
-- Constraints for table `living_status`
--
ALTER TABLE `living_status`
  ADD CONSTRAINT `delfk4` FOREIGN KEY (`house_number`) REFERENCES `fam_head` (`house_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `editfk4` FOREIGN KEY (`head_name`) REFERENCES `fam_head` (`head_name`) ON UPDATE CASCADE;

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `delfk5` FOREIGN KEY (`house_number`) REFERENCES `fam_head` (`house_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `editfk5` FOREIGN KEY (`head_name`) REFERENCES `fam_head` (`head_name`) ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `delfk6` FOREIGN KEY (`house_number`) REFERENCES `fam_head` (`house_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `editfk6` FOREIGN KEY (`head_name`) REFERENCES `fam_head` (`head_name`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
