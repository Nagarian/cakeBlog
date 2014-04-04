-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 04 Avril 2014 à 09:30
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cakephpdb`
--
CREATE DATABASE IF NOT EXISTS `cakephpdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cakephpdb`;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the post body.', '2014-04-03 15:11:53', NULL),
(2, 'A title once again', 'And the post body follows.', '2014-04-03 15:11:53', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-04-03 15:11:53', NULL),
(4, 'The title', 'This is the post body.', '2014-04-03 15:11:58', NULL),
(5, 'A title once again', 'And the post body follows.', '2014-04-03 15:11:58', NULL),
(6, 'Title strikes back', 'This is really exciting! Not.', '2014-04-03 15:11:58', NULL),
(7, 'The title', 'This is the post body.', '2014-04-03 15:12:12', NULL),
(8, 'A title once again', 'And the post body follows.', '2014-04-03 15:12:12', NULL),
(9, 'Title strikes back', 'This is really exciting! Not.', '2014-04-03 15:12:12', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
