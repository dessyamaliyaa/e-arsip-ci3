-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 03:11 PM
-- Server version: 10.1.19-MariaDB
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
-- Table structure for table `gammu`
--

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(17);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  `Status` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`, `Status`) VALUES
('2018-08-02 13:14:47', '2018-08-02 13:14:31', '004B0061006D007500200062006100720075002000730061006A006100200053004D0053002000670061006B002000680061006200690073002D006800610062006900730020006B0065002000530065006D007500610020004F00700065007200610074006F0072002E0020005300690073006100200062006F006E007500730020003900200053004D005300200073002E0064002E002000700075006B0075006C002000320034003A00300030002E002000430065006B00200062006F006E007500730020002A003500350035002A00370023002E002000410079006F00200053004D00530020006C006100670069002C002000640069006A0061006D0069006E00200062006500620061007300200053004D0053002000640067006E00200049004D00330020004F006F007200650064006F006F0021', 'INDOSAT', 'Default_No_Compression', '', '+62816124', -1, 'Kamu baru saja SMS gak habis-habis ke Semua Operator. Sisa bonus 9 SMS s.d. pukul 24:00. Cek bonus *555*7#. Ayo SMS lagi, dijamin bebas SMS dgn IM3 Ooredoo!', 1, '', 'false', 0),
('2018-08-03 04:27:30', '2018-08-03 04:27:30', '005300700065007300690061006C00200064007200200049004D003300210020004B0061006D0075002000640070007400200062006F006E0075007300200031003000200053004D00530020006B0065002000530065006D007500610020004F00700065007200610074006F00720020007300640020004A0061006D00320034003A00300030002E002000430065006B0020002A003500350035002A00370023002E0020004D006100750020004F00420052004F004C002000670061006B002000680061006200690073002D006800610062006900730020003200340020004A0061006D003F00200048007500620020002A003100320033002A0031003100310023', '', 'Unicode_No_Compression', '', '', 127, 'Spesial dr IM3! Kamu dpt bonus 10 SMS ke Semua Operator sd Jam24:00. Cek *555*7#. Mau OBROL gak habis-habis 24 Jam? Hub *123*111#', 2, '', 'false', 2);

--
-- Triggers `inbox`
--
DELIMITER $$
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox` FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  `Retries` int(3) DEFAULT '0',
  `Priority` int(11) DEFAULT '0',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `SendBefore`, `SendAfter`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `Class`, `TextDecoded`, `ID`, `MultiPart`, `RelativeValidity`, `SenderID`, `SendingTimeOut`, `DeliveryReport`, `CreatorID`, `Retries`, `Priority`, `Status`, `StatusCode`) VALUES
('2018-08-03 10:58:06', '2018-08-03 10:58:06', '2018-08-03 10:58:06', '23:59:59', '00:00:00', NULL, '6285701288321', 'Default_No_Compression', NULL, -1, 'Coba', 19, 'false', -1, NULL, '2018-08-03 10:58:06', 'default', 'SIMASKU', 0, 0, 'Reserved', -1),
('2018-08-03 10:19:17', '2018-08-03 10:19:17', '2018-08-03 10:19:17', '23:59:59', '00:00:00', NULL, '6285642743334', 'Default_No_Compression', NULL, -1, 'Test', 17, 'false', -1, NULL, '2018-08-03 10:19:17', 'default', 'SIMASKU', 0, 0, 'Reserved', -1),
('2018-08-03 10:57:32', '2018-08-03 10:57:32', '2018-08-03 10:57:32', '23:59:59', '00:00:00', NULL, '6285642743334', 'Default_No_Compression', NULL, -1, 'Test', 18, 'false', -1, NULL, '2018-08-03 10:57:32', 'default', 'SIMASKU', 0, 0, 'Reserved', -1);

--
-- Triggers `outbox`
--
DELIMITER $$
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error','Reserved') NOT NULL DEFAULT 'Reserved',
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `IMSI` varchar(35) NOT NULL,
  `NetCode` varchar(10) DEFAULT 'ERROR',
  `NetName` varchar(35) DEFAULT 'ERROR',
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `IMSI`, `NetCode`, `NetName`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('', '2018-08-03 09:48:27', '2018-08-03 08:37:52', '2018-08-03 09:48:03', 'yes', 'yes', '865156011860834', '510015733314480', '510 01', 'INDOSATOOREDOO', 'Gammu 1.39.0, Windows Server 2007 SP1, MS VC 1500', 100, 69, 1, 0);

--
-- Triggers `phones`
--
DELIMITER $$
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  `StatusCode` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`, `StatusCode`) VALUES
('2018-08-01 12:40:46', '2018-07-28 13:05:09', '2018-08-01 12:40:46', NULL, '0041006E006400610020006D0065006E00640061007000610074002000530075007200610074002E002000530069006C00610068006B0061006E00200048007500620075006E006700690020005400610074006100200055007300610068006100200053004D00410020004E00650067006500720069002000310020004B00650073006500730069002000420061006700690061006E0020005000650072007300750072006100740061006E002E00200054006500720069006D00610020004B0061007300690068002E', '6285701288321', 'Default_No_Compression', '', '+62816124', -1, 'Anda mendapat Surat. Silahkan Hubungi Tata Usaha SMA Negeri 1 Kesesi Bagian Persuratan. Terima Kasih.', 11, '', 1, 'SendingOKNoReport', -1, 14, 255, 'SIMASKU', -1),
('2018-08-01 12:41:20', '2018-08-01 12:40:52', '2018-08-01 12:41:20', NULL, '0063006F00620061', '6285701288321', 'Default_No_Compression', '', '+62816124', -1, 'coba', 12, '', 1, 'SendingOKNoReport', -1, 15, 255, 'SIMASKU', -1),
('2018-08-01 12:44:24', '2018-08-01 12:44:04', '2018-08-01 12:44:24', NULL, '0063006F006200610020006C006100670069', '6285862421959', 'Default_No_Compression', '', '+62816124', -1, 'coba lagi', 13, '', 1, 'SendingOKNoReport', -1, 16, 255, 'SIMASKU', -1),
('2018-08-02 13:14:36', '2018-08-02 13:14:15', '2018-08-02 13:14:36', NULL, '0063006F006200610020006C006100670069', '6285862421959', 'Default_No_Compression', '', '+62816124', -1, 'coba lagi', 14, '', 1, 'SendingOKNoReport', -1, 25, 255, 'SIMASKU', -1),
('2018-08-03 04:27:20', '2018-08-03 04:26:05', '2018-08-03 04:27:20', NULL, '0074006500730074', '6285862421959', 'Default_No_Compression', '', '+62816124', -1, 'test', 15, '', 1, 'SendingOKNoReport', -1, 26, 255, 'SIMASKU', -1),
('2018-08-03 09:48:27', '2018-08-03 09:48:00', '2018-08-03 09:48:27', NULL, '0043006F00620061', '6285701288321', 'Default_No_Compression', '', '+62816124', -1, 'Coba', 16, '', 1, 'SendingOKNoReport', -1, 27, 255, 'SIMASKU', -1);

--
-- Triggers `sentitems`
--
DELIMITER $$
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbdetail_surat_tugas`
--

CREATE TABLE `tbdetail_surat_tugas` (
  `iddetail_surat_tugas` int(11) NOT NULL,
  `id_surat_tugas` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdetail_surat_tugas`
--

INSERT INTO `tbdetail_surat_tugas` (`iddetail_surat_tugas`, `id_surat_tugas`, `id_pegawai`) VALUES
(136, 1, 1),
(137, 2, 14),
(138, 2, 15),
(161, 4, 1),
(162, 4, 2),
(163, 4, 16),
(164, 4, 22),
(165, 4, 26),
(166, 4, 50),
(167, 5, 27),
(168, 5, 41),
(170, 3, 24),
(171, 3, 49),
(172, 3, 53),
(175, 6, 3),
(176, 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbklasifikasi`
--

CREATE TABLE `tbklasifikasi` (
  `id_klasifikasi` int(4) NOT NULL,
  `kode_klasifikasi` varchar(8) NOT NULL,
  `klasifikasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbklasifikasi`
--

INSERT INTO `tbklasifikasi` (`id_klasifikasi`, `kode_klasifikasi`, `klasifikasi`) VALUES
(1, '400', 'KESEHATAN RAKYAT'),
(2, '401', 'Kebijakan dan Program Pemerintah untuk kesejahteraan rakyat'),
(3, '420', 'PENDIDIKAN'),
(4, '420.1', 'Kebijakan dan Program Pemerintah untuk pendidikan'),
(5, '420.2', 'Pendidikan Karakter bangsa, wawasan kebangsaan, jiwa nasionalisme dsb'),
(6, '420.3', 'Pendidikan Kemasyarakatan'),
(7, '421', 'Sekolah (termasuk akreditasi)'),
(8, '421.1', 'Pra sekolah (PAUD, Playgroup)'),
(9, '421.2', 'Sekolah Dasar'),
(10, '421.3', 'Sekolah Menengah'),
(11, '421.4', 'Sekolah Kejuruan'),
(12, '421.5', 'Perguruan Tinggi (Sekolah Tinggi, Akademi, Universitas, dll)'),
(13, '421.6', 'Kegiatan sekolah meliputi Dies Natalis, Lustrum'),
(14, '421.7', 'Kegiatan Pelajar diantaranya reuni, darmawisata, widyawisata, lomba-lomba (LKS, olimpiade sains, olimpiade olahraga dan sains), Pelajar teladan, Pertukaran Pelajar'),
(16, '421.8', 'Sekolah Pendidikan Luar Biasa'),
(17, '421.9', 'Pendidikan Luar Sekolah/Pemberantasan Buta Huruf'),
(18, '422', 'Administrasi Sekolah'),
(19, '422.1', 'Persyaratan masuk sekolah, testing, ujian, OSPEK'),
(20, '422.2', 'Tahun Pelajaran'),
(21, '422.3', 'Hari Libur'),
(22, '422.4', 'Uang sekolah, diantaranya SPP, SPI'),
(23, '422.5', 'Bea Siswa dan Penghargaan siswa berprestasi'),
(24, '422.6', 'Ijazah, Sertifikat'),
(25, '422.7', 'Bantuan Pendidikan : Bantuan Operasional Sekolah (BOS), Bantuan Khusus Murid (BKM), Bantuan Siswa Miskin (BSM)'),
(26, '423', 'Metode Belajar'),
(27, '423.1', 'Kuliah'),
(28, '423.2', 'Ceramah, Simposium, Seminar'),
(29, '423.3', 'Diskusi'),
(30, '423.4', 'Kuliah Lapangan, KKN, Magang/Praktek/PKL'),
(31, '423.5', 'Kurikulum'),
(32, '423.6', 'Karya Tulis, Karya Ilmiah'),
(33, '423.7', 'Ujian'),
(34, '424', 'Tenaga Pengajar (Guru, Dosen, guru/dosen teladan, guru/dosen berprestasi)'),
(35, '424.1', 'Pertukaran Guru ke Luar Negeri'),
(36, '424.2', 'Sertifikasi Guru'),
(37, '425', 'Sarana Pendidikan'),
(38, '425.1', 'Bangunan Pendidikan'),
(39, '425.11', 'Gedung Sekolah'),
(40, '425.12', 'Kampus'),
(41, '425.13', 'Pusat Kegiatan'),
(42, '425.14', 'Perpusakaan'),
(43, '425.15', 'Laboratorium'),
(44, '425.2', 'Buku'),
(45, '425.3', 'Perlengkapan Pendidikan'),
(46, '425.4', 'Sistem Informasi Pendidikan'),
(47, '425.5', 'Pengembangan Teknologi Informasi Komunikasi Pendidikan'),
(48, '426', 'KEOLAHRAGAAN'),
(49, '426.1', 'Pembinaan Keolahragaan'),
(50, '426.11', 'Olah Raga Prestasi (PON, Sea Games, Kejurnas, Olympiade)'),
(51, '426.12', 'Olah Raga Pendidikan (POPDA SD, Porseni dll)'),
(52, '426.13', 'Olah Raga Rekreasi / Massal (Senam, Sepeda Santai, Olahraga Tradisional)'),
(53, '426.14', 'Iptek dan Industri Olah Raga'),
(54, '426.15', 'Sarana Prasarana Keolahragaan'),
(55, '426.2', 'Kemitraan Olah Raga'),
(56, '427', 'KEPEMUDAAN'),
(57, '427.1', 'Pertukaran Pemuda'),
(58, '427.2', 'Paskibraka'),
(59, '427.3', 'Sarana Prasarana Kepemudaan, meliputi sarana kegiatan remaja : gelanggang remaja'),
(60, '427.4', 'Kemitraan Pemuda'),
(61, '427.5', 'Karang Taruna'),
(62, '428', 'Kepramukaan/Kepanduan'),
(63, '430', 'KEBUDAYAAN'),
(64, '430.1', 'Kebijakan dan Program Pemerintah untuk kebudayaan'),
(65, '430.2', 'Pembinaan bidang kebudayaan'),
(66, '431', 'Kesenian'),
(67, '431.1', 'Cabang Kesenian (Seni Pewayangan, seni tari, seni musik, seni rupa, seni lukis, dll)'),
(68, '431.2', 'Sarana'),
(69, '431.21', 'Gedung Kesenian');

-- --------------------------------------------------------

--
-- Table structure for table `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `id_pegawai` int(3) NOT NULL,
  `NIP` char(21) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `ruang` varchar(5) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpegawai`
--

INSERT INTO `tbpegawai` (`id_pegawai`, `NIP`, `nama_pegawai`, `golongan`, `ruang`, `jabatan`, `pangkat`, `bagian`, `no_hp`) VALUES
(1, '19650109 199203 1 006', 'Drs. EKO SUPRIYANTO, M.Pd', 'Pembina Tk. I', 'IV/b', 'Bhs. Inggris', '', '', '628122739507'),
(2, '19631207 198703 1 005', 'Drs. WINARYO', 'Pembina', 'IV/a', 'Bhs. Inggris', '', '', '628156942329'),
(3, '19580227 198803 1 007', 'Drs. SUTEJO PROBO S', 'Pembina', 'IV/a', 'Geografi', '', '', '6285742720066'),
(10, '19720618 199803 1 004', 'SUYADI, S.Pd', 'Pembina', 'IV/a', 'Fisika', '', '', '6285642612525'),
(11, '19710222 199401 1 002', 'AGUS WIYONO, S.Pd', 'Pembina', 'IV/a', 'Kimia', '', '', '628562780392'),
(12, '19630923 200604 1 001', 'Drs. TOHIRIN, M.Pd.I', 'Penata Tk. I', 'III/d', 'Pend. Agama Islam', '', '', '6285869157442'),
(13, '19670101 200604 1 018', 'KUSMORO ENDIDIK, S.Pd', 'Penata Tk. I', 'III/d', 'Bhs. Indonesia', '', '', '6281326953740'),
(14, '19740308 200604 2 014', 'SRI INDAHYANI, S.Pd', 'Penata Tk. I', 'III/d', 'Biologi', '', '', '6285842567726'),
(15, '19760302 199903 2 004', 'SRI LESTARI, SE, M.M', 'Penata Tk. I', 'III/d', 'Ka. Subag TU', '', '', '-'),
(16, '19800216 200604 1 010', 'SABRAWI, S.Pd', 'Penata', 'III/c', 'Bhs. Inggris', '', '', '6281548083180'),
(17, '19740121 200701 1 005', 'RISDIYANTO, S.Pd', 'Penata', 'III/c', 'Sosiologi', '', '', '6281548073379'),
(18, '19760918 200701 2 009', 'WIWIK INDARWATI, S.Pd', 'Penata', 'III/c', 'Ekonomi', '', '', '6281548140363'),
(19, '19640804 200701 2 012', 'Dra. CISWATI', 'Penata', 'III/c', 'Bimbingan dan Konseling (BK)', '', '', '6285642777897'),
(20, '19740101 200701 2 020', 'TARUPATNI BUDI LESTARI, S.Pd', 'Penata', 'III/c', 'Ekonomi', '', '', '6285740454934'),
(21, '19751008 200801 2 010', 'TITIK PURWANINGRUM S.Pd', 'Penata', 'III/c', 'Kimia', '', '', '6285869179321'),
(22, '19810211 200801 2 008', 'TRI NINGSIH, S.Pd', 'Penata Muda Tk. I ', 'III/b', 'Bhs. Inggris ', '', '', '6285640687582'),
(23, '19670113 200801 2 005', 'Dra. ROJINAH ', 'Penata Muda Tk. I', 'III/b', 'PKn', '', '', '-'),
(24, '19790904 200801 2 032', 'NIKE IRI WANTI, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Sejarah', '', '', '6285866245764'),
(25, '19760216 200801 2 017', 'RETNO DEWI ASTUTI, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Ekonomi', '', '', '6285875203169'),
(26, '19790914 200902 1 009', 'HADI SUPROJO, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Bhs. Inggris', '', '', '6285641248128'),
(27, '19830909 200902 1 006', 'ROHMA KURNIA AGUNG, Spd', 'Penata Muda Tk. I', 'III/b', 'Penjasorkes', '', '', '6285842280766'),
(28, '19701005 201001 1 005', 'DJAJADI, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Bimibngan dan Konseling (BK)', '', '', '6285866223234'),
(29, '19800910 201001 1 020', 'SUTARTO SAPTO P, S.T', 'Penata Muda Tk. I', 'III/b', 'TIK', '', '', '6285642830186'),
(30, '19820414 201001 2 020', 'RITA KUSUMANINGSIH, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Bahasa Jawa', '', '', '6285741944748'),
(31, '19840505 201001 2 036', 'HENI PURWANTI, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Sosiologi', '', '', '6285642779897'),
(32, '19810123 201001 1 017', 'KHUSNIL AMRI, S.Pd', 'Penata Tk. I', 'III/b', 'Geografi', '', '', '6285328583575'),
(33, '19861120 201001 2 025', 'NURUL AZIZAH, S.Pd', 'Penata Muda Tk. I', 'III/b', 'Bhs. Indonesia', '', '', '6285786868620'),
(34, '19730421 200701 2 008', 'HERAWATI TRES P., SE', 'Penata Muda ', 'III/a', 'Staf TU', '', '', '6281575597353'),
(35, '19740617 200701 1 010', 'URIP TRI WIDODO', 'Pengatur ', 'II/c', 'Staf TU', '', '', '6285640231074'),
(36, '19750709 200701 1 008', 'SUHARTO', 'Pengatur ', 'II/c', 'Staf TU', '', '', '-'),
(37, '19660304 200701 1 019', 'CARLAM ', 'Pengatur Muda Tk. I', 'II/b ', 'Staf TU', '', '', '6285869257594'),
(38, '-', 'MUH. FAROKHIN, S. Hi', '-', '-', 'Bahasa Arab (Asing)', '', '', '-'),
(39, '-', 'MAKHMUDAH, S.Pd', '-', '-', 'Bhs. Indonesia', '', '', '-'),
(40, '-', 'TURSUNAH, S.Pd', '-', '-', 'Bahasa Jawa', '', '', '-'),
(41, '-', 'FAHMI IQBALDI, S.Pd', '-', '-', 'Penjasorkes', '', '', '-'),
(42, '-', 'TRY TITIS WIDJAYANTO, S.Pd', '-', '-', 'Matematika', '', '', '-'),
(43, '-', 'PURNA PRASETYANI, S.Pd', '-', '-', 'Bhs. Indonesia', '', '', '-'),
(44, '-', 'AFWANUL CHAKIEM, S.Pd. I', '-', '-', 'PAI', '', '', '-'),
(45, '-', 'TYASTITI KUSUMANINGRUM, S.Pd', '-', '-', 'Biologi', '', '', '-'),
(46, '-', 'LELYANA ARYANI, S.Pd', '-', '-', 'Kesenian (Dan Budaya)', '', '', '-'),
(47, '-', 'WAHYU SRI KUNCARA, S.Pd', '-', '-', 'Bimbingan dan Konseling (BK)', '', '', '-'),
(48, '-', 'HANGGORO BERGAS, S.Pd', '-', '-', 'Penjasorkes', '', '', '-'),
(49, '-', 'MUHAMAD SOBARI, S.Pd', '-', '-', 'Sejarah', '', '', '-'),
(50, '-', 'FATAN FIDAYAN', '-', '-', 'Bhs. Inggris', '', '', '-'),
(51, '-', 'DWI RIZKI AMALIA', '-', '-', 'Bimbingan dan Konseling (BK)', '', '', '-'),
(52, '-', 'DESY NIKMATUR ROKHMAH', '-', '-', 'Matematika', '', '', '-'),
(53, '-', 'SULTHON MUZAKI', '-', '-', 'Sejarah', '', '', '-'),
(54, '-', 'SLAMET', '-', '-', 'Staf TU', '', '', '-'),
(55, '-', 'AGUS WURYANTO', '-', '-', 'Staf TU', '', '', '-'),
(56, '-', 'MUSTOFA', '-', '-', 'Staf TU', '', '', '-'),
(57, '-', 'MUSTAGHFIRIN, SE', '-', '-', 'Staf TU', '', '', '-'),
(58, '-', 'TRI SUNDORO', '-', '-', 'Staf TU', '', '', '-'),
(59, '-', 'SUFRON SAID', '-', '-', 'Staf TU', '', '', '-'),
(60, '-', 'GEREN SETIAWAN ', '-', '-', 'Staf TU', '', '', '-'),
(61, '-', 'BUDI HARTONO', '-', '-', 'Staf TU', '', '', '-'),
(62, '-', 'NUR SISWANTO', '-', '-', 'Staf TU', '', '', '-'),
(63, '-', 'KUSTIYONO, S.Pd', '-', '-', 'Staf TU', '', '', '-'),
(64, '-', 'AYUDA SEPTYANA MAHARANIS, S.Pi', '-', '-', 'Staf TU', '', '', '-'),
(65, '-', 'SUGIYANTO', '-', '-', 'Staf TU', '', '', '-'),
(73, '19640809 199103 1 005', 'Drs. PRAPTONI', 'Pembina', 'IV/a', 'Matematika', '', '', '6285786014774'),
(74, '19671105 199412 1 002', 'Drs. HIDAYAT RUTIADI', 'Pembina', 'IV/a', 'Kesenian (Dan Budaya)', '', '', '6285869069774'),
(75, '19710723 199802 1 003', 'URIP YULIANTO S.Pd', 'Pembina', 'IV/a', 'Bimbingan dan Konseling (BK)', '', '', '6285641030809'),
(76, '19690718 199802 1 001', 'COKRO, S.Pd', 'Pembina', 'IV/a', 'PKn', '', '', '6285742848793'),
(78, '19700727 199301 1 002', 'DIDIK SUPRIYANTO, S.Pd', 'Pembina', 'IV/a', 'Matematika', '', '', '6281548151137'),
(79, '19670814 199802 1 002', 'RAHMAD SUDARYANTO, S.Pd', 'Pembina', 'IV/a', 'Fisika', '', '', '6285786058351'),
(81, '19650507 199203 1 004', 'Alisa', 'Penata Tk. I', 'III/d', 'Fisika', 'Guru PNS', 'Guru', '6285701288321'),
(82, '22', 'Imam Prayogo ', 'Penata Tk. I', 'III/d', 'Kepala Sekolah', 'Guru PNS', 'Guru', '6285642743334');

-- --------------------------------------------------------

--
-- Table structure for table `tbsurat_keluar`
--

CREATE TABLE `tbsurat_keluar` (
  `id_surat_keluar` int(3) NOT NULL,
  `id_klasifikasi` int(4) NOT NULL,
  `perihal` varchar(80) NOT NULL,
  `jenis_surat_keluar` varchar(50) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl_penetapan_skeluar` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `dikirim` varchar(50) NOT NULL,
  `kepada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsurat_keluar`
--

INSERT INTO `tbsurat_keluar` (`id_surat_keluar`, `id_klasifikasi`, `perihal`, `jenis_surat_keluar`, `no_surat`, `isi`, `tgl_penetapan_skeluar`, `file`, `dikirim`, `kepada`) VALUES
(16, 1, 'Surat Undangan ', 'Surat Undangan ', '001/016/2018', '<p class="MsoNormal" style="margin-left: 56,7000pt; text-indent: 0,7000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Dengan ini, </span></p>\r\n<p class="MsoNormal" style="margin-left: 56,7000pt; text-indent: 15,3000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Mengharap kehadiran Bapak / Ibu, besok pada &nbsp;:</span></p>\r\n<p class="MsoNormal" style="margin-left: 56,7000pt; text-indent: 0,7000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Hari / tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Jum&rsquo;at</span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp;/ </span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">5 Januari 2018</span></p>\r\n<p class="MsoNormal" style="margin-left: 56,7000pt; text-indent: 0,7000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Waktu</span> <span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 13.00 WIB</span></p>\r\n<p class="MsoNormal" style="margin-left: 170,1000pt; text-indent: -113,4000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Tempat</span> <span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : </span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">SMA N 1 Kesesi</span></p>\r\n<p class="MsoNormal" style="margin-left: 170,1000pt; text-indent: -113,4000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Acara</span> <span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 1. Pertemuan Rutin</span></p>\r\n<p class="MsoNormal" style="margin-right: -21,0500pt; margin-left: 170,1000pt; text-indent: -113,4000pt; line-height: 150%;"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2. Pembuatan Program Kerja Tahun Pelajaran 2017/2018</span></p>\r\n<p class="MsoNormal" style="margin-left: 170,1000pt; text-indent: -113,4000pt; line-height: 150%;"><strong><span style="font-family: Arial;">&nbsp;</span></strong></p>\r\n<p class="MsoNormal" style="margin-left: 56,7000pt; text-indent: 15,3000pt; text-align: justify; text-justify: inter-ideograph; line-height: 150%;" align="justify"><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">Demikian</span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp;undangan kami sampaikan</span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">, atas perhatian dan</span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">&nbsp;kehadiran Bapak / Ibu </span><span style="mso-spacerun: ''yes''; font-family: Arial; mso-fareast-font-family: ''Times New Roman''; font-size: 12,0000pt;">kami sampaikan terima kasih.</span></p>', '2018-08-01', '16_06_048_jurnal_eproc.pdf', 'Surat Undangan ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbsurat_masuk`
--

CREATE TABLE `tbsurat_masuk` (
  `id_surat_masuk` int(3) NOT NULL,
  `id_klasifikasi` int(4) NOT NULL,
  `tgl_terima` date NOT NULL,
  `nomor_kendali` varchar(20) NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `surat_tanggal` date NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `sifat` varchar(7) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` enum('ya','tidak','belum') NOT NULL,
  `diselesaikan_tanggal` date NOT NULL,
  `yang_menyelesaikan` varchar(30) NOT NULL,
  `catatan` text NOT NULL,
  `diteruskan` varchar(50) NOT NULL,
  `instruksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsurat_masuk`
--

INSERT INTO `tbsurat_masuk` (`id_surat_masuk`, `id_klasifikasi`, `tgl_terima`, `nomor_kendali`, `asal_surat`, `surat_tanggal`, `nomor_surat`, `perihal`, `sifat`, `file`, `status`, `diselesaikan_tanggal`, `yang_menyelesaikan`, `catatan`, `diteruskan`, `instruksi`) VALUES
(1, 12, '2018-01-03', '421.5/001', 'Politeknik Negeri Bandung Program Studi diluar domisili (PDD)Kajen, Akademi Komunitas Negeri Kajen', '2017-12-21', '004/562/AKN/XII/2017', 'Permohonan Sosialisasi PMB AKN', 'penting', 'example_01610.pdf', 'ya', '2018-07-17', 'Waka Kesiswaan', 'Dipersiapkan siswanya', 'Waka Kesiswaan', 'Diselesaikan lebih lanjut'),
(2, 3, '2018-01-03', '420/002', 'Organisasi Siswa Intra Sekolah SMA Negeri 1 Kajen Kabupaten Pekalongan', '2017-12-12', '003.20/OSIS/SMAN 1 Kajen/XII/2017', 'Undangan (Resepsi HUT SMANKA Ke- 38 Tahun 2017)', '-', 'BAB_II.pdf', 'belum', '0000-00-00', '-', '-', '-', '-'),
(3, 22, '2018-01-03', '800/003', 'Direktorat Jendral Pendidikan Dasar dan Menengah Pembinaan Sekolah Menengah Atas\r\n', '2017-11-08', '8982/D4/KU/2017', 'Siswa Penerima Program Indonesia Pintar (PIP)SMA Tahun 2017 Tahap XIII\r\n', 'penting', '', 'ya', '2018-07-25', 'Sri L', 'Segera', 'Segera', 'Segera Diselesaikan'),
(4, 6, '2018-01-04', '420/004', 'Surat Ketua MGMP Sejarah SMA/MA Kabupaten Pekalongan', '2017-11-08', '005/MGMP/SEJ-SMA/I/2018', 'Undangan MGMP Sejarah', '-', 'print.pdf', 'belum', '0000-00-00', '-', '-', '-', '-'),
(7, 48, '2018-01-04', '426/005', 'Surat Panitia Kejuaraan Pencak Silat Terbuka Antar Pelajaar SD,SMP,SMA dan Mahasiswa Tingkat Nasiona', '2017-11-09', '04/PPSPB/PB04/II/2018', 'Undangan Kejuaraan', '-', '16_06_048_jurnal_eproc1.pdf', 'belum', '0000-00-00', '-', '-', '-', '-'),
(8, 12, '2018-08-03', '421.5/008', 'AKN Kajen', '2018-08-02', '222.4/AKN/2018', 'Surat Undangan', '-', '16_06_048_jurnal_eproc2.pdf', 'belum', '0000-00-00', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbsurat_sppd`
--

CREATE TABLE `tbsurat_sppd` (
  `id_surat_sppd` int(3) NOT NULL,
  `id_surat_tugas` int(3) NOT NULL,
  `id_klasifikasi` int(4) NOT NULL,
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
-- Dumping data for table `tbsurat_sppd`
--

INSERT INTO `tbsurat_sppd` (`id_surat_sppd`, `id_surat_tugas`, `id_klasifikasi`, `kuasa_pengguna_anggaran`, `alat_angkut`, `tempat_berangkat`, `tempat_tujuan`, `lamanya_perjalanan_dinas`, `tanggal_berangkat`, `tanggal_kembali`, `pengikut`, `skpd`, `akun`, `dikeluarkan`, `tgl_penetapan_ssppd`, `no_surat_sppd`) VALUES
(1, 1, 0, 'Kepala SMA Negeri 1 Kesesi', 'Pribadi', 'SMA N 1 Kesesi', 'Kecamatan Kesesi', '1 hari', '2018-07-20', '2018-07-20', '', '', '', '', '2018-07-20', '090/001/2018'),
(2, 5, 0, 'Kepala SMA Negeri 1 Kesesi', 'Pribadi', 'SMA Negeri 1 Kesesi', 'SMA Negeri 1 Comal', '1 hari', '2018-07-10', '2018-07-10', '', '', '', '', '2018-07-03', '090/002/2018'),
(3, 3, 0, 'Kepala SMA Negeri 1 Kesesi', 'Mobil Dinas', 'SMA N 1 Kesesi', 'Kecamatan Kesesi', '1 Hari', '2018-07-27', '2018-07-27', '', '', '', '', '2018-06-25', '090/003/2018'),
(4, 4, 0, 'Kepala SMA Negeri 1 Kesesi', 'ala', 'akneah', 'akneah', '1 hari', '2018-07-31', '2018-07-31', '', '', '', '', '0000-00-00', '090/004/2018'),
(5, 6, 0, 'Kepala SMA Negeri 1 Kesesi', 'Pribadi', 'SMA N 1 Kesesi', 'AKN Kajen', '1 hari', '2018-08-03', '2018-08-03', '', '', '', '', '2018-08-03', '090/005/2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbsurat_tugas`
--

CREATE TABLE `tbsurat_tugas` (
  `id_surat_tugas` int(3) NOT NULL,
  `id_klasifikasi` int(4) NOT NULL,
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
-- Dumping data for table `tbsurat_tugas`
--

INSERT INTO `tbsurat_tugas` (`id_surat_tugas`, `id_klasifikasi`, `id_surat_masuk`, `keperluan`, `hari`, `tanggal`, `waktu`, `tempat`, `no_surat_tugas`, `ditetapkan`, `tgl_penetapan_stugas`) VALUES
(1, 26, 2, 'menghadiri Undangan (Resepsi HUT SMANKA Ke- 38 Tahun 2017)', 'Rabu', '2018-07-18', '10:02', 'SMAN 1 Kajen', '0/001/2018', 'Kesesi', '2018-07-17'),
(2, 5, 2, 'Surat LAKIN', 'selasa', '2018-07-20', '21:29', 'SMA Negeri 1 Pekalongan', '001.4/002/2018', 'Kesesi', '2018-07-20'),
(3, 22, 4, 'mengikuti MGMP Sejarah SMA/MA Kabupaten Pekalongan', 'Kamis', '2018-07-27', '7:00:', 'SMA Negeri 1 Bojong', '005/003/2018', 'Kesesi', '2018-07-26'),
(5, 48, 7, 'mengantar Juara di Kejuaraan Pencak Silat Terbuka Antar Pelajaar SD,SMP,SMA dan Mahasiswa Tingkat Na', 'Rabu', '2018-01-03', '11:00', 'SMA Negeri 1 Pekalongan', '426/004/2018', 'Kesesi', '2018-01-02'),
(6, 12, 8, 'Menghadiri Undangan ', 'Jumat', '2018-08-03', '7:42:', 'AKN Kajen', '421.5/006/2018', 'Kesesi', '2018-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `kata_sandi` varchar(40) NOT NULL,
  `level_user` varchar(15) NOT NULL,
  `status` enum('aktif','inaktif') NOT NULL,
  `id_pegawai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `nama_user`, `kata_sandi`, `level_user`, `status`, `id_pegawai`) VALUES
(1, 'staf', '7b8a17c3f48d4453fde0fd74b4fa9212', 'Staf TU', 'aktif', 64),
(2, 'sadmin', 'abae96c10c46496ff81adae4dccbbcff', 'Super Admin', 'aktif', 2),
(4, 'kasubag', '143ad2695caf8f2368b5d9ef03d37ee8', 'Ka. Subag TU', 'aktif', 15),
(10, 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'Kepala Sekolah', 'aktif', 1),
(11, 'sri', 'e10adc3949ba59abbe56e057f20f883e', 'Staf TU', 'inaktif', 14),
(12, 'imam', 'e10adc3949ba59abbe56e057f20f883e', 'Kepala Sekolah', 'aktif', 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gammu`
--
ALTER TABLE `gammu`
  ADD PRIMARY KEY (`Version`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`(250));

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`(250));

--
-- Indexes for table `tbdetail_surat_tugas`
--
ALTER TABLE `tbdetail_surat_tugas`
  ADD PRIMARY KEY (`iddetail_surat_tugas`,`id_surat_tugas`,`id_pegawai`);

--
-- Indexes for table `tbklasifikasi`
--
ALTER TABLE `tbklasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tbsurat_keluar`
--
ALTER TABLE `tbsurat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `tbsurat_masuk`
--
ALTER TABLE `tbsurat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `tbsurat_sppd`
--
ALTER TABLE `tbsurat_sppd`
  ADD PRIMARY KEY (`id_surat_sppd`);

--
-- Indexes for table `tbsurat_tugas`
--
ALTER TABLE `tbsurat_tugas`
  ADD PRIMARY KEY (`id_surat_tugas`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbdetail_surat_tugas`
--
ALTER TABLE `tbdetail_surat_tugas`
  MODIFY `iddetail_surat_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `tbklasifikasi`
--
ALTER TABLE `tbklasifikasi`
  MODIFY `id_klasifikasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  MODIFY `id_pegawai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `tbsurat_keluar`
--
ALTER TABLE `tbsurat_keluar`
  MODIFY `id_surat_keluar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbsurat_masuk`
--
ALTER TABLE `tbsurat_masuk`
  MODIFY `id_surat_masuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbsurat_sppd`
--
ALTER TABLE `tbsurat_sppd`
  MODIFY `id_surat_sppd` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbsurat_tugas`
--
ALTER TABLE `tbsurat_tugas`
  MODIFY `id_surat_tugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
