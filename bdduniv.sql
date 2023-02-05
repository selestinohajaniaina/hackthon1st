-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 fév. 2023 à 09:48
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
-- Base de données :  `bdduniv`
--

-- --------------------------------------------------------

--
-- Structure de la table `edt`
--

DROP TABLE IF EXISTS `edt`;
CREATE TABLE IF NOT EXISTS `edt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiere` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `edt`
--

INSERT INTO `edt` (`id`, `filiere`, `img`) VALUES
(1, 'info', '8.JPG'),
(2, 'info', '9.jpg'),
(3, 'info', '10.jpg'),
(4, 'info', '11.jpg'),
(5, 'Gestion', '6.jpg'),
(6, 'Gestion', '7.jpg'),
(7, 'BTP', '1.jpg'),
(8, 'BTP', '2.jpg'),
(9, 'BTP', '3.jpg'),
(10, 'BTP', '12.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_mat` varchar(20) NOT NULL,
  `legend` varchar(1000) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `num_mat`, `legend`, `img`) VALUES
(1, '36521', 'Reunion des etudiants', ''),
(2, '36521', 'La rentre universitaire', '1.jpg'),
(3, '36521', 'Remis de livre', NULL),
(4, '36521', 'Preparation des examens', '2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

DROP TABLE IF EXISTS `fichier`;
CREATE TABLE IF NOT EXISTS `fichier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_mat` varchar(100) NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `legend` varchar(100) DEFAULT NULL,
  `fileName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id`, `num_mat`, `filiere`, `legend`, `fileName`) VALUES
(1, '0123', 'info', 'exercice', 'JS IFT INFO 20.pdf'),
(2, '0123', 'info', 'examen', 'Get.js'),
(3, '0123', 'info', 'qcm', 'cours introduction a html 5.pdf'),
(4, '0123', 'info', '', 'Random.js'),
(5, '0123', 'info', 'lecon', 'COURS L2 IFT HTML CSS JS 2021.pptx'),
(6, '0123', 'info', 'nodeJs', 'node-js-fr.pdf'),
(7, '0123', 'info', 'Css', 'style.css'),
(8, '0123', 'info', 'Fichier ', 'readme.md');

-- --------------------------------------------------------

--
-- Structure de la table `infoetu`
--

DROP TABLE IF EXISTS `infoetu`;
CREATE TABLE IF NOT EXISTS `infoetu` (
  `num_mat` varchar(15) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`num_mat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infoetu`
--

INSERT INTO `infoetu` (`num_mat`, `nom`, `prenom`, `filiere`, `photo`, `pass`) VALUES
('0123', 'HAJANIAINA', 'Selestino', 'info', 'user.png', '123'),
('1234', 'MAMY', 'sille', 'info', 'sary.jpg', '123'),
('0258', 'OLI', 'oli', 'info', 'icon (8).png', '123'),
('78956', 'SOLO', 'solo', 'info', 'icon.jpg', '789'),
('4562', 'RICA', 'selse', 'info', 'icon (2).jpg', '123'),
('741', 'LOLO', 'lolo', 'info', 'icon (1).png', '789'),
('1236', 'SELESTINO', 'selestino', 'Gestion', 'icon (16).png', '456'),
('9632', 'OLIVIER', 'olivier', 'BTP', 'icon (10).png', 'azer'),
('4120', 'RICA', 'rica', 'BTP', 'icon (17).png', '456'),
('6542', 'SISY', 'sisy', 'Gestion', 'youtube.ico', '456'),
('36520', 'RIRY', 'riry', 'BTP', 'icon (8).png', '852'),
('1235679', 'SYLVIE', 'MIMI', 'info', 'images (1).jpg', 'MIMI'),
('47883', 'BERT', 'Bertrant', 'info', 'icon (8).png', '321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
