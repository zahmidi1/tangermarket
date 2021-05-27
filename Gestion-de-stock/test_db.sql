-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 mai 2021 à 10:52
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_db`;
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `name` varchar(40000) NOT NULL,
  `Quantite_max` int(110) NOT NULL,
  `Quantite_min` int(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `catagorie` varchar(200) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `name`, `Quantite_max`, `Quantite_min`, `prix`, `catagorie`, `img`) VALUES
(1, 'Lait UHT entier 1L - JAOUDA', 28, 61, 8, 'Produits laitiers, Å“ufs', 'les images/jawda.jpg'),
(2, 'Lben 450g - CENTRALE', 10, 22, 5, 'Produits laitiers, Å“ufs', 'les images/laban.jpg'),
(3, 'Fromage saint agur 100g\r\n', 5, 14, 13, 'Produits laitiers, Å“ufs', 'les images/saint_agur.jpg'),
(4, 'Oeufs frais gros calibre ', 3, 50, 43, 'Produits laitiers, Å“ufs', 'les images/oeuf.jpg'),
(5, 'Fromage  150g - BRESSE BLEU', 5, 15, 50, 'Produits laitiers, Å“ufs', 'les images/fromage.jpg'),
(6, 'Fromage 300g - PHILADELPHIA ', 7, 9, 48, 'Produits laitiers, Å“ufs', 'les images/tartiner.jpg'),
(46, 'Chips Originals 90g - LAY\'S', 20, 3, 14, 'Biscuits snacking', 'les images/lays.jpg'),
(47, 'Biscuit Eyoo 5 unites x 52g ', 40, 10, 10, 'Biscuits snacking', 'les images/eyoo.jpg'),
(48, 'Cookies King 5 unités x52g', 40, 10, 10, 'Biscuits snacking', 'les images/king.jpg'),
(49, 'Four ITIMAT', 40, 10, 1199, 'Petit Electromenager', 'les images/fran.jpg'),
(50, 'Batteur MOULINEX', 40, 10, 269, 'Petit Electromenager', 'les images/tarap.jpg'),
(51, 'Nettoyeur vapeur SC 3', 40, 10, 1200, 'Petit Electromenager', 'les images/id.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(19, 'zahmidi', '1111', 'korchiimad674@gmail.com'),
(23, 'imad', '1', 'korchiimad674@gmail.com'),
(24, 'zahmidi', '2222', 'korchiimad674@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
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
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
