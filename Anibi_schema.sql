-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 31 mars 2023 à 09:11
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `anibi`
--

-- --------------------------------------------------------

--
-- Structure de la table `exposition`
--

DROP TABLE IF EXISTS `exposition`;
CREATE TABLE IF NOT EXISTS `exposition` (
  `id` int(11) NOT NULL,
  `nomExpo` varchar(2000) DEFAULT NULL,
  `tarifAdulte` decimal(6,2) DEFAULT NULL,
  `tarifEnfant` decimal(6,2) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `exposition`
--

INSERT INTO `exposition` (`id`, `nomExpo`, `tarifAdulte`, `tarifEnfant`, `active`) VALUES
(1, 'Exposition permanente', 21.50, 13.70, 1),
(2, 'L\'age d\'or du bronze', 13.50, 4.50, 1),
(3, 'Les relations familiales chez les Ouzbeck du moyen âge', 6.50, 0.00, 1),
(4, 'Tenues vestimentaires des péruviens du milieu du 17e siècle', 13.50, 4.50, 1),
(5, 'La conquête de l\'ouest ougandais', 8.90, 3.30, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `mailU` varchar(150) NOT NULL,
  `mdpU` varchar(50) DEFAULT NULL,
  `pseudoU` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`mailU`, `mdpU`, `pseudoU`) VALUES
('alex.garat@gmail.com', '$1$zvN5hYSQSQDFUIQSdufUQSDFznHF5osT.', '@lex'),
('jj.soueix@gmail.com', '$1$zvN5hYMI$SDFGSDFGJqJSDJF.', 'drskott'),
('mathieu.capliez@gmail.com', 'seSzpoUAQgIl.', 'pich'),
('michel.garay@gmail.com', '$1$zvN5hYMI$VSatLQ6SDFGdsfgznHF5osT.', 'Mitch'),
('nicolas.harispe@gmail.com', '$1$zvNDSFQSdfqsDfQsdfsT.', 'Nico40'),
('test@bts.sio', 'seSzpoUAQgIl.', 'testeur SIO'),
('yann@lechambon.fr', 'sej6dETYl/ea.', 'yann');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `id` int(11) NOT NULL,
  `nbVisiteursAdultes` int(11) DEFAULT NULL,
  `nbVisiteursEnfants` int(11) DEFAULT NULL,
  `dateHeureArrivee` datetime DEFAULT NULL,
  `dateHeureDepart` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`id`, `nbVisiteursAdultes`, `nbVisiteursEnfants`, `dateHeureArrivee`, `dateHeureDepart`) VALUES
(1, 1, 0, '2022-01-31 09:00:00', '2022-01-31 11:14:45'),
(2, 2, 0, '2022-01-31 09:30:00', '2022-01-31 11:24:45'),
(3, 2, 3, '2022-01-31 10:05:00', '2022-01-31 13:04:00'),
(4, 2, 1, '2022-01-31 11:00:00', '2022-01-31 14:12:00'),
(5, 1, 1, '2022-01-31 12:03:00', NULL),
(6, 1, 2, '2022-01-31 13:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `visite_exposition`
--

DROP TABLE IF EXISTS `visite_exposition`;
CREATE TABLE IF NOT EXISTS `visite_exposition` (
  `idVisite` int(11) NOT NULL,
  `idExpo` int(11) NOT NULL,
  PRIMARY KEY (`idVisite`,`idExpo`),
  KEY `idExpo` (`idExpo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visite_exposition`
--

INSERT INTO `visite_exposition` (`idVisite`, `idExpo`) VALUES
(1, 1),
(2, 1),
(3, 1),
(5, 1),
(6, 1),
(1, 2),
(4, 2),
(5, 2),
(1, 3),
(3, 3),
(6, 3),
(1, 4),
(2, 4),
(6, 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `visite_exposition`
--
ALTER TABLE `visite_exposition`
  ADD CONSTRAINT `visite_exposition_ibfk_1` FOREIGN KEY (`idVisite`) REFERENCES `visite` (`id`),
  ADD CONSTRAINT `visite_exposition_ibfk_2` FOREIGN KEY (`idExpo`) REFERENCES `exposition` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
