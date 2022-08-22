-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 22, 2022 alle 19:28
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `answer`
--

CREATE TABLE `answer` (
  `numA` double NOT NULL,
  `answerQ` text NOT NULL,
  `quesNum` double NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `answer`
--

INSERT INTO `answer` (`numA`, `answerQ`, `quesNum`, `username`) VALUES
(27, 'Check w3schools', 124, 'Anna'),
(29, 'Check w3schools', 124, 'Annay'),
(30, 'H E L P', 127, 'Annay'),
(31, 'pkojjh', 128, 'Anna'),
(32, '<style>*{color:white;}</style>', 124, 'Letizia Meroi'),
(33, '<a href=\"http://bank.com/transfer.do?acct=MARIA&amount=100000\">Go to this website, it explains very well!</a> ', 126, 'Letizia Meroi'),
(36, '&lt;style&gt;*{color:white;}&lt;/style&gt;', 133, 'letizia.meroi'),
(37, '&lt;a href=&quot;http://bank.com/transfer.do?acct=MARIA&amp;amount=100000&quot;&gt;Go to this website, it explains very well!&lt;/a&gt; ', 133, 'letizia.meroi'),
(39, 'I dont know', 135, 'Aldo');

-- --------------------------------------------------------

--
-- Struttura della tabella `question`
--

CREATE TABLE `question` (
  `number` double NOT NULL,
  `titleQ` text NOT NULL,
  `bodyQ` text NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `question`
--

INSERT INTO `question` (`number`, `titleQ`, `bodyQ`, `username`) VALUES
(124, 'How can I insert my data into a DB?', 'how can I do?', 'letizia.meroi'),
(126, 'How can I know if a website is hackable?', 'how can I do?', 'letizia.meroi'),
(127, 'DB connect two tables', 'help please', 'Annay'),
(128, 'DB connect two tables', 'dv', 'Letizia'),
(131, 'lkjh', 'lkmnjb', 'Anna'),
(133, 'How can I insert my data into a table?', 'Help me please', 'letizia.meroi'),
(135, 'DB connect two tables', 'help please', 'Aldo');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `passwordH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `passwordH`) VALUES
(60, 'Letizia Meroi', 'lmeroi@unibz.it', '52820fbfbfc855183bb04987c6288ecc'),
(62, 'letizia.meroi', 'titti.l.moi23@gmail.com', '$2y$10$qjcAO3afShRR1tMlG5WkQOsXGvkTjjb6Aq./l2RvJEoZBnDN4rkX2'),
(64, 'Lele', 'lele@gmail.com', 'lele34'),
(66, 'Anna', 'anna@gmail.com', 'annaanna23!'),
(67, 'Annay', 'annay@gmail.com', '$2y$10$0rBJwKyRnjNzVMO5l.YHWe1Ne1L/kQCw1hP60NyQYIdyGQJnjXyda'),
(68, 'Letizia', 'letiziameroi@gmail.com', 'letizia'),
(70, 'Aldo', 'aldo@gmail.com', '$2y$10$MRgawu42m/ThDOyp924sUeI..IaI3kHHNBij8wg84WMVQjiPYiZvi');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`numA`);

--
-- Indici per le tabelle `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`number`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `answer`
--
ALTER TABLE `answer`
  MODIFY `numA` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT per la tabella `question`
--
ALTER TABLE `question`
  MODIFY `number` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
