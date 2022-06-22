-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkrkelapadua`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID_Admin` char(5) NOT NULL,
  `ID_Akses` char(5) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Sekolah` varchar(20) NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Golongan` varchar(10) NOT NULL,
  `MasaBakti` year(4) NOT NULL,
  `TglUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID_Admin`, `ID_Akses`, `Nama_User`, `Sekolah`, `NoTelp`, `Golongan`, `MasaBakti`, `TglUpdate`) VALUES
('AD001', 'AK001', 'Muara Zikri', 'SMA Al Fityan', '-', 'Pandega', 2024, '2022-06-22'),
('AD002', 'AK002', 'Fillah Munaya', '-', '-', '-', 2024, '2022-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `ID_Akses` char(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`ID_Akses`, `Username`, `Password`) VALUES
('AK001', 'AK001', 'zikri'),
('AK002', 'AK002', 'fillah'),
('AK003', 'AK003', 'meilizka'),
('AK004', 'AK004', 'kendanan'),
('AK005', 'AK005', 'alya'),
('AK006', 'AK006', 'bayu'),
('AK007', 'AK007', 'regis'),
('AK008', 'AK008', 'revaldy'),
('AK009', 'AK009', 'rangga');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ID_Anggota` char(5) NOT NULL,
  `ID_Admin` char(5) NOT NULL,
  `ID_Akses` char(5) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Sekolah` varchar(20) NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Golongan` varchar(10) NOT NULL,
  `MasaBakti` year(4) NOT NULL,
  `TglUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID_Anggota`, `ID_Admin`, `ID_Akses`, `Nama_User`, `Sekolah`, `NoTelp`, `Golongan`, `MasaBakti`, `TglUpdate`) VALUES
('US001', 'AD001', 'AK003', 'Meilizka D', '-', '-', 'Penegak', 2024, '2022-06-21'),
('US002', 'AD001', 'AK004', 'Kendanan Wherespati', '-', '-', 'Penegak', 2024, '2022-02-25'),
('US003', 'AD001', 'AK005', 'Alya Dani', 'SMAN 23', '081365489789', 'Penegak', 2024, '2022-06-16'),
('US004', 'AD001', 'AK006', 'Bayu Aryo', '-', '-', 'Penegak', 2024, '2022-02-25'),
('US005', 'AD002', 'AK007', 'Regis Revaldy', '-', '-', 'Penegak', 2024, '2022-02-25'),
('US006', 'AD002', 'AK008', 'Revaldy Putra', '-', '-', 'Penegak', 2024, '2022-02-25'),
('US007', 'AD002', 'AK009', 'Rangga Satria', '-', '-', 'Penegak', 2024, '2022-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `ID_Kandidat` char(5) NOT NULL,
  `ID_User` char(5) NOT NULL,
  `Periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`ID_Kandidat`, `ID_User`, `Periode`) VALUES
('KN001', 'AK008', 2022),
('KN002', 'AK009', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `ID_Kandidat` char(5) NOT NULL,
  `ID_PoinNilai` char(5) NOT NULL,
  `ID_User` char(5) NOT NULL,
  `Nilai` int(11) NOT NULL,
  `Periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`ID_Kandidat`, `ID_PoinNilai`, `ID_User`, `Nilai`, `Periode`) VALUES
('KN002', 'PN001', 'AK002', 80, 2022),
('KN002', 'PN002', 'AK002', 80, 2022),
('KN002', 'PN003', 'AK002', 70, 2022),
('KN002', 'PN004', 'AK002', 80, 2022),
('KN002', 'PN005', 'AK002', 80, 2022),
('KN002', 'PN006', 'AK002', 70, 2022),
('KN001', 'PN001', 'AK002', 70, 2022),
('KN001', 'PN002', 'AK002', 70, 2022),
('KN001', 'PN003', 'AK002', 70, 2022),
('KN001', 'PN004', 'AK002', 70, 2022),
('KN001', 'PN005', 'AK002', 70, 2022),
('KN001', 'PN006', 'AK002', 70, 2022),
('KN001', 'PN001', 'AK001', 70, 2022),
('KN001', 'PN002', 'AK001', 80, 2022),
('KN001', 'PN003', 'AK001', 80, 2022),
('KN001', 'PN004', 'AK001', 80, 2022),
('KN001', 'PN005', 'AK001', 90, 2022),
('KN001', 'PN006', 'AK001', 90, 2022),
('KN002', 'PN001', 'AK001', 80, 2022),
('KN002', 'PN002', 'AK001', 90, 2022),
('KN002', 'PN003', 'AK001', 90, 2022),
('KN002', 'PN004', 'AK001', 90, 2022),
('KN002', 'PN005', 'AK001', 90, 2022),
('KN002', 'PN006', 'AK001', 90, 2022),
('KN001', 'PN001', 'AK003', 70, 2022),
('KN001', 'PN002', 'AK003', 80, 2022),
('KN001', 'PN003', 'AK003', 90, 2022),
('KN001', 'PN004', 'AK003', 90, 2022),
('KN001', 'PN005', 'AK003', 80, 2022),
('KN001', 'PN006', 'AK003', 80, 2022),
('KN002', 'PN001', 'AK003', 70, 2022),
('KN002', 'PN002', 'AK003', 90, 2022),
('KN002', 'PN003', 'AK003', 80, 2022),
('KN002', 'PN004', 'AK003', 70, 2022),
('KN002', 'PN005', 'AK003', 90, 2022),
('KN002', 'PN006', 'AK003', 90, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `poinnilai`
--

CREATE TABLE `poinnilai` (
  `ID_PoinNilai` char(5) NOT NULL,
  `ID_Admin` char(5) NOT NULL,
  `PoinNilai` varchar(50) NOT NULL,
  `Persentase` double NOT NULL,
  `Periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poinnilai`
--

INSERT INTO `poinnilai` (`ID_PoinNilai`, `ID_Admin`, `PoinNilai`, `Persentase`, `Periode`) VALUES
('PN001', 'AD002', 'Inisiatif', 0.15, 2022),
('PN002', 'AD002', 'Keaktifan', 0.15, 2022),
('PN003', 'AD002', 'Komunikasi', 0.1, 2022),
('PN004', 'AD002', 'TJ Peran', 0.2, 2022),
('PN005', 'AD002', 'TepatHadir', 0.2, 2022),
('PN006', 'AD002', 'Sikap', 0.2, 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID_Admin`),
  ADD KEY `ID_Akses` (`ID_Akses`);

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`ID_Akses`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_Anggota`),
  ADD KEY `ID_Akses` (`ID_Akses`),
  ADD KEY `ID_Admin` (`ID_Admin`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`ID_Kandidat`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `ID_Kandidat` (`ID_Kandidat`),
  ADD KEY `ID_PoinNilai` (`ID_PoinNilai`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `poinnilai`
--
ALTER TABLE `poinnilai`
  ADD PRIMARY KEY (`ID_PoinNilai`),
  ADD KEY `ID_Admin` (`ID_Admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`ID_Akses`) REFERENCES `akses` (`ID_Akses`);

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`ID_Akses`) REFERENCES `akses` (`ID_Akses`),
  ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`ID_Admin`) REFERENCES `administrator` (`ID_Admin`);

--
-- Constraints for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD CONSTRAINT `kandidat_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `akses` (`ID_Akses`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`ID_Kandidat`) REFERENCES `kandidat` (`ID_Kandidat`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`ID_PoinNilai`) REFERENCES `poinnilai` (`ID_PoinNilai`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`ID_User`) REFERENCES `akses` (`ID_Akses`);

--
-- Constraints for table `poinnilai`
--
ALTER TABLE `poinnilai`
  ADD CONSTRAINT `poinnilai_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `administrator` (`ID_Admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
