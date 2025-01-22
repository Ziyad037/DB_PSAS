-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 06:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'BUMN_KERETA_API'),
(2, 'KEMENTRIAN_DIRJEN_PAJAK'),
(3, 'SECURITY'),
(4, 'BUMN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'MASUK'),
(2, 'IZIN'),
(3, 'SAKIT'),
(4, 'ALPHA'),
(5, 'PULANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` char(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jk`, `no_hp`, `email`, `id_jurusan`, `id_kelas`, `alamat`) VALUES
('1006745008', 'FAWWAZ ZIYAD  D', 'DEPOK', '2007-03-18', 'Laki-laki', '085774087832', 'FAWWAZ_ZIYAD1@gmail.com', 4, 5, 'JALAN RADEN SALEH STUDIO ALAM TVRI ALHIDAYAH3 NO.19 RT003/RW008 SUKMAJAYA KOTA DEPOK 16414'),
('1008234001', 'FARID HIDAYAT S.PD', 'DEPOK', '2006-02-18', 'Laki-laki', '087489201548', 'FARID@gmail.com', 3, 5, 'JALAN STUDIO ALAM TVRI GANG MASJID ALHIDAYAH NO.19 RT001/RW008 SUKMAJAYA KOTA DEPOK'),
('1008234009', 'FARID HIDAYAT S.PD', 'DEPOK', '2006-02-18', 'Laki-laki', '087489201548', 'FARID@gmail.com', 3, 1, 'JALAN STUDIO ALAM TVRI GANG MASJID ALHIDAYAH NO.19 RT001/RW008 SUKMAJAYA KOTA DEPOK'),
('1008702001', 'FAWWAZ ZIYAD D', 'DEPOK', '2007-03-18', 'Laki-laki', '085774087832', 'FAWWAZ_ZIYAD@gmail.com', 4, 1, 'JALAN RADEN SALEH STUDIO ALAM TVRI ALHIDAYAH3 NO.19 RT003/RW008 SUKMAJAYA KOTA DEPOK 16412'),
('2008746520', 'FAWWAZ ZIYAD D', 'DEPOK', '2007-03-18', 'Laki-laki', '085774087832', 'FAWWAZ_ZIYAD@gmail.com', 4, 1, 'JALAN RADEN SALEH STUDIO ALAM TVRI ALHIDAYAH3 NO.19 RT003/RW008 SUKMAJAYA KOTA DEPOK 16412\r\n(JAM MASUK SHIFT SIANG)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
