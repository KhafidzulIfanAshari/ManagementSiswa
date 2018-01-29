-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 09:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managemen_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `kode_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `asal` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `tanggal_mulai_mengajar` date NOT NULL,
  `username_guru` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`kode_guru`, `nama_guru`, `asal`, `telepon`, `pendidikan_terakhir`, `mapel`, `jumlah_jam`, `tanggal_mulai_mengajar`, `username_guru`, `password`, `photo`, `gaji`) VALUES
('A551E', 'Ifan A', 'Kayen Kayangan Diwek imbang', '08155335690', 'D3', 'Math', 33, '2017-05-23', 'ifan', 'ashari', 'military-gun-ammunition-262066.jpg', 1650000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`kode_guru`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
