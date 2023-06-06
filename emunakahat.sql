-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 08:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emunakahat`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `applicant_ic` varchar(12) NOT NULL,
  `applicant_username` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_gender` varchar(50) NOT NULL,
  `applicant_dob` date NOT NULL,
  `applicant_pob` varchar(50) NOT NULL,
  `applicant_address` varchar(100) NOT NULL,
  `applicant_phone_num` varchar(11) NOT NULL,
  `applicant_race` varchar(50) NOT NULL,
  `applicant_marriage_status` varchar(50) NOT NULL,
  `applicant_job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `partner_id`, `applicant_ic`, `applicant_username`, `applicant_name`, `applicant_gender`, `applicant_dob`, `applicant_pob`, `applicant_address`, `applicant_phone_num`, `applicant_race`, `applicant_marriage_status`, `applicant_job`) VALUES
(1, 1, '010521081643', 'aimnsbri', 'Muhammad Aiman Bin Mohd Sabri', 'Lelaki', '2001-05-21', 'Bagan Serai', '016, Matang Tengah, Changkat Lobak, 34310 Bagan Serai, Perak', '01151453238', 'Melayu', 'Bujang', 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `partner_ic` varchar(12) NOT NULL,
  `partner_name` varchar(50) NOT NULL,
  `partner_phone_num` varchar(11) NOT NULL,
  `partner_dob` date NOT NULL,
  `partner_race` varchar(50) NOT NULL,
  `partner_marriage_status` varchar(50) NOT NULL,
  `partner_pob` varchar(50) NOT NULL,
  `partner_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_ic`, `partner_name`, `partner_phone_num`, `partner_dob`, `partner_race`, `partner_marriage_status`, `partner_pob`, `partner_address`) VALUES
(1, '010521081643', 'Nor Raudatul binti Jemadin', '0173931220', '1989-05-24', 'Melayu', 'Bujang', 'Sungai Petani', 'No. 3-4, Jln Birch 1W, Taman Brickfields, 09073 Sungai Petani, Kedah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`),
  ADD KEY `partner_id` (`partner_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`partner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
