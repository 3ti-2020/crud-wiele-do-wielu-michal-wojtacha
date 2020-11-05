-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 05 Lis 2020, 11:23
-- Wersja serwera: 8.0.13-4
-- Wersja PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `iLlI4Mu3Ym`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_autor`
--

CREATE TABLE `lib_autor` (
  `id_autor` int(11) NOT NULL,
  `imie` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `lib_autor`
--

INSERT INTO `lib_autor` (`id_autor`, `imie`) VALUES
(1, 'Tolkien'),
(2, 'Mickiewicz'),
(4, 'Marcin'),
(5, 'Andrzej'),
(6, 'Dariusz'),
(7, 'Miczi'),
(8, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_autor_tytul`
--

CREATE TABLE `lib_autor_tytul` (
  `id_autor_tytul` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_tytul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `lib_autor_tytul`
--

INSERT INTO `lib_autor_tytul` (`id_autor_tytul`, `id_autor`, `id_tytul`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(8, 0, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_tytul`
--

CREATE TABLE `lib_tytul` (
  `id_tytul` int(11) NOT NULL,
  `tytul` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `lib_tytul`
--

INSERT INTO `lib_tytul` (`id_tytul`, `tytul`) VALUES
(1, 'Hobbit'),
(2, 'Pan Tadeusz'),
(3, 'Hobbit'),
(4, 'Jakon'),
(5, 'Ostatnie zyczenie'),
(6, '3ti'),
(7, 'F1'),
(8, '78'),
(9, '78');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lib_autor`
--
ALTER TABLE `lib_autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indeksy dla tabeli `lib_autor_tytul`
--
ALTER TABLE `lib_autor_tytul`
  ADD PRIMARY KEY (`id_autor_tytul`);

--
-- Indeksy dla tabeli `lib_tytul`
--
ALTER TABLE `lib_tytul`
  ADD PRIMARY KEY (`id_tytul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `lib_autor`
--
ALTER TABLE `lib_autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `lib_autor_tytul`
--
ALTER TABLE `lib_autor_tytul`
  MODIFY `id_autor_tytul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `lib_tytul`
--
ALTER TABLE `lib_tytul`
  MODIFY `id_tytul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
