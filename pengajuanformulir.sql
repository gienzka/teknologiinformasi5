-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mar 2018 pada 16.46
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknologiinformasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuanformulir`
--

CREATE TABLE `pengajuanformulir` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuanformulir`
--

INSERT INTO `pengajuanformulir` (`nama`, `email`, `usia`, `alamat`, `status`) VALUES
('gienzka', 'gienzka@email.com', 20, 'Jl. Danau Maninjau', 'Ditolak'),
('salfa', 'salfa@email.com', 19, 'maninjau raya', 'diterima');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
