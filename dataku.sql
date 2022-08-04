-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2022 pada 10.05
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balikpapan`
--

CREATE TABLE `balikpapan` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `pks` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `unitkerja` varchar(255) NOT NULL,
  `mitrakerja` varchar(255) NOT NULL,
  `tahapan` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `balikpapan`
--

INSERT INTO `balikpapan` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Pendidikan', '325445', '1343254', '2022-07-30', '4 Bulan', 'Keguruan', 'KEMENDIKBUD', 'Nota Kesepakatan', 'd5df4e98-b476-4060-a61e-4fc5245bf55c.pdf', 2022, '2022-07-29 23:31:58', '2022-07-29 23:31:58', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berau`
--

CREATE TABLE `berau` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berau`
--

INSERT INTO `berau` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Dagang', '31231', '4132', '2022-07-30', 'Mingguan', 'UMKM', 'KEMENDIKBUD', 'Nota Kesepemahaman', '228e3e0f-fa56-4884-8e5c-80f47fff7800.pdf', '2022', '2022-07-30 00:17:37', '2022-07-30 00:17:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bontang`
--

CREATE TABLE `bontang` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bontang`
--

INSERT INTO `bontang` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Bisnis', '21432', '354546', '2022-07-30', '4 Bulan', 'UMKM', 'BUMN', 'Nota perjanjian Kerja sama', '7081c03b-ad8b-4372-898c-96c321ddb14e.pdf', '2022', '2022-07-29 23:42:05', '2022-07-29 23:42:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_daerah`
--

CREATE TABLE `daftar_daerah` (
  `id` int(11) NOT NULL,
  `daftar` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_daerah`
--

INSERT INTO `daftar_daerah` (`id`, `daftar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kota Samarinda', '2022-07-20 11:20:09', '2022-07-20 11:20:09', NULL),
(2, 'Kota Bontang', '2022-07-20 12:05:58', '2022-07-20 12:05:58', NULL),
(3, 'Kota Balikpapan', '2022-07-20 12:06:11', '2022-07-20 12:06:11', NULL),
(4, 'Kabupaten Kutai Kartanegara', '2022-07-27 08:45:06', '2022-07-27 08:45:06', NULL),
(5, 'Kabupaten Kutai Timur', '2022-07-27 08:45:20', '2022-07-27 08:45:20', NULL),
(6, 'Kabupaten Kutai Barat', '2022-07-27 08:45:41', '2022-07-27 08:45:41', NULL),
(7, 'Kabupaten Berau', '2022-07-27 08:45:55', '2022-07-27 08:45:55', NULL),
(8, 'Kabupaten Mahakam Ulu', '2022-07-27 08:46:08', '2022-07-27 08:46:08', NULL),
(9, 'Kabupaten Penajam Paser Utara', '2022-07-27 08:46:26', '2022-07-27 08:46:26', NULL),
(10, 'Kabupaten Paser', '2022-07-27 08:46:42', '2022-07-27 08:46:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `bidang_kerjasama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `pks` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `pihak` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `id_nama_daerah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kubar`
--

CREATE TABLE `kubar` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kubar`
--

INSERT INTO `kubar` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Borneo FC', '32413', '4213', '2022-07-30', '4 Bulan', 'Waskita', 'KEMENTRIAN BANGUNAN', 'Nota Kesepemahaman', '3901f22b-f4f9-4650-9ca8-d5b412fefafd.pdf', '2022', '2022-07-30 00:11:52', '2022-07-30 00:11:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kukar`
--

CREATE TABLE `kukar` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kukar`
--

INSERT INTO `kukar` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Orientasi', '31123', '213`2', '2022-07-30', '4 Bulan', 'Kampung', 'Pasar Pagi', 'Nota perjanjian Kerja sama', '87cbffe2-cbaa-4a8a-9d05-b55385bf56b4.pdf', '2022', '2022-07-29 23:50:58', '2022-07-29 23:51:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kutim`
--

CREATE TABLE `kutim` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kutim`
--

INSERT INTO `kutim` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Pendidikan', '32131', '13121', '2022-07-30', 'Mingguan', 'Keguruan', 'KEMENDIKBUD', 'Nota perjanjian Kerja sama', '3c0326a5-f948-477a-b1e7-5cfa021a7e77.pdf', '2022', '2022-07-30 00:05:22', '2022-07-30 00:06:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahakam`
--

CREATE TABLE `mahakam` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahakam`
--

INSERT INTO `mahakam` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Borneo FC', '12232', '3121123', '2022-07-30', 'bulanan', 'Biro Otonmi Daerah', 'KEMENDIKBUD', 'Nota Kesepemahaman', '90bf76ea-0918-4117-ad8b-6ada250bc9bb.pdf', '2022', '2022-07-30 00:23:34', '2022-07-30 00:23:34', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paser`
--

CREATE TABLE `paser` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paser`
--

INSERT INTO `paser` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Borneo FC', '21312', '13121', '2022-07-30', 'Mingguan', 'Olah Raga', 'PSSI', 'Nota perjanjian Kerja sama', '010d466b-aa2b-461f-a88c-039f0c71e3a4.pdf', '2015', '2022-07-30 00:45:41', '2022-07-30 00:45:41', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penajam`
--

CREATE TABLE `penajam` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penajam`
--

INSERT INTO `penajam` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Bisnis', '133241', '1234123', '2022-07-30', '1 Tahun', 'UMKM', 'BUMN', 'Nota perjanjian Kerja sama', '2a759c22-5898-49d3-a351-bfca4b886be1.pdf', '2022', '2022-07-30 00:41:12', '2022-07-30 00:41:12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `samarinda`
--

CREATE TABLE `samarinda` (
  `id` int(20) NOT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `pks` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `unitkerja` varchar(255) DEFAULT NULL,
  `mitrakerja` varchar(255) DEFAULT NULL,
  `tahapan` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `samarinda`
--

INSERT INTO `samarinda` (`id`, `tentang`, `mou`, `pks`, `tanggal`, `jangka_waktu`, `unitkerja`, `mitrakerja`, `tahapan`, `file`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 'Pendidikan', '32525', '3423', '2022-07-30', '4 Bulan', 'Biro Otonmi Daerah', 'KEMENDIKBUD', 'Nota Kesepakatan', 'd9238efd-3462-41ee-8b69-e3806dd9fe3a.pdf', '2021', '2022-07-29 21:09:26', '2022-07-29 22:16:30', NULL),
(21, 'Instrumen', '34324546', '564342', '2022-07-30', '1 Tahun', 'Biro Otonmi Daerah', 'KEMENDIKBUD', 'Nota Kesepakatan', '00f0d920-289f-49c2-ad73-c674218a0967.pdf', '2022', '2022-07-29 22:29:43', '2022-07-29 22:30:18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hafidz 99', 'hafidzagustillah17@gmail.com', NULL, '$2y$10$xvSj7G4ISbtGfwSnW4h97uoyYyg3om2Kji.8EAOWWsKuA7QQnaPnO', NULL, '2022-06-29 08:49:15', '2022-06-29 08:49:15'),
(2, 'Sinta', 'sinta@gmail.com', NULL, '$2y$10$8/MK3AJvh3s9AUGDpDnLPeqJHd4sHz6zHuGtmtJgfag5r4PY1eN8K', NULL, '2022-07-05 06:49:44', '2022-07-05 06:49:44'),
(3, 'Gubernur', 'kaltim@gmail.com', NULL, '$2y$10$WM2qM/2CPnB2wAy7arY8VeGOK5a9Ld5tApTZ3aYnwUFKoQ2P1BeUu', NULL, '2022-07-06 03:55:20', '2022-07-06 03:55:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balikpapan`
--
ALTER TABLE `balikpapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berau`
--
ALTER TABLE `berau`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bontang`
--
ALTER TABLE `bontang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_daerah`
--
ALTER TABLE `daftar_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kubar`
--
ALTER TABLE `kubar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kukar`
--
ALTER TABLE `kukar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kutim`
--
ALTER TABLE `kutim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahakam`
--
ALTER TABLE `mahakam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paser`
--
ALTER TABLE `paser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penajam`
--
ALTER TABLE `penajam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `samarinda`
--
ALTER TABLE `samarinda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `balikpapan`
--
ALTER TABLE `balikpapan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berau`
--
ALTER TABLE `berau`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bontang`
--
ALTER TABLE `bontang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `daftar_daerah`
--
ALTER TABLE `daftar_daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kubar`
--
ALTER TABLE `kubar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kukar`
--
ALTER TABLE `kukar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kutim`
--
ALTER TABLE `kutim`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mahakam`
--
ALTER TABLE `mahakam`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `paser`
--
ALTER TABLE `paser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penajam`
--
ALTER TABLE `penajam`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `samarinda`
--
ALTER TABLE `samarinda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
