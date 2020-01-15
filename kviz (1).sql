-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 11:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kviz`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnikID` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnikID`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'pera', 'pera', 'Pera Peric', 'pera@gmail.com'),
(2, 'marko', 'marko', 'Marko Markovic', 'makro@gmail.com'),
(3, 'zika', 'zika', 'Zika Zikic', 'zika@gmail.com'),
(4, 'mika', 'mika', 'Mika Mikic', 'mika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kviz`
--

CREATE TABLE `kviz` (
  `kvizID` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kviz`
--

INSERT INTO `kviz` (`kvizID`, `naziv`) VALUES
(1, 'Baze podataka'),
(2, 'Elektronsko poslovanje'),
(3, 'Internet tehnologije');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userID`, `username`, `password`, `fullname`) VALUES
(1, 'djina', 'djina', 'Djurdjina Misic'),
(2, 'tijana', 'tijana', 'Tijana Blagojevic');

-- --------------------------------------------------------

--
-- Table structure for table `pitanje`
--

CREATE TABLE `pitanje` (
  `pitanjeID` int(11) NOT NULL,
  `pitanje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tacan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `netacan1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `netacan2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `netacan3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kvizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pitanje`
--

INSERT INTO `pitanje` (`pitanjeID`, `pitanje`, `tacan`, `netacan1`, `netacan2`, `netacan3`, `kvizID`) VALUES
(1, 'MongoDB spada u..?', 'NoSQL baze', 'SQL baze', 'I SQL i NoSQL baze', 'Ne spada u baze', 1),
(2, 'Kardinalnost je... ?', 'broj n-torki jedne tabele koji su u relaciji sa jednom n-torkom druge tabele', 'broj dozvoljenih vrednosti primarnog kljuca', 'broj atributa koji cine slozen primarni kljuc', 'vrednost atributa koji opisuje objekat', 1),
(3, 'Koja kljucna rec uvek stoji na kraju upita?', 'ORDER BY', 'SELECT', 'JOIN', 'WHERE', 1),
(6, 'Pogled je?', 'Virtuelna tebela sa imenom', 'Neimenovana vituelna tabela', 'Neimenovana fizicka tabela', 'Fizicka tabela sa imenom', 1),
(7, 'Specijalizovani objekat', 'Ima isti primarni kljuc kao i generalizovani objekat', 'Nema primarni kljuc', 'Uvek ima slozeni primarni kljuc', 'Moze i ne mora imati primarni kljuc', 1),
(8, 'Koliko normalnih formi postoji?', '5', '1', '3', '4', 1),
(9, 'Entitet je?', 'Sve ono sto se jednoznacno moze odrediti, identifikovati i razlikovati', 'Okruzenje u kome se radi modelovanje', 'Vrednost atributa kojim se opisuje neko svojstvo', 'Entitet je osobina objekta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rad`
--

CREATE TABLE `rad` (
  `korisnikID` int(11) NOT NULL,
  `kvizID` int(11) NOT NULL,
  `datum` date NOT NULL,
  `poeni` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnikID`);

--
-- Indexes for table `kviz`
--
ALTER TABLE `kviz`
  ADD PRIMARY KEY (`kvizID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `pitanje`
--
ALTER TABLE `pitanje`
  ADD PRIMARY KEY (`pitanjeID`),
  ADD KEY `kviz_fkq` (`kvizID`);

--
-- Indexes for table `rad`
--
ALTER TABLE `rad`
  ADD PRIMARY KEY (`korisnikID`,`kvizID`,`datum`),
  ADD KEY `kviz_fk` (`kvizID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pitanje`
--
ALTER TABLE `pitanje`
  MODIFY `pitanjeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pitanje`
--
ALTER TABLE `pitanje`
  ADD CONSTRAINT `kviz_fkq` FOREIGN KEY (`kvizID`) REFERENCES `kviz` (`kvizID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rad`
--
ALTER TABLE `rad`
  ADD CONSTRAINT `korisnik_fk` FOREIGN KEY (`korisnikID`) REFERENCES `korisnik` (`korisnikID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `kviz_fk` FOREIGN KEY (`kvizID`) REFERENCES `kviz` (`kvizID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
