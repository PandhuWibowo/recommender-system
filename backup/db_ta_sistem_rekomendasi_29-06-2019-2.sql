-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2019 at 06:01 PM
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

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`id`, `user_id`, `jenis_assessment_id`, `selesai`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0139f350-997b-11e9-9d02-d9ba44d62e06', 'c8be5fc0-997a-11e9-bcbe-a71231a00243', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-28 01:01:59', '2019-06-28 01:02:47', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '8e506500-9a6c-11e9-a673-4f9d7f85f88d', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:37:29', '2019-06-29 06:37:54', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '8e594fc0-9a6c-11e9-9a55-43a9481995cf', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:38:17', '2019-06-29 06:38:43', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', 'f5b1a590-9976-11e9-9593-1f7b505b9441', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-28 00:35:03', '2019-06-28 00:35:31', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', 'c8be5fc0-997a-11e9-bcbe-a71231a00243', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-28 02:43:56', '2019-06-28 02:44:27', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '989b0090-9a64-11e9-a0e7-2355b42115ed', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:39:52', '2019-06-29 06:40:26', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '1f10e3b0-9a65-11e9-9334-21dca8ba3d97', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:32:42', '2019-06-29 06:33:06', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '8e2b0280-9a6c-11e9-9cad-1f31ae98e4ae', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:33:53', '2019-06-29 06:34:21', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '1374ef80-9a63-11e9-bf7d-638d12446e1f', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 04:46:45', '2019-06-29 04:47:57', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '8e35b150-9a6c-11e9-b7d2-2d0fbd2ee614', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:34:49', '2019-06-29 06:35:19', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '8e3ea380-9a6c-11e9-8929-6f26168bd66a', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:35:47', '2019-06-29 06:36:14', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '82decff0-9977-11e9-98af-3d45b41fb2f3', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-28 00:39:47', '2019-06-28 00:40:14', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '35c557e0-9a7f-11e9-9386-e3baed692d55', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 08:59:44', '2019-06-29 09:00:14', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '8e477060-9a6c-11e9-a0f1-df08ad63cba0', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-29 06:36:44', '2019-06-29 06:37:07', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', 'c6179020-997b-11e9-b308-4b5718e2a5c4', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '1', '2019-06-28 01:09:01', '2019-06-28 01:09:28', NULL);

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

--
-- Dumping data for table `detail_kompetensis_keterangan_nilais`
--

INSERT INTO `detail_kompetensis_keterangan_nilais` (`keterangan_nilai_id`, `kompetensi_id`, `hasil_kompetensi`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', '86ec20f0-7bbc-11e9-ba99-6179681f2695', '<p>Memerlukan pengembangan signifikan dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-05-21 04:52:36', '2019-05-21 04:52:36', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', '86ec20f0-7bbc-11e9-ba99-6179681f2695', '<p>Memerlukan pengembangan dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-05-21 04:53:32', '2019-05-21 04:53:42', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', '86ec20f0-7bbc-11e9-ba99-6179681f2695', '<p>Menunjukkan kemampuan yang cukup baik dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-05-21 04:54:34', '2019-05-21 04:54:34', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', '86ec20f0-7bbc-11e9-ba99-6179681f2695', '<p>Menunjukkan kemampuan yang baik dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-05-21 04:55:23', '2019-05-21 04:55:23', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 'af449ac0-7bbc-11e9-a2c5-853b8850b79b', '<p>Memerlukan pengembangan signifikan dalam mengikuti aturan dalam bekerja.</p>', '2019-05-21 04:56:30', '2019-05-21 04:56:30', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 'af449ac0-7bbc-11e9-a2c5-853b8850b79b', '<p>Memerlukan pengembangan dalam mengikuti aturan dalam bekerja.</p>', '2019-05-21 04:57:21', '2019-05-21 04:57:21', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 'af449ac0-7bbc-11e9-a2c5-853b8850b79b', '<p>Menunjukkan kemampuan yang cukup baik dalam mengikuti aturan dalam bekerja.</p>', '2019-05-21 04:58:10', '2019-05-21 04:58:10', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 'af449ac0-7bbc-11e9-a2c5-853b8850b79b', '<p>Menunjukkan kemampuan yang&nbsp;baik dalam mengikuti aturan dalam bekerja.</p>', '2019-05-21 04:58:23', '2019-05-21 04:58:23', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 'ce634360-7bbc-11e9-aba1-9df42c7a5665', '<p>Memerlukan pengembangan yang signifikan dalam&nbsp;menyampaikan pesan secara&nbsp;jelas dan mudah dipahami lawan bicara.</p>', '2019-05-21 04:59:30', '2019-05-21 04:59:30', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 'ce634360-7bbc-11e9-aba1-9df42c7a5665', '<p>Memerlukan pengembangan&nbsp;dalam&nbsp;menyampaikan pesan secara&nbsp;jelas dan mudah dipahami lawan bicara.</p>', '2019-05-21 05:00:17', '2019-05-21 05:00:17', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 'ce634360-7bbc-11e9-aba1-9df42c7a5665', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam&nbsp;menyampaikan pesan secara&nbsp;jelas dan mudah dipahami lawan bicara.</p>', '2019-05-21 05:00:51', '2019-05-21 05:00:51', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 'ce634360-7bbc-11e9-aba1-9df42c7a5665', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam&nbsp;menyampaikan pesan secara&nbsp;jelas dan mudah dipahami lawan bicara.</p>', '2019-05-21 05:01:13', '2019-05-21 05:01:13', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 'f19ef1d0-7bbc-11e9-903f-a1b146ad42ca', '<p>Memerlukan pengembangan yang signifikan dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-05-21 05:03:06', '2019-05-21 05:03:06', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 'f19ef1d0-7bbc-11e9-903f-a1b146ad42ca', '<p>Memerlukan pengembangan&nbsp;dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-05-21 05:03:27', '2019-05-21 05:03:27', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 'f19ef1d0-7bbc-11e9-903f-a1b146ad42ca', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-05-21 05:03:58', '2019-05-21 05:03:58', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 'f19ef1d0-7bbc-11e9-903f-a1b146ad42ca', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-05-21 05:04:13', '2019-05-21 05:04:13', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', '13bf2f10-7bbd-11e9-826d-b9186d15a7bc', '<p>Memerlukan pengembangan signifikan dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:05:53', '2019-05-21 05:05:53', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', '13bf2f10-7bbd-11e9-826d-b9186d15a7bc', '<p>Memerlukan pengembangan&nbsp;dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:06:04', '2019-05-21 05:06:04', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', '13bf2f10-7bbd-11e9-826d-b9186d15a7bc', '<p>Menunjukkan kemampuan yang cukup baik dalam&nbsp;mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:06:51', '2019-05-21 05:06:51', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', '13bf2f10-7bbd-11e9-826d-b9186d15a7bc', '<p>Menunjukkan kemampuan yang baik dalam&nbsp;mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:07:14', '2019-05-21 05:07:14', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', '2ede3140-7bbd-11e9-b8ba-cb72b14dfec8', '<p>Memerlukan pengembangan signifikan dalam menangkap kebutuhan pelanggan dan memenuhinya.</p>', '2019-05-21 05:08:36', '2019-05-21 05:08:36', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', '2ede3140-7bbd-11e9-b8ba-cb72b14dfec8', '<p>Menunjukkan kemampuan yang baik dalam&nbsp;mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:08:53', '2019-05-21 05:08:53', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', '2ede3140-7bbd-11e9-b8ba-cb72b14dfec8', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam&nbsp;mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:09:15', '2019-05-21 05:09:15', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', '2ede3140-7bbd-11e9-b8ba-cb72b14dfec8', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam&nbsp;mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-05-21 05:09:40', '2019-05-21 05:09:40', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', '5998e5d0-7bbd-11e9-b635-cb540946e271', '<p>Memerlukan pengembangan signifikan dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-05-21 05:10:50', '2019-05-21 05:10:50', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', '5998e5d0-7bbd-11e9-b635-cb540946e271', '<p>Memerlukan pengembangan&nbsp;dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-05-21 05:11:12', '2019-05-21 05:11:12', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', '5998e5d0-7bbd-11e9-b635-cb540946e271', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-05-21 05:11:30', '2019-05-21 05:11:30', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', '5998e5d0-7bbd-11e9-b635-cb540946e271', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-05-21 05:11:49', '2019-05-21 05:11:49', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', '760f93d0-7bbd-11e9-adc5-0390b5db0363', '<p>Memerlukan pengembangan signifikan dalam menunjukkan inisiatif baru dilingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-05-21 05:13:14', '2019-05-21 05:13:14', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', '760f93d0-7bbd-11e9-adc5-0390b5db0363', '<p>Memerlukan pengembangan&nbsp;dalam menunjukkan inisiatif baru dilingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-05-21 05:13:34', '2019-05-21 05:13:34', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', '760f93d0-7bbd-11e9-adc5-0390b5db0363', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam menunjukkan inisiatif baru dilingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-05-21 05:13:55', '2019-05-21 05:13:55', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', '760f93d0-7bbd-11e9-adc5-0390b5db0363', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam menunjukkan inisiatif baru dilingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-05-21 05:14:19', '2019-05-21 05:14:19', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', '91e29560-7bbd-11e9-a004-a58e7f395cb0', '<p>Memerlukan pengembangan signifikan dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-05-21 05:15:21', '2019-05-21 05:15:21', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', '91e29560-7bbd-11e9-a004-a58e7f395cb0', '<p>Memerlukan pengembangan dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-05-21 05:15:34', '2019-05-21 05:15:34', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', '91e29560-7bbd-11e9-a004-a58e7f395cb0', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-05-21 05:16:02', '2019-05-21 05:16:02', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', '91e29560-7bbd-11e9-a004-a58e7f395cb0', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-05-21 05:16:13', '2019-05-21 05:16:13', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 'b44c3100-7bbd-11e9-838e-03d4ebc9826b', '<p>Memerlukan pengembangan signifikan dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '2019-05-21 05:17:53', '2019-05-21 05:17:53', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 'b44c3100-7bbd-11e9-838e-03d4ebc9826b', '<p>Memerlukan pengembangan dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '2019-05-21 05:18:11', '2019-05-21 05:18:11', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 'b44c3100-7bbd-11e9-838e-03d4ebc9826b', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '2019-05-21 05:18:29', '2019-05-21 05:18:29', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 'b44c3100-7bbd-11e9-838e-03d4ebc9826b', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '2019-05-21 05:18:45', '2019-05-21 05:18:45', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 'd381cfc0-7bbd-11e9-ba65-319769b34294', '<p>Memerlukan pengembangan signifikan dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-05-21 05:20:23', '2019-05-21 05:20:23', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 'd381cfc0-7bbd-11e9-ba65-319769b34294', '<p>Memerlukan pengembangan dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-05-21 05:20:34', '2019-05-21 05:20:34', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 'd381cfc0-7bbd-11e9-ba65-319769b34294', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-05-21 05:20:58', '2019-05-21 05:20:58', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 'd381cfc0-7bbd-11e9-ba65-319769b34294', '<p>Menunjukkan kemampuan yang&nbsp;baik&nbsp;dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-05-21 05:21:07', '2019-05-21 05:21:36', NULL),
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 'eec00df0-7bbd-11e9-a25b-059854ca516c', '<p>Memerlukan pengembangan signifikan dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '2019-05-21 05:22:53', '2019-05-21 05:22:53', NULL),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 'eec00df0-7bbd-11e9-a25b-059854ca516c', '<p>Memerlukan pengembangan dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '2019-05-21 05:23:11', '2019-05-21 05:23:11', NULL),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 'eec00df0-7bbd-11e9-a25b-059854ca516c', '<p>Menunjukkan kemampuan yang cukup baik&nbsp;dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '2019-05-21 05:23:31', '2019-05-21 05:23:31', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 'eec00df0-7bbd-11e9-a25b-059854ca516c', '<p>Menunjukkan kemampuan yang baik&nbsp;dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '2019-05-21 05:23:47', '2019-05-21 05:23:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pertanyaans_assessments`
--

CREATE TABLE `detail_pertanyaans_assessments` (
  `assessment_id` char(36) DEFAULT NULL,
  `pertanyaan_id` char(36) DEFAULT NULL,
  `jawaban_id` char(36) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pertanyaans_assessments`
--

INSERT INTO `detail_pertanyaans_assessments` (`assessment_id`, `pertanyaan_id`, `jawaban_id`, `nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-28 00:35:05', '2019-06-28 00:35:05', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-28 00:35:06', '2019-06-28 00:35:06', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '3410ac20-7bc8-11e9-a693-079152e2db74', '341298c0-7bc8-11e9-915c-7918d02232bd', 3, '2019-06-28 00:35:08', '2019-06-28 00:35:08', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fee960-7bc5-11e9-a832-ad7a87cdb7ad', 3, '2019-06-28 00:35:09', '2019-06-28 00:35:09', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f9c80-7bc6-11e9-a89c-412036b7cb46', 1, '2019-06-28 00:35:12', '2019-06-28 00:35:12', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-28 00:35:13', '2019-06-28 00:35:13', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760ea520-7bc8-11e9-a6c2-833724810afa', 1, '2019-06-28 00:35:15', '2019-06-28 00:35:15', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', 2, '2019-06-28 00:35:17', '2019-06-28 00:35:17', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f194c600-7bc4-11e9-adb9-733d4c32c8d6', 4, '2019-06-28 00:35:22', '2019-06-28 00:35:22', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-28 00:35:23', '2019-06-28 00:35:23', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66147f0-7bc5-11e9-b2f1-11b9ed6d8c3f', 3, '2019-06-28 00:35:24', '2019-06-28 00:35:24', NULL),
('3e0ecac0-9977-11e9-85d6-3372d00bd12e', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a01370-7bc7-11e9-81c4-c544db44d2f0', 1, '2019-06-28 00:35:26', '2019-06-28 00:35:26', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f695c0-7bc7-11e9-8e23-b3364ec409f9', 3, '2019-06-28 00:39:50', '2019-06-28 00:39:50', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '10944f00-7bc6-11e9-974c-4136ce791d88', '10961520-7bc6-11e9-94f4-3f754d0ae4c3', 1, '2019-06-28 00:39:51', '2019-06-28 00:39:51', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-28 00:39:52', '2019-06-28 00:39:52', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fee960-7bc5-11e9-a832-ad7a87cdb7ad', 3, '2019-06-28 00:39:54', '2019-06-28 00:39:54', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f9c80-7bc6-11e9-a89c-412036b7cb46', 1, '2019-06-28 00:39:57', '2019-06-28 00:39:57', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-28 00:39:58', '2019-06-28 00:39:58', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760dd4a0-7bc8-11e9-ab49-ff3ab48b3a2f', 2, '2019-06-28 00:40:00', '2019-06-28 00:40:00', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', 3, '2019-06-28 00:40:01', '2019-06-28 00:40:01', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1950160-7bc4-11e9-9893-3b510fb8e374', 2, '2019-06-28 00:40:06', '2019-06-28 00:40:06', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-28 00:40:07', '2019-06-28 00:40:07', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66147f0-7bc5-11e9-b2f1-11b9ed6d8c3f', 3, '2019-06-28 00:40:08', '2019-06-28 00:40:08', NULL),
('e7bd7dd0-9977-11e9-a07e-99cef9d40ba6', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-28 00:40:09', '2019-06-28 00:40:09', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-28 01:02:03', '2019-06-28 01:02:03', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-28 01:02:06', '2019-06-28 01:02:06', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '3410ac20-7bc8-11e9-a693-079152e2db74', '3412c3f0-7bc8-11e9-a192-55d87159fb63', 2, '2019-06-28 01:02:07', '2019-06-28 01:02:07', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fee960-7bc5-11e9-a832-ad7a87cdb7ad', 3, '2019-06-28 01:02:10', '2019-06-28 01:02:10', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f6de0-7bc6-11e9-8ba7-25a8c132e6ed', 3, '2019-06-28 01:02:13', '2019-06-28 01:02:13', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f1f00-7bc4-11e9-89f8-717dddb7c241', 3, '2019-06-28 01:02:15', '2019-06-28 01:02:15', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760dd4a0-7bc8-11e9-ab49-ff3ab48b3a2f', 2, '2019-06-28 01:02:16', '2019-06-28 01:02:16', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', 2, '2019-06-28 01:02:17', '2019-06-28 01:02:17', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1942ee0-7bc4-11e9-9dbd-898bf48a3f3d', 3, '2019-06-28 01:02:37', '2019-06-28 01:02:37', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c1c0a0-7bc7-11e9-a212-2df0bb7639a5', 4, '2019-06-28 01:02:38', '2019-06-28 01:02:38', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66147f0-7bc5-11e9-b2f1-11b9ed6d8c3f', 3, '2019-06-28 01:02:40', '2019-06-28 01:02:40', NULL),
('0139f350-997b-11e9-9d02-d9ba44d62e06', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-28 01:02:44', '2019-06-28 01:02:44', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-28 01:09:03', '2019-06-28 01:09:03', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-28 01:09:04', '2019-06-28 01:09:04', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '3410ac20-7bc8-11e9-a693-079152e2db74', '341262b0-7bc8-11e9-b84f-7ba308ca8f7b', 4, '2019-06-28 01:09:06', '2019-06-28 01:09:06', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47feba60-7bc5-11e9-b9c5-2f7b5c8dfed4', 4, '2019-06-28 01:09:07', '2019-06-28 01:09:07', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f0880-7bc6-11e9-8106-e95cf965525f', 4, '2019-06-28 01:09:09', '2019-06-28 01:09:09', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f1f00-7bc4-11e9-89f8-717dddb7c241', 3, '2019-06-28 01:09:11', '2019-06-28 01:09:11', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-28 01:09:12', '2019-06-28 01:09:12', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', 3, '2019-06-28 01:09:14', '2019-06-28 01:09:14', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1942ee0-7bc4-11e9-9dbd-898bf48a3f3d', 3, '2019-06-28 01:09:17', '2019-06-28 01:09:17', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-28 01:09:18', '2019-06-28 01:09:18', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661c250-7bc5-11e9-a56e-d951b670896d', 1, '2019-06-28 01:09:20', '2019-06-28 01:09:20', NULL),
('fccb12e0-997b-11e9-a2bd-dde243229d69', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-28 01:09:22', '2019-06-28 01:09:22', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-28 02:44:00', '2019-06-28 02:44:00', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-28 02:44:05', '2019-06-28 02:44:05', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-28 02:44:06', '2019-06-28 02:44:06', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fee960-7bc5-11e9-a832-ad7a87cdb7ad', 3, '2019-06-28 02:44:08', '2019-06-28 02:44:08', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f9c80-7bc6-11e9-a89c-412036b7cb46', 1, '2019-06-28 02:44:11', '2019-06-28 02:44:11', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f5ff0-7bc4-11e9-b42f-57858ee08959', 2, '2019-06-28 02:44:12', '2019-06-28 02:44:12', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760dd4a0-7bc8-11e9-ab49-ff3ab48b3a2f', 2, '2019-06-28 02:44:14', '2019-06-28 02:44:14', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', 3, '2019-06-28 02:44:15', '2019-06-28 02:44:15', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1949090-7bc4-11e9-bbb0-93b9bcfe1eed', 1, '2019-06-28 02:44:20', '2019-06-28 02:44:20', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-28 02:44:21', '2019-06-28 02:44:21', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66175c0-7bc5-11e9-ac3e-134c496a78d1', 2, '2019-06-28 02:44:22', '2019-06-28 02:44:22', NULL),
('3fad2d60-9989-11e9-863a-f1131b860aa6', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a01370-7bc7-11e9-81c4-c544db44d2f0', 1, '2019-06-28 02:44:23', '2019-06-28 02:44:23', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f695c0-7bc7-11e9-8e23-b3364ec409f9', 3, '2019-06-29 04:47:20', '2019-06-29 04:47:20', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-29 04:47:21', '2019-06-29 04:47:21', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-29 04:47:23', '2019-06-29 04:47:23', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47feba60-7bc5-11e9-b9c5-2f7b5c8dfed4', 4, '2019-06-29 04:47:26', '2019-06-29 04:47:26', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', 2, '2019-06-29 04:47:39', '2019-06-29 04:47:39', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760ee180-7bc8-11e9-ad98-39e4bf7cef3d', 3, '2019-06-29 04:47:41', '2019-06-29 04:47:41', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f5ff0-7bc4-11e9-b42f-57858ee08959', 2, '2019-06-29 04:47:44', '2019-06-29 04:47:44', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f0880-7bc6-11e9-8106-e95cf965525f', 4, '2019-06-29 04:47:44', '2019-06-29 04:47:44', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1950160-7bc4-11e9-9893-3b510fb8e374', 2, '2019-06-29 04:47:49', '2019-06-29 04:47:49', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-29 04:47:50', '2019-06-29 04:47:50', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66175c0-7bc5-11e9-ac3e-134c496a78d1', 2, '2019-06-29 04:47:53', '2019-06-29 04:47:53', NULL),
('92489e20-9a63-11e9-9179-e3e196e4a818', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-29 04:47:53', '2019-06-29 04:47:53', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-29 06:32:44', '2019-06-29 06:32:44', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '10944f00-7bc6-11e9-974c-4136ce791d88', '10961520-7bc6-11e9-94f4-3f754d0ae4c3', 1, '2019-06-29 06:32:46', '2019-06-29 06:32:46', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '3410ac20-7bc8-11e9-a693-079152e2db74', '341262b0-7bc8-11e9-b84f-7ba308ca8f7b', 4, '2019-06-29 06:32:47', '2019-06-29 06:32:47', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fee960-7bc5-11e9-a832-ad7a87cdb7ad', 3, '2019-06-29 06:32:48', '2019-06-29 06:32:48', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f6de0-7bc6-11e9-8ba7-25a8c132e6ed', 3, '2019-06-29 06:32:51', '2019-06-29 06:32:51', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f5ff0-7bc4-11e9-b42f-57858ee08959', 2, '2019-06-29 06:32:52', '2019-06-29 06:32:52', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760ea520-7bc8-11e9-a6c2-833724810afa', 1, '2019-06-29 06:32:53', '2019-06-29 06:32:53', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', 3, '2019-06-29 06:32:54', '2019-06-29 06:32:54', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1949090-7bc4-11e9-bbb0-93b9bcfe1eed', 1, '2019-06-29 06:32:58', '2019-06-29 06:32:58', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c28c20-7bc7-11e9-9625-13731f82281c', 3, '2019-06-29 06:32:59', '2019-06-29 06:32:59', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661c250-7bc5-11e9-a56e-d951b670896d', 1, '2019-06-29 06:33:00', '2019-06-29 06:33:00', NULL),
('5f639620-9a72-11e9-93e2-0f7ecd0c0de6', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-29 06:33:02', '2019-06-29 06:33:02', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-29 06:33:55', '2019-06-29 06:33:55', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '10944f00-7bc6-11e9-974c-4136ce791d88', '1096a450-7bc6-11e9-a0a4-65dbac53fc1d', 4, '2019-06-29 06:33:57', '2019-06-29 06:33:57', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-29 06:33:58', '2019-06-29 06:33:58', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fe8890-7bc5-11e9-a960-21965b269ec4', 2, '2019-06-29 06:34:00', '2019-06-29 06:34:00', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f6de0-7bc6-11e9-8ba7-25a8c132e6ed', 3, '2019-06-29 06:34:03', '2019-06-29 06:34:03', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-29 06:34:04', '2019-06-29 06:34:04', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-29 06:34:06', '2019-06-29 06:34:06', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', 2, '2019-06-29 06:34:07', '2019-06-29 06:34:07', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1942ee0-7bc4-11e9-9dbd-898bf48a3f3d', 3, '2019-06-29 06:34:12', '2019-06-29 06:34:12', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c28c20-7bc7-11e9-9625-13731f82281c', 3, '2019-06-29 06:34:13', '2019-06-29 06:34:13', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661c250-7bc5-11e9-a56e-d951b670896d', 1, '2019-06-29 06:34:15', '2019-06-29 06:34:15', NULL),
('89945bd0-9a72-11e9-8059-e343be3222f0', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a01370-7bc7-11e9-81c4-c544db44d2f0', 1, '2019-06-29 06:34:17', '2019-06-29 06:34:17', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f702e0-7bc7-11e9-9a20-374babe3c9fb', 1, '2019-06-29 06:34:52', '2019-06-29 06:34:52', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '10944f00-7bc6-11e9-974c-4136ce791d88', '10961520-7bc6-11e9-94f4-3f754d0ae4c3', 1, '2019-06-29 06:34:54', '2019-06-29 06:34:54', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-29 06:34:55', '2019-06-29 06:34:55', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fe8890-7bc5-11e9-a960-21965b269ec4', 2, '2019-06-29 06:34:57', '2019-06-29 06:34:57', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f6de0-7bc6-11e9-8ba7-25a8c132e6ed', 3, '2019-06-29 06:35:01', '2019-06-29 06:35:01', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f1f00-7bc4-11e9-89f8-717dddb7c241', 3, '2019-06-29 06:35:02', '2019-06-29 06:35:02', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-29 06:35:03', '2019-06-29 06:35:03', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1c7f50-7bc7-11e9-b18a-fd295143aba8', 4, '2019-06-29 06:35:05', '2019-06-29 06:35:05', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1942ee0-7bc4-11e9-9dbd-898bf48a3f3d', 3, '2019-06-29 06:35:09', '2019-06-29 06:35:09', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-29 06:35:10', '2019-06-29 06:35:10', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661fa10-7bc5-11e9-8d68-87fb200cedf1', 4, '2019-06-29 06:35:12', '2019-06-29 06:35:12', NULL),
('ab16d5e0-9a72-11e9-9daf-8346780aa610', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a01370-7bc7-11e9-81c4-c544db44d2f0', 1, '2019-06-29 06:35:14', '2019-06-29 06:35:14', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-29 06:35:49', '2019-06-29 06:35:49', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-29 06:35:51', '2019-06-29 06:35:51', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-29 06:35:52', '2019-06-29 06:35:52', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fe8890-7bc5-11e9-a960-21965b269ec4', 2, '2019-06-29 06:35:53', '2019-06-29 06:35:53', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f3cc0-7bc6-11e9-aef4-7ddc585724d5', 2, '2019-06-29 06:35:57', '2019-06-29 06:35:57', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f1f00-7bc4-11e9-89f8-717dddb7c241', 3, '2019-06-29 06:35:58', '2019-06-29 06:35:58', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-29 06:36:00', '2019-06-29 06:36:00', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', 2, '2019-06-29 06:36:02', '2019-06-29 06:36:02', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1950160-7bc4-11e9-9893-3b510fb8e374', 2, '2019-06-29 06:36:06', '2019-06-29 06:36:06', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-29 06:36:07', '2019-06-29 06:36:07', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661fa10-7bc5-11e9-8d68-87fb200cedf1', 4, '2019-06-29 06:36:08', '2019-06-29 06:36:08', NULL),
('cd4d01e0-9a72-11e9-8904-c5a925293fcf', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a076b0-7bc7-11e9-aea0-09c6a3929962', 3, '2019-06-29 06:36:10', '2019-06-29 06:36:10', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f695c0-7bc7-11e9-8e23-b3364ec409f9', 3, '2019-06-29 06:36:46', '2019-06-29 06:36:46', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-29 06:36:47', '2019-06-29 06:36:47', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '3410ac20-7bc8-11e9-a693-079152e2db74', '341262b0-7bc8-11e9-b84f-7ba308ca8f7b', 4, '2019-06-29 06:36:49', '2019-06-29 06:36:49', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47feba60-7bc5-11e9-b9c5-2f7b5c8dfed4', 4, '2019-06-29 06:36:50', '2019-06-29 06:36:50', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f3cc0-7bc6-11e9-aef4-7ddc585724d5', 2, '2019-06-29 06:36:53', '2019-06-29 06:36:53', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5f1f00-7bc4-11e9-89f8-717dddb7c241', 3, '2019-06-29 06:36:54', '2019-06-29 06:36:54', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-29 06:36:56', '2019-06-29 06:36:56', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', 3, '2019-06-29 06:36:58', '2019-06-29 06:36:58', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1949090-7bc4-11e9-bbb0-93b9bcfe1eed', 1, '2019-06-29 06:37:01', '2019-06-29 06:37:01', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c1f180-7bc7-11e9-97ab-8f7f459d4c31', 2, '2019-06-29 06:37:02', '2019-06-29 06:37:02', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66175c0-7bc5-11e9-ac3e-134c496a78d1', 2, '2019-06-29 06:37:04', '2019-06-29 06:37:04', NULL),
('ef616570-9a72-11e9-ae2e-d3cf020e9d2f', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-29 06:37:05', '2019-06-29 06:37:05', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f65eb0-7bc7-11e9-85df-2f4af2c22320', 4, '2019-06-29 06:37:30', '2019-06-29 06:37:30', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '10944f00-7bc6-11e9-974c-4136ce791d88', '10961520-7bc6-11e9-94f4-3f754d0ae4c3', 1, '2019-06-29 06:37:32', '2019-06-29 06:37:32', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-29 06:37:34', '2019-06-29 06:37:34', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fe8890-7bc5-11e9-a960-21965b269ec4', 2, '2019-06-29 06:37:36', '2019-06-29 06:37:36', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f9c80-7bc6-11e9-a89c-412036b7cb46', 1, '2019-06-29 06:37:40', '2019-06-29 06:37:40', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-29 06:37:41', '2019-06-29 06:37:41', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760ee180-7bc8-11e9-ad98-39e4bf7cef3d', 3, '2019-06-29 06:37:42', '2019-06-29 06:37:42', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', 3, '2019-06-29 06:37:44', '2019-06-29 06:37:44', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1949090-7bc4-11e9-bbb0-93b9bcfe1eed', 1, '2019-06-29 06:37:47', '2019-06-29 06:37:47', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c28c20-7bc7-11e9-9625-13731f82281c', 3, '2019-06-29 06:37:48', '2019-06-29 06:37:48', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661c250-7bc5-11e9-a56e-d951b670896d', 1, '2019-06-29 06:37:50', '2019-06-29 06:37:50', NULL),
('09f374e0-9a73-11e9-afd5-dfc483fabb75', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a04aa0-7bc7-11e9-87c2-053f8da3397f', 2, '2019-06-29 06:37:51', '2019-06-29 06:37:51', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f702e0-7bc7-11e9-9a20-374babe3c9fb', 1, '2019-06-29 06:38:20', '2019-06-29 06:38:20', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-29 06:38:21', '2019-06-29 06:38:21', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '3410ac20-7bc8-11e9-a693-079152e2db74', '341298c0-7bc8-11e9-915c-7918d02232bd', 3, '2019-06-29 06:38:23', '2019-06-29 06:38:23', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fe8890-7bc5-11e9-a960-21965b269ec4', 2, '2019-06-29 06:38:25', '2019-06-29 06:38:25', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f9c80-7bc6-11e9-a89c-412036b7cb46', 1, '2019-06-29 06:38:28', '2019-06-29 06:38:28', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-29 06:38:29', '2019-06-29 06:38:29', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760dd4a0-7bc8-11e9-ab49-ff3ab48b3a2f', 2, '2019-06-29 06:38:31', '2019-06-29 06:38:31', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', 2, '2019-06-29 06:38:32', '2019-06-29 06:38:32', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1950160-7bc4-11e9-9893-3b510fb8e374', 2, '2019-06-29 06:38:36', '2019-06-29 06:38:36', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-29 06:38:37', '2019-06-29 06:38:37', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a66175c0-7bc5-11e9-ac3e-134c496a78d1', 2, '2019-06-29 06:38:39', '2019-06-29 06:38:39', NULL),
('27187770-9a73-11e9-8eaa-5d2f555faaa7', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a01370-7bc7-11e9-81c4-c544db44d2f0', 1, '2019-06-29 06:38:40', '2019-06-29 06:38:40', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f695c0-7bc7-11e9-8e23-b3364ec409f9', 3, '2019-06-29 06:39:54', '2019-06-29 06:39:54', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '10944f00-7bc6-11e9-974c-4136ce791d88', '10961520-7bc6-11e9-94f4-3f754d0ae4c3', 1, '2019-06-29 06:39:55', '2019-06-29 06:39:55', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '3410ac20-7bc8-11e9-a693-079152e2db74', '341262b0-7bc8-11e9-b84f-7ba308ca8f7b', 4, '2019-06-29 06:39:57', '2019-06-29 06:39:57', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fee960-7bc5-11e9-a832-ad7a87cdb7ad', 3, '2019-06-29 06:39:59', '2019-06-29 06:39:59', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f6de0-7bc6-11e9-8ba7-25a8c132e6ed', 3, '2019-06-29 06:40:02', '2019-06-29 06:40:02', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-29 06:40:03', '2019-06-29 06:40:03', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-29 06:40:05', '2019-06-29 06:40:05', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1c5110-7bc7-11e9-80aa-816cc6b45761', 1, '2019-06-29 06:40:06', '2019-06-29 06:40:06', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f194c600-7bc4-11e9-adb9-733d4c32c8d6', 4, '2019-06-29 06:40:13', '2019-06-29 06:40:13', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 1, '2019-06-29 06:40:14', '2019-06-29 06:40:14', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661fa10-7bc5-11e9-8d68-87fb200cedf1', 4, '2019-06-29 06:40:16', '2019-06-29 06:40:16', NULL),
('5f5fd3e0-9a73-11e9-96f0-1dffe4df9791', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a076b0-7bc7-11e9-aea0-09c6a3929962', 3, '2019-06-29 06:40:17', '2019-06-29 06:40:17', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', '07f702e0-7bc7-11e9-9a20-374babe3c9fb', 1, '2019-06-29 08:59:47', '2019-06-29 08:59:47', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '10944f00-7bc6-11e9-974c-4136ce791d88', '10964eb0-7bc6-11e9-b61c-172c5da09e99', 2, '2019-06-29 08:59:48', '2019-06-29 08:59:48', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '3410ac20-7bc8-11e9-a693-079152e2db74', '34123510-7bc8-11e9-a942-afc112435c89', 1, '2019-06-29 08:59:50', '2019-06-29 08:59:50', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', '47fe8890-7bc5-11e9-a960-21965b269ec4', 2, '2019-06-29 08:59:52', '2019-06-29 08:59:52', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', '8e3f0880-7bc6-11e9-8106-e95cf965525f', 4, '2019-06-29 08:59:56', '2019-06-29 08:59:56', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', '8c5fbb00-7bc4-11e9-8c54-971b61f921a3', 1, '2019-06-29 08:59:58', '2019-06-29 08:59:58', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '76090d80-7bc8-11e9-9493-c3ef2d2543db', '760e4630-7bc8-11e9-bea1-b9e6e254fc1a', 4, '2019-06-29 09:00:00', '2019-06-29 09:00:00', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', '4e1c7f50-7bc7-11e9-b18a-fd295143aba8', 4, '2019-06-29 09:00:01', '2019-06-29 09:00:01', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'f1949090-7bc4-11e9-bbb0-93b9bcfe1eed', 1, '2019-06-29 09:00:05', '2019-06-29 09:00:05', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'e2c1f180-7bc7-11e9-97ab-8f7f459d4c31', 2, '2019-06-29 09:00:06', '2019-06-29 09:00:06', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'a661c250-7bc5-11e9-a56e-d951b670896d', 1, '2019-06-29 09:00:08', '2019-06-29 09:00:08', NULL),
('e93bd310-9a86-11e9-ad97-ddf78f06e7da', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', '97a076b0-7bc7-11e9-aea0-09c6a3929962', 3, '2019-06-29 09:00:11', '2019-06-29 09:00:11', NULL);

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

--
-- Dumping data for table `detail_users_jenis_assessments`
--

INSERT INTO `detail_users_jenis_assessments` (`user_id`, `jenis_assessment_id`, `status`, `maxattempt`, `attempt`, `created_at`, `updated_at`, `deleted_at`) VALUES
('f5b1a590-9976-11e9-9593-1f7b505b9441', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-28 00:34:36', '2019-06-28 00:35:03', NULL),
('82decff0-9977-11e9-98af-3d45b41fb2f3', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-28 00:39:36', '2019-06-28 00:39:47', NULL),
('c8be5fc0-997a-11e9-bcbe-a71231a00243', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 2, '2019-06-28 01:01:38', '2019-06-28 02:43:56', NULL),
('c6179020-997b-11e9-b308-4b5718e2a5c4', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-28 01:08:40', '2019-06-28 01:09:01', NULL),
('1374ef80-9a63-11e9-bf7d-638d12446e1f', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 04:45:47', '2019-06-29 04:46:45', NULL),
('1f10e3b0-9a65-11e9-9334-21dca8ba3d97', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:32:42', NULL),
('8e2b0280-9a6c-11e9-9cad-1f31ae98e4ae', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:33:53', NULL),
('8e35b150-9a6c-11e9-b7d2-2d0fbd2ee614', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:34:49', NULL),
('8e3ea380-9a6c-11e9-8929-6f26168bd66a', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:35:47', NULL),
('8e477060-9a6c-11e9-a0f1-df08ad63cba0', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:36:44', NULL),
('8e506500-9a6c-11e9-a673-4f9d7f85f88d', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:37:29', NULL),
('8e594fc0-9a6c-11e9-9a55-43a9481995cf', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:38:17', NULL),
('989b0090-9a64-11e9-a0e7-2355b42115ed', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 06:31:46', '2019-06-29 06:39:52', NULL),
('35c557e0-9a7f-11e9-9386-e3baed692d55', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 0, 10, 1, '2019-06-29 08:59:12', '2019-06-29 08:59:44', NULL);

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
('07f65eb0-7bc7-11e9-85df-2f4af2c22320', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', 'Menerima bahwa seharusnya Anda terlebih dahulu menginformasikan Pimpinan Proyek tersebut. Anda juga perlu menjelaskan pentingnya situasi yang terjadi sehingga diperlukan tindakan lebih lanjut, mengingat terbatasnya sumber daya. Anda juga meminta maaf atas ketidaknyamanan yang terjadi.', 4, '2019-05-21 05:50:37', '2019-05-21 05:50:37', NULL),
('07f695c0-7bc7-11e9-8e23-b3364ec409f9', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', 'Anda meminta maaf atas ketidaknyamanan yang ditimbulkan. Anda menawarkan kompensasi dengan akan adanya tim Anda juga bisa mengalokasikan waktu lebih\r\nbanyak di proyek lain.', 3, '2019-05-21 05:50:37', '2019-05-21 05:50:37', NULL),
('07f6d430-7bc7-11e9-98fc-1b9da51b14d4', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', 'Bertahan bahwa tindakan Anda benar dan menekankan pentingnya peran dari kedua anggota tim tersebut untuk terlibat penuh di waktu tersebut.', 2, '2019-05-21 05:50:37', '2019-05-21 05:50:37', NULL),
('07f702e0-7bc7-11e9-9a20-374babe3c9fb', '07f483f0-7bc7-11e9-9bd9-eb0a075e5796', 'Anda mengabaikan kekecewaan tersebut dan fokus pada proyek Anda sendiri. Anda memprioritaskan tugas, dan Anda hanya butuh untuk memastikan bahwa tugas\r\nterselesaikan dengan baik.', 1, '2019-05-21 05:50:37', '2019-05-21 05:50:37', NULL),
('10961520-7bc6-11e9-94f4-3f754d0ae4c3', '10944f00-7bc6-11e9-974c-4136ce791d88', 'Segera menginformasikan pada management senior mengenai perlunya intervensi segera karena ini adalah isu yang besar.', 1, '2019-05-21 05:43:42', '2019-05-21 05:43:42', NULL),
('10964eb0-7bc6-11e9-b61c-172c5da09e99', '10944f00-7bc6-11e9-974c-4136ce791d88', 'Memeriksa separah apa situasinya dan berkonsultasi intensif dengan departemen yang relevan.', 2, '2019-05-21 05:43:42', '2019-05-21 05:43:42', NULL),
('1096a450-7bc6-11e9-a0a4-65dbac53fc1d', '10944f00-7bc6-11e9-974c-4136ce791d88', 'Menginformasikan pada departemen yang relevan, untuk menggantikan produk yang ada saat ini dengan yang baru, dan memastikan bahwa problem seperti ini dapat terselesaikan lebih awal, sebelum produk didistribusikan ke pelanggan.', 4, '2019-05-21 05:43:42', '2019-05-21 05:43:42', NULL),
('1096e380-7bc6-11e9-b02c-cd2397c5de90', '10944f00-7bc6-11e9-974c-4136ce791d88', 'Menarik produk dari market dengan segera, dan memastikan bahwa produk yang baru dapat segera terkirim secepat mungkin.', 3, '2019-05-21 05:43:42', '2019-05-21 05:43:42', NULL),
('16f354e0-9189-11e9-a4ef-7357bfa83e95', 'dbab5940-9187-11e9-9402-ab6d5e9bd3a6', 'adsfad', 1, '2019-06-17 22:22:39', '2019-06-17 22:33:13', '2019-06-17 22:33:13'),
('34123510-7bc8-11e9-a942-afc112435c89', '3410ac20-7bc8-11e9-a693-079152e2db74', 'Memberitahu mereka bahwa memang pekerjaan biasanya monoton setelah dijalani selama beberapa waktu, dan menyarankan agar mereka berusaha untuk berdaptasi pada hal ini.', 1, '2019-05-21 05:59:00', '2019-05-21 05:59:00', NULL),
('341262b0-7bc8-11e9-b84f-7ba308ca8f7b', '3410ac20-7bc8-11e9-a693-079152e2db74', 'Mencoba untuk melibatkan mereka untuk lebih banyak mengadakan sesi knowledge sharing (berbagi pengetahuan), sehingga mereka secara aktif bisa memahami apa hubungan antara satu tugas dengan tugas lain, kemudian juga belajar dari satu sama lain.', 4, '2019-05-21 05:59:00', '2019-05-21 05:59:00', NULL),
('341298c0-7bc8-11e9-915c-7918d02232bd', '3410ac20-7bc8-11e9-a693-079152e2db74', 'Mencari umpan balik dari mereka tentang bagaimana membuat pekerjaan menjadi lebih menarik bagi mereka. Mencari saran terkait proyek ataupun tugas seperti apa yang mereka ingin kerjakan.', 3, '2019-05-21 05:59:00', '2019-05-21 05:59:00', NULL),
('3412c3f0-7bc8-11e9-a192-55d87159fb63', '3410ac20-7bc8-11e9-a693-079152e2db74', 'Melakukan penelitian intensif mengenai bagaimana membuat proses kerja menjadi lebih menyenangkan dan lebih membuat mereka mau terlibat.', 2, '2019-05-21 05:59:00', '2019-05-21 05:59:00', NULL),
('47fe8890-7bc5-11e9-a960-21965b269ec4', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', 'Mencari alternatif suplier yang dapat memproduksi bahan mentah yang mirip dan meminta tambahan tenaga kerja untuk mengakselerasi proses pengujian bahan.', 2, '2019-05-21 05:38:05', '2019-05-21 05:38:05', NULL),
('47feba60-7bc5-11e9-b9c5-2f7b5c8dfed4', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', 'Mencari supplier alternatif dengan juga berupaya mempengaruhi supplier yang ada saat ini untuk memproduksi bahan mentah yang sama untuk perusahaan Anda. Anda kemudian menyetujui model harga yang berdasarkan pada volume (volume based pricing model) untuk mengkompensasi profit yang menjadi lebih rendah yang disebabkan oleh mereka.', 4, '2019-05-21 05:38:05', '2019-05-21 05:38:05', NULL),
('47fee960-7bc5-11e9-a832-ad7a87cdb7ad', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', 'Mendapatkan dana tambahan untuk proyek ini. Mempengaruhi supplier untuk memproduksi bahan mentah dengan harga yang lebih tinggi daripada yang sebelumnya,\r\nsampai volume yang ada mencapai level yang diinginkan.', 3, '2019-05-21 05:38:05', '2019-05-21 05:38:05', NULL),
('47ff0c10-7bc5-11e9-885d-677902fa2085', '47fce4e0-7bc5-11e9-b33a-e115b6e471a9', 'Tidak menghabiskan banyak waktu untuk mempengaruhi supplier yang ada saat ini. Mencari alternatif supplier yang dapat merancang bahan mentah yang mirip dan mulai memproduksi lagi.', 1, '2019-05-21 05:38:05', '2019-05-21 05:38:05', NULL),
('4e1ba980-7bc7-11e9-a2dc-6f6e98455d98', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', 'Anda menginformasikan tim Anda mengenai perubahan yang akan terjadi dan keputusan yang baru-baru ini diambil oleh management. Anda menjelaskan mengenai kemungkinan adanya kenaikan gaji tahunan akan terjadi di tahun berikutnya secara rapel, sehingga diharapkan hal ini dapat menjamin tim Anda akan tetap bersama Anda.', 2, '2019-05-21 05:52:35', '2019-05-21 05:52:35', NULL),
('4e1bfd30-7bc7-11e9-a24e-1d6fcfc31004', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', 'Anda menginformasikan tim Anda mengenai perubahan yang ditetapkan oleh perusahaan yang telah mengakuisisi perusahaan Anda, terutama perubahan dalam peran mereka di pekerjaan dan struktur gaji. Minta mereka untuk menghubungi Tim HR untuk meminta klarifikasi ataupun menyampaikan permonohon mereka.', 3, '2019-05-21 05:52:35', '2019-05-21 05:52:35', NULL),
('4e1c5110-7bc7-11e9-80aa-816cc6b45761', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', 'Anda mengapresiasi kontribusi anggota tim Anda terhadap organisasi, dan menjelaskan kembali mengenai peluang karir yang mereka miliki di organisasi. Fokus pada hasil yang positif dari akuisisi yang terjadi.', 1, '2019-05-21 05:52:35', '2019-05-21 05:52:35', NULL),
('4e1c7f50-7bc7-11e9-b18a-fd295143aba8', '4e1a0920-7bc7-11e9-86c6-39516a36ce3f', 'Anda menemui tim Anda satu per satu dan menjelaskan alasan dibalik keputusan yang dibuat. Anda janjikan kepada mereka mengenai adanya sumber daya yang bisa\r\nmereka dapatkan dan dukungan yang akan diberikan organisasi untuk membantu mereka dalam menghadapi perubahan yang terjadi.', 4, '2019-05-21 05:52:35', '2019-05-21 05:52:35', NULL),
('760dd4a0-7bc8-11e9-ab49-ff3ab48b3a2f', '76090d80-7bc8-11e9-9493-c3ef2d2543db', 'Berkonsultasi dengan ahli yang terbaik di industri ini untuk mendapatkan panduan dan mempertemukan ahli tersebut dengan tim Anda.', 2, '2019-05-21 06:00:51', '2019-05-21 06:00:51', NULL),
('760e4630-7bc8-11e9-bea1-b9e6e254fc1a', '76090d80-7bc8-11e9-9493-c3ef2d2543db', 'Meminta mereka untuk menemukan perbedaan fitur produk tersebut dengan produk lain di market, sehingga mereka dapat menghasilkan sesuatu yang memang bagus dan berbeda.', 4, '2019-05-21 06:00:51', '2019-05-21 06:00:51', NULL),
('760ea520-7bc8-11e9-a6c2-833724810afa', '76090d80-7bc8-11e9-9493-c3ef2d2543db', 'Meminta mereka untuk menggunakan metode riset yang berbeda, daripada hanya lewat internet, sehingga mereka bisa mendapatkan ide apa yang dilakukan oleh kompetitor.', 1, '2019-05-21 06:00:51', '2019-05-21 06:00:51', NULL),
('760ee180-7bc8-11e9-ad98-39e4bf7cef3d', '76090d80-7bc8-11e9-9493-c3ef2d2543db', 'Minta mereka untuk berinteraksi dengan pelanggan dan mengetahui kebutuhan mereka, kemudian minta mereka membuat fitur tambahan di produk sesuai dengan kebutuhan pelanggan.', 3, '2019-05-21 06:00:51', '2019-05-21 06:00:51', NULL),
('8c5ee0f0-7bc4-11e9-9142-61061fd2f6a9', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', 'Memastikan kembali kepada supplier dengan menunjukkan track-record dari perusahaan dan menginformasikan kepada supplier tersebut mengenai peluang bisnis yang ada dari produk ini di masa datang, sebagai hasil dari peluncuran produk yang akan dilaksanakan nanti.', 4, '2019-05-21 05:32:51', '2019-05-21 05:32:51', NULL),
('8c5f1f00-7bc4-11e9-89f8-717dddb7c241', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', 'Membuat permohonan halus pada supplier dan meminta mereka untuk memenuhi permintaan Anda demi relasi yang memang selama ini sudah berjalan baik antara Anda dengan supplier tersebut.', 3, '2019-05-21 05:32:51', '2019-05-21 05:32:51', NULL),
('8c5f5ff0-7bc4-11e9-b42f-57858ee08959', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', 'Memastikan kepada supplier bahwa harga tinggi masih dibolehkan untuk jumlah volume pemesanan yang sedikit, sementara dalam hal ini Anda berharap harga juga menjadi dapat dikurangi jika nantinya volume pemesanan menjadi semakin banyak dan dapat memenuhi jumlah pemesanan minimum yang ditetapkan oleh supplier tersebut.', 2, '2019-05-21 05:32:51', '2019-05-21 05:32:51', NULL),
('8c5fbb00-7bc4-11e9-8c54-971b61f921a3', '8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', 'Beritahu pemasok bahwa perkiraan volume menunjukkan bahwa organisasi akan dapat memenuhi jumlah pesanan minimum yang diajukan pemasok dalam dua bulan pertama peluncuran.', 1, '2019-05-21 05:32:51', '2019-05-21 05:32:51', NULL),
('8e3f0880-7bc6-11e9-8106-e95cf965525f', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', 'Bentuk tim penelitian yang ditujukan untuk menginvestigasi klaim dari pelanggan tersebut, dan mempresentasikan hasilnya kepada pelanggan dalam rangka untuk mendapatkan kembali kepecayaan dan membangun kembali kredibilitas produk Anda.', 4, '2019-05-21 05:47:13', '2019-05-21 05:47:13', NULL),
('8e3f3cc0-7bc6-11e9-aef4-7ddc585724d5', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', 'Menempatkan klaim tersebut dalam sistem umpan balik pelanggan (customer feedback system) dalam rangka untuk menghubungkan perusahan dengan pelanggan dan memahami apa yang menjadi concern utama mereka.', 2, '2019-05-21 05:47:13', '2019-05-21 05:47:13', NULL),
('8e3f6de0-7bc6-11e9-8ba7-25a8c132e6ed', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', 'Menganalisis data performance organisasi dan mengidentifikasi mana produk spesifik yang memang tidak berjalan baik, dan mengatasinya dengan cara yang spesifik.', 3, '2019-05-21 05:47:13', '2019-05-21 05:47:13', NULL),
('8e3f9c80-7bc6-11e9-a89c-412036b7cb46', '8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', 'Mengeluarkan pernyataan yang sangat menekankan bahwa organisasi sangat memperhatikan kualitas dan standar yang berlaku, dimana hal ini juga ditaati oleh seluruh proses produksi untuk seluruh produk dari perusahaan Anda.', 1, '2019-05-21 05:47:13', '2019-05-21 05:47:13', NULL),
('97a01370-7bc7-11e9-81c4-c544db44d2f0', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', 'Meminta formulir PO untuk pembelian mesin baru. Memesan mesin yang baru dari perusahaan yang sama dengan sebelumnya dan mempercepat proses produksi.', 1, '2019-05-21 05:54:38', '2019-05-21 05:54:38', NULL),
('97a04aa0-7bc7-11e9-87c2-053f8da3397f', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', 'Menghubungi alternatif pabrik lain yang dapat memenuhi order tersebut, dengan risiko bahwa ada kemungkinan Anda akan melewati batas waktu yang ditentukan,  mengingat hal ini adalah tambahan proses produksi yang harus dilakukan di pabrik tersebut, dan tentunya diperlukan pemeriksaan kualitas yang ketat.', 2, '2019-05-21 05:54:38', '2019-05-21 05:54:38', NULL),
('97a076b0-7bc7-11e9-aea0-09c6a3929962', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', 'Meminta teknisi untuk segera mempercepat proses identifikasi isu ini dan meminta solusinya segera.', 3, '2019-05-21 05:54:38', '2019-05-21 05:54:38', NULL),
('97a0b340-7bc7-11e9-b507-b9d7253c4d27', '979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', 'Membeli produk sabun yang sudah jadi di market, daripada ada spesifikasi yang terlewat. Mengirimkan konsinyasi ke pelanggan dengan perusahaan Anda yang menanggung biaya tambahannya.', 4, '2019-05-21 05:54:38', '2019-05-21 05:54:38', NULL),
('a66147f0-7bc5-11e9-b2f1-11b9ed6d8c3f', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'Meminta tim Anda menjelaskan alasan mengenai mengapa Anda tidak mendapatkan informasi mengenai situasi ini lebih awal. Anda menghubungi pelanggan untuk menjelaskan situasinya dan menginformasikan mengenai opsi lain berupa pengiriman melalui udara dengan adanya biaya tambahan. Anda meminta maaf atas ketidaknyamanan yang terjadi.', 3, '2019-05-21 05:40:44', '2019-05-21 05:40:44', NULL),
('a66175c0-7bc5-11e9-ac3e-134c496a78d1', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'Kehilangan kendali emosi dan menunjukkan kekecewaan pada tim Suppy Chain karena tidak melibatkan Anda dalam situasi ini. Anda akan meminta mereka untuk menemukan solusi dan mengkomunikasikannya langsung kepada pelanggan.', 2, '2019-05-21 05:40:44', '2019-05-21 05:40:44', NULL),
('a661c250-7bc5-11e9-a56e-d951b670896d', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'Mengekspresikan kemarahan Anda pada tim Suppy Chain, kemudian mendiskusikan solusi untuk isu ini. Anda tidak akan menghubungi pelanggan dan menginformasikan mengenai hal ini, sampai dengan pelanggan yang menghubungi Anda. Dengan begini, Anda merasa bisa mengulur waktu lebih banyak untuk sampai akhirnya mendapatkan solusi.', 1, '2019-05-21 05:40:44', '2019-05-21 05:40:44', NULL),
('a661fa10-7bc5-11e9-8d68-87fb200cedf1', 'a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'Mengekspresikan kekecewaan Anda pada tim Supply Chain karena tidak menginformasikan pada Anda mengenai situasi tersebut sampai dengan Anda bertanya langsung. Anda minta produk tersebut digabung dengan produk lain yang akan dikirim lewat udara. Anda juga akan menghubungi pelanggan dengan segera mengenai situasi ini dan meminta maaf atas penundaan dan ketidaknyamanan yang terjadi.', 4, '2019-05-21 05:40:44', '2019-05-21 05:40:44', NULL),
('e2c1c0a0-7bc7-11e9-a212-2df0bb7639a5', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'Mengadakan meeting dengan tim Anda, mencoba memahami isu operasional yang terjadi dan masalahnya apa saja, kemudian berusaha mengatasinya diwaktu yang bersamaan.', 4, '2019-05-21 05:56:44', '2019-05-21 05:56:44', NULL),
('e2c1f180-7bc7-11e9-97ab-8f7f459d4c31', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'Meminta senior manager (atasan) untuk membimbing Anda dalam menyusun dan menstandarkan kembali proses yang ada.', 2, '2019-05-21 05:56:44', '2019-05-21 05:56:44', NULL),
('e2c23c40-7bc7-11e9-bc05-c9a1849c2c82', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'Meminta anak buah untuk mengeksplorasi beberapa pilihan lain yang berbeda dan menyusun rencana tindakan.', 1, '2019-05-21 05:56:44', '2019-05-21 05:56:44', NULL),
('e2c28c20-7bc7-11e9-9625-13731f82281c', 'e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'Menyusun dashboard dimana Anda bisa melihat dan mengawasi progress dan status dari setiap tugas yang dijalankan oleh tim Anda.', 3, '2019-05-21 05:56:44', '2019-05-21 05:56:44', NULL),
('f1942ee0-7bc4-11e9-9dbd-898bf48a3f3d', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'Mencoba untuk berempati pada Rafi, dan membuatnya mengerti bahwa perannya sangat penting dalam pencapaian target tim, dan mengapa apa yang terjadi padanya saat ini bisa berdampak negatif pada semangat kerja dan budaya kerja tim.', 3, '2019-05-21 05:35:40', '2019-05-21 05:35:40', NULL),
('f1949090-7bc4-11e9-bbb0-93b9bcfe1eed', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'Memberikannya ruang dan waktu dan berharap agar segala sesuatunya akan kembali seperti sebagaimana mestinya.', 1, '2019-05-21 05:35:40', '2019-05-21 05:35:40', NULL),
('f194c600-7bc4-11e9-adb9-733d4c32c8d6', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'Menekankan pada hal-hal spesifik tertentu yang memang selama ini belum pernah dibahas sebelumnya pada Rafi. Memberikannya contoh mengenai apa yang bisa ia lakukan untuk meningkatkan performancenya.', 4, '2019-05-21 05:35:40', '2019-05-21 05:35:40', NULL),
('f1950160-7bc4-11e9-9893-3b510fb8e374', 'f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'Menanyakan apakah ia perlu bantuan dan menawarkan bantuan padanya dengan senang hati.', 2, '2019-05-21 05:35:40', '2019-05-21 05:35:40', NULL);

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

--
-- Dumping data for table `jenis_assessments`
--

INSERT INTO `jenis_assessments` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
('4b460d60-9112-11e9-9872-fd21360db532', 'Minat Kerja', '2019-06-17 08:12:16', '2019-06-17 08:19:14', '2019-06-17 08:19:14'),
('81c991d0-9113-11e9-b5ea-2bf9e5e44723', 'Minat Kuliah', '2019-06-17 08:20:57', '2019-06-17 09:26:23', '2019-06-17 09:26:23'),
('82edb820-7afd-11e9-a43f-5dca74d9b594', 'Koperasis', '2019-05-20 05:48:05', '2019-05-20 05:57:55', '2019-05-20 05:57:55'),
('cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'Karir/Kuliah', '2019-05-20 06:04:29', '2019-05-20 06:05:05', NULL);

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

--
-- Dumping data for table `keterangan_nilais`
--

INSERT INTO `keterangan_nilais` (`id`, `range_score`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0b4afa70-7bbe-11e9-9871-c3ee71bc275a', 1, '<p>Membutuhkan pengembangan yang signifikan</p>', '2019-05-21 04:46:17', '2019-05-21 04:46:17', NULL),
('11cbcf70-7b9e-11e9-ae28-0f85371b6b70', 4, '<p>Baik</p>', '2019-05-21 00:57:24', '2019-05-21 04:29:10', '2019-05-21 04:29:10'),
('1602afc0-7bbe-11e9-8da5-81fd53482226', 2, '<p>Membutuhkan pengembangan</p>', '2019-05-21 04:46:35', '2019-05-21 04:46:46', NULL),
('174ae360-7b9e-11e9-82d8-f14c684030c7', 3, '<p>Cukup</p>', '2019-05-21 00:57:33', '2019-05-21 04:29:05', '2019-05-21 04:29:05'),
('24ef1d90-7bbe-11e9-87d0-95d0e631a138', 3, '<p>Cukup baik</p>', '2019-05-21 04:47:00', '2019-05-21 04:47:00', NULL),
('293aa090-7bbe-11e9-926d-4ff93647135a', 4, '<p>Baik</p>', '2019-05-21 04:47:07', '2019-05-21 04:47:07', NULL),
('593cb0d0-9191-11e9-b45d-5f36cb4932bd', 5, '<p>asdfasdf</p>', '2019-06-17 23:21:46', '2019-06-17 23:34:27', '2019-06-17 23:34:27'),
('dd694000-7b9b-11e9-a63a-011b9b875cb0', 2, '<p>Cukup</p>', '2019-05-21 00:41:37', '2019-05-21 00:45:12', '2019-05-21 00:45:12');

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

--
-- Dumping data for table `kompetensis`
--

INSERT INTO `kompetensis` (`id`, `kompetensi`, `definisi`, `p_mandiri`, `p_bermitra`, `t_pelatihan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('05add070-8f8e-11e9-898f-b30dadd7a99d', 'Adfasdf', '<p>adfasdf</p>', '<p>asdfa</p>', '<p>dfa</p>', '<p>adfa</p>', '2019-06-15 09:52:55', '2019-06-17 09:30:14', '2019-06-17 09:30:14'),
('131522d0-7b8e-11e9-8c16-995466a24171', 'Influencings', '<p>Tests</p>', '<p>Tests</p>', '<p>Tests</p>', '<p>Tests</p>', '2019-05-20 23:02:54', '2019-05-21 04:28:55', '2019-05-21 04:28:55'),
('13bf2f10-7bbd-11e9-826d-b9186d15a7bc', 'Result Oriented', '<p>Kemampuan untuk mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '<ul>\n	<li>\n	<p>Menentujan tujuan jangka panjang dan jangka pendek.</p>\n	</li>\n	<li>\n	<p>Memastikan tujuan yang disusun memenuhi kriteria SMART; Specific (jelas dan terinci), Measurable (terukur keberhasilannya), Achievable (realistis untuk dicapai), Relevant (berkaitan dengan proses yang sedang dijalani dan relevan dengan kehidupan Anda), serta Timeframe (memiliki batasan waktu pencapaian yang jelas).</p>\n	</li>\n	<li>\n	<p>Menyusun tahapan yang perlu dilakukan untuk mencapai tujuan.</p>\n	</li>\n	<li>\n	<p>Hindari terlalu fokus pada hal-hal yang tidak berkaitan dengan sasaran utama.</p>\n	</li>\n	<li>\n	<p>Cari tahu sebanyak mungkin mengenai hal-hal yang terkait dengan tujuan Anda. &nbsp;</p>\n	</li>\n	<li>\n	<p>Pahami dengan baik mengenai kemampuan apa saja yang perlu Anda miliki ataupun kembangkan untuk mencapai tujuan Anda.</p>\n	</li>\n	<li>\n	<p>Analisa hal-hal yang dapat menjadi penghambat Anda untuk mencapai tujuan, dan tentukan langkah antisipasinya</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Diskusikan tujuan Anda dengan orang lain yang lebih berpengalaman, baik dengan guru, orang tua, ataupun atasan di tempat kerja.</p>\n	</li>\n	<li>\n	<p>Evaluasi secara rutin tujuan Anda, catat setiap progress (kemajuan) yang Anda capai, dan minta masukan pihak lain mengenai progress tersebut.</p>\n	</li>\n	<li>\n	<p>Amati seseorang di lingkungan Anda yang Anda anggap berprestasi, pelajari bagaimana caranya dalam mengelola tugas dan menetapkan prioritas.</p>\n	</li>\n	<li>\n	<p>Carilah informasi sebanyak mungkin mengenai hal-hal yang terkait dengan tujuan Anda, dari pihak eksternal, baik melalui seminar, maupun kegiatan magang.</p>\n	</li>\n	<li>\n	<p>Biasakan terlibat dalam kegiatan kepanitiaan di lingkungan Anda, ajukan diri untuk menjadi ketua, dan susun tujuan kegiatan dengan jelas dan rinci.</p>\n	</li>\n	<li>\n	<p>Mulailah membuat alternatif rencana cadangan apabila rencana utama tidak tercapai, dan diskusikan dengan teman/rekan sekelompok mengenai sejauh mana hal tersebut dapat dijalankan.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Menerjemahkan Sasaran menjadi Rencana</p>\n	</li>\n	<li>\n	<p>Penyusunan Strategi Efektif untuk mencapai tujuan</p>\n	</li>\n	<li>\n	<p>Goal Setting (Penyusunan Sasaran)</p>\n	</li>\n</ul>', '2019-05-21 04:39:22', '2019-05-21 04:39:22', NULL),
('2ede3140-7bbd-11e9-b8ba-cb72b14dfec8', 'Customer Service Orientation', '<p>Kemampuan menangkap kebutuhan pelanggan dan memenuhinya.</p>', '<ul>\n	<li>\n	<p>Mulailah mempelajari kebutuhan orang lain di sekeliling Anda. Hal ini dapat dimulai dari teman/rekan sekelompok di waktu senggang.</p>\n	</li>\n	<li>\n	<p>Dalam lingkup pekerjaan, kenali pihak yang menggunakan produk maupun jasa Anda. Hal ini dapat dimulai dengan mencari informasi mendasar, misalnya mengenai usia, tempat tinggal, dan respon mereka terhadap produk/jasa Anda. &nbsp;</p>\n	</li>\n	<li>\n	<p>Biasakan untuk memberikan salam di awal dan akhir proses pelayanan. Hargai setiap orang yang menjadi pelanggan, perlakukan sama.</p>\n	</li>\n	<li>\n	<p>Setelah teman/rekan kerja meminta bantuan Anda, biasakan untuk menanyakan mengenai sejauh mana bantuan yang Anda berikan mempermudah pekerjaan teman/rekan kerja Anda.</p>\n	</li>\n	<li>\n	<p>Ketika pelanggan memberikan saran, terima dengan terbuka, dan upayakan perbaikan terhadap cara Anda melayaninya.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Diskusikan dengan teman/rekan kerja mengenai karakteristik pelanggan yang dihadapi, mulai dari usia, pendidikan, tempat tinggal, dan permintaan-permintaan mereka.</p>\n	</li>\n	<li>\n	<p>Amati cara teman/rekan kerja yang Anda nilai cukup baik dalam melayani pelanggan. Catat apa yang menjadi kebiasaannya, lakukan hal yang sama.</p>\n	</li>\n	<li>\n	<p>Diskusikan dengan teman/rekan kerja Anda mengenai keluhan pelanggan yang pernah mereka hadapi dan bagaimana mereka menyiasatinya.</p>\n	</li>\n	<li>\n	<p>Cobalah untuk bermain peran (roleplay), dimana teman/rekan kerja Anda berperan sebagai pelanggan. Mintalah masukan mereka terhadap cara Anda melayani mereka. &nbsp;</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Menerima Umpan Balik Pelanggan dan Menindaklanjutinya</p>\n	</li>\n	<li>\n	<p>Customer Service Excellence</p>\n	</li>\n	<li>\n	<p>Membangun Budaya Pelayanan</p>\n	</li>\n</ul>', '2019-05-21 04:40:07', '2019-05-21 04:40:07', NULL),
('49c92380-9182-11e9-b237-b52d09f589c4', 'Sdfadafbasbfasndf ad oasdfo ansfo', '<p>sdfas</p>', '<p>afasd</p>', '<p>asdfa</p>', '<p>afasd</p>', '2019-06-17 21:33:58', '2019-06-17 21:50:39', '2019-06-17 21:50:39'),
('5998e5d0-7bbd-11e9-b635-cb540946e271', 'Self Control', '<p>Kemampuan menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '<ul>\n	<li>\n	<p>Kenali dengan baik krakteristik dari teman/rekan sekelompok Anda, mulai dari cara mereka bicara, cara kerja, maupun hal-hal yang mereka sukai dan tidak sukai.</p>\n	</li>\n	<li>\n	<p>Ketika teman/rekan sekelompok Anda nampak tidak menyukai apa yang Anda katakan, tanyakan alasannya.</p>\n	</li>\n	<li>\n	<p>Ketika ada teman/rekan sekelompok yang memerlukan bantuan, berikan bantuan sesuai dengan kebutuhan mereka dan sesuai kemampuan Anda.</p>\n	</li>\n	<li>\n	<p>Ketika Anda menemukan ada teman/rekan sekelompok yang sedang sedih, upayakan untuk mendengarkan cerita mereka, tanpa tergesa-gesa untuk memberikan saran.</p>\n	</li>\n	<li>\n	<p>Mulai berlatih untuk menyatakan empati, dengan mengatakan secara tulus bahwa Anda memahami perasaan teman/rekan sekelompok Anda.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk tidak menempatkan masalah yang dihadapi orang lain ke dalam cara pandang Anda. Dengarkan dengan baik apa yang mereka katakan, dan jangan menganggap apa yang mereka alami adalah masalah kecil, hanya karena Anda sudah pernah menghadapinya ataupun menurut Anda bukan merupakan masalah yang sulit.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Diskusikan dengan teman/rekan sekelompok mengenai orang-orang yang sering mengeluarkan amarah. Bahaslah reaksi mereka ketika sedang marah, dan apa penyebabnya.</p>\n	</li>\n	<li>\n	<p>Libatkan diri dalam kegiatan yang memungkinkan Anda untuk bertemu dengan beragam karakteristik orang, dari berbagai macam latar belakang.</p>\n	</li>\n	<li>\n	<p>Ikutilah kegiatan kompetisi yang mengharuskan Anda untuk mengelola emosi ataupun energi untuk bisa menang.</p>\n	</li>\n	<li>\n	<p>Libatkan orang lain yang lebih berpengalaman untuk berbicara ketika Anda merasa ada perasaan di dalam diri yang sulit Anda kendalikan.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Kebutuhan Personal untuk Berubah (Personal Need of Change)</p>\n	</li>\n	<li>\n	<p>Emotional Intelligence</p>\n	</li>\n	<li>\n	<p>Reaksi dan Resistensi</p>\n	</li>\n</ul>', '2019-05-21 04:41:19', '2019-05-21 04:41:19', NULL),
('760f93d0-7bbd-11e9-adc5-0390b5db0363', 'Initiating Action (Proactive)', '<p>Kemampuan menunjukkan inisiatif baru di lingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '<ul>\n	<li>\n	<p>Rencanakan seluruh kegiatan Anda hari ini. Buatlah ke dalam jadwal.</p>\n	</li>\n	<li>\n	<p>Dari jadwal harian, buatlah target yang ingin Anda capai terkait dengan penyelesaian tugas di hari tersebut.</p>\n	</li>\n	<li>\n	<p>Tuliskan pula kendala yang mungkin ataupun biasanya muncul. Tentukan rencana mengatasinya.</p>\n	</li>\n	<li>\n	<p>Tanyakan kepada orang lain mengenai apa yang bisa Anda kontribukan dalam tugas kelompok. Laksanakan sesuai dengan tugas yang diberikan kepada Anda.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk bertanya mengenai hal-hal yang menurut Anda kurang jelas. Pastikan Anda telah memahaminya secara menyeluruh.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk mengerjakan tugas sebelum tenggat waktunya.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Dalam tugas kelompok, mintalah teman/rekan sekelompok Anda untuk mengomentari hasil kerja Anda.</p>\n	</li>\n	<li>\n	<p>Ketika terdapat kesalahan dalam tugas yang Anda kerjakan, tanyakan secara rinci pada bagian yang mana, dan perbaiki sesuai dengan arahan yang ada.</p>\n	</li>\n	<li>\n	<p>Ketika tugas belum selesai, biasakan untuk menyelesaikannya sampai dengan tuntas. Begitu pula dalam tugas kelompok, dimana Anda perlu membantu teman/rekan sekelompok, agar tugas keseluruhan menjadi dapat terselesaikan dengan tpat waktu.</p>\n	</li>\n	<li>\n	<p>Berikan ide-ide baru terkait dengan bagaimana kelompok dapat mengerjakan tugas dengan lebih cepat, dengan hasil yang lebih optimal.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Menjadi pekerja High Performer</p>\n	</li>\n	<li>\n	<p>1st Habit : Be Proactive</p>\n	</li>\n	<li>\n	<p>Membangun Kesiapan Bekerja</p>\n	</li>\n	<li>\n	<p>Membangun kemampuan beradaptasi</p>\n	</li>\n</ul>', '2019-05-21 04:42:07', '2019-05-21 04:42:07', NULL),
('86ec20f0-7bbc-11e9-ba99-6179681f2695', 'Influencing', '<p>Kemampuan mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '<ul>\n	<li>\n	<p>Dalam mengerjakan tugas kelompok, ambil peran sebagai kordinator/ketua, berikan petunjuk/arahan tugas dengan jelas, dan pastikan anggota kelompok memahami tujuan dari tugas.</p>\n	</li>\n	<li>\n	<p>Terlibat dalam kepanitiaan sebuah kegiatan, dan berikan ide-ide baru untuk kemudian mengajukannya kepada kelompok. Dengarkan tanggapan orang lain terhadap ide tersebut.</p>\n	</li>\n	<li>\n	<p>Ketika orang lain mengemukakan idenya, hargai kontribusi mereka, dan ambil sisi positif dari ide tersebut.</p>\n	</li>\n	<li>\n	<p>Buatlah tahapan tugas menjadi lebih sederhana dan mudah untuk dijalankan.</p>\n	</li>\n	<li>\n	<p>Dalam mengemukakan ide, gunakan alat bantu audio maupun visual untuk lebih meyakinkan orang lain.</p>\n	</li>\n	<li>\n	<p>Gunakan penjelasan yang mudah dipahami oleh orang lain ketika mengemukakan ide, dan jelaskan keuntungan-keuntungan yang akan diperoleh apabila menjalankan ide tersebut.</p>\n	</li>\n	<li>\n	<p>Ketika mendapatkan penolakan, terima dengan terbuka, dan pahami alasan penolakan orang lain terhadap ide yang telah disampaikan. Berikan penekanan pada keuntungan yang akan diperoleh dari ide yang disampaikan.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Bersama dengan rekan sekelompok, kumpulkan ide-ide mereka untuk membantu kelompok mengerjakan tugas dengan lebih cepat, dengan hasil yang lebih baik.</p>\n	</li>\n	<li>\n	<p>Dalam kepanitiaan, ketika menjelaskan ide, mintalah rekan untuk mencatat hal-hal positif dari cara penyampaian Anda, dan apa saja yang perlu diperbaiki.</p>\n	</li>\n	<li>\n	<p>Minta bantuan teman/rekan sekelompok untuk memberikan masukan terhadap argumentasi yang Anda sampaikan. Catat masukan tersebut dan perbaiki di kemudian hari.</p>\n	</li>\n	<li>\n	<p>Ajak teman/rekan sekelompok untuk bersama-sama mencari kesempatan di lingkungan sekolah ataupun lingkungan kerja, untuk menjual sebuah produk ataupun jasa tertentu, kepada orang lain. Minta teman/rekan sekelompok untuk mengamati cara Anda menjual, dan minta masukan mereka.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Strategi Mempengaruhi Orang Lain</p>\n	</li>\n	<li>\n	<p>Kemitraan dan Jaringan</p>\n	</li>\n	<li>\n	<p>Komunikasi Adaptif</p>\n	</li>\n	<li>\n	<p>Strategi Mencapai Kesepakatan</p>\n	</li>\n</ul>', '2019-05-21 04:35:25', '2019-05-21 04:35:25', NULL),
('91e29560-7bbd-11e9-a004-a58e7f395cb0', 'Managing Work', '<p>Kemampuan menangkap masalah dalam proses kerja dan mengatasinya.</p>', '<ul>\n	<li>\n	<p>Buatlah skala prioritas dari setiap tugas yang akan Anda kerjakan hari ini.</p>\n	</li>\n	<li>\n	<p>Buatlah jadwal yang jelas dalam penyelesaian tugas hari ini.</p>\n	</li>\n	<li>\n	<p>Tentukan hal-hal yang mungkin dapat menghambat proses penyelesaian tugas Anda hari ini. Tentukan langkah mengantisipasi dan mengatasinya.</p>\n	</li>\n	<li>\n	<p>Luangkan waktu untuk mengevaluasi sejauh mana Anda menjalankan tugas sesuai dengan jadwal.</p>\n	</li>\n	<li>\n	<p>Susunlah buku/dokumen yang terkait dengan tugas sesuai dengan tahapan penggunaannya.</p>\n	</li>\n	<li>\n	<p>Buatlah prediksi mengenai perkiraan waktu yang dibutuhkan untuk mengerjakan setiap tugas.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Diskusikan dengan teman/rekan sekelompok skala prioritas maupun jadwal harian yang telah Anda susun, minta mereka untuk memberikan saran.</p>\n	</li>\n	<li>\n	<p>Libatkan diri dalam kegiatan yang memungkinkan Anda untuk mengatur jadwal pertemuan dengan beberapa orang penting, yang memiliki jadwal yang padat.</p>\n	</li>\n	<li>\n	<p>Amati teman/rekan sekelompok yang Anda anggap mampu mengelola tugas dan waktu dengan baik. Tanyakan bagaimana cara mereka melakukannya.</p>\n	</li>\n	<li>\n	<p>Bergabunglah dalam kelompok yang berisi orang-orang yang selalu mampu mengerjakan tugas dengan cepat namun tetap dengan kualitas yang baik.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Analisa dan Pengambilan Keputusan</p>\n	</li>\n	<li>\n	<p>Menerjemahkan tujuan menjadi rencana</p>\n	</li>\n	<li>\n	<p>Mengelola Risiko</p>\n	</li>\n</ul>', '2019-05-21 04:42:53', '2019-05-21 04:42:53', NULL),
('af449ac0-7bbc-11e9-a2c5-853b8850b79b', 'Compliance', '<p>Kemampuan untuk mengikuti aturan dalam bekerja.</p>', '<ul>\n	<li>\n	<p>Pahami dengan baik aturan yang berlaku di lingkungan sekolah ataupun lingkungan kerja.</p>\n	</li>\n	<li>\n	<p>Usahakan untuk selalu datang tepat waktu di setiap kegiatan.</p>\n	</li>\n	<li>\n	<p>Buatlah jadwal kegiatan setiap harinya, jalankan kegiatan sesuai dengan jadwal tersebut.</p>\n	</li>\n	<li>\n	<p>Ketika menjanjikan sesuatu pada orang lain, pastikan Anda menepatinya.</p>\n	</li>\n	<li>\n	<p>Ketika sedang menjadi penanggung jawab kegiatan, dan menerima telepon dari atasan ataupun pihak yang memiliki otoritas lebih tinggi, segera jawab telepon tersebut.</p>\n	</li>\n	<li>\n	<p>Ketika mendapatkan instruksi untuk mengerjakan suatu tugas, segera kerjakan sesuai dengan batas waktu yang telah ditentukan.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Berikan jadwal kegiatan Anda kepada teman ataupun rekan sekelompok, dan minta ia untuk mengamati sejauh mana Anda mentaati jadwal yang telah dibuat.</p>\n	</li>\n	<li>\n	<p>Dalam kepanitiaan, carilah kesempatan untuk menjadi Seksi Acara, yang banyak mengatur berlangsungnya kegiatan dalam jadwal yang sudah pasti.</p>\n	</li>\n	<li>\n	<p>Carilah kesempatan dalam kepanitiaan untuk berinteraksi dengan orang sukses, diluar sekolah/organisasi dan ajak bicara mengenai bagaimana mengatur diri sendiri agar disiplin.</p>\n	</li>\n	<li>\n	<p>Ajak teman/rekan sekelompok untuk bersama-sama mentaati aturan yang berlaku di sekolah dan saling mengingatkan untuk selalu menaati aturan yang ada.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Menjadi pekerja High Performer</p>\n	</li>\n	<li>\n	<p>Membangun dan Memelihara Kepercayaan (Trust)</p>\n	</li>\n	<li>\n	<p>Prinsip Kunci menjadi pekerja dan pembelajar aktif.</p>\n	</li>\n</ul>\n\n<p>&nbsp;</p>', '2019-05-21 04:36:33', '2019-05-21 04:36:33', NULL),
('b44c3100-7bbd-11e9-838e-03d4ebc9826b', 'Planning & Execution', '<p>Kemampuan menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '<ul>\n	<li>\n	<p>Pahami dengan baik sasaran dari tugas yang diberikan kepada Anda. Tanyakan mengenai standar keberhasilan seperti apa yang diharapkan. &nbsp;</p>\n	</li>\n	<li>\n	<p>Tentukan apa saja yang Anda butuhkan untuk mencapai standar keberhasilan tersebut.</p>\n	</li>\n	<li>\n	<p>Cari tahu dari mana Anda bisa mendapatkan sumber daya yang Anda butuhkan.</p>\n	</li>\n	<li>\n	<p>Carilah orang-orang yang dapat membantu Anda menyediakan sumber daya tersebut</p>\n	</li>\n	<li>\n	<p>Susunlah tahapan penyelesaian tugas</p>\n	</li>\n	<li>\n	<p>Susunlah jadwal yang sesuai dengan target waktu penyelesaian tugas. &nbsp;</p>\n	</li>\n	<li>\n	<p>Ketika menemui kendala, pastikan Anda telah memiliki rencana cadangan apabila rencana utama tidak berjalan lancar.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Dalam tugas kelompok, tentukan kelompok yang akan menyusun rencana dan kelompok yang akan melakukan eksekusi rencana yang ada. Amati dan lakukan pemantauan, apakah rencana dan eksekusi sejalan.</p>\n	</li>\n	<li>\n	<p>Berikan kontribusi Anda semaksimal mungkin bagi pencapaian tujuan bersama, baik dalam tugas kelompok maupun kepanitiaan.</p>\n	</li>\n	<li>\n	<p>Susunlah tim Anda sesuai dengan profil orang yang Anda butuhkan untuk bisa menyelesaikan tugas dengan baik.</p>\n	</li>\n	<li>\n	<p>Jelaskan rencana tahapan penyelesaian tugas kelompok Anda secara jelas kepada seluruh rekan sekelompok agar mereka memahami dimana kontribusi mereka dibutuhkan.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Perencanaan dan Pengelolaan Sumber Daya</p>\n	</li>\n	<li>\n	<p>Mengelola Risiko</p>\n	</li>\n	<li>\n	<p>Analisa masalah dan peluang</p>\n	</li>\n	<li>\n	<p>Identifikasi potensi pasar</p>\n	</li>\n</ul>', '2019-05-21 04:43:51', '2019-05-21 04:43:51', NULL),
('ce634360-7bbc-11e9-aba1-9df42c7a5665', 'Communication', '<p>Kemampuan menyampaikan pesan secara jelas dan mudah dipahami lawan bicara.</p>', '<ul>\n	<li>\n	<p>Ketika tidak memahami instruksi dan tahapan dalam proses pelaksanaan tugas, bertanyalah pada yang lebih memahami, dan cari tahu sampai benar-benar jelas.</p>\n	</li>\n	<li>\n	<p>Ketika menjelaskan sesuatu pada orang lain, pastikan orang lain benar-benar memahami apa yang Anda maksud. Tanyakan kembali pada mereka apakah sudah jelas.</p>\n	</li>\n	<li>\n	<p>Tuliskan ucapan terima kasih kepada orang lain yang telah membantu Anda.</p>\n	</li>\n	<li>\n	<p>Rekam percakapan Anda dengan orang lain ataupun saat Anda mempresentasikan sebuah materi. Dengarkan kembali dan catat hal-hal yang menurut Anda perlu diperbaiki.</p>\n	</li>\n	<li>\n	<p>Dalam mengemukakan ide, gunakan alat bantu audio maupun visual untuk lebih meyakinkan orang lain.</p>\n	</li>\n	<li>\n	<p>Gunakan kata-kata sederhana dan mudah dipahami orang lain.</p>\n	</li>\n	<li>\n	<p>Berlatihlah untuk terlebih dahulu menuliskan poin-poin yang ingin Anda sampaikan pada orang lain. Setelah Anda menyampaikan pada pihak tersebut, periksa kembali apakah seluruh point telah tersampaikan dan dipahami olehnya.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Bersama dengan rekan sekelompok, dengarkan kembali rekaman percakapan ataupun presentasi Anda, minta mereka memberikan masukan.</p>\n	</li>\n	<li>\n	<p>Dalam kepanitiaan, ketika menjalaskan ide, mintalah rekan untuk mencatat hal-hal positif dari cara penyampaian Anda, dan apa saja yang perlu diperbaiki.</p>\n	</li>\n	<li>\n	<p>Amati seseorang di lingkungan Anda yang Anda anggap cukup mampu berkomunikasi dengan baik. Catat apa hal-hal yang dapat Anda tiru, dan praktekkanlah.</p>\n	</li>\n	<li>\n	<p>Ajak teman/rekan sekelompok untuk bersama-sama mengkritisi tulisan Anda mengenai poin-poin yang akan Anda sampaikan dalam sebuah presentasi. Terima masukan mereka dan minta mereka mengobservasi bahasa tubuh Anda.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Teknik Komunikasi Efektif</p>\n	</li>\n	<li>\n	<p>Komunikasi untuk membangun jaringan.</p>\n	</li>\n	<li>\n	<p>Komunikasi Adaptif</p>\n	</li>\n	<li>\n	<p>Strategi Mencapai Kesepakatan</p>\n	</li>\n</ul>', '2019-05-21 04:37:25', '2019-05-21 04:37:25', NULL),
('d381cfc0-7bbd-11e9-ba65-319769b34294', 'Leading Team', '<p>Kemampuan mengarahkan anak buah untuk mencapai target.</p>', '<ul>\n	<li>\n	<p>Ketika Anda memimpin sebuah pertemuan/rapat, pastikan Anda menyampaikan tujuan dari pertemuan tersebut.</p>\n	</li>\n	<li>\n	<p>Jelaskan tugas dan tanggung jawab dari masing-masing anggota tim dan pentingnya mereka berkontribusi terhadap pencapaian sasaran bersama.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk berinisiatif menjadi pemimpin dalam berbagai kesempatan.</p>\n	</li>\n	<li>\n	<p>Dalam mendelegasikan tugas dan tanggung jawab, pertimbangkan kemampuan masing-masing anggota kelompok.</p>\n	</li>\n	<li>\n	<p>Libatkan anggota kelompok saat harus mengambil keputusan bersama.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk memantau sejauh mana pengerjaan tugas kelompok. Berikan bantuan di saat orang lain membutuhkan, ataupun minta rekan sekelompok untuk saling membantu</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Libatkan anggota kelompok untuk membangun ide bersama. Penting untuk memastikan mereka terlbat aktif dalam proses diskusi, agar aspirasi seluruh pihak dapat tertampung.</p>\n	</li>\n	<li>\n	<p>Dalam kegiatan kepanitiaan dimana Anda menjadi pemimpin, biasakan untuk tidak menghindari konflik. Temukan apa masalahnya, dan bicaralah dengan pihak-pihak yang berkonflik, untuk kemudian dicapai titik temu.</p>\n	</li>\n	<li>\n	<p>Dalam memimpin, pastikan selalu ada pertemuan rutin yang memungkinkan setiap orang mengemukakan pendapatnya.</p>\n	</li>\n	<li>\n	<p>Dalam setiap pertemuan, pastikan Anda mengingatkan setiap anggota kelompok terhadap target/sasaran yang ingin dicapai bersama, dan membahas sejauh mana progress (kemajuan) yang telah tercapai.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Komunikasi dalam Kepemimpinan</p>\n	</li>\n	<li>\n	<p>Mengarahkan Kelompok pada Hasil</p>\n	</li>\n	<li>\n	<p>Teknik Pendelegasian Tugas yang Efektif</p>\n	</li>\n	<li>\n	<p>Mendapatkan komitmen kelompok</p>\n	</li>\n</ul>', '2019-05-21 04:44:43', '2019-05-21 04:44:43', NULL),
('eec00df0-7bbd-11e9-a25b-059854ca516c', 'Collaboration', '<p>Kemampuan dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '<ul>\n	<li>\n	<p>Dalam kerja kelompok, berikan kesempatan pada setiap orang untuk menyuarakan pendapat mereka.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk selalu menanyakan persetujuan anggota kelompok saat akan mengambil keputusan bersama.</p>\n	</li>\n	<li>\n	<p>Berikan kontribusi sesuai dengan kemampuan Anda pada pencapaian sasaran kelompok.</p>\n	</li>\n	<li>\n	<p>Selalu ucapkan terima kasih pada orang yang telah membantu Anda</p>\n	</li>\n	<li>\n	<p>Bantu rekan sekelompok untuk mendapatkan solusi atas masalah yang dihadapi.</p>\n	</li>\n	<li>\n	<p>Jangan sungkan untuk berbagi informasi yang Anda ketahui pada orang lain. Hal ini akan memancing terjadinya diskusi yang dapat berlanjut dengan kolaborasi.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Dalam kepanitiaan, amati orang-orang yang dengan mudah seringkali membantu orang lain. Diskusikan dengan mereka mengapa mereka melakukan hal tersebut. Lakukan hal yang sama semampu Anda.</p>\n	</li>\n	<li>\n	<p>Libatkan diri dalam kegiatan olahraga berkelompok. Hayati bahwa setiap orang memiliki peran dan kontribusinya masing-masing.</p>\n	</li>\n	<li>\n	<p>Dalam kerja kelompok, pastikan Anda berinteraksi dengan banyak orang, sehingga mendapatkan sudut pandang mereka akan masalah yang kelompok Anda sedang hadapi.</p>\n	</li>\n	<li>\n	<p>Upayakan untuk menjadi penengah ketika terdapat perbedaan pendapat di dalam kelompok.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Teamwork &amp; Collaboration</p>\n	</li>\n	<li>\n	<p>Mengelola Situasi yang Menantang di dalam Tim</p>\n	</li>\n	<li>\n	<p>Strategi dalam Bekerja sama</p>\n	</li>\n</ul>', '2019-05-21 04:45:29', '2019-05-21 04:45:29', NULL),
('f19ef1d0-7bbc-11e9-903f-a1b146ad42ca', 'Stress Resilience', '<p>Kemampuan menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '<ul>\n	<li>\n	<p>Carilah tempat yang tenang jika anda sedang menghadapi tekanan waktu.</p>\n	</li>\n	<li>\n	<p>Buat jadwal kegiatan untuk membantu anda mengatur kecepatan kerja dan energi.</p>\n	</li>\n	<li>\n	<p>Cobalah untuk tidak menyalahkan stres yang Anda rasakan.</p>\n	</li>\n	<li>\n	<p>Biasakan untuk selalu memetakan tujuan dari tugas, proses/tahapan untuk menyelesaikannya, dan target/hasil yang diharapkan seperti apa, sehingga Anda mendapatkan gambaran mengenai seluruh proses yang akan dijalani.</p>\n	</li>\n	<li>\n	<p>Ingatlah bahwa tidak semua orang bisa menerima ide Anda. Untuk itu, siapkan pula rencana alternatif.</p>\n	</li>\n	<li>\n	<p>Bersikaplah terbuka pada perubahan dan pada orang yang tidak setuju dengan Anda.</p>\n	</li>\n	<li>\n	<p>Buatlah 5-10 situasi yang membuat Anda stress, urutkan dari ranking pertama hingga terakhir, dan buatlah langkah antisipasinya untuk masing-masing situasi tersebut.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Bersama dengan rekan sekelompok, carilah kegiatan yang dapat dilakukan untuk menyalurkan energi, seperti berolah raga, membaca, mendengarkan/bermain musik, dan sebagainya. &nbsp;</p>\n	</li>\n	<li>\n	<p>Minta teman/rekan sekelompok untuk mengingatkan ketika Anda mulai menunjukkan gejala stress, seperti berkeringat, mudah marah, tidak fokus, dan sebagainya.</p>\n	</li>\n	<li>\n	<p>Ajak teman/rekan sekelompok untuk menjadi teman bicara saat Anda mengalami gejala stress, atau ajak pihak lain yang lebih berpengalaman seperti guru, atasan di kantor, ataupun orang tua, agar dapat membantu menanggulangi gejala stress yang terjadi.</p>\n	</li>\n	<li>\n	<p>Amati teman/rekan sekelompok yang berprestasi. Ajak bicara mengenai bagaimana ia mengelola stress.</p>\n	</li>\n</ul>', '<ul>\n	<li>\n	<p>Pengambilan Keputusan dan Analisis Risiko</p>\n	</li>\n	<li>\n	<p>Emotional Intelligence</p>\n	</li>\n	<li>\n	<p>Orientasi pada Hasil (Result Orientation)</p>\n	</li>\n	<li>\n	<p>Strategi Mengelola Situasi yang Menantang</p>\n	</li>\n</ul>\n\n<p>&nbsp;</p>', '2019-05-21 04:38:24', '2019-05-21 04:38:24', NULL);

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

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `pertanyaan`, `jenis_assessment_id`, `kompetensi_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('07f483f0-7bc7-11e9-9bd9-eb0a075e5796', 'Anggota tim Anda bekerja dalam cross-functional team, dimana tiap anggota tim menjadi bagian penting dari beberapa proyek dalam waktu bersamaan. Pada suatu hari, Anda kekurangan staf, kemudian Anda meminta 2 orang tim Anda untuk menyediakan waktu extra untuk proyek yang sedang Anda tangani, dimana hal ini akan menyebabkan waktu mereka juga menjadi lebih sedikit untuk proyek yang lain. Di satu sisi mereka memang wajib menjalankannya, namun Pimpinan Proyek lain merasa kecewa dengan kebijakan yang Anda terapkan, kemudian menunjukkan kemarahan pada anggota tim Anda tersebut, serta mengeskalasi persoalan ini ke pimpinan yang lebih tinggi. Anda kemudian :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '5998e5d0-7bbd-11e9-b635-cb540946e271', '2019-05-21 05:50:37', '2019-05-21 05:50:37', NULL),
('10944f00-7bc6-11e9-974c-4136ce791d88', 'Anda adalah Regional Manager untuk perusahaan manufaktur dan telah memimpin salah satu cabangnya selama 4 tahun. Para sales yang bekerja dengan Anda telah seringkali dipanggil oleh beberapa pelanggan terkait adanya defect (kecacatan pada kualitas produk) yang sering terjadi pada persediaan produk Anda. Apa yang akan Anda lakukan terkait hal ini?', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '13bf2f10-7bbd-11e9-826d-b9186d15a7bc', '2019-05-21 05:43:42', '2019-05-21 05:43:42', NULL),
('3410ac20-7bc8-11e9-a693-079152e2db74', 'Anda menemukan bahwa ada penurunan yang signifikan pada motivasi dari anggota tim Anda. Rendahnya motivasi dan minat mereka ditandai dengan turunnya kualitas hasil kerja. Anda juga menerima tanda non-verbal dari mereka tentang kebosanan akan hal-hal monoton yang saat ini ada di pekerjaan mereka. Tindakan apa yang akan Anda ambil :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'd381cfc0-7bbd-11e9-ba65-319769b34294', '2019-05-21 05:59:00', '2019-05-21 05:59:00', NULL),
('47fce4e0-7bc5-11e9-b33a-e115b6e471a9', 'Anda adalam pemimpin proyek peluncuran salah satu produk baru di perusahaan Anda. Bahan mentah yang Anda dapatkan dari supplier telah berhenti diproduksi karena pelanggan lain\r\nmereka yang juga membeli bahan tersebut, tidak lagi membeli dari mereka. Hal ini menyebabkan proyek harus ditunda beberapa bulan. Anda kemudian :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'ce634360-7bbc-11e9-aba1-9df42c7a5665', '2019-05-21 05:38:05', '2019-05-21 05:38:05', NULL),
('4e1a0920-7bc7-11e9-86c6-39516a36ce3f', 'Perusahaan Anda telah diakuisisi oleh salah satu perusahaan multi nasional. Anda dan tim Anda dalam hal ini dipertahankan oleh organisasi. Meskipun begitu, kondisi pekerjaan tentu akan menjadi semakin kompleks dengan adanya perubahan ini. Selain itu, tim anda bisa jadi tidak dapat meminta adanya kenaikan gaji tahunan dalam periode tahun fiskal saat ini. Anda diharapkan untuk berkomunikasi dengan anggota tim Anda. Yang Anda lakukan :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '760f93d0-7bbd-11e9-adc5-0390b5db0363', '2019-05-21 05:52:35', '2019-05-21 05:52:35', NULL),
('76090d80-7bc8-11e9-9493-c3ef2d2543db', 'Anda bertanggung jawab untuk mensupervisi design sampai dengan meluncurkan sebuah produk baru. Anda merasa tim Anda kurang kreatif dalam hal ini dan butuh untuk lebih dimotivasi untuk sama-sama mengumpulkan ide dan sepakat dengan sebuah ide baru. Mereka mengatakan kepada Anda bahwa ada kelangkaan penelitian di daerah tersebut dan oleh karena itu semakin sulit bagi mereka untuk memikirkan gagasan baru. Bagaimana Anda akan membantu tim Anda?', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'eec00df0-7bbd-11e9-a25b-059854ca516c', '2019-05-21 06:00:51', '2019-05-21 06:00:51', NULL),
('8c5ceac0-7bc4-11e9-ad66-5fcd4a46ded9', 'Sebagai Manager dari produk yang akan segera diluncurkan, Anda ditugaskan untuk menangani beberapa tugas yang kritikal. Salah satunya adalah untuk bernegosiasi dengan supplier untuk menurunkan jumlah minimum pemesanan sampai dengan produk nantinya diluncurkan secara resmi dan mendapatkan daya tarik pasar. Anda akan :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '86ec20f0-7bbc-11e9-ba99-6179681f2695', '2019-05-21 05:32:51', '2019-05-21 05:32:51', NULL),
('8e3c23d0-7bc6-11e9-8061-e56bdb4edc7b', 'Anda bekerja sebagai Marketing Manager untuk perusahaan produsen makanan bernama XYZ. Baru-baru ini, produk Anda telah mendapatkan publikasi negatif di pasar dan pelanggan mulai memberikan keluhan terkait dengan gangguan kesehatan yang mereka alami, terutama kolesterol dan obesitas. Anda dihadapkan pada isu dimana Anda harus mengembalikan pelanggan Anda pada produk Anda dan mendapatkan kembali kepercayaan mereka. Bagaimana Anda menyelesaikan hal ini:', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '2ede3140-7bbd-11e9-b8ba-cb72b14dfec8', '2019-05-21 05:47:13', '2019-05-21 05:47:13', NULL),
('979deee0-7bc7-11e9-ba6f-bdfda3a4a6c2', 'Anda adalah seorang manager dari pabrik produsen sabun. Terdapat sebuah pesanan yang muncul dari aktivitas promosi, yang paketnya dibatasi dalam jangka waktu tertentu. Dalam hal ini, pelanggan tersebut memesan dalam jumlah besar. Anda telah mengalokasikan sumber daya untuk memenuhi pesanan tersebut, namun terdapat kendala pada mesin produksi.\r\nAnda akan :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', '91e29560-7bbd-11e9-a004-a58e7f395cb0', '2019-05-21 05:54:38', '2019-05-21 05:54:38', NULL),
('a65cc990-7bc5-11e9-bb04-3bacf021e3c4', 'Pelanggan Anda mendekati Anda untuk bisa mendapatkan produk yang dapat dikirim ke Amerika melalui kapal laut. Standar waktu pengiriman adalah 3 bulan, sedangkan, dalam hal ini pelanggan Anda meminta lebih cepat. Anda berkordinasi dengan tim Supply Chain (Distribusi) guna mempercepat pengiriman. Dua hari sebelum pengiriman, Anda menghubungi tim Supply Chain untuk mendapatkan update informasi mengenai hal ini. Namun ternyata Anda justru menemukan bahwa produk tersebut tidak ada pada pengiriman sebelumnya. Anda akan :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'f19ef1d0-7bbc-11e9-903f-a1b146ad42ca', '2019-05-21 05:40:44', '2019-05-21 05:40:44', NULL),
('dbab5940-9187-11e9-9402-ab6d5e9bd3a6', 'Adfadf', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'af449ac0-7bbc-11e9-a2c5-853b8850b79b', '2019-06-17 22:13:50', '2019-06-17 22:39:53', '2019-06-17 22:39:53'),
('e2bf6a20-7bc7-11e9-a218-7935b1be135b', 'Anda adalah manager level menengah (middle manager) di perusahaan ABC. Anda mengelola tim yang terdiri dari 8 orang. Selama 6 bulan terakhir, beban kerja tim Anda melonjak tajam. Tingginya jumlah pengiriman membuat kekacaaun terjadi setiap hari di operasi perusahaan. Anda menyadari bahwa tim Anda dalam hal ini susah payah untuk menepati deadline, dan tidak mampu untuk secara efektif menentukan prioritas tugas. Ini juga yang menjadikan konflik terjadi di tim Anda. Anda juga menyadari bahwa proses internal perlu untuk distandarkan. Bagaimana Anda akan mengatasi hal ini?', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'b44c3100-7bbd-11e9-838e-03d4ebc9826b', '2019-05-21 05:56:44', '2019-05-21 05:56:44', NULL),
('f191fae0-7bc4-11e9-a1a2-a7bbe273b240', 'Anda menemukan bahwa salah satu anggota tim Anda, Rafi, merupakan salah satu anggota tim yang selama ini memiliki performance yang sangat baik, namun saat ini sedang kesulitan mencapai targetnya. Anda juga menerima umpan balik negatif tentang performancenya dari anggota tim lain. Anda secara informal mengajak Rafi bicara, namun hal ini tidak membawa perubahan. Anda khawatir hal ini akan berdampak pada anggota tim lain dan pencapaian target tim secara keseluruhan. Apa yang kira-kira akan Anda lakukan :', 'cdac72b0-7aff-11e9-a2be-a719a56b41d5', 'af449ac0-7bbc-11e9-a2c5-853b8850b79b', '2019-05-21 05:35:40', '2019-05-21 05:35:40', NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `phone`, `address`, `image`, `level`, `active`, `confirmation_code`, `code_reset_password`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1374ef80-9a63-11e9-bf7d-638d12446e1f', 'septiyahiryani8@gmail.com', '$2y$10$MeoblddgBkUJGKlygsc9dulvXbmeBeDSvNkQo3miipFP8504lDSaa', 'Septiya', 'Hiryani', '08990805689', NULL, NULL, 'Participant', '1', '', NULL, '2019-06-29 04:43:13', '2019-06-29 04:43:13', NULL),
('1f10e3b0-9a65-11e9-9334-21dca8ba3d97', 'michaelfebran1@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Michel', 'Febran', '081213957426', NULL, NULL, 'Participant', '1', '', NULL, '2019-06-29 04:57:51', '2019-06-29 04:57:51', NULL),
('35c557e0-9a7f-11e9-9386-e3baed692d55', 'juankalyzta206@gmail.com', '$2y$10$r0tWKa2Co8KzzrvNWqTvMOBSBtFX9zGxsVmrkU8XgHMQmWMi7zQJO', 'Juan ', 'Kalyzta', '08788006117', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('35cf71d0-9a7f-11e9-82f3-e333fa60d3c9', 'yogiealqasas@gmail.com', '$2y$10$89sLSxec/poYXBrf5SVBBOf7ui3wSbjOBFMuqz0GNT0VkCNusv92q', 'Yogi Angga ', 'Putra', '082269851174', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('35d98ac0-9a7f-11e9-b469-7519129dca97', 'verdiansyah1404@gmail.com', '$2y$10$SEhJylvu.y94s4sccxSIhuqLTGjLabNUB96OSGVavoMsuJUtY4nGS', 'Muhammad ', 'Verdiansyah', '089643934432', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('35e3b4b0-9a7f-11e9-a16e-13a3e705f0be', 'selfianahalfiani10@gmail.com', '$2y$10$vRh/XdSQnJ1eEQj7f61Vt.1pEnQoCnjHKgnbnpHcRnvsFwO1eguYe', 'Selfiana ', 'Halfiana', '089521015843', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('35edd710-9a7f-11e9-9008-679998e94d0d', 'gracesimamora15@gmail.com', '$2y$10$4FW/XKxwQAmkIFsCXO3TjOCzgTuescUiwQQqnCyRM.YEZdjjj3JsS', 'Grace A L ', 'Simamora', '082275962110', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('35f80150-9a7f-11e9-a808-73f74ac6fc69', '1811501541@student.budiluhur.ac.id', '$2y$10$lUhzSvSNOenaWm9c0QTVZ.tQ.iu88D0BWiDUrCKfosVpX1Lq8/ypa', 'Sanding ', 'Riyanto', '082225118172', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('360159e0-9a7f-11e9-a4f3-53329356dc19', 'rifkiadnan147@gmail.com', '$2y$10$BOujY1ofQD/acekYxzukmOFjEICUQEcKLdTgsV3V4nOVQMZJVu7Xa', 'Muhamad Rifki ', 'Adnan', '082299879923', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:36', '2019-06-29 08:04:36', NULL),
('360a8190-9a7f-11e9-949a-ddfa1ff207c7', 'irennada67@gmail.com', '$2y$10$P5KAyQJttbqNLRI1DMMY7OsLoq63ME1uKC0AmjLdokTkKIerE4kdq', 'Irennada', 'Irennada', '085697995204', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:37', '2019-06-29 08:04:37', NULL),
('36148b10-9a7f-11e9-8f0b-4b713de908d9', 'nurfahmiazis19@gmail.com', '$2y$10$bspjBFkAxS1dHUpH4Ebi/.1pMM/9ev6wncwkPWTXXd8wNSokImyna', 'Nur Fahmi ', 'Aziz', '08559894588', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:37', '2019-06-29 08:04:37', NULL),
('361e8910-9a7f-11e9-84be-1f9c676aca6a', 'erikanur200900@gmail.com', '$2y$10$rKzouoSSLdcV6n0Kv1IgsupwZTU6VsTt9IPmluFqqp/ZB/uAfrRBC', 'Erika Nur ', 'Komalasari', '089613351182', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:37', '2019-06-29 08:04:37', NULL),
('36289050-9a7f-11e9-9266-8573ace6fddb', '182500724@student.budiluhur.ac.id', '$2y$10$W/kTAZqJDnjyReedBxRq3ufZeJfy7U22WP8dLbmCjXJl3aFoBeF7e', 'Amirudin', 'Amirudin', '083895861264', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:37', '2019-06-29 08:04:37', NULL),
('3632b240-9a7f-11e9-b7d8-ff63a4a3feb8', 'nurulazz123@gmail.com', '$2y$10$Sq/sblvSO8TikjR88X/ZPe2Rms/ejimviNWatZwTmdJWgoGs94Zs6', 'Nurul ', 'Azzahra', '087888581458', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:37', '2019-06-29 08:04:37', NULL),
('363cc2c0-9a7f-11e9-8a97-cf080b42cf81', 'gunung03@gmail.com', '$2y$10$QV.aESVsXZfdlRJR7O9DH.DU1gvuKZF9q5Fa1Jz7Xx5/UWEigVMUO', 'Muhammad Iqbal ', 'Aryabima', '089629626742', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-29 08:04:37', '2019-06-29 08:04:37', NULL),
('82decff0-9977-11e9-98af-3d45b41fb2f3', 'zansgraffiti23@gmail.com', '$2y$10$LnO.9dybhNda.ZdHUt6z1.F/PuwajSJT4KcJZcDU43IvpwxMpcXU2', 'Rozan', 'Muttaqin', '082320708824', NULL, NULL, 'Participant', '1', NULL, NULL, '2019-06-28 00:36:58', '2019-06-28 00:36:58', NULL),
('8e2b0280-9a6c-11e9-9cad-1f31ae98e4ae', 'edsusantoo@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Edi', 'Susanto', '0898891434', '', NULL, 'Participant', '1', NULL, NULL, '2019-06-29 05:51:04', '2019-06-29 05:52:40', NULL),
('8e35b150-9a6c-11e9-b7d2-2d0fbd2ee614', 'joeagung456@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Agung', 'Santoso', '087882156212', '', NULL, 'Participant', '1', NULL, NULL, '2019-06-29 05:51:04', '2019-06-29 05:52:21', NULL),
('8e3ea380-9a6c-11e9-8929-6f26168bd66a', 'helmi.n.ihsan@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Helmi Nur', 'Ihsan', '087782900456', '', NULL, 'Participant', '1', NULL, NULL, '2019-06-29 05:51:04', '2019-06-29 05:53:22', NULL),
('8e477060-9a6c-11e9-a0f1-df08ad63cba0', 'fenclox@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Fauzi Setyo', 'Fendhio', '083807862701', '', NULL, 'Participant', '1', NULL, NULL, '2019-06-29 05:51:04', '2019-06-29 05:53:00', NULL),
('8e506500-9a6c-11e9-a673-4f9d7f85f88d', 'setyohandoko66@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Setyo', 'Handoko', '089631719406', '', NULL, 'Participant', '1', NULL, NULL, '2019-06-29 05:51:04', '2019-06-29 08:15:26', NULL),
('8e594fc0-9a6c-11e9-9a55-43a9481995cf', 'gregharmaruanaya.gm@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Greghar', 'Maruanaya', '082198621400', '', NULL, 'Participant', '1', NULL, NULL, '2019-06-29 05:51:04', '2019-06-29 05:53:48', NULL),
('989b0090-9a64-11e9-a0e7-2355b42115ed', 'calaslabkom@gmail.com', '$2y$10$SLFHHXzbNiKGQzqmsuryv.JcQgPzSgEd7FS7TNtxSgsNlCqgPs93i', 'Michael', 'Situmorang', '08978119025', NULL, NULL, 'Participant', '1', '', NULL, '2019-06-29 04:54:05', '2019-06-29 04:54:05', NULL),
('9d635a40-9974-11e9-b061-3bb4f46f51de', 'pandhuw58@gmail.com', '$2y$10$FG3KC73I1XnfzHyp3wfjKesAty7flA7nCPEYaTNytO3M13bplB4Uq', 'Pandhu', 'Wibowo', '081296807905', 'Perumahan Griya Bunga Asri Blok A No.5', 'PA-1561706174.jpeg', 'Super Admin', '1', NULL, NULL, '2019-06-28 00:16:14', '2019-06-28 00:16:14', NULL),
('c6179020-997b-11e9-b308-4b5718e2a5c4', 'kokohagungw@gmail.com', '$2y$10$JWud0Bh5jBi3Dm7kEFYs3uGoukDSTcFE.x2Dpqjx5L8FsQ8HoccQa', 'Kokoh', 'Agung', '081381964118', '-', 'PA-1561709249.jpg', 'Participant', '1', NULL, NULL, '2019-06-28 01:07:29', '2019-06-28 01:07:29', NULL),
('c8be5fc0-997a-11e9-bcbe-a71231a00243', 'jonaalamsyah123@gmail.com', '$2y$10$9NLNRI0CjLdMwFE/QAEPu./7QJSIHsI7VcFGHIwLUdnrnTDUckvFO', 'Jona', 'Malik Alamsyah', '089657744356', '-', 'PA-1561708824.jpg', 'Participant', '1', NULL, NULL, '2019-06-28 01:00:24', '2019-06-28 01:00:24', NULL),
('f5b1a590-9976-11e9-9593-1f7b505b9441', 'pandhu@webgopek.com', '$2y$10$.sWSW6yo/ydbCPWrRlbD3OgdTQambKvUF5Ik9fCGeN28MjB3cbFPy', 'Pandhu', 'Wibowo', '081296807905', '-', 'PA-1561707181.jpeg', 'Participant', '1', NULL, NULL, '2019-06-28 00:33:01', '2019-06-28 00:33:01', NULL);

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
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `jawaban_id` (`jawaban_id`);

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
