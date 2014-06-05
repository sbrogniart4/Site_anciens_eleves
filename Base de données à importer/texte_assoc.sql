-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 05 Juillet 2013 à 11:45
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `texte_assoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE IF NOT EXISTS `accueil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banderole` varchar(100) CHARACTER SET latin1 NOT NULL,
  `titre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `texte` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=2 ;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`id`, `banderole`, `titre`, `texte`) VALUES
(1, 'ACCUEIL', 'L’Association des Anciens Elèves du Lycée Collège Raymond Poincaré', 'L’Association des Anciens Elèves du Lycée-Collège Raymond Poincaré de Bar le Duc (dont l’origine remonte aux origines du Lycée (1859) [le Collège communal Gilles-de Trèves devenu fugitivement Lycée avant de se déplacer ici en 1857] a beaucoup compté dans la vie du Lycée tant par ses présidents de renom (Poincaré, Theuriet) que par ses actions. Il était un lieu d’amitié pour les anciens, mais, surtout un lieu de devoir et de reconnaissance. Servir le Lycée qui leur avait permis de s’élever dans le savoir et la vie. D’où l’origine du prix. Je vais y revenir.');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_piedpage1`
--

CREATE TABLE IF NOT EXISTS `categorie_piedpage1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categorie_piedpage1`
--

INSERT INTO `categorie_piedpage1` (`id`, `nom_categorie`, `titre`, `texte`) VALUES
(1, ' A propos', 'A PROPOS', 'Insérez votre texte ici .'),
(2, ' A propos', 'A PROPOS', 'Insérez votre texte ici .');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_piedpage2`
--

CREATE TABLE IF NOT EXISTS `categorie_piedpage2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(110) NOT NULL,
  `titre` varchar(110) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categorie_piedpage2`
--

INSERT INTO `categorie_piedpage2` (`id`, `nom_categorie`, `titre`, `texte`) VALUES
(1, 'Categorie 2', 'Modifier titre', 'Insérez votre texte ici');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_piedpage3`
--

CREATE TABLE IF NOT EXISTS `categorie_piedpage3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(110) NOT NULL,
  `titre` varchar(110) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categorie_piedpage3`
--

INSERT INTO `categorie_piedpage3` (`id`, `nom_categorie`, `titre`, `texte`) VALUES
(1, 'Categorie 2', 'Categorie 2', 'Insérer texte ici');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banderole` varchar(200) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`id`, `banderole`, `texte`) VALUES
(1, 'CONTACTS', 'Pour nous contacter,envoyez un message à l''adresse mail suivante : exemple@exemple.fr ');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banderole` varchar(200) CHARACTER SET utf8 NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `banderole`, `texte`) VALUES
(1, 'NEWS', 'Voici les news du jour :');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
