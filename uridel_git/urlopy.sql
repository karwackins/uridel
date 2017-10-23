-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 27 Wrz 2013, 15:25
-- Wersja serwera: 5.1.41
-- Wersja PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `urlopy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `delegacje`
--

CREATE TABLE IF NOT EXISTS `delegacje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pracownik` int(11) NOT NULL,
  `cel` text COLLATE utf8_polish_ci NOT NULL,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `sr_lokom` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `delegacje`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `pracownicy`
--

CREATE TABLE IF NOT EXISTS `pracownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie_nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `wydzial` text COLLATE utf8_polish_ci NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie_nazwisko`, `wydzial`, `login`, `stanowisko`) VALUES
(1, 'Damian Karwacki', 'OP-LI', 'd.karwacki', 'p'),
(2, 'Monika Szulakowska', 'OP-LI', 'm.szulakowska', 'd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `urlopy`
--

CREATE TABLE IF NOT EXISTS `urlopy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `id_pracownik` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `urlopy`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `wnioski`
--

CREATE TABLE IF NOT EXISTS `wnioski` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_pracownik` int(10) NOT NULL,
  `data` date NOT NULL,
  `kategoria` text COLLATE utf8_polish_ci NOT NULL,
  `status` text COLLATE utf8_polish_ci NOT NULL,
  `urlop_od` date NOT NULL,
  `urlop_do` date NOT NULL,
  `del_od` date NOT NULL,
  `del_do` date NOT NULL,
  `cel` text COLLATE utf8_polish_ci NOT NULL,
  `sr_lok` text COLLATE utf8_polish_ci NOT NULL,
  `data_del` date NOT NULL,
  `data_dec` date NOT NULL,
  `id_decydujacego` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=31 ;

--
-- Zrzut danych tabeli `wnioski`
--

INSERT INTO `wnioski` (`id`, `id_pracownik`, `data`, `kategoria`, `status`, `urlop_od`, `urlop_do`, `del_od`, `del_do`, `cel`, `sr_lok`, `data_del`, `data_dec`, `id_decydujacego`) VALUES
(30, 1, '2013-09-27', 'Delegacja', 'Zaakceptowano', '0000-00-00', '0000-00-00', '2013-09-27', '2013-09-28', 'czestochowa', 'sam/sÅ‚', '2013-09-27', '2013-09-27', 2),
(29, 1, '2013-09-27', 'Urlop', 'Zaakceptowano', '2013-09-27', '2013-09-28', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '2013-09-27', 2),
(28, 1, '2013-09-27', 'Delegacja', 'Zaakceptowano', '0000-00-00', '0000-00-00', '2013-09-28', '2013-09-29', 'wyjazd do czestochowy', 'pkp II kl', '2013-09-27', '2013-09-27', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
