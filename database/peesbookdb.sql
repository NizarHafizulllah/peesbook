-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mar 2018 pada 20.03
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `kegiatan_tfi`
--

CREATE TABLE IF NOT EXISTS `kegiatan_tfi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan_utm` text NOT NULL,
  `anggaran` decimal(11,2) NOT NULL,
  `sumber` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kegiatan`
--

CREATE TABLE IF NOT EXISTS `m_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` varchar(50) NOT NULL,
  `id_program` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `m_kegiatan`
--

INSERT INTO `m_kegiatan` (`id`, `kegiatan`, `id_program`) VALUES
(1, 'Kegiatan #1', 2),
(2, 'Kegiatan #2', 9),
(3, 'Kegiatan', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_program`
--

CREATE TABLE IF NOT EXISTS `m_program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `m_program`
--

INSERT INTO `m_program` (`id`, `nama`, `tahun`) VALUES
(2, 'Program #42', 2018),
(4, 'Program #4', 2018),
(5, 'Program #5', 2018),
(6, 'Program #6', 2018),
(7, 'Program #7', 2018),
(8, 'Program #8', 2018),
(9, 'Program #9', 2018),
(10, 'Program #10', 2018),
(12, 'Program #12', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `nama`, `foto`, `nip`, `jabatan`) VALUES
(1, 'admin', '0cc175b9c0f1b6a831c399e269772661', 1, 'Super Admin', 'IMG20160822100303.jpg', '13.01.013.017', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sasaran`
--

CREATE TABLE IF NOT EXISTS `sasaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sasaran` text NOT NULL,
  `temp_id` varchar(50) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_sasaran`
--

CREATE TABLE IF NOT EXISTS `sub_sasaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indikator` text NOT NULL,
  `target` int(3) NOT NULL,
  `id_sasaran` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tfi`
--

CREATE TABLE IF NOT EXISTS `tfi` (
  `id_tfi` int(11) NOT NULL AUTO_INCREMENT,
  `nm_pihak_pertama` varchar(50) NOT NULL,
  `nip_pihak_pertama` varchar(20) NOT NULL,
  `jb_pihak_pertama` text NOT NULL,
  `nm_pihak_kedua` varchar(50) NOT NULL,
  `nip_pihak_kedua` varchar(20) NOT NULL,
  `jb_pihak_kedua` text NOT NULL,
  `tmpt` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `user_input` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL,
  PRIMARY KEY (`id_tfi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
