-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2019 at 02:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta_sistem_rekomendasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `jenis_assessment_id` char(36) DEFAULT NULL,
  `selesai` enum('0','1') DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_hasils`
--

CREATE TABLE `detail_hasils` (
  `keterangan_nilai_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `pertanyaan_id` char(36) DEFAULT NULL,
  `assessment_id` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kompetensis_keterangan_nilais`
--

CREATE TABLE `detail_kompetensis_keterangan_nilais` (
  `keterangan_nilai_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `hasil_kompetensi` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pertanyaans_assessments`
--

CREATE TABLE `detail_pertanyaans_assessments` (
  `assessment_id` char(36) DEFAULT NULL,
  `pertanyaan_id` char(36) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_users_jenis_assessments`
--

CREATE TABLE `detail_users_jenis_assessments` (
  `user_id` char(36) DEFAULT NULL,
  `jenis_assessment_id` char(36) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `maxattempt` int(3) DEFAULT '0',
  `attempt` int(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawabans`
--

CREATE TABLE `jawabans` (
  `id` char(36) NOT NULL,
  `pertanyaan_id` char(36) DEFAULT NULL,
  `jawaban` text,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_assessments`
--

CREATE TABLE `jenis_assessments` (
  `id` char(36) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_nilais`
--

CREATE TABLE `keterangan_nilais` (
  `id` char(36) NOT NULL,
  `range_score` int(3) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kompetensis`
--

CREATE TABLE `kompetensis` (
  `id` char(36) NOT NULL,
  `kompetensi` varchar(50) DEFAULT NULL,
  `definisi` text,
  `p_mandiri` text,
  `p_bermitra` text,
  `t_pelatihan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` char(36) NOT NULL,
  `pertanyaan` text,
  `jenis_assessment_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text,
  `image` varchar(20) DEFAULT NULL,
  `level` enum('Super Admin','Participant') NOT NULL DEFAULT 'Participant',
  `active` enum('0','1','2') NOT NULL DEFAULT '0',
  `confirmation_code` varchar(50) DEFAULT NULL,
  `code_reset_password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `assesment_id` (`jenis_assessment_id`);

--
-- Indexes for table `detail_kompetensis_keterangan_nilais`
--
ALTER TABLE `detail_kompetensis_keterangan_nilais`
  ADD KEY `keterangan_id` (`keterangan_nilai_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`);

--
-- Indexes for table `detail_pertanyaans_assessments`
--
ALTER TABLE `detail_pertanyaans_assessments`
  ADD KEY `ass_id` (`assessment_id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indexes for table `detail_users_jenis_assessments`
--
ALTER TABLE `detail_users_jenis_assessments`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `assesment_id` (`jenis_assessment_id`);

--
-- Indexes for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indexes for table `jenis_assessments`
--
ALTER TABLE `jenis_assessments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan_nilais`
--
ALTER TABLE `keterangan_nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kompetensis`
--
ALTER TABLE `kompetensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assesment_id` (`jenis_assessment_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `fk_assesment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jenis_assessment` FOREIGN KEY (`jenis_assessment_id`) REFERENCES `jenis_assessments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_kompetensis_keterangan_nilais`
--
ALTER TABLE `detail_kompetensis_keterangan_nilais`
  ADD CONSTRAINT `fk_keterangan_hasil` FOREIGN KEY (`keterangan_nilai_id`) REFERENCES `keterangan_nilais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kompetensi_hasil` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_users_jenis_assessments`
--
ALTER TABLE `detail_users_jenis_assessments`
  ADD CONSTRAINT `fk_jenis_assessment_id` FOREIGN KEY (`jenis_assessment_id`) REFERENCES `jenis_assessments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD CONSTRAINT `fk_pertanyaan_jawaban` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD CONSTRAINT `fk_kompetensi_id` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
