-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Creato il: Set 17, 2023 alle 09:59
-- Versione del server: 8.1.0
-- Versione PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Libri`
--

CREATE TABLE `Libri` (
                         `titolo` varchar(100) NOT NULL,
                         `autore` varchar(50) NOT NULL,
                         `immagine` varchar(256) NOT NULL,
                         `anno` varchar(4) NOT NULL,
                         `link` varchar(256) NOT NULL,
                         `categoria` varchar(50) NOT NULL,
                         `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Riviste`
--

CREATE TABLE `Riviste` (
                           `titolo` varchar(50) NOT NULL,
                           `rivista` varchar(50) NOT NULL,
                           `immagine` varchar(256) NOT NULL,
                           `anno` varchar(4) NOT NULL,
                           `link` varchar(256) NOT NULL,
                           `categoria` varchar(50) NOT NULL,
                           `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utenti`
--

CREATE TABLE `Utenti` (
                          `nome` varchar(50) NOT NULL,
                          `cognome` varchar(50) NOT NULL,
                          `mail` varchar(50) NOT NULL,
                          `username` varchar(50) NOT NULL,
                          `password` varchar(32) NOT NULL,
                          `ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Libri`
--
ALTER TABLE `Libri`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `Riviste`
--
ALTER TABLE `Riviste`
    ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `Utenti`
--
ALTER TABLE `Utenti`
    ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Libri`
--
ALTER TABLE `Libri`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Riviste`
--
ALTER TABLE `Riviste`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Utenti`
--
ALTER TABLE `Utenti`
    MODIFY `ID` int NOT NULL AUTO_INCREMENT;
COMMIT;


INSERT INTO `Libri` ('titolo','autore','immagine','anno','link','categoria') VALUES
('The Metaverse','Matthew Ball','../assets/images/Explore/metaverse2.jpg','2022','https://www.goodreads.com/de/book/show/59064518','Metaverso'),
('Robotics','Neil Wilkins','../assets/images/Explore/RPA.jpg','2019','https://www.goodreads.com/book/show/44768709-robotics?from_search=true&from_srp=true&qid=8Xa1JqoRcS&rank=3','Robotica');

INSERT INTO `Riviste` ('titolo','rivista','immagine','anno','link','categoria') VALUES
('Lera dei Superumani','Wired Italia','../assets/images/riviste/wireditalia.png','2022','https://www.wired.it/article/wired-in-edicola-primavera-super-umani/','AI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
