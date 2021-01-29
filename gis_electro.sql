-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2021 at 01:47 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_electro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
('A001', 'Administator', 'admin@electro.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `subjek`, `komentar`) VALUES
(1, 'Budi', 'budi@gmail.com', 'Info', 'Jutaan orang tidak menyadari'),
(2, 'Setiawan', 'setiawan@gmail.com', 'Binomo', 'Bahwa hanya dengan berdiam diri'),
(3, 'Alpredo', 'alpredo.vandy@gmail.com', 'Marker', 'Dipercantik lagi'),
(4, 'Galih', 'galih@gmail.com', 'KKKK', 'LULULULU');

-- --------------------------------------------------------

--
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id`, `nama`, `alamat`, `kategori`, `lat`, `lng`, `file`) VALUES
(8, 'Bona Pet', 'Jln. Patria Sari No.4, Rumbai', 'Komputer', 0.569883, 101.423271, '710pcr_tampak_depa_1421398850.jpg'),
(9, 'Fluffy pet shop', 'Jln. Paus No.14 B, Rumbai', 'Rumbai', 0.570083, 101.430923, 'Fluffy1.jpg'),
(10, 'Meoong pet shop', 'Jln. Khayangan No.18, Rumbai', 'Rumbai', 0.559767, 101.435387, 'MeongHangtuah1.jpg'),
(11, 'Aquatic Pet shop', 'Jl.Riau no 52 D , Pekanbaru Riau', 'Senapelan', 0.535990, 101.438515, 'Akuatiq2.jpg'),
(12, 'Rainbow Pet shop', 'Jl. Lili 1 No.24 C, Labuh baru, kec.payung sekaki Pekanbaru Riau', 'Payung sekaki', 0.528348, 101.426071, 'Rainbow.jpg'),
(13, 'Amora Pet shop', 'Jl. Dahlia Ujung No. 99 C', 'Kedung sari', 0.524162, 101.431152, 'Amora2.jpg'),
(14, 'Pawradise Pet Shop', 'Jl. Kulim No. 20 B , Tampan', 'Tampan', 0.540223, 101.425507, 'PawRadise.jpg'),
(15, 'Tiara Pet shop', 'Jl. Riau Ujung 261 A, Pekanbaru Riau', 'Senapelan', 0.535255, 101.410675, 'Tiara.jpg'),
(16, 'Evo Cat Shop', 'Jl.Riau No.169 J', 'Senapelan', 0.535271, 101.429893, 'Evo.jpg'),
(17, 'Kenken Petshop', 'Jl.Utama, Rejosari Kulim, Tenayang Raya', 'Tenayang Raya', 0.517826, 101.475700, 'Kenken.jpg'),
(18, 'Sky Petshop', 'Jl.Pemuda Ujung No.1', 'Payung sekaki', 0.541222, 101.408745, 'Sky.jpg'),
(20, 'Bravo Petshop', 'Jl. Tuanku Tambusai No.207', 'Marpoyan Damai', 0.508052, 101.442139, 'Cahaya.jpg'),
(21, 'Zero Cat Shop', 'Jl Todak-Tapah No.99, Tengkerang Barat, Marpoyan Damai, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau', 'Marpoyan Damai', 0.498830, 101.427979, 'Zero.jpg'),
(22, 'Holly Pet', 'Jl.Riau NO.28 A', 'Senapelan', 0.537650, 101.423874, 'Holly3.jpg'),
(23, 'Ketket Petshop', 'Jl.Pahlawan Kerja No.44', 'Marpoyan Damai', 0.456001, 101.448395, 'Ketket1.jpg'),
(24, 'Sahabat Kucing Pekanbaru', 'Jl.Umban sari no.91', 'Rumbai', 0.569361, 101.422516, 'SahabatKucing.jpg'),
(25, 'Felis Petshop', 'Sekip, Lima Puluh, Pekanbaru City, Riau 28114', 'Lima Puluh', 0.529633, 101.459343, 'Felis.jpg'),
(26, 'Dokter hewan dan petshop griya satwa', 'jl delima no 16 panam, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28289', 'Tampan', 0.465872, 101.403687, 'DokterHewan.jpg'),
(27, 'Kety-kety cat shop', 'Jl. Durian, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28156', 'Payung sekaki', 0.522977, 101.429512, 'KetyKety.jpg'),
(28, 'Khilek Pet Shop', 'Jl. Swakarya, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293', 'Tampan', 0.463215, 101.381088, 'Khilek.jpg'),
(29, 'Exotic Pet Shop', 'Depan Baterai R, Jl. Harapan Raya No.148, Tengkerang Selatan, Bukit Raya, Pekanbaru City, Riau 28126', 'Tangkerang Selatan', 0.499628, 101.460030, 'Exotic.jpg'),
(30, 'Hurairah Pet Shop', 'Jl. Srikandi No.12, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', 'Tampan', 0.480762, 101.407097, 'Hurairah.jpg'),
(31, 'Andi PB2', 'Jl. Srikandi No.14, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', 'Tampan', 0.481598, 101.407120, 'EvoRiau.jpg'),
(32, 'Rumah Kucing Brp', 'Jl. HR. Soebrantas Panam No.Kelurahan, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Tampan', 0.462737, 101.389175, 'RumahKucing.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peta`
--
ALTER TABLE `peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
