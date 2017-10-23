-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Paź 2017, 11:16
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urlopy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `delegacje`
--

CREATE TABLE IF NOT EXISTS `delegacje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cel` text COLLATE utf8_polish_ci NOT NULL,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `sr_lokom` text COLLATE utf8_polish_ci NOT NULL,
  `miejsce` text COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` text COLLATE utf8_polish_ci NOT NULL,
  `pracownik` text COLLATE utf8_polish_ci NOT NULL,
  `jed_org` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `status` text COLLATE utf8_polish_ci NOT NULL,
  `uwagi` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3999 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `historia`
--

CREATE TABLE IF NOT EXISTS `historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `Pracownik` text NOT NULL,
  `id_del` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=285 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE IF NOT EXISTS `pracownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie_nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wydzial` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `pass` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `decydujacy` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=236 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `urlopy`
--

CREATE TABLE IF NOT EXISTS `urlopy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `id_pracownik` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wnioski`
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
  `imie_nazw_dziecka` text COLLATE utf8_polish_ci NOT NULL,
  `data_ur_dziecka` date NOT NULL,
  `zastepstwo` text COLLATE utf8_polish_ci NOT NULL,
  `opieka_od` date NOT NULL,
  `opieka_do` date NOT NULL,
  `urlop_rodzaj` text COLLATE utf8_polish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1103 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
