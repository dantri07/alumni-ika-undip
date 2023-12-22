-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2023 pada 10.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ika_undip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` varchar(100) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `asal_institusi` varchar(100) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `id_kota` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `instansi_pendidikan` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `full_name`, `nik`, `asal_institusi`, `phone`, `email`, `date_of_birth`, `address`, `id_kota`, `pekerjaan`, `status`, `instansi_pendidikan`, `username`, `password`) VALUES
('1', 'Nama Alumni 1', 'NIK1', 'Institusi 1', '123456789', 'alumni1@example.com', '1990-01-01', 'Alamat 1', '1', 'Pekerjaan 1', 'Status 1', 'Instansi Pendidikan 1', 'username1', 'password1'),
('10', 'Nama Alumni 10', 'NIK10', 'Institusi 10', '777777777', 'alumni10@example.com', '1999-10-10', 'Alamat 10', '3', 'Pekerjaan 10', 'Status 10', 'Instansi Pendidikan 10', 'username10', 'password10'),
('12', 'dantri jos sihombing', '1202090711020001', 'poltek', '082239178657', 'dantri07sihombing19@gmail.com', '2023-12-01', 'batam', '2', 'dosen', 'true', 'asdzx', 'sdasd', 'sda'),
('2', 'Nama Alumni 2', 'NIK2', 'Institusi 2', '987654321', 'alumni2@example.com', '1991-02-02', 'Alamat 2', '2', 'Pekerjaan 2', 'Status 2', 'Instansi Pendidikan 2', 'username2', 'password2'),
('3', 'Nama Alumni 3', 'NIK3', 'Institusi 3', '555555555', 'alumni3@example.com', '1992-03-03', 'Alamat 3', '3', 'Pekerjaan 3', 'Status 3', 'Instansi Pendidikan 3', 'username3', 'password3'),
('4', 'Nama Alumni 4', 'NIK4', 'Institusi 4', '111111111', 'alumni4@example.com', '1993-04-04', 'Alamat 4', '4', 'Pekerjaan 4', 'Status 4', 'Instansi Pendidikan 4', 'username4', 'password4'),
('5', 'Nama Alumni 5', 'NIK5', 'Institusi 5', '222222222', 'alumni5@example.com', '1994-05-05', 'Alamat 5', '5', 'Pekerjaan 5', 'Status 5', 'Instansi Pendidikan 5', 'username5', 'password5'),
('6', 'Nama Alumni 6', 'NIK6', 'Institusi 6', '333333333', 'alumni6@example.com', '1995-06-06', 'Alamat 6', '6', 'Pekerjaan 6', 'Status 6', 'Instansi Pendidikan 6', 'username6', 'password6'),
('7', 'Nama Alumni 7', 'NIK7', 'Institusi 7', '444444444', 'alumni7@example.com', '1996-07-07', 'Alamat 7', '7', 'Pekerjaan 7', 'Status 7', 'Instansi Pendidikan 7', 'username7', 'password7'),
('8', 'Nama Alumni 8', 'NIK8', 'Institusi 8', '666666666', 'alumni8@example.com', '1997-08-08', 'Alamat 8', '1', 'Pekerjaan 8', 'Status 8', 'Instansi Pendidikan 8', 'username8', 'password8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `title`, `description`, `tanggal`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'dsdas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae tortor eleifend, eleifend eros porta, lacinia nisl. Etiam pulvinar aliquet nibh, in gravida sem pharetra sit amet. Phasellus sed ex sed elit mattis mattis. Phasellus porta risus eget metus hendrerit porttitor. Etiam in nibh diam. Donec sagittis id felis ac rhoncus. Phasellus aliquam tellus nec nisl tempor, a placerat ante ullamcorper. Curabitur tempus erat odio, ut viverra metus finibus ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris lobortis pulvinar blandit. Praesent blandit eros et volutpat dapibus.', '2023-11-11', '', NULL, NULL, NULL),
(6, 'ASADSA', 'wqsa', '2023-11-03', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` varchar(100) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `tanggal` date NOT NULL,
  `type` enum('photo','video','','') NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `tanggal`, `type`, `images`, `remember_token`, `created_at`, `updated_at`) VALUES
(21, 'yaallah', 'wdawad', '2023-11-02', 'photo', 'yaallah-1698825563.png', NULL, NULL, NULL),
(28, 'ASADSA12', 'wqeqwe', '2023-12-01', 'photo', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id` varchar(100) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `id_alumni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keahlian`
--

INSERT INTO `keahlian` (`id`, `keahlian`, `id_alumni`) VALUES
('1', 'golang', '4'),
('2', 'design grafis', '4'),
('3', 'javasripct', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` varchar(100) NOT NULL,
  `name_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `name_kota`) VALUES
('1', 'Kabupaten Bintan'),
('2', 'Kabupaten Karimun'),
('3', 'Kabupaten Kepulauan Anambas'),
('4', 'Kabupaten Lingga'),
('5', 'Kabupaten Natuna'),
('6', 'Kota Batam'),
('7', 'Kota Tanjung Pinang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(5, '2023_10_09_020340_create_roles_table', 2),
(6, '2023_10_20_043754_migrate-alumni', 3),
(7, '2023_10_24_045240_alumni', 3),
(8, '2023_10_26_024603_berita', 3),
(9, '2023_10_26_031753_gallery', 4),
(10, '2023_11_06_084047_berita', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_alumni` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `pengalaman`, `jabatan`, `id_alumni`, `start`, `end`) VALUES
('1', 'programer', 'senior programer', '1', '2023-01-03', '2023-12-01'),
('2', 'asd', 'asd', '6', '2023-12-01', '2023-12-02'),
('3', 'asd', 'asd', '5', '2023-12-01', '2023-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-10-11 04:30:07', '2023-10-12 04:30:07'),
(2, 'alumni', '2023-10-12 04:30:07', '2023-10-13 04:30:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` enum('admin','alumni','','') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(101, 'admin', 'admin@gmail.com', 'admin', '2023-10-10 04:31:03', '$2y$10$DnP4uIdZmedqPznxWeHQqucoaIOZEYXq0.FZFEPt8.oLCbaUmZYwO', '5kRiwh4krvuJD1T9llNXtjsdtCzaKM1DT5aNx1hnENiTKRbHsVmDtZrw8DfL', '2023-10-12 04:31:03', '2023-10-13 04:31:03'),
(103, 'bros', 'alumni@gmail.com', 'alumni', NULL, '$2y$10$TLOpS4h83xKhfaJtaErpi.FFQYIN6LFa6xvBJTdiQOqMtgLgYJFjG', NULL, '2023-10-24 20:05:01', '2023-12-03 04:33:52'),
(106, 'dantrijs', 'dantri07sihombing@gmail.com', 'alumni', '0000-00-00 00:00:00', '$2y$10$Ew/vdV9WJK1fypblmbE0MuPt4m2OgIX7lItV5CZxZFcaoszeJHB4i', NULL, NULL, '2023-12-03 09:14:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8124;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`);

--
-- Ketidakleluasaan untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
