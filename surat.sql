-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2016 at 09:22 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_baru`
--

CREATE TABLE `surat_keluar_baru` (
  `id_surat_keluar` int(10) NOT NULL,
  `tgl_keluar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_surat_keluar` varchar(255) NOT NULL,
  `tujuan_surat_keluar` varchar(255) NOT NULL,
  `hal_surat_keluar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar_baru`
--

INSERT INTO `surat_keluar_baru` (`id_surat_keluar`, `tgl_keluar`, `no_surat_keluar`, `tujuan_surat_keluar`, `hal_surat_keluar`) VALUES
(1, '2016-06-04 06:30:06', '273-INT-UII-27/IX-2016', 'PT InesTropika', 'Pemberhentian Kerjasama');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `tgl_terima` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `asal_surat_masuk` varchar(255) NOT NULL,
  `no_surat_masuk` varchar(255) NOT NULL,
  `hal_surat_masuk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `tgl_terima`, `asal_surat_masuk`, `no_surat_masuk`, `hal_surat_masuk`) VALUES
(1, '2016-06-04 03:07:53', 'UII', '732212', 'Pengumuman Libur Bersama'),
(2, '2016-06-04 03:08:49', 'DIKTI Yogyakarta', '073-XII-2016', 'Hibah Bersaing'),
(3, '2016-06-04 06:08:56', 'Universitas Atmajaya Yogyakarta', 'UAJY-EKS-2011/2016', 'Diesnatalis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_keluar_baru`
--
ALTER TABLE `surat_keluar_baru`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar_baru`
--
ALTER TABLE `surat_keluar_baru`
  MODIFY `id_surat_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
