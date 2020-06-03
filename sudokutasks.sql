-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 05:51 PM
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
-- Table structure for table `sudokutasks`
--

CREATE TABLE `sudokutasks` (
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
-- Dumping data for table `sudokutasks`
--

INSERT INTO `sudokutasks` (`id`, `row1`, `row2`, `row3`, `row4`, `row5`, `row6`, `row7`, `row8`, `row9`) VALUES
(1, '070190065', '900000102', '006528090', '109270300', '807301904', '005049207', '090683500', '301000009', '560017030'),
(2, '007301400', '062080510', '090050020', '700809005', '015000240', '300205001', '040030050', '078060390', '001502700'),
(3, '005010200', '091504860', '760030054', '010857030', '803000607', '020163080', '380040021', '046301790', '002080300'),
(4, '056000180', '400238009', '809060403', '080301040', '013050290', '040907050', '204090807', '100674005', '097000630'),
(5, '704609802', '050102090', '900030001', '140000079', '002070500', '380000064', '200060003', '060301020', '508207106'),
(6, '200060007', '079000510', '050901080', '002516700', '700080009', '003792100', '080103070', '027000830', '100040006'),
(7, '004902800', '003187900', '801000702', '010704090', '900000006', '040805010', '409000603', '007429100', '005608400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sudokutasks`
--
ALTER TABLE `sudokutasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sudokutasks`
--
ALTER TABLE `sudokutasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
