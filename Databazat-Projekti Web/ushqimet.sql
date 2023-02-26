-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 07:35 PM
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
-- Database: `ushqimet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableushqimet`
--

CREATE TABLE `tableushqimet` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tableushqimet`
--

INSERT INTO `tableushqimet` (`id`, `image`, `title`, `body`) VALUES
(10, './Fotot/food1.jpg', '- Byreku -', 'Një pastë e mbushur me mish, spinaq ose djathë, byreku është                                                      një vakt i preferuar i të gjitha kohërave. Disa versione                                                      përfshijnë orizin së bashku me mishin e grirë, duke e bërë atë                                                     një vakt perfekt gjithëpërfshirës. Burekët në Kosovë zakonisht                                                     bëhen në tepsi rrethore duke alternuar shtresat e brumit të                                                      krisur me mbushjet.'),
(11, './Fotot/food2.png', '- Flija -', 'Kur hani një Flija, pyesni veten se si një pjatë e thjeshtë                                                  me brumë dhe krem mund të shijojë kaq mirë. Por nëse keni                                                 mundësinë ta shikoni duke u bërë, do të mahniteni nga sasia                                                  e punës që kërkon ky ushqim i thjeshtë kosovar. Shtresat e                                                  alternuara të brumit dhe kremit mbushen në një tigan dhe piqen                                                 një shtresë një nga 5 deri në 6 orë.<br><br>                                                 A nuk është kjo punë e mundimshme?<br> Është ndoshta ajo që e bën                                                  flijen të shijojë shumë më të ëmbël. '),
(12, './Fotot/food3.jpg', '- Qebap -', 'Qebapi është një lloj salçiçeje pa lëkurë e bërë nga mishi i                                                  grirë viçi ose mishi i qengjit. Piqen në skarë dhe                                                  shërbehen me qepë dhe salcë kosi.'),
(13, './Fotot/food4.png', '- Speca të mbushura -', 'Specat shpesh mbushen me mish, perime dhe oriz. Disa janë                                      gjithashtu të mbushura me kefir dhe gjizë.'),
(14, './Fotot/food5.png', '- Pasul -', 'Fasulet e bardha tradicionale përdoren për të bërë këtë supë                                      tradicionale shqiptare me fasule të njohur si pasul. Shtohen edhe copa të                                      ndryshme viçi së bashku me perime, si qepa. Shërbehet me qepë të papërpunuar                                      të prerë hollë dhe bukë.'),
(15, './Fotot/food6.png', '- Krempite -', 'Një pastë e bërë me krem dhe krem shantilly.'),
(16, './Fotot/food7.jpg', '- Tullumba -', 'Këto ëmbëlsira të shijshme skuqen në vaj të nxehtë dhe më pas                                      zhyten në një shurup sheqeri. Janë vërtet të shijshme dhe të gjithë do të                                      mbeten të impresionuar.'),
(17, './Fotot/food8.jpg', '- Tespishte -', 'Një ëmbëlsirë e llojit torta e ngjashme me Revanin mesdhetar                                      dhe e mbuluar me një sherbet me shije limoni ose vanilje.'),
(18, './Fotot/drink1.jpg', '- Verë -', 'Nuk mund të largohesh nga Kosova pa shijuar Vranac. Kjo verë                                      e kuqe prodhohet nga rajoni i Rahovecit të Kosovës, që ndodhet në jugperëndim                                       të kryeqytetit Prishtinë. Rrushi ballkanik i përdorur për Vranac është një                                        nga më të vjetrit në botë.'),
(19, './Fotot/drink2.png', '- Birra -', 'Birra prodhohet në disa fabrika lokale në Kosovë dhe merr                                      emrin e qyteteve në të cilat prodhohen. Për shembull, Birra Prishtina nga                                      Prishtina, Birra Peja e prodhuar në Pejë, Birra Ereniku e prodhuar pranë                                      rajonit të lumit Erenik.'),
(20, './Fotot/drink3.jpg', '- Kafja -', 'Kafeja turke është bërë nga kokrrat e kafesë të bluara                                      shumë imët dhe është gjithashtu e ndryshme nga llojet e tjera të kafesë                                       në atë që gatuhet duke zier në tenxhere tradicionale të bakrit të quajtura                                        cezve. Kafja turke është më aromatike dhe më e trashë në krahasim me kafetë                                        e tjera.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableushqimet`
--
ALTER TABLE `tableushqimet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tableushqimet`
--
ALTER TABLE `tableushqimet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
