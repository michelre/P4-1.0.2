-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Juin 2018 à 12:06
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet4`
--

-- --------------------------------------------------------

SET foreign_key_checks = 0;

--
-- Structure de la table `article`
--
DROP TABLE article;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(15) AUTO_INCREMENT NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `content` text NOT NULL,
  `date_creation` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO article(title, content, date_creation) VALUES('Titre 1', 'Contenu 1', NOW());
INSERT INTO article(title, content, date_creation) VALUES('Titre 2', 'Contenu 2', NOW());
INSERT INTO article(title, content, date_creation) VALUES('Titre 3', 'Contenu 3', NOW());

--
-- Structure de la table `comment`
--
DROP TABLE comment;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(15) AUTO_INCREMENT PRIMARY KEY,
  `author` VARCHAR(255) DEFAULT NULL,
  `comment` TEXT DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `article_id` int(15),
  `is_notified` TINYINT(1) DEFAULT 0,
  FOREIGN KEY (article_id) REFERENCES article(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Structure de la table `users`
--
DROP TABLE users;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

SET foreign_key_checks = 1;
--
-- Contenu de la table `users`
--

-- INSERT INTO user(`id`, `username`, `password`) VALUES ('1', 'admin', 'password');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

