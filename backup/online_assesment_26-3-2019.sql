-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2019 at 04:56 AM
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
  `assesment_id` char(36) DEFAULT NULL,
  `selesai` enum('0','1') DEFAULT '0',
  `tanggal_akses` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesments`
--

INSERT INTO `assesments` (`id`, `user_id`, `assesment_id`, `selesai`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1be01070-45a7-11e9-9524-41876f36e82c', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'dc663170-3501-11e9-9999-63ce6a70ca04', '0', '2019-03-13', '2019-03-13 08:46:04', '2019-03-13 08:46:04', NULL),
('696f2be0-4582-11e9-ab45-3f2af7706f15', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'dc663170-3501-11e9-9999-63ce6a70ca04', '1', '2019-03-13', '2019-03-13 04:23:22', '2019-03-13 08:43:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assesment_kompetensis`
--

CREATE TABLE `assesment_kompetensis` (
  `id` char(36) NOT NULL,
  `ass_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `pembulatan` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesment_kompetensis`
--

INSERT INTO `assesment_kompetensis` (`id`, `ass_id`, `kompetensi_id`, `weight`, `pembulatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('bb6e0180-4582-11e9-af2b-377a030b236e', '696f2be0-4582-11e9-ab45-3f2af7706f15', '7be045d0-0f5b-11e9-8402-db52a8444bc8', 2.7, 2, '2019-03-13 04:25:40', '2019-03-13 04:25:40', NULL),
('bb9f5800-4582-11e9-bad5-4d54494a0da0', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', 3.4, 3, '2019-03-13 04:25:40', '2019-03-13 04:25:40', NULL),
('bbcb3ef0-4582-11e9-8e0d-178decd6dbd6', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', 2.15, 2, '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bbe8d1f0-4582-11e9-8dc5-d9cbedc1d86a', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', 1.75, 2, '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bc24a7a0-4582-11e9-aa85-bbff0d886a1d', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', 2.55, 2, '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bc4d1e00-4582-11e9-991c-c95769f8b1fe', '696f2be0-4582-11e9-ab45-3f2af7706f15', '01df0360-0f5c-11e9-860b-fb3757928a71', 2.3, 2, '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bc6f0740-4582-11e9-a4e8-e719281ff6b9', '696f2be0-4582-11e9-ab45-3f2af7706f15', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', 1.7, 1, '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bca663f0-4582-11e9-baa6-013d2f9af73d', '696f2be0-4582-11e9-ab45-3f2af7706f15', '487ce5c0-0f5c-11e9-991e-67af154c3146', 2.95, 3, '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bcc152b0-4582-11e9-a656-bfa624342976', '696f2be0-4582-11e9-ab45-3f2af7706f15', '50c09a10-0f5c-11e9-bbb7-e94462002084', 2.85, 3, '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bcdc3e60-4582-11e9-8d33-c71e3f089216', '696f2be0-4582-11e9-ab45-3f2af7706f15', '59050b10-0f5c-11e9-b920-5112040e5cec', 1.7, 1, '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bcf08f20-4582-11e9-aaf6-8dea2647255c', '696f2be0-4582-11e9-ab45-3f2af7706f15', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', 2.45, 2, '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bd0e9a90-4582-11e9-b7c6-7d21dbd12ef7', '696f2be0-4582-11e9-ab45-3f2af7706f15', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', 1.75, 2, '2019-03-13 04:25:43', '2019-03-13 04:25:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_nilai_asskoms`
--

CREATE TABLE `hasil_nilai_asskoms` (
  `id` char(36) NOT NULL,
  `keteranganhasil_id` char(36) DEFAULT NULL,
  `asskom_id` char(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_nilai_asskoms`
--

INSERT INTO `hasil_nilai_asskoms` (`id`, `keteranganhasil_id`, `asskom_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('bb788680-4582-11e9-8d0b-9b4b39b865f3', '2fa78150-39db-11e9-b6e0-37fbb92ccd97', 'bb6e0180-4582-11e9-af2b-377a030b236e', '2019-03-13 04:25:40', '2019-03-13 04:25:40', NULL),
('bba95680-4582-11e9-b6b8-c361592a3255', '18251a60-3727-11e9-97d1-333b41ae184b', 'bb9f5800-4582-11e9-bad5-4d54494a0da0', '2019-03-13 04:25:40', '2019-03-13 04:25:40', NULL),
('bbd1cb90-4582-11e9-a1d5-6be532efca02', '3c9f5740-3727-11e9-b1ed-8155123439e8', 'bbcb3ef0-4582-11e9-8e0d-178decd6dbd6', '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bc02a300-4582-11e9-86a8-5f16a2b661bf', 'c000d6a0-3727-11e9-b31b-0b162e60ccc3', 'bbe8d1f0-4582-11e9-8dc5-d9cbedc1d86a', '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bc3051e0-4582-11e9-9879-cf643e3419c0', '65c9aa50-39dc-11e9-b30b-bb6ee719a073', 'bc24a7a0-4582-11e9-aa85-bbff0d886a1d', '2019-03-13 04:25:41', '2019-03-13 04:25:41', NULL),
('bc557dc0-4582-11e9-9f28-e5a47b120162', '15621180-3728-11e9-8311-a17a1470e065', 'bc4d1e00-4582-11e9-991c-c95769f8b1fe', '2019-03-13 04:25:41', '2019-03-13 04:25:42', NULL),
('bc772cf0-4582-11e9-9361-019c9c350240', '48f5b920-3728-11e9-9574-d7155ea9dfaf', 'bc6f0740-4582-11e9-a4e8-e719281ff6b9', '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bcad0ac0-4582-11e9-9611-b5135314fdbe', '8b555680-3728-11e9-9fe3-67bea653487b', 'bca663f0-4582-11e9-baa6-013d2f9af73d', '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bcc7fed0-4582-11e9-95d9-3fc0b14e9766', 'e4098bf0-39dc-11e9-ae67-d39d43ff8ce0', 'bcc152b0-4582-11e9-a656-bfa624342976', '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bce2f460-4582-11e9-b68b-b3ca1cd55dc7', '1934c670-39dd-11e9-b679-417e9a72ba1a', 'bcdc3e60-4582-11e9-8d33-c71e3f089216', '2019-03-13 04:25:42', '2019-03-13 04:25:42', NULL),
('bcf732d0-4582-11e9-8733-a30d48025f94', '5b7ded50-39dd-11e9-b7cd-0b2c308b2f71', 'bcf08f20-4582-11e9-aaf6-8dea2647255c', '2019-03-13 04:25:42', '2019-03-13 04:25:43', NULL),
('bd1e5db0-4582-11e9-89a8-29cbb4ed9579', 'a9fbfa20-39dd-11e9-ac4b-7b7eb593e893', 'bd0e9a90-4582-11e9-b7c6-7d21dbd12ef7', '2019-03-13 04:25:43', '2019-03-13 04:25:43', NULL);

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
('03ec0e20-3723-11e9-9e6a-15d63524a218', '03e0daa0-3723-11e9-bd5f-195e903ccb42', 'Meminta formulir PO untuk pembelian mesin baru. Memesan mesin yang baru dari perusahaan yang sama dengan sebelumnya dan mempercepat proses produksi.', 1, '2019-02-22 21:25:14', '2019-02-22 21:25:14', NULL),
('03f2c980-3723-11e9-9255-696054cd0f61', '03e0daa0-3723-11e9-bd5f-195e903ccb42', 'Menghubungi alternatif pabrik lain yang dapat memenuhi order tersebut, dengan risiko bahwa ada kemungkinan Anda akan melewati batas waktu yang ditentukan, mengingat hal ini adalah tambahan proses produksi yang harus dilakukan di pabrik tersebut, dan tentunya diperlukan pemeriksaan kualitas yang ketat.', 2, '2019-02-22 21:25:14', '2019-02-22 21:25:14', NULL),
('03f98730-3723-11e9-9ee6-997e6383e0e0', '03e0daa0-3723-11e9-bd5f-195e903ccb42', 'Meminta teknisi untuk segera mempercepat proses identifikasi isu ini dan meminta solusinya segera.', 3, '2019-02-22 21:25:14', '2019-02-22 21:25:14', NULL),
('04004500-3723-11e9-b5c2-933cede68448', '03e0daa0-3723-11e9-bd5f-195e903ccb42', 'Membeli produk sabun yang sudah jadi di market, daripada ada spesifikasi yang terlewat. Mengirimkan konsinyasi ke pelanggan dengan perusahaan Anda yang menanggung biaya tambahannya.', 4, '2019-02-22 21:25:14', '2019-02-22 21:25:14', NULL),
('056f4230-371d-11e9-8fb9-391dd2f89f0b', '055e88e0-371d-11e9-af98-275ee513fe22', 'Strongly Disagree', 4, '2019-02-22 20:42:19', '2019-02-22 20:42:19', NULL),
('0577aef0-371d-11e9-a110-af7e9f4bf496', '055e88e0-371d-11e9-af98-275ee513fe22', 'Disagree', 3, '2019-02-22 20:42:19', '2019-02-22 20:42:19', NULL),
('058016b0-371d-11e9-8622-11755b4d887d', '055e88e0-371d-11e9-af98-275ee513fe22', 'Agree', 2, '2019-02-22 20:42:19', '2019-02-22 20:42:19', NULL),
('05888880-371d-11e9-97ee-29bfc26756cc', '055e88e0-371d-11e9-af98-275ee513fe22', 'Strongly Agree', 1, '2019-02-22 20:42:19', '2019-02-22 20:42:19', NULL),
('080d6280-371e-11e9-b293-8f95c1b2fdda', '07be2d50-371e-11e9-b230-2f032f9dcf59', 'Strongly Disagree', 4, '2019-02-22 20:49:33', '2019-02-22 20:49:33', NULL),
('082d5380-371e-11e9-8cd9-e3dd7823ab6c', '07be2d50-371e-11e9-b230-2f032f9dcf59', 'Disagree', 3, '2019-02-22 20:49:33', '2019-02-22 20:49:33', NULL),
('085252d0-371e-11e9-b736-e9dad9afd5dc', '07be2d50-371e-11e9-b230-2f032f9dcf59', 'Agree', 2, '2019-02-22 20:49:33', '2019-02-22 20:49:33', NULL),
('085abf40-371e-11e9-9578-518a6ffb44cb', '07be2d50-371e-11e9-b230-2f032f9dcf59', 'Strongly Agree', 1, '2019-02-22 20:49:34', '2019-02-22 20:49:34', NULL),
('0ca43320-3720-11e9-a4eb-53f9936a51b7', '0c8fca00-3720-11e9-81fb-31fcb0e61bf9', 'Strongly Disagree', 4, '2019-02-22 21:04:00', '2019-02-22 21:04:00', NULL),
('0cb357a0-3720-11e9-9d6c-cdba86c10fde', '0c8fca00-3720-11e9-81fb-31fcb0e61bf9', 'Disagree', 3, '2019-02-22 21:04:00', '2019-02-22 21:04:00', NULL),
('0cbd6e40-3720-11e9-9fd8-31d60bb312aa', '0c8fca00-3720-11e9-81fb-31fcb0e61bf9', 'Agree', 2, '2019-02-22 21:04:00', '2019-02-22 21:04:00', NULL),
('0cc421b0-3720-11e9-96a5-05d36a3abc34', '0c8fca00-3720-11e9-81fb-31fcb0e61bf9', 'Strongly Agree', 1, '2019-02-22 21:04:00', '2019-02-22 21:04:00', NULL),
('0ee51b50-371f-11e9-96fc-3945ac0dc79b', '0ede0600-371f-11e9-a7d5-65b8eadea479', 'Strongly Disagree', 1, '2019-02-22 20:56:54', '2019-02-22 20:56:54', NULL),
('0eebd4e0-371f-11e9-ada3-cf199a22eb7f', '0ede0600-371f-11e9-a7d5-65b8eadea479', 'Disagree', 2, '2019-02-22 20:56:54', '2019-02-22 20:56:54', NULL),
('0ef2a340-371f-11e9-ba33-ad9b91494574', '0ede0600-371f-11e9-a7d5-65b8eadea479', 'Agree', 3, '2019-02-22 20:56:54', '2019-02-22 20:56:54', NULL),
('0efe60c0-371f-11e9-bc17-953ac9135692', '0ede0600-371f-11e9-a7d5-65b8eadea479', 'Strongly Agree', 4, '2019-02-22 20:56:54', '2019-02-22 20:56:54', NULL),
('1120ddc0-3722-11e9-ac82-033fa6962422', '11176d40-3722-11e9-a587-9fd3e7f52aea', 'Meminta tim Anda menjelaskan alasan mengenai mengapa Anda tidak mendapatkan informasi mengenai situasi ini lebih awal. Anda menghubungi pelanggan untuk menjelaskan situasinya dan menginformasikan mengenai opsi lain berupa pengiriman melalui udara dengan adanya biaya tambahan. Anda meminta maaf atas ketidaknyamanan yang terjadi.', 3, '2019-02-22 21:18:26', '2019-02-22 21:18:26', NULL),
('112930a0-3722-11e9-a0d8-392d86fbb1c1', '11176d40-3722-11e9-a587-9fd3e7f52aea', 'Kehilangan kendali emosi dan menunjukkan kekecewaan pada tim Suppy Chain karena tidak melibatkan Anda dalam situasi ini. Anda akan meminta mereka untuk menemukan solusi dan mengkomunikasikannya langsung kepada pelanggan.', 2, '2019-02-22 21:18:26', '2019-02-22 21:18:26', NULL),
('113351c0-3722-11e9-837c-6300d16b7963', '11176d40-3722-11e9-a587-9fd3e7f52aea', 'Mengekspresikan kemarahan Anda pada tim Suppy Chain, kemudian mendiskusikan solusi untuk isu ini. Anda tidak akan menghubungi pelanggan dan menginformasikan mengenai hal ini, sampai dengan pelanggan yang menghubungi Anda. Dengan begini, Anda merasa bisa mengulur waktu lebih banyak untuk sampai akhirnya mendapatkan solusi.', 1, '2019-02-22 21:18:26', '2019-02-22 21:18:26', NULL),
('113f1980-3722-11e9-b29f-dd88901f8685', '11176d40-3722-11e9-a587-9fd3e7f52aea', 'Mengekspresikan kekecewaan Anda pada tim Supply Chain karena tidak menginformasikan pada Anda mengenai situasi tersebut sampai dengan Anda bertanya langsung. Anda minta produk tersebut digabung dengan produk lain yang akan dikirim lewat udara. Anda juga akan menghubungi pelanggan dengan segera mengenai situasi ini dan meminta maaf atas penundaan dan ketidaknyamanan yang terjadi.', 4, '2019-02-22 21:18:26', '2019-02-22 21:18:26', NULL),
('192118c0-3720-11e9-a898-b735bbdef811', '19120790-3720-11e9-ad31-b9018e32af4f', 'Strongly Disagree', 1, '2019-02-22 21:04:21', '2019-02-22 21:04:21', NULL),
('193f5fe0-3720-11e9-9439-9d071f18e6c1', '19120790-3720-11e9-ad31-b9018e32af4f', 'Disagree', 2, '2019-02-22 21:04:21', '2019-02-22 21:04:21', NULL),
('19461ac0-3720-11e9-b15b-89826c3cc523', '19120790-3720-11e9-ad31-b9018e32af4f', 'Agree', 3, '2019-02-22 21:04:21', '2019-02-22 21:04:21', NULL),
('194cde30-3720-11e9-a0f8-7362b0cebe4d', '19120790-3720-11e9-ad31-b9018e32af4f', 'Strongly Agree', 4, '2019-02-22 21:04:21', '2019-02-22 21:04:21', NULL),
('1d0a5000-371f-11e9-bebd-5515db597bfe', '1cfad4b0-371f-11e9-b688-db457e0a0150', 'Strongly Disagree', 4, '2019-02-22 20:57:18', '2019-02-22 20:57:18', NULL),
('1d37b060-371f-11e9-9619-e3d45a9fd3d7', '1cfad4b0-371f-11e9-b688-db457e0a0150', 'Disagree', 3, '2019-02-22 20:57:18', '2019-02-22 20:57:18', NULL),
('1d401cd0-371f-11e9-8739-3576d391c5b4', '1cfad4b0-371f-11e9-b688-db457e0a0150', 'Agree', 2, '2019-02-22 20:57:18', '2019-02-22 20:57:18', NULL),
('1d489690-371f-11e9-adf2-6775f0aac539', '1cfad4b0-371f-11e9-b688-db457e0a0150', 'Strongly Agree', 1, '2019-02-22 20:57:18', '2019-02-22 20:57:18', NULL),
('1f620d00-371e-11e9-bbeb-9306393f8904', '1f5b4d80-371e-11e9-a165-170da7153afa', 'Strongly Disagree', 1, '2019-02-22 20:50:12', '2019-02-22 20:50:12', NULL),
('1f712490-371e-11e9-863e-6df77bce9f94', '1f5b4d80-371e-11e9-a165-170da7153afa', 'Disagree', 2, '2019-02-22 20:50:12', '2019-02-22 20:50:12', NULL),
('1f77d5b0-371e-11e9-91f9-7bb563ee6dbe', '1f5b4d80-371e-11e9-a165-170da7153afa', 'Agree', 3, '2019-02-22 20:50:12', '2019-02-22 20:50:12', NULL),
('1f7e9fb0-371e-11e9-861c-713483e8d15b', '1f5b4d80-371e-11e9-a165-170da7153afa', 'Strongly Agree', 4, '2019-02-22 20:50:12', '2019-02-22 20:50:12', NULL),
('267bcbe0-3720-11e9-939d-7de4d52ef78e', '2671b910-3720-11e9-861f-e30c334586ff', 'Strongly Disagree', 4, '2019-02-22 21:04:43', '2019-02-22 21:04:43', NULL),
('26841160-3720-11e9-9869-1bcc7c1efcdc', '2671b910-3720-11e9-861f-e30c334586ff', 'Disagree', 3, '2019-02-22 21:04:43', '2019-02-22 21:04:43', NULL),
('268c7ec0-3720-11e9-8493-b90bf4dfdd90', '2671b910-3720-11e9-861f-e30c334586ff', 'Agree', 2, '2019-02-22 21:04:43', '2019-02-22 21:04:43', NULL),
('269b00e0-3720-11e9-a7de-c71575014474', '2671b910-3720-11e9-861f-e30c334586ff', 'Strongly Agree', 1, '2019-02-22 21:04:43', '2019-02-22 21:04:43', NULL),
('2826fd50-371d-11e9-91f2-29b389876bf1', '281a4e50-371d-11e9-b53e-0da8ad462c6e', 'Strongly Disagree', 4, '2019-02-22 20:43:17', '2019-02-22 20:43:17', NULL),
('283e89a0-371d-11e9-914b-ed52caa72627', '281a4e50-371d-11e9-b53e-0da8ad462c6e', 'Disagree', 3, '2019-02-22 20:43:18', '2019-02-22 20:43:18', NULL),
('28454e80-371d-11e9-a9fe-b70e0ed7d4dc', '281a4e50-371d-11e9-b53e-0da8ad462c6e', 'Agree', 2, '2019-02-22 20:43:18', '2019-02-22 20:43:18', NULL),
('285116f0-371d-11e9-b242-99aac576ece7', '281a4e50-371d-11e9-b53e-0da8ad462c6e', 'Strongly Agree', 1, '2019-02-22 20:43:18', '2019-02-22 20:43:18', NULL),
('2ddfc450-371e-11e9-bdfb-7f08e9044f74', '2dd8f3c0-371e-11e9-8b92-4be69152b76f', 'Strongly Disagree', 4, '2019-02-22 20:50:36', '2019-02-22 20:50:36', NULL),
('2de68510-371e-11e9-aa08-254f7b2e9bc4', '2dd8f3c0-371e-11e9-8b92-4be69152b76f', 'Disagree', 3, '2019-02-22 20:50:37', '2019-02-22 20:50:37', NULL),
('2df3f9e0-371e-11e9-ac4d-8dea9833dda5', '2dd8f3c0-371e-11e9-8b92-4be69152b76f', 'Agree', 2, '2019-02-22 20:50:37', '2019-02-22 20:50:37', NULL),
('2e016c20-371e-11e9-8db3-a1308064d627', '2dd8f3c0-371e-11e9-8b92-4be69152b76f', 'Strongly Agree', 1, '2019-02-22 20:50:37', '2019-02-22 20:50:37', NULL),
('361e3eb0-3ff5-11e9-b78f-75bbbb8b7170', '3610c070-3ff5-11e9-8e93-d3c67eae8fa7', 'asdf', 1, '2019-03-06 02:50:01', '2019-03-06 02:50:44', '2019-03-06 02:50:44'),
('37cbb3a0-3723-11e9-83cf-db4df7ecf912', '3777aaa0-3723-11e9-a905-59987064d8bc', 'Mengadakan meeting dengan tim Anda, mencoba memahami isu operasional yang terjadi dan masalahnya apa saja, kemudian berusaha mengatasinya diwaktu yang bersamaan.', 4, '2019-02-22 21:26:41', '2019-02-22 21:26:41', NULL),
('37d25d30-3723-11e9-a65f-9d62b3214d5f', '3777aaa0-3723-11e9-a905-59987064d8bc', 'Meminta senior manager (atasan) untuk membimbing Anda dalam menyusun dan menstandarkan kembali proses yang ada.', 2, '2019-02-22 21:26:41', '2019-02-22 21:26:41', NULL),
('37d922c0-3723-11e9-b9fe-578a5545b553', '3777aaa0-3723-11e9-a905-59987064d8bc', 'Meminta anak buah untuk mengeksplorasi beberapa pilihan lain yang berbeda dan menyusun rencana tindakan.', 1, '2019-02-22 21:26:41', '2019-02-22 21:26:41', NULL),
('37e33e10-3723-11e9-afe0-f35aefec15b5', '3777aaa0-3723-11e9-a905-59987064d8bc', 'Menyusun dashboard dimana Anda bisa melihat dan mengawasi progress dan status dari setiap tugas yang dijalankan oleh tim Anda.', 3, '2019-02-22 21:26:41', '2019-02-22 21:26:41', NULL),
('38523000-371f-11e9-8081-f5fa1cf4b32b', '384a26f0-371f-11e9-b991-bf5047e49401', 'Strongly Disagree', 1, '2019-02-22 20:58:03', '2019-02-22 20:58:03', NULL),
('3858ee00-371f-11e9-a044-a5222de75492', '384a26f0-371f-11e9-b991-bf5047e49401', 'Disagree', 2, '2019-02-22 20:58:04', '2019-02-22 20:58:04', NULL),
('385fa960-371f-11e9-931f-77154f025a29', '384a26f0-371f-11e9-b991-bf5047e49401', 'Agree', 3, '2019-02-22 20:58:04', '2019-02-22 20:58:04', NULL),
('38666b50-371f-11e9-984f-8344b41616d1', '384a26f0-371f-11e9-b991-bf5047e49401', 'Strongly Agree', 4, '2019-02-22 20:58:04', '2019-02-22 20:58:04', NULL),
('3fe25b00-371e-11e9-989b-4d0b0797888f', '3fdbea60-371e-11e9-bf22-571b3e2f1195', 'Strongly Disagree', 1, '2019-02-22 20:51:07', '2019-02-22 20:51:07', NULL),
('3fe90e40-371e-11e9-94da-2929d998fc2c', '3fdbea60-371e-11e9-bf22-571b3e2f1195', 'Disagree', 2, '2019-02-22 20:51:07', '2019-02-22 20:51:07', NULL),
('3ffefc00-371e-11e9-acc7-1bbc6289172f', '3fdbea60-371e-11e9-bf22-571b3e2f1195', 'Agree', 3, '2019-02-22 20:51:07', '2019-02-22 20:51:07', NULL),
('4005b920-371e-11e9-96cf-95df604b921a', '3fdbea60-371e-11e9-bf22-571b3e2f1195', 'Strongly Agree', 4, '2019-02-22 20:51:07', '2019-02-22 20:51:07', NULL),
('413f0a80-371d-11e9-8e24-f59665189c89', '41386580-371d-11e9-a595-f14edf6eaf2d', 'Strongly Disagree', 4, '2019-02-22 20:43:59', '2019-02-22 20:43:59', NULL),
('414768a0-371d-11e9-a141-7d4b8cf9c99a', '41386580-371d-11e9-a595-f14edf6eaf2d', 'Disagree', 3, '2019-02-22 20:44:00', '2019-02-22 20:44:00', NULL),
('414e2020-371d-11e9-b9c2-51f98f2d8079', '41386580-371d-11e9-a595-f14edf6eaf2d', 'Agree', 2, '2019-02-22 20:44:00', '2019-02-22 20:44:00', NULL),
('4154ec80-371d-11e9-bd3e-8befef53d07a', '41386580-371d-11e9-a595-f14edf6eaf2d', 'Strongly Agree', 1, '2019-02-22 20:44:00', '2019-02-22 20:44:00', NULL),
('457bcd00-371f-11e9-9e8a-47dca9e57b26', '456bf250-371f-11e9-a8de-478c2aaa03ce', 'Strongly Disagree', 1, '2019-02-22 20:58:26', '2019-02-22 20:58:26', NULL),
('45842b20-371f-11e9-a87d-bb25833d4cba', '456bf250-371f-11e9-a8de-478c2aaa03ce', 'Disagree', 2, '2019-02-22 20:58:26', '2019-02-22 20:58:26', NULL),
('458aeae0-371f-11e9-af7f-b5466f3071d5', '456bf250-371f-11e9-a8de-478c2aaa03ce', 'Agree', 3, '2019-02-22 20:58:26', '2019-02-22 20:58:26', NULL),
('4591a6b0-371f-11e9-8fb9-cfe7d5b4ed66', '456bf250-371f-11e9-a8de-478c2aaa03ce', 'Strongly Agree', 4, '2019-02-22 20:58:26', '2019-02-22 20:58:26', NULL),
('517d8da0-371e-11e9-936c-a3cdb6904f6a', '5175c720-371e-11e9-ba3b-f327eb8d7e00', 'Strongly Disagree', 4, '2019-02-22 20:51:36', '2019-02-22 20:51:36', NULL),
('51988750-371e-11e9-a869-65b9d7e131f5', '5175c720-371e-11e9-ba3b-f327eb8d7e00', 'Disagree', 3, '2019-02-22 20:51:36', '2019-02-22 20:51:36', NULL),
('519f55f0-371e-11e9-87bd-698804596d06', '5175c720-371e-11e9-ba3b-f327eb8d7e00', 'Agree', 2, '2019-02-22 20:51:36', '2019-02-22 20:51:36', NULL),
('51a87a40-371e-11e9-9b10-5f2d5fc32784', '5175c720-371e-11e9-ba3b-f327eb8d7e00', 'Strongly Agree', 1, '2019-02-22 20:51:37', '2019-02-22 20:51:37', NULL),
('52404c90-3722-11e9-8ad0-5315de7762fe', '5237b320-3722-11e9-a5ba-459ee46aebef', 'Segera menginformasikan pada management senior mengenai perlunya intervensi segera karena ini adalah isu yang besar.', 1, '2019-02-22 21:20:15', '2019-02-22 21:20:15', NULL),
('5268a040-3722-11e9-86ca-631418426074', '5237b320-3722-11e9-a5ba-459ee46aebef', 'Memeriksa separah apa situasinya dan berkonsultasi intensif dengan departemen yang relevan.', 2, '2019-02-22 21:20:16', '2019-02-22 21:20:16', NULL),
('52710a40-3722-11e9-810f-bf22af0b2807', '5237b320-3722-11e9-a5ba-459ee46aebef', 'Menginformasikan pada departemen yang relevan, untuk menggantikan produk yang ada saat ini dengan yang baru, dan memastikan bahwa problem seperti ini dapat terselesaikan lebih awal, sebelum produk didistribusikan ke pelanggan.', 4, '2019-02-22 21:20:16', '2019-02-22 21:20:16', NULL),
('5281e290-3722-11e9-8482-dfe521d993c1', '5237b320-3722-11e9-a5ba-459ee46aebef', 'Menarik produk dari market dengan segera, dan memastikan bahwa produk yang baru dapat segera terkirim secepat mungkin.', 3, '2019-02-22 21:20:16', '2019-02-22 21:20:16', NULL),
('55935dd0-371d-11e9-9c05-cd7be9dd6a93', '558c66f0-371d-11e9-b128-fdd80ee7af2e', 'Strongly Disagree', 4, '2019-02-22 20:44:34', '2019-02-22 20:44:34', NULL),
('559a09d0-371d-11e9-8732-27719586e5c1', '558c66f0-371d-11e9-b128-fdd80ee7af2e', 'Disagree', 3, '2019-02-22 20:44:34', '2019-02-22 20:44:34', NULL),
('55a0cda0-371d-11e9-bed8-ddc383e2fb29', '558c66f0-371d-11e9-b128-fdd80ee7af2e', 'Agree', 2, '2019-02-22 20:44:34', '2019-02-22 20:44:34', NULL),
('55a78ce0-371d-11e9-a7a7-41075459cf23', '558c66f0-371d-11e9-b128-fdd80ee7af2e', 'Strongly Agree', 1, '2019-02-22 20:44:34', '2019-02-22 20:44:34', NULL),
('58669040-3ff5-11e9-9f4d-e74daddc7124', '3610c070-3ff5-11e9-8e93-d3c67eae8fa7', 'sadf', 1, '2019-03-06 02:50:59', '2019-03-06 02:51:17', '2019-03-06 02:51:17'),
('6a1fba00-3723-11e9-8d9b-7d7ea455c4b7', '6a188130-3723-11e9-8079-979426ed84d1', 'Memberitahu mereka bahwa memang pekerjaan biasanya monoton setelah dijalani selama beberapa waktu, dan menyarankan agar mereka berusaha untuk berdaptasi pada hal ini.', 1, '2019-02-22 21:28:05', '2019-02-22 21:28:05', NULL),
('6a267090-3723-11e9-80f5-134ef4ea0677', '6a188130-3723-11e9-8079-979426ed84d1', 'Mencoba untuk melibatkan mereka untuk lebih banyak mengadakan sesi knowledge sharing (berbagi pengetahuan), sehingga mereka secara aktif bisa memahami apa hubungan antara satu tugas dengan tugas lain, kemudian juga belajar dari satu sama lain.', 4, '2019-02-22 21:28:05', '2019-02-22 21:28:05', NULL),
('6a3098b0-3723-11e9-bf42-db0fb7fc8a90', '6a188130-3723-11e9-8079-979426ed84d1', 'Mencari umpan balik dari mereka tentang bagaimana membuat pekerjaan menjadi lebih menarik bagi mereka. Mencari saran terkait proyek ataupun tugas seperti apa yang mereka ingin kerjakan.', 3, '2019-02-22 21:28:05', '2019-02-22 21:28:05', NULL),
('6a3fbbe0-3723-11e9-a020-bbf661fb9190', '6a188130-3723-11e9-8079-979426ed84d1', 'Melakukan penelitian intensif mengenai bagaimana membuat proses kerja menjadi lebih menyenangkan dan lebih membuat mereka mau terlibat.', 2, '2019-02-22 21:28:05', '2019-02-22 21:28:05', NULL),
('6b730c10-371e-11e9-ab6f-47badfd5b0a0', '6b65a8b0-371e-11e9-8b69-89d5cd2f15a3', 'Strongly Disagree', 1, '2019-02-22 20:52:20', '2019-02-22 20:52:20', NULL),
('6b824410-371e-11e9-86e8-632362bf755e', '6b65a8b0-371e-11e9-8b69-89d5cd2f15a3', 'Disagree', 2, '2019-02-22 20:52:20', '2019-02-22 20:52:20', NULL),
('6b8fd280-371e-11e9-a589-cf46f35cf204', '6b65a8b0-371e-11e9-8b69-89d5cd2f15a3', 'Agree', 3, '2019-02-22 20:52:20', '2019-02-22 20:52:20', NULL),
('6b968a80-371e-11e9-af37-7bf65d8b132b', '6b65a8b0-371e-11e9-8b69-89d5cd2f15a3', 'Strongly Agree', 4, '2019-02-22 20:52:20', '2019-02-22 20:52:20', NULL),
('6c1cbf20-371d-11e9-b27e-bd76be17c07e', '6c1335c0-371d-11e9-88cd-d1e4153c30fa', 'Strongly Disagree', 1, '2019-02-22 20:45:11', '2019-02-22 20:45:11', NULL),
('6c37a450-371d-11e9-8e04-f5fbf5e8b7c5', '6c1335c0-371d-11e9-88cd-d1e4153c30fa', 'Disagree', 2, '2019-02-22 20:45:12', '2019-02-22 20:45:12', NULL),
('6c3e75b0-371d-11e9-b3e4-75714ca56793', '6c1335c0-371d-11e9-88cd-d1e4153c30fa', 'Agree', 3, '2019-02-22 20:45:12', '2019-02-22 20:45:12', NULL),
('6c470a60-371d-11e9-91f8-e9ab0cb8f1e9', '6c1335c0-371d-11e9-88cd-d1e4153c30fa', 'Strongly Agree', 4, '2019-02-22 20:45:12', '2019-02-22 20:45:12', NULL),
('6d5328e0-371c-11e9-9a0b-17b5bb245f11', '6d462e10-371c-11e9-984b-5387a75ad289', 'Strongly Disagree', 1, '2019-02-22 20:38:04', '2019-02-22 20:38:04', NULL),
('6d6fce90-371c-11e9-9f97-6b10af0918fe', '6d462e10-371c-11e9-984b-5387a75ad289', 'Disagree', 2, '2019-02-22 20:38:04', '2019-02-22 20:38:04', NULL),
('6d768dd0-371c-11e9-9f04-5f4aa38ab9c3', '6d462e10-371c-11e9-984b-5387a75ad289', 'Agree', 3, '2019-02-22 20:38:04', '2019-02-22 20:38:04', NULL),
('6d7d46a0-371c-11e9-9fc5-172ff6210c74', '6d462e10-371c-11e9-984b-5387a75ad289', 'Strongly Agree', 4, '2019-02-22 20:38:04', '2019-02-22 20:38:04', NULL),
('776700d0-371f-11e9-8204-7d57c54bcea5', '7748e1c0-371f-11e9-b756-d943d1fe494d', 'Strongly Disagree', 1, '2019-02-22 20:59:49', '2019-02-22 20:59:49', NULL),
('776db7f0-371f-11e9-94a0-772c65998004', '7748e1c0-371f-11e9-b756-d943d1fe494d', 'Disagree', 2, '2019-02-22 20:59:49', '2019-02-22 20:59:49', NULL),
('777ea9c0-371f-11e9-871e-f7cf73f56789', '7748e1c0-371f-11e9-b756-d943d1fe494d', 'Agree', 3, '2019-02-22 20:59:49', '2019-02-22 20:59:49', NULL),
('778705c0-371f-11e9-bfde-798d3c1e19c4', '7748e1c0-371f-11e9-b756-d943d1fe494d', 'Strongly Agree', 4, '2019-02-22 20:59:50', '2019-02-22 20:59:50', NULL),
('79461370-371e-11e9-abdc-85953181c88d', '793a5360-371e-11e9-aef7-c5daed3bfc09', 'Strongly Disagree', 1, '2019-02-22 20:52:43', '2019-02-22 20:52:43', NULL),
('79552310-371e-11e9-a15e-d3ce33fcafa6', '793a5360-371e-11e9-aef7-c5daed3bfc09', 'Disagree', 2, '2019-02-22 20:52:43', '2019-02-22 20:52:43', NULL),
('795d8f30-371e-11e9-9f97-077666f591ae', '793a5360-371e-11e9-aef7-c5daed3bfc09', 'Agree', 3, '2019-02-22 20:52:43', '2019-02-22 20:52:43', NULL),
('796612c0-371e-11e9-87af-5b07124e6045', '793a5360-371e-11e9-aef7-c5daed3bfc09', 'Strongly Agree', 4, '2019-02-22 20:52:43', '2019-02-22 20:52:43', NULL),
('7a855d70-3721-11e9-a3f8-0112d4e81685', '1b9d75d0-3721-11e9-9e68-db1a1b395559', 'Memastikan kembali kepada supplier dengan menunjukkan track-record dari perusahaan dan menginformasikan kepada supplier tersebut mengenai peluang bisnis yang ada dari produk ini di masa datang, sebagai hasil dari peluncuran produk yang akan dilaksanakan nanti.', 4, '2019-02-22 21:14:14', '2019-02-22 21:14:14', NULL),
('7aa4ea40-3721-11e9-b507-d71c7d00083b', '1b9d75d0-3721-11e9-9e68-db1a1b395559', 'Membuat permohonan halus pada supplier dan meminta mereka untuk memenuhi permintaan Anda demi relasi yang memang selama ini sudah berjalan baik antara Anda dengan supplier tersebut.', 3, '2019-02-22 21:14:14', '2019-02-22 21:14:14', NULL),
('7aab97e0-3721-11e9-91fa-b998f32673da', '1b9d75d0-3721-11e9-9e68-db1a1b395559', 'Memastikan kepada supplier bahwa harga tinggi masih dibolehkan untuk jumlah volume pemesanan yang sedikit, sementara dalam hal ini Anda berharap harga juga menjadi dapat dikurangi jika nantinya volume pemesanan menjadi semakin banyak dan dapat memenuhi jumlah pemesanan minimum yang ditetapkan oleh supplier tersebut.', 1, '2019-02-22 21:14:14', '2019-02-22 21:14:14', NULL),
('7ab25760-3721-11e9-b735-150b35c6bb84', '1b9d75d0-3721-11e9-9e68-db1a1b395559', 'Beritahu pemasok bahwa perkiraan volume menunjukkan bahwa organisasi akan dapat memenuhi jumlah pesanan minimum yang diajukan pemasok dalam dua bulan pertama peluncuran.', 2, '2019-02-22 21:14:14', '2019-02-22 21:14:14', NULL),
('7c295a30-3722-11e9-8cbf-f748a3cc0e49', '7c1c4f30-3722-11e9-9c8c-457abfb12bab', 'Bentuk tim penelitian yang ditujukan untuk menginvestigasi klaim dari pelanggan tersebut, dan mempresentasikan hasilnya kepada pelanggan dalam rangka untuk mendapatkan kembali kepecayaan dan membangun kembali kredibilitas produk Anda.', 4, '2019-02-22 21:21:26', '2019-02-22 21:21:26', NULL),
('7c301690-3722-11e9-8a34-a9fee7e3cb94', '7c1c4f30-3722-11e9-9c8c-457abfb12bab', 'Menempatkan klaim tersebut dalam sistem umpan balik pelanggan (customer feedback system) dalam rangka untuk menghubungkan perusahan dengan pelanggan dan memahami apa yang menjadi concern utama mereka.', 2, '2019-02-22 21:21:26', '2019-02-22 21:21:26', NULL),
('7c36d870-3722-11e9-8806-fb0b71c28bc7', '7c1c4f30-3722-11e9-9c8c-457abfb12bab', 'Menganalisis data performance organisasi dan mengidentifikasi mana produk spesifik yang memang tidak berjalan baik, dan mengatasinya dengan cara yang spesifik.', 3, '2019-02-22 21:21:26', '2019-02-22 21:21:26', NULL),
('7c42a990-3722-11e9-b7e3-f170a28cade1', '7c1c4f30-3722-11e9-9c8c-457abfb12bab', 'Mengeluarkan pernyataan yang sangat menekankan bahwa organisasi sangat memperhatikan kualitas dan standar yang berlaku, dimana hal ini juga ditaati oleh seluruh proses produksi untuk seluruh produk dari perusahaan Anda.', 1, '2019-02-22 21:21:26', '2019-02-22 21:21:26', NULL),
('7ff79aa0-371b-11e9-bdc2-972d79d75e32', '7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', 'Strongly Disagree', 4, '2019-02-22 20:31:26', '2019-02-22 20:31:26', NULL),
('8030c170-371b-11e9-b2c3-5b517717dbef', '7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', 'Disagree', 3, '2019-02-22 20:31:26', '2019-02-22 20:31:26', NULL),
('805cc070-371b-11e9-9a8f-43cec6025a72', '7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', 'Agree', 2, '2019-02-22 20:31:26', '2019-02-22 20:31:26', NULL),
('806da0b0-371b-11e9-a1f1-119389c66592', '7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', 'Strongly Agree', 1, '2019-02-22 20:31:26', '2019-02-22 20:31:26', NULL),
('8581aea0-371f-11e9-8e12-c326819f2e5d', '8577ff10-371f-11e9-b3cf-373ceb46332e', 'Strongly Disagree', 4, '2019-02-22 21:00:13', '2019-02-22 21:00:13', NULL),
('858a07c0-371f-11e9-95c6-4510a24bc6e6', '8577ff10-371f-11e9-b3cf-373ceb46332e', 'Disagree', 3, '2019-02-22 21:00:13', '2019-02-22 21:00:13', NULL),
('859272b0-371f-11e9-a063-a758b1ad307f', '8577ff10-371f-11e9-b3cf-373ceb46332e', 'Agree', 2, '2019-02-22 21:00:13', '2019-02-22 21:00:13', NULL),
('85a4fbc0-371f-11e9-be49-61bdbfe3a0f3', '8577ff10-371f-11e9-b3cf-373ceb46332e', 'Strongly Agree', 1, '2019-02-22 21:00:13', '2019-02-22 21:00:13', NULL),
('8aeb0a40-371e-11e9-86c6-d50da508f4a8', '8ae24d00-371e-11e9-9966-cd510fa980e9', 'Strongly Disagree', 1, '2019-02-22 20:53:13', '2019-02-22 20:53:13', NULL),
('8af35a20-371e-11e9-8ef1-194f4f82cea5', '8ae24d00-371e-11e9-9966-cd510fa980e9', 'Disagree', 2, '2019-02-22 20:53:13', '2019-02-22 20:53:13', NULL),
('8afbca60-371e-11e9-87d0-7de8c249abee', '8ae24d00-371e-11e9-9966-cd510fa980e9', 'Agree', 3, '2019-02-22 20:53:13', '2019-02-22 20:53:13', NULL),
('8b043810-371e-11e9-b8cd-5dded3f5f4ac', '8ae24d00-371e-11e9-9966-cd510fa980e9', 'Strongly Agree', 4, '2019-02-22 20:53:13', '2019-02-22 20:53:13', NULL),
('8b510300-371d-11e9-a557-c1368b0fe75e', '8b49e150-371d-11e9-b58d-2dd9795133db', 'Strongly Disagree', 1, '2019-02-22 20:46:04', '2019-02-22 20:46:04', NULL),
('8b57bc60-371d-11e9-9876-9d12b41598e9', '8b49e150-371d-11e9-b58d-2dd9795133db', 'Disagree', 2, '2019-02-22 20:46:04', '2019-02-22 20:46:04', NULL),
('8b5e95a0-371d-11e9-b236-9570d54fd0db', '8b49e150-371d-11e9-b58d-2dd9795133db', 'Agree', 3, '2019-02-22 20:46:04', '2019-02-22 20:46:04', NULL),
('8b6549a0-371d-11e9-b384-8b3be7297c2e', '8b49e150-371d-11e9-b58d-2dd9795133db', 'Strongly Agree', 4, '2019-02-22 20:46:04', '2019-02-22 20:46:04', NULL),
('947411c0-371f-11e9-b38b-2990a083a7fd', '946cfa20-371f-11e9-9347-63d43104ad36', 'Strongly Disagree', 4, '2019-02-22 21:00:38', '2019-02-22 21:00:38', NULL),
('947c72d0-371f-11e9-a1a5-570208756023', '946cfa20-371f-11e9-9347-63d43104ad36', 'Disagree', 3, '2019-02-22 21:00:38', '2019-02-22 21:00:38', NULL),
('9489e870-371f-11e9-a045-0d1af0689032', '946cfa20-371f-11e9-9347-63d43104ad36', 'Agree', 2, '2019-02-22 21:00:38', '2019-02-22 21:00:38', NULL),
('94b751e0-371f-11e9-8ed7-7b930a292c9c', '946cfa20-371f-11e9-9347-63d43104ad36', 'Strongly Agree', 1, '2019-02-22 21:00:39', '2019-02-22 21:00:39', NULL),
('97b58610-3723-11e9-81b9-13b63512f098', '97ab69f0-3723-11e9-97b3-9d8a529cfc13', 'Berkonsultasi dengan ahli yang terbaik di industri ini untuk mendapatkan panduan dan mempertemukan ahli tersebut dengan tim Anda.', 2, '2019-02-22 21:29:22', '2019-02-22 21:29:22', NULL),
('97bfb900-3723-11e9-9ad0-d15a1dcb797d', '97ab69f0-3723-11e9-97b3-9d8a529cfc13', 'Meminta mereka untuk menemukan perbedaan fitur produk tersebut dengan produk lain di market, sehingga mereka dapat menghasilkan sesuatu yang memang bagus dan berbeda.', 4, '2019-02-22 21:29:22', '2019-02-22 21:29:22', NULL),
('97c865c0-3723-11e9-b255-774f6e93cfe1', '97ab69f0-3723-11e9-97b3-9d8a529cfc13', 'Meminta mereka untuk menggunakan metode riset yang berbeda, daripada hanya lewat internet, sehingga mereka bisa mendapatkan ide apa yang dilakukan oleh kompetitor.', 1, '2019-02-22 21:29:22', '2019-02-22 21:29:22', NULL),
('97cf2c60-3723-11e9-bf61-31d041d11ed2', '97ab69f0-3723-11e9-97b3-9d8a529cfc13', 'Minta mereka untuk berinteraksi dengan pelanggan dan mengetahui kebutuhan mereka, kemudian minta mereka membuat fitur tambahan di produk sesuai dengan kebutuhan pelanggan.', 3, '2019-02-22 21:29:22', '2019-02-22 21:29:22', NULL),
('993e0210-371d-11e9-8a18-9b11a52f8325', '99351f90-371d-11e9-8fe2-0548e2b21e55', 'Strongly Disagree', 4, '2019-02-22 20:46:27', '2019-02-22 20:46:27', NULL),
('99465ec0-371d-11e9-a9bb-6f142e26058a', '99351f90-371d-11e9-8fe2-0548e2b21e55', 'Disagree', 3, '2019-02-22 20:46:27', '2019-02-22 20:46:27', NULL),
('994ecbc0-371d-11e9-acdd-cde4bebe951f', '99351f90-371d-11e9-8fe2-0548e2b21e55', 'Agree', 2, '2019-02-22 20:46:27', '2019-02-22 20:46:27', NULL),
('99573830-371d-11e9-9b92-6dfeeeabef2a', '99351f90-371d-11e9-8fe2-0548e2b21e55', 'Strongly Agree', 1, '2019-02-22 20:46:27', '2019-02-22 20:46:27', NULL),
('99958170-371b-11e9-ab9e-dd44d63abe39', '99855410-371b-11e9-acda-0d2d63c28f65', 'Strongly Disagree', 4, '2019-02-22 20:32:09', '2019-02-22 20:32:09', NULL),
('99a49e50-371b-11e9-9fd1-3f601b156483', '99855410-371b-11e9-acda-0d2d63c28f65', 'Disagree', 3, '2019-02-22 20:32:09', '2019-02-22 20:32:09', NULL),
('99ba8bc0-371b-11e9-9479-39d9e1702736', '99855410-371b-11e9-acda-0d2d63c28f65', 'Agree', 2, '2019-02-22 20:32:09', '2019-02-22 20:32:09', NULL),
('99c14350-371b-11e9-988c-4d53a9f64df7', '99855410-371b-11e9-acda-0d2d63c28f65', 'Strongly Agree', 1, '2019-02-22 20:32:09', '2019-02-22 20:32:09', NULL),
('9be2a560-371e-11e9-8d20-37dcacc2dcf5', '9bdc1120-371e-11e9-8257-511b031713bb', 'Strongly Disagree', 4, '2019-02-22 20:53:41', '2019-02-22 20:53:41', NULL),
('9beb0330-371e-11e9-975b-61aa1b56e18a', '9bdc1120-371e-11e9-8257-511b031713bb', 'Disagree', 3, '2019-02-22 20:53:41', '2019-02-22 20:53:41', NULL),
('9bf1b970-371e-11e9-9132-131c8a979ead', '9bdc1120-371e-11e9-8257-511b031713bb', 'Agree', 2, '2019-02-22 20:53:41', '2019-02-22 20:53:41', NULL),
('9bf885b0-371e-11e9-bdd7-d1c6ff09946a', '9bdc1120-371e-11e9-8257-511b031713bb', 'Strongly Agree', 1, '2019-02-22 20:53:41', '2019-02-22 20:53:41', NULL),
('a3ae2b70-3721-11e9-8249-a19ab9d45f28', 'a3a56630-3721-11e9-89db-e7ea1b2cfdf5', 'Mencoba untuk berempati pada Rafi, dan membuatnya mengerti bahwa perannya sangat penting dalam pencapaian target tim, dan mengapa apa yang terjadi padanya saat ini bisa berdampak negatif pada semangat kerja dan budaya kerja tim.', 3, '2019-02-22 21:15:23', '2019-02-22 21:15:23', NULL),
('a3b9ed10-3721-11e9-860c-43ad7b78a095', 'a3a56630-3721-11e9-89db-e7ea1b2cfdf5', 'Memberikannya ruang dan waktu dan berharap agar segala sesuatunya akan kembali seperti sebagaimana mestinya.', 1, '2019-02-22 21:15:23', '2019-02-22 21:15:23', NULL),
('a3c255f0-3721-11e9-8b02-5124c41c4f27', 'a3a56630-3721-11e9-89db-e7ea1b2cfdf5', 'Menekankan pada hal-hal spesifik tertentu yang memang selama ini belum pernah dibahas sebelumnya pada Rafi. Memberikannya contoh mengenai apa yang bisa ia lakukan untuk meningkatkan performancenya.', 4, '2019-02-22 21:15:23', '2019-02-22 21:15:23', NULL),
('a3e26d20-3721-11e9-a06c-6d996a41703b', 'a3a56630-3721-11e9-89db-e7ea1b2cfdf5', 'Menanyakan apakah ia perlu bantuan dan menawarkan bantuan padanya dengan senang hati.', 2, '2019-02-22 21:15:23', '2019-02-22 21:15:23', NULL),
('a7978e50-371d-11e9-a6d5-b557f6ea0324', 'a788a3d0-371d-11e9-9bd2-930309c81da6', 'Strongly Disagree', 4, '2019-02-22 20:46:51', '2019-02-22 20:46:51', NULL),
('a7a55230-371d-11e9-82e0-437b917a9951', 'a788a3d0-371d-11e9-9bd2-930309c81da6', 'Disagree', 3, '2019-02-22 20:46:51', '2019-02-22 20:46:51', NULL),
('a7b477f0-371d-11e9-b09b-c1a19302f6f9', 'a788a3d0-371d-11e9-9bd2-930309c81da6', 'Agree', 2, '2019-02-22 20:46:51', '2019-02-22 20:46:51', NULL),
('a7c04150-371d-11e9-a3d5-b545cbcff048', 'a788a3d0-371d-11e9-9bd2-930309c81da6', 'Strongly Agree', 1, '2019-02-22 20:46:51', '2019-02-22 20:46:51', NULL),
('a98a8a00-371f-11e9-aec5-9522f0208cba', 'a9776670-371f-11e9-89fa-bdc49001be72', 'Strongly Disagree', 4, '2019-02-22 21:01:13', '2019-02-22 21:01:13', NULL),
('a9a57e90-371f-11e9-a1be-137b3c645221', 'a9776670-371f-11e9-89fa-bdc49001be72', 'Disagree', 3, '2019-02-22 21:01:14', '2019-02-22 21:01:14', NULL),
('a9ade490-371f-11e9-aa7d-e3400072ee38', 'a9776670-371f-11e9-89fa-bdc49001be72', 'Agree', 2, '2019-02-22 21:01:14', '2019-02-22 21:01:14', NULL),
('a9b656a0-371f-11e9-9af2-1d1d94ba7c37', 'a9776670-371f-11e9-89fa-bdc49001be72', 'Strongly Agree', 1, '2019-02-22 21:01:14', '2019-02-22 21:01:14', NULL),
('acd73500-371e-11e9-ac46-ddbed3fe909d', 'acc73f30-371e-11e9-83a7-6bc627433a5e', 'Strongly Disagree', 1, '2019-02-22 20:54:09', '2019-02-22 20:54:09', NULL),
('acf58730-371e-11e9-ad44-37b14f2f1efe', 'acc73f30-371e-11e9-83a7-6bc627433a5e', 'Disagree', 2, '2019-02-22 20:54:10', '2019-02-22 20:54:10', NULL),
('ad0660c0-371e-11e9-b097-d57f21ea0a5b', 'acc73f30-371e-11e9-83a7-6bc627433a5e', 'Agree', 3, '2019-02-22 20:54:10', '2019-02-22 20:54:10', NULL),
('ad0ec5d0-371e-11e9-813f-87b8f539dda6', 'acc73f30-371e-11e9-83a7-6bc627433a5e', 'Strongly Agree', 4, '2019-02-22 20:54:10', '2019-02-22 20:54:10', NULL),
('ade22660-3722-11e9-b51c-e72e7a4fe390', 'adcf2db0-3722-11e9-ae1c-fbf5773b8992', 'Menerima bahwa seharusnya Anda terlebih dahulu menginformasikan Pimpinan Proyek tersebut. Anda juga perlu menjelaskan pentingnya situasi yang terjadi sehingga diperlukan tindakan lebih lanjut, mengingat terbatasnya sumber daya. Anda juga meminta maaf atas ketidaknyamanan yang terjadi.', 4, '2019-02-22 21:22:49', '2019-02-22 21:22:49', NULL),
('ae005f80-3722-11e9-8dd4-cdb801d79543', 'adcf2db0-3722-11e9-ae1c-fbf5773b8992', 'Anda meminta maaf atas ketidaknyamanan yang ditimbulkan. Anda menawarkan kompensasi dengan akan adanya tim Anda juga bisa mengalokasikan waktu lebih banyak di proyek lain.', 3, '2019-02-22 21:22:49', '2019-02-22 21:22:49', NULL),
('af2674b0-3722-11e9-aae4-7526351c5310', 'adcf2db0-3722-11e9-ae1c-fbf5773b8992', 'Bertahan bahwa tindakan Anda benar dan menekankan pentingnya peran dari kedua anggota tim tersebut untuk terlibat penuh di waktu tersebut', 2, '2019-02-22 21:22:51', '2019-02-22 21:22:51', NULL),
('af375130-3722-11e9-9cfe-411567cc6db5', 'adcf2db0-3722-11e9-ae1c-fbf5773b8992', 'Anda mengabaikan kekecewaan tersebut dan fokus pada proyek Anda sendiri. Anda memprioritaskan tugas, dan Anda hanya butuh untuk memastikan bahwa tugas terselesaikan dengan baik.', 1, '2019-02-22 21:22:51', '2019-02-22 21:22:51', NULL),
('b0be3b20-371b-11e9-89ac-131b9d51d22e', 'b0aff390-371b-11e9-93d0-07f0066af809', 'Strongly Disagree', 1, '2019-02-22 20:32:48', '2019-02-22 20:32:48', NULL),
('b0dfd760-371b-11e9-a4e2-0d79ffc2bdf5', 'b0aff390-371b-11e9-93d0-07f0066af809', 'Disagree', 2, '2019-02-22 20:32:48', '2019-02-22 20:32:48', NULL),
('b0f409b0-371b-11e9-a3e3-3f9a6ac1ed5f', 'b0aff390-371b-11e9-93d0-07f0066af809', 'Agree', 3, '2019-02-22 20:32:48', '2019-02-22 20:32:48', NULL),
('b0fac470-371b-11e9-87ac-ff4874fa7f95', 'b0aff390-371b-11e9-93d0-07f0066af809', 'Strongly Agree', 4, '2019-02-22 20:32:48', '2019-02-22 20:32:48', NULL),
('b825f900-371d-11e9-a811-01e11515f1c7', 'b81a2590-371d-11e9-9b78-07ba394b0749', 'Strongly Disagree', 4, '2019-02-22 20:47:19', '2019-02-22 20:47:19', NULL),
('b85f1d70-371d-11e9-9cee-25ac7695ef77', 'b81a2590-371d-11e9-9b78-07ba394b0749', 'Disagree', 3, '2019-02-22 20:47:19', '2019-02-22 20:47:19', NULL),
('b86e48c0-371d-11e9-82df-61cded90244d', 'b81a2590-371d-11e9-9b78-07ba394b0749', 'Agree', 2, '2019-02-22 20:47:19', '2019-02-22 20:47:19', NULL),
('b8750260-371d-11e9-ab7c-c985174b1e12', 'b81a2590-371d-11e9-9b78-07ba394b0749', 'Strongly Agree', 1, '2019-02-22 20:47:19', '2019-02-22 20:47:19', NULL),
('b98037d0-371f-11e9-9836-69227a16ea71', 'b977aa70-371f-11e9-aa59-59ddd05b6a35', 'Strongly Disagree', 4, '2019-02-22 21:01:40', '2019-02-22 21:01:40', NULL),
('b988a920-371f-11e9-87ec-cd1046fe3673', 'b977aa70-371f-11e9-aa59-59ddd05b6a35', 'Disagree', 3, '2019-02-22 21:01:40', '2019-02-22 21:01:40', NULL),
('b99e8840-371f-11e9-b7da-e5ee174f67b9', 'b977aa70-371f-11e9-aa59-59ddd05b6a35', 'Agree', 2, '2019-02-22 21:01:40', '2019-02-22 21:01:40', NULL),
('b9a6f600-371f-11e9-8cce-bd04a3ce72e7', 'b977aa70-371f-11e9-aa59-59ddd05b6a35', 'Strongly Agree', 1, '2019-02-22 21:01:40', '2019-02-22 21:01:40', NULL),
('bccde570-371e-11e9-9127-e35c75c4c6b0', 'bcc68820-371e-11e9-be0a-1d90a7e51585', 'Strongly Disagree', 4, '2019-02-22 20:54:36', '2019-02-22 20:54:36', NULL),
('bcd48950-371e-11e9-aad9-c369d75d05ac', 'bcc68820-371e-11e9-be0a-1d90a7e51585', 'Disagree', 3, '2019-02-22 20:54:36', '2019-02-22 20:54:36', NULL),
('bcdb4790-371e-11e9-ba82-ff325c4d4943', 'bcc68820-371e-11e9-be0a-1d90a7e51585', 'Agree', 2, '2019-02-22 20:54:36', '2019-02-22 20:54:36', NULL),
('bcf15090-371e-11e9-a952-570a111c3c55', 'bcc68820-371e-11e9-be0a-1d90a7e51585', 'Strongly Agree', 1, '2019-02-22 20:54:36', '2019-02-22 20:54:36', NULL),
('c7da69a0-371f-11e9-a185-3b311ad0e90e', 'c7d242e0-371f-11e9-a1a1-25be439893bf', 'Strongly Disagree', 4, '2019-02-22 21:02:04', '2019-02-22 21:02:04', NULL),
('c7e117a0-371f-11e9-9b90-03e965f80588', 'c7d242e0-371f-11e9-a1a1-25be439893bf', 'Disagree', 3, '2019-02-22 21:02:04', '2019-02-22 21:02:04', NULL),
('c7e7d780-371f-11e9-90ea-e5c0e19148ac', 'c7d242e0-371f-11e9-a1a1-25be439893bf', 'Agree', 2, '2019-02-22 21:02:04', '2019-02-22 21:02:04', NULL),
('c7f55310-371f-11e9-bb5e-072c81c99ccc', 'c7d242e0-371f-11e9-a1a1-25be439893bf', 'Strongly Agree', 1, '2019-02-22 21:02:04', '2019-02-22 21:02:04', NULL),
('cdfdfff0-371b-11e9-b7b0-5b75a6d36288', 'cdf1e330-371b-11e9-84a0-632cb2a5815e', 'Strongly Disagree', 4, '2019-02-22 20:33:37', '2019-02-22 20:33:37', NULL),
('ce04c5b0-371b-11e9-8d81-b53256bb16b5', 'cdf1e330-371b-11e9-84a0-632cb2a5815e', 'Disagree', 3, '2019-02-22 20:33:37', '2019-02-22 20:33:37', NULL),
('ce1089d0-371b-11e9-b993-dbe9d12cb0e4', 'cdf1e330-371b-11e9-84a0-632cb2a5815e', 'Agree', 2, '2019-02-22 20:33:37', '2019-02-22 20:33:37', NULL),
('ce307c70-371b-11e9-90c9-f3d0f8f81d9a', 'cdf1e330-371b-11e9-84a0-632cb2a5815e', 'Strongly Agree', 1, '2019-02-22 20:33:37', '2019-02-22 20:33:37', NULL),
('d047e320-371d-11e9-b2f8-83ba10a84d3d', 'd0378b50-371d-11e9-ad29-b312e858bd1d', 'Strongly Disagree', 1, '2019-02-22 20:47:59', '2019-02-22 20:47:59', NULL),
('d04e9d60-371d-11e9-9c03-556db174ff33', 'd0378b50-371d-11e9-ad29-b312e858bd1d', 'Disagree', 2, '2019-02-22 20:47:59', '2019-02-22 20:47:59', NULL),
('d05dbb80-371d-11e9-9146-97da2fdc7496', 'd0378b50-371d-11e9-ad29-b312e858bd1d', 'Agree', 3, '2019-02-22 20:48:00', '2019-02-22 20:48:00', NULL),
('d073ac40-371d-11e9-9f6f-db1cfd5700b0', 'd0378b50-371d-11e9-ad29-b312e858bd1d', 'Strongly Agree', 4, '2019-02-22 20:48:00', '2019-02-22 20:48:00', NULL),
('d0b80080-371e-11e9-8147-fd09f8e917d0', 'd0b0c6d0-371e-11e9-b6a2-4fea23fec165', 'Strongly Disagree', 4, '2019-02-22 20:55:10', '2019-02-22 20:55:10', NULL),
('d0beb440-371e-11e9-a4ef-e7eec5159dae', 'd0b0c6d0-371e-11e9-b6a2-4fea23fec165', 'Disagree', 3, '2019-02-22 20:55:10', '2019-02-22 20:55:10', NULL),
('d0c57760-371e-11e9-ac0f-590d6aaa0336', 'd0b0c6d0-371e-11e9-b6a2-4fea23fec165', 'Agree', 2, '2019-02-22 20:55:10', '2019-02-22 20:55:10', NULL),
('d0cc32c0-371e-11e9-a995-db8b6f968ed8', 'd0b0c6d0-371e-11e9-b6a2-4fea23fec165', 'Strongly Agree', 1, '2019-02-22 20:55:10', '2019-02-22 20:55:10', NULL),
('d94c4980-371f-11e9-8b97-99686d68540d', 'd94313d0-371f-11e9-bea5-058a460079aa', 'Strongly Disagree', 4, '2019-02-22 21:02:34', '2019-02-22 21:02:34', NULL),
('d954acd0-371f-11e9-a8a3-b1ed1cd686e1', 'd94313d0-371f-11e9-bea5-058a460079aa', 'Disagree', 3, '2019-02-22 21:02:34', '2019-02-22 21:02:34', NULL),
('d9607290-371f-11e9-81ed-a9bb3a508f5e', 'd94313d0-371f-11e9-bea5-058a460079aa', 'Agree', 2, '2019-02-22 21:02:34', '2019-02-22 21:02:34', NULL),
('d9806ab0-371f-11e9-8467-47a49ff05328', 'd94313d0-371f-11e9-bea5-058a460079aa', 'Strongly Agree', 1, '2019-02-22 21:02:34', '2019-02-22 21:02:34', NULL),
('db680380-3722-11e9-a8da-13634bfbfa4e', 'db60c9f0-3722-11e9-97ad-5f5efbbb4302', 'Anda menginformasikan tim Anda mengenai perubahan yang akan terjadi dan keputusan yang baru-baru ini diambil oleh management. Anda menjelaskan mengenai kemungkinan adanya kenaikan gaji tahunan akan terjadi di tahun berikutnya secara rapel, sehingga diharapkan hal ini dapat menjamin tim Anda akan tetap bersama Anda.', 2, '2019-02-22 21:24:06', '2019-02-22 21:24:06', NULL),
('db721f00-3722-11e9-9e60-a3b7e16f7194', 'db60c9f0-3722-11e9-97ad-5f5efbbb4302', 'Anda menginformasikan tim Anda mengenai perubahan yang ditetapkan oleh perusahaan yang telah mengakuisisi perusahaan Anda, terutama perubahan dalam peran mereka di pekerjaan dan struktur gaji. Minta mereka untuk menghubungi Tim HR untuk meminta klarifikasi ataupun menyampaikan permonohon mereka.', 3, '2019-02-22 21:24:06', '2019-02-22 21:24:06', NULL),
('db78db20-3722-11e9-ae92-0308017812a8', 'db60c9f0-3722-11e9-97ad-5f5efbbb4302', 'Anda mengapresiasi kontribusi anggota tim Anda terhadap organisasi, dan menjelaskan kembali mengenai peluang karir yang mereka miliki di organisasi. Fokus pada hasil yang positif dari akuisisi yang terjadi.', 1, '2019-02-22 21:24:06', '2019-02-22 21:24:06', NULL),
('db7f9ba0-3722-11e9-a70b-4d2955605644', 'db60c9f0-3722-11e9-97ad-5f5efbbb4302', 'Anda menemui tim Anda satu per satu dan menjelaskan alasan dibalik keputusan yang dibuat. Anda janjikan kepada mereka mengenai adanya sumber daya yang bisa mereka dapatkan dan dukungan yang akan diberikan organisasi untuk membantu mereka dalam menghadapi perubahan yang terjadi.', 4, '2019-02-22 21:24:06', '2019-02-22 21:24:06', NULL),
('df083b10-371d-11e9-b8b2-478556f51b35', 'deed4160-371d-11e9-8a1b-95e7032bb64d', 'Strongly Disagree', 4, '2019-02-22 20:48:24', '2019-02-22 20:48:24', NULL),
('df175f60-371d-11e9-be22-117b7e11df6d', 'deed4160-371d-11e9-8a1b-95e7032bb64d', 'Disagree', 3, '2019-02-22 20:48:24', '2019-02-22 20:48:24', NULL),
('df1e19f0-371d-11e9-bdb7-f5996e342015', 'deed4160-371d-11e9-8a1b-95e7032bb64d', 'Agree', 2, '2019-02-22 20:48:24', '2019-02-22 20:48:24', NULL),
('df24d670-371d-11e9-afda-11e9fc238d99', 'deed4160-371d-11e9-8a1b-95e7032bb64d', 'Strongly Agree', 1, '2019-02-22 20:48:24', '2019-02-22 20:48:24', NULL),
('e1758cd0-3721-11e9-a918-5d09419755d8', 'e1686dd0-3721-11e9-8374-9f17337cdc46', 'Mencari alternatif suplier yang dapat memproduksi bahan mentah yang mirip dan meminta tambahan tenaga kerja untuk mengakselerasi proses pengujian bahan.', 2, '2019-02-22 21:17:06', '2019-02-22 21:17:06', NULL),
('e17df7a0-3721-11e9-88f6-d9862f1b38c7', 'e1686dd0-3721-11e9-8374-9f17337cdc46', 'Mencari supplier alternatif dengan juga berupaya mempengaruhi supplier yang ada saat ini untuk memproduksi bahan mentah yang sama untuk perusahaan Anda. Anda kemudian menyetujui model harga yang berdasarkan pada volume (volume based pricing model) untuk mengkompensasi profit yang menjadi lebih rendah yang disebabkan oleh mereka.', 4, '2019-02-22 21:17:06', '2019-02-22 21:17:06', NULL),
('e184b890-3721-11e9-bc03-a999afe1a133', 'e1686dd0-3721-11e9-8374-9f17337cdc46', 'Mendapatkan dana tambahan untuk proyek ini. Mempengaruhi supplier untuk memproduksi bahan mentah dengan harga yang lebih tinggi daripada yang sebelumnya, sampai volume yang ada mencapai level yang diinginkan.', 3, '2019-02-22 21:17:06', '2019-02-22 21:17:06', NULL),
('e18f07f0-3721-11e9-a5a8-e9a2d88020d4', 'e1686dd0-3721-11e9-8374-9f17337cdc46', 'Tidak menghabiskan banyak waktu untuk mempengaruhi supplier yang ada saat ini. Mencari alternatif supplier yang dapat merancang bahan mentah yang mirip dan mulai memproduksi lagi.', 1, '2019-02-22 21:17:06', '2019-02-22 21:17:06', NULL),
('e8c92a00-371e-11e9-9880-510acebcac4f', 'e8c07b70-371e-11e9-94dd-1fbac805eb2a', 'Strongly Disagree', 4, '2019-02-22 20:55:50', '2019-02-22 20:55:50', NULL),
('e8d17570-371e-11e9-b0d4-55a902065a2c', 'e8c07b70-371e-11e9-94dd-1fbac805eb2a', 'Disagree', 3, '2019-02-22 20:55:50', '2019-02-22 20:55:50', NULL),
('e8d9e230-371e-11e9-96c7-3934cab11424', 'e8c07b70-371e-11e9-94dd-1fbac805eb2a', 'Agree', 2, '2019-02-22 20:55:50', '2019-02-22 20:55:50', NULL),
('e8e256b0-371e-11e9-89b9-13c7f38498e7', 'e8c07b70-371e-11e9-94dd-1fbac805eb2a', 'Strongly Agree', 1, '2019-02-22 20:55:50', '2019-02-22 20:55:50', NULL),
('ecade8c0-371b-11e9-86a5-1f706919f17b', 'eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'Strongly Disagree', 1, '2019-02-22 20:34:28', '2019-02-22 20:34:28', NULL),
('ecbd0fc0-371b-11e9-8a47-5bb8288e0998', 'eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'Disagree', 2, '2019-02-22 20:34:28', '2019-02-22 20:34:28', NULL),
('ecc58390-371b-11e9-b725-1b5cd3870148', 'eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'Agree', 3, '2019-02-22 20:34:28', '2019-02-22 20:34:28', NULL),
('ecd14310-371b-11e9-88f1-31a158df2316', 'eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'Strongly Agree', 4, '2019-02-22 20:34:28', '2019-02-22 20:34:28', NULL),
('ed5b8200-371f-11e9-bd5f-db20625a8a5e', 'ed51fe70-371f-11e9-8880-c96cadedab3f', 'Strongly Disagree', 1, '2019-02-22 21:03:07', '2019-02-22 21:03:07', NULL),
('ed623ba0-371f-11e9-9d59-c94a8e9eba9b', 'ed51fe70-371f-11e9-8880-c96cadedab3f', 'Disagree', 2, '2019-02-22 21:03:07', '2019-02-22 21:03:07', NULL),
('ed6aa550-371f-11e9-88d3-8f0aa1e06383', 'ed51fe70-371f-11e9-8880-c96cadedab3f', 'Agree', 3, '2019-02-22 21:03:07', '2019-02-22 21:03:07', NULL),
('ed7826b0-371f-11e9-8a74-f33d2f0876fa', 'ed51fe70-371f-11e9-8880-c96cadedab3f', 'Strongly Agree', 4, '2019-02-22 21:03:07', '2019-02-22 21:03:07', NULL),
('f25002f0-371c-11e9-9f88-01ec70b97eef', 'f2476000-371c-11e9-a180-7dfe68678022', 'Strongly Disagree', 4, '2019-02-22 20:41:47', '2019-02-22 20:41:47', NULL),
('f2586180-371c-11e9-8a38-67323d020405', 'f2476000-371c-11e9-a180-7dfe68678022', 'Disagree', 3, '2019-02-22 20:41:47', '2019-02-22 20:41:47', NULL),
('f2786c30-371c-11e9-9f02-3dbae6cdfb9f', 'f2476000-371c-11e9-a180-7dfe68678022', 'Agree', 2, '2019-02-22 20:41:47', '2019-02-22 20:41:47', NULL),
('f27f2810-371c-11e9-acec-7ff3b9bd44b2', 'f2476000-371c-11e9-a180-7dfe68678022', 'Strongly Agree', 1, '2019-02-22 20:41:47', '2019-02-22 20:41:47', NULL),
('f884f980-371d-11e9-a8ee-ff4f4d7f9e46', 'f879e020-371d-11e9-85dc-b3ac1078f321', 'Strongly Disagree', 4, '2019-02-22 20:49:07', '2019-02-22 20:49:07', NULL),
('f88d4c30-371d-11e9-8704-997ce1c5be01', 'f879e020-371d-11e9-85dc-b3ac1078f321', 'Disagree', 3, '2019-02-22 20:49:07', '2019-02-22 20:49:07', NULL),
('f8976d90-371d-11e9-a008-256904aa9919', 'f879e020-371d-11e9-85dc-b3ac1078f321', 'Agree', 2, '2019-02-22 20:49:07', '2019-02-22 20:49:07', NULL),
('f89fd1e0-371d-11e9-8000-5f7329dbeae9', 'f879e020-371d-11e9-85dc-b3ac1078f321', 'Strongly Agree', 1, '2019-02-22 20:49:07', '2019-02-22 20:49:07', NULL),
('ff5c1990-371f-11e9-9f5f-f1524984ed6d', 'ff4c3480-371f-11e9-9992-0bffb8dc7e5e', 'Strongly Disagree', 1, '2019-02-22 21:03:37', '2019-02-22 21:03:37', NULL),
('ff647ce0-371f-11e9-b4e7-07fc9b62256d', 'ff4c3480-371f-11e9-9992-0bffb8dc7e5e', 'Disagree', 2, '2019-02-22 21:03:37', '2019-02-22 21:03:37', NULL),
('ff6ceed0-371f-11e9-9265-35af8c7799f3', 'ff4c3480-371f-11e9-9992-0bffb8dc7e5e', 'Agree', 3, '2019-02-22 21:03:38', '2019-02-22 21:03:38', NULL),
('ff73a910-371f-11e9-aab0-132fd862feab', 'ff4c3480-371f-11e9-9992-0bffb8dc7e5e', 'Strongly Agree', 4, '2019-02-22 21:03:38', '2019-02-22 21:03:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_assesments`
--

CREATE TABLE `jenis_assesments` (
  `id` char(36) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `no_urut_assesment` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_assesments`
--

INSERT INTO `jenis_assesments` (`id`, `nama`, `no_urut_assesment`, `created_at`, `updated_at`, `deleted_at`) VALUES
('9d6c0c80-17b2-11e9-b5c7-4d0cdaf120e2', 'Tes Kompetensi Kerja', 1, '2019-01-13 21:12:32', '2019-01-13 21:12:32', NULL),
('a981f610-1179-11e9-b9ab-07c4a9277062', 'Minat Bidang', 3, '2019-01-05 23:09:44', '2019-01-07 21:29:24', NULL),
('d2fc5f20-3ef5-11e9-a0c7-a3466dee24d3', 'Pengembangan Intelektuals', 5, '2019-03-04 20:21:53', '2019-03-04 20:34:32', '2019-03-04 20:34:32'),
('dc663170-3501-11e9-9999-63ce6a70ca04', 'Kuliah/Kerja', 2, '2019-02-20 11:24:09', NULL, NULL),
('ee20f8a0-0809-11e9-b5ff-95805e3671f5', 'Testing', NULL, '2018-12-24 22:57:15', '2019-01-03 06:26:39', '2019-01-03 06:26:39'),
('f5eaceb0-080b-11e9-a614-c9381f011e11', 'Coba', NULL, '2018-12-24 23:11:47', '2019-01-03 06:26:34', '2019-01-03 06:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `keteranganhasils`
--

CREATE TABLE `keteranganhasils` (
  `id` char(36) NOT NULL,
  `keterangan_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `hasil_kompetensi` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keteranganhasils`
--

INSERT INTO `keteranganhasils` (`id`, `keterangan_id`, `kompetensi_id`, `hasil_kompetensi`, `created_at`, `updated_at`, `deleted_at`) VALUES
('02d251a0-39dd-11e9-bf04-55f0c7c6783c', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '59050b10-0f5c-11e9-b920-5112040e5cec', '<p>Memerlukan pengembangan signifikan dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '2019-02-26 08:41:40', '2019-02-26 08:41:40', NULL),
('04e6e4b0-368f-11e9-995d-6fa0962fa050', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Menunjukkan kemampuan&nbsp;yang cukup baik dalam&nbsp;menyesuaikan gaya&nbsp;interaksi dengan kondisi&nbsp;emosi/perasaan orang lain.</p>', '2019-02-22 03:45:50', '2019-02-22 21:49:11', '2019-02-22 21:49:11'),
('15621180-3728-11e9-8311-a17a1470e065', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '01df0360-0f5c-11e9-860b-fb3757928a71', '<p>Memerlukan pengembangan dalam menangkap kebutuhan pelanggan dan memenuhinya.</p>', '2019-02-22 22:01:30', '2019-02-22 22:01:30', NULL),
('18251a60-3727-11e9-97d1-333b41ae184b', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '<p>Menunjukkan kemampuan yang baik dalam mengikuti aturan dalam bekerja.</p>', '2019-02-22 21:54:25', '2019-02-22 21:54:25', NULL),
('1934c670-39dd-11e9-b679-417e9a72ba1a', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '59050b10-0f5c-11e9-b920-5112040e5cec', '<p>Memerlukan pengembangan dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah disusun.</p>', '2019-02-26 08:42:18', '2019-02-26 08:42:18', NULL),
('194df440-368f-11e9-bc7f-cb0dbb9154c9', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Menunjukkan kemampuan&nbsp;yang baik dalam&nbsp;menyesuaikan gaya interaksi&nbsp;dengan kondisi<br />\nemosi/perasaan orang lain.</p>', '2019-02-22 03:46:24', '2019-02-22 21:49:17', '2019-02-22 21:49:17'),
('1f3a65c0-3728-11e9-ab43-6f753544d9c3', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '01df0360-0f5c-11e9-860b-fb3757928a71', '<p>Menunjukkan kemampuan yang cukup baik dalam menangkap kebutuhan pelanggan dan memenuhinya.</p>', '2019-02-22 22:01:47', '2019-02-22 22:01:47', NULL),
('2a6638e0-3728-11e9-8c39-2d4ea21eefcb', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '01df0360-0f5c-11e9-860b-fb3757928a71', '<p>Menunjukkan kemampuan yang baik dalam menangkap kebutuhan pelanggan dan memenuhinya.</p>', '2019-02-22 22:02:06', '2019-02-22 22:02:06', NULL),
('2da0f060-39dd-11e9-adbf-09c97ddc8f70', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '59050b10-0f5c-11e9-b920-5112040e5cec', '<p>Menunjukkan kemampuan yang cukup baik dalam menyusun perencanaan<br />\nkerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan<br />\nyang telah disusun.</p>', '2019-02-26 08:42:52', '2019-02-26 08:42:52', NULL),
('2e0d0640-3727-11e9-a65b-0fa5926a1528', 'b3cdae70-35c0-11e9-8691-2f7477988f43', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '<p>Memerlukan pengembangan signifikan dalam menyampaikan pesan secara jelas dan mudah dipahami lawan bicara.</p>', '2019-02-22 21:55:02', '2019-02-22 21:55:02', NULL),
('2fa78150-39db-11e9-b6e0-37fbb92ccd97', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '<p>Memerlukan pengembangan dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-02-26 08:28:37', '2019-02-26 08:28:37', NULL),
('3c2c4040-3728-11e9-8583-d17114638224', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Memerlukan pengembangan signifikan dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-02-22 22:02:35', '2019-02-22 22:02:35', NULL),
('3c9f5740-3727-11e9-b1ed-8155123439e8', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '<p>Memerlukan pengembangan dalam menyampaikan pesan secara jelas dan mudah dipahami lawan bicara.</p>', '2019-02-22 21:55:27', '2019-02-22 21:55:27', NULL),
('3cae6680-39dd-11e9-9caa-e57eba06aee5', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '59050b10-0f5c-11e9-b920-5112040e5cec', '<p>Menunjukkan kemampuan yang baik dalam menyusun perencanaan kerja, baik dari sisi waktu maupun sumber daya, dan menjalankan perencanaan yang telah<br />\ndisusun.</p>', '2019-02-26 08:43:18', '2019-02-26 08:43:18', NULL),
('489af000-3727-11e9-84b0-25ee55fb963f', 'd386b510-35c0-11e9-ab29-531d8cb6867b', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '<p>Menunjukkan kemampuan yang cukup baik dalam menyampaikan pesan secara jelas dan mudah dipahami lawan bicara.</p>', '2019-02-22 21:55:47', '2019-02-22 21:55:47', NULL),
('48f5b920-3728-11e9-9574-d7155ea9dfaf', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Memerlukan pengembangan dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-02-22 22:02:57', '2019-02-22 22:02:57', NULL),
('4c7d0e60-39dd-11e9-a48c-0f569729d642', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '<p>Memerlukan pengembangan signifikan dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-02-26 08:43:44', '2019-02-26 08:43:44', NULL),
('53242750-3728-11e9-8bdc-0b53359a294f', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Menunjukkan kemampuan yang cukup baik dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-02-22 22:03:14', '2019-02-22 22:03:14', NULL),
('58ca0040-3727-11e9-ba5a-a94951e79115', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '<p>Menunjukkan kemampuan yang baik dalam menyampaikan pesan secara jelas dan mudah dipahami lawan bicara.</p>', '2019-02-22 21:56:14', '2019-02-22 21:56:14', NULL),
('5b7ded50-39dd-11e9-b7cd-0b2c308b2f71', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '<p>Memerlukan pengembangan dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-02-26 08:44:09', '2019-02-26 08:44:09', NULL),
('60ff60e0-3728-11e9-9e11-63ca0d12bc8f', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Menunjukkan kemampuan yang baik dalam menyesuaikan gaya interaksi dengan kondisi emosi/perasaan orang lain.</p>', '2019-02-22 22:03:37', '2019-02-22 22:03:37', NULL),
('65c9aa50-39dc-11e9-b30b-bb6ee719a073', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '<p>Memerlukan pengembangan dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-02-26 08:37:17', '2019-02-26 08:37:17', NULL),
('67a114f0-3727-11e9-bb61-032fd0d5d9a2', 'b3cdae70-35c0-11e9-8691-2f7477988f43', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '<p>Memerlukan pengembangan signifikan dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-02-22 21:56:39', '2019-02-22 21:57:07', NULL),
('6c2ef050-39dd-11e9-abe6-195ecc440e79', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '<p>Menunjukkan kemampuan yang cukup baik dalam mengarahkan anak buah<br />\nuntuk mencapai target.</p>', '2019-02-26 08:44:37', '2019-02-26 08:44:37', NULL),
('6d583050-3728-11e9-9787-6f9c2f11a912', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '487ce5c0-0f5c-11e9-991e-67af154c3146', '<p>Memerlukan pengembangan signifikan dalam menunjukkan inisiatif baru di lingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-02-22 22:03:58', '2019-02-22 22:03:58', NULL),
('7758fcb0-3728-11e9-8a0f-736bdb046ae6', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '487ce5c0-0f5c-11e9-991e-67af154c3146', '<p>Memerlukan pengembangan dalam menunjukkan inisiatif baru di lingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-02-22 22:04:15', '2019-02-22 22:04:15', NULL),
('791e2bc0-39dd-11e9-a0a0-7b83abae9974', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '<p>Menunjukkan kemampuan yang baik dalam mengarahkan anak buah untuk mencapai target.</p>', '2019-02-26 08:44:59', '2019-02-26 08:44:59', NULL),
('7a0c6a50-39dc-11e9-9aec-a508eb39e643', 'd386b510-35c0-11e9-ab29-531d8cb6867b', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '<p>Menunjukkan kemampuan yang cukup baik dalam mengarahkan seluruh usaha<br />\npada pencapaian hasil sesuai dengan prioritas.</p>', '2019-02-26 08:37:51', '2019-02-26 08:37:51', NULL),
('7eb233d0-3726-11e9-9698-c1ee862d6538', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '<p>Memerlukan pengembangan signifikan dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-02-22 21:50:08', '2019-02-22 21:50:08', NULL),
('8193cd20-3728-11e9-a379-59347978fddf', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '487ce5c0-0f5c-11e9-991e-67af154c3146', '<p>Menunjukkan kemampuan yang cukup baik dalam menunjukkan inisiatif baru di lingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-02-22 22:04:32', '2019-02-22 22:04:32', NULL),
('8ad07370-3727-11e9-83ee-c94d01a748bc', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '<p>Memerlukan pengembangan dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-02-22 21:57:38', '2019-02-22 21:57:38', NULL),
('8b555680-3728-11e9-9fe3-67bea653487b', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '487ce5c0-0f5c-11e9-991e-67af154c3146', '<p>Menunjukkan kemampuan yang baik dalam menunjukkan inisiatif baru di lingkup pekerjaan dan mengerjakan tugas secara mandiri.</p>', '2019-02-22 22:04:48', '2019-02-22 22:04:48', NULL),
('8f809f40-39dd-11e9-9370-79646dd8c95e', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '<p>Memerlukan pengembangan signifikan dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan<br />\nkerja.</p>', '2019-02-26 08:45:36', '2019-02-26 08:45:36', NULL),
('930c93d0-3fd4-11e9-9d03-bfb7f8152f4b', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '<p>adfasdfasfasfasdfasdfasfadf<strong>dfasfasdfasdf</strong></p>', '2019-03-05 22:56:24', '2019-03-05 22:57:04', '2019-03-05 22:57:04'),
('981127f0-3727-11e9-8071-8d76b8cd3d17', 'd386b510-35c0-11e9-ab29-531d8cb6867b', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '<p>Menunjukkan kemampuan yang cukup baik dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-02-22 21:58:00', '2019-02-22 21:58:00', NULL),
('a2c935f0-3726-11e9-a94b-0fc1b2403134', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '<p>Menunjukkan kemampuan yang cukup baik dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-02-22 21:51:09', '2019-02-22 21:51:09', NULL),
('a5664c60-3727-11e9-bedd-772d18450558', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '<p>Menunjukkan kemampuan yang baik dalam menghadapi tekanan dalam situasi kerja, baik yang terkait dengan tugas maupun lingkungan pekerjaan.</p>', '2019-02-22 21:58:22', '2019-02-22 21:58:22', NULL),
('a9fbfa20-39dd-11e9-ac4b-7b7eb593e893', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '<p>Memerlukan pengembangan dalam memberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '2019-02-26 08:46:21', '2019-02-26 08:46:21', NULL),
('abb26970-368e-11e9-94f3-974c6eadca18', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Memerlukan pengembangan signifikan dalam menyesuaikan&nbsp;gaya interaksi dengan kondisi<br />\nemosi/perasaan orang lain.</p>', '2019-02-22 03:43:20', '2019-02-22 21:48:57', '2019-02-22 21:48:57'),
('aecd6ce0-39dc-11e9-887c-85b03c6769c5', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '50c09a10-0f5c-11e9-bbb7-e94462002084', '<p>Memerlukan pengembangan signifikan dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-02-26 08:39:19', '2019-02-26 08:39:19', NULL),
('b1eb18f0-3726-11e9-ad14-e9df6761b5ff', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '<p>Menunjukkan kemampuan yang baik dalam mempengaruhi orang lain melalui argumentasi yang meyakinkan.</p>', '2019-02-22 21:51:34', '2019-02-22 21:51:34', NULL),
('b36ea340-3727-11e9-9bc3-f79967dca70f', 'b3cdae70-35c0-11e9-8691-2f7477988f43', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '<p>Memerlukan pengembangan signifikan dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-02-22 21:58:46', '2019-02-22 21:58:46', NULL),
('ba1f3950-39dd-11e9-80d7-ab338f4e41f6', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '<p>Menunjukkan kemampuan yang cukup baik dalam memberikan kontribusi<br />\npada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan kerja.</p>', '2019-02-26 08:46:48', '2019-02-26 08:46:48', NULL),
('c000d6a0-3727-11e9-b31b-0b162e60ccc3', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '<p>Memerlukan pengembangan dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-02-22 21:59:07', '2019-02-22 21:59:07', NULL),
('c09868c0-39dc-11e9-bf90-fd06bca9df2c', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '50c09a10-0f5c-11e9-bbb7-e94462002084', '<p>Memerlukan pengembangan dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-02-26 08:39:49', '2019-02-26 08:39:49', NULL),
('ca4579c0-3726-11e9-bedb-bb47002292b4', 'b3cdae70-35c0-11e9-8691-2f7477988f43', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '<p>Memerlukan pengembangan signifikan dalam mengikuti aturan dalam bekerja.</p>', '2019-02-22 21:52:15', '2019-02-22 21:52:15', NULL),
('cb2738b0-39dd-11e9-b362-bbffce4f621b', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '<p>Menunjukkan kemampuan yang baik dalammemberikan kontribusi pada pencapaian hasil kerja tim melalui berbagi sumber daya dengan rekan<br />\nkerja.</p>', '2019-02-26 08:47:17', '2019-02-26 08:47:17', NULL),
('ccbab4d0-368e-11e9-8179-d185099d6f2e', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '<p>Memerlukan&nbsp;pengembangan dalam&nbsp;menyesuaikan gaya&nbsp;interaksi dengan kondisi&nbsp;emosi/perasaan orang&nbsp;lain.</p>', '2019-02-22 03:44:15', '2019-02-22 21:49:04', '2019-02-22 21:49:04'),
('cd04d760-3727-11e9-a177-939749162440', 'd386b510-35c0-11e9-ab29-531d8cb6867b', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '<p>Menunjukkan kemampuan yang cukup baik dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas</p>', '2019-02-22 21:59:29', '2019-02-22 21:59:29', NULL),
('d55fbc20-39dc-11e9-a3cc-df9d4b31bb4c', 'd386b510-35c0-11e9-ab29-531d8cb6867b', '50c09a10-0f5c-11e9-bbb7-e94462002084', '<p>Menunjukkan kemampuan yang cukup baik dalam menangkap masalah dalam<br />\nproses kerja dan mengatasinya.</p>', '2019-02-26 08:40:24', '2019-02-26 08:40:24', NULL),
('da096dc0-3726-11e9-84d2-2139ddaadc6b', 'c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '<p>Memerlukan pengembangan dalam mengikuti aturan dalam bekerja.</p>', '2019-02-22 21:52:41', '2019-02-22 21:52:41', NULL),
('e4098bf0-39dc-11e9-ae67-d39d43ff8ce0', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', '50c09a10-0f5c-11e9-bbb7-e94462002084', '<p>Menunjukkan kemampuan yang baik dalam menangkap masalah dalam proses kerja dan mengatasinya.</p>', '2019-02-26 08:40:49', '2019-02-26 08:40:49', NULL),
('e87c9560-3727-11e9-8a8d-f91a7ff3da2d', 'dea073c0-35c0-11e9-a14a-f9c5ae351fef', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '<p>Menunjukkan kemampuan yang baik dalam mengarahkan seluruh usaha pada pencapaian hasil sesuai dengan prioritas.</p>', '2019-02-22 22:00:15', '2019-02-22 22:00:15', NULL),
('ec061ab0-3726-11e9-80b7-13d1183e3723', 'd386b510-35c0-11e9-ab29-531d8cb6867b', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '<p>Menunjukkan kemampuan yang cukup baik dalam mengikuti aturan dalam bekerja.</p>', '2019-02-22 21:53:11', '2019-02-22 21:53:11', NULL),
('f8f883b0-3727-11e9-9395-37fc74657f45', 'b3cdae70-35c0-11e9-8691-2f7477988f43', '01df0360-0f5c-11e9-860b-fb3757928a71', '<p>Memerlukan pengembangan signifikan dalam menangkap kebutuhan pelanggan dan memenuhinya.</p>', '2019-02-22 22:00:43', '2019-02-22 22:01:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_nilais`
--

CREATE TABLE `keterangan_nilais` (
  `id` char(36) NOT NULL,
  `range_score` int(11) DEFAULT NULL,
  `keterangan` text,
  `jenisketerangan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_nilais`
--

INSERT INTO `keterangan_nilais` (`id`, `range_score`, `keterangan`, `jenisketerangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0b98be40-3686-11e9-bb7b-35ab55c3e8d9', 5, '<p>adfasdf</p>', 'Kekuatan', '2019-02-22 02:41:35', '2019-02-22 02:46:08', '2019-02-22 02:46:08'),
('4d221a00-3fce-11e9-893f-0d33fe408681', 6, '<p>dsafsadfsadfsadfsdf</p>', 'Pengembangan', '2019-03-05 22:11:30', '2019-03-05 22:12:08', '2019-03-05 22:12:08'),
('b3cdae70-35c0-11e9-8691-2f7477988f43', 1, '<p>Membutuhkan pengembangan yang signifikan.</p>', 'Pengembangan', '2019-02-21 03:08:57', '2019-02-22 02:46:18', NULL),
('c8e8c8b0-35c0-11e9-8f5c-3908f78b3ec5', 2, '<p>Membutuhkan pengembangan.</p>', 'Pengembangan', '2019-02-21 03:09:33', '2019-02-22 02:46:26', NULL),
('d386b510-35c0-11e9-ab29-531d8cb6867b', 3, '<p>Cukup baik.</p>', 'Kekuatan', '2019-02-21 03:09:51', '2019-02-22 02:46:33', NULL),
('dea073c0-35c0-11e9-a14a-f9c5ae351fef', 4, '<p>Baik</p>', 'Kekuatan', '2019-02-21 03:10:09', '2019-02-22 02:46:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kompetensis`
--

CREATE TABLE `kompetensis` (
  `id` char(36) NOT NULL,
  `kompetensi` varchar(120) DEFAULT NULL,
  `definisi` text,
  `p_mandiri` text,
  `p_bermitra` text,
  `t_pelatihan` varchar(255) DEFAULT NULL,
  `no_urut_kompetensi` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensis`
--

INSERT INTO `kompetensis` (`id`, `kompetensi`, `definisi`, `p_mandiri`, `p_bermitra`, `t_pelatihan`, `no_urut_kompetensi`, `created_at`, `updated_at`, `deleted_at`) VALUES
('01df0360-0f5c-11e9-860b-fb3757928a71', 'Customer Service Orientation', NULL, NULL, NULL, NULL, 6, '2019-01-03 06:32:25', '2019-01-08 18:39:54', NULL),
('3123ae90-1301-11e9-a083-b92801323138', 'Asdfasdf', NULL, NULL, NULL, NULL, 14, '2019-01-07 21:52:25', '2019-01-07 21:58:08', '2019-01-07 21:58:08'),
('359ea130-0f5c-11e9-bfc7-89bf49dc6511', 'Self Control', NULL, NULL, NULL, NULL, 7, '2019-01-03 06:33:52', '2019-01-03 06:33:52', NULL),
('3c305910-3efb-11e9-add1-6b4a940bff8b', 'Asdfasdfasdf', '<p>asdfasdf</p>', '<p>asdfsda</p>', '<p>asdfsda</p>', '<p>asdfasdf</p>', 21, '2019-03-04 21:00:37', '2019-03-04 21:02:55', '2019-03-04 21:02:55'),
('416c4ce0-083d-11e9-a8e8-bbb7947cc632', 'Kompetensi', NULL, NULL, NULL, NULL, NULL, '2018-12-25 05:04:39', '2018-12-25 05:09:58', '2018-12-25 05:09:58'),
('487ce5c0-0f5c-11e9-991e-67af154c3146', 'Initiating Action (Proactive)', NULL, NULL, NULL, NULL, 8, '2019-01-03 06:34:23', '2019-01-08 18:41:15', NULL),
('50c09a10-0f5c-11e9-bbb7-e94462002084', 'Managing Work', NULL, NULL, NULL, NULL, 9, '2019-01-03 06:34:37', '2019-01-08 18:42:04', NULL),
('59050b10-0f5c-11e9-b920-5112040e5cec', 'Planning & Execution', NULL, NULL, NULL, NULL, 10, '2019-01-03 06:34:51', '2019-01-08 18:42:11', NULL),
('5ae72900-083d-11e9-8121-3f5b5323ecfe', 'Kompetensi 1', NULL, NULL, NULL, NULL, NULL, '2018-12-25 05:05:22', '2019-01-03 06:27:35', '2019-01-03 06:27:35'),
('60b99000-0f5c-11e9-9e8c-a1ca9f23143c', 'Leading Team', NULL, NULL, NULL, NULL, 11, '2019-01-03 06:35:04', '2019-01-08 18:41:33', NULL),
('6789fdf0-0f5c-11e9-836f-1d5cb49ab595', 'Collaboration', '<p><strong>sdlfg</strong></p>', '<p>sdfn</p>', '<p>sdofngo</p>', '<p>sdofgn</p>', 12, '2019-01-03 06:35:16', '2019-02-01 18:20:39', NULL),
('7be045d0-0f5b-11e9-8402-db52a8444bc8', 'Influencing', NULL, NULL, NULL, NULL, 1, '2019-01-03 06:28:40', '2019-01-08 18:37:32', NULL),
('913e1ad0-25da-11e9-b6a7-9bf2b8bfa89d', 'Asdfsad', 'Sadfas', 'Asdf', 'Asdf', 'Asdf', 30, '2019-01-31 21:33:48', '2019-02-01 00:35:17', '2019-02-01 00:35:17'),
('af73b4e0-25d9-11e9-a08d-2d3b45484022', 'Sadfas', NULL, NULL, NULL, NULL, 20, '2019-01-31 21:27:29', '2019-01-31 21:27:29', '2019-02-11 17:00:00'),
('b2963f70-0f5b-11e9-b9df-750c3f631f39', 'Compliance', NULL, NULL, NULL, NULL, 2, '2019-01-03 06:30:12', '2019-01-08 18:37:42', NULL),
('b8970090-0871-11e9-a614-b718d2a894aa', 'Kompetensi 2', NULL, NULL, NULL, NULL, NULL, '2018-12-25 11:20:13', '2019-01-03 06:27:41', '2019-01-03 06:27:41'),
('bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', 'Communication', '<p>dsfgs</p>', '<p>sdfg</p>', '<p>dsf</p>', '<p>sdf</p>', 3, '2019-01-03 06:30:33', '2019-02-01 03:53:09', NULL),
('cda265b0-0f5b-11e9-af00-7dbd8a2821eb', 'Stress Resilience', NULL, NULL, NULL, NULL, 4, '2019-01-03 06:30:57', '2019-01-03 06:30:57', NULL),
('d4bc3f90-2689-11e9-85ab-c1d5d1a895e5', 'Baru', '<p>sadf</p>', '<p>sdfg</p>', '<p>sdfg</p>', '<p>sdfg</p>', 90, '2019-02-01 18:28:23', '2019-02-01 18:28:38', '2019-02-01 18:28:38'),
('eb01f110-0f5b-11e9-9c79-a1aff1ef675f', 'Result Oriented', NULL, NULL, NULL, NULL, 5, '2019-01-03 06:31:47', '2019-01-08 18:38:31', NULL),
('ed62f6f0-25d9-11e9-937f-99de77f0866d', 'Asdfas', 'Sadfasdf', 'Asdf', 'Assdf', 'Asdf', 29, '2019-01-31 21:29:13', '2019-02-01 00:35:10', '2019-02-01 00:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasis`
--

CREATE TABLE `konfigurasis` (
  `id` int(11) NOT NULL,
  `konfigurasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasis`
--

INSERT INTO `konfigurasis` (`id`, `konfigurasi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '4', '2019-02-20 18:21:47', '2019-02-20 18:34:44', '2019-02-20 18:34:44'),
(55, '4', '2019-02-20 18:23:46', '2019-02-20 18:23:46', NULL),
(56, '6', '2019-03-04 22:15:17', '2019-03-04 22:24:50', '2019-03-04 22:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `partner_kerja_samas`
--

CREATE TABLE `partner_kerja_samas` (
  `id` char(36) NOT NULL,
  `nama_depan` varchar(150) DEFAULT NULL,
  `nama_belakang` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `institusi` varchar(150) DEFAULT NULL,
  `no_pe` varchar(15) DEFAULT NULL,
  `subject` text,
  `kebutuhan` text,
  `status` enum('Baru','Sudah di baca') NOT NULL DEFAULT 'Baru',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_kerja_samas`
--

INSERT INTO `partner_kerja_samas` (`id`, `nama_depan`, `nama_belakang`, `email`, `institusi`, `no_pe`, `subject`, `kebutuhan`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0812bb90-4ec4-11e9-bd8a-232ec74cf004', 'Fauzi', 'Setyo Fendhio', 'fauzi@gmail.com', NULL, '081296807905', 'Asdf', 'Asdfasdf', 'Sudah di baca', '2019-03-24 23:05:46', '2019-03-24 23:06:34', NULL),
('22546b10-4d0c-11e9-bb39-0df90d4b5688', NULL, NULL, NULL, NULL, '081296807905', NULL, 'Tes', 'Baru', '2019-03-22 18:36:52', '2019-03-22 18:36:52', NULL),
('485cbf10-43cf-11e9-85cd-75eefd9cb216', 'Pandhu', NULL, NULL, 'Universitas Budi Luhur', '081296807905', NULL, 'Kami ingin bekerja sama dalam pembuatan nuklir', 'Sudah di baca', '2019-03-11 00:28:36', '2019-03-11 00:35:18', NULL),
('5cc3abc0-4323-11e9-9cd9-35bf77451431', 'Pandhu', NULL, NULL, 'Universitas Budi Luhur', '081296807905', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Sudah di baca', '2019-03-10 03:57:57', '2019-03-11 00:23:54', NULL),
('67c078c0-4d0c-11e9-81de-bd1963c67a83', NULL, NULL, NULL, NULL, '081296807905', NULL, 'Tes', 'Baru', '2019-03-22 18:38:48', '2019-03-22 18:38:48', NULL),
('6c742d90-4323-11e9-986f-6dc511587c44', 'Pandhu', NULL, NULL, 'Universitas Budi Luhur', '081296807905', NULL, '“Seberat apapun harimu, jangan pernah biarkan seseorang membuatmu merasa bahwa kamu tidak pantas mendapat apa yang kamu inginkan.”', 'Sudah di baca', '2019-03-10 03:58:23', '2019-03-14 01:35:59', NULL),
('6f604720-4d0d-11e9-bd51-ed8ca2509953', 'Asdf', 'Asdf', 'pandhuw58@gmail.com', NULL, '081296807905', 'Tes', 'Tes', 'Baru', '2019-03-22 18:46:11', '2019-03-22 18:46:11', NULL),
('9073f8b0-4d0b-11e9-a288-e3471c3cfbae', NULL, NULL, NULL, NULL, '081296807905', NULL, 'Tes', 'Baru', '2019-03-22 18:32:47', '2019-03-22 18:32:47', NULL),
('b4e11010-4d0c-11e9-9961-9b5dcf8eba77', 'Pandhu', 'Wibowo', 'pandhuw58@gmail.com', NULL, '081296807905', 'Tes', 'Tes', 'Baru', '2019-03-22 18:40:58', '2019-03-22 18:40:58', NULL);

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
  `no_urut_pertanyaan` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `pertanyaan`, `assesment_id`, `kompetensi_id`, `rowscore_id`, `no_urut_pertanyaan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('03e0daa0-3723-11e9-bd5f-195e903ccb42', 'Anda adalah seorang manager dari pabrik produsen sabun. Terdapat sebuah pesanan yang muncul dari aktivitas promosi, yang paketnya dibatasi dalam jangka waktu tertentu. Dalam hal ini, pelanggan tersebut memesan dalam jumlah besar. Anda telah mengalokasikan sumber daya untuk memenuhi pesanan tersebut, namun terdapat kendala pada mesin produksi. Anda akan :', 'dc663170-3501-11e9-9999-63ce6a70ca04', '50c09a10-0f5c-11e9-bbb7-e94462002084', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 57, '2019-02-22 21:25:13', '2019-02-22 21:25:13', NULL),
('055e88e0-371d-11e9-af98-275ee513fe22', 'Tidak mudah bagi saya untuk mengikuti prosedur yang baku', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 8, '2019-02-22 20:42:19', '2019-02-22 20:42:19', NULL),
('07be2d50-371e-11e9-b230-2f032f9dcf59', 'Tidak mudah bagi saya untuk mencapai hasil-hasil yang sesuai dengan harapan', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '00e30490-0f6d-11e9-93d3-39e2452f215e', 20, '2019-02-22 20:49:32', '2019-02-22 20:49:32', NULL),
('0c8fca00-3720-11e9-81fb-31fcb0e61bf9', 'Saya lebih senang bekerja sendiri', 'dc663170-3501-11e9-9999-63ce6a70ca04', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '00e30490-0f6d-11e9-93d3-39e2452f215e', 46, '2019-02-22 21:04:00', '2019-02-22 21:04:00', NULL),
('0ede0600-371f-11e9-a7d5-65b8eadea479', 'Saya dengan mudah menemukan problem yang terjadi di tempat kerja', 'dc663170-3501-11e9-9999-63ce6a70ca04', '50c09a10-0f5c-11e9-bbb7-e94462002084', '00e30490-0f6d-11e9-93d3-39e2452f215e', 33, '2019-02-22 20:56:54', '2019-02-22 20:56:54', NULL),
('11176d40-3722-11e9-a587-9fd3e7f52aea', 'Pelanggan Anda mendekati Anda untuk bisa mendapatkan produk yang dapat dikirim ke Amerika melalui kapal laut. Standar waktu pengiriman adalah 3 bulan, sedangkan, dalam hal ini pelanggan Anda meminta lebih cepat. Anda berkordinasi dengan tim Supply Chain (Distribusi) guna mempercepat pengiriman. Dua hari sebelum pengiriman, Anda menghubungi tim Supply Chain untuk mendapatkan update informasi mengenai hal ini. Namun ternyata Anda justru menemukan bahwa produk tersebut tidak ada pada pengiriman sebelumnya. Anda akan :', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 52, '2019-02-22 21:18:26', '2019-02-22 21:18:26', NULL),
('19120790-3720-11e9-ad31-b9018e32af4f', 'Saya tidak keberatan untuk berbagi bantuan sumber daya kepada rekan kerja', 'dc663170-3501-11e9-9999-63ce6a70ca04', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '00e30490-0f6d-11e9-93d3-39e2452f215e', 47, '2019-02-22 21:04:21', '2019-02-22 21:04:21', NULL),
('1b9d75d0-3721-11e9-9e68-db1a1b395559', 'Sebagai Manager dari produk yang akan segera diluncurkan, Anda ditugaskan untuk menangani beberapa tugas yang kritikal. Salah satunya adalah untuk bernegosiasi dengan supplier untuk menurunkan jumlah minimum pemesanan sampai dengan produk nantinya diluncurkan secara resmi dan mendapatkan daya tarik pasar. Anda akan :', 'dc663170-3501-11e9-9999-63ce6a70ca04', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 49, '2019-02-22 21:11:34', '2019-02-22 21:14:13', NULL),
('1cfad4b0-371f-11e9-b688-db457e0a0150', 'Ada kalanya saya tidak berhasil untuk menyelesaikan masalah yang terjadi sampai dengan tuntas', 'dc663170-3501-11e9-9999-63ce6a70ca04', '50c09a10-0f5c-11e9-bbb7-e94462002084', '00e30490-0f6d-11e9-93d3-39e2452f215e', 34, '2019-02-22 20:57:18', '2019-02-22 20:57:18', NULL),
('1f5b4d80-371e-11e9-a165-170da7153afa', 'Saya terlebih dahulu mendengarkan keluhan pelanggan untuk memahami keinginannya', 'dc663170-3501-11e9-9999-63ce6a70ca04', '01df0360-0f5c-11e9-860b-fb3757928a71', '00e30490-0f6d-11e9-93d3-39e2452f215e', 21, '2019-02-22 20:50:12', '2019-02-22 20:50:12', NULL),
('2671b910-3720-11e9-861f-e30c334586ff', 'Saya tidak nyaman mengerjakan tugas yang membuat saya bergantung pada kontribusi pihak lain', 'dc663170-3501-11e9-9999-63ce6a70ca04', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '00e30490-0f6d-11e9-93d3-39e2452f215e', 48, '2019-02-22 21:04:43', '2019-02-22 21:04:43', NULL),
('281a4e50-371d-11e9-b53e-0da8ad462c6e', 'Tidak mudah bagi saya untuk bisa membuat orang lain memahami apa yang saya maksud', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 9, '2019-02-22 20:43:17', '2019-02-22 20:43:17', NULL),
('2dd8f3c0-371e-11e9-8b92-4be69152b76f', 'Saya tidak begitu menikmati tugas-tugas yang mengharuskan saya untuk mengelola keluhan pelanggan', 'dc663170-3501-11e9-9999-63ce6a70ca04', '01df0360-0f5c-11e9-860b-fb3757928a71', '00e30490-0f6d-11e9-93d3-39e2452f215e', 22, '2019-02-22 20:50:36', '2019-02-22 20:50:36', NULL),
('3610c070-3ff5-11e9-8e93-d3c67eae8fa7', 'Sadf', '9d6c0c80-17b2-11e9-b5c7-4d0cdaf120e2', '01df0360-0f5c-11e9-860b-fb3757928a71', '00e30490-0f6d-11e9-93d3-39e2452f215e', 1, '2019-03-06 02:50:01', '2019-03-06 02:51:23', '2019-03-06 02:51:23'),
('3777aaa0-3723-11e9-a905-59987064d8bc', 'Anda adalah manager level menengah (middle manager) di perusahaan ABC. Anda mengelola tim yang terdiri dari 8 orang. Selama 6 bulan terakhir, beban kerja tim Anda melonjak tajam. Tingginya jumlah pengiriman membuat kekacaaun terjadi setiap hari di operasi perusahaan. Anda menyadari bahwa tim Anda dalam hal ini susah payah untuk menepati deadline, dan tidak mampu untuk secara efektif menentukan prioritas tugas. Ini juga yang menjadikan konflik terjadi di tim Anda. Anda juga menyadari bahwa proses internal perlu untuk distandarkan. Bagaimana Anda akan mengatasi hal ini?', 'dc663170-3501-11e9-9999-63ce6a70ca04', '59050b10-0f5c-11e9-b920-5112040e5cec', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 58, '2019-02-22 21:26:40', '2019-02-22 21:26:40', NULL),
('384a26f0-371f-11e9-b991-bf5047e49401', 'Saya cenderung tidak tenang jika membiarkan masalah terjadi', 'dc663170-3501-11e9-9999-63ce6a70ca04', '50c09a10-0f5c-11e9-bbb7-e94462002084', '00e30490-0f6d-11e9-93d3-39e2452f215e', 35, '2019-02-22 20:58:03', '2019-02-22 20:58:03', NULL),
('3fdbea60-371e-11e9-bf22-571b3e2f1195', 'Menurut saya, menangkap apa yang pelanggan butuhkan dan memenuhinya merupakan cara agar perusahaan/organisasi dapat mencapai sasaran', 'dc663170-3501-11e9-9999-63ce6a70ca04', '01df0360-0f5c-11e9-860b-fb3757928a71', '00e30490-0f6d-11e9-93d3-39e2452f215e', 23, '2019-02-22 20:51:07', '2019-02-22 20:51:07', NULL),
('41386580-371d-11e9-a595-f14edf6eaf2d', 'Seringkali saya menghindari tugas yang mengharuskan saya untuk mempresentasikan sesuatu', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 10, '2019-02-22 20:43:59', '2019-02-22 20:43:59', NULL),
('456bf250-371f-11e9-a8de-478c2aaa03ce', 'Saya senang saat suatu masalah berhasil saya selesaikan dengan tuntas', 'dc663170-3501-11e9-9999-63ce6a70ca04', '50c09a10-0f5c-11e9-bbb7-e94462002084', '00e30490-0f6d-11e9-93d3-39e2452f215e', 36, '2019-02-22 20:58:25', '2019-02-22 20:58:25', NULL),
('5175c720-371e-11e9-ba3b-f327eb8d7e00', 'Saya menghindari pekerjaan yang mengharuskan saya untuk memahami pelanggan dan merespon kebutuhan mereka', 'dc663170-3501-11e9-9999-63ce6a70ca04', '01df0360-0f5c-11e9-860b-fb3757928a71', '00e30490-0f6d-11e9-93d3-39e2452f215e', 24, '2019-02-22 20:51:36', '2019-02-22 20:51:36', NULL),
('5237b320-3722-11e9-a5ba-459ee46aebef', 'Anda adalah Regional Manager untuk perusahaan manufaktur dan telah memimpin salah satu cabangnya selama 4 tahun. Para sales yang bekerja dengan Anda telah seringkali dipanggil oleh beberapa pelanggan terkait adanya defect (kecacatan pada kualitas produk) yang sering terjadi pada persediaan produk Anda. Apa yang akan Anda lakukan terkait hal ini?', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 53, '2019-02-22 21:20:15', '2019-02-22 21:20:15', NULL),
('558c66f0-371d-11e9-b128-fdd80ee7af2e', 'Seringkali orang lain perlu memastikan kembali kepada saya apakah ia memahami apa yang saya maksud', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 11, '2019-02-22 20:44:34', '2019-02-22 20:44:34', NULL),
('6a188130-3723-11e9-8079-979426ed84d1', 'Anda menemukan bahwa ada penurunan yang signifikan pada motivasi dari anggota tim Anda. Rendahnya motivasi dan minat mereka ditandai dengan turunnya kualitas hasil kerja. Anda juga menerima tanda non-verbal dari mereka tentang kebosanan akan hal-hal monoton yang saat ini ada di pekerjaan mereka. Tindakan apa yang akan Anda ambil :', 'dc663170-3501-11e9-9999-63ce6a70ca04', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 59, '2019-02-22 21:28:05', '2019-02-22 21:28:05', NULL),
('6b65a8b0-371e-11e9-8b69-89d5cd2f15a3', 'Saya cenderung berusaha memahami karakteristik dari lawan bicara', 'dc663170-3501-11e9-9999-63ce6a70ca04', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '00e30490-0f6d-11e9-93d3-39e2452f215e', 25, '2019-02-22 20:52:20', '2019-02-22 20:52:20', NULL),
('6c1335c0-371d-11e9-88cd-d1e4153c30fa', 'Bagi saya menjadi juru bicara dalam sebuah kelompok merupakan sebuah kesenangan', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 12, '2019-02-22 20:45:11', '2019-02-22 20:45:11', NULL),
('6d462e10-371c-11e9-984b-5387a75ad289', 'Sulit bagi saya mengerjakan tugas yang tidak memiliki standar yang jelas', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 6, '2019-02-22 20:38:04', '2019-02-22 20:38:04', NULL),
('7748e1c0-371f-11e9-b756-d943d1fe494d', 'Saya senang membuat jadwal kerja pribadi', 'dc663170-3501-11e9-9999-63ce6a70ca04', '59050b10-0f5c-11e9-b920-5112040e5cec', '00e30490-0f6d-11e9-93d3-39e2452f215e', 37, '2019-02-22 20:59:49', '2019-02-22 20:59:49', NULL),
('793a5360-371e-11e9-aef7-c5daed3bfc09', 'Saya sering mengalami perubahan mood', 'dc663170-3501-11e9-9999-63ce6a70ca04', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '00e30490-0f6d-11e9-93d3-39e2452f215e', 26, '2019-02-22 20:52:43', '2019-02-22 20:52:43', NULL),
('7c1c4f30-3722-11e9-9c8c-457abfb12bab', 'Anda bekerja sebagai Marketing Manager untuk perusahaan produsen makanan bernama XYZ. Baru-baru ini, produk Anda telah mendapatkan publikasi negatif di pasar dan pelanggan mulai memberikan keluhan terkait dengan gangguan kesehatan yang mereka alami, terutama kolesterol dan obesitas. Anda dihadapkan pada isu dimana Anda harus mengembalikan pelanggan Anda pada produk Anda dan mendapatkan kembali kepercayaan mereka. Bagaimana Anda menyelesaikan hal ini :', 'dc663170-3501-11e9-9999-63ce6a70ca04', '01df0360-0f5c-11e9-860b-fb3757928a71', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 54, '2019-02-22 21:21:26', '2019-02-22 21:21:26', NULL),
('7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', 'Saya merasa tidak nyaman saat harus meyakinkan orang lain dengan ide saya', 'dc663170-3501-11e9-9999-63ce6a70ca04', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 1, '2019-02-22 20:31:26', '2019-02-22 20:31:26', NULL),
('8577ff10-371f-11e9-b3cf-373ceb46332e', 'Tidak penting bagi saya menyusun jadwal dan kebutuhan tugas, yang terpenting adalah menjalankannya saja apa yang diminta atasan', 'dc663170-3501-11e9-9999-63ce6a70ca04', '59050b10-0f5c-11e9-b920-5112040e5cec', '00e30490-0f6d-11e9-93d3-39e2452f215e', 38, '2019-02-22 21:00:13', '2019-02-22 21:00:13', NULL),
('8ae24d00-371e-11e9-9966-cd510fa980e9', 'Saya mampu tetap bersikap tenang meskipun dihadapkan pada banyak masalah', 'dc663170-3501-11e9-9999-63ce6a70ca04', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '00e30490-0f6d-11e9-93d3-39e2452f215e', 27, '2019-02-22 20:53:13', '2019-02-22 20:53:13', NULL),
('8b49e150-371d-11e9-b58d-2dd9795133db', 'Saya tetap tenang meskipun segala sesuatunya tidak berjalan sebagaimana mestinya', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 13, '2019-02-22 20:46:04', '2019-02-22 20:46:04', NULL),
('946cfa20-371f-11e9-9347-63d43104ad36', 'Saya tidak nyaman terlalu terpaku pada jadwal rinci dalam bekerja', 'dc663170-3501-11e9-9999-63ce6a70ca04', '59050b10-0f5c-11e9-b920-5112040e5cec', '00e30490-0f6d-11e9-93d3-39e2452f215e', 39, '2019-02-22 21:00:38', '2019-02-22 21:00:38', NULL),
('97ab69f0-3723-11e9-97b3-9d8a529cfc13', 'Anda bertanggung jawab untuk mensupervisi design sampai dengan meluncurkan sebuah produk baru. Anda merasa tim Anda kurang kreatif dalam hal ini dan butuh untuk lebih dimotivasi untuk sama-sama mengumpulkan ide dan sepakat dengan sebuah ide baru. Mereka mengatakan kepada Anda bahwa ada kelangkaan penelitian di daerah tersebut dan oleh karena itu semakin sulit bagi mereka untuk memikirkan gagasan baru. Bagaimana Anda akan membantu tim Anda?', 'dc663170-3501-11e9-9999-63ce6a70ca04', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 60, '2019-02-22 21:29:21', '2019-02-22 21:29:21', NULL),
('99351f90-371d-11e9-8fe2-0548e2b21e55', 'Bekerja dalam kurun waktu panjang dan menyita fokus seringkali membuat saya menjadi Lelah', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 14, '2019-02-22 20:46:27', '2019-02-22 20:46:27', NULL),
('99855410-371b-11e9-acda-0d2d63c28f65', 'Orang lain tidak begitu mudah menerima pendapat saya', 'dc663170-3501-11e9-9999-63ce6a70ca04', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 2, '2019-02-22 20:32:09', '2019-02-22 20:32:09', NULL),
('9bdc1120-371e-11e9-8257-511b031713bb', 'Saya kadang menyesali tindakan saya.', 'dc663170-3501-11e9-9999-63ce6a70ca04', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '00e30490-0f6d-11e9-93d3-39e2452f215e', 28, '2019-02-22 20:53:41', '2019-02-22 20:53:41', NULL),
('a3a56630-3721-11e9-89db-e7ea1b2cfdf5', 'Anda menemukan bahwa salah satu anggota tim Anda, Rafi, merupakan salah satu anggota tim yang selama ini memiliki performance yang sangat baik, namun saat ini sedang kesulitan mencapai targetnya. Anda juga menerima umpan balik negatif tentang performancenya dari anggota tim lain. Anda secara informal mengajak Rafi bicara, namun hal ini tidak membawa perubahan. Anda khawatir hal ini akan berdampak pada anggota tim lain dan pencapaian target tim secara keseluruhan. Apa yang kira-kira akan Anda lakukan :', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 50, '2019-02-22 21:15:23', '2019-02-22 21:15:23', NULL),
('a788a3d0-371d-11e9-9bd2-930309c81da6', 'Saya tidak menikmati tugas yang mengharuskan saya untuk mengerjakannya secara terburu-buru', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 15, '2019-02-22 20:46:51', '2019-02-22 20:46:51', NULL),
('a9776670-371f-11e9-89fa-bdc49001be72', 'Saya tidak suka mengatur orang lain', 'dc663170-3501-11e9-9999-63ce6a70ca04', '59050b10-0f5c-11e9-b920-5112040e5cec', '00e30490-0f6d-11e9-93d3-39e2452f215e', 40, '2019-02-22 21:01:13', '2019-02-22 21:01:13', NULL),
('acc73f30-371e-11e9-83a7-6bc627433a5e', 'Saya mengerjakan tugas rutin yang menjadi tanggung jawab saya tanpa perlu diminta', 'dc663170-3501-11e9-9999-63ce6a70ca04', '487ce5c0-0f5c-11e9-991e-67af154c3146', '00e30490-0f6d-11e9-93d3-39e2452f215e', 29, '2019-02-22 20:54:09', '2019-02-22 20:54:09', NULL),
('adcf2db0-3722-11e9-ae1c-fbf5773b8992', 'Anggota tim Anda bekerja dalam cross-functional team, dimana tiap anggota tim menjadi bagian penting dari beberapa proyek dalam waktu bersamaan. Pada suatu hari, Anda kekurangan staf, kemudian Anda meminta 2 orang tim Anda untuk menyediakan waktu extra untuk proyek yang sedang Anda tangani, dimana hal ini akan menyebabkan waktu mereka juga menjadi lebih sedikit untuk proyek yang lain. Di satu sisi mereka memang wajib menjalankannya, namun Pimpinan Proyek lain merasa kecewa dengan kebijakan yang Anda terapkan, kemudian menunjukkan kemarahan pada anggota tim Anda tersebut, serta mengeskalasi persoalan ini ke pimpinan yang lebih tinggi. Anda kemudian :', 'dc663170-3501-11e9-9999-63ce6a70ca04', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 55, '2019-02-22 21:22:49', '2019-02-22 21:22:49', NULL),
('b0aff390-371b-11e9-93d0-07f0066af809', 'Saya menyukai aktivitas yang melibatkan proses penyampaian ide baru pada orang lain', 'dc663170-3501-11e9-9999-63ce6a70ca04', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 3, '2019-02-22 20:32:47', '2019-02-22 20:32:47', NULL),
('b81a2590-371d-11e9-9b78-07ba394b0749', 'Saya mudah merasa kecewa terhadap sesuatu yang tidak berjalan sebagaimana mestinya.', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 16, '2019-02-22 20:47:19', '2019-02-22 20:47:19', NULL),
('b977aa70-371f-11e9-aa59-59ddd05b6a35', 'Saya tidak nyaman untuk memimpin orang lain dalam mengerjakan tugas', 'dc663170-3501-11e9-9999-63ce6a70ca04', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '00e30490-0f6d-11e9-93d3-39e2452f215e', 41, '2019-02-22 21:01:40', '2019-02-22 21:01:40', NULL),
('bcc68820-371e-11e9-be0a-1d90a7e51585', 'Saya tidak menyukai perubahan', 'dc663170-3501-11e9-9999-63ce6a70ca04', '487ce5c0-0f5c-11e9-991e-67af154c3146', '00e30490-0f6d-11e9-93d3-39e2452f215e', 30, '2019-02-22 20:54:36', '2019-02-22 20:54:36', NULL),
('c7d242e0-371f-11e9-a1a1-25be439893bf', 'Saya tidak percaya diri saat harus memberikan arahan pada orang lain tentang bagaimana cara menyelesaikan tugas', 'dc663170-3501-11e9-9999-63ce6a70ca04', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '00e30490-0f6d-11e9-93d3-39e2452f215e', 42, '2019-02-22 21:02:04', '2019-02-22 21:02:04', NULL),
('cdf1e330-371b-11e9-84a0-632cb2a5815e', 'Saya menghindari tugas yang mengharuskan saya untuk berbicara dihadapan orang banyak', 'dc663170-3501-11e9-9999-63ce6a70ca04', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 4, '2019-02-22 20:33:37', '2019-02-22 20:33:37', NULL),
('d0378b50-371d-11e9-ad29-b312e858bd1d', 'Saya mengerjakan tugas berdasarkan prioritas yang penting', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '00e30490-0f6d-11e9-93d3-39e2452f215e', 17, '2019-02-22 20:47:59', '2019-02-22 20:47:59', NULL),
('d0b0c6d0-371e-11e9-b6a2-4fea23fec165', 'Saya tidak menikmati tugas yang mengharuskan saya untuk mencari ide baru', 'dc663170-3501-11e9-9999-63ce6a70ca04', '487ce5c0-0f5c-11e9-991e-67af154c3146', '00e30490-0f6d-11e9-93d3-39e2452f215e', 31, '2019-02-22 20:55:10', '2019-02-22 20:55:10', NULL),
('d94313d0-371f-11e9-bea5-058a460079aa', 'Saya cenderung tidak menikmati peran sebagai orang yang harus bertanggung jawab atas pekerjaan orang lain', 'dc663170-3501-11e9-9999-63ce6a70ca04', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '00e30490-0f6d-11e9-93d3-39e2452f215e', 43, '2019-02-22 21:02:34', '2019-02-22 21:02:34', NULL),
('db60c9f0-3722-11e9-97ad-5f5efbbb4302', 'Perusahaan Anda telah diakuisisi oleh salah satu perusahaan multi nasional. Anda dan tim Anda dalam hal ini dipertahankan oleh organisasi. Meskipun begitu, kondisi pekerjaan tentu akan menjadi semakin kompleks dengan adanya perubahan ini. Selain itu, tim anda bisa jadi tidak dapat meminta adanya kenaikan gaji tahunan dalam periode tahun fiskal saat ini. Anda diharapkan untuk berkomunikasi dengan anggota tim Anda. Yang Anda lakukan :', 'dc663170-3501-11e9-9999-63ce6a70ca04', '487ce5c0-0f5c-11e9-991e-67af154c3146', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 56, '2019-02-22 21:24:06', '2019-02-22 21:24:06', NULL),
('deed4160-371d-11e9-8a1b-95e7032bb64d', 'Seringkali hasil yang saya dapatkan tidak sesuai dengan apa yang saya inginkan', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '00e30490-0f6d-11e9-93d3-39e2452f215e', 18, '2019-02-22 20:48:24', '2019-02-22 20:48:24', NULL),
('e1686dd0-3721-11e9-8374-9f17337cdc46', 'Anda adalam pemimpin proyek peluncuran salah satu produk baru di perusahaan Anda. Bahan mentah yang Anda dapatkan dari supplier telah berhenti diproduksi karena pelanggan lain mereka yang juga membeli bahan tersebut, tidak lagi membeli dari mereka. Hal ini menyebabkan proyek harus ditunda beberapa bulan. Anda kemudian :', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 51, '2019-02-22 21:17:06', '2019-02-22 21:17:06', NULL),
('e8c07b70-371e-11e9-94dd-1fbac805eb2a', 'Saya menghindari aktivitas yang melibatkan risiko', 'dc663170-3501-11e9-9999-63ce6a70ca04', '487ce5c0-0f5c-11e9-991e-67af154c3146', '00e30490-0f6d-11e9-93d3-39e2452f215e', 32, '2019-02-22 20:55:50', '2019-02-22 20:55:50', NULL),
('eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'Saya adalah orang yang mengikuti jadwal', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 5, '2019-02-22 20:34:28', '2019-02-22 20:34:28', NULL),
('ed51fe70-371f-11e9-8880-c96cadedab3f', 'Saya perlu memberikan kejelasan tentang bagaimana tim harus bekerja', 'dc663170-3501-11e9-9999-63ce6a70ca04', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '00e30490-0f6d-11e9-93d3-39e2452f215e', 44, '2019-02-22 21:03:07', '2019-02-22 21:03:07', NULL),
('f2476000-371c-11e9-a180-7dfe68678022', 'Saya tidak begitu menikmati pekerjaan yang memiliki batasan yang sangat kaku', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 7, '2019-02-22 20:41:47', '2019-02-22 20:41:47', NULL),
('f879e020-371d-11e9-85dc-b3ac1078f321', 'Saya enggan memfokuskan diri saya untuk terlalu ambisius dalam mencapai cita-cita', 'dc663170-3501-11e9-9999-63ce6a70ca04', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '00e30490-0f6d-11e9-93d3-39e2452f215e', 19, '2019-02-22 20:49:07', '2019-02-22 20:49:07', NULL),
('ff4c3480-371f-11e9-9992-0bffb8dc7e5e', 'Saya senang memberikan kontribusi pada tim', 'dc663170-3501-11e9-9999-63ce6a70ca04', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '00e30490-0f6d-11e9-93d3-39e2452f215e', 45, '2019-02-22 21:03:37', '2019-02-22 21:03:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_assesments`
--

CREATE TABLE `pertanyaan_assesments` (
  `id` char(36) NOT NULL,
  `ass_id` char(36) DEFAULT NULL,
  `pertanyaan_id` char(36) DEFAULT NULL,
  `jawaban_id` char(36) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_assesments`
--

INSERT INTO `pertanyaan_assesments` (`id`, `ass_id`, `pertanyaan_id`, `jawaban_id`, `nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
('283a6120-45a7-11e9-b9bf-478444dcb2f7', '1be01070-45a7-11e9-9524-41876f36e82c', '7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', '805cc070-371b-11e9-9a8f-43cec6025a72', 2, '2019-03-13 08:46:24', '2019-03-13 08:46:24', NULL),
('41531d90-45a7-11e9-8d6e-051927cf21d9', '1be01070-45a7-11e9-9524-41876f36e82c', '99855410-371b-11e9-acda-0d2d63c28f65', '99ba8bc0-371b-11e9-9479-39d9e1702736', 2, '2019-03-13 08:47:06', '2019-03-13 08:47:06', NULL),
('6b081570-4582-11e9-bad5-dd62612cfcc4', '696f2be0-4582-11e9-ab45-3f2af7706f15', '7fe3ccb0-371b-11e9-9667-4f5ca5b0cda6', '805cc070-371b-11e9-9a8f-43cec6025a72', 4, '2019-03-13 04:23:25', '2019-03-13 04:23:26', NULL),
('6c456d00-4582-11e9-a444-77975c7a20dd', '696f2be0-4582-11e9-ab45-3f2af7706f15', '99855410-371b-11e9-acda-0d2d63c28f65', '99ba8bc0-371b-11e9-9479-39d9e1702736', 2, '2019-03-13 04:23:27', '2019-03-13 04:23:27', NULL),
('6d1329e0-4582-11e9-a2db-55ba059f2e05', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'b0aff390-371b-11e9-93d0-07f0066af809', 'b0be3b20-371b-11e9-89ac-131b9d51d22e', 2, '2019-03-13 04:23:28', '2019-03-13 04:23:31', NULL),
('6ddd9280-4582-11e9-b9cd-69dd016ad060', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'cdf1e330-371b-11e9-84a0-632cb2a5815e', 'ce1089d0-371b-11e9-b993-dbe9d12cb0e4', 2, '2019-03-13 04:23:30', '2019-03-13 04:23:30', NULL),
('707bc8e0-4582-11e9-974b-090926395c57', '696f2be0-4582-11e9-ab45-3f2af7706f15', '055e88e0-371d-11e9-af98-275ee513fe22', '0577aef0-371d-11e9-a110-af7e9f4bf496', 3, '2019-03-13 04:23:34', '2019-03-13 04:23:34', NULL),
('7119b370-4582-11e9-8868-f7d86769deb2', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'f2476000-371c-11e9-a180-7dfe68678022', 'f25002f0-371c-11e9-9f88-01ec70b97eef', 4, '2019-03-13 04:23:35', '2019-03-13 04:23:35', NULL),
('719edfa0-4582-11e9-aba0-0d485c778619', '696f2be0-4582-11e9-ab45-3f2af7706f15', '6d462e10-371c-11e9-984b-5387a75ad289', '6d7d46a0-371c-11e9-9fc5-172ff6210c74', 4, '2019-03-13 04:23:36', '2019-03-13 04:23:36', NULL),
('728ae400-4582-11e9-8b38-5df106c291d5', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'ecade8c0-371b-11e9-86a5-1f706919f17b', 1, '2019-03-13 04:23:38', '2019-03-13 04:23:38', NULL),
('7427be20-4582-11e9-bb96-07dcfc1c17a0', '696f2be0-4582-11e9-ab45-3f2af7706f15', '6c1335c0-371d-11e9-88cd-d1e4153c30fa', '6c1cbf20-371d-11e9-b27e-bd76be17c07e', 1, '2019-03-13 04:23:40', '2019-03-13 04:23:40', NULL),
('74c4f8c0-4582-11e9-9ffd-1716b7225c13', '696f2be0-4582-11e9-ab45-3f2af7706f15', '558c66f0-371d-11e9-b128-fdd80ee7af2e', '55a0cda0-371d-11e9-bed8-ddc383e2fb29', 2, '2019-03-13 04:23:41', '2019-03-13 04:23:41', NULL),
('757d4460-4582-11e9-b105-e1b8c5d42a21', '696f2be0-4582-11e9-ab45-3f2af7706f15', '41386580-371d-11e9-a595-f14edf6eaf2d', '414768a0-371d-11e9-a141-7d4b8cf9c99a', 3, '2019-03-13 04:23:43', '2019-03-13 04:23:43', NULL),
('762faac0-4582-11e9-a29a-290396ab25d2', '696f2be0-4582-11e9-ab45-3f2af7706f15', '281a4e50-371d-11e9-b53e-0da8ad462c6e', '283e89a0-371d-11e9-914b-ed52caa72627', 3, '2019-03-13 04:23:44', '2019-03-13 04:23:44', NULL),
('77cf4310-4582-11e9-8d9c-398bbd0cf574', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'b81a2590-371d-11e9-9b78-07ba394b0749', 'b825f900-371d-11e9-a811-01e11515f1c7', 4, '2019-03-13 04:23:46', '2019-03-13 04:23:46', NULL),
('78657cd0-4582-11e9-81c7-a1f4fc2dfb81', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'a788a3d0-371d-11e9-9bd2-930309c81da6', 'a7c04150-371d-11e9-a3d5-b545cbcff048', 1, '2019-03-13 04:23:47', '2019-03-13 04:23:47', NULL),
('78ea0620-489a-11e9-ab9d-e1e412d962a5', '1be01070-45a7-11e9-9524-41876f36e82c', 'cdf1e330-371b-11e9-84a0-632cb2a5815e', 'cdfdfff0-371b-11e9-b7b0-5b75a6d36288', 4, '2019-03-17 02:53:10', '2019-03-17 02:53:10', NULL),
('78ef6d70-4582-11e9-99a7-a7c4fa9e03fb', '696f2be0-4582-11e9-ab45-3f2af7706f15', '99351f90-371d-11e9-8fe2-0548e2b21e55', '994ecbc0-371d-11e9-acdd-cde4bebe951f', 2, '2019-03-13 04:23:48', '2019-03-13 04:23:48', NULL),
('79963880-4582-11e9-9a46-11baf46b32aa', '696f2be0-4582-11e9-ab45-3f2af7706f15', '8b49e150-371d-11e9-b58d-2dd9795133db', '8b57bc60-371d-11e9-9876-9d12b41598e9', 2, '2019-03-13 04:23:49', '2019-03-13 04:23:49', NULL),
('7ba1cc00-4582-11e9-89c2-5deed8eb081f', '696f2be0-4582-11e9-ab45-3f2af7706f15', '07be2d50-371e-11e9-b230-2f032f9dcf59', '085abf40-371e-11e9-9578-518a6ffb44cb', 1, '2019-03-13 04:23:53', '2019-03-13 04:23:53', NULL),
('7c2bedf0-4582-11e9-842a-b34b4ac6bd9c', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'f879e020-371d-11e9-85dc-b3ac1078f321', 'f884f980-371d-11e9-a8ee-ff4f4d7f9e46', 4, '2019-03-13 04:23:54', '2019-03-13 04:23:54', NULL),
('7ce5afa0-4582-11e9-b70c-f30fef44eb3a', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'deed4160-371d-11e9-8a1b-95e7032bb64d', 'df175f60-371d-11e9-be22-117b7e11df6d', 3, '2019-03-13 04:23:55', '2019-03-13 04:23:55', NULL),
('7da338e0-4582-11e9-a477-070dae350d46', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'd0378b50-371d-11e9-ad29-b312e858bd1d', 'd047e320-371d-11e9-b2f8-83ba10a84d3d', 1, '2019-03-13 04:23:56', '2019-03-13 04:23:56', NULL),
('7fde6060-4582-11e9-a9eb-7d55a2294c42', '696f2be0-4582-11e9-ab45-3f2af7706f15', '5175c720-371e-11e9-ba3b-f327eb8d7e00', '51988750-371e-11e9-a869-65b9d7e131f5', 3, '2019-03-13 04:24:00', '2019-03-13 04:24:00', NULL),
('80aab070-4582-11e9-abf4-b59b11c88a3b', '696f2be0-4582-11e9-ab45-3f2af7706f15', '3fdbea60-371e-11e9-bf22-571b3e2f1195', '3ffefc00-371e-11e9-acc7-1bbc6289172f', 3, '2019-03-13 04:24:01', '2019-03-13 04:24:01', NULL),
('8140d960-4582-11e9-8988-6ff72f34b0a7', '696f2be0-4582-11e9-ab45-3f2af7706f15', '2dd8f3c0-371e-11e9-8b92-4be69152b76f', '2e016c20-371e-11e9-8db3-a1308064d627', 1, '2019-03-13 04:24:02', '2019-03-13 04:24:02', NULL),
('81f06510-4582-11e9-b951-457531551f2c', '696f2be0-4582-11e9-ab45-3f2af7706f15', '1f5b4d80-371e-11e9-a165-170da7153afa', '1f77d5b0-371e-11e9-91f9-7bb563ee6dbe', 3, '2019-03-13 04:24:03', '2019-03-13 04:24:03', NULL),
('84a87650-4582-11e9-bb86-d79982c6c99c', '696f2be0-4582-11e9-ab45-3f2af7706f15', '9bdc1120-371e-11e9-8257-511b031713bb', '9bf885b0-371e-11e9-bdd7-d1c6ff09946a', 1, '2019-03-13 04:24:08', '2019-03-13 04:24:08', NULL),
('85393620-4582-11e9-840a-e3edcf5398e8', '696f2be0-4582-11e9-ab45-3f2af7706f15', '8ae24d00-371e-11e9-9966-cd510fa980e9', '8af35a20-371e-11e9-8ef1-194f4f82cea5', 2, '2019-03-13 04:24:09', '2019-03-13 04:24:09', NULL),
('85ce3220-4582-11e9-abf6-d79c9315c2d0', '696f2be0-4582-11e9-ab45-3f2af7706f15', '793a5360-371e-11e9-aef7-c5daed3bfc09', '79461370-371e-11e9-abdc-85953181c88d', 1, '2019-03-13 04:24:10', '2019-03-13 04:24:10', NULL),
('86995420-4582-11e9-bb0e-7d714904a20f', '696f2be0-4582-11e9-ab45-3f2af7706f15', '6b65a8b0-371e-11e9-8b69-89d5cd2f15a3', '6b824410-371e-11e9-86e8-632362bf755e', 2, '2019-03-13 04:24:11', '2019-03-13 04:24:11', NULL),
('88566c70-4582-11e9-ad03-35e24ff53435', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'e8c07b70-371e-11e9-94dd-1fbac805eb2a', 'e8e256b0-371e-11e9-89b9-13c7f38498e7', 1, '2019-03-13 04:24:14', '2019-03-13 04:24:14', NULL),
('88ffe9c0-4582-11e9-babb-b74e8b6819f0', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'd0b0c6d0-371e-11e9-b6a2-4fea23fec165', 'd0beb440-371e-11e9-a4ef-e7eec5159dae', 3, '2019-03-13 04:24:15', '2019-03-13 04:24:15', NULL),
('899917c0-4582-11e9-a566-d7a3521bf418', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'bcc68820-371e-11e9-be0a-1d90a7e51585', 'bccde570-371e-11e9-9127-e35c75c4c6b0', 4, '2019-03-13 04:24:16', '2019-03-13 04:24:16', NULL),
('8a744ac0-4582-11e9-bdea-91494e43852d', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'acc73f30-371e-11e9-83a7-6bc627433a5e', 'acd73500-371e-11e9-ac46-ddbed3fe909d', 1, '2019-03-13 04:24:18', '2019-03-13 04:24:18', NULL),
('8c22fea0-4582-11e9-bf04-cf7e3072ac7a', '696f2be0-4582-11e9-ab45-3f2af7706f15', '456bf250-371f-11e9-a8de-478c2aaa03ce', '458aeae0-371f-11e9-af7f-b5466f3071d5', 3, '2019-03-13 04:24:21', '2019-03-13 04:24:21', NULL),
('8ceb4b70-4582-11e9-929d-3b3321e6bd6b', '696f2be0-4582-11e9-ab45-3f2af7706f15', '384a26f0-371f-11e9-b991-bf5047e49401', '385fa960-371f-11e9-931f-77154f025a29', 3, '2019-03-13 04:24:22', '2019-03-13 04:24:22', NULL),
('8d9909c0-4582-11e9-9033-374db67b31a5', '696f2be0-4582-11e9-ab45-3f2af7706f15', '1cfad4b0-371f-11e9-b688-db457e0a0150', '1d0a5000-371f-11e9-bebd-5515db597bfe', 4, '2019-03-13 04:24:23', '2019-03-13 04:24:23', NULL),
('8e8d19c0-4582-11e9-8cea-cf3d9899d79d', '696f2be0-4582-11e9-ab45-3f2af7706f15', '0ede0600-371f-11e9-a7d5-65b8eadea479', '0ee51b50-371f-11e9-96fc-3945ac0dc79b', 1, '2019-03-13 04:24:25', '2019-03-13 04:24:25', NULL),
('90125d50-4582-11e9-933d-ab4717fd52e9', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'a9776670-371f-11e9-89fa-bdc49001be72', 'a9ade490-371f-11e9-aa7d-e3400072ee38', 2, '2019-03-13 04:24:27', '2019-03-13 04:24:27', NULL),
('90ce36b0-4582-11e9-8da2-3d17572e7470', '696f2be0-4582-11e9-ab45-3f2af7706f15', '946cfa20-371f-11e9-9347-63d43104ad36', '94b751e0-371f-11e9-8ed7-7b930a292c9c', 1, '2019-03-13 04:24:28', '2019-03-13 04:24:28', NULL),
('9175c930-4582-11e9-86d6-afdf524f76bc', '696f2be0-4582-11e9-ab45-3f2af7706f15', '8577ff10-371f-11e9-b3cf-373ceb46332e', '859272b0-371f-11e9-a063-a758b1ad307f', 2, '2019-03-13 04:24:29', '2019-03-13 04:24:29', NULL),
('922a6b10-4582-11e9-913f-c19982dd6121', '696f2be0-4582-11e9-ab45-3f2af7706f15', '7748e1c0-371f-11e9-b756-d943d1fe494d', '776700d0-371f-11e9-8204-7d57c54bcea5', 1, '2019-03-13 04:24:31', '2019-03-13 04:24:31', NULL),
('9396b300-4582-11e9-8da6-47426567d4f4', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'ed51fe70-371f-11e9-8880-c96cadedab3f', 'ed623ba0-371f-11e9-9d59-c94a8e9eba9b', 2, '2019-03-13 04:24:33', '2019-03-13 04:24:33', NULL),
('94311020-4582-11e9-b3c4-57457d1569cb', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'd94313d0-371f-11e9-bea5-058a460079aa', 'd9806ab0-371f-11e9-8467-47a49ff05328', 1, '2019-03-13 04:24:34', '2019-03-13 04:24:34', NULL),
('94e2cfa0-4582-11e9-82d4-918a4c415c99', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'c7d242e0-371f-11e9-a1a1-25be439893bf', 'c7da69a0-371f-11e9-a185-3b311ad0e90e', 4, '2019-03-13 04:24:35', '2019-03-13 04:24:35', NULL),
('95a45e90-4582-11e9-97d7-0f60b8592dc1', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'b977aa70-371f-11e9-aa59-59ddd05b6a35', 'b98037d0-371f-11e9-9836-69227a16ea71', 4, '2019-03-13 04:24:37', '2019-03-13 04:24:37', NULL),
('9726d9c0-4582-11e9-9b09-a10758bfb03a', '696f2be0-4582-11e9-ab45-3f2af7706f15', '2671b910-3720-11e9-861f-e30c334586ff', '269b00e0-3720-11e9-a7de-c71575014474', 1, '2019-03-13 04:24:39', '2019-03-13 04:24:39', NULL),
('97db25c0-4582-11e9-8392-a14c4d3a1fb4', '696f2be0-4582-11e9-ab45-3f2af7706f15', '19120790-3720-11e9-ad31-b9018e32af4f', '193f5fe0-3720-11e9-9439-9d071f18e6c1', 2, '2019-03-13 04:24:40', '2019-03-13 04:24:40', NULL),
('98903e80-4582-11e9-a76f-39ba235124e5', '696f2be0-4582-11e9-ab45-3f2af7706f15', '0c8fca00-3720-11e9-81fb-31fcb0e61bf9', '0ca43320-3720-11e9-a4eb-53f9936a51b7', 4, '2019-03-13 04:24:41', '2019-03-13 04:24:41', NULL),
('995cc6a0-4582-11e9-a7e4-1f32c7c4e982', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'ff4c3480-371f-11e9-9992-0bffb8dc7e5e', 'ff647ce0-371f-11e9-b4e7-07fc9b62256d', 2, '2019-03-13 04:24:43', '2019-03-13 04:24:43', NULL),
('9b78afb0-4582-11e9-bece-e97dadb7e93b', '696f2be0-4582-11e9-ab45-3f2af7706f15', '1b9d75d0-3721-11e9-9e68-db1a1b395559', '7aa4ea40-3721-11e9-b507-d71c7d00083b', 3, '2019-03-13 04:24:46', '2019-03-13 04:24:46', NULL),
('9c1ca680-4582-11e9-b0f2-9fc2a4b8fbb4', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'a3a56630-3721-11e9-89db-e7ea1b2cfdf5', 'a3c255f0-3721-11e9-8b02-5124c41c4f27', 4, '2019-03-13 04:24:47', '2019-03-13 04:24:47', NULL),
('9dacff20-4582-11e9-8acb-9f00812928fa', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'e1686dd0-3721-11e9-8374-9f17337cdc46', 'e1758cd0-3721-11e9-a918-5d09419755d8', 2, '2019-03-13 04:24:50', '2019-03-13 04:24:50', NULL),
('9ea73e40-4582-11e9-9451-61e980c95ac6', '696f2be0-4582-11e9-ab45-3f2af7706f15', '11176d40-3722-11e9-a587-9fd3e7f52aea', '113351c0-3722-11e9-837c-6300d16b7963', 1, '2019-03-13 04:24:52', '2019-03-13 04:24:52', NULL),
('a0103330-4582-11e9-9a1e-35dc1256737d', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'db60c9f0-3722-11e9-97ad-5f5efbbb4302', 'db7f9ba0-3722-11e9-a70b-4d2955605644', 4, '2019-03-13 04:24:54', '2019-03-13 04:24:54', NULL),
('a14d76e0-4582-11e9-a6f1-533b70ce10b8', '696f2be0-4582-11e9-ab45-3f2af7706f15', 'adcf2db0-3722-11e9-ae1c-fbf5773b8992', 'af2674b0-3722-11e9-aae4-7526351c5310', 2, '2019-03-13 04:24:56', '2019-03-13 04:24:56', NULL),
('a24b7600-4582-11e9-bff0-23c8e9da3621', '696f2be0-4582-11e9-ab45-3f2af7706f15', '7c1c4f30-3722-11e9-9c8c-457abfb12bab', '7c301690-3722-11e9-8a34-a9fee7e3cb94', 2, '2019-03-13 04:24:58', '2019-03-13 04:24:58', NULL),
('a2f1f7e0-4582-11e9-811c-b127b30d8176', '696f2be0-4582-11e9-ab45-3f2af7706f15', '5237b320-3722-11e9-a5ba-459ee46aebef', '5281e290-3722-11e9-8482-dfe521d993c1', 3, '2019-03-13 04:24:59', '2019-03-13 04:24:59', NULL),
('a47390b0-489a-11e9-88b8-735d48c9fc32', '1be01070-45a7-11e9-9524-41876f36e82c', 'eca5f680-371b-11e9-bfe0-aff77a3db7e2', 'ecade8c0-371b-11e9-86a5-1f706919f17b', 2, '2019-03-17 02:54:23', '2019-03-17 02:56:31', NULL),
('a4ee1cc0-4582-11e9-9786-7d3e78455c30', '696f2be0-4582-11e9-ab45-3f2af7706f15', '97ab69f0-3723-11e9-97b3-9d8a529cfc13', '97c865c0-3723-11e9-b255-774f6e93cfe1', 1, '2019-03-13 04:25:02', '2019-03-13 04:25:02', NULL),
('a580ea60-4582-11e9-b072-0961182f6f97', '696f2be0-4582-11e9-ab45-3f2af7706f15', '6a188130-3723-11e9-8079-979426ed84d1', '6a3fbbe0-3723-11e9-a020-bbf661fb9190', 2, '2019-03-13 04:25:03', '2019-03-13 04:25:03', NULL),
('a6110b00-4582-11e9-b036-6d93d4150578', '696f2be0-4582-11e9-ab45-3f2af7706f15', '3777aaa0-3723-11e9-a905-59987064d8bc', '37d25d30-3723-11e9-a65f-9d62b3214d5f', 2, '2019-03-13 04:25:04', '2019-03-13 04:25:04', NULL),
('a6c2be30-4582-11e9-8b5a-312677c5b048', '696f2be0-4582-11e9-ab45-3f2af7706f15', '03e0daa0-3723-11e9-bd5f-195e903ccb42', '03ec0e20-3723-11e9-9e6a-15d63524a218', 3, '2019-03-13 04:25:05', '2019-03-13 08:42:41', NULL),
('d4470000-4633-11e9-8941-23f11893e2ff', '1be01070-45a7-11e9-9524-41876f36e82c', 'b0aff390-371b-11e9-93d0-07f0066af809', 'b0dfd760-371b-11e9-a4e2-0d79ffc2bdf5', 2, '2019-03-14 01:33:23', '2019-03-14 01:33:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rowscores`
--

CREATE TABLE `rowscores` (
  `id` char(36) NOT NULL,
  `nama_rowscore` varchar(150) DEFAULT NULL,
  `nama_singkat` varchar(100) DEFAULT NULL,
  `presentase` int(11) DEFAULT NULL,
  `no_urut_rowscore` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rowscores`
--

INSERT INTO `rowscores` (`id`, `nama_rowscore`, `nama_singkat`, `presentase`, `no_urut_rowscore`, `created_at`, `updated_at`, `deleted_at`) VALUES
('00e30490-0f6d-11e9-93d3-39e2452f215e', 'Self Assessment', 'Self Assessment', 60, 1, '2019-01-03 08:34:05', '2019-01-08 18:42:39', NULL),
('04d04210-3fc3-11e9-90c5-9f0d85abdf94', 'Sdfs', 'Asdfs', 70, 4, '2019-03-05 20:50:44', '2019-03-05 20:51:32', '2019-03-05 20:51:32'),
('07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 'SJQ', 'SJQ', 40, 2, '2019-01-03 08:34:16', '2019-01-08 18:42:44', NULL),
('c8c62e30-1303-11e9-a75c-e1165b02271c', 'Sdaf', 'Asdf', 44, 11, '2019-01-07 22:10:58', '2019-01-07 22:14:56', '2019-01-07 22:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` char(36) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nama_testi` varchar(255) DEFAULT NULL,
  `nama_instansi` varchar(255) DEFAULT NULL,
  `pendapat_testimoni` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `foto`, `nama_testi`, `nama_instansi`, `pendapat_testimoni`, `created_at`, `updated_at`, `deleted_at`) VALUES
('044e9100-4f75-11e9-a539-9d0171446b61', '1553569961.jpg', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'Budi Luhur University', 'Bagus', '2019-03-25 20:12:41', '2019-03-25 20:36:37', '2019-03-25 20:36:37'),
('44c07b80-4f75-11e9-8073-75af8e74978e', '1553570069.jpg', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'Budi Luhur University', 'Bagus', '2019-03-25 20:14:29', '2019-03-25 20:36:32', '2019-03-25 20:36:32'),
('64b02060-4f78-11e9-ba5c-e592815bb7b3', '1553571411.jpg', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'Budi Luhur University', 'Berisi semacam evaluasi dan saran menyangkut penanganan narapidana di lembaga pemasyarakatan dan dalam kaitannya dengan upaya menghapuskan praktik peredaran narkoba di LP. Dalam video tersebut, FB juga mengimbau agar penanganan napi narkoba dilakukan secara ketat, tidak dipindahkan dari satu penjara ke penjara lain, termasuk keharusan adanya isolasi dari napi lain.', '2019-03-25 20:36:51', '2019-03-25 20:36:51', NULL),
('a7ee08c0-4f78-11e9-8ff0-affb0a08ed92', '1553571524.jpg', '6a858bf0-4419-11e9-a180-85f644c0d63e', 'Budi Luhur University', 'Menyangkut nama-nama aparat, bahwa benar ada disebut setidaknya tiga nama namun tidak dalam kaitannya dengan aliran dana sebagaimana kesaksian FB kepada HA.', '2019-03-25 20:38:44', '2019-03-25 20:38:44', NULL);

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
  `jenkel` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `tanggal_lahir` date DEFAULT NULL,
  `sekolah_kampus` text,
  `kelas_semester` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `social_media` text,
  `isi_social_media` text,
  `pengalaman_organisasi` text,
  `ciri_khas_personal` text,
  `cita_cita` varchar(255) DEFAULT NULL,
  `ambil_paket` varchar(150) DEFAULT NULL,
  `image` varchar(120) DEFAULT NULL,
  `level` enum('Super Admin','Participant') NOT NULL DEFAULT 'Participant',
  `active` enum('0','1','2') NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) DEFAULT NULL,
  `code_reset_password` varchar(255) DEFAULT NULL,
  `done_status` enum('1','2') DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `nickname`, `phone`, `address`, `jenkel`, `tanggal_lahir`, `sekolah_kampus`, `kelas_semester`, `hobby`, `social_media`, `isi_social_media`, `pengalaman_organisasi`, `ciri_khas_personal`, `cita_cita`, `ambil_paket`, `image`, `level`, `active`, `confirmation_code`, `code_reset_password`, `done_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1', 'pandhu@gmail.com', 'pandhu612', '$2y$10$pxeAEbB1Mb1MPj1Srz1XHue2EFQ0jZ7UiFTe79mM/p8.YRVvBE.YC', 'Pandhu', 'Wibowo', 'Pandhu', '081296807906', 'Perumahan Griya Bunga Asri', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PA-1551695054.jpg', 'Super Admin', '1', NULL, '', '', '2018-12-13 08:07:04', '2019-03-04 03:24:14', NULL),
('6a858bf0-4419-11e9-a180-85f644c0d63e', 'adm.ngartish@gmail.com', 'Ngartish', '$2y$10$7R/gqY7Vv6CQeVcdmCKb3OTV5FPRjAU933TgvaGWx/idUtEXSA9Ie', 'Ngartish', 'Ngartish', 'ngartish', '081296807905', 'Perumahan Griya Bunga Asri Blok A', 'Pria', '1997-03-07', 'Budi Luhur University', '0', 'Main Bulutangkis', 'Instagram', 'https://www.instagram.com/p.ibo', 'LAB ICT Universitas Budi Luhur', 'Pendiam', 'CEO', 'Bright Package', NULL, 'Participant', '1', NULL, NULL, '1', '2019-03-11 09:19:16', '2019-03-11 09:24:09', NULL),
('84d95f40-3e64-11e9-ba95-1dbc151c1d92', 'purwo.setyo.aji@gmail.com', 'Purwo', '$2y$10$tJzLppsGCKftjeLThLQZQOhNotSaJGUx135wonDtRgrPzahqlVkjm', 'Purwo', 'Setyo Aji', 'Purwo', '081296807905', 'Bintaro', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PA-1551693705.jpg', 'Super Admin', '1', NULL, NULL, '', '2019-03-04 03:01:45', '2019-03-04 03:02:35', '2019-03-04 03:02:35'),
('ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'pandhuw58@gmail.com', 'Pandhu', '$2y$10$7PhgyKsHL6u7foJ9F7z.euVvcXdH7QuHJQTZgbjrzpJiKcB.fZUqq', 'Pandhuu', 'Wibowo', '', '081296807905', '', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PA-1547006606.jpg', 'Participant', '1', NULL, 'wUSTcLK2C4DM0dwXgRIp5p05u0s0Lr', '', '2018-12-28 23:21:38', '2019-03-04 00:45:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_assesments`
--

CREATE TABLE `user_assesments` (
  `id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `assesment_id` char(36) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `maxattempt` int(3) DEFAULT '0',
  `attempt` int(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_assesments`
--

INSERT INTO `user_assesments` (`id`, `user_id`, `assesment_id`, `status`, `maxattempt`, `attempt`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0b583060-365a-11e9-a5d6-e12fb5cb381c', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'a981f610-1179-11e9-b9ab-07c4a9277062', 0, 2, 0, '2019-02-21 21:26:37', '2019-03-13 07:20:18', NULL),
('0b6901a0-365a-11e9-bf75-39a435a633d8', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'dc663170-3501-11e9-9999-63ce6a70ca04', 0, 2, 2, '2019-02-21 21:26:37', '2019-03-13 08:46:04', NULL),
('81c67f40-357a-11e9-b920-4f2b21d5d653', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'dc663170-3501-11e9-9999-63ce6a70ca04', 0, 2, 0, '2019-02-20 18:46:29', '2019-02-21 21:26:09', '2019-02-21 21:26:09'),
('d5c39960-3502-11e9-b1dc-a97505099800', '1', 'a981f610-1179-11e9-b9ab-07c4a9277062', 0, 1, 0, '2019-02-20 04:29:50', '2019-02-20 07:54:04', '2019-02-20 07:54:04'),
('d5ca4ca0-3502-11e9-8c4f-4d961ad15cab', '1', 'dc663170-3501-11e9-9999-63ce6a70ca04', 0, 2, 0, '2019-02-20 04:29:50', '2019-02-20 07:55:04', '2019-02-20 07:55:04'),
('d5d10230-3502-11e9-954e-33cafecf4c25', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'a981f610-1179-11e9-b9ab-07c4a9277062', 0, 2, 0, '2019-02-20 04:29:50', '2019-02-20 18:36:56', '2019-02-20 18:36:56'),
('d630d670-3502-11e9-b9e2-67943826cee2', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'dc663170-3501-11e9-9999-63ce6a70ca04', 0, 2, 0, '2019-02-20 04:29:51', '2019-02-20 18:37:03', '2019-02-20 18:37:03'),
('fd9660d0-357a-11e9-b992-71a24a102561', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'a981f610-1179-11e9-b9ab-07c4a9277062', 0, 2, 0, '2019-02-20 18:49:56', '2019-02-21 21:26:18', '2019-02-21 21:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `assesment_id` (`assesment_id`);

--
-- Indexes for table `assesment_kompetensis`
--
ALTER TABLE `assesment_kompetensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ass_id` (`ass_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`);

--
-- Indexes for table `hasil_nilai_asskoms`
--
ALTER TABLE `hasil_nilai_asskoms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keteranganhasil_id` (`keteranganhasil_id`),
  ADD KEY `asskom_id` (`asskom_id`);

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
-- Indexes for table `keteranganhasils`
--
ALTER TABLE `keteranganhasils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keterangan_id` (`keterangan_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`);

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
-- Indexes for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_kerja_samas`
--
ALTER TABLE `partner_kerja_samas`
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
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `jawaban_id` (`jawaban_id`);

--
-- Indexes for table `rowscores`
--
ALTER TABLE `rowscores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_testi` (`nama_testi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_assesments`
--
ALTER TABLE `user_assesments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `assesment_id` (`assesment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assesments`
--
ALTER TABLE `assesments`
  ADD CONSTRAINT `fk_assesment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jenis_assessment` FOREIGN KEY (`assesment_id`) REFERENCES `jenis_assesments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assesment_kompetensis`
--
ALTER TABLE `assesment_kompetensis`
  ADD CONSTRAINT `fk_assesment_assesment_kompetensi` FOREIGN KEY (`ass_id`) REFERENCES `assesments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kompetensis_assesment_kompetensi` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil_nilai_asskoms`
--
ALTER TABLE `hasil_nilai_asskoms`
  ADD CONSTRAINT `fk_asskom` FOREIGN KEY (`asskom_id`) REFERENCES `assesment_kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_keteranganhasil` FOREIGN KEY (`keteranganhasil_id`) REFERENCES `keteranganhasils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD CONSTRAINT `fk_pertanyaan_jawaban` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keteranganhasils`
--
ALTER TABLE `keteranganhasils`
  ADD CONSTRAINT `fk_keterangan_hasil` FOREIGN KEY (`keterangan_id`) REFERENCES `keterangan_nilais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kompetensi_hasil` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_jawaban_pertanyaan_assessment` FOREIGN KEY (`jawaban_id`) REFERENCES `jawabans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pertanyaan_pertanyaan_assesment` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD CONSTRAINT `fk_user_testimoni` FOREIGN KEY (`nama_testi`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_assesments`
--
ALTER TABLE `user_assesments`
  ADD CONSTRAINT `fk_assessent_user_assessment` FOREIGN KEY (`assesment_id`) REFERENCES `jenis_assesments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_user_assessment` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
