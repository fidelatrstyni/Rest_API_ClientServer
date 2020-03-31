-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 01:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `no_kamar` varchar(10) NOT NULL,
  `type` enum('king','double','single','queen') NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `no_kamar`, `type`, `harga`) VALUES
(1, 'A 01', 'king', 300000),
(2, 'A 02', 'king', 300000),
(3, 'A 03', 'king', 300000),
(4, 'A 04', 'king', 300000),
(5, 'A 05', 'king', 300000),
(6, 'B 01', 'double', 400000),
(7, 'B 02', 'double', 400000),
(8, 'B 03', 'double', 400000),
(9, 'B 04', 'double', 400000),
(10, 'B 05', 'double', 400000),
(11, 'C 01', 'single', 200000),
(12, 'C 02', 'single', 200000),
(13, 'C 03', 'single', 200000),
(14, 'C 04', 'single', 200000),
(15, 'C 05', 'single', 200000),
(16, 'D 01', 'queen', 600000),
(17, 'D 02', 'queen', 600000),
(18, 'D 03', 'queen', 600000),
(19, 'D 04', 'queen', 600000),
(20, 'D 05', 'queen', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `alamat`, `tlp`, `ktp`) VALUES
(1, 'Ahmad Zahmaludin', 'jln merjosari no 12, Kota Bandung', '08182662125', '1111882631267128'),
(2, 'Endah Permatasari', 'jln apel no 19, Kota Surabaya', '08123445121', '1110222656652187'),
(3, 'Adhelia', 'jl. sejahtera no 01, Kota Karawang', '03124567892', '98712111121221127'),
(4, 'Fahruz Gozali', 'jln mangga no 12', '08111288921', '1111228321628627'),
(5, 'Mawar Indah', 'jln anggrek no 28', '08922126782', '1112876218278127'),
(6, 'Rizal Ahmad', 'jln. Anggrek No 12', '08266541311', '9991113412315678'),
(7, 'aku', 'jln mawar no 12', '08911244121', '91212781278127'),
(8, 'Stackoverlow', 'jl. maju terus', '081002009999', '1111887624562221'),
(13, 'Santi', 'jl. baru buat', '089112768212', '1121887162218781'),
(15, 'Budi Doremi', 'jl. baru buat', '089112768212', '1121887162218781');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_pengunjung`, `id_kamar`, `tgl_masuk`, `tgl_keluar`) VALUES
(1, 1, 1, '2020-02-28', '2020-03-01'),
(3, 2, 4, '2020-03-01', '2020-03-02'),
(4, 3, 6, '2020-03-01', '2020-03-03'),
(5, 4, 5, '2020-03-01', '2020-03-03'),
(6, 5, 19, '2020-03-01', '2020-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `tlp`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '081119999112', 'admin', 'on'),
(2, 'Ahmad Zahmaludin', 'Zahmaludin', 'Zahmaludin1234', '08182662125', 'user', 'on'),
(3, 'Endah Permatasari', 'Endah', 'EndahP123', '08123445121', 'user', 'on'),
(4, 'Adhelia', 'Adhelia', 'Adhelia99', '03124567892', 'user', 'on'),
(5, 'Fahruz Gozali', 'Fahruz', 'Fahruz24', '08111288921', 'user', 'on'),
(6, 'Mawar Indah', 'Mawar', 'Indah26', '08922126782', 'user', 'off'),
(7, 'Rizal Ahmad', 'RizalAhmad', 'rizal990', '08266541311', 'user', 'on'),
(8, 'aku', 'aku', 'aku', '08911244121', 'user', 'on'),
(9, 'Stackoverlow', 'stackoverlow', 'stackoverlow123', '081002009999', 'user', 'on'),
(19, 'Santi', 'santi123', 'santi123', '089112768212', 'user', 'on'),
(21, 'Budi Doremi', 'budi', 'budi123', '089112768212', 'user', 'on'),
(22, 'Antok', 'antok', 'antok123', '089112768212', 'user', 'on'),
(23, 'Antok', 'antok', 'antok123', '089112768212', 'user', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `kamar_fk` (`id_kamar`),
  ADD KEY `pengunjung_fk` (`id_pengunjung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `kamar_fk` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `pengunjung_fk` FOREIGN KEY (`id_pengunjung`) REFERENCES `pengunjung` (`id_pengunjung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
