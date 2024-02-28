-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 08:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `abanyaknya_tanggungan_anak`
--

CREATE TABLE `abanyaknya_tanggungan_anak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `b` int(20) DEFAULT NULL,
  `n1` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abanyaknya_tanggungan_anak`
--

INSERT INTO `abanyaknya_tanggungan_anak` (`id`, `nama`, `user`, `b`, `n1`) VALUES
(1, 'Banyaknya Tanggungan Anak', 'WARSINAH ', 3, 1),
(2, 'Banyaknya Tanggungan Anak', 'SUPARSO ', 3, 3),
(3, 'Banyaknya Tanggungan Anak', 'WADJUD ', 3, 1),
(4, 'Banyaknya Tanggungan Anak', 'WARSONO', 3, 2),
(5, 'Banyaknya Tanggungan Anak', 'SLAMET RIYADI', 3, 2),
(6, 'Banyaknya Tanggungan Anak', 'KALIRI ', 3, 3),
(7, 'Banyaknya Tanggungan Anak', 'DIYANTO ', 3, 2),
(8, 'Banyaknya Tanggungan Anak', 'WAHYUDI', 3, 2),
(9, 'Banyaknya Tanggungan Anak', 'KUSTORO ', 3, 2),
(10, 'Banyaknya Tanggungan Anak', 'RUSNALI ', 3, 2),
(11, 'Banyaknya Tanggungan Anak', 'RUMJANAH ', 3, 2),
(12, 'Banyaknya Tanggungan Anak', 'TARUNO ', 3, 2),
(13, 'Banyaknya Tanggungan Anak', 'NURIDIN', 3, 3),
(14, 'Banyaknya Tanggungan Anak', 'TARUNI ', 3, 2),
(15, 'Banyaknya Tanggungan Anak', 'KASMI ', 3, 3),
(16, 'Banyaknya Tanggungan Anak', 'SUBDARI ', 3, 1),
(17, 'Banyaknya Tanggungan Anak', 'TARIYAH', 3, 1),
(18, 'Banyaknya Tanggungan Anak', 'RUSWADI ', 3, 3),
(19, 'Banyaknya Tanggungan Anak', 'DARYATI', 3, 1),
(20, 'Banyaknya Tanggungan Anak', 'MUNTAMAH ', 3, 3),
(21, 'Banyaknya Tanggungan Anak', 'AMI NUR ASIH', 3, 3),
(22, 'Banyaknya Tanggungan Anak', 'TOHYTUN ', 3, 3),
(23, 'Banyaknya Tanggungan Anak', 'ROYATI ', 3, 2),
(24, 'Banyaknya Tanggungan Anak', 'SITI ASNAH', 3, 2),
(25, 'Banyaknya Tanggungan Anak', 'JAMILAH ', 3, 2),
(26, 'Banyaknya Tanggungan Anak', 'ENDANG JURIYAH ', 3, 1),
(27, 'Banyaknya Tanggungan Anak', 'SITI RONDIYAH ', 3, 2),
(28, 'Banyaknya Tanggungan Anak', 'FITRIYATUN', 3, 1),
(29, 'Banyaknya Tanggungan Anak', 'LEGIARTI  ', 3, 3),
(30, 'Banyaknya Tanggungan Anak', 'ROHYATI ', 3, 2),
(31, 'Banyaknya Tanggungan Anak', 'RISTIATI ', 3, 2),
(32, 'Banyaknya Tanggungan Anak', 'SRI YANI ', 3, 3),
(33, 'Banyaknya Tanggungan Anak', 'DAMIROH ', 3, 3),
(34, 'Banyaknya Tanggungan Anak', 'CASMIATI ', 3, 1),
(35, 'Banyaknya Tanggungan Anak', 'TOISAH ', 3, 3),
(36, 'Banyaknya Tanggungan Anak', 'SITI DANUASIH', 3, 2),
(37, 'Banyaknya Tanggungan Anak', 'KUNAENI ', 3, 1),
(38, 'Banyaknya Tanggungan Anak', 'RUNITI ', 3, 2),
(39, 'Banyaknya Tanggungan Anak', 'RETNO WATI  ', 3, 3),
(40, 'Banyaknya Tanggungan Anak', 'KUSMIATI ', 3, 1),
(41, 'Banyaknya Tanggungan Anak', 'TUMINAH ', 3, 3),
(42, 'Banyaknya Tanggungan Anak', 'SUSANA LILINA  ', 3, 3),
(43, 'Banyaknya Tanggungan Anak', 'HARNINGSIH ', 3, 3),
(44, 'Banyaknya Tanggungan Anak', 'RUSMIATI', 3, 2),
(45, 'Banyaknya Tanggungan Anak', 'SARIAH', 3, 2),
(46, 'Banyaknya Tanggungan Anak', 'TURAENI ', 3, 2),
(47, 'Banyaknya Tanggungan Anak', 'MARDIYAH', 3, 1),
(48, 'Banyaknya Tanggungan Anak', 'KUNAENAH', 3, 3),
(49, 'Banyaknya Tanggungan Anak', 'ROMJANAH', 3, 3),
(50, 'Banyaknya Tanggungan Anak', 'MAESIH ', 3, 2),
(51, 'Banyaknya Tanggungan Anak', 'SUSEWI', 3, 2),
(52, 'Banyaknya Tanggungan Anak', 'SUENI', 3, 2),
(53, 'Banyaknya Tanggungan Anak', 'TURINAH', 3, 1),
(54, 'Banyaknya Tanggungan Anak', 'KASTIMI', 3, 1),
(55, 'Banyaknya Tanggungan Anak', 'KARTINI', 3, 2),
(56, 'Banyaknya Tanggungan Anak', 'SANJARI', 3, 1),
(57, 'Banyaknya Tanggungan Anak', 'CASRIATUN', 3, 1),
(58, 'Banyaknya Tanggungan Anak', 'SUPARTI ', 3, 2),
(59, 'Banyaknya Tanggungan Anak', 'NURNAESIH', 3, 3),
(60, 'Banyaknya Tanggungan Anak', 'ACI NINGRUM ', 3, 2),
(61, 'Banyaknya Tanggungan Anak', 'DASRIAH', 3, 1),
(62, 'Banyaknya Tanggungan Anak', 'SUTI\'AH', 3, 3),
(63, 'Banyaknya Tanggungan Anak', 'RISTIYOWATI ', 3, 1),
(64, 'Banyaknya Tanggungan Anak', 'ISTQOMAH  ', 3, 2),
(65, 'Banyaknya Tanggungan Anak', 'SUPIAH  ', 3, 3),
(66, 'Banyaknya Tanggungan Anak', 'KARYUTI  ', 3, 2),
(67, 'Banyaknya Tanggungan Anak', 'TURIPAH ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aharta_tambahan`
--

CREATE TABLE `aharta_tambahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `b` int(20) DEFAULT NULL,
  `n1` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aharta_tambahan`
--

INSERT INTO `aharta_tambahan` (`id`, `nama`, `user`, `b`, `n1`) VALUES
(1, 'Harta Tambahan', 'WARSINAH ', 3, 1),
(2, 'Harta Tambahan', 'SUPARSO ', 3, 2),
(3, 'Harta Tambahan', 'WADJUD ', 3, 1),
(4, 'Harta Tambahan', 'WARSONO', 3, 1),
(5, 'Harta Tambahan', 'SLAMET RIYADI', 3, 1),
(6, 'Harta Tambahan', 'KALIRI ', 3, 2),
(7, 'Harta Tambahan', 'DIYANTO ', 3, 1),
(8, 'Harta Tambahan', 'WAHYUDI', 3, 2),
(9, 'Harta Tambahan', 'KUSTORO ', 3, 3),
(10, 'Harta Tambahan', 'RUSNALI ', 3, 1),
(11, 'Harta Tambahan', 'RUMJANAH ', 3, 3),
(12, 'Harta Tambahan', 'TARUNO ', 3, 3),
(13, 'Harta Tambahan', 'NURIDIN', 3, 2),
(14, 'Harta Tambahan', 'TARUNI ', 3, 2),
(15, 'Harta Tambahan', 'KASMI ', 3, 3),
(16, 'Harta Tambahan', 'SUBDARI ', 3, 2),
(17, 'Harta Tambahan', 'TARIYAH', 3, 3),
(18, 'Harta Tambahan', 'RUSWADI ', 3, 2),
(19, 'Harta Tambahan', 'DARYATI', 3, 3),
(20, 'Harta Tambahan', 'MUNTAMAH ', 3, 1),
(21, 'Harta Tambahan', 'AMI NUR ASIH', 3, 2),
(22, 'Harta Tambahan', 'TOHYTUN ', 3, 1),
(23, 'Harta Tambahan', 'ROYATI ', 3, 1),
(24, 'Harta Tambahan', 'SITI ASNAH', 3, 2),
(25, 'Harta Tambahan', 'JAMILAH ', 3, 1),
(26, 'Harta Tambahan', 'ENDANG JURIYAH ', 3, 1),
(27, 'Harta Tambahan', 'SITI RONDIYAH ', 3, 1),
(28, 'Harta Tambahan', 'FITRIYATUN', 3, 1),
(29, 'Harta Tambahan', 'LEGIARTI  ', 3, 1),
(30, 'Harta Tambahan', 'ROHYATI ', 3, 1),
(31, 'Harta Tambahan', 'RISTIATI ', 3, 2),
(32, 'Harta Tambahan', 'SRI YANI ', 3, 2),
(33, 'Harta Tambahan', 'DAMIROH ', 3, 1),
(34, 'Harta Tambahan', 'CASMIATI ', 3, 1),
(35, 'Harta Tambahan', 'TOISAH ', 3, 1),
(36, 'Harta Tambahan', 'SITI DANUASIH', 3, 1),
(37, 'Harta Tambahan', 'KUNAENI ', 3, 1),
(38, 'Harta Tambahan', 'RUNITI ', 3, 2),
(39, 'Harta Tambahan', 'RETNO WATI  ', 3, 1),
(40, 'Harta Tambahan', 'KUSMIATI ', 3, 1),
(41, 'Harta Tambahan', 'TUMINAH ', 3, 1),
(42, 'Harta Tambahan', 'SUSANA LILINA  ', 3, 2),
(43, 'Harta Tambahan', 'HARNINGSIH ', 3, 2),
(44, 'Harta Tambahan', 'RUSMIATI', 3, 2),
(45, 'Harta Tambahan', 'SARIAH', 3, 3),
(46, 'Harta Tambahan', 'TURAENI ', 3, 2),
(47, 'Harta Tambahan', 'MARDIYAH', 3, 1),
(48, 'Harta Tambahan', 'KUNAENAH', 3, 2),
(49, 'Harta Tambahan', 'ROMJANAH', 3, 3),
(50, 'Harta Tambahan', 'MAESIH ', 3, 2),
(51, 'Harta Tambahan', 'SUSEWI', 3, 3),
(52, 'Harta Tambahan', 'SUENI', 3, 1),
(53, 'Harta Tambahan', 'TURINAH', 3, 3),
(54, 'Harta Tambahan', 'KASTIMI', 3, 3),
(55, 'Harta Tambahan', 'KARTINI', 3, 1),
(56, 'Harta Tambahan', 'SANJARI', 3, 3),
(57, 'Harta Tambahan', 'CASRIATUN', 3, 2),
(58, 'Harta Tambahan', 'SUPARTI ', 3, 2),
(59, 'Harta Tambahan', 'NURNAESIH', 3, 1),
(60, 'Harta Tambahan', 'ACI NINGRUM ', 3, 3),
(61, 'Harta Tambahan', 'DASRIAH', 3, 2),
(62, 'Harta Tambahan', 'SUTI\'AH', 3, 1),
(63, 'Harta Tambahan', 'RISTIYOWATI ', 3, 1),
(64, 'Harta Tambahan', 'ISTQOMAH  ', 3, 2),
(65, 'Harta Tambahan', 'SUPIAH  ', 3, 1),
(66, 'Harta Tambahan', 'KARYUTI  ', 3, 1),
(67, 'Harta Tambahan', 'TURIPAH ', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ajenis_bangunan_dinding`
--

CREATE TABLE `ajenis_bangunan_dinding` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `b` int(20) DEFAULT NULL,
  `n1` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajenis_bangunan_dinding`
--

INSERT INTO `ajenis_bangunan_dinding` (`id`, `nama`, `user`, `b`, `n1`) VALUES
(1, 'Jenis Bangunan Dinding', 'WARSINAH ', 3, 1),
(2, 'Jenis Bangunan Dinding', 'SUPARSO ', 3, 1),
(3, 'Jenis Bangunan Dinding', 'WADJUD ', 3, 3),
(4, 'Jenis Bangunan Dinding', 'WARSONO', 3, 1),
(5, 'Jenis Bangunan Dinding', 'SLAMET RIYADI', 3, 1),
(6, 'Jenis Bangunan Dinding', 'KALIRI ', 3, 1),
(7, 'Jenis Bangunan Dinding', 'DIYANTO ', 3, 1),
(8, 'Jenis Bangunan Dinding', 'WAHYUDI', 3, 1),
(9, 'Jenis Bangunan Dinding', 'KUSTORO ', 3, 1),
(10, 'Jenis Bangunan Dinding', 'RUSNALI ', 3, 1),
(11, 'Jenis Bangunan Dinding', 'RUMJANAH ', 3, 1),
(12, 'Jenis Bangunan Dinding', 'TARUNO ', 3, 1),
(13, 'Jenis Bangunan Dinding', 'NURIDIN', 3, 1),
(14, 'Jenis Bangunan Dinding', 'TARUNI ', 3, 1),
(15, 'Jenis Bangunan Dinding', 'KASMI ', 3, 1),
(16, 'Jenis Bangunan Dinding', 'SUBDARI ', 3, 1),
(17, 'Jenis Bangunan Dinding', 'TARIYAH', 3, 1),
(18, 'Jenis Bangunan Dinding', 'RUSWADI ', 3, 1),
(19, 'Jenis Bangunan Dinding', 'DARYATI', 3, 3),
(20, 'Jenis Bangunan Dinding', 'MUNTAMAH ', 3, 1),
(21, 'Jenis Bangunan Dinding', 'AMI NUR ASIH', 3, 1),
(22, 'Jenis Bangunan Dinding', 'TOHYTUN ', 3, 1),
(23, 'Jenis Bangunan Dinding', 'ROYATI ', 3, 1),
(24, 'Jenis Bangunan Dinding', 'SITI ASNAH', 3, 1),
(25, 'Jenis Bangunan Dinding', 'JAMILAH ', 3, 1),
(26, 'Jenis Bangunan Dinding', 'ENDANG JURIYAH ', 3, 1),
(27, 'Jenis Bangunan Dinding', 'SITI RONDIYAH ', 3, 1),
(28, 'Jenis Bangunan Dinding', 'FITRIYATUN', 3, 1),
(29, 'Jenis Bangunan Dinding', 'LEGIARTI  ', 3, 1),
(30, 'Jenis Bangunan Dinding', 'ROHYATI ', 3, 1),
(31, 'Jenis Bangunan Dinding', 'RISTIATI ', 3, 1),
(32, 'Jenis Bangunan Dinding', 'SRI YANI ', 3, 1),
(33, 'Jenis Bangunan Dinding', 'DAMIROH ', 3, 1),
(34, 'Jenis Bangunan Dinding', 'CASMIATI ', 3, 1),
(35, 'Jenis Bangunan Dinding', 'TOISAH ', 3, 1),
(36, 'Jenis Bangunan Dinding', 'SITI DANUASIH', 3, 1),
(37, 'Jenis Bangunan Dinding', 'KUNAENI ', 3, 1),
(38, 'Jenis Bangunan Dinding', 'RUNITI ', 3, 1),
(39, 'Jenis Bangunan Dinding', 'RETNO WATI  ', 3, 1),
(40, 'Jenis Bangunan Dinding', 'KUSMIATI ', 3, 1),
(41, 'Jenis Bangunan Dinding', 'TUMINAH ', 3, 1),
(42, 'Jenis Bangunan Dinding', 'SUSANA LILINA  ', 3, 1),
(43, 'Jenis Bangunan Dinding', 'HARNINGSIH ', 3, 1),
(44, 'Jenis Bangunan Dinding', 'RUSMIATI', 3, 1),
(45, 'Jenis Bangunan Dinding', 'SARIAH', 3, 1),
(46, 'Jenis Bangunan Dinding', 'TURAENI ', 3, 3),
(47, 'Jenis Bangunan Dinding', 'MARDIYAH', 3, 1),
(48, 'Jenis Bangunan Dinding', 'KUNAENAH', 3, 1),
(49, 'Jenis Bangunan Dinding', 'ROMJANAH', 3, 1),
(50, 'Jenis Bangunan Dinding', 'MAESIH ', 3, 1),
(51, 'Jenis Bangunan Dinding', 'SUSEWI', 3, 1),
(52, 'Jenis Bangunan Dinding', 'SUENI', 3, 1),
(53, 'Jenis Bangunan Dinding', 'TURINAH', 3, 1),
(54, 'Jenis Bangunan Dinding', 'KASTIMI', 3, 1),
(55, 'Jenis Bangunan Dinding', 'KARTINI', 3, 1),
(56, 'Jenis Bangunan Dinding', 'SANJARI', 3, 1),
(57, 'Jenis Bangunan Dinding', 'CASRIATUN', 3, 1),
(58, 'Jenis Bangunan Dinding', 'SUPARTI ', 3, 1),
(59, 'Jenis Bangunan Dinding', 'NURNAESIH', 3, 1),
(60, 'Jenis Bangunan Dinding', 'ACI NINGRUM ', 3, 1),
(61, 'Jenis Bangunan Dinding', 'DASRIAH', 3, 1),
(62, 'Jenis Bangunan Dinding', 'SUTI\'AH', 3, 1),
(63, 'Jenis Bangunan Dinding', 'RISTIYOWATI ', 3, 1),
(64, 'Jenis Bangunan Dinding', 'ISTQOMAH  ', 3, 1),
(65, 'Jenis Bangunan Dinding', 'SUPIAH  ', 3, 1),
(66, 'Jenis Bangunan Dinding', 'KARYUTI  ', 3, 1),
(67, 'Jenis Bangunan Dinding', 'TURIPAH ', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ajenis_bangunan_lantai`
--

CREATE TABLE `ajenis_bangunan_lantai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `b` int(20) DEFAULT NULL,
  `n1` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajenis_bangunan_lantai`
--

INSERT INTO `ajenis_bangunan_lantai` (`id`, `nama`, `user`, `b`, `n1`) VALUES
(1, 'Jenis Bangunan Lantai', 'WARSINAH ', 3, 1),
(2, 'Jenis Bangunan Lantai', 'SUPARSO ', 3, 3),
(3, 'Jenis Bangunan Lantai', 'WADJUD ', 3, 3),
(4, 'Jenis Bangunan Lantai', 'WARSONO', 3, 1),
(5, 'Jenis Bangunan Lantai', 'SLAMET RIYADI', 3, 2),
(6, 'Jenis Bangunan Lantai', 'KALIRI ', 3, 2),
(7, 'Jenis Bangunan Lantai', 'DIYANTO ', 3, 2),
(8, 'Jenis Bangunan Lantai', 'WAHYUDI', 3, 3),
(9, 'Jenis Bangunan Lantai', 'KUSTORO ', 3, 1),
(10, 'Jenis Bangunan Lantai', 'RUSNALI ', 3, 1),
(11, 'Jenis Bangunan Lantai', 'RUMJANAH ', 3, 1),
(12, 'Jenis Bangunan Lantai', 'TARUNO ', 3, 2),
(13, 'Jenis Bangunan Lantai', 'NURIDIN', 3, 2),
(14, 'Jenis Bangunan Lantai', 'TARUNI ', 3, 3),
(15, 'Jenis Bangunan Lantai', 'KASMI ', 3, 3),
(16, 'Jenis Bangunan Lantai', 'SUBDARI ', 3, 1),
(17, 'Jenis Bangunan Lantai', 'TARIYAH', 3, 1),
(18, 'Jenis Bangunan Lantai', 'RUSWADI ', 3, 3),
(19, 'Jenis Bangunan Lantai', 'DARYATI', 3, 3),
(20, 'Jenis Bangunan Lantai', 'MUNTAMAH ', 3, 1),
(21, 'Jenis Bangunan Lantai', 'AMI NUR ASIH', 3, 2),
(22, 'Jenis Bangunan Lantai', 'TOHYTUN ', 3, 1),
(23, 'Jenis Bangunan Lantai', 'ROYATI ', 3, 1),
(24, 'Jenis Bangunan Lantai', 'SITI ASNAH', 3, 1),
(25, 'Jenis Bangunan Lantai', 'JAMILAH ', 3, 2),
(26, 'Jenis Bangunan Lantai', 'ENDANG JURIYAH ', 3, 1),
(27, 'Jenis Bangunan Lantai', 'SITI RONDIYAH ', 3, 1),
(28, 'Jenis Bangunan Lantai', 'FITRIYATUN', 3, 2),
(29, 'Jenis Bangunan Lantai', 'LEGIARTI  ', 3, 1),
(30, 'Jenis Bangunan Lantai', 'ROHYATI ', 3, 1),
(31, 'Jenis Bangunan Lantai', 'RISTIATI ', 3, 2),
(32, 'Jenis Bangunan Lantai', 'SRI YANI ', 3, 3),
(33, 'Jenis Bangunan Lantai', 'DAMIROH ', 3, 1),
(34, 'Jenis Bangunan Lantai', 'CASMIATI ', 3, 1),
(35, 'Jenis Bangunan Lantai', 'TOISAH ', 3, 3),
(36, 'Jenis Bangunan Lantai', 'SITI DANUASIH', 3, 1),
(37, 'Jenis Bangunan Lantai', 'KUNAENI ', 3, 1),
(38, 'Jenis Bangunan Lantai', 'RUNITI ', 3, 3),
(39, 'Jenis Bangunan Lantai', 'RETNO WATI  ', 3, 1),
(40, 'Jenis Bangunan Lantai', 'KUSMIATI ', 3, 1),
(41, 'Jenis Bangunan Lantai', 'TUMINAH ', 3, 1),
(42, 'Jenis Bangunan Lantai', 'SUSANA LILINA  ', 3, 3),
(43, 'Jenis Bangunan Lantai', 'HARNINGSIH ', 3, 1),
(44, 'Jenis Bangunan Lantai', 'RUSMIATI', 3, 2),
(45, 'Jenis Bangunan Lantai', 'SARIAH', 3, 1),
(46, 'Jenis Bangunan Lantai', 'TURAENI ', 3, 3),
(47, 'Jenis Bangunan Lantai', 'MARDIYAH', 3, 1),
(48, 'Jenis Bangunan Lantai', 'KUNAENAH', 3, 3),
(49, 'Jenis Bangunan Lantai', 'ROMJANAH', 3, 3),
(50, 'Jenis Bangunan Lantai', 'MAESIH ', 3, 3),
(51, 'Jenis Bangunan Lantai', 'SUSEWI', 3, 1),
(52, 'Jenis Bangunan Lantai', 'SUENI', 3, 3),
(53, 'Jenis Bangunan Lantai', 'TURINAH', 3, 1),
(54, 'Jenis Bangunan Lantai', 'KASTIMI', 3, 3),
(55, 'Jenis Bangunan Lantai', 'KARTINI', 3, 3),
(56, 'Jenis Bangunan Lantai', 'SANJARI', 3, 1),
(57, 'Jenis Bangunan Lantai', 'CASRIATUN', 3, 3),
(58, 'Jenis Bangunan Lantai', 'SUPARTI ', 3, 3),
(59, 'Jenis Bangunan Lantai', 'NURNAESIH', 3, 2),
(60, 'Jenis Bangunan Lantai', 'ACI NINGRUM ', 3, 2),
(61, 'Jenis Bangunan Lantai', 'DASRIAH', 3, 1),
(62, 'Jenis Bangunan Lantai', 'SUTI\'AH', 3, 1),
(63, 'Jenis Bangunan Lantai', 'RISTIYOWATI ', 3, 2),
(64, 'Jenis Bangunan Lantai', 'ISTQOMAH  ', 3, 3),
(65, 'Jenis Bangunan Lantai', 'SUPIAH  ', 3, 2),
(66, 'Jenis Bangunan Lantai', 'KARYUTI  ', 3, 3),
(67, 'Jenis Bangunan Lantai', 'TURIPAH ', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `apenghasilan`
--

CREATE TABLE `apenghasilan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `b` int(20) DEFAULT NULL,
  `n1` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apenghasilan`
--

INSERT INTO `apenghasilan` (`id`, `nama`, `user`, `b`, `n1`) VALUES
(1, 'Penghasilan', 'WARSINAH ', 3, 1),
(2, 'Penghasilan', 'SUPARSO ', 3, 3),
(3, 'Penghasilan', 'WADJUD ', 3, 3),
(4, 'Penghasilan', 'WARSONO', 3, 1),
(5, 'Penghasilan', 'SLAMET RIYADI', 3, 1),
(6, 'Penghasilan', 'KALIRI ', 3, 1),
(7, 'Penghasilan', 'DIYANTO ', 3, 3),
(8, 'Penghasilan', 'WAHYUDI', 3, 3),
(9, 'Penghasilan', 'KUSTORO ', 3, 3),
(10, 'Penghasilan', 'RUSNALI ', 3, 3),
(11, 'Penghasilan', 'RUMJANAH ', 3, 3),
(12, 'Penghasilan', 'TARUNO ', 3, 3),
(13, 'Penghasilan', 'NURIDIN', 3, 3),
(14, 'Penghasilan', 'TARUNI ', 3, 3),
(15, 'Penghasilan', 'KASMI ', 3, 3),
(16, 'Penghasilan', 'SUBDARI ', 3, 3),
(17, 'Penghasilan', 'TARIYAH', 3, 3),
(18, 'Penghasilan', 'RUSWADI ', 3, 3),
(19, 'Penghasilan', 'DARYATI', 3, 3),
(20, 'Penghasilan', 'MUNTAMAH ', 3, 1),
(21, 'Penghasilan', 'AMI NUR ASIH', 3, 3),
(22, 'Penghasilan', 'TOHYTUN ', 3, 3),
(23, 'Penghasilan', 'ROYATI ', 3, 3),
(24, 'Penghasilan', 'SITI ASNAH', 3, 3),
(25, 'Penghasilan', 'JAMILAH ', 3, 3),
(26, 'Penghasilan', 'ENDANG JURIYAH ', 3, 3),
(27, 'Penghasilan', 'SITI RONDIYAH ', 3, 3),
(28, 'Penghasilan', 'FITRIYATUN', 3, 3),
(29, 'Penghasilan', 'LEGIARTI  ', 3, 3),
(30, 'Penghasilan', 'ROHYATI ', 3, 3),
(31, 'Penghasilan', 'RISTIATI ', 3, 3),
(32, 'Penghasilan', 'SRI YANI ', 3, 3),
(33, 'Penghasilan', 'DAMIROH ', 3, 3),
(34, 'Penghasilan', 'CASMIATI ', 3, 3),
(35, 'Penghasilan', 'TOISAH ', 3, 3),
(36, 'Penghasilan', 'SITI DANUASIH', 3, 1),
(37, 'Penghasilan', 'KUNAENI ', 3, 3),
(38, 'Penghasilan', 'RUNITI ', 3, 3),
(39, 'Penghasilan', 'RETNO WATI  ', 3, 3),
(40, 'Penghasilan', 'KUSMIATI ', 3, 3),
(41, 'Penghasilan', 'TUMINAH ', 3, 3),
(42, 'Penghasilan', 'SUSANA LILINA  ', 3, 3),
(43, 'Penghasilan', 'HARNINGSIH ', 3, 3),
(44, 'Penghasilan', 'RUSMIATI', 3, 3),
(45, 'Penghasilan', 'SARIAH', 3, 3),
(46, 'Penghasilan', 'TURAENI ', 3, 3),
(47, 'Penghasilan', 'MARDIYAH', 3, 3),
(48, 'Penghasilan', 'KUNAENAH', 3, 3),
(49, 'Penghasilan', 'ROMJANAH', 3, 3),
(50, 'Penghasilan', 'MAESIH ', 3, 3),
(51, 'Penghasilan', 'SUSEWI', 3, 3),
(52, 'Penghasilan', 'SUENI', 3, 3),
(53, 'Penghasilan', 'TURINAH', 3, 3),
(54, 'Penghasilan', 'KASTIMI', 3, 3),
(55, 'Penghasilan', 'KARTINI', 3, 3),
(56, 'Penghasilan', 'SANJARI', 3, 3),
(57, 'Penghasilan', 'CASRIATUN', 3, 3),
(58, 'Penghasilan', 'SUPARTI ', 3, 3),
(59, 'Penghasilan', 'NURNAESIH', 3, 3),
(60, 'Penghasilan', 'ACI NINGRUM ', 3, 3),
(61, 'Penghasilan', 'DASRIAH', 3, 3),
(62, 'Penghasilan', 'SUTI\'AH', 3, 1),
(63, 'Penghasilan', 'RISTIYOWATI ', 3, 3),
(64, 'Penghasilan', 'ISTQOMAH  ', 3, 3),
(65, 'Penghasilan', 'SUPIAH  ', 3, 3),
(66, 'Penghasilan', 'KARYUTI  ', 3, 1),
(67, 'Penghasilan', 'TURIPAH ', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `astatus_lahan`
--

CREATE TABLE `astatus_lahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `user` varchar(50) NOT NULL,
  `b` int(20) DEFAULT NULL,
  `n1` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astatus_lahan`
--

INSERT INTO `astatus_lahan` (`id`, `nama`, `user`, `b`, `n1`) VALUES
(1, 'Status Lahan', 'WARSINAH ', 3, 1),
(2, 'Status Lahan', 'SUPARSO ', 3, 1),
(3, 'Status Lahan', 'WADJUD ', 3, 1),
(4, 'Status Lahan', 'WARSONO', 3, 1),
(5, 'Status Lahan', 'SLAMET RIYADI', 3, 2),
(6, 'Status Lahan', 'KALIRI ', 3, 1),
(7, 'Status Lahan', 'DIYANTO ', 3, 1),
(8, 'Status Lahan', 'WAHYUDI', 3, 1),
(9, 'Status Lahan', 'KUSTORO ', 3, 2),
(10, 'Status Lahan', 'RUSNALI ', 3, 1),
(11, 'Status Lahan', 'RUMJANAH ', 3, 1),
(12, 'Status Lahan', 'TARUNO ', 3, 1),
(13, 'Status Lahan', 'NURIDIN', 3, 1),
(14, 'Status Lahan', 'TARUNI ', 3, 1),
(15, 'Status Lahan', 'KASMI ', 3, 1),
(16, 'Status Lahan', 'SUBDARI ', 3, 1),
(17, 'Status Lahan', 'TARIYAH', 3, 1),
(18, 'Status Lahan', 'RUSWADI ', 3, 1),
(19, 'Status Lahan', 'DARYATI', 3, 1),
(20, 'Status Lahan', 'MUNTAMAH ', 3, 1),
(21, 'Status Lahan', 'AMI NUR ASIH', 3, 1),
(22, 'Status Lahan', 'TOHYTUN ', 3, 1),
(23, 'Status Lahan', 'ROYATI ', 3, 1),
(24, 'Status Lahan', 'SITI ASNAH', 3, 1),
(25, 'Status Lahan', 'JAMILAH ', 3, 1),
(26, 'Status Lahan', 'ENDANG JURIYAH ', 3, 1),
(27, 'Status Lahan', 'SITI RONDIYAH ', 3, 1),
(28, 'Status Lahan', 'FITRIYATUN', 3, 1),
(29, 'Status Lahan', 'LEGIARTI  ', 3, 1),
(30, 'Status Lahan', 'ROHYATI ', 3, 1),
(31, 'Status Lahan', 'RISTIATI ', 3, 1),
(32, 'Status Lahan', 'SRI YANI ', 3, 1),
(33, 'Status Lahan', 'DAMIROH ', 3, 1),
(34, 'Status Lahan', 'CASMIATI ', 3, 1),
(35, 'Status Lahan', 'TOISAH ', 3, 1),
(36, 'Status Lahan', 'SITI DANUASIH', 3, 1),
(37, 'Status Lahan', 'KUNAENI ', 3, 1),
(38, 'Status Lahan', 'RUNITI ', 3, 1),
(39, 'Status Lahan', 'RETNO WATI  ', 3, 1),
(40, 'Status Lahan', 'KUSMIATI ', 3, 1),
(41, 'Status Lahan', 'TUMINAH ', 3, 1),
(42, 'Status Lahan', 'SUSANA LILINA  ', 3, 1),
(43, 'Status Lahan', 'HARNINGSIH ', 3, 1),
(44, 'Status Lahan', 'RUSMIATI', 3, 1),
(45, 'Status Lahan', 'SARIAH', 3, 1),
(46, 'Status Lahan', 'TURAENI ', 3, 1),
(47, 'Status Lahan', 'MARDIYAH', 3, 1),
(48, 'Status Lahan', 'KUNAENAH', 3, 1),
(49, 'Status Lahan', 'ROMJANAH', 3, 1),
(50, 'Status Lahan', 'MAESIH ', 3, 1),
(51, 'Status Lahan', 'SUSEWI', 3, 1),
(52, 'Status Lahan', 'SUENI', 3, 1),
(53, 'Status Lahan', 'TURINAH', 3, 1),
(54, 'Status Lahan', 'KASTIMI', 3, 1),
(55, 'Status Lahan', 'KARTINI', 3, 1),
(56, 'Status Lahan', 'SANJARI', 3, 1),
(57, 'Status Lahan', 'CASRIATUN', 3, 1),
(58, 'Status Lahan', 'SUPARTI ', 3, 1),
(59, 'Status Lahan', 'NURNAESIH', 3, 1),
(60, 'Status Lahan', 'ACI NINGRUM ', 3, 1),
(61, 'Status Lahan', 'DASRIAH', 3, 1),
(62, 'Status Lahan', 'SUTI\'AH', 3, 1),
(63, 'Status Lahan', 'RISTIYOWATI ', 3, 1),
(64, 'Status Lahan', 'ISTQOMAH  ', 3, 1),
(65, 'Status Lahan', 'SUPIAH  ', 3, 1),
(66, 'Status Lahan', 'KARYUTI  ', 3, 1),
(67, 'Status Lahan', 'TURIPAH ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(350) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(48, 'Banyaknya Tanggungan Anak', 3),
(49, 'Penghasilan', 3),
(50, 'Status Lahan', 3),
(51, 'Jenis Bangunan Dinding', 3),
(52, 'Jenis Bangunan Lantai', 3),
(53, 'Harta Tambahan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `ktp` longtext NOT NULL,
  `kk` longtext NOT NULL,
  `nama` varchar(20) NOT NULL,
  `np` int(11) NOT NULL,
  `nk` int(11) NOT NULL,
  `na` int(11) NOT NULL,
  `jbd` int(20) NOT NULL,
  `jbl` int(20) NOT NULL,
  `harta` int(20) NOT NULL,
  `validasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `ktp`, `kk`, `nama`, `np`, `nk`, `na`, `jbd`, `jbl`, `harta`, `validasi`) VALUES
(1, '', '', 'WARSINAH ', 1, 1, 1, 1, 1, 1, 0),
(2, '', '', 'SUPARSO ', 3, 1, 3, 1, 3, 2, 0),
(3, '', '', 'WADJUD ', 1, 3, 3, 1, 3, 1, 0),
(4, '', '', 'WARSONO', 2, 1, 1, 1, 1, 1, 0),
(5, '', '', 'SLAMET RIYADI', 2, 1, 2, 2, 1, 1, 0),
(6, '', '', 'KALIRI ', 3, 1, 2, 1, 1, 2, 0),
(7, '', '', 'DIYANTO ', 2, 1, 2, 1, 3, 1, 0),
(8, '', '', 'WAHYUDI', 2, 1, 3, 1, 3, 2, 0),
(9, '', '', 'KUSTORO ', 2, 1, 1, 2, 3, 3, 0),
(10, '', '', 'RUSNALI ', 2, 1, 1, 1, 3, 1, 0),
(11, '', '', 'RUMJANAH ', 2, 1, 1, 1, 3, 3, 0),
(12, '', '', 'TARUNO ', 2, 1, 2, 1, 3, 3, 0),
(13, '', '', 'NURIDIN', 3, 1, 2, 1, 3, 2, 0),
(14, '', '', 'TARUNI ', 2, 1, 3, 1, 3, 2, 0),
(15, '', '', 'KASMI ', 3, 1, 3, 1, 3, 3, 0),
(16, '', '', 'SUBDARI ', 1, 1, 1, 1, 3, 2, 0),
(17, '', '', 'TARIYAH', 1, 1, 1, 1, 3, 3, 0),
(18, '', '', 'RUSWADI ', 3, 1, 3, 1, 3, 2, 0),
(19, '', '', 'DARYATI', 1, 3, 3, 1, 3, 3, 0),
(20, '', '', 'MUNTAMAH ', 3, 1, 1, 1, 1, 1, 0),
(21, '', '', 'AMI NUR ASIH', 3, 1, 2, 1, 3, 2, 0),
(22, '', '', 'TOHYTUN ', 3, 1, 1, 1, 3, 1, 0),
(23, '', '', 'ROYATI ', 2, 1, 1, 1, 3, 1, 0),
(24, '', '', 'SITI ASNAH', 2, 1, 1, 1, 3, 2, 0),
(25, '', '', 'JAMILAH ', 2, 1, 2, 1, 3, 1, 0),
(26, '', '', 'ENDANG JURIYAH ', 1, 1, 1, 1, 3, 1, 0),
(27, '', '', 'SITI RONDIYAH ', 2, 1, 1, 1, 3, 1, 0),
(28, '', '', 'FITRIYATUN', 1, 1, 2, 1, 3, 1, 0),
(29, '', '', 'LEGIARTI  ', 3, 1, 1, 1, 3, 1, 0),
(30, '', '', 'ROHYATI ', 2, 1, 1, 1, 3, 1, 0),
(31, '', '', 'RISTIATI ', 2, 1, 2, 1, 3, 2, 0),
(32, '', '', 'SRI YANI ', 3, 1, 3, 1, 3, 2, 0),
(33, '', '', 'DAMIROH ', 3, 1, 1, 1, 3, 1, 0),
(34, '', '', 'CASMIATI ', 1, 1, 1, 1, 3, 1, 0),
(35, '', '', 'TOISAH ', 3, 1, 3, 1, 3, 1, 0),
(36, '', '', 'SITI DANUASIH', 2, 1, 1, 1, 1, 1, 0),
(37, '', '', 'KUNAENI ', 1, 1, 1, 1, 3, 1, 0),
(38, '', '', 'RUNITI ', 2, 1, 3, 1, 3, 2, 0),
(39, '', '', 'RETNO WATI  ', 3, 1, 1, 1, 3, 1, 0),
(40, '', '', 'KUSMIATI ', 1, 1, 1, 1, 3, 1, 0),
(41, '', '', 'TUMINAH ', 3, 1, 1, 1, 3, 1, 0),
(42, '', '', 'SUSANA LILINA  ', 3, 1, 3, 1, 3, 2, 0),
(43, '', '', 'HARNINGSIH ', 3, 1, 1, 1, 3, 2, 0),
(44, '', '', 'RUSMIATI', 2, 1, 2, 1, 3, 2, 0),
(45, '', '', 'SARIAH', 2, 1, 1, 1, 3, 3, 0),
(46, '', '', 'TURAENI ', 2, 3, 3, 1, 3, 2, 0),
(47, '', '', 'MARDIYAH', 1, 1, 1, 1, 3, 1, 0),
(48, '', '', 'KUNAENAH', 3, 1, 3, 1, 3, 2, 0),
(49, '', '', 'ROMJANAH', 3, 1, 3, 1, 3, 3, 0),
(50, '', '', 'MAESIH ', 2, 1, 3, 1, 3, 2, 0),
(51, '', '', 'SUSEWI', 2, 1, 1, 1, 3, 3, 0),
(52, '', '', 'SUENI', 2, 1, 3, 1, 3, 1, 0),
(53, '', '', 'TURINAH', 1, 1, 1, 1, 3, 3, 0),
(54, '', '', 'KASTIMI', 1, 1, 3, 1, 3, 3, 0),
(55, '', '', 'KARTINI', 2, 1, 3, 1, 3, 1, 0),
(56, '', '', 'SANJARI', 1, 1, 1, 1, 3, 3, 0),
(57, '', '', 'CASRIATUN', 1, 1, 3, 1, 3, 2, 0),
(58, '', '', 'SUPARTI ', 2, 1, 3, 1, 3, 2, 0),
(59, '', '', 'NURNAESIH', 3, 1, 2, 1, 3, 1, 0),
(60, '', '', 'ACI NINGRUM ', 2, 1, 2, 1, 3, 3, 0),
(61, '', '', 'DASRIAH', 1, 1, 1, 1, 3, 2, 0),
(62, '', '', 'SUTI\'AH', 3, 1, 1, 1, 1, 1, 0),
(63, '', '', 'RISTIYOWATI ', 1, 1, 2, 1, 3, 1, 0),
(64, '', '', 'ISTQOMAH  ', 2, 1, 3, 1, 3, 2, 0),
(66, '', '', 'SUPIAH  ', 3, 1, 2, 1, 3, 1, 0),
(67, '', '', 'KARYUTI  ', 2, 1, 3, 1, 1, 1, 0),
(68, '', '', 'TURIPAH ', 1, 2, 3, 1, 3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id_sub` int(20) NOT NULL,
  `namasub` varchar(100) NOT NULL,
  `nilai1` varchar(20) NOT NULL,
  `nilai2` varchar(20) NOT NULL,
  `nilai3` varchar(20) NOT NULL,
  `sub1` varchar(200) NOT NULL,
  `sub2` varchar(200) NOT NULL,
  `sub3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id_sub`, `namasub`, `nilai1`, `nilai2`, `nilai3`, `sub1`, `sub2`, `sub3`) VALUES
(44, 'Banyaknya Tanggungan Anak', '1', '2', '3', 'kurang dari 2 Tanggungan anak', '2 anak', 'Lebih dari 2 Tanggungan anak'),
(45, 'Penghasilan', '1', '2', '3', 'Lebih dari Rp 3.000.000', 'Kurang lebih Rp 2.000.000', 'Kurang dari Rp 1.000.000'),
(46, 'Status Lahan', '1', '2', '3', 'Hak Milik', 'Menyewa', 'Milik orang lain'),
(47, 'Jenis Bangunan Dinding', '1', '2', '3', 'Tembok', 'Anyaman', 'Kayu'),
(48, 'Jenis Bangunan Lantai', '1', '2', '3', 'Keramik', 'Ubin', 'Tanah'),
(49, 'Harta Tambahan', '1', '2', '3', 'Lebih dari 3 Harta Tambahan', 'Memiliki 2 Harta Tambahan', 'Kurang dari 2 Harta Tambahan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `username` int(20) NOT NULL,
  `password` int(20) NOT NULL,
  `stts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `username`, `password`, `stts`) VALUES
(1, 'WARSINAH ', 'Grogol', 123, 123, 2),
(2, 'SUPARSO ', 'Grogol', 124, 124, 2),
(3, 'WADJUD ', 'Grogol', 125, 125, 2),
(4, 'WARSONO', 'Grogol', 126, 126, 2),
(5, 'SLAMET RIYADI', 'Grogol', 127, 127, 2),
(6, 'KALIRI ', 'Grogol', 128, 128, 2),
(7, 'DIYANTO ', 'Grogol', 129, 129, 2),
(8, 'WAHYUDI', 'Grogol', 130, 130, 2),
(9, 'KUSTORO ', 'Grogol', 131, 131, 2),
(10, 'RUSNALI ', 'Grogol', 132, 132, 2),
(11, 'RUMJANAH ', 'Grogol', 133, 133, 2),
(12, 'TARUNO ', 'Grogol', 134, 134, 2),
(13, 'NURIDIN', 'Grogol', 135, 135, 2),
(14, 'TARUNI ', 'Grogol', 136, 136, 2),
(15, 'KASMI ', 'Grogol', 137, 137, 2),
(16, 'SUBDARI ', 'Grogol', 138, 138, 2),
(17, 'TARIYAH', 'Grogol', 139, 139, 2),
(18, 'RUSWADI ', 'Grogol', 140, 140, 2),
(19, 'DARYATI', 'Grogol', 141, 141, 2),
(20, 'MUNTAMAH ', 'Wanasari', 142, 142, 2),
(21, 'AMI NUR ASIH', 'Grogol', 143, 143, 2),
(22, 'TOHYTUN ', 'Grogol', 144, 144, 2),
(23, 'ROYATI ', 'Kemlaten', 145, 145, 2),
(24, 'SITI ASNAH', 'Grogol', 146, 146, 2),
(25, 'JAMILAH ', 'Kemlaten', 147, 147, 2),
(26, 'ENDANG JURIYAH ', 'Kemlaten', 148, 148, 2),
(27, 'SITI RONDIYAH ', 'Kemlaten', 149, 149, 2),
(28, 'FITRIYATUN', 'Kemlaten', 150, 150, 2),
(29, 'LEGIARTI  ', 'Wanasari', 151, 151, 2),
(30, 'ROHYATI ', 'Grogol', 152, 152, 2),
(31, 'RISTIATI ', 'Kemlaten', 153, 153, 2),
(32, 'SRI YANI ', 'Grogol', 154, 154, 2),
(33, 'DAMIROH ', 'Grogol', 155, 155, 2),
(34, 'CASMIATI ', 'Grogol', 156, 156, 2),
(35, 'TOISAH ', 'Kemlaten', 157, 157, 2),
(36, 'SITI DANUASIH', 'Kemlaten', 158, 158, 2),
(37, 'KUNAENI ', 'Grogol', 159, 159, 2),
(38, 'RUNITI ', 'Kemlaten', 160, 160, 2),
(39, 'RETNO WATI  ', 'Wanasari', 161, 161, 2),
(40, 'KUSMIATI ', 'Grogol', 162, 162, 2),
(41, 'TUMINAH ', 'Wanasari', 163, 163, 2),
(42, 'SUSANA LILINA  ', 'Wanasari', 164, 164, 2),
(43, 'HARNINGSIH ', 'Wanasari', 165, 165, 2),
(44, 'RUSMIATI', 'Wanasari', 166, 166, 2),
(45, 'SARIAH', 'Wanasari', 167, 167, 2),
(46, 'TURAENI ', 'Wanasari', 168, 168, 2),
(47, 'MARDIYAH', 'Kemlaten', 169, 169, 2),
(48, 'KUNAENAH', 'Grogol', 170, 170, 2),
(49, 'ROMJANAH', 'Kemlaten', 171, 171, 2),
(50, 'MAESIH ', 'Kemlaten', 172, 172, 2),
(51, 'SUSEWI', 'Kemlaten', 173, 173, 2),
(52, 'SUENI', 'Kemlaten', 174, 174, 2),
(53, 'TURINAH', 'Kemlaten', 175, 175, 2),
(54, 'KASTIMI', 'Wanasari', 176, 176, 2),
(55, 'KARTINI', 'Kemlaten', 177, 177, 2),
(56, 'SANJARI', 'Kemlaten', 178, 178, 2),
(57, 'CASRIATUN', 'Wanasari', 179, 179, 2),
(58, 'SUPARTI ', 'Wanasari', 180, 180, 2),
(59, 'NURNAESIH', 'Wanasari', 181, 181, 2),
(60, 'ACI NINGRUM ', 'Wanasari', 182, 182, 2),
(61, 'DASRIAH', 'Wanasari', 183, 183, 2),
(62, 'SUTI\'AH', 'Wanasari', 184, 184, 2),
(63, 'RISTIYOWATI ', 'Wanasari', 185, 185, 2),
(64, 'ISTQOMAH  ', 'Wanasari', 186, 186, 2),
(65, 'SUPIAH  ', 'Wanasari', 187, 187, 2),
(66, 'KARYUTI  ', 'Wanasari', 188, 188, 2),
(67, 'TURIPAH ', 'Wanasari', 189, 189, 2),
(68, 'admin', 'admin', 1111, 1111, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abanyaknya_tanggungan_anak`
--
ALTER TABLE `abanyaknya_tanggungan_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aharta_tambahan`
--
ALTER TABLE `aharta_tambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajenis_bangunan_dinding`
--
ALTER TABLE `ajenis_bangunan_dinding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajenis_bangunan_lantai`
--
ALTER TABLE `ajenis_bangunan_lantai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apenghasilan`
--
ALTER TABLE `apenghasilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astatus_lahan`
--
ALTER TABLE `astatus_lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abanyaknya_tanggungan_anak`
--
ALTER TABLE `abanyaknya_tanggungan_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `aharta_tambahan`
--
ALTER TABLE `aharta_tambahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `ajenis_bangunan_dinding`
--
ALTER TABLE `ajenis_bangunan_dinding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `ajenis_bangunan_lantai`
--
ALTER TABLE `ajenis_bangunan_lantai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `apenghasilan`
--
ALTER TABLE `apenghasilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `astatus_lahan`
--
ALTER TABLE `astatus_lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id_sub` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
