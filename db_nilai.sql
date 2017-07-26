-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 12:00 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru_mapel` varchar(5) NOT NULL,
  `nama_guru_mapel` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_jenis_kelamin` varchar(5) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru_mapel`, `nama_guru_mapel`, `alamat`, `id_jenis_kelamin`, `kode_mapel`) VALUES
('1001', 'Budi Susanto Aku', 'Pekalongan', 'L', 'B01'),
('1002', 'Maisaroh Mantap', 'Batang', 'L', 'IPS'),
('1003', 'Mainaroh', 'Pekalongan', 'P', 'B02'),
('1004', 'Budi Maimunah', 'Pekalongan', 'L', 'AGM'),
('1005', 'Sri Slamet', 'Pekalongan', 'L', 'B03');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` varchar(5) NOT NULL,
  `nama_jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `nama_jenis_kelamin`) VALUES
('L', 'Laki - Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
('07.A', 'VII A'),
('07.B', 'VII B'),
('07.C', 'VII C'),
('08.A', 'VIII A'),
('08.B', 'VIII B'),
('08.C', 'VIII C'),
('09.A', 'IX A'),
('09.B', 'IX B'),
('09.C', 'IX C');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `nama_keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id_keterangan`, `nama_keterangan`) VALUES
(1, 'Staff Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
('AGM', 'Agama'),
('B01', 'Bahasa Indonesia'),
('B02', 'Bahasa Inggris'),
('B03', 'Bahasa Jawa'),
('FSK', 'Fisika'),
('IPS', 'IPS'),
('MTK', 'Matematika'),
('OSN', 'Olah Raga'),
('SBD', 'Seni Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_jenis_kelamin` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `id_jenis_kelamin`, `id_kelas`) VALUES
(1505, 'Hery Mandra Guna Cilaka', 'Pekalongan', '2017-04-04', 'Kalisalak Batang', 'L', '09.C'),
(1506, 'Gunawan ', 'Pekalongan', '2017-04-11', 'Lor, Pekalongan', 'L', '08.A'),
(1507, 'Eko Budi', 'Pekalongan', '1997-01-01', 'Pekalongan', 'L', '08.B'),
(1508, 'Budi Eko', 'Batang', '1997-10-12', 'Pekalongan', 'L', '08.C'),
(1509, 'Maimunah', 'Batang', '2017-04-04', 'Batang', 'P', '07.A'),
(1510, 'Munaroh', 'Pekalongan', '2017-04-04', 'Batang', 'P', '07.C'),
(1511, 'Oke Jek', 'Pekalongan', '2012-02-12', 'Pekalongan', 'L', '09.A'),
(1512, 'Saroh', 'Batang', '1997-07-11', 'Batang', 'P', '09.B'),
(1513, 'Oke Mania', 'Pekalongan', '1997-08-18', 'Batang', 'P', '07.A'),
(1514, 'Saroh', 'Batang', '1997-09-19', 'Batang', 'P', '07.A'),
(1515, 'Mantap Jiwa', 'Batang', '1997-02-12', 'Batang', 'L', '07.A');

-- --------------------------------------------------------

--
-- Table structure for table `tata_usaha`
--

CREATE TABLE `tata_usaha` (
  `id_tata_usaha` int(11) NOT NULL,
  `nama_tata_usaha` varchar(45) NOT NULL,
  `id_jenis_kelamin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tata_usaha`
--

INSERT INTO `tata_usaha` (`id_tata_usaha`, `nama_tata_usaha`, `id_jenis_kelamin`) VALUES
(1, 'Supranoto', 'L'),
(2, 'Dewi Sri', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_tata_usaha` int(11) NOT NULL,
  `id_keterangan` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_tata_usaha`, `id_keterangan`, `username`, `password`) VALUES
(104, 2, 1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru_mapel`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  ADD KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_jenis_kalamin` (`id_jenis_kelamin`);

--
-- Indexes for table `tata_usaha`
--
ALTER TABLE `tata_usaha`
  ADD PRIMARY KEY (`id_tata_usaha`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tata_usaha` (`id_tata_usaha`),
  ADD KEY `id_keterangan` (`id_keterangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tata_usaha`
--
ALTER TABLE `tata_usaha`
  MODIFY `id_tata_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`);

--
-- Constraints for table `tata_usaha`
--
ALTER TABLE `tata_usaha`
  ADD CONSTRAINT `tata_usaha_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_tata_usaha`) REFERENCES `tata_usaha` (`id_tata_usaha`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id_keterangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
