-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 03:08 AM
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
-- Database: `pemohon_db`
--

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
(5, '990319-05-5827', 'Aiman', '1999-03-19', 'Hospital Sultan Haji Ahmad Shah, Temerloh', 'No 3 Jalan Belakang Stesen KTM 28010 Termeloh Pahang', '013-9868652');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
