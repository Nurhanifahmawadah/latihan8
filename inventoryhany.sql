-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2017 at 05:10 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventoryhany`
--

-- --------------------------------------------------------

--
-- Table structure for table `hany`
--

CREATE TABLE IF NOT EXISTS `hany` (
  `kode` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jml` double NOT NULL,
  `pokok` double NOT NULL,
  `jual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hany`
--

INSERT INTO `hany` (`kode`, `nama`, `kategori`, `jml`, `pokok`, `jual`) VALUES
('1', 'Buku Tulis', 'ATK', 100, 10000, 12000),
('2', 'kipas', 'elektronik', 100, 400000, 450000),
('3', 'HP Samsung', 'elektronik', 1, 2500000, 3000000),
('4', 'Kalkulator', 'elektronik', 10, 40000, 45000),
('5', 'Blender', 'elektronik', 8, 255000, 300000),
('6', 'Lampu LED', 'elektronik', 10, 100000, 150000),
('7', 'AC', 'elektronik', 2, 2100000, 450000),
('8', 'Leptop', 'elektronik', 5, 4000000, 4500000),
('9', 'Camera', 'elektronik', 7, 10000000, 10100000),
('10', 'Mouse', 'elektronik', 2, 40000, 45000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
