-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10.11.2023 klo 08:20
-- Palvelimen versio: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuokraamo`
--
CREATE DATABASE IF NOT EXISTS `vuokraamo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vuokraamo`;

-- --------------------------------------------------------

--
-- Rakenne taululle `asiakas`
--

CREATE TABLE `asiakas` (
  `asiakasID` int(11) NOT NULL,
  `etunimi` varchar(100) NOT NULL,
  `sukunimi` varchar(100) NOT NULL,
  `sahkoposti` varchar(100) NOT NULL,
  `henkilotunnus` varchar(11) NOT NULL,
  `lahiosoite` varchar(100) NOT NULL,
  `postinumero` char(5) NOT NULL,
  `postitoimipaikka` varchar(100) NOT NULL,
  `puhelin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vedos taulusta `asiakas`
--

INSERT INTO `asiakas` (`asiakasID`, `etunimi`, `sukunimi`, `sahkoposti`, `henkilotunnus`, `lahiosoite`, `postinumero`, `postitoimipaikka`, `puhelin`) VALUES
(1, 'Matti', 'Meikäläinen', 'matti.meikalainen@salo.fi', '', 'Salonkatu 2', '24100', 'Salo', '+358441234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asiakas`
--
ALTER TABLE `asiakas`
  ADD PRIMARY KEY (`asiakasID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asiakas`
--
ALTER TABLE `asiakas`
  MODIFY `asiakasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
