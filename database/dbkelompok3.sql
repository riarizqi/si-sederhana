-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 03:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkelompok3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama_admin`, `password_admin`) VALUES
('Admin01', 'Muhamad Rizqi Sani', 'c2318cee73c68b44c1de757339f43aa6'),
('Admin02', 'Ria Rizqi Amalia', 'd42a9ad09e9778b177d409f5716ac621'),
('Admin03', 'Salma Atsila Shabiyya', 'f6852b2a3ac0cd7e69c801f69eddb57a');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `kd_admin` varchar(10) NOT NULL,
  `id_produk` int(4) NOT NULL,
  `st_berita` varchar(6) NOT NULL,
  `tgl_berita` date NOT NULL,
  `jam_berita` time NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `img_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kd_admin`, `id_produk`, `st_berita`, `tgl_berita`, `jam_berita`, `judul_berita`, `isi_berita`, `img_berita`) VALUES
(1, 'Admin02', 5, 'Blokir', '2020-05-02', '17:24:26', 'Menjelang Lebaran, Baju Ini Ludes Diborong Pembeli', 'Gamis menjadi baju yang paling digemari kalangan wanita menjelang lebaran seperti sekarang ini.', '20201213172527_berita.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `kd_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `st_pengiriman` varchar(50) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `jam_pengiriman` time NOT NULL,
  `alamat_tujuan` varchar(200) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`kd_produk`, `nama_produk`, `kategori`, `st_pengiriman`, `tgl_pengiriman`, `jam_pengiriman`, `alamat_tujuan`, `jumlah`) VALUES
('GBDK234', 'Gaun Baby Doll Kids Pink Floral', 'Pakaian Anak', 'Terkirim', '2021-01-05', '11:07:41', 'Jl. Pramuka No. 14 Tegal', 1),
('HDKM143', 'Hoodie Kids Maroon', 'Pakaian Anak', 'Terkirim', '2020-12-08', '14:07:41', 'Jl. Kapten Ismail No. 34 Kota Tegal', 2),
('JKTD675', 'Black Leather Jacket', 'Pakaian Dewasa', 'Dalam Proses Pengiriman', '2021-01-14', '17:46:17', 'Jl. Sawo Barat No. 27 Kota Tegal', 1),
('SWJW241', 'Sweater Rajut Big Size', 'Pakaian Wanita', 'Terkirim', '2021-01-12', '09:09:16', 'Jl. Nanas No. 24 Kota Tegal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `kd_produk` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `img_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kd_produk`, `kategori`, `nama_produk`, `jumlah`, `img_produk`) VALUES
('GBDK234', 'Pakaian Anak', 'Gaun Baby Doll Kids Pink Floral', 56, ''),
('HDKM143', 'Pakaian Anak', 'Hoodie Kids Maroon', 84, ''),
('JKTD675', 'Pakaian Anak', 'Black Leather Jacket', 34, ''),
('SWJW241', 'Pakaian Wanita', 'Sweater Rajut Big Size', 121, '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kd_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL,
  `img_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `nama_produk`, `kategori`, `stok`, `img_produk`) VALUES
('GBDK234', 'Gaun Baby Doll Pink Floral', 'Pakaian Anak', 145, ''),
('HDKM143', 'Hoodie Kids Maroon', 'Pakaian Anak', 112, ''),
('JKTD675', 'Black Leather Jacket', 'Pakaian Anak', 98, ''),
('KMJBAN234', 'Kemeja Batik', 'Pakaian Dewasa', 125, ''),
('KMJKAN145', 'Kemeja Kotak-kotak', 'Pakaian Anak', 214, ''),
('SWJWAN235', 'Sweater Rajut Big Size', 'Pakaian Wanita', 241, '');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapanpembeli`
--

CREATE TABLE `tanggapanpembeli` (
  `id_customer` int(10) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `kd_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tanggapan` varchar(200) NOT NULL,
  `img_tanggapan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapanpembeli`
--

INSERT INTO `tanggapanpembeli` (`id_customer`, `nama_customer`, `kd_produk`, `nama_produk`, `tanggapan`, `img_tanggapan`) VALUES
(1, 'Indira Hermawan', 'SWJW241', 'Sweater Rajut Big Size', 'Sweaternya bagus, Sesuai pesanan. ', ''),
(2, 'Renita Fara', 'JKTD675', 'Black Leather Jacket', 'Jaketnya keren, ukurannya pas, warnanya caep. mantap.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `tanggapanpembeli`
--
ALTER TABLE `tanggapanpembeli`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tanggapanpembeli`
--
ALTER TABLE `tanggapanpembeli`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
