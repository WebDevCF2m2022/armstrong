-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 12 avr. 2023 à 10:04
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
-- Base de données : `armmock`
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `name_article`, `min_description_article`, `max_description_article`, `sound_article`, `nb_click`, `date_article`, `user_id_user`) VALUES
(12, 'Trompette', 'mini descritpion trompette', 'grosse description\r\ngrosse description\r\ngrosse description\r\ngrosse description\r\ngrosse description\r\ngrosse description\r\ngrosse description\r\ngrosse description', 'son de trompette', NULL, '2023-04-10 11:24:49', 3),
(13, 'Saxophone', 'petite description de saxo', 'grosse description de saxo\r\ngrosse description de saxo\r\ngrosse description de saxo\r\ngrosse description de saxo\r\ngrosse description de saxo\r\ngrosse description de saxo', 'son de saxo', NULL, '2023-04-10 11:24:49', 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`id_artist`, `name_artist`, `description_artist`, `wiki_artist`, `article_id_article`) VALUES
(5, 'armonstron', 'Il joue de la trompette', 'https://fr.wikipedia.org', 12),
(6, 'Bill Clinton', 'Il joue du saxo pas trop mal', 'https://fr.wikipedia.org', 13);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `description_category`, `name_category`) VALUES
(4, 'c\'est la perce elle est conique et on peut rien y faire ', 'perce conique'),
(5, 'c\'est différent de l\'autre oui', 'perce cylindrique'),
(6, 'c\'est entre les 2', 'perce hybride');

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

--
-- Déchargement des données de la table `category_has_article`
--

INSERT INTO `category_has_article` (`category_id_category`, `article_id_article`) VALUES
(4, 12),
(5, 13);

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
  `position` tinyint(1) UNSIGNED NOT NULL COMMENT '1 =principal\r\n2 et 3 c''est les autres',
  `article_id_article` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_article1_idx` (`article_id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `nom`, `url`, `position`, `article_id_article`) VALUES
(1, 'tromp1', 'https://www.radioclassique.fr/wp-content/thumbnails/uploads/2020/09/trompette-tt-width-1200-height-630-fill-0-crop-1-bgcolor-ffffff.jpg', 1, 12),
(2, 'sax1', 'https://images.musicstore.de/images/1280/yanagisawa-a-wo-2-eb-alto-saxophone_1_BLA0003898-000.jpg', 1, 13),
(5, 'tromp2', 'https://img01.ztat.net/article/spp-media-p1/dac12ec18050491abb4b612320e11322/e08c1acfe78848e39746cc709600ebe0.jpg?imwidth=762&filter=packshot', 2, 12);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login_user`, `pwd_user`, `email_user`, `sub_date`, `permission_user`) VALUES
(3, 'toto', '1234', 'toto@mail.com', '2023-04-10', 1),
(4, 'jano', '1234', 'jano@mail.com', '2023-04-10', 0);

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
