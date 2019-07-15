-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 18.01
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `nama`, `tempat`, `harga`, `foto`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Kota Brebes Tempo Dulu', 'Alun Alun Kota Brebes', 0, '1561962169.jpg', '1', NULL, NULL, '2019-06-30 23:22:49', '2019-07-14 16:06:54'),
(2, 'Pemandian Air Panas Buaran Brebes', 'Desa Pengebatan, Kecamatan Bentarkawung, Kabupaten Brebes', 15000, '1563145789.jpg', '1', NULL, NULL, '2019-06-30 23:27:56', '2019-07-14 16:09:49'),
(3, 'Mangrove', 'Dukuh Pandansari, Desa Kaliwlingi, Brebes', 15000, '1563145891.jpg', '1', NULL, NULL, '2019-07-02 22:28:38', '2019-07-14 16:11:31'),
(4, 'Mangroov', 'Brebes', 565656, '1562233841.png', '0', NULL, NULL, '2019-07-04 02:50:41', '2019-07-06 02:27:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanans`
--

CREATE TABLE `makanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `tempat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `komposisi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `makanans`
--

INSERT INTO `makanans` (`id`, `nama`, `harga`, `tempat`, `komposisi`, `foto`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'olos', 5000, 'brebes', 'tengis', NULL, '0', NULL, NULL, '2019-07-02 22:49:56', '2019-07-03 21:48:22'),
(2, 'asd', 8000, 'awetr', 'sndshnh', '1562215448.png', '0', NULL, NULL, '2019-07-02 22:51:15', '2019-07-08 06:56:43'),
(3, 'Telur Asin', 3500, 'Brebes', 'Telur Bebek, Abu Gosok, Bata Merah Halus, Air Secukupnya, Baskom dan Alat lainnya', '1563146022.jpg', '1', NULL, NULL, '2019-07-03 03:05:24', '2019-07-14 16:13:42'),
(4, 'Lengko Wari', 6000, 'Pasarbatang Brebes', 'Nasi, Potongan Acar Timun, Potongan Tahu, Tempe, Bawang Goreng, Kerupuk, Kecap dan Bumbu Kacang', '1563146199.jpg', '1', NULL, NULL, '2019-07-08 22:52:03', '2019-07-14 16:16:39'),
(5, 'Sate Blengong', 17000, 'Alun Alun Kota Brebes', 'Sate Daging Entog, Ketupat, Bawang Goreng, Kecap, dan Bumbu Kacang', '1563146350.jpg', '1', NULL, NULL, '2019-07-14 16:19:10', '2019-07-14 16:19:10'),
(6, 'Soto Dewa Dewi', 12000, 'Alun Alun Kota Brebes', 'Nasi, Tauge, Bawang Polong,  Suiran Ayam dan Daging Pilihan, Bawang Goreng, Kecap, dan Tauco', '1563146513.jpg', '1', NULL, NULL, '2019-07-14 16:21:53', '2019-07-14 16:21:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_01_040629_create_galeris_table', 1),
(4, '2019_07_01_040811_create_makanans_table', 1),
(5, '2019_07_01_040858_create_sejarahs_table', 1),
(6, '2019_07_01_041037_create_wisatas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarahs`
--

CREATE TABLE `sejarahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sejarahs`
--

INSERT INTO `sejarahs` (`id`, `judul`, `artikel`, `foto`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Bus Berhantu', 'Awalnya', '1562131468.jpg', '0', NULL, NULL, '2019-07-02 22:24:28', '2019-07-08 06:57:04'),
(5, 'Bus Berhantu', 'Awalnya saya....', '1562649663.jpg', '0', NULL, NULL, '2019-07-08 22:21:03', '2019-07-14 15:52:50'),
(6, 'Brebes', 'Berdirinya kota....', '1562649718.png', '0', NULL, NULL, '2019-07-08 22:21:58', '2019-07-14 15:52:54'),
(7, 'Upin Ipin', 'Malaysia', '1562649742.png', '0', NULL, NULL, '2019-07-08 22:22:22', '2019-07-14 15:53:01'),
(8, 'Sejarah Brebes', 'Ada beberapa pendapat mengenai asal usul nama Brebes. Salah satu pendapat menyatakan bahwa nama Brebes berasal dari kata \"Bara\" dan \"Basah\", bara berarti hamparan tanah luas dan basah berarti banyak mengandung air. Keduanya cocok dengan keadaan daerah Brebes yang merupakan dataran luas yang berair. Karena perkataan bara di ucapkan bere sedangkan basah di ucapkan besah maka untuk mudahnya di ucapkan Brebes. Dalam Bahasa Jawa perkataan Brebes atau mbrebes berarti tansah metu banyune yang berarti selalu keluar airnya.', '1563145106.jpg', '1', NULL, NULL, '2019-07-14 15:58:26', '2019-07-15 00:05:16'),
(9, 'Sejarah Hutan Mangrove', 'Wilayah daratan pantai Dukuh Pandansari, Desa Kaliwlingi, Brebes sudah dikenal mengalami abrasi yang terjadi sejak tahun 1985. Hingga tahun 2010, sekitar 850 Ha lahan tambak dan sawah masyarakat hilang tergerus pengikisan tersebut. Tak bisa dipungkiri, kondisi tersebut dapat menyebabkan efek domino masyarakat yang terancam kehilangan mata pencaharian, pengangguran, kemiskinan, hingga urbanisasi. Kondisi yang memprihatinkan ini ternyata menggerakkan nurani salah satu masyarakatnya, yaitu Mashadi. Berbekal kekhawatiran abrasi yang bisa melenyapkan kampungnya, pria tersebut mengajak warga sekitar untuk melakukan kegiatan penanaman mangrove kembali untuk mencegah dampak abrasi yang semakin meluas.   Perjuangan tangguh penanaman pohon mangrove ini dilakukan Mashadi sejak tahun 2005. Ada banyak kegiatan yang dilakukan pria tersebut untuk menyelamatkan kampungnya, mulai dari pengelolaan pesisir, pemberdayaan masyarakat pesisir, penguatan kelembagaan kelompok, kampanye kesadaran masyarakat, hingga perlindungan kawasan hutan mangrove.', '1563145296.jpg', '1', NULL, NULL, '2019-07-14 16:01:36', '2019-07-14 16:01:36'),
(10, 'Sejarah Stasiun Brebes', 'Stasiun Brebes (BB) merupakan stasiun kereta api kelas I yang terletak di Brebes, Brebes, Brebes. Stasiun ini terletak pada ketinggian +4 meter dan merupakan stasiun kereta api aktif yang letaknya paling timur di Daerah Operasi III Cirebon serta merupakan stasiun terbesar di Kabupaten Brebes. Stasiun ini berada tepat di pinggir jalan raya Brebes yang menuju Cirebon-Jakarta. Saat ini telah dibangun atap overkapping di atas peron stasiun ini supaya para penumpang tidak kepanasan maupun kehujanan. Stasiun ini memiliki tiga jalur kereta api dengan jalur 1 dan 2 sebagai sepur lurus. Sejak 1 April 2017 stasiun ini menjadi stasiun terminus untuk sebagian perjalanan KA Kaligung yang sebelumnya hanya melayani sampai Stasiun Tegal saja.', '1563145373.jpg', '1', NULL, NULL, '2019-07-14 16:02:53', '2019-07-14 16:02:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$ebcJZjCPT/Qu6cD5KEW7TO8jdjgmNYkAx5i9J7BDOVULKySaKXyHa', NULL, '2019-07-03 22:17:00', '2019-07-03 22:17:00'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$5CA2.L3.rVFNAaA82y7sOeCq8H19sn9QqlkwjySoRMlZhylTgFmjS', NULL, '2019-07-06 02:25:56', '2019-07-06 02:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama`, `lokasi`, `harga`, `foto`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Kosong', 'Brebes', 12345, '1562647081.jpg', '0', NULL, NULL, '2019-07-03 22:11:10', '2019-07-08 21:38:01'),
(2, 'Tambah', 'Dimana Saja', 4567, '1562647167.jpg', '0', NULL, NULL, '2019-07-08 21:39:27', '2019-07-08 21:39:36'),
(3, 'Mangrove', 'Dukuh Pandansari, Desa Kaliwlingi, Brebes', 15000, '1563146553.jpg', '1', NULL, NULL, '2019-07-08 21:41:38', '2019-07-14 16:22:33'),
(4, 'Ciblon Waterboom', 'Jl. Yos Sudarso, Brebes', 10000, '1563146661.png', '1', NULL, NULL, '2019-07-09 02:02:45', '2019-07-14 16:26:25'),
(5, 'Pemandian Air Panas Tirta Husada', 'Dukuh, Kedungoleng, Kecamatan Paguyangan, Kabupaten Brebes', 5000, '1563146733.jpg', '1', NULL, NULL, '2019-07-14 16:25:33', '2019-07-14 16:26:34'),
(6, 'Pantai Randusanga', 'Desa Randusanga, Brebes', 8000, '1563146876.jpg', '1', NULL, NULL, '2019-07-14 16:27:56', '2019-07-14 16:27:56'),
(7, 'Ranto Canyon', 'Desa Winduasri, Kecamatan Salem, Brebes', 20000, '1563146998.jpg', '1', NULL, NULL, '2019-07-14 16:29:58', '2019-07-14 16:29:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makanans`
--
ALTER TABLE `makanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sejarahs`
--
ALTER TABLE `sejarahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `makanans`
--
ALTER TABLE `makanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sejarahs`
--
ALTER TABLE `sejarahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
