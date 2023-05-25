-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 10:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_aset`
--

CREATE TABLE `data_aset` (
  `No` int(11) NOT NULL,
  `Aset` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Expired` date DEFAULT NULL,
  `Supplier` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_aset`
--

INSERT INTO `data_aset` (`No`, `Aset`, `Qty`, `Expired`, `Supplier`, `Cost`) VALUES
(1, 'Nutanix', 1, '2022-03-01', NULL, 125400000),
(2, 'Forti FMM', 1, '2022-07-01', '', 40700000),
(3, 'FORTI BC MKS', 1, NULL, NULL, NULL),
(4, 'FORTI GED. D', 1, NULL, NULL, NULL),
(5, 'O365 E3 pak Jae', 1, '2022-03-01', NULL, 3450000),
(6, 'Kaspersky Bekasi', 51, '2022-04-01', 'Asaba', 13620000),
(7, 'Kaspersky BC (47)', 47, '2022-10-01', 'Asaba', 15510000),
(8, 'O365 Basic 50 (tambahan)', 50, '2022-07-01', 'Asaba', 21450000),
(9, 'Maintenance Cisco PABX Ged. D', 1, '2022-08-01', 'edavos', 80312000),
(10, 'Maintenance Cisco PABX Ged. D', 1, '2022-05-01', NULL, 50559300),
(11, 'FMM- EPS Cloud Server', 1, '2022-12-01', 'TKJ', 25590000),
(12, 'Account Zoom VICON', 1, '2023-07-20', 'IPA', 2000000),
(13, 'Account Zoom LBI MSCOE', 1, '2022-06-27', 'IPA', NULL),
(14, 'Account Zoom Simon', 1, NULL, 'IPA', NULL),
(15, 'Acronis Backup (3 node)', 1, '2022-06-01', 'GUT', 42600000),
(16, 'Adobe', 2, '2022-10-01', 'Asaba', 15950000),
(17, 'Autocad Lite', 2, '2022-10-01', 'Asaba', 11400000),
(18, 'Autocad 3D', 2, NULL, 'Asaba', NULL),
(19, 'MICROSOFT TEAMS OFFICE 365', 50, '2022-10-01', 'Asaba', 19500000),
(20, 'MICROSOFT 365 APPS FOR BUSINESS UNTUK BC SURABAYA', 11, '2022-02-01', 'Asaba', 1380000),
(21, 'MICROSOFT 365  BUSINESS STANDARD( Pak FAY)', 1, '2022-02-01', 'Asaba', 1870000),
(22, 'MICROSOFT APPS FOR BUSINESS UNTUK PAK HERY DEPUTY BC BKS', 1, '2022-03-01', 'Asaba', 1600000),
(23, 'MICROSOFT 365  BUSINESS STANDARD(Pak AMP)', 1, '2022-03-01', 'Asaba', 1089000),
(24, 'Domain Fajarmasmurni.com', 1, '2022-07-20', 'Dnet', NULL),
(25, 'SSL Fajarmasmurni.com', 1, NULL, 'Dnet', NULL),
(26, 'Baracuda', 1, NULL, 'GUT', NULL),
(27, 'contoh', 1, '2022-09-15', 'contoh', 20),
(28, 'contoh 1', 1, '2022-07-29', 'contoh', 1),
(29, 'contoh 2', 1, '2022-08-11', 'contoh', 1),
(30, 'contoh 3', 1, '2022-10-20', 'contoh', 1),
(31, 'contoh 4', 1, '2022-11-17', 'contoh', 1),
(32, 'contoh 5', 1, '2022-12-22', 'contoh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inisiatif`
--

CREATE TABLE `inisiatif` (
  `id_inisiatif` int(11) NOT NULL,
  `kode_konteks` varchar(255) NOT NULL,
  `inisiatif` varchar(255) NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inisiatif`
--

INSERT INTO `inisiatif` (`id_inisiatif`, `kode_konteks`, `inisiatif`, `kode`) VALUES
(1, 'fmm', 'memecat karyawan 10', 'I004'),
(2, 'epson', 'Promosi media sosial', 'I001'),
(3, 'vinci', 'Mencari dana sponsor', 'I005'),
(7, 'fmm', 'Mencari dana sponsor', 'I003'),
(9, 'fmm', 'mencari duit yang banyak', 'I008'),
(10, 'finance', 'Mencari dana sponsor', 'I002');

-- --------------------------------------------------------

--
-- Table structure for table `konteks_resiko`
--

CREATE TABLE `konteks_resiko` (
  `kode_konteks` varchar(50) NOT NULL,
  `konteks_resiko` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `periode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konteks_resiko`
--

INSERT INTO `konteks_resiko` (`kode_konteks`, `konteks_resiko`, `nama_pemilik`, `periode`) VALUES
('apple', 'Apple', 'bil gates', '2022-09-09'),
('epson', 'Epson', 'Jrix', '2022-08-19'),
('finance', 'finance', 'febri', '2022-08-27'),
('fmm', 'Fajar Mas Murni', 'fajri', '2022-07-31'),
('linux', 'LINUX', 'CAHYO', '2022-09-01'),
('smok', 'SMOK', 'smok rpm', '2022-08-20'),
('vinci', 'VINCI', 'vape', '2022-08-18'),
('windows', 'Windows', 'Fajar', '2022-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `user_id` int(20) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `NIM` int(20) DEFAULT NULL,
  `Asal` varchar(255) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Kondisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`user_id`, `Nama`, `NIM`, `Asal`, `Tanggal_Lahir`, `Kondisi`) VALUES
(2, 'caca', 2147483647, 'jawa', '2022-07-18', 'Sehat'),
(3, 'johan garage', 1231313, 'bekasi', '2022-07-22', 'Sakit'),
(4, 'haya', 21213131, 'bandung', '2022-07-22', 'Sehat'),
(6, 'kucing', 1221312312, 'bekasi', '2022-07-22', 'Sehat'),
(7, 'hayu', 12919219, 'bandung', '2022-07-22', 'Sakit'),
(8, 'cahyo', 1231931932, 'tanggerang', '2022-07-29', 'Sakit'),
(9, 'jojo', 123831281, 'bandung', '2022-07-22', 'Sakit'),
(10, 'ojan', 2147483647, 'bekasi', '2022-07-22', 'Sehat'),
(11, 'pari', 2147483647, 'bulakkapal', '2022-07-13', 'Sehat'),
(12, 'jek', 1231319319, 'bekasi', '2022-07-22', 'Sehat'),
(13, 'edbert', 2147483647, 'jakut', '2022-07-23', 'Sakit'),
(15, 'Bagus', 1239129319, 'Bandung', '2022-08-18', 'Sakit'),
(16, 'Aldi', 987655, 'Bekasi', '2022-08-09', 'Sehat'),
(17, 'depa', 12345, 'nanjung', '2022-07-02', 'Sehat'),
(18, 'levi', 12346, 'batam', '2022-07-01', 'Sakit'),
(19, 'mus', 12347, 'pontianak', '2022-07-30', 'Sehat'),
(20, 'sila', 12348, 'singapura', '2022-09-02', 'Sehat'),
(21, 'hema', 12349, 'pekalongan', '2022-05-02', 'Sehat'),
(22, 'aril', 12340, 'bandung', '2021-07-02', 'Sakit'),
(23, 'arel', 12341, 'jakarta', '2021-07-02', 'Sehat'),
(24, 'uler', 12342, 'rawalumbu', '2021-07-02', 'Sehat'),
(25, 'singa', 12343, 'galaxy', '2021-07-02', 'Sehat'),
(26, 'gajah', 12344, 'perumnas', '2001-07-02', 'Sakit'),
(27, 'buaya', 12345, 'bulak', '2003-07-02', 'Sakit'),
(28, 'al', 12346, 'ramayan', '2004-07-02', 'Sehat'),
(29, 'el', 12347, 'bandung', '2005-07-02', 'Sakit'),
(30, 'dul', 12348, 'palembang', '2007-07-02', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `sasaran`
--

CREATE TABLE `sasaran` (
  `id_sasaran` int(20) NOT NULL,
  `sasaran` varchar(255) DEFAULT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `kode_konteks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran`
--

INSERT INTO `sasaran` (`id_sasaran`, `sasaran`, `kode`, `kode_konteks`) VALUES
(1, '10 orang membeli rumah dibali yang banyak', 'S001', 'fmm'),
(2, 'membeli kantor', 'S004', 'fmm'),
(4, 'membuat rumah', 'D001', 'epson'),
(9, 'membuat hotel', 'S002', 'finance'),
(10, 'mencari customer untuk membeli produk', 'S008', 'vinci'),
(12, 'membuat kebun', 'S003', 'finance'),
(13, 'membuat jaringan', 'S008', 'fmm'),
(14, 'mencari customer untuk membeli produk', 'S010', 'fmm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `img`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Fajri', 'mbryanpratama@gmail.com', 'default.jpg', '$2y$10$Z3aVAiwi9DCrv51CQFZpueBxQTbsFwY2aAyfvrF61BXz9o9rpGuAG', 2, 1, 1658998146),
(5, 'Fajri Bryan', 'fajri@gmail.com', 'default.jpg', '$2y$10$7qpnWiEst1hxYKSF3y8/LeFRF2EG.jiCNOwzHWtM7euiDH1GkD5Rm', 1, 1, 1659001299),
(6, 'M Fajri Bryan Pratama', 'mfajribp@student.telkomuniversity.ac.id', 'default.jpg', '$2y$10$nA7D7Nqojpq6R8KV/Xeb4uoKqk4m70Py6QhLWxzxmFWExzn3B0CWu', 2, 1, 1660183784);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judulmenu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judulmenu`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa-solid fa-fw fa-gauge-high', 1),
(2, 2, 'My Profile', 'user/profile', 'fa-solid fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_aset`
--
ALTER TABLE `data_aset`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `inisiatif`
--
ALTER TABLE `inisiatif`
  ADD PRIMARY KEY (`id_inisiatif`);

--
-- Indexes for table `konteks_resiko`
--
ALTER TABLE `konteks_resiko`
  ADD PRIMARY KEY (`kode_konteks`),
  ADD KEY `id_konteks` (`kode_konteks`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sasaran`
--
ALTER TABLE `sasaran`
  ADD PRIMARY KEY (`id_sasaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_aset`
--
ALTER TABLE `data_aset`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `inisiatif`
--
ALTER TABLE `inisiatif`
  MODIFY `id_inisiatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sasaran`
--
ALTER TABLE `sasaran`
  MODIFY `id_sasaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
