-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 feb 2023 om 14:26
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uitleen_registratiesysteem`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `apparaten`
--

CREATE TABLE `apparaten` (
  `id` int(100) NOT NULL,
  `naam` text NOT NULL,
  `merk` text NOT NULL,
  `type` text NOT NULL,
  `uitgeleend` text NOT NULL,
  `categorieën` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `apparaten`
--

INSERT INTO `apparaten` (`id`, `naam`, `merk`, `type`, `uitgeleend`, `categorieën`) VALUES
(26, 'oplaad snoer', 'lenovo', '', 'ingeleverd', 'lader'),
(28, 'laptop', 'lenovo', 'ideapad 5', 'ingeleverd', 'laptop'),
(29, 'ipad', 'appel', 'pro', '', 'ipad'),
(31, 'Eos', 'canon', '250D', '', 'camera');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `apparaten`
--
ALTER TABLE `apparaten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `apparaten`
--
ALTER TABLE `apparaten`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
