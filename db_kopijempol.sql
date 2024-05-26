-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopijempol`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `waktu` date NOT NULL,
  `isi` longtext DEFAULT NULL,
  `foto_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `waktu`, `isi`, `foto_berita`) VALUES
(1, 'Festival Produk UKM ber-SNI 28 -30 Oktober 2022 di Palembang', '2023-01-03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'd2.jpg'),
(2, 'Pameran Industri Kreatif Sumatera Selatan', '2023-01-02', 'Kunjungan Mentri PAREKRAF ke stand Kopi Cap Bukit Jempol pada selasa 8 Desember 2022 yang bertepat di PTC Indah Mall', 'b4.jpg'),
(3, 'Festival Produk UKM ber-SNI 28 -30 Oktober 2022 di Palembang', '2023-01-01', 'Festival Produk UKM ber-SNI 28 -30 Oktober 2022 di Palembang Square Mal di hari sabtu ini menghadirkan beragam pilihan kopi', 'b2.jpg'),
(4, 'Festival Produk UKM 10 - 30 Oktober 2022 di Palembang Indah ', '2023-01-01', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'b33.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `nama_product` varchar(40) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `release_date`, `nama_product`, `deskripsi`, `foto_produk`) VALUES
(1, '2023-01-01', 'Kopi Robusta', ' is simply dummy text of the printing and typesetting industry. ', 'kopi12.png'),
(2, '2023-01-06', 'Kopi Arabika', 'is simply dummy text of the printing and typesetting industry.', 'kopi21.png'),
(3, '2023-01-12', 'Kopi Jempol', 'is simply dummy text of the printing and typesetting industry.', 'kopi3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Muhammad Benny Fathurrahman', 'bennyfathurr26@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(3, 'Benz', 'benz@benz.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
