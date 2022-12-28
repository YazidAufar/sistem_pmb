-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 04:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pmb`
--

CREATE TABLE `tb_pmb` (
  `id_pmb` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `tanggal_daftar` varchar(30) NOT NULL,
  `jurusan1` varchar(50) NOT NULL,
  `jurusan2` varchar(50) NOT NULL,
  `validasi` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pmb`
--

INSERT INTO `tb_pmb` (`id_pmb`, `nama`, `email`, `password`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kota`, `kontak`, `tanggal_daftar`, `jurusan1`, `jurusan2`, `validasi`, `keterangan`) VALUES
(1, 'admin', 'admin', 'admin', '-', '-', '-', '-', '-', '-', '-', '0', '0', '', ''),
(3, 'Ade', 'ade2@gmail.com', '1', 'Muara Teweh', '5 Juli 1996', 'Wanita', 'Marabahan', 'Batola', '0001', 'Thursday, 10  June 2021', 'Teknik Komputer & Jaringan', 'Akuntansi', 'valid', 'Lulus Seleksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pmb`
--
ALTER TABLE `tb_pmb`
  ADD PRIMARY KEY (`id_pmb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pmb`
--
ALTER TABLE `tb_pmb`
  MODIFY `id_pmb` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
