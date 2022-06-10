-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 25, 2022 alle 18:22
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
  `Plot` text NOT NULL,
  `Length` int(11) NOT NULL,
  `ReleaseYear` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `IDfilm` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `film` (`IDfilm`, `Title`, `Plot`, `Length`, `ReleaseYear`) VALUES (NULL, 'La ricerca della felicità', 'Nel 1981 a San Francisco, Chris Gardner cerca di sbarcare il lunario vendendo una partita di scanner per rilevare la densità ossea, acquistata con i risparmi di una vita. Le vendite tuttavia scarseggiano: molti medici e ospedali ritengono il macchinario eccessivamente costoso e, tutto sommato, inutile. La situazione economica si fa sempre più disperata per Chris e la sua famiglia, composta dalla moglie Linda e dal figlio Christopher.\r\n\r\nUn giorno Chris vede un broker arrivare al posto di lavoro con la sua Ferrari e gli chiede a bruciapelo, ironicamente: \"Due domande: che lavoro fa, e come si fa?\". Decide quindi di provare a diventare anche lui broker per la stessa azienda, la Dean Witter.\r\n\r\nLa moglie, esasperata dalle promesse non mantenute dal marito e delle condizioni di vita a cui sono arrivati, soprattutto, stanca di sentir parlare il marito di progetti irrealizzabili, lo lascia.\r\n\r\nChris entra come stagista alla Dean Witter e per essere assunto deve prima studiare e lavorare molto: deve affrontare un corso non pagato della durata di sei mesi, alla fine del quale solo un aspirante broker dei venti partecipanti verrà assunto. Compito degli stagisti è contattare quanti più clienti possibile e \"chiudere\" il maggior numero di contratti.\r\n\r\nChris viene buttato fuori da casa perché non è più in grado di fornire i soldi al proprietario; allo stesso modo, gli viene confiscata l\'automobile per una serie di multe non pagate. Si trasferisce in un motel poco costoso, ma il proprietario dopo settimane di inutili richieste di pagamento gli farà trovare la serratura cambiata e i suoi averi fuori dalla porta. Chris non si perde d\'animo, continua imperterrito a cercare ogni giorno assieme a Christopher i soldi per mangiare e dormire, passando molte notti nei dormitori per senzatetto e addirittura nel bagno della metropolitana.\r\n\r\nSi divide tra la vendita degli ultimi scanner rimasti, il lavoro in azienda e la occupazione del figlio, che crede fermamente in lui nonostante la situazione complicata. Alla fine del corso semestrale, gli è comunicato che è proprio lui il candidato scelto per l\'assunzione. La sua gioia sarà incontenibile e potrà tornare ad avere una casa e una vita dignitosa.', '117', '2007-01-12')
--
-- AUTO_INCREMENT per la tabella `staff`
--
ALTER TABLE `staff`
  MODIFY `IDstaff` int(11) NOT NULL AUTO_INCREMENT;

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