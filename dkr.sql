-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 09:19 AM
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
('AK003', 'RL002', 'meilizka', 'meilizka'),
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

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`ID_Nilai`, `ID_UserIn`, `ID_UserOut`, `TJPeran`, `TepatHadir`, `Keaktifan`, `Inisiatif`, `Sikap`, `Komunikasi`, `Periode`) VALUES
('NL001', 'US002', 'US001', '80', '80', '80', '80', '80', '70', 2022),
('NL002', 'US003', 'US001', '90', '90', '90', '50', '50', '50', 2022),
('NL003', 'US004', 'US001', '80', '80', '50', '50', '20', '100', 2022),
('NL004', 'US005', 'US001', '90', '90', '90', '80', '80', '80', 2022),
('NL005', 'US006', 'US001', '100', '100', '50', '50', '90', '80', 2022),
('NL006', 'US007', 'US001', '80', '80', '80', '90', '50', '50', 2022),
('NL007', 'US008', 'US001', '80', '80', '80', '90', '90', '70', 2022),
('NL008', 'US009', 'US001', '80', '80', '80', '80', '90', '90', 2022),
('NL009', 'US001', 'US002', '80', '80', '90', '90', '90', '50', 2022),
('NL010', 'US003', 'US002', '90', '90', '90', '50', '50', '50', 2022),
('NL011', 'US004', 'US002', '70', '70', '70', '50', '80', '80', 2022),
('NL012', 'US005', 'US002', '80', '80', '80', '90', '90', '90', 2022),
('NL013', 'US006', 'US002', '90', '90', '90', '80', '80', '80', 2022),
('NL014', 'US007', 'US002', '90', '90', '90', '80', '80', '80', 2022),
('NL015', 'US008', 'US002', '70', '70', '70', '80', '90', '90', 2022),
('NL016', 'US009', 'US002', '70', '70', '70', '90', '80', '80', 2022),
('NL017', 'US001', 'US003', '90', '80', '80', '90', '80', '70', 2022),
('NL018', 'US002', 'US003', '90', '80', '80', '70', '70', '80', 2022),
('NL019', 'US004', 'US003', '90', '90', '70', '70', '70', '70', 2022),
('NL020', 'US005', 'US003', '80', '80', '90', '90', '70', '70', 2022),
('NL021', 'US006', 'US003', '70', '70', '80', '90', '70', '70', 2022),
('NL022', 'US007', 'US003', '70', '70', '70', '70', '70', '70', 2022),
('NL023', 'US008', 'US003', '90', '80', '70', '70', '90', '80', 2022),
('NL024', 'US009', 'US003', '90', '90', '80', '70', '70', '70', 2022),
('NL025', 'US001', 'US004', '80', '90', '80', '80', '70', '70', 2022),
('NL026', 'US002', 'US004', '80', '90', '90', '90', '70', '70', 2022),
('NL027', 'US003', 'US004', '70', '70', '70', '70', '70', '70', 2022),
('NL028', 'US005', 'US004', '80', '90', '70', '70', '80', '90', 2022),
('NL029', 'US006', 'US004', '80', '90', '90', '70', '70', '70', 2022),
('NL030', 'US007', 'US004', '90', '70', '80', '60', '70', '70', 2022),
('NL031', 'US008', 'US004', '80', '80', '80', '80', '80', '80', 2022),
('NL032', 'US009', 'US004', '90', '80', '80', '70', '70', '70', 2022),
('NL033', 'US001', 'US005', '90', '80', '80', '70', '70', '70', 2022),
('NL034', 'US002', 'US005', '80', '80', '70', '70', '70', '90', 2022),
('NL035', 'US003', 'US005', '80', '80', '80', '80', '80', '80', 2022),
('NL036', 'US004', 'US005', '90', '90', '50', '50', '50', '50', 2022),
('NL037', 'US006', 'US005', '80', '80', '80', '90', '90', '90', 2022),
('NL038', 'US007', 'US005', '80', '80', '90', '90', '70', '70', 2022),
('NL039', 'US008', 'US005', '70', '70', '70', '70', '80', '90', 2022),
('NL040', 'US009', 'US005', '80', '90', '90', '90', '90', '90', 2022),
('NL041', 'US001', 'US006', '90', '90', '70', '70', '70', '70', 2022),
('NL042', 'US002', 'US006', '70', '70', '70', '70', '70', '70', 2022),
('NL043', 'US003', 'US006', '80', '80', '90', '90', '70', '70', 2022),
('NL044', 'US004', 'US006', '90', '90', '80', '80', '70', '70', 2022),
('NL045', 'US005', 'US006', '70', '70', '80', '80', '80', '80', 2022),
('NL046', 'US007', 'US006', '80', '80', '90', '90', '90', '90', 2022),
('NL047', 'US008', 'US006', '90', '90', '70', '70', '70', '70', 2022),
('NL048', 'US009', 'US006', '80', '80', '90', '90', '90', '70', 2022),
('NL049', 'US001', 'US007', '80', '80', '80', '90', '90', '90', 2022),
('NL050', 'US002', 'US007', '80', '80', '70', '70', '70', '70', 2022),
('NL051', 'US003', 'US007', '80', '80', '90', '90', '90', '90', 2022),
('NL052', 'US004', 'US007', '80', '80', '70', '70', '70', '70', 2022),
('NL053', 'US005', 'US007', '90', '90', '80', '80', '80', '80', 2022),
('NL054', 'US006', 'US007', '70', '70', '70', '70', '70', '70', 2022),
('NL055', 'US008', 'US007', '80', '80', '90', '90', '90', '70', 2022),
('NL056', 'US009', 'US007', '70', '70', '70', '70', '70', '80', 2022),
('NL057', 'US001', 'US008', '90', '90', '80', '80', '80', '80', 2022),
('NL058', 'US002', 'US008', '80', '80', '70', '70', '70', '70', 2022),
('NL059', 'US003', 'US008', '80', '80', '80', '90', '90', '90', 2022),
('NL060', 'US004', 'US008', '70', '70', '70', '80', '80', '80', 2022),
('NL061', 'US005', 'US008', '80', '80', '80', '90', '90', '90', 2022),
('NL062', 'US006', 'US008', '80', '80', '80', '80', '80', '80', 2022),
('NL063', 'US007', 'US008', '90', '90', '90', '90', '80', '80', 2022),
('NL064', 'US009', 'US008', '70', '70', '70', '80', '80', '80', 2022),
('NL065', 'US001', 'US009', '80', '80', '90', '90', '90', '90', 2022),
('NL066', 'US002', 'US009', '80', '80', '80', '70', '70', '70', 2022),
('NL067', 'US003', 'US009', '70', '70', '70', '80', '80', '80', 2022),
('NL068', 'US004', 'US009', '80', '80', '70', '70', '90', '90', 2022),
('NL069', 'US005', 'US009', '90', '90', '80', '80', '80', '80', 2022),
('NL070', 'US006', 'US009', '80', '80', '70', '70', '70', '70', 2022),
('NL071', 'US007', 'US009', '90', '90', '80', '80', '80', '80', 2022),
('NL072', 'US008', 'US009', '70', '70', '70', '80', '80', '80', 2022);

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

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`ID_Notif`, `ID_User`, `PoinPenilaian`, `Keterangan`) VALUES
('PN001', 'US001', 'Tugas-tugas', 'Tambah'),
('PN002', 'US001', 'Sikap', 'Hapus');

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
('US002', 'RL001', 'AK002', 'Fillah Munaya', 'SMKN 7 Kab. Tangeran', '-', 'Penegak', '2022-02-25'),
('US003', 'RL002', 'AK003', 'Meilizka Dwie', '-', '-', 'Penegak', '2022-02-25'),
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
