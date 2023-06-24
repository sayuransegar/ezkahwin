-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 04:56 PM
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
  `id` int(11) DEFAULT NULL,
  `applicant_dob` date NOT NULL,
  `applicant_pob` varchar(50) NOT NULL,
  `applicant_address` varchar(100) NOT NULL,
  `applicant_JOB_sector` varchar(50) NOT NULL,
  `applicant_levelOfEducation` varchar(100) NOT NULL,
  `applicant_race` varchar(50) NOT NULL,
  `applicant_JOB` varchar(50) NOT NULL,
  `applicant_salary` int(50) NOT NULL,
  `applicant_marriage_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `id`, `applicant_dob`, `applicant_pob`, `applicant_address`, `applicant_JOB_sector`, `applicant_levelOfEducation`, `applicant_race`, `applicant_JOB`, `applicant_salary`, `applicant_marriage_status`) VALUES
(1, 1, '2001-05-21', 'Bagan Serai', '016, Matang Tengah, Changkat Lobak, 34310 Bagan Serai, Perak', 'Tech Industry', 'Bachelor of Computer Science (Software Engineering) with Honours', 'Melayu', 'Computer programmers', 4000, 'Bujang');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_date` date NOT NULL,
  `complaint_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint_date`, `complaint_desc`) VALUES
(1, '2023-06-12', 'aiman'),
(2, '2023-06-12', 'Aiman Handsome'),
(4, '2023-06-13', 'Test 12345'),
(5, '0000-00-00', ''),
(6, '0000-00-00', ''),
(7, '2023-06-16', 'cuba yang terbaik'),
(8, '2023-06-16', '1234'),
(9, '2023-06-16', 'qwertyu'),
(10, '2023-06-16', 'wsfgyy'),
(11, '2023-06-24', ''),
(12, '2023-06-17', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_ID` int(11) NOT NULL,
  `consultation_session_no` int(11) NOT NULL,
  `consultation_additional` varchar(10) NOT NULL,
  `consultation_date` date NOT NULL,
  `consultation_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consultation_ID`, `consultation_session_no`, `consultation_additional`, `consultation_date`, `consultation_time`) VALUES
(1, 1, 'Yes', '2023-06-06', '08:00:00'),
(2, 1, 'Yes', '2023-06-08', '11:00:00'),
(3, 2, 'Yes', '2023-06-03', '02:30:00'),
(4, 1, 'Ya', '2023-06-16', '10:41:00'),
(5, 1, 'Ya', '2023-06-16', '10:41:00'),
(6, 1, 'Ya', '2023-06-08', '17:59:00'),
(7, 7, 'Tidak', '2023-06-30', '18:00:00'),
(8, 1, 'Tidak', '2023-06-17', '10:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `marriagecard`
--

CREATE TABLE `marriagecard` (
  `card_id` int(11) NOT NULL,
  `marriageregister_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `proofofpayment` longblob NOT NULL,
  `card_produce_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marriagecard`
--

INSERT INTO `marriagecard` (`card_id`, `marriageregister_id`, `admin_id`, `proofofpayment`, `card_produce_date`, `status`) VALUES
(12, 1, NULL, '', NULL, ''),
(13, NULL, NULL, '', NULL, NULL),
(14, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marriageregistration`
--

CREATE TABLE `marriageregistration` (
  `marriageregister_id` int(11) NOT NULL,
  `requestmarriage_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `marriage_category` varchar(50) NOT NULL,
  `marriage_license_number` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marriageregistration`
--

INSERT INTO `marriageregistration` (`marriageregister_id`, `requestmarriage_id`, `admin_id`, `marriage_category`, `marriage_license_number`, `status`) VALUES
(1, 1, NULL, 'Pendaftaran Dengan Kebenaran', 'AJ5600BC', ''),
(4, NULL, NULL, 'Perkahwinan dengan kebenaran', 'ERTYU345', ''),
(5, NULL, NULL, 'Perkahwinan dengan kebenaran', '3456789', ''),
(6, NULL, NULL, 'Perkahwinan dengan kebenaran', '3456789', ''),
(7, NULL, NULL, 'Perkahwinan dengan kebenaran', '2345SDF34', NULL),
(8, NULL, NULL, 'Select an option', '', NULL),
(9, NULL, NULL, 'Perkahwinan dengan kebenaran', '2345SDF34', NULL);

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
(1, '980409081643', 'Nur Hidayah Binti Abdul Rani', '01151453238', '1998-04-09', 'Melayu', 'Bujang', 'Tasek Gelugor', '015, Tasik Gelugor, Pulau Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id` int(11) NOT NULL,
  `ic_num` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id`, `ic_num`, `name`, `birth_date`, `birth_place`, `address`, `phone_number`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '010521081643', 'MUHAMMAD AIMAN BIN MOHD SABRI', '2023-06-17', 'Hajuixs', 'ijhkcjabksjc', '12345678'),
(3, '', '', '1993-02-01', '', '', ''),
(4, '930201-06-0313', 'Muhammad Azam bin Mahmood', '1993-02-01', 'Hospital Sultan Haji Ahmad Shah, Temerloh', 'No 3 Jalan Belakang Stesen KTM 28010 Termeloh Pahang', '013-9868652'),
(5, '990319-05-5827', 'Aiman', '1999-03-19', 'Hospital Sultan Haji Ahmad Shah, Temerloh', 'No 3 Jalan Belakang Stesen KTM 28010 Termeloh Pahang', '013-9868652'),
(6, '132345235', 'aiman', '2023-06-24', 'aassfdf', 'zzzxx', '00192834');

-- --------------------------------------------------------

--
-- Table structure for table `requestmarriage`
--

CREATE TABLE `requestmarriage` (
  `requestmarriage_id` int(11) NOT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `partner_id` int(11) DEFAULT NULL,
  `marriage_date` date NOT NULL,
  `marriage_address` varchar(100) NOT NULL,
  `solemnization_date` date NOT NULL,
  `amount_dowry` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_phone_number` varchar(50) NOT NULL,
  `guardian_address` varchar(100) NOT NULL,
  `guardian_IC` varchar(50) NOT NULL,
  `witness1_name` varchar(50) NOT NULL,
  `witness1_IC` varchar(50) NOT NULL,
  `witness1_phone_number` varchar(50) NOT NULL,
  `witness1_address` varchar(100) NOT NULL,
  `witness2_name` varchar(50) NOT NULL,
  `witness2_IC` varchar(50) NOT NULL,
  `witness2_phone_number` varchar(50) NOT NULL,
  `witness2_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestmarriage`
--

INSERT INTO `requestmarriage` (`requestmarriage_id`, `applicant_id`, `partner_id`, `marriage_date`, `marriage_address`, `solemnization_date`, `amount_dowry`, `guardian_name`, `guardian_phone_number`, `guardian_address`, `guardian_IC`, `witness1_name`, `witness1_IC`, `witness1_phone_number`, `witness1_address`, `witness2_name`, `witness2_IC`, `witness2_phone_number`, `witness2_address`) VALUES
(1, 1, 1, '2023-06-14', '016, Newyork City', '2023-06-10', '1000', 'Afiq', '0113245876', '34, Washington', '2345678', 'aiman', '23456789', '0116545790', '98, Los Angelas', 'Bad', '098765432', '012345678', '67, Alaska');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `icnum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `icnum`, `email`, `name`, `gender`, `password`) VALUES
(1, '100', 'teststaff@mail.com', 'Test', 'Unknown', 'test_123');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_ID` int(11) NOT NULL,
  `status_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `icnum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `icnum`, `email`, `name`, `gender`, `phonenum`, `address`, `password`) VALUES
(1, '010521081643', 'aimnsbri@gmail.com', 'Muhammad Aiman Bin Mohd Sabri', '', '01151453238', '016, MATANG TENGAH', '12345'),
(20, '000330060746', 'atulfaa@gmail.com', 'Anis Zulaikha', 'lelaki', '0192818313', 'k221 taman inderapura', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`),
  ADD KEY `user_id` (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_ID`);

--
-- Indexes for table `marriagecard`
--
ALTER TABLE `marriagecard`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `marriageregister_id` (`marriageregister_id`);

--
-- Indexes for table `marriageregistration`
--
ALTER TABLE `marriageregistration`
  ADD PRIMARY KEY (`marriageregister_id`),
  ADD KEY `requestmarriage_id` (`requestmarriage_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestmarriage`
--
ALTER TABLE `requestmarriage`
  ADD PRIMARY KEY (`requestmarriage_id`),
  ADD KEY `applicant_id` (`applicant_id`),
  ADD KEY `partner_id` (`partner_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marriagecard`
--
ALTER TABLE `marriagecard`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `marriageregistration`
--
ALTER TABLE `marriageregistration`
  MODIFY `marriageregister_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requestmarriage`
--
ALTER TABLE `requestmarriage`
  MODIFY `requestmarriage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `marriagecard`
--
ALTER TABLE `marriagecard`
  ADD CONSTRAINT `marriagecard_ibfk_1` FOREIGN KEY (`marriageregister_id`) REFERENCES `marriageregistration` (`marriageregister_id`);

--
-- Constraints for table `marriageregistration`
--
ALTER TABLE `marriageregistration`
  ADD CONSTRAINT `marriageregistration_ibfk_1` FOREIGN KEY (`requestmarriage_id`) REFERENCES `requestmarriage` (`requestmarriage_id`);

--
-- Constraints for table `requestmarriage`
--
ALTER TABLE `requestmarriage`
  ADD CONSTRAINT `requestmarriage_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`),
  ADD CONSTRAINT `requestmarriage_ibfk_2` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`partner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
