-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 05:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `foto`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Kesehatan', '3', 'Foto Berita/qnsitHP4LmWBxrC3bzm5ozb3cBuj57mGQOr9ybva.png', 'asas asasasa sasasa sasas asasas', '2021-08-21 21:17:07', '2021-08-21 21:17:07'),
(2, 'qweqweqwe qeq', '1', 'Foto Berita/JwxKwVhQRpLh0tp2G69z2CRG8Mw49G0LbzXwSLxu.png', '<p style=\"text-align: center;\">asasasasasas</p>\r\n<p style=\"text-align: center;\"><strong><span style=\"text-decoration: line-through;\">aasdsadasdasdasdas </span>asdasd adsasd <em>asdasdas</em></strong></p>', '2021-08-22 23:52:31', '2021-08-22 23:52:31'),
(3, 'Bebas', '3', 'Foto Berita/xsOpmTcBURWNuuVNpFpVVf2mxWF99wVgnn36oMyx.png', '<p><strong>adasd asdasd adasd asdasda dasdas dasda</strong> sdasd adasd asdas dasd asd asd asd as das d asdd dsad asd asd as d asd asd as das d asd as d asd as da sd as das da sd ad ad</p>', '2021-08-23 18:41:28', '2021-08-23 18:45:24'),
(4, 'Cara merawat kulit', '3', 'Foto Berita/eHCKD3h1NR1bHCrJ3gatOdQEc95taCeHr2DRI2CT.png', '<p style=\"text-align: center;\">asas asdas<em>d asd</em> asd <strong>adasda dasdas dasdasd asdasd asdasdasd</strong></p>', '2021-08-23 23:56:11', '2021-08-23 23:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `pend` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `user_id`, `foto`, `alamat`, `tempat`, `ttl`, `pend`, `spesialis`, `created_at`, `updated_at`) VALUES
(2, 889889, NULL, 'Kp. a desa bebas', 'Garut', '2021-08-16', 'S1', 'Anak', '2021-08-21 21:10:24', '2021-08-21 21:10:24'),
(5, 2131232, NULL, '3213123', 'Garut', '2021-08-18', 'S1', 'Kandungan', '2021-08-23 23:44:13', '2021-08-23 23:44:13'),
(6, 99999999, NULL, 'Kp. a desa bebas', 'garut', '2021-08-26', 'S1', 'Kandungan', '2021-08-23 23:48:41', '2021-08-23 23:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hari` int(10) UNSIGNED NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  `pagi_mulai` time NOT NULL,
  `pagi_selesai` time NOT NULL,
  `sore_mulai` time NOT NULL,
  `sore_selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `user_id`, `hari`, `aktif`, `pagi_mulai`, `pagi_selesai`, `sore_mulai`, `sore_selesai`, `created_at`, `updated_at`) VALUES
(26, 99999999, 0, 1, '05:00:00', '10:30:00', '20:00:00', '20:30:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(27, 99999999, 1, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(28, 99999999, 2, 1, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(29, 99999999, 3, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(30, 99999999, 4, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(31, 99999999, 5, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(32, 99999999, 6, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '2021-08-25 20:42:09', '2021-08-25 20:42:31'),
(33, 889889, 0, 1, '07:30:00', '10:00:00', '12:00:00', '17:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45'),
(34, 889889, 1, 1, '00:00:00', '00:00:00', '14:00:00', '18:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45'),
(35, 889889, 2, 0, '00:00:00', '00:00:00', '12:00:00', '12:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45'),
(36, 889889, 3, 0, '00:00:00', '00:00:00', '12:00:00', '12:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45'),
(37, 889889, 4, 0, '00:00:00', '00:00:00', '12:00:00', '12:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45'),
(38, 889889, 5, 0, '00:00:00', '00:00:00', '12:00:00', '12:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45'),
(39, 889889, 6, 0, '00:00:00', '00:00:00', '12:00:00', '12:00:00', '2021-08-25 21:48:29', '2021-08-29 01:07:45');

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
(1, '2014_10_12_000001_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_08_16_131617_create_dokter_table', 1),
(5, '2021_08_16_233917_create_rumah_sakit_table', 1),
(6, '2021_08_19_065821_create_berita_table', 1),
(7, '2021_08_21_112403_create_pasien_table', 2),
(8, '2021_08_23_105422_create_jadwal_table', 3),
(9, '2021_08_24_011701_create_permission_tables', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 99999292),
(1, 'App\\Models\\User', 99999294),
(2, 'App\\Models\\User', 99999295),
(3, 'App\\Models\\User', 99999296);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `user_id`, `foto`, `jk`, `alamat`, `tempat`, `ttl`, `created_at`, `updated_at`) VALUES
(1, 213124, NULL, NULL, NULL, NULL, NULL, '2021-08-21 16:27:38', '2021-08-21 16:27:38'),
(2, 213125, NULL, NULL, NULL, NULL, NULL, '2021-08-21 16:28:06', '2021-08-21 16:28:06'),
(3, 213126, NULL, NULL, NULL, NULL, NULL, '2021-08-21 16:30:28', '2021-08-21 16:30:28'),
(4, 213127, NULL, NULL, NULL, NULL, NULL, '2021-08-21 16:32:21', '2021-08-21 16:32:21'),
(5, 889890, NULL, NULL, NULL, NULL, NULL, '2021-08-21 21:12:16', '2021-08-21 21:12:16');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-08-23 18:21:37', '2021-08-23 18:21:37'),
(2, 'dokter', 'web', '2021-08-23 18:21:37', '2021-08-23 18:21:37'),
(3, 'pasien', 'web', '2021-08-23 18:21:37', '2021-08-23 18:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `logo`, `nama`, `alamat`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(1, 'Logo/rZQXyyjL2ksaMlUp4SmOzMvxc2HDS0qhJvcG7c8B.png', 'Medika', 'Kp. Desa', '3123123123', '123123123123', NULL, '2021-08-21 21:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isVerified` tinyint(1) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('pasien','admin','dokter') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `isVerified`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(889889, 'Dr. Wawan', 'dokter@gmail.com', '+6222222222222', 0, NULL, 'dokter', '$2y$10$yodcftfo6s7lucp4vF03meinbL8gHYEwcC.F/Fi8VJouUGzQ7D5Gi', NULL, '2021-08-21 21:10:24', '2021-08-23 21:30:03'),
(2131232, 'Awenk', 'admin@gmail.comas', '+6283849448439', 0, NULL, 'dokter', '$2y$10$TrKQjwe6PjxsZxdizZtmQ.kvt/IxR98HV2m.u8tAWJQXmhaz/4qUm', NULL, '2021-08-23 23:44:13', '2021-08-23 23:44:13'),
(99999294, 'Admin', 'admin@gmail.id', NULL, 0, NULL, NULL, '$2y$10$HVxsBJAlk9yAC2ijN2lv3OCwTO5KQqlLWP3NIzXvRD0dAcV2W7ad2', NULL, '2021-08-23 18:24:01', '2021-08-23 18:24:01'),
(99999295, 'Dokter', 'dokter@gmail.id', NULL, 0, NULL, NULL, '$2y$10$Z1dIt/GeH0t6P6nLS6DPWuv98UnzjIMkzQxEdE6VtH7Aceia0FVW.', NULL, '2021-08-23 18:24:01', '2021-08-23 18:24:01'),
(99999296, 'pasien', 'pasien@gmail.id', NULL, 0, NULL, NULL, '$2y$10$qOs3mERVzo.uyQbWJkboEeHLXsb/IRrf0UTygfSILmnlGCeboxIme', NULL, '2021-08-23 18:24:01', '2021-08-23 18:24:01'),
(99999999, 'Dr, Andi', 'andi@gmai.com', '30123123123', 0, NULL, 'dokter', '$2y$10$YLmc8/0BFbVa95MarXLnpOgX/6O7X5W2kUYQAY4y0XsqeK8TRkPE.', NULL, '2021-08-23 23:48:41', '2021-08-23 23:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dokter_user_id_unique` (`user_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
