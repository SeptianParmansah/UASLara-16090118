-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2019 at 03:30 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pramuka_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghargaan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `user_id`, `nama`, `asal_sekolah`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `agama`, `alamat`, `foto`, `penghargaan_id`, `created_at`, `updated_at`) VALUES
(3, 0, 'Allay', 'SMA 2 Slawi', 'L', '2001-10-10', 'Tegal', 'Islam', 'Pegirikan', NULL, 0, '2019-07-09 11:26:12', '2019-07-14 23:33:28'),
(5, 7, 'Putra Aliando', 'SMA 1 Slawi', 'L', '2001-02-02', 'Slawi', 'Islam', 'Dukuhsalam', NULL, 0, '2019-07-09 12:12:42', '2019-07-09 12:12:42'),
(7, 10, 'andi arjani', 'SMA 1 Slawi', 'L', '2001-02-01', 'Slawi', 'Islam', 'Dukuhwaru', 'splash.jpg', 0, '2019-07-09 12:41:45', '2019-07-09 12:41:45'),
(8, 11, 'septian', 'SMA 1 Slawi', 'L', '2001-10-20', 'Tegal', 'Islam', 'Tegal', 'pram.png', NULL, '2019-07-14 23:33:06', '2019-07-14 23:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `alamat`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'io', 'oi', '', 'jangan ikut', NULL, '2019-07-14 21:20:45'),
(2, 'Jambor', 'slawi', '/tmp/php2fKWRw', 'Ikutlah', '2019-07-14 20:57:05', '2019-07-14 20:57:05'),
(6, 'Persami', 'Pemalang', NULL, 'Persami Adalah....', '2019-07-15 06:08:51', '2019-07-15 06:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_07_152227_create_anggota_table', 1),
(4, '2019_07_07_152329_create_kegiatan_table', 1),
(5, '2019_07_15_030249_create_penghargaan_table', 2),
(6, '2019_07_15_030912_create_kegiatan_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penghargaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id`, `nama_penghargaan`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(7, 'Bintang Muda', NULL, 'Bintang Muda...', '2019-07-15 06:10:43', '2019-07-15 06:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'seven', 'seven@mail.com', NULL, '$2y$10$etV3WDETXjoFrBA8HCp0V.D.2tdJoYMssCn7842Ub7foFgiEmLThK', 'zoOYT2W33gEEyA7LkHim7tjktWLvZHQdouLH94FR6eaubp71RQ5dBHYYpbUT', '2019-07-09 07:50:50', '2019-07-09 07:50:50'),
(7, 'anggota', 'Putra Aliando', 'putra@gmail.com', NULL, '$2y$10$W1i1FgjIYMtbI5oEspjgFeLOb3.havCYvfrKNy1Maqez3ek8B6aBa', '96ucptLoNUgXpLMMu8674IFn0h9hJ2VZ6P52BSp8pytQP3WSTT2qy6tW7Aqz', '2019-07-09 12:12:42', '2019-07-09 12:12:42'),
(10, 'anggota', 'andi arjani', 'andi@gmail.com', NULL, '$2y$10$U7QWm2Pg251MYg4VZWphP.Rd5y7UhCz76ECAxN5kVUjCd67SPNLgK', 'rIahUn9CQXApLAiiV1fsC9BWXPZaJolJohxCFJgATEem3DIWZ6BkhjUJYe2r', '2019-07-09 12:41:45', '2019-07-09 12:41:45'),
(11, 'anggota', 'septian', 'septian@ymail.com', NULL, '$2y$10$Vcg1QSWU33.HDEMQLy2jYOIP26EbF6IJ70Y7vBb/8Ck8VhXVNcTr2', 'bBXcrduBe8PwFpTnKgTIHmq9kYcWuKoVqRShYeU6Ozvw1OJ3Ws5wjlwbF35p', '2019-07-14 23:33:05', '2019-07-14 23:33:05'),
(12, 'anggota', 'Alli Saputra', 'alii@gmail.com', NULL, '$2y$10$hEXmaRAbS1079E5m/cZHheUtQ6jkfyBfccQ7mmbWIX6ajRxyBYORG', 'ApsctqG7PZiFLOuHedqIhhDJPR69Sz4wLFsux6ofgsZHI27wENrZDyDMnbbm', '2019-07-15 06:05:51', '2019-07-15 06:05:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
