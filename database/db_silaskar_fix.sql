-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 05:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_silaskar_fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_akhir_korban`
--

CREATE TABLE `ref_akhir_korban` (
  `id_akhir_korban` int(11) NOT NULL,
  `nama_penyelesaian` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_akhir_pelaku`
--

CREATE TABLE `ref_akhir_pelaku` (
  `id_akhir_pelaku` int(11) NOT NULL,
  `nama_penyelesaian` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_pelayanan`
--

CREATE TABLE `ref_jenis_pelayanan` (
  `id_jenis_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_jenis_pelayanan`
--

INSERT INTO `ref_jenis_pelayanan` (`id_jenis_pelayanan`, `nama_pelayanan`) VALUES
(1, 'Penanganan Pengaduan'),
(2, 'Pelayanan Kesehatan'),
(3, 'Rehabilitasi Sosial'),
(4, 'Penegakan dan Bantuan Hukum'),
(5, 'Pemulangan & Reintegrasi'),
(6, 'Pelayanan Psikis');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kecamatan`
--

CREATE TABLE `ref_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_kecamatan`
--

INSERT INTO `ref_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Ciputat'),
(2, 'Ciputat Timur'),
(3, 'Pamulang'),
(4, 'Pondok Aren'),
(5, 'Serpong'),
(6, 'Serpong Utara'),
(7, 'Setu');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kekerasan`
--

CREATE TABLE `ref_kekerasan` (
  `id_kekerasan` int(11) NOT NULL,
  `kategori_kekerasan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_kekerasan`
--

INSERT INTO `ref_kekerasan` (`id_kekerasan`, `kategori_kekerasan`) VALUES
(1, 'Fisik'),
(2, 'Psikis'),
(3, 'Seksual'),
(4, 'Penelantaran'),
(5, 'Eksploitasi'),
(6, 'Perdagangan Orang'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kelurahan`
--

CREATE TABLE `ref_kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_kelurahan`
--

INSERT INTO `ref_kelurahan` (`id_kelurahan`, `kecamatan_id`, `nama_kelurahan`) VALUES
(1, 1, 'Cipayung'),
(2, 1, 'Ciputat'),
(3, 1, 'Sawah Baru'),
(4, 1, 'Sawah Lama'),
(5, 1, 'Jombang'),
(6, 1, 'Sarua'),
(7, 1, 'Sarua Indah'),
(8, 2, 'Cempaka Putih'),
(9, 2, 'Pondok Ranji'),
(10, 2, 'Rempoa'),
(11, 2, 'Rengas'),
(12, 2, 'Cireundeu'),
(13, 2, 'Pisangan'),
(14, 3, 'Bambu Apus'),
(15, 3, 'Kedaung'),
(16, 3, 'Pondok Benda'),
(17, 3, 'Pamulang Barat'),
(18, 3, 'Pamulang Timur'),
(19, 3, 'Benda Baru'),
(20, 3, 'Pondok Cabe Ilir'),
(21, 3, 'Pondok Cabe Udik'),
(22, 4, 'Pondok Jaya'),
(23, 4, 'Pondok Betung'),
(24, 4, 'Jurang Mangu Timur'),
(25, 4, 'Jurang Mangu Barat'),
(26, 4, 'Pondok Aren'),
(27, 4, 'Pondok Karya'),
(28, 4, 'Pondok Kacang Barat'),
(29, 4, 'Pondok Kacang Timur'),
(30, 4, 'Perigi Lama'),
(31, 4, 'Perigi Baru'),
(32, 4, 'Pondok Pucung'),
(33, 5, 'Buaran'),
(34, 5, 'Ciater'),
(35, 5, 'Cilenggang'),
(36, 5, 'Rawa Mekar Jaya'),
(37, 5, 'Serpong'),
(38, 5, 'Rawa Buntu'),
(39, 5, 'Lengkong Gudang'),
(40, 5, 'Lengkong Gudang Timur'),
(41, 5, 'Lengkong Wetan'),
(42, 6, 'Lengkong Karya'),
(43, 6, 'Pakualam'),
(44, 6, 'Jelupang'),
(45, 6, 'Paku Jaya'),
(46, 6, 'Pakulonan'),
(47, 6, 'Pondok Jagung'),
(48, 6, 'Pondok Jagung Timur'),
(52, 7, 'Kranggan'),
(53, 7, 'Kademangan'),
(54, 7, 'Muncul'),
(55, 7, 'Setu'),
(56, 7, 'Babakan'),
(57, 7, 'Bakti Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ciri_korban`
--

CREATE TABLE `tb_ciri_korban` (
  `id_kasus` int(11) NOT NULL,
  `nik_korban` bigint(16) NOT NULL,
  `nama_korban` varchar(50) NOT NULL,
  `alamat_korban` text NOT NULL,
  `jk_korban` enum('0','1') NOT NULL,
  `usia_korban` int(3) NOT NULL,
  `pendidikan_korban` enum('0','1','2','3','4') NOT NULL,
  `pekerjaan` enum('0','1') NOT NULL,
  `perkawinan_korban` enum('0','1','2','3') NOT NULL,
  `difabel` enum('0','1') NOT NULL,
  `tempat_kejadian` enum('0','1','2','3','4') NOT NULL,
  `tanggal_kejadian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ciri_korban`
--

INSERT INTO `tb_ciri_korban` (`id_kasus`, `nik_korban`, `nama_korban`, `alamat_korban`, `jk_korban`, `usia_korban`, `pendidikan_korban`, `pekerjaan`, `perkawinan_korban`, `difabel`, `tempat_kejadian`, `tanggal_kejadian`) VALUES
(8, 9123, 'iqna', 'bb', '1', 2, '2', '1', '2', '0', '0', '0000-00-00'),
(9, 9123, 'iqna', 'bb', '0', 1, '1', '0', '1', '0', '0', '0000-00-00'),
(10, 9123, 'vvsd', 'bb', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(11, 9123, 'vvsd', 'bb', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(12, 889898, 'Baggas', 'Jatibarang', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(13, 889898, 'Baggas', 'Jatibarang', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(15, 889898, 'Baggas', 'Jatibarang', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(16, 889898, 'Baggas', 'Jatibarang', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(17, 889898, 'Baggas', 'Jatibarang', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(18, 889898, 'Baggas', 'Jatibarang', '0', 1, '0', '0', '1', '0', '0', '0000-00-00'),
(19, 3456789087654, 'Bima', 'asdf', '0', 3, '1', '1', '1', '1', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ciri_pelaku`
--

CREATE TABLE `tb_ciri_pelaku` (
  `id_kasus` int(11) NOT NULL,
  `nik_pelaku` varchar(16) NOT NULL,
  `nama_pelaku` varchar(100) NOT NULL,
  `jk_pelaku` enum('0','1') NOT NULL,
  `usia_pelaku` int(3) NOT NULL,
  `pendidikan_pelaku` enum('0','1','2','3','4') NOT NULL,
  `pekerjaan_pelaku` enum('0','1','2') NOT NULL,
  `hubungan_pelaku` enum('0','1','2','3','4') NOT NULL,
  `kebangsaan` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ciri_pelaku`
--

INSERT INTO `tb_ciri_pelaku` (`id_kasus`, `nik_pelaku`, `nama_pelaku`, `jk_pelaku`, `usia_pelaku`, `pendidikan_pelaku`, `pekerjaan_pelaku`, `hubungan_pelaku`, `kebangsaan`) VALUES
(1, '', '', '', 31, '3', '', '2', ''),
(9, '123', 'ra', '0', 0, '4', '0', '1', '0'),
(10, '123', 'asd', '0', 0, '0', '0', '0', '0'),
(11, '123', 'asd', '0', 0, '0', '0', '0', '0'),
(12, '123', 'Rahma', '1', 0, '0', '0', '0', '0'),
(13, '123', 'Rahma', '1', 0, '0', '0', '0', '0'),
(15, '123', 'Rahma', '1', 0, '0', '0', '0', '0'),
(16, '123', 'Rahma', '1', 0, '0', '0', '0', '0'),
(17, '123', 'Rahma', '1', 0, '0', '0', '0', '0'),
(18, '123', 'Rahma', '1', 0, '0', '0', '0', '0'),
(19, '23452345', 'Surti', '1', 0, '1', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kekerasan`
--

CREATE TABLE `tb_kekerasan` (
  `id_tb_kekerasan` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `kekerasan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kekerasan`
--

INSERT INTO `tb_kekerasan` (`id_tb_kekerasan`, `kasus_id`, `kekerasan_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(5, 18, 2),
(6, 18, 3),
(7, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_kasus`
--

CREATE TABLE `tb_laporan_kasus` (
  `id_kasus` int(11) NOT NULL,
  `nomor_pengaduan` varchar(50) NOT NULL,
  `nik_pelapor` bigint(16) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `verifikasi` enum('0','1','2') NOT NULL,
  `tanggal_lapor` date NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `jenis_kasus` enum('0','1','2') NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan_kasus`
--

INSERT INTO `tb_laporan_kasus` (`id_kasus`, `nomor_pengaduan`, `nik_pelapor`, `nama_pelapor`, `alamat_rumah`, `nomor_telp`, `email`, `verifikasi`, `tanggal_lapor`, `kecamatan_id`, `kelurahan_id`, `jenis_kasus`, `ket`) VALUES
(1, '', 0, '', '', '', '', '0', '2016-06-08', 1, 2, '2', '  	'),
(8, '123', 777, 'iq', '0', '09', 'iqna.maniez@yahoo.com', '', '0000-00-00', 1, 1, '0', 'dfg'),
(9, '123', 777, 'paijo banget', '0', '09', 'iqna.maniez@yahoo.com', '', '0000-00-00', 1, 1, '2', 'xxx'),
(10, '947974', 1234, 'asdf', '0', '890', 'l613539@mvrht.com', '', '0000-00-00', 1, 1, '0', 'xx'),
(11, '615199', 1234, 'asdfq', '0', '890', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'xx'),
(12, '839381', 909090, 'Bima', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(13, '898306', 909090, 'Bima utra', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(14, '468361', 909090, 'Iqna', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(15, '781426', 909090, 'Iqna', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(16, '272405', 909090, 'Iqna', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(17, '865112', 909090, 'Iqna', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(18, '383659', 909090, 'Iqna', '0', '081545', 'l613539@mvrht.com', '0', '0000-00-00', 1, 1, '0', 'aaa'),
(19, '381513', 983275198, 'Tejo', '0', '0864345', 'werkudara94@gmail.com', '0', '2017-02-07', 1, 1, '1', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `kasus_id` int(11) NOT NULL,
  `jenis_pelayanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `kasus_id`, `jenis_pelayanan_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyelesaian_akhir`
--

CREATE TABLE `tb_penyelesaian_akhir` (
  `id_peny_akhir` int(11) NOT NULL,
  `id_laporan_kasus` int(11) NOT NULL,
  `ref_akhir_korban` int(11) NOT NULL,
  `ref_akhir_pelaku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `nama`, `kontak`) VALUES
(1, 'laskar', '5e4d5e86a6ae10affb1365c7b50334df', '1', 'Iqna Aulia', '085641639655'),
(4, 'laskar2', 'laskar2', '2', 'Aulia Iqna', '085641639655'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'bejo', '123456');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_laporan_online`
--
CREATE TABLE `v_laporan_online` (
`id_kasus` int(11)
,`nik_pelapor` bigint(16)
,`nama_pelapor` varchar(100)
,`alamat_rumah` text
,`nomor_telp` varchar(20)
,`email` varchar(50)
,`verifikasi` enum('0','1','2')
,`tanggal_lapor` date
,`nik_korban` bigint(16)
,`nama_korban` varchar(50)
,`alamat_korban` text
,`kelurahan_id` int(11)
,`kecamatan_id` int(11)
,`jk_korban` enum('0','1')
,`jenis_kasus` enum('0','1','2')
,`usia_korban` int(3)
,`pendidikan_korban` enum('0','1','2','3','4')
,`pekerjaan` enum('0','1')
,`perkawinan_korban` enum('0','1','2','3')
,`difabel` enum('0','1')
,`tempat_kejadian` enum('0','1','2','3','4')
,`tanggal_kejadian` date
,`nik_pelaku` varchar(16)
,`jk_pelaku` enum('0','1')
,`usia_pelaku` int(3)
,`pendidikan_pelaku` enum('0','1','2','3','4')
,`pekerjaan_pelaku` enum('0','1','2')
,`hubungan_pelaku` enum('0','1','2','3','4')
,`kebangsaan` enum('0','1','2')
);

-- --------------------------------------------------------

--
-- Structure for view `v_laporan_online`
--
DROP TABLE IF EXISTS `v_laporan_online`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_laporan_online`  AS  (select `tlk`.`id_kasus` AS `id_kasus`,`tlk`.`nik_pelapor` AS `nik_pelapor`,`tlk`.`nama_pelapor` AS `nama_pelapor`,`tlk`.`alamat_rumah` AS `alamat_rumah`,`tlk`.`nomor_telp` AS `nomor_telp`,`tlk`.`email` AS `email`,`tlk`.`verifikasi` AS `verifikasi`,`tlk`.`tanggal_lapor` AS `tanggal_lapor`,`tck`.`nik_korban` AS `nik_korban`,`tck`.`nama_korban` AS `nama_korban`,`tck`.`alamat_korban` AS `alamat_korban`,`tlk`.`kelurahan_id` AS `kelurahan_id`,`tlk`.`kecamatan_id` AS `kecamatan_id`,`tck`.`jk_korban` AS `jk_korban`,`tlk`.`jenis_kasus` AS `jenis_kasus`,`tck`.`usia_korban` AS `usia_korban`,`tck`.`pendidikan_korban` AS `pendidikan_korban`,`tck`.`pekerjaan` AS `pekerjaan`,`tck`.`perkawinan_korban` AS `perkawinan_korban`,`tck`.`difabel` AS `difabel`,`tck`.`tempat_kejadian` AS `tempat_kejadian`,`tck`.`tanggal_kejadian` AS `tanggal_kejadian`,`tcp`.`nik_pelaku` AS `nik_pelaku`,`tcp`.`jk_pelaku` AS `jk_pelaku`,`tcp`.`usia_pelaku` AS `usia_pelaku`,`tcp`.`pendidikan_pelaku` AS `pendidikan_pelaku`,`tcp`.`pekerjaan_pelaku` AS `pekerjaan_pelaku`,`tcp`.`hubungan_pelaku` AS `hubungan_pelaku`,`tcp`.`kebangsaan` AS `kebangsaan` from ((`tb_laporan_kasus` `tlk` left join `tb_ciri_korban` `tck` on((`tlk`.`id_kasus` = `tck`.`id_kasus`))) left join `tb_ciri_pelaku` `tcp` on((`tlk`.`id_kasus` = `tcp`.`id_kasus`)))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_akhir_korban`
--
ALTER TABLE `ref_akhir_korban`
  ADD PRIMARY KEY (`id_akhir_korban`);

--
-- Indexes for table `ref_akhir_pelaku`
--
ALTER TABLE `ref_akhir_pelaku`
  ADD PRIMARY KEY (`id_akhir_pelaku`);

--
-- Indexes for table `ref_jenis_pelayanan`
--
ALTER TABLE `ref_jenis_pelayanan`
  ADD PRIMARY KEY (`id_jenis_pelayanan`);

--
-- Indexes for table `ref_kecamatan`
--
ALTER TABLE `ref_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `ref_kekerasan`
--
ALTER TABLE `ref_kekerasan`
  ADD PRIMARY KEY (`id_kekerasan`);

--
-- Indexes for table `ref_kelurahan`
--
ALTER TABLE `ref_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `id_kecamatan` (`kecamatan_id`),
  ADD KEY `id_kecamatan_2` (`kecamatan_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `tb_ciri_korban`
--
ALTER TABLE `tb_ciri_korban`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `usia_id` (`usia_korban`,`pendidikan_korban`,`perkawinan_korban`,`tempat_kejadian`),
  ADD KEY `perkawinan_id` (`perkawinan_korban`),
  ADD KEY `tempat_id` (`tempat_kejadian`),
  ADD KEY `pendidikan_id` (`pendidikan_korban`,`perkawinan_korban`,`tempat_kejadian`);

--
-- Indexes for table `tb_ciri_pelaku`
--
ALTER TABLE `tb_ciri_pelaku`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `usia_pelaku_id` (`usia_pelaku`,`pendidikan_pelaku`,`pekerjaan_pelaku`,`hubungan_pelaku`),
  ADD KEY `pendidikan_pelaku_id` (`pendidikan_pelaku`),
  ADD KEY `perkawinan_pelaku_id` (`hubungan_pelaku`);

--
-- Indexes for table `tb_kekerasan`
--
ALTER TABLE `tb_kekerasan`
  ADD PRIMARY KEY (`id_tb_kekerasan`),
  ADD KEY `kasus_id` (`kasus_id`),
  ADD KEY `kekerasan_id` (`kekerasan_id`);

--
-- Indexes for table `tb_laporan_kasus`
--
ALTER TABLE `tb_laporan_kasus`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `kecamatan_id` (`kecamatan_id`,`kelurahan_id`,`jenis_kasus`),
  ADD KEY `kelurahan_id` (`kelurahan_id`,`jenis_kasus`),
  ADD KEY `jenis_kasus_id` (`jenis_kasus`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `kasus_id` (`kasus_id`,`jenis_pelayanan_id`),
  ADD KEY `jenis_pelayanan_id` (`jenis_pelayanan_id`);

--
-- Indexes for table `tb_penyelesaian_akhir`
--
ALTER TABLE `tb_penyelesaian_akhir`
  ADD PRIMARY KEY (`id_peny_akhir`),
  ADD KEY `id_laporan_kasus` (`id_laporan_kasus`),
  ADD KEY `ref_akhir_korban` (`ref_akhir_korban`,`ref_akhir_pelaku`),
  ADD KEY `ref_akhir_pelaku` (`ref_akhir_pelaku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_akhir_korban`
--
ALTER TABLE `ref_akhir_korban`
  MODIFY `id_akhir_korban` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ref_akhir_pelaku`
--
ALTER TABLE `ref_akhir_pelaku`
  MODIFY `id_akhir_pelaku` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ref_jenis_pelayanan`
--
ALTER TABLE `ref_jenis_pelayanan`
  MODIFY `id_jenis_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ref_kecamatan`
--
ALTER TABLE `ref_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ref_kekerasan`
--
ALTER TABLE `ref_kekerasan`
  MODIFY `id_kekerasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ref_kelurahan`
--
ALTER TABLE `ref_kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tb_ciri_korban`
--
ALTER TABLE `tb_ciri_korban`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_ciri_pelaku`
--
ALTER TABLE `tb_ciri_pelaku`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_kekerasan`
--
ALTER TABLE `tb_kekerasan`
  MODIFY `id_tb_kekerasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_laporan_kasus`
--
ALTER TABLE `tb_laporan_kasus`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_penyelesaian_akhir`
--
ALTER TABLE `tb_penyelesaian_akhir`
  MODIFY `id_peny_akhir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ref_kelurahan`
--
ALTER TABLE `ref_kelurahan`
  ADD CONSTRAINT `ref_kelurahan_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `ref_kecamatan` (`id_kecamatan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_ciri_korban`
--
ALTER TABLE `tb_ciri_korban`
  ADD CONSTRAINT `tb_ciri_korban_ibfk_1` FOREIGN KEY (`id_kasus`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_ciri_pelaku`
--
ALTER TABLE `tb_ciri_pelaku`
  ADD CONSTRAINT `tb_ciri_pelaku_ibfk_4` FOREIGN KEY (`id_kasus`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_laporan_kasus`
--
ALTER TABLE `tb_laporan_kasus`
  ADD CONSTRAINT `tb_laporan_kasus_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `ref_kecamatan` (`id_kecamatan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_laporan_kasus_ibfk_2` FOREIGN KEY (`kelurahan_id`) REFERENCES `ref_kelurahan` (`id_kelurahan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD CONSTRAINT `tb_layanan_ibfk_1` FOREIGN KEY (`kasus_id`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_layanan_ibfk_2` FOREIGN KEY (`jenis_pelayanan_id`) REFERENCES `ref_jenis_pelayanan` (`id_jenis_pelayanan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_penyelesaian_akhir`
--
ALTER TABLE `tb_penyelesaian_akhir`
  ADD CONSTRAINT `tb_penyelesaian_akhir_ibfk_1` FOREIGN KEY (`id_laporan_kasus`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penyelesaian_akhir_ibfk_2` FOREIGN KEY (`ref_akhir_korban`) REFERENCES `ref_akhir_korban` (`id_akhir_korban`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penyelesaian_akhir_ibfk_3` FOREIGN KEY (`ref_akhir_pelaku`) REFERENCES `ref_akhir_pelaku` (`id_akhir_pelaku`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
