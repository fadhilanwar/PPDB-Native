-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 03:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpendaftaran`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `kodeauto`
-- (See below for the actual view)
--
CREATE TABLE `kodeauto` (
`idpetugas` varchar(11)
,`nourut` double
);

-- --------------------------------------------------------

--
-- Table structure for table `t_daftar`
--

CREATE TABLE `t_daftar` (
  `idpendaftaran` varchar(11) NOT NULL,
  `namapendaftar` varchar(52) NOT NULL,
  `asalsekolah` varchar(30) NOT NULL,
  `jeniskelamin` varchar(12) NOT NULL,
  `jurusan` varchar(52) NOT NULL,
  `agama` varchar(22) NOT NULL,
  `alamat` text NOT NULL,
  `namaayah` varchar(52) NOT NULL,
  `namaibu` varchar(52) NOT NULL,
  `notlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_daftar`
--

INSERT INTO `t_daftar` (`idpendaftaran`, `namapendaftar`, `asalsekolah`, `jeniskelamin`, `jurusan`, `agama`, `alamat`, `namaayah`, `namaibu`, `notlp`) VALUES
('DFT001', 'Fadhil Anwar Ahsani', 'SMPN 1 Margaasih', 'Laki-Laki', '1. Rekayasa Perangkat Lunak', 'Islam', 'JL. Anggrek Blok U5 No 16', 'Nero', 'Forte', '082320459531'),
('DFT002', 'Beckham', 'SMPN 1 Margaasih', 'Laki-Laki', '1. Rekayasa Perangkat Lunak', 'Islam', 'JL. Cadas Pangeran', 'Riki', 'Rini', '089767564534'),
('DFT003', 'M Arfan', 'SMPN 1 Margaasih', 'Laki-Laki', '1. Rekayasa Perangkat Lunak', 'Islam', 'JL. Hiu No. 2469', 'Rei', 'Reini', '089768563542'),
('DFT004', 'Riski Putra', 'SMPN 1 Jatinangor', 'Laki-Laki', '1. Rekayasa Perangkat Lunak', 'Kristen', 'JL. Hiu No. 246', 'Rei', 'Reini', '089768563542');

-- --------------------------------------------------------

--
-- Table structure for table `t_informasipendaftar`
--

CREATE TABLE `t_informasipendaftar` (
  `idpendaftaran` varchar(32) NOT NULL,
  `nama` varchar(52) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `asalsekolah` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `idkelas` varchar(32) NOT NULL,
  `namakelas` varchar(52) NOT NULL,
  `jurusan` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_kelas`
--

INSERT INTO `t_kelas` (`idkelas`, `namakelas`, `jurusan`) VALUES
('xrpla', 'X RPL A', 'Rekayasa Perangkat Lunak'),
('xrplb', 'X RPL B', 'Rekayasa Perangkat Lunak'),
('xrplc', 'X RPL C', 'Rekayasa Perangkat Lunak'),
('xrpld', 'X RPL D', 'Rekayasa Perangkat Lunak'),
('xteia', 'X TEI A', 'Teknik Elektronika industri'),
('xteib', 'X TEI B', 'Teknik Elektronika industri'),
('xtkja', 'X TKJ B', 'Teknik Komputer dan Jaringan'),
('xtkjb', 'X TKJ B', 'Teknik Komputer dan Jaringan'),
('xtpa', 'X TP A', 'Teknik Pendingin dan Tata Udara'),
('xtpb', 'X TP B', 'Teknik Pendingin dan Tata Udara');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilai`
--

CREATE TABLE `t_nilai` (
  `idpendaftaran` varchar(32) NOT NULL,
  `bindonesia` int(11) NOT NULL,
  `binggris` int(11) NOT NULL,
  `matematika` int(11) NOT NULL,
  `ratarata` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_nilai`
--

INSERT INTO `t_nilai` (`idpendaftaran`, `bindonesia`, `binggris`, `matematika`, `ratarata`) VALUES
('DFT001', 95, 80, 88, 87.777),
('DFT002', 79, 85, 75, 79.6667),
('DFT003', 85, 90, 75, 83.3333),
('DFT004', 90, 80, 75, 81.6667);

-- --------------------------------------------------------

--
-- Table structure for table `t_penerimaan`
--

CREATE TABLE `t_penerimaan` (
  `idpendaftaran` varchar(32) NOT NULL,
  `idkelas` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jeniskelamin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_penerimaan`
--

INSERT INTO `t_penerimaan` (`idpendaftaran`, `idkelas`, `nama`, `jeniskelamin`) VALUES
('DFT001', 'X RPL A', 'Fadhil Anwar Ahsani', 'Laki-Laki'),
('DFT002', 'X RPL C', 'Beckham', 'Laki-Laki'),
('DFT003', 'X RPL A', 'M Arfan', 'Laki-Laki'),
('DFT004', 'X RPL B', 'Riski Putra', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `t_statuspenerimaan`
--

CREATE TABLE `t_statuspenerimaan` (
  `idpendaftaran` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jeniskelamin` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_statuspenerimaan`
--

INSERT INTO `t_statuspenerimaan` (`idpendaftaran`, `nama`, `jeniskelamin`, `status`) VALUES
('DFT001', 'Fadhil Anwar Ahsani', 'Laki-Laki', 'Lolos'),
('DFT002', 'Beckham', 'Laki-Laki', 'Lolos'),
('DFT003', 'M Arfan', 'Laki-Laki', 'Lolos'),
('DFT004', 'Riski Putra', 'Laki-Laki', 'Tidak Lolos');

-- --------------------------------------------------------

--
-- Table structure for table `t_userlogin`
--

CREATE TABLE `t_userlogin` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','panitia','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_userlogin`
--

INSERT INTO `t_userlogin` (`id`, `nama`, `username`, `password`, `level`) VALUES
('ADM1', 'Ewing HD', 'ewing', '0001', 'admin'),
('DFT001', 'Fadhil Anwar Ahsani', 'fadhil', '1234', 'siswa'),
('DFT002', 'Beckham', 'beckham', 'beckham', 'siswa'),
('DFT003', 'M Arfan', 'arfan', 'arfan', 'siswa'),
('DFT004', 'Riski Putra', 'riski', 'riski', 'siswa');

-- --------------------------------------------------------

--
-- Structure for view `kodeauto`
--
DROP TABLE IF EXISTS `kodeauto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kodeauto`  AS SELECT `t_userlogin`.`id` AS `idpetugas`, right(`t_userlogin`.`id`,3) + 1 AS `nourut` FROM `t_userlogin` ORDER BY `t_userlogin`.`id` AS `DESCdesc` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_daftar`
--
ALTER TABLE `t_daftar`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `t_informasipendaftar`
--
ALTER TABLE `t_informasipendaftar`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `t_penerimaan`
--
ALTER TABLE `t_penerimaan`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `t_statuspenerimaan`
--
ALTER TABLE `t_statuspenerimaan`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `t_userlogin`
--
ALTER TABLE `t_userlogin`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
