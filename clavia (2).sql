-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 10:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clavia`
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
-- Table structure for table `fotografers`
--

CREATE TABLE `fotografers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotografers`
--

INSERT INTO `fotografers` (`id`, `foto`, `nama`, `pengalaman`, `alamat_email`, `kontak`, `created_at`, `updated_at`) VALUES
(1, '1704642396.jpeg', 'Daniel muhammad', 'Saya adalah seorang fotografer pernikahan dengan pengalaman lebih dari 7 tahun. Saya berfokus pada menangkap keintiman dan kebahagiaan di setiap momen pernikahan. Dengan sentuhan kreatif dan gaya dokumenter, saya berusaha memberikan kenangan abadi kepada pasangan pengantin.', 'muhammad@gmail.com', '085290908080', '2024-01-04 23:17:07', '2024-01-12 00:14:17'),
(2, '1704642428.jpeg', 'Muhammad Farhan', 'Dengan pengalaman sebagai fotografer potret selama 5 tahun, saya berkomitmen untuk menghadirkan gambar yang mencerminkan kepribadian dan ekspresi unik setiap klien. Dari potret individu hingga sesi keluarga, saya senang menciptakan karya yang berarti dan berkesan.', 'farhan@gmail.com', '082177777721', '2024-01-04 23:17:42', '2024-01-12 00:14:55'),
(3, '1704640737.jpeg', 'Arif rahman', 'fotografer indoor maupun outdoor dengan pengalaman lebih dari 3 tahun. Saya berfokus pada menangkap keintiman dan kebahagiaan di setiap momen pernikahan. Dengan sentuhan kreatif dan gaya dokumenter, saya berusaha memberikan kenangan abadi kepada anak muda maupun family', 'kevinPrayoga@gmail.com', '083526328', '2024-01-06 23:54:50', '2024-01-12 00:20:23'),
(4, '1704640699.jpg', 'Muhammad Fidra', 'Seorang fotografer yang berpengalaman selama lebih dari sepuluh tahun, saya telah membangun jejak karir yang kaya dengan berbagai pengalaman menarik. Awalnya, perjalanan saya di dunia fotografi dimulai sebagai seorang fotografer pernikahan profesional antara tahun 2010 hingga 2015. Selama periode ini, saya berhasil menangkap lebih dari seratus momen indah dalam setiap pernikahan, menghargai setiap detail dan sentimen yang membuat acara tersebut begitu istimewa.', 'fidra@gmail.com', '082284665449', '2024-01-07 01:18:45', '2024-01-12 00:16:31');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_034735_create_pakets_table', 1),
(6, '2023_12_13_110822_create_pesanans_table', 1),
(7, '2023_12_13_134925_create_fotografers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_paket` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `foto`, `nama_paket`, `harga_paket`, `ket_paket`, `created_at`, `updated_at`) VALUES
(1, '1704435303.jpg', 'Paket Prewedding', '2500000', 'Print 50 Photo, Album foto, 20R.(2)Frame, 11R. Vidio cinematic (2 - 5 Minute) flashdisk all file', '2024-01-04 23:15:03', '2024-01-07 01:21:48'),
(2, '1704640775.jpg', 'Paket Wedding', '3000000', 'Print 30 Photo, Album foto, 20R.(1)Frame, 11R. Vidio cinematic (2 - 5 Minute) flashdisk all file', '2024-01-06 23:41:39', '2024-01-07 08:19:35'),
(3, '1704640794.jpg', 'Paket Group', '2000000', 'Ada yang menawarkan jasa foto komersial secara langsung album foto dll', '2024-01-06 23:42:27', '2024-01-07 08:19:54'),
(4, '1704937699.jpg', 'Paket Aqiqah', '500000', 'print foto 25 lembar, plasdisk all file', '2024-01-10 18:48:19', '2024-01-12 00:33:18'),
(5, '1705032705.jpg', 'Paket Family', '1500000', 'Cetak Album foto, Album foto, 20R.(2)Frame, 11R. Vidio cinematic (2 - 5 Minute) flashdisk all file', '2024-01-11 21:11:45', '2024-01-11 21:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paket_id` bigint(20) UNSIGNED NOT NULL,
  `fotografer_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pemesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Bayar',
  `bukti_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `paket_id`, `fotografer_id`, `tanggal_pemesanan`, `no_hp`, `lokasi`, `jam`, `status`, `bukti_bayar`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 2, '2024-01-05', '085378962212', 'Bengkalis', '13:33:00', 'Sudah Bayar', NULL, '2024-01-04 23:33:25', '2024-01-11 21:38:50'),
(6, 4, 1, 3, '2024-02-09', '08234567786', 'jalan panglima minal gang perjuangan desa air putih kecamatan bengkalis', '08:08:00', 'Sudah Bayar', '202401071501_auk.jpg', '2024-01-07 08:00:29', '2024-01-07 08:03:55'),
(9, 5, 3, 4, '2024-01-13', '08314567765', 'jl jendral sudirman', '07:00:00', 'Sudah Bayar', '202401111555_Screenshot 2024-01-09 111215.png', '2024-01-11 08:54:21', '2024-01-11 08:57:19'),
(10, 7, 5, 2, '2024-01-20', '082222127', 'Jalan sukarejo desa kotoraja kecamatan siak kecil kabupaten bengkalis', '08:00:00', 'Sudah Bayar', '202401120804_WhatsApp Image 2024-01-11 at 23.09.44 (1).jpeg', '2024-01-12 01:03:03', '2024-01-12 01:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '$2y$12$8dnoZH6V3l/7sCTRcDj1J.zEzr1Lyb1m/4apmlFnyN4PM3mEZKA1y', 'admin', '-', '2024-01-04 23:13:56', '2024-01-04 23:13:56'),
(2, 'try', 'try@gmail.com', '$2y$12$cxMsvBSqOq1ZNAOi392Te.RFbvi0GNU3D8nfFiSu4YFMsV7Bub9FC', 'user', 'Laki Laki', '2024-01-04 23:28:05', '2024-01-04 23:28:05'),
(3, 'Lilik', 'lilik@gmail.com', '$2y$12$g6cVFAJC1p9tUJjqpY9/Z.3V9JzuSj06hEDiuNa3C7a7E2JfWmxJ.', 'user', 'Laki Laki', '2024-01-06 21:47:08', '2024-01-06 21:47:08'),
(4, 'maghfira', 'maghfira@gmail.com', '$2y$12$G0qbJvn2t0BBDrjDk7xMSOV8A2mPfr5yvg7/sdj36He2AGwqtY.q6', 'user', 'Perempuan', '2024-01-06 23:59:57', '2024-01-06 23:59:57'),
(5, 'intan', 'intanfatika@gmail.com', '$2y$12$ESudnsqumxRNloUmCsm4iu1hHcU6eVpoRpwhTVi0HguxbaW2zG13W', 'user', 'Perempuan', '2024-01-11 08:52:30', '2024-01-11 08:52:30'),
(6, 'rani', 'rani@gamil.com', '$2y$12$ELxsZoM0Q.YOD0seMAqP/ukNvCONlcvIBPlgRevT8u0vNWJU8T5rm', 'user', 'Perempuan', '2024-01-11 20:41:58', '2024-01-11 20:41:58'),
(7, 'aurelia', 'aurelia@gmail.com', '$2y$12$A93djz0qVWXIGkdO5ffqhudGhCcBWDrnhDKEy71hdDPe6dldyRn0K', 'user', 'Laki Laki', '2024-01-11 20:59:04', '2024-01-11 20:59:04');

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
-- Indexes for table `fotografers`
--
ALTER TABLE `fotografers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
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
-- AUTO_INCREMENT for table `fotografers`
--
ALTER TABLE `fotografers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
