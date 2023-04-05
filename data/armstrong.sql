-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mer. 05 avr. 2023 à 07:14
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
  `name_article` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `min-description_article` text CHARACTER SET utf8mb4 NOT NULL,
  `max-description_article` text CHARACTER SET utf8mb4 NOT NULL,
  `photo1_article` text CHARACTER SET utf8mb4 NOT NULL,
  `photo2_article` text CHARACTER SET utf8mb4 NOT NULL,
  `photo3_article` text CHARACTER SET utf8mb4 NOT NULL,
  `sound1_article` text CHARACTER SET utf8mb4 NOT NULL,
  `sound2_article` text CHARACTER SET utf8mb4 NOT NULL,
  `sound3_article` text CHARACTER SET utf8mb4 NOT NULL,
  `date_article` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id_category` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_category1_idx` (`category_id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `description_category` text CHARACTER SET utf8mb4 NOT NULL,
  `name_category` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name_contact` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `mail_contact` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `message_contact` text CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `pwd_user` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email_user` text CHARACTER SET utf8mb4 NOT NULL,
  `permission_user` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_category1` FOREIGN KEY (`category_id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
