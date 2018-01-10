-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 10:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjiddb`
--
DROP DATABASE IF EXISTS `masjiddb`;
CREATE DATABASE IF NOT EXISTS `masjiddb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `masjiddb`;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `idberita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(128) NOT NULL,
  `teks` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idberita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `berita`
--

TRUNCATE TABLE `berita`;
-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

DROP TABLE IF EXISTS `konfirmasi`;
CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `idkonfirm` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `struk` varchar(255) NOT NULL,
  PRIMARY KEY (`idkonfirm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `konfirmasi`
--

TRUNCATE TABLE `konfirmasi`;
--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`idkonfirm`, `tanggal`, `nama`, `email`, `telepon`, `struk`) VALUES
(1, '2016-11-26 05:47:17', 'aa', 'aaa', 'aaa', '2ce93cbf7113921b14fb7b7f5a84687c.png'),
(2, '2016-11-26 06:37:27', 'aa', 'aa', 'aa', 'b8cccdb31629b63de00dbcdad8942b56.png');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `idmaterial` int(11) NOT NULL AUTO_INCREMENT,
  `nama_material` varchar(128) NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaterial`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `material`
--

TRUNCATE TABLE `material`;
--
-- Dumping data for table `material`
--

INSERT INTO `material` (`idmaterial`, `nama_material`, `harga`, `gambar`) VALUES
(6, 'Batu Bata', 15000, '043dc175924a208ad55c9ad9540b98ad.jpg'),
(7, 'Closet', 250000, '41e15463e6ffc99013476b19a67ea592.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

DROP TABLE IF EXISTS `pesan`;
CREATE TABLE IF NOT EXISTS `pesan` (
  `idpesan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `pertanyaan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idpesan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `pesan`
--

TRUNCATE TABLE `pesan`;
--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `nama`, `email`, `telepon`, `pertanyaan`, `tanggal`, `status`) VALUES
(1, 'aa', 'aa', 'aa', 'aaa', '2016-11-26 06:25:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `level` varchar(5) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`, `email`, `telepon`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@localhost', '021234567890', 'admin'),
(2, 'bams', '123', 'Doni', 'a@a.com', '088888', 'user'),
(3, 'bambb', '12345', 'doni', 'a@a.com', '00000', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
