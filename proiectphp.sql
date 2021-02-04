-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 09:28 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiectphp`
--
CREATE DATABASE IF NOT EXISTS `proiectphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proiectphp`;

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

DROP TABLE IF EXISTS `categorii`;
CREATE TABLE `categorii` (
  `idcateg` int(10) UNSIGNED NOT NULL,
  `dencateg` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`idcateg`, `dencateg`) VALUES
(1, 'digital'),
(2, 'traditional'),
(3, 'fotografie'),
(4, 'artizanal'),
(5, 'design');

-- --------------------------------------------------------

--
-- Table structure for table `graficieni`
--

DROP TABLE IF EXISTS `graficieni`;
CREATE TABLE `graficieni` (
  `idgraf` int(10) UNSIGNED NOT NULL,
  `numegraf` varchar(20) NOT NULL,
  `prenumegraf` varchar(20) NOT NULL,
  `emailgraf` varchar(35) NOT NULL,
  `usernamegraf` varchar(10) NOT NULL,
  `passgraf` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graficieni`
--

INSERT INTO `graficieni` (`idgraf`, `numegraf`, `prenumegraf`, `emailgraf`, `usernamegraf`, `passgraf`) VALUES
(2, 'Monea', 'Victor', 'victorc@yahoo.com', 'user2', 'pass2'),
(3, 'Ariton', 'Teodora', 'teo.ariton@yahoo.com', 'user3', 'pass3'),
(1, 'Gheorghe', 'Madalina', 'mdx97e@gmail.com', 'user1', 'pass1');

-- --------------------------------------------------------

--
-- Table structure for table `lucrari`
--

DROP TABLE IF EXISTS `lucrari`;
CREATE TABLE `lucrari` (
  `idlucrare` int(10) UNSIGNED NOT NULL,
  `denlucrare` varchar(30) NOT NULL,
  `idsubcateg` int(11) NOT NULL,
  `idgraf` int(11) NOT NULL,
  `pretlucrare` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lucrari`
--

INSERT INTO `lucrari` (`idlucrare`, `denlucrare`, `idsubcateg`, `idgraf`, `pretlucrare`) VALUES
(1, 'Ingerul paradisului', 2, 1, 250),
(2, 'Lebede', 8, 1, 5),
(3, 'Telekom', 19, 1, 15),
(4, 'Template', 16, 1, 100),
(5, 'Amurg', 6, 2, 219),
(6, 'Statuia lui venus', 7, 3, 359);

-- --------------------------------------------------------

--
-- Table structure for table `subcategorii`
--

DROP TABLE IF EXISTS `subcategorii`;
CREATE TABLE `subcategorii` (
  `idsubcateg` int(10) UNSIGNED NOT NULL,
  `idcateg` int(11) NOT NULL,
  `densubcateg` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategorii`
--

INSERT INTO `subcategorii` (`idsubcateg`, `idcateg`, `densubcateg`) VALUES
(1, 1, '3d'),
(2, 1, 'manipulare'),
(3, 1, 'fractal'),
(4, 2, 'colaj'),
(5, 2, 'desen'),
(6, 2, 'pictura'),
(7, 2, 'sculptura'),
(8, 3, 'natura'),
(9, 3, 'portrete'),
(10, 3, 'urban'),
(11, 3, 'rural'),
(12, 4, 'costume'),
(13, 4, 'sticla'),
(14, 4, 'culinar'),
(15, 5, 'publicitate'),
(16, 5, 'interfete'),
(17, 5, 'jocuri'),
(18, 5, 'moda'),
(19, 5, 'logo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`idcateg`),
  ADD KEY `dencateg` (`dencateg`);

--
-- Indexes for table `graficieni`
--
ALTER TABLE `graficieni`
  ADD PRIMARY KEY (`idgraf`),
  ADD KEY `prenumegraf` (`prenumegraf`),
  ADD KEY `emailgraf` (`emailgraf`),
  ADD KEY `usernamegraf` (`usernamegraf`);

--
-- Indexes for table `lucrari`
--
ALTER TABLE `lucrari`
  ADD PRIMARY KEY (`idlucrare`),
  ADD KEY `denlucrare` (`denlucrare`),
  ADD KEY `idsubcateg` (`idsubcateg`),
  ADD KEY `idgraf` (`idgraf`),
  ADD KEY `pretlucrare` (`pretlucrare`);

--
-- Indexes for table `subcategorii`
--
ALTER TABLE `subcategorii`
  ADD PRIMARY KEY (`idsubcateg`),
  ADD KEY `densubcateg` (`densubcateg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorii`
--
ALTER TABLE `categorii`
  MODIFY `idcateg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `graficieni`
--
ALTER TABLE `graficieni`
  MODIFY `idgraf` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lucrari`
--
ALTER TABLE `lucrari`
  MODIFY `idlucrare` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subcategorii`
--
ALTER TABLE `subcategorii`
  MODIFY `idsubcateg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
