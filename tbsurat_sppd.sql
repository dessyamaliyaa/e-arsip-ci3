-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2018 pada 03.19
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simasku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsurat_sppd`
--

CREATE TABLE `tbsurat_sppd` (
  `id_surat_sppd` int(3) NOT NULL,
  `id_surat_tugas` int(3) NOT NULL,
  `kode_jenis` int(11) NOT NULL,
  `kuasa_pengguna_anggaran` varchar(50) NOT NULL,
  `alat_angkut` varchar(20) NOT NULL,
  `tempat_berangkat` varchar(30) NOT NULL,
  `tempat_tujuan` varchar(30) NOT NULL,
  `lamanya_perjalanan_dinas` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `pengikut` varchar(30) NOT NULL,
  `skpd` varchar(30) NOT NULL,
  `akun` varchar(30) NOT NULL,
  `dikeluarkan` varchar(10) NOT NULL,
  `tgl_penetapan_ssppd` date NOT NULL,
  `no_surat_sppd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsurat_sppd`
--

INSERT INTO `tbsurat_sppd` (`id_surat_sppd`, `id_surat_tugas`, `kode_jenis`, `kuasa_pengguna_anggaran`, `alat_angkut`, `tempat_berangkat`, `tempat_tujuan`, `lamanya_perjalanan_dinas`, `tanggal_berangkat`, `tanggal_kembali`, `pengikut`, `skpd`, `akun`, `dikeluarkan`, `tgl_penetapan_ssppd`, `no_surat_sppd`) VALUES
(1, 1, 0, 'Kepala SMA Negeri 1 Kesesi', 'Pribadi', 'SMA N 1 Kesesi', 'SMA N 1 Kedungwuni', '1 hari', '2018-01-20', '2018-01-20', '-', 'SMA N 1 Kesesi', '-', '-', '2018-01-20', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsurat_sppd`
--
ALTER TABLE `tbsurat_sppd`
  ADD PRIMARY KEY (`id_surat_sppd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbsurat_sppd`
--
ALTER TABLE `tbsurat_sppd`
  MODIFY `id_surat_sppd` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
