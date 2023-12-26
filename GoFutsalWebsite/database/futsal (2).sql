-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 03:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwala`
--

CREATE TABLE `jadwala` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(25) NOT NULL,
  `jam` text NOT NULL,
  `tanggal` date NOT NULL,
  `no_tlpn` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwala`
--

INSERT INTO `jadwala` (`id`, `nama_tim`, `jam`, `tanggal`, `no_tlpn`) VALUES
(1, 'Spontan FC', '08:00', '2022-09-26', 4326242),
(2, 'Turu FC', '10:00', '2022-09-26', 8121212),
(3, 'Teknik Informatika 21', '11:00', '2022-11-30', 2147483647),
(4, 'Teknik Informatika 21', '14:33', '2022-11-11', 2147483647),
(5, '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwalb`
--

CREATE TABLE `jadwalb` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(25) NOT NULL,
  `jam` text NOT NULL,
  `tanggal` date NOT NULL,
  `no_tlpn` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwalb`
--

INSERT INTO `jadwalb` (`id`, `nama_tim`, `jam`, `tanggal`, `no_tlpn`) VALUES
(1, 'Aduhayy FC', '12:00', '2022-09-26', 8121212);

-- --------------------------------------------------------

--
-- Table structure for table `jadwalc`
--

CREATE TABLE `jadwalc` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(25) NOT NULL,
  `jam` text NOT NULL,
  `tanggal` date NOT NULL,
  `no_tlpn` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwald`
--

CREATE TABLE `jadwald` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(25) NOT NULL,
  `jam` text NOT NULL,
  `tanggal` date NOT NULL,
  `no_tlpn` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwald`
--

INSERT INTO `jadwald` (`id`, `nama_tim`, `jam`, `tanggal`, `no_tlpn`) VALUES
(1, '', '', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwala`
--
ALTER TABLE `jadwala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalb`
--
ALTER TABLE `jadwalb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwalc`
--
ALTER TABLE `jadwalc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwald`
--
ALTER TABLE `jadwald`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwala`
--
ALTER TABLE `jadwala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwalb`
--
ALTER TABLE `jadwalb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwalc`
--
ALTER TABLE `jadwalc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwald`
--
ALTER TABLE `jadwald`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
