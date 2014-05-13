-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 13 Mai 2014 à 14:47
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
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `ref` varchar(60) DEFAULT 'tutoriel',
  `ref_id` int(4) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `parent_id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL,
  `spam` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `tutoriel_id` (`ref_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `username`, `mail`, `content`, `ref`, `ref_id`, `ip`, `created`, `parent_id`, `user_id`, `spam`) VALUES
(1, 'lala', 'lala@live.fr', 'lolilolo', 'Post', 1, '127.0.0.1', '2014-05-12 10:07:34', 0, 1, 0),
(2, 'lala', 'lol@live..fr', 'prout', 'Post', 1, '127.0.0.1', '2014-05-12 10:12:39', 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `comment_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `comment_count`) VALUES
(1, 'The title', 'This is the post body.', '2014-04-03 15:11:53', NULL, 0),
(2, 'A title once again', 'And the post body follows.', '2014-04-03 15:11:53', NULL, 0),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-04-03 15:11:53', NULL, 0),
(4, 'The title', 'This is the post body.', '2014-04-03 15:11:58', NULL, 0),
(5, 'A title once again', 'And the post body follows.', '2014-04-03 15:11:58', NULL, 0),
(6, 'Title strikes back', 'This is really exciting! Not.', '2014-04-03 15:11:58', NULL, 0),
(7, 'The title', 'This is the post body.', '2014-04-03 15:12:12', NULL, 0),
(8, 'A title once again', 'And the post body follows.', '2014-04-03 15:12:12', NULL, 0),
(9, 'Title strikes back', 'This is really exciting! Not.', '2014-04-03 15:12:12', NULL, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `class`, `type`, `created`) VALUES
(1, 'InitMigrations', 'Migrations', '2014-05-12 11:25:25'),
(2, 'ConvertVersionToClassNames', 'Migrations', '2014-05-12 11:25:25'),
(3, 'IncreaseClassNameLength', 'Migrations', '2014-05-12 11:25:27'),
(4, 'CakeBlogDB', 'app', '2014-05-12 11:25:28');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mail` varchar(150) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `role`, `created`, `modified`) VALUES
(1, 'lala', '5b8752af5434213b76b937b13eb4c4ee1c53ad17', '', 'auteur', '2014-05-12 09:14:59', '2014-05-12 09:14:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
