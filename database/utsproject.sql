-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 04:01 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `utsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rico', 'ganteng');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(99) NOT NULL,
  `nama_barang` varchar(99) NOT NULL,
  `jenis_barang` varchar(99) NOT NULL,
  `jumlah_barang` varchar(99) NOT NULL,
  `harga_barang` varchar(99) NOT NULL,
  `gambar_barang` varchar(6969) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis_barang`, `jumlah_barang`, `harga_barang`, `gambar_barang`) VALUES
('b01', 'Analon-set-cookingware', '1-alat-memasak', '44', '1500000', '1510156494.jpg'),
('b02', 'Chin-ChinCutter', 'pemotong-adonan', '19', '450000', '1510156538.jpeg'),
('b03', 'Denpo-microwave', 'Microwave', '30', '450000', '1510156619.jpg'),
('b04', 'Denpo-DDB', 'Dispenser', '35', '350000', '1510156757.jpg'),
('b05', 'HipweeKnife', '1-set-pisauDapur', '25', '450000', '1510157009.jpg'),
('b06', 'Jamie-Oliver', 'penggorengan', '20', '200000', '1510157063.jpeg'),
('b07', 'Kirin-microwave', 'Microwave', '20', '500000', '1510157112.jpg'),
('b08', 'Wingas-88', 'kompor-gas', '25', '700000', '1510157192.jpg'),
('b09', 'Rinai-kecil', 'kompor-gas ', '20', '250000', '1510157272.jpg'),
('b10', 'Rinai-besar', 'kompor-gas', '23', '350000', '1510157309.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(99) NOT NULL,
  `id_barang` varchar(99) NOT NULL,
  `komentar` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `username` (`username`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `username`, `id_barang`, `komentar`) VALUES
(4, 'mikola', 'b02', 'sayang'),
(5, 'mikola', 'b03', 'sayang'),
(6, 'mikola', 'b01', 'barang bagus'),
(7, 'mikola', 'b05', 'pisau nya gak tajem');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `nama` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  `nomor` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama`, `alamat`, `nomor`, `username`, `password`) VALUES
('beny', '1213', '123', 'beny', 'beny'),
('rico mikola zalfit', 'pekanbaru', '0853747470048', 'mikola', '1234'),
('rico', 'rico', 'qwe', 'qwe', '123'),
('rengki', 'kartam', '0853747470048', 'rengki', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `alamat_pembeli` varchar(99) NOT NULL,
  `harga_barang` varchar(99) NOT NULL,
  `jumlah_barang` varchar(99) NOT NULL,
  `total_harga` varchar(99) NOT NULL,
  PRIMARY KEY (`id_pembeli`),
  KEY `id_barang` (`id_barang`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembeli`, `id_barang`, `username`, `alamat_pembeli`, `harga_barang`, `jumlah_barang`, `total_harga`) VALUES
(5, 'b01', 'mikola', 'pekanbaruda', '1500000', '4', '6000000'),
(6, 'b02', 'mikola', 'pekanbaru', '450000', '3', '1350000'),
(7, 'b02', 'qwe', 'rico', '450000', '8', '3600000'),
(8, 'b01', 'mikola', 'pekanbaru', '1500000', '1', '1500000'),
(9, 'b01', 'qwe', 'rico', '1500000', '3', '4500000'),
(10, 'b05', 'mikola', 'pekanbaru', '450000', '8', '3600000'),
(11, 'b05', 'rengki', 'kartam', '450000', '2', '900000');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
