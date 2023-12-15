-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 déc. 2023 à 15:18
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
-- Base de données : `exam_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `motos`
--

CREATE TABLE `motos` (
  `id` int(11) NOT NULL,
  `model` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `mark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `motos`
--

INSERT INTO `motos` (`id`, `model`, `type`, `picture`, `mark`) VALUES
(10, '250 EXC 2023', 'Enduro', '657c3cab98facpho_bike_90_re_exc-250-my23-90-right__sall__aepi__v1.png', 'KTM'),
(11, '250F', 'Enduro', '657c3cdfece4dDSC_2046-拷贝-1030x688.jpg', 'BHR '),
(12, '250CC', 'Custom', '657c3d2c852c0cafe-racer-250cc-euro-5.jpg', 'CAFE RACER '),
(13, 'Rebel 250 2020', 'Custom', '657c3d719345eimages (2).jpg', 'Honda'),
(14, 'R 1200 GS 2015', 'Sportive', '657c3fdd3dd6434068064613_b645c8515e.jpg', 'BMW'),
(15, 'GSX-S 1000', 'Roadster', '657c402832154téléchargé (3).jpg', 'Suzuki'),
(17, 'a', 'Enduro', '', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$Bo1x412O3RlzSK3czflUh.HuajunA6s3fWuPLJNRMTUdF.7eQ0lfO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `motos`
--
ALTER TABLE `motos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
