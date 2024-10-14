-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : jafrchesedipal.mysql.db
-- Généré le : mer. 14 juin 2023 à 20:00
-- Version du serveur : 5.7.42-log
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jafrchesedipal`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ligne` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `axe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `ligne`, `rts`, `axe_id`, `created_at`, `updated_at`) VALUES
(1, 'Accompagnement de la mise en œuvre et consolidation d’approches de participation et engagement citoyens dans les collectivités territoriales', 'Des processus participatifs et d’engagement citoyen durables sont coproduits à l’échelle des collectivités territoriales', 1, '2022-05-16 12:30:11', '2022-05-16 12:30:11'),
(2, 'Accompagnement des collectivités territoriales pour renforcer les processus de dématérialisation des procédures administratives et fiscales, de transparence et de suivi budgétaire', 'Les villes et territoires d’Afrique sont accompagnés pour améliorer l’accessibilité et la fiabilité de l’information dans les opérations administratives et budgétaires au profit des populations', 1, '2022-05-25 15:19:45', '2022-05-25 15:19:45'),
(3, 'Soutien aux initiatives de renforcement de la citoyenneté, de démocratie participative, de prévention et lutte contre la corruption dans les collectivités territoriales', 'Les capacités des acteurs sont renforcées pour des approches territoriales durables de prévention et de lutte contre la corruption', 1, '2022-05-25 15:22:04', '2022-05-25 15:22:04'),
(4, 'Accompagnement des processus électoraux et consolidation de la démocratie en Afrique', 'Des processus électoraux sont accompagnés pour une participation de qualité des citoyens et le renforcement/l’approfondissement de la démocratie représentative', 1, '2022-05-25 15:23:38', '2022-05-25 15:23:38'),
(5, 'Prévention, gestion des conflits et renforcement de la cohésion sociale dans les villes et territoires', 'Les communautés vivent en paix et sécurité dans des villes et territoires d’Afrique sûrs et stables', 3, '2022-05-25 15:25:47', '2022-05-25 15:25:47'),
(6, 'Renforcement de la résilience aux vulnérabilités (climatiques, environnementales, etc.) et la sécurité humaine dans les villes et territoires', 'Les Collectivités Territoriales sont appuyées pour la mise en place d’un environnement sain et convivial favorable à une meilleure prise en charge des besoins essentiels des populations', 3, '2022-05-25 15:29:24', '2022-05-25 15:29:24'),
(7, 'Soutien aux initiatives de développement économique des territoires en renforçant les capacités de mobilisation de ressources propres, de réalisation d’infrastructures à haute portée économique et de valorisation des potentialités des territoires', 'Les initiatives et dynamiques de développement économique des territoires sont accompagnées notamment en synergie avec le secteur privé local et le secteur communautaire', 3, '2022-05-25 15:31:11', '2022-05-25 15:31:11'),
(8, 'Appui aux initiatives de développement de l’économie bleue et de l’économie verte à travers l’implication du secteur privé local', 'La résilience aux vulnérabilités (climatiques, environnementales, etc.) des communautés est renforcée', 3, '2022-05-25 15:33:08', '2022-05-25 15:33:08'),
(9, 'Amélioration du cadre de vie, de l’attractivité territoriale et de l’accès aux services sociaux de base', 'La résilience aux vulnérabilités (climatiques, environnementales, etc.) des communautés est renforcée', 3, '2022-05-25 15:35:07', '2022-05-25 15:35:33'),
(10, 'Accompagnement et appui à la mise en œuvre d’initiatives de l’économie sociale et solidaire (ESS) dans les collectivités territoriales', 'Les collectivités territoriales sont accompagnées dans l’élaboration, la mise en œuvre et le suivi-évaluation des politiques locales favorables à l’emploi des jeunes, femmes, personnes handicapées et autres groupes vulnérables en exploitant toutes les opportunités de financement', 4, '2022-05-25 15:41:18', '2022-05-25 15:41:18'),
(11, 'Accompagnement des collectivités territoriales et des communautés à valoriser les filières porteuses de l’économie locale et les opportunités de la croissance durable', 'Les filières et potentialités de l’économie sociale et solidaire sont valorisées dans les villes et territoires d’Afrique', 4, '2022-05-25 15:58:01', '2022-05-25 15:58:01'),
(12, 'Développement d’offres de renforcement de capacités d’entreprenariat et d’autonomisation adaptées aux contextes locaux en relation avec les universités, les structures d’Enseignement Technique et de la Formation Professionnelle, les chambres consulaires, les associations faîtières des producteurs, etc.', 'Des formations adaptées aux contextes locaux des villes et territoires sont développées en partenariat avec les acteurs techniques, professionnels et stratégiques', 4, '2022-05-25 16:00:15', '2022-05-25 16:00:15'),
(13, 'Renforcement des capacités techniques, organisationnelles et institutionnelles des collectivités territoriales dans la formulation et la mise en œuvre de stratégies locales de promotion de l’emploi et d’autonomisation économique des jeunes, des femmes, des personnes handicapées et autres groupes vulnérables', 'Les capacités des acteurs dans les villes et territoires d’Afrique sont renforcées pour une meilleure employabilité et autonomisation', 1, '2022-05-25 16:01:55', '2022-05-25 16:01:55');

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `rts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fs` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `nom`, `debut`, `fin`, `rts`, `responsable`, `email`, `projet_id`, `created_at`, `updated_at`, `etat`, `fs`) VALUES
(1, 'Situation de références du projet de renforcement de la croissance de ventes des FA dans les 5 régions', '2021-07-01', '2021-11-30', '<p>Les&nbsp; bases de données de références sont disponibles<br></p>', 'Enda ECOPOP, Enda Energie et ONG Concept', 'ecopop@endaecopop.org', 1, '2022-04-04 13:25:01', '2022-04-04 13:25:01', 'non realise', NULL),
(2, 'Recherche et contrat de location d’un nouveau local pour le siège et les antennes régionales', '2021-06-01', '2021-09-30', '<p>les contrats de location sont singés&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>le bureau de matam est fonctionnel et accessible<br></p>', 'UCP RAF RB Matam', 'ecopop@endaecopop.org', 1, '2022-04-04 13:27:50', '2022-04-04 13:27:50', 'non realise', NULL),
(3, 'Entretiens et Recrutements du Personnel (Unité de coordination du projet et antennes régionales)', '2022-04-04', '2022-04-04', '<p>Des agents sont recrutés pour les différents postes régionaux&nbsp;<br></p>', 'UCP RAF RB Matam', 'ecopop@endaecopop.org', 1, '2022-04-04 13:29:39', '2022-04-04 13:29:39', 'non realise', NULL),
(4, 'Tournée institutionnelle d\'information aux autorités (administratives, locales et institutionnelles)', '2021-06-01', '2021-07-31', '<p>les autorités sont informées du démarrage du projet RFA<br></p>', 'RP/projet RFA', 'ecopop@endaecopop.org', 1, '2022-04-04 13:31:31', '2022-04-04 13:31:31', 'non realise', NULL),
(5, 'Organisation ateliers régionaux de lancement du projet', '2021-06-01', '2021-07-31', '<p>les acteurs des régions sont sensibilisés et mobilisés autour du projet<br></p>', 'RP/projet RFA UCP Staff BR', 'ecopop@endaecopop.org', 1, '2022-04-04 13:35:11', '2022-04-04 13:35:11', 'non realise', NULL),
(6, 'Planification conjointe avec la GIZ et les trois (3) Ees (Tenue d\'une session de 3 jours entre la GIZ et les Ees pour une mission de planification trimestrielle conjointe)', '2021-06-01', '2022-09-30', '<p>Les quatre (4) Ees ont harmonisé sur les interventions phares du prjet RFA<br></p>', 'UGP Ees', 'ecopop@endaecopop.org', 1, '2022-04-04 13:37:17', '2022-04-04 13:37:17', 'non realise', NULL),
(7, 'Organisation d\'un atelier virtuel d\'habilitation de l\'équipe du projet', '2021-08-01', '2021-08-31', '<p>Les équipes régionales du projet sont habilités en prélude du déroulement des activités<br></p>', 'Coord ECOPOP  UGP Staff BR', 'ecopop@endaecopop.org', 1, '2022-04-04 13:45:14', '2022-04-04 13:45:14', 'non realise', NULL),
(8, 'Ouverture officielle des bureaux régionaux et installation des équipes régionales du projet RFA', '2021-09-01', '2021-11-30', '<p>les buraux régioanaux sont officiellement opérationnels<br></p>', 'Coord ECOPOP  UGP Staff BR', 'ecopop@endaecopop.org', 1, '2022-04-04 13:58:43', '2022-04-04 13:58:43', 'non realise', NULL),
(9, 'Ateliers d\'apprentissage collectifs', '2021-10-01', '2022-09-30', '<p>le suivi du déroulement des activités est effectif, les interventions sont harmonisées et les bonnes pratiques partagées<br></p>', 'UGP  Staff BR   RAF', 'ecopop@endaecopop.org', 1, '2022-04-04 14:03:43', '2022-04-04 14:03:43', 'non realise', NULL),
(11, 'Tournée institutionnelle de prise de contact auprès des parties prenantes', '2021-08-31', '2021-09-07', '<p>Les acteurs sont informés sur le projet, objectifs, résultats attendus et défi.<br></p>', 'Djibril Mangane', 'djibrilmangane@endaecopop.org', 4, '2022-04-20 14:38:37', '2022-04-20 14:38:37', 'non realise', NULL),
(12, 'Atelier de lancement du projet au niveau communal', '2021-09-14', '2021-09-16', '<table width=\"142\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><colgroup><col width=\"142\"></colgroup><tbody><tr height=\"240\">\r\n  <td class=\"xl63\" style=\"height:180.0pt;width:107pt\" width=\"142\" height=\"240\"><p>Les acteurs sont informés et s\'engagent dans le processus de mise en œuvre du projet<br></p></td>\r\n</tr></tbody></table><p><br></p>', 'Djibril Mangane', 'djibrilmangane@endaecopop.org', 4, '2022-04-20 14:42:44', '2022-04-20 14:42:44', 'non realise', NULL),
(13, 'Facilitation l’intégration des femmes transformatrices aux plateforme e-commerce (Aywajieune, M-Louma, Diaba et autres)', '2021-09-01', '2021-09-30', '<p>&nbsp;les femmes transformatrices ont intégré les plateformes e-commerce (Aywajieune, M-Louma, Diaba et autres)<br></p>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-15 15:57:17', '2022-06-15 15:57:17', 'non realise', NULL),
(14, 'Aménagement de 50 Km de guirlandes et de 500 pochons flotteurs pour l’ostréiculture en zone de mangrove', '2021-09-01', '2022-07-31', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\" style=\"width: 150pt;\"><tbody><tr height=\"80\" style=\"height:60.0pt\">\r\n  <td height=\"80\" class=\"xl63\" width=\"200\" style=\"height:60.0pt;width:150pt\">50 Km de guirlandes et 500 pochons flotteurs aménagés pour l’ostréiculture en\r\n  zone de mangrove<br></td></tr></tbody></table>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-15 16:00:37', '2022-06-15 16:04:33', 'realise', NULL),
(15, 'Acquisition de claies de séchage surélevés', '2021-10-01', '2021-10-31', '<p>claies de séchage surélevés disponibles<br></p>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-15 16:22:45', '2022-06-15 16:22:45', 'non realise', NULL),
(16, 'Formation sur les techniques d\'exploitation (huitres, arche, cymbium)', '2021-10-01', '2021-10-31', '<p>les femmes transformatrices maitrisent les techniques d\'exploitation</p>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-15 16:29:34', '2022-06-15 16:29:34', 'non realise', NULL),
(17, 'Aménagement d’un bassin de dégorgement', '2021-11-01', '2022-02-28', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\" style=\"width: 150pt;\"><tbody><tr height=\"40\" style=\"height:30.0pt\">\r\n  <td height=\"40\" class=\"xl65\" width=\"200\" style=\"height:30.0pt;width:150pt\">un bassin de dégorgement aménagé</td></tr></tbody></table>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-15 16:34:37', '2022-06-15 16:34:37', 'non realise', NULL),
(18, 'Mise en place d’un fonds de financement pour la  qualification des produits du terroir et les initiatives de collecte et de transformation des ressources en coquillage (2FQI)', '2021-11-01', '2021-11-30', '<p>Un fonds de financement pour la&nbsp; qualification des produits du terroir et les initiatives de collecte et de transformation des ressources en coquillage (2FQI) mis en place<br></p>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-16 13:04:34', '2022-06-16 13:04:34', 'non realise', NULL),
(19, 'Formation sur  la méthodologie qualité hygiène , marketing et accès au marché', '2021-12-01', '2021-12-31', '<p>Les femmes transformatrices maitrisent&nbsp; la méthodologie qualité hygiène , marketing et accès au marché&nbsp;<br></p>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-16 13:06:39', '2022-06-16 13:06:39', 'non realise', NULL),
(20, 'Formation sur les techniques de confection d\'emballages en papier pour les produits transformés', '2022-02-01', '2022-02-28', '<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\" style=\"width: 150pt;\"><tbody><tr height=\"80\" style=\"height:60.0pt\">\r\n  <td height=\"80\" class=\"xl65\" width=\"200\" style=\"height:60.0pt;width:150pt\">&nbsp;les femmes transformatrices sont formées sur les techniques de confection\r\n  d\'emballages en papier pour les produits transformés&nbsp;</td></tr></tbody></table>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-16 13:09:03', '2022-06-16 13:09:03', 'non realise', NULL),
(21, 'Mise en relation avec les grandes surfaces (Auchan et autres) et les hôtels', '2022-02-01', '2022-02-28', 'la&nbsp;<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\" style=\"width: 150pt;\"><tbody><tr height=\"60\" style=\"height:45.0pt\">\r\n  <td height=\"60\" class=\"xl65\" width=\"200\" style=\"height:45.0pt;width:150pt\">Mise en\r\n  relation avec les grandes surfaces (Auchan et autres) et les hôtels&nbsp; est effective</td></tr></tbody></table>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-16 13:21:22', '2022-06-16 13:21:22', 'non realise', NULL),
(22, 'Ensemencement des vasières', '2022-02-01', '2022-07-31', '<p>les vasières sont ensemencées<br></p>', 'DJIBRIL MANGANE', 'djibrilmangane@endaecopop.org', 4, '2022-06-16 13:28:02', '2022-06-16 13:28:02', 'non realise', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `axes`
--

CREATE TABLE `axes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intitule` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `axes`
--

INSERT INTO `axes` (`id`, `intitule`, `created_at`, `updated_at`) VALUES
(1, 'Renforcement de la démocratie, de la gouvernance, de la participation et de l’engagement citoyen dans les Collectivités Territoriales', '2022-05-16 12:01:49', '2022-05-16 12:01:49'),
(3, 'Renforcement de la sécurité, de la réponse aux changements climatiques, de la résilience et de l’attractivité des territoires', '2022-05-25 15:08:21', '2022-05-25 15:08:21'),
(4, 'Soutien à l’employabilité, à l’entreprenariat et à l’autonomisation des jeunes, femmes, personnes handicapées et autres groupes vulnérables', '2022-05-25 15:09:10', '2022-05-25 15:09:10'),
(5, 'Appui à la territorialisation des politiques publiques et Agendas internationaux', '2022-05-25 15:09:57', '2022-05-25 15:09:57'),
(6, 'Accompagnement des dynamiques de transition pour un développement durable', '2022-05-25 15:10:46', '2022-05-25 15:10:46');

-- --------------------------------------------------------

--
-- Structure de la table `cibles`
--

CREATE TABLE `cibles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valeur` double NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicateur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cibles`
--

INSERT INTO `cibles` (`id`, `valeur`, `periode`, `indicateur_id`, `created_at`, `updated_at`) VALUES
(1, 1214, '1', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(2, 0, '2', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(3, 0, '3', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(4, 0, '4', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(5, 0, '5', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(31, 120, '1', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(32, 0, '2', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(33, 0, '3', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(34, 0, '4', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(35, 0, '5', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(36, 1214, '1', 26, '2022-04-04 17:32:18', '2022-04-04 17:32:18'),
(37, 0, '2', 26, '2022-04-04 17:32:18', '2022-04-04 17:32:18'),
(38, 0, '3', 26, '2022-04-04 17:32:18', '2022-04-04 17:32:18'),
(39, 0, '4', 26, '2022-04-04 17:32:18', '2022-04-04 17:32:18'),
(40, 0, '5', 26, '2022-04-04 17:32:18', '2022-04-04 17:32:18'),
(41, 135904, '1', 27, '2022-04-04 17:35:12', '2022-04-04 17:35:12'),
(42, 0, '2', 27, '2022-04-04 17:35:12', '2022-04-04 17:35:12'),
(43, 0, '3', 27, '2022-04-04 17:35:12', '2022-04-04 17:35:12'),
(44, 0, '4', 27, '2022-04-04 17:35:12', '2022-04-04 17:35:12'),
(45, 0, '5', 27, '2022-04-04 17:35:12', '2022-04-04 17:35:12'),
(46, 1614, '1', 28, '2022-04-04 17:38:08', '2022-04-04 17:38:08'),
(47, 0, '2', 28, '2022-04-04 17:38:08', '2022-04-04 17:38:08'),
(48, 0, '3', 28, '2022-04-04 17:38:08', '2022-04-04 17:38:08'),
(49, 0, '4', 28, '2022-04-04 17:38:08', '2022-04-04 17:38:08'),
(50, 0, '5', 28, '2022-04-04 17:38:08', '2022-04-04 17:38:08'),
(56, 0, '1', 31, '2022-04-20 13:05:51', '2022-04-20 13:05:51'),
(57, 0, '2', 31, '2022-04-20 13:05:51', '2022-04-20 13:05:51'),
(58, 600, '3', 31, '2022-04-20 13:05:51', '2022-04-20 13:05:51'),
(59, 30, '1', 32, '2022-04-20 13:09:46', '2022-04-20 13:09:46'),
(60, 0, '2', 32, '2022-04-20 13:09:46', '2022-04-20 13:09:46'),
(61, 0, '3', 32, '2022-04-20 13:09:46', '2022-04-20 13:09:46'),
(62, 5, '1', 33, '2022-04-20 13:35:55', '2022-04-20 13:35:55'),
(63, 0, '2', 33, '2022-04-20 13:35:55', '2022-04-20 13:35:55'),
(64, 0, '3', 33, '2022-04-20 13:35:55', '2022-04-20 13:35:55'),
(65, 0, '1', 34, '2022-04-20 13:38:52', '2022-04-20 13:38:52'),
(66, 0, '2', 34, '2022-04-20 13:38:52', '2022-04-20 13:38:52'),
(67, 2, '3', 34, '2022-04-20 13:38:52', '2022-04-20 13:38:52'),
(68, 2, '1', 35, '2022-04-20 13:43:22', '2022-04-20 13:43:22'),
(69, 0, '2', 35, '2022-04-20 13:43:22', '2022-04-20 13:43:22'),
(70, 0, '3', 35, '2022-04-20 13:43:22', '2022-04-20 13:43:22'),
(71, 2, '1', 36, '2022-04-20 13:46:02', '2022-04-20 13:46:02'),
(72, 0, '2', 36, '2022-04-20 13:46:02', '2022-04-20 13:46:02'),
(73, 0, '3', 36, '2022-04-20 13:46:02', '2022-04-20 13:46:02'),
(74, 0, '1', 37, '2022-04-20 14:01:37', '2022-04-20 14:01:37'),
(75, 1, '2', 37, '2022-04-20 14:01:37', '2022-04-20 14:01:37'),
(76, 0, '3', 37, '2022-04-20 14:01:37', '2022-04-20 14:01:37'),
(77, 0, '1', 38, '2022-04-20 14:08:56', '2022-04-20 14:08:56'),
(78, 1, '2', 38, '2022-04-20 14:08:56', '2022-04-20 14:08:56'),
(79, 1, '3', 38, '2022-04-20 14:08:56', '2022-04-20 14:08:56'),
(80, 0, '1', 39, '2022-04-20 14:10:52', '2022-04-20 14:10:52'),
(81, 0, '2', 39, '2022-04-20 14:10:52', '2022-04-20 14:10:52'),
(82, 2, '3', 39, '2022-04-20 14:10:52', '2022-04-20 14:10:52'),
(83, 0, '1', 40, '2022-04-20 14:12:31', '2022-04-20 14:12:31'),
(84, 0, '2', 40, '2022-04-20 14:12:31', '2022-04-20 14:12:31'),
(85, 2, '3', 40, '2022-04-20 14:12:31', '2022-04-20 14:12:31'),
(86, 0, '1', 41, '2022-04-20 14:16:16', '2022-04-20 14:16:16'),
(87, 0, '2', 41, '2022-04-20 14:16:16', '2022-04-20 14:16:16'),
(88, 2, '3', 41, '2022-04-20 14:16:16', '2022-04-20 14:16:16'),
(89, 0, '1', 42, '2022-06-16 13:19:49', '2022-06-16 13:19:49'),
(90, 3, '2', 42, '2022-06-16 13:19:49', '2022-06-16 13:19:49'),
(91, 0, '3', 42, '2022-06-16 13:19:49', '2022-06-16 13:19:49'),
(92, 5, '1', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38'),
(93, 5, '2', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38'),
(94, 5, '3', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38'),
(95, 5, '4', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38'),
(96, 2, '5', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38'),
(97, 2, '6', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38'),
(98, 1, '7', 43, '2022-08-24 11:48:38', '2022-08-24 11:48:38');

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitudec` double NOT NULL,
  `longitudec` double NOT NULL,
  `departement_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`id`, `nomc`, `latitudec`, `longitudec`, `departement_id`, `created_at`, `updated_at`) VALUES
(1, 'Kébémer', 15.3688735, -16.4429778, 4, '2021-12-16 11:39:53', '2021-12-16 11:39:53'),
(2, 'Tamba', 13.8301533, -13.0891759, 10, '2021-12-19 22:43:59', '2021-12-19 22:43:59'),
(3, 'Kédougou', 12.560863585229272, -12.199709320867068, 11, '2022-04-05 11:28:35', '2022-04-05 11:28:35'),
(4, 'Saraya', 12.910643308000033, -11.854030913999964, 11, '2022-04-05 11:29:30', '2022-04-05 11:29:30'),
(5, 'Salemata', 12.601300464000076, -12.800375340999949, 22, '2022-04-05 11:49:53', '2022-04-06 10:46:08'),
(7, 'Agnam Civol', 15.996840000000077, -13.667449999999974, 8, '2022-04-05 13:34:54', '2022-04-07 15:09:05'),
(8, 'matam', 15.656031898745416, -13.258641802072955, 8, '2022-04-05 13:37:38', '2022-04-05 13:37:38'),
(9, 'Nabadji civol', 15.73729000000003, -13.387919999999951, 8, '2022-04-05 13:38:33', '2022-04-05 13:38:33'),
(10, 'Dabia', 15.915392243016056, -13.516407080116213, 8, '2022-04-05 13:39:18', '2022-04-05 13:39:18'),
(11, 'Thilogne', 15.963903738125879, -13.595237888318799, 8, '2022-04-05 13:40:11', '2022-04-05 13:40:11'),
(12, 'Ourossogui', 15.606540000000052, -13.320019999999943, 8, '2022-04-05 13:40:50', '2022-04-05 13:40:50'),
(13, 'Bokidiawé', 15.8874592, -13.4917218, 8, '2022-04-05 13:44:22', '2022-04-05 13:44:22'),
(14, 'Ogo', 15.549770801008886, -13.297628369337925, 8, '2022-04-05 13:45:12', '2022-04-05 13:45:12'),
(15, 'Orefondé', 16.043060000000025, -13.729499999999973, 8, '2022-04-05 13:46:08', '2022-04-05 13:46:08'),
(16, 'Nguidjilogne', 15.937690000000032, -13.35531999999995, 8, '2022-04-05 13:46:50', '2022-04-05 13:46:50'),
(17, 'Ranerou', 15.29776303387652, -13.960755491819354, 13, '2022-04-05 13:48:39', '2022-04-05 13:49:07'),
(18, 'Oudalaye', 15.125960000000077, -13.654169999999965, 13, '2022-04-05 13:49:42', '2022-04-05 13:49:42'),
(19, 'Velingara', 13.14414000000005, -14.108769999999936, 13, '2022-04-05 13:50:26', '2022-04-05 13:50:26'),
(21, 'Orkadiere', 15.349380000000053, -13.018099999999947, 14, '2022-04-05 13:52:15', '2022-04-05 13:52:15'),
(23, 'Hamady Hounare', 15.349380000000053, -13.018099999999947, 14, '2022-04-05 13:55:19', '2022-04-05 13:55:19'),
(24, 'Ouro  sidy', 15.425000000000068, -13.17489999999998, 14, '2022-04-05 14:11:40', '2022-04-05 14:11:40'),
(25, 'Aoure', 15.142790000000048, -12.948589999999967, 14, '2022-04-05 14:12:17', '2022-04-05 14:12:17'),
(26, 'Ndendory', 15.346850000000074, -13.051089999999931, 14, '2022-04-05 14:13:04', '2022-04-05 14:13:04'),
(28, 'Semmé', 15.19422000000003, -12.944819999999936, 14, '2022-04-05 14:15:00', '2022-04-05 14:15:00'),
(29, 'Waoundé', 15.27177000000006, -12.869239999999934, 14, '2022-04-05 14:15:30', '2022-04-05 14:15:30'),
(30, 'Odoberé', 15.566670000000045, -13.099999999999966, 8, '2022-04-05 14:17:28', '2022-04-05 14:17:28'),
(31, 'Odoberé', 15.3701423, -13.132955, 14, '2022-04-05 14:22:15', '2022-04-05 14:22:15'),
(32, 'Cherif Lô', 14.916670000000067, -16.849999999999966, 16, '2022-04-05 14:50:09', '2022-04-05 14:50:09'),
(33, 'Darou Khoudoss', 15.104658981354916, -16.866719127217717, 16, '2022-04-05 14:51:07', '2022-04-05 14:51:07'),
(34, 'Fandene', 14.805537853714915, -16.851846253979318, 5, '2022-04-05 14:51:49', '2022-04-05 14:51:49'),
(35, 'Fissel', 14.5410498980604, -16.613675184748374, 6, '2022-04-05 14:52:23', '2022-04-05 14:54:00'),
(36, 'Jaol Fadiouth', 14.155451752515827, -16.835688997329548, 6, '2022-04-05 14:53:23', '2022-04-05 14:53:23'),
(37, 'Kayar', 14.917200000000037, -17.11976999999996, 5, '2022-04-05 14:54:47', '2022-04-05 14:54:47'),
(38, 'Kelle', 15.183084814764593, -16.5746601487379, 16, '2022-04-05 14:55:41', '2022-04-05 14:55:41'),
(39, 'Khombole', 14.762140000000045, -16.690379999999948, 5, '2022-04-05 14:56:28', '2022-04-05 14:56:28'),
(40, 'Malicounda', 14.471400140909022, -16.94634330597004, 15, '2022-04-05 14:57:08', '2022-04-05 14:57:08'),
(41, 'Mbafaye', 14.566670000000045, -16.783329999999978, 15, '2022-04-05 14:59:29', '2022-04-05 14:59:29'),
(42, 'Mboro', 15.136510032152396, -16.882020508809557, 16, '2022-04-05 15:00:03', '2022-04-05 15:00:03'),
(43, 'Mbour', 14.425935694822297, -16.971437529770448, 15, '2022-04-05 15:00:50', '2022-04-05 15:00:50'),
(44, 'Ndiassane', 14.606906967039585, -16.629662392042643, 7, '2022-04-05 15:02:48', '2022-04-05 15:02:48'),
(45, 'Ngaparou', 14.464720000000057, -17.059999999999945, 6, '2022-04-05 15:03:32', '2022-04-05 15:03:32'),
(46, 'Ngoudiane', 14.712590000000034, -16.736579999999947, 5, '2022-04-05 15:07:08', '2022-04-05 15:07:08'),
(47, 'Notto Diobass', 14.642530000000022, -16.866739999999936, 5, '2022-04-05 15:11:06', '2022-04-05 15:11:06'),
(48, 'Pire', 15.014167331516182, -16.736654748098967, 7, '2022-04-05 15:12:24', '2022-04-05 15:12:24'),
(49, 'Saly portudal', 14.444510000000037, -17.002539999999954, 15, '2022-04-05 15:13:30', '2022-04-05 15:13:30'),
(50, 'Sandiara', 14.435130000000072, -16.79476999999997, 15, '2022-04-05 15:14:23', '2022-04-05 15:14:23'),
(51, 'Sessene', 14.428329663683611, -16.747696453513743, 15, '2022-04-05 15:15:19', '2022-04-05 15:15:19'),
(52, 'Sindia', 14.577730000000031, -17.046729999999968, 15, '2022-04-05 15:15:56', '2022-04-05 15:15:56'),
(53, 'Somone', 14.484330000000057, -17.069609999999955, 15, '2022-04-05 15:16:23', '2022-04-05 15:16:23'),
(54, 'Taiba Ndiaye', 15.037100000000066, -16.879299999999944, 7, '2022-04-05 15:16:55', '2022-04-05 15:16:55'),
(55, 'Thies Est', 14.779928404312713, -16.911529674503775, 5, '2022-04-05 15:18:03', '2022-04-05 15:18:03'),
(56, 'Thies Nord', 14.804990177932767, -16.92224546670991, 5, '2022-04-05 15:18:41', '2022-04-05 15:18:41'),
(57, 'Thies Ouest', 14.781787392137828, -16.94303889550097, 5, '2022-04-05 15:19:42', '2022-04-05 15:19:42'),
(59, 'Tivaouane', 14.95024143079922, -16.81869483378158, 7, '2022-04-05 15:24:54', '2022-04-05 15:24:54'),
(60, 'Touba Toul', 14.817470189106281, -16.663651300345567, 5, '2022-04-05 15:25:51', '2022-04-05 15:25:51'),
(61, 'Louga', 15.617470000000026, -16.221209999999928, 1, '2022-04-05 15:28:58', '2022-04-05 15:28:58'),
(62, 'Nguidilé', 15.595790410129998, -16.22047195630095, 1, '2022-04-05 15:29:49', '2022-04-05 15:29:49'),
(63, 'Sakal', 15.599779228224252, -16.07827828180262, 1, '2022-04-05 15:32:50', '2022-04-05 15:32:50'),
(64, 'Leona', 15.116670000000056, -16.216669999999965, 1, '2022-04-05 15:33:41', '2022-04-05 15:33:41'),
(65, 'Coki', 15.50423718449539, -15.987575325482055, 1, '2022-04-05 15:34:26', '2022-04-05 15:34:26'),
(67, 'Darou Mousty', 15.043950000000052, -16.04658999999998, 4, '2022-04-05 15:38:01', '2022-04-05 15:38:01'),
(68, 'Ndoyenne', 15.233425718610924, -16.083262933785473, 4, '2022-04-05 15:39:02', '2022-04-05 15:39:02'),
(69, 'Darou Marnane', 15.160390000000064, -15.815719999999942, 4, '2022-04-05 15:39:41', '2022-04-05 15:39:41'),
(70, 'Gueoul', 15.481118204541609, -16.339401868314955, 4, '2022-04-05 15:40:20', '2022-04-05 15:40:20'),
(71, 'Ndande', 15.282020000000045, -16.527759999999944, 4, '2022-04-05 15:40:41', '2022-04-05 15:40:41'),
(72, 'Ngourane', 15.447070000000053, -16.294799999999952, 4, '2022-04-05 15:41:45', '2022-04-05 15:41:45'),
(73, 'Sagata Gueth', 15.283340000000067, -16.17742999999996, 4, '2022-04-05 15:42:44', '2022-04-05 15:42:44'),
(74, 'Linguere', 15.393114798212086, -15.118083534813968, 18, '2022-04-05 15:48:49', '2022-04-05 15:48:49'),
(75, 'Dahra', 15.353480000000047, -15.47351999999995, 18, '2022-04-05 15:49:28', '2022-04-05 15:49:28'),
(76, 'Ourakhokh', 15.383399519898203, -15.23697242359916, 18, '2022-04-05 15:50:51', '2022-04-05 15:50:51'),
(77, 'Sagatta Djoloff', 15.149910000000034, -15.566169999999943, 18, '2022-04-05 15:51:51', '2022-04-05 15:51:51'),
(78, 'Thiamene', 15.323680000000024, -15.515529999999956, 18, '2022-04-05 15:52:25', '2022-04-05 15:52:25'),
(79, 'Mboula', 15.671590000000037, -15.433389999999974, 18, '2022-04-05 15:53:00', '2022-04-05 15:53:00'),
(80, 'barkedji', 15.019930000000045, -14.974239999999952, 18, '2022-04-05 15:53:25', '2022-04-05 15:53:25'),
(81, 'Makacoulibatang', 13.657710000000066, -14.253939999999943, 10, '2022-04-06 09:16:33', '2022-04-06 09:16:33'),
(82, 'Ndoga Babacar', 13.731064138383944, -13.96460166738457, 10, '2022-04-06 09:17:44', '2022-04-06 09:17:44'),
(83, 'Dialacota', 13.31615000000005, -13.284569999999974, 10, '2022-04-06 09:18:31', '2022-04-06 09:18:31'),
(84, 'Missirah', 13.526200000000074, -13.514899999999955, 10, '2022-04-06 09:19:26', '2022-04-06 09:19:26'),
(85, 'Netteboulou', 13.578830000000039, -13.785269999999969, 10, '2022-04-06 09:20:49', '2022-04-06 09:20:49'),
(86, 'Sinthiou Maleme', 13.819377804546507, -13.920021213514111, 10, '2022-04-06 09:25:17', '2022-04-06 09:25:17'),
(87, 'Koussanar', 13.99167371527575, -13.956282111432497, 10, '2022-04-06 09:30:13', '2022-04-06 09:30:13'),
(88, 'Goudiry', 13.97778148251279, -12.976490388285795, 20, '2022-04-06 09:30:51', '2022-04-06 09:30:51'),
(89, 'Koulor', 14.063570000000027, -12.853629999999953, 20, '2022-04-06 09:31:49', '2022-04-06 09:31:49'),
(90, 'Kothiary', 13.89438000000007, -13.452169999999967, 20, '2022-04-06 09:33:16', '2022-04-06 09:33:16'),
(91, 'Bala', 14.018650000000036, -13.166189999999972, 20, '2022-04-06 09:34:14', '2022-04-06 09:34:14'),
(92, 'Koar', 13.376881691756614, -13.604018127569582, 20, '2022-04-06 09:35:23', '2022-04-06 09:35:23'),
(93, 'Boutoucoufoura', 13.651324857291081, -12.884208802104203, 20, '2022-04-06 09:41:43', '2022-04-06 09:41:43'),
(94, 'Bani israel', 13.829045759908603, -12.871067186818317, 20, '2022-04-06 09:43:51', '2022-04-06 09:43:51'),
(95, 'Boynguel bamba', 14.280670000000043, -13.01837999999998, 20, '2022-04-06 09:45:18', '2022-04-06 09:45:18'),
(96, 'Sinthiou mamadou', 13.88996000000003, -13.689599999999928, 20, '2022-04-06 09:50:41', '2022-04-06 09:50:41'),
(97, 'Koussan', 14.131848058842708, -12.443235101254487, 20, '2022-04-06 09:52:49', '2022-04-06 09:52:49'),
(98, 'Dianke Makha', 13.710750000000075, -12.85173999999995, 20, '2022-04-06 09:53:31', '2022-04-06 09:53:31'),
(99, 'Bakel', 14.164702444000056, -12.25429771499995, 19, '2022-04-06 09:54:45', '2022-04-06 09:54:45'),
(100, 'Gathiary', 14.3742791, -14.5651019, 19, '2022-04-06 09:57:48', '2022-04-06 09:57:48'),
(101, 'Moudery', 14.76607000000007, -12.41581999999994, 19, '2022-04-06 09:58:20', '2022-04-06 09:58:20'),
(102, 'Gabou', 14.729000000000042, -12.524499999999932, 19, '2022-04-06 09:59:20', '2022-04-06 09:59:20'),
(103, 'Koumpentoum', 13.971917897239367, -14.561222097898103, 21, '2022-04-06 10:00:09', '2022-04-06 10:00:09'),
(104, 'Ndame', 13.831681050007198, -14.684508064549709, 21, '2022-04-06 10:17:40', '2022-04-06 10:17:40'),
(105, 'Mereto', 13.818352641296503, -14.439983407016229, 21, '2022-04-06 10:18:43', '2022-04-06 10:18:43'),
(106, 'Bamba Thialène', 13.806475462470727, -14.617371733429016, 21, '2022-04-06 10:20:15', '2022-04-06 10:20:15'),
(107, 'Kouthiaba woloff', 14.191967697173807, -14.244325515502965, 21, '2022-04-06 10:21:33', '2022-04-06 10:21:33'),
(108, 'Niani Toucouleur', 13.6517919282201, -14.23471511599197, 21, '2022-04-06 10:26:50', '2022-04-06 10:26:50'),
(109, 'Bandafassi', 12.538226216446445, -12.310815841910522, 11, '2022-04-06 10:29:56', '2022-04-06 10:29:56'),
(110, 'Nenefecha', 12.559960000000046, -12.477029999999957, 11, '2022-04-06 10:31:31', '2022-04-06 10:31:31'),
(111, 'Tomboronkoto', 12.798058415322974, -12.294283826463138, 11, '2022-04-06 10:32:36', '2022-04-06 10:32:36'),
(112, 'Dindefelo', 12.381600000000049, -12.324799999999982, 11, '2022-04-06 10:33:12', '2022-04-06 10:33:12'),
(113, 'Fongolembi', 12.422277020430203, -11.998632129708406, 11, '2022-04-06 10:33:58', '2022-04-06 10:33:58'),
(114, 'Dimboli', 12.46661469734843, -11.994924701673291, 11, '2022-04-06 10:34:34', '2022-04-06 10:34:34'),
(115, 'Salemata', 12.631695122985816, -12.818980762951195, 11, '2022-04-06 10:38:57', '2022-04-06 10:38:57'),
(116, 'Ethiolo', 12.5893771, -12.926069, 22, '2022-04-06 10:40:29', '2022-04-06 10:46:31'),
(117, 'Dar Salam', 12.629618030174845, -12.790218514948274, 22, '2022-04-06 10:45:47', '2022-04-07 15:07:19'),
(118, 'Saraya', 12.834146575526965, -11.755285028483726, 23, '2022-04-06 10:47:29', '2022-04-06 10:47:29'),
(119, 'Bembou', 12.828271721123294, -11.877147853356028, 23, '2022-04-06 10:48:54', '2022-04-06 10:48:54'),
(120, 'Medina Baffe', 12.4978119, -11.5312185, 23, '2022-04-06 10:51:24', '2022-04-06 10:51:24'),
(121, 'Khossanto', 13.132410633346218, -11.967938796110811, 23, '2022-04-06 10:52:11', '2022-04-06 10:52:11'),
(122, 'Missirah Sirimana', 13.087495769660677, -11.697632959942593, 23, '2022-04-06 10:54:00', '2022-04-06 10:54:00'),
(123, 'kanel', 15.037643485699528, -13.133605590678533, 14, '2022-04-06 11:10:57', '2022-04-06 11:10:57'),
(124, 'Sinthiou Bamambe', 15.370406498622415, -13.1329178811596, 14, '2022-04-06 11:26:58', '2022-04-06 11:26:58'),
(125, 'Thienaba', 14.767944206313762, -16.807158686722698, 5, '2022-04-06 11:45:22', '2022-04-06 11:45:22'),
(126, 'THILMAKA', 15.036051947429533, -16.253104873700867, 5, '2022-04-06 11:56:12', '2022-04-06 11:56:12'),
(127, 'Guet ardo', 15.40971413213894, -16.086180981712165, 1, '2022-04-06 15:20:18', '2022-04-06 15:20:18'),
(128, 'Pété Ouarack', 15.645800000000065, -15.991199999999935, 1, '2022-04-06 15:26:00', '2022-04-06 15:26:00'),
(129, 'Thies', 14.791048890790092, -16.925128484352086, 5, '2022-04-07 09:48:32', '2022-04-07 09:48:32'),
(130, 'Saraba', 14.116670000000056, -13.116669999999942, 10, '2022-04-07 10:03:30', '2022-04-07 10:03:30'),
(131, 'Maléme Niani', 13.938732214785844, -14.29891303049807, 10, '2022-04-07 10:09:23', '2022-04-07 10:09:23'),
(132, 'Diawara', 15.018930000000069, -12.543129999999962, 19, '2022-04-07 10:21:19', '2022-04-07 10:21:19'),
(133, 'Seddo sebbe', 15.770530975506267, -13.457702804065717, 8, '2022-04-07 10:35:53', '2022-04-07 10:35:53'),
(134, 'Fété Niébe', 15.660010000000057, -13.399719999999945, 8, '2022-04-07 10:39:17', '2022-04-07 10:39:17'),
(135, 'Tiambe', 15.62877332827869, -13.335303824416256, 8, '2022-04-07 10:57:02', '2022-04-07 10:57:02'),
(136, 'Ndiare wakhy', 15.52117492248331, -16.144000857933513, 1, '2022-04-07 11:11:40', '2022-04-07 11:11:40'),
(137, 'Ngouane', 15.567812753430642, -16.21403668767281, 1, '2022-04-07 11:57:23', '2022-04-07 11:57:23'),
(139, 'Wouro Sidy', 14.99822000000006, -13.309759999999926, 14, '2022-04-07 13:16:30', '2022-04-07 13:16:30'),
(140, 'Diender', 14.886462380978527, -17.080204149708944, 5, '2022-04-11 09:08:20', '2022-04-11 09:08:20'),
(141, 'Ngaye Mékhé', 15.113492258292252, -16.634849536458642, 5, '2022-04-11 09:21:16', '2022-04-11 09:21:16'),
(142, 'Agnam Goly', 16.004670000000033, -13.691349999999943, 8, '2022-04-11 10:09:17', '2022-04-11 10:09:17');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latituded` double NOT NULL,
  `longituded` double NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `nomd`, `latituded`, `longituded`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Louga', 15.2401304, -15.3441834, 1, '2021-09-10 12:41:48', '2021-09-10 12:41:48'),
(4, 'Kébémer', 15.3688735, -16.4429778, 1, '2021-09-20 11:00:32', '2021-09-20 11:00:32'),
(5, 'Thies', 14.7948093, -16.9529272, 2, '2021-09-20 11:02:06', '2021-09-20 11:02:06'),
(6, 'Mbour', 14.411794, -16.9657124, 2, '2021-09-20 11:02:54', '2021-09-20 11:02:54'),
(7, 'Tivaouane', 14.948452, -16.8139971, 2, '2021-09-20 11:03:44', '2021-09-20 11:03:44'),
(8, 'Matam', 14.7948093, -16.9529272, 3, '2021-09-20 11:04:46', '2021-09-20 11:04:46'),
(9, 'OUROSSOGUI', 15.606478, -13.3211029, 3, '2021-09-20 11:05:40', '2021-09-20 11:05:40'),
(10, 'Tambacounda', 13.8301533, -13.0891759, 4, '2021-09-20 11:06:35', '2021-09-20 11:06:35'),
(11, 'Kedougou', 12.817160000000058, -12.178339999999935, 5, '2022-04-05 11:27:21', '2022-04-05 11:27:21'),
(13, 'Ranerou', 15.031106572000056, -14.133121461999963, 3, '2022-04-05 13:47:44', '2022-04-05 13:47:44'),
(14, 'Kanel', 14.973875121000049, -13.130787449999957, 3, '2022-04-05 13:51:10', '2022-04-06 11:04:56'),
(15, 'Mbour', 14.420570000000055, -16.963419999999928, 2, '2022-04-05 14:46:40', '2022-04-05 14:46:40'),
(16, 'Tivaouane', 14.952360000000056, -16.817649999999958, 2, '2022-04-05 14:47:07', '2022-04-05 14:47:07'),
(17, 'Kebemer', 15.303599236000025, -16.26075905899995, 1, '2022-04-05 15:27:22', '2022-04-05 15:27:22'),
(18, 'Linguère', 15.338763180000058, -15.177879695999934, 1, '2022-04-05 15:27:50', '2022-04-05 15:27:50'),
(19, 'Bakel', 14.164702444000056, -12.25429771499995, 4, '2022-04-06 09:12:15', '2022-04-06 09:12:15'),
(20, 'Goudiry', 13.997431069000072, -12.929424156999971, 4, '2022-04-06 09:13:07', '2022-04-06 09:13:07'),
(21, 'Koumpentoum', 14.128585295066625, -14.300905288523065, 4, '2022-04-06 09:13:42', '2022-04-06 09:13:42'),
(22, 'Salemata', 12.62372165368351, -12.819941467912498, 5, '2022-04-06 10:42:34', '2022-04-06 10:42:34'),
(23, 'Saraya', 12.919442018105148, -11.731229062022704, 5, '2022-04-06 10:43:02', '2022-04-06 10:43:02');

-- --------------------------------------------------------

--
-- Structure de la table `desagreges`
--

CREATE TABLE `desagreges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantite` double NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicateur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `desagreges`
--

INSERT INTO `desagreges` (`id`, `quantite`, `titre`, `indicateur_id`, `created_at`, `updated_at`) VALUES
(5, 1609, 'Hommes', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(6, 1609, 'Femmes', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(7, 1609, '-35', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(8, 1609, '+35', 19, '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(11, 130, 'hommes', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(12, 130, 'Femmes', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(13, 130, '-35', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(14, 130, '+35', 25, '2022-04-04 17:30:18', '2022-04-04 17:30:18');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chemin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suivi_activite_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `chemin`, `suivi_activite_id`, `created_at`, `updated_at`) VALUES
(5, '01650467255.jpg', 3, '2022-04-20 15:07:35', '2022-04-20 15:07:35'),
(6, '01650467323.jpg', 4, '2022-04-20 15:08:43', '2022-04-20 15:08:43'),
(7, '01650467885.jpg', 7, '2022-04-20 15:18:05', '2022-04-20 15:18:05'),
(8, '01650468234.jpg', 8, '2022-04-20 15:23:54', '2022-04-20 15:23:54');

-- --------------------------------------------------------

--
-- Structure de la table `indicateuras`
--

CREATE TABLE `indicateuras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicateura` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `indicateuras`
--

INSERT INTO `indicateuras` (`id`, `indicateura`, `unite`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 'Nombre de processus soutenus pour le renforcement de la démocratie, de la participation et de l’engagement citoyen', 'personne(s)', 1, '2022-05-16 12:31:06', '2022-05-16 12:31:06');

-- --------------------------------------------------------

--
-- Structure de la table `indicateurs`
--

CREATE TABLE `indicateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `objectif` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicateur` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `donneeref` int(11) NOT NULL,
  `cible` int(11) NOT NULL,
  `methode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequence` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_id` bigint(20) UNSIGNED NOT NULL,
  `unite` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `indicateurs`
--

INSERT INTO `indicateurs` (`id`, `objectif`, `indicateur`, `donneeref`, `cible`, `methode`, `frequence`, `responsable`, `projet_id`, `unite`, `created_at`, `updated_at`) VALUES
(19, 'C’est le nombre de leaders d’opinion, autorités coutumières et notables dans les zones rurales d’intervention du projet qui ont participé à des séances de sensibilisation sur les avantages des FA', 'Nombre de leaders d\'opinion, autorités coutumières, notables sensibilisés', 2021, 3218, 'Exploitation des feuilles de présences/base de données', 'Mensuelle', 'Djiby Cissé', 1, 'Personnes', '2022-04-04 16:36:57', '2022-04-04 16:36:57'),
(25, 'Il s’agit de LMEs engagés dans la distribution de FA. Est considéré comme entrepreneurs du dernier kilomètre, des entrepreneurs locaux qui achètent et vendent des FA à plein temps et peuvent également vendre d\'autres biens, par exemple des lanternes solaires subventionnées par EnDev ou des pico-PV dans leur communauté/village. ECOPOP va, dans le cadre de son engagement, s’appesantir sur des réseaux de distribution tels que les LME pour la commercialisation de FA.', 'Nombre de LMEs qui vendent des FA', 2021, 260, 'Exploitation base de données FA vendus', 'Mensuelle', 'Djiby Cissé', 1, 'Personnes', '2022-04-04 17:30:18', '2022-04-04 17:30:18'),
(26, 'Il s’agit des groupements de femmes qui sont déjà sensibilisés sur les avantages des FA et engagés dans la distribution de FA. Est considéré comme groupement de femmes, une organisation constituée avec une dynamique organisationnelle et dont les membres ont un objectif commun. Ecopop va, dans le cadre de son engagement, s’appesantir sur des réseaux de distribution tels que les LMEs, les groupements de femmes pour la commercialisation de FA.', 'Nombre de groupements de femmes engagés dans la vente des FA', 2021, 3218, 'Exploitation base de données FA vendus', 'Mensuelle', 'Djiby Cissé', 1, 'Groupements', '2022-04-04 17:32:18', '2022-04-04 17:32:18'),
(27, 'C’est l’ensemble des FA distribués/commercialisés par les LMEs, groupements de femmes et gros distributeurs avec l’appui du projet.', 'Nombre de FA introduits dans les ménages', 2021, 798405, 'Exploitation base de données FA vendus', 'Mensuelle', 'Djiby Cissé', 1, 'FA', '2022-04-04 17:35:12', '2022-04-04 17:35:12'),
(28, 'C’est l’ensemble des villages dans toute la zone d’intervention du projet dont les ménages ont bénéficié de l’appui du projet dans la diffusion des FA. C’est le nombre de villages total qui ont reçu des séances de sensibilisation, des démonstrations culinaires et dont les ménages disposent de FA avec l’appui du projet.', 'Nombre de villages touchés par la diffusion des FA', 2021, 3218, 'Exploitation base de données FA vendus', 'Mensuelle', 'Djiby Cissé', 1, 'FA', '2022-04-04 17:38:08', '2022-04-04 17:38:08'),
(31, 'Contribuer à Renforcer la résilience économique des communautés locales de Joal Fadiouth à travers des modèles de valorisation des ressources naturelles', 'Evolution des conditions de vie des transformatrices', 600, 600, 'Exploitation Rapports d’évaluation et de capitalisation', 'Annuelle', 'Djibril Mangane', 4, 'femmes transformatrices', '2022-04-20 13:05:51', '2022-04-20 13:30:09'),
(32, 'Renforcer les capacités entrepreneuriales, managériales et en gestion des équipements de production', 'Nombre de transformatrices formées en management entreprenariat et en gestion des équipements de production', 0, 30, 'Rapports des sessions de formation', 'Trimestrielle', 'Djibril Mangane', 4, 'femmes transformatrices', '2022-04-20 13:09:46', '2022-04-20 13:31:12'),
(33, 'Renforcer et pérenniser les modèles locaux de la valorisation des ressources naturelles', '2.	Amélioration des méthodes de  valorisation des huîtres, arches, cymbium et murex', 0, 5, 'Rapports activités', 'Trimestrielle', 'Djibril Mangane', 4, 'km', '2022-04-20 13:35:55', '2022-04-20 13:35:55'),
(34, 'Renforcer et pérenniser les modèles locaux de la valorisation des ressources naturelles', '1. Amélioration des méthodes de  valorisation des huîtres, arches, cymbium et murex', 0, 2, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'Unités de transformation de produits halieutiques au norme', '2022-04-20 13:38:51', '2022-04-20 14:52:24'),
(35, 'Renforcer et pérenniser les modèles locaux de la valorisation des ressources naturelles', '3. Amélioration des méthodes de  valorisation des huîtres, arches, cymbium et murex', 0, 2, 'Rapports activités', 'Trimestrielle', 'Djibril Mangane', 4, 'hectares ensemencés de arches', '2022-04-20 13:43:22', '2022-04-20 14:52:53'),
(36, 'Les modèles locaux de valorisation des ressources naturelles sont renforcés et pérennisés', 'Intégration des associations à une (1) plateforme e-commerce', 0, 2, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'Plateforme e-commercr', '2022-04-20 13:46:02', '2022-04-20 13:46:02'),
(37, 'Les modèles locaux de valorisation des ressources naturelles sont renforcés et pérennisés', 'Nombre de modèles de valorisation des ressources naturelles entreprises', 0, 1, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'Modèle de valorisation des ressources naturelles', '2022-04-20 14:01:37', '2022-04-20 14:03:24'),
(38, 'Les modèles locaux de valorisation des ressources naturelles sont renforcés et pérennisés', 'Nombre de participation à des foires', 0, 2, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'Foires', '2022-04-20 14:08:56', '2022-04-20 14:08:56'),
(39, 'Capitaliser et partager les connaissances avec la fédération des femmes transformatrices du Sénégal et autres structures faitières', 'Nombre de bonnes pratiques partagés', 0, 2, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'bonnes pratiques', '2022-04-20 14:10:52', '2022-04-20 14:10:52'),
(40, 'Capitaliser et partager les connaissances avec la fédération des femmes transformatrices du Sénégal et autres structures faitières', 'Nombre d’ateliers tenus', 0, 2, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'ateliers de partage', '2022-04-20 14:12:31', '2022-04-20 14:12:31'),
(41, 'Capitaliser et partager les connaissances avec la fédération des femmes transformatrices du Sénégal et autres structures faitières.', 'Nombre de participants aux ateliers de partage de connaissance tenus', 0, 50, 'Rapports activités', 'Annuelle', 'Djibril Mangane', 4, 'participants', '2022-04-20 14:16:16', '2022-04-20 14:16:16'),
(42, 'Résultat 2: Les modèles locaux de valorisation des ressources naturelles sont renforcés et pérennisés\r\n\r\n\r\n\r\nRésultat 2: Les modèles locaux de valorisation des ressources naturelles sont renforcés et pérennisés\r\n\r\n\r\n\r\nRésultat 2: Les modèles locaux de valorisation des ressources naturelles sont renforcés et pérennisés', 'Accroissement des circuits de commercialisation', 0, 3, 'Dossier projet', 'Trimestrielle', 'DJIBRIL MANGANE', 4, 'Nombre', '2022-06-16 13:19:48', '2022-06-16 13:19:48'),
(43, 'test', 'tes', 2021, 5, 'Mission', 'Trimestrielle', 'Ibra Ndiaye', 2, '12', '2022-08-24 11:48:38', '2022-08-24 11:48:38');

-- --------------------------------------------------------

--
-- Structure de la table `indicateur_activites`
--

CREATE TABLE `indicateur_activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indicateur_id` bigint(20) UNSIGNED NOT NULL,
  `activite_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `indicateur_activites`
--

INSERT INTO `indicateur_activites` (`id`, `indicateur_id`, `activite_id`, `created_at`, `updated_at`) VALUES
(1, 36, 13, '2022-06-15 15:57:18', '2022-06-15 15:57:18'),
(2, 33, 14, '2022-06-15 16:00:37', '2022-06-15 16:00:37'),
(3, 34, 15, '2022-06-15 16:22:46', '2022-06-15 16:22:46'),
(4, 32, 16, '2022-06-15 16:29:34', '2022-06-15 16:29:34'),
(5, 33, 17, '2022-06-15 16:34:37', '2022-06-15 16:34:37'),
(6, 34, 18, '2022-06-16 13:04:34', '2022-06-16 13:04:34'),
(7, 32, 19, '2022-06-16 13:06:39', '2022-06-16 13:06:39'),
(8, 32, 20, '2022-06-16 13:09:03', '2022-06-16 13:09:03'),
(9, 42, 21, '2022-06-16 13:21:23', '2022-06-16 13:21:23'),
(10, 35, 22, '2022-06-16 13:28:03', '2022-06-16 13:28:03');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_10_21_113637_create_projets_table', 2),
(10, '2021_10_21_125119_create_indicateurs_table', 3),
(12, '2021_11_11_152756_update_tabe_projets_add_column', 4),
(13, '2021_11_12_112700_create_resultats_table', 5),
(14, '2021_11_22_124556_create_resultat_details_table', 5),
(15, '2021_12_14_104805_create_regions_table', 6),
(16, '2021_12_14_104822_create_departements_table', 6),
(17, '2021_12_14_104836_create_communes_table', 6),
(18, '2021_12_16_095556_create_zones_table', 6),
(19, '2021_12_16_171505_create_activites_table', 7),
(20, '2021_12_17_164059_update_table_activites_add_column_etat', 8),
(21, '2021_12_18_222513_update_table_resultats_add_column_commune_id', 9),
(22, '2021_12_22_163918_create_suivi_activites_table', 10),
(23, '2021_12_23_160825_update_table_add_columns_sv', 11),
(24, '2021_12_30_175107_update_table_resulats_add_observation', 12),
(25, '2021_12_31_160532_update_table__suivi_activités', 13),
(26, '2022_02_18_163836_update_table_suivi_activite', 14),
(27, '2022_02_24_163253_add_column_type_in_indicateurs', 15),
(28, '2022_02_24_234441_add_column_type_in_projets', 16),
(29, '2022_02_25_094248_update_table_resultats_add_colum_annee', 17),
(30, '2022_03_05_123757_create_indicateur_activites_table', 18),
(31, '2022_03_08_121734_update_table_add_column_fs_activite', 19),
(33, '2022_03_09_115115_update_table_suvi_activites_add_column', 20),
(35, '2022_03_22_155645_create_villages_table', 22),
(37, '2022_03_23_122745_update_table_resultats_add_village_id', 24),
(38, '2021_10_21_125757_create_desagreges_table', 25),
(39, '2022_03_21_152422_create_cibles_table', 26),
(40, '2022_04_13_090018_update_table_activites_add_column', 27),
(41, '2022_04_13_090043_create_images_table', 27),
(42, '2022_04_29_093950_create_pays_table', 28),
(43, '2022_04_29_094146_create_raports_table', 28),
(44, '2022_04_29_095736_update_table_projets_add_column_pay', 28),
(45, '2022_04_29_124647_update_table_region_add_pays', 28),
(46, '2022_05_08_122836_create_axes_table', 29),
(47, '2022_05_08_122940_create_actions_table', 29),
(48, '2022_05_08_161809_create_indicateuras_table', 29),
(49, '2022_05_08_161838_create_resultatas_table', 29),
(50, '2022_05_09_120952_update_table_resultats_add_column', 29),
(51, '2022_05_18_101415_update_table_users_add_column', 30),
(52, '2022_05_18_112822_update_table_users_add_column_projet_id', 30),
(53, '2022_06_01_094159_update_table_projets_add_column_logo', 30);

-- --------------------------------------------------------

--
-- Structure de la table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'Act63cM1UlmIRtMC4Oe4mIrL7b7isiYmWTdNnADl', NULL, 'http://localhost', 1, 0, 0, '2021-08-02 11:18:22', '2021-08-02 11:18:22'),
(2, NULL, 'Laravel Password Grant Client', 'LFnp36yQnezUPE8LMqtIizKfg6IMzVFAMiUfRhA2', 'users', 'http://localhost', 0, 1, 0, '2021-08-02 11:18:22', '2021-08-02 11:18:22');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-02 11:18:22', '2021-08-02 11:18:22');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nomp`, `created_at`, `updated_at`) VALUES
(1, 'Sénégal', '2022-04-29 15:51:40', '2022-04-29 15:51:40'),
(2, 'Afrique', '2022-06-13 10:51:01', '2022-06-13 10:51:01');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `objectif` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `duree` int(11) NOT NULL,
  `typecadre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_id` bigint(20) UNSIGNED DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `objectif`, `created_at`, `updated_at`, `duree`, `typecadre`, `pays_id`, `logo`) VALUES
(1, 'RFA', 'Soutenir la croissance de la vente des foyers améliorés afin d\'accélérer la transformation du marché actuel et de contribuer à la réduction des émissions de gaz à effet de serre (GES) pour l’atténuation des changements climatiques', '2021-10-21 12:28:44', '2022-06-09 12:58:36', 5, 'Cadre de  resultat', NULL, '1654258671.jpg'),
(2, 'GOLD', 'Renforcer la  gouvernance démocratique, en soutenant le développement d’une participation citoyenne plus efficace dans la gestion des affaires publiques au niveau des Collectivités Territoriales', '2021-12-16 15:32:44', '2022-06-13 16:35:26', 7, 'Cadre de  resultat', NULL, '1654258704.jpg'),
(4, 'PROMOVAL', 'Renforcer les capacités de résilience économique des groupements de femmes en améliorant les modèles de valorisation des huitres, arches, cymbium et murex', '2022-02-17 15:26:40', '2022-06-09 13:01:12', 3, 'Cadre logique', NULL, '1654258733.jpg'),
(6, 'EXPERIMENTATION YTAX', 'améliorer la mobilisation des ressources locales', '2022-06-09 12:32:54', '2022-06-10 13:13:23', 2, 'Plan d\'action', 1, '1654777974.png'),
(7, 'UE-ENDA', 'Contribuer à travers le processus Post-2015 à transformer les sociétés du Sud en acteurs maitrisant les enjeux qui pèsent sur leur devenir pour un développement plus durable et inclusif', '2022-06-09 14:33:14', '2022-06-09 14:33:14', 5, 'Cadre logique', 1, '1654785194.png'),
(8, 'PELL', 'Primer l’excellence, la créativité et l’innovation dans la gouvernance territoriale au Sénégal', '2022-06-10 10:41:12', '2022-06-10 13:12:58', 65, 'Plan d\'action', 1, '1654857672.png'),
(9, 'FASS EMERGENT', 'Améliorer le capital humain, les opportunités économiques et la gouvernance locale pour   tirer profit du dividende  démographique', '2022-06-13 10:43:00', '2022-06-13 10:43:00', 3, 'Cadre logique', 1, '1655116980.png');

-- --------------------------------------------------------

--
-- Structure de la table `raports`
--

CREATE TABLE `raports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddebut` date NOT NULL,
  `dfin` date NOT NULL,
  `projet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `raports`
--

INSERT INTO `raports` (`id`, `document`, `periode`, `ddebut`, `dfin`, `projet_id`, `created_at`, `updated_at`) VALUES
(1, '1651247073.pdf', 'Mensuelle', '2022-04-29', '2022-04-29', 1, '2022-04-29 15:44:33', '2022-04-29 15:44:33');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pays_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `nom`, `latitude`, `longitude`, `created_at`, `updated_at`, `pays_id`) VALUES
(1, 'Louga', 15.2401304, -15.3441834, '2021-09-10 12:24:26', '2022-04-29 15:52:08', 1),
(2, 'Thies', 14.7948093, -16.9529272, '2021-09-20 10:55:10', '2022-04-29 15:52:15', 1),
(3, 'Matam', 14.7948093, -16.9529272, '2021-09-20 10:56:36', '2022-04-29 15:52:21', 1),
(4, 'Tambacounda', 13.8301533, -13.0891759, '2021-09-20 10:57:39', '2022-04-29 15:52:35', 1),
(5, 'Kédougou', 12.841708807000032, -12.19728037699997, '2022-04-05 11:26:36', '2022-04-29 15:52:43', 1),
(6, 'KOLDA', 13.1291507, -14.4181474, '2022-06-09 12:37:56', '2022-06-09 12:51:16', 1),
(7, 'SEDHIOU', 12.903399489000037, -15.582464294999966, '2022-06-09 12:54:13', '2022-06-09 12:54:13', 1),
(8, 'DAKAR', 14.66927000000004, -17.436609999999973, '2022-06-13 10:43:55', '2022-06-13 10:43:55', 1),
(9, 'SAINT LOUIS', 16.02538000000004, -16.503919999999937, '2022-06-13 11:06:01', '2022-06-13 11:06:01', 1),
(10, 'DIOURBEL', 14.652400000000057, -16.228909999999928, '2022-06-13 11:06:41', '2022-06-13 11:06:41', 1),
(11, 'FATICK', 14.365898740000034, -16.46085999999997, '2022-06-13 11:07:40', '2022-06-13 11:07:40', 1),
(12, 'KAOLACK', 14.182500000000061, -16.25332999999995, '2022-06-13 11:08:27', '2022-06-13 11:08:27', 1),
(13, 'KAFFRINE', 14.206630742000073, -15.18158395599994, '2022-06-13 11:13:12', '2022-06-13 11:13:12', 1),
(14, 'ZIGUINCHOR', 12.58122000000003, -16.26369999999997, '2022-06-13 11:15:15', '2022-06-13 11:15:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `resultatas`
--

CREATE TABLE `resultatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rtsa` double NOT NULL,
  `budjet` double NOT NULL,
  `sf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicateura_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iccs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `resultatas`
--

INSERT INTO `resultatas` (`id`, `rtsa`, `budjet`, `sf`, `indicateura_id`, `created_at`, `updated_at`, `iccs`) VALUES
(1, 0, 1000000, 'GOLD', 1, '2022-05-16 12:31:52', '2022-05-25 14:42:37', 'PELL, GOLD');

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rts` double NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `indicateur_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `commune_id` bigint(20) UNSIGNED NOT NULL,
  `observation` text COLLATE utf8mb4_unicode_ci,
  `annee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`id`, `rts`, `debut`, `fin`, `indicateur_id`, `created_at`, `updated_at`, `commune_id`, `observation`, `annee`, `village_id`) VALUES
(19, 23, '2022-04-05', '2022-04-05', 19, '2022-04-05 13:00:41', '2022-04-05 13:00:41', 3, 'RAS', '1', NULL),
(20, 6, '2022-04-05', '2022-04-05', 19, '2022-04-05 13:01:30', '2022-04-05 13:01:30', 4, 'RAS', '1', NULL),
(21, 12, '2022-04-05', '2022-04-05', 19, '2022-04-05 13:03:38', '2022-04-05 13:03:38', 4, 'RAS', '1', 3),
(22, 5, '2022-04-05', '2022-04-05', 19, '2022-04-05 13:04:45', '2022-04-05 13:04:45', 5, 'RAS', '1', NULL),
(23, 23, '2022-04-05', '2022-04-05', 28, '2022-04-05 13:06:14', '2022-04-05 13:06:14', 3, 'RAS', '1', NULL),
(24, 7, '2022-04-05', '2022-04-05', 28, '2022-04-05 13:07:22', '2022-04-05 13:07:22', 4, 'RAS', '1', NULL),
(25, 12, '2022-04-05', '2022-04-05', 28, '2022-04-05 13:08:26', '2022-04-05 13:08:26', 4, 'RAS', '1', 3),
(26, 5, '2022-04-05', '2022-04-05', 28, '2022-04-05 13:09:03', '2022-04-05 13:09:03', 5, 'RAS', '1', NULL),
(27, 2, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:02:48', '2022-04-06 11:02:48', 7, 'RAS', '1', NULL),
(28, 2, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:05:26', '2022-04-06 11:05:26', 25, 'RAS', '1', NULL),
(29, 12, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:06:02', '2022-04-06 11:06:02', 13, 'RAS', '1', NULL),
(30, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:06:33', '2022-04-06 11:06:33', 10, 'RAS', '1', NULL),
(31, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:06:57', '2022-04-06 11:06:57', 23, 'RAS', '1', NULL),
(32, 2, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:11:37', '2022-04-06 11:11:37', 123, 'RAS', '1', NULL),
(33, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:12:36', '2022-04-06 11:12:36', 7, 'RAS', '1', NULL),
(34, 6, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:13:03', '2022-04-06 11:13:03', 8, 'RAS', '1', NULL),
(35, 14, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:13:34', '2022-04-06 11:13:34', 9, 'RAS', '1', NULL),
(36, 8, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:13:52', '2022-04-06 11:13:52', 26, 'RAS', '1', NULL),
(37, 3, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:14:35', '2022-04-06 11:14:35', 16, 'RAS', '1', NULL),
(38, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:14:56', '2022-04-06 11:14:56', 30, 'RAS', '1', NULL),
(39, 18, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:15:13', '2022-04-06 11:15:13', 14, 'RAS', '1', NULL),
(40, 13, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:15:31', '2022-04-06 11:15:31', 15, 'RAS', '1', NULL),
(42, 9, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:17:45', '2022-04-06 11:17:45', 21, 'RAS', '1', NULL),
(43, 14, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:18:08', '2022-04-06 11:18:08', 18, 'RAS', '1', NULL),
(44, 12, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:18:25', '2022-04-06 11:18:25', 24, 'RAS', '1', NULL),
(45, 7, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:18:55', '2022-04-06 11:18:55', 12, 'RAS', '1', NULL),
(46, 3, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:21:09', '2022-04-06 11:21:09', 17, 'RAS', '1', NULL),
(47, 3, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:21:39', '2022-04-06 11:21:39', 28, 'RAS', '1', NULL),
(48, 2, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:27:35', '2022-04-06 11:27:35', 124, 'RAS', '1', NULL),
(49, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:28:10', '2022-04-06 11:28:10', 11, 'RAS', '1', NULL),
(50, 13, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:28:36', '2022-04-06 11:28:36', 19, 'RAS', '1', NULL),
(51, 2, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:30:25', '2022-04-06 11:30:25', 29, 'RAS', '1', NULL),
(52, 8, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:31:09', '2022-04-06 11:31:09', 32, 'RAS', '1', NULL),
(53, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:31:30', '2022-04-06 11:31:30', 33, 'RAS', '1', NULL),
(54, 9, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:31:57', '2022-04-06 11:31:57', 34, 'RAS', '1', NULL),
(55, 32, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:33:02', '2022-04-06 11:33:02', 35, 'RAS', '1', NULL),
(56, 21, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:33:27', '2022-04-06 11:33:27', 36, 'RAS', '1', NULL),
(57, 8, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:33:57', '2022-04-06 11:33:57', 37, 'RAS', '1', NULL),
(58, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:34:18', '2022-04-06 11:34:18', 38, 'RAS', '1', NULL),
(59, 12, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:34:45', '2022-04-06 11:34:45', 39, 'RAS', '1', NULL),
(60, 10, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:35:28', '2022-04-06 11:35:28', 40, 'RAS', '1', NULL),
(61, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:35:49', '2022-04-06 11:35:49', 41, 'RAS', '1', NULL),
(62, 19, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:36:07', '2022-04-06 11:36:07', 42, 'RAS', '1', NULL),
(63, 30, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:36:32', '2022-04-06 11:36:32', 43, 'RAS', '1', NULL),
(64, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:37:16', '2022-04-06 11:37:16', 44, 'RAS', '1', NULL),
(65, 8, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:37:49', '2022-04-06 11:37:49', 45, 'RAS', '1', NULL),
(66, 15, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:38:32', '2022-04-06 11:38:32', 46, 'RAS', '1', NULL),
(67, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:38:49', '2022-04-06 11:38:49', 47, 'RAS', '1', NULL),
(68, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:39:05', '2022-04-06 11:39:05', 48, 'RAS', '1', NULL),
(69, 5, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:39:24', '2022-04-06 11:39:24', 49, 'RAS', '1', NULL),
(70, 24, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:39:44', '2022-04-06 11:39:44', 50, 'RAS', '1', NULL),
(71, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:40:03', '2022-04-06 11:40:03', 51, 'RAS', '1', NULL),
(72, 1, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:40:16', '2022-04-06 11:40:16', 52, 'RAS', '1', NULL),
(73, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:40:30', '2022-04-06 11:40:30', 53, 'RAS', '1', NULL),
(74, 5, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:40:54', '2022-04-06 11:40:54', 54, 'RAS', '1', NULL),
(75, 4, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:41:18', '2022-04-06 11:41:18', 55, 'RAS', '1', NULL),
(76, 3, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:41:58', '2022-04-06 11:41:58', 57, 'RAS', '1', NULL),
(77, 18, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:42:26', '2022-04-06 11:42:26', 55, 'RAS', '1', NULL),
(78, 2, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:46:03', '2022-04-06 11:46:03', 125, 'RAS', '1', NULL),
(79, 8, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:46:29', '2022-04-06 11:46:29', 55, 'RAS', '1', NULL),
(80, 5, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:46:48', '2022-04-06 11:46:48', 56, 'RAS', '1', NULL),
(81, 10, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:47:14', '2022-04-06 11:47:14', 57, 'RAS', '1', NULL),
(82, 24, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:47:33', '2022-04-06 11:47:33', 55, 'RAS', '1', NULL),
(83, 19, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:48:00', '2022-04-06 11:48:00', 56, 'RAS', '1', NULL),
(84, 20, '2022-04-06', '2022-04-06', 28, '2022-04-06 11:48:16', '2022-04-06 11:48:16', 57, 'RAS', '1', NULL),
(85, 7, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:05:39', '2022-04-06 14:05:39', 126, 'RAS', '1', NULL),
(86, 10, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:06:03', '2022-04-06 14:06:03', 59, 'RAS', '1', NULL),
(87, 13, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:06:22', '2022-04-06 14:06:22', 60, 'RAS', '1', NULL),
(88, 10, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:07:15', '2022-04-06 14:07:15', 99, 'RAS', '1', NULL),
(89, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:07:35', '2022-04-06 14:07:35', 91, 'RAS', '1', NULL),
(90, 5, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:08:05', '2022-04-06 14:08:05', 106, 'RAS', '1', NULL),
(91, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:08:26', '2022-04-06 14:08:26', 94, 'RAS', '1', NULL),
(92, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:08:41', '2022-04-06 14:08:41', 93, 'RAS', '1', NULL),
(93, 4, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:09:00', '2022-04-06 14:09:00', 95, 'RAS', '1', NULL),
(94, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:09:18', '2022-04-06 14:09:18', 83, 'RAS', '1', NULL),
(95, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:09:39', '2022-04-06 14:09:39', 98, 'RAS', '1', NULL),
(96, 10, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:09:55', '2022-04-06 14:09:55', 102, 'RAS', '1', NULL),
(97, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:10:20', '2022-04-06 14:10:20', 100, 'RAS', '1', NULL),
(98, 13, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:10:35', '2022-04-06 14:10:35', 88, 'RAS', '1', NULL),
(99, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:11:01', '2022-04-06 14:11:01', 92, 'RAS', '1', NULL),
(100, 5, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:15:12', '2022-04-06 14:15:12', 90, 'RAS', '1', NULL),
(101, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:15:27', '2022-04-06 14:15:27', 89, 'RAS', '1', NULL),
(102, 10, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:15:44', '2022-04-06 14:15:44', 103, 'RAS', '1', NULL),
(103, 3, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:16:22', '2022-04-06 14:16:22', 97, 'RAS', '1', NULL),
(104, 6, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:16:48', '2022-04-06 14:16:48', 87, 'RAS', '1', NULL),
(105, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:17:09', '2022-04-06 14:17:09', 107, 'RAS', '1', NULL),
(106, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:17:33', '2022-04-06 14:17:33', 81, 'RAS', '1', NULL),
(107, 3, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:18:01', '2022-04-06 14:18:01', 105, 'RAS', '1', NULL),
(108, 4, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:18:23', '2022-04-06 14:18:23', 84, 'RAS', '1', NULL),
(109, 11, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:18:46', '2022-04-06 14:18:46', 101, 'RAS', '1', NULL),
(110, 23, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:18:59', '2022-04-06 14:18:59', 104, 'RAS', '1', NULL),
(111, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:19:35', '2022-04-06 14:19:35', 82, 'RAS', '1', NULL),
(112, 3, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:20:08', '2022-04-06 14:20:08', 85, 'RAS', '1', NULL),
(113, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:20:26', '2022-04-06 14:20:26', 108, 'RAS', '1', NULL),
(114, 16, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:20:54', '2022-04-06 14:20:54', 86, 'RAS', '1', NULL),
(115, 4, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:21:16', '2022-04-06 14:21:16', 96, 'RAS', '1', NULL),
(116, 30, '2022-04-05', '2022-04-05', 28, '2022-04-06 14:21:57', '2022-04-06 14:21:57', 2, 'RAS', '1', NULL),
(117, 19, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:16:04', '2022-04-06 15:16:04', 80, 'RAS', '1', NULL),
(118, 9, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:16:19', '2022-04-06 15:16:19', 65, 'RAS', '1', NULL),
(119, 12, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:16:32', '2022-04-06 15:16:32', 75, 'RAS', '1', NULL),
(120, 6, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:16:59', '2022-04-06 15:16:59', 69, 'RAS', '1', NULL),
(121, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:17:14', '2022-04-06 15:17:14', 67, 'RAS', '1', NULL),
(122, 8, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:17:27', '2022-04-06 15:17:27', 70, 'RAS', '1', NULL),
(123, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:21:07', '2022-04-06 15:21:07', 127, 'RAS', '1', NULL),
(124, 4, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:21:30', '2022-04-06 15:21:30', 1, 'RAS', '1', NULL),
(125, 33, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:21:50', '2022-04-06 15:21:50', 64, 'RAS', '1', NULL),
(126, 9, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:22:08', '2022-04-06 15:22:08', 74, 'RAS', '1', NULL),
(127, 12, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:22:29', '2022-04-06 15:22:29', 61, 'RAS', '1', NULL),
(128, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:22:50', '2022-04-06 15:22:50', 79, 'RAS', '1', NULL),
(129, 31, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:23:13', '2022-04-06 15:23:13', 71, 'RAS', '1', NULL),
(130, 4, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:23:28', '2022-04-06 15:23:28', 72, 'RAS', '1', NULL),
(131, 6, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:23:57', '2022-04-06 15:23:57', 62, 'RAS', '1', NULL),
(132, 5, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:24:21', '2022-04-06 15:24:21', 76, 'RAS', '1', NULL),
(133, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:26:50', '2022-04-06 15:26:50', 128, 'RAS', '1', NULL),
(134, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:27:52', '2022-04-06 15:27:52', 77, 'RAS', '1', NULL),
(135, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:28:03', '2022-04-06 15:28:03', 73, 'RAS', '1', NULL),
(136, 23, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:28:22', '2022-04-06 15:28:22', 63, 'RAS', '1', NULL),
(137, 8, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:28:52', '2022-04-06 15:28:52', 78, 'RAS', '1', NULL),
(138, 7, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:31:17', '2022-04-06 15:31:17', 109, 'RAS', '1', NULL),
(139, 9, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:31:34', '2022-04-06 15:31:34', 119, 'RAS', '1', NULL),
(140, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:32:01', '2022-04-06 15:32:01', 117, 'RAS', '1', NULL),
(141, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:35:17', '2022-04-06 15:35:17', 114, 'RAS', '1', NULL),
(142, 3, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:35:42', '2022-04-06 15:35:42', 112, 'RAS', '1', NULL),
(143, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:35:55', '2022-04-06 15:35:55', 116, 'RAS', '1', NULL),
(144, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:36:15', '2022-04-06 15:36:15', 113, 'RAS', '1', NULL),
(145, 14, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:36:46', '2022-04-06 15:36:46', 3, 'RAS', '1', NULL),
(146, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:36:59', '2022-04-06 15:36:59', 121, 'RAS', '1', NULL),
(147, 9, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:37:24', '2022-04-06 15:37:24', 120, 'RAS', '1', NULL),
(148, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:37:40', '2022-04-06 15:37:40', 122, 'RAS', '1', NULL),
(149, 1, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:38:37', '2022-04-06 15:38:37', 110, 'RAS', '1', NULL),
(150, 3, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:38:56', '2022-04-06 15:38:56', 115, 'RAS', '1', NULL),
(151, 4, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:39:25', '2022-04-06 15:39:25', 4, 'RAS', '1', NULL),
(152, 2, '2022-04-05', '2022-04-05', 28, '2022-04-06 15:39:36', '2022-04-06 15:39:36', 111, 'RAS', '1', NULL),
(153, 23, '2022-04-07', '2022-04-07', 25, '2022-04-07 09:49:14', '2022-04-07 09:49:14', 129, 'RAS', '1', NULL),
(154, 31, '2022-04-07', '2022-04-07', 25, '2022-04-07 09:50:23', '2022-04-07 09:50:23', 61, 'RAS', '1', NULL),
(155, 18, '2022-04-07', '2022-04-07', 25, '2022-04-07 09:51:22', '2022-04-07 09:51:22', 8, 'RAS', '1', NULL),
(156, 45, '2022-04-07', '2022-04-07', 25, '2022-04-07 09:52:25', '2022-04-07 09:52:25', 2, 'RAS', '1', NULL),
(157, 70, '2022-04-07', '2022-04-07', 25, '2022-04-07 09:53:58', '2022-04-07 09:53:58', 3, 'RAS', '1', NULL),
(158, 6, '2022-04-07', '2022-04-07', 26, '2022-04-07 09:56:44', '2022-04-07 09:56:44', 3, 'RAS', '1', NULL),
(159, 14, '2022-04-07', '2022-04-07', 26, '2022-04-07 09:57:15', '2022-04-07 09:57:15', 114, 'RAS', '1', NULL),
(160, 17, '2022-04-07', '2022-04-07', 26, '2022-04-07 09:57:54', '2022-04-07 09:57:54', 112, 'RAS', '1', NULL),
(161, 21, '2022-04-07', '2022-04-07', 26, '2022-04-07 09:58:22', '2022-04-07 09:58:22', 109, 'RAS', '1', NULL),
(162, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 09:59:41', '2022-04-07 09:59:41', 86, 'RAS', '1', NULL),
(163, 14, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:00:20', '2022-04-07 10:00:20', 2, 'RAS', '1', NULL),
(164, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:00:44', '2022-04-07 10:00:44', 99, 'RAS', '1', NULL),
(165, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:00:58', '2022-04-07 10:00:58', 103, 'RAS', '1', NULL),
(166, 2, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:01:10', '2022-04-07 10:01:10', 103, 'RAS', '1', NULL),
(167, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:04:58', '2022-04-07 10:04:58', 130, 'RAS', '1', NULL),
(168, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:05:31', '2022-04-07 10:05:31', 2, 'RAS', '1', NULL),
(169, 5, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:06:09', '2022-04-07 10:06:09', 91, 'RAS', '1', NULL),
(170, 26, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:06:50', '2022-04-07 10:06:50', 106, 'RAS', '1', NULL),
(171, 18, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:10:10', '2022-04-07 10:10:10', 131, 'RAS', '1', NULL),
(172, 8, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:11:16', '2022-04-07 10:11:16', 85, 'RAS', '1', NULL),
(173, 5, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:11:56', '2022-04-07 10:11:56', 84, 'RAS', '1', NULL),
(174, 17, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:12:30', '2022-04-07 10:12:30', 83, 'RAS', '1', NULL),
(175, 14, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:20:16', '2022-04-07 10:20:16', 99, 'RAS', '1', NULL),
(176, 14, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:22:12', '2022-04-07 10:22:12', 132, 'RAS', '1', NULL),
(177, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:24:12', '2022-04-07 10:24:12', 2, 'RAS', '1', NULL),
(178, 3, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:29:26', '2022-04-07 10:29:26', 19, 'RAS', '1', NULL),
(179, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:30:12', '2022-04-07 10:30:12', 17, 'RAS', '1', NULL),
(180, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:31:07', '2022-04-07 10:31:07', 123, 'RAS', '1', NULL),
(181, 2, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:36:24', '2022-04-07 10:36:24', 7, 'RAS', '1', NULL),
(182, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:37:13', '2022-04-07 10:37:13', 133, 'RAS', '1', NULL),
(183, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:40:13', '2022-04-07 10:40:13', 134, 'RAS', '1', NULL),
(184, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:45:03', '2022-04-07 10:45:03', 11, 'RAS', '1', NULL),
(185, 2, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:45:28', '2022-04-07 10:45:28', 13, 'RAS', '1', NULL),
(186, 2, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:46:20', '2022-04-07 10:46:20', 12, 'RAS', '1', NULL),
(187, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:58:11', '2022-04-07 10:58:11', 135, 'RAS', '1', NULL),
(188, 7, '2022-04-07', '2022-04-07', 26, '2022-04-07 10:59:10', '2022-04-07 10:59:10', 8, 'RAS', '1', NULL),
(189, 4, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:00:38', '2022-04-07 11:00:38', 67, 'RAS', '1', NULL),
(190, 6, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:01:51', '2022-04-07 11:01:51', 1, 'RAS', '1', NULL),
(191, 5, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:02:36', '2022-04-07 11:02:36', 61, 'RAS', '1', NULL),
(192, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:04:46', '2022-04-07 11:04:46', 75, 'RAS', '1', NULL),
(193, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:12:18', '2022-04-07 11:12:18', 136, 'RAS', '1', NULL),
(194, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:12:37', '2022-04-07 11:12:37', 74, 'RAS', '1', NULL),
(195, 1, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:12:50', '2022-04-07 11:12:50', 76, 'RAS', '1', NULL),
(196, 47, '2022-04-07', '2022-04-07', 26, '2022-04-07 11:14:41', '2022-04-07 11:14:41', 129, 'RAS', '1', NULL),
(197, 8, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:21:59', '2022-04-07 11:21:59', 91, 'RAS', '1', NULL),
(198, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:23:03', '2022-04-07 11:23:03', 106, 'RAS', '1', NULL),
(199, 50, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:23:59', '2022-04-07 11:23:59', 102, 'RAS', '1', NULL),
(200, 20, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:24:50', '2022-04-07 11:24:50', 102, 'RAS', '1', NULL),
(201, 9, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:25:47', '2022-04-07 11:25:47', 90, 'RAS', '1', NULL),
(202, 24, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:26:56', '2022-04-07 11:26:56', 103, 'RAS', '1', NULL),
(203, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:27:48', '2022-04-07 11:27:48', 87, 'RAS', '1', NULL),
(204, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:28:50', '2022-04-07 11:28:50', 107, 'RAS', '1', NULL),
(205, 7, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:29:39', '2022-04-07 11:29:39', 105, 'RAS', '1', NULL),
(206, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:30:51', '2022-04-07 11:30:51', 104, 'RAS', '1', NULL),
(207, 7, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:32:29', '2022-04-07 11:32:29', 82, 'RAS', '1', NULL),
(208, 4, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:33:40', '2022-04-07 11:33:40', 86, 'RAS', '1', NULL),
(209, 60, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:35:51', '2022-04-07 11:35:51', 2, 'RAS', '1', NULL),
(210, 3, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:45:34', '2022-04-07 11:45:34', 69, 'RAS', '1', NULL),
(211, 4, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:46:19', '2022-04-07 11:46:19', 70, 'RAS', '1', NULL),
(212, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:47:22', '2022-04-07 11:47:22', 1, 'RAS', '1', NULL),
(213, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:48:12', '2022-04-07 11:48:12', 74, 'RAS', '1', NULL),
(214, 25, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:49:15', '2022-04-07 11:49:15', 61, 'RAS', '1', NULL),
(215, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:50:00', '2022-04-07 11:50:00', 68, 'RAS', '1', NULL),
(216, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 11:59:27', '2022-04-07 11:59:27', 137, 'RAS', '1', NULL),
(217, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:00:37', '2022-04-07 12:00:37', 72, 'RAS', '1', NULL),
(218, 10, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:01:32', '2022-04-07 12:01:32', 62, 'RAS', '1', NULL),
(219, 4, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:02:58', '2022-04-07 12:02:58', 76, 'RAS', '1', NULL),
(220, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:06:50', '2022-04-07 12:06:50', 77, 'RAS', '1', NULL),
(221, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:11:07', '2022-04-07 12:11:07', 73, 'RAS', '1', NULL),
(222, 10, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:12:16', '2022-04-07 12:12:16', 63, 'RAS', '1', NULL),
(223, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:14:02', '2022-04-07 12:14:02', 78, 'RAS', '1', NULL),
(224, 8, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:15:32', '2022-04-07 12:15:32', 32, 'RAS', '1', NULL),
(225, 2, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:16:15', '2022-04-07 12:16:15', 33, 'RAS', '1', NULL),
(226, 16, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:17:18', '2022-04-07 12:17:18', 34, 'RAS', '1', NULL),
(227, 29, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:18:02', '2022-04-07 12:18:02', 35, 'RAS', '1', NULL),
(228, 7, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:19:26', '2022-04-07 12:19:26', 37, 'RAS', '1', NULL),
(229, 26, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:20:18', '2022-04-07 12:20:18', 39, 'RAS', '1', NULL),
(230, 13, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:22:12', '2022-04-07 12:22:12', 40, 'RAS', '1', NULL),
(231, 26, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:22:55', '2022-04-07 12:22:55', 42, 'RAS', '1', NULL),
(232, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:23:37', '2022-04-07 12:23:37', 42, 'RAS', '1', NULL),
(233, 34, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:24:38', '2022-04-07 12:24:38', 43, 'RAS', '1', NULL),
(234, 10, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:25:57', '2022-04-07 12:25:57', 45, 'RAS', '1', NULL),
(235, 10, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:26:55', '2022-04-07 12:26:55', 46, 'RAS', '1', NULL),
(236, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:27:35', '2022-04-07 12:27:35', 52, 'RAS', '1', NULL),
(237, 1, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:28:27', '2022-04-07 12:28:27', 54, 'RAS', '1', NULL),
(238, 38, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:29:39', '2022-04-07 12:29:39', 55, 'RAS', '1', NULL),
(239, 16, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:30:32', '2022-04-07 12:30:32', 55, 'RAS', '1', NULL),
(240, 16, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:31:32', '2022-04-07 12:31:32', 57, 'RAS', '1', NULL),
(241, 57, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:32:28', '2022-04-07 12:32:28', 55, 'RAS', '1', NULL),
(242, 25, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:33:23', '2022-04-07 12:33:23', 56, 'RAS', '1', NULL),
(243, 24, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:34:27', '2022-04-07 12:34:27', 57, 'RAS', '1', NULL),
(244, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:35:29', '2022-04-07 12:35:29', 126, 'RAS', '1', NULL),
(245, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:36:32', '2022-04-07 12:36:32', 59, 'RAS', '1', NULL),
(246, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:42:11', '2022-04-07 12:42:11', 7, 'RAS', '1', NULL),
(247, 10, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:43:16', '2022-04-07 12:43:16', 13, 'RAS', '1', NULL),
(248, 6, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:44:42', '2022-04-07 12:44:42', 10, 'RAS', '1', NULL),
(249, 4, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:45:32', '2022-04-07 12:45:32', 23, 'RAS', '1', NULL),
(250, 5, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:46:21', '2022-04-07 12:46:21', 123, 'RAS', '1', NULL),
(251, 14, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:57:20', '2022-04-07 12:57:20', 8, 'RAS', '1', NULL),
(252, 21, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:58:51', '2022-04-07 12:58:51', 9, 'RAS', '1', NULL),
(253, 12, '2022-04-07', '2022-04-07', 19, '2022-04-07 12:59:43', '2022-04-07 12:59:43', 14, 'RAS', '1', NULL),
(254, 11, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:00:31', '2022-04-07 13:00:31', 21, 'RAS', '1', NULL),
(255, 16, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:01:48', '2022-04-07 13:01:48', 12, 'RAS', '1', NULL),
(256, 12, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:02:42', '2022-04-07 13:02:42', 18, 'RAS', '1', NULL),
(257, 9, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:03:38', '2022-04-07 13:03:38', 17, 'RAS', '1', NULL),
(258, 9, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:04:18', '2022-04-07 13:04:18', 11, 'RAS', '1', NULL),
(259, 11, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:05:02', '2022-04-07 13:05:02', 19, 'RAS', '1', NULL),
(260, 4, '2022-04-07', '2022-04-07', 19, '2022-04-07 13:17:49', '2022-04-07 13:17:49', 139, 'RAS', '1', NULL),
(265, 1081, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:04:26', '2022-04-11 09:04:26', 32, 'RAS', '1', NULL),
(266, 15, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:05:07', '2022-04-11 09:05:07', 33, 'RAS', '1', NULL),
(267, 40, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:09:46', '2022-04-11 09:09:46', 140, 'RAS', '1', NULL),
(268, 14, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:10:15', '2022-04-11 09:10:15', 35, 'RAS', '1', NULL),
(269, 193, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:16:48', '2022-04-11 09:16:48', 36, 'RAS', '1', NULL),
(270, 55, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:17:12', '2022-04-11 09:17:12', 40, 'RAS', '1', NULL),
(271, 3358, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:18:06', '2022-04-11 09:18:06', 43, 'RAS', '1', NULL),
(272, 60, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:18:39', '2022-04-11 09:18:39', 45, 'RAS', '1', NULL),
(273, 155, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:22:00', '2022-04-11 09:22:00', 141, 'RAS', '1', NULL),
(274, 305, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:22:37', '2022-04-11 09:22:37', 48, 'RAS', '1', NULL),
(275, 83, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:23:13', '2022-04-11 09:23:13', 50, 'RAS', '1', NULL),
(276, 43, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:24:06', '2022-04-11 09:24:06', 129, 'RAS', '1', NULL),
(277, 19, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:24:41', '2022-04-11 09:24:41', 129, 'RAS', '1', NULL),
(278, 412, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:25:33', '2022-04-11 09:25:33', 55, 'RAS', '1', NULL),
(279, 38, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:26:27', '2022-04-11 09:26:27', 57, 'RAS', '1', NULL),
(280, 25, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:27:12', '2022-04-11 09:27:12', 59, 'RAS', '1', NULL),
(281, 242, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:33:15', '2022-04-11 09:33:15', 3, 'RAS', '1', NULL),
(282, 16, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:34:01', '2022-04-11 09:34:01', 109, 'RAS', '1', NULL),
(283, 18, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:35:14', '2022-04-11 09:35:14', 114, 'RAS', '1', NULL),
(284, 12, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:36:11', '2022-04-11 09:36:11', 112, 'RAS', '1', NULL),
(285, 227, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:40:13', '2022-04-11 09:40:13', 99, 'RAS', '1', NULL),
(286, 11, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:40:48', '2022-04-11 09:40:48', 91, 'RAS', '1', NULL),
(287, 15, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:41:24', '2022-04-11 09:41:24', 106, 'RAS', '1', NULL),
(288, 15, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:42:04', '2022-04-11 09:42:04', 83, 'RAS', '1', NULL),
(289, 16, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:42:33', '2022-04-11 09:42:33', 132, 'RAS', '1', NULL),
(290, 22, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:42:55', '2022-04-11 09:42:55', 88, 'RAS', '1', NULL),
(291, 15, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:43:34', '2022-04-11 09:43:34', 103, 'RAS', '1', NULL),
(292, 11, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:44:01', '2022-04-11 09:44:01', 131, 'RAS', '1', NULL),
(293, 5, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:44:39', '2022-04-11 09:44:39', 84, 'RAS', '1', NULL),
(294, 11, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:45:21', '2022-04-11 09:45:21', 85, 'RAS', '1', NULL),
(295, 28, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:45:53', '2022-04-11 09:45:53', 86, 'RAS', '1', NULL),
(296, 132, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:52:12', '2022-04-11 09:52:12', 75, 'RAS', '1', NULL),
(297, 16, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:52:55', '2022-04-11 09:52:55', 67, 'RAS', '1', NULL),
(298, 46, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:53:33', '2022-04-11 09:53:33', 70, 'RAS', '1', NULL),
(299, 704, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:55:03', '2022-04-11 09:55:03', 1, 'RAS', '1', NULL),
(300, 37, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:57:38', '2022-04-11 09:57:38', 65, 'RAS', '1', NULL),
(301, 33, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:58:10', '2022-04-11 09:58:10', 64, 'RAS', '1', NULL),
(302, 144, '2022-04-11', '2022-04-11', 27, '2022-04-11 09:58:46', '2022-04-11 09:58:46', 74, 'RAS', '1', NULL),
(303, 1200, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:00:19', '2022-04-11 10:00:19', 61, 'RAS', '1', NULL),
(304, 104, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:01:04', '2022-04-11 10:01:04', 63, 'RAS', '1', NULL),
(305, 298, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:07:42', '2022-04-11 10:07:42', 123, 'RAS', '1', NULL),
(306, 78, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:10:04', '2022-04-11 10:10:04', 7, 'RAS', '1', NULL),
(307, 10, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:11:39', '2022-04-11 10:11:39', 142, 'RAS', '1', NULL),
(308, 110, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:12:52', '2022-04-11 10:12:52', 8, 'RAS', '1', NULL),
(309, 34, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:14:06', '2022-04-11 10:14:06', 9, 'RAS', '1', NULL),
(310, 7, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:15:16', '2022-04-11 10:15:16', 26, 'RAS', '1', NULL),
(311, 30, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:16:01', '2022-04-11 10:16:01', 16, 'RAS', '1', NULL),
(312, 55, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:16:55', '2022-04-11 10:16:55', 14, 'RAS', '1', NULL),
(313, 45, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:17:37', '2022-04-11 10:17:37', 15, 'RAS', '1', NULL),
(314, 14, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:18:14', '2022-04-11 10:18:14', 18, 'RAS', '1', NULL),
(315, 621, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:19:37', '2022-04-11 10:19:37', 12, 'RAS', '1', NULL),
(316, 20, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:21:40', '2022-04-11 10:21:40', 17, 'RAS', '1', NULL),
(317, 22, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:22:39', '2022-04-11 10:22:39', 11, 'RAS', '1', NULL),
(318, 23, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:23:15', '2022-04-11 10:23:15', 19, 'RAS', '1', NULL),
(319, 14, '2022-04-11', '2022-04-11', 27, '2022-04-11 10:24:02', '2022-04-11 10:24:02', 29, 'RAS', '1', NULL),
(369, 66, '2022-03-15', '2022-03-15', 32, '2022-04-20 14:48:41', '2022-04-20 14:48:41', 36, 'En sept (7) mois d’exécution deux sessions de formation sont tenues sur les techniques d’aménagement de guirlandes et d’ensemencement', '1', NULL),
(370, 3, '2022-03-15', '2022-03-15', 33, '2022-04-20 14:56:08', '2022-04-20 14:56:08', 36, 'Gap de 1,5km à compléter', '1', NULL),
(371, 2, '2022-03-15', '2022-03-15', 35, '2022-04-20 14:59:56', '2022-04-20 14:59:56', 36, 'RAS', '1', NULL),
(372, 2, '2022-03-15', '2022-03-15', 36, '2022-04-20 15:01:56', '2022-04-20 15:01:56', 36, 'Dépassement de la valeur cible', '1', NULL),
(373, 3, '2022-04-21', '2022-04-21', 28, '2022-04-22 12:29:58', '2022-04-22 12:29:58', 71, NULL, '1', NULL),
(374, 3.1, '2022-04-21', '2022-04-21', 28, '2022-04-22 12:30:16', '2022-04-22 12:30:16', 71, NULL, '1', NULL),
(375, 1, '2022-08-24', '2022-08-24', 43, '2022-08-24 11:49:31', '2022-08-24 11:49:31', 100, 'ERR', '1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `resultat_details`
--

CREATE TABLE `resultat_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valeur` double NOT NULL,
  `resultat_id` bigint(20) UNSIGNED NOT NULL,
  `desagrege_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `resultat_details`
--

INSERT INTO `resultat_details` (`id`, `valeur`, `resultat_id`, `desagrege_id`, `created_at`, `updated_at`) VALUES
(1, 400, 8, 9, '2022-04-05 12:18:35', '2022-04-05 12:18:35'),
(2, 700, 8, 10, '2022-04-05 12:18:35', '2022-04-05 12:18:35'),
(3, 80, 9, 9, '2022-04-05 12:23:11', '2022-04-05 12:23:11'),
(4, 200, 9, 10, '2022-04-05 12:23:11', '2022-04-05 12:23:11'),
(5, 100, 10, 9, '2022-04-05 12:24:37', '2022-04-05 12:24:37'),
(6, 140, 10, 10, '2022-04-05 12:24:37', '2022-04-05 12:24:37'),
(7, 0, 11, 9, '2022-04-05 12:34:20', '2022-04-05 12:34:20'),
(8, 0, 11, 10, '2022-04-05 12:34:20', '2022-04-05 12:34:20'),
(9, 0, 12, 9, '2022-04-05 12:35:14', '2022-04-05 12:35:14'),
(10, 0, 12, 10, '2022-04-05 12:35:14', '2022-04-05 12:35:14'),
(11, 0, 13, 9, '2022-04-05 12:35:53', '2022-04-05 12:35:53'),
(12, 0, 13, 10, '2022-04-05 12:35:53', '2022-04-05 12:35:53'),
(13, 0, 14, 9, '2022-04-05 12:36:47', '2022-04-05 12:36:47'),
(14, 0, 14, 10, '2022-04-05 12:36:47', '2022-04-05 12:36:47'),
(15, 0, 15, 9, '2022-04-05 12:38:03', '2022-04-05 12:38:03'),
(16, 0, 15, 10, '2022-04-05 12:38:03', '2022-04-05 12:38:03'),
(17, 0, 16, 9, '2022-04-05 12:38:52', '2022-04-05 12:38:52'),
(18, 0, 16, 10, '2022-04-05 12:38:52', '2022-04-05 12:38:52'),
(19, 0, 17, 9, '2022-04-05 12:39:48', '2022-04-05 12:39:48'),
(20, 0, 17, 10, '2022-04-05 12:39:48', '2022-04-05 12:39:48'),
(21, 0, 18, 9, '2022-04-05 12:40:26', '2022-04-05 12:40:26'),
(22, 0, 18, 10, '2022-04-05 12:40:26', '2022-04-05 12:40:26'),
(23, 20, 19, 5, '2022-04-05 13:00:41', '2022-04-05 13:00:41'),
(24, 3, 19, 6, '2022-04-05 13:00:41', '2022-04-05 13:00:41'),
(25, 0, 19, 7, '2022-04-05 13:00:41', '2022-04-05 13:00:41'),
(26, 0, 19, 8, '2022-04-05 13:00:41', '2022-04-05 13:00:41'),
(27, 6, 20, 5, '2022-04-05 13:01:30', '2022-04-05 13:01:30'),
(28, 0, 20, 6, '2022-04-05 13:01:30', '2022-04-05 13:01:30'),
(29, 0, 20, 7, '2022-04-05 13:01:30', '2022-04-05 13:01:30'),
(30, 0, 20, 8, '2022-04-05 13:01:30', '2022-04-05 13:01:30'),
(31, 5, 21, 5, '2022-04-05 13:03:38', '2022-04-05 13:03:38'),
(32, 7, 21, 6, '2022-04-05 13:03:38', '2022-04-05 13:03:38'),
(33, 0, 21, 7, '2022-04-05 13:03:38', '2022-04-05 13:03:38'),
(34, 0, 21, 8, '2022-04-05 13:03:38', '2022-04-05 13:03:38'),
(35, 5, 22, 5, '2022-04-05 13:04:45', '2022-04-05 13:04:45'),
(36, 0, 22, 6, '2022-04-05 13:04:45', '2022-04-05 13:04:45'),
(37, 0, 22, 7, '2022-04-05 13:04:45', '2022-04-05 13:04:45'),
(38, 0, 22, 8, '2022-04-05 13:04:45', '2022-04-05 13:04:45'),
(39, 19, 153, 11, '2022-04-07 09:49:14', '2022-04-07 09:49:14'),
(40, 4, 153, 12, '2022-04-07 09:49:14', '2022-04-07 09:49:14'),
(41, 0, 153, 13, '2022-04-07 09:49:14', '2022-04-07 09:49:14'),
(42, 0, 153, 14, '2022-04-07 09:49:14', '2022-04-07 09:49:14'),
(43, 14, 154, 11, '2022-04-07 09:50:23', '2022-04-07 09:50:23'),
(44, 17, 154, 12, '2022-04-07 09:50:23', '2022-04-07 09:50:23'),
(45, 0, 154, 13, '2022-04-07 09:50:23', '2022-04-07 09:50:23'),
(46, 0, 154, 14, '2022-04-07 09:50:23', '2022-04-07 09:50:23'),
(47, 8, 155, 11, '2022-04-07 09:51:22', '2022-04-07 09:51:22'),
(48, 10, 155, 12, '2022-04-07 09:51:22', '2022-04-07 09:51:22'),
(49, 0, 155, 13, '2022-04-07 09:51:22', '2022-04-07 09:51:22'),
(50, 0, 155, 14, '2022-04-07 09:51:22', '2022-04-07 09:51:22'),
(51, 19, 156, 11, '2022-04-07 09:52:25', '2022-04-07 09:52:25'),
(52, 26, 156, 12, '2022-04-07 09:52:25', '2022-04-07 09:52:25'),
(53, 0, 156, 13, '2022-04-07 09:52:25', '2022-04-07 09:52:25'),
(54, 0, 156, 14, '2022-04-07 09:52:25', '2022-04-07 09:52:25'),
(55, 0, 157, 11, '2022-04-07 09:53:58', '2022-04-07 09:53:58'),
(56, 70, 157, 12, '2022-04-07 09:53:58', '2022-04-07 09:53:58'),
(57, 0, 157, 13, '2022-04-07 09:53:58', '2022-04-07 09:53:58'),
(58, 0, 157, 14, '2022-04-07 09:53:58', '2022-04-07 09:53:58'),
(59, 7, 197, 5, '2022-04-07 11:21:59', '2022-04-07 11:21:59'),
(60, 1, 197, 6, '2022-04-07 11:21:59', '2022-04-07 11:21:59'),
(61, 0, 197, 7, '2022-04-07 11:21:59', '2022-04-07 11:21:59'),
(62, 0, 197, 8, '2022-04-07 11:21:59', '2022-04-07 11:21:59'),
(63, 6, 198, 5, '2022-04-07 11:23:03', '2022-04-07 11:23:03'),
(64, 0, 198, 6, '2022-04-07 11:23:03', '2022-04-07 11:23:03'),
(65, 0, 198, 7, '2022-04-07 11:23:03', '2022-04-07 11:23:03'),
(66, 0, 198, 8, '2022-04-07 11:23:03', '2022-04-07 11:23:03'),
(67, 30, 199, 5, '2022-04-07 11:23:59', '2022-04-07 11:23:59'),
(68, 20, 199, 6, '2022-04-07 11:23:59', '2022-04-07 11:23:59'),
(69, 0, 199, 7, '2022-04-07 11:23:59', '2022-04-07 11:23:59'),
(70, 0, 199, 8, '2022-04-07 11:23:59', '2022-04-07 11:23:59'),
(71, 15, 200, 5, '2022-04-07 11:24:50', '2022-04-07 11:24:50'),
(72, 5, 200, 6, '2022-04-07 11:24:50', '2022-04-07 11:24:50'),
(73, 0, 200, 7, '2022-04-07 11:24:50', '2022-04-07 11:24:50'),
(74, 0, 200, 8, '2022-04-07 11:24:50', '2022-04-07 11:24:50'),
(75, 5, 201, 5, '2022-04-07 11:25:47', '2022-04-07 11:25:47'),
(76, 4, 201, 6, '2022-04-07 11:25:47', '2022-04-07 11:25:47'),
(77, 0, 201, 7, '2022-04-07 11:25:47', '2022-04-07 11:25:47'),
(78, 0, 201, 8, '2022-04-07 11:25:47', '2022-04-07 11:25:47'),
(79, 13, 202, 5, '2022-04-07 11:26:56', '2022-04-07 11:26:56'),
(80, 11, 202, 6, '2022-04-07 11:26:56', '2022-04-07 11:26:56'),
(81, 0, 202, 7, '2022-04-07 11:26:56', '2022-04-07 11:26:56'),
(82, 0, 202, 8, '2022-04-07 11:26:56', '2022-04-07 11:26:56'),
(83, 4, 203, 5, '2022-04-07 11:27:48', '2022-04-07 11:27:48'),
(84, 2, 203, 6, '2022-04-07 11:27:48', '2022-04-07 11:27:48'),
(85, 0, 203, 7, '2022-04-07 11:27:48', '2022-04-07 11:27:48'),
(86, 0, 203, 8, '2022-04-07 11:27:48', '2022-04-07 11:27:48'),
(87, 0, 204, 5, '2022-04-07 11:28:50', '2022-04-07 11:28:50'),
(88, 1, 204, 6, '2022-04-07 11:28:50', '2022-04-07 11:28:50'),
(89, 0, 204, 7, '2022-04-07 11:28:50', '2022-04-07 11:28:50'),
(90, 0, 204, 8, '2022-04-07 11:28:50', '2022-04-07 11:28:50'),
(91, 6, 205, 5, '2022-04-07 11:29:39', '2022-04-07 11:29:39'),
(92, 1, 205, 6, '2022-04-07 11:29:39', '2022-04-07 11:29:39'),
(93, 0, 205, 7, '2022-04-07 11:29:39', '2022-04-07 11:29:39'),
(94, 0, 205, 8, '2022-04-07 11:29:39', '2022-04-07 11:29:39'),
(95, 3, 206, 5, '2022-04-07 11:30:51', '2022-04-07 11:30:51'),
(96, 3, 206, 6, '2022-04-07 11:30:51', '2022-04-07 11:30:51'),
(97, 0, 206, 7, '2022-04-07 11:30:51', '2022-04-07 11:30:51'),
(98, 0, 206, 8, '2022-04-07 11:30:51', '2022-04-07 11:30:51'),
(99, 3, 207, 5, '2022-04-07 11:32:29', '2022-04-07 11:32:29'),
(100, 4, 207, 6, '2022-04-07 11:32:29', '2022-04-07 11:32:29'),
(101, 0, 207, 7, '2022-04-07 11:32:29', '2022-04-07 11:32:29'),
(102, 0, 207, 8, '2022-04-07 11:32:29', '2022-04-07 11:32:29'),
(103, 3, 208, 5, '2022-04-07 11:33:40', '2022-04-07 11:33:40'),
(104, 1, 208, 6, '2022-04-07 11:33:40', '2022-04-07 11:33:40'),
(105, 0, 208, 7, '2022-04-07 11:33:40', '2022-04-07 11:33:40'),
(106, 0, 208, 8, '2022-04-07 11:33:40', '2022-04-07 11:33:40'),
(107, 28, 209, 5, '2022-04-07 11:35:51', '2022-04-07 11:35:51'),
(108, 32, 209, 6, '2022-04-07 11:35:51', '2022-04-07 11:35:51'),
(109, 0, 209, 7, '2022-04-07 11:35:51', '2022-04-07 11:35:51'),
(110, 0, 209, 8, '2022-04-07 11:35:51', '2022-04-07 11:35:51'),
(111, 3, 210, 5, '2022-04-07 11:45:34', '2022-04-07 11:45:34'),
(112, 0, 210, 6, '2022-04-07 11:45:34', '2022-04-07 11:45:34'),
(113, 0, 210, 7, '2022-04-07 11:45:34', '2022-04-07 11:45:34'),
(114, 0, 210, 8, '2022-04-07 11:45:34', '2022-04-07 11:45:34'),
(115, 3, 211, 5, '2022-04-07 11:46:19', '2022-04-07 11:46:19'),
(116, 1, 211, 6, '2022-04-07 11:46:19', '2022-04-07 11:46:19'),
(117, 0, 211, 7, '2022-04-07 11:46:19', '2022-04-07 11:46:19'),
(118, 0, 211, 8, '2022-04-07 11:46:19', '2022-04-07 11:46:19'),
(119, 3, 212, 5, '2022-04-07 11:47:22', '2022-04-07 11:47:22'),
(120, 3, 212, 6, '2022-04-07 11:47:22', '2022-04-07 11:47:22'),
(121, 0, 212, 7, '2022-04-07 11:47:22', '2022-04-07 11:47:22'),
(122, 0, 212, 8, '2022-04-07 11:47:22', '2022-04-07 11:47:22'),
(123, 1, 213, 5, '2022-04-07 11:48:12', '2022-04-07 11:48:12'),
(124, 0, 213, 6, '2022-04-07 11:48:12', '2022-04-07 11:48:12'),
(125, 0, 213, 7, '2022-04-07 11:48:12', '2022-04-07 11:48:12'),
(126, 0, 213, 8, '2022-04-07 11:48:12', '2022-04-07 11:48:12'),
(127, 3, 214, 5, '2022-04-07 11:49:15', '2022-04-07 11:49:15'),
(128, 22, 214, 6, '2022-04-07 11:49:15', '2022-04-07 11:49:15'),
(129, 0, 214, 7, '2022-04-07 11:49:15', '2022-04-07 11:49:15'),
(130, 0, 214, 8, '2022-04-07 11:49:15', '2022-04-07 11:49:15'),
(131, 1, 215, 5, '2022-04-07 11:50:00', '2022-04-07 11:50:00'),
(132, 0, 215, 6, '2022-04-07 11:50:00', '2022-04-07 11:50:00'),
(133, 0, 215, 7, '2022-04-07 11:50:00', '2022-04-07 11:50:00'),
(134, 0, 215, 8, '2022-04-07 11:50:00', '2022-04-07 11:50:00'),
(135, 1, 216, 5, '2022-04-07 11:59:27', '2022-04-07 11:59:27'),
(136, 0, 216, 6, '2022-04-07 11:59:27', '2022-04-07 11:59:27'),
(137, 0, 216, 7, '2022-04-07 11:59:27', '2022-04-07 11:59:27'),
(138, 0, 216, 8, '2022-04-07 11:59:27', '2022-04-07 11:59:27'),
(139, 1, 217, 5, '2022-04-07 12:00:37', '2022-04-07 12:00:37'),
(140, 0, 217, 6, '2022-04-07 12:00:37', '2022-04-07 12:00:37'),
(141, 0, 217, 7, '2022-04-07 12:00:37', '2022-04-07 12:00:37'),
(142, 0, 217, 8, '2022-04-07 12:00:37', '2022-04-07 12:00:37'),
(143, 10, 218, 5, '2022-04-07 12:01:32', '2022-04-07 12:01:32'),
(144, 0, 218, 6, '2022-04-07 12:01:32', '2022-04-07 12:01:32'),
(145, 0, 218, 7, '2022-04-07 12:01:32', '2022-04-07 12:01:32'),
(146, 0, 218, 8, '2022-04-07 12:01:32', '2022-04-07 12:01:32'),
(147, 3, 219, 5, '2022-04-07 12:02:58', '2022-04-07 12:02:58'),
(148, 1, 219, 6, '2022-04-07 12:02:58', '2022-04-07 12:02:58'),
(149, 0, 219, 7, '2022-04-07 12:02:58', '2022-04-07 12:02:58'),
(150, 0, 219, 8, '2022-04-07 12:02:58', '2022-04-07 12:02:58'),
(151, 1, 220, 5, '2022-04-07 12:06:50', '2022-04-07 12:06:50'),
(152, 0, 220, 6, '2022-04-07 12:06:50', '2022-04-07 12:06:50'),
(153, 0, 220, 7, '2022-04-07 12:06:50', '2022-04-07 12:06:50'),
(154, 0, 220, 8, '2022-04-07 12:06:50', '2022-04-07 12:06:50'),
(155, 1, 221, 5, '2022-04-07 12:11:07', '2022-04-07 12:11:07'),
(156, 0, 221, 6, '2022-04-07 12:11:07', '2022-04-07 12:11:07'),
(157, 0, 221, 7, '2022-04-07 12:11:07', '2022-04-07 12:11:07'),
(158, 0, 221, 8, '2022-04-07 12:11:07', '2022-04-07 12:11:07'),
(159, 8, 222, 5, '2022-04-07 12:12:16', '2022-04-07 12:12:16'),
(160, 2, 222, 6, '2022-04-07 12:12:16', '2022-04-07 12:12:16'),
(161, 0, 222, 7, '2022-04-07 12:12:16', '2022-04-07 12:12:16'),
(162, 0, 222, 8, '2022-04-07 12:12:16', '2022-04-07 12:12:16'),
(163, 1, 223, 5, '2022-04-07 12:14:02', '2022-04-07 12:14:02'),
(164, 1, 223, 6, '2022-04-07 12:14:02', '2022-04-07 12:14:02'),
(165, 0, 223, 7, '2022-04-07 12:14:02', '2022-04-07 12:14:02'),
(166, 0, 223, 8, '2022-04-07 12:14:02', '2022-04-07 12:14:02'),
(167, 0, 224, 5, '2022-04-07 12:15:32', '2022-04-07 12:15:32'),
(168, 8, 224, 6, '2022-04-07 12:15:32', '2022-04-07 12:15:32'),
(169, 0, 224, 7, '2022-04-07 12:15:32', '2022-04-07 12:15:32'),
(170, 0, 224, 8, '2022-04-07 12:15:32', '2022-04-07 12:15:32'),
(171, 0, 225, 5, '2022-04-07 12:16:15', '2022-04-07 12:16:15'),
(172, 2, 225, 6, '2022-04-07 12:16:15', '2022-04-07 12:16:15'),
(173, 0, 225, 7, '2022-04-07 12:16:15', '2022-04-07 12:16:15'),
(174, 0, 225, 8, '2022-04-07 12:16:15', '2022-04-07 12:16:15'),
(175, 1, 226, 5, '2022-04-07 12:17:18', '2022-04-07 12:17:18'),
(176, 15, 226, 6, '2022-04-07 12:17:18', '2022-04-07 12:17:18'),
(177, 0, 226, 7, '2022-04-07 12:17:18', '2022-04-07 12:17:18'),
(178, 0, 226, 8, '2022-04-07 12:17:18', '2022-04-07 12:17:18'),
(179, 0, 227, 5, '2022-04-07 12:18:02', '2022-04-07 12:18:02'),
(180, 29, 227, 6, '2022-04-07 12:18:02', '2022-04-07 12:18:02'),
(181, 0, 227, 7, '2022-04-07 12:18:02', '2022-04-07 12:18:02'),
(182, 0, 227, 8, '2022-04-07 12:18:02', '2022-04-07 12:18:02'),
(183, 1, 228, 5, '2022-04-07 12:19:26', '2022-04-07 12:19:26'),
(184, 6, 228, 6, '2022-04-07 12:19:26', '2022-04-07 12:19:26'),
(185, 0, 228, 7, '2022-04-07 12:19:26', '2022-04-07 12:19:26'),
(186, 0, 228, 8, '2022-04-07 12:19:26', '2022-04-07 12:19:26'),
(187, 1, 229, 5, '2022-04-07 12:20:18', '2022-04-07 12:20:18'),
(188, 25, 229, 6, '2022-04-07 12:20:18', '2022-04-07 12:20:18'),
(189, 0, 229, 7, '2022-04-07 12:20:18', '2022-04-07 12:20:18'),
(190, 0, 229, 8, '2022-04-07 12:20:18', '2022-04-07 12:20:18'),
(191, 0, 230, 5, '2022-04-07 12:22:12', '2022-04-07 12:22:12'),
(192, 13, 230, 6, '2022-04-07 12:22:12', '2022-04-07 12:22:12'),
(193, 0, 230, 7, '2022-04-07 12:22:12', '2022-04-07 12:22:12'),
(194, 0, 230, 8, '2022-04-07 12:22:12', '2022-04-07 12:22:12'),
(195, 1, 231, 5, '2022-04-07 12:22:55', '2022-04-07 12:22:55'),
(196, 25, 231, 6, '2022-04-07 12:22:55', '2022-04-07 12:22:55'),
(197, 0, 231, 7, '2022-04-07 12:22:55', '2022-04-07 12:22:55'),
(198, 0, 231, 8, '2022-04-07 12:22:55', '2022-04-07 12:22:55'),
(199, 0, 232, 5, '2022-04-07 12:23:37', '2022-04-07 12:23:37'),
(200, 1, 232, 6, '2022-04-07 12:23:37', '2022-04-07 12:23:37'),
(201, 0, 232, 7, '2022-04-07 12:23:37', '2022-04-07 12:23:37'),
(202, 0, 232, 8, '2022-04-07 12:23:37', '2022-04-07 12:23:37'),
(203, 0, 233, 5, '2022-04-07 12:24:38', '2022-04-07 12:24:38'),
(204, 34, 233, 6, '2022-04-07 12:24:38', '2022-04-07 12:24:38'),
(205, 0, 233, 7, '2022-04-07 12:24:38', '2022-04-07 12:24:38'),
(206, 0, 233, 8, '2022-04-07 12:24:38', '2022-04-07 12:24:38'),
(207, 1, 234, 5, '2022-04-07 12:25:57', '2022-04-07 12:25:57'),
(208, 9, 234, 6, '2022-04-07 12:25:57', '2022-04-07 12:25:57'),
(209, 0, 234, 7, '2022-04-07 12:25:57', '2022-04-07 12:25:57'),
(210, 0, 234, 8, '2022-04-07 12:25:57', '2022-04-07 12:25:57'),
(211, 0, 235, 5, '2022-04-07 12:26:55', '2022-04-07 12:26:55'),
(212, 10, 235, 6, '2022-04-07 12:26:55', '2022-04-07 12:26:55'),
(213, 0, 235, 7, '2022-04-07 12:26:55', '2022-04-07 12:26:55'),
(214, 0, 235, 8, '2022-04-07 12:26:55', '2022-04-07 12:26:55'),
(215, 0, 236, 5, '2022-04-07 12:27:35', '2022-04-07 12:27:35'),
(216, 1, 236, 6, '2022-04-07 12:27:35', '2022-04-07 12:27:35'),
(217, 0, 236, 7, '2022-04-07 12:27:35', '2022-04-07 12:27:35'),
(218, 0, 236, 8, '2022-04-07 12:27:35', '2022-04-07 12:27:35'),
(219, 1, 237, 5, '2022-04-07 12:28:27', '2022-04-07 12:28:27'),
(220, 0, 237, 6, '2022-04-07 12:28:27', '2022-04-07 12:28:27'),
(221, 0, 237, 7, '2022-04-07 12:28:27', '2022-04-07 12:28:27'),
(222, 0, 237, 8, '2022-04-07 12:28:27', '2022-04-07 12:28:27'),
(223, 1, 238, 5, '2022-04-07 12:29:39', '2022-04-07 12:29:39'),
(224, 37, 238, 6, '2022-04-07 12:29:39', '2022-04-07 12:29:39'),
(225, 0, 238, 7, '2022-04-07 12:29:39', '2022-04-07 12:29:39'),
(226, 0, 238, 8, '2022-04-07 12:29:39', '2022-04-07 12:29:39'),
(227, 0, 239, 5, '2022-04-07 12:30:32', '2022-04-07 12:30:32'),
(228, 16, 239, 6, '2022-04-07 12:30:32', '2022-04-07 12:30:32'),
(229, 0, 239, 7, '2022-04-07 12:30:32', '2022-04-07 12:30:32'),
(230, 0, 239, 8, '2022-04-07 12:30:32', '2022-04-07 12:30:32'),
(231, 1, 240, 5, '2022-04-07 12:31:32', '2022-04-07 12:31:32'),
(232, 15, 240, 6, '2022-04-07 12:31:32', '2022-04-07 12:31:32'),
(233, 0, 240, 7, '2022-04-07 12:31:32', '2022-04-07 12:31:32'),
(234, 0, 240, 8, '2022-04-07 12:31:32', '2022-04-07 12:31:32'),
(235, 4, 241, 5, '2022-04-07 12:32:28', '2022-04-07 12:32:28'),
(236, 53, 241, 6, '2022-04-07 12:32:28', '2022-04-07 12:32:28'),
(237, 0, 241, 7, '2022-04-07 12:32:28', '2022-04-07 12:32:28'),
(238, 0, 241, 8, '2022-04-07 12:32:28', '2022-04-07 12:32:28'),
(239, 0, 242, 5, '2022-04-07 12:33:23', '2022-04-07 12:33:23'),
(240, 25, 242, 6, '2022-04-07 12:33:23', '2022-04-07 12:33:23'),
(241, 0, 242, 7, '2022-04-07 12:33:23', '2022-04-07 12:33:23'),
(242, 0, 242, 8, '2022-04-07 12:33:23', '2022-04-07 12:33:23'),
(243, 2, 243, 5, '2022-04-07 12:34:27', '2022-04-07 12:34:27'),
(244, 22, 243, 6, '2022-04-07 12:34:27', '2022-04-07 12:34:27'),
(245, 0, 243, 7, '2022-04-07 12:34:27', '2022-04-07 12:34:27'),
(246, 0, 243, 8, '2022-04-07 12:34:27', '2022-04-07 12:34:27'),
(247, 0, 244, 5, '2022-04-07 12:35:29', '2022-04-07 12:35:29'),
(248, 6, 244, 6, '2022-04-07 12:35:29', '2022-04-07 12:35:29'),
(249, 0, 244, 7, '2022-04-07 12:35:29', '2022-04-07 12:35:29'),
(250, 0, 244, 8, '2022-04-07 12:35:29', '2022-04-07 12:35:29'),
(251, 5, 245, 5, '2022-04-07 12:36:32', '2022-04-07 12:36:32'),
(252, 6, 245, 6, '2022-04-07 12:36:32', '2022-04-07 12:36:32'),
(253, 0, 245, 7, '2022-04-07 12:36:32', '2022-04-07 12:36:32'),
(254, 0, 245, 8, '2022-04-07 12:36:32', '2022-04-07 12:36:32'),
(255, 6, 246, 5, '2022-04-07 12:42:11', '2022-04-07 12:42:11'),
(256, 0, 246, 6, '2022-04-07 12:42:11', '2022-04-07 12:42:11'),
(257, 0, 246, 7, '2022-04-07 12:42:11', '2022-04-07 12:42:11'),
(258, 0, 246, 8, '2022-04-07 12:42:11', '2022-04-07 12:42:11'),
(259, 8, 247, 5, '2022-04-07 12:43:16', '2022-04-07 12:43:16'),
(260, 2, 247, 6, '2022-04-07 12:43:16', '2022-04-07 12:43:16'),
(261, 0, 247, 7, '2022-04-07 12:43:16', '2022-04-07 12:43:16'),
(262, 0, 247, 8, '2022-04-07 12:43:16', '2022-04-07 12:43:16'),
(263, 5, 248, 5, '2022-04-07 12:44:42', '2022-04-07 12:44:42'),
(264, 1, 248, 6, '2022-04-07 12:44:42', '2022-04-07 12:44:42'),
(265, 0, 248, 7, '2022-04-07 12:44:42', '2022-04-07 12:44:42'),
(266, 0, 248, 8, '2022-04-07 12:44:42', '2022-04-07 12:44:42'),
(267, 4, 249, 5, '2022-04-07 12:45:32', '2022-04-07 12:45:32'),
(268, 0, 249, 6, '2022-04-07 12:45:32', '2022-04-07 12:45:32'),
(269, 0, 249, 7, '2022-04-07 12:45:32', '2022-04-07 12:45:32'),
(270, 0, 249, 8, '2022-04-07 12:45:32', '2022-04-07 12:45:32'),
(271, 5, 250, 5, '2022-04-07 12:46:21', '2022-04-07 12:46:21'),
(272, 0, 250, 6, '2022-04-07 12:46:21', '2022-04-07 12:46:21'),
(273, 0, 250, 7, '2022-04-07 12:46:21', '2022-04-07 12:46:21'),
(274, 0, 250, 8, '2022-04-07 12:46:21', '2022-04-07 12:46:21'),
(275, 7, 251, 5, '2022-04-07 12:57:20', '2022-04-07 12:57:20'),
(276, 7, 251, 6, '2022-04-07 12:57:20', '2022-04-07 12:57:20'),
(277, 0, 251, 7, '2022-04-07 12:57:20', '2022-04-07 12:57:20'),
(278, 0, 251, 8, '2022-04-07 12:57:20', '2022-04-07 12:57:20'),
(279, 19, 252, 5, '2022-04-07 12:58:51', '2022-04-07 12:58:51'),
(280, 2, 252, 6, '2022-04-07 12:58:51', '2022-04-07 12:58:51'),
(281, 0, 252, 7, '2022-04-07 12:58:51', '2022-04-07 12:58:51'),
(282, 0, 252, 8, '2022-04-07 12:58:51', '2022-04-07 12:58:51'),
(283, 10, 253, 5, '2022-04-07 12:59:43', '2022-04-07 12:59:43'),
(284, 2, 253, 6, '2022-04-07 12:59:43', '2022-04-07 12:59:43'),
(285, 0, 253, 7, '2022-04-07 12:59:43', '2022-04-07 12:59:43'),
(286, 0, 253, 8, '2022-04-07 12:59:43', '2022-04-07 12:59:43'),
(287, 11, 254, 5, '2022-04-07 13:00:31', '2022-04-07 13:00:31'),
(288, 0, 254, 6, '2022-04-07 13:00:31', '2022-04-07 13:00:31'),
(289, 0, 254, 7, '2022-04-07 13:00:31', '2022-04-07 13:00:31'),
(290, 0, 254, 8, '2022-04-07 13:00:31', '2022-04-07 13:00:31'),
(291, 14, 255, 5, '2022-04-07 13:01:48', '2022-04-07 13:01:48'),
(292, 2, 255, 6, '2022-04-07 13:01:48', '2022-04-07 13:01:48'),
(293, 0, 255, 7, '2022-04-07 13:01:48', '2022-04-07 13:01:48'),
(294, 0, 255, 8, '2022-04-07 13:01:48', '2022-04-07 13:01:48'),
(295, 12, 256, 5, '2022-04-07 13:02:42', '2022-04-07 13:02:42'),
(296, 0, 256, 6, '2022-04-07 13:02:42', '2022-04-07 13:02:42'),
(297, 0, 256, 7, '2022-04-07 13:02:42', '2022-04-07 13:02:42'),
(298, 0, 256, 8, '2022-04-07 13:02:42', '2022-04-07 13:02:42'),
(299, 7, 257, 5, '2022-04-07 13:03:38', '2022-04-07 13:03:38'),
(300, 2, 257, 6, '2022-04-07 13:03:38', '2022-04-07 13:03:38'),
(301, 0, 257, 7, '2022-04-07 13:03:38', '2022-04-07 13:03:38'),
(302, 0, 257, 8, '2022-04-07 13:03:38', '2022-04-07 13:03:38'),
(303, 5, 258, 5, '2022-04-07 13:04:18', '2022-04-07 13:04:18'),
(304, 0, 258, 6, '2022-04-07 13:04:18', '2022-04-07 13:04:18'),
(305, 0, 258, 7, '2022-04-07 13:04:18', '2022-04-07 13:04:18'),
(306, 0, 258, 8, '2022-04-07 13:04:18', '2022-04-07 13:04:18'),
(307, 10, 259, 5, '2022-04-07 13:05:02', '2022-04-07 13:05:02'),
(308, 1, 259, 6, '2022-04-07 13:05:02', '2022-04-07 13:05:02'),
(309, 0, 259, 7, '2022-04-07 13:05:02', '2022-04-07 13:05:02'),
(310, 0, 259, 8, '2022-04-07 13:05:02', '2022-04-07 13:05:02'),
(311, 4, 260, 5, '2022-04-07 13:17:49', '2022-04-07 13:17:49'),
(312, 0, 260, 6, '2022-04-07 13:17:49', '2022-04-07 13:17:49'),
(313, 0, 260, 7, '2022-04-07 13:17:49', '2022-04-07 13:17:49'),
(314, 0, 260, 8, '2022-04-07 13:17:49', '2022-04-07 13:17:49');

-- --------------------------------------------------------

--
-- Structure de la table `suivi_activites`
--

CREATE TABLE `suivi_activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `niveaur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dater` date NOT NULL,
  `commune_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rapport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projet` int(11) DEFAULT NULL,
  `activite` text COLLATE utf8mb4_unicode_ci,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `suivi_activites`
--

INSERT INTO `suivi_activites` (`id`, `niveaur`, `resultat`, `observation`, `activite_id`, `created_at`, `updated_at`, `dater`, `commune_id`, `rapport`, `projet`, `activite`, `etat`, `video`) VALUES
(3, 'realise', '<p>Cette activité a permis d\'informer les acteurs et autorités locales sur les objectifs&nbsp; et les résultats attendus du projet<br></p>', NULL, 11, '2022-04-20 15:07:35', '2022-04-20 15:07:35', '2022-03-02', 36, '1650467255.docx', 4, NULL, 'prevu', NULL),
(4, 'realise', '<p>Cette activité a permis d\'informer les acteurs et autorités locales sur les objectifs&nbsp; et les résultats attendus du projet<br></p>', NULL, 11, '2022-04-20 15:08:42', '2022-04-20 15:08:42', '2022-03-02', 36, '1650467322.docx', 4, NULL, 'prevu', NULL),
(7, 'realise', '<p>Cette activité a permis d\'informer les acteurs et autorités locales sur les objectifs&nbsp; et les résultats attendus du projet<br></p>', NULL, 11, '2022-04-20 15:18:05', '2022-04-20 15:18:05', '2022-03-02', 36, '1650467885.docx', 4, NULL, 'prevu', NULL),
(8, 'realise', '<p>Cette activité a permis d\'informer les acteurs et autorités locales sur les objectifs&nbsp; et les résultats attendus du projet<br></p>', NULL, 11, '2022-04-20 15:23:54', '2022-04-20 15:23:54', '2022-03-02', 36, '1650468234.docx', 4, NULL, 'prevu', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `projet_id`) VALUES
(1, 'Ibra Ndiaye', 'ibrandiaye@endaecopop.org', NULL, '$2y$10$tiMUFU8andYeeGI7sITD9etkckFRBL.zvMLbnB357h4lUXXYzD6Zi', NULL, '2021-10-21 11:29:59', '2021-10-21 11:29:59', 'admin', NULL),
(2, 'fall demba', 'ibra93_3@live.fr', NULL, '$2y$10$VArxLLvIdNxRq4IlRM/N7upIbRL2lqshfMhrdHwaKRZ6CJ5I5oCU2', NULL, '2022-03-22 11:50:07', '2022-03-22 11:50:07', 'admin', NULL),
(3, 'Ibra Ndiaye', 'astoudieng@endaecopop.org', NULL, '$2y$10$abqcxPf1Jy/rX1zofHRkW.dMW.m4rCbaBNzfNE24jMuoer6fLgg.6', 'hWt3VvFvGKwe9mur8vOY8CL5vOi76OoprOBSV65iRYmVukgZYhYaa93ftSoe', '2022-04-19 15:32:04', '2022-04-19 15:32:04', 'admin', NULL),
(4, 'Abdoulaye Cissé', 'abdoulaye.cisse@endaecopop.org', NULL, '$2y$10$za5DiyCK0sfvwEAsHOPMVeU8HmcPllSpsfpAdVPM4JPclloHScqx.', NULL, '2022-05-04 13:56:53', '2022-05-04 13:56:53', 'admin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `villages`
--

CREATE TABLE `villages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitudev` double NOT NULL,
  `longitudev` double NOT NULL,
  `commune_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villages`
--

INSERT INTO `villages` (`id`, `nomv`, `latitudev`, `longitudev`, `commune_id`, `created_at`, `updated_at`) VALUES
(1, 'Sare Alhadji', 13.714137857931519, -13.643137276933672, 2, '2022-03-23 11:30:06', '2022-03-23 11:30:06'),
(2, 'Pasteur Butler', 12.56311716322457, -12.195201594380947, 3, '2022-04-05 11:48:29', '2022-04-05 12:14:56'),
(3, 'Bembou', 12.829540000000065, -11.877929999999935, 4, '2022-04-05 11:51:14', '2022-04-05 11:51:14'),
(4, 'Mosquée se Saraya', 12.834071257634452, -11.754268142166595, 4, '2022-04-05 11:54:34', '2022-04-05 11:54:34'),
(5, 'Quartier Founsamba de Saraya', 12.835303537070796, -11.756985737150105, 4, '2022-04-05 11:55:54', '2022-04-05 11:55:54'),
(6, 'Quartier Liberté de Saraya', 12.836920764274593, -11.757086563952772, 4, '2022-04-05 11:56:54', '2022-04-05 11:56:54'),
(7, 'Quartier Sékhofara de Saraya', 12.836044157340853, -11.754498200040448, 4, '2022-04-05 12:02:17', '2022-04-05 12:05:13'),
(8, 'Dimboli', 12.466044809078069, -11.995439568515252, 3, '2022-04-05 12:07:20', '2022-04-05 12:07:20'),
(9, 'Dindefelo', 12.381600000000049, -12.324799999999982, 3, '2022-04-05 12:08:05', '2022-04-05 12:08:05'),
(10, 'Bandafassi', 12.538613715978489, -12.310517543912196, 3, '2022-04-05 12:09:30', '2022-04-05 12:09:30'),
(11, 'Tomboronkhoto', 12.799200000000042, -12.289899999999932, 3, '2022-04-05 12:10:16', '2022-04-05 12:10:16');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projet_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `zones`
--

INSERT INTO `zones` (`id`, `projet_id`, `region_id`, `created_at`, `updated_at`) VALUES
(32, 5, 1, '2022-03-31 21:25:44', '2022-03-31 21:25:44'),
(33, 5, 2, '2022-03-31 21:25:44', '2022-03-31 21:25:44'),
(34, 5, 4, '2022-03-31 21:25:44', '2022-03-31 21:25:44'),
(67, 1, 1, '2022-06-09 12:58:36', '2022-06-09 12:58:36'),
(68, 1, 2, '2022-06-09 12:58:36', '2022-06-09 12:58:36'),
(69, 1, 3, '2022-06-09 12:58:36', '2022-06-09 12:58:36'),
(70, 1, 4, '2022-06-09 12:58:36', '2022-06-09 12:58:36'),
(71, 1, 5, '2022-06-09 12:58:36', '2022-06-09 12:58:36'),
(72, 4, 2, '2022-06-09 13:01:12', '2022-06-09 13:01:12'),
(73, 7, 1, '2022-06-09 14:33:14', '2022-06-09 14:33:14'),
(74, 7, 2, '2022-06-09 14:33:14', '2022-06-09 14:33:14'),
(75, 7, 3, '2022-06-09 14:33:15', '2022-06-09 14:33:15'),
(76, 7, 4, '2022-06-09 14:33:15', '2022-06-09 14:33:15'),
(77, 7, 5, '2022-06-09 14:33:15', '2022-06-09 14:33:15'),
(78, 7, 6, '2022-06-09 14:33:15', '2022-06-09 14:33:15'),
(79, 7, 7, '2022-06-09 14:33:15', '2022-06-09 14:33:15'),
(94, 6, 4, '2022-06-10 13:13:23', '2022-06-10 13:13:23'),
(95, 6, 5, '2022-06-10 13:13:23', '2022-06-10 13:13:23'),
(96, 6, 6, '2022-06-10 13:13:23', '2022-06-10 13:13:23'),
(97, 6, 7, '2022-06-10 13:13:23', '2022-06-10 13:13:23'),
(99, 9, 8, '2022-06-13 10:44:54', '2022-06-13 10:44:54'),
(112, 8, 1, '2022-06-13 11:16:29', '2022-06-13 11:16:29'),
(113, 8, 2, '2022-06-13 11:16:29', '2022-06-13 11:16:29'),
(114, 8, 3, '2022-06-13 11:16:29', '2022-06-13 11:16:29'),
(115, 8, 4, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(116, 8, 5, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(117, 8, 6, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(118, 8, 7, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(119, 8, 8, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(120, 8, 9, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(121, 8, 10, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(122, 8, 11, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(123, 8, 12, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(124, 8, 13, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(125, 8, 14, '2022-06-13 11:16:30', '2022-06-13 11:16:30'),
(126, 2, 4, '2022-06-13 16:35:26', '2022-06-13 16:35:26'),
(127, 2, 5, '2022-06-13 16:35:26', '2022-06-13 16:35:26'),
(128, 2, 6, '2022-06-13 16:35:26', '2022-06-13 16:35:26'),
(129, 2, 7, '2022-06-13 16:35:26', '2022-06-13 16:35:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actions_axe_id_foreign` (`axe_id`);

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activites_projet_id_foreign` (`projet_id`);

--
-- Index pour la table `axes`
--
ALTER TABLE `axes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cibles`
--
ALTER TABLE `cibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cibles_indicateur_id_foreign` (`indicateur_id`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communes_departement_id_foreign` (`departement_id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departements_region_id_foreign` (`region_id`);

--
-- Index pour la table `desagreges`
--
ALTER TABLE `desagreges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desagreges_indicateur_id_foreign` (`indicateur_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_suivi_activite_id_foreign` (`suivi_activite_id`);

--
-- Index pour la table `indicateuras`
--
ALTER TABLE `indicateuras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicateuras_action_id_foreign` (`action_id`);

--
-- Index pour la table `indicateurs`
--
ALTER TABLE `indicateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicateurs_projet_id_foreign` (`projet_id`);

--
-- Index pour la table `indicateur_activites`
--
ALTER TABLE `indicateur_activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indicateur_activites_indicateur_id_foreign` (`indicateur_id`),
  ADD KEY `indicateur_activites_activite_id_foreign` (`activite_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projets_pays_id_foreign` (`pays_id`);

--
-- Index pour la table `raports`
--
ALTER TABLE `raports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `raports_projet_id_foreign` (`projet_id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_pays_id_foreign` (`pays_id`);

--
-- Index pour la table `resultatas`
--
ALTER TABLE `resultatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resultatas_indicateura_id_foreign` (`indicateura_id`);

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resultats_indicateur_id_foreign` (`indicateur_id`),
  ADD KEY `resultats_commune_id_foreign` (`commune_id`),
  ADD KEY `resultats_village_id_foreign` (`village_id`);

--
-- Index pour la table `resultat_details`
--
ALTER TABLE `resultat_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resultat_details_resultat_id_foreign` (`resultat_id`),
  ADD KEY `resultat_details_desagrege_id_foreign` (`desagrege_id`);

--
-- Index pour la table `suivi_activites`
--
ALTER TABLE `suivi_activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suivi_activites_activite_id_foreign` (`activite_id`),
  ADD KEY `suivi_activites_commune_id_foreign` (`commune_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_projet_id_foreign` (`projet_id`);

--
-- Index pour la table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `villages_commune_id_foreign` (`commune_id`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zones_projet_id_foreign` (`projet_id`),
  ADD KEY `zones_region_id_foreign` (`region_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `axes`
--
ALTER TABLE `axes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `cibles`
--
ALTER TABLE `cibles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `desagreges`
--
ALTER TABLE `desagreges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `indicateuras`
--
ALTER TABLE `indicateuras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `indicateurs`
--
ALTER TABLE `indicateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `indicateur_activites`
--
ALTER TABLE `indicateur_activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `raports`
--
ALTER TABLE `raports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `resultatas`
--
ALTER TABLE `resultatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT pour la table `resultat_details`
--
ALTER TABLE `resultat_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT pour la table `suivi_activites`
--
ALTER TABLE `suivi_activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `villages`
--
ALTER TABLE `villages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `actions_axe_id_foreign` FOREIGN KEY (`axe_id`) REFERENCES `axes` (`id`);

--
-- Contraintes pour la table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_projet_id_foreign` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id`);

--
-- Contraintes pour la table `cibles`
--
ALTER TABLE `cibles`
  ADD CONSTRAINT `cibles_indicateur_id_foreign` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateurs` (`id`);

--
-- Contraintes pour la table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departements` (`id`);

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `departements_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);

--
-- Contraintes pour la table `desagreges`
--
ALTER TABLE `desagreges`
  ADD CONSTRAINT `desagreges_indicateur_id_foreign` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateurs` (`id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_suivi_activite_id_foreign` FOREIGN KEY (`suivi_activite_id`) REFERENCES `suivi_activites` (`id`);

--
-- Contraintes pour la table `indicateuras`
--
ALTER TABLE `indicateuras`
  ADD CONSTRAINT `indicateuras_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`);

--
-- Contraintes pour la table `indicateur_activites`
--
ALTER TABLE `indicateur_activites`
  ADD CONSTRAINT `indicateur_activites_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`),
  ADD CONSTRAINT `indicateur_activites_indicateur_id_foreign` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateurs` (`id`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_pays_id_foreign` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `raports`
--
ALTER TABLE `raports`
  ADD CONSTRAINT `raports_projet_id_foreign` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id`);

--
-- Contraintes pour la table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_pays_id_foreign` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `resultatas`
--
ALTER TABLE `resultatas`
  ADD CONSTRAINT `resultatas_indicateura_id_foreign` FOREIGN KEY (`indicateura_id`) REFERENCES `indicateuras` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_projet_id_foreign` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
