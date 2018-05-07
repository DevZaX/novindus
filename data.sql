-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 07 mai 2018 à 20:01
-- Version du serveur :  5.5.58-cll
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m6smhtoj_novindus`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbre_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `arts`
--

CREATE TABLE `arts` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilitie` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `arts`
--

INSERT INTO `arts` (`id`, `picture`, `title`, `new_price`, `old_price`, `disponibilitie`, `description`, `titre_id`, `created_at`, `updated_at`) VALUES
(1, 'image/opX1uztvPju4vBCwaxK1qY5m44CskWnd6YE1JcBQ.jpeg', 'Clé mixte Sam 50N-3,2', '5.53', 'no', 1, '<ul>\r\n	<li>\r\n	<p>Ouverture&nbsp;<u>3,2&nbsp;mm</u></p>\r\n	</li>\r\n	<li>\r\n	<p>Longueur&nbsp;<u>97&nbsp;mm</u></p>\r\n	</li>\r\n	<li>\r\n	<p>Finition&nbsp;<u>Polie brillante</u></p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>CLE MIXTE 3,2MM</h3>\r\n\r\n<p>Cl&eacute; mixte forg&eacute;e en acier au chrome vanadium. Oeil coud&eacute; &agrave; 15&deg; pour faciliter la manipulation sur surface plane.Fourche effil&eacute;e, &oelig;il plus fin, acc&egrave;s aux &eacute;crous plus facilement. Oeil avec profil surface drive pour une meilleure prise de l&#39;&eacute;crou.Corps &eacute;largi au centre pour une meilleure prise en main et un plus grand confort.Design &eacute;tudi&eacute; pour diminuer le poids de la cl&eacute; tout en conservant une tr&egrave;s grande r&eacute;sistance.R&eacute;sistance : 1,7 x la norme c&ocirc;t&eacute; &oelig;il et 1,4x la norme c&ocirc;t&eacute; fourche.Epaisseur et largeur c&ocirc;t&eacute; fourche r&eacute;duites pour acc&eacute;der aux &eacute;crous plus facilement.</p>\r\n\r\n<p><strong>Points forts</strong><br />\r\nCl&eacute; mixte extra-fine pour un serrage puissant</p>\r\n\r\n<p><strong>Applications</strong><br />\r\nPermet le serrage d&eacute;serrage des &eacute;crous.</p>\r\n\r\n<p>Caract&eacute;ristiques techniques</p>\r\n\r\n<ul>\r\n	<li>\r\n	<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n				<p>Poids</p>\r\n				</td>\r\n				<td>\r\n				<p>0.01&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Ouverture</p>\r\n				</td>\r\n				<td>\r\n				<p>3,2&nbsp;mm</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Longueur</p>\r\n				</td>\r\n				<td>\r\n				<p>97&nbsp;mm</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Finition</p>\r\n				</td>\r\n				<td>\r\n				<p><br />\r\n				Polie brillante</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n				<p>Poids</p>\r\n				</td>\r\n				<td>\r\n				<p>8&nbsp;g</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>', 1, '2018-04-21 16:13:03', '2018-04-21 23:58:55'),
(2, 'image/8CysTE9tsNq18rCUZCMWDZNl0eVGaj4C3iAomsgy.jpeg', 'Cliquet Facom JL.171', '35', 'no', 1, '<h3>CLIQUET 3/8&#39; A VERROUILLAGE</h3>\r\n\r\n<p>Cliquet 3/8&quot; &eacute;tanche hautes performances &agrave; verrouillage&nbsp;<br />\r\n- Tr&egrave;s grande long&eacute;vit&eacute; quelles que soient les conditions de travail. Sans entretien. Etanche aux poussi&egrave;res industrielles.&nbsp;<br />\r\n- M&eacute;canisme 72 dents pour une reprise &agrave; 5&deg;.&nbsp;<br />\r\n- Verrouillage de s&eacute;curit&eacute; de la douille : pas de perte des douilles dans vos machines.&nbsp;<br />\r\n- Inversion par levier : facile m&ecirc;me main gant&eacute;e. Permet la visualisation du sens de rotation.&nbsp;<br />\r\n- Syst&egrave;me &quot;paume de main&quot;, permet d&#39;appuyer sur la t&ecirc;te du cliquet pendant le (des)serrage sans risque d&#39;inversion accidentelle du sens de rotation.&nbsp;<br />\r\n- T&ecirc;te ultra-compact.&nbsp;<br />\r\n- Poign&eacute;e en &eacute;lastom&egrave;re bi-mati&egrave;re : forte r&eacute;sistance &agrave; l&#39;abrasion et aux solvants d&#39;atelier les plus s&eacute;v&egrave;res : SP95, SP98, gasoil, ac&eacute;tone, liquide de frein, Skydrol, Jet Oil, k&eacute;ros&egrave;ne.&nbsp;<br />\r\n- Trou dans la poign&eacute;e : permet l&#39;accrochage pour le travail en hauteur.</p>\r\n\r\n<p><strong>Documentation</strong></p>\r\n\r\n<p><strong><a href=\"https://media-pim.group-iph.com/medias/products/17/16/8807282671617/technicaldatasheet-fr0.pdf?v=161017125241+0200?attachment=true\"><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"height:100px; width:100px\" /></a></strong></p>', 1, '2018-04-23 11:34:14', '2018-04-23 11:34:14');

-- --------------------------------------------------------

--
-- Structure de la table `bruillons`
--

CREATE TABLE `bruillons` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_bruillon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu_bruillon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title_categorie`, `image_categorie`, `menu_id`, `created_at`, `updated_at`) VALUES
(2, 'OUTILLAGE A MAIN', 'image/CkjidzGaZPSHU1zfiV4HA1pTpFmJdvVOnwyTbVE9.jpeg', 3, '2018-04-20 17:28:30', '2018-04-20 17:28:30'),
(3, 'OUTILLAGE SPECIFIQUE', 'image/5pAtfyLChDiYkOOtZHC5k8gydFgh4qaJvoJSAKg0.jpeg', 3, '2018-04-20 17:30:21', '2018-04-20 17:30:21'),
(4, 'OUTILLAGE ELECTRO PORTATIF', 'image/RtFA2ARmoj6IgSIEFpkjj0VDPeZr5HSJYggFDiLd.jpeg', 3, '2018-04-20 17:31:27', '2018-04-20 17:31:27'),
(5, 'OUTILLAGE DIVERS', 'image/hi0UE7CTb2YAuLdKkZBHblSjmmJnHnMqb1svWWAD.jpeg', 3, '2018-04-20 17:32:50', '2018-04-20 17:32:50'),
(6, 'OUTILLAGE PNEUMATIQUE', 'image/PQTgKZffTl6CZP1dW4D8shCDnQ7M1QGuhXxuXz4r.jpeg', 3, '2018-04-20 17:34:29', '2018-04-20 17:34:29'),
(7, 'MESURE ET CONTRÔLE', 'image/vaJ2jJG11HmF3laoUcl1ZarmMtV6Ggpe38gKuC8A.jpeg', 3, '2018-04-20 17:39:08', '2018-04-20 17:39:08'),
(8, 'LUBRIFIANTS ET ACCESSOIRES', 'image/hdHxroupEdyVeELpiEntDDjFNqtl7X7EK6Uh8dyS.jpeg', 4, '2018-04-20 17:40:22', '2018-04-20 17:40:22'),
(9, 'NETTOYAGE', 'image/tImfYBimuaQCKUTLXlcC17KHITl9SyczadS6Pacg.jpeg', 4, '2018-04-20 17:40:46', '2018-04-20 17:40:46'),
(10, 'PEINTURES ET ACCESSOIRES', 'image/ZGAgOz5mZudNYaub2efJenPzeXzRuVCZDBny3xvD.jpeg', 4, '2018-04-20 17:41:50', '2018-04-20 17:41:50'),
(11, 'ÉLECTRICITÉ ET ÉCLAIRAGE', 'image/cZYgzMfPb2Bzkq4LWdPNepwr0MV04xqOyhOQGqMF.jpeg', 4, '2018-04-20 17:42:41', '2018-04-20 17:42:41'),
(12, 'PINCEAUX ET BROSSES', 'image/Sp1nuqgNkGoAHdrG11YsdNLfx0pGV7bdHwpi77c8.jpeg', 4, '2018-04-20 17:43:39', '2018-04-20 17:43:39'),
(13, 'DIVERS POUR L\'ENTRETIEN', 'image/DbCiyGc64lpBo8TBMURxp6L501st6HoDaMe2SKp3.jpeg', 4, '2018-04-20 17:44:24', '2018-04-20 17:44:24'),
(14, 'COLLES', 'image/HMMbmvOxeD7eI24mwtG6holkwXXOkocrICHQBo2H.jpeg', 5, '2018-04-20 17:45:25', '2018-04-20 17:45:25'),
(15, 'ORGANES DE COMMANDE POUR MACHINES OUTILS', 'image/MSkFNRmRLgQBRRxXQi8GkeeKsprgTi9GAlPkHLTA.png', 5, '2018-04-20 17:45:52', '2018-04-20 17:45:52'),
(16, 'BANDES ET FILMS AUTO ADHÉSIFS', 'image/50LK82YKl9M9hafLIEyKXJ3OBvnM4hoK6RaTLOfu.png', 5, '2018-04-20 17:46:12', '2018-04-20 17:46:12'),
(17, 'QUINCAILLERIE DE BÂTIMENT', 'image/hVx2ug9hY7QZT3rl75e7DsOMsg2X20oKFBOhiU18.png', 5, '2018-04-20 17:47:07', '2018-04-20 17:47:07'),
(18, 'MATÉRIAUX DE FIXATION', 'image/cUIRAKRNbgrw5bj0wtuSZzplyM4RdYOSkqP344ou.png', 5, '2018-04-20 17:48:09', '2018-04-20 17:48:09'),
(19, 'EQUIPEMENTS DE PROTECTION INDIVIDUELLE', 'image/6UID3dmtOKDrP2Ln1eLdtLBuK1H6lHRvsdPkJ3xs.jpeg', 6, '2018-04-20 17:48:47', '2018-04-20 17:48:47'),
(20, 'HYGIÈNE ET ESSUYAGE', 'image/UO9v8J5HAQrZuxbOV5yUmxVqVuWR8depcIRlHDpJ.jpeg', 6, '2018-04-20 17:49:31', '2018-04-20 17:49:31'),
(21, 'ENVIRONNEMENT ET SÉCURITÉ', 'image/3J5yioU4YhUZErzJUeDmd9qogfH0DiqZcnR7IMAw.jpeg', 6, '2018-04-20 17:51:53', '2018-04-20 17:51:53'),
(22, 'MACHINES OUTILS', 'image/fpajNHjzvxXnTPs4mzjnX9IACsaQbdOjrf3GWDUm.jpeg', 7, '2018-04-20 17:52:40', '2018-04-20 17:52:40'),
(23, 'MATÉRIEL/ÉQUIPEMENT DE NETTOYAGE', 'image/kQrwhoM7S85lHz8fjNkPqKNzU7S7oPdVJQ2ll1FF.png', 7, '2018-04-20 17:53:12', '2018-04-20 17:53:12'),
(24, 'MATÉRIAUX DE HISSAGE, DE LEVAGE ET DE TRACTION', 'image/THLHL1a6F8ff5AGPPxpfsMhXwvOy6qpQBFH2UkuE.png', 7, '2018-04-20 17:54:07', '2018-04-20 17:54:07'),
(25, 'MATÉRIAUX POUR TRAVAIL EN HAUTEUR', 'image/tadTx0Hy3lguX6BeFbPw7OO5D5EeFC3EvjfKeWji.png', 7, '2018-04-20 17:54:31', '2018-04-20 17:54:31'),
(26, 'TRANSPORT INTERNE', 'image/gWqXzppcm4fx1sk8ZpKSqbyVRIU4Q9DVbMDM28LR.png', 7, '2018-04-20 17:54:59', '2018-04-20 17:54:59'),
(27, 'GROUPES ÉLECTROGÈNE', 'image/YqnKMCurGnmFWPe9QWWgLn5YQCRsr3Ps4PhzsPJ9.png', 7, '2018-04-20 17:57:34', '2018-04-20 17:57:34'),
(28, 'CHAUFFAGE, VENTILATION ET REFROIDISSEMENT', 'image/h9QEFwHMDKLkOxJr6UmEk18K8Mv0B6lVTTWAw1m3.png', 7, '2018-04-20 17:57:55', '2018-04-20 17:57:55'),
(29, 'CHAUFFAGE, VENTILATION ET REFROIDISSEMENT', 'image/YfIn3GxsI00RBqfbkMaJfn689MoXJUb9qB1DePsM.png', 7, '2018-04-20 17:58:52', '2018-04-20 17:58:52'),
(30, 'PERÇAGE', 'image/sm58Xy2wal78XR9nAwH9o8drRJdDZYAFU2VkvOFZ.png', 8, '2018-04-20 18:01:11', '2018-04-20 18:01:11'),
(31, 'FRAISAGE', 'image/NXvcsfNrk6D6CwcTGozw1HjZsRg4GnnVZjLglVul.jpeg', 8, '2018-04-20 18:02:00', '2018-04-20 18:02:00'),
(32, 'GÉNÉRATEURS DE SOUDAGE ET DE COUPAGE', 'image/GKfzVnB7646LsUgxfX4MlFURdswEmWuKNK5yYWaa.png', 9, '2018-04-20 18:03:00', '2018-04-20 18:03:00'),
(35, 'TECHNIQUE DES ROULEMENTS', 'image/BUVJZh11wtNkoDDkAf6N3h0kviDG524eIEPExQxi.jpeg', 10, '2018-04-21 13:07:26', '2018-04-21 13:07:26'),
(34, 'TUYAUTERIE ET TUBES', 'image/1WTwEvgjIUGFqs5w1BL4KYaxfgE3fWxqvQSujx34.png', 11, '2018-04-20 18:04:33', '2018-04-20 18:04:33');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `tele`, `mail`, `created_at`, `updated_at`) VALUES
(1, '000000000', 'mikdad.kaa@gmail.com', NULL, '2018-05-03 14:51:09');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'OUTILLAGE & MÉTROLOGIE', '2018-04-19 21:33:52', '2018-04-19 21:33:52'),
(4, 'ENTRETIEN ET RÉPARATION', '2018-04-19 21:34:27', '2018-04-19 21:34:27'),
(5, 'FIXATION ET MONTAGE', '2018-04-19 21:34:39', '2018-04-19 21:34:39'),
(6, 'PROTECTION - SÉCURITÉ - HYGIÈNE', '2018-04-19 21:34:47', '2018-04-19 21:34:47'),
(7, 'EQUIPEMENT', '2018-04-19 21:34:56', '2018-04-19 21:34:56'),
(8, 'USINAGE', '2018-04-19 21:35:04', '2018-04-19 21:35:04'),
(9, 'SOUDAGE', '2018-04-19 21:35:12', '2018-04-19 21:35:12'),
(10, 'TRANSMISSION', '2018-04-19 21:35:21', '2018-04-19 21:35:21'),
(11, 'PNEUMATIQUE ET FLUIDITIQUE', '2018-04-19 21:35:29', '2018-04-19 21:35:29');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_09_12_99999_create_visitlogs_table', 1),
(4, '2017_08_07_160635_create_articles_table', 1),
(5, '2017_08_07_161806_create_categories_table', 1),
(6, '2017_08_07_162132_create_page_table', 1),
(7, '2017_08_07_162535_create_bruillons_table', 1),
(8, '2017_08_24_113459_create_users_articles_table', 1),
(9, '2017_09_24_201035_create_pictures_table', 1),
(10, '2018_04_19_214253_create_menus_table', 1),
(11, '2018_04_20_190925_create_sousCategories_table', 1),
(12, '2018_04_21_132056_create_titres_table', 1),
(13, '2018_04_21_151851_create_arts_table', 1),
(14, '2018_04_22_131921_create_pubs_table', 2),
(15, '2018_04_22_155530_create_ps_table', 3),
(16, '2018_04_22_161919_create_p_s_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `index`, `picture`, `created_at`, `updated_at`) VALUES
(1, '1', 'image/L1rQQnZaLQmHt7qbDeB4RfFC4GkVM4CmTEa3jvNC.jpeg', NULL, '2018-04-21 13:37:08'),
(2, '2', 'image/4ba8fced-9b5e-4c80-a786-a71f77bf0ab7.png', NULL, '2018-04-21 13:37:16'),
(3, '3', 'image/0f476a67-f682-4cad-ba5b-76e8b2862aa3.png', NULL, '2018-04-21 13:37:24');

-- --------------------------------------------------------

--
-- Structure de la table `ps`
--

CREATE TABLE `ps` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emplacement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pubs`
--

CREATE TABLE `pubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilitie` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pubs`
--

INSERT INTO `pubs` (`id`, `picture`, `title`, `new_price`, `old_price`, `disponibilitie`, `description`, `created_at`, `updated_at`) VALUES
(1, 'image/309JGYviWd207tzEl2WKQNoGUBCurdOhpJ8PvKMc.jpeg', 'Adhésif d\'emballage Tesa : le spécialiste de la fixation et du montage 04120-00192-00', '2.87', '3.19', 1, '<h3>RUBAN PVC CAOUTCHOUC HAVANE</h3>\r\n\r\n<p>Tesa&reg; 4120 est un adh&eacute;sif d&#39;emballage compos&eacute; d&#39;un support film PVC et d&#39;une masse adh&eacute;sive en caoutchouc naturel. Tesa&reg; 4120 peut &ecirc;tre appliqu&eacute; avec des machines de fermeture manuelles ou automatiques.</p>\r\n\r\n<p><strong>Applications</strong><br />\r\nTesa&reg; 4120 est utilis&eacute; pour la fermeture manuelle de cartons de poids moyens.</p>', '2018-04-22 12:33:44', '2018-04-22 12:33:44'),
(2, 'image/G3ALwwSWjDmV2Bh0ySErP47pf3SITEsOCgXcHsgX.jpeg', 'Adhésif d\'emballage Tesa : le spécialiste de la fixation et du montage 04024-00041-04', '2.50', '3', 1, '<h3>RUBAN POLYPROPYLENE ACRYL TRANSP</h3>\r\n\r\n<p>tesa&reg; 4024 PV2 est constitu&eacute; d&#39;une support PP et d&#39;une masse adh&eacute;sive acrylique sp&eacute;ciale &agrave; fort tack. Son tack excellent garantit une bonne fermeture imm&eacute;diatement apr&egrave;s l&#39;application.<br />\r\n<br />\r\ntesa&reg; 4024 PV2 a &eacute;galement les caract&eacute;ristiques suivantes:<br />\r\n<br />\r\n* d&eacute;roulement sans bruit<br />\r\n* excellente r&eacute;sistance dans le temps<br />\r\n* peut &ecirc;tre utilis&eacute; sur tous les d&eacute;vidoirs manuels et machines classiques.<br />\r\n<br />\r\nLe produit &eacute;tant sans chlore et con&ccedil;u avec des d&eacute;riv&eacute;s d&#39;huile min&eacute;rale seulement le d&eacute;p&ocirc;t par traitement &agrave; chaud respecte l&#39;environnement.<br />\r\n<br />\r\nLe proc&eacute;d&eacute; de recyclage des cartons ne sera pas perturb&eacute; comme le confirment les soci&eacute;t&eacute;s de recyclage et les papeteries les plus renomm&eacute;es.</p>\r\n\r\n<p><strong>Applications</strong><br />\r\nFermeture manuelle et automatique de cartons de poids l&eacute;gers &agrave; moyens.</p>', '2018-04-22 12:41:03', '2018-04-22 12:41:03'),
(3, 'image/rBWbA4vltbD8KmN1W4jDaahJyq2pI6fW3wk2fnj1.jpeg', 'Ruban adhésif de masquage Tesa : le spécialiste de la fixation et du montage 04323-00004-00', '0.56', '0.82', 1, '<h3>RUBAN MASQUAGE SPECIAL CREME</h3>\r\n\r\n<p>tesa&reg; 4323 est un adh&eacute;sif de masquage papier finement cr&ecirc;p&eacute; avec une masse adh&eacute;sive en caoutchouc naturel.</p>\r\n\r\n<p><strong>Applications</strong><br />\r\nLe produit convient &agrave; tout type d&#39;application: masquage, maintien, fermeture, fixation, emballage de biens l&eacute;gers, etc.</p>', '2018-04-22 12:45:40', '2018-04-22 12:45:40'),
(4, 'image/Gm2EV2ClHnU4nsNMKhKCXcWTwHy7FZsg9JKANRj7.jpeg', 'Ruban adhésif antidérapant Tesa : le spécialiste de la fixation et du montage 04863-00000-03', '233.82', '260.80', 1, '<h3>ADHESIF ANTIDERAPANT 50MM 04863</h3>\r\n\r\n<p>tesa&reg; 4863 a un support en caoutchouc silicon&eacute;. Sa surface stri&eacute;e est tr&egrave;s r&eacute;sistante aux surfaces collantes ce qui garantit un effet &quot;anti-glissant&quot; sur les surfaces lisses. Les qualit&eacute; anti d&eacute;rapantes sont amplifi&eacute;es par la surface stri&eacute;e.<br />\r\nLa dur&eacute;e de vie du produit est de 12 mois.</p>\r\n\r\n<p><strong>Applications</strong><br />\r\ntesa&reg; 4863 a &eacute;t&eacute; con&ccedil;u pour les applications de rev&ecirc;tements de cylindres. Dans beaucoup de cas, le rev&ecirc;tement est fait sans retirer le cylindre de la machine.<br />\r\n<br />\r\nLes industries concern&eacute;es sont:<br />\r\n* l&#39;industrie de l&#39;impression<br />\r\n* l&#39;industrie du textile<br />\r\n* les fabricants d&#39;adh&eacute;sifs<br />\r\n* les industries de la transformation, de la d&eacute;coupe et des raccords de fins de bobines</p>', '2018-04-22 12:48:18', '2018-04-22 12:48:18'),
(5, 'image/oFYe5TEF8p7dv5oWJrf6pldGnvDFjcVXavMOG5Ea.jpeg', 'Adhésif d\'emballage Tesa : le spécialiste de la fixation et du montage 04204-00010-00', '1.12', '1.24', 1, '<h3>RUBAN PVC PETIT CONDIT. TRANSPAR</h3>\r\n\r\n<p>tesa&reg; 4204 PV0 est constitu&eacute; d&#39;un support PVC stable enduit d&#39;une masse adh&eacute;sive en caoutchouc naturel. Ce produit peut &ecirc;tre utilis&eacute; sur tous les d&eacute;vidoirs de table. tesa&reg; 4204 PV0 est disponible en transparent et 5 autres couleurs.</p>\r\n\r\n<p><strong>Points forts</strong><br />\r\nCouleurs disponibles: transparent, blanc, bleu, havane, jaune, rouge et vert. tesa&reg; 4204 PV0 est facilement imprimable.</p>\r\n\r\n<p><strong>Applications</strong><br />\r\nFermeture de petites bo&icirc;tes, notamment en m&eacute;tal<br />\r\nUtilis&eacute; sur les comptoirs des boulangeries et des fleuristes<br />\r\nConvient au marquage en raison de la vari&eacute;t&eacute; de couleurs disponibles</p>', '2018-04-22 12:51:01', '2018-04-22 12:51:01');

-- --------------------------------------------------------

--
-- Structure de la table `p_s`
--

CREATE TABLE `p_s` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emplacement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `p_s`
--

INSERT INTO `p_s` (`id`, `title`, `emplacement`, `content`, `created_at`, `updated_at`) VALUES
(1, 'nous contacter', 'contact', '<p>contact</p>', '2018-04-22 15:21:56', '2018-04-22 15:21:56'),
(2, 'livraison rapide', 'livraison', '<p>livraison</p>', '2018-04-22 15:22:41', '2018-04-22 15:22:41'),
(3, 'quit sommes nous', 'propos', '<p>En Janvier 2006, Novindus est cr&eacute;e en tant que centrale d&#39;achats pour r&eacute;pondre aux attentes des industriels Marocains avec un service de proximit&eacute; efficace et de qualit&eacute;, pour diff&eacute;rents produits et services.</p>\r\n\r\n<ul>\r\n	<li>Fournitures industrielle</li>\r\n	<li>Consommables de production</li>\r\n	<li>Equipements et machines sp&eacute;cifiques</li>\r\n	<li>Maintenance Industrielle</li>\r\n</ul>', '2018-04-22 15:24:48', '2018-04-23 12:18:25'),
(4, 'Conseils techniques', 'clients', '<p><a href=\"http://localhost:8000/conseils-techniques\" title=\"Lien\">Conseils techniques</a></p>', '2018-04-22 15:26:37', '2018-04-22 15:26:37'),
(5, 'FAQ', 'pratique', '<ul>\r\n	<li><a href=\"http://localhost:8000/foire-aux-questions\" title=\"Lien\">FAQ</a></li>\r\n</ul>', '2018-04-22 15:27:44', '2018-04-22 15:28:12'),
(6, 'Offres GISS 2018', 'offres', '<ul>\r\n	<li><a href=\"http://localhost:8000/c-offres-catalogue-giss-2018?view=grid\" title=\"Lien\">Offres GISS 2018</a></li>\r\n</ul>', '2018-04-22 15:28:02', '2018-04-22 15:28:02');

-- --------------------------------------------------------

--
-- Structure de la table `souscategories`
--

CREATE TABLE `souscategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

CREATE TABLE `titres` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `title`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Outils de serrage', 2, '2018-04-21 12:43:56', '2018-04-21 12:43:56'),
(8, 'Outillage divers', 5, '2018-04-21 12:55:11', '2018-04-21 12:55:11'),
(7, 'Machines electro portatif', 4, '2018-04-21 12:54:45', '2018-04-21 12:54:45'),
(6, 'Outillage métiers', 3, '2018-04-21 12:51:24', '2018-04-21 12:51:24'),
(9, 'Machines pneumatiques', 6, '2018-04-21 12:55:39', '2018-04-21 12:55:39'),
(10, 'Pieds à coulisse', 7, '2018-04-21 12:56:45', '2018-04-21 12:56:45'),
(11, 'Lubrifiants et accessoires', 8, '2018-04-21 12:57:17', '2018-04-21 12:57:17'),
(12, 'Nettoyage', 9, '2018-04-21 12:57:36', '2018-04-21 12:57:36'),
(13, 'Peintures et accessoires', 10, '2018-04-21 12:58:13', '2018-04-21 12:58:13'),
(14, 'Électricité et éclairage', 11, '2018-04-21 12:58:27', '2018-04-21 12:58:27'),
(15, 'Pinceaux et brosses', 12, '2018-04-21 12:58:40', '2018-04-21 12:58:40'),
(16, 'Divers pour l\'entretien', 13, '2018-04-21 12:58:55', '2018-04-21 12:58:55'),
(17, 'Colles et mastics pour fixation et colmatage', 14, '2018-04-21 12:59:45', '2018-04-21 12:59:45'),
(18, 'Organes de commande pour machines outils', 15, '2018-04-21 13:00:17', '2018-04-21 13:00:17'),
(19, 'Adhésifs', 16, '2018-04-21 13:00:41', '2018-04-21 13:00:41'),
(20, 'Cadenas, verrous, serrures', 17, '2018-04-21 13:00:55', '2018-04-21 13:00:55'),
(21, 'Boulons', 18, '2018-04-21 13:01:11', '2018-04-21 13:01:11'),
(22, 'Protection de la tête', 19, '2018-04-21 13:02:04', '2018-04-21 13:02:04'),
(23, 'Nettoyage', 20, '2018-04-21 13:02:43', '2018-04-21 13:02:43'),
(24, 'Assistance', 21, '2018-04-21 13:02:58', '2018-04-21 13:02:58'),
(25, 'Usinage par enlèvement de copeaux', 22, '2018-04-21 13:03:31', '2018-04-21 13:03:31'),
(26, 'Forets HSS', 30, '2018-04-21 13:05:03', '2018-04-21 13:05:03'),
(27, 'Générateurs MMA', 32, '2018-04-21 13:05:26', '2018-04-21 13:05:26'),
(28, 'Roulements', 35, '2018-04-21 13:08:11', '2018-04-21 13:08:11'),
(29, 'Tuyaux / Tubes', 34, '2018-04-21 13:08:41', '2018-04-21 13:08:41');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `type`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'zakaria_aboud@hotmail.com', '$2y$10$0YAlmFFuUUerOyuIinsT3eAODyAiTElKsw23tiUoj1AazND0Eh7dq', 'kArEkztKvXYaeX66CB9dLCorE3xCvKM2zeg7ldCeB3pajgKMpU3ExzFlzIN4', '2017-08-24 13:16:36', '2017-08-24 13:16:36'),
(2, 'client', 'salma@salma.com', '$2y$10$nEp2i8c4zARKDzWnE0jqqONYESYARrbCX/s15SPJLddtgQJ6pQCXm', 'Tf2Tvkx2fIPvgkbM7HWBsNSpMIJmiwnO2MDBCCSpwyh7KXZZSGYMszbgwZsG', '2017-08-24 14:39:07', '2017-08-24 14:39:07'),
(3, 'client', 'khalilteache@yahoo.com', '$2y$10$hUyFMS/rgLP/7Y0onKE7JusSsqDWD51aZBK/X/dBJhUBvFUyaVgnC', NULL, '2017-08-27 10:56:01', '2017-08-27 10:56:01'),
(4, 'client', 'salma2@salma.com', '$2y$10$ZNSX7EycBkWGaOn2CyGHSesoyPi.sOazqdUUXBMHDAu.joArwd7RO', NULL, '2017-09-05 10:19:27', '2017-09-05 10:19:27'),
(5, 'client', 'solo@solo.com', '$2y$10$JJXQaj7o0T4NIP0jK5Di8u06uLf.VMgHrjyCeFDJtDLTgQB5whC32', NULL, '2017-09-29 10:38:25', '2017-09-29 10:38:25'),
(6, 'admin', 'admin@novindus.ma', '$2y$10$IRuCxGY42O/zahBUhpyt3OJXDF8PH2jBTwyjz7k71Z1jPPIRwfNQW', 'zMPOJIsPLXmJNkG7m1AH1nrGAzRkMeUXDyjieVQ2TmLZL7xr9peWeaOdSfIP', '2018-04-19 20:36:06', '2018-04-19 20:36:06');

-- --------------------------------------------------------

--
-- Structure de la table `users_articles`
--

CREATE TABLE `users_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `visitlogs`
--

CREATE TABLE `visitlogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0.0.0',
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `arts`
--
ALTER TABLE `arts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arts_titre_id_foreign` (`titre_id`);

--
-- Index pour la table `bruillons`
--
ALTER TABLE `bruillons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bruillons_page_id_foreign` (`page_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ps`
--
ALTER TABLE `ps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `p_s`
--
ALTER TABLE `p_s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souscategories`
--
ALTER TABLE `souscategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `souscategories_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titres_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_articles`
--
ALTER TABLE `users_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_articles_user_id_foreign` (`user_id`),
  ADD KEY `users_articles_article_id_foreign` (`article_id`);

--
-- Index pour la table `visitlogs`
--
ALTER TABLE `visitlogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `arts`
--
ALTER TABLE `arts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `bruillons`
--
ALTER TABLE `bruillons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ps`
--
ALTER TABLE `ps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `p_s`
--
ALTER TABLE `p_s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `souscategories`
--
ALTER TABLE `souscategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users_articles`
--
ALTER TABLE `users_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `visitlogs`
--
ALTER TABLE `visitlogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
