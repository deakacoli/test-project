-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 07:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komunat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablekomunat`
--

CREATE TABLE `tablekomunat` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tablekomunat`
--

INSERT INTO `tablekomunat` (`id`, `image`, `title`) VALUES
(9, './Fotot/Prishtina.jpg', '• Komuna e Prishtinës •'),
(10, './Fotot/Prizreni.jpg', '• Komuna e Prizrenit •'),
(11, './Fotot/Ferizaj.jpg', '• Komuna e Ferizajit •'),
(12, './Fotot/Peja.jpg', '• Komuna e Pejës •'),
(13, './Fotot/Gjakova.jpg', '• Komuna e Gjakovës •'),
(14, './Fotot/Gjilan.jpg', '• Komuna e Gjilanit •'),
(15, './Fotot/Mitrovica.jpg', '• Komuna e Mitrovicës •'),
(16, './Fotot/Podujeva.jpg', '• Komuna e Podujevës •'),
(17, './Fotot/Vushtrri.jpg', '• Komuna e Vushtrrisë •'),
(18, './Fotot/Suhareke.jpg', '• Komuna e Suharekës •'),
(19, './Fotot/Rahoveci.jpg', '• Komuna e Rahovecit •'),
(20, './Fotot/Drenas.jpg', '• Komuna e Drenasit •'),
(21, './Fotot/Lipjani.jpg', '• Komuna e Lipjanit •'),
(22, './Fotot/Malisheva.jpg', '• Komuna e Malishevës •'),
(23, './Fotot/Kamenice.jpg', '• Komuna e Kamenicës •'),
(24, './Fotot/Vitia.jpg', '• Komuna e Vitisë •'),
(25, './Fotot/Deçan.jpg', '• Komuna e Deçanit •'),
(26, './Fotot/Istogu.jpg', '• Komuna e Istogut •'),
(27, './Fotot/Klina.jpg', '• Komuna e Klinës •'),
(28, './Fotot/Skenderaj.jpg', '• Komuna e Skenderajt •'),
(29, './Fotot/Dragash.jpg', '• Komuna e Dragashit •'),
(30, './Fotot/FusheKosove.jpg', '• Komuna Fushë Kosovë •'),
(31, './Fotot/Kacanik.jpg', '• Komuna e Mitrovicës •'),
(32, './Fotot/MitrovicaVeriore.jpg', '• Komuna Mitrovica Veriore •'),
(33, './Fotot/Shtime.jpg', '• Komuna e Shtimes •'),
(34, './Fotot/Obiliq.jpg', '• Komuna e Obiliqit •'),
(35, './Fotot/Leposaviq.jpg', '• Komuna Leposaviq •'),
(36, './Fotot/Gracanica.jpg', '• Komuna e Graçanicës •'),
(37, './Fotot/Hani i Elezit.jpg', '• Komuna Hani i Elezit •'),
(38, './Fotot/Zvecan.jpg', '• Komuna Zveçan •'),
(39, './Fotot/Shterpce.jpg', '• Komuna e Shtërpcë •'),
(40, './Fotot/Noveberd.jpg', '• Komuna e Novobërdës •'),
(41, './Fotot/ZubinPotok.jpg', '• Komuna Zubin Potok •'),
(42, './Fotot/Juniku.jpg', '• Komuna e Junikut•'),
(43, './Fotot/Mamusha.jpg', '• Komuna e Mamushës •'),
(44, './Fotot/Raniluga.jpg', '• Komuna e Ranillugut •'),
(45, './Fotot/Kllokot.jpg', '• Komuna e Kllokotit •'),
(46, './Fotot/Partesh.jpg', '• Komuna e Parteshit •');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablekomunat`
--
ALTER TABLE `tablekomunat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablekomunat`
--
ALTER TABLE `tablekomunat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
