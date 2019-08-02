-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 11:40 AM
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
-- Database: `latihan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data karyawan`
--

CREATE TABLE `data karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data karyawan`
--

INSERT INTO `data karyawan` (`id`, `nama`, `jk`, `alamat`, `jabatan`, `foto`) VALUES
(1, 'Tukijo', 'Pria', 'Jl. Mentok no 9 Kalisari Dki Jakarta', 'OB', 'http://staff.uny.ac.id/sites/default/files/160x213xTukijo,P20Slamet_0.JPG,q1285262293.pagespeed.ic.pIeaYgFbOP.jpg'),
(2, 'Mendi', 'Pria', 'Jl. Bagus 19 Kalibaru Jombang', 'Cleaning Service', 'https://www.unitedcapitalplcgroup.com/wp-content/uploads/2015/07/chika-mordi.jpg'),
(3, 'Surya', 'Pria', 'Jl. Jelambar 2 Banjaran Pasar Rebo', 'Programmer', 'https://timesofindia.indiatimes.com/thumb/msid-62403853,width-800,height-600,resizemode-4/62403853.jpg'),
(4, 'Sinta', 'Perempuan', 'Jl. Cigombong 3 Petamburan Jakarta Barat', 'Sekretaris', 'https://cdn2.tstatic.net/bali/foto/bank/images/ayu-serly-mahardika.jpg'),
(5, 'Tifla', 'Perempuan', 'Jl. Bantar Gebang Kayuringin Bekasi', 'Front End Developer', 'https://msjosettekinder.files.wordpress.com/2018/10/tifla.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data karyawan`
--
ALTER TABLE `data karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data karyawan`
--
ALTER TABLE `data karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
