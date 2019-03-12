-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2019 at 04:09 PM
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
-- Database: `freelance_os_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_administrators`
--

CREATE TABLE `log_administrators` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_administrators`
--

INSERT INTO `log_administrators` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Add New Administrator - Store|Success', 'Berhasil menyimpan data Administrator baru - Administrator ID : a3448cf0-3e60-11e9-9a5a-5dce72c91cf5, Firstname : Asdf, Lastname : Sdfgsd, Nickname : Sdfs, Email : asdf@gmail.com, Username : Asdf, Phone Number : 081296807905, Level : Super Admin, Address : Asdfasdf, Password : $2y$10$JwLZN6ONg5XkzTN4iZddKu7Iq1pgSCkrh9bzg8yeyaKNKmFGi5lFS, Image : PA-1551692038.jpg', 'http://localhost:8000/backend/pages/administrator/store', '2019-03-04 02:33:59', '2019-03-04 02:33:59', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Add New Administrator - Store|Success', 'Berhasil menyimpan data Administrator baru - Administrator ID : 84d95f40-3e64-11e9-ba95-1dbc151c1d92, Firstname : Purwo, Lastname : Setyo Aji, Nickname : Purwo, Email : purwo.setyo.aji@gmail.com, Username : Purwo, Phone Number : 081296807905, Level : Super Admin, Address : Bintaro, Password : $2y$10$ar/urFgzDG8QvdPwa3d1L.k4bZM3MzBU3Uj/hDGTDIMm7zLgHH3Zi, Image : PA-1551693705.jpg', 'http://localhost:8000/backend/pages/administrator/store', '2019-03-04 03:01:46', '2019-03-04 03:01:46', NULL, 'Chrome 68'),
(3, '84d95f40-3e64-11e9-ba95-1dbc151c1d92', '127.0.0.1', 'Delete Administrator - Delete|Success', 'Berhasil menghapus data Administrator - Administrator ID : 84d95f40-3e64-11e9-ba95-1dbc151c1d92, Firstname : Purwo, Lastname : Setyo Aji, Nickname : Purwo, Email : purwo.setyo.aji@gmail.com, Username : Purwo, Phone Number : 081296807905, Level : Super Admin, Address : Bintaro, Password : $2y$10$eyOVOwloqc7LanyhjXxEx.RdU//xwrKYELcoVpHd.EUnK7CzqM2ka, Image : PA-1551693705.jpg', 'http://localhost:8000/backend/pages/administrator/delete', '2019-03-04 03:02:36', '2019-03-04 03:02:36', NULL, 'Chrome 68'),
(4, '1', '127.0.0.1', 'Update Administrator - Update|Success', 'Berhasil mengubah data Administrator - Administrator ID : 1, Firstname : Pandhu, Lastname : Wibowo, Nickname : Pandhu, Email : pandhu@gmail.com, Username : Pandhu612, Phone Number : 081296807906Perumahan Griya Bunga Asri, Image : PA-1551695054.jpg', 'http://localhost:8000/backend/pages/administrator/update', '2019-03-04 03:24:14', '2019-03-04 03:24:14', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_answers`
--

CREATE TABLE `log_answers` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_answers`
--

INSERT INTO `log_answers` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Delete Jawaban - Delete|Success', 'Berhasil menghapus data Jawaban - Jawaban ID : 361e3eb0-3ff5-11e9-b78f-75bbbb8b7170, Pertanyaan ID : 3610c070-3ff5-11e9-8e93-d3c67eae8fa7, Jawaban : asdf, Nilai : 1', 'http://localhost:8000/backend/pages/answers/delete', '2019-03-06 02:50:44', '2019-03-06 02:50:44', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Delete Jawaban - Delete|Success', 'Berhasil menghapus data Jawaban - Jawaban ID : 58669040-3ff5-11e9-9f4d-e74daddc7124, Pertanyaan ID : 3610c070-3ff5-11e9-8e93-d3c67eae8fa7, Jawaban : sadf, Nilai : 1', 'http://localhost:8000/backend/pages/answers/delete', '2019-03-06 02:51:17', '2019-03-06 02:51:17', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_assessments`
--

CREATE TABLE `log_assessments` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_assessments`
--

INSERT INTO `log_assessments` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(2, '1', '127.0.0.1', 'Storing Assessment Type - Store|Success', 'Berhasil menyimpan data baru Assessment Type - Assessment Type ID : , Nama : Pengembangan Intelektual, No Urut Assessment : 4', 'http://localhost:8000/backend/pages/assesments/store', '2019-03-04 20:21:53', '2019-03-04 20:21:53', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Update Assessment Type - Update|Success', 'Berhasil mengubah data Assessment Type - Assessment Type ID : eyJpdiI6IitIeHNuQzh1WXJVQ09wMkxzVnV3eWc9PSIsInZhbHVlIjoiUU5QVHRVT2NIYm40R3N5b2krMXRKdDlIeTZRMDJjUlNcL3NwUlZ1c09Ua2V3ajBKN29BMXBkNUI2TVhxQUxvZnYiLCJtYWMiOiI0YjgxNzI3NjA3YjYzYzk0MTY0YjE5MTNiOTMxOWRkM2YyNTE1MTI4MDM3MjNmZmJiNmU0YTMxYTZmYmEzM2E3In0=, Nama : Pengembangan Intelektuals, No Urut Assessment : 5', 'http://localhost:8000/backend/pages/assesments/update', '2019-03-04 20:32:38', '2019-03-04 20:32:38', NULL, 'Chrome 68'),
(4, '1', '127.0.0.1', 'Delete Assessment Type - Delete|Success', 'Berhasil menghapus data Assessment Type - Assessment Type ID : d2fc5f20-3ef5-11e9-a0c7-a3466dee24d3, Name : Pengembangan Intelektuals, No Urut Assessment : 5', 'http://localhost:8000/backend/pages/assesments/delete', '2019-03-04 20:34:32', '2019-03-04 20:34:32', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_competencies`
--

CREATE TABLE `log_competencies` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_competencies`
--

INSERT INTO `log_competencies` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Store Kompetensi - Store|Success', 'Berhasil menyimpan data baru Kompetensi - Kompetensi ID : , Kompetensi : Asdfasdfasdf, Definisi : <p>asdfasdf</p>, Pengembangan Mandiri : <p>asdfsda</p>, Pengembangan Bermitra : <p>asdfsda</p>, Tema Pelatihan : <p>asdfasdf</p>, No Urut : 21', 'http://localhost:8000/backend/pages/competencies/store', '2019-03-04 21:00:37', '2019-03-04 21:00:37', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Update Kompetensi - Update|Success', 'Berhasil mengubah data Kompetensi - Kompetensi ID : eyJpdiI6ImxhSDMxd011MTQycDhpZzN3R1A3WHc9PSIsInZhbHVlIjoiMkZyVkUzdTVtaUM3SFBoMzQ5VDhTUVVvZWxUamM3czdxTGJHd1NjNFRFMWZQYjBDcXg0bllZNkE0QTZaTG5HcSIsIm1hYyI6IjJlNTI4Y2FlODUzZjRjYjAxYTE2NTNiZWM1ZWM1MGE0MWNlNTBjMDhiZjJjZTUyYmI3YzI2MTAxYWNiM2ZiYTAifQ==, Kompetensi : Asdfasdfasdf, Definisi : <p>asdfasdf</p>, Pengembangan Mandiri : <p>asdfsda</p>, Pengembangan Bermitra : <p>asdfsda</p>, Tema Pelatihan : <p>asdfasdf</p>, No Urut : 21', 'http://localhost:8000/backend/pages/competencies/update', '2019-03-04 21:02:44', '2019-03-04 21:02:44', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Delete Kompetensi - Delete|Success', 'Berhasil menghapus data Kompetensi - Kompetensi ID : 3c305910-3efb-11e9-add1-6b4a940bff8b, Kompetensi : Asdfasdfasdf, Definisi : <p>asdfasdf</p>, Pengembangan Mandiri : <p>asdfsda</p>, Pengembangan Bermitra : <p>asdfsda</p>, Tema Pelatihan : <p>asdfasdf</p>, No Urut : 21', 'http://localhost:8000/backend/pages/competencies/delete', '2019-03-04 21:02:55', '2019-03-04 21:02:55', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_configurations`
--

CREATE TABLE `log_configurations` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_configurations`
--

INSERT INTO `log_configurations` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Update Configuration - Update|Success', 'Berhasil mengubah data Configuration - Configuration ID : eyJpdiI6IjRPeFlweXRtTGx2XC8zTUx5dDBSMUV3PT0iLCJ2YWx1ZSI6IklZdG16TmdnRXNYb2VNenRaU2RcLzR3PT0iLCJtYWMiOiJmYjQxZGE3MzI5ZWZjN2VjODFkOTliMjcyZGY2Njg2ZDI2Mjk4ZDZjNjg4MDBlNjc0YjYwODIzMWIzY2EyMjgyIn0=, Jumlah : 6', 'http://localhost:8000/backend/pages/configurations/update', '2019-03-04 22:17:05', '2019-03-04 22:17:05', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Delete Configuration - Delete|Success', 'Berhasil menghapus data Configuration - Configuration ID : 56, Jumlah : 6', 'http://localhost:8000/backend/pages/configurations/delete', '2019-03-04 22:24:50', '2019-03-04 22:24:50', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_descresults`
--

CREATE TABLE `log_descresults` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_descresults`
--

INSERT INTO `log_descresults` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Store Description Result - Store|Success', 'Berhasil menyimpan data baru Description Result - Description Result ID : 930c93d0-3fd4-11e9-9d03-bfb7f8152f4b, Keterangan ID : b3cdae70-35c0-11e9-8691-2f7477988f43, Kompetensi ID : 7be045d0-0f5b-11e9-8402-db52a8444bc8, Hasil Kompetensi : <p>adfasdfasfasfasdfasdfasf</p>', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:56:24', '2019-03-05 22:56:24', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Update Description Result - Update|Success', 'Berhasil mengubah data Description Result - Description Result ID : eyJpdiI6IlZ4eXZkUDhkcXBxbWFFdzloU01ReUE9PSIsInZhbHVlIjoibkVvSFpcL05paXhTNzFKems2XC9YRGVJeTZpVzhOQXRvS1pFU2FmMlE4VnUyRnJpekI0M3VQS05yS0dPbFwvS1wvYUEiLCJtYWMiOiIyOWNiMGI5OTA3NDE5NWVlOTA1N2JhN2UwZTExNDcwYWNkYWM0ODc1OTk3YzU2NDVmMjJhYWE1NjRkN2YyMzE5In0=, Keterangan ID : b3cdae70-35c0-11e9-8691-2f7477988f43, Kompetensi ID : 7be045d0-0f5b-11e9-8402-db52a8444bc8, Hasil Kompetensi : <p>adfasdfasfasfasdfasdfasfadf<strong>dfasfasdfasdf</strong></p>', 'http://localhost:8000/backend/pages/descriptionresults/update', '2019-03-05 22:56:52', '2019-03-05 22:56:52', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Delete Description Result - Delete|Success', 'Berhasil menghapus data Description Result - Description Result ID : 930c93d0-3fd4-11e9-9d03-bfb7f8152f4b, Keterangan ID : b3cdae70-35c0-11e9-8691-2f7477988f43, Kompetensi ID : 7be045d0-0f5b-11e9-8402-db52a8444bc8, Hasil Kompetensi : <p>adfasdfasfasfasdfasdfasfadf<strong>dfasfasdfasdf</strong></p>', 'http://localhost:8000/backend/pages/descriptionresults/delete', '2019-03-05 22:57:04', '2019-03-05 22:57:04', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_forgot_passwords`
--

CREATE TABLE `log_forgot_passwords` (
  `id` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_forgot_passwords`
--

INSERT INTO `log_forgot_passwords` (`id`, `email`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(5, 'pandhuw58@gmail.com', '127.0.0.1', 'ForgotPassword Button', 'pandhuw58@gmail.com melakukan lupa password yang dikirim di email', 'http://localhost:8000/user/pages/forgot/password/sent', '2019-03-04 00:44:15', '2019-03-04 00:44:15', NULL, 'Chrome 68'),
(6, 'pandhuw58@gmail.com', '127.0.0.1', 'Link ForgotPassword Button', 'pandhuw58@gmail.com pergi ke halaman Reset Password', 'http://localhost:8000/user/pages/changepassword/wUSTcLK2C4DM0dwXgRIp5p05u0s0Lr', '2019-03-04 00:44:41', '2019-03-04 00:44:41', NULL, 'Chrome 68'),
(7, 'pandhuw58@gmail.com', '127.0.0.1', 'Submit ForgotPassword Button', 'Berhasil ForgotPassword diubah', 'http://localhost:8000/user/pages/forgot/password/resets', '2019-03-04 00:45:11', '2019-03-04 00:45:11', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_histories`
--

CREATE TABLE `log_histories` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_histories`
--

INSERT INTO `log_histories` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(2, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Detail Histories', 'pandhuw58@gmail.com mengunjungi halaman Detail Histories dengan ID : eyJpdiI6ImFVbUFrb1FLWlNMcklWQm5jNzhqdGc9PSIsInZhbHVlIjoiMDlHS0FvQ1p0SUNyYldadGRybmtUZGY5cW1jcmxHbjhGdk02VEdMY0lMazB5YkI5Mk1OQzRTMEZsN1Y3OWNUWiIsIm1hYyI6ImEyZDdiMTdhZjhhOGZhM2Q3MmQzYzc3ZTYwM2RhYTYzZmJkMDhkYzQzNDA5Mzc0MTJmMmUxMDBhOTJmODU5ZjUifQ==', 'http://localhost:8000/user/pages/histories/eyJpdiI6ImFVbUFrb1FLWlNMcklWQm5jNzhqdGc9PSIsInZhbHVlIjoiMDlHS0FvQ1p0SUNyYldadGRybmtUZGY5cW1jcmxHbjhGdk02VEdMY0lMazB5YkI5Mk1OQzRTMEZsN1Y3OWNUWiIsIm1hYyI6ImEyZDdiMTdhZjhhOGZhM2Q3MmQzYzc3ZTYwM2RhYTYzZmJkMDhkYzQzNDA5Mzc0MTJmMmUxMDBhOTJmODU5ZjUifQ==', '2019-03-06 09:31:35', '2019-03-06 09:31:35', NULL, 'Chrome 68'),
(3, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Detail Histories', 'pandhuw58@gmail.com mengunjungi halaman Detail Histories dengan ID : eyJpdiI6Iml5eEJcLzNmTkEyV1Z6ZVR6dlBtb2RBPT0iLCJ2YWx1ZSI6Iis3aERIQitiREN2dkxGbXVHbHdaUHJFVGJKN2FsQXZYa3dxbkVSTFJGY1hZRlROUTFpTUtQVmdpV2Zhd2ltRnAiLCJtYWMiOiJlZWYyOGMzOTdhNDExZTlhM2UzYTYwMTRmNDBhOWZhMzBlYzMyNzc0ZmQzNDYxOWFmYjZhMTAxZGI2MDMyNzliIn0=', 'http://localhost:8000/user/pages/histories/eyJpdiI6Iml5eEJcLzNmTkEyV1Z6ZVR6dlBtb2RBPT0iLCJ2YWx1ZSI6Iis3aERIQitiREN2dkxGbXVHbHdaUHJFVGJKN2FsQXZYa3dxbkVSTFJGY1hZRlROUTFpTUtQVmdpV2Zhd2ltRnAiLCJtYWMiOiJlZWYyOGMzOTdhNDExZTlhM2UzYTYwMTRmNDBhOWZhMzBlYzMyNzc0ZmQzNDYxOWFmYjZhMTAxZGI2MDMyNzliIn0=', '2019-03-06 09:31:50', '2019-03-06 09:31:50', NULL, 'Chrome 68'),
(4, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Detail Histories', 'pandhuw58@gmail.com mengunjungi halaman Detail Histories dengan ID : eyJpdiI6Im0xOUlEcFQxY01CZ2Fyc3RCQWUxeGc9PSIsInZhbHVlIjoiTDhYS1VmS3NZY2lxRnVuNEZ6Y3VCNGFYVktVb0FlUDBaZzRBRVFPNTl3MWxTdERQUWg2M24zaGhsTGVsUkVxSyIsIm1hYyI6IjBlNGEwNzM4MDE4N2ZhYjYyMjljYmRhZDVlOTJmNTdiNzYwZTgzYTU1ZmQ5OWFhOWIzNzkwOTMyNjJjOWM4NDkifQ==', 'http://localhost:8000/user/pages/histories/eyJpdiI6Im0xOUlEcFQxY01CZ2Fyc3RCQWUxeGc9PSIsInZhbHVlIjoiTDhYS1VmS3NZY2lxRnVuNEZ6Y3VCNGFYVktVb0FlUDBaZzRBRVFPNTl3MWxTdERQUWg2M24zaGhsTGVsUkVxSyIsIm1hYyI6IjBlNGEwNzM4MDE4N2ZhYjYyMjljYmRhZDVlOTJmNTdiNzYwZTgzYTU1ZmQ5OWFhOWIzNzkwOTMyNjJjOWM4NDkifQ==', '2019-03-06 09:31:55', '2019-03-06 09:31:55', NULL, 'Chrome 68'),
(5, '1', '127.0.0.1', 'Menu Detail Histories', 'pandhu@gmail.com mengunjungi halaman Detail Histories dengan ID : eyJpdiI6IlpJMjJUZ29zMkJRSnJ6OWk0UTcxS2c9PSIsInZhbHVlIjoidis1WHBsVVJ5S1wvTllDZ01OWk5UY3MxWEVcL0VzNFpRZGthMWt4ODkwSStxTVZnTnpReFlrK1ZQWm16Z3FJdmczIiwibWFjIjoiMWVkZjgyNzY0NjE1ZmFhMTY4ZjI1ZDQ1NDAxOTMxMjcwNzYxYzgyMTMwNTJmMzZhYjg3M2M5MGYzYjQyMWIwNiJ9', 'http://localhost:8000/backend/pages/histories/eyJpdiI6IlpJMjJUZ29zMkJRSnJ6OWk0UTcxS2c9PSIsInZhbHVlIjoidis1WHBsVVJ5S1wvTllDZ01OWk5UY3MxWEVcL0VzNFpRZGthMWt4ODkwSStxTVZnTnpReFlrK1ZQWm16Z3FJdmczIiwibWFjIjoiMWVkZjgyNzY0NjE1ZmFhMTY4ZjI1ZDQ1NDAxOTMxMjcwNzYxYzgyMTMwNTJmMzZhYjg3M2M5MGYzYjQyMWIwNiJ9', '2019-03-06 09:32:34', '2019-03-06 09:32:34', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_logins`
--

CREATE TABLE `log_logins` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_logins`
--

INSERT INTO `log_logins` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(12, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-02-27 07:23:05', '2019-02-27 07:23:05', NULL, 'Chrome 68'),
(13, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Log Out Button', 'pandhuw58@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-02-27 07:23:16', '2019-02-27 07:23:16', NULL, 'Chrome 68'),
(14, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Log Out Button', 'pandhuw58@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-02-27 08:14:21', '2019-02-27 08:14:21', NULL, 'Firefox 64'),
(15, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-02-28 02:48:34', '2019-02-28 02:48:34', NULL, 'Chrome 68'),
(16, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-02-28 09:43:24', '2019-02-28 09:43:24', NULL, 'Chrome 68'),
(17, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Log Out Button', 'pandhuw58@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-02-28 09:51:16', '2019-02-28 09:51:16', NULL, 'Chrome 68'),
(18, '23c48650-3bf8-11e9-a335-27388d2f139e', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-01 01:02:12', '2019-03-01 01:02:12', NULL, 'Chrome 68'),
(19, '23c48650-3bf8-11e9-a335-27388d2f139e', '127.0.0.1', 'Log Out Button', 'pandhuw58@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-01 01:02:19', '2019-03-01 01:02:19', NULL, 'Chrome 68'),
(20, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-01 03:09:20', '2019-03-01 03:09:20', NULL, 'Chrome 68'),
(21, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-01 03:16:31', '2019-03-01 03:16:31', NULL, 'Chrome 68'),
(22, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-01 03:21:33', '2019-03-01 03:21:33', NULL, 'Chrome 68'),
(23, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw5@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-01 03:24:16', '2019-03-01 03:24:16', NULL, 'Firefox 64'),
(24, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw5@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-01 03:24:17', '2019-03-01 03:24:17', NULL, 'Firefox 64'),
(25, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-01 04:13:12', '2019-03-01 04:13:12', NULL, 'Chrome 68'),
(26, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-03 07:48:57', '2019-03-03 07:48:57', NULL, 'Chrome 68'),
(27, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-03 07:51:33', '2019-03-03 07:51:33', NULL, 'Chrome 68'),
(28, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com tidak bisa melakukan signin dengan password diajarinjuga. Karena password salah.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-03 07:53:42', '2019-03-03 07:53:42', NULL, 'Chrome 68'),
(29, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-03 07:53:49', '2019-03-03 07:53:49', NULL, 'Chrome 68'),
(30, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-03 07:55:37', '2019-03-03 07:55:37', NULL, 'Chrome 68'),
(31, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw5@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-03 07:55:48', '2019-03-03 07:55:48', NULL, 'Chrome 68'),
(32, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Log Out Button', 'pandhuw5@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-03 07:55:59', '2019-03-03 07:55:59', NULL, 'Chrome 68'),
(33, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-03 23:00:27', '2019-03-03 23:00:27', NULL, 'Chrome 68'),
(34, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-03 23:41:43', '2019-03-03 23:41:43', NULL, 'Chrome 68'),
(35, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 00:45:33', '2019-03-04 00:45:33', NULL, 'Chrome 68'),
(36, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Log Out Button', 'pandhuw58@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-04 00:45:36', '2019-03-04 00:45:36', NULL, 'Chrome 68'),
(37, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 00:53:44', '2019-03-04 00:53:44', NULL, 'Chrome 68'),
(38, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-04 03:01:53', '2019-03-04 03:01:53', NULL, 'Chrome 68'),
(39, '84d95f40-3e64-11e9-ba95-1dbc151c1d92', '127.0.0.1', 'Login Button', 'purwo.setyo.aji@gmail.com melakukan signin dengan password purwo007.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 03:02:00', '2019-03-04 03:02:00', NULL, 'Chrome 68'),
(40, '84d95f40-3e64-11e9-ba95-1dbc151c1d92', '127.0.0.1', 'Log Out Button', 'purwo.setyo.aji@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-04 03:02:47', '2019-03-04 03:02:47', NULL, 'Chrome 68'),
(41, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 03:03:45', '2019-03-04 03:03:45', NULL, 'Chrome 68'),
(42, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-04 04:20:05', '2019-03-04 04:20:05', NULL, 'Chrome 68'),
(43, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com tidak bisa melakukan signin dengan password padhu0703. Karena password salah.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 08:51:44', '2019-03-04 08:51:44', NULL, 'Chrome 68'),
(44, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 08:51:53', '2019-03-04 08:51:53', NULL, 'Chrome 68'),
(45, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 18:28:30', '2019-03-04 18:28:30', NULL, 'Chrome 68'),
(46, NULL, '127.0.0.1', 'Log Out Button', ' telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-04 21:53:22', '2019-03-04 21:53:22', NULL, 'Chrome 68'),
(47, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 21:53:40', '2019-03-04 21:53:40', NULL, 'Chrome 68'),
(48, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-05 01:12:48', '2019-03-05 01:12:48', NULL, 'Chrome 68'),
(49, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-05 01:14:41', '2019-03-05 01:14:41', NULL, 'Chrome 68'),
(50, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-05 20:01:50', '2019-03-05 20:01:50', NULL, 'Chrome 68'),
(51, NULL, '127.0.0.1', 'Log Out Button', ' telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-06 01:05:30', '2019-03-06 01:05:30', NULL, 'Chrome 68'),
(52, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-06 01:06:18', '2019-03-06 01:06:18', NULL, 'Chrome 68'),
(53, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-06 03:09:14', '2019-03-06 03:09:14', NULL, 'Chrome 68'),
(54, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com tidak bisa melakukan signin dengan password diajairnjuga. Karena password salah.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-06 03:13:28', '2019-03-06 03:13:28', NULL, 'Chrome 68'),
(55, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-06 03:14:03', '2019-03-06 03:14:03', NULL, 'Chrome 68'),
(56, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Login Button', 'pandhuw58@gmail.com melakukan signin dengan password diajarinjuga.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-06 06:32:36', '2019-03-06 06:32:36', NULL, 'Chrome 68'),
(57, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Log Out Button', 'pandhuw58@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-06 09:32:08', '2019-03-06 09:32:08', NULL, 'Chrome 68'),
(58, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-06 09:32:22', '2019-03-06 09:32:22', NULL, 'Chrome 68'),
(59, '1', '127.0.0.1', 'Log Out Button', 'pandhu@gmail.com telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-06 09:32:44', '2019-03-06 09:32:44', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_pages`
--

CREATE TABLE `log_pages` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_pages`
--

INSERT INTO `log_pages` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(41, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 08:52:23', '2019-03-04 08:52:23', NULL, 'Chrome 68'),
(42, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 08:52:27', '2019-03-04 08:52:27', NULL, 'Chrome 68'),
(43, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 08:54:47', '2019-03-04 08:54:47', NULL, 'Chrome 68'),
(44, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IktDVHRpblVrb29QZ1E0eFpuc2hoSWc9PSIsInZhbHVlIjoidnJtWFdTOWZQN1Y0bUs4WHAzVEZPUGdpWSt4TzdkVHRuTzV2dWc1dHdEam5QZVZcL0o2dkRrNVwvWUhVVW82UXJDIiwibWFjIjoiOTFmMjAwMjlhYjUwYTYzNDYxY2VlODRkNDhiODAwOWMxNzc2M2FiNTIyNTk2YWJlYzQ4ZDViMzY3MTRkMGVjNyJ9', 'http://localhost:8000/backend/pages/users/eyJpdiI6IktDVHRpblVrb29QZ1E0eFpuc2hoSWc9PSIsInZhbHVlIjoidnJtWFdTOWZQN1Y0bUs4WHAzVEZPUGdpWSt4TzdkVHRuTzV2dWc1dHdEam5QZVZcL0o2dkRrNVwvWUhVVW82UXJDIiwibWFjIjoiOTFmMjAwMjlhYjUwYTYzNDYxY2VlODRkNDhiODAwOWMxNzc2M2FiNTIyNTk2YWJlYzQ4ZDViMzY3MTRkMGVjNyJ9', '2019-03-04 08:55:10', '2019-03-04 08:55:10', NULL, 'Chrome 68'),
(45, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IktDVHRpblVrb29QZ1E0eFpuc2hoSWc9PSIsInZhbHVlIjoidnJtWFdTOWZQN1Y0bUs4WHAzVEZPUGdpWSt4TzdkVHRuTzV2dWc1dHdEam5QZVZcL0o2dkRrNVwvWUhVVW82UXJDIiwibWFjIjoiOTFmMjAwMjlhYjUwYTYzNDYxY2VlODRkNDhiODAwOWMxNzc2M2FiNTIyNTk2YWJlYzQ4ZDViMzY3MTRkMGVjNyJ9', 'http://localhost:8000/backend/pages/users/eyJpdiI6IktDVHRpblVrb29QZ1E0eFpuc2hoSWc9PSIsInZhbHVlIjoidnJtWFdTOWZQN1Y0bUs4WHAzVEZPUGdpWSt4TzdkVHRuTzV2dWc1dHdEam5QZVZcL0o2dkRrNVwvWUhVVW82UXJDIiwibWFjIjoiOTFmMjAwMjlhYjUwYTYzNDYxY2VlODRkNDhiODAwOWMxNzc2M2FiNTIyNTk2YWJlYzQ4ZDViMzY3MTRkMGVjNyJ9', '2019-03-04 09:02:29', '2019-03-04 09:02:29', NULL, 'Chrome 68'),
(46, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:06:39', '2019-03-04 09:06:39', NULL, 'Chrome 68'),
(47, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:08:05', '2019-03-04 09:08:05', NULL, 'Chrome 68'),
(48, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IkVNUEFCMFVVY2NYRDNLb21BaWFXa3c9PSIsInZhbHVlIjoiMmlKbnhMS2ZCQndFSkI0U2hSbTAzaytWZytcL3E3dlZsc0IyTzhRNENpYUJ0R3FqUzBQZmY2ell0ODBwUUNrNzMiLCJtYWMiOiI1ZTBmODg3ZTZkNTA5Njk3MGMzNTY1YTY0YjJjZThjZjdiNTllM2I4YWRlNTcyY2JkNTlmOWMzODQwMTU5YzQyIn0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6IkVNUEFCMFVVY2NYRDNLb21BaWFXa3c9PSIsInZhbHVlIjoiMmlKbnhMS2ZCQndFSkI0U2hSbTAzaytWZytcL3E3dlZsc0IyTzhRNENpYUJ0R3FqUzBQZmY2ell0ODBwUUNrNzMiLCJtYWMiOiI1ZTBmODg3ZTZkNTA5Njk3MGMzNTY1YTY0YjJjZThjZjdiNTllM2I4YWRlNTcyY2JkNTlmOWMzODQwMTU5YzQyIn0=', '2019-03-04 09:08:09', '2019-03-04 09:08:09', NULL, 'Chrome 68'),
(49, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IkVNUEFCMFVVY2NYRDNLb21BaWFXa3c9PSIsInZhbHVlIjoiMmlKbnhMS2ZCQndFSkI0U2hSbTAzaytWZytcL3E3dlZsc0IyTzhRNENpYUJ0R3FqUzBQZmY2ell0ODBwUUNrNzMiLCJtYWMiOiI1ZTBmODg3ZTZkNTA5Njk3MGMzNTY1YTY0YjJjZThjZjdiNTllM2I4YWRlNTcyY2JkNTlmOWMzODQwMTU5YzQyIn0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6IkVNUEFCMFVVY2NYRDNLb21BaWFXa3c9PSIsInZhbHVlIjoiMmlKbnhMS2ZCQndFSkI0U2hSbTAzaytWZytcL3E3dlZsc0IyTzhRNENpYUJ0R3FqUzBQZmY2ell0ODBwUUNrNzMiLCJtYWMiOiI1ZTBmODg3ZTZkNTA5Njk3MGMzNTY1YTY0YjJjZThjZjdiNTllM2I4YWRlNTcyY2JkNTlmOWMzODQwMTU5YzQyIn0=', '2019-03-04 09:09:22', '2019-03-04 09:09:22', NULL, 'Chrome 68'),
(50, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:09:28', '2019-03-04 09:09:28', NULL, 'Chrome 68'),
(51, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:12:06', '2019-03-04 09:12:06', NULL, 'Chrome 68'),
(52, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6Ik9TbndnTjZpdkNnTGFYVjBoZnlcL0RBPT0iLCJ2YWx1ZSI6Im15V3g5UjY5eXFPaFVldU9tVWdoUUg3cmhEa0tGdTNleGpxNGFoc0VhZ2FlejV1N3EySGtrbjdlbnZwdzkrVUMiLCJtYWMiOiI3MDBkNWRhOTY3YzhiYWFlNjA4Y2E0MGY5MjJlZDA3NGQyNTk4MGQxOGRkMWEwNzM4ZmFjNjA2YmJiYWI1MThkIn0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6Ik9TbndnTjZpdkNnTGFYVjBoZnlcL0RBPT0iLCJ2YWx1ZSI6Im15V3g5UjY5eXFPaFVldU9tVWdoUUg3cmhEa0tGdTNleGpxNGFoc0VhZ2FlejV1N3EySGtrbjdlbnZwdzkrVUMiLCJtYWMiOiI3MDBkNWRhOTY3YzhiYWFlNjA4Y2E0MGY5MjJlZDA3NGQyNTk4MGQxOGRkMWEwNzM4ZmFjNjA2YmJiYWI1MThkIn0=', '2019-03-04 09:12:12', '2019-03-04 09:12:12', NULL, 'Chrome 68'),
(53, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:13:08', '2019-03-04 09:13:08', NULL, 'Chrome 68'),
(54, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:13:41', '2019-03-04 09:13:41', NULL, 'Chrome 68'),
(55, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6InM3dXZqdjErVXBhYnNvdzZmRzRJeVE9PSIsInZhbHVlIjoienVmaHFyY3NzMFp5Z3B5aVhTYlpMWERLbDkxZDR6ZGhQV2orZ3FHUm5idUdXazlcL3Q0aXFtZ1E1KzFMODdrTm0iLCJtYWMiOiIzZDNhNjZjZTBiOTQ1NDkxNzg2Y2Y4NTRlZGU3NzhlMGVmN2FlODI3OWM5ZjhmYjZmMjJjNjcyNjM2NGNiYjIyIn0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6InM3dXZqdjErVXBhYnNvdzZmRzRJeVE9PSIsInZhbHVlIjoienVmaHFyY3NzMFp5Z3B5aVhTYlpMWERLbDkxZDR6ZGhQV2orZ3FHUm5idUdXazlcL3Q0aXFtZ1E1KzFMODdrTm0iLCJtYWMiOiIzZDNhNjZjZTBiOTQ1NDkxNzg2Y2Y4NTRlZGU3NzhlMGVmN2FlODI3OWM5ZjhmYjZmMjJjNjcyNjM2NGNiYjIyIn0=', '2019-03-04 09:13:44', '2019-03-04 09:13:44', NULL, 'Chrome 68'),
(56, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6InM3dXZqdjErVXBhYnNvdzZmRzRJeVE9PSIsInZhbHVlIjoienVmaHFyY3NzMFp5Z3B5aVhTYlpMWERLbDkxZDR6ZGhQV2orZ3FHUm5idUdXazlcL3Q0aXFtZ1E1KzFMODdrTm0iLCJtYWMiOiIzZDNhNjZjZTBiOTQ1NDkxNzg2Y2Y4NTRlZGU3NzhlMGVmN2FlODI3OWM5ZjhmYjZmMjJjNjcyNjM2NGNiYjIyIn0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6InM3dXZqdjErVXBhYnNvdzZmRzRJeVE9PSIsInZhbHVlIjoienVmaHFyY3NzMFp5Z3B5aVhTYlpMWERLbDkxZDR6ZGhQV2orZ3FHUm5idUdXazlcL3Q0aXFtZ1E1KzFMODdrTm0iLCJtYWMiOiIzZDNhNjZjZTBiOTQ1NDkxNzg2Y2Y4NTRlZGU3NzhlMGVmN2FlODI3OWM5ZjhmYjZmMjJjNjcyNjM2NGNiYjIyIn0=', '2019-03-04 09:16:02', '2019-03-04 09:16:02', NULL, 'Chrome 68'),
(57, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6InM3dXZqdjErVXBhYnNvdzZmRzRJeVE9PSIsInZhbHVlIjoienVmaHFyY3NzMFp5Z3B5aVhTYlpMWERLbDkxZDR6ZGhQV2orZ3FHUm5idUdXazlcL3Q0aXFtZ1E1KzFMODdrTm0iLCJtYWMiOiIzZDNhNjZjZTBiOTQ1NDkxNzg2Y2Y4NTRlZGU3NzhlMGVmN2FlODI3OWM5ZjhmYjZmMjJjNjcyNjM2NGNiYjIyIn0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6InM3dXZqdjErVXBhYnNvdzZmRzRJeVE9PSIsInZhbHVlIjoienVmaHFyY3NzMFp5Z3B5aVhTYlpMWERLbDkxZDR6ZGhQV2orZ3FHUm5idUdXazlcL3Q0aXFtZ1E1KzFMODdrTm0iLCJtYWMiOiIzZDNhNjZjZTBiOTQ1NDkxNzg2Y2Y4NTRlZGU3NzhlMGVmN2FlODI3OWM5ZjhmYjZmMjJjNjcyNjM2NGNiYjIyIn0=', '2019-03-04 09:16:18', '2019-03-04 09:16:18', NULL, 'Chrome 68'),
(58, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:16:21', '2019-03-04 09:16:21', NULL, 'Chrome 68'),
(59, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:17:01', '2019-03-04 09:17:01', NULL, 'Chrome 68'),
(60, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:17:05', '2019-03-04 09:17:05', NULL, 'Chrome 68'),
(61, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:22:25', '2019-03-04 09:22:25', NULL, 'Chrome 68'),
(62, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:24:41', '2019-03-04 09:24:41', NULL, 'Chrome 68'),
(63, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:25:49', '2019-03-04 09:25:49', NULL, 'Chrome 68'),
(64, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:27:07', '2019-03-04 09:27:07', NULL, 'Chrome 68'),
(65, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IjFXTndhOXh2MzBoK2hUS20wTGMzTXc9PSIsInZhbHVlIjoiTUVRZ3l6RlZiVFpLd0Q3UlRncmljeUlVMVNjXC8xS3BYVEJcL3FmN3RtWnprZ1RiMXoyNHJwWmFEZ1JKVERYSEtnIiwibWFjIjoiMWZmNDI5YjIzNjFiYzQzN2ZjMmIzYTA0Mjk1MGE2ODI1YzZhZDlkYzcyMzQwMWExZTg0ZDk3ZmZjZWEzMmJjNiJ9', 'http://localhost:8000/backend/pages/users/eyJpdiI6IjFXTndhOXh2MzBoK2hUS20wTGMzTXc9PSIsInZhbHVlIjoiTUVRZ3l6RlZiVFpLd0Q3UlRncmljeUlVMVNjXC8xS3BYVEJcL3FmN3RtWnprZ1RiMXoyNHJwWmFEZ1JKVERYSEtnIiwibWFjIjoiMWZmNDI5YjIzNjFiYzQzN2ZjMmIzYTA0Mjk1MGE2ODI1YzZhZDlkYzcyMzQwMWExZTg0ZDk3ZmZjZWEzMmJjNiJ9', '2019-03-04 09:38:41', '2019-03-04 09:38:41', NULL, 'Chrome 68'),
(66, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:38:45', '2019-03-04 09:38:45', NULL, 'Chrome 68'),
(67, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:39:07', '2019-03-04 09:39:07', NULL, 'Chrome 68'),
(68, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:39:11', '2019-03-04 09:39:11', NULL, 'Chrome 68'),
(69, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:43:20', '2019-03-04 09:43:20', NULL, 'Chrome 68'),
(70, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 09:43:51', '2019-03-04 09:43:51', NULL, 'Chrome 68'),
(71, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:44:34', '2019-03-04 09:44:34', NULL, 'Chrome 68'),
(72, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:46:47', '2019-03-04 09:46:47', NULL, 'Chrome 68'),
(73, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IlJha3kxNUNJXC9TWEJcL2lUd1lZcWlndz09IiwidmFsdWUiOiJ3TWJQVHpQM2ZyT3ZlQ0RqN2tyWWt3MWF0SnpPXC9iOHJlVlwvb2F6T0VtK3ZTZ01DVFFVXC9wNXJYWXZZWXc4bzRlIiwibWFjIjoiMjA5YzI3MzI1NzUzNjk0NDA1ZmE2ZGZmM2NlOGQzYmQ3MWRlZGIxZDkwMDU2ZDM0YWNmZDU5ZDc4M2Y3MjUzZiJ9', 'http://localhost:8000/backend/pages/users/eyJpdiI6IlJha3kxNUNJXC9TWEJcL2lUd1lZcWlndz09IiwidmFsdWUiOiJ3TWJQVHpQM2ZyT3ZlQ0RqN2tyWWt3MWF0SnpPXC9iOHJlVlwvb2F6T0VtK3ZTZ01DVFFVXC9wNXJYWXZZWXc4bzRlIiwibWFjIjoiMjA5YzI3MzI1NzUzNjk0NDA1ZmE2ZGZmM2NlOGQzYmQ3MWRlZGIxZDkwMDU2ZDM0YWNmZDU5ZDc4M2Y3MjUzZiJ9', '2019-03-04 09:46:50', '2019-03-04 09:46:50', NULL, 'Chrome 68'),
(74, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:46:58', '2019-03-04 09:46:58', NULL, 'Chrome 68'),
(75, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:47:48', '2019-03-04 09:47:48', NULL, 'Chrome 68'),
(76, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6ImJ3YnQ2TTRRTnpHempsSjJmRmlIRnc9PSIsInZhbHVlIjoib1Y3b2daMG1CNkhcL3kyTW5WN3B1emxxbUFWbU5vK3doaU12cVNNVml2WHREbGc0bjE5eUUrZnRsWGdReUhrZnIiLCJtYWMiOiJkMTU5Mzc0ZmM5NDk5NDNmOWNiOGE5NGFmYjM5MDEzNzBmZDQyOTIzOTFmNzg3NWU1YzQyOGJlMzhkMGMyOTg3In0=', 'http://localhost:8000/backend/pages/users/eyJpdiI6ImJ3YnQ2TTRRTnpHempsSjJmRmlIRnc9PSIsInZhbHVlIjoib1Y3b2daMG1CNkhcL3kyTW5WN3B1emxxbUFWbU5vK3doaU12cVNNVml2WHREbGc0bjE5eUUrZnRsWGdReUhrZnIiLCJtYWMiOiJkMTU5Mzc0ZmM5NDk5NDNmOWNiOGE5NGFmYjM5MDEzNzBmZDQyOTIzOTFmNzg3NWU1YzQyOGJlMzhkMGMyOTg3In0=', '2019-03-04 09:47:51', '2019-03-04 09:47:51', NULL, 'Chrome 68'),
(77, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:47:55', '2019-03-04 09:47:55', NULL, 'Chrome 68'),
(78, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 09:48:29', '2019-03-04 09:48:29', NULL, 'Chrome 68'),
(79, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6InVyMjRYTTd1R095Nm8wR0xFQWZiQ3c9PSIsInZhbHVlIjoibzkrTldxSGxjRmtGbnptS1wvV1E4VzZISUhOZ2JKTXBGR21ycEFsOTUxUWJLVEgzZm9lZHNxRVYrWVwvTDI1UFJ1IiwibWFjIjoiNWE0MTJmODVkNWQ0YzNhNjFiOTExY2IzNGUyYmM0MzY2NmFhNGFkNjc1NGEwMmRhNmUxNWZlYzFhYjljYTE5ZCJ9', 'http://localhost:8000/backend/pages/users/eyJpdiI6InVyMjRYTTd1R095Nm8wR0xFQWZiQ3c9PSIsInZhbHVlIjoibzkrTldxSGxjRmtGbnptS1wvV1E4VzZISUhOZ2JKTXBGR21ycEFsOTUxUWJLVEgzZm9lZHNxRVYrWVwvTDI1UFJ1IiwibWFjIjoiNWE0MTJmODVkNWQ0YzNhNjFiOTExY2IzNGUyYmM0MzY2NmFhNGFkNjc1NGEwMmRhNmUxNWZlYzFhYjljYTE5ZCJ9', '2019-03-04 09:48:32', '2019-03-04 09:48:32', NULL, 'Chrome 68'),
(80, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-04 18:28:30', '2019-03-04 18:28:30', NULL, 'Chrome 68'),
(81, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 20:09:30', '2019-03-04 20:09:30', NULL, 'Chrome 68'),
(82, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 20:21:55', '2019-03-04 20:21:55', NULL, 'Chrome 68'),
(83, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 20:32:39', '2019-03-04 20:32:39', NULL, 'Chrome 68'),
(84, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 20:34:00', '2019-03-04 20:34:00', NULL, 'Chrome 68'),
(85, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 20:34:26', '2019-03-04 20:34:26', NULL, 'Chrome 68'),
(86, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 20:34:33', '2019-03-04 20:34:33', NULL, 'Chrome 68'),
(87, '1', '127.0.0.1', 'Menu Kompetensi', 'pandhu@gmail.com mengunjungi halaman Kompetensi', 'http://localhost:8000/backend/pages/competencies', '2019-03-04 21:00:10', '2019-03-04 21:00:10', NULL, 'Chrome 68'),
(88, '1', '127.0.0.1', 'Menu Kompetensi', 'pandhu@gmail.com mengunjungi halaman Kompetensi', 'http://localhost:8000/backend/pages/competencies', '2019-03-04 21:00:39', '2019-03-04 21:00:39', NULL, 'Chrome 68'),
(89, '1', '127.0.0.1', 'Menu Kompetensi', 'pandhu@gmail.com mengunjungi halaman Kompetensi', 'http://localhost:8000/backend/pages/competencies', '2019-03-04 21:02:37', '2019-03-04 21:02:37', NULL, 'Chrome 68'),
(90, '1', '127.0.0.1', 'Menu Kompetensi', 'pandhu@gmail.com mengunjungi halaman Kompetensi', 'http://localhost:8000/backend/pages/competencies', '2019-03-04 21:02:46', '2019-03-04 21:02:46', NULL, 'Chrome 68'),
(91, '1', '127.0.0.1', 'Menu Kompetensi', 'pandhu@gmail.com mengunjungi halaman Kompetensi', 'http://localhost:8000/backend/pages/competencies', '2019-03-04 21:02:56', '2019-03-04 21:02:56', NULL, 'Chrome 68'),
(92, '1', '127.0.0.1', 'Menu Histories', 'pandhu@gmail.com mengunjungi halaman Histories', 'http://localhost:8000/backend/pages/histories', '2019-03-04 21:24:23', '2019-03-04 21:24:23', NULL, 'Chrome 68'),
(93, '1', '127.0.0.1', 'Menu Detail Histories', 'pandhu@gmail.com mengunjungi halaman Detail Histories dengan ID : eyJpdiI6IjFYTWR0WFN0MUxqQjNWUldkbTJEemc9PSIsInZhbHVlIjoiTDgyR3NhcWdBdU9hRExUZDJTS1pZbGZsSFR6UW9VaXMxSENTamNCSncwOWllUFJxbG5neTVOYXl2RjE0OHpcL3AiLCJtYWMiOiJhYjAxMTdiYTQ2NGE5OTM0ZTVlYzAxOWI3MGQ4MWUyYzY0ZDI0NTE4MDFmOTYwY2U5MWMzOTg4OGU3MzZkY2QwIn0=', 'http://localhost:8000/backend/pages/histories/eyJpdiI6IjFYTWR0WFN0MUxqQjNWUldkbTJEemc9PSIsInZhbHVlIjoiTDgyR3NhcWdBdU9hRExUZDJTS1pZbGZsSFR6UW9VaXMxSENTamNCSncwOWllUFJxbG5neTVOYXl2RjE0OHpcL3AiLCJtYWMiOiJhYjAxMTdiYTQ2NGE5OTM0ZTVlYzAxOWI3MGQ4MWUyYzY0ZDI0NTE4MDFmOTYwY2U5MWMzOTg4OGU3MzZkY2QwIn0=', '2019-03-04 21:24:37', '2019-03-04 21:24:37', NULL, 'Chrome 68'),
(94, NULL, '127.0.0.1', 'Menu Detail Histories', ' mengunjungi halaman Detail Histories dengan ID : eyJpdiI6IjFYTWR0WFN0MUxqQjNWUldkbTJEemc9PSIsInZhbHVlIjoiTDgyR3NhcWdBdU9hRExUZDJTS1pZbGZsSFR6UW9VaXMxSENTamNCSncwOWllUFJxbG5neTVOYXl2RjE0OHpcL3AiLCJtYWMiOiJhYjAxMTdiYTQ2NGE5OTM0ZTVlYzAxOWI3MGQ4MWUyYzY0ZDI0NTE4MDFmOTYwY2U5MWMzOTg4OGU3MzZkY2QwIn0=', 'http://localhost:8000/backend/pages/histories/eyJpdiI6IjFYTWR0WFN0MUxqQjNWUldkbTJEemc9PSIsInZhbHVlIjoiTDgyR3NhcWdBdU9hRExUZDJTS1pZbGZsSFR6UW9VaXMxSENTamNCSncwOWllUFJxbG5neTVOYXl2RjE0OHpcL3AiLCJtYWMiOiJhYjAxMTdiYTQ2NGE5OTM0ZTVlYzAxOWI3MGQ4MWUyYzY0ZDI0NTE4MDFmOTYwY2U5MWMzOTg4OGU3MzZkY2QwIn0=', '2019-03-04 21:53:16', '2019-03-04 21:53:16', NULL, 'Chrome 68'),
(95, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-04 21:53:40', '2019-03-04 21:53:40', NULL, 'Chrome 68'),
(96, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-04 22:08:28', '2019-03-04 22:08:28', NULL, 'Chrome 68'),
(97, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-04 22:14:28', '2019-03-04 22:14:28', NULL, 'Chrome 68'),
(98, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:14:47', '2019-03-04 22:14:47', NULL, 'Chrome 68'),
(99, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:15:19', '2019-03-04 22:15:19', NULL, 'Chrome 68'),
(100, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:17:06', '2019-03-04 22:17:06', NULL, 'Chrome 68'),
(101, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 22:17:18', '2019-03-04 22:17:18', NULL, 'Chrome 68'),
(102, '1', '127.0.0.1', 'Menu Jenis Assessment', 'pandhu@gmail.com mengunjungi halaman Jenis Assessment', 'http://localhost:8000/backend/pages/assesments', '2019-03-04 22:23:01', '2019-03-04 22:23:01', NULL, 'Chrome 68'),
(103, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:23:13', '2019-03-04 22:23:13', NULL, 'Chrome 68'),
(104, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:23:51', '2019-03-04 22:23:51', NULL, 'Chrome 68'),
(105, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:24:33', '2019-03-04 22:24:33', NULL, 'Chrome 68'),
(106, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:24:44', '2019-03-04 22:24:44', NULL, 'Chrome 68'),
(107, '1', '127.0.0.1', 'Menu Config', 'pandhu@gmail.com mengunjungi halaman Configuration', 'http://localhost:8000/backend/pages/configurations', '2019-03-04 22:24:51', '2019-03-04 22:24:51', NULL, 'Chrome 68'),
(108, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-05 01:12:49', '2019-03-05 01:12:49', NULL, 'Chrome 68'),
(109, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-05 20:01:50', '2019-03-05 20:01:50', NULL, 'Chrome 68'),
(110, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/rowscores', '2019-03-05 20:46:00', '2019-03-05 20:46:00', NULL, 'Chrome 68'),
(111, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/rowscores', '2019-03-05 20:50:45', '2019-03-05 20:50:45', NULL, 'Chrome 68'),
(112, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/rowscores', '2019-03-05 20:51:15', '2019-03-05 20:51:15', NULL, 'Chrome 68'),
(113, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/rowscores', '2019-03-05 20:51:33', '2019-03-05 20:51:33', NULL, 'Chrome 68'),
(114, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/rowscores', '2019-03-05 21:21:21', '2019-03-05 21:21:21', NULL, 'Chrome 68'),
(115, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/rowscores', '2019-03-05 21:22:05', '2019-03-05 21:22:05', NULL, 'Chrome 68'),
(116, '1', '127.0.0.1', 'Menu RowScore', 'pandhu@gmail.com mengunjungi halaman Row Score', 'http://localhost:8000/backend/pages/scoredescriptions', '2019-03-05 21:52:29', '2019-03-05 21:52:29', NULL, 'Chrome 68'),
(117, '1', '127.0.0.1', 'Menu Description Score', 'pandhu@gmail.com mengunjungi halaman Description Score', 'http://localhost:8000/backend/pages/scoredescriptions', '2019-03-05 22:11:03', '2019-03-05 22:11:03', NULL, 'Chrome 68'),
(118, '1', '127.0.0.1', 'Menu Description Score', 'pandhu@gmail.com mengunjungi halaman Description Score', 'http://localhost:8000/backend/pages/scoredescriptions', '2019-03-05 22:11:31', '2019-03-05 22:11:31', NULL, 'Chrome 68'),
(119, '1', '127.0.0.1', 'Menu Description Score', 'pandhu@gmail.com mengunjungi halaman Description Score', 'http://localhost:8000/backend/pages/scoredescriptions', '2019-03-05 22:11:58', '2019-03-05 22:11:58', NULL, 'Chrome 68'),
(120, '1', '127.0.0.1', 'Menu Description Score', 'pandhu@gmail.com mengunjungi halaman Description Score', 'http://localhost:8000/backend/pages/scoredescriptions', '2019-03-05 22:12:09', '2019-03-05 22:12:09', NULL, 'Chrome 68'),
(121, '1', '127.0.0.1', 'Menu Description Score', 'pandhu@gmail.com mengunjungi halaman Description Score', 'http://localhost:8000/backend/pages/scoredescriptions', '2019-03-05 22:13:21', '2019-03-05 22:13:21', NULL, 'Chrome 68'),
(122, '1', '127.0.0.1', 'Menu Description Result', 'pandhu@gmail.com mengunjungi halaman Description Result', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:44:45', '2019-03-05 22:44:45', NULL, 'Chrome 68'),
(123, '1', '127.0.0.1', 'Menu Description Result', 'pandhu@gmail.com mengunjungi halaman Description Result', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:55:57', '2019-03-05 22:55:57', NULL, 'Chrome 68'),
(124, '1', '127.0.0.1', 'Menu Description Result', 'pandhu@gmail.com mengunjungi halaman Description Result', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:56:25', '2019-03-05 22:56:25', NULL, 'Chrome 68'),
(125, '1', '127.0.0.1', 'Menu Description Result', 'pandhu@gmail.com mengunjungi halaman Description Result', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:56:53', '2019-03-05 22:56:53', NULL, 'Chrome 68'),
(126, '1', '127.0.0.1', 'Menu Description Result', 'pandhu@gmail.com mengunjungi halaman Description Result', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:57:05', '2019-03-05 22:57:05', NULL, 'Chrome 68'),
(127, '1', '127.0.0.1', 'Menu Description Result', 'pandhu@gmail.com mengunjungi halaman Description Result', 'http://localhost:8000/backend/pages/descriptionresults', '2019-03-05 22:58:40', '2019-03-05 22:58:40', NULL, 'Chrome 68'),
(128, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-06 01:06:18', '2019-03-06 01:06:18', NULL, 'Chrome 68'),
(129, '1', '127.0.0.1', 'Menu User Assessment', 'pandhu@gmail.com mengunjungi halaman User Assessment', 'http://localhost:8000/backend/pages/userassessments', '2019-03-06 02:07:33', '2019-03-06 02:07:33', NULL, 'Chrome 68'),
(130, '1', '127.0.0.1', 'Menu User Assessment', 'pandhu@gmail.com mengunjungi halaman User Assessment', 'http://localhost:8000/backend/pages/userassessments', '2019-03-06 02:07:53', '2019-03-06 02:07:53', NULL, 'Chrome 68'),
(131, '1', '127.0.0.1', 'Menu User Assessment', 'pandhu@gmail.com mengunjungi halaman User Assessment', 'http://localhost:8000/backend/pages/userassessments', '2019-03-06 02:08:15', '2019-03-06 02:08:15', NULL, 'Chrome 68'),
(132, '1', '127.0.0.1', 'Menu User Assessment', 'pandhu@gmail.com mengunjungi halaman User Assessment', 'http://localhost:8000/backend/pages/userassessments', '2019-03-06 02:08:33', '2019-03-06 02:08:33', NULL, 'Chrome 68'),
(133, '1', '127.0.0.1', 'Menu User Assessment', 'pandhu@gmail.com mengunjungi halaman User Assessment', 'http://localhost:8000/backend/pages/userassessments', '2019-03-06 02:09:34', '2019-03-06 02:09:34', NULL, 'Chrome 68'),
(134, '1', '127.0.0.1', 'Menu User Assessment', 'pandhu@gmail.com mengunjungi halaman User Assessment', 'http://localhost:8000/backend/pages/userassessments', '2019-03-06 02:09:51', '2019-03-06 02:09:51', NULL, 'Chrome 68'),
(135, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:49:29', '2019-03-06 02:49:29', NULL, 'Chrome 68'),
(136, '1', '127.0.0.1', 'Add New Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Add New Pertanyaan', 'http://localhost:8000/backend/pages/questions/add', '2019-03-06 02:49:44', '2019-03-06 02:49:44', NULL, 'Chrome 68'),
(137, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:50:02', '2019-03-06 02:50:02', NULL, 'Chrome 68'),
(138, '1', '127.0.0.1', 'Detail Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Detail Pertanyaan dengan ID : eyJpdiI6InU2UkR0VEhxTkRYdEllK3k2UTE5R3c9PSIsInZhbHVlIjoidFZ6TlJWcWljOVVGK0t2NHFTb3RuS3RaYVlMakY5YlN4eW9RU3djYlJmSjVmZTZVY2ttWUN4cUlBeTFjU3A5WiIsIm1hYyI6ImVlNWE3ZTk1ZDQ3NDljYzU5ZmMwMDhlOWViMDI4OTYyMjhjNGYyZjFhOGE5NGE0MmRhOTNhOTk5OTYwNWJhN2EifQ==', 'http://localhost:8000/backend/pages/questions/eyJpdiI6InU2UkR0VEhxTkRYdEllK3k2UTE5R3c9PSIsInZhbHVlIjoidFZ6TlJWcWljOVVGK0t2NHFTb3RuS3RaYVlMakY5YlN4eW9RU3djYlJmSjVmZTZVY2ttWUN4cUlBeTFjU3A5WiIsIm1hYyI6ImVlNWE3ZTk1ZDQ3NDljYzU5ZmMwMDhlOWViMDI4OTYyMjhjNGYyZjFhOGE5NGE0MmRhOTNhOTk5OTYwNWJhN2EifQ==', '2019-03-06 02:50:25', '2019-03-06 02:50:25', NULL, 'Chrome 68'),
(139, '1', '127.0.0.1', 'Detail Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Detail Pertanyaan dengan ID : eyJpdiI6ImRBSHdcL1dyajRiOGROckFZR01ScTNBPT0iLCJ2YWx1ZSI6InluTUpJRXM3K3VKaFkra2krWCtlczJlN0RyaDZnWkwzcmg4VUlpV3hLR2wxeGh6aVdXRnZGS201eTV4SlhtZWoiLCJtYWMiOiI4ODJhYjljOTRkZWJiYjFlNTdhZjQ0YTg0NjM0NGM1ZTE0NjhkZGE2MjQzNWI5OGFmNmQ5MjQ3NTU3MDI1MzA5In0=', 'http://localhost:8000/backend/pages/questions/eyJpdiI6ImRBSHdcL1dyajRiOGROckFZR01ScTNBPT0iLCJ2YWx1ZSI6InluTUpJRXM3K3VKaFkra2krWCtlczJlN0RyaDZnWkwzcmg4VUlpV3hLR2wxeGh6aVdXRnZGS201eTV4SlhtZWoiLCJtYWMiOiI4ODJhYjljOTRkZWJiYjFlNTdhZjQ0YTg0NjM0NGM1ZTE0NjhkZGE2MjQzNWI5OGFmNmQ5MjQ3NTU3MDI1MzA5In0=', '2019-03-06 02:50:45', '2019-03-06 02:50:45', NULL, 'Chrome 68'),
(140, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:50:59', '2019-03-06 02:50:59', NULL, 'Chrome 68'),
(141, '1', '127.0.0.1', 'Detail Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Detail Pertanyaan dengan ID : eyJpdiI6ImZqVkpFNGIwZlp0bzRoQ25adWtwSUE9PSIsInZhbHVlIjoiQ05ITGlBUGhXTjlnXC9PYWloSzIwTG5wVWtNTlwvaVVhWFZoNzk4M2JWSHd4OTVLSXVqS3BhZHVGT3ZTNlZIbnZ0IiwibWFjIjoiNGNlNGMyNzM1MTY1NWZkOTkzOGYxNGIzZjhjYzAxYzhhMzY1ZDcyOTViMDhlYmFjMzM2YzllMTQzNzVkZWM3YyJ9', 'http://localhost:8000/backend/pages/questions/eyJpdiI6ImZqVkpFNGIwZlp0bzRoQ25adWtwSUE9PSIsInZhbHVlIjoiQ05ITGlBUGhXTjlnXC9PYWloSzIwTG5wVWtNTlwvaVVhWFZoNzk4M2JWSHd4OTVLSXVqS3BhZHVGT3ZTNlZIbnZ0IiwibWFjIjoiNGNlNGMyNzM1MTY1NWZkOTkzOGYxNGIzZjhjYzAxYzhhMzY1ZDcyOTViMDhlYmFjMzM2YzllMTQzNzVkZWM3YyJ9', '2019-03-06 02:51:09', '2019-03-06 02:51:09', NULL, 'Chrome 68'),
(142, '1', '127.0.0.1', 'Detail Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Detail Pertanyaan dengan ID : eyJpdiI6Im05TVViN2tLOXl0SnI5cDFwd20yS0E9PSIsInZhbHVlIjoicE0yZWxVNVZwcGQ0bGJcL0lMbnNWUllOakxDc1NLa3pxV1RCSEhxXC9OSnJcLzBhZTJ3T09mcjVpU3ZLUnhkaGZONCIsIm1hYyI6ImE4YWJhOGVhNDJhMGQxZjUwNjAwNTM1MmIyOTEyZTU5YjJiMzZjZDBhYWZkYTNkNDUzNzZjM2M4OTQyMDRhOTYifQ==', 'http://localhost:8000/backend/pages/questions/eyJpdiI6Im05TVViN2tLOXl0SnI5cDFwd20yS0E9PSIsInZhbHVlIjoicE0yZWxVNVZwcGQ0bGJcL0lMbnNWUllOakxDc1NLa3pxV1RCSEhxXC9OSnJcLzBhZTJ3T09mcjVpU3ZLUnhkaGZONCIsIm1hYyI6ImE4YWJhOGVhNDJhMGQxZjUwNjAwNTM1MmIyOTEyZTU5YjJiMzZjZDBhYWZkYTNkNDUzNzZjM2M4OTQyMDRhOTYifQ==', '2019-03-06 02:51:18', '2019-03-06 02:51:18', NULL, 'Chrome 68'),
(143, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:51:24', '2019-03-06 02:51:24', NULL, 'Chrome 68'),
(144, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:51:42', '2019-03-06 02:51:42', NULL, 'Chrome 68'),
(145, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:52:43', '2019-03-06 02:52:43', NULL, 'Chrome 68'),
(146, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:54:23', '2019-03-06 02:54:23', NULL, 'Chrome 68'),
(147, '1', '127.0.0.1', 'Add New Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Add New Pertanyaan', 'http://localhost:8000/backend/pages/questions/add', '2019-03-06 02:54:37', '2019-03-06 02:54:37', NULL, 'Chrome 68'),
(148, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:54:42', '2019-03-06 02:54:42', NULL, 'Chrome 68'),
(149, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:56:35', '2019-03-06 02:56:35', NULL, 'Chrome 68'),
(150, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:56:38', '2019-03-06 02:56:38', NULL, 'Chrome 68'),
(151, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:56:43', '2019-03-06 02:56:43', NULL, 'Chrome 68'),
(152, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:57:11', '2019-03-06 02:57:11', NULL, 'Chrome 68'),
(153, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:57:54', '2019-03-06 02:57:54', NULL, 'Chrome 68'),
(154, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 02:57:57', '2019-03-06 02:57:57', NULL, 'Chrome 68'),
(155, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 03:06:47', '2019-03-06 03:06:47', NULL, 'Chrome 68'),
(156, '1', '127.0.0.1', 'Menu Pertanyaan', 'pandhu@gmail.com mengunjungi halaman Pertanyaan', 'http://localhost:8000/backend/pages/questions', '2019-03-06 03:07:58', '2019-03-06 03:07:58', NULL, 'Chrome 68'),
(157, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Home', 'pandhuw58@gmail.com mengunjungi halaman Home', 'http://localhost:8000/user/pages/home', '2019-03-06 03:16:10', '2019-03-06 03:16:10', NULL, 'Chrome 68'),
(158, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Home', 'pandhuw58@gmail.com mengunjungi halaman Home', 'http://localhost:8000/user/pages/home', '2019-03-06 06:32:37', '2019-03-06 06:32:37', NULL, 'Chrome 68'),
(159, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Participants Assessments', 'pandhuw58@gmail.com mengunjungi halaman Participants Assessments', 'http://localhost:8000/user/pages/assesments', '2019-03-06 07:51:57', '2019-03-06 07:51:57', NULL, 'Chrome 68'),
(160, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Participants Assessments', 'pandhuw58@gmail.com mengunjungi halaman Participants Assessments', 'http://localhost:8000/user/pages/assesments', '2019-03-06 07:52:36', '2019-03-06 07:52:36', NULL, 'Chrome 68'),
(161, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Participants Assessments', 'pandhuw58@gmail.com mengunjungi halaman Participants Assessments', 'http://localhost:8000/user/pages/assesments', '2019-03-06 07:53:04', '2019-03-06 07:53:04', NULL, 'Chrome 68'),
(162, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Participants Assessments', 'pandhuw58@gmail.com mengunjungi halaman Participants Assessments', 'http://localhost:8000/user/pages/assesments', '2019-03-06 07:55:47', '2019-03-06 07:55:47', NULL, 'Chrome 68'),
(163, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Participants Assessments', 'pandhuw58@gmail.com mengunjungi halaman Participants Assessments', 'http://localhost:8000/user/pages/assesments', '2019-03-06 07:56:31', '2019-03-06 07:56:31', NULL, 'Chrome 68'),
(164, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Quis', 'pandhuw58@gmail.com mengunjungi halaman Quis dengan detail Id Assessment : dc663170-3501-11e9-9999-63ce6a70ca04', 'http://localhost:8000/user/pages/assesments/eyJpdiI6Im9ncDVnMXlTQ2wyMERLNGxOK1NGb0E9PSIsInZhbHVlIjoidTdwMWlneDVYdVQ3UVV3S3hhRE1ydVY2dmFZc3d2TDFcL1FqcStjc1dRclRTZHJVK0ZvQVpWcWVkbk9tU0o2TEMiLCJtYWMiOiJkMzA1MDY5OWMzZTkyZjg3MjY2ZmM4YzBjOWI0YWZjM2FiMDkxNTUwYWZjMGNhYzk3NzgzNDZmZDA3MmJjMzVjIn0=/eyJpdiI6IkVvYkYxazlBQXpETWxQN05abWlRTXc9PSIsInZhbHVlIjoiNTJaOG03cFJoZHQ4Q2I4V3ZCS2N2MlFzcTVqVGQyaG1vVHliY1JJYVRtYlo1ZGNuclpZSlBBZ2JGQTErNk9iWCIsIm1hYyI6ImM2OGU2ODAwNGRhMDJlMjY4NWRjMmM0NjAwYzgyOTE2ZjU0YzlkMTNjZTA5YmYzOTVkZDhiNjM0NmFhOGViZTgifQ==', '2019-03-06 07:56:35', '2019-03-06 07:56:35', NULL, 'Chrome 68'),
(165, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Menu Histories', 'pandhuw58@gmail.com mengunjungi halaman Histories', 'http://localhost:8000/user/pages/histories', '2019-03-06 09:31:29', '2019-03-06 09:31:29', NULL, 'Chrome 68'),
(166, '1', '127.0.0.1', 'Menu Home', 'pandhu@gmail.com mengunjungi halaman Home', 'http://localhost:8000/backend/pages/home', '2019-03-06 09:32:22', '2019-03-06 09:32:22', NULL, 'Chrome 68'),
(167, '1', '127.0.0.1', 'Menu Histories', 'pandhu@gmail.com mengunjungi halaman Histories', 'http://localhost:8000/backend/pages/histories', '2019-03-06 09:32:24', '2019-03-06 09:32:24', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_participants_answers`
--

CREATE TABLE `log_participants_answers` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_participants_assessments`
--

CREATE TABLE `log_participants_assessments` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_participants_assessments`
--

INSERT INTO `log_participants_assessments` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '127.0.0.1', 'Assessment to Questions', 'pandhuw58@gmail.com memilih jenis assessment pada quis dengan ID : 09168bf0-4020-11e9-9e6a-f3a9e2a6e6cd', 'http://localhost:8000/user/pages/assesments/store', '2019-03-06 07:56:34', '2019-03-06 07:56:34', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_participants_results`
--

CREATE TABLE `log_participants_results` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_questions`
--

CREATE TABLE `log_questions` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_questions`
--

INSERT INTO `log_questions` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Store Pertanyaan - Store|Success', 'Berhasil menyimpan pertanyaan baru', 'http://localhost:8000/backend/pages/questions/store', '2019-03-06 02:50:01', '2019-03-06 02:50:01', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Update Pertanyaan - Update|Success', 'Berhasil mengubah pertanyaan dengan ID Pertanyaan : eyJpdiI6IkhiaTVWNmFWS2FpbXpDNFlWSnZkZEE9PSIsInZhbHVlIjoiNmkxMGpxTFNcL0JtQldjclg0TG5RSFhcL04yN0ZObFdMSXV0UVlQclFFMWVWNmxURE1cL1NjTG0rbVU5eVdxS0x1SyIsIm1hYyI6IjNmY2I2NGZlZjBlYWFhNzAwNGVmNzNjNTcxZGE1NTI3ZDQ4ZmZkYjM1YWJmNDMwNzJlYTQ3ZGI0OWQ2MjkxYjYifQ==', 'http://localhost:8000/backend/pages/questions/update', '2019-03-06 02:50:59', '2019-03-06 02:50:59', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Delete Pertanyaan - Delete|Success', 'Berhasil menghapus data Pertanyaan - Pertanyaan ID : 3610c070-3ff5-11e9-8e93-d3c67eae8fa7, Pertanyaan : Sadf, Assessment ID : 9d6c0c80-17b2-11e9-b5c7-4d0cdaf120e2, Kompetensi ID : 01df0360-0f5c-11e9-860b-fb3757928a71, Row Score ID : 00e30490-0f6d-11e9-93d3-39e2452f215e, No Urut Pertanyaan : 1', 'http://localhost:8000/backend/pages/questions/delete', '2019-03-06 02:51:23', '2019-03-06 02:51:23', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_registers`
--

CREATE TABLE `log_registers` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `browser` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_registers`
--

INSERT INTO `log_registers` (`id`, `user_id`, `email`, `ip_address`, `action`, `data`, `link`, `browser`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '88c051f0-3aab-11e9-98ab-cd32ec6ce9a5', '1511502153@student.budiluhur.ac.id', '127.0.0.1', 'Register Button', '1511502153@student.budiluhur.ac.id melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-27 09:20:02', '2019-02-27 09:20:02', NULL),
(2, 'dc0b8bb0-3aab-11e9-b403-d940e999ccea', '1511502153@student.budiluhur.ac.id', '127.0.0.1', 'Register Button', '1511502153@student.budiluhur.ac.id melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-27 09:22:21', '2019-02-27 09:22:21', NULL),
(3, '3ea29850-3aac-11e9-80af-233a6033d09a', '1511502153@student.budiluhur.ac.id', '127.0.0.1', 'Register Button', '1511502153@student.budiluhur.ac.id melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-27 09:25:07', '2019-02-27 09:25:07', NULL),
(4, '3e9e5300-3b79-11e9-862a-2996b0829502', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 09:52:34', '2019-02-28 09:52:34', NULL),
(5, 'df680860-3b79-11e9-86bd-0d620295730e', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 09:57:07', '2019-02-28 09:57:07', NULL),
(6, '4df926e0-3b7a-11e9-8ee6-071610132433', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 10:00:09', '2019-02-28 10:00:09', NULL),
(7, 'a4ce9c80-3b7a-11e9-8567-e9fa8c487900', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 10:02:35', '2019-02-28 10:02:35', NULL),
(8, '4bfb6100-3b7b-11e9-b028-d7067c2fe542', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 10:07:15', '2019-02-28 10:07:15', NULL),
(9, '1dab27b0-3b85-11e9-8ba1-e5f961089a36', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 11:17:32', '2019-02-28 11:17:32', NULL),
(10, '7d3585b0-3b85-11e9-9f4e-2f9d4d571f54', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 11:20:13', '2019-02-28 11:20:13', NULL),
(11, 'b6a345c0-3b85-11e9-81ed-ab81a305ec47', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 11:21:50', '2019-02-28 11:21:50', NULL),
(12, '7beea7f0-3b86-11e9-ad59-89a136449877', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 11:27:20', '2019-02-28 11:27:20', NULL),
(13, 'ce22ff20-3b86-11e9-8f29-014295b16109', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 11:29:38', '2019-02-28 11:29:38', NULL),
(14, 'ea2916a0-3b86-11e9-a17b-cf62d9192154', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 11:30:26', '2019-02-28 11:30:26', NULL),
(15, '4c42e140-3bef-11e9-8c91-5137e7b06e5a', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-02-28 23:57:38', '2019-02-28 23:57:38', NULL),
(16, 'e443ae90-3bef-11e9-a3b8-23d9d9bf7979', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:01:52', '2019-03-01 00:01:52', NULL),
(17, '6c8146c0-3bf1-11e9-a95f-d1f5bc3dd0cf', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:12:50', '2019-03-01 00:12:50', NULL),
(18, '5ee09fb0-3bf2-11e9-a74d-31446063399c', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:19:37', '2019-03-01 00:19:37', NULL),
(19, '89691640-3bf2-11e9-a3ca-2d9d1241219c', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:20:53', '2019-03-01 00:20:53', NULL),
(20, 'e5749600-3bf2-11e9-b15f-49854f1121ba', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:23:23', '2019-03-01 00:23:23', NULL),
(21, '1e57fa00-3bf5-11e9-b3e5-752bc1761d74', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:39:18', '2019-03-01 00:39:18', NULL),
(22, 'bd52f090-3bf5-11e9-92c2-09d81c5dee24', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 00:43:45', '2019-03-01 00:43:45', NULL),
(23, '23c48650-3bf8-11e9-a335-27388d2f139e', 'pandhuw58@gmail.com', '127.0.0.1', 'Register Button', 'pandhuw58@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 01:00:55', '2019-03-01 01:00:55', NULL),
(24, 'a9646be0-3bf8-11e9-938e-f74d4855cccc', 'purwo.setyo.aji@gmail.com', '127.0.0.1', 'Register Button', 'purwo.setyo.aji@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 01:04:39', '2019-03-01 01:04:39', NULL),
(25, NULL, '', '127.0.0.1', 'Confirmation Link', 'Link tidak terdaftar', 'http://localhost:8000/user/pages/register/verify/UD7OiIVWKfSQ6sylTF7OmeAfrvHWgy', 'Chrome 68', '2019-03-04 09:36:34', '2019-03-04 09:36:34', NULL),
(26, NULL, 'adm.ngartish@gmail.com', '127.0.0.1', 'Confirmatin Link Email', 'adm.ngartish@gmail.com pergi ke halaman Reset Password', 'http://localhost:8000/user/pages/register/verify/FAkJ4o8bc5Vf5SjdjSnokRRCwh3rSy', 'Chrome 68', '2019-03-04 09:45:41', '2019-03-04 09:45:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_rowscores`
--

CREATE TABLE `log_rowscores` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_rowscores`
--

INSERT INTO `log_rowscores` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Store Row Score - Store|Success', 'Berhasil menyimpan data baru Row Score - Row Score ID : 04d04210-3fc3-11e9-90c5-9f0d85abdf94, Nama Row Score : Sdf, Nama Singkat : asdf, Presentase : 50, No Urut Row Score : 3', 'http://localhost:8000/backend/pages/rowscores/store', '2019-03-05 20:50:44', '2019-03-05 20:50:44', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Update Row Score - Update|Success', 'Berhasil mengubah data Row Score - Row Score ID : eyJpdiI6IjJJeHJoN0ZJR0tCc1dJc2ErVmk4Q0E9PSIsInZhbHVlIjoieG54VGFlRFFQazdcL0R0QnRSXC9JNlJYaHRXa2xnT3c0OW9rbENTV2hUVHFXeTJMOWF2c0RaZVd1KzZrOHdXN3pjIiwibWFjIjoiZjdkMmRhZTY0ZGE0ZWVmOWFlZmYxMjI1OTBkNGZmZjAyZWNjMjU0NzViYTA0ZWNiOTQyZWY3ZDJlYjMxNTJiNiJ9, Nama Row Score : Sdfs, Nama Singkat : Asdfs, Presentase : 70, No Urut Row Score : 4', 'http://localhost:8000/backend/pages/rowscores/update', '2019-03-05 20:51:13', '2019-03-05 20:51:13', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Delete Row Score - Delete|Success', 'Berhasil menghapus data Row Score - Row Score ID : 04d04210-3fc3-11e9-90c5-9f0d85abdf94, Nama Row Score : Sdfs, Nama Singkat : Asdfs, Presentase : 70, No Urut Row Score : 4', 'http://localhost:8000/backend/pages/rowscores/delete', '2019-03-05 20:51:32', '2019-03-05 20:51:32', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_scores`
--

CREATE TABLE `log_scores` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_scores`
--

INSERT INTO `log_scores` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Store Description Score - Store|Success', 'Berhasil menyimpan data baru Description Score - Description Score ID : 4d221a00-3fce-11e9-893f-0d33fe408681, Range Score : 5, Keterangan : <p>dsafsadf</p>, Jenis Keterangan : Kekuatan', 'http://localhost:8000/backend/pages/scoredescriptions/store', '2019-03-05 22:11:30', '2019-03-05 22:11:30', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Update Description Score - Update|Success', 'Berhasil mengubah data baru Description Score - Description Score ID : eyJpdiI6IjhmUVdaeGRKZnd3MFdzZWdxWk5IbVE9PSIsInZhbHVlIjoiWGJ6dk1xbHlOTWVQbjVEdlVpQXI3N2VTdW94VkRWclRmQzRVNVB0ZWJScXg5eW9OS3k3Y2lSWmZDVnowXC9HN2ciLCJtYWMiOiI5MWM1MjgxOGE0NWZlN2EyN2I3MDBiYTI0ZTkxYzUwYjE5MDA3MmM1NzdhNjMwN2QwY2Q2ZTBhMTUwNTdkMDg5In0=, Range Score : 6, Keterangan : <p>dsafsadfsadfsadfsdf</p>, Jenis Keterangan : Pengembangan', 'http://localhost:8000/backend/pages/scoredescriptions/update', '2019-03-05 22:11:57', '2019-03-05 22:11:57', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Delete Description Score - Delete|Success', 'Berhasil mengubah data baru Description Score - Description Score ID : 4d221a00-3fce-11e9-893f-0d33fe408681, Range Score : 6, Keterangan : <p>dsafsadfsadfsadfsdf</p>, Jenis Keterangan : Pengembangan', 'http://localhost:8000/backend/pages/scoredescriptions/delete', '2019-03-05 22:12:08', '2019-03-05 22:12:08', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_userassessments`
--

CREATE TABLE `log_userassessments` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_userassessments`
--

INSERT INTO `log_userassessments` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(1, '1', '127.0.0.1', 'Enable Status - Enable|Success', 'Berhasil enable status User Assessment', 'http://localhost:8000/backend/pages/userassessments/status/update/enable', '2019-03-06 02:07:52', '2019-03-06 02:07:52', NULL, 'Chrome 68'),
(2, '1', '127.0.0.1', 'Disable Status - Disable|Success', 'Berhasil disable status User Assessment', 'http://localhost:8000/backend/pages/userassessments/status/update/disable', '2019-03-06 02:08:14', '2019-03-06 02:08:14', NULL, 'Chrome 68'),
(3, '1', '127.0.0.1', 'Update User Assessment - Update|Success', 'Berhasil mengubah data User Assessment - User Assessment ID : 0b583060-365a-11e9-a5d6-e12fb5cb381c, User ID : ffd13dc0-0b31-11e9-9cbb-011663f879e4, Assessment ID : a981f610-1179-11e9-b9ab-07c4a9277062, Maxattempt : 3', 'http://localhost:8000/backend/pages/userassessments/update', '2019-03-06 02:08:32', '2019-03-06 02:08:32', NULL, 'Chrome 68'),
(4, '1', '127.0.0.1', 'Store User Assessment - Store|Success', 'Berhasil menyimpan data baru User Assessment', 'http://localhost:8000/backend/pages/userassessments/store', '2019-03-06 02:09:33', '2019-03-06 02:09:33', NULL, 'Chrome 68'),
(5, '1', '127.0.0.1', 'Delete User Assessment - Delete|Success', 'Berhasil menghapus data User Assessment - User Assessment ID : 8ed85050-3fef-11e9-9e3e-a90d08a79010, User ID : c99728d0-3e9c-11e9-ba04-a7c719675fd3, Assessment ID : 9d6c0c80-17b2-11e9-b5c7-4d0cdaf120e2, Status : 0, Maxattempt : 1, Attempt : 0', 'http://localhost:8000/backend/pages/userassessments/delete', '2019-03-06 02:09:50', '2019-03-06 02:09:50', NULL, 'Chrome 68');

-- --------------------------------------------------------

--
-- Table structure for table `log_users`
--

CREATE TABLE `log_users` (
  `id` int(11) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  `action` text,
  `data` text,
  `link` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_users`
--

INSERT INTO `log_users` (`id`, `user_id`, `ip_address`, `action`, `data`, `link`, `created_at`, `updated_at`, `deleted_at`, `browser`) VALUES
(3, '1', '127.0.0.1', 'Add New Participant - Store', '{\"email\":[\"The email has already been taken.\"]}', 'http://localhost:8000/backend/pages/users/store', '2019-03-04 09:24:41', '2019-03-04 09:24:41', NULL, 'Chrome 68'),
(4, '1', '127.0.0.1', 'Add New Participant - Store|Success', 'Berhasil menyimpan data Partisipan baru - Partisipan ID : 5210a060-3e9a-11e9-b2d7-3dc08f6b72d0, Firstname : Ngartish, Lastname : Ngartish, Nickname : Ngartish, Email : adm.ngartish@gmail.com, Username : Ngartish, Phone Number : 081296807905, Level : Participant, Address : 1, Password : $2y$10$ahta.n4GmpcBYbl3bdcM4eQKLn.NxXLtyxXjjI6ylUFdZoNWe9S3y, Image : PA-1551716813.jpg', 'http://localhost:8000/backend/pages/users/store', '2019-03-04 09:27:07', '2019-03-04 09:27:07', NULL, 'Chrome 68'),
(5, '1', '127.0.0.1', 'Delete User - Delete|Success', 'Berhasil menghapus data User - User ID : 5210a060-3e9a-11e9-b2d7-3dc08f6b72d0, Firstname : Ngartish, Lastname : Ngartish, Nickname : Ngartish, Email : adm.ngartish@gmail.com, Username : Ngartish, Phone Number : 081296807905, Level : Participant, Address : 1, Password : $2y$10$WfbjnBeag2YjGbw0EA7lAue0YTA6LmA4yT.HrJnoJzVn85TiZSafq, Image : PA-1551716813.jpg', 'http://localhost:8000/backend/pages/users/delete', '2019-03-04 09:38:44', '2019-03-04 09:38:44', NULL, 'Chrome 68'),
(6, '1', '127.0.0.1', 'Add New Participant - Store|Success', 'Berhasil menyimpan data Partisipan baru - Partisipan ID : c99728d0-3e9c-11e9-ba04-a7c719675fd3, Firstname : Ngartish, Lastname : Ngartish, Nickname : Ngartish, Email : adm.ngartish@gmail.com, Username : Ngartish, Phone Number : 081296807905, Level : Participant, Address : Sdfgsdfg, Password : $2y$10$yOHr4pnDHRgV9/z5xbvGCuDK./7b1p2jQhq0X/DZgdfw/UmsqgyeC, Image : PA-1551717872.jpg', 'http://localhost:8000/backend/pages/users/store', '2019-03-04 09:44:34', '2019-03-04 09:44:34', NULL, 'Chrome 68'),
(7, '1', '127.0.0.1', 'Delete User - Delete|Success', 'Berhasil menghapus data User - User ID : c99728d0-3e9c-11e9-ba04-a7c719675fd3, Firstname : Ngartish, Lastname : Ngartish, Nickname : Ngartish, Email : adm.ngartish@gmail.com, Username : Ngartish, Phone Number : 081296807905, Level : Participant, Address : Sdfgsdfg, Password : $2y$10$Ep737/9t74GPZlcSMtxneuBQRrWOmKio0WvOxZ8VPhZdYPNSsfKu6, Image : PA-1551717872.jpg', 'http://localhost:8000/backend/pages/users/delete', '2019-03-04 09:46:56', '2019-03-04 09:46:56', NULL, 'Chrome 68'),
(8, '1', '127.0.0.1', 'Delete User - Delete|Success', 'Berhasil menghapus data User - User ID : c99728d0-3e9c-11e9-ba04-a7c719675fd3, Firstname : Ngartish, Lastname : Ngartish, Nickname : Ngartish, Email : adm.ngartish@gmail.com, Username : Ngartish, Phone Number : 081296807905, Level : Participant, Address : Sdfgsdfg, Password : $2y$10$QQR8EySWuUXNMPSrjcnhfuUuMZWzKwXtHoqxjCQCjJ55kKoQDNtn2, Image : PA-1551717872.jpg', 'http://localhost:8000/backend/pages/users/delete', '2019-03-04 09:47:54', '2019-03-04 09:47:54', NULL, 'Chrome 68');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_administrators`
--
ALTER TABLE `log_administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_answers`
--
ALTER TABLE `log_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_assessments`
--
ALTER TABLE `log_assessments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_competencies`
--
ALTER TABLE `log_competencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_configurations`
--
ALTER TABLE `log_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_descresults`
--
ALTER TABLE `log_descresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_forgot_passwords`
--
ALTER TABLE `log_forgot_passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_histories`
--
ALTER TABLE `log_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_logins`
--
ALTER TABLE `log_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_pages`
--
ALTER TABLE `log_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_participants_answers`
--
ALTER TABLE `log_participants_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_participants_assessments`
--
ALTER TABLE `log_participants_assessments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_participants_results`
--
ALTER TABLE `log_participants_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_questions`
--
ALTER TABLE `log_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_registers`
--
ALTER TABLE `log_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_rowscores`
--
ALTER TABLE `log_rowscores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_scores`
--
ALTER TABLE `log_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_userassessments`
--
ALTER TABLE `log_userassessments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_users`
--
ALTER TABLE `log_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_administrators`
--
ALTER TABLE `log_administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_answers`
--
ALTER TABLE `log_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_assessments`
--
ALTER TABLE `log_assessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_competencies`
--
ALTER TABLE `log_competencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_configurations`
--
ALTER TABLE `log_configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_descresults`
--
ALTER TABLE `log_descresults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_forgot_passwords`
--
ALTER TABLE `log_forgot_passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log_histories`
--
ALTER TABLE `log_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_logins`
--
ALTER TABLE `log_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `log_pages`
--
ALTER TABLE `log_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `log_participants_answers`
--
ALTER TABLE `log_participants_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_participants_assessments`
--
ALTER TABLE `log_participants_assessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_participants_results`
--
ALTER TABLE `log_participants_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_questions`
--
ALTER TABLE `log_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_registers`
--
ALTER TABLE `log_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `log_rowscores`
--
ALTER TABLE `log_rowscores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_scores`
--
ALTER TABLE `log_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_userassessments`
--
ALTER TABLE `log_userassessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_users`
--
ALTER TABLE `log_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
