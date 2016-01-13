-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 06:42 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ck_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`id_album` int(11) NOT NULL,
  `nama_album` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `author` int(20) NOT NULL,
  `cover_album` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `author` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi_artikel`, `kategori`, `tanggal`, `author`, `foto`) VALUES
(1, 'berita1', '<p>Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;</p>\r\n', 1, '2015-11-30', 1, 'Chrysanthemum.jpg'),
(2, 'katalog1', '<p>Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;</p>\r\n', 2, '2015-11-30', 1, 'Jellyfish.jpg'),
(3, 'artikel', '<p>Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;</p>\r\n', 3, '2015-11-30', 1, 'Hydrangeas.jpg'),
(4, 'kata', '<p>Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;Patokan watt per liter atau watt per gallon adalah petunjuk umum yang diciptakan untuk orang awam agar dapat dengan mudah menentukan rata2 cahaya yang diperlukan untuk memulai aquascape, sebab cahaya yang cukup dan berkualitas adalah faktor paling mutlak untuk memulai sebuah aquascape, bahkan setting yang menggunakan tanaman low light sekalipun.&nbsp;</p>\r\n', 4, '2015-11-30', 1, 'Penguins.jpg'),
(5, 'tes', '<p>tes</p>\r\n', 1, '2015-12-29', 1, 'Hydrangeas1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
`id_foto` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `author` int(20) NOT NULL,
  `foto_thumb` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `kategori` varchar(225) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'berita'),
(2, 'katalog'),
(3, 'artikel'),
(4, 'kata');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `judul_web` text NOT NULL,
  `desk_web` text NOT NULL,
  `logo_web` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`judul_web`, `desk_web`, `logo_web`) VALUES
('CARIKODE.COM', 'Tutorial Membuat CMS Sederhana menggunakan framework CodeIgniter dan Bootstrap', 'Emerson-Climate-Logo_BW1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
