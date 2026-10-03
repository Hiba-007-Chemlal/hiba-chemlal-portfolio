-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 juin 2026 à 21:30
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cuisine_rose`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `description`, `prix`, `image`) VALUES
(1, 'Réfrigérateur', 'Réfrigérateur moderne avec grande capacité de stockage et économie d\'énergie.', 4999.00, 'refrigerateur.jpg'),
(2, 'Machine à laver', 'Machine à laver automatique avec plusieurs programmes de lavage.', 3499.00, 'machine_laver.jpg'),
(3, 'Four', 'Four électrique multifonction pour une cuisson rapide et homogène.', 2199.00, 'four.jpg'),
(4, 'Lave-vaisselle', 'Lave-vaisselle silencieux avec faible consommation d\'eau.', 2899.00, 'lave_vaisselle.jpg'),
(5, 'Plat', 'Plat de cuisine résistant à la chaleur pour le four.', 99.00, 'plat.jpg'),
(6, 'Thermos', 'Thermos en acier inoxydable pour conserver les boissons chaudes ou froides.', 149.00, 'thermos.jpg'),
(7, 'Poêle', 'Poêle antiadhésive idéale pour une cuisson saine.', 199.00, 'poele.jpg'),
(8, 'Mixeur', 'Mixeur électrique puissant pour préparer jus et smoothies.', 349.00, 'mixeur.jpg'),
(9, 'Couteaux', 'Ensemble de couteaux de cuisine en acier inoxydable.', 249.00, 'couteaux.jpg'),
(10, 'Cuillère', 'Cuillère de cuisine robuste et pratique.', 29.00, 'cuillere.jpg'),
(11, 'tasse', 'tasse bombée en céramique rose pastel, décorée sur le thème de la fraise.', 78.00, 'tasse.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `adresse` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
