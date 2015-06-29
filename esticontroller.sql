-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Juin 2015 à 10:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `esticontroller`
--

-- --------------------------------------------------------

--
-- Structure de la table `estienregistrement`
--

CREATE TABLE IF NOT EXISTS `estienregistrement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estiId` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `created` date NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `estienregistrement`
--

INSERT INTO `estienregistrement` (`id`, `estiId`, `iduser`, `type`, `title`, `contenu`, `created`, `active`) VALUES
(1, 'test', 1, 2, 'test datatable', 'yoloylyolyoyloylyoloy', '2015-06-25', 1);

-- --------------------------------------------------------

--
-- Structure de la table `estistat`
--

CREATE TABLE IF NOT EXISTS `estistat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `estiId` varchar(255) NOT NULL,
  `date_pass` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `estistat`
--

INSERT INTO `estistat` (`id`, `userId`, `estiId`, `date_pass`) VALUES
(1, 4, 'test', '2015-06-29'),
(2, 5, 'test', '2015-06-29');

-- --------------------------------------------------------

--
-- Structure de la table `estitime`
--

CREATE TABLE IF NOT EXISTS `estitime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `estiId` varchar(255) NOT NULL,
  `time_connect` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `estiuser`
--

CREATE TABLE IF NOT EXISTS `estiuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `estiuser`
--

INSERT INTO `estiuser` (`id`, `email`, `password`) VALUES
(1, 'vasax.levy@gmail.com', 'toto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
