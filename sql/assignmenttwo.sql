-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2025 at 06:44 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmenttwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountId` int NOT NULL,
  `uname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountId`, `uname`, `email`, `password`) VALUES
(1, 'testAdmin', 'test.admin@admin.com', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(2, 'SexyMan69420', 'howardwolowitz@hotmail.com', 'ef8e223212d88d0860141e041f4c4d03caee48914f80905a0cefe360dabfe9daaa0ef950fbff557f95e1d97b5de6eb37c1fa499e82c31bdfb201925a29582002'),
(3, 'SheldonRocks72', 'sheldoncooper@gmail.com', 'eaab8238f48367b999678d9de8a7531ad5656e18456b86af8e9165096a61c0711e1e8aa6e813a231fed3878109196d37af816acdc56264162c10a796ae7b4b5c'),
(4, 'ShrekIsLove', 'shrek.islove@gmail.com', '545b25a0ead3e7ae886e45715c20adc8d1cb742f1718a644746cb0f50f9a4e4110d13cf4897e4db96d22c7b49cb1fd5366eb85ded0fec3c6395c0263cec90fdc'),
(5, 'testing', 'testing.test@gmail.com', '724028e8183a07cc60a7cfd757e89959811e77229c5d0b26531cb99eed1c2eb4c1f9a7057fa0a4ab934c7524e0299903820dae2bc5f9ddcc00d15ef0b754ba3d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
