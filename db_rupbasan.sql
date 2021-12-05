-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 09:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rupbasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `prosedur_a`
--

CREATE TABLE `prosedur_a` (
  `id_prosedura` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `spp` varchar(100) NOT NULL,
  `sip` varchar(100) NOT NULL,
  `spdip` varchar(100) NOT NULL,
  `ba` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prosedur_b`
--

CREATE TABLE `prosedur_b` (
  `id_prosedurb` int(3) NOT NULL,
  `nama_prosedur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prosedur_b`
--

INSERT INTO `prosedur_b` (`id_prosedurb`, `nama_prosedur`) VALUES
(1, 'Perkara Dihentikan Karena Tidak Cukup Bukti'),
(2, 'Perkara Belum Merupakan Suatu Tindak Pidana '),
(3, 'Perkara Dihentikan Untuk Kepentingan Umum'),
(4, 'Tindakan Jual Lelang'),
(5, 'Pengeluaran Basan Atas Pejabat Yang Berwenang Untuk Pinjam Pakai');

-- --------------------------------------------------------

--
-- Table structure for table `prosedur_b_g`
--

CREATE TABLE `prosedur_b_g` (
  `id_prob_g` int(4) NOT NULL,
  `id_prosedurb` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `BAPel` varchar(50) NOT NULL,
  `BAPL` varchar(50) NOT NULL,
  `BAPen` varchar(50) NOT NULL,
  `SPP` varchar(50) NOT NULL,
  `SIP` varchar(50) NOT NULL,
  `Spen` varchar(50) NOT NULL,
  `Sper` varchar(50) NOT NULL,
  `SPePe` varchar(50) NOT NULL,
  `SPDIB` varchar(50) NOT NULL,
  `SPD2` varchar(50) NOT NULL,
  `SPDKA` varchar(50) NOT NULL,
  `PLPT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prosedur_c`
--

CREATE TABLE `prosedur_c` (
  `id_prosedurc` int(3) NOT NULL,
  `nama_prosedur` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prosedur_c`
--

INSERT INTO `prosedur_c` (`id_prosedurc`, `nama_prosedur`) VALUES
(1, 'Basan Baran Dikembalikan Kepada Pemilik/Berhak'),
(2, 'Basan Baran Dirampas Oleh Negara Untuk Dilelang, Dll\r\nDan Atau Disimpan Dirupbasan Sebagai Barang Bukti'),
(3, 'Basan Baran Setelah Proses Penghapusan');

-- --------------------------------------------------------

--
-- Table structure for table `prosedur_c_g`
--

CREATE TABLE `prosedur_c_g` (
  `id_proc_g` int(4) NOT NULL,
  `id_prosedurc` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `BAP` varchar(100) NOT NULL,
  `SPDIB` varchar(100) NOT NULL,
  `SPP` varchar(100) NOT NULL,
  `SPDIT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `jabatan`, `instansi`, `email`, `nohp`, `password`, `level`) VALUES
(1, 'Administrator', 'Administrator', 'Rupbasan Kelas 1 Surakarta', 'admin', '08578942123', 'admin', 'admin'),
(3, 'Galang Krisnawa Bhakti', 'Kasatlantas', 'Satlantas Salatiga', 'galangk.computer@gmail.com', '08995740215', 'gnomek12', 'user'),
(4, 'Alberaldo Difra G', 'Sekretaris', 'Dinas Sosial Surakarta', 'alberaldo@gmail.com', '082148882382', 'aldo123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prosedur_a`
--
ALTER TABLE `prosedur_a`
  ADD PRIMARY KEY (`id_prosedura`),
  ADD KEY `id_prosedura_user` (`id_user`);

--
-- Indexes for table `prosedur_b`
--
ALTER TABLE `prosedur_b`
  ADD PRIMARY KEY (`id_prosedurb`);

--
-- Indexes for table `prosedur_b_g`
--
ALTER TABLE `prosedur_b_g`
  ADD PRIMARY KEY (`id_prob_g`),
  ADD KEY `fk_prosedurbg` (`id_prosedurb`);

--
-- Indexes for table `prosedur_c`
--
ALTER TABLE `prosedur_c`
  ADD PRIMARY KEY (`id_prosedurc`);

--
-- Indexes for table `prosedur_c_g`
--
ALTER TABLE `prosedur_c_g`
  ADD PRIMARY KEY (`id_proc_g`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prosedur_a`
--
ALTER TABLE `prosedur_a`
  MODIFY `id_prosedura` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prosedur_b`
--
ALTER TABLE `prosedur_b`
  MODIFY `id_prosedurb` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prosedur_b_g`
--
ALTER TABLE `prosedur_b_g`
  MODIFY `id_prob_g` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prosedur_c`
--
ALTER TABLE `prosedur_c`
  MODIFY `id_prosedurc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prosedur_c_g`
--
ALTER TABLE `prosedur_c_g`
  MODIFY `id_proc_g` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prosedur_a`
--
ALTER TABLE `prosedur_a`
  ADD CONSTRAINT `id_prosedura_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `prosedur_b_g`
--
ALTER TABLE `prosedur_b_g`
  ADD CONSTRAINT `fk_prosedurbg` FOREIGN KEY (`id_prosedurb`) REFERENCES `prosedur_b` (`id_prosedurb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
