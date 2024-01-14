-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2023 at 09:59 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test3`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyenxe`
--

DROP TABLE IF EXISTS `chuyenxe`;
CREATE TABLE IF NOT EXISTS `chuyenxe` (
  `machuyenxe` int NOT NULL AUTO_INCREMENT,
  `matuyen` int NOT NULL,
  `tentuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaykhoihanh` date NOT NULL,
  `giokhoihanh` time NOT NULL,
  `diemdi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diemden` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `banggia` int NOT NULL,
  PRIMARY KEY (`machuyenxe`),
  KEY `matuyen` (`matuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chuyenxe`
--

INSERT INTO `chuyenxe` (`machuyenxe`, `matuyen`, `tentuyen`, `ngaykhoihanh`, `giokhoihanh`, `diemdi`, `diemden`, `banggia`) VALUES
(59, 4250, 'TP HCM- Vũng tàu', '2024-01-02', '07:00:00', 'TP HCM', 'Vũng Tàu', 200000),
(62, 4250, 'TP HCM- Vũng tàu', '2024-01-02', '09:00:00', 'TP HCM', 'Vũng Tàu', 200000),
(63, 4250, 'TP HCM - Vũng Tàu', '2024-01-02', '12:00:00', 'TP HCM', 'Vũng Tàu', 200000),
(64, 4250, 'TP HCM - Vũng Tàu', '2024-01-02', '14:00:00', 'TP HCM', 'Vũng Tàu', 200000),
(65, 4250, 'TP HCM - Vũng Tàu', '2024-01-02', '17:00:00', 'TP HCM', 'Vũng Tàu', 200000),
(66, 4253, ' Vũng Tàu - TP HCM', '2024-01-02', '07:00:00', 'Vũng Tàu', 'TP HCM', 200000),
(67, 4253, ' Vũng Tàu - TP HCM', '2024-01-02', '09:00:00', 'Vũng Tàu', 'TP HCM', 200000),
(68, 4253, ' Vũng Tàu - TP HCM', '2024-01-02', '12:00:00', 'Vũng Tàu', 'TP HCM', 200000),
(69, 4253, ' Vũng Tàu - TP HCM', '2024-01-02', '14:00:00', 'Vũng Tàu', 'TP HCM', 200000),
(70, 4253, ' Vũng Tàu - TP HCM', '2024-01-02', '17:00:00', 'Vũng Tàu', 'TP HCM', 200000),
(71, 4254, 'TP HCM - Bến Tre', '2024-01-03', '07:00:00', 'TP HCM ', 'Bến Tre', 150000),
(72, 4254, 'TP HCM - Bến Tre', '2024-01-02', '09:00:00', 'TP HCM ', 'Bến Tre', 150000),
(73, 4254, 'TP HCM - Bến Tre', '2024-01-02', '12:00:00', 'TP HCM ', 'Bến Tre', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `dondatve`
--

DROP TABLE IF EXISTS `dondatve`;
CREATE TABLE IF NOT EXISTS `dondatve` (
  `madondatve` int NOT NULL AUTO_INCREMENT,
  `mave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `makn` int DEFAULT NULL,
  `machuyenxe` int DEFAULT NULL,
  `ten_nguoidat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi_nguoidat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dienthoai_nguoidat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diemdon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diemtra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `giokhachdat` time NOT NULL,
  `tong` int DEFAULT NULL,
  `pttt` tinyint(1) NOT NULL,
  PRIMARY KEY (`madondatve`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dondatve`
--

INSERT INTO `dondatve` (`madondatve`, `mave`, `makn`, `machuyenxe`, `ten_nguoidat`, `diachi_nguoidat`, `dienthoai_nguoidat`, `diemdon`, `diemtra`, `ngaydat`, `giokhachdat`, `tong`, `pttt`) VALUES
(58, 'FUTAZONE5188', 51, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-26', '08:32:00', 750000, 1),
(59, 'FUTAZONE1651', 80, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-26', '08:32:00', 750000, 1),
(60, 'FUTAZONE249', 33, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-13', '04:37:00', 750000, 1),
(61, 'FUTAZONE1407', 3, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-13', '04:37:00', 750000, 1),
(62, 'FUTAZONE1199', 34, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-13', '04:37:00', 750000, 1),
(63, 'FUTAZONE7764', 51, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-26', '08:42:00', 750000, 1),
(64, 'FUTAZONE5386', 48, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-31', '07:42:00', 750000, 1),
(65, 'FUTAZONE1606', 12, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(66, 'FUTAZONE687', 59, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(67, 'FUTAZONE7526', 58, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(68, 'FUTAZONE2417', 54, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(69, 'FUTAZONE7161', 33, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(70, 'FUTAZONE5915', 52, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(71, 'FUTAZONE2630', 19, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(72, 'FUTAZONE4624', 28, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(73, 'FUTAZONE4582', 56, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(74, 'FUTAZONE6975', 20, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(75, 'FUTAZONE8299', 9, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(76, 'FUTAZONE6190', 90, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(77, 'FUTAZONE2292', 77, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(78, 'FUTAZONE296', 63, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1),
(79, 'FUTAZONE4899', 73, 0, 'hiep21345', '68 Ngu phu', '0419431', 'TP HCM', 'Vung Tau', '2023-12-19', '07:47:00', 750000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenkh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sdt` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cmnd` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenkh`, `ngaysinh`, `gioitinh`, `diachi`, `sdt`, `email`, `cmnd`, `user`, `pass`, `role`) VALUES
(9, 'MCH', '2023-12-04', 'Nam', '68 Ngư phủ ', '0949619154', 'maichihiep08@gmail.com', '02203023', 'hiep', '123', 0),
(16, 'hiep', '0000-00-00', 'Nam', '9/5 ', '0912345678', 'maichihiep008@gmail.com', '1234568796', 'chiep', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taixe`
--

DROP TABLE IF EXISTS `taixe`;
CREATE TABLE IF NOT EXISTS `taixe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tentalxe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sdt` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cmnd` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maxe` int DEFAULT NULL,
  `user` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `maxe` (`maxe`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taixe`
--

INSERT INTO `taixe` (`id`, `tentalxe`, `ngaysinh`, `gioitinh`, `sdt`, `email`, `cmnd`, `maxe`, `user`, `pass`, `role`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tuyenxe`
--

DROP TABLE IF EXISTS `tuyenxe`;
CREATE TABLE IF NOT EXISTS `tuyenxe` (
  `matuyen` int NOT NULL AUTO_INCREMENT,
  `tentuyen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diemdau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `thoigian` time NOT NULL,
  PRIMARY KEY (`matuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=4257 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuyenxe`
--

INSERT INTO `tuyenxe` (`matuyen`, `tentuyen`, `diemdau`, `thoigian`) VALUES
(4250, 'TP HCM- Vũng tàu', 'Bến xe miền đông', '05:00:00'),
(4253, 'Vũng tàu - TP HCM', 'Bến xe miền đông', '05:00:00'),
(4254, 'TP HCM - Bến Tre', 'Bến xe miền đông', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vexe`
--

DROP TABLE IF EXISTS `vexe`;
CREATE TABLE IF NOT EXISTS `vexe` (
  `mave` int NOT NULL,
  `machuyenxe` int NOT NULL,
  `makn` int NOT NULL,
  `mavexe` int NOT NULL,
  `ngaydatve` date NOT NULL,
  `tong` int NOT NULL,
  PRIMARY KEY (`mave`),
  KEY `machuyenxe` (`machuyenxe`),
  KEY `makn` (`makn`),
  KEY `mavexe` (`mavexe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

DROP TABLE IF EXISTS `xe`;
CREATE TABLE IF NOT EXISTS `xe` (
  `maxe` int NOT NULL,
  `tenxe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `maloalxe` int NOT NULL,
  PRIMARY KEY (`maxe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenxe`
--
ALTER TABLE `chuyenxe`
  ADD CONSTRAINT `chuyenxe_ibfk_1` FOREIGN KEY (`matuyen`) REFERENCES `tuyenxe` (`matuyen`);

--
-- Constraints for table `taixe`
--
ALTER TABLE `taixe`
  ADD CONSTRAINT `taixe_ibfk_1` FOREIGN KEY (`maxe`) REFERENCES `xe` (`maxe`);

--
-- Constraints for table `vexe`
--
ALTER TABLE `vexe`
  ADD CONSTRAINT `vexe_ibfk_1` FOREIGN KEY (`machuyenxe`) REFERENCES `chuyenxe` (`machuyenxe`),
  ADD CONSTRAINT `vexe_ibfk_2` FOREIGN KEY (`makn`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `vexe_ibfk_3` FOREIGN KEY (`mavexe`) REFERENCES `xe` (`maxe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
