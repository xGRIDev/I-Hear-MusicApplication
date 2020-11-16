-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 04:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_id` int(11) NOT NULL,
  `album_cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist_id`, `album_cover`, `description`, `created_at`, `updated_at`) VALUES
(2, 'American Teen', 1, 'https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg', NULL, '2019-06-06 22:03:45', '2019-06-06 22:03:45'),
(3, 'Live in Texas', 9, 'https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg', NULL, '2019-06-06 22:30:06', '2019-06-06 22:30:06'),
(4, 'Spider-Man: Into the Spider-Verse', 7, 'https://i1.sndcdn.com/artworks-85AaCd8d3JAv-0-t500x500.jpg', NULL, '2019-06-06 22:33:16', '2019-06-06 22:33:16'),
(5, 'Happier', 4, 'https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg', NULL, '2019-06-07 09:47:48', '2019-06-07 09:47:48'),
(6, 'Cosmic', 6, 'https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg', NULL, '2019-06-07 09:49:54', '2019-06-07 09:49:54'),
(7, 'Lauv EP: JAPAN EDITION', 8, 'https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg', NULL, '2019-06-07 09:56:16', '2019-06-07 09:56:16'),
(8, 'True', 10, 'https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Avicii_Wake_Me_Up_Official_Single_Cover.png/220px-Avicii_Wake_Me_Up_Official_Single_Cover.png', NULL, '2019-06-07 10:08:57', '2019-06-07 10:08:57'),
(9, 'laravel', 13, 'http://localhost/music/hmusic/uploads/1601797173_14391484685973_pp.jpg', 'asdasd', '2020-11-04 02:13:40', '2020-11-04 02:13:40'),
(10, 'laravel', 13, 'http://localhost/music/hmusic/uploads/1601797173_14391484685973_pp.jpg', 'asdasd', '2020-11-04 02:14:23', '2020-11-04 02:14:23'),
(11, 'post-human : survival horor', 15, 'https://i2.wp.com/wallofsoundau.com/wp-content/uploads/2020/10/bring-me.jpg?resize=940%2C400&ssl=1', 'Post - Human : Survival Horor', '2020-11-04 02:52:56', '2020-11-04 02:52:56'),
(12, 'Amo', 17, 'https://upload.wikimedia.org/wikipedia/en/9/97/AmoBringMetheHorizon.png', NULL, '2020-11-15 23:56:37', '2020-11-15 23:56:37'),
(13, 'Amo', 17, 'https://upload.wikimedia.org/wikipedia/en/9/97/AmoBringMetheHorizon.png', NULL, '2020-11-15 23:58:08', '2020-11-15 23:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `career_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `career_name`, `first_name`, `last_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Khalid', 'Khalid', 'Khalid', 'https://i1.sndcdn.com/artworks-000224127351-4m2rkf-t500x500.jpg', '2019-06-04 09:37:44', '2019-06-04 09:37:44'),
(7, 'Post Melon', 'Post Melon', 'Post Melon', 'https://i.ebayimg.com/images/i/382536121893-0-1/s-l1000.jpg', '2019-06-06 18:24:11', '2019-06-06 18:24:11'),
(6, 'Bazzi', 'Bazzi', 'Bazzi', 'https://i1.sndcdn.com/artworks-000334054377-fgpyvw-t500x500.jpg', '2019-06-06 18:19:23', '2019-06-06 18:19:23'),
(4, 'Marshmello', 'Marshmello', 'Marshmello', 'https://i1.sndcdn.com/artworks-000390226092-1vzsos-t500x500.jpg', '2019-06-04 19:47:20', '2019-06-04 19:47:20'),
(8, 'Lauv', 'Lauv', 'Lauv', 'https://i1.sndcdn.com/artworks-8n24PQuaQZWL-0-t500x500.jpg', '2019-06-06 18:27:44', '2019-06-06 18:27:44'),
(9, 'Linkin Park', 'Linkin Park', 'Linkin Park', 'https://i1.sndcdn.com/artworks-000282078677-wnv9pv-t500x500.jpg', '2019-06-06 18:28:26', '2019-06-06 18:28:26'),
(10, 'Avicii', 'Avicii', 'Avicii', 'https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Avicii_Wake_Me_Up_Official_Single_Cover.png/220px-Avicii_Wake_Me_Up_Official_Single_Cover.png', '2019-06-06 19:05:38', '2019-06-06 19:05:38'),
(15, 'Musician / Band', 'bmth', 'official', 'post-human.jpg', '2020-11-04 02:49:41', '2020-11-04 02:49:41'),
(13, 'laravelbgr', 'Laravel', 'BgrBand', 'https://images.unsplash.com/photo-1481886756534-97af88ccb438?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60', '2020-10-30 12:59:14', '2020-10-30 12:59:14'),
(17, 'Bring Me The Horizon', 'Bring Me The Horizon', 'official', 'https://rawpowermanagement.com/wp-content/uploads/BMTH-1-1500x630.jpg', '2020-11-15 22:52:13', '2020-11-15 22:52:13');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2020_07_12_134945_show', 1);

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
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_id` int(10) UNSIGNED NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `cover`, `url`, `artist_id`, `album_id`, `duration`, `count`, `created_at`, `updated_at`) VALUES
(1, 'laravel', NULL, 'https://firebasestorage.googleapis.com/v0/b/musicapp-4582e.appspot.com/o/mp3%2FKhalid%20-%20Better%20(Official%20Video).mp3?alt=media&token=558036d1-ffad-441a-a835-16b8b1b83a5c', 1, 2, NULL, 14, '2020-10-28 11:38:35', '2020-11-13 07:18:21'),
(5, 'let me', NULL, 'http://localhost/music/hmusic/uploads/1601797173_45085124089583_Let_Me_Write_Some_Sin_In_Your_Syntax.mp3', 13, 9, NULL, 2, '2020-11-14 06:49:11', '2020-11-15 11:45:39'),
(6, 'Parasite Eve', NULL, 'http://localhost/music/hmusic/uploads/1605505720_13178205345703_02._Parasite_Eve.mp3', 17, 11, NULL, 2, '2020-11-15 22:54:00', '2020-11-15 23:44:18'),
(7, 'Teardrops', NULL, 'http://localhost/music/hmusic/uploads/1604483665_24826804413079_03._Teardrops.mp3', 17, 11, NULL, 0, '2020-11-15 23:31:33', '2020-11-15 23:31:33'),
(9, 'Medicine', NULL, 'http://localhost/music/hmusic/uploads/1605509641_36120729386719_07._medicine.mp3', 17, 11, NULL, 0, '2020-11-15 23:58:53', '2020-11-15 23:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zufar', 'zufar@example.com', '2020-11-11 06:03:59', '$2y$10$y1m0QGCAm./1Lo7Mn1BJseCK4xd2RWcjRg0GF2S4sv/D/p.mHxD2u', 'Bogor, Perum Pondok Kencana Permai Jln.intan V', '1_avatar1605509307.JPG', NULL, '2020-11-11 06:03:17', '2020-11-15 23:48:28'),
(2, 'admin', 'admin@admin.com', '2020-11-11 06:45:48', '$2y$10$QiCpzvOy9oaKt5RoiOeao.CFIORZ2b0XSVaHHWbBi3RFJy1ipIqn6', 'Jakarta Keras', '2_avatar1605361608.jpg', NULL, '2020-11-11 06:44:35', '2020-11-14 06:46:49'),
(3, 'user', 'user@example.com', '2020-11-13 07:06:23', '$2y$10$xKxJFGiEtnarlLNI9B6NTejsIbeyQzQ60nn6Aj3vSSlKlbyhJhJ.O', 'near from home', '3_avatar1605276461.jpg', NULL, '2020-11-13 07:05:44', '2020-11-13 07:07:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_artist_id_foreign` (`artist_id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
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
-- Indexes for table `songs`
--
ALTER TABLE `songs`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
