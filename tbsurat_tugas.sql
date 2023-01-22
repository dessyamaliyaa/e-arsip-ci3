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
-- Struktur dari tabel `tbsurat_tugas`
--

CREATE TABLE `tbsurat_tugas` (
  `id_surat_tugas` int(3) NOT NULL,
  `kode_jenis` int(11) NOT NULL,
  `id_surat_masuk` int(3) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(5) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `no_surat_tugas` varchar(50) NOT NULL,
  `ditetapkan` varchar(10) NOT NULL,
  `tgl_penetapan_stugas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsurat_tugas`
--

INSERT INTO `tbsurat_tugas` (`id_surat_tugas`, `kode_jenis`, `id_surat_masuk`, `keperluan`, `hari`, `tanggal`, `waktu`, `tempat`, `no_surat_tugas`, `ditetapkan`, `tgl_penetapan_stugas`) VALUES
(1, 0, 1, 'Surat Tugas Mengikuti Sosialisasi Penghitungan Analisis Beban Kerja', 'Rabu', '2018-01-03', '08:00', '-', '800/001/2018', '-', '2018-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsurat_tugas`
--
ALTER TABLE `tbsurat_tugas`
  ADD PRIMARY KEY (`id_surat_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbsurat_tugas`
--
ALTER TABLE `tbsurat_tugas`
  MODIFY `id_surat_tugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
