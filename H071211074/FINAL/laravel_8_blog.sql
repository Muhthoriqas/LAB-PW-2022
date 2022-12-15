-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2022 pada 13.02
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_8_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sampul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `sampul`, `judul`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, '1670767572-ʕ•́ᴥ•̀ʔっ♡𝘩𝘦𝘢𝘳𝘵𝘴𝘫𝘶𝘺𝘦𝘰𝘯.jpg', 'Biodata Girlgrup Weekly', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'biodata-girlgrup-weekly', '2022-12-11 05:57:05', '2022-12-11 06:06:12'),
(2, '1670767590-Newjeans.jpg', 'Biodata Lengkap New Jeans', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'biodata-lengkap-new-jeans', '2022-12-11 05:57:05', '2022-12-11 06:06:30'),
(3, '1671053189-ive (2).jpg', 'Biodata Girlgrup IVE', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'biodata-girlgrup-ive', '2022-12-11 06:09:06', '2022-12-14 13:26:29');

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
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Nanda', '2022-12-11 05:57:05', '2022-12-14 17:33:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Weekly', 'weekly', '2022-12-11 05:57:03', '2022-12-11 05:59:57'),
(2, 'Le Sserafim', 'le-sserafim', '2022-12-11 05:57:04', '2022-12-11 05:59:45'),
(3, 'New Jeans', 'new-jeans', '2022-12-11 05:57:04', '2022-12-11 05:59:51'),
(4, 'Bts', 'bts', '2022-12-12 01:45:00', '2022-12-12 01:45:00'),
(5, 'Nmixx', 'nmixx', '2022-12-12 06:42:57', '2022-12-12 06:42:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `like`
--

CREATE TABLE `like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `like`
--

INSERT INTO `like` (`id`, `id_post`, `id_user`) VALUES
(1, 2, 3),
(2, 3, 3),
(3, 5, 3),
(4, 10, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', '2022-12-11 05:57:05', '2022-12-11 05:57:05');

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
(4, '2021_01_22_063108_create_kategori_table', 1),
(5, '2021_01_27_094756_create_post_table', 1),
(6, '2021_01_27_185544_add_id_kategori_to_post_table', 1),
(7, '2021_01_28_085907_create_tag_table', 1),
(8, '2021_01_28_125128_create_post_tag_table', 1),
(9, '2021_01_31_163416_create_banner_table', 1),
(10, '2021_02_01_124740_create_logo_table', 1),
(11, '2021_02_01_171437_create_footer_table', 1),
(12, '2021_02_02_094328_create_tentang_table', 1),
(13, '2021_02_13_052058_add_id_user_to_post_table', 1),
(14, '2021_02_28_153130_create_permission_tables', 1),
(15, '2021_03_01_162633_create_like_table', 1),
(16, '2021_05_06_130247_create_rekomendasi_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14);

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
-- Struktur dari tabel `permissions`
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
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `sampul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `id_kategori`, `id_user`, `sampul`, `judul`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1670767176-LE_SSERAFIM.jpg', 'Sakura Le Sserafim Assalamualaikum', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'sakura-le-sserafim-assalamualaikum', '2022-12-11 05:57:04', '2022-12-12 01:55:28'),
(2, 4, 2, '1670838288-download (3).jpg', 'Mencintai Oppa Oppa', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'mencintai-oppa-oppa', '2022-12-11 05:57:04', '2022-12-12 01:45:13'),
(3, 4, 2, '1670838428-download (4).jpg', 'Jin BTS Wamil', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'jin-bts-wamil', '2022-12-11 05:57:04', '2022-12-12 01:47:08'),
(4, 3, 1, '1670767549-newjeans (2).jpg', 'New Jeans Goyang Dumang', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'new-jeans-goyang-dumang', '2022-12-11 05:57:04', '2022-12-11 06:05:49'),
(5, 5, 2, '1670856149-download (5).jpg', 'Jinny keluar dari NMIXX', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto itaque, pariatur quod et consectetur quasi quas eum quidem, placeat illo, similique optio deserunt nemo iste eos omnis. In, veritatis corrupti?</p>', 'jinny-keluar-dari-nmixx', '2022-12-12 06:42:29', '2022-12-12 06:43:26'),
(6, 4, 1, '1671007734-BTS-Backgrounds-Pictures.jpg', 'Assalamualikum PApi PAnpi', '<p>Lorem</p>', 'assalamualikum-papi-panpi', '2022-12-14 00:48:54', '2022-12-14 00:48:54'),
(7, 3, 1, '1671014224-BTS_.jpg', 'Biodata Lengkap New Jeans', '<p>Lorem</p>', 'biodata-lengkap-new-jeans', '2022-12-14 02:37:04', '2022-12-14 02:37:04'),
(8, 4, 15, '1671054848-Looking for Family.jpg', 'Jamet Koreyah', '<p>Keluarga yang utuh dan harmonis adalah idaman setiap orang begitu juga dengan Niki dan ke-6 saudaranya yang lain. Bagaimana perjalanan Niki dalam membangun keutuhan dalam keluarganya.? Akankah usahanya berhasil atau malah hanya jadi sia-sia.?</p>', 'jamet-koreyah', '2022-12-14 13:54:08', '2022-12-14 13:54:08'),
(9, 3, 16, '1671069090-newjeans.png', 'Si Paling HypeBoy', '<p>New Jeans merupakan&nbsp;girlband rookie dari HYBE Labels, kemunculannya banyak menyita perhatian pecinta musik Kpop di seluruh dunia. New Jeans girl group beranggotakan 5 orang, yaitu Hanni, Minji, Haerin, Danielle, dan Hyein.</p>', 'si-paling-hypeboy', '2022-12-14 17:51:30', '2022-12-14 17:51:30'),
(10, 4, 1, '1671098403-download (8).jpg', 'Biodata Enhypen', '<p>Lorem ipsum</p>', 'biodata-enhypen', '2022-12-15 02:00:03', '2022-12-15 02:01:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `id_tag` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_tag`
--

INSERT INTO `post_tag` (`id`, `id_post`, `id_tag`, `created_at`, `updated_at`) VALUES
(2, 1, 3, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 2, NULL, NULL),
(5, 4, 3, NULL, NULL),
(7, 2, 3, NULL, NULL),
(8, 3, 3, NULL, NULL),
(10, 6, 2, NULL, NULL),
(11, 6, 3, NULL, NULL),
(12, 7, 3, NULL, NULL),
(13, 8, 3, NULL, NULL),
(15, 9, 3, NULL, NULL),
(16, 10, 2, NULL, NULL),
(17, 10, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_post` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `id_post`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-12-11 05:57:04', '2022-12-11 05:57:04'),
(4, 4, '2022-12-12 01:48:39', '2022-12-12 01:48:39'),
(5, 5, '2022-12-12 06:43:44', '2022-12-12 06:43:44'),
(6, 10, '2022-12-15 02:00:47', '2022-12-15 02:00:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-12-11 05:57:00', '2022-12-11 05:57:00'),
(2, 'penulis', 'web', '2022-12-11 05:57:00', '2022-12-11 05:57:00'),
(3, 'pembaca', 'web', '2022-12-11 05:57:00', '2022-12-11 05:57:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Boygroup', 'boygroup', '2022-12-11 05:57:04', '2022-12-11 06:00:13'),
(3, 'HybeLabels', 'hybelabels', '2022-12-11 05:57:04', '2022-12-11 06:00:19'),
(5, 'Enhypen', 'enhypen', '2022-12-15 02:01:39', '2022-12-15 02:01:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `konten`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsa magnam non nam aut dolore beatae provident dolorem, corrupti quibusdam. Iure est sint odit doloremque exercitationem qui veniam quia tempora?', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', '2022-12-11 05:57:05', '2022-12-11 05:57:05');

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
(1, 'Nanda', 'nanda@gmail.com', '2022-12-11 05:57:00', '$2y$10$Ep2hguFNJ.kpAWyesNpgdeuTqW1a90TRyX.2me96PO3p0ece.g1vS', NULL, '2022-12-11 05:57:00', '2022-12-12 01:31:02'),
(2, 'Mika', 'kiyowo@gmail.com', '2022-12-11 05:57:00', '$2y$10$R6Cxw71ABb9JHCmtYHhjXuv1cI8ctZnfNK4nkiziZI3Fh/QoFXcZe', NULL, '2022-12-11 05:57:00', '2022-12-11 05:57:00'),
(3, 'Laura', 'cute@gmail.com', '2022-12-11 05:57:03', '$2y$10$mpfe/qkw/t9tCZ2qtGHuu.YMads/qsIax1Tbk17eFgHhkmD3ONwCO', NULL, '2022-12-11 05:57:03', '2022-12-11 05:57:03'),
(8, 'Dede', 'dede@gmail.com', NULL, '$2y$10$vYY0S4IJQdo5mdpevDZY7.KpwJNeQ1LU55xONC9e0/Oiu4BRcJbau', NULL, '2022-12-12 02:16:44', '2022-12-12 02:16:44'),
(12, 'Thoriq', 'thoriqasdownload@gmail.com', NULL, '$2y$10$IibGX.lnIcxB11dddiDwUOcFCqrsl5/4sByIZi1gIcgFOjIiuuR3e', NULL, '2022-12-14 02:41:49', '2022-12-14 02:41:49'),
(13, 'Celine', 'celine@gmail.com', NULL, '$2y$10$ImxMjEPrynNI33u3/EF9r.CzM3Q9mUeVPomyklE.Yt5HnhRVcrl2i', NULL, '2022-12-14 13:38:49', '2022-12-14 13:38:49'),
(14, 'celine', 'celin@gmail.com', NULL, '$2y$10$LfqHlQ4kEzLfx.9NeVnJXerk/GvYtMyvh8uxgf1iZQmO0YzB2K0aC', NULL, '2022-12-14 13:45:40', '2022-12-14 13:45:40'),
(15, 'Liska', 'liska@gmail.com', NULL, '$2y$10$5LdtwjDLrpaHMxKsMjnK1.P7mcUhzhsK0FZHjKKw93R5ZY41TnvFq', NULL, '2022-12-14 13:51:56', '2022-12-14 13:51:56'),
(16, 'Febi', 'febi@gmail.com', NULL, '$2y$10$OSROLgnz11yMJt5IwTWmNuKXQkgls3DkT/jhMEhDwxVNpFoXE6M2W', NULL, '2022-12-14 17:47:22', '2022-12-14 17:47:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_id_post_foreign` (`id_post`),
  ADD KEY `like_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_id_post_foreign` (`id_post`),
  ADD KEY `post_tag_id_tag_foreign` (`id_tag`);

--
-- Indeks untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
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
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `like`
--
ALTER TABLE `like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `like_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_id_tag_foreign` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
