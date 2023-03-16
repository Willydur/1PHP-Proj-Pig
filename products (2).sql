-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 16 mars 2023 à 08:45
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `panier`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prix` int NOT NULL,
  `synopsis` varchar(255) NOT NULL DEFAULT 'blabla starwars la vie la haut la lune le ciel la terre l''eau céane c''est pas cifique',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`ID`, `img`, `nom`, `prix`, `synopsis`) VALUES
(1, 'creed3.jpg', 'CREED III', 3, 'C\'est l\'histoire de creed'),
(2, 'alibi.jpg', 'ALIBI.COM 2', 15, 'c\'est l\'histoire d\'alibi'),
(3, 'screamVI.jpg', 'SCREAM VI', 15, 'c\'est l\'histoire de scream'),
(5, 'cdm.jpg', 'La Chambre Des Merveilles', 15, 'c\'est l\'histoire de la chambre des merveilles'),
(6, 'crazybear.jpg', 'Crazy Bear', 15, 'c\'est l\'histoire de crazy bear'),
(7, 'dge.jpg', 'De Grandes Espérences', 15, 'c\'est l\'histoire De Grandes Espérences'),
(8, 'visage.jpg', 'Je verrai toujours vos visages', 15, 'c\'est l\'histoire de Je verrai toujours vos visages'),
(9, 'reyes.jpg', 'Los reyes del mundo', 15, 'c\'est l\'histoire de Los reyes del mundo'),
(10, 'hokusai.jpg', 'Hokusai', 15, 'c\'est l\'histoire de Hokusai'),
(11, 'jw.jpg', 'John Wick : Chapitre 4', 15, 'c\'est l\'histoire de John Wick '),
(12, 'mario.jpg', 'Super Mario Bros, le film', 15, 'c\'est l\'histoire de Super Mario Bros'),
(13, 'dalva.jpg', 'Dalva', 15, 'c\'est l\'histoire de Dalva '),
(14, '4th.jpg', 'Brighton 4th', 15, 'c\'est l\'histoire de Brighton');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
