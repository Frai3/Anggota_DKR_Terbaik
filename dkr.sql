-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 06:19 PM
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
('AK001', 'RL001', 'zikri', 'zikri'),
('AK002', 'RL001', 'fillah', 'fillah'),
('AK003', 'RL002', 'meilizke', 'meilizke'),
('AK004', 'RL002', 'kendanan', 'kendanan'),
('AK005', 'RL002', 'alya', 'alya'),
('AK006', 'RL002', 'bayu', 'bayu'),
('AK007', 'RL002', 'regis', 'regis'),
('AK008', 'RL002', 'revaldy', 'revaldy'),
('AK009', 'RL002', 'rangga', 'rangga');

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
('US001', 'RL001', 'AK001', 'Muara Zikri', 'SMA Alfityan', '-', 'Penegak', '2022-02-25'),
('US002', 'RL001', 'AK001', 'Fillah Munaya', 'SMKN 7 Kab. Tangeran', '-', 'Penegak', '2022-02-25'),
('US003', 'RL002', 'AK003', 'Meilizke Dwie', '-', '-', 'Penegak', '2022-02-25'),
('US004', 'RL002', 'AK004', 'Kendanan Wherespati', '-', '-', 'Penegak', '2022-02-25'),
('US005', 'RL002', 'AK005', 'Alya Dani', '-', '-', 'Penegak', '2022-02-25'),
('US006', 'RL002', 'AK006', 'Bayu Aryo', '-', '-', 'Penegak', '2022-02-25'),
('US007', 'RL002', 'AK007', 'Regis Revaldy', '-', '-', 'Penegak', '2022-02-25'),
('US008', 'RL002', 'AK008', 'Revaldy Putra', '-', '-', 'Penegak', '2022-02-25'),
('US009', 'RL002', 'AK009', 'Rangga Satria', '-', '-', 'Penegak', '2022-02-25');

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
