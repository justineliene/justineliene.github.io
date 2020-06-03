-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 05:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursadarbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `sudokuanswers`
--

CREATE TABLE `sudokuanswers` (
  `id` int(11) NOT NULL,
  `row1` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row2` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row3` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row4` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row5` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row6` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row7` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row8` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL,
  `row9` varchar(9) CHARACTER SET utf8 COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sudokuanswers`
--

INSERT INTO `sudokuanswers` (`id`, `row1`, `row2`, `row3`, `row4`, `row5`, `row6`, `row7`, `row8`, `row9`) VALUES
(1, '273194865', '958736142', '416528793', '149275386', '827361954', '635849217', '794683521', '381452679', '562917438'),
(2, '857321469', '462987513', '193456827', '724819635', '915673248', '386245971', '249738156', '578164392', '631592784'),
(3, '435618279', '291574863', '768239154', '614857932', '853492617', '927163485', '389746521', '546321798', '172985346'),
(4, '356749182', '471238569', '829165473', '985321746', '713456298', '642987351', '264593817', '138674925', '597812634'),
(5, '714659832', '853142697', '926738451', '145826379', '692473518', '387915264', '271564983', '469381725', '538297146'),
(6, '218465397', '679238514', '354971682', '892516743', '761384259', '543792168', '986123475', '427659831', '135847926'),
(7, '764952831', '253187964', '891346752', '512764398', '978213546', '346895217', '489571623', '637429185', '125638479');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sudokuanswers`
--
ALTER TABLE `sudokuanswers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sudokuanswers`
--
ALTER TABLE `sudokuanswers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
