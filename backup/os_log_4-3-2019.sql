-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2019 at 12:17 PM
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
(41, '1', '127.0.0.1', 'Login Button', 'pandhu@gmail.com melakukan signin dengan password pandhu0703.', 'http://localhost:8000/backend/pages/auth/process', '2019-03-04 03:03:45', '2019-03-04 03:03:45', NULL, 'Chrome 68');

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
(37, '1', '127.0.0.1', 'Menu User', 'pandhu@gmail.com mengunjungi halaman User', 'http://localhost:8000/backend/pages/users', '2019-03-04 03:37:49', '2019-03-04 03:37:49', NULL, 'Chrome 68'),
(38, '1', '127.0.0.1', 'Add New User', 'pandhu@gmail.com mengunjungi halaman Add New User', 'http://localhost:8000/backend/pages/users/add', '2019-03-04 04:01:33', '2019-03-04 04:01:33', NULL, 'Chrome 68'),
(39, '1', '127.0.0.1', 'Detail User', 'pandhu@gmail.com mengunjungi halaman Detail User dengan No. Id : eyJpdiI6IlZkZzVpREJKdGtOWERiZ1FMd1ZveEE9PSIsInZhbHVlIjoiYTNKaWdtbXh0cFV1aU56MWo5WHhiZkdvVTlMNThHVnV1anVMVDlYZDZuK0dDbklPSHZTSjFJcVBpWlB1cmFJYSIsIm1hYyI6IjI2YzU2MzA1M2YzYmQ1YmFkOTI0MzE1ZDk4N2QwZGQ1NTk1ODRmNzE5MjU2ODZhZjVhMTU1ZjFjYjE1NjQ3YjUifQ==', 'http://localhost:8000/backend/pages/users/eyJpdiI6IlZkZzVpREJKdGtOWERiZ1FMd1ZveEE9PSIsInZhbHVlIjoiYTNKaWdtbXh0cFV1aU56MWo5WHhiZkdvVTlMNThHVnV1anVMVDlYZDZuK0dDbklPSHZTSjFJcVBpWlB1cmFJYSIsIm1hYyI6IjI2YzU2MzA1M2YzYmQ1YmFkOTI0MzE1ZDk4N2QwZGQ1NTk1ODRmNzE5MjU2ODZhZjVhMTU1ZjFjYjE1NjQ3YjUifQ==', '2019-03-04 04:02:38', '2019-03-04 04:02:38', NULL, 'Chrome 68');

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
(24, 'a9646be0-3bf8-11e9-938e-f74d4855cccc', 'purwo.setyo.aji@gmail.com', '127.0.0.1', 'Register Button', 'purwo.setyo.aji@gmail.com melakukan pendaftaran akun baru', 'http://localhost:8000/user/pages/register/store', 'Chrome 68', '2019-03-01 01:04:39', '2019-03-01 01:04:39', NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `log_administrators`
--
ALTER TABLE `log_administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_forgot_passwords`
--
ALTER TABLE `log_forgot_passwords`
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
-- Indexes for table `log_registers`
--
ALTER TABLE `log_registers`
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
-- AUTO_INCREMENT for table `log_forgot_passwords`
--
ALTER TABLE `log_forgot_passwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log_logins`
--
ALTER TABLE `log_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `log_pages`
--
ALTER TABLE `log_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `log_registers`
--
ALTER TABLE `log_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `log_users`
--
ALTER TABLE `log_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
