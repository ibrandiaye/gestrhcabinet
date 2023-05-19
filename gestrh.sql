-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 19 mars 2023 à 10:52
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
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, '<wxw<xw', '2023-03-06 13:28:27', '2023-03-06 13:28:27');

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

CREATE TABLE `contrats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrats`
--

INSERT INTO `contrats` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'CDD', '2023-03-06 13:22:49', '2023-03-06 13:22:49');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employe_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id`, `nom`, `fichier`, `candidat_id`, `created_at`, `updated_at`, `employe_id`) VALUES
(2, 'qsd', '1631993408.pdf', 4, '2021-09-18 19:30:08', '2021-09-18 19:30:08', NULL),
(3, 'qsd', '1631993851.pdf', 4, '2021-09-18 19:37:31', '2021-09-18 19:37:31', NULL),
(4, 'qsd', '1631994001.pdf', 4, '2021-09-18 19:40:02', '2021-09-18 19:40:02', NULL),
(5, 'fqfd', '1631994236.docx', 4, '2021-09-18 19:43:56', '2021-09-18 19:43:56', NULL),
(6, 'cv', '1632343527.pdf', 4, '2021-09-22 20:45:27', '2021-09-22 20:45:27', NULL),
(24, 'qsdfqsf', '1678358940.pdf', 7, '2023-03-09 10:49:00', '2023-03-09 10:49:00', NULL),
(35, 'cv', '1678360835.pdf', NULL, '2023-03-09 11:20:35', '2023-03-09 11:20:35', 3),
(36, 'QSDSQD', '1678809588.pdf', NULL, '2023-03-14 15:59:48', '2023-03-14 15:59:48', 3),
(37, 'QSDQD', '1678835286.pdf', NULL, '2023-03-14 23:08:06', '2023-03-14 23:08:06', 3),
(38, 'FDFDF', '1678874597.pdf', NULL, '2023-03-15 10:03:17', '2023-03-15 10:03:17', 3);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  `lieunaiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datefonction` date NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `contrat_id` bigint(20) UNSIGNED NOT NULL,
  `famille_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `fonction_id` bigint(20) UNSIGNED NOT NULL,
  `employeur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `retraite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typecontrat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenomination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `nom`, `prenom`, `datenaiss`, `lieunaiss`, `email`, `tel`, `sexe`, `adresse`, `matricule`, `cni`, `datefonction`, `religion`, `service_id`, `contrat_id`, `famille_id`, `categorie_id`, `fonction_id`, `employeur_id`, `created_at`, `updated_at`, `retraite`, `sm`, `typecontrat`, `datenomination`) VALUES
(3, 'Ndiaye', 'Ibra', '2000-03-08', 'Dakar', 'cheikhndiaye@endatiersmonde.org', '+221774874628', 'homme', 'km', 'M100001', '1757199003270', '2022-01-01', 'musulman', 1, 1, 1, 1, 1, 1, '2023-03-08 13:55:00', '2023-03-08 15:33:54', '60', 'Célibataire', 'permanent', '2023-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `employeurs`
--

CREATE TABLE `employeurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employeurs`
--

INSERT INTO `employeurs` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'sdfsf', '2023-03-06 13:29:04', '2023-03-06 13:29:04');

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
-- Structure de la table `familles`
--

CREATE TABLE `familles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `familles`
--

INSERT INTO `familles` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'zhzrgzr', '2023-03-06 13:29:14', '2023-03-06 13:29:14'),
(2, 'ADMINISTRATION', '2023-03-08 21:48:55', '2023-03-08 21:48:55');

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fonctions`
--

INSERT INTO `fonctions` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Agence Comptable', '2021-10-21 00:10:35', '2021-10-21 00:10:35'),
(2, 'qsqsdsqd', '2023-03-06 13:28:02', '2023-03-06 13:28:02');

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
(12, '2021_09_22_000219_update_table_candidats_add_photo', 2),
(13, '2021_10_21_000134_create_fonctions_table', 3),
(14, '2023_03_06_113438_create_categories_table', 4),
(15, '2023_03_06_121053_create_table_employeur', 4),
(16, '2023_03_06_121139_create_table_famille', 4),
(17, '2023_03_06_121250_create_contrats_table', 4),
(18, '2023_03_06_121315_create_table_employe', 4),
(19, '2023_03_08_114321_update_table_employee_add_column', 5),
(20, '2023_03_08_124922_update_table_employee_add_column_table', 6),
(21, '2023_03_09_100941_update_table_add_column_employe_id_in_document', 7);

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
(1, 'Pédiatrie', '2021-09-17 10:06:07', '2021-09-17 10:06:07'),
(2, 'sswcs', '2023-03-14 15:05:22', '2023-03-14 15:05:22');

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
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_candidat_id_foreign` (`candidat_id`),
  ADD KEY `documents_employe_id_foreign` (`employe_id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employes_service_id_foreign` (`service_id`),
  ADD KEY `employes_contrat_id_foreign` (`contrat_id`),
  ADD KEY `employes_famille_id_foreign` (`famille_id`),
  ADD KEY `employes_categorie_id_foreign` (`categorie_id`),
  ADD KEY `employes_fonction_id_foreign` (`fonction_id`),
  ADD KEY `employes_employeur_id_foreign` (`employeur_id`);

--
-- Index pour la table `employeurs`
--
ALTER TABLE `employeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `familles`
--
ALTER TABLE `familles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
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
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contrats`
--
ALTER TABLE `contrats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `employeurs`
--
ALTER TABLE `employeurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `familles`
--
ALTER TABLE `familles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `prolongations`
--
ALTER TABLE `prolongations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `documents_candidat_id_foreign` FOREIGN KEY (`candidat_id`) REFERENCES `candidats` (`id`),
  ADD CONSTRAINT `documents_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`);

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `employes_contrat_id_foreign` FOREIGN KEY (`contrat_id`) REFERENCES `contrats` (`id`),
  ADD CONSTRAINT `employes_employeur_id_foreign` FOREIGN KEY (`employeur_id`) REFERENCES `employeurs` (`id`),
  ADD CONSTRAINT `employes_famille_id_foreign` FOREIGN KEY (`famille_id`) REFERENCES `familles` (`id`),
  ADD CONSTRAINT `employes_fonction_id_foreign` FOREIGN KEY (`fonction_id`) REFERENCES `fonctions` (`id`),
  ADD CONSTRAINT `employes_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Contraintes pour la table `prolongations`
--
ALTER TABLE `prolongations`
  ADD CONSTRAINT `prolongations_autorisation_id_foreign` FOREIGN KEY (`autorisation_id`) REFERENCES `autorisations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
