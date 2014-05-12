-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 12 Mai 2014 à 10:31
-- Version du serveur :  5.5.37-0ubuntu0.14.04.1
-- Version de PHP :  5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cakephpdb`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `schema_migrations`
--

CREATE TABLE IF NOT EXISTS `schema_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `class`, `type`, `created`) VALUES
(1, 'InitMigrations', 'Migrations', '2014-05-09 16:43:13'),
(2, 'ConvertVersionToClassNames', 'Migrations', '2014-05-09 16:43:14'),
(3, 'IncreaseClassNameLength', 'Migrations', '2014-05-09 16:46:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
