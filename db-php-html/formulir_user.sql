-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 05:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir_user`
--

CREATE TABLE `formulir_user` (
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Alamat_lengkap` varchar(255) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Pendidikan_Terakhir` varchar(255) DEFAULT NULL,
  `Nama_Institusi` varchar(255) DEFAULT NULL,
  `Jenis_Kelamin` varchar(255) DEFAULT NULL,
  `Motto_Hidup` varchar(255) DEFAULT NULL,
  `Hobby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir_user`
--

INSERT INTO `formulir_user` (`First_Name`, `Last_Name`, `Email`, `Alamat_lengkap`, `Tanggal_Lahir`, `Pendidikan_Terakhir`, `Nama_Institusi`, `Jenis_Kelamin`, `Motto_Hidup`, `Hobby`) VALUES
('Nurul', 'Arina', 'nurul@gmail.com', '', '2020-04-29', 'S2', 'PNUP', 'P', 'Let it flow', 'Membaca'),
('Nurul', 'Arina', 'nurul@gmail.com', 'Abbanuange', '2020-04-29', 'S3', 'PNUP', 'L', 'Let it flow', 'Membaca'),
('Asilah', 'Azantara', 'asilah@gmail,com', 'Makassar', '2011-03-12', 'S2', 'ITB', 'P', 'Hidup hanya sekali', 'Memasak'),
('Syamsu ', 'Rijal', 'Rijal@gmail.com', 'Lilirilau Kab, Soppeng', '2020-04-12', 'S2', 'ITS', 'L', 'Jalani aja ahh', 'Berolahraga'),
('Sinta', 'Purnama', 'Sinta@gmail.com', 'Jl. Minasa Upa', '2020-05-01', 'SMP', 'SMPN 1 Makassar', 'P', 'Tolong menolonglah', 'Menyanyi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
