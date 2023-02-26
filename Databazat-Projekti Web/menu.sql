-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:35 PM
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
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_image`, `menu_title`, `menu_body`) VALUES
(11, './Fotot/PLANTING.jpg', 'Kujdesi Për Kopshtin', '\r\nKujdesi për kopshtin është i domosdoshëm në pranverë'),
(13, './Fotot/BIKERIDE.jpg', 'Shëtitje', 'Pranvera është stina ideale për një shëtitje me bicikletë!'),
(14, './Fotot/PICNIC.jpg', 'Piknik', 'Kosova ka shumë vende të bukura për piknik.'),
(15, './Fotot/CAMPING.jpg', 'Kamping', 'Mund të përjetoni eksperiencë interesante në kamping gjatë verës.'),
(16, './Fotot/SWIMMING.jpg', 'Liqenat', 'Liqenat në Rugovë të jep qetësi dhe freski gjatë Verës!'),
(17, './Fotot/HIKING.jpg', 'Hiking', 'Sfidoni vetën tuaj hiking në bjeshkët e Kosovës.'),
(18, './Fotot/WALKING.jpg', 'Ecje në natyrë', 'Shijoni stinën e Vjeshtës!'),
(19, './Fotot/FALLDECORATION.jpg', 'Dekorimi Vjeshtor', 'Mos harroni të shprehni kreativitetin tuaj me dekorime vjeshtore.'),
(20, './Fotot/RAIN.jpg', 'Ecje në Shi', 'Eksploroni Kosovën edhe në ditët me shi.'),
(21, './Fotot/SKIING.jpg', 'Skiimi', 'Shijoni peisazhet e bukura dimërore nëpistat e Kosovës!'),
(22, './Fotot/WINTER.jpg', 'Natë Dimri', 'Shijoni një natë dimri në malet e Kosovës dhe ndjehuni si në përralla!'),
(23, './Fotot/DECORATION.jpeg', 'Festat e Fundvitit', 'Si përfundim përgatituni të kaloni një fundvit të paharrueshëm në Kosovë.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
