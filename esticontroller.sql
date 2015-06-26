-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 10:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esticontroller`
--

-- --------------------------------------------------------

--
-- Table structure for table `estienregistrement`
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
-- Dumping data for table `estienregistrement`
--

INSERT INTO `estienregistrement` (`id`, `estiId`, `iduser`, `type`, `title`, `contenu`, `created`, `active`) VALUES
(1, 'test', 1, 0, 'test datatable', 'yoloylyolyoyloylyoloy', '2015-06-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `estiuser`
--

CREATE TABLE IF NOT EXISTS `estiuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `estiuser`
--

INSERT INTO `estiuser` (`id`, `email`, `password`) VALUES
(1, 'vasax.levy@gmail.com', 'toto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
