-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: 172.16.10.3
-- Generato il: Ott 21, 2013 alle 11:20
-- Versione del server: 5.5.23-log
-- Versione PHP: 5.3.2-1ubuntu4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dms_categoria`
--

CREATE TABLE IF NOT EXISTS `dms_categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `dms_documento`
--

CREATE TABLE IF NOT EXISTS `dms_documento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `idcategoria` int(10) unsigned NOT NULL,
  `descrizione` text NOT NULL,
  `contenuto` longblob NOT NULL,
  `modificato` date NOT NULL,
  `content_type` varchar(45) NOT NULL DEFAULT 'application/pdf',
  `filename` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `ricerca_fulltext` (`descrizione`,`nome`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
