-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Feb 2017 pada 10.39
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_silaskar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_hubungan`
--

CREATE TABLE IF NOT EXISTS `ref_hubungan` (
  `id_hubungan` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_hubungan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hubungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `ref_hubungan`
--

INSERT INTO `ref_hubungan` (`id_hubungan`, `kategori_hubungan`) VALUES
(1, 'Orang Tua'),
(2, 'Keluarga'),
(3, 'Suami/Istri'),
(4, 'Teman'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jenis_kasus`
--

CREATE TABLE IF NOT EXISTS `ref_jenis_kasus` (
  `id_jenis_kasus` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_jenis_kasus` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jenis_kasus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `ref_jenis_kasus`
--

INSERT INTO `ref_jenis_kasus` (`id_jenis_kasus`, `kategori_jenis_kasus`) VALUES
(1, 'Baru'),
(2, 'Ulang'),
(3, 'Rujukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jenis_pelayanan`
--

CREATE TABLE IF NOT EXISTS `ref_jenis_pelayanan` (
  `id_jenis_pelayanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelayanan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jenis_pelayanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `ref_jenis_pelayanan`
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
-- Struktur dari tabel `ref_kecamatan`
--

CREATE TABLE IF NOT EXISTS `ref_kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `ref_kecamatan`
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
-- Struktur dari tabel `ref_kekerasan`
--

CREATE TABLE IF NOT EXISTS `ref_kekerasan` (
  `id_kekerasan` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_kekerasan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_kekerasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `ref_kekerasan`
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
-- Struktur dari tabel `ref_kelurahan`
--

CREATE TABLE IF NOT EXISTS `ref_kelurahan` (
  `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT,
  `kecamatan_id` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kelurahan`),
  KEY `id_kecamatan` (`kecamatan_id`),
  KEY `id_kecamatan_2` (`kecamatan_id`),
  KEY `kecamatan_id` (`kecamatan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data untuk tabel `ref_kelurahan`
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
(49, 6, ''),
(50, 6, ''),
(51, 6, ''),
(52, 7, 'Kranggan'),
(53, 7, 'Kademangan'),
(54, 7, 'Muncul'),
(55, 7, 'Setu'),
(56, 7, 'Babakan'),
(57, 7, 'Bakti Jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_pendidikan`
--

CREATE TABLE IF NOT EXISTS `ref_pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `jenjang_pendidikan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `ref_pendidikan`
--

INSERT INTO `ref_pendidikan` (`id_pendidikan`, `jenjang_pendidikan`) VALUES
(1, 'Tidak Sekolah'),
(2, 'SD'),
(3, 'SMP'),
(4, 'SMA'),
(5, 'Perguruan Tinggi'),
(6, 'Tidak diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_status_perkawinan`
--

CREATE TABLE IF NOT EXISTS `ref_status_perkawinan` (
  `id_perkawinan` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_perkawinan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perkawinan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ref_status_perkawinan`
--

INSERT INTO `ref_status_perkawinan` (`id_perkawinan`, `kategori_perkawinan`) VALUES
(1, 'Belum Kawin'),
(2, 'Kawin'),
(3, 'Cerai'),
(4, 'Tidak diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_tempat_kejadian`
--

CREATE TABLE IF NOT EXISTS `ref_tempat_kejadian` (
  `id_tempat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `ref_tempat_kejadian`
--

INSERT INTO `ref_tempat_kejadian` (`id_tempat`, `nama_tempat`) VALUES
(1, 'Rumah Tangga'),
(2, 'Tempat Kerja'),
(3, 'Sekolah'),
(4, 'Kampus'),
(5, 'Lainnya'),
(6, 'Tidak Diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_usia`
--

CREATE TABLE IF NOT EXISTS `ref_usia` (
  `id_usia` int(11) NOT NULL AUTO_INCREMENT,
  `range_usia` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data untuk tabel `ref_usia`
--

INSERT INTO `ref_usia` (`id_usia`, `range_usia`) VALUES
(1, '0'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '5'),
(7, '6'),
(8, '7'),
(9, '8'),
(10, '9'),
(11, '10'),
(12, '11'),
(13, '12'),
(14, '13'),
(15, '14'),
(16, '15'),
(17, '16'),
(18, '17'),
(19, '18'),
(20, '19'),
(21, '20'),
(22, '21'),
(23, '22'),
(24, '23'),
(25, '24'),
(26, '25'),
(27, '26'),
(28, '27'),
(29, '28'),
(30, '29'),
(31, '30'),
(32, '31'),
(33, '32'),
(34, '33'),
(35, '34'),
(36, '35'),
(37, '36'),
(38, '37'),
(39, '38'),
(40, '39'),
(41, '40'),
(42, '41'),
(43, '42'),
(44, '43'),
(45, '44'),
(46, '45'),
(47, '46'),
(48, '47'),
(49, '48'),
(50, '49'),
(51, '50'),
(52, '51'),
(53, '52'),
(54, '53'),
(55, '54'),
(56, '55'),
(57, '56'),
(58, '57'),
(59, '58'),
(60, '59'),
(61, '60'),
(62, '61'),
(63, '62'),
(64, '63'),
(65, '64'),
(66, '65'),
(67, '66'),
(68, '67'),
(69, '68'),
(70, '69'),
(71, '70'),
(72, '71'),
(73, '72'),
(74, '73'),
(75, '74'),
(76, '75'),
(77, '76'),
(78, '77'),
(79, '78'),
(80, '79'),
(81, '80'),
(82, '81'),
(83, '82'),
(84, '83'),
(85, '84'),
(86, '85'),
(87, '86'),
(88, '87'),
(89, '88'),
(90, '89'),
(91, '90'),
(92, '91'),
(93, '92'),
(94, '93'),
(95, '94'),
(96, '95'),
(97, '96'),
(98, '97'),
(99, '98'),
(100, '99'),
(101, '>=100'),
(102, 'Tidak Diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ciri_korban`
--

CREATE TABLE IF NOT EXISTS `tb_ciri_korban` (
  `id_kasus` int(11) NOT NULL AUTO_INCREMENT,
  `nama_korban` varchar(50) NOT NULL,
  `alamat_korban` text NOT NULL,
  `jk_korban` varchar(10) NOT NULL,
  `usia_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `perkawinan_id` int(11) NOT NULL,
  `tempat_id` int(11) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  PRIMARY KEY (`id_kasus`),
  KEY `usia_id` (`usia_id`,`pendidikan_id`,`perkawinan_id`,`tempat_id`),
  KEY `perkawinan_id` (`perkawinan_id`),
  KEY `tempat_id` (`tempat_id`),
  KEY `pendidikan_id` (`pendidikan_id`,`perkawinan_id`,`tempat_id`),
  KEY `id_kasus` (`id_kasus`),
  KEY `id_kasus_2` (`id_kasus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_ciri_korban`
--

INSERT INTO `tb_ciri_korban` (`id_kasus`, `nama_korban`, `alamat_korban`, `jk_korban`, `usia_id`, `pendidikan_id`, `pekerjaan`, `perkawinan_id`, `tempat_id`, `tanggal_kejadian`) VALUES
(1, 'IKA', 'Jalan Mangga No. 42 RT.03/09', 'Perempuan', 22, 5, 'Belum Bekerja', 1, 1, '2016-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ciri_pelaku`
--

CREATE TABLE IF NOT EXISTS `tb_ciri_pelaku` (
  `id_kasus` int(11) NOT NULL AUTO_INCREMENT,
  `jk_pelaku` varchar(10) NOT NULL,
  `usia_pelaku_id` int(11) NOT NULL,
  `pendidikan_pelaku_id` int(11) NOT NULL,
  `pekerjaan_pelaku` varchar(50) NOT NULL,
  `hubungan_id` int(11) NOT NULL,
  `kebangsaan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kasus`),
  KEY `usia_pelaku_id` (`usia_pelaku_id`,`pendidikan_pelaku_id`,`pekerjaan_pelaku`,`hubungan_id`),
  KEY `pendidikan_pelaku_id` (`pendidikan_pelaku_id`),
  KEY `perkawinan_pelaku_id` (`hubungan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_ciri_pelaku`
--

INSERT INTO `tb_ciri_pelaku` (`id_kasus`, `jk_pelaku`, `usia_pelaku_id`, `pendidikan_pelaku_id`, `pekerjaan_pelaku`, `hubungan_id`, `kebangsaan`) VALUES
(1, 'Laki-laki', 31, 3, 'Bekerja', 2, 'WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kekerasan`
--

CREATE TABLE IF NOT EXISTS `tb_kekerasan` (
  `id_tb_kekerasan` int(11) NOT NULL AUTO_INCREMENT,
  `kasus_id` int(11) NOT NULL,
  `kekerasan_id` int(11) NOT NULL,
  PRIMARY KEY (`id_tb_kekerasan`),
  KEY `kasus_id` (`kasus_id`),
  KEY `kekerasan_id` (`kekerasan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_kekerasan`
--

INSERT INTO `tb_kekerasan` (`id_tb_kekerasan`, `kasus_id`, `kekerasan_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan_kasus`
--

CREATE TABLE IF NOT EXISTS `tb_laporan_kasus` (
  `id_kasus` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_lapor` date NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `jenis_kasus_id` int(11) NOT NULL,
  `difabel` varchar(3) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kasus`),
  KEY `kecamatan_id` (`kecamatan_id`,`kelurahan_id`,`jenis_kasus_id`),
  KEY `kelurahan_id` (`kelurahan_id`,`jenis_kasus_id`),
  KEY `jenis_kasus_id` (`jenis_kasus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_laporan_kasus`
--

INSERT INTO `tb_laporan_kasus` (`id_kasus`, `tanggal_lapor`, `kecamatan_id`, `kelurahan_id`, `jenis_kasus_id`, `difabel`, `ket`) VALUES
(1, '2016-06-08', 1, 2, 2, '0', '  	');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE IF NOT EXISTS `tb_layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `kasus_id` int(11) NOT NULL,
  `jenis_pelayanan_id` int(11) NOT NULL,
  PRIMARY KEY (`id_layanan`),
  KEY `kasus_id` (`kasus_id`,`jenis_pelayanan_id`),
  KEY `jenis_pelayanan_id` (`jenis_pelayanan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `kasus_id`, `jenis_pelayanan_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelapor`
--

CREATE TABLE IF NOT EXISTS `tb_pelapor` (
  `id_pelapor` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_pengaduan` varchar(50) NOT NULL,
  `nik_pelapor` bigint(16) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pelapor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `nama`, `kontak`) VALUES
(1, 'laskar', '5e4d5e86a6ae10affb1365c7b50334df', '1', 'Iqna Aulia', '085641639655'),
(4, 'laskar2', 'laskar2', '2', 'Aulia Iqna', '085641639655'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'bejo', '123456');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ref_kelurahan`
--
ALTER TABLE `ref_kelurahan`
  ADD CONSTRAINT `ref_kelurahan_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `ref_kecamatan` (`id_kecamatan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ciri_korban`
--
ALTER TABLE `tb_ciri_korban`
  ADD CONSTRAINT `tb_ciri_korban_ibfk_1` FOREIGN KEY (`usia_id`) REFERENCES `ref_usia` (`id_usia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_korban_ibfk_2` FOREIGN KEY (`pendidikan_id`) REFERENCES `ref_pendidikan` (`id_pendidikan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_korban_ibfk_3` FOREIGN KEY (`perkawinan_id`) REFERENCES `ref_status_perkawinan` (`id_perkawinan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_korban_ibfk_5` FOREIGN KEY (`tempat_id`) REFERENCES `ref_tempat_kejadian` (`id_tempat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_korban_ibfk_6` FOREIGN KEY (`id_kasus`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_ciri_pelaku`
--
ALTER TABLE `tb_ciri_pelaku`
  ADD CONSTRAINT `tb_ciri_pelaku_ibfk_1` FOREIGN KEY (`usia_pelaku_id`) REFERENCES `ref_usia` (`id_usia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_pelaku_ibfk_2` FOREIGN KEY (`pendidikan_pelaku_id`) REFERENCES `ref_pendidikan` (`id_pendidikan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_pelaku_ibfk_4` FOREIGN KEY (`id_kasus`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ciri_pelaku_ibfk_5` FOREIGN KEY (`hubungan_id`) REFERENCES `ref_hubungan` (`id_hubungan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kekerasan`
--
ALTER TABLE `tb_kekerasan`
  ADD CONSTRAINT `tb_kekerasan_ibfk_2` FOREIGN KEY (`kekerasan_id`) REFERENCES `ref_kekerasan` (`id_kekerasan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kekerasan_ibfk_3` FOREIGN KEY (`kasus_id`) REFERENCES `ref_kekerasan` (`id_kekerasan`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_laporan_kasus`
--
ALTER TABLE `tb_laporan_kasus`
  ADD CONSTRAINT `tb_laporan_kasus_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `ref_kecamatan` (`id_kecamatan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_laporan_kasus_ibfk_2` FOREIGN KEY (`kelurahan_id`) REFERENCES `ref_kelurahan` (`id_kelurahan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_laporan_kasus_ibfk_3` FOREIGN KEY (`jenis_kasus_id`) REFERENCES `ref_jenis_kasus` (`id_jenis_kasus`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD CONSTRAINT `tb_layanan_ibfk_1` FOREIGN KEY (`kasus_id`) REFERENCES `tb_laporan_kasus` (`id_kasus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_layanan_ibfk_2` FOREIGN KEY (`jenis_pelayanan_id`) REFERENCES `ref_jenis_pelayanan` (`id_jenis_pelayanan`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
