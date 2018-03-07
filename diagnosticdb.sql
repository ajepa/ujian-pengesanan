-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2014 at 11:45 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diagnosticdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `3m`
--

CREATE TABLE IF NOT EXISTS `3m` (
`num` int(2) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `NamaMurid` varchar(100) DEFAULT NULL,
  `check` varchar(100) DEFAULT NULL,
  `result` varchar(500) DEFAULT NULL,
  `komen` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3m`
--

INSERT INTO `3m` (`num`, `ID`, `NamaMurid`, `check`, `result`, `komen`) VALUES
(2, NULL, 'MUSLIM FIRDAUS BIN DOLAH', NULL, 'Murid sukar mengeja perkataan mudah , menggugurkan perkataan , melangkau baris , Tulisan murid sukar dibaca , abjad-abjad tertentu , Komen: murid keliru ,', NULL),
(3, NULL, 'Fakhri Bin Aluwe', NULL, 'Murid keliru membezakan bunyi abjad yang hampir sama dalam suku kata , melangkau baris , abjad-abjad tertentu ,', 'Komen: '),
(4, NULL, 'hardih', NULL, 'Murid sering mengeja perkataan yang tiada langsung kaitan makna dengan perkataan asal , murid melangkau baris semasa membaca , Murid menulis lambat berbanding dengan rakan sebaya ,', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
`Num` int(2) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `NamaMurid` varchar(100) NOT NULL DEFAULT '',
  `NamaPenilai` varchar(100) DEFAULT NULL,
  `Umur` int(11) DEFAULT NULL,
  `sijil` varchar(20) DEFAULT NULL,
  `Jantina` varchar(20) DEFAULT NULL,
  `Etnik` varchar(20) DEFAULT NULL,
  `Kesihatan` varchar(20) DEFAULT NULL,
  `Negeri` varchar(20) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`Num`, `ID`, `NamaMurid`, `NamaPenilai`, `Umur`, `sijil`, `Jantina`, `Etnik`, `Kesihatan`, `Negeri`, `kategori`, `time`) VALUES
(23, NULL, 'Fakhri Bin Aluwe', 'Mohd Zubir Bin Samsuddin', 8, 'h534232', 'Lelaki', 'Melayu', 'Tiada Masalah', 'WP Kuala Lumpur', 'Literasi', '2014-12-12 17:17:19'),
(24, NULL, 'hardih', 'lalala', 9, '23423', 'Lelaki', 'Cina', 'Asma', 'Terengganu', 'Numerasi', '2014-12-13 08:27:45'),
(22, NULL, 'MUSLIM FIRDAUS BIN DOLAH', 'WAN AZAM AZFAR BIN WAN MOHAMAD', 6, 'j23894', 'Lelaki', 'Melayu', 'Masalah Jantung', 'Terengganu', 'Literasi dan Numerasi', '2014-12-12 01:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `ear`
--

CREATE TABLE IF NOT EXISTS `ear` (
`num` int(2) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `NamaMurid` varchar(100) DEFAULT NULL,
  `check` varchar(100) DEFAULT NULL,
  `result` varchar(500) DEFAULT NULL,
  `komen` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ear`
--

INSERT INTO `ear` (`num`, `ID`, `NamaMurid`, `check`, `result`, `komen`) VALUES
(2, NULL, 'MUSLIM FIRDAUS BIN DOLAH', NULL, 'Murid mempunyai masalah dalam bertutur , Pelajar tidak boleh bercerita kembali , Murid menghadapi masalah dengan konsep turutan , Murid tidak mempunyai hubungan mata (ear contact) ketika berkomunikasi , Komen: pelajar gagap ,', NULL),
(3, NULL, 'Fakhri Bin Aluwe', NULL, 'Murid tidak mengecam dan membezakan pelbagai jenis bunyi yg diberi , Murid tidak boleh menjawab secara lisan soalan kefahaman daripada bahan yang diperdengarkan dalam bahasa yang difahami , Murid tidak mempunyai hubungan mata (ear contact) ketika berkomunikasi ,', 'Komen: '),
(4, NULL, 'hardih', NULL, 'Murid tidak boleh menjawab soalan dengan ayat yang mudah , murid tidak boleh bercerita kembali ,', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `eye`
--

CREATE TABLE IF NOT EXISTS `eye` (
`num` int(2) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `NamaMurid` varchar(100) DEFAULT NULL,
  `matakanan` varchar(10) DEFAULT NULL,
  `matakiri` varchar(10) DEFAULT NULL,
  `check` varchar(100) DEFAULT NULL,
  `result` varchar(500) DEFAULT NULL,
  `komen` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eye`
--

INSERT INTO `eye` (`num`, `ID`, `NamaMurid`, `matakanan`, `matakiri`, `check`, `result`, `komen`) VALUES
(8, NULL, 'MUSLIM FIRDAUS BIN DOLAH', '20/25', '20/20', NULL, 'Pelajar cuba mendekatkan muka ke skrin , Komen : pelajar mampu melihat dengan baik ,', NULL),
(9, NULL, 'Fakhri Bin Aluwe', '20/25', '20/30', NULL, 'Pelajar cuba mendekatkan muka ke skrin ,', 'mata murid sepet'),
(11, NULL, 'hardih', '20/40', '20/60', NULL, 'murid cuba mendekatkan muka ke skrin ,', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `memori`
--

CREATE TABLE IF NOT EXISTS `memori` (
`num` int(2) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `NamaMurid` varchar(100) DEFAULT NULL,
  `check` varchar(100) DEFAULT NULL,
  `result` varchar(500) DEFAULT NULL,
  `komen` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memori`
--

INSERT INTO `memori` (`num`, `ID`, `NamaMurid`, `check`, `result`, `komen`) VALUES
(4, NULL, 'MUSLIM FIRDAUS BIN DOLAH', NULL, 'Murid mempunyai daya tumpuan yang singkat , Murid sering gopoh semasa bertindak , Murid sering cuai dalam pergerakan , Komen: murid hiperaktif ,', NULL),
(5, NULL, 'Fakhri Bin Aluwe', NULL, 'Murid tidak boleh menyambung titik-titik , Murid sering gopoh semasa bertindak ,', 'Komen: '),
(7, NULL, 'hardih', NULL, 'Murid tidak boleh menyambung titik-titik , Murid sering cuai dalam pergerakan ,', ' lalalalla');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE IF NOT EXISTS `number` (
`num` int(2) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `NamaMurid` varchar(100) DEFAULT NULL,
  `check` varchar(100) DEFAULT NULL,
  `result` varchar(500) DEFAULT NULL,
  `komen` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`num`, `ID`, `NamaMurid`, `check`, `result`, `komen`) VALUES
(2, NULL, 'MUSLIM FIRDAUS BIN DOLAH', NULL, 'pelajar tidak boleh membezakan saiz , pelajar tidak mengenal angka 0 hingga 9 , Komen: murid tidak mengenal nombor ,', NULL),
(3, NULL, 'Fakhri Bin Aluwe', NULL, 'pelajar tidak mengenal angka 0 hingga 9 ,', 'Komen: '),
(4, NULL, 'hardih', NULL, 'murid tidak boleh membezakan saiz , murid tidak mengenal angka 0 hingga 9 ,', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3m`
--
ALTER TABLE `3m`
 ADD PRIMARY KEY (`num`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD PRIMARY KEY (`NamaMurid`), ADD UNIQUE KEY `Num_3` (`Num`), ADD UNIQUE KEY `ID` (`ID`), ADD KEY `Num` (`Num`), ADD KEY `Num_2` (`Num`);

--
-- Indexes for table `ear`
--
ALTER TABLE `ear`
 ADD PRIMARY KEY (`num`);

--
-- Indexes for table `eye`
--
ALTER TABLE `eye`
 ADD PRIMARY KEY (`num`);

--
-- Indexes for table `memori`
--
ALTER TABLE `memori`
 ADD PRIMARY KEY (`num`);

--
-- Indexes for table `number`
--
ALTER TABLE `number`
 ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3m`
--
ALTER TABLE `3m`
MODIFY `num` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
MODIFY `Num` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ear`
--
ALTER TABLE `ear`
MODIFY `num` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `eye`
--
ALTER TABLE `eye`
MODIFY `num` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `memori`
--
ALTER TABLE `memori`
MODIFY `num` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `number`
--
ALTER TABLE `number`
MODIFY `num` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
