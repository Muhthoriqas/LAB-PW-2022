-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2022 pada 16.24
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
-- Database: `8crud`
--

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
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `alamat`, `fakultas`, `created_at`, `updated_at`) VALUES
(7, '89332877', 'Opung Yono Kusumo', 'Kpg. Ikan No. 189, Batu 31048, Kaltara', 'quia', NULL, NULL),
(11, '34395702', 'Bancar Dasa Gunarto M.Ak', 'Gg. Pasir Koja No. 439, Mojokerto 12879, Sulteng', 'soshum', NULL, '2022-11-26 00:25:57'),
(12, '94195834', 'Dimaz Kasiran Hidayat S.Psi', 'Jln. Surapati No. 155, Bandung 65133, NTT', 'eum', NULL, NULL),
(13, '31663588', 'Nurul Laksita', 'Kpg. Eka No. 224, Tual 19198, Sumsel', 'quasi', NULL, NULL),
(14, '1191890', 'Gilda Rahimah', 'Jln. Dipenogoro No. 633, Lubuklinggau 41875, Jabar', 'ex', NULL, NULL),
(15, '16122369', 'Nurul Restu Wulandari', 'Jln. Suryo No. 729, Banjar 65663, Jambi', 'pariatur', NULL, NULL),
(16, '40395678', 'Ibun Saputra', 'Ki. Ronggowarsito No. 915, Administrasi Jakarta Timur 56857, Sulbar', 'veniam', NULL, NULL),
(17, '1611435', 'Queen Nasyiah', 'Jln. Lada No. 694, Jayapura 24080, Kaltara', 'iste', NULL, NULL),
(18, '74816098', 'Irma Yuliarti', 'Jr. Labu No. 513, Binjai 42478, DKI', 'consequatur', NULL, NULL),
(19, '69185870', 'Elvina Namaga', 'Ki. Katamso No. 758, Binjai 85221, NTB', 'exercitationem', NULL, NULL),
(20, '91585748', 'Ajeng Julia Puspita S.IP', 'Gg. Wahid No. 746, Banda Aceh 91868, NTT', 'voluptas', NULL, NULL),
(21, '16062056', 'Vera Yulianti', 'Gg. Barat No. 398, Pasuruan 51654, Gorontalo', 'est', NULL, NULL),
(22, '81134834', 'Wawan Candrakanta Siregar', 'Kpg. Jend. A. Yani No. 66, Kupang 14219, Maluku', 'ut', NULL, NULL),
(23, '66072211', 'Reza Irawan', 'Gg. Ujung No. 377, Cilegon 45080, Papua', 'sapiente', NULL, NULL),
(24, '86746921', 'Jaeman Galuh Wasita M.Pd', 'Kpg. Sudirman No. 578, Tangerang 49855, Sulut', 'quaerat', NULL, NULL),
(25, '81555718', 'Cindy Hassanah', 'Ds. Bass No. 780, Bandung 41302, NTT', 'quibusdam', NULL, NULL),
(26, '63191246', 'Elma Sudiati S.I.Kom', 'Psr. Hang No. 451, Ambon 10215, Sulbar', 'sint', NULL, NULL),
(27, '40954876', 'Dagel Cakrawangsa Permadi S.Gz', 'Jr. Ikan No. 855, Cimahi 89754, Sulbar', 'ipsum', NULL, NULL),
(28, '11673307', 'Titin Lili Lestari', 'Psr. Cikapayang No. 76, Pematangsiantar 30052, Sultra', 'quisquam', NULL, NULL),
(29, '64787603', 'Artanto Nugroho', 'Ds. Kali No. 867, Cirebon 15816, Sulsel', 'dolorem', NULL, NULL),
(30, '6025860', 'Pangestu Saadat Sihombing M.Ak', 'Jr. Laksamana No. 933, Tidore Kepulauan 10273, Riau', 'at', NULL, NULL),
(31, '88457125', 'Yessi Unjani Lestari', 'Dk. Adisumarmo No. 802, Sorong 55739, Kalsel', 'necessitatibus', NULL, NULL),
(32, '25992752', 'Jayadi Cahya Sitompul', 'Dk. Bank Dagang Negara No. 132, Cirebon 82686, Sulsel', 'modi', NULL, NULL),
(33, '48158784', 'Diana Mulyani', 'Dk. Tentara Pelajar No. 972, Payakumbuh 43781, Maluku', 'neque', NULL, NULL),
(34, '17741127', 'Jasmin Oktaviani S.IP', 'Jln. Bayan No. 686, Lubuklinggau 78771, Malut', 'veniam', NULL, NULL),
(35, '70082241', 'Ellis Pratiwi', 'Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 771, Sungai Penuh 60993, Kaltim', 'qui', NULL, NULL),
(36, '45350145', 'Prayogo Maryadi', 'Ki. Agus Salim No. 681, Pariaman 21900, Maluku', 'repudiandae', NULL, NULL),
(37, '93575689', 'Harsanto Nababan', 'Kpg. Baranang No. 607, Bau-Bau 29480, Kepri', 'sed', NULL, NULL),
(38, '12678544', 'Bakiadi Kasusra Anggriawan', 'Ki. Orang No. 952, Jayapura 79504, Malut', 'ab', NULL, NULL),
(39, '37545544', 'Cawuk Sihombing S.Kom', 'Gg. Setia Budi No. 197, Tangerang Selatan 73008, Sumsel', 'sit', NULL, NULL),
(40, '61357675', 'Anastasia Safitri M.Kom.', 'Gg. Batako No. 799, Tanjungbalai 84071, Gorontalo', 'aliquam', NULL, NULL),
(41, '43165211', 'Jamalia Mardhiyah', 'Jln. Basoka Raya No. 876, Ternate 19517, Sulsel', 'aperiam', NULL, NULL),
(42, '52813686', 'Hasna Riyanti', 'Kpg. Uluwatu No. 872, Gunungsitoli 54625, Malut', 'quaerat', NULL, NULL),
(43, '65126228', 'Amelia Purwanti M.M.', 'Ki. Ters. Buah Batu No. 10, Tual 71910, Kaltim', 'aliquid', NULL, NULL),
(44, '49574958', 'Kezia Nurul Handayani', 'Psr. Warga No. 889, Tegal 90289, Papua', 'minus', NULL, NULL),
(45, '94030111', 'Vero Kasiran Pratama M.Farm', 'Jr. Baan No. 108, Sabang 32492, Lampung', 'eius', NULL, NULL),
(46, '73898199', 'Amelia Suartini', 'Ds. Sunaryo No. 549, Pariaman 40186, Sultra', 'odio', NULL, NULL),
(47, '26052608', 'Eka Kuswandari S.IP', 'Jln. Raya Ujungberung No. 660, Pekalongan 54978, Sumsel', 'hic', NULL, NULL),
(48, '71726475', 'Nyana Sihombing', 'Kpg. Yos No. 404, Kediri 40951, Sumut', 'iusto', NULL, NULL),
(49, '40555294', 'Endah Astuti', 'Jln. Moch. Ramdan No. 407, Palangka Raya 34898, Gorontalo', 'reprehenderit', NULL, NULL),
(50, '72720253', 'Elvin Hidayanto', 'Ds. Muwardi No. 181, Balikpapan 26988, Sumut', 'quia', NULL, NULL),
(51, '90200222', 'Virman Saragih', 'Ki. Basuki No. 457, Tomohon 77077, Bengkulu', 'ut', NULL, NULL),
(52, '48017765', 'Humaira Halimah', 'Ki. BKR No. 773, Mataram 18393, Sulteng', 'molestiae', NULL, NULL),
(53, '55172933', 'Ratna Mayasari', 'Psr. Bass No. 967, Sukabumi 79635, NTB', 'totam', NULL, NULL),
(54, '85728930', 'Jatmiko Kurniawan', 'Ki. Pelajar Pejuang 45 No. 172, Batam 89152, DIY', 'dolorem', NULL, NULL),
(55, '5238040', 'Uli Andriani', 'Dk. Kyai Gede No. 765, Pasuruan 63152, Gorontalo', 'molestias', NULL, NULL),
(56, '40579528', 'Lalita Suartini', 'Gg. Hasanuddin No. 885, Subulussalam 71191, Sulut', 'vitae', NULL, NULL),
(57, '97041970', 'Rahayu Handayani S.Ked', 'Kpg. Tambun No. 936, Padang 20311, NTB', 'delectus', NULL, NULL),
(58, '12448546', 'Galar Irawan', 'Jr. Ters. Pasir Koja No. 729, Pariaman 17537, Sumut', 'aliquam', NULL, NULL),
(59, '88493710', 'Hasna Dewi Uyainah M.Ak', 'Gg. Suryo Pranoto No. 953, Cilegon 87795, Banten', 'rerum', NULL, NULL),
(60, '96289970', 'Prayogo Tampubolon', 'Ds. Dipenogoro No. 124, Ambon 31211, Jatim', 'qui', NULL, NULL),
(61, '28381304', 'Asirwanda Bahuwarna Sihombing', 'Ki. Sutoyo No. 487, Bima 44630, NTB', 'nesciunt', NULL, NULL),
(62, '5599318', 'Nyana Pranata Anggriawan', 'Ds. Kyai Gede No. 882, Surakarta 65156, Babel', 'facere', NULL, NULL),
(63, '49584724', 'Hafshah Aryani', 'Psr. Kyai Mojo No. 8, Payakumbuh 50492, Sulsel', 'eius', NULL, NULL),
(64, '90794828', 'Yani Haryanti S.Pt', 'Jr. Gajah No. 297, Pematangsiantar 69654, Riau', 'consequuntur', NULL, NULL),
(65, '87321136', 'Ozy Raden Rajata S.Ked', 'Kpg. Banceng Pondok No. 569, Mojokerto 83563, Sulteng', 'assumenda', NULL, NULL),
(66, '29311742', 'Citra Suci Novitasari M.M.', 'Kpg. Achmad No. 61, Mojokerto 60123, Sumut', 'id', NULL, NULL),
(67, '63310423', 'Kenes Putra M.TI.', 'Jln. Urip Sumoharjo No. 396, Yogyakarta 20878, Aceh', 'inventore', NULL, NULL),
(68, '46181762', 'Ayu Wastuti', 'Psr. Ters. Jakarta No. 105, Tasikmalaya 51405, Kalsel', 'excepturi', NULL, NULL),
(69, '53998225', 'Daliono Siregar', 'Ds. Raya Ujungberung No. 396, Surabaya 86809, Maluku', 'dolor', NULL, NULL),
(70, '37979826', 'Nalar Hidayanto', 'Gg. Sentot Alibasa No. 832, Blitar 69647, Sumbar', 'temporibus', NULL, NULL),
(71, '52566197', 'Karimah Hastuti S.Farm', 'Ds. Ikan No. 419, Manado 38195, Kalsel', 'quos', NULL, NULL),
(72, '43911213', 'Calista Nilam Suartini', 'Dk. Pelajar Pejuang 45 No. 824, Sibolga 51043, Aceh', 'ex', NULL, NULL),
(73, '24324412', 'Marsudi Simbolon M.M.', 'Ki. Warga No. 365, Tual 70629, Kepri', 'dicta', NULL, NULL),
(74, '35036054', 'Humaira Wijayanti', 'Ki. Imam No. 287, Gorontalo 79665, Maluku', 'consectetur', NULL, NULL),
(75, '28930924', 'Sadina Ade Pertiwi S.I.Kom', 'Ki. S. Parman No. 22, Yogyakarta 68200, Malut', 'nemo', NULL, NULL),
(76, '98825506', 'Paramita Usada', 'Kpg. Basket No. 722, Cirebon 60597, Papua', 'dicta', NULL, NULL),
(77, '36277798', 'Emong Marpaung', 'Ki. PHH. Mustofa No. 875, Tegal 42099, Jabar', 'consequatur', NULL, NULL),
(78, '76581438', 'Gading Prabowo', 'Gg. Fajar No. 443, Blitar 33288, Sulut', 'temporibus', NULL, NULL),
(79, '40505320', 'Patricia Rahimah', 'Kpg. Bah Jaya No. 245, Sabang 47898, Malut', 'quaerat', NULL, NULL),
(80, '43973567', 'Zaenab Fujiati', 'Gg. Babah No. 85, Bandung 93794, Babel', 'non', NULL, NULL),
(81, '77170852', 'Ajimat Hidayanto M.M.', 'Psr. Baranang Siang No. 194, Pariaman 25116, Jatim', 'iure', NULL, NULL),
(82, '27596981', 'Lalita Haryanti', 'Kpg. W.R. Supratman No. 785, Cilegon 96446, NTB', 'labore', NULL, NULL),
(83, '30219167', 'Sadina Rahimah', 'Ds. Aceh No. 878, Bitung 68405, Sultra', 'sint', NULL, NULL),
(84, '56886705', 'Yuliana Hariyah', 'Gg. Gambang No. 244, Cirebon 38521, Pabar', 'at', NULL, NULL),
(85, '56449676', 'Rendy Gandewa Megantara', 'Kpg. Otista No. 194, Semarang 73311, DKI', 'iusto', NULL, NULL),
(86, '43939120', 'Balidin Bahuwarna Pranowo', 'Ds. Padang No. 492, Metro 90748, Lampung', 'sit', NULL, NULL),
(87, '42024959', 'Kasiyah Sabrina Suartini', 'Kpg. Barat No. 245, Administrasi Jakarta Barat 76843, Sumut', 'sit', NULL, NULL),
(88, '75210668', 'Pia Padmi Rahmawati M.Farm', 'Psr. Badak No. 31, Serang 15298, Bali', 'blanditiis', NULL, NULL),
(89, '16799072', 'Hari Taswir Hidayat S.Ked', 'Gg. Baladewa No. 908, Jambi 39680, Kalbar', 'odit', NULL, NULL),
(90, '48846599', 'Vicky Michelle Purnawati', 'Psr. Abdul No. 299, Banjarbaru 85050, Sulsel', 'explicabo', NULL, NULL),
(91, '45967074', 'Puput Wani Wahyuni', 'Jln. Sukajadi No. 109, Tanjungbalai 52478, Babel', 'cum', NULL, NULL),
(92, '70035051', 'Ifa Wijayanti', 'Ds. Bara No. 64, Lubuklinggau 18473, Kaltim', 'labore', NULL, NULL),
(93, '77752711', 'Vicky Mulyani', 'Kpg. Baranang No. 586, Magelang 50305, Malut', 'enim', NULL, NULL),
(94, '9141532', 'Cager Manullang', 'Psr. Ir. H. Juanda No. 960, Jayapura 84934, Sumut', 'nihil', NULL, NULL),
(95, '36523794', 'Anita Mandasari S.Pd', 'Ki. Adisumarmo No. 166, Tomohon 67963, NTB', 'officia', NULL, NULL),
(96, '21956352', 'Rusman Lulut Irawan', 'Psr. Jend. Sudirman No. 513, Pekalongan 45495, Bengkulu', 'voluptatibus', NULL, NULL),
(97, '40359533', 'Sadina Purwanti', 'Gg. Gedebage Selatan No. 156, Tidore Kepulauan 94446, Riau', 'maxime', NULL, NULL),
(98, '61088141', 'Salwa Nurdiyanti S.E.', 'Dk. Sumpah Pemuda No. 298, Medan 42894, Sumsel', 'facere', NULL, NULL),
(99, '50961895', 'Imam Tamba', 'Ki. Abdul No. 689, Sukabumi 69326, Maluku', 'nesciunt', NULL, NULL),
(103, 'H071211079', 'Jeon Jungkook', 'Korut', 'soshum', '2022-11-22 22:54:12', '2022-11-22 22:54:12'),
(106, 'H071211051', 'Febi Fiantika', 'Pinrang', 'saintek', '2022-11-23 08:51:22', '2022-11-23 08:51:22'),
(107, 'H071211079', 'Dhiyaa Unnisa', 'Maros', 'saintek', '2022-11-23 08:52:07', '2022-11-23 08:52:07'),
(110, 'H071211', 'Jeon Jungkook', 'Maros', 'soshum', '2022-11-25 23:18:28', '2022-11-25 23:18:28'),
(111, '0000', 'Dhiyaa Unnisa', 'Baruga', 'saintek', '2022-11-25 23:30:06', '2022-11-25 23:30:06');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_22_073539_create_mahasiswas_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
