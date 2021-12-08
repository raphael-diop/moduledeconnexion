-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 déc. 2021 à 10:51
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `instrument` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`, `instrument`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin'),
(2, 'joker', 'berbar', 'azerry', 'azer', 'marracas'),
(3, 'carotte', 'victor', 'bertrand', 'aqwzsx', 'flute'),
(4, 'bibi', 'thomas', 'george', 'zebi', 'pipeau'),
(5, 'facholand', 'zemmour', 'lepen', 'incroyable', 'grand remplacement'),
(6, 'olaf', 'hannah', 'pohnert', '1234', 'aucun'),
(7, 'jean', 'albert', 'camus', 'peste', 'mandoline'),
(8, 'zabor', 'thomas', 'gret', 'secret', 'violon'),
(9, 'JeanJeanONE', 'Jean', 'Jean', '12345', 'guinbarde'),
(10, 'jojo', 'johny', 'laguigne', 'qsdf', 'batterie'),
(11, '$_GET(password)', 'martin', 'Paris', 'jaimelabite', 'flute Ã  bite'),
(12, 'raphael-diop', '', '', '', ''),
(13, 'Tahr le bolide', 'Valentino', 'Ross', 'vroum', '600cm3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
