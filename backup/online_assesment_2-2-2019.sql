-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2019 at 03:00 AM
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

--
-- Dumping data for table `assesments`
--

INSERT INTO `assesments` (`id`, `user_id`, `tanggal_akses`, `created_at`, `updated_at`, `deleted_at`) VALUES
('2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '2019-01-12', '2019-01-12 09:43:27', '2019-01-12 09:43:27', NULL),
('b8ebaf00-17b3-11e9-9048-010517a2aa80', 'ffd13dc0-0b31-11e9-9cbb-011663f879e4', '2019-01-14', '2019-01-13 21:20:28', '2019-01-13 21:20:28', NULL);

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
('4680d7e0-168c-11e9-937b-abdd68c14cdb', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '7be045d0-0f5b-11e9-8402-db52a8444bc8', 2.1, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('4687f170-168c-11e9-8698-3d856582167e', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', 2.05, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('468eb1c0-168c-11e9-9509-3d091c3b5c33', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', 2.4, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('46a2ec40-168c-11e9-94b2-1113a898dec6', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', 1.85, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('46ab4f20-168c-11e9-b7d7-8d4a96a480a1', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', 2.65, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('46b21700-168c-11e9-954b-83249d20ac16', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '01df0360-0f5c-11e9-860b-fb3757928a71', 2.25, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('46b8d3c0-168c-11e9-a3a6-fb069aaeb9f4', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', 1.85, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('46bf93f0-168c-11e9-b216-d764c57ac16a', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '487ce5c0-0f5c-11e9-991e-67af154c3146', 2.25, 2, '2019-01-12 10:05:34', '2019-01-12 10:05:34', NULL),
('46c64d80-168c-11e9-8850-a7b030566201', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '50c09a10-0f5c-11e9-bbb7-e94462002084', 1.45, 1, '2019-01-12 10:05:35', '2019-01-12 10:05:35', NULL),
('46cd0fe0-168c-11e9-bbcd-99e1a3a2fbec', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '59050b10-0f5c-11e9-b920-5112040e5cec', 2.65, 2, '2019-01-12 10:05:35', '2019-01-12 10:05:35', NULL),
('46d3c6e0-168c-11e9-98a9-23eac62b59da', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', 2.65, 2, '2019-01-12 10:05:35', '2019-01-12 10:05:35', NULL),
('46da8ce0-168c-11e9-8284-0d0dcb698d57', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', 1.45, 1, '2019-01-12 10:05:35', '2019-01-12 10:05:35', NULL),
('fed857e0-17b3-11e9-b29a-1948c9262944', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '7be045d0-0f5b-11e9-8402-db52a8444bc8', 1.3, 1, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('fedea020-17b3-11e9-81ba-49a88cb5f562', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', 3.3, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('fee566a0-17b3-11e9-8053-df13ebf73318', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', 3.25, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('feec2a00-17b3-11e9-9aaf-1d793bc77713', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', 3.15, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('fef2f2d0-17b3-11e9-9fdb-4fc7ed0b3015', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', 3.15, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('fef9ae10-17b3-11e9-b13f-b18fb24e5e11', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '01df0360-0f5c-11e9-860b-fb3757928a71', 2.35, 2, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('ff0074f0-17b3-11e9-8239-0d2495d18bc2', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', 2.75, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('ff072f70-17b3-11e9-8d70-31dd82993d0a', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '487ce5c0-0f5c-11e9-991e-67af154c3146', 3.55, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('ff0df8c0-17b3-11e9-b3cb-bf75b4df0e34', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '50c09a10-0f5c-11e9-bbb7-e94462002084', 2.35, 2, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('ff14b1b0-17b3-11e9-a33f-cf34f58c6db1', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '59050b10-0f5c-11e9-b920-5112040e5cec', 3.55, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('ff1b7c90-17b3-11e9-9995-d1b75d1aedfc', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', 3.55, 3, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL),
('ff223bf0-17b3-11e9-bc83-45acd3f431a5', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', 2.35, 2, '2019-01-13 21:22:25', '2019-01-13 21:22:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `id` char(36) NOT NULL,
  `keterangan_id` char(36) DEFAULT NULL,
  `kompetensi_id` char(36) DEFAULT NULL,
  `hasil_kompetensi` int(3) DEFAULT NULL,
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
('00da6a30-13ae-11e9-8bd4-2d03d4323617', '8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', 'Anda menginformasikan tim Anda mengenai perubahan yang akan terjadi dan keputusan yang baru-baru ini diambil oleh management. Anda menjelaskan mengenai kemungkinan adanya kenaikan gaji tahunan akan terjadi di tahun berikutnya secara rapel, sehingga diharapkan hal ini dapat menjamin tim Anda akan tetap bersama Anda.', 2, '2019-01-08 18:29:27', '2019-01-08 18:29:27', NULL),
('00e58b80-13ae-11e9-8225-1dc10cc0513b', '8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', 'Anda menginformasikan tim Anda mengenai perubahan yang ditetapkan oleh perusahaan yang telah mengakuisisi perusahaan Anda, terutama perubahan dalam peran mereka di pekerjaan dan struktur gaji. Minta mereka untuk menghubungi Tim HR untuk meminta klarifikasi ataupun menyampaikan permonohon mereka.', 3, '2019-01-08 18:29:27', '2019-01-08 18:29:27', NULL),
('00ec64f0-13ae-11e9-aaf9-a71fd7398bfa', '8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', 'Anda mengapresiasi kontribusi anggota tim Anda terhadap organisasi, dan menjelaskan kembali mengenai peluang karir yang mereka miliki di organisasi. Fokus pada hasil yang positif dari akuisisi yang terjadi.', 1, '2019-01-08 18:29:27', '2019-01-08 18:29:27', NULL),
('00f31d00-13ae-11e9-bf09-9706da52a752', '8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', 'Anda menemui tim Anda satu per satu dan menjelaskan alasan dibalik keputusan yang dibuat. Anda janjikan kepada mereka mengenai adanya sumber daya yang bisa mereka dapatkan dan dukungan yang akan diberikan organisasi untuk membantu mereka dalam menghadapi perubahan yang terjadi.', 4, '2019-01-08 18:29:27', '2019-01-08 18:29:27', NULL),
('08d0d4e0-13ae-11e9-a443-df04d500f388', 'b7e40610-0f6f-11e9-ad43-7718fd52c513', 'Meminta formulir PO untuk pembelian mesin baru. Memesan mesin yang baru dari perusahaan yang sama dengan sebelumnya dan mempercepat proses produksi.', 1, '2019-01-08 18:29:40', '2019-01-08 18:29:40', NULL),
('08d79970-13ae-11e9-9d51-41d56bebc6ff', 'b7e40610-0f6f-11e9-ad43-7718fd52c513', 'Menghubungi alternatif pabrik lain yang dapat memenuhi order tersebut, dengan risiko bahwa ada kemungkinan Anda akan melewati batas waktu yang ditentukan, mengingat hal ini adalah tambahan proses produksi yang harus dilakukan di pabrik tersebut, dan tentunya diperlukan pemeriksaan kualitas yang ketat.', 2, '2019-01-08 18:29:40', '2019-01-08 18:29:40', NULL),
('08de55c0-13ae-11e9-bd57-5963c33be52b', 'b7e40610-0f6f-11e9-ad43-7718fd52c513', 'Meminta teknisi untuk segera mempercepat proses identifikasi isu ini dan meminta solusinya segera.', 3, '2019-01-08 18:29:40', '2019-01-08 18:29:40', NULL),
('08e50f30-13ae-11e9-b317-d7b84e268967', 'b7e40610-0f6f-11e9-ad43-7718fd52c513', 'Membeli produk sabun yang sudah jadi di market, daripada ada spesifikasi yang terlewat. Mengirimkan konsinyasi ke pelanggan dengan perusahaan Anda yang menanggung biaya tambahannya.', 4, '2019-01-08 18:29:40', '2019-01-08 18:29:40', NULL),
('0c3b0bd0-148e-11e9-a2c9-d58311d8162b', '0c318d30-148e-11e9-af89-49e0a103739a', '-', 1, '2019-01-09 21:13:13', '2019-01-09 21:13:13', NULL),
('0c4375a0-148e-11e9-bf91-1139be388888', '0c318d30-148e-11e9-af89-49e0a103739a', '-', 2, '2019-01-09 21:13:13', '2019-01-09 21:13:13', NULL),
('0c4bd1f0-148e-11e9-9183-f5f386734732', '0c318d30-148e-11e9-af89-49e0a103739a', '-', 3, '2019-01-09 21:13:13', '2019-01-09 21:13:13', NULL),
('0c543600-148e-11e9-a1e6-939391387cc0', '0c318d30-148e-11e9-af89-49e0a103739a', '-', 4, '2019-01-09 21:13:13', '2019-01-09 21:13:13', NULL),
('10b4ef60-14a5-11e9-b1f1-933de62bb760', '028fbdb0-1492-11e9-a6e6-590729649924', '-', 1, '2019-01-09 23:57:59', '2019-01-09 23:57:59', NULL),
('10c91700-14a5-11e9-9f38-15ed802dbe4d', '028fbdb0-1492-11e9-a6e6-590729649924', '-', 2, '2019-01-09 23:57:59', '2019-01-09 23:57:59', NULL),
('10def820-14a5-11e9-a35f-0d1553aef819', '028fbdb0-1492-11e9-a6e6-590729649924', '-', 3, '2019-01-09 23:57:59', '2019-01-09 23:57:59', NULL),
('11030630-13ae-11e9-b004-99c01a449d51', '1f60f780-0f70-11e9-8d48-176679ec6962', 'Mengadakan meeting dengan tim Anda, mencoba memahami isu operasional yang terjadi dan masalahnya apa saja, kemudian berusaha mengatasinya diwaktu yang bersamaan.', 4, '2019-01-08 18:29:54', '2019-01-08 18:29:54', NULL),
('111aaed0-13ae-11e9-967f-5569866942aa', '1f60f780-0f70-11e9-8d48-176679ec6962', 'Meminta senior manager (atasan) untuk membimbing Anda dalam menyusun dan menstandarkan kembali proses yang ada.', 2, '2019-01-08 18:29:54', '2019-01-08 18:29:54', NULL),
('11223bf0-14a5-11e9-9308-91fa17c07ecc', '028fbdb0-1492-11e9-a6e6-590729649924', '-', 5, '2019-01-09 23:58:00', '2019-01-09 23:58:00', NULL),
('11282b40-13ae-11e9-9b9e-f5205596ad67', '1f60f780-0f70-11e9-8d48-176679ec6962', 'Meminta anak buah untuk mengeksplorasi beberapa pilihan lain yang berbeda dan menyusun rencana tindakan.', 1, '2019-01-08 18:29:54', '2019-01-08 18:29:54', NULL),
('11325270-13ae-11e9-9228-73228b8f06fb', '1f60f780-0f70-11e9-8d48-176679ec6962', 'Menyusun dashboard dimana Anda bisa melihat dan mengawasi progress dan status dari setiap tugas yang dijalankan oleh tim Anda.', 3, '2019-01-08 18:29:54', '2019-01-08 18:29:54', NULL),
('183023f0-13ae-11e9-aa56-092825b9ebc5', '442a90c0-0f70-11e9-a679-27b3e966260c', 'Berkonsultasi dengan ahli yang terbaik di industri ini untuk mendapatkan panduan dan mempertemukan ahli tersebut dengan tim Anda.', 2, '2019-01-08 18:30:06', '2019-01-08 18:30:06', NULL),
('18495940-13ae-11e9-bb94-05006b6ac957', '442a90c0-0f70-11e9-a679-27b3e966260c', 'Meminta mereka untuk menemukan perbedaan fitur produk tersebut dengan produk lain di market, sehingga mereka dapat menghasilkan sesuatu yang memang bagus dan berbeda.', 4, '2019-01-08 18:30:06', '2019-01-08 18:30:06', NULL),
('185a3a50-13ae-11e9-9be3-a5d8068f6e3c', '442a90c0-0f70-11e9-a679-27b3e966260c', 'Meminta mereka untuk menggunakan metode riset yang berbeda, daripada hanya lewat internet, sehingga mereka bisa mendapatkan ide apa yang dilakukan oleh kompetitor.', 1, '2019-01-08 18:30:06', '2019-01-08 18:30:06', NULL),
('18648c30-13ae-11e9-9865-f7a46028ed0d', '442a90c0-0f70-11e9-a679-27b3e966260c', 'Minta mereka untuk berinteraksi dengan pelanggan dan mengetahui kebutuhan mereka, kemudian minta mereka membuat fitur tambahan di produk sesuai dengan kebutuhan pelanggan.', 3, '2019-01-08 18:30:06', '2019-01-08 18:30:06', NULL),
('1cfb7160-1482-11e9-9ce2-7b25be38483a', '1cf2e880-1482-11e9-8e5f-4d38f54168e4', '-', 4, '2019-01-09 19:47:47', '2019-01-09 19:47:47', NULL),
('1d14a040-1482-11e9-bbf7-e7504387f0dc', '1cf2e880-1482-11e9-8e5f-4d38f54168e4', '-', 3, '2019-01-09 19:47:47', '2019-01-09 19:47:47', NULL),
('1d1d1400-1482-11e9-9d3e-d1a512e91b8e', '1cf2e880-1482-11e9-8e5f-4d38f54168e4', '-', 2, '2019-01-09 19:47:47', '2019-01-09 19:47:47', NULL),
('1d365ed0-1482-11e9-9826-150ebe612d16', '1cf2e880-1482-11e9-8e5f-4d38f54168e4', '-', 1, '2019-01-09 19:47:47', '2019-01-09 19:47:47', NULL),
('21b5f3e0-13ae-11e9-a355-231a03f10eef', 'cb462fe0-0f72-11e9-9ffa-8102475a3275', 'Berkonsultasi dengan ahli yang terbaik di industri ini untuk mendapatkan panduan dan mempertemukan ahli tersebut dengan tim Anda.', 2, '2019-01-08 18:30:22', '2019-01-08 18:30:22', NULL),
('21bca2a0-13ae-11e9-928a-b7ea569fc01b', 'cb462fe0-0f72-11e9-9ffa-8102475a3275', 'Meminta mereka untuk menemukan perbedaan fitur produk tersebut dengan produk lain di market, sehingga mereka dapat menghasilkan sesuatu yang memang bagus dan berbeda.', 4, '2019-01-08 18:30:22', '2019-01-08 18:30:22', NULL),
('21c36880-13ae-11e9-901a-f9cdaf422c65', 'cb462fe0-0f72-11e9-9ffa-8102475a3275', 'Meminta mereka untuk menggunakan metode riset yang berbeda, daripada hanya lewat internet, sehingga mereka bisa mendapatkan ide apa yang dilakukan oleh kompetitor.', 1, '2019-01-08 18:30:22', '2019-01-08 18:30:22', NULL),
('21ca29b0-13ae-11e9-bfdc-d75f37da0653', 'cb462fe0-0f72-11e9-9ffa-8102475a3275', 'Minta mereka untuk berinteraksi dengan pelanggan dan mengetahui kebutuhan mereka, kemudian minta mereka membuat fitur tambahan di produk sesuai dengan kebutuhan pelanggan.', 3, '2019-01-08 18:30:22', '2019-01-08 18:30:22', NULL),
('2c5383f0-148e-11e9-bab8-fb971069e6a0', '2c4ad910-148e-11e9-8663-a318cc155d2a', '-', 1, '2019-01-09 21:14:07', '2019-01-09 21:14:07', NULL),
('2c5bf2b0-148e-11e9-8fdb-8d97eadcbb4d', '2c4ad910-148e-11e9-8663-a318cc155d2a', '-', 2, '2019-01-09 21:14:07', '2019-01-09 21:14:07', NULL),
('2c645e40-148e-11e9-9143-6182eaf17b62', '2c4ad910-148e-11e9-8663-a318cc155d2a', '-', 3, '2019-01-09 21:14:07', '2019-01-09 21:14:07', NULL),
('2c6b1e80-148e-11e9-bfa1-cd15f65162a1', '2c4ad910-148e-11e9-8663-a318cc155d2a', '-', 4, '2019-01-09 21:14:07', '2019-01-09 21:14:07', NULL),
('4a8eba60-1492-11e9-899d-971aa397f9a8', '4a856ae0-1492-11e9-b12b-832efb95479e', '-', 1, '2019-01-09 21:43:36', '2019-01-09 21:43:36', NULL),
('4a956620-1492-11e9-85ba-8f85caadb186', '4a856ae0-1492-11e9-b12b-832efb95479e', '-', 2, '2019-01-09 21:43:36', '2019-01-09 21:43:36', NULL),
('4aa49020-1492-11e9-8322-3771cf5d83c2', '4a856ae0-1492-11e9-b12b-832efb95479e', '-', 3, '2019-01-09 21:43:36', '2019-01-09 21:43:36', NULL),
('4aab48c0-1492-11e9-a38b-5db7d8f20684', '4a856ae0-1492-11e9-b12b-832efb95479e', '-', 4, '2019-01-09 21:43:36', '2019-01-09 21:43:36', NULL),
('4cbb4a90-148e-11e9-af1d-ef92ffa58ac8', '4c67b840-148e-11e9-96ea-63d03922ec60', '-', 4, '2019-01-09 21:15:01', '2019-01-09 21:15:01', NULL),
('4cd11ac0-148e-11e9-9fd5-45c0deb11501', '4c67b840-148e-11e9-96ea-63d03922ec60', '-', 3, '2019-01-09 21:15:01', '2019-01-09 21:15:01', NULL),
('4cd7ddb0-148e-11e9-8f50-c93084a82baa', '4c67b840-148e-11e9-96ea-63d03922ec60', '-', 2, '2019-01-09 21:15:01', '2019-01-09 21:15:01', NULL),
('4cde9aa0-148e-11e9-9994-179f43176f54', '4c67b840-148e-11e9-96ea-63d03922ec60', '-', 1, '2019-01-09 21:15:01', '2019-01-09 21:15:01', NULL),
('620a9180-148e-11e9-8cb0-e3d34697643c', '61fd71b0-148e-11e9-98d6-7fea9e042cfe', '-', 4, '2019-01-09 21:15:37', '2019-01-09 21:15:37', NULL),
('6212ee60-148e-11e9-b972-3189b4c04697', '61fd71b0-148e-11e9-98d6-7fea9e042cfe', '-', 3, '2019-01-09 21:15:37', '2019-01-09 21:15:37', NULL),
('621d04f0-148e-11e9-bc37-49d4c91cea2a', '61fd71b0-148e-11e9-98d6-7fea9e042cfe', '-', 2, '2019-01-09 21:15:37', '2019-01-09 21:15:37', NULL),
('62256f00-148e-11e9-9458-8d64ebeed0f1', '61fd71b0-148e-11e9-98d6-7fea9e042cfe', '-', 1, '2019-01-09 21:15:37', '2019-01-09 21:15:37', NULL),
('8f6168c0-1492-11e9-a98f-973e3c523a6a', '8f539bb0-1492-11e9-97f4-5149de7ce4b5', '-', 4, '2019-01-09 21:45:31', '2019-01-09 21:45:31', NULL),
('8f69d3e0-1492-11e9-ac18-7bd78f5ae9b8', '8f539bb0-1492-11e9-97f4-5149de7ce4b5', '-', 3, '2019-01-09 21:45:31', '2019-01-09 21:45:31', NULL),
('8f723900-1492-11e9-ac54-593594bd62b9', '8f539bb0-1492-11e9-97f4-5149de7ce4b5', '-', 2, '2019-01-09 21:45:31', '2019-01-09 21:45:31', NULL),
('8f7aa810-1492-11e9-83b8-11f7a96f0fb6', '8f539bb0-1492-11e9-97f4-5149de7ce4b5', '-', 1, '2019-01-09 21:45:31', '2019-01-09 21:45:31', NULL),
('92b2c8c0-1481-11e9-ae81-11f772343748', '92a9aa90-1481-11e9-a4b8-192f82e3016a', '-', 4, '2019-01-09 19:43:55', '2019-01-09 19:43:55', NULL),
('92bb2dd0-1481-11e9-b1d2-8bf9aba0892d', '92a9aa90-1481-11e9-a4b8-192f82e3016a', '-', 3, '2019-01-09 19:43:55', '2019-01-09 19:43:55', NULL),
('92c58380-1481-11e9-864d-a72002c851c7', '92a9aa90-1481-11e9-a4b8-192f82e3016a', '-', 2, '2019-01-09 19:43:55', '2019-01-09 19:43:55', NULL),
('92d4a4d0-1481-11e9-b2fc-7fbf34d4855a', '92a9aa90-1481-11e9-a4b8-192f82e3016a', '-', 1, '2019-01-09 19:43:55', '2019-01-09 19:43:55', NULL),
('935fd5d0-148e-11e9-8bd6-19fb9ca39002', '9356b4c0-148e-11e9-bfed-e16cde6762f9', '-', 4, '2019-01-09 21:17:00', '2019-01-09 21:17:00', NULL),
('93669230-148e-11e9-969d-17aef628f626', '9356b4c0-148e-11e9-bfed-e16cde6762f9', '-', 3, '2019-01-09 21:17:00', '2019-01-09 21:17:00', NULL),
('937c7d00-148e-11e9-9281-63ab7ed84ef4', '9356b4c0-148e-11e9-bfed-e16cde6762f9', '-', 2, '2019-01-09 21:17:00', '2019-01-09 21:17:00', NULL),
('93834290-148e-11e9-9b3e-63f2adf13d39', '9356b4c0-148e-11e9-bfed-e16cde6762f9', '-', 1, '2019-01-09 21:17:00', '2019-01-09 21:17:00', NULL),
('a2ec3b40-14c9-11e9-b5c2-6faf57b64984', 'a2e25c40-14c9-11e9-8712-bb081596f2ba', 'Strongly Disagree', 4, '2019-01-10 04:19:46', '2019-01-10 04:19:46', NULL),
('a2f49120-14c9-11e9-9c6e-cb45656f8c88', 'a2e25c40-14c9-11e9-8712-bb081596f2ba', 'Disagree', 3, '2019-01-10 04:19:46', '2019-01-10 04:19:46', NULL),
('a2fb5010-14c9-11e9-85d7-f37284fb3dc6', 'a2e25c40-14c9-11e9-8712-bb081596f2ba', 'Agree', 2, '2019-01-10 04:19:46', '2019-01-10 04:19:46', NULL),
('a3057430-14c9-11e9-8d3f-a154ebff0363', 'a2e25c40-14c9-11e9-8712-bb081596f2ba', 'Strongly Agree', 1, '2019-01-10 04:19:46', '2019-01-10 04:19:46', NULL),
('a8ccbe70-1492-11e9-9601-bba501870c1d', 'a8c39100-1492-11e9-b92c-f19493d5ccd6', '-', 4, '2019-01-09 21:46:14', '2019-01-09 21:46:14', NULL),
('a8dbd860-1492-11e9-b8f5-f972dcd0e43f', 'a8c39100-1492-11e9-b92c-f19493d5ccd6', '-', 3, '2019-01-09 21:46:14', '2019-01-09 21:46:14', NULL),
('a8e44df0-1492-11e9-b420-f7428f5551f6', 'a8c39100-1492-11e9-b92c-f19493d5ccd6', '-', 2, '2019-01-09 21:46:14', '2019-01-09 21:46:14', NULL),
('a8ee9b20-1492-11e9-a3e2-ef7d0d08d61c', 'a8c39100-1492-11e9-b92c-f19493d5ccd6', '-', 1, '2019-01-09 21:46:14', '2019-01-09 21:46:14', NULL),
('b162a5d0-1481-11e9-83f1-9b6133fe699c', 'bd6f4600-1179-11e9-b575-6dc38dfebbd0', '-', 4, '2019-01-09 19:44:47', '2019-01-09 19:44:47', NULL),
('b16cafd0-1481-11e9-9a4d-a1a63214c375', 'bd6f4600-1179-11e9-b575-6dc38dfebbd0', '-', 3, '2019-01-09 19:44:47', '2019-01-09 19:44:47', NULL),
('b1751060-1481-11e9-ac36-3b380738c62d', 'bd6f4600-1179-11e9-b575-6dc38dfebbd0', '-', 2, '2019-01-09 19:44:47', '2019-01-09 19:44:47', NULL),
('b18ffb70-1481-11e9-8e21-5b9c21e61068', 'bd6f4600-1179-11e9-b575-6dc38dfebbd0', '-', 1, '2019-01-09 19:44:47', '2019-01-09 19:44:47', NULL),
('bf336fe0-1492-11e9-bc43-d72ffee505ff', 'bf26ffe0-1492-11e9-9d25-851c53327f9a', '-', 4, '2019-01-09 21:46:51', '2019-01-09 21:46:51', NULL),
('bf4af7e0-1492-11e9-a1bc-4924d6bf50f8', 'bf26ffe0-1492-11e9-9d25-851c53327f9a', '-', 3, '2019-01-09 21:46:51', '2019-01-09 21:46:51', NULL),
('bf51bab0-1492-11e9-a451-89cfc605ce3d', 'bf26ffe0-1492-11e9-9d25-851c53327f9a', '-', 2, '2019-01-09 21:46:51', '2019-01-09 21:46:51', NULL),
('bf587b70-1492-11e9-a929-252b32a17470', 'bf26ffe0-1492-11e9-9d25-851c53327f9a', '-', 1, '2019-01-09 21:46:51', '2019-01-09 21:46:51', NULL),
('c0d87e40-13ad-11e9-ad2d-b902eed9ccdc', 'e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'Memastikan kembali kepada supplier dengan menunjukkan track-record dari perusahaan dan menginformasikan kepada supplier tersebut mengenai peluang bisnis yang ada dari produk ini di masa datang, sebagai hasil dari peluncuran produk yang akan dilaksanakan nanti.', 4, '2019-01-08 18:27:39', '2019-01-08 18:27:39', NULL),
('c0df3c80-13ad-11e9-9c66-e1442f9464cb', 'e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'Membuat permohonan halus pada supplier dan meminta mereka untuk memenuhi permintaan Anda demi relasi yang memang selama ini sudah berjalan baik antara Anda dengan supplier tersebut.', 3, '2019-01-08 18:27:39', '2019-01-08 18:27:39', NULL),
('c0e5f770-13ad-11e9-99b9-cbe84b4df1a7', 'e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'Memastikan kepada supplier bahwa harga tinggi masih dibolehkan untuk jumlah volume pemesanan yang sedikit, sementara dalam hal ini Anda berharap harga juga menjadi dapat dikurangi jika nantinya volume pemesanan menjadi semakin banyak dan dapat memenuhi jumlah pemesanan minimum yang ditetapkan oleh supplier tersebut.', 1, '2019-01-08 18:27:39', '2019-01-08 18:27:39', NULL),
('c0fa2650-13ad-11e9-a00d-abff4682d118', 'e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'Beritahu pemasok bahwa perkiraan volume menunjukkan bahwa organisasi akan dapat memenuhi jumlah pesanan minimum yang diajukan pemasok dalam dua bulan pertama peluncuran.', 2, '2019-01-08 18:27:39', '2019-01-08 18:27:39', NULL),
('cc6f9cd0-1491-11e9-a0fb-e7bb7dd89048', 'cc5f6620-1491-11e9-8733-bfc14192a2dc', '-', 4, '2019-01-09 21:40:04', '2019-01-09 21:40:04', NULL),
('cc7808f0-1491-11e9-9c75-8f64e1ebf4c1', 'cc5f6620-1491-11e9-8733-bfc14192a2dc', '-', 3, '2019-01-09 21:40:04', '2019-01-09 21:40:04', NULL),
('cc857830-1491-11e9-b161-290d4a47343c', 'cc5f6620-1491-11e9-8733-bfc14192a2dc', '-', 2, '2019-01-09 21:40:04', '2019-01-09 21:40:04', NULL),
('cc8c3420-1491-11e9-9bf1-cf8ca307eab5', 'cc5f6620-1491-11e9-8733-bfc14192a2dc', '-', 1, '2019-01-09 21:40:04', '2019-01-09 21:40:04', NULL),
('d0baee20-13ad-11e9-924f-2552e180a7fb', '6708efe0-0f6e-11e9-a01a-c3877e50b170', 'Mencoba untuk berempati pada Rafi, dan membuatnya mengerti bahwa perannya sangat penting dalam pencapaian target tim, dan mengapa apa yang terjadi padanya saat ini bisa berdampak negatif pada semangat kerja dan budaya kerja tim.', 3, '2019-01-08 18:28:06', '2019-01-08 18:28:06', NULL),
('d0c1b8a0-13ad-11e9-bc08-c765216c1332', '6708efe0-0f6e-11e9-a01a-c3877e50b170', 'Memberikannya ruang dan waktu dan berharap agar segala sesuatunya akan kembali seperti sebagaimana mestinya.', 1, '2019-01-08 18:28:06', '2019-01-08 18:28:06', NULL),
('d0de6250-13ad-11e9-9b3e-7ff52fc27e6b', '6708efe0-0f6e-11e9-a01a-c3877e50b170', 'Menekankan pada hal-hal spesifik tertentu yang memang selama ini belum pernah dibahas sebelumnya pada Rafi. Memberikannya contoh mengenai apa yang bisa ia lakukan untuk meningkatkan performancenya.', 4, '2019-01-08 18:28:06', '2019-01-08 18:28:06', NULL),
('d0e51dc0-13ad-11e9-b0df-11040f7a67c0', '6708efe0-0f6e-11e9-a01a-c3877e50b170', 'Menanyakan apakah ia perlu bantuan dan menawarkan bantuan padanya dengan senang hati.', 2, '2019-01-08 18:28:06', '2019-01-08 18:28:06', NULL),
('d24f8b60-1481-11e9-a634-3d45769cb6ac', 'd24729e0-1481-11e9-b128-6bbf08665fff', '-', 1, '2019-01-09 19:45:42', '2019-01-09 19:45:42', NULL),
('d257e910-1481-11e9-8e52-bff665475c6f', 'd24729e0-1481-11e9-b128-6bbf08665fff', '-', 2, '2019-01-09 19:45:42', '2019-01-09 19:45:42', NULL),
('d2605070-1481-11e9-8964-15fd2e81c4c0', 'd24729e0-1481-11e9-b128-6bbf08665fff', '-', 3, '2019-01-09 19:45:42', '2019-01-09 19:45:42', NULL),
('d268baf0-1481-11e9-8d67-077cf1a33d72', 'd24729e0-1481-11e9-b128-6bbf08665fff', '-', 4, '2019-01-09 19:45:42', '2019-01-09 19:45:42', NULL),
('d89c67a0-13ad-11e9-b2fc-c7b0e0cc4212', 'a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'Mencari alternatif suplier yang dapat memproduksi bahan mentah yang mirip dan meminta tambahan tenaga kerja untuk mengakselerasi proses pengujian bahan.', 2, '2019-01-08 18:28:19', '2019-01-08 18:28:19', NULL),
('d8a4c9f0-13ad-11e9-8085-67295173ab76', 'a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'Mencari supplier alternatif dengan juga berupaya mempengaruhi supplier yang ada saat ini untuk memproduksi bahan mentah yang sama untuk perusahaan Anda. Anda kemudian menyetujui model harga yang berdasarkan pada volume (volume based pricing model) untuk mengkompensasi profit yang menjadi lebih rendah yang disebabkan oleh mereka.', 4, '2019-01-08 18:28:19', '2019-01-08 18:28:19', NULL),
('d8ad31f0-13ad-11e9-be5a-6f3e92c969a1', 'a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'Mendapatkan dana tambahan untuk proyek ini. Mempengaruhi supplier untuk memproduksi bahan mentah dengan harga yang lebih tinggi daripada yang sebelumnya, sampai volume yang ada mencapai level yang diinginkan.', 3, '2019-01-08 18:28:19', '2019-01-08 18:28:19', NULL),
('d8b8f8f0-13ad-11e9-ab54-4917ce56de3a', 'a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'Tidak menghabiskan banyak waktu untuk mempengaruhi supplier yang ada saat ini. Mencari alternatif supplier yang dapat merancang bahan mentah yang mirip dan mulai memproduksi lagi.', 1, '2019-01-08 18:28:19', '2019-01-08 18:28:19', NULL),
('e3b84d00-13ad-11e9-8a50-a35413674668', 'caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'Meminta tim Anda menjelaskan alasan mengenai mengapa Anda tidak mendapatkan informasi mengenai situasi ini lebih awal. Anda menghubungi pelanggan untuk menjelaskan situasinya dan menginformasikan mengenai opsi lain berupa pengiriman melalui udara dengan adanya biaya tambahan. Anda meminta maaf atas ketidaknyamanan yang terjadi.', 3, '2019-01-08 18:28:38', '2019-01-08 18:28:38', NULL),
('e3bef7e0-13ad-11e9-ac33-2beee5c5943e', 'caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'Kehilangan kendali emosi dan menunjukkan kekecewaan pada tim Suppy Chain karena tidak melibatkan Anda dalam situasi ini. Anda akan meminta mereka untuk menemukan solusi dan mengkomunikasikannya langsung kepada pelanggan.', 2, '2019-01-08 18:28:38', '2019-01-08 18:28:38', NULL),
('e3c5b280-13ad-11e9-80cd-0f3e979114b8', 'caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'Mengekspresikan kemarahan Anda pada tim Suppy Chain, kemudian mendiskusikan solusi untuk isu ini. Anda tidak akan menghubungi pelanggan dan menginformasikan mengenai hal ini, sampai dengan pelanggan yang menghubungi Anda. Dengan begini, Anda merasa bisa mengulur waktu lebih banyak untuk sampai akhirnya mendapatkan solusi.', 1, '2019-01-08 18:28:38', '2019-01-08 18:28:38', NULL),
('e3cc70f0-13ad-11e9-8616-7901c7205592', 'caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'Mengekspresikan kekecewaan Anda pada tim Supply Chain karena tidak menginformasikan pada Anda mengenai situasi tersebut sampai dengan Anda bertanya langsung. Anda minta produk tersebut digabung dengan produk lain yang akan dikirim lewat udara. Anda juga akan menghubungi pelanggan dengan segera mengenai situasi ini dan meminta maaf atas penundaan dan ketidaknyamanan yang terjadi.', 4, '2019-01-08 18:28:38', '2019-01-08 18:28:38', NULL),
('eadba670-13ad-11e9-86cb-e102f9efaced', '06d49590-0f6f-11e9-a392-d351d278e829', 'Segera menginformasikan pada management senior mengenai perlunya intervensi segera karena ini adalah isu yang besar.', 1, '2019-01-08 18:28:50', '2019-01-08 18:28:50', NULL),
('eae267a0-13ad-11e9-9ce7-cf4d6f63b913', '06d49590-0f6f-11e9-a392-d351d278e829', 'Memeriksa separah apa situasinya dan berkonsultasi intensif dengan departemen yang relevan.', 2, '2019-01-08 18:28:50', '2019-01-08 18:28:50', NULL),
('eae922a0-13ad-11e9-b8c0-bb6bbacd1198', '06d49590-0f6f-11e9-a392-d351d278e829', 'Menginformasikan pada departemen yang relevan, untuk menggantikan produk yang ada saat ini dengan yang baru, dan memastikan bahwa problem seperti ini dapat terselesaikan lebih awal, sebelum produk didistribusikan ke pelanggan.', 4, '2019-01-08 18:28:50', '2019-01-08 18:28:50', NULL),
('eaefe480-13ad-11e9-8686-e9eac5c092c4', '06d49590-0f6f-11e9-a392-d351d278e829', 'Menarik produk dari market dengan segera, dan memastikan bahwa produk yang baru dapat segera terkirim secepat mungkin.', 3, '2019-01-08 18:28:50', '2019-01-08 18:28:50', NULL),
('f2330e00-13ad-11e9-abec-21cbb589d97d', '2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'Bentuk tim penelitian yang ditujukan untuk menginvestigasi klaim dari pelanggan tersebut, dan mempresentasikan hasilnya kepada pelanggan dalam rangka untuk mendapatkan kembali kepecayaan dan membangun kembali kredibilitas produk Anda.', 4, '2019-01-08 18:29:02', '2019-01-08 18:29:02', NULL),
('f239b6c0-13ad-11e9-baf4-c995dda224ff', '2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'Menempatkan klaim tersebut dalam sistem umpan balik pelanggan (customer feedback system) dalam rangka untuk menghubungkan perusahan dengan pelanggan dan memahami apa yang menjadi concern utama mereka.', 2, '2019-01-08 18:29:02', '2019-01-08 18:29:02', NULL),
('f2407d10-13ad-11e9-94b1-156e9022dfe8', '2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'Menganalisis data performance organisasi dan mengidentifikasi mana produk spesifik yang memang tidak berjalan baik, dan mengatasinya dengan cara yang spesifik.', 3, '2019-01-08 18:29:02', '2019-01-08 18:29:02', NULL),
('f2473aa0-13ad-11e9-b654-cfa599e0360c', '2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'Mengeluarkan pernyataan yang sangat menekankan bahwa organisasi sangat memperhatikan kualitas dan standar yang berlaku, dimana hal ini juga ditaati oleh seluruh proses produksi untuk seluruh produk dari perusahaan Anda.', 1, '2019-01-08 18:29:02', '2019-01-08 18:29:02', NULL),
('fa44d110-13ad-11e9-a476-7d49ce823db3', '5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'Menerima bahwa seharusnya Anda terlebih dahulu menginformasikan Pimpinan Proyek tersebut. Anda juga perlu menjelaskan pentingnya situasi yang terjadi sehingga diperlukan tindakan lebih lanjut, mengingat terbatasnya sumber daya. Anda juga meminta maaf atas ketidaknyamanan yang terjadi.', 4, '2019-01-08 18:29:16', '2019-01-08 18:29:16', NULL),
('fa4b8920-13ad-11e9-844a-4573b9d0cb48', '5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'Anda meminta maaf atas ketidaknyamanan yang ditimbulkan. Anda menawarkan kompensasi dengan akan adanya tim Anda juga bisa mengalokasikan waktu lebih banyak di proyek lain.', 3, '2019-01-08 18:29:16', '2019-01-08 18:29:16', NULL),
('fa524850-13ad-11e9-8e57-3de90b2d3b7f', '5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'Bertahan bahwa tindakan Anda benar dan menekankan pentingnya peran dari kedua anggota tim tersebut untuk terlibat penuh di waktu tersebut.', 2, '2019-01-08 18:29:16', '2019-01-08 18:29:16', NULL),
('fa590030-13ad-11e9-8388-8995108616f3', '5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'Anda mengabaikan kekecewaan tersebut dan fokus pada proyek Anda sendiri. Anda memprioritaskan tugas, dan Anda hanya butuh untuk memastikan bahwa tugas terselesaikan dengan baik.', 1, '2019-01-08 18:29:16', '2019-01-08 18:29:16', NULL);

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
('5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'Kuliah/Kerja', 1, '2019-01-03 08:36:42', '2019-01-03 08:36:42', NULL),
('9d6c0c80-17b2-11e9-b5c7-4d0cdaf120e2', 'Tes Kompetensi Kerja', 1, '2019-01-13 21:12:32', '2019-01-13 21:12:32', NULL),
('a981f610-1179-11e9-b9ab-07c4a9277062', 'Minat Bidang', 3, '2019-01-05 23:09:44', '2019-01-07 21:29:24', NULL),
('ee20f8a0-0809-11e9-b5ff-95805e3671f5', 'Testing', NULL, '2018-12-24 22:57:15', '2019-01-03 06:26:39', '2019-01-03 06:26:39'),
('f5eaceb0-080b-11e9-a614-c9381f011e11', 'Coba', NULL, '2018-12-24 23:11:47', '2019-01-03 06:26:34', '2019-01-03 06:26:34');

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
('8326e910-1393-11e9-9bea-d779a0d0f0e0', 2, 'sdfdfasd', NULL, '2019-01-08 15:19:49', '2019-01-08 15:31:04', '2019-01-08 15:31:04');

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
('028fbdb0-1492-11e9-a6e6-590729649924', 'Bagi saya menjadi juru bicara dalam sebuah kelompok merupakan sebuah kesenangan', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 23, '2019-01-09 21:41:35', '2019-01-09 21:41:35', NULL),
('057c7e00-14a2-11e9-bd39-3d8aedb1349f', 'Asdfasdfsdf', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '01df0360-0f5c-11e9-860b-fb3757928a71', '00e30490-0f6d-11e9-93d3-39e2452f215e', 1, '2019-01-09 23:36:12', '2019-01-10 03:20:31', '2019-01-10 03:20:31'),
('06d49590-0f6f-11e9-a392-d351d278e829', 'Anda adalah Regional Manager untuk perusahaan manufaktur dan telah memimpin salah satu cabangnya selama 4 tahun. Para sales yang bekerja dengan Anda telah seringkali dipanggil oleh beberapa pelanggan terkait adanya defect (kecacatan pada kualitas produk) yang sering terjadi pada persediaan produk Anda. Apa yang akan Anda lakukan terkait hal ini?', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'eb01f110-0f5b-11e9-9c79-a1aff1ef675f', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 5, '2019-01-03 08:48:34', '2019-01-08 18:28:50', NULL),
('0c318d30-148e-11e9-af89-49e0a103739a', 'Saya adalah orang yang mengikuti jadwal', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 17, '2019-01-09 21:13:13', '2019-01-09 21:13:13', NULL),
('1cf2e880-1482-11e9-8e5f-4d38f54168e4', 'Saya menghindari tugas yang mengharuskan saya untuk berbicara dihadapan orang banyak', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 16, '2019-01-09 19:47:47', '2019-01-09 19:47:47', NULL),
('1f60f780-0f70-11e9-8d48-176679ec6962', 'Anda adalah manager level menengah (middle manager) di perusahaan ABC. Anda mengelola tim yang terdiri dari 8 orang. Selama 6 bulan terakhir, beban kerja tim Anda melonjak tajam. Tingginya jumlah pengiriman membuat kekacaaun terjadi setiap hari di operasi perusahaan. Anda menyadari bahwa tim Anda dalam hal ini susah payah untuk menepati deadline, dan tidak mampu untuk secara efektif menentukan prioritas tugas. Ini juga yang menjadikan konflik terjadi di tim Anda. Anda juga menyadari bahwa proses internal perlu untuk distandarkan. Bagaimana Anda akan mengatasi hal ini?', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '59050b10-0f5c-11e9-b920-5112040e5cec', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 10, '2019-01-03 08:56:24', '2019-01-08 18:29:54', NULL),
('2c4ad910-148e-11e9-8663-a318cc155d2a', 'Sulit bagi saya mengerjakan tugas yang tidak memiliki standar yang jelas', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 18, '2019-01-09 21:14:07', '2019-01-09 21:14:07', NULL),
('2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'Anda bekerja sebagai Marketing Manager untuk perusahaan produsen makanan bernama XYZ. Baru-baru ini, produk Anda telah mendapatkan publikasi negatif di pasar dan pelanggan mulai memberikan keluhan terkait dengan gangguan kesehatan yang mereka alami, terutama kolesterol dan obesitas. Anda dihadapkan pada isu dimana Anda harus mengembalikan pelanggan Anda pada produk Anda dan mendapatkan kembali kepercayaan mereka. Bagaimana Anda menyelesaikan hal ini :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '01df0360-0f5c-11e9-860b-fb3757928a71', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 6, '2019-01-03 08:49:43', '2019-01-08 18:29:02', NULL),
('442a90c0-0f70-11e9-a679-27b3e966260c', 'Anda menemukan bahwa ada penurunan yang signifikan pada motivasi dari anggota tim Anda. Rendahnya motivasi dan minat mereka ditandai dengan turunnya kualitas hasil kerja. Anda juga menerima tanda non-verbal dari mereka tentang kebosanan akan hal-hal monoton yang saat ini ada di pekerjaan mereka. Tindakan apa yang akan Anda ambil :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '60b99000-0f5c-11e9-9e8c-a1ca9f23143c', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 11, '2019-01-03 08:57:26', '2019-01-08 18:30:06', NULL),
('4a856ae0-1492-11e9-b12b-832efb95479e', 'Saya tetap tenang meskipun segala sesuatunya tidak berjalan sebagaimana mestinya', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 24, '2019-01-09 21:43:35', '2019-01-09 21:43:35', NULL),
('4c67b840-148e-11e9-96ea-63d03922ec60', 'Saya tidak begitu menikmati pekerjaan yang memiliki batasan yang sangat kaku', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 19, '2019-01-09 21:15:01', '2019-01-09 21:15:01', NULL),
('5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'Anggota tim Anda bekerja dalam cross-functional team, dimana tiap anggota tim menjadi bagian penting dari beberapa proyek dalam waktu bersamaan. Pada suatu hari, Anda kekurangan staf, kemudian Anda meminta 2 orang tim Anda untuk menyediakan waktu extra untuk proyek yang sedang Anda tangani, dimana hal ini akan menyebabkan waktu mereka juga menjadi lebih sedikit untuk proyek yang lain. Di satu sisi mereka memang wajib menjalankannya, namun Pimpinan Proyek lain merasa kecewa dengan kebijakan yang Anda terapkan, kemudian menunjukkan kemarahan pada anggota tim Anda tersebut, serta mengeskalasi persoalan ini ke pimpinan yang lebih tinggi. Anda kemudian :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '359ea130-0f5c-11e9-bfc7-89bf49dc6511', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 7, '2019-01-03 08:51:02', '2019-01-08 18:29:15', NULL),
('61fd71b0-148e-11e9-98d6-7fea9e042cfe', 'Tidak mudah bagi saya untuk mengikuti prosedur yang baku', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '00e30490-0f6d-11e9-93d3-39e2452f215e', 20, '2019-01-09 21:15:37', '2019-01-09 21:15:37', NULL),
('6708efe0-0f6e-11e9-a01a-c3877e50b170', 'Anda menemukan bahwa salah satu anggota tim Anda, Rafi, merupakan salah satu anggota tim yang selama ini memiliki performance yang sangat baik, namun saat ini sedang kesulitan mencapai targetnya. Anda juga menerima umpan balik negatif tentang performancenya dari anggota tim lain. Anda secara informal mengajak Rafi bicara, namun hal ini tidak membawa perubahan. Anda khawatir hal ini akan berdampak pada anggota tim lain dan pencapaian target tim secara keseluruhan. Apa yang kira-kira akan Anda lakukan :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'b2963f70-0f5b-11e9-b9df-750c3f631f39', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 2, '2019-01-03 08:44:06', '2019-01-08 18:28:06', NULL),
('8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', 'Perusahaan Anda telah diakuisisi oleh salah satu perusahaan multi nasional. Anda dan tim Anda dalam hal ini dipertahankan oleh organisasi. Meskipun begitu, kondisi pekerjaan tentu akan menjadi semakin kompleks dengan adanya perubahan ini. Selain itu, tim anda bisa jadi tidak dapat meminta adanya kenaikan gaji tahunan dalam periode tahun fiskal saat ini. Anda diharapkan untuk berkomunikasi dengan anggota tim Anda. Yang Anda lakukan :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '487ce5c0-0f5c-11e9-991e-67af154c3146', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 8, '2019-01-03 08:52:17', '2019-01-08 18:29:27', NULL),
('8f539bb0-1492-11e9-97f4-5149de7ce4b5', 'Bekerja dalam kurun waktu panjang dan menyita fokus seringkali membuat saya menjadi Lelah', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 25, '2019-01-09 21:45:31', '2019-01-09 21:45:31', NULL),
('92a9aa90-1481-11e9-a4b8-192f82e3016a', 'Orang lain tidak begitu mudah menerima pendapat saya', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 14, '2019-01-09 19:43:55', '2019-01-09 19:43:55', NULL),
('9356b4c0-148e-11e9-bfed-e16cde6762f9', 'Tidak mudah bagi saya untuk bisa membuat orang lain memahami apa yang saya maksud', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 21, '2019-01-09 21:17:00', '2019-01-09 21:17:00', NULL),
('a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'Anda adalam pemimpin proyek peluncuran salah satu produk baru di perusahaan Anda. Bahan mentah yang Anda dapatkan dari supplier telah berhenti diproduksi karena pelanggan lain mereka yang juga membeli bahan tersebut, tidak lagi membeli dari mereka. Hal ini menyebabkan proyek harus ditunda beberapa bulan. Anda kemudian :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 3, '2019-01-03 08:45:46', '2019-01-08 18:28:19', NULL),
('a2e25c40-14c9-11e9-8712-bb081596f2ba', 'Seringkali saya menghindari tugas yang mengharuskan saya untuk mempresentasikan sesuatu', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 28, '2019-01-10 04:19:46', '2019-01-10 04:19:46', NULL),
('a8c39100-1492-11e9-b92c-f19493d5ccd6', 'Saya tidak menikmati tugas yang mengharuskan saya untuk mengerjakannya secara terburu-buru', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 26, '2019-01-09 21:46:14', '2019-01-09 21:46:14', NULL),
('b7e40610-0f6f-11e9-ad43-7718fd52c513', 'Anda adalah seorang manager dari pabrik produsen sabun. Terdapat sebuah pesanan yang muncul dari aktivitas promosi, yang paketnya dibatasi dalam jangka waktu tertentu. Dalam hal ini, pelanggan tersebut memesan dalam jumlah besar. Anda telah mengalokasikan sumber daya untuk memenuhi pesanan tersebut, namun terdapat kendala pada mesin produksi. Anda akan :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '50c09a10-0f5c-11e9-bbb7-e94462002084', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 9, '2019-01-03 08:53:31', '2019-01-08 18:29:40', NULL),
('bd6f4600-1179-11e9-b575-6dc38dfebbd0', 'Saya merasa tidak nyaman saat harus meyakinkan orang lain dengan ide saya', 'a981f610-1179-11e9-b9ab-07c4a9277062', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 13, '2019-01-05 23:10:17', '2019-01-09 19:42:43', NULL),
('bf26ffe0-1492-11e9-9d25-851c53327f9a', 'Saya mudah merasa kecewa terhadap sesuatu yang tidak berjalan sebagaimana mestinya.', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '00e30490-0f6d-11e9-93d3-39e2452f215e', 27, '2019-01-09 21:46:51', '2019-01-09 21:46:51', NULL),
('caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'Pelanggan Anda mendekati Anda untuk bisa mendapatkan produk yang dapat dikirim ke Amerika melalui kapal laut. Standar waktu pengiriman adalah 3 bulan, sedangkan, dalam hal ini pelanggan Anda meminta lebih cepat. Anda berkordinasi dengan tim Supply Chain (Distribusi) guna mempercepat pengiriman. Dua hari sebelum pengiriman, Anda menghubungi tim Supply Chain untuk mendapatkan update informasi mengenai hal ini. Namun ternyata Anda justru menemukan bahwa produk tersebut tidak ada pada pengiriman sebelumnya. Anda akan :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'cda265b0-0f5b-11e9-af00-7dbd8a2821eb', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 4, '2019-01-03 08:46:53', '2019-01-08 18:28:38', NULL),
('cb462fe0-0f72-11e9-9ffa-8102475a3275', 'Anda bertanggung jawab untuk mensupervisi design sampai dengan meluncurkan sebuah produk baru. Anda merasa tim Anda kurang kreatif dalam hal ini dan butuh untuk lebih dimotivasi untuk sama-sama mengumpulkan ide dan sepakat dengan sebuah ide baru. Mereka mengatakan kepada Anda bahwa ada kelangkaan penelitian di daerah tersebut dan oleh karena itu semakin sulit bagi mereka untuk memikirkan gagasan baru. Bagaimana Anda akan membantu tim Anda?', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '6789fdf0-0f5c-11e9-836f-1d5cb49ab595', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 12, '2019-01-03 09:15:32', '2019-01-08 18:30:22', NULL),
('cc5f6620-1491-11e9-8733-bfc14192a2dc', 'Seringkali orang lain perlu memastikan kembali kepada saya apakah ia memahami apa yang saya maksud', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', 'bef12100-0f5b-11e9-bdf0-4d7b17b3c2ed', '00e30490-0f6d-11e9-93d3-39e2452f215e', 22, '2019-01-09 21:40:04', '2019-01-09 21:40:04', NULL),
('d24729e0-1481-11e9-b128-6bbf08665fff', 'Saya menyukai aktivitas yang melibatkan proses penyampaian ide baru pada orang lain', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '00e30490-0f6d-11e9-93d3-39e2452f215e', 15, '2019-01-09 19:45:42', '2019-01-09 19:45:42', NULL),
('e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'Sebagai Manager dari produk yang akan segera diluncurkan, Anda ditugaskan untuk menangani beberapa tugas yang kritikal. Salah satunya adalah untuk bernegosiasi dengan supplier untuk menurunkan jumlah minimum pemesanan sampai dengan produk nantinya diluncurkan secara resmi dan mendapatkan daya tarik pasar. Anda akan :', '5eea8d20-0f6d-11e9-aea5-793ae7fb0bc3', '7be045d0-0f5b-11e9-8402-db52a8444bc8', '07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 1, '2019-01-03 08:40:22', '2019-01-08 18:27:39', NULL);

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
('4c645140-1689-11e9-bf26-a127c9130f28', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'c0d87e40-13ad-11e9-ad2d-b902eed9ccdc', 3, '2019-01-12 09:44:15', '2019-01-12 09:44:15', NULL),
('4c6bd620-1689-11e9-bdbe-f17f749245b7', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '6708efe0-0f6e-11e9-a01a-c3877e50b170', 'd0baee20-13ad-11e9-924f-2552e180a7fb', 1, '2019-01-12 09:44:15', '2019-01-12 09:44:15', NULL),
('4c7431b0-1689-11e9-8efb-afa0f9917c69', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'd89c67a0-13ad-11e9-b2fc-c7b0e0cc4212', 3, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4c8f3450-1689-11e9-a48f-1b731b2ff5a1', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'e3b84d00-13ad-11e9-8a50-a35413674668', 2, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4c9797a0-1689-11e9-a9bd-0d1af1234c20', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '06d49590-0f6f-11e9-a392-d351d278e829', 'eadba670-13ad-11e9-86cb-e102f9efaced', 4, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4ca00250-1689-11e9-9e40-73947d98cd7d', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'f2330e00-13ad-11e9-abec-21cbb589d97d', 3, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4ca871f0-1689-11e9-bd12-7d4245e06946', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'fa44d110-13ad-11e9-a476-7d49ce823db3', 2, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cb0e210-1689-11e9-8700-53b3f6ca9f95', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', '00da6a30-13ae-11e9-8bd4-2d03d4323617', 3, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cb940a0-1689-11e9-b300-b163c9fde882', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'b7e40610-0f6f-11e9-ad43-7718fd52c513', '08d0d4e0-13ae-11e9-a443-df04d500f388', 1, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cc1b420-1689-11e9-83ce-ed556220eb94', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '1f60f780-0f70-11e9-8d48-176679ec6962', '11030630-13ae-11e9-b004-99c01a449d51', 4, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cca1c90-1689-11e9-ba3d-f3f90a04094c', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '442a90c0-0f70-11e9-a679-27b3e966260c', '183023f0-13ae-11e9-aa56-092825b9ebc5', 4, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cd28ba0-1689-11e9-9eed-579b19a40bc7', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'cb462fe0-0f72-11e9-9ffa-8102475a3275', '21b5f3e0-13ae-11e9-a355-231a03f10eef', 1, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cdaf800-1689-11e9-b165-bd3b2273c6e5', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'bd6f4600-1179-11e9-b575-6dc38dfebbd0', 'b162a5d0-1481-11e9-83f1-9b6133fe699c', 1, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4ce36790-1689-11e9-9baa-0de8efd8f910', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '92a9aa90-1481-11e9-a4b8-192f82e3016a', '92b2c8c0-1481-11e9-ae81-11f772343748', 2, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cebd7b0-1689-11e9-841d-e9c160e0f7fc', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'd24729e0-1481-11e9-b128-6bbf08665fff', 'd24f8b60-1481-11e9-a634-3d45769cb6ac', 2, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cf44500-1689-11e9-a778-a367ece0121c', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '1cf2e880-1482-11e9-8e5f-4d38f54168e4', '1cfb7160-1482-11e9-9ce2-7b25be38483a', 1, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4cfcb260-1689-11e9-bb65-794ca0c6020f', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '0c318d30-148e-11e9-af89-49e0a103739a', '0c3b0bd0-148e-11e9-a2c9-d58311d8162b', 1, '2019-01-12 09:44:16', '2019-01-12 09:44:16', NULL),
('4d237b40-1689-11e9-866f-092b3af5895a', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '2c4ad910-148e-11e9-8663-a318cc155d2a', '2c5383f0-148e-11e9-bab8-fb971069e6a0', 4, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d2a8020-1689-11e9-a358-7b65e8148a46', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '4c67b840-148e-11e9-96ea-63d03922ec60', '4cbb4a90-148e-11e9-af1d-ef92ffa58ac8', 4, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d313740-1689-11e9-833d-3112efe148c8', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '61fd71b0-148e-11e9-98d6-7fea9e042cfe', '620a9180-148e-11e9-8cb0-e3d34697643c', 2, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d380190-1689-11e9-8598-47a7570d6f93', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '9356b4c0-148e-11e9-bfed-e16cde6762f9', '935fd5d0-148e-11e9-8bd6-19fb9ca39002', 4, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d3ebf20-1689-11e9-87cd-9dea77ba8f24', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'cc5f6620-1491-11e9-8733-bfc14192a2dc', 'cc6f9cd0-1491-11e9-a0fb-e7bb7dd89048', 1, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d4579d0-1689-11e9-9d55-5d2a524f1433', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '028fbdb0-1492-11e9-a6e6-590729649924', '10b4ef60-14a5-11e9-b1f1-933de62bb760', 1, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d4c48b0-1689-11e9-bf2a-39c0efd41661', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '4a856ae0-1492-11e9-b12b-832efb95479e', '4a8eba60-1492-11e9-899d-971aa397f9a8', 1, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d5303a0-1689-11e9-9288-75a73a857794', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', '8f539bb0-1492-11e9-97f4-5149de7ce4b5', '8f6168c0-1492-11e9-a98f-973e3c523a6a', 2, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d59b8a0-1689-11e9-b5ba-db610fd0bc57', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'a8c39100-1492-11e9-b92c-f19493d5ccd6', 'a8ccbe70-1492-11e9-9601-bba501870c1d', 3, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d607910-1689-11e9-a777-d34af13c8602', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'bf26ffe0-1492-11e9-9d25-851c53327f9a', 'bf336fe0-1492-11e9-bc43-d72ffee505ff', 1, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('4d6744d0-1689-11e9-a359-47fec3d732ed', '2f6d2ec0-1689-11e9-8d3b-716264dab91e', 'a2e25c40-14c9-11e9-8712-bb081596f2ba', 'a2ec3b40-14c9-11e9-b5c2-6faf57b64984', 2, '2019-01-12 09:44:17', '2019-01-12 09:44:17', NULL),
('fc893860-17b3-11e9-9ec9-a9b38fb50f9e', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'e1a9b370-0f6d-11e9-b0c2-ab2365b839aa', 'c0d87e40-13ad-11e9-ad2d-b902eed9ccdc', 1, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fc90ace0-17b3-11e9-b416-9763f5dcb49e', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '6708efe0-0f6e-11e9-a01a-c3877e50b170', 'd0baee20-13ad-11e9-924f-2552e180a7fb', 3, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fc9777a0-17b3-11e9-b6fe-e3f1c8d1f698', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'a2c9e020-0f6e-11e9-82a9-279ec6dffbcd', 'd89c67a0-13ad-11e9-b2fc-c7b0e0cc4212', 4, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fc9e2990-17b3-11e9-8ce7-e528fe89466b', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'caaf29c0-0f6e-11e9-8afa-9966f4e113ee', 'e3b84d00-13ad-11e9-8a50-a35413674668', 3, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fca4e740-17b3-11e9-b608-8381ddd6885d', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '06d49590-0f6f-11e9-a392-d351d278e829', 'eadba670-13ad-11e9-86cb-e102f9efaced', 3, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fcaba030-17b3-11e9-afc4-8d8bc8e06ca9', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '2ff4c720-0f6f-11e9-8302-4d215a455a1e', 'f2330e00-13ad-11e9-abec-21cbb589d97d', 1, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fcbfe160-17b3-11e9-8fad-29a35832e406', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '5f7e9160-0f6f-11e9-b5f4-81e43492c938', 'fa44d110-13ad-11e9-a476-7d49ce823db3', 2, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fcc69fb0-17b3-11e9-9fd5-17f66bda0d31', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '8bc2ef10-0f6f-11e9-9bb0-c707a70016bb', '00da6a30-13ae-11e9-8bd4-2d03d4323617', 4, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fccd9660-17b3-11e9-a92f-f3bcb44c5c2e', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'b7e40610-0f6f-11e9-ad43-7718fd52c513', '08d0d4e0-13ae-11e9-a443-df04d500f388', 1, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fcd60ba0-17b3-11e9-b7b3-95b14506ef34', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '1f60f780-0f70-11e9-8d48-176679ec6962', '11030630-13ae-11e9-b004-99c01a449d51', 4, '2019-01-13 21:22:21', '2019-01-13 21:22:21', NULL),
('fcde74d0-17b3-11e9-94d2-85738ad40cbc', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '442a90c0-0f70-11e9-a679-27b3e966260c', '183023f0-13ae-11e9-aa56-092825b9ebc5', 4, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fce6dfc0-17b3-11e9-aaad-8b78ed0e3074', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'cb462fe0-0f72-11e9-9ffa-8102475a3275', '21b5f3e0-13ae-11e9-a355-231a03f10eef', 1, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fcef4df0-17b3-11e9-b9e6-4b89996759fa', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'bd6f4600-1179-11e9-b575-6dc38dfebbd0', 'b162a5d0-1481-11e9-83f1-9b6133fe699c', 2, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fcf7b7e0-17b3-11e9-972c-7bbf02a74b35', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '92a9aa90-1481-11e9-a4b8-192f82e3016a', '92b2c8c0-1481-11e9-ae81-11f772343748', 1, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd004170-17b3-11e9-9abd-739b3a1cc547', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'd24729e0-1481-11e9-b128-6bbf08665fff', 'd24f8b60-1481-11e9-a634-3d45769cb6ac', 1, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd089ea0-17b3-11e9-8aae-458f00e82542', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '1cf2e880-1482-11e9-8e5f-4d38f54168e4', '1cfb7160-1482-11e9-9ce2-7b25be38483a', 2, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd110870-17b3-11e9-981e-abde6856fc9a', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '0c318d30-148e-11e9-af89-49e0a103739a', '0c3b0bd0-148e-11e9-a2c9-d58311d8162b', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd1977a0-17b3-11e9-889b-73aad019e2f1', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '2c4ad910-148e-11e9-8663-a318cc155d2a', '2c5383f0-148e-11e9-bab8-fb971069e6a0', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd21ec60-17b3-11e9-8fdb-abb42a5eefdd', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '4c67b840-148e-11e9-96ea-63d03922ec60', '4cbb4a90-148e-11e9-af1d-ef92ffa58ac8', 4, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd2a6280-17b3-11e9-8ae9-17159c8ef4fe', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '61fd71b0-148e-11e9-98d6-7fea9e042cfe', '620a9180-148e-11e9-8cb0-e3d34697643c', 4, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd32cc00-17b3-11e9-981f-9705f6e1c0ba', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '9356b4c0-148e-11e9-bfed-e16cde6762f9', '935fd5d0-148e-11e9-8bd6-19fb9ca39002', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd3b2d10-17b3-11e9-92c9-237fabbefc70', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'cc5f6620-1491-11e9-8733-bfc14192a2dc', 'cc6f9cd0-1491-11e9-a0fb-e7bb7dd89048', 2, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd439f40-17b3-11e9-a1c2-670306d6b083', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '028fbdb0-1492-11e9-a6e6-590729649924', '10b4ef60-14a5-11e9-b1f1-933de62bb760', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd4c1690-17b3-11e9-9fc5-cdcfb731ccf2', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '4a856ae0-1492-11e9-b12b-832efb95479e', '4a8eba60-1492-11e9-899d-971aa397f9a8', 4, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd547c00-17b3-11e9-be9c-9b4790ad7ae8', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', '8f539bb0-1492-11e9-97f4-5149de7ce4b5', '8f6168c0-1492-11e9-a98f-973e3c523a6a', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd5ce950-17b3-11e9-b7a1-311db19350ce', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'a8c39100-1492-11e9-b92c-f19493d5ccd6', 'a8ccbe70-1492-11e9-9601-bba501870c1d', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd6559b0-17b3-11e9-9787-f9ed4a533f69', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'bf26ffe0-1492-11e9-9d25-851c53327f9a', 'bf336fe0-1492-11e9-bc43-d72ffee505ff', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL),
('fd6dcf60-17b3-11e9-82da-312ef49bc489', 'b8ebaf00-17b3-11e9-9048-010517a2aa80', 'a2e25c40-14c9-11e9-8712-bb081596f2ba', 'a2ec3b40-14c9-11e9-b5c2-6faf57b64984', 3, '2019-01-13 21:22:22', '2019-01-13 21:22:22', NULL);

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
('07bf2960-0f6d-11e9-a958-a92c3b1d79d7', 'SJQ', 'SJQ', 40, 2, '2019-01-03 08:34:16', '2019-01-08 18:42:44', NULL),
('c8c62e30-1303-11e9-a75c-e1165b02271c', 'Sdaf', 'Asdf', 44, 11, '2019-01-07 22:10:58', '2019-01-07 22:14:56', '2019-01-07 22:14:56');

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
  `code_reset_password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `nickname`, `phone`, `address`, `image`, `level`, `active`, `confirmation_code`, `code_reset_password`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1', 'pandhu@gmail.com', 'pandhu612', '$2y$10$pxeAEbB1Mb1MPj1Srz1XHue2EFQ0jZ7UiFTe79mM/p8.YRVvBE.YC', 'Pandhu', 'Wibowo', 'Pandhu', '081296807905', 'Perumahan Griya Bunga Asri', 'PA-1544794744.jpg', 'Super Admin', '1', NULL, '', '2018-12-13 08:07:04', '2018-12-15 08:17:26', NULL),
('ffd13dc0-0b31-11e9-9cbb-011663f879e4', 'pandhuw58@gmail.com', 'Pandhu', '$2y$10$k99W/gtx7Nc4npqpQi6G1Ord5gIWiJvB0Bu6Zry.nle2ba91erYE6', 'Pandhu', 'Wibowo', '', '081296807905', '', 'PA-1547006606.jpg', 'Participant', '1', NULL, 'CWj92ySnkg8igcL6bd1VRW0NKXCNix', '2018-12-28 23:21:38', '2019-01-13 02:04:01', NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `assesment_kompetensis`
--
ALTER TABLE `assesment_kompetensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ass_id` (`ass_id`),
  ADD KEY `kompetensi_id` (`kompetensi_id`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assesments`
--
ALTER TABLE `assesments`
  ADD CONSTRAINT `fk_assesment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assesment_kompetensis`
--
ALTER TABLE `assesment_kompetensis`
  ADD CONSTRAINT `fk_assesment_assesment_kompetensi` FOREIGN KEY (`ass_id`) REFERENCES `assesments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kompetensis_assesment_kompetensi` FOREIGN KEY (`kompetensi_id`) REFERENCES `kompetensis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_jawaban_pertanyaan_assessment` FOREIGN KEY (`jawaban_id`) REFERENCES `jawabans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pertanyaan_pertanyaan_assesment` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
