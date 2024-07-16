-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rynad`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_d_m_i_n_s`
--

CREATE TABLE `a_d_m_i_n_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b_l_o_g_s`
--

CREATE TABLE `b_l_o_g_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Introduction` text NOT NULL,
  `sub_title_one` text DEFAULT NULL,
  `description_one` text DEFAULT NULL,
  `sub_title_two` text DEFAULT NULL,
  `description_two` text DEFAULT NULL,
  `sub_title_three` text DEFAULT NULL,
  `description_three` text DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b_l_o_g_s`
--

INSERT INTO `b_l_o_g_s` (`id`, `main_title`, `image`, `Introduction`, `sub_title_one`, `description_one`, `sub_title_two`, `description_two`, `sub_title_three`, `description_three`, `comments`, `created_at`, `updated_at`) VALUES
(2, 'La Cybersécurité : Un Enjeu Crucial dans le Monde Numérique Actuel', 'public/pics/B50KLYtna8HqxBg0O7dQ2B9LdbkMTUw8TBBP6sEn.jpg', 'Dans un monde de plus en plus connecté, la cybersécurité est devenue un enjeu majeur. La dépendance accrue aux technologies numériques pour les communications, les transactions financières, et même les opérations quotidiennes, expose les individus et les organisations à des risques croissants de cyberattaques. Cet article explore les différents aspects de la cybersécurité, les menaces courantes, et les stratégies pour se protéger efficacement.', 'Qu’est-ce que la Cybersécurité ?', 'La cybersécurité désigne l’ensemble des pratiques, technologies, et processus mis en œuvre pour protéger les systèmes informatiques, les réseaux et les données contre les cyberattaques, les accès non autorisés, les dommages ou les vols. Elle englobe diverses dimensions, allant de la protection des infrastructures critiques à la sécurisation des données personnelles.', 'Menaces Courantes en Cybersécurité', 'Malware (Logiciels malveillants)\r\nLes malwares incluent les virus, chevaux de Troie, ransomwares, et spyware. Ils sont conçus pour infiltrer et endommager les systèmes informatiques. Par exemple, un ransomware chiffre les données de la victime et exige une rançon pour les déchiffrer.\r\n\r\nPhishing\r\nLLe phishing est une technique de manipulation où les attaquants se font passer pour des entités de confiance afin de tromper les utilisateurs et obtenir des informations sensibles telles que des mots de passe ou des numéros de carte de crédit.\r\n\r\nAttaques par Déni de Service (DoS)\r\nLes attaques DoS et DDoS (Déni de Service Distribué) visent à rendre un service ou un réseau indisponible en le surchargeant de trafic malveillant. Cela peut paralyser les opérations d’une entreprise pendant des heures voire des jours.\r\n\r\nExploits de Vulnérabilités\r\nLes attaquants exploitent des failles de sécurité dans les logiciels ou matériels pour accéder à des systèmes. Les mises à jour régulières et les correctifs de sécurité sont essentiels pour combler ces failles.', NULL, NULL, NULL, '2024-07-12 06:16:11', '2024-07-12 06:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `c_o_n_t_a_c_t_s`
--

CREATE TABLE `c_o_n_t_a_c_t_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_07_10_115148_create_b_l_o_g_s_table', 1),
(7, '2024_07_10_120547_create_c_o_n_t_a_c_t_s_table', 1),
(8, '2024_07_10_160331_create_a_d_m_i_n_s_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jihad mifdal', 'jihad.mifdal@rynad.services', NULL, '$2y$10$gy6PVVH/MPoigZNJPxeOqee93aLb19k0RQus2HEF85/8409UKSOTS', '4GGTZVkHeU54GCaIGeP4oFbdmzYxbNZjYejtZdEu3UtUIlOHdwIehYIrRJVx', '2024-07-11 10:01:41', '2024-07-11 10:01:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_d_m_i_n_s`
--
ALTER TABLE `a_d_m_i_n_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_l_o_g_s`
--
ALTER TABLE `b_l_o_g_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_o_n_t_a_c_t_s`
--
ALTER TABLE `c_o_n_t_a_c_t_s`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_d_m_i_n_s`
--
ALTER TABLE `a_d_m_i_n_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b_l_o_g_s`
--
ALTER TABLE `b_l_o_g_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c_o_n_t_a_c_t_s`
--
ALTER TABLE `c_o_n_t_a_c_t_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
