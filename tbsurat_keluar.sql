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
-- Struktur dari tabel `tbsurat_keluar`
--

CREATE TABLE `tbsurat_keluar` (
  `id_surat_keluar` int(3) NOT NULL,
  `kode_jenis` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis_surat_keluar` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl_penetapan_skeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsurat_keluar`
--

INSERT INTO `tbsurat_keluar` (`id_surat_keluar`, `kode_jenis`, `judul`, `jenis_surat_keluar`, `no_surat`, `isi`, `tgl_penetapan_skeluar`) VALUES
(0, 10, 'tidak ada judul', 'undangan', 'NOOO', '<p xss=removed>contoh</p>', '2018-04-05'),
(1, 0, 'Permohonan Penambahan Daya Listrik', 'Permohonan ', '605.2/025/2018                            ', 'Sehubungan adanya penambahan peralatan Komputer untuk menunjang pelaksanaan Ujian Nasional Berbasis Komputer di SMA Negeri 1 Kesesi Kab.Pekalongan maka diperlukan penambahan daya listrik di sekolah kami dari daya S2/3500 VA ke S2/11.000 VA dengan nomor identitas pelangganan 524531209790.\r\nBesar harapan kami dari pihak PT. PLN (Persero) Rayon Kedungwuni untuk segera dapat merealisasikan penambahan daya tersebut dan keinginan kami masih menggunakan pembayaran rekening bulanan (Pasca Bayar) karena sumber dana yang ada berasal dari Kementerian Pendidikan dan Kebudayaan.  \r\nDemikian permohonan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.\r\n', '2018-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsurat_keluar`
--
ALTER TABLE `tbsurat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
