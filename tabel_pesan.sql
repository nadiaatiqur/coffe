-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 09:26 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `id_tabel` int(50) NOT NULL,
  `makanan` varchar(50) DEFAULT NULL,
  `minuman` varchar(50) DEFAULT NULL,
  `jumlah_makanan` varchar(225) DEFAULT NULL,
  `harga_makanan` varchar(225) DEFAULT NULL,
  `jumlah_minuman` varchar(225) DEFAULT NULL,
  `harga_minuman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`id_tabel`, `makanan`, `minuman`, `jumlah_makanan`, `harga_makanan`, `jumlah_minuman`, `harga_minuman`) VALUES
(1, 'Miyeokguk', '', '1', 'Rp. 18.181', '', 0),
(9, 'Miyeokguk', '', '2', 'Rp.16.363', '', 0),
(10, '', 'Exotic Alien', '', '', '3', 0),
(11, 'Bibimbab', '', '1', 'Rp.16.363', '', 0),
(12, '', 'Baby-Warrior', '', '', '3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`id_tabel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `id_tabel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
