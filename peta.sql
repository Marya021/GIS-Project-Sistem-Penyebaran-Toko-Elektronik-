-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 07:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `peta`
--

CREATE TABLE `peta` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `lat` float(20,6) NOT NULL,
  `lng` float(20,6) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta`
--

INSERT INTO `peta` (`id`, `nama`, `alamat`, `kategori`, `lat`, `lng`, `file`) VALUES
(8, 'Central Panam Electronics', 'Jl. HR. Soebrantas Panam No.KM, RW.5, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28289', 'Toko Elektronik', 0.484906, 101.398674, 'Central Panam Electronics.PNG'),
(9, 'Batam Elektronik', 'Jl. Nangka No.18D, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.504818, 101.424644, ''),
(10, 'Toko Yongmae Elektronik', 'Jl. Delima No.3, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.480666, 101.408203, ''),
(11, 'Fajar Store', 'Jl. Delima, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', 'Toko HandPhone', 0.475321, 101.405800, ''),
(12, 'Panam Celluler', 'Jl. Imam Munandar No.kelurahan, Tengkerang Tim., Kec. Bukit Raya, Kota Pekanbaru, Riau 28288', 'Toko HandPhone', 0.508496, 101.460510, ''),
(13, 'Istana Lampu & Elektrik', 'Jl. Tuanku Tambusai No.377, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28122', 'Toko Lampu', 0.509142, 101.436317, ''),
(14, 'Man Elektronik', 'Simpang Baru, Tampan, Pekanbaru, Riau 28292', 'Toko Lampu', 0.928808, 101.395157, ''),
(15, 'Panam Computer Shop', 'Jl. HR. Soebrantas Panam, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.469758, 101.401596, ''),
(16, 'Best Computer', 'JL. HR Subrantas, No.188-189, KM.11, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.469384, 101.399040, ''),
(17, 'Bolt Komputer Pekanbaru', 'Jl. HR. Soebrantas Panam No.114, RW.PANAM, Kel, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.468698, 101.405052, ''),
(18, 'Erafone Megastore Ruko Panam', 'Jl. HR. Soebrantas Panam No.112, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Elektronik', 0.467384, 101.403633, ''),
(20, 'Story-i Pekanbaru', 'Mall SKA Ground Floor no.24, Jl. Soekarno - Hatta, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', 'Toko HandPhone', 0.504486, 101.418221, ''),
(21, 'Polytron', 'Jl. Jend. Sudirman, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28155', 'Toko Elektronik', 0.530406, 101.450836, ''),
(22, 'Computer Supermarket', 'Jl. Jend Sudirman 498 E - F, Simpang Empat, Pekanbaru Kota, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.506272, 101.453300, ''),
(23, 'Toko A Fauzi', 'Jl. Soekarno - Hatta No.38, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.500215, 101.419487, ''),
(24, 'Kartama Elektronik', 'Jl. Kartama No.2, Maharatu, Marpoyan Damai, Pekanbaru City, Riau', 'Toko Elektronik', 0.447981, 101.437775, ''),
(25, 'Arengka Ponselindo', 'Jl. Soekarno - Hatta No.101, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko HandPhone', 0.459978, 101.417885, ''),
(26, 'Everbest Cellular', 'Jl. Soekarno - Hatta, Maharatu, Kec. Tampan, Kota Pekanbaru, Riau 28289', 'Toko HandPhone', 0.480932, 101.433853, ''),
(27, 'Asia Ponsel Center', 'Jl. Jend. Sudirman No.319A, Cinta Raja, Kec. Sail, Kota Pekanbaru, Riau 28285', 'Toko HandPhone', 0.520570, 101.595810, ''),
(28, 'Plasma Elektronik Pekanbaru', 'Jl. Senapelan No.10 Toko PLASMA, Depan Usaha Roti Senapelan. Samping Satlantas. Pasar Bawah Pekanbaru RT/RW 1, Kp. Dalam, Kec. Senapelan, Kota Pekanbaru, Riau 28153', 'Toko Elektronik', 0.537114, 101.443024, ''),
(29, 'Modelux Mobile Center', 'Jl. Jenderal Sudirman No.121 B-D, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28125', 'Toko Handphone', 0.533554, 101.448387, ''),
(30, 'Duta Ponsel Mall Pekanbaru', 'Mall Pekanbaru, Jl. Jend. Sudirman No.03, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28155', 'Toko Handphone', 0.531931, 101.448227, ''),
(31, 'Flazz Computer', 'Jln Riau No No.14 A, Kampung Baru, Senapelan, Pekanbaru City, Riau 28154', 'Toko Komputer', 0.536898, 101.434441, ''),
(32, 'Sigma Komputer', 'Jl. Teratai No.152A, Pulau Karam, Kec. Sukajadi, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.528141, 101.440659, ''),
(33, 'Rama elektronik', 'Jl. Bukit Barisan No.Kelurahan, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28282', 'Toko Elektronik', 0.486698, 101.503319, ''),
(34, 'Galeri komputer', 'Jl. Durian, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28122', 'Toko Komputer', 0.517884, 101.432396, ''),
(35, 'Index Computer & Phones', 'Jl. Durian No.233C, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Kepulauan Riau 28292', 'Toko Komputer', 0.517771, 101.422775, ''),
(36, 'Galeri komputer', 'Jl. Durian, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28122', 'Toko Komputer', 0.517884, 101.432396, ''),
(37, 'Megakom', 'Jalan Tuanku Tambusai no.51C Kampung Melayu Pekanbaru Kota, Kp. Tengah, Kec. Sukajadi, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.509338, 101.442711, ''),
(38, 'Plasa Komputer', 'Jl. Tuanku Tambusai, Labuh Baru Tim., pekanbaru, Kota Pekanbaru, Riau 28122', 'Toko Komputer', 0.504763, 101.430916, ''),
(39, 'Promedia Computer - Pusat Komputer & Laptop Pekanbaru Riau', 'Jl. Tuanku Tambusai No.2-3, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Komputer', 0.504763, 101.430916, ''),
(40, 'Computer Square', 'Jl. Tuanku Tambusai No.9, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28123', 'Toko Komputer', 0.503754, 101.427513, ''),
(41, 'Komputer 88', 'Jl. Tuanku Tambusai No.10 A, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124', 'Toko Komputer', 0.502137, 101.424049, ''),
(42, 'Century Computer', 'Jl. Tuanku Tambusai No.500f, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Komputer', 0.501944, 101.421303, ''),
(43, 'Plasa Komputer', 'Jl. Tuanku Tambusai, Labuh Baru Tim., pekanbaru, Kota Pekanbaru, Riau 28122', 'Toko Komputer', 0.504763, 101.430916, ''),
(44, 'Promedia Computer - Pusat Komputer & Laptop Pekanbaru Riau', 'Jl. Tuanku Tambusai No.2-3, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Komputer', 0.504763, 101.430916, ''),
(45, 'Computer Square', 'Jl. Tuanku Tambusai No.9, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28123', 'Toko Komputer', 0.503754, 101.427513, ''),
(46, 'Komputer 88', 'Jl. Tuanku Tambusai No.10 A, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124', 'Toko Komputer', 0.502137, 101.424049, ''),
(47, 'Century Computer', 'Jl. Tuanku Tambusai No.500f, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Komputer', 0.501944, 101.421303, ''),
(48, 'Sudirman Komputer', 'Jl. Jend. Sudirman, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.508035, 101.450806, ''),
(49, 'Computer Supermarket', 'Jl. Jend Sudirman 498 E - F, Simpang Empat, Pekanbaru Kota, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.503264, 101.455116, ''),
(50, 'Planet Komputer', 'Jl. Jend. Sudirman c No.419b, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Komputer', 0.502753, 101.455399, ''),
(51, 'Multi Computer', 'Jl. Imam Munandar No.43, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Komputer', 0.500562, 101.469269, ''),
(52, 'Edycom', 'Jl. HR. Soebrantas Panam No.193, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.463715, 101.398453, ''),
(53, 'Tang\'s Ponsel', 'Jl. HR. Soebrantas Panam No.4 5, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.463875, 101.403534, ''),
(54, 'Toko Batam Jaya Elektronik', 'Jl. Jend. Sudirman, Sago, Kec. Senapelan, Kota Pekanbaru, Riau 28155', 'Toko Elektronik', 0.534708, 101.447479, ''),
(55, 'Toko Sumber Jaya Elektronik', 'Jl. Pemuda, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291', 'Toko Elektronik', 0.544597, 101.416763, ''),
(56, 'Santori Elektronik', 'Jl. H. Imam Munandar Harapan Raya No.275-277, Bukit Raya, Tengkerang Utara, Tenayan Raya, Pekanbaru City, Riau 28131', 'Toko Elektronik', 0.501435, 101.475121, ''),
(57, 'Toko Hongkong Expo', 'Jl. Harapan Raya No.310, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.500710, 101.477150, ''),
(58, 'Sudirman Komputer', 'Jl. Jend. Sudirman, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.508035, 101.450806, ''),
(59, 'Computer Supermarket', 'Jl. Jend Sudirman 498 E - F, Simpang Empat, Pekanbaru Kota, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.503264, 101.455116, ''),
(60, 'Planet Komputer', 'Jl. Jend. Sudirman c No.419b, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Komputer', 0.502753, 101.455399, ''),
(61, 'Multi Computer', 'Jl. Imam Munandar No.43, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Komputer', 0.500562, 101.469269, ''),
(62, 'Edycom', 'Jl. HR. Soebrantas Panam No.193, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.463715, 101.398453, ''),
(63, 'Tang\'s Ponsel', 'Jl. HR. Soebrantas Panam No.4 5, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', 'Toko Komputer', 0.463875, 101.403534, ''),
(64, 'Toko Batam Jaya Elektronik', 'Jl. Jend. Sudirman, Sago, Kec. Senapelan, Kota Pekanbaru, Riau 28155', 'Toko Elektronik', 0.534708, 101.447479, ''),
(65, 'Toko Sumber Jaya Elektronik', 'Jl. Pemuda, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291', 'Toko Elektronik', 0.544597, 101.416763, ''),
(66, 'Santori Elektronik', 'Jl. H. Imam Munandar Harapan Raya No.275-277, Bukit Raya, Tengkerang Utara, Tenayan Raya, Pekanbaru City, Riau 28131', 'Toko Elektronik', 0.501435, 101.475121, ''),
(67, 'Toko Hongkong Expo', 'Jl. Harapan Raya No.310, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.500710, 101.477150, ''),
(68, 'Hongkong Elektronik', 'JL H. Imam Munandar No. 322 C-D, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.500921, 101.469765, ''),
(69, 'Toko Central Elektronik', 'Jalan Imam Munandar No 3 25b Kelurahan, Tengkerang Sel., Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Lampu', 0.505284, 101.475395, ''),
(70, 'Toko Prima Perkasa Elektronik', 'Jl. Harapan Raya No.352f, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Elektronik', 0.502476, 101.474823, ''),
(71, 'Toko Surya Harapan', 'Jl. Harapan Raya No.219 A, Tengkerang Sel., Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Elektronik', 0.752098, 101.595024, ''),
(72, 'BBM Elektronik', 'Jl. Harapan Raya No.140, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.500851, 101.476479, ''),
(73, 'Harapan Jaya Service', 'Jl. H. Imam Munandar / Harapan Raya No.61, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Elektronik', 0.501672, 101.469719, ''),
(74, 'Sinar Cahaya Elektronik Toko', 'Jl. Harapan Raya, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28289', 'Toko Lampu', 0.503806, 101.471123, ''),
(75, 'Sony Elektronik', 'Jl. Jend. Sudirman No.178 - 182, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28127', 'Toko Elektronik', 0.511555, 101.452858, ''),
(76, 'Rama Elektronik', 'Jl. Bukit Barisan No.Kelurahan, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28282', 'Toko Elektronik', 0.518822, 101.590057, ''),
(77, 'Toko Galaxy jaya', 'Jl. Sepakat Perum MKP, Kulim, Kecamatan Sepakat, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.521568, 101.532387, ''),
(78, 'Natratronic', 'Jl. Lintas Sumatera No.km.13, Kulim, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28289', 'Toko Elektronik', 0.478848, 101.519775, ''),
(79, 'Hongkong Elektronik', 'JL H. Imam Munandar No. 322 C-D, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.500921, 101.469765, ''),
(80, 'Toko Central Elektronik', 'Jalan Imam Munandar No 3 25b Kelurahan, Tengkerang Sel., Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Lampu', 0.505284, 101.475395, ''),
(81, 'Toko Prima Perkasa Elektronik', 'Jl. Harapan Raya No.352f, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Elektronik', 0.502476, 101.474823, ''),
(82, 'Toko Surya Harapan', 'Jl. Harapan Raya No.219 A, Tengkerang Sel., Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Elektronik', 0.752098, 101.595024, ''),
(83, 'BBM Elektronik', 'Jl. Harapan Raya No.140, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.500851, 101.476479, ''),
(84, 'Harapan Jaya Service', 'Jl. H. Imam Munandar / Harapan Raya No.61, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', 'Toko Elektronik', 0.501672, 101.469719, ''),
(85, 'Sinar Cahaya Elektronik Toko', 'Jl. Harapan Raya, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau 28289', 'Toko Lampu', 0.503806, 101.471123, ''),
(86, 'Sony Elektronik', 'Jl. Jend. Sudirman No.178 - 182, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28127', 'Toko Elektronik', 0.511555, 101.452858, ''),
(87, 'Rama Elektronik', 'Jl. Bukit Barisan No.Kelurahan, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28282', 'Toko Elektronik', 0.518822, 101.590057, ''),
(88, 'Toko Galaxy jaya', 'Jl. Sepakat Perum MKP, Kulim, Kecamatan Sepakat, Kota Pekanbaru, Riau 28131', 'Toko Elektronik', 0.521568, 101.532387, ''),
(89, 'Natratronic', 'Jl. Lintas Sumatera No.km.13, Kulim, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28289', 'Toko Elektronik', 0.478848, 101.519775, ''),
(90, 'Batam elektronik', 'Jl. Nangka No.18D, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.504520, 101.423920, ''),
(91, 'Mitra Central Elektronik', 'Jalan Tuanku Tambusai No. 34,Kelurahan Labuh Baru Timur,Kecamatan Payung, Sekaki, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.502056, 101.424438, ''),
(92, 'Toko Mega Elektronik', 'Jl. Imam Munandar Kelurahan No.69, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282', 'Toko Lampu', 0.501629, 101.458290, ''),
(93, 'Sumber Cahaya Elektronik', 'Simpang Bpg, Jl. Hangtuah Ujung No.206E, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28112', 'Toko Lampu', 0.765781, 102.544884, ''),
(94, 'Wijaya Elektronik', 'toko wijaya elektronik, Jl. Hangtuah Ujung No.50, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28156', 'Toko Elektronik', 1.051390, 101.380333, ''),
(95, 'Toko elektronik Sinar Raya', 'Jl. Imam Munandar No.362d, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', 'Toko Lampu', 0.499186, 101.483200, ''),
(96, 'Toko Singapura Elektronik', 'No.412DEF, Jl. Jend. Sudirman, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.507978, 101.450676, ''),
(97, 'Batam elektronik', 'Jl. Nangka No.18D, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.504520, 101.423920, ''),
(98, 'Mitra Central Elektronik', 'Jalan Tuanku Tambusai No. 34,Kelurahan Labuh Baru Timur,Kecamatan Payung, Sekaki, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', 'Toko Elektronik', 0.502056, 101.424438, ''),
(99, 'Toko Mega Elektronik', 'Jl. Imam Munandar Kelurahan No.69, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28282', 'Toko Lampu', 0.501629, 101.458290, ''),
(100, 'Sumber Cahaya Elektronik', 'Simpang Bpg, Jl. Hangtuah Ujung No.206E, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28112', 'Toko Lampu', 0.765781, 102.544884, ''),
(101, 'Wijaya Elektronik', 'toko wijaya elektronik, Jl. Hangtuah Ujung No.50, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28156', 'Toko Elektronik', 1.051390, 101.380333, ''),
(102, 'Toko elektronik Sinar Raya', 'Jl. Imam Munandar No.362d, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', 'Toko Lampu', 0.499186, 101.483200, ''),
(103, 'Toko Singapura Elektronik', 'No.412DEF, Jl. Jend. Sudirman, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28121', 'Toko Komputer', 0.507978, 101.450676, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peta`
--
ALTER TABLE `peta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
