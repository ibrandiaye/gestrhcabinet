-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 12 oct. 2021 à 18:16
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestrh`
--

-- --------------------------------------------------------

--
-- Structure de la table `autorisations`
--

CREATE TABLE `autorisations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedebut` date NOT NULL,
  `duree` int(11) NOT NULL,
  `datefin` date NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `candidat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `autorisations`
--

INSERT INTO `autorisations` (`id`, `fonction`, `datedebut`, `duree`, `datefin`, `service_id`, `candidat_id`, `created_at`, `updated_at`) VALUES
(4, 'Infirmier', '2021-09-18', 2, '2021-11-18', 1, 4, '2021-09-18 19:44:35', '2021-09-18 19:44:35'),
(5, 'qsdsd', '2021-09-18', 2, '2021-11-18', 1, 4, '2021-09-18 20:04:13', '2021-09-18 20:04:13'),
(6, 'Aide Soignant', '2021-10-03', 2, '2021-12-03', 1, 7, '2021-10-03 20:47:39', '2021-10-03 20:47:39');

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  `lieunaiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diplome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `numdossier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedepot` date NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id`, `prenom`, `nom`, `datenaiss`, `lieunaiss`, `email`, `sexe`, `sm`, `diplome`, `cv`, `created_at`, `updated_at`, `service_id`, `numdossier`, `datedepot`, `qualification`, `tel`, `photo`) VALUES
(4, 'Ibra', 'Ndiaye', '2021-09-18', 'Mboss', 'ibra93_3@live.fr', 'femme', 'Marié', '1631992202.pdf', '1631992202.pdf', '2021-09-18 19:10:02', '2021-09-18 19:10:02', 1, 'QHBSQSF', '2021-09-18', NULL, '+221774874628', NULL),
(7, 'fall', 'demba', '2021-09-22', 'Mboss', 'ibra93_3@live.fr', 'homme', 'Célibataire', '1632344064.pdf', '1632344064.pdf', '2021-09-22 20:54:24', '2021-09-22 20:54:24', 1, 'huyhyu', '2021-09-22', NULL, '+221775240553', '1632344064.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `nom`, `fichier`, `candidat_id`, `created_at`, `updated_at`) VALUES
(2, 'qsd', '1631993408.pdf', 4, '2021-09-18 19:30:08', '2021-09-18 19:30:08'),
(3, 'qsd', '1631993851.pdf', 4, '2021-09-18 19:37:31', '2021-09-18 19:37:31'),
(4, 'qsd', '1631994001.pdf', 4, '2021-09-18 19:40:02', '2021-09-18 19:40:02'),
(5, 'fqfd', '1631994236.docx', 4, '2021-09-18 19:43:56', '2021-09-18 19:43:56'),
(6, 'cv', '1632343527.pdf', 4, '2021-09-22 20:45:27', '2021-09-22 20:45:27');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_23_215738_create_candidats_table', 1),
(5, '2021_08_23_220645_create_services_table', 1),
(6, '2021_08_23_221316_update_table_candidats_addservice_id', 1),
(7, '2021_08_23_222330_create_autorisations_table', 1),
(8, '2021_08_29_225703_create_prolongations_table', 1),
(9, '2021_08_30_195943_create_documents_table', 1),
(10, '2021_09_06_221242_update_table_candidat_add_column', 1),
(11, '2021_09_09_004125_add_column_on_candidat', 1),
(12, '2021_09_22_000219_update_table_candidats_add_photo', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prolongations`
--

CREATE TABLE `prolongations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `raison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedebut` date NOT NULL,
  `duree` int(11) NOT NULL,
  `datefin` date NOT NULL,
  `autorisation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prolongations`
--

INSERT INTO `prolongations` (`id`, `raison`, `datedebut`, `duree`, `datefin`, `autorisation_id`, `created_at`, `updated_at`) VALUES
(4, 'qdsfqsdf', '2021-09-18', 2, '2021-11-18', 4, '2021-09-18 19:47:47', '2021-09-18 19:47:47'),
(5, 'QFDQF', '2021-09-18', 2, '2021-11-18', 4, '2021-09-18 19:48:53', '2021-09-18 19:48:53'),
(8, 'KDBDSFBH', '2021-09-18', 12, '2022-09-18', 4, '2021-09-18 19:55:50', '2021-09-18 19:55:50'),
(9, 'KDBDSFBH', '2021-09-18', 12, '2022-09-18', 4, '2021-09-18 19:56:31', '2021-09-18 19:56:31'),
(10, 'QSDSD', '2021-09-18', 2, '2021-11-18', 5, '2021-09-18 20:04:36', '2021-09-18 20:04:36');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Pédiatrie', '2021-09-17 10:06:07', '2021-09-17 10:06:07');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ibra Ndiaye', 'ibra789ndiaye@gmail.com', NULL, '$2y$10$nX3sOioq.F6vyPVPz3jce.03CRqCK0DNM8t6j/yDL0hY/MC40w8ua', NULL, '2021-10-03 23:17:10', '2021-10-03 23:17:10'),
(2, 'fall demba', 'ibra93_3@live.fr', NULL, '$2y$10$xXN8ch72nk2eWiVRctF69eSBlEgoZr0nnlPTZuA97LCbl3o.R66mm', NULL, '2021-10-03 23:24:07', '2021-10-03 23:24:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autorisations`
--
ALTER TABLE `autorisations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autorisations_service_id_foreign` (`service_id`),
  ADD KEY `autorisations_candidat_id_foreign` (`candidat_id`);

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidats_service_id_foreign` (`service_id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_candidat_id_foreign` (`candidat_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `prolongations`
--
ALTER TABLE `prolongations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prolongations_autorisation_id_foreign` (`autorisation_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autorisations`
--
ALTER TABLE `autorisations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `prolongations`
--
ALTER TABLE `prolongations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `autorisations`
--
ALTER TABLE `autorisations`
  ADD CONSTRAINT `autorisations_candidat_id_foreign` FOREIGN KEY (`candidat_id`) REFERENCES `candidats` (`id`),
  ADD CONSTRAINT `autorisations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Contraintes pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD CONSTRAINT `candidats_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_candidat_id_foreign` FOREIGN KEY (`candidat_id`) REFERENCES `candidats` (`id`);

--
-- Contraintes pour la table `prolongations`
--
ALTER TABLE `prolongations`
  ADD CONSTRAINT `prolongations_autorisation_id_foreign` FOREIGN KEY (`autorisation_id`) REFERENCES `autorisations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
