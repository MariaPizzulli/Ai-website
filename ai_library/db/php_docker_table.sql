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
('Robotics','Neil Wilkins','../assets/images/Explore/RPA.jpg','2019','https://www.goodreads.com/book/show/44768709-robotics?from_search=true&from_srp=true&qid=8Xa1JqoRcS&rank=3','Robotica'),
('Atlas of AI','Kate Crawford','../assets/images/Explore/Atlas%20of%20AI.jpg','2021','https://www.goodreads.com/book/show/50131136-atlas-of-ai?from_search=true&from_srp=true&qid=VIggR8uVKp&rank=1','AI'),
('Machine Learning','Samuel Hack','../assets/images/Explore/MLBeginners.jpg','2019','https://www.goodreads.com/book/show/48498566-machine-learning-mathematics?from_search=true&from_srp=true&qid=yiGvxD5l12&rank=1','Machine Learning'),
('Deep Machine','Eric Topol','../assets/images/Explore/medicine3.jpg','2019','https://www.goodreads.com/book/show/40915762-deep-medicine?from_search=true&from_srp=true&qid=DXIcCBMxVo&rank=2','Altri...'),
('The ultimate guide to Chat GPT','Chat GPT','../assets/images/Explore/chat4.jpg','https://www.goodreads.com/book/show/123019127-the-ultimate-guide-to-chat-gpt---understanding-training-and-deploying-a?from_search=true&from_srp=true&qid=xiel8snrZv&rank=6','Altri...'),
('The NFT','Nathan Real','../assets/images/Explore/NFT2.jpg','2022','https://www.goodreads.com/book/show/60142060-the-nft-handbook?from_search=true&from_srp=true&qid=2ENWjgMHQV&rank=9','NFT'),
('Computer Programming and Cyber Security','Zach Codings','../assets/images/Explore/codings.jpg','2021','https://www.goodreads.com/book/show/61729966-computer-programming-and-cybersecurity-for-beginners?ref=nav_sb_ss_3_12','Cyber Security'),
('Life 3.0','Max Tegmark','../assets/images/Explore/Life%203.0.jpg','2017','https://www.goodreads.com/book/show/34272565-life-3-0?ref=nav_sb_ss_1_8','AI'),
('Human compatible','Stuart J. Russell','../assets/images/Explore/HumanCompatible.jpg','2019','https://www.goodreads.com/book/show/44767248-human-compatible?ref=nav_sb_ss_2_9','AI'),
('Thousand Brains','Jeff Hawkins','../assets/images/Explore/brains.jpg','2021','https://www.goodreads.com/book/show/54503521-a-thousand-brains?ref=nav_sb_ss_1_15','Altri...'),
('Machine Learning Q and AI','Sebastian Raschka','../assets/images/Explore/ML.jfif','2023','https://leanpub.com/machine-learning-q-and-ai/','Machine Learning');

INSERT INTO `Riviste` ('titolo','rivista','immagine','anno','link','categoria') VALUES
('Lera dei Superumani','Wired Italia','../assets/images/riviste/wireditalia.png','2022','https://www.wired.it/article/wired-in-edicola-primavera-super-umani/','AI'),
('The First step to Financial freedom','Crypto Magazine','../assets/images/riviste/cryptomagazine.png','2019','https://cryptomagazine.shop/products/crypto-magazine-issue-1','Altri...'),
('Cybersecurity e Geopolitica','Cybersecurity Trends','../assets/images/riviste/cybersecuritytrends.png','2021','https://www.cybertrends.it/sfoglia-la-rivista/','Cyber Security'),
('Top Tech','Focus Italia','../assets/images/riviste/focus.png','2019','https://www.focus.it/mondo-focus/focus-e-speciali/focus/361','AI'),
('IoT (Internet of Things)','Firmware 2.0','../assets/images/riviste/firmware.png','2019','https://it.emcelettronica.com/scarica-gratis-firmware-2-0-00?ref=menu','Altri...'),
('Questa copertina lho fatta io','Il Venerdì','../assets/images/riviste/ilvenerdi.png','2023','https://www.repubblica.it/venerdi/2023/04/21/news/intelligenza_artificiale_midjourney_chatgpt_copertina_venerdi-397066872/news.php','AI'),
('Il Futuro nel Metaverso','Mind','../assets/images/riviste/lescienzemind.png','2022','https://edicola.shop/le-scienze-mind-mente-cervello-il-futuro-nel-metaverso-n-208-aprile-2022-mensile.html','Metaverso'),
('Dove stiamo andando?','PCB Magazine','../assets/images/riviste/pcb.png','2021','https://shop.newbusinessmedia.it/products/pcb-magazine','AI'),
('Intelligenza Artificiale e Imprese','Tecnologia e Innovazione','../assets/images/riviste/tecnologiaeinnovazione.png','2023','https://tinnovamag.com/read-online/','Altri...');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
