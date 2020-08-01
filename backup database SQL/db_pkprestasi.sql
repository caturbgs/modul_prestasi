-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2020 at 01:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pkprestasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jns_kls`
--

CREATE TABLE `jns_kls` (
  `nama_jnskls` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jns_kls`
--

INSERT INTO `jns_kls` (`nama_jnskls`) VALUES
('Ti6A');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kodeklas` smallint(6) NOT NULL,
  `namaklas` varchar(7) NOT NULL,
  `jns_kls_nama_jnskls` varchar(20) NOT NULL,
  `prodi_prodi_id` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kodeklas`, `namaklas`, `jns_kls_nama_jnskls`, `prodi_prodi_id`) VALUES
(1, 'TI6A', 'Ti6A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(13) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `add_mhs` varchar(50) NOT NULL,
  `add_kel_mhs` varchar(20) NOT NULL,
  `add_kec_mhs` varchar(20) NOT NULL,
  `add_kota_mhs` varchar(20) NOT NULL,
  `bpk_mhs` varchar(50) NOT NULL,
  `add_bpk_mhs` varchar(50) DEFAULT NULL,
  `kel_bpk` varchar(50) DEFAULT NULL,
  `kec_bpk` varchar(20) DEFAULT NULL,
  `kota_bpk` varchar(20) DEFAULT NULL,
  `ibu_mhs` varchar(50) NOT NULL,
  `add_ibu_mhs` varchar(50) DEFAULT NULL,
  `kec_ibu` varchar(20) DEFAULT NULL,
  `kel_ibu` varchar(20) DEFAULT NULL,
  `kota_ibu` varchar(20) DEFAULT NULL,
  `tlp_mhs` bigint(20) NOT NULL,
  `tlp_bpk` bigint(20) NOT NULL,
  `tlp_ibu` bigint(20) NOT NULL,
  `profesi_bpk` varchar(50) NOT NULL,
  `profesi_ibu` varchar(50) NOT NULL,
  `penghasilan_bpk` bigint(20) NOT NULL,
  `email_mhs` varchar(25) NOT NULL,
  `email_ortu` varchar(25) NOT NULL,
  `kelas_kodeklas` smallint(6) NOT NULL,
  `thn_akad_thn_akad_id` double NOT NULL,
  `usr_name` varchar(13) NOT NULL,
  `password` varchar(12) NOT NULL,
  `prodi_prodi_id` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `add_mhs`, `add_kel_mhs`, `add_kec_mhs`, `add_kota_mhs`, `bpk_mhs`, `add_bpk_mhs`, `kel_bpk`, `kec_bpk`, `kota_bpk`, `ibu_mhs`, `add_ibu_mhs`, `kec_ibu`, `kel_ibu`, `kota_ibu`, `tlp_mhs`, `tlp_bpk`, `tlp_ibu`, `profesi_bpk`, `profesi_ibu`, `penghasilan_bpk`, `email_mhs`, `email_ortu`, `kelas_kodeklas`, `thn_akad_thn_akad_id`, `usr_name`, `password`, `prodi_prodi_id`) VALUES
('4617010044', 'Catur Bagaskara', 'kesadaran cikumpa', 'sukmajaya', 'sukmajaya', 'depok', 'bambang n', NULL, NULL, NULL, NULL, 'toeti noegraheni', NULL, NULL, NULL, NULL, 89678265696, 89678265696, 89678265696, 'karyawan swasta', 'ibu rumah tangga', 0, 'caturbagas11@gmail.com', '-', 1, 2017, '4617010044', 'caturbagas11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` bigint(20) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `nomor_sertifikat` varchar(255) NOT NULL,
  `capaian` varchar(255) DEFAULT NULL,
  `tingkat` varchar(255) DEFAULT NULL,
  `file_sertifikat` varchar(255) NOT NULL,
  `skor` bigint(20) DEFAULT NULL,
  `tahun_perolehan` int(11) DEFAULT NULL,
  `lembaga_pemberi` text DEFAULT NULL,
  `jumlah_penghargaan` int(11) DEFAULT NULL,
  `individu_kelompok` text DEFAULT NULL,
  `jumlah_peserta` int(11) DEFAULT NULL,
  `status` enum('waiting','accept','refuse','') NOT NULL DEFAULT 'waiting',
  `mahasiswa_nim` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `nomor_sertifikat`, `capaian`, `tingkat`, `file_sertifikat`, `skor`, `tahun_perolehan`, `lembaga_pemberi`, `jumlah_penghargaan`, `individu_kelompok`, `jumlah_peserta`, `status`, `mahasiswa_nim`) VALUES
(1, 'juara 1 lomba makan kerupuk', '1', 'juara 1', 'nasional', '/usr', NULL, 2019, 'rt rumah', 1, '1', 300, 'waiting', '4617010044');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `prodi_id` double NOT NULL,
  `namaprod` varchar(20) NOT NULL,
  `jenprod` varchar(2) NOT NULL,
  `jurusan_kodejur` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`prodi_id`, `namaprod`, `jenprod`, `jurusan_kodejur`) VALUES
(1, 'Teknik Informatika', 'D4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jns_kls`
--
ALTER TABLE `jns_kls`
  ADD PRIMARY KEY (`nama_jnskls`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kodeklas`),
  ADD KEY `kelas_jns_kls_fk` (`jns_kls_nama_jnskls`),
  ADD KEY `kelas_prodi_fk` (`prodi_prodi_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `mahasiswa_kelas_fk` (`kelas_kodeklas`),
  ADD KEY `mahasiswa_prodi_fk` (`prodi_prodi_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `sertifikasi_nim_fk_fkey` (`mahasiswa_nim`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_jns_kls_fk` FOREIGN KEY (`jns_kls_nama_jnskls`) REFERENCES `jns_kls` (`nama_jnskls`),
  ADD CONSTRAINT `kelas_prodi_fk` FOREIGN KEY (`prodi_prodi_id`) REFERENCES `prodi` (`prodi_id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_kelas_fk` FOREIGN KEY (`kelas_kodeklas`) REFERENCES `kelas` (`kodeklas`),
  ADD CONSTRAINT `mahasiswa_prodi_fk` FOREIGN KEY (`prodi_prodi_id`) REFERENCES `prodi` (`prodi_id`);

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `sertifikasi_nim_fk_fkey` FOREIGN KEY (`mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
