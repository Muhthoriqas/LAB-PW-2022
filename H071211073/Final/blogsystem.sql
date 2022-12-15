-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 12:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', 'web-programming', '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(2, 'Personal', 'personal', '2022-12-13 20:54:52', '2022-12-13 20:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_12_13_125842_create_posts_table', 1),
(6, '2022_12_13_142356_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `excerpt`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Odio eligendi et optio.', 'ab-et-est-excepturi', 'Omnis architecto maiores vero. Consectetur aut aut ut sapiente aut. At laudantium nesciunt earum ex necessitatibus sed ad. Magnam sed magnam quasi provident mollitia saepe.', '<p>Voluptas officia error voluptas iure voluptatem. Recusandae consectetur a quia. Optio voluptatum corrupti nulla deleniti corrupti.</p><p>Dolor inventore sit eos dolor molestiae numquam. Cum praesentium sed repudiandae tenetur ipsa sed qui ut. Unde ea voluptatum unde voluptatem reiciendis. Dolor quo quia nostrum quidem enim consequatur.</p><p>Provident et consequatur itaque aut beatae. Expedita quae maiores quia accusamus. Esse nemo repellendus necessitatibus et. Delectus deleniti expedita qui modi illo impedit et quia.</p><p>Voluptatem officia dolor harum pariatur ea. Quisquam similique quis ut et autem sunt dolorum. Nostrum id quia beatae ipsum. Dolorum voluptatem vel molestias similique veniam neque laudantium sit.</p><p>Aliquam distinctio porro libero possimus id expedita. Natus quibusdam vel voluptate consequatur quo quaerat voluptatem. Non omnis quibusdam est et dignissimos quod aut. Maxime sint itaque atque dolorem aut itaque dolor.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(2, 1, 2, 'Odit dicta at.', 'ut-perferendis-veniam-tenetur-voluptatum-non-asperiores-rem', 'Mollitia non ea excepturi repellendus perferendis. Ad aut blanditiis omnis blanditiis. In eos id officiis natus voluptatem.', '<p>Suscipit quo recusandae ea cumque ea vero animi. Laborum fugit optio veritatis enim non. Deserunt sed qui et voluptate architecto explicabo dignissimos.</p><p>Delectus quae voluptatibus ipsum quod nobis omnis. Rem in iste perspiciatis fugiat aut voluptatem.</p><p>Labore mollitia sed sapiente ut consectetur. Molestiae consequatur maxime aspernatur maiores maiores quos. Qui quisquam dolorum autem qui. Et consequatur earum voluptatem beatae eum. Totam praesentium et vel aspernatur eaque numquam amet reiciendis.</p><p>Laboriosam necessitatibus quia occaecati illum laudantium. Odit explicabo quia iste ea. Placeat quidem amet veritatis qui.</p><p>Totam et aliquam assumenda qui soluta. Praesentium veritatis architecto voluptate alias. Rerum facilis est sunt. Mollitia beatae nostrum ut fuga.</p><p>Ut officia et quo ea quae. Cum aut aut quam doloremque tempore consequatur nobis. Quam qui sint consectetur. Perferendis enim error maxime molestiae quo iusto et.</p><p>Fugiat doloribus aut eos dolor perspiciatis. Nulla eos assumenda dolore praesentium. Eos aut laudantium delectus ducimus.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(3, 1, 3, 'Eius modi molestiae.', 'voluptas-commodi-molestias-voluptate-aperiam-qui-cum-est', 'Qui aut facilis qui vitae voluptas voluptatibus. Adipisci iste non aut beatae occaecati et dolor. Autem aut et nulla provident dolore nesciunt. Incidunt laboriosam qui quo eligendi laboriosam deserunt.', '<p>Sit harum et laborum id itaque omnis dolorum. Voluptas provident dolorem voluptas quaerat neque. Optio ab aut cum amet illo autem veniam. Facere aut voluptatum quia assumenda est voluptas.</p><p>Optio ea qui velit. Et ut voluptas qui id voluptate quasi. Maiores nihil suscipit sed velit accusantium tempore. Adipisci at quae optio.</p><p>Quod quo quaerat recusandae et fugit. Praesentium necessitatibus sint doloremque id impedit. Laboriosam sit delectus enim cumque.</p><p>Voluptas autem quis voluptate cumque. Sint tempora ipsa consequatur consequuntur. Eaque quis quia inventore nesciunt nesciunt.</p><p>Incidunt similique et dolore quas adipisci minima corporis aut. Non ut assumenda quas. Ut eos reiciendis porro. Quibusdam consequatur corrupti ut rerum enim possimus.</p><p>Aut sit autem pariatur quas quia. Dolores ut laudantium et quasi nemo.</p><p>Alias ut laborum ut in perspiciatis ut. Dolor perferendis omnis et quia delectus. Est ea repellendus quae. Et voluptas vitae suscipit nihil distinctio veniam omnis.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(4, 1, 2, 'Amet id consequatur ut at.', 'minima-quisquam-nesciunt-enim', 'Harum eos omnis aut ullam minima et. Iste quae ad et sapiente qui mollitia dolores neque. Voluptas omnis maxime dolor.', '<p>Odio quo ut nulla odit. Mollitia nihil qui aliquid velit. Ipsam nobis est repudiandae omnis.</p><p>Saepe a ea excepturi et fugit quo. Enim ut consequatur hic voluptatem dolor cumque dolorem consequatur. At veniam quia ducimus quaerat vel nostrum non. Ut facere non omnis deserunt non est.</p><p>Illo accusantium sint consequatur quos non. Error perspiciatis adipisci totam illum sed. Recusandae vel hic ex asperiores totam.</p><p>Eum distinctio nihil sit perferendis culpa earum aut. Et eligendi iure neque. Et consectetur atque fuga sed quae.</p><p>Impedit assumenda reiciendis quos. Quasi alias enim rerum quia facilis totam ut. Non ut officia similique rerum est placeat dicta dolorem. Magni consequatur laboriosam dolores sit.</p><p>Error at tempore non unde soluta explicabo. Dolorem expedita dolores porro laboriosam. Consequatur aperiam ex voluptatem quas dolor et. Qui animi commodi minus suscipit doloremque officiis.</p><p>Unde non maiores et ipsa. Quas aspernatur quas autem in asperiores magnam. Eum ullam excepturi sit expedita quod suscipit eos. Eos sunt aut asperiores sunt laborum.</p><p>Aut assumenda est id. Modi maxime placeat eos est fuga deleniti accusamus. Placeat amet minima minima ipsa. Cumque soluta molestiae quas et aut. Provident vel architecto dolorum provident suscipit omnis ullam.</p><p>Aliquam sunt quisquam et qui voluptatem possimus consectetur sint. Voluptatum est sint et tenetur. Sunt minima deleniti quam deleniti beatae velit rerum.</p><p>Neque ea amet ex qui. Dolorum quia cupiditate enim. Et culpa voluptas rerum aliquam harum distinctio dignissimos. Architecto occaecati architecto explicabo consequatur asperiores nihil quis.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(5, 2, 1, 'Nulla enim aut.', 'aut-veritatis-est-vel-corporis', 'qwertyp;lkjadcb', 'qwertyp;lkjadcb', NULL, '2022-12-13 20:54:52', '2022-12-14 23:53:12'),
(6, 2, 1, 'Similique suscipit magni sint cupiditate.', 'est-non-est-eum', 'Rerum voluptatem qui hic aut dolor occaecati voluptatem voluptas. Error qui ut nostrum et rem culpa tenetur. Ad accusantium voluptatum quaerat ratione itaque.', '<p>Molestiae hic est unde beatae debitis. Minima dolorum accusamus sequi nostrum. Velit tempore dignissimos quae. Labore libero quasi culpa sed.</p><p>Magnam praesentium aliquid iusto laboriosam porro occaecati labore. Qui quo dolores quia veritatis aut. Culpa quas consequuntur dolorum tenetur est quis.</p><p>Voluptas aliquid doloribus distinctio incidunt nihil illo. Reprehenderit et nemo qui molestiae voluptas minima sunt. Illo maxime ab fugiat debitis.</p><p>Porro nemo at enim rem molestiae nobis aspernatur rerum. Et animi qui atque fuga qui sint vel. Ipsa at omnis quis repellendus. Molestiae ea dignissimos non optio.</p><p>Impedit sit qui voluptas. Molestias quam molestiae ipsa rerum. Dolorem quo ut aut. Mollitia pariatur sed occaecati perspiciatis tempore quis.</p><p>Iure id minima aut neque. Inventore non eos officia sint. Ex deleniti rerum repellat dolorem harum.</p><p>Voluptas ut omnis quam eaque minima. Quis illum deserunt tempora nostrum nesciunt ab. Occaecati debitis ipsa qui totam inventore illo. Ut et iste veniam est. Officiis enim distinctio quis architecto totam eveniet.</p><p>Quia rerum at molestias nihil voluptas. Doloribus aut optio modi in odio. Et cum maxime tenetur perspiciatis quidem aperiam reprehenderit. Veniam et dolorum et ut rem.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(7, 1, 3, 'Nulla a sit blanditiis aperiam neque eum.', 'accusantium-sequi-cupiditate-laborum', 'Architecto dicta voluptatum ab sit amet quas quia. Tempora recusandae inventore iusto exercitationem fuga odio animi. Est repudiandae tempore officia dolor quia soluta molestias.', '<p>Sint modi deleniti quis qui nam ea. Dolor dolorum cupiditate consectetur at temporibus iure adipisci. Ut et fuga dolor in et rerum et.</p><p>Ullam facilis ut quod optio placeat et. Tempora voluptatem omnis quia quidem.</p><p>Alias in qui enim soluta perferendis eum. Et itaque dolorem id et rerum ut qui voluptate. Occaecati voluptas ea est aut. Expedita dolor enim quasi aspernatur.</p><p>Quia officiis dicta soluta quibusdam dolor rerum. Perferendis accusantium laudantium sint nemo. Et atque non autem eum exercitationem.</p><p>Enim dolor neque omnis reprehenderit. Architecto nihil ut facilis nobis aperiam est quo. Enim omnis ut corrupti.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(8, 2, 2, 'Voluptates voluptatibus quidem et cupiditate.', 'commodi-itaque-enim-corrupti-numquam-laboriosam', 'Voluptas ipsum laudantium eveniet dolores quae quidem modi. Debitis sapiente consequatur et earum voluptatibus quis voluptatem. Autem magni et dolores in dolores ad. Vero corporis consequuntur asperiores.', '<p>Repudiandae aspernatur ut possimus velit vero dolorem repellat. Quia quo neque eius minima. Fugiat nostrum doloremque at excepturi. Quo ipsa itaque debitis ut nesciunt veritatis. Autem alias quis quasi ad ut.</p><p>Voluptas et accusantium laudantium minus et. Aut et aperiam vel molestiae dolorum vitae. Magnam aperiam qui natus ut ea.</p><p>Aut nihil earum nobis saepe. Tenetur occaecati ipsa et autem laudantium.</p><p>Molestias exercitationem quam assumenda assumenda consequatur dolor sunt. Tempora illo magnam consequatur dolor autem. Voluptatibus est id veritatis praesentium ut. Voluptatem omnis sit rem nihil aut debitis. Quia ut in eum vel ut cupiditate praesentium.</p><p>Consequatur optio tenetur libero expedita quod. Enim dolor consequatur voluptates et. Non est omnis repellat et. Quia eveniet illum velit voluptatibus culpa. Est debitis eligendi in.</p><p>Sequi sit autem illum tempora. Facilis amet eos est eveniet. Autem est perspiciatis inventore porro.</p><p>Maxime ut earum in. Quas nobis similique minus exercitationem. Aperiam autem et dolore odit. Dolores aut quo praesentium asperiores.</p><p>Veritatis harum quia tempora voluptatibus molestiae tempora. Tempora qui natus praesentium eum a sunt dolores. Id ut porro odit sint.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(9, 1, 3, 'Sit ea laborum et omnis.', 'natus-est-repudiandae-odit-maiores-dignissimos', 'Soluta ut voluptatem veritatis maiores beatae voluptas qui harum. Blanditiis minima labore ut culpa dolor expedita quos. Magnam tempore ut rerum sed qui fugiat aliquid laudantium. Maiores est tempore laborum facere molestias facilis voluptas.', '<p>Commodi totam dicta laudantium. Qui debitis et molestias veritatis dolorum. Impedit ratione sequi perferendis doloremque soluta est quae.</p><p>Est nulla quae quidem qui in rerum. Et voluptas laborum maxime dolorum non ipsam tempore. Optio sint quasi labore eum.</p><p>Ut modi est rerum odio consectetur. Pariatur eos nobis eligendi delectus cupiditate.</p><p>Perspiciatis sequi voluptatem architecto exercitationem voluptas corporis. Veniam vel numquam consequatur omnis accusantium cupiditate voluptatem. Dolor eveniet explicabo non aliquid neque. Aliquam est illum quis odit odit.</p><p>Quidem explicabo optio incidunt aperiam. Impedit sed id ipsum molestiae expedita ut natus velit. Iusto accusamus architecto velit est. Voluptatem qui distinctio voluptatem molestiae quo.</p><p>Ut odio dolorum eligendi. Esse aut deleniti sit voluptatum expedita saepe. Laudantium provident non voluptatem adipisci ipsam. Iusto labore amet exercitationem modi aspernatur inventore assumenda.</p><p>Eligendi repudiandae sunt ut suscipit eaque eligendi explicabo. In error recusandae sed vel et quibusdam. At rerum ut fuga vero nesciunt esse enim. Saepe facere id voluptate illo.</p><p>Omnis tempore repellat neque nam eum dolor. Et ea adipisci rerum dolorum eos eaque minima. Sequi non quo ratione molestiae deleniti accusamus. Consequatur corporis quaerat molestias fuga velit. Dolor vitae aut harum odit expedita quod.</p><p>Est ut velit nobis delectus minima non aut. Sunt eius velit dicta sint a laborum. Debitis commodi aspernatur quo distinctio non eos. Voluptas dolor qui ut nam suscipit est possimus.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(10, 1, 2, 'Nostrum quas maxime officia.', 'in-quia-exercitationem-eveniet-veritatis-dicta', 'Eligendi ea id sunt quia. Aspernatur dolorem sit id animi. Quis est error asperiores est quisquam facere est repellendus.', '<p>Minima dignissimos et et culpa iure voluptatem. Fugit ratione ipsa qui amet aliquid ut vel. Accusamus quaerat quam voluptate assumenda.</p><p>Sit cupiditate quod natus tenetur excepturi qui. In quo sit reiciendis corporis architecto natus vel. Corporis nesciunt in voluptas sit neque quibusdam.</p><p>Qui ad autem nihil. Et suscipit et minima sint pariatur voluptatibus. Ut sunt quaerat quod provident eum. Rem laborum libero id quaerat. Harum minus est ut quaerat qui.</p><p>Voluptates dolores quasi est. Quod facilis aspernatur maxime et. Voluptatem quia qui impedit exercitationem exercitationem. Voluptatem voluptate occaecati aut consequatur.</p><p>Provident eos odio tempore occaecati earum ut deleniti deleniti. Nulla libero cum nesciunt perferendis. Sequi amet earum explicabo enim rerum aliquam. A officiis non similique ut sequi eligendi perspiciatis.</p><p>Dolor facilis rerum quam dicta totam doloremque dolore dolorum. Labore autem eaque tenetur fugit. Ipsum nostrum sed cum et repudiandae. Quia et voluptatem harum iure necessitatibus qui.</p><p>Officiis nostrum veniam nemo. Ipsum officiis quod ducimus at quia et aliquid. Qui eius officia architecto expedita quam quis rerum.</p><p>Consequatur distinctio necessitatibus sed fugit. Fuga eos sed qui eveniet rerum natus error. Dolor et molestiae reiciendis modi.</p><p>Natus unde esse dolores consequatur maiores. Omnis excepturi porro quo. Minus ex maiores a eos et est ut. Repellat non et qui recusandae quo.</p>', NULL, '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(13, 2, 8, 'pocps', 'pocps', 'qwertyui;lkjhgfdszxcvbnm,./', 'qwertyui;lkjhgfdszxcvbnm,./', NULL, '2022-12-15 01:43:03', '2022-12-15 01:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harold Ratke', 'xweissnat', 'sleffler@gmail.com', '2022-12-13 20:54:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'G22nYEQEhJwyvGWrHY9XSKy7iHCNIw7twDHDsmFaWitW9gvsWHAwbWj1nNSE', '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(2, 'Maximillian Harber', 'jenkins.geovany', 'ross@yahoo.com', '2022-12-13 20:54:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'wOy5m6CB5n', '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(3, 'Hershel Buckridge PhD', 'kstrosin', 'jdonnelly@example.org', '2022-12-13 20:54:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'S9gJTYt9EA', '2022-12-13 20:54:52', '2022-12-13 20:54:52'),
(8, 'a', 'test', 'wedeto2251@ekbasia.com', NULL, '$2y$10$zsmfg4WiwlOJPIWR7q530uxk/btmA5NrRd5uUM3DJsx96sJLLvmre', 1, NULL, '2022-12-14 20:26:38', '2022-12-14 20:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
