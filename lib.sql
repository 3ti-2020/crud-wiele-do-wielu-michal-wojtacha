-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Paź 2020, 13:50
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `lib`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_autor`
--

CREATE TABLE `lib_autor` (
  `id_autor` int(11) NOT NULL,
  `imie` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lib_autor`
--

INSERT INTO `lib_autor` (`id_autor`, `imie`) VALUES
(1, 'Tolkien'),
(2, 'Mickiewicz'),
(3, 'Marcin'),
(4, 'Michał');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_autor_tytul`
--

CREATE TABLE `lib_autor_tytul` (
  `id_autor_tytul` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_tytul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lib_autor_tytul`
--

INSERT INTO `lib_autor_tytul` (`id_autor_tytul`, `id_autor`, `id_tytul`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lib_tytul`
--

CREATE TABLE `lib_tytul` (
  `id_tytul` int(11) NOT NULL,
  `tytul` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lib_tytul`
--

INSERT INTO `lib_tytul` (`id_tytul`, `tytul`) VALUES
(1, 'Hobbit'),
(2, 'Pan Tadeusz'),
(3, 'Jakon');

-- --------------------------------------------------------

--
-- Zastąpiona struktura widoku `widok`
-- (Zobacz poniżej rzeczywisty widok)
--
CREATE TABLE `widok` (
`id_autor_tytul` int(11)
,`imie` varchar(32)
,`tytul` varchar(32)
);

-- --------------------------------------------------------

--
-- Struktura widoku `widok`
--
DROP TABLE IF EXISTS `widok`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `widok`  AS  select `lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`lib_autor`.`imie` AS `imie`,`lib_tytul`.`tytul` AS `tytul` from ((`lib_tytul` join `lib_autor_tytul`) join `lib_autor`) where `lib_autor_tytul`.`id_autor` = `lib_autor`.`id_autor` and `lib_autor_tytul`.`id_tytul` = `lib_tytul`.`id_tytul` ;

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
  ADD PRIMARY KEY (`id_autor_tytul`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `id_tytul` (`id_tytul`);

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
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `lib_autor_tytul`
--
ALTER TABLE `lib_autor_tytul`
  MODIFY `id_autor_tytul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `lib_tytul`
--
ALTER TABLE `lib_tytul`
  MODIFY `id_tytul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
