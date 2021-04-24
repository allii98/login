-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 03:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sso`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `user_id` int(5) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`user_id`, `user_nama`, `username`, `user_pass`, `level`) VALUES
(2, 'admin', 'admin', '$2a$08$WVvmPpx8he75DF2k3V1xPOaJJnkEOqPzLtNAxI4PmbgNDNCqU/Oq2', '1'),
(3, 'Ali', 'ali', '$2a$08$8vVOlH0b6PCtik9BqWmQeOxeJ.yDhc9/I1ktclk1x.hTx0CEuVMlW', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_ho`
--

CREATE TABLE `user_ho` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `akses` enum('user_g','user_a') NOT NULL,
  `last_seen` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ho`
--

INSERT INTO `user_ho` (`id_user`, `username`, `nama`, `email`, `password`, `akses`, `last_seen`) VALUES
(1, '', 'ABDUL ROHMAN', '', '0', 'user_g', '0000-00-00 00:00:00'),
(2, '', 'ADI TEGUH PRABOWO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(3, '', 'ADI WINOTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(4, '', 'AGIL PRASETYA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(5, '', 'AHMAD ANDI KURNIAWAN', '', '0', 'user_g', '0000-00-00 00:00:00'),
(6, '', 'ANANTHA SETYA PRADHANA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(7, '', 'ANGGUN SOEHARTINI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(8, '', 'APOLOS ANTHONIUS', '', '0', 'user_g', '0000-00-00 00:00:00'),
(9, '', 'AQMARINA TASYA RUNIDHA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(10, '', 'ARI SUGIANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(11, '', 'AYU DIAH DWI ASTUTI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(12, '', 'BAGUS MULYOHANANTO WIDODO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(13, '', 'BAGUS NUGRAHA OKY WICAKSANA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(14, '', 'BAMBANG EK', '', '0', 'user_g', '0000-00-00 00:00:00'),
(15, '', 'BILAL DEWANTARA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(16, '', 'BUDIYANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(17, '', 'DAVID MARDIANSYAH WIJAYA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(18, '', 'DEBORA LAMOUR NAINGGOLAN', '', '0', 'user_g', '0000-00-00 00:00:00'),
(20, '', 'DERIT ANOVA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(22, '', 'ELDA MAULIDIAWATI PUTRI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(23, '', 'ELMANDA DENTIRA ZAHRA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(25, '', 'FARADILA NUR AGUSTINA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(28, '', 'FERDINANDUS B. PRAWOTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(29, '', 'FERRY APRIYANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(30, '', 'FIRMANSYAH', '', '0', 'user_g', '0000-00-00 00:00:00'),
(31, '', 'HASBI ABDILLAH', '', '0', 'user_g', '0000-00-00 00:00:00'),
(32, '', 'HENRY DELIANTO GIRSANG', '', '0', 'user_g', '0000-00-00 00:00:00'),
(33, '', 'HERU AGUS SUSILO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(35, '', 'IRVAN WIJAYA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(36, '', 'JIMMY HERMANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(37, '', 'JOSIAS HARTONO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(39, '', 'KIAGUS MOH. ARBAKAH', '', '0', 'user_g', '0000-00-00 00:00:00'),
(40, '', 'LIA RAHMAWATI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(41, '', 'LIDIA SUSANTI SILITONGA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(42, '', 'LIDYA KRISNA ANDANI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(44, '', 'M. IKBAL SUBEKTI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(45, '', 'MERRY', '', '0', 'user_g', '0000-00-00 00:00:00'),
(47, '', 'MUHAMMAD ARIFIN', '', '0', 'user_g', '0000-00-00 00:00:00'),
(48, '', 'MUHAMMAD JALAL', '', '0', 'user_g', '0000-00-00 00:00:00'),
(49, '', 'NELVIRA GITHA PUTRI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(50, '', 'NIKO SETIAWAN', '', '0', 'user_g', '0000-00-00 00:00:00'),
(52, '', 'PASKAH PRICILLIA T.', '', '0', 'user_g', '0000-00-00 00:00:00'),
(53, '', 'PERMANA ZAINAL', '', '0', 'user_g', '0000-00-00 00:00:00'),
(54, '', 'PREDIANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(55, '', 'PUJI WALUYO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(56, '', 'PUTU SUNITYA CANDRA DEWI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(57, '', 'REYMOND YULIANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(58, '', 'RIAN ANDRIANA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(59, '', 'RIBUT BUDIYONO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(60, '', 'ROBERT', '', '0', 'user_g', '0000-00-00 00:00:00'),
(61, '', 'ROBY TRISNA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(63, '', 'SARIYANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(64, '', 'SITI MARIJANKA PUTRI ANDINI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(65, '', 'SRI WILOPO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(66, '', 'SUGIANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(67, '', 'SUGIYO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(68, '', 'SUNARIYADI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(69, '', 'SYAWALUDDIN', '', '0', 'user_g', '0000-00-00 00:00:00'),
(70, '', 'TATANG SUPRAYOGI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(71, '', 'TEDY PARONTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(72, '', 'TEGUH TRIONO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(73, '', 'TEGUH WIBAWA SUHENDRA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(74, '', 'TRILINDAH SARI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(75, '', 'VINDI ARDIANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(76, '', 'WAHYU AKBAR ARYANDI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(77, '', 'WINDY ARIEWIBOWO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(78, '', 'YOGA SAPTA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(79, '', 'YUDI SUBONO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(80, '', 'YUDI SYAHPUTRA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(81, '', 'SUSANTO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(82, 'admin_hrd', 'Admin HRD', 'adminhrd@admin.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user_a', '2021-04-21 15:50:22'),
(83, '', 'NABILA ANINDITA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(86, '', 'MUHAMAD GENSZA VERNANDO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(87, '', 'ALI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(88, '', 'IMAN SUTEJO', '', '0', 'user_g', '0000-00-00 00:00:00'),
(89, '', 'MUHAMAD SUBHAN ZAKARIA', '', '0', 'user_g', '0000-00-00 00:00:00'),
(90, '', 'ISWAHYUDI', '', '0', 'user_g', '0000-00-00 00:00:00'),
(91, '', 'SILVI FATIN NABILAH', '', '', 'user_g', '0000-00-00 00:00:00'),
(92, '', 'ISMIYA PEBRI YANI', '', '', 'user_g', '0000-00-00 00:00:00'),
(93, '', 'ENDAH SULISTIYANI', '', '', 'user_g', '0000-00-00 00:00:00'),
(94, '', 'IDRIS ABDUL AZIS', '', '', 'user_g', '0000-00-00 00:00:00'),
(95, '', 'MUHAMMAD ALVI BISYRI', '', '', 'user_g', '0000-00-00 00:00:00'),
(96, '', 'YUFNI ARDIANI', '', '', 'user_g', '0000-00-00 00:00:00'),
(97, '', 'ANANDA AQILLA SABRINA', '', '', 'user_g', '0000-00-00 00:00:00'),
(98, '', 'MUHAMMAD IMAM HAKIKI', '', '', 'user_g', '0000-00-00 00:00:00'),
(99, '', 'RAHMA YUSNI OKSAFIA', '', '', 'user_g', '0000-00-00 00:00:00'),
(100, '', 'MUHAMMAD HASBI', '', '', 'user_g', '0000-00-00 00:00:00'),
(101, '', 'ERLANGGA RAMADUNI PRAMUDIA', '', '', 'user_g', '0000-00-00 00:00:00'),
(103, '', 'SUNU TRI CAHYO', '', '', 'user_g', '0000-00-00 00:00:00'),
(104, '', 'SAIFUL HUDA', '', '', 'user_g', '0000-00-00 00:00:00'),
(105, '', 'RESA JUNITA ANWAR', '', '', 'user_g', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_ho`
--
ALTER TABLE `user_ho`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_ho`
--
ALTER TABLE `user_ho`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
