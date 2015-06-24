-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jun 2015 um 18:12
-- Server Version: 5.5.27
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `hexatriad`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `CardID` int(11) NOT NULL,
  `CardName` text NOT NULL,
  `CardDescription` text NOT NULL,
  `CardTop` int(11) NOT NULL,
  `CardRight` int(11) NOT NULL,
  `CardBot` int(11) NOT NULL,
  `CardLeft` int(11) NOT NULL,
  `CardType` int(11) NOT NULL,
  `CardEffect` int(11) NOT NULL,
  `CardRarity` int(11) NOT NULL,
  PRIMARY KEY (`CardID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `card`
--

INSERT INTO `card` (`CardID`, `CardName`, `CardDescription`, `CardTop`, `CardRight`, `CardBot`, `CardLeft`, `CardType`, `CardEffect`, `CardRarity`) VALUES
(0, '', '', 0, 0, 0, 0, 0, 0, 0),
(1, 'Sona', '', 4, 5, 6, 6, 0, 0, 1),
(2, 'Prince Omlette', '', 2, 6, 4, 5, 0, 1, 2),
(3, 'Enton', 'Forgets everthing within seconds.', 8, 6, 5, 7, 0, 2, 2),
(4, 'Luma', '', 4, 4, 4, 4, 0, 0, 0),
(5, 'Dick & Pickle', '', 6, 5, 5, 3, 0, 3, 2),
(6, 'Zerg', 'Zerg Rush? Zerg Rush!', 1, 1, 1, 1, 0, 5, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deck`
--

CREATE TABLE IF NOT EXISTS `deck` (
  `DeckID` int(11) NOT NULL,
  `DeckName` text NOT NULL,
  `DeckUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `deck`
--

INSERT INTO `deck` (`DeckID`, `DeckName`, `DeckUser`) VALUES
(0, 'Random Cards', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deckcards`
--

CREATE TABLE IF NOT EXISTS `deckcards` (
  `DeckID` int(11) NOT NULL,
  `CardID` int(11) NOT NULL,
  PRIMARY KEY (`DeckID`,`CardID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `effect`
--

CREATE TABLE IF NOT EXISTS `effect` (
  `EffectID` int(11) NOT NULL,
  `EffectName` text NOT NULL,
  `EffectDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `effect`
--

INSERT INTO `effect` (`EffectID`, `EffectName`, `EffectDescription`) VALUES
(0, 'None', ''),
(1, 'Draw 1', 'Draw a card.'),
(2, 'Amnesia 1', 'Lose one random card in your hand.'),
(3, 'Buff Adjacent 1', 'Buff adjacent cards for 1/1/1/1.'),
(4, 'Rush', 'Doesn''t end the turn after the card is played.'),
(5, 'Rush, Draw 1', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `field`
--

CREATE TABLE IF NOT EXISTS `field` (
  `FieldID` int(11) NOT NULL AUTO_INCREMENT,
  `FieldName` text NOT NULL,
  `Turn` int(11) NOT NULL,
  `Field01` int(11) NOT NULL,
  `Field02` int(11) NOT NULL,
  `Field03` int(11) NOT NULL,
  `Field04` int(11) NOT NULL,
  `Field05` int(11) NOT NULL,
  `Field06` int(11) NOT NULL,
  `Field07` int(11) NOT NULL,
  `Field08` int(11) NOT NULL,
  `Field09` int(11) NOT NULL,
  `Field10` int(11) NOT NULL,
  `Field11` int(11) NOT NULL,
  `Field12` int(11) NOT NULL,
  `Field13` int(11) NOT NULL,
  `Field14` int(11) NOT NULL,
  `Field15` int(11) NOT NULL,
  `Field16` int(11) NOT NULL,
  `Field17` int(11) NOT NULL,
  `Field18` int(11) NOT NULL,
  `Field19` int(11) NOT NULL,
  `Field20` int(11) NOT NULL,
  `Field21` int(11) NOT NULL,
  `Field22` int(11) NOT NULL,
  `Field23` int(11) NOT NULL,
  `Field24` int(11) NOT NULL,
  `Field25` int(11) NOT NULL,
  `Field26` int(11) NOT NULL,
  `Field27` int(11) NOT NULL,
  `Field28` int(11) NOT NULL,
  `Field29` int(11) NOT NULL,
  `Field30` int(11) NOT NULL,
  `Field31` int(11) NOT NULL,
  `Field32` int(11) NOT NULL,
  `Field33` int(11) NOT NULL,
  `Field34` int(11) NOT NULL,
  `Field35` int(11) NOT NULL,
  `Field36` int(11) NOT NULL,
  `FieldHandR01` int(11) NOT NULL,
  `FieldHandR02` int(11) NOT NULL,
  `FieldHandR03` int(11) NOT NULL,
  `FieldHandR04` int(11) NOT NULL,
  `FieldHandR05` int(11) NOT NULL,
  `FieldHandR06` int(11) NOT NULL,
  `FieldHandR07` int(11) NOT NULL,
  `FieldHandR08` int(11) NOT NULL,
  `FieldHandR09` int(11) NOT NULL,
  `FieldHandR10` int(11) NOT NULL,
  `FieldHandB01` int(11) NOT NULL,
  `FieldHandB02` int(11) NOT NULL,
  `FieldHandB03` int(11) NOT NULL,
  `FieldHandB04` int(11) NOT NULL,
  `FieldHandB05` int(11) NOT NULL,
  `FieldHandB06` int(11) NOT NULL,
  `FieldHandB07` int(11) NOT NULL,
  `FieldHandB08` int(11) NOT NULL,
  `FieldHandB09` int(11) NOT NULL,
  `FieldHandB10` int(11) NOT NULL,
  `PlayerRed` int(11) NOT NULL,
  `DeckRed` int(11) NOT NULL,
  `PlayerBlue` int(11) NOT NULL,
  `DeckBlue` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `PointsB` int(11) NOT NULL,
  `PointsR` int(11) NOT NULL,
  PRIMARY KEY (`FieldID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `field`
--

INSERT INTO `field` (`FieldID`, `FieldName`, `Turn`, `Field01`, `Field02`, `Field03`, `Field04`, `Field05`, `Field06`, `Field07`, `Field08`, `Field09`, `Field10`, `Field11`, `Field12`, `Field13`, `Field14`, `Field15`, `Field16`, `Field17`, `Field18`, `Field19`, `Field20`, `Field21`, `Field22`, `Field23`, `Field24`, `Field25`, `Field26`, `Field27`, `Field28`, `Field29`, `Field30`, `Field31`, `Field32`, `Field33`, `Field34`, `Field35`, `Field36`, `FieldHandR01`, `FieldHandR02`, `FieldHandR03`, `FieldHandR04`, `FieldHandR05`, `FieldHandR06`, `FieldHandR07`, `FieldHandR08`, `FieldHandR09`, `FieldHandR10`, `FieldHandB01`, `FieldHandB02`, `FieldHandB03`, `FieldHandB04`, `FieldHandB05`, `FieldHandB06`, `FieldHandB07`, `FieldHandB08`, `FieldHandB09`, `FieldHandB10`, `PlayerRed`, `DeckRed`, `PlayerBlue`, `DeckBlue`, `Status`, `PointsB`, `PointsR`) VALUES
(1, 'Meow!', 37, 9, 11, 10, 7, 8, 6, 13, 14, 12, 3, 4, 5, 17, 20, 16, 2, 15, 18, 25, 21, 19, 22, 28, 27, 32, 33, 26, 29, 30, 24, 31, 34, 37, 36, 35, 23, 5, 3, 5, 4, 2, 3, 2, 1, 2, 0, 2, 0, 4, 2, 2, 1, 1, 2, 1, 0, 1, 0, 2, 0, 2, 22, 21),
(2, 'Red Test', 37, 184, 183, 177, 172, 98, 97, 173, 168, 169, 175, 166, 96, 171, 170, 174, 176, 165, 95, 187, 186, 181, 179, 79, 93, 0, 0, 167, 78, 80, 81, 0, 0, 164, 94, 92, 91, 2, 2, 5, 0, 0, 0, 0, 0, 0, 0, 6, 4, 6, 4, 2, 0, 0, 0, 0, 0, 2, 0, 1, 0, 1, 29, 27),
(3, 'Meeep', 28, 155, 144, 88, 87, 85, 139, 156, 146, 135, 82, 83, 140, 158, 157, 148, 84, 86, 141, 159, 154, 151, 147, 145, 142, 162, 160, 152, 149, 137, 136, 163, 161, 153, 150, 143, 138, 6, 4, 4, 4, 4, 4, 2, 4, 1, 2, 4, 0, 3, 0, 4, 1, 1, 0, 0, 0, 1, 0, 2, 0, 3, 27, 23),
(4, 'Miep', 40, 59, 58, 42, 41, 39, 62, 47, 51, 38, 45, 40, 63, 48, 53, 50, 46, 43, 61, 70, 68, 52, 49, 44, 64, 71, 67, 60, 57, 54, 66, 72, 73, 69, 56, 76, 75, 1, 2, 1, 2, 2, 2, 1, 0, 0, 0, 2, 4, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, 1, 0, 3, 36, 32),
(5, 'derp', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 89, 0, 0, 0, 0, 0, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 5, 5, 3, 0, 0, 0, 0, 0, 4, 4, 2, 1, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0, 1, 1, 1),
(7, 'Miiiehp? Q.Q', 28, 112, 110, 107, 104, 100, 99, 113, 111, 108, 105, 101, 102, 122, 121, 109, 106, 103, 114, 124, 128, 120, 118, 117, 115, 125, 133, 129, 123, 119, 116, 134, 132, 127, 126, 131, 130, 2, 1, 2, 0, 0, 4, 0, 0, 0, 0, 5, 1, 1, 1, 2, 4, 2, 2, 0, 0, 2, 0, 1, 0, 3, 28, 28);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rarity`
--

CREATE TABLE IF NOT EXISTS `rarity` (
  `RarityID` int(11) NOT NULL,
  `RarityName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rarity`
--

INSERT INTO `rarity` (`RarityID`, `RarityName`) VALUES
(0, 'Common'),
(1, 'Uncommon'),
(2, 'Rare');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `RoleID` int(11) NOT NULL,
  `RoleName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `role`
--

INSERT INTO `role` (`RoleID`, `RoleName`) VALUES
(0, 'User'),
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `StatusID` int(11) NOT NULL,
  `StatusName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `status`
--

INSERT INTO `status` (`StatusID`, `StatusName`) VALUES
(0, 'Open'),
(2, 'Red Side won!'),
(3, 'Blue Side won!'),
(4, 'Draw!'),
(1, 'Started');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tempcard`
--

CREATE TABLE IF NOT EXISTS `tempcard` (
  `CardID` int(11) NOT NULL,
  `TempCardID` int(11) NOT NULL,
  `TempCardOwner` int(11) NOT NULL,
  `CardName` text NOT NULL,
  `CardTop` int(11) NOT NULL,
  `CardRight` int(11) NOT NULL,
  `CardBot` int(11) NOT NULL,
  `CardLeft` int(11) NOT NULL,
  `CardType` int(11) NOT NULL,
  `CardEffect` int(11) NOT NULL,
  PRIMARY KEY (`TempCardID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tempcard`
--

INSERT INTO `tempcard` (`CardID`, `TempCardID`, `TempCardOwner`, `CardName`, `CardTop`, `CardRight`, `CardBot`, `CardLeft`, `CardType`, `CardEffect`) VALUES
(0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(2, 2, 1, 'Prince Omlette', 3, 7, 5, 6, 0, 1),
(1, 3, 1, 'Sona', 9, 7, 6, 8, 0, 0),
(1, 4, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 5, 2, 'Sona', 7, 6, 6, 4, 0, 0),
(1, 6, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 7, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 8, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 9, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 10, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 11, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 12, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 13, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 14, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 15, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 16, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 17, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 18, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 19, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 20, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 21, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 22, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 23, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 24, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(5, 25, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 26, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(4, 27, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(2, 28, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 29, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 30, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 31, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(4, 32, 2, 'Luma', 4, 4, 4, 4, 0, 0),
(1, 33, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 34, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 35, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(3, 36, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 37, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(3, 38, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(4, 39, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(5, 40, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(5, 41, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 42, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 43, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 44, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(5, 45, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(5, 46, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(2, 47, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(5, 48, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 49, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(4, 50, 2, 'Luma', 4, 4, 4, 4, 0, 0),
(5, 51, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 52, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 53, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 54, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(4, 55, 2, 'Luma', 4, 4, 4, 4, 0, 0),
(3, 56, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(5, 57, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(2, 58, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 59, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(4, 60, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(3, 61, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 62, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 63, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 64, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 65, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 66, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 67, 2, 'Sona', 5, 6, 7, 7, 0, 0),
(3, 68, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 69, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(5, 70, 1, 'Dick & Pickle', 7, 6, 6, 4, 0, 3),
(5, 71, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 72, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 73, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 74, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 75, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 76, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 77, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 78, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(5, 79, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 80, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 81, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(4, 82, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(2, 83, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(5, 84, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(1, 85, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 86, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(5, 87, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(5, 88, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 89, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(5, 90, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 91, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 92, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(4, 93, 2, 'Luma', 4, 4, 4, 4, 0, 0),
(5, 94, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(4, 95, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(1, 96, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(4, 97, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(2, 98, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 99, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 100, 1, 'Prince Omlette', 3, 7, 5, 6, 0, 1),
(5, 101, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(3, 102, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 103, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 104, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(6, 105, 2, 'Zerg', 2, 2, 2, 2, 0, 4),
(5, 106, 1, 'Dick & Pickle', 7, 6, 6, 4, 0, 3),
(4, 107, 2, 'Luma', 4, 4, 4, 4, 0, 0),
(3, 108, 2, 'Enton', 9, 7, 6, 8, 0, 2),
(5, 109, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(4, 110, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(6, 111, 2, 'Zerg', 1, 1, 1, 1, 0, 4),
(1, 112, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(3, 113, 2, 'Enton', 9, 7, 6, 8, 0, 2),
(6, 114, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 115, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(2, 116, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(6, 117, 2, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 118, 2, 'Zerg', 1, 1, 1, 1, 0, 5),
(1, 119, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 120, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 121, 1, 'Sona', 5, 6, 7, 7, 0, 0),
(5, 122, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(2, 123, 1, 'Prince Omlette', 3, 7, 5, 6, 0, 1),
(6, 124, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 125, 1, 'Zerg', 2, 2, 2, 2, 0, 5),
(5, 126, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(4, 127, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(3, 128, 1, 'Enton', 9, 7, 6, 8, 0, 2),
(3, 129, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 130, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 131, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 132, 1, 'Sona', 5, 6, 7, 7, 0, 0),
(5, 133, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(4, 134, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(1, 135, 1, 'Sona', 5, 6, 7, 7, 0, 0),
(4, 136, 2, 'Luma', 5, 5, 5, 5, 0, 0),
(2, 137, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 138, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(6, 139, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 140, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 141, 1, 'Zerg', 2, 2, 2, 2, 0, 5),
(5, 142, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(1, 143, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 144, 1, 'Prince Omlette', 3, 7, 5, 6, 0, 1),
(1, 145, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(5, 146, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(1, 147, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 148, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(6, 149, 2, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 150, 2, 'Zerg', 2, 2, 2, 2, 0, 5),
(6, 151, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 152, 2, 'Zerg', 2, 2, 2, 2, 0, 5),
(5, 153, 2, 'Dick & Pickle', 7, 6, 6, 4, 0, 3),
(2, 154, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(6, 155, 2, 'Zerg', 1, 1, 1, 1, 0, 5),
(6, 156, 1, 'Zerg', 1, 1, 1, 1, 0, 5),
(4, 157, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(1, 158, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(3, 159, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 160, 2, 'Prince Omlette', 3, 7, 5, 6, 0, 1),
(5, 161, 2, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(4, 162, 2, 'Luma', 4, 4, 4, 4, 0, 0),
(3, 163, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(1, 164, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(2, 165, 2, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 166, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(3, 167, 1, 'Enton', 9, 7, 6, 8, 0, 2),
(4, 168, 1, 'Luma', 5, 5, 5, 5, 0, 0),
(2, 169, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(5, 170, 1, 'Dick & Pickle', 7, 6, 6, 4, 0, 3),
(5, 171, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(2, 172, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(3, 173, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 174, 2, 'Enton', 9, 7, 6, 8, 0, 2),
(3, 175, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(3, 176, 2, 'Enton', 8, 6, 5, 7, 0, 2),
(6, 177, 2, 'Zerg', 1, 1, 1, 1, 0, 5),
(4, 178, 1, 'Luma', 4, 4, 4, 4, 0, 0),
(1, 179, 2, 'Sona', 5, 6, 7, 7, 0, 0),
(5, 180, 1, 'Dick & Pickle', 6, 5, 5, 3, 0, 3),
(1, 181, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(3, 182, 1, 'Enton', 8, 6, 5, 7, 0, 2),
(2, 183, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(2, 184, 1, 'Prince Omlette', 2, 6, 4, 5, 0, 1),
(1, 185, 2, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 186, 1, 'Sona', 4, 5, 6, 6, 0, 0),
(1, 187, 2, 'Sona', 4, 5, 6, 6, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `TypeID` int(11) NOT NULL,
  `TypeName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `type`
--

INSERT INTO `type` (`TypeID`, `TypeName`) VALUES
(0, 'Normal');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `UserPassword` text NOT NULL,
  `UserMail` text NOT NULL,
  `UserRight` int(11) NOT NULL,
  `UserGold` int(11) NOT NULL,
  `UserDiamond` int(11) NOT NULL,
  `UserWins` int(11) NOT NULL,
  `UserAvatar` text NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`UserID`, `Username`, `UserPassword`, `UserMail`, `UserRight`, `UserGold`, `UserDiamond`, `UserWins`, `UserAvatar`) VALUES
(1, 'ADarkHero', '66deed7bdb9755a83913874f00430da5', 'maik_riedlsperger@yahoo.de', 1, 255, 7, 6, 'avatar/default.png'),
(2, 'NoDarkHero', '66deed7bdb9755a83913874f00430da5', 'maik_riedlsperger@yahoo.de', 0, 40, 4, 6, 'avatar/default.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
