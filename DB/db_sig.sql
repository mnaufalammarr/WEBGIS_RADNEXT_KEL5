-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2021 at 03:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `no_adm` varchar(20) NOT NULL,
  `mail_adm` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_adm`, `nama_adm`, `no_adm`, `mail_adm`, `username`, `password`) VALUES
(1, 'Naufal', '087852888998', 'mail@gmail.com', 'admin', '34cced900cf6fd7bd6deb33e7b1b6ce5'),
(2, 'fahrudi', '0872552', 'fahrudi@mail.com', 'fahrudi', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_point`
--

CREATE TABLE `tb_point` (
  `id_point` int(11) NOT NULL,
  `id_adm` int(11) NOT NULL,
  `nama_point` varchar(50) NOT NULL,
  `alamat_point` varchar(255) NOT NULL,
  `no_point` varchar(20) NOT NULL,
  `lokasi_point` point NOT NULL,
  `catatan` text NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_point`
--

INSERT INTO `tb_point` (`id_point`, `id_adm`, `nama_point`, `alamat_point`, `no_point`, `lokasi_point`, `catatan`, `tipe`) VALUES
(10, 2, 'Tiang ODP 0', '', '', 0x000000000101000000115663096b2f5c409d08878329171dc0, '', 'odp'),
(11, 2, 'Tiang ODP 02', '', '', 0x000000000101000000a013e74d6a2f5c40d32b0a606f171dc0, '', 'odp'),
(12, 2, 'Tiang ODP 01', '', '', 0x0000000001010000009a25016a6a2f5c40384e0af31e171dc0, 'Nempel Tembok', 'odp'),
(13, 2, 'Mas Aang', '', '', 0x000000000101000000381c4c79632f5c406e5397e71c171dc0, '', 'client'),
(14, 2, 'Balai RT 06', '', '', 0x00000000010100000013bbb6b75b2f5c40d8d825aab7161dc0, '', 'client'),
(15, 2, 'Bu Anisa', '', '', 0x000000000101000000b91c0afa662f5c4046a0b07a76171dc0, '', 'client'),
(16, 2, 'Bu Sumi', '', '', 0x0000000001010000005bbee435652f5c40481630815b171dc0, '', 'client'),
(17, 2, 'Bu Yayuk', '', '', 0x0000000001010000001a2b7b5c652f5c407ddb02f85d171dc0, '', 'client'),
(18, 2, 'Bu Ratna', '', '', 0x000000000101000000bde47ff277171dc0bde47ff277171dc0, '', 'client'),
(19, 2, 'Mas Dhafi', '', '', 0x00000000010100000043931f4c652f5c40bde47ff277171dc0, '', 'client'),
(20, 2, 'Bu Rosidah', '', '', 0x000000000101000000b6f3fdd4782f5c40292a768fc7171dc0, '', 'client'),
(21, 2, 'Bu Sifa', '', '', 0x000000000101000000ca840431752f5c4027cdd545c0171dc0, '', 'client'),
(22, 2, 'Balai RT O1', '', '', 0x000000000101000000975874466f2f5c40c7b2aa6faa171dc0, '', 'client'),
(23, 2, 'Bu Nilla', '', '', 0x000000000101000000c520b072682f5c4027cdd545c0171dc0, '', 'client'),
(24, 2, 'Bu Ida', '', '', 0x00000000010100000024157c89672f5c400421b47977171dc0, '', 'client'),
(25, 2, 'Pak Agung', '', '', 0x00000000010100000030ce29125d2f5c40c4550a26a3171dc0, '', 'client'),
(26, 2, 'Tiang ODP 4', '', '', 0x00000000010100000022e6ed63602f5c40234c512e8d171dc0, '', 'odp'),
(27, 2, 'Bu Anik', '', '', 0x00000000010100000068a0e870632f5c40292a768fc7171dc0, '', 'client'),
(28, 2, 'Mama Nyo/ Bu Suwandayani', '', '', 0x000000000101000000a8b75043652f5c402b8716d9ce171dc0, '', 'client'),
(29, 2, 'Balai RT 01 Tegalsari', '', '', 0x0000000001010000007c31efcc5f2f5c40c7b2aa6faa171dc0, '', 'Tipe'),
(30, 2, 'Tiang ODP 3', '', '', 0x000000000101000000ec42bd2a612f5c409eefa7c64b171dc0, '', 'odp'),
(31, 2, 'Balai RT 05', '', '', 0x000000000101000000a68526e45e2f5c40391b3c5d27171dc0, '', 'client'),
(32, 2, 'Bu Linda', '', '', 0x0000000001010000004c378941602f5c40d3e92faafb161dc0, '', 'client'),
(33, 2, 'Warung Mbak Ju', '', '', 0x000000000101000000de605e36702f5c4011ecaea2f5161dc0, '', 'client'),
(34, 2, 'Ali Mahoni', '', '', 0x0000000001010000008a50b692672f5c40ac9800b2c6171dc0, '', 'client'),
(35, 2, 'Bu Isun', '', '', 0x000000000101000000ae8b91db652f5c40edd22b0a60171dc0, '', 'Tipe'),
(36, 2, 'Bu Agustin', '', '', 0x00000000010100000031f4e38a662f5c409b5434d6fe161dc0, '', 'client'),
(37, 2, 'Mas Erik', '', '', 0x00000000010100000031f4e38a662f5c409b5434d6fe161dc0, '', 'Tipe'),
(38, 2, 'Mas Satriyono', '', '', 0x000000000101000000393c2938612f5c40adfe637cf3161dc0, '', 'client'),
(39, 2, 'Balai RT 06', '', '', 0x000000000101000000158e2095622f5c40e60de66503171dc0, '', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `tb_point`
--
ALTER TABLE `tb_point`
  ADD PRIMARY KEY (`id_point`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_point`
--
ALTER TABLE `tb_point`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
