-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 mai 2021 à 22:43
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `web`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(26, 'Roman historique'),
(25, ' Roman'),
(23, 'fiction'),
(24, 'Drame'),
(27, 'Thriller'),
(28, 'Roman Ã  Ã©nigme'),
(29, 'bibliographie');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `sujet` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `idforum` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`idc`, `comment`, `sujet`, `email`, `idforum`, `date`) VALUES
(10, 'oui je confirme', 'mahdi ben omrane', 'mahdibenomrane@yahoo.fr', 42, '2021-05-07 03:24:13'),
(15, '123', 'ahmed ', 'ahmedbenmami567@gmail.com', 31, '2021-05-08 03:04:09'),
(16, 'zeazer', 'salut', 'ahmed.benmami@esprit.tn', 53, '2021-05-08 03:05:41'),
(17, 'salut', 'mahdi ben omrane', 'nathebenmami567@gmail.com', 53, '2021-05-08 03:05:57'),
(18, 'azertyuio', 'Ali', 'ahmed.benmami@esprit.tn', 53, '2021-05-08 03:06:15'),
(20, 'salut', 'Ali', 'sqdqjfoi@gmail.com', 55, '2021-05-08 03:53:14');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `Id` varchar(10) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `tel` bigint(11) NOT NULL,
  `naiss` date NOT NULL,
  `classe` enum('1','2','3','4','5') NOT NULL,
  `sexe` enum('femme','homme','autre') NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`Id`, `Nom`, `Prenom`, `Email`, `tel`, `naiss`, `classe`, `sexe`, `mdp`, `pic`) VALUES
('191JFT4357', 'Ayari', 'Abir', 'abir.ayari@esprit.tn', 55622768, '1999-03-08', '1', 'autre', '191JFT4357', 'pp.jpg'),
('191JMT4534', 'Boussema', 'Ahmed', 'ahmed.boussema@esprit.tn', 25841200, '2000-07-15', '1', 'femme', '123', '123530920_987689491731617_3429270153394338395_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(30) NOT NULL,
  `titre` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `dateS` date NOT NULL,
  `endroit` varchar(50) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`ID`, `reference`, `titre`, `dateS`, `endroit`, `description`, `stock`, `image`, `prix`, `note`) VALUES
(21, '    3878', '    aazz    ', '2021-06-03', ' at', '     aa', 12, '2.jpg', 18, NULL),
(24, '04', 'youssef', '2021-05-20', 'fifa', ' aaa', 13, '8.jpg', 12, NULL),
(31, '132', 'neymar', '2021-05-20', 'ghadard', ' flouss isssar', 11, '9.jpg', 13, NULL),
(32, '66', 'summerboook', '2021-05-29', ' bikoooo', ' aa', 899, '13.jpg', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `idForum` int(11) NOT NULL AUTO_INCREMENT,
  `nomForum` varchar(60) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `typpe` varchar(60) NOT NULL,
  PRIMARY KEY (`idForum`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`idForum`, `nomForum`, `contenu`, `date_creation`, `typpe`) VALUES
(58, 'Mario', 'Autocollants', '2021-05-08 04:42:08', 'Livres'),
(41, 'Ali', 'salutuuuu', '2021-05-06 03:53:22', 'Revisions'),
(43, 'Aziz', 'Nos Ã©toiles contraire', '2021-05-06 04:22:58', 'Livres'),
(44, 'Ali', 'Salut Salut', '2021-05-06 15:43:24', 'Autres'),
(45, 'test', 'sjdfosfd', '2021-05-06 15:47:17', 'Autres'),
(46, 'test', 'sjdfosfd', '2021-05-06 15:47:30', 'Autres'),
(47, 'dzfesq', 'abc', '2021-05-06 21:49:18', 'Autres'),
(52, 'Said', 'Said', '2021-05-08 02:51:08', 'Livres'),
(53, 'Ali', 'salut', '2021-05-08 02:52:01', 'Examens'),
(54, 'Ali', 'Yacine', '2021-05-08 02:53:36', 'Examens'),
(55, 'AZERTYUIOP', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisÃ©e Ã  titre provisoire pour calibrer une mise en page, le texte dÃ©finitif venant remplacer le faux-texte dÃ¨s qu\'il est prÃªt ou que la mise en page est achevÃ©e. GÃ©nÃ©ralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum', '2021-05-08 03:48:50', 'Examens'),
(57, 'Briquet', 'Briquet', '2021-05-08 04:40:57', 'Revisions'),
(59, 'Ali', 'Yacine', '2021-05-08 23:58:10', 'Livres'),
(60, 'boussema', 'Ahmed', '2021-05-09 00:04:57', 'Livres'),
(61, 'try', 'try', '2021-05-09 00:41:04', 'Livres');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(30) NOT NULL,
  `titre` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `dateS` date NOT NULL,
  `nomAuteur` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`ID`, `reference`, `titre`, `dateS`, `nomAuteur`, `categorie`, `description`, `stock`, `image`, `prix`, `note`) VALUES
(3, '  Rf2554', '  Le pelerin  ', '2021-04-06', '  Paulo Coelho', ' Roman', ' Santiago, un jeune berger andalou, part Ã  la recherche d\'un trÃ©sor enfoui au pied des Pyramides.\r\n\r\nLorsqu\'il rencontre l\'Alchimiste dans le dÃ©sert, celui-ci lui apprend Ã  Ã©couter son cÅ“ur, Ã  lire les signes du destin et, par-dessus tout, Ã  aller au bout de son rÃªve.', 10, '1.jpg', 25, NULL),
(4, ' Rf4586', ' Le Demon ', '2021-04-28', ' Paulo Coelho', 'Roman historique', '\"Esther, le Zahir. Elle a tout rempli. Elle est la seule raison pour laquelle je suis en vie. [...] Je dois me reconstruire et, pour la premiÃ¨re fois de toute mon existence, accepter que j\'aime un Ãªtre humain plus que moi-mÃªme.\" ', 9, '2.jpg', 50, NULL),
(5, 'Rf4522', 'Le Zahir', '2021-04-01', 'Paulo Coelho', 'fiction', ' Un Ã©crivain cÃ©lÃ¨bre remet en cause tous les principes qui ont gouvernÃ© sa vie lorsque sa femme disparaÃ®t sans laisser de traces. Au fil dâ€™un pÃ©riple qui le conduira de Paris jusquâ€™en Asie centrale, il traverse la steppe, son dÃ©sert, sa magie et ses lÃ©gendes pour retrouver celle qui donne plus que jamais un sens Ã  sa vie. ', 50, '4.jpg', 40, 5),
(6, 'Rf6548', 'Le PÃ¨lerin de Compostelle', '2021-04-21', 'Paulo Coelho', 'Drame', ' A cette Ã©poque, ma quÃªte spirituelle Ã©tait liÃ©e Ã  lâ€™idÃ©e quâ€™il existait des secrets, des chemins mystÃ©rieuxâ€¦ Je croyais que ce qui est difficile et compliquÃ© mÃ¨ne toujours Ã  la comprÃ©hension du mystÃ¨re et de la vieâ€¦ ', 5, '8.jpg', 40, 0),
(8, 'Rf9586', 'AdultÃ¨re', '2021-04-21', 'Paulo Coelho', 'Roman Ã  Ã©nigme', ' Linda a 31 ans et, aux yeux de tous, une vie parfaite : elle a un mari aimant, des enfants bien Ã©levÃ©s, un mÃ©tier gratifiant de journaliste et habite dans une magnifique propriÃ©tÃ© Ã  GenÃ¨ve', 40, '9.jpg', 20, NULL),
(9, 'Rf12522', 'Aleph', '2021-04-20', 'Paulo Coelho', 'fiction', ' DÃ©cider. Changer. Se rÃ©inventer. Agir. ExpÃ©rimenter. RÃ©ussir. Oser. RÃªver. Gagner. DÃ©couvrir. Exiger. S\'engager.\r\nPenser. Croire. Grandir. Appartenir. S\'Ã©veiller.', 4, '6.jpg', 40, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_livre` int(11) NOT NULL,
  `id_client` varchar(200) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_livre` (`id_livre`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`ID`, `id_livre`, `id_client`, `note`) VALUES
(51, 7, '191JFT4357', 5),
(52, 5, 'DESKTOP-6320O01', 5);

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `Idparticipant` int(200) NOT NULL AUTO_INCREMENT,
  `Idevenement` int(200) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`Idparticipant`)
) ENGINE=MyISAM AUTO_INCREMENT=25841201 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`Idparticipant`, `Idevenement`, `nom`, `prenom`, `email`) VALUES
(555, 3556, 'lio', 'freeze', 'ahmed.boussema@esprit.tn'),
(25841200, 6669999, 'Boussa', 'aa', 'ahmed.boussema@esprit.tn'),
(69, 78, 'az', 'ayari', 'ahmed.boussema@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

DROP TABLE IF EXISTS `reclamations`;
CREATE TABLE IF NOT EXISTS `reclamations` (
  `Sujet` enum('Produit','Site','Service') NOT NULL,
  `Idr` int(11) NOT NULL AUTO_INCREMENT,
  `Id` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`Idr`),
  KEY `rec_fk` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`Sujet`, `Idr`, `Id`, `comment`, `status`) VALUES
('Produit', 24, '191JFT4357', 'qq', 0),
('Service', 25, '191JFT4357', 'aaaaa', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD CONSTRAINT `rec_fk` FOREIGN KEY (`Id`) REFERENCES `etudiants` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
