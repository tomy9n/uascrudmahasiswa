-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 11:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `idLogin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`idLogin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'tomy', 'tomy'),
(3, 'tomyrohma29@gmail.com', 'tomy9n'),
(4, 'naruto', 'naruto');

-- --------------------------------------------------------

--
-- Table structure for table `tbmahasiswa`
--

CREATE TABLE `tbmahasiswa` (
  `idmahasiswa` int(10) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmahasiswa`
--

INSERT INTO `tbmahasiswa` (`idmahasiswa`, `npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kode_pos`) VALUES
(1, '19630484', 'Tomy Rohma Danu', 'Wonogiri', '1997-02-02', 'Laki-laki', 'Jl. Trans Kalimantan Ray 17 Beringin Alalak Barito Kuala', '57692'),
(3, '19630397', 'Ahmad Maulana Hakim', 'Banjarnegara', '2021-01-06', 'Laki-laki', 'Kompleks Griya Permaya Jalur 6 Nomor 76 Handil Bakti', '57691'),
(4, '19630577', 'Syahira Ramadhani', 'Banjarmasin', '2020-12-30', 'Perempuan', 'Komplek HKSN Jalur 11 Nomor 9 Kayutangi Banjarmasin', '97654'),
(7, '19630765', 'Baihaqi', 'Grobogan', '2021-02-05', 'Laki-laki', 'Jl. Usaha Jaya Kandangan Kompleks Ratu Bumi no. 9', '56743'),
(8, '19630389', 'Geralt of Rivia', 'Kaer Morhen', '2021-02-04', 'Laki-laki', 'For now, i live at Novigrad', '46458');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indexes for table `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  ADD PRIMARY KEY (`idmahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `idLogin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  MODIFY `idmahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
