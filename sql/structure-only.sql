-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 06:00 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babysitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(9) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `headline` varchar(1000) NOT NULL,
  `isi` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `link` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `babysitter`
--

CREATE TABLE IF NOT EXISTS `babysitter` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telpon` varchar(16) NOT NULL,
  `pendidikan` varchar(32) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `kelamin` varchar(16) NOT NULL,
  `usia` tinyint(3) unsigned NOT NULL,
  `tinggi` tinyint(3) unsigned NOT NULL,
  `berat` tinyint(3) unsigned NOT NULL,
  `kota` varchar(16) DEFAULT NULL,
  `provinsi` varchar(32) NOT NULL,
  `skill_level` varchar(16) NOT NULL,
  `pengalaman` varchar(256) NOT NULL,
  `foto` varchar(16) NOT NULL DEFAULT 'default.jpg',
  `jawa` tinyint(1) NOT NULL,
  `luar_jawa` tinyint(1) NOT NULL,
  `keyword` varchar(1000) NOT NULL,
  `status` varchar(16) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carakerja`
--

CREATE TABLE IF NOT EXISTS `carakerja` (
  `carakerja` varchar(60) NOT NULL,
  `id` int(11) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diliput`
--

CREATE TABLE IF NOT EXISTS `diliput` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gambar` varchar(16) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` tinyint(9) unsigned NOT NULL,
  `pertanyaan` varchar(256) NOT NULL,
  `jawaban` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `foto` varchar(16) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_babysitter`
--

CREATE TABLE IF NOT EXISTS `gallery_babysitter` (
  `id` int(11) NOT NULL,
  `id_babysitter` int(11) NOT NULL,
  `foto` varchar(15) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kenapa`
--

CREATE TABLE IF NOT EXISTS `kenapa` (
  `id` int(11) NOT NULL,
  `kenapa` varchar(100) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `gambar` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(11) NOT NULL,
  `jenis` varchar(16) NOT NULL,
  `isi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `kota` varchar(16) NOT NULL,
  `provinsi` varchar(16) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE IF NOT EXISTS `lamaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kelamin` varchar(9) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` tinyint(3) unsigned NOT NULL,
  `bulan_lahir` tinyint(3) unsigned NOT NULL,
  `tahun_lahir` smallint(4) unsigned NOT NULL,
  `tinggi_badan` tinyint(3) unsigned NOT NULL,
  `berat_badan` tinyint(3) unsigned NOT NULL,
  `anak_ke` tinyint(3) unsigned NOT NULL,
  `saudara` tinyint(3) unsigned NOT NULL,
  `agama` varchar(9) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `jalan` varchar(70) NOT NULL,
  `rt` tinyint(3) unsigned NOT NULL,
  `rw` tinyint(3) unsigned NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(32) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `asal_pendidikan` varchar(30) NOT NULL,
  `lulus_tahun` smallint(4) unsigned NOT NULL,
  `riwayat_penyakit` varchar(1024) NOT NULL DEFAULT '-',
  `nama_ortu` varchar(40) DEFAULT NULL,
  `pekerjaan_ortu` varchar(40) DEFAULT NULL,
  `nama_suami` varchar(40) DEFAULT NULL,
  `pekerjaan_suami` varchar(40) DEFAULT NULL,
  `posisi` varchar(28) NOT NULL,
  `foto_wajah` varchar(40) NOT NULL,
  `foto_seluruh_badan` varchar(40) DEFAULT NULL,
  `berkas_lamaran` varchar(40) DEFAULT NULL,
  `mengetahui` varchar(8) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL DEFAULT '-',
  `tanggal` date NOT NULL,
  `status` enum('BELUM DICEK','SUDAH DICEK','AKAN DIPANGGIL','') DEFAULT 'BELUM DICEK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `layanan` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `link` varchar(100) NOT NULL,
  `gambar` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_babysitter`
--

CREATE TABLE IF NOT EXISTS `order_babysitter` (
  `id` int(11) NOT NULL,
  `id_babysitter` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `ktp` varchar(32) NOT NULL,
  `telpon` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `waktu_hubungi` varchar(64) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `tujuan` varchar(512) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `status` enum('BELUM DICEK','SUDAH DICEK','SUDAH DIHUBUNGI') NOT NULL DEFAULT 'BELUM DICEK',
  `tanggal` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `link` varchar(32) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id` tinyint(3) unsigned NOT NULL,
  `paket` varchar(32) NOT NULL,
  `deskripsi` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gambar` varchar(16) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `provinsi` varchar(32) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `id_babysitter` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `review` varchar(512) NOT NULL,
  `bintang` smallint(1) unsigned NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'BELUM DICEK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` smallint(5) unsigned NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `video` varchar(128) NOT NULL,
  `cover` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE IF NOT EXISTS `tim` (
  `id` tinyint(3) unsigned NOT NULL,
  `foto` varchar(16) NOT NULL DEFAULT 'default.jpg',
  `nama` varchar(50) NOT NULL,
  `job` varchar(16) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(64) NOT NULL,
  `thumbnail` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link_artikel` (`link`);

--
-- Indexes for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `kelamin` (`kelamin`),
  ADD KEY `agama` (`agama`),
  ADD KEY `usia` (`usia`),
  ADD FULLTEXT KEY `keyword` (`keyword`);

--
-- Indexes for table `carakerja`
--
ALTER TABLE `carakerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diliput`
--
ALTER TABLE `diliput`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_babysitter`
--
ALTER TABLE `gallery_babysitter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_suster` (`id_babysitter`);

--
-- Indexes for table `kenapa`
--
ALTER TABLE `kenapa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `provinsi` (`provinsi`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`layanan`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`jenis`) USING BTREE;

--
-- Indexes for table `order_babysitter`
--
ALTER TABLE `order_babysitter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_suster` (`id_babysitter`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`provinsi`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_suster` (`id_babysitter`,`id_user`),
  ADD KEY `review_user` (`id_user`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `babysitter`
--
ALTER TABLE `babysitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carakerja`
--
ALTER TABLE `carakerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diliput`
--
ALTER TABLE `diliput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` tinyint(9) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_babysitter`
--
ALTER TABLE `gallery_babysitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kenapa`
--
ALTER TABLE `kenapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_babysitter`
--
ALTER TABLE `order_babysitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD CONSTRAINT `suster_kota` FOREIGN KEY (`kota`) REFERENCES `kota` (`kota`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`provinsi`) ON UPDATE CASCADE;

--
-- Constraints for table `order_babysitter`
--
ALTER TABLE `order_babysitter`
  ADD CONSTRAINT `order_babysitter_ibfk_1` FOREIGN KEY (`id_babysitter`) REFERENCES `babysitter` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_suster` FOREIGN KEY (`id_babysitter`) REFERENCES `babysitter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
