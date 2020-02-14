-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 12:33 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_diagnosa`
--

CREATE TABLE `detail_diagnosa` (
  `id_detail_diagnosa` int(50) NOT NULL,
  `id_diagnosa` int(50) NOT NULL,
  `id_gejala` int(50) NOT NULL,
  `nilai_detail_diagnosa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_diagnosa`
--

INSERT INTO `detail_diagnosa` (`id_detail_diagnosa`, `id_diagnosa`, `id_gejala`, `nilai_detail_diagnosa`) VALUES
(1, 1, 5, 0.6),
(2, 1, 13, 0.8),
(3, 2, 1, 0.6),
(4, 2, 2, 0.8),
(5, 2, 8, 1),
(6, 3, 5, 0.6),
(7, 3, 2, 1),
(8, 3, 8, 1),
(9, 4, 5, 0.8),
(10, 4, 2, 1),
(11, 4, 8, 1),
(12, 5, 43, 0.6),
(13, 5, 5, 0.8),
(14, 5, 7, 1),
(15, 5, 1, 0.8),
(16, 5, 2, 0.6),
(17, 5, 8, 1),
(18, 5, 4, 1),
(19, 5, 6, 0.6),
(20, 6, 43, 0.8),
(21, 6, 5, 0.6),
(22, 6, 7, 1),
(23, 6, 1, 0.8),
(24, 6, 2, 0.6),
(25, 6, 8, 1),
(26, 6, 4, 1),
(27, 6, 6, 0.6),
(28, 8, 35, 1),
(29, 9, 43, 0.2),
(30, 10, 35, 1),
(31, 10, 43, 0.2),
(32, 10, 2, 0.8),
(33, 10, 4, 0.4),
(34, 10, 32, 0.6),
(35, 12, 35, 1),
(36, 12, 21, 0.8),
(37, 12, 32, 0.8),
(38, 12, 36, 1),
(39, 12, 33, 1),
(40, 12, 16, 0.8),
(41, 13, 35, 1),
(42, 13, 21, 0.8),
(43, 13, 32, 1),
(44, 13, 33, 1),
(45, 13, 16, 0.8),
(46, 14, 35, 1),
(47, 14, 21, 0.8),
(48, 14, 32, 1),
(49, 14, 33, 1),
(50, 14, 16, 1),
(51, 15, 35, 1),
(52, 15, 21, 1),
(53, 15, 32, 0.8),
(54, 15, 36, 1),
(55, 15, 33, 1),
(56, 15, 34, 1),
(57, 18, 35, 1),
(58, 18, 43, 1),
(59, 18, 18, 1),
(60, 18, 5, 1),
(61, 18, 21, 1),
(62, 18, 7, 1),
(63, 18, 11, 0.8),
(64, 18, 10, 0.8),
(65, 18, 1, 0.8),
(66, 18, 2, 1),
(67, 18, 8, 1),
(68, 18, 12, 1),
(69, 18, 4, 0.8),
(70, 18, 32, 0.8),
(71, 18, 36, 1),
(72, 18, 33, 1),
(73, 18, 44, 0.8),
(74, 19, 35, 1),
(75, 19, 43, 0.8),
(76, 19, 18, 1),
(77, 19, 5, 0.8),
(78, 19, 21, 1),
(79, 19, 7, 1),
(80, 19, 11, 0.8),
(81, 19, 10, 1),
(82, 19, 1, 0.8),
(83, 19, 2, 1),
(84, 19, 8, 1),
(85, 19, 12, 1),
(86, 19, 4, 0.8),
(87, 19, 32, 1),
(88, 19, 36, 1),
(89, 20, 35, 1),
(90, 20, 43, 0.8),
(91, 20, 18, 1),
(92, 20, 5, 1),
(93, 20, 21, 0.8),
(94, 20, 7, 1),
(95, 20, 11, 0.8),
(96, 20, 10, 1),
(97, 20, 1, 0.8),
(98, 20, 2, 0.6),
(99, 20, 8, 1),
(100, 20, 12, 1),
(101, 20, 4, 0.8),
(102, 21, 35, 1),
(103, 21, 43, 0.8),
(104, 21, 18, 1),
(105, 21, 5, 1),
(106, 21, 21, 0.8),
(107, 21, 7, 1),
(108, 21, 11, 0.8),
(109, 21, 10, 1),
(110, 21, 1, 0.8),
(111, 21, 2, 0.6),
(112, 21, 8, 1),
(113, 21, 12, 1),
(114, 21, 4, 0.8),
(115, 21, 22, 1),
(116, 22, 35, 1),
(117, 22, 43, 0.8),
(118, 22, 18, 1),
(119, 22, 5, 1),
(120, 22, 21, 0.8),
(121, 22, 7, 1),
(122, 22, 11, 0.8),
(123, 22, 10, 1),
(124, 22, 1, 0.8),
(125, 22, 2, 0.6),
(126, 22, 8, 1),
(127, 22, 12, 1),
(128, 22, 4, 0.8),
(129, 22, 22, 1),
(130, 23, 35, 1),
(131, 23, 32, 1),
(132, 23, 36, 1),
(133, 23, 33, 1),
(134, 23, 34, 1),
(135, 24, 43, 0.8),
(136, 24, 5, 0.8),
(137, 24, 7, 1),
(138, 24, 11, 0.8),
(139, 24, 1, 0.8),
(140, 24, 2, 1),
(141, 24, 8, 1),
(142, 24, 4, 0.6),
(143, 24, 44, 0.8),
(144, 24, 6, 0.8),
(145, 25, 43, 0.8),
(146, 25, 5, 0.8),
(147, 25, 7, 1),
(148, 25, 11, 0.8),
(149, 25, 1, 0.8),
(150, 25, 2, 1),
(151, 25, 8, 1),
(152, 25, 4, 0.6),
(153, 25, 44, 0.8),
(154, 25, 6, 0.8),
(155, 26, 43, 0.8),
(156, 26, 5, 0.8),
(157, 26, 7, 1),
(158, 26, 11, 0.8),
(159, 26, 1, 0.8),
(160, 26, 8, 1),
(161, 26, 4, 0.6),
(162, 26, 44, 0.8),
(163, 26, 6, 0.8),
(164, 27, 43, 0.8),
(165, 27, 5, 0.8),
(166, 27, 7, 1),
(167, 27, 11, 0.8),
(168, 27, 1, 0.8),
(169, 27, 2, 0.8),
(170, 27, 8, 1),
(171, 27, 4, 0.6),
(172, 27, 44, 0.8),
(173, 27, 6, 0.8),
(174, 28, 18, 1),
(175, 28, 22, 1),
(176, 28, 19, 0.8),
(177, 29, 43, 0.8),
(178, 29, 5, 0.8),
(179, 29, 7, 1),
(180, 29, 11, 0.8),
(181, 29, 1, 0.8),
(182, 29, 2, 1),
(183, 29, 8, 1),
(184, 29, 4, 0.6),
(185, 29, 44, 0.8),
(186, 29, 6, 0.8),
(187, 30, 18, 1),
(188, 30, 20, 1),
(189, 30, 19, 0.8),
(190, 31, 18, 1),
(191, 31, 22, 1),
(192, 32, 18, 1),
(193, 32, 22, 1),
(194, 32, 19, 0.8),
(195, 33, 35, 1),
(196, 34, 18, 1),
(197, 34, 20, 1),
(198, 34, 19, 0.6),
(199, 35, 18, 1),
(200, 35, 20, 1),
(201, 35, 19, 0.6),
(202, 36, 18, 1),
(203, 36, 20, 1),
(204, 36, 19, 0.8),
(205, 37, 18, 1),
(206, 37, 20, 1),
(207, 37, 19, 0.8),
(208, 38, 35, 0.8),
(209, 38, 43, 0.8),
(210, 38, 18, 1),
(211, 38, 5, 0.8),
(212, 38, 21, 0.6),
(213, 38, 7, 1),
(214, 38, 11, 0.8),
(215, 38, 10, 0.8),
(216, 38, 1, 0.6),
(217, 38, 2, 0.6),
(218, 38, 8, 1),
(219, 38, 12, 1),
(220, 38, 4, 0.8),
(221, 38, 32, 0.6),
(222, 38, 36, 1),
(223, 38, 33, 1),
(224, 38, 44, 0.8),
(225, 38, 14, 1),
(226, 38, 6, 0.6),
(227, 38, 16, 0.8),
(228, 38, 9, 0.6),
(229, 38, 13, 0.8),
(230, 38, 34, 0.8),
(231, 38, 15, 1),
(232, 38, 22, 1),
(233, 38, 20, 1),
(234, 38, 19, 0.8),
(235, 39, 5, 0.8),
(236, 39, 13, 1),
(237, 40, 1, 0.8),
(238, 40, 2, 0.6),
(239, 40, 8, 1),
(240, 41, 5, 0.8),
(241, 41, 2, 0.8),
(242, 41, 8, 1),
(243, 42, 18, 1),
(244, 42, 22, 1),
(245, 42, 20, 1),
(246, 42, 19, 0.8),
(247, 43, 35, 0.8),
(248, 43, 18, 1),
(249, 43, 22, 1),
(250, 43, 19, 0.8),
(251, 44, 35, 0.8),
(252, 44, 43, 0.8),
(253, 44, 18, 1),
(254, 44, 5, 0.8),
(255, 44, 21, 0.6),
(256, 44, 7, 1),
(257, 44, 11, 0.8),
(258, 44, 10, 0.6),
(259, 44, 1, 0.8),
(260, 44, 2, 0.8),
(261, 44, 8, 1),
(262, 44, 12, 1),
(263, 44, 4, 0.8),
(264, 44, 32, 0.6),
(265, 44, 36, 1),
(266, 44, 33, 1),
(267, 44, 44, 0.8),
(268, 44, 14, 1),
(269, 44, 6, 0.8),
(270, 44, 16, 0.8),
(271, 44, 9, 1),
(272, 44, 13, 0.8),
(273, 44, 34, 0.6),
(274, 44, 15, 1),
(275, 44, 22, 1),
(276, 44, 20, 1),
(277, 44, 19, 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_gejala`
--

CREATE TABLE `detail_gejala` (
  `id_detail_gejala` int(10) NOT NULL,
  `id_gejala` int(10) NOT NULL,
  `nama_detail_gejala` varchar(255) NOT NULL,
  `nilai_detail_gejala` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_gejala`
--

INSERT INTO `detail_gejala` (`id_detail_gejala`, `id_gejala`, `nama_detail_gejala`, `nilai_detail_gejala`) VALUES
(3, 7, 'Sangat yakin', 1),
(7, 2, 'Sedikit Yakin', 0.4),
(8, 2, 'Cukup Yakin', 0.6),
(9, 2, 'Yakin', 0.8),
(10, 2, 'Sangat Yakin', 1),
(11, 5, 'Tidak Tahu', 0.2),
(12, 5, 'Sedikit Yakin', 0.4),
(13, 5, 'Cukup Yakin', 0.6),
(14, 5, 'Yakin', 0.8),
(16, 8, 'Sangat yakin', 1),
(24, 4, 'Tidak Tahu', 0.2),
(25, 4, 'Sedikit Yakin', 0.4),
(26, 4, 'Cukup Yakin', 0.6),
(27, 4, 'Yakin', 0.8),
(28, 4, 'Sangat Yakin', 1),
(29, 9, 'Tidak Tahu', 0.2),
(30, 9, 'Sedikit Yakin', 0.4),
(31, 9, 'Cukup Yakin', 0.6),
(32, 9, 'Yakin', 0.8),
(33, 9, 'Sangat Yakin', 1),
(34, 10, 'Tidak Tahu', 0.2),
(35, 10, 'Sedikit Yakin', 0.4),
(37, 10, 'Cukup Yakin', 0.6),
(39, 10, 'Yakin', 0.8),
(40, 10, 'Sangat Yakin', 1),
(41, 12, 'Sangat yakin', 1),
(42, 14, 'Sangat yakin', 1),
(43, 11, 'Tidak Tahu', 0.2),
(44, 11, 'Sedikit Yakin', 0.4),
(45, 11, 'Cukup Yakin', 0.8),
(47, 11, 'Yakin', 0.8),
(48, 11, 'Sangat Yakin', 1),
(49, 13, 'Tidak tahu', 0.2),
(50, 15, 'Sangat yakin', 1),
(51, 16, 'Tidak Tahu', 0.2),
(52, 16, 'Sedikit Yakin', 0.4),
(53, 16, 'Cukup Yakin', 0.6),
(54, 16, 'Yakin', 0.8),
(55, 16, 'Sangat Yakin', 1),
(56, 6, 'Tidak Tahu', 0.2),
(57, 6, 'Sedikit Yakin', 0.4),
(58, 6, 'Cukup Yakin', 0.6),
(59, 6, 'Yakin', 0.8),
(60, 6, 'Sangat Yakin', 1),
(61, 5, 'Sangat Yakin', 1),
(62, 1, 'Tidak Tahu', 0.2),
(63, 1, 'Sedikit Yakin', 0.4),
(64, 1, 'Cukup Yakin', 0.6),
(65, 1, 'Yakin', 0.8),
(66, 1, 'Sangat Yakin', 1),
(72, 18, 'Sangat yakin', 1),
(73, 19, 'Tidak Tahu', 0.2),
(74, 19, 'Sedikit Yakin', 0.4),
(75, 19, 'Cukup Yakin', 0.6),
(76, 19, 'Yakin', 0.8),
(77, 19, 'Sangat Yakin', 1),
(78, 20, 'Sangat yakin', 1),
(79, 21, 'Tidak Tahu', 0.2),
(80, 21, 'Sedikit Yakin', 0.4),
(81, 21, 'Cukup Yakin', 0.6),
(82, 21, 'Yakin', 0.8),
(83, 21, 'Sangat Yakin', 1),
(84, 22, 'Sangat yakin', 1),
(112, 32, 'Tidak tahu', 0.2),
(113, 33, 'Sangat yakin', 1),
(114, 34, 'Tidak Tahu', 0.2),
(115, 34, 'Sedikit Yakin', 0.4),
(116, 34, 'Cukup Yakin', 0.6),
(117, 34, 'Yakin', 0.8),
(118, 34, 'Sangat Yakin', 1),
(119, 35, 'Sangat yakin', 1),
(120, 36, 'Sangat yakin', 1),
(139, 44, 'Tidak tahu', 0.2),
(140, 44, 'Sedikit yakin', 0.4),
(141, 44, 'Cukup yakin', 0.6),
(142, 44, 'Yakin', 0.8),
(143, 44, 'Sangat yakin', 1),
(144, 43, 'Tidak Tahu', 0.2),
(145, 43, 'Sedikit yakin', 0.4),
(146, 43, 'Cukup yakin', 0.6),
(147, 43, 'Yakin', 0.8),
(148, 43, 'Sangat yakin', 1),
(149, 32, 'Sedikit yakin', 0.4),
(150, 32, 'Cukup yakin', 0.6),
(151, 32, 'Yakin', 0.8),
(152, 32, 'Sangat yakin', 1),
(153, 13, 'Sedikit yakin', 0.4),
(154, 13, 'Cukup yakin', 0.6),
(155, 13, 'Yakin', 0.8),
(156, 13, 'Sangat yakin', 1),
(157, 35, 'Yakin', 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengetahuan`
--

CREATE TABLE `detail_pengetahuan` (
  `id_detail_pengetahuan` int(10) NOT NULL,
  `id_pengetahuan` int(10) NOT NULL,
  `id_gejala` int(10) NOT NULL,
  `status_pengetahuan` enum('AND','OR','THEN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pengetahuan`
--

INSERT INTO `detail_pengetahuan` (`id_detail_pengetahuan`, `id_pengetahuan`, `id_gejala`, `status_pengetahuan`) VALUES
(13, 1, 2, 'AND'),
(14, 1, 5, 'AND'),
(15, 1, 8, 'AND'),
(23, 4, 2, 'AND'),
(24, 5, 2, 'AND'),
(26, 5, 5, 'AND'),
(27, 6, 1, 'AND'),
(28, 6, 4, 'AND'),
(30, 7, 9, 'THEN'),
(32, 9, 9, 'AND'),
(33, 9, 10, 'THEN'),
(34, 10, 11, 'AND'),
(35, 10, 44, 'THEN'),
(37, 11, 2, 'AND'),
(38, 11, 1, 'AND'),
(39, 11, 8, 'THEN'),
(60, 16, 5, 'AND'),
(61, 16, 13, 'THEN'),
(76, 18, 13, 'THEN'),
(78, 1, 1, 'AND'),
(79, 1, 4, 'AND'),
(80, 1, 6, 'AND'),
(81, 1, 43, 'AND'),
(82, 1, 7, 'THEN'),
(83, 4, 4, 'AND'),
(84, 4, 5, 'AND'),
(85, 4, 7, 'AND'),
(86, 4, 43, 'THEN'),
(87, 5, 8, 'THEN'),
(92, 6, 5, 'AND'),
(93, 6, 6, 'AND'),
(94, 6, 7, 'AND'),
(95, 6, 8, 'AND'),
(96, 6, 43, 'THEN'),
(97, 19, 14, 'AND'),
(98, 19, 15, 'AND'),
(99, 19, 16, 'THEN'),
(100, 20, 14, 'THEN'),
(101, 21, 14, 'AND'),
(102, 21, 15, 'THEN'),
(103, 22, 14, 'AND'),
(104, 22, 16, 'THEN'),
(105, 23, 18, 'AND'),
(106, 23, 19, 'AND'),
(107, 23, 20, 'AND'),
(108, 23, 21, 'THEN'),
(109, 24, 18, 'AND'),
(110, 24, 20, 'AND'),
(111, 24, 21, 'THEN'),
(112, 25, 18, 'AND'),
(113, 25, 20, 'AND'),
(114, 25, 19, 'THEN'),
(115, 26, 18, 'AND'),
(116, 26, 19, 'AND'),
(117, 26, 22, 'THEN'),
(118, 27, 18, 'AND'),
(119, 27, 22, 'THEN'),
(120, 28, 32, 'AND'),
(121, 28, 33, 'AND'),
(122, 28, 34, 'AND'),
(123, 28, 35, 'AND'),
(124, 28, 36, 'THEN'),
(125, 30, 32, 'AND'),
(126, 30, 33, 'AND'),
(127, 30, 35, 'AND'),
(128, 30, 36, 'THEN'),
(129, 31, 33, 'AND'),
(130, 31, 34, 'AND'),
(131, 31, 35, 'THEN');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(50) NOT NULL,
  `id_pasien` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `tgl_diagnosa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_pasien`, `id_user`, `tgl_diagnosa`) VALUES
(1, 1, 5, '2019-11-08'),
(2, 2, 5, '2019-11-08'),
(3, 4, 5, '2019-11-08'),
(4, 4, 5, '2019-11-08'),
(5, 5, 5, '2019-11-08'),
(6, 4, 5, '2019-11-11'),
(7, 1, 5, '2019-11-25'),
(8, 1, 5, '2019-11-25'),
(9, 5, 5, '2019-11-25'),
(10, 5, 5, '2019-11-25'),
(11, 8, 5, '2019-11-27'),
(12, 8, 5, '2019-11-27'),
(13, 8, 5, '2019-11-27'),
(14, 8, 5, '2019-11-27'),
(15, 8, 5, '2019-11-27'),
(16, 8, 5, '2019-11-27'),
(17, 8, 5, '2019-11-27'),
(18, 8, 5, '2019-12-06'),
(19, 8, 5, '2019-12-06'),
(20, 8, 5, '2019-12-06'),
(21, 8, 5, '2019-12-06'),
(22, 8, 5, '2019-12-06'),
(23, 8, 5, '2019-12-06'),
(24, 8, 5, '2019-12-06'),
(25, 8, 5, '2019-12-06'),
(26, 8, 5, '2019-12-06'),
(27, 8, 5, '2019-12-06'),
(28, 8, 5, '2019-12-06'),
(29, 8, 5, '2019-12-08'),
(30, 8, 5, '2019-12-08'),
(31, 8, 5, '2019-12-08'),
(32, 8, 5, '2019-12-10'),
(33, 8, 5, '2019-12-10'),
(34, 8, 5, '2019-12-10'),
(35, 8, 5, '2019-12-10'),
(36, 8, 5, '2019-12-11'),
(37, 8, 5, '2019-12-11'),
(38, 8, 5, '2019-12-11'),
(39, 8, 5, '2019-12-17'),
(40, 4, 5, '2019-12-17'),
(41, 1, 5, '2019-12-17'),
(42, 8, 5, '2019-12-26'),
(43, 9, 5, '2020-01-02'),
(44, 9, 5, '2020-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(10) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Gusi bengkak'),
(2, 'Gusi merah'),
(4, 'Jarak yang timbul diantara gigi'),
(5, 'Bau Mulut'),
(6, 'Rasa tidak enak pada mulut'),
(7, 'Gigi goyah'),
(8, 'Gusi mudah berdarah'),
(9, 'Terdapat bercak putih atau coklat pada gigi'),
(10, 'Gigi terasa linu saat makan dingin/manis'),
(11, 'Gigi sakit'),
(12, 'Infeksi pembengkakan'),
(13, 'Terdapat lapisan berwarna kuning atau coklat pada garis gigi'),
(14, 'Permukaan lidah berwarna merah muda keputih-putihan yang menyerupai gambaran pulau-pulau'),
(15, 'Terjadi perubahan lokasi, ukuran, dan bentuk pola'),
(16, 'Rasa tidak nyaman, sakit, dan sensasi terbakar'),
(18, 'Adanya ulkus berbentuk bulat dan jelas'),
(19, 'Ulkus terasa nyeri'),
(20, 'Ulkus dangkal dengan diameter 3-6mm'),
(21, 'Dikelilingi oleh daerah yang sedikit kemerahan'),
(22, 'Ulkus berdiameter lebih dari 1 cm'),
(32, 'Kemerahan terletak diujung bibir'),
(33, 'Kulit melepuh'),
(34, 'Terdapat luka terbuka pada jaringan kulit'),
(35, 'Adanya cairan darah atau serum yang mengering'),
(36, 'Kulit lecet pada ujung bibir'),
(43, 'Adanya karang gigi'),
(44, 'Nyeri secara spontan');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(50) NOT NULL,
  `id_diagnosa` int(50) NOT NULL,
  `id_penyakit` int(50) NOT NULL,
  `nilai_hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_diagnosa`, `id_penyakit`, `nilai_hasil`) VALUES
(1, 1, 7, 0.92),
(2, 2, 2, 0.6),
(3, 4, 1, 0.48),
(4, 5, 1, 0.930778),
(5, 6, 1, 0.930778),
(6, 12, 13, 0.64),
(7, 12, 13, 0.64),
(8, 15, 13, 0.9712),
(9, 19, 4, 1),
(10, 23, 4, 1),
(11, 26, 1, 0.48),
(12, 26, 6, 0.48),
(13, 27, 1, 0.943757),
(14, 28, 10, 0.928),
(15, 29, 1, 0.943757),
(16, 29, 2, 0.8),
(17, 30, 9, 0.64),
(18, 31, 10, 0.8),
(19, 32, 10, 0.928),
(20, 34, 9, 0.48),
(21, 35, 9, 0.48),
(22, 36, 9, 0.64),
(23, 37, 9, 0.64),
(24, 39, 7, 1),
(25, 40, 2, 0.6),
(26, 41, 1, 0.48),
(27, 42, 10, 0.928),
(28, 43, 10, 0.928),
(29, 44, 8, 1),
(30, 44, 4, 1),
(31, 44, 9, 1),
(32, 44, 10, 1),
(33, 44, 13, 1),
(34, 44, 1, 0.986522),
(35, 44, 7, 0.986522),
(36, 44, 2, 0.8),
(37, 44, 5, 0.6),
(38, 44, 6, 0.48);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `nomer_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin_pasien` enum('Pria','Wanita') NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `telp_pasien` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `alergi_pasien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nomer_pasien`, `nama_pasien`, `jenis_kelamin_pasien`, `tgl_lahir_pasien`, `telp_pasien`, `alamat`, `alergi_pasien`) VALUES
(1, 'P001', 'Sania Dewi', 'Wanita', '2000-05-03', '089667196487', 'Jalan Nusantara, Tritih Kulon', ''),
(2, 'P002', 'Dhunung Cahyandaru', 'Pria', '2000-12-02', '085641374556', 'Perumahan Gunung Simping', ''),
(4, 'P004', 'Rafikha Nur Fauziya Yahya', 'Wanita', '1997-03-13', '085726258151', 'Jalan Merapi', ''),
(5, 'P005', 'Putri', 'Wanita', '1998-11-11', '08889678456', 'Jalan Ahmad Yani', ''),
(7, 'P006', 'Anindita Ayuningtyas', 'Wanita', '1997-11-11', '081321096785', 'Jalan Nusantara ', ''),
(8, 'P007', 'Pipiet Novita Dwi Suryani', 'Wanita', '1997-11-23', '081321096785', 'Jalan Nusantara', ''),
(9, 'P008', 'dewi', 'Wanita', '1997-11-11', '0888867657', 'kaliurang', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `nama_pengetahuan` varchar(255) NOT NULL,
  `cf_pengetahuan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `id_penyakit`, `nama_pengetahuan`, `cf_pengetahuan`) VALUES
(1, 1, 'R1', 1),
(4, 1, 'R2', 0.8),
(5, 1, 'R3', 0.6),
(6, 1, 'R4', 0.8),
(7, 4, 'R5', 1),
(9, 5, 'R6', 1),
(10, 6, 'R7', 0.6),
(11, 2, 'R8', 1),
(16, 7, 'R9', 1),
(18, 7, 'R10', 1),
(19, 8, 'R11', 1),
(20, 8, 'R12', 1),
(21, 8, 'R13', 0.8),
(22, 8, 'R14', 0.8),
(23, 9, 'R15', 0.8),
(24, 9, 'R16', 0.6),
(25, 9, 'R17', 0.8),
(26, 10, 'R18', 0.8),
(27, 10, 'R19', 0.8),
(28, 13, 'R20', 1),
(30, 13, 'R21', 1),
(31, 13, 'R22', 1),
(32, 2, 'R23', 0.9);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `definisi_penyakit` text NOT NULL,
  `solusi_penyakit` text NOT NULL,
  `pencegahan_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `definisi_penyakit`, `solusi_penyakit`, `pencegahan_penyakit`) VALUES
(1, 'Periodontitis', 'Periodontitis merupakan gangguan yang terjadi pada jaringan penyangga gigi yang ditandai dengan gigi goyah.', 'Saran solusi yaitu dengan melakukan scalling dan root planing.', 'Saran pencegahan yaitu menjaga kebersihan gigi dan mulut dengan baik secara konsisten sepeti menyikat gigi secara teratur.\r\nMelakukan pemeriksaan gigi secara rutin setiap 6 bulan sekali.'),
(2, 'Gingivitis', 'Gigivitis atau peradangan gusi yang diakibatkan karena adanya debris atau kalkulus.', ' Melakukan pembersihan karang gig (scalling).', 'Saran pencegahan yaitu denga menjaga kebersihan gigi dan mulut dengan baik secara konsisten seperti menyikat gigi secara teratur. \r\nMelakukan pemeriksaan gigi secara rutin setiap 6 bulan sekali.'),
(4, 'Karies Email', 'Gigi berlubang hanya mengenai lapisan gigi terluar.', 'Aplikasi topikal flour.', 'Menjaga kebersihan gigi dan melakukan pemeriksaan rutin setiap 6 bulan sekali.'),
(5, 'Karies Dentin', 'Gigi berlubang yang sudah mengenai dentin, tetapi belum melebihi setengah dentin.', 'Penambalan', 'Menjaga kebersihan gigi dan melakukan pemeriksaan rutin setiap 6 bulan sekali.'),
(6, 'Karies Pulpa', 'Gigi berlubang yang sudah mengenai lebih dari setengah dentin dan terkadang sudah mengenai jaringan pulpa.', 'Penambalan dan Pulpa capping.', 'Menjaga kebersihan gigi dan melakukan pemeriksaan rutin setiap 6 bulan sekali.'),
(7, 'Kalkulus (Karang Gigi)', 'Kalkulus adalah kondisi dimana adanya lapisan kotor berwarna kuning atau kecoklatan pada garis gusi. Karang gigi disebabkan karena adanya penumpukan sisa makanan pada garis gusi yang tidak mendapatkan penanganan.', 'Melakukan scalling gigi.', 'Saran pencegahan yaitu menggunakan pembersih mulut anti bakteri.\r\nMelakukan pemerikasaan dan perawatan gigi 6 bulan sekali. \r\nMakan makanan dengan gizi yang tidak seimbang.'),
(8, 'Geograpic Tongue', 'Geograpic tongue adalah kondisi dimana kelainan pada permukaan lidah ditutupi oleh papila tipis dan permukaan lidah berwarna putih dengan pola yang tidak teratur.', 'Tidak ada saran perawatan.', 'Dianjurkan untuk mengurangi konsumsi makanan-makanan yang pedas atau sama. \r\nMakan atau minum yang panas serta berakohol dan tembakau.'),
(9, 'Ulkus Maltosa Minor', 'Ulkus maltosa minor merupakan bentuk sariawan yang sering terjadi dengan diameter 3-6 mm. Tertutup oleh membran berwarna putih kekuningan, dan dikelilingi oleh kelim merah yang tipis.', 'Saran solusinya berupa minum vitamin c', 'Saran pencegahannya berupa menjaga kesehatan dan keberihan gigi dan mulut. Melakukan pengecekan secara rutin gigi dan mulut setiap 6 bulan sekali'),
(10, 'Ulkus Maltosa Mayor', 'Ulkus maltosa mayor memiliki ciri khas berupa ulkus yang dalam dan nyeri, berdiameter 1-2 cm, bertahan hingga 3-6 minggu, dan meinggalkan jaringan parut.', 'Minum vitamin c.', 'Saran peceganan yaitu menjaga kebersihan dan kesehatan mulut. Melakukan pemeriksaan rutin ke dokter gigi.'),
(13, 'Cheilitis Angularis', 'Kelainan yang umumnya terjadi disudut mulut ditandai dengan rasa panas seperti terbakar dan rasa kering dapat terjadi. ', 'Saran solusinya yaitu memperbaiki dimensi vertikal /(untuk gigi palus), steroid topikal, dan salep anti jamur.', 'Saran pencegahan yaitu menjaga kesehatan dan kebersihan mulut.\r\nMelakukan pemeriksaan gigi secara rutin setiap6 bulan sekali');

-- --------------------------------------------------------

--
-- Table structure for table `threshold`
--

CREATE TABLE `threshold` (
  `id_threshold` int(11) NOT NULL,
  `nilai_threshold` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threshold`
--

INSERT INTO `threshold` (`id_threshold`, `nilai_threshold`) VALUES
(1, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `gambar_user` varchar(255) NOT NULL,
  `level_user` enum('Dokter','Perawat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `gambar_user`, `level_user`) VALUES
(1, 'drg. Maya Fitria SP', 'maya', '13e51919bdfbd951abaf8617e0f7cde3822ffd97', 'dokter1.jpg', 'Dokter'),
(5, 'Tin Yuni Rahayu', 'rahayu', 'd002a5f81c3d50e92b4d148de25eb86eda45b0e8', 'user1.png', 'Perawat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_diagnosa`
--
ALTER TABLE `detail_diagnosa`
  ADD PRIMARY KEY (`id_detail_diagnosa`),
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `detail_gejala`
--
ALTER TABLE `detail_gejala`
  ADD PRIMARY KEY (`id_detail_gejala`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `detail_pengetahuan`
--
ALTER TABLE `detail_pengetahuan`
  ADD PRIMARY KEY (`id_detail_pengetahuan`),
  ADD KEY `id_pengetahuan` (`id_pengetahuan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `threshold`
--
ALTER TABLE `threshold`
  ADD PRIMARY KEY (`id_threshold`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_diagnosa`
--
ALTER TABLE `detail_diagnosa`
  MODIFY `id_detail_diagnosa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `detail_gejala`
--
ALTER TABLE `detail_gejala`
  MODIFY `id_detail_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `detail_pengetahuan`
--
ALTER TABLE `detail_pengetahuan`
  MODIFY `id_detail_pengetahuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `threshold`
--
ALTER TABLE `threshold`
  MODIFY `id_threshold` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_diagnosa`
--
ALTER TABLE `detail_diagnosa`
  ADD CONSTRAINT `detail_diagnosa_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_diagnosa_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_gejala`
--
ALTER TABLE `detail_gejala`
  ADD CONSTRAINT `detail_gejala_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pengetahuan`
--
ALTER TABLE `detail_pengetahuan`
  ADD CONSTRAINT `detail_pengetahuan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pengetahuan_ibfk_2` FOREIGN KEY (`id_pengetahuan`) REFERENCES `pengetahuan` (`id_pengetahuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnosa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `pengetahuan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
