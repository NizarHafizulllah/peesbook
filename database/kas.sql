-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 05:12 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peesbookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE IF NOT EXISTS `kas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `dir` text NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `tgl_input` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `judul`, `deskripsi`, `dir`, `id_kegiatan`, `id_program`, `tahun`, `tgl_input`) VALUES
(1, '', 'testing', 'c6e714a706cc1c8ca95e2d36a286749b.pdf', 29, 0, 2018, '0000-00-00 00:00:00'),
(2, '', 'hellos', '3a413ff3eaf95d96295793a06c86444d.pdf', 32, 0, 2018, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
