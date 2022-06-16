-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 02:04 PM
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
  `TglUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID_Admin`, `ID_Akses`, `Nama_User`, `Sekolah`, `NoTelp`, `Golongan`, `TglUpdate`) VALUES
('AD001', 'AK001', 'Muara Zikri', 'SMA Al Fityan', '-', 'Penegak', '2022-06-15'),
('AD002', 'AK002', 'Fillah Munaya', '-', '-', '-', '2022-06-14');

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
('AK001', 'zikri', 'zikri'),
('AK002', 'fillah', 'fillah'),
('AK003', 'meilizka', 'meilizka'),
('AK004', 'kendanan', 'kendanan'),
('AK005', 'alya', 'alya'),
('AK006', 'bayu', 'bayu'),
('AK007', 'regis', 'regis'),
('AK008', 'revaldy', 'revaldy'),
('AK009', 'rangga', 'rangga');

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
  `TglUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID_Anggota`, `ID_Admin`, `ID_Akses`, `Nama_User`, `Sekolah`, `NoTelp`, `Golongan`, `TglUpdate`) VALUES
('US001', 'AD001', 'AK003', 'Meilizka Dwie', 'SMKN 7', '-', 'Pandega', '2022-06-15'),
('US002', 'AD001', 'AK004', 'Kendanan Wherespati', '-', '-', 'Penegak', '2022-02-25'),
('US003', 'AD001', 'AK005', 'Alya Dani', '-', '-', 'Penegak', '2022-02-25'),
('US004', 'AD001', 'AK006', 'Bayu Aryo', '-', '-', 'Penegak', '2022-02-25'),
('US005', 'AD002', 'AK007', 'Regis Revaldy', '-', '-', 'Penegak', '2022-02-25'),
('US006', 'AD002', 'AK008', 'Revaldy Putra', '-', '-', 'Penegak', '2022-02-25'),
('US007', 'AD002', 'AK009', 'Rangga Satria', '-', '-', 'Penegak', '2022-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `ID_Nilai` char(5) NOT NULL,
  `ID_UserIn` char(5) NOT NULL,
  `ID_UserOut` char(5) NOT NULL,
  `TJPeran` char(5) NOT NULL,
  `TepatHadir` char(5) NOT NULL,
  `Keaktifan` char(5) NOT NULL,
  `Inisiatif` char(5) NOT NULL,
  `Sikap` char(5) NOT NULL,
  `Komunikasi` char(5) NOT NULL,
  `Periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `ID_Notif` char(5) NOT NULL,
  `ID_Admin` char(5) NOT NULL,
  `PoinPenilaian` varchar(50) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`ID_Nilai`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`ID_Notif`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
