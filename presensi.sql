-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 06:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_golongan` bigint(20) UNSIGNED NOT NULL,
  `nama_golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `id_golongan`, `nama_golongan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pembina Putra', 'Pembina Putra', NULL, NULL),
(2, 2, 'Pembina Putri', 'Pembina Putri', NULL, NULL),
(3, 3, 'Pembantu Pembina Putra', 'Pembantu Pembina Putra', NULL, NULL),
(4, 4, 'Pembantu Pembina Putri', 'Pembantu Pembina Putri', NULL, NULL),
(5, 5, 'Penggalang Ramu', 'Penggalang Ramu', NULL, NULL),
(6, 6, 'Penggalang Rakit', 'Penggalang Rakit', NULL, NULL),
(7, 7, 'Penggalang Rakit', 'Penggalang Rakit', NULL, NULL),
(8, 8, 'Penggalang Terap', 'Penggalang Terap', NULL, NULL),
(9, 9, 'Dewan Galang', 'Dewan Galang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_31_225645_create_presensi_table', 1),
(6, '2022_06_20_041634_tabel_golongan', 1),
(7, '2022_07_17_212001_create_golongan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `j_masuk` time NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` enum('hadir','sakit','ijin','alpha') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `id_user`, `tanggal_absen`, `j_masuk`, `foto`, `ket`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 1, '2022-07-17', '11:28:46', '1658032126.jpeg', 'sakit', NULL, '2022-07-17 04:28:46', '2022-07-17 04:28:46'),
(8, 1, '2022-07-17', '13:14:21', '1658038461.jpg', 'hadir', NULL, '2022-07-17 06:14:21', '2022-07-17 06:14:21'),
(9, 6, '2022-07-17', '13:17:18', '1658038638.png', 'hadir', NULL, '2022-07-17 06:17:18', '2022-07-17 06:17:18'),
(10, 1, '2022-07-17', '23:45:29', '1658076329.jpeg', 'hadir', NULL, '2022-07-17 16:45:29', '2022-07-17 16:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nta` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` enum('ADMIN','USER','PEMBINA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_regu` int(11) DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_golongan` int(10) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `email_verified_at`, `password`, `kelas`, `nta`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_tlp`, `roles`, `id_regu`, `jabatan`, `id_golongan`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$OBctipx2riO1h//PMS6aC.U.B0VvAO9nEr6jPIKPAhlJ06EOilMA.', 'VII - A', 1, 'Se', '2002-02-08', 'Laki-laki', 'Se', 'D', '123', 'ADMIN', 1, 'Se', 0, NULL, NULL, NULL, NULL),
(2, 'Gabriel Alvito', 'gbrlalv@gmail.com', 'gabrielalvito', NULL, '$2y$10$4SMyaVWAD/nz2As1VbgnSurK961ippbKlrIH5A/RKQ3YF8w.9FUoa', NULL, 2, 'semarang', '1212-12-12', 'Laki-laki', 'Islam', 'asda', '12', 'PEMBINA', NULL, 'Kamabigus', 2, '1658070026.jpeg', NULL, '2022-07-15 08:29:06', '2022-07-17 15:00:26'),
(3, 'Muhammad Naufal Syarif', 'naufal@gmail.com', 'naufal', NULL, '$2y$10$LEqkKwLj7CXyPvKv92oFU.iOhXH4kH8lHe23KmIHouRuyUFLAvFSW', 'VII - A', 3, 'semarang', '1313-12-13', 'Laki-laki', 'Islam', 'asdas', '081', 'USER', 1, 'Dewan Galang', 5, '1658070805.jpg', NULL, '2022-07-15 08:30:11', '2022-07-17 15:13:25'),
(6, 'test', 'test@gmail.com', 'testt', NULL, '$2y$10$QXqA0rojQpVxrtnO7ENmeurhwKSvblHe0kej36Bb.HlBj0i19gvjO', 'VIII - D', 12, 'semarang', '1212-12-12', 'Laki-laki', 'Budha', 'asdas', '12', 'USER', 1, 'Pelatih Lapangan', 5, '1658038607.jpg', NULL, '2022-07-17 06:16:47', '2022-07-17 06:16:47'),
(7, 'asdasd', 'asdasd@gmail.com', 'sdasdasd', NULL, '$2y$10$cGXf/9SDqwKnu4Xk6YKbp.P2g26ZjxKsazt9VPkPdO8GYPEnO3t4O', NULL, 1, '1', '1212-12-12', 'Laki-laki', 'Islam', 'asasdadsd', '1231222', 'PEMBINA', NULL, 'Kamabigus', 2, '1658068689.jpeg', NULL, '2022-07-17 14:38:09', '2022-07-17 14:38:09'),
(8, 'siswa2', 'siswa2@gmail.com', 'siswa2', NULL, '$2y$10$mNoAcASpDctzQfl3aDb2vukppE2Grq.fIMf.FhVmMyxm5HHLoWdsy', 'VII - B', 1, 'semarang', '1212-12-12', 'Laki-laki', 'Kristen', 'asdasdas', '12', 'USER', 1, 'Pelatih Lapangan', NULL, '1658070873.jpeg', NULL, '2022-07-17 15:14:33', '2022-07-17 15:14:33'),
(9, 'test', 'test4444@gmail.com', 'testttt', NULL, '$2y$10$Dfm3knVYpBiQ2hkjJLs8H.kVQ1ERetPxLnvK.H6MAjQFJWe4kVvIq', NULL, 12, 'semarang', '1212-12-12', 'Laki-laki', 'Islam', 'asasdasdsd', '1213', 'PEMBINA', NULL, 'Kamabigus', 1, '1658070980.jpg', NULL, '2022-07-17 15:16:20', '2022-07-17 15:16:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
