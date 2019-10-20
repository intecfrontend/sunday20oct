-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 okt 2019 om 15:24
-- Serverversie: 5.6.37
-- PHP-versie: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dborhan1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contacts1`
--

CREATE TABLE IF NOT EXISTS `contacts1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contacts1`
--

INSERT INTO `contacts1` (`id`, `name`, `email`, `psw`, `date`) VALUES
(4, 'Martin', 'fhfkjgkjh@bkbj.com', '653 soldatenstr', '2019-10-16 09:53:04'),
(47, 'ddd', 'dd', '', '0000-00-00 00:00:00'),
(48, 'ddd', 'dd', '', '0000-00-00 00:00:00'),
(49, 'aaaaa', 'aa', '', '0000-00-00 00:00:00'),
(50, 'aaaaa', 'aa', '', '2019-10-20 15:22:55'),
(51, 'za', 'a', '', '2019-10-20 15:23:09');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contacts1`
--
ALTER TABLE `contacts1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contacts1`
--
ALTER TABLE `contacts1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
