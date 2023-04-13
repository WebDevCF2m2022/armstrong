-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 11 avr. 2023 à 11:45
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `armstrong`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `name_article` varchar(255) NOT NULL,
  `min_description_article` text NOT NULL,
  `max_description_article` text NOT NULL,
  `sound_article` varchar(255) NOT NULL,
  `nb_click` int(11) DEFAULT NULL,
  `date_article` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_user1_idx` (`user_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `id_artist` int(11) NOT NULL AUTO_INCREMENT,
  `name_artist` varchar(255) NOT NULL,
  `description_artist` text NOT NULL,
  `wiki_artist` text NOT NULL,
  `article_id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_artist`),
  KEY `fk_artist_article1_idx` (`article_id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `description_category` text NOT NULL,
  `name_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category_has_article`
--

DROP TABLE IF EXISTS `category_has_article`;
CREATE TABLE IF NOT EXISTS `category_has_article` (
  `category_id_category` int(11) NOT NULL,
  `article_id_article` int(11) NOT NULL,
  PRIMARY KEY (`category_id_category`,`article_id_article`),
  KEY `fk_category_has_article_article1_idx` (`article_id_article`),
  KEY `fk_category_has_article_category1_idx` (`category_id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name_contact` varchar(255) NOT NULL,
  `mail_contact` varchar(255) NOT NULL,
  `message_contact` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `position` tinyint(1) UNSIGNED NOT NULL COMMENT '1 = photo principal\r\nou 2 ou 3 pour les autres\r\n',
  `article_id_article` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_article1_idx` (`article_id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(255) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `sub_date` date NOT NULL DEFAULT current_timestamp(),
  `permission_user` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `fk_artist_article1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `category_has_article`
--
ALTER TABLE `category_has_article`
  ADD CONSTRAINT `fk_category_has_article_article1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_category_has_article_category1` FOREIGN KEY (`category_id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_article1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
