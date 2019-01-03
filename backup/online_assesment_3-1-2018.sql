-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2019 at 03:02 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_online_assesment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

CREATE TABLE `assesments` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `tanggal_akses` date DEFAULT NULL,
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

--
-- Dumping data for table `jawabans`
--

INSERT INTO `jawabans` (`id`, `pertanyaan_id`, `jawaban`, `nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
('37534910-0c08-11e9-b251-4ddebf01ae55', '011f2ef0-0c08-11e9-b72a-4f4dd70ece21', 'Aku Spiderman', 3, '2018-12-30 00:55:03', '2018-12-30 00:55:19', '2018-12-30 00:55:19'),
('53e3dc80-0c08-11e9-a555-fde2a3535bc6', '011f2ef0-0c08-11e9-b72a-4f4dd70ece21', 'Aku Superman', 4, '2018-12-30 00:55:51', '2018-12-30 00:55:51', NULL),
('53feca60-0c08-11e9-8254-a3c6c9be232c', '011f2ef0-0c08-11e9-b72a-4f4dd70ece21', 'Aku Flash', 2, '2018-12-30 00:55:51', '2018-12-30 00:55:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_assesments`
--

CREATE TABLE `jenis_assesments` (
  `id` char(36) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_assesments`
--

INSERT INTO `jenis_assesments` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
('d7371d60-080b-11e9-815e-aba7160728e7', 'Asdfasdf', '2018-12-24 23:10:55', '2018-12-25 01:53:40', '2018-12-25 01:53:40'),
('ee20f8a0-0809-11e9-b5ff-95805e3671f5', 'Testing', '2018-12-24 22:57:15', '2018-12-24 22:57:15', NULL),
('f5eaceb0-080b-11e9-a614-c9381f011e11', 'Coba', '2018-12-24 23:11:47', '2018-12-25 03:25:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kompetensis`
--

CREATE TABLE `kompetensis` (
  `id` char(36) NOT NULL,
  `kompetensi` varchar(120) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensis`
--

INSERT INTO `kompetensis` (`id`, `kompetensi`, `created_at`, `updated_at`, `deleted_at`) VALUES
('416c4ce0-083d-11e9-a8e8-bbb7947cc632', 'Kompetensi', '2018-12-25 05:04:39', '2018-12-25 05:09:58', '2018-12-25 05:09:58'),
('5ae72900-083d-11e9-8121-3f5b5323ecfe', 'Kompetensi 1', '2018-12-25 05:05:22', '2018-12-25 05:12:05', NULL),
('b8970090-0871-11e9-a614-b718d2a894aa', 'Kompetensi 2', '2018-12-25 11:20:13', '2018-12-25 11:20:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` char(36) NOT NULL,
  `pertanyaan` text,
  `assesment_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `rowscore_id` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `pertanyaan`, `assesment_id`, `kompetensi_id`, `rowscore_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('011f2ef0-0c08-11e9-b72a-4f4dd70ece21', 'Siapakah Kamu?', 'f5eaceb0-080b-11e9-a614-c9381f011e11', 'b8970090-0871-11e9-a614-b718d2a894aa', 'c399f0f0-0871-11e9-8b89-051f64aab4fc', '2018-12-30 00:53:32', '2018-12-30 00:55:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_assesments`
--

CREATE TABLE `pertanyaan_assesments` (
  `id` char(36) NOT NULL,
  `ass_id` char(36) DEFAULT NULL,
  `pertanyaan_id` char(36) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rowscores`
--

CREATE TABLE `rowscores` (
  `id` char(36) NOT NULL,
  `nama_rowscore` varchar(150) DEFAULT NULL,
  `nama_singkat` varchar(100) DEFAULT NULL,
  `presentase` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rowscores`
--

INSERT INTO `rowscores` (`id`, `nama_rowscore`, `nama_singkat`, `presentase`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1bdfa220-0852-11e9-843c-236f8cca6ee5', 'B', 'C', 2, '2018-12-25 07:33:55', '2018-12-25 07:51:05', NULL),
('c399f0f0-0871-11e9-8b89-051f64aab4fc', 'C', 'D', 5, '2018-12-25 11:20:31', '2018-12-25 11:20:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text,
  `image` varchar(120) DEFAULT NULL,
  `level` enum('Super Admin','Participant') NOT NULL DEFAULT 'Participant',
  `active` enum('0','1','2') NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `nickname`, `phone`, `address`, `image`, `level`, `active`, `confirmation_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1', 'pandhu@gmail.com', 'pandhu612', '$2y$10$pxeAEbB1Mb1MPj1Srz1XHue2EFQ0jZ7UiFTe79mM/p8.YRVvBE.YC', 'Pandhu', 'Wibowo', 'Pandhu', '081296807905', 'Perumahan Griya Bunga Asri', 'PA-1544794744.jpg', 'Super Admin', '1', NULL, '2018-12-13 08:07:04', '2018-12-15 08:17:26', NULL),
('ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'pandhuw58@gmail.com', 'Pandhu', '$2y$10$7bxgxwW7w5kpo26EYfmtfuVZBiSsygFWh1zle2WszRFwKfSZlezem', 'Pandhus', 'Wibowo', '', '081296807905', '', 'PA-1546446195.jpg', 'Participant', '1', NULL, '2018-12-28 23:21:38', '2019-01-02 09:23:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indexes for table `jenis_assesments`
--
ALTER TABLE `jenis_assesments`
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
  ADD KEY `assesment_id` (`assesment_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`),
  ADD KEY `rowscore_id` (`rowscore_id`);

--
-- Indexes for table `pertanyaan_assesments`
--
ALTER TABLE `pertanyaan_assesments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ass_id` (`ass_id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`);

--
-- Indexes for table `rowscores`
--
ALTER TABLE `rowscores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assesments`
--
ALTER TABLE `assesments`
  ADD CONSTRAINT `fk_assesment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD CONSTRAINT `fk_pertanyaan_jawaban` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD CONSTRAINT `fk_assesment_pertanyaan` FOREIGN KEY (`assesment_id`) REFERENCES `jenis_assesments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_competencies_pertanyaan` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rowscores_pertanyaan` FOREIGN KEY (`rowscore_id`) REFERENCES `rowscores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan_assesments`
--
ALTER TABLE `pertanyaan_assesments`
  ADD CONSTRAINT `fk_assesment_pertanyaan_assesment` FOREIGN KEY (`ass_id`) REFERENCES `assesments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pertanyaan_pertanyaan_assesment` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
