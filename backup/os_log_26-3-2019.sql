-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2019 at 04:55 AM
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
(164, NULL, '127.0.0.1', 'Log Out Button', ' telah keluar.', 'http://localhost:8000/backend/pages/signout', '2019-03-25 20:54:17', '2019-03-25 20:54:17', NULL, 'HiSoRange Generic Browser');

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

-- --------------------------------------------------------

--
-- Table structure for table `log_participants_multiple_choice`
--

CREATE TABLE `log_participants_multiple_choice` (
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
-- Table structure for table `log_partnerships`
--

CREATE TABLE `log_partnerships` (
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

-- --------------------------------------------------------

--
-- Table structure for table `log_testimonials`
--

CREATE TABLE `log_testimonials` (
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
-- Indexes for table `log_participants_multiple_choice`
--
ALTER TABLE `log_participants_multiple_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_participants_results`
--
ALTER TABLE `log_participants_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_partnerships`
--
ALTER TABLE `log_partnerships`
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
-- Indexes for table `log_testimonials`
--
ALTER TABLE `log_testimonials`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `log_logins`
--
ALTER TABLE `log_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `log_pages`
--
ALTER TABLE `log_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1156;

--
-- AUTO_INCREMENT for table `log_participants_answers`
--
ALTER TABLE `log_participants_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_participants_assessments`
--
ALTER TABLE `log_participants_assessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `log_participants_multiple_choice`
--
ALTER TABLE `log_participants_multiple_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_participants_results`
--
ALTER TABLE `log_participants_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log_partnerships`
--
ALTER TABLE `log_partnerships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `log_questions`
--
ALTER TABLE `log_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_registers`
--
ALTER TABLE `log_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
-- AUTO_INCREMENT for table `log_testimonials`
--
ALTER TABLE `log_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_userassessments`
--
ALTER TABLE `log_userassessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_users`
--
ALTER TABLE `log_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
