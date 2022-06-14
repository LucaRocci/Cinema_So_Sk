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

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `IDfilm` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Length` int(11) NOT NULL,
  `ReleaseYear` year(4) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`IDfilm`, `Title`, `Length`, `ReleaseYear`, `picture`) VALUES
(1, 'The Godfather', 125, 1972, 'https://ibb.co/Zgkq9F4'),
(2, 'Kill bill', 112, 2003, 'https://ibb.co/5GKSd0G'),
(3, 'I sette samurai', 128, 1954, 'https://ibb.co/pwccD64'),
(4, 'Cuore selvaggio', 129, 1990, 'https://ibb.co/nfKryz8'),
(5, 'Guerre stellari', 122, 1977, 'https://ibb.co/NtLyrJ7'),
(6, 'Il signore degli anelli', 143, 2001, 'https://ibb.co/4NM5JDy'),
(7, 'Shining', 115, 1980, 'https://ibb.co/n1Ls8B0'),
(8, 'Psyco', 120, 1960, 'https://ibb.co/k8SVjYQ'),
(9, 'Grand Budapest Hotel', 106, 2014, 'https://ibb.co/fFHNncz'),
(10, 'Jurassic Park', 118, 1993, 'https://ibb.co/kKkbq8K');

-- --------------------------------------------------------

--
-- Struttura della tabella `film_staff`
--

CREATE TABLE `film_staff` (
  `IDfilm` int(11) NOT NULL,
  `IDstaff` int(11) NOT NULL,
  `IDrole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `role`
--

CREATE TABLE `role` (
  `IDrole` int(11) NOT NULL,
  `roleName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `staff`
--

CREATE TABLE `staff` (
  `IDstaff` int(11) NOT NULL,
  `Firstname` varchar(35) NOT NULL,
  `Lastname` varchar(35) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `staff`
--

INSERT INTO `staff` (`IDstaff`, `Firstname`, `Lastname`, `dob`) VALUES
(1, 'Francis', 'Ford Coppola', '1939-04-07'),
(2, 'Quentin', 'Tarantino', '1963-03-27'),
(3, 'Akira', 'Kurosawa', '1910-03-23'),
(4, 'David', 'Lynch', '1946-01-20'),
(5, 'George', 'Lucas', '1944-05-14'),
(6, 'Peter', 'Jackson', '1961-10-31'),
(7, 'Stanley', 'Kubrick', '1928-07-26'),
(8, 'Alfred', 'Hitchcock', '1899-04-29'),
(9, 'Wes', 'Anderson', '1969-05-01'),
(10, 'Steven', 'Spielberg', '1946-12-18');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`IDfilm`);

--
-- Indici per le tabelle `film_staff`
--
ALTER TABLE `film_staff`
  ADD KEY `IDfilm` (`IDfilm`),
  ADD KEY `IDrole` (`IDrole`),
  ADD KEY `IDstaff` (`IDstaff`);

--
-- Indici per le tabelle `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`IDrole`);

--
-- Indici per le tabelle `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`IDstaff`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `film`
--
ALTER TABLE `film`
  MODIFY `IDfilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `staff`
--
ALTER TABLE `staff`
  MODIFY `IDstaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `film_staff`
--
ALTER TABLE `film_staff`
  ADD CONSTRAINT `film_staff_ibfk_1` FOREIGN KEY (`IDfilm`) REFERENCES `film` (`IDfilm`),
  ADD CONSTRAINT `film_staff_ibfk_2` FOREIGN KEY (`IDrole`) REFERENCES `role` (`IDrole`),
  ADD CONSTRAINT `film_staff_ibfk_3` FOREIGN KEY (`IDstaff`) REFERENCES `staff` (`IDstaff`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
