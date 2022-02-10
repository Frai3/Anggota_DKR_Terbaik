-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 05:38 PM
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
-- Database: `dkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `ID_Akses` char(5) NOT NULL,
  `ID_Role` char(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`ID_Akses`, `ID_Role`, `Username`, `Password`) VALUES
('AK001', 'RL001', 'farhan', 'farhan'),
('AK002', 'RL002', 'raihan', 'raihan'),
('AK003', 'RL001', 'frai', 'frai'),
('AK004', 'RL002', 'ray', 'ray'),
('AK005', 'RL002', 'mark', 'mark');

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

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`ID_Nilai`, `ID_UserIn`, `ID_UserOut`, `TJPeran`, `TepatHadir`, `Keaktifan`, `Inisiatif`, `Sikap`, `Komunikasi`, `Periode`) VALUES
('NL001', 'US002', 'US001', '90', '90', '90', '90', '90', '90', 2022),
('NL002', 'US003', 'US001', '80', '80', '80', '80', '80', '80', 2022),
('NL003', 'US004', 'US001', '70', '70', '70', '70', '70', '70', 2022),
('NL004', 'US005', 'US001', '60', '60', '60', '60', '60', '60', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `ID_Notif` char(5) NOT NULL,
  `ID_User` char(5) NOT NULL,
  `PoinPenilaian` varchar(50) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID_Role` char(5) NOT NULL,
  `ID_User` char(5) NOT NULL,
  `Nama_Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID_Role`, `ID_User`, `Nama_Role`) VALUES
('RL001', 'US001', 'administrator'),
('RL002', 'US002', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` char(5) NOT NULL,
  `ID_Role` char(5) NOT NULL,
  `ID_Akses` char(5) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Sekolah` varchar(20) NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Golongan` varchar(10) NOT NULL,
  `TglUpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `ID_Role`, `ID_Akses`, `Nama_User`, `Sekolah`, `NoTelp`, `Golongan`, `TglUpdate`) VALUES
('US001', 'RL001', 'AK001', 'Farhan', 'SMA 1', '08465123515', 'Penegak', '2022-02-08'),
('US002', 'RL002', 'AK002', 'Raihan', 'SMA 1', '08464213515', 'Penegak', '2022-02-08'),
('US003', 'RL001', 'AK003', 'Frai', 'SMAN 3', '0846458468', 'Pandega', '2022-02-08'),
('US004', 'RL002', 'AK004', 'Ray', 'SMA 4', '0846458432', 'Pandega', '2022-02-08'),
('US005', 'RL002', 'AK005', 'Mark', 'SMA 2', '08464521378', 'Penegak', '2022-02-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`ID_Akses`),
  ADD KEY `ID_Role` (`ID_Role`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`ID_Nilai`),
  ADD KEY `ID_User` (`ID_UserIn`),
  ADD KEY `ID_UserOut` (`ID_UserOut`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_Role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`),
  ADD KEY `ID_Role` (`ID_Role`),
  ADD KEY `ID_Akses` (`ID_Akses`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akses`
--
ALTER TABLE `akses`
  ADD CONSTRAINT `akses_ibfk_1` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`ID_Role`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`ID_UserIn`) REFERENCES `user` (`ID_User`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`ID_UserOut`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`ID_Role`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`ID_Akses`) REFERENCES `akses` (`ID_Akses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
