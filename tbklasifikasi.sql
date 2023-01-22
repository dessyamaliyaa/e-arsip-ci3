-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2018 pada 18.41
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
-- Struktur dari tabel `tbklasifikasi`
--

CREATE TABLE `tbklasifikasi` (
  `id_klasifikasi` int(4) NOT NULL,
  `kode_jenis` int(11) NOT NULL,
  `kode_klasifikasi` varchar(8) NOT NULL,
  `klasifikasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbklasifikasi`
--

INSERT INTO `tbklasifikasi` (`id_klasifikasi`, `kode_jenis`, `kode_klasifikasi`, `klasifikasi`) VALUES
(1, 0, '001', 'Lambang'),
(2, 0, '001.1', 'Garuda'),
(3, 0, '001.2', 'Bendera Kebangsaan'),
(4, 0, '001.3', 'Daerah(Provinsi/Kabupaten/Kota)'),
(5, 0, '001.4', 'Bandir/Umbul-umbul'),
(6, 0, '002', 'Tanda Kehormatan/Penghargaan(Khusus untuk Non PNS)'),
(7, 0, '002.1', 'Bintang'),
(8, 0, '002.2', 'Satyalencana'),
(9, 0, '002.3', 'Satyakarya Nugraha'),
(10, 0, '002.4', 'Penghargaan secara adat'),
(11, 0, '002.5', 'Penghargaan lainnya(Kalpataru, Upakarti, Adipura, dsb)'),
(12, 0, '003', 'Hari Raya/Besar\r\n'),
(13, 0, '003.1', 'Nasional(17 Agustus, Hari Pahlawan, Hari Anak, Hari HKSN dsb)'),
(14, 0, '003.2', 'Keagamaan'),
(15, 0, '003.3', 'Hari Ulang Tahun/HUT (Hari Jadi Provinsi/Kab/Kota)'),
(16, 0, '004', 'Ucapan '),
(17, 0, '004.1', 'Terima Kasih'),
(18, 0, '004.2', 'Selamat'),
(19, 0, '004.3', 'Mohon diri'),
(20, 0, '004.4', 'Bela sungkawa'),
(21, 0, '004.5', 'Ucapan lainnya'),
(22, 0, '005', 'Undangan'),
(23, 0, '006', 'Tanda Jabatan'),
(24, 0, '006.1', 'Pamong Praja'),
(25, 0, '006.2', 'Pejabat lainnya'),
(26, 10, '011', 'Gedung kantor, termasuk instalasi'),
(27, 10, '011.1', 'Listrik'),
(28, 10, '011.2', 'Telepon'),
(29, 10, '011.3', 'Otomasi'),
(30, 10, '011.4', 'Air Minum'),
(31, 10, '011.5', 'Hidrant'),
(32, 10, '011.6', 'Alarm'),
(33, 10, '011.7', 'Internet'),
(34, 10, '012', 'RUmah Dinas'),
(35, 10, '013', 'Akomodasi/Persinggahan(Mess/Wisma/Hotel)'),
(36, 10, '014', 'Rumah susun/apartemen'),
(37, 10, '015', 'Peminjaman sarana prasarana kantor(ruangan, gedung, kendaraan, LCD, laptop dll)'),
(38, 10, '016', 'Pengurusan kendaraan dinas'),
(39, 10, '017', 'Keamanan/ketertiban kantor'),
(40, 10, '018', 'Kebersihan kantor'),
(41, 10, '019', 'Protokol'),
(42, 10, '019.1', 'Upacara bendera'),
(43, 10, '019.2', 'Tata tempat'),
(44, 10, '019.21', 'Pemasangan gambar Presiden/Wakil Presiden'),
(45, 10, '019.3', 'Audiensi'),
(46, 10, '019.4', 'Penerimaan Tamu'),
(47, 10, '019.5', 'Kerjasama'),
(48, 20, '021', 'Penawaran'),
(49, 20, '021.1', 'Penawaran barang'),
(50, 20, '021.2', 'Penawaran jasa'),
(51, 20, '022', 'Barang'),
(52, 20, '022.1', 'Barang bergerak'),
(53, 20, '022.2', 'Barang tidak bergerak'),
(54, 20, '023', 'Jasa'),
(55, 20, '024', '-'),
(56, 20, '025', '-'),
(57, 20, '026', '-'),
(58, 20, '027', 'Pengadaan ternasuk pengumuman pengadaan, penunjukkan, lelang'),
(59, 20, '027.1', 'Prakualifikasi: rapat persiapan, HPS, penjelasan pekerjaan/anwijzing, negosiasi, evaluasi'),
(60, 20, '027.2', 'SPK, Kontrak/amandemen/Addendum,Teguran'),
(61, 20, '027.3', 'Surat Perintah Mulai Kerja(SPMK)'),
(62, 20, '027.4', 'Serah terima pekerjaan'),
(63, 20, '027.5', 'Pemeriksaan pekerjaan'),
(64, 20, '027.6', 'Perpanjangan waktu/force majure'),
(65, 20, '027.7', 'Denda'),
(66, 20, '027.4', 'Sanggahan'),
(67, 20, '027.9', 'Pemeliharaan barang/jasa'),
(68, 20, '028', 'Inventaris'),
(69, 20, '028.1', 'Pendataan Barang Milik Negara'),
(70, 20, '028.2', 'Pemeliharaan Barang Milik Negara'),
(71, 20, '028.3', 'Penghapusan Barang Milik Negara'),
(72, 30, '031', 'Barang-Barang tidak bergerak(tanah, perkebunan, pertanian, hutan, tambak)'),
(73, 30, '032', 'Barang-Barang tidak bergerak(gedung, asrama, monumen/bangunan bersejarah dll)'),
(74, 30, '033', 'Tanaman'),
(75, 30, '034', 'Alat-Alat Berat'),
(76, 30, '035', 'Hewan'),
(77, 30, '036', 'Barang Persediaan Dalam Gudang'),
(78, 30, '037', 'Alat Pengangkut(Darat, Laut, Udara)'),
(79, 30, '038', 'Peralatan Pabrik, Laboratorium'),
(80, 30, '039', 'Peralatan Kesehatan/Medis(Rumah Sakit, Balai Pengobatan)'),
(81, 40, '041', 'Perpustakaan'),
(82, 40, '041.1', 'Pameran Bahan Perpustakaan'),
(83, 40, '041.2', 'Pengolahan (Katalog, Bibliografi)'),
(84, 40, '041.3', 'Sirkulasi/layanan'),
(85, 40, '041.31', 'Keanggotaan'),
(86, 40, '041.32', 'Peminjaman dan pengembalian'),
(87, 40, '041.4', 'Deposit'),
(88, 40, '041.5', 'Pemeliharaan, Pelestarian/alih media'),
(89, 40, '041.6', 'Pembinaan Perpustakaan'),
(90, 40, '041.61', 'Bantuan buku, rak'),
(91, 40, '041.7', 'Penghapusan/penyusutan bahan perpustakaan'),
(92, 40, '041.8', 'Jenis-Jenis Perpustakaan(Umum, Khusus, PT, Sekolah, Keliling, Masyarakat)'),
(93, 40, '041.9', 'Kemitraan, Forum Perpustakaan, Kerjasama antar Perpustakaan'),
(94, 40, '042', 'Dokumentasi'),
(95, 40, '043', '-'),
(96, 40, '044', '-'),
(97, 40, '045', 'Kearsipan'),
(98, 40, '045.1', 'Pola Klasifikasi'),
(99, 40, '045.2', 'Akuisisi Arsip'),
(100, 40, '045.3', 'Penyusutan Arsip'),
(101, 40, '045.31', 'Jadwal Retensi Arsip'),
(102, 40, '045.32', 'Penilaian Arsip'),
(103, 40, '045.33', 'Pemindahan Arsip'),
(104, 40, '045.34', 'Penyerahan Arsip'),
(105, 40, '045.35', 'Pemusnahan Arsip'),
(106, 40, '045.4', 'Pembinaan Kearsipan'),
(107, 40, '045.41', 'Pengawasan'),
(108, 40, '045.42', 'Bimbingan Kearsipan'),
(109, 40, '045.5', 'Pemeliharaan, Pelestarian/konservasi Arsip'),
(110, 40, '045.51', 'Fumigasi dan Termit Kontrol'),
(111, 40, '045.52', 'Laminasi'),
(112, 40, '045.53', 'Alih Media'),
(113, 40, '045.6', 'Layanan'),
(114, 40, '045.7', 'Pemasyarakatan'),
(115, 40, '045.71', 'Pameran'),
(116, 40, '045.72', 'Penerbitan Naskah Sumber Arsip'),
(117, 40, '045.73', 'Sosialisasi Kearsipan'),
(118, 40, '045.8', 'Pengembangan Sistem'),
(119, 40, '045.81', 'Sistem Kearsipan'),
(120, 40, '045.82', 'Sistem Jaringan Informasi Kearsipan'),
(121, 40, '046', 'Sandi'),
(122, 40, '047', 'Telegram, Telex, Radio, ISB'),
(123, 40, '048', 'Data Elektrolik'),
(124, 40, '049', '-'),
(125, 50, '050.1', 'RPJMN(Rencana Pembangunan Jangka Menengah Nasional)'),
(126, 50, '050.11', 'RENSTRA(Rencana Strategi)'),
(127, 0, '050.12', 'RPJMD(Rencana Pembangunan Jangka Menengah Daerah)'),
(128, 50, '050.13', 'RENSTRA BAPPEDA'),
(129, 50, '050.2', 'Program Nasional'),
(130, 50, '050.21', 'RKP(Rencana Kerja Pembangunan)'),
(131, 50, '050.22', 'RKA-KL(Rencana Kerja Anggaran-Kementrian Lembaga)'),
(132, 50, '050.23', 'RKPD(Rencana Kerja Pembangunan Daerah)'),
(133, 50, '050.24', 'Rencana Kerja SKPD'),
(134, 50, '050.25', 'KUA (Kebijakan Umum Anggaran), KUPA (Kebujakan Umum Perubahan Anggaran) dan PPAS (Penetapan Plafon Anggaran Sementara)'),
(135, 50, '050.26', 'Jawaban Gubernur atas pandangan fraksi'),
(136, 50, '050.27', 'Nota keuangan'),
(137, 50, '050.28', 'RKT (Rencana Kerja Tahunan)'),
(138, 50, '050.29', 'RKO (Rencana Kerja Operasional)'),
(139, 50, '051', 'Laporan'),
(140, 50, '051.1', 'Laporan berkala'),
(141, 50, '051.2', 'LAKIP (Laporan Akuntabilitas Kinerja Instansi Pemerintah)'),
(142, 50, '052', 'Evaluasi'),
(143, 50, '052.1', 'Evaluasi Rencana Strategis'),
(144, 50, '052.11', 'Evaluasi Rencana Pembangunan Jangka Menengah Daerah'),
(145, 50, '052.12', 'Evaluasi Rencana Kerja Pemerintah Daerah'),
(146, 50, '052.13', 'Evaluasi Rencana Pembangunan Jangka Menengah Daerah Kabupaten/Kota'),
(147, 50, '052.14', 'Evaluasi Rencana Kerja Pemerintah Daerah Kabupaten/Kota'),
(148, 60, '061', 'Organisasi'),
(149, 60, '061.1', 'Susunan Organisasi dan Tata Kerja'),
(150, 60, '061.2', 'Tata tertib kantor, termasuk pengaturan hari dan jam kerja pegawai '),
(151, 60, '062', 'Organisasi Badan Non Pemerintah'),
(152, 60, '063', 'Organisasi Badan Internasional'),
(153, 60, '064', 'Organisasi semi pemerintah'),
(154, 60, '065', 'Ketatalaksanaan '),
(155, 60, '065.1', 'Tata Naskah Dinas'),
(156, 60, '065.2', 'Stempel dinas dan stempel jabatan'),
(157, 60, '065.3', 'Papan nama instansi pemerintah/non pemerintah'),
(158, 60, '065.4', 'Alamat-alamat kantor dan pejabat'),
(159, 60, '065.5', 'Ketentuan pakaian dinas dan atribut'),
(160, 60, '066', 'Tata Hubungan Kerja'),
(161, 60, '067', 'Standart Operasional Prosedure'),
(162, 60, '068', 'Evaluasi dan Laporan Ketatalaksanaan'),
(163, 60, '069', 'Analisis Jabatan'),
(164, 60, '069.1', 'Pengukuran/Penilaian beban kerja Jabatan Struktural dan Fungsional '),
(165, 60, '069.2', 'Uraian Jabatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbklasifikasi`
--
ALTER TABLE `tbklasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbklasifikasi`
--
ALTER TABLE `tbklasifikasi`
  MODIFY `id_klasifikasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
