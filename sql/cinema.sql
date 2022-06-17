-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 14, 2022 alle 22:32
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--
DROP DATABASE IF EXISTS cinema;
CREATE DATABASE cinema;
USE cinema;
-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `IDfilm` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Length` int(11) NOT NULL,
  `ReleaseYear` year(4) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`IDfilm`, `Title`, `Length`, `ReleaseYear`, `img`) VALUES
(1, 'The Godfather', 125, 1972, 'https://i.ibb.co/5jfbZSp/The-Godfather.jpg'),
(2, 'Kill bill', 112, 2003, 'https://i.ibb.co/MZBtbvZ/kill-bill.webp'),
(3, 'I sette samurai', 128, 1954, 'https://i.ibb.co/wgVVHZp/Seven-Samurai-poster2.jpg'),
(4, 'Cuore selvaggio', 129, 1990, 'https://i.ibb.co/zbtsgGH/cuore-selvaggio.jpg'),
(5, 'Guerre stellari', 122, 1977, 'https://i.ibb.co/q7RrCcx/guerre-stellari.jpg'),
(6, 'Il signore degli anelli', 143, 2001, 'https://i.ibb.co/s3QMtDS/Poster-film-Compagnia-Anello.webp'),
(7, 'Shining', 115, 1980, 'https://i.ibb.co/VCqWpxN/shining.jpg'),
(8, 'Psyco', 120, 1960, 'https://i.ibb.co/pzL6cCJ/phsyco.jpg'),
(9, 'Grand Budapest Hotel', 106, 2014, 'https://i.ibb.co/YQhdyrF/grand-budapest.jpg'),
(10, 'Jurassic Park', 118, 1993, 'https://i.ibb.co/qBXqmsB/jurassic-park.jpg');

-- --------------------------------------------------------

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`IDfilm`);


--
-- AUTO_INCREMENT per la tabella `film`
--
ALTER TABLE `film`
  MODIFY `IDfilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
