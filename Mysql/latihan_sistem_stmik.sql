-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 09:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan_sistem_stmik`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE IF NOT EXISTS `chatting` (
`id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `tanggal_waktu` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id`, `username`, `message`, `tanggal_waktu`) VALUES
(1, '', 'hai', '2019-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
`id` int(2) NOT NULL,
  `fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `fakultas`) VALUES
(1, 'Teknik'),
(2, 'Bisnis'),
(3, 'Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas_jurusan`
--

CREATE TABLE IF NOT EXISTS `fakultas_jurusan` (
`id` int(2) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas_jurusan`
--

INSERT INTO `fakultas_jurusan` (`id`, `fakultas`, `jurusan`) VALUES
(3, 'Bisnis', 'Bisnis Manajemen'),
(4, 'Teknik', 'Teknik Informatika'),
(5, 'Sastra', 'Sastra Jerman');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id` int(2) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `email`, `alamat`, `ttl`, `username`, `password`) VALUES
(1, '12345', 'sri mulyani', 'sriR12@gmail.com', 'andir', 'lampung', 'sriR', 'sri123'),
(2, '123456', 'melina nurlidiana', 'melinaNur@gmail.com', 'bandung', 'sumedang', 'melina', 'melina123'),
(3, '', '', '', '', '', 'dian', 'diann'),
(4, '', '', '', '', '', 'andrea', '12345'),
(5, '', '', 'firaandreaa@yahoo.com', '', '', 'andrea', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id` int(2) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
`id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah_sks` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `nama`, `jumlah_sks`, `fakultas`) VALUES
(1, 'shafira', '21', 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id` int(2) NOT NULL,
  `nama_mata_kuliah` varchar(30) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nilai` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nama_mata_kuliah`, `nim`, `nilai`) VALUES
(1, 'matematika diskrit', '18110141', '3'),
(2, 'aljabar linear', '18110141', '3'),
(3, 'matematika diskrit', '18110161', '3'),
(4, 'sistem informasi', '18110161', '3'),
(5, 'sistem informasi', '18110141', '3'),
(7, 'aljabar linear', '18110161', '3');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id` int(2) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nim`, `nama`, `jurusan`, `email`, `alamat`, `ttl`, `username`, `password`) VALUES
(1, '18110141', 'shafira andrea', '', 'firaandrea@gmail.com', 'bandung', 'cianjur', 'shafira', '123'),
(2, '18110151', 'shafira', 'Bisnis Manajemen', 'firaandrea@gmail.com', 'bandung', 'cianjur', 'root', ''),
(3, '18110161', 'devi silviawati', 'Bisnis Manajemen', 'deviS@yahoo.com', 'bandung', 'ciamis', 'devi', 'devi'),
(4, '', '', '', '', '', '', 'firaandreaa@yahoo.com', '06agustus'),
(5, '', '', '', '', '', '', 'firaandreaa@yahoo.com', '06agustus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatting`
--
ALTER TABLE `chatting`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas_jurusan`
--
ALTER TABLE `fakultas_jurusan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatting`
--
ALTER TABLE `chatting`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fakultas_jurusan`
--
ALTER TABLE `fakultas_jurusan`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
