-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 21 nov. 2020 à 15:31
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id_achat` int(11) NOT NULL AUTO_INCREMENT,
  `achat_date` date NOT NULL,
  `achat_prix_total` float NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_achat`),
  KEY `achat_client_FK` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id_achat`, `achat_date`, `achat_prix_total`, `id_client`) VALUES
(1, '2020-11-04', 80, 2),
(2, '2020-11-11', 150, 3);

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `adr_num` int(11) NOT NULL,
  `adr_rue` varchar(50) NOT NULL,
  `adr_ville` varchar(50) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `adr_num`, `adr_rue`, `adr_ville`) VALUES
(1, 24, 'azer', 'zartrtytt'),
(2, 12, 'rue berger', 'paris'),
(3, 45, 'avenue de la republique', 'villejuif');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `cat_nom`) VALUES
(1, 'accessoire'),
(2, 'equipement'),
(3, 'entretien'),
(4, 'combinaison');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `client_nom` varchar(50) NOT NULL,
  `client_prenom` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_tel` varchar(50) NOT NULL,
  `client_carte` varchar(50) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `client_adresse_FK` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `client_nom`, `client_prenom`, `client_email`, `client_tel`, `client_carte`, `id_adresse`) VALUES
(1, 'name1', 'fname1', 'mail1', '0254856351', 'card1', 1),
(2, 'name2', 'fname2', 'mail2', '0302135456', 'car2', 2),
(3, 'name3', 'fname3', 'mail3', '0123456789', 'card3', 3);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

DROP TABLE IF EXISTS `contient`;
CREATE TABLE IF NOT EXISTS `contient` (
  `id_prod_produit` int(11) NOT NULL,
  `id_achat_contient` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id_prod_produit`,`id_achat_contient`),
  KEY `contient_achat0_FK` (`id_achat_contient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`id_prod_produit`, `id_achat_contient`, `quantite`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 1, 1),
(3, 2, 1),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(50) NOT NULL,
  `prod_description` varchar(50) NOT NULL,
  `prod_prix` float NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_marque` varchar(50) NOT NULL,
  `prod_image` varchar(1000) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `produit_categorie_FK` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `prod_nom`, `prod_description`, `prod_prix`, `prod_stock`, `prod_marque`, `prod_image`, `id_cat`) VALUES
(1, 'combi1', 'combinaison sport aquatique', 60, 80, 'marque1', 'img', 4),
(2, 'sac étanche', 'sac étanche 12L', 39.99, 180, 'marque2', 'https://static.fnac-static.com/multimedia/Images/FR/MDM/27/2c/a6/10890279/1540-1/tsp20200810171126/Sac-etanche-Helly-Hansen-12-L-Noir.jpg', 1),
(3, 'pantaton de ski', 'pantalon de ski homme ', 39.99, 200, 'marque3', 'https://contents.mediadecathlon.com/p1705475/k$44c205b859e25f0c0e39ab6a3cd070c7/sq/Pantalon+de+snowboard+et+de+ski+homme+SNB+PA+500+vert.jpg', 4),
(4, 'combinaison de ski', 'combinaisonde ski femme', 50, 40, 'marque3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTCKXknc52yLUJj-3QRPCBM0teW7eaTlerIC8SLLH0z8Vrx-u6NZrHhgjXzE8nFUCc-lQP1QPY&usqp=CAc', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_client_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_adresse_FK` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_achat0_FK` FOREIGN KEY (`id_achat_contient`) REFERENCES `achat` (`id_achat`),
  ADD CONSTRAINT `contient_produit_FK` FOREIGN KEY (`id_prod_produit`) REFERENCES `produit` (`id_prod`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_categorie_FK` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
