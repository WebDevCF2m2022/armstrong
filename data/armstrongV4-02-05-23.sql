-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 02 mai 2023 à 08:25
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
-- Base de données : `armstrong-tata`
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
  `wiki_article` varchar(255) NOT NULL,
  `nb_click` int(11) DEFAULT NULL,
  `date_article` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article_user1_idx` (`user_id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `name_article`, `min_description_article`, `max_description_article`, `sound_article`, `wiki_article`, `nb_click`, `date_article`, `user_id_user`) VALUES
(12, 'Trompette', 'Instrument de musique à vent de la famille des cuivres, de perce cylindrique, muni de trois pistons, et qui donne le la dans les orchestres.', 'La trompette est un instrument de musique à vent de la famille des cuivres, de perce cylindrique, muni de trois pistons, et qui donne le la dans les orchestres. Elle est utilisée dans de nombreux styles de musique, notamment le jazz, la musique classique et la musique militaire. La trompette est un instrument phare de la musique populaire, et elle est souvent jouée en soliste ou en orchestre. Parmi les grands musiciens qui ont joué de la trompette, on peut citer Miles Davis, Louis Armstrong, Dizzy Gillespie, Freddie Hubbard, Wynton Marsalis et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Trompette', NULL, '2023-04-17 13:30:19', 3),
(13, 'Clairon', 'Instrument de musique à vent de la famille des cuivres, de perce cylindrique, proche de la trompette mais sans pistons.', 'Le bugle est un instrument de musique à vent de la famille des cuivres, de perce cylindrique, proche de la trompette mais sans pistons. Il est souvent utilisé dans les fanfares et les corps militaires. Le bugle, qui est plus simple que la trompette, est souvent utilisé pour les sonneries militaires et les hymnes nationaux. Parmi les grands musiciens qui ont joué du bugle, on peut citer Louis Armstrong, Clark Terry, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Clairon', NULL, '2023-04-17 13:30:19', 3),
(14, 'Cornet', 'Instrument de musique à vent de la famille des cuivres, de perce cylindrique, semblable à la trompette mais avec une forme plus conique.', 'Le cornet est un instrument de musique à vent de la famille des cuivres, de perce cylindrique, semblable à la trompette mais avec une forme plus conique. Il est souvent utilisé dans les fanfares et les orchestres d\'harmonie. Le cornet est un instrument versatile, capable de produire des sons doux et mélodieux ainsi que des sons puissants et éclatants. Parmi les grands musiciens qui ont joué du cornet, on peut citer Bix Beiderbecke, Ruby Braff, Nat Adderley, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Cornet_%C3%A0_pistons', NULL, '2023-04-17 13:30:19', 4),
(15, 'Flugelhorn', 'Instrument de musique à vent de la famille des cuivres, de perce cylindrique, ressemblant à la trompette mais avec un son plus doux et plus rond.', 'Le flugelhorn est un instrument de musique à vent de la famille des cuivres, de perce cylindrique, ressemblant à la trompette mais avec un son plus doux et plus rond. Il est souvent utilisé dans les orchestres de jazz et les ensembles de musique de chambre. Le flugelhorn est un instrument très expressif, capable de produire des sons chauds et veloutés. Parmi les grands musiciens qui ont joué du flugelhorn, on peut citer Art Farmer, Clark Terry, et bien d\'autres encore.', '', 'https://en.wikipedia.org/wiki/Flugelhorn', NULL, '2023-04-17 13:30:19', 3),
(16, 'Cor d\'harmonie', 'Instrument de musique à vent de la famille des cuivres, de perce conique, utilisé dans les orchestres et les ensembles de musique de chambre.', 'Le cor d\'harmonie est un instrument de musique à vent de la famille des cuivres, de perce conique, utilisé dans les orchestres et les ensembles de musique de chambre. Il est souvent utilisé pour les parties mélodiques et harmoniques. Le cor d\'harmonie est un instrument très versatile, capable de produire des sons doux et mélodieux ainsi que des sons puissants et éclatants. Parmi les grands musiciens qui ont joué du cor d\'harmonie, on peut citer Dennis Brain, Barry Tuckwell, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Cor_d%27harmonie', NULL, '2023-04-17 14:02:51', 3),
(17, 'Tubas', 'Instrument de musique à vent de la famille des cuivres, de perce conique, produisant des sons graves.', 'Le tuba est un instrument de musique à vent de la famille des cuivres, de perce conique, produisant des sons graves. Il est souvent utilisé dans les fanfares et les orchestres d\'harmonie. Le tuba est un instrument très important dans les musiques de fanfare et de brass band. Parmi les grands musiciens qui ont joué du tuba, on peut citer Carol Jantsch, Oystein Baadsvik, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Tuba_(instrument)', NULL, '2023-04-17 14:02:51', 3),
(18, 'Euphonium', 'Instrument de musique à vent de la famille des cuivres, de perce conique, ressemblant au tuba mais plus petit.', 'L\'euphonium est un instrument de musique à vent de la famille des cuivres, de perce conique, ressemblant au tuba mais plus petit. Il est souvent utilisé dans les ensembles de musique de chambre et les orchestres d\'harmonie. L\'euphonium est un instrument très expressif, capable de produire des sons doux et mélodieux ainsi que des sons puissants et éclatants. Parmi les grands musiciens qui ont joué de l\'euphonium, on peut citer David Childs, Steven Mead, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Euphonium', NULL, '2023-04-17 14:02:51', 4),
(19, 'Trombone', 'Instrument de musique à vent de la famille des cuivres, de perce conique, muni d\'un coulisseau.', 'Le trombone est un instrument de musique à vent de la famille des cuivres, de perce conique, muni d\'un coulisseau. Il est souvent utilisé dans les orchestres symphoniques et les ensembles de jazz. Le trombone est un instrument très polyvalent, capable de produire une grande variété de sons et d\'effets. Parmi les grands musiciens qui ont joué du trombone, on peut citer J.J. Johnson, Frank Rosolino, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Trombone_(instrument)', NULL, '2023-04-17 14:02:51', 3),
(20, 'Saxhorn ', 'Instrument de musique à vent de la famille des cuivres, de perce hybride, ressemblant au bugle mais avec des pistons.', 'Le saxhorn est un instrument de musique à vent de la famille des cuivres, de perce hybride, ressemblant au bugle mais avec des pistons. Il est souvent utilisé dans les orchestres d\'harmonie et les fanfares. Le saxhorn est un instrument très expressif, capable de produire des sons doux et mélodieux ainsi que des sons puissants et éclatants. Parmi les grands musiciens qui ont joué du saxhorn, on peut citer Antoine Courtois, Gustave Langenus, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Saxhorn', NULL, '2023-04-17 14:23:52', 3),
(21, 'Ophicléide', 'Instrument de musique à vent de la famille des cuivres, de perce hybride, ressemblant au serpent mais avec des pistons.', 'L\'ophicléide est un instrument de musique à vent de la famille des cuivres, de perce hybride, ressemblant au serpent mais avec des pistons. Il est souvent utilisé dans les ensembles de musique ancienne et les fanfares. L\'ophicléide est un instrument très expressif, capable de produire des sons doux et mélodieux ainsi que des sons puissants et éclatants. Parmi les grands musiciens qui ont joué de l\'ophicléide, on peut citer François Thuillier, Sergio Carolino, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Ophicl%C3%A9ide', NULL, '2023-04-17 14:23:52', 3),
(22, 'Serpent', 'Instrument de musique à vent de la famille des cuivres, de perce hybride, ressemblant au cornet mais avec une forme serpentiforme.', 'Le serpent est un instrument de musique à vent de la famille des cuivres, de perce hybride, ressemblant au cornet mais avec une forme serpentiforme. Il est souvent utilisé dans les ensembles de musique ancienne et les fanfares. Le serpent est un instrument très expressif, capable de produire des sons doux et mélodieux ainsi que des sons puissants et éclatants. Parmi les grands musiciens qui ont joué du serpent, on peut citer Michel Godard, William Dongois, et bien d\'autres encore.', '', 'https://fr.wikipedia.org/wiki/Serpent_(musique)', NULL, '2023-04-17 14:23:52', 4);

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
  `article_id_article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_artist`),
  KEY `fk_artist_article1_idx` (`article_id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`id_artist`, `name_artist`, `description_artist`, `wiki_artist`, `article_id_article`) VALUES
(3, 'Louis Armstrong', 'Louis Armstrong, né le 4 août 1901 à La Nouvelle-Orléans en Louisiane et mort le 6 juillet 1971 à New York, est un musicien de jazz et chanteur afro-américain. Il est également connu sous les surnoms de « Dippermouth », « Satchmo », « Satch » et « Pops »', 'https://fr.wikipedia.org/wiki/Louis_Armstrong', NULL);

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
(1, 'La perce cylindrique est une forme de perce qui a une section constante sur toute sa longueur. Elle est utilisée dans des instruments tels que la trompette, la clarinette et la flûte traversière.', 'Perce cylindrique'),
(2, 'La perce conique est une forme de perce d’un instrument à vent. Elle est de forme conique et permet de produire un son plus doux et plus chaud que la perce cylindrique.', 'Perce conique'),
(3, 'Les cuivres hybrides sont plus rares et sont une combinaison des deux grandes familles de cuivres et produisent donc un son intermédiaire.', 'Perce hybride');

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
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(3, 20),
(3, 21),
(3, 22);

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
  `credit_image_name` varchar(255) NOT NULL,
  `credit_image_link` varchar(255) NOT NULL,
  `article_id_article` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_article1_idx` (`article_id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `nom`, `url`, `position`, `credit_image_name`, `credit_image_link`, `article_id_article`) VALUES
(1, 'trompette1', 'https://cdn.pixabay.com/photo/2019/05/16/23/56/musical-instruments-4208612_960_720.jpg', 1, 'Pixabay', 'https://pixabay.com/fr/photos/instruments-de-musique-trompette-4208612/', 12),
(2, 'trompette2', 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Trumpet.jpg', 2, 'Wikipédia', 'https://commons.wikimedia.org/wiki/File:Trumpet.jpg', 12),
(3, 'trompette3', 'https://cdn.pixabay.com/photo/2020/03/31/13/33/music-4987649_960_720.jpg', 3, 'Pixabay', 'https://pixabay.com/fr/photos/la-musique-trompette-4987649/', 12),
(4, 'clairon1', 'https://cdn.pixabay.com/photo/2013/02/25/15/46/british-86001_960_720.jpg', 1, 'Pixabay', 'https://pixabay.com/fr/photos/britanique-royal-scots-dragoon-86001/', 13),
(5, 'clairon2', 'https://cdn.pixabay.com/photo/2011/08/03/01/44/flugelhorn-8447_960_720.jpg', 2, 'Pixabay', 'https://pixabay.com/fr/photos/bugle-instrument-de-cuivre-klaxon-8447/', 13),
(6, 'clairon3', 'https://cdn.pixabay.com/photo/2016/07/08/15/04/music-1504532_960_720.png', 3, 'Pixabay', 'https://pixabay.com/fr/photos/musique-vent-clairon-1504532/', 13),
(10, 'cornet1', 'https://cdn.pixabay.com/photo/2018/04/05/09/21/brass-3292265_960_720.jpg', 1, 'Pixabay', 'https://pixabay.com/fr/photos/laiton-musique-le-jazz-3292265/', 14),
(11, 'cornet2', 'https://cdn.pixabay.com/photo/2015/01/09/01/16/cornet-593661_960_720.jpg', 2, 'Pixabay', 'https://pixabay.com/fr/photos/cornet-corps-scolaire-jouer-593661/', 14),
(12, 'cornet3', 'https://cdn.pixabay.com/photo/2018/04/05/09/21/orchestra-3292264_960_720.jpg', 3, 'Pixabay', 'https://pixabay.com/fr/photos/orchestre-musique-instrument-cors-3292264/', 14),
(13, 'flugelhorn', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Yamaha_Flugelhorn_YFH-8310Z.jpg/800px-Yamaha_Flugelhorn_YFH-8310Z.jpg?20170302014839', 1, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Yamaha_Flugelhorn_YFH-8310Z.jpg', 15),
(14, 'flugelhorn2', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Fl%C3%BCgelhorn_%28valve_bugle%29_in_B-flat_MET_DP-12679-045.jpg/800px-Fl%C3%BCgelhorn_%28valve_bugle%29_in_B-flat_MET_DP-12679-045.jpg?20170802222745', 2, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Fl%C3%BCgelhorn_%28valve_bugle%29_in_B-flat_MET_DP-12679-045.jpg', 15),
(15, 'cor d\'harmonie1', 'https://cdn.pixabay.com/photo/2014/05/28/15/09/horn-356595_960_720.jpg', 1, 'Pixabay', 'https://pixabay.com/fr/photos/klaxon-cor-fran%c3%a7ais-instrument-356595/', 16),
(16, 'cor d\'harmonie2', 'https://cdn.pixabay.com/photo/2017/08/25/23/25/horn-2681863_960_720.jpg', 2, 'Pixabay', 'https://pixabay.com/fr/photos/corne-cor-fran%c3%a7ais-alexander-2681863/', 16),
(17, 'cor d\'harmonie3', 'https://cdn.pixabay.com/photo/2016/08/03/12/20/music-1566585_960_720.jpg', 3, 'Pixabay', 'https://pixabay.com/fr/photos/la-musique-klaxon-1566585/', 16),
(18, 'tubas1', 'https://cdn.pixabay.com/photo/2015/03/10/18/24/costume-667541_960_720.jpg', 1, 'Pixabay', 'https://pixabay.com/fr/photos/costume-mouvement-tuba-instrument-667541/', 17),
(19, 'tubas2', 'https://cdn.pixabay.com/photo/2016/04/08/11/10/tuba-1315953_960_720.jpg', 2, 'Pixabay', 'https://pixabay.com/fr/photos/tuba-batterie-jazz-session-casser-1315953/', 17),
(20, 'tubas3', 'https://cdn.pixabay.com/photo/2018/03/21/13/09/tuba-3246641_960_720.jpg', 3, 'Pixabay', 'https://pixabay.com/fr/photos/tuba-brass-band-3246641/', 17),
(21, 'euphonium1', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/BC_Euphonium.jpg/800px-BC_Euphonium.jpg?20210312225741', 1, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:BC_Euphonium.jpg', 18),
(22, 'euphonium2', 'https://p1.pxfuel.com/preview/919/785/153/euphonium-brass-instrument-instrument-sheet.jpg', 2, 'Pxfuel', 'https://www.pxfuel.com/en/free-photo-okxoc', 18),
(23, 'euphonium3', 'https://p1.pxfuel.com/preview/117/959/683/euphonium-trombone-brass-music.jpg', 3, 'Pxfuel', 'https://www.pxfuel.com/en/free-photo-odhdx', 18),
(24, 'trombone1', 'https://cdn.pixabay.com/photo/2017/07/31/02/34/music-2556227_960_720.jpg', 1, 'Pixabay', 'https://pixabay.com/fr/photos/la-musique-instruments-de-musique-2556227/', 19),
(25, 'trombone2', 'https://cdn.pixabay.com/photo/2015/02/05/00/54/music-624421_960_720.jpg', 2, 'Pixabay', 'https://pixabay.com/fr/photos/musique-instrument-trompette-m%c3%a9tal-624421/', 19),
(26, 'trombone3', 'https://cdn.pixabay.com/photo/2014/04/05/12/24/musician-316979_960_720.jpg', 3, 'Pixabay', 'https://pixabay.com/fr/photos/musicien-rue-musicien-de-rue-joueur-316979/', 19),
(27, 'saxhorn1', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Saxhorn_%28AM_1998.60.117-6%29.jpg/800px-Saxhorn_%28AM_1998.60.117-6%29.jpg?20180128003858', 1, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Saxhorn_%28AM_1998.60.117-6%29.jpg', 20),
(28, 'saxhorn2', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Bass_saxhorn_MET_DP332580.jpg/432px-Bass_saxhorn_MET_DP332580.jpg?20170712025631', 2, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Bass_saxhorn_MET_DP332580.jpg', 20),
(29, 'saxhorn3', 'https://www.lookandlearn.com/history-images/preview/YM/YM0/YM0504/YM0504723_Alto-Saxhorn-in-B-flat.jpg', 3, 'Look and Learn', 'https://www.lookandlearn.com/history-images/YM0504723/Alto-Saxhorn-in-B-flat', 20),
(30, 'ophicleide1', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Ophicleide_instruments%2C_bass_alto_and_soprano.png/682px-Ophicleide_instruments%2C_bass_alto_and_soprano.png?20220705033456', 1, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Ophicleide_instruments,_bass_alto_and_soprano.png', 21),
(31, 'ophicleide2', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Ophicleide_%28AM_1998.60.100-6%29.jpg/415px-Ophicleide_%28AM_1998.60.100-6%29.jpg?20180104065353', 2, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Ophicleide_%28AM_1998.60.100-6%29.jpg', 21),
(32, 'serpent1', 'https://www.lookandlearn.com/history-images/preview/YR/YR0/YR0351/YR0351163_Serpent.jpg', 1, 'Look and Learn', 'https://www.lookandlearn.com/history-images/YR0351163/Serpent', 22),
(33, 'serpent2', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Serpent_in_C_MET_DP249360.jpg/424px-Serpent_in_C_MET_DP249360.jpg?20170712020442', 2, 'Wikipedia', 'https://commons.wikimedia.org/wiki/File:Serpent_in_C_MET_DP249360.jpg', 22),
(34, 'serpent3', 'https://www.lookandlearn.com/history-images/preview/YR/YR0/YR0305/YR0305521_Serpent.jpg', 3, 'Look and Learn', 'https://www.lookandlearn.com/history-images/YR0305521/Serpent', 22);

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
  `sub_date` text NOT NULL DEFAULT current_timestamp(),
  `permission_user` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login_user`, `pwd_user`, `email_user`, `sub_date`, `permission_user`) VALUES
(3, 'toto', '$2y$10$B7PIpgfXPqAn.4mGEokQC..qYfepLNvEU4Ppg8Lc2G0Bo37iMYz9m', 'toto@mail.com', '2023-04-17', 0),
(4, 'yolo', '$2y$10$j6O3CahEbb2eBEKOpcwxYePMlYneADtnNa0T0LJtCzZeDNSIxeUJi', 'yolo@mail.com', '2023-04-17', 1);

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
  ADD CONSTRAINT `fk_artist_article1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Contraintes pour la table `category_has_article`
--
ALTER TABLE `category_has_article`
  ADD CONSTRAINT `fk_category_has_article_article1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_category_has_article_category1` FOREIGN KEY (`category_id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_article1` FOREIGN KEY (`article_id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
