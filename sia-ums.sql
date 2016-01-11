-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2016 at 09:25 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sia-ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  UNIQUE KEY `nama` (`nama`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`) VALUES
(1, 'Helman Muhammad, S.T., M.T.'),
(2, 'Jan Wantoro, S.T.,M.Eng.'),
(3, 'Yogiek Indra Kurniawan, S.T., M.T.'),
(4, 'Dedi Ari Prasetya, S.T.'),
(5, 'Agus Ulinuha, S.T,, M.T., Ph.D.'),
(6, 'Budi Murtiyasa, Prof. Dr., M.Kom.'),
(7, 'Bana Handaga, Dr. Ir, M.T.'),
(8, 'Arkham Zahri Rakhman, S.Kom., M.Eng.');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  UNIQUE KEY `nama` (`nama`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'X');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  `kata_sandi` varchar(300) NOT NULL,
  `nomor_induk_mahasiswa` varchar(20) NOT NULL,
  `fakultas_program_studi` varchar(300) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  UNIQUE KEY `nama` (`nama`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `kata_sandi`, `nomor_induk_mahasiswa`, `fakultas_program_studi`, `tempat_tanggal_lahir`, `jenis_kelamin`, `alamat`) VALUES
(1, 'Moch Rizky Prasetya Kurniadi', 'L200144020', 'L200144020', 'Komunikasi dan Informatika, Informatika', 'Ngawi, 30 Agustus 1995', 'Laki-laki', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  `semester` int(3) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `kelas_id` int(1) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `jam` varchar(10) NOT NULL,
  UNIQUE KEY `nama` (`nama`),
  KEY `id` (`id`),
  KEY `dosen_id` (`dosen_id`),
  KEY `kelas_id` (`kelas_id`),
  KEY `ruang_id` (`ruang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama`, `semester`, `dosen_id`, `kelas_id`, `ruang_id`, `jam`) VALUES
(1, 'Sistem Operasi / Operating Systems', 3, 1, 5, 1, '4 - 6');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  UNIQUE KEY `nama` (`nama`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `nama`) VALUES
(1, 'J.Int.1'),
(2, 'LJKTIF'),
(3, 'LKOMFKI');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matakuliah_ibfk_2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matakuliah_ibfk_3` FOREIGN KEY (`ruang_id`) REFERENCES `ruang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
